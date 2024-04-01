<?php

namespace App\Http\Controllers;

use App\Models\JSAPIC;
use App\Models\JSAWorkStage;
use Illuminate\Http\Request;
use App\Models\JSAPotentialHazard;
use App\Models\JSAWorkStageJSAPIC;
use Illuminate\Support\Facades\Session;
use App\Http\Requests\JSAWorkStageRequest;
use App\Models\JSAWorkStageJSAPotentialHazard;

class JSAWorkStageController extends Controller
{
    public function index()
    {
        $work_stages = JSAWorkStage::with(['jsa_work_stage_jsa_potential_hazard.jsa_potential_hazard', 'jsa_work_stage_jsa_pic.jsa_pic'])->get();

        return view('work_stages.index', ['work_stages' => $work_stages]);
    }

    public function create()
    {
        $work_stages = JSAWorkStage::all();
        $potential_hazards = JSAPotentialHazard::all();
        $pics = JSAPIC::all();

        return view('work_stages.create', ['work_stages' => $work_stages, 'potential_hazards' => $potential_hazards, 'pics' => $pics]);
    }

    public function store(JSAWorkStageRequest $request)
    {

        $collection = collect($request->all());

        $to_work_stage = $collection->except(['_token', 'jsa_potential_hazard_uuid'])->toArray();

        try {
            JSAWorkStage::create($to_work_stage);

            $last_work_stage_uuid = JSAWorkStage::latest()->first();

            if (isset($request->jsa_potential_hazard_uuid)) {

                foreach ($request->jsa_potential_hazard_uuid as $key => $value) {
                    JSAWorkStageJSAPotentialHazard::create([
                        'jsa_work_stage_uuid' => $last_work_stage_uuid->uuid,
                        'jsa_potential_hazard_uuid' => $value,
                    ]);
                }
            }

            if (isset($request->jsa_pic_uuid)) {

                foreach ($request->jsa_pic_uuid as $key => $value) {
                    JSAWorkStageJSAPIC::create([
                        'jsa_work_stage_uuid' => $last_work_stage_uuid->uuid,
                        'jsa_pic_uuid' => $value,
                    ]);
                }
            }

            Session::flash('succMessage', 'Tahapan Kerja berhasil dibuat!');
        } catch (\Throwable $th) {
            Session::flash('errMessage', 'Tahapan Kerja gagal dibuat!');
        }

        return redirect('/work_stages');
    }

    public function edit($uuid)
    {
        $work_stage = JSAWorkStage::with(['jsa_work_stage_jsa_potential_hazard.jsa_potential_hazard', 'jsa_work_stage_jsa_pic.jsa_pic'])->findOrFail($uuid);
        $potential_hazards = JSAPotentialHazard::all();
        $pics = JSAPIC::all();

        return view('work_stages.edit', ['work_stage' => $work_stage, 'potential_hazards' => $potential_hazards, 'pics' => $pics]);
    }

    public function update(JSAWorkStageRequest $request, $uuid)
    {
        $work_stage = JSAWorkStage::findOrFail($uuid);

        $jsa_work_stage_jsa_potential_hazard = JSAWorkStageJSAPotentialHazard::with(['jsa_potential_hazard'])->get();
        $jsa_work_stage_jsa_pic = JSAWorkStageJSAPIC::with(['jsa_pic'])->get();

        $collection = collect($request->all());

        $to_work_stage = $collection->except(['_token', 'jsa_potential_hazard_uuid', 'jsa_pic_uuid'])->toArray();

        $work_stage->update($to_work_stage);

        try {

            // <!-- POTENTIAL HAZARD --> //
            //jika data potential hazard belum ada di tb pivot saat update worker
            if (isset($request->jsa_potential_hazard_uuid)) {

                foreach ($request->jsa_potential_hazard_uuid as $key => $value) {

                    $bool = false;

                    foreach ($jsa_work_stage_jsa_potential_hazard as $key => $value2) {

                        if ($uuid == $value2->jsa_work_stage_uuid) {

                            if ($value2->jsa_potential_hazard_uuid == $value) {
                                $bool = true;
                            }
                        }
                    }

                    if ($bool == false) {

                        JSAWorkStageJSAPotentialHazard::create([
                            'jsa_work_stage_uuid' => $uuid,
                            'jsa_potential_hazard_uuid' => $value,
                        ]);
                    }
                }
            }

            //jika data potential hazard merupakan data yang dieliminasi saat update worker
            foreach ($jsa_work_stage_jsa_potential_hazard as $key => $value) {

                $bool = false;

                if ($uuid == $value->jsa_work_stage_uuid) {

                    if (isset($request->jsa_potential_hazard_uuid)) {

                        foreach ($request->jsa_potential_hazard_uuid as $key => $value2) {

                            if ($value->jsa_potential_hazard_uuid == $value2) {
                                $bool = true;
                            }
                        }
                    }

                    if ($bool == false) {

                        $delete = JSAWorkStageJSAPotentialHazard::where('uuid', $value->uuid);

                        $delete->delete();
                    }
                }

            }

            // <!-- PIC --> //
            //jika data pic belum ada di tb pivot saat update worker
            if (isset($request->jsa_pic_uuid)) {

                foreach ($request->jsa_pic_uuid as $key => $value) {

                    $bool = false;

                    foreach ($jsa_work_stage_jsa_pic as $key => $value2) {

                        if ($uuid == $value2->jsa_work_stage_uuid) {

                            if ($value2->jsa_pic_uuid == $value) {
                                $bool = true;
                            }
                        }
                    }

                    if ($bool == false) {

                        JSAWorkStageJSAPIC::create([
                            'jsa_work_stage_uuid' => $uuid,
                            'jsa_pic_uuid' => $value,
                        ]);
                    }
                }
            }

            //jika data potential hazard merupakan data yang dieliminasi saat update worker
            foreach ($jsa_work_stage_jsa_pic as $key => $value) {

                $bool = false;

                if ($uuid == $value->jsa_work_stage_uuid) {

                    if (isset($request->jsa_pic_uuid)) {

                        foreach ($request->jsa_pic_uuid as $key => $value2) {

                            if ($value->jsa_pic_uuid == $value2) {
                                $bool = true;
                            }
                        }
                    }

                    if ($bool == false) {

                        $delete = JSAWorkStageJSAPIC::where('uuid', $value->uuid);

                        $delete->delete();
                    }
                }

            }

            Session::flash('succMessage', 'Tahapan Kerja berhasil diubah!');

        } catch (\Throwable $th) {
            Session::flash('errMessage', 'Tahapan Kerja gagal diubah!');
        }

        return redirect('/work_stages');
    }

    public function destroy($uuid)
    {
        $work_stages = JSAWorkStage::findOrFail($uuid);
        $result = $work_stages->delete();

        if ($result) {
            Session::flash('succMessage', 'Tahapan Kerja berhasil dihapus!');
        } else {
            Session::flash('errMessage', 'Tahapan Kerja gagal dihapus!');
        }

        return redirect('/work_stages');
    }

    public function request()
    {
        $work_stages = JSAWorkStage::all();

        return response()->json([$work_stages]);
    }
}
