<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\JSAPersonGroup;
use Illuminate\Support\Facades\Session;
use App\Http\Requests\JSAPersonGroupRequest;

class JSAPersonGroupController extends Controller
{
    public function index()
    {
        $person_groups = JSAPersonGroup::all();

        return view('person_groups.index', ['person_groups' => $person_groups]);
    }

    public function create()
    {
        $person_groups = JSAPersonGroup::all();

        return view('person_groups.create', ['person_groups' => $person_groups]);
    }

    public function store(JSAPersonGroupRequest $request)
    {
        $result = JSAPersonGroup::create($request->all());

        if ($result) {
            Session::flash('succMessage', 'PIC berhasil ditambahkan!');
        } else {
            Session::flash('errMessage', 'PIC gagal ditambahkan!');
        }

        return redirect('/person_groups');
    }

    public function edit($uuid)
    {
        $person_groups = JSAPersonGroup::findOrFail($uuid);

        return view('person_groups.edit', ['person_groups' => $person_groups]);
    }

    public function update(JSAPersonGroupRequest $request, $uuid)
    {
        $user = JSAPersonGroup::findOrFail($uuid);

        $result = $user->update($request->all());

        if ($result) {
            Session::flash('succMessage', 'PIC berhasil diubah!');
        } else {
            Session::flash('errMessage', 'PIC gagal diubah!');
        }

        return redirect('/person_groups');
    }

    public function destroy($uuid)
    {
        $person_groups = JSAPersonGroup::findOrFail($uuid);
        $result = $person_groups->delete();

        if ($result) {
            Session::flash('succMessage', 'PIC berhasil dihapus!');
        } else {
            Session::flash('errMessage', 'PIC gagal dihapus!');
        }

        return redirect('/person_groups');
    }

    public function request()
    {
        $person_groups = JSAPersonGroup::all();

        return response()->json([$person_groups]);
    }
}
