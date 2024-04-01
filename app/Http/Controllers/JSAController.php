<?php

namespace App\Http\Controllers;

use App\Models\JSA;
use App\Models\PTW;
use App\Models\Form;
use App\Models\JSAImpact;
use App\Models\JSAWorker;
use App\Models\JSAWorkTool;
use App\Models\JSAJSAWorker;
use App\Models\JSAWorkStage;
use Illuminate\Http\Request;
use App\Models\JSAJSAWorkTool;
use App\Models\JSAPersonGroup;
use App\Models\JSAJSAWorkStage;
use App\Models\JSASafetyPermit;
use Barryvdh\DomPDF\Facade\Pdf;
use App\Http\Requests\JSARequest;
use App\Models\JSAJSASafetyPermit;
use Illuminate\Support\Facades\Session;
use App\Models\JSAK3LAppealOfRegulation;

class JSAController extends Controller
{
    public function index()
    {
        $jsas = JSA::with([
            'jsa_person_group',
            'jsa_jsa_safety_permit.jsa_safety_permit',
            'jsa_jsa_worker.jsa_worker',
            'jsa_jsa_work_stage.jsa_work_stage',
            'jsa_jsa_work_tool.jsa_work_tool'
        ])->get();

        return view('jsas.index', ['jsas' => $jsas]);
    }

    public function create()
    {
        $person_groups = JSAPersonGroup::all();
        $safety_permits = JSASafetyPermit::all();
        $workers = JSAWorker::all();
        $work_tools = JSAWorkTool::all();
        $k3l_appeal_of_regulations = JSAK3LAppealOfRegulation::all();
        $work_stages = JSAWorkStage::all();

        return view('jsas.create', ['person_groups' => $person_groups, 'safety_permits' => $safety_permits, 'workers' => $workers, 'work_tools' => $work_tools, 'k3l_appeal_of_regulations' => $k3l_appeal_of_regulations, 'work_stages' => $work_stages]);
    }

    public function store(JSARequest $request)
    {
        $collection = collect($request->all());

        $to_jsa = $collection->except(['_token', 'jsa_safety_permit_uuid', 'jsa_worker_uuid', 'jsa_work_tool_uuid', 'jsa_work_stage_uuid'])->toArray();

        try {
            JSA::create($to_jsa);

            $last_jsa_uuid = JSA::latest()->first();

            foreach ($request->jsa_safety_permit_uuid as $key => $value) {
                JSAJSASafetyPermit::create([
                    'jsa_uuid' => $last_jsa_uuid->uuid,
                    'jsa_safety_permit_uuid' => $value,
                ]);
            }

            foreach ($request->jsa_worker_uuid as $key => $value) {
                JSAJSAWorker::create([
                    'jsa_uuid' => $last_jsa_uuid->uuid,
                    'jsa_worker_uuid' => $value,
                ]);
            }

            foreach ($request->jsa_work_stage_uuid as $key => $value) {
                JSAJSAWorkStage::create([
                    'jsa_uuid' => $last_jsa_uuid->uuid,
                    'jsa_work_stage_uuid' => $value,
                ]);
            }

            foreach ($request->jsa_work_tool_uuid as $key => $value) {
                JSAJSAWorkTool::create([
                    'jsa_uuid' => $last_jsa_uuid->uuid,
                    'jsa_work_tool_uuid' => $value,
                ]);
            }

            Session::flash('succMessage', 'JSA berhasil dibuat!');
        } catch (\Throwable $th) {
            Session::flash('errMessage', 'JSA gagal dibuat!');
        }

        return redirect('/jsas');
    }

    public function edit($uuid)
    {
        $jsa = JSA::with(['jsa_person_group', 'jsa_jsa_safety_permit.jsa_safety_permit', 'jsa_jsa_worker.jsa_worker', 'jsa_jsa_work_stage.jsa_work_stage', 'jsa_jsa_work_tool.jsa_work_tool'])->findOrFail($uuid);

        $person_groups = JSAPersonGroup::all();
        $safety_permits = JSASafetyPermit::all();
        $workers = JSAWorker::all();
        $work_tools = JSAWorkTool::all();
        $k3l_appeal_of_regulations = JSAK3LAppealOfRegulation::all();
        $work_stages = JSAWorkStage::all();

        return view('jsas.edit', ['jsa' => $jsa, 'person_groups' => $person_groups, 'safety_permits' => $safety_permits, 'workers' => $workers, 'work_tools' => $work_tools, 'k3l_appeal_of_regulations' => $k3l_appeal_of_regulations, 'work_stages' => $work_stages]);
    }

