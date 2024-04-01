<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\JSAPIC;
use Illuminate\Support\Facades\Session;
use App\Http\Requests\JSAPICRequest;

class JSAPICController extends Controller
{
    public function index()
    {
        $pics = JSAPIC::all();

        return view('pics.index', ['pics' => $pics]);
    }

    public function create()
    {
        $pics = JSAPIC::all();

        return view('pics.create', ['pics' => $pics]);
    }

    public function store(JSAPICRequest $request)
    {
        $result = JSAPIC::create($request->all());

        if ($result) {
            Session::flash('succMessage', 'PIC berhasil ditambahkan!');
        } else {
            Session::flash('errMessage', 'PIC gagal ditambahkan!');
        }

        return redirect('/pics');
    }

    public function edit($uuid)
    {
        $pics = JSAPIC::findOrFail($uuid);

        return view('pics.edit', ['pics' => $pics]);
    }

    public function update(JSAPICRequest $request, $uuid)
    {
        $user = JSAPIC::findOrFail($uuid);

        $result = $user->update($request->all());

        if ($result) {
            Session::flash('succMessage', 'PIC berhasil diubah!');
        } else {
            Session::flash('errMessage', 'PIC gagal diubah!');
        }

        return redirect('/pics');
    }

    public function destroy($uuid)
    {
        $pics = JSAPIC::findOrFail($uuid);
        $result = $pics->delete();

        if ($result) {
            Session::flash('succMessage', 'PIC berhasil dihapus!');
        } else {
            Session::flash('errMessage', 'PIC gagal dihapus!');
        }

        return redirect('/pics');
    }

    public function request()
    {
        $pics = JSAPIC::all();

        return response()->json([$pics]);
    }
}
