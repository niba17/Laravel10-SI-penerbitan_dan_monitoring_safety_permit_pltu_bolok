<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\JSASafetyPermit;
use Illuminate\Support\Facades\Session;
use App\Http\Requests\JSASafetyPermitRequest;

class JSASafetyPermitController extends Controller
{
    public function index()
    {
        $safety_permits = JSASafetyPermit::all();

        return view('safety_permits.index', ['safety_permits' => $safety_permits]);
    }

    public function create()
    {
        $safety_permits = JSASafetyPermit::all();

        return view('safety_permits.create', ['safety_permits' => $safety_permits]);
    }

    public function store(JSASafetyPermitRequest $request)
    {
        $result = JSASafetyPermit::create($request->all());

        if ($result) {
            Session::flash('succMessage', 'Safety Permit berhasil ditambahkan!');
        } else {
            Session::flash('errMessage', 'Safety Permit gagal ditambahkan!');
        }

        return redirect('/safety_permits');
    }

    public function edit($uuid)
    {
        $safety_permits = JSASafetyPermit::findOrFail($uuid);

        return view('safety_permits.edit', ['safety_permits' => $safety_permits]);
    }

    public function update(JSASafetyPermitRequest $request, $uuid)
    {
        $user = JSASafetyPermit::findOrFail($uuid);

        $result = $user->update($request->all());

        if ($result) {
            Session::flash('succMessage', 'Safety Permit berhasil diubah!');
        } else {
            Session::flash('errMessage', 'Safety Permit gagal diubah!');
        }

        return redirect('/safety_permits');
    }

    public function destroy($uuid)
    {
        $safety_permits = JSASafetyPermit::findOrFail($uuid);
        $result = $safety_permits->delete();

        if ($result) {
            Session::flash('succMessage', 'Safety Permit berhasil dihapus!');
        } else {
            Session::flash('errMessage', 'Safety Permit gagal dihapus!');
        }

        return redirect('/safety_permits');
    }

    public function request()
    {
        $safety_permits = JSASafetyPermit::all();

        return response()->json([$safety_permits]);
    }
}
