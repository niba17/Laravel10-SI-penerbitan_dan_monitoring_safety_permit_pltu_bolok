<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\FormDescription;
use App\Models\JSASafetyPermit;
use Illuminate\Support\Facades\Session;
use App\Http\Requests\FormDescriptionRequest;
use App\Models\FormDescriptionJSASafetyPermit;

class FormDescriptionController extends Controller
{
    public function index()
    {
        $descriptions = FormDescription::with(['form_description_jsa_safety_permit.jsa_safety_permit'])->get();

        return view('descriptions.index', ['descriptions' => $descriptions]);
    }

    public function create()
    {
        $descriptions = FormDescription::all();
        $safety_permits = JSASafetyPermit::with(['form_description_jsa_safety_permit.jsa_safety_permit'])->get();

        return view('descriptions.create', ['descriptions' => $descriptions, 'safety_permits' => $safety_permits]);
    }

    public function store(FormDescriptionRequest $request)
    {
        $collection = collect($request->all());

        $to_description = $collection->except(['_token', 'jsa_safety_permit_uuid'])->toArray();

        try {
            FormDescription::create($to_description);

            $last_description_uuid = FormDescription::latest()->first();

            foreach ($request->jsa_safety_permit_uuid as $key => $value) {
                FormDescriptionJSASafetyPermit::create([
                    'form_description_uuid' => $last_description_uuid->uuid,
                    'jsa_safety_permit_uuid' => $value,
                ]);
            }

            Session::flash('succMessage', 'Deskripsi berhasil dibuat!');
        } catch (\Throwable $th) {
            Session::flash('errMessage', 'Deskripsi gagal dibuat!');
        }

        return redirect('/descriptions');
    }

    public function edit($uuid)
    {
        $description = FormDescription::findOrFail($uuid);
        $safety_permits = JSASafetyPermit::all();

        return view('descriptions.edit', ['description' => $description, 'safety_permits' => $safety_permits]);
    }

    public function update(FormDescriptionRequest $request, $uuid)
    {
        $description = FormDescription::with(['form_description_jsa_safety_permit.jsa_safety_permit'])->findOrFail($uuid);

        $form_description_jsa_safety_permit = FormDescriptionJSASafetyPermit::with(['jsa_safety_permit'])->get();

        $collection = collect($request->all());

        $to_description = $collection->except(['_token', 'jsa_safety_permit_uuid'])->toArray();

        $description->update($to_description);

        try {

            // <!-- SAFETY PERMIT --> //
            //jika data safety permit belum ada di tb pivot saat update description
            foreach ($request->jsa_safety_permit_uuid as $key => $value) {

                $bool = false;

                foreach ($form_description_jsa_safety_permit as $key => $value2) {

                    if ($uuid == $value2->form_description_uuid) {

                        if ($value2->jsa_safety_permit_uuid == $value) {
                            $bool = true;
                        }
                    }
                }

                if ($bool == false) {

                    FormDescriptionJSASafetyPermit::create([
                        'form_description_uuid' => $uuid,
                        'jsa_safety_permit_uuid' => $value,
                    ]);
                }
            }

            //jika data skill / position merupakan data yang dieliminasi saat update worker
            foreach ($form_description_jsa_safety_permit as $key => $value) {

                $bool = false;

                if ($uuid == $value->form_description_uuid) {

                    foreach ($request->jsa_safety_permit_uuid as $key => $value2) {

                        if ($value->jsa_safety_permit_uuid == $value2) {
                            $bool = true;
                        }
                    }

                    if ($bool == false) {

                        $delete = FormDescriptionJSASafetyPermit::where('uuid', $value->uuid);

                        $delete->delete();
                    }
                }

            }

            Session::flash('succMessage', 'Deskripsi berhasil diubah!');

        } catch (\Throwable $th) {
            Session::flash('errMessage', 'Deskripsi gagal diubah!');
        }

        return redirect('/descriptions');
    }

    public function destroy($uuid)
    {
        $descriptions = FormDescription::findOrFail($uuid);
        $result = $descriptions->delete();

        if ($result) {
            Session::flash('succMessage', 'Deskripsi berhasil dihapus!');
        } else {
            Session::flash('errMessage', 'Deskripsi gagal dihapus!');
        }

        return redirect('/descriptions');
    }

    public function request()
    {
        $descriptions = FormDescription::with(['form_form_description.form', 'form_description_jsa_safety_permit.jsa_safety_permit'])->get();

        return response()->json([$descriptions]);
    }
}
