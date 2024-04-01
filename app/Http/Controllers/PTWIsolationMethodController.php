<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PTWIsolationMethod;
use Illuminate\Support\Facades\Session;
use App\Http\Requests\PTWIsolationMethodRequest;

class PTWIsolationMethodController extends Controller
{
    public function index()
    {
        $isolation_methods = PTWIsolationMethod::all();

        return view('isolation_methods.index', ['isolation_methods' => $isolation_methods]);
    }

    public function create()
    {
        $isolation_methods = PTWIsolationMethod::all();

        return view('isolation_methods.create', ['isolation_methods' => $isolation_methods]);
    }

    public function store(PTWIsolationMethodRequest $request)
    {
        $result = PTWIsolationMethod::create($request->all());

        if ($result) {
            Session::flash('succMessage', 'Deskripsi berhasil ditambahkan!');
        } else {
            Session::flash('errMessage', 'Deskripsi gagal ditambahkan!');
        }

        return redirect('/isolation_methods');
    }

    public function edit($uuid)
    {
        $isolation_method = PTWIsolationMethod::findOrFail($uuid);

        return view('isolation_methods.edit', ['isolation_method' => $isolation_method]);
    }

    public function update(PTWIsolationMethodRequest $request, $uuid)
    {
        $ptw_isolation_method = PTWIsolationMethod::findOrFail($uuid);

        $result = $ptw_isolation_method->update($request->all());

        if ($result) {
            Session::flash('succMessage', 'Deskripsi berhasil diubah!');
        } else {
            Session::flash('errMessage', 'Deskripsi gagal diubah!');
        }

        return redirect('/isolation_methods');
    }

    public function destroy($uuid)
    {
        $ptw_isolation_method = PTWIsolationMethod::findOrFail($uuid);
        $result = $ptw_isolation_method->delete();

        if ($result) {
            Session::flash('succMessage', 'Deskripsi berhasil dihapus!');
        } else {
            Session::flash('errMessage', 'Deskripsi gagal dihapus!');
        }

        return redirect('/isolation_methods');
    }

    public function request()
    {
        $isolation_methods = PTWIsolationMethod::all();

        return response()->json([$isolation_methods]);
    }
}
