<?php

namespace App\Http\Controllers;

use App\Models\Worker;
use App\Models\JSAWorker;
use Illuminate\Http\Request;
use App\Models\JSASkillOrPosition;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\JSAWorkerRequest;
use Illuminate\Support\Facades\Session;
use App\Models\JSAWorkerJSASkillOrPosition;

class JSAWorkerController extends Controller
{
    public function index()
    {
        $workers = JSAWorker::with(['jsa_worker_jsa_skill_or_position.jsa_skill_or_position'])->get();

        return view('workers.index', ['workers' => $workers]);
    }

    public function create()
    {
        $workers = JSAWorker::all();
        $jsa_skills_or_positions = JSASkillOrPosition::all();

        return view('workers.create', ['workers' => $workers, 'jsa_skills_or_positions' => $jsa_skills_or_positions]);
    }

    public function store(JSAWorkerRequest $request)
    {
        $collection = collect($request->all());

        $to_worker = $collection->except(['_token', 'jsa_skill_or_position_uuid'])->toArray();

        try {
            JSAWorker::create($to_worker);

            $last_worker_uuid = JSAWorker::latest()->first();

            foreach ($request->jsa_skill_or_position_uuid as $key => $value) {
                JSAWorkerJSASkillOrPosition::create([
                    'jsa_worker_uuid' => $last_worker_uuid->uuid,
                    'jsa_skill_or_position_uuid' => $value,
                ]);
            }

            Session::flash('succMessage', 'Pekerja berhasil dibuat!');
        } catch (\Throwable $th) {
            Session::flash('errMessage', 'Pekerja gagal dibuat!');
        }

        return redirect('/workers');
    }

    public function edit($uuid)
    {
        $worker = JSAWorker::with(['jsa_worker_jsa_skill_or_position.jsa_skill_or_position'])->findOrFail($uuid);
        $jsa_skills_or_positions = JSASkillOrPosition::all();

        return view('workers.edit', ['worker' => $worker, 'jsa_skills_or_positions' => $jsa_skills_or_positions]);
    }

    public function update(JSAWorkerRequest $request, $uuid)
    {
        $worker = JSAWorker::with(['jsa_worker_jsa_skill_or_position.jsa_skill_or_position'])->findOrFail($uuid);

        $jsa_worker_jsa_skill_or_position = JSAWorkerJSASkillOrPosition::with(['jsa_skill_or_position'])->get();

        $collection = collect($request->all());

        $to_worker = $collection->except(['_token', 'jsa_skill_or_position_uuid'])->toArray();

        $worker->update($to_worker);

        try {

            // <!-- SKILL / POSITION --> //
            //jika data skill / position belum ada di tb pivot saat update worker
            foreach ($request->jsa_skill_or_position_uuid as $key => $value) {

                $bool = false;

                foreach ($jsa_worker_jsa_skill_or_position as $key => $value2) {

                    if ($uuid == $value2->jsa_worker_uuid) {

                        if ($value2->jsa_skill_or_position_uuid == $value) {
                            $bool = true;
                        }
                    }
                }

                if ($bool == false) {

                    JSAWorkerJSASkillOrPosition::create([
                        'jsa_worker_uuid' => $uuid,
                        'jsa_skill_or_position_uuid' => $value,
                    ]);
                }
            }

            //jika data skill / position merupakan data yang dieliminasi saat update worker
            foreach ($jsa_worker_jsa_skill_or_position as $key => $value) {

                $bool = false;

                if ($uuid == $value->jsa_worker_uuid) {

                    foreach ($request->jsa_skill_or_position_uuid as $key => $value2) {

                        if ($value->jsa_skill_or_position_uuid == $value2) {
                            $bool = true;
                        }
                    }

                    if ($bool == false) {

                        $delete = JSAWorkerJSASkillOrPosition::where('uuid', $value->uuid);

                        $delete->delete();
                    }
                }

            }

            Session::flash('succMessage', 'Worker berhasil diubah!');

        } catch (\Throwable $th) {
            Session::flash('errMessage', 'Worker gagal diubah!');
        }

        return redirect('/workers');
    }

    public function destroy($id)
    {
        $worker = JSAWorker::findOrFail($id);
        $result = $worker->delete();

        if ($result) {
            Session::flash('succMessage', 'Worker berhasil dihapus!');
        } else {
            Session::flash('errMessage', 'Worker gagal dihapus!');
        }

        return redirect('/workers');
    }

    public function request()
    {
        $workers = JSAWorker::all();

        return response()->json([$workers]);
    }
}
