<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PTWDescription;
use App\Models\PTWPTWDescription;
use App\Models\PTWIsolationMethod;
use Illuminate\Support\Facades\Session;
use App\Http\Requests\PTWDescriptionRequest;
use App\Models\PTWDescriptionPTWIsolationMethod;

class PTWDescriptionController extends Controller
{
    public function index()
    {
        $ptw_descriptions = PTWDescription::all();

        return view('ptw_descriptions.index', ['ptw_descriptions' => $ptw_descriptions]);
    }

    public function create()
    {
        $ptw_descriptions = PTWDescription::all();
        $isolation_methods = PTWIsolationMethod::all();

        return view('ptw_descriptions.create', ['ptw_descriptions' => $ptw_descriptions, 'isolation_methods' => $isolation_methods]);
    }

    public function store(PTWDescriptionRequest $request)
    {
        $collection = collect($request->all());

        $to_description = $collection->except(['_token', 'ptw_isolation_method_uuid'])->toArray();

        try {
            PTWDescription::create($to_description);

            $last_description_uuid = PTWDescription::latest()->first();

            foreach ($request->ptw_isolation_method_uuid as $key => $value) {
                PTWDescriptionPTWIsolationMethod::create([
                    'ptw_description_uuid' => $last_description_uuid->uuid,
                    'ptw_isolation_method_uuid' => $value,
                ]);
            }

            Session::flash('succMessage', 'Deskripsi berhasil dibuat!');
        } catch (\Throwable $th) {
            Session::flash('errMessage', 'Deskripsi gagal dibuat!');
        }

        return redirect('/ptw_descriptions');
    }

    public function edit($uuid)
    {
        $ptw_description = PTWDescription::findOrFail($uuid);
        $isolation_methods = PTWIsolationMethod::all();

        return view('ptw_descriptions.edit', ['ptw_description' => $ptw_description, 'isolation_methods' => $isolation_methods]);
    }

    public function update(PTWDescriptionRequest $request, $uuid)
    {

        $ptw_description = PTWDescription::with(['ptw_ptw_description.ptw', 'ptw_description_ptw_isolation_method'])->findOrFail($uuid);

        $ptw_description_ptw_isolation_method = PTWDescriptionPTWIsolationMethod::with(['ptw_isolation_method'])->get();

        $collection = collect($request->all());

        $to_description = $collection->except(['_token', 'ptw_isolation_method_uuid',])->toArray();

        $ptw_description->update($to_description);

        try {

            // <!-- ISOLATION METHOD --> //
            //jika data isolation method belum ada di tb pivot saat update description
            foreach ($request->ptw_isolation_method_uuid as $key => $value) {

                $bool = false;

                foreach ($ptw_description_ptw_isolation_method as $key => $value2) {

                    if ($uuid == $value2->ptw_description_uuid) {

                        if ($value2->ptw_isolation_method_uuid == $value) {
                            $bool = true;
                        }
                    }
                }

                if ($bool == false) {

                    PTWDescriptionPTWIsolationMethod::create([
                        'ptw_description_uuid' => $uuid,
                        'ptw_isolation_method_uuid' => $value,
                    ]);
                }
            }

            //jika data isolation method merupakan data yang dieliminasi saat update ptw_description
            foreach ($ptw_description_ptw_isolation_method as $key => $value) {

                $bool = false;

                if ($uuid == $value->ptw_description_uuid) {

                    foreach ($request->ptw_isolation_method_uuid as $key => $value2) {

                        if ($value->ptw_isolation_method_uuid == $value2) {
                            $bool = true;
                        }
                    }

                    if ($bool == false) {

                        $delete = PTWDescriptionPTWIsolationMethod::where('uuid', $value->uuid);

                        $delete->delete();
                    }
                }

            }

            Session::flash('succMessage', 'Deskripsi berhasil diubah!');

        } catch (\Throwable $th) {
            Session::flash('errMessage', 'Deskripsi gagal diubah!');
        }

        return redirect('/ptw_descriptions');
    }

    public function destroy($uuid)
    {
        $ptw_description = PTWDescription::findOrFail($uuid);
        $result = $ptw_description->delete();

        if ($result) {
            Session::flash('succMessage', 'Deskripsi berhasil dihapus!');
        } else {
            Session::flash('errMessage', 'Deskripsi gagal dihapus!');
        }

        return redirect('/ptw_descriptions');
    }

    public function request()
    {
        $ptw_descriptions = PTWDescription::all();

        return response()->json([$ptw_descriptions]);
    }
}