    public function update(JSARequest $request, $uuid)
    {
        $jsa = JSA::with(['jsa_person_group', 'jsa_jsa_safety_permit.jsa_safety_permit', 'jsa_jsa_worker.jsa_worker', 'jsa_jsa_work_stage.jsa_work_stage', 'jsa_jsa_work_tool.jsa_work_tool'])->findOrFail($uuid);

        $jsa_jsa_safety_permit = JSAJSASafetyPermit::with(['jsa_safety_permit'])->get();
        $jsa_jsa_worker = JSAJSAWorker::with(['jsa_worker'])->get();
        $jsa_jsa_work_tool = JSAJSAWorkTool::with(['jsa_work_tool'])->get();
        $jsa_jsa_work_stage = JSAJSAWorkStage::with(['jsa_work_stage'])->get();

        $collection = collect($request->all());

        $to_jsa = $collection->except(['_token', 'jsa_safety_permit_uuid', 'jsa_worker_uuid', 'jsa_work_tool_uuid', 'jsa_work_stage_uuid'])->toArray();

        $result = $jsa->update($to_jsa);

        try {

            // <!-- SAFETY PERMIT --> //
            //jika data safety permit belum ada di tb pivot saat update jsa
            foreach ($request->jsa_safety_permit_uuid as $key => $value) {

                $bool = false;

                foreach ($jsa_jsa_safety_permit as $key => $value2) {

                    if ($uuid == $value2->jsa_uuid) {

                        if ($value2->jsa_safety_permit_uuid == $value) {
                            $bool = true;
                        }
                    }
                }

                if ($bool == false) {

                    JSAJSASafetyPermit::create([
                        'jsa_uuid' => $uuid,
                        'jsa_safety_permit_uuid' => $value,
                    ]);
                }
            }

            //jika data safety permit merupakan data yang dieliminasi saat update jsa
            foreach ($jsa_jsa_safety_permit as $key => $value) {

                $bool = false;

                if ($uuid == $value->jsa_uuid) {

                    foreach ($request->jsa_safety_permit_uuid as $key => $value2) {

                        if ($value->jsa_safety_permit_uuid == $value2) {
                            $bool = true;
                        }
                    }

                    if ($bool == false) {

                        $delete = JSAJSASafetyPermit::where('uuid', $value->uuid);

                        $delete->delete();
                    }
                }

            }

            // <!-- WORKER --> //
            //jika data worker belum ada di tb pivot saat update jsa
            foreach ($request->jsa_worker_uuid as $key => $value) {

                $bool = false;

                foreach ($jsa_jsa_worker as $key => $value2) {

                    if ($uuid == $value2->jsa_uuid) {

                        if ($value2->jsa_worker_uuid == $value) {
                            $bool = true;
                        }
                    }
                }

                if ($bool == false) {

                    JSAJSAWorker::create([
                        'jsa_uuid' => $uuid,
                        'jsa_worker_uuid' => $value,
                    ]);
                }
            }

            //jika data worker merupakan data yang dieliminasi saat update jsa
            foreach ($jsa_jsa_worker as $key => $value) {

                $bool = false;

                if ($uuid == $value->jsa_uuid) {

                    foreach ($request->jsa_worker_uuid as $key => $value2) {

                        if ($value->jsa_worker_uuid == $value2) {
                            $bool = true;
                        }
                    }

                    if ($bool == false) {

                        $delete = JSAJSAWorker::where('uuid', $value->uuid);

                        $delete->delete();
                    }
                }

            }

            // <!-- WORK TOOL --> //
            //jika data work tool belum ada di tb pivot saat update jsa
            foreach ($request->jsa_work_tool_uuid as $key => $value) {

                $bool = false;

                foreach ($jsa_jsa_work_tool as $key => $value2) {

                    if ($uuid == $value2->jsa_uuid) {

                        if ($value2->jsa_work_tool_uuid == $value) {
                            $bool = true;
                        }
                    }
                }

                if ($bool == false) {

                    JSAJSAWorkTool::create([
                        'jsa_uuid' => $uuid,
                        'jsa_work_tool_uuid' => $value,
                    ]);
                }
            }

            //jika data work tool merupakan data yang dieliminasi saat update jsa
            foreach ($jsa_jsa_work_tool as $key => $value) {

                $bool = false;

                if ($uuid == $value->jsa_uuid) {

                    foreach ($request->jsa_work_tool_uuid as $key => $value2) {

                        if ($value->jsa_work_tool_uuid == $value2) {
                            $bool = true;
                        }
                    }

                    if ($bool == false) {

                        $delete = JSAJSAWorkTool::where('uuid', $value->uuid);

                        $delete->delete();
                    }
                }

            }

            // <!-- WORK STAGE --> //
            //jika data work stage belum ada di tb pivot saat update jsa
            foreach ($request->jsa_work_stage_uuid as $key => $value) {

                $bool = false;

                foreach ($jsa_jsa_work_stage as $key => $value2) {

                    if ($uuid == $value2->jsa_uuid) {

                        if ($value2->jsa_work_stage_uuid == $value) {
                            $bool = true;
                        }
                    }
                }

                if ($bool == false) {

                    JSAJSAWorkStage::create([
                        'jsa_uuid' => $uuid,
                        'jsa_work_stage_uuid' => $value,
                    ]);
                }
            }

            //jika data work stage merupakan data yang dieliminasi saat update jsa
            foreach ($jsa_jsa_work_stage as $key => $value) {

                $bool = false;

                if ($uuid == $value->jsa_uuid) {

                    foreach ($request->jsa_work_stage_uuid as $key => $value2) {

                        if ($value->jsa_work_stage_uuid == $value2) {
                            $bool = true;
                        }
                    }

                    if ($bool == false) {

                        $delete = JSAJSAWorkStage::where('uuid', $value->uuid);

                        $delete->delete();
                    }
                }

            }

            Session::flash('succMessage', 'JSA berhasil diubah!');

        } catch (\Throwable $th) {
            Session::flash('errMessage', 'JSA gagal diubah!');
        }

        return redirect('/jsas');
    }

