<?php

namespace App\Http\Controllers;

use App\Models\PTW;
use App\Models\PTWNote;
use App\Models\PTWPTWNote;
use Illuminate\Http\Request;
use App\Models\PTWDescription;
use App\Models\JSASafetyPermit;
use App\Http\Requests\PTWRequest;
use App\Models\PTWPTWDescription;
use App\Models\PTWJSASafetyPermit;
use Illuminate\Support\Facades\Session;

class PTWController extends Controller
{
    public function index()
    {
        $ptws = PTW::with([
            'ptw_ptw_description.ptw_description.ptw_description_ptw_isolation_method.ptw_isolation_method',
            'ptw_ptw_note.ptw_note',
            'ptw_jsa_safety_permit.jsa_safety_permit',
        ])->get();

        return view('ptws.index', ['ptws' => $ptws]);
    }

    public function create()
    {
        $ptws = PTW::all();
        $safety_permits = JSASafetyPermit::all();
        $descriptions = PTWDescription::all();
        $notes = PTWNote::all();

        return view('ptws.create', ['ptws' => $ptws, 'safety_permits' => $safety_permits, 'descriptions' => $descriptions, 'notes' => $notes]);
    }

    public function store(PTWRequest $request)
    {
        $collection = collect($request->all());

        $to_ptw = $collection->except(['_token', 'ptw_description_uuid', 'ptw_note_uuid', 'jsa_safety_permit_uuid'])->toArray();

        try {

            PTW::create($to_ptw);

            $last_ptw_uuid = PTW::latest()->first();

            if (isset($request->ptw_description_uuid)) {

                foreach ($request->ptw_description_uuid as $key => $value) {
                    PTWPTWDescription::create([
                        'ptw_uuid' => $last_ptw_uuid->uuid,
                        'ptw_description_uuid' => $value,
                    ]);
                }
            }

            if (isset($request->ptw_note_uuid)) {

                foreach ($request->ptw_note_uuid as $key => $value) {
                    PTWPTWNote::create([
                        'ptw_uuid' => $last_ptw_uuid->uuid,
                        'ptw_note_uuid' => $value,
                    ]);
                }
            }

            foreach ($request->jsa_safety_permit_uuid as $key => $value) {
                PTWJSASafetyPermit::create([
                    'ptw_uuid' => $last_ptw_uuid->uuid,
                    'jsa_safety_permit_uuid' => $value,
                ]);
            }

            Session::flash('succMessage', 'PTW berhasil dibuat!');
        } catch (\Throwable $th) {
            Session::flash('errMessage', 'PTW gagal dibuat!');
        }

        return redirect('/ptws');
    }

    public function edit($uuid)
    {
        $ptw = PTW::with([
            'ptw_ptw_description.ptw_description',
            'ptw_jsa_safety_permit.jsa_safety_permit',
            'ptw_ptw_note.ptw_note',
        ])->findOrFail($uuid);

        $descriptions = PTWDescription::all();
        $notes = PTWNote::all();
        $safety_permits = JSASafetyPermit::all();

        return view('ptws.edit', ['ptw' => $ptw, 'descriptions' => $descriptions, 'safety_permits' => $safety_permits, 'notes' => $notes]);
    }

