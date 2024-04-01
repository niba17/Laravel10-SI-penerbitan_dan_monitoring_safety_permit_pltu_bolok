<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\JSAK3LAppealOfRegulation;
use Illuminate\Support\Facades\Session;
use App\Http\Requests\JSAK3lAppealOfRegulationRequest;

class JSAK3LAppealOfRegulationController extends Controller
{
    public function index()
    {
        $k3l_appeal_of_regulations = JSAK3LAppealOfRegulation::all();

        return view('k3l_appeal_of_regulations.index', ['k3l_appeal_of_regulations' => $k3l_appeal_of_regulations]);
    }

    public function create()
    {
        $k3l_appeal_of_regulations = JSAK3LAppealOfRegulation::all();

        return view('k3l_appeal_of_regulations.create', ['k3l_appeal_of_regulations' => $k3l_appeal_of_regulations]);
    }

    public function store(JSAK3lAppealOfRegulationRequest $request)
    {
        $result = JSAK3LAppealOfRegulation::create($request->all());

        if ($result) {
            Session::flash('succMessage', 'PIC berhasil ditambahkan!');
        } else {
            Session::flash('errMessage', 'PIC gagal ditambahkan!');
        }

        return redirect('/k3l_appeal_of_regulations');
    }

    public function edit($uuid)
    {
        $k3l_appeal_of_regulations = JSAK3LAppealOfRegulation::findOrFail($uuid);

        return view('k3l_appeal_of_regulations.edit', ['k3l_appeal_of_regulations' => $k3l_appeal_of_regulations]);
    }

    public function update(JSAK3lAppealOfRegulationRequest $request, $uuid)
    {
        $user = JSAK3LAppealOfRegulation::findOrFail($uuid);

        $result = $user->update($request->all());

        if ($result) {
            Session::flash('succMessage', 'PIC berhasil diubah!');
        } else {
            Session::flash('errMessage', 'PIC gagal diubah!');
        }

        return redirect('/k3l_appeal_of_regulations');
    }

    public function destroy($uuid)
    {
        $k3l_appeal_of_regulations = JSAK3LAppealOfRegulation::findOrFail($uuid);
        $result = $k3l_appeal_of_regulations->delete();

        if ($result) {
            Session::flash('succMessage', 'PIC berhasil dihapus!');
        } else {
            Session::flash('errMessage', 'PIC gagal dihapus!');
        }

        return redirect('/k3l_appeal_of_regulations');
    }

    public function request()
    {
        $k3l_appeal_of_regulations = JSAK3LAppealOfRegulation::all();

        return response()->json([$k3l_appeal_of_regulations]);
    }
}