    public function destroy($id)
    {
        $jsa = JSA::findOrFail($id);
        $result = $jsa->delete();

        if ($result) {
            Session::flash('succMessage', 'JSA berhasil dihapus!');
        } else {
            Session::flash('errMessage', 'JSA gagal dihapus!');
        }

        return redirect('/jsas');
    }

    public function print($uuid)
    {
        set_time_limit(0);
        $jsa = JSA::with([
            'jsa_person_group',
            'jsa_jsa_safety_permit.jsa_safety_permit',
            'jsa_jsa_worker.jsa_worker.jsa_worker_jsa_skill_or_position.jsa_skill_or_position',
            'jsa_jsa_work_tool.jsa_work_tool',
            'jsa_jsa_work_stage.jsa_work_stage.jsa_work_stage_jsa_potential_hazard.jsa_potential_hazard.jsa_potential_hazard_jsa_impact.jsa_impact.jsa_impact_jsa_danger_control.jsa_danger_control',
            'jsa_jsa_work_stage.jsa_work_stage.jsa_work_stage_jsa_pic.jsa_pic'
        ])->findOrFail($uuid)->toArray();

        $k3l_appeal_of_regulations = JSAK3LAppealOfRegulation::all()->toArray();

        $safety_permits = JSASafetyPermit::all()->toArray();

        // $data = [
        //     'jsa' => $jsa,
        //     'k3l_appeal_of_regulations' => $k3l_appeal_of_regulations,
        //     'safety_permits' => $safety_permits,
        // ];

        // $pdf = Pdf::loadView('jsas.print', $data);
        // return $pdf->download('jsa-' . $jsa['name'] . '.pdf');

        return view('jsas.print', ['jsa' => $jsa, 'safety_permits' => $safety_permits, 'k3l_appeal_of_regulations' => $k3l_appeal_of_regulations]);
    }

    public function request()
    {
        $jsas = JSA::all();
        $forms = Form::all();
        $ptws = PTW::all();

        return response()->json([$jsas, $forms, $ptws]);
    }

    public function jsa_jsa_safety_permit_request()
    {
        $jsas = JSA::with(['form', 'jsa_jsa_safety_permit.jsa_safety_permit'])->get();
        $safety_permits = JSASafetyPermit::get();

        return response()->json([$jsas, $safety_permits]);
    }
}