    public function update(PTWRequest $request, $uuid)
    {
        $ptw = PTW::findOrFail($uuid);

        $ptw_ptw_description = PTWPTWDescription::with(['ptw_description'])->get();
        $ptw_jsa_safety_permit = PTWJSASafetyPermit::with(['jsa_safety_permit'])->get();
        $ptw_ptw_note = PTWPTWNote::with(['ptw_note'])->get();

        $collection = collect($request->all());

        $to_ptw = $collection->except(['_token', 'ptw_description_uuid', 'jsa_safety_permit_uuid', 'ptw_note_uuid'])->toArray();

        $ptw->update($to_ptw);

        try {

            // <!-- DESCRIPTION --> //
            //jika data description belum ada di tb pivot saat update ptw
            if (isset($request->ptw_description_uuid)) {

                foreach ($request->ptw_description_uuid as $key => $value) {

                    $bool = false;

                    foreach ($ptw_ptw_description as $key => $value2) {

                        if ($uuid == $value2->ptw_uuid) {

                            if ($value2->jsa_safety_permit_uuid == $value) {
                                $bool = true;
                            }
                        }
                    }

                    if ($bool == false) {

                        PTWPTWDescription::create([
                            'ptw_uuid' => $uuid,
                            'ptw_description_uuid' => $value,
                        ]);
                    }
                }
            }

            //jika data safety permit merupakan data yang dieliminasi saat update jsa
            foreach ($ptw_ptw_description as $key => $value) {

                $bool = false;

                if ($uuid == $value->ptw_uuid) {

                    if (isset($request->ptw_description_uuid)) {

                        foreach ($request->ptw_description_uuid as $key => $value2) {

                            if ($value->ptw_description_uuid == $value2) {
                                $bool = true;
                            }
                        }
                    }

                    if ($bool == false) {

                        $delete = PTWPTWDescription::where('uuid', $value->uuid);

                        $delete->delete();
                    }
                }

            }


            // <!-- SAFETY PERMIT --> //
            //jika data safety permit belum ada di tb pivot saat update ptw
            foreach ($request->jsa_safety_permit_uuid as $key => $value) {

                $bool = false;

                foreach ($ptw_jsa_safety_permit as $key => $value2) {

                    if ($uuid == $value2->ptw_uuid) {

                        if ($value2->jsa_safety_permit_uuid == $value) {
                            $bool = true;
                        }
                    }
                }

                if ($bool == false) {

                    PTWJSASafetyPermit::create([
                        'ptw_uuid' => $uuid,
                        'jsa_safety_permit_uuid' => $value,
                    ]);
                }
            }

            //jika data safety permit merupakan data yang dieliminasi saat update ptw
            foreach ($ptw_jsa_safety_permit as $key => $value) {

                $bool = false;

                if ($uuid == $value->ptw_uuid) {

                    foreach ($request->jsa_safety_permit_uuid as $key => $value2) {

                        if ($value->jsa_safety_permit_uuid == $value2) {
                            $bool = true;
                        }
                    }

                    if ($bool == false) {

                        $delete = PTWJSASafetyPermit::where('uuid', $value->uuid);

                        $delete->delete();
                    }
                }

            }

            // <!-- NOTE --> //
            //jika data note belum ada di tb pivot saat update ptw
            if (isset($request->ptw_note_uuid)) {

                foreach ($request->ptw_note_uuid as $key => $value) {

                    $bool = false;

                    foreach ($ptw_ptw_note as $key => $value2) {

                        if ($uuid == $value2->ptw_uuid) {

                            if ($value2->ptw_note_uuid == $value) {
                                $bool = true;
                            }
                        }
                    }

                    if ($bool == false) {

                        PTWPTWNote::create([
                            'ptw_uuid' => $uuid,
                            'ptw_note_uuid' => $value,
                        ]);
                    }
                }
            }

            //jika data note merupakan data yang dieliminasi saat update ptw
            foreach ($ptw_ptw_note as $key => $value) {

                $bool = false;

                if ($uuid == $value->ptw_uuid) {

                    if (isset($request->ptw_note_uuid)) {

                        foreach ($request->ptw_note_uuid as $key => $value2) {

                            if ($value->ptw_note_uuid == $value2) {
                                $bool = true;
                            }
                        }
                    }

                    if ($bool == false) {

                        $delete = PTWPTWNote::where('uuid', $value->uuid);

                        $delete->delete();
                    }
                }

            }


            Session::flash('succMessage', 'PTW berhasil diubah!');

        } catch (\Throwable $th) {
            Session::flash('errMessage', 'PTW gagal diubah!');
        }

        return redirect('/ptws');
    }

    public function destroy($id)
    {
        $ptw = PTW::findOrFail($id);
        $result = $ptw->delete();

        if ($result) {
            Session::flash('succMessage', 'PTW berhasil dihapus!');
        } else {
            Session::flash('errMessage', 'PTW gagal dihapus!');
        }

        return redirect('/ptws');
    }

    public function print($uuid)
    {
        set_time_limit(0);
        $ptw = PTW::with([
            'ptw_ptw_description.ptw_description.ptw_description_ptw_isolation_method.ptw_isolation_method',
            'ptw_jsa_safety_permit.jsa_safety_permit',
            'ptw_ptw_note.ptw_note',
        ])->findOrFail($uuid)->toArray();

        $safety_permits = JSASafetyPermit::all()->toArray();

        return view('ptws.print', ['ptw' => $ptw, 'safety_permits' => $safety_permits]);
    }
}
