<?php

namespace App\Http\Controllers;

use App\Models\JSAImpact;
use Illuminate\Http\Request;
use App\Models\JSAPotentialHazard;
use Illuminate\Support\Facades\Session;
use App\Models\JSAPotentialHazardJSAImpact;
use App\Http\Requests\JSAPotentialHazardRequest;

class JSAPotentialHazardController extends Controller
{
    public function index()
    {
        $potential_hazards = JSAPotentialHazard::with(['jsa_potential_hazard_jsa_impact.jsa_impact'])->get();

        return view('potential_hazards.index', ['potential_hazards' => $potential_hazards]);
    }

    public function create()
    {
        $potential_hazards = JSAPotentialHazard::all();
        $impacts = JSAImpact::all();

        return view('potential_hazards.create', ['potential_hazards' => $potential_hazards, 'impacts' => $impacts]);
    }

    public function store(JSAPotentialHazardRequest $request)
    {
        $collection = collect($request->all());

        $to_potential_hazard = $collection->except(['_token', 'jsa_impact_uuid'])->toArray();

        try {
            JSAPotentialHazard::create($to_potential_hazard);

            $last_potential_hazard_uuid = JSAPotentialHazard::latest()->first();

            if (isset($request->jsa_impact_uuid)) {

                foreach ($request->jsa_impact_uuid as $key => $value) {
                    JSAPotentialHazardJSAImpact::create([
                        'jsa_potential_hazard_uuid' => $last_potential_hazard_uuid->uuid,
                        'jsa_impact_uuid' => $value,
                    ]);
                }
            }

            Session::flash('succMessage', 'Potensi Bahaya berhasil dibuat!');
        } catch (\Throwable $th) {
            Session::flash('errMessage', 'Potensi Bahaya gagal dibuat!');
        }

        return redirect('/potential_hazards');
    }

    public function edit($uuid)
    {
        $potential_hazard = JSAPotentialHazard::with(['jsa_potential_hazard_jsa_impact.jsa_impact'])->findOrFail($uuid);
        $impacts = JSAImpact::all();


        return view('potential_hazards.edit', ['potential_hazard' => $potential_hazard, 'impacts' => $impacts]);
    }

    public function update(JSAPotentialHazardRequest $request, $uuid)
    {
        $potential_hazard = JSAPotentialHazard::with(['jsa_potential_hazard_jsa_impact.jsa_impact'])->findOrFail($uuid);

        $jsa_potential_hazard_jsa_impact = JSAPotentialHazardJSAImpact::with(['jsa_impact'])->get();

        $collection = collect($request->all());

        $to_potential_hazard = $collection->except(['_token', 'jsa_impact_uuid'])->toArray();

        $potential_hazard->update($to_potential_hazard);

        try {

            // <!-- IMPACT --> //
            //jika data impact hazard belum ada di tb pivot saat update worker
            if (isset($request->jsa_impact_uuid)) {

                foreach ($request->jsa_impact_uuid as $key => $value) {

                    $bool = false;

                    foreach ($jsa_potential_hazard_jsa_impact as $key => $value2) {

                        if ($uuid == $value2->jsa_potential_hazard_uuid) {

                            if ($value2->jsa_impact_uuid == $value) {
                                $bool = true;
                            }
                        }
                    }

                    if ($bool == false) {

                        JSAPotentialHazardJSAImpact::create([
                            'jsa_potential_hazard_uuid' => $uuid,
                            'jsa_impact_uuid' => $value,
                        ]);
                    }
                }
            }

            //jika data impact merupakan data yang dieliminasi saat update worker
            foreach ($jsa_potential_hazard_jsa_impact as $key => $value) {

                $bool = false;

                if ($uuid == $value->jsa_potential_hazard_uuid) {

                    if (isset($request->jsa_impact_uuid)) {

                        foreach ($request->jsa_impact_uuid as $key => $value2) {

                            if ($value->jsa_impact_uuid == $value2) {
                                $bool = true;
                            }
                        }
                    }

                    if ($bool == false) {

                        $delete = JSAPotentialHazardJSAImpact::where('uuid', $value->uuid);

                        $delete->delete();
                    }
                }

            }

            Session::flash('succMessage', 'Potensi Bahaya berhasil diubah!');

        } catch (\Throwable $th) {
            Session::flash('errMessage', 'Potensi Bahaya gagal diubah!');
        }

        return redirect('/potential_hazards');
    }

    public function destroy($uuid)
    {
        $potential_hazards = JSAPotentialHazard::findOrFail($uuid);
        $result = $potential_hazards->delete();

        if ($result) {
            Session::flash('succMessage', 'Potensi Bahaya berhasil dihapus!');
        } else {
            Session::flash('errMessage', 'Potensi Bahaya gagal dihapus!');
        }

        return redirect('/potential_hazards');
    }

    public function request()
    {
        $potential_hazards = JSAPotentialHazard::all();

        return response()->json([$potential_hazards]);
    }
}
