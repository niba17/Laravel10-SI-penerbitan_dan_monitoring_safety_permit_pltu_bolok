<?php

namespace App\Http\Controllers;

use App\Models\JSAImpact;
use Illuminate\Http\Request;
use App\Models\JSADangerControl;
use App\Http\Requests\JSAImpactRequest;
use Illuminate\Support\Facades\Session;
use App\Models\JSAImpactJSADangerControl;

class JSAImpactController extends Controller
{
    public function index()
    {
        $impacts = JSAImpact::with(['jsa_impact_jsa_danger_control.jsa_danger_control'])->get();

        return view('impacts.index', ['impacts' => $impacts]);
    }

    public function create()
    {
        $impacts = JSAImpact::all();
        $danger_controls = JSADangerControl::all();

        return view('impacts.create', ['impacts' => $impacts, 'danger_controls' => $danger_controls]);
    }

    public function store(JSAImpactRequest $request)
    {
        $collection = collect($request->all());

        $to_impact = $collection->except(['_token', 'jsa_danger_control_uuid'])->toArray();

        try {
            JSAImpact::create($to_impact);

            $last_impact_uuid = JSAImpact::latest()->first();

            if (isset($request->jsa_danger_control_uuid)) {

                foreach ($request->jsa_danger_control_uuid as $key => $value) {
                    JSAImpactJSADangerControl::create([
                        'jsa_impact_uuid' => $last_impact_uuid->uuid,
                        'jsa_danger_control_uuid' => $value,
                    ]);
                }
            }

            Session::flash('succMessage', 'Dampak berhasil dibuat!');
        } catch (\Throwable $th) {
            Session::flash('errMessage', 'Dampak gagal dibuat!');
        }

        return redirect('/impacts');
    }

    public function edit($uuid)
    {
        $impact = JSAImpact::with(['jsa_impact_jsa_danger_control.jsa_danger_control'])->findOrFail($uuid);
        $danger_controls = JSADangerControl::all();

        return view('impacts.edit', ['impact' => $impact, 'danger_controls' => $danger_controls]);
    }

    public function update(JSAImpactRequest $request, $uuid)
    {
        $impact = JSAImpact::with(['jsa_impact_jsa_danger_control.jsa_danger_control'])->findOrFail($uuid);

        $jsa_impact_jsa_danger_control = JSAImpactJSADangerControl::with(['jsa_danger_control'])->get();

        $collection = collect($request->all());

        $to_impact = $collection->except(['_token', 'jsa_danger_control_uuid'])->toArray();

        $impact->update($to_impact);

        try {

            // <!-- IMPACT --> //
            //jika data impact hazard belum ada di tb pivot saat update worker
            if (isset($request->jsa_danger_control_uuid)) {

                foreach ($request->jsa_danger_control_uuid as $key => $value) {

                    $bool = false;

                    foreach ($jsa_impact_jsa_danger_control as $key => $value2) {

                        if ($uuid == $value2->jsa_impact_uuid) {

                            if ($value2->jsa_danger_control_uuid == $value) {
                                $bool = true;
                            }
                        }
                    }

                    if ($bool == false) {

                        JSAImpactJSADangerControl::create([
                            'jsa_impact_uuid' => $uuid,
                            'jsa_danger_control_uuid' => $value,
                        ]);
                    }
                }
            }

            //jika data impact merupakan data yang dieliminasi saat update worker
            foreach ($jsa_impact_jsa_danger_control as $key => $value) {

                $bool = false;

                if ($uuid == $value->jsa_impact_uuid) {

                    if (isset($request->jsa_danger_control_uuid)) {

                        foreach ($request->jsa_danger_control_uuid as $key => $value2) {

                            if ($value->jsa_danger_control_uuid == $value2) {
                                $bool = true;
                            }
                        }
                    }

                    if ($bool == false) {

                        $delete = JSAImpactJSADangerControl::where('uuid', $value->uuid);

                        $delete->delete();
                    }
                }

            }

            Session::flash('succMessage', 'Dampak berhasil diubah!');

        } catch (\Throwable $th) {
            Session::flash('errMessage', 'Dampak gagal diubah!');
        }

        return redirect('/impacts');
    }

    public function destroy($uuid)
    {
        $impacts = JSAImpact::findOrFail($uuid);
        $result = $impacts->delete();

        if ($result) {
            Session::flash('succMessage', 'Dampak berhasil dihapus!');
        } else {
            Session::flash('errMessage', 'Dampak gagal dihapus!');
        }

        return redirect('/impacts');
    }

    public function request()
    {
        $impacts = JSAImpact::all();

        return response()->json([$impacts]);
    }
}
