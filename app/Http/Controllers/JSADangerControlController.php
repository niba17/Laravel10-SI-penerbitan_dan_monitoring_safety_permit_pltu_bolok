<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\JSADangerControl;
use Illuminate\Support\Facades\Session;
use App\Http\Requests\JSADangerControlRequest;

class JSADangerControlController extends Controller
{
    public function index()
    {
        $danger_controls = JSADangerControl::all();

        return view('danger_controls.index', ['danger_controls' => $danger_controls]);
    }

    public function create()
    {
        $danger_controls = JSADangerControl::all();

        return view('danger_controls.create', ['danger_controls' => $danger_controls]);
    }

    public function store(JSADangerControlRequest $request)
    {
        $result = JSADangerControl::create($request->all());

        if ($result) {
            Session::flash('succMessage', 'Pengendalian Bahaya berhasil ditambahkan!');
        } else {
            Session::flash('errMessage', 'Pengendalian Bahaya gagal ditambahkan!');
        }

        return redirect('/danger_controls');
    }

    public function edit($uuid)
    {
        $danger_controls = JSADangerControl::findOrFail($uuid);

        return view('danger_controls.edit', ['danger_controls' => $danger_controls]);
    }

    public function update(JSADangerControlRequest $request, $uuid)
    {
        $user = JSADangerControl::findOrFail($uuid);

        $result = $user->update($request->all());

        if ($result) {
            Session::flash('succMessage', 'Pengendalian Bahaya berhasil diubah!');
        } else {
            Session::flash('errMessage', 'Pengendalian Bahaya gagal diubah!');
        }

        return redirect('/danger_controls');
    }

    public function destroy($uuid)
    {
        $danger_controls = JSADangerControl::findOrFail($uuid);
        $result = $danger_controls->delete();

        if ($result) {
            Session::flash('succMessage', 'Pengendalian Bahaya berhasil dihapus!');
        } else {
            Session::flash('errMessage', 'Pengendalian Bahaya gagal dihapus!');
        }

        return redirect('/danger_controls');
    }

    public function request()
    {
        $danger_controls = JSADangerControl::all();

        return response()->json([$danger_controls]);
    }
}
