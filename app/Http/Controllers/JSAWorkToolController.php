<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\JSAWorkTool;
use Illuminate\Support\Facades\Session;
use App\Http\Requests\JSAWorkToolRequest;

class JSAWorkToolController extends Controller
{
    public function index()
    {
        $work_tools = JSAWorkTool::all();

        return view('work_tools.index', ['work_tools' => $work_tools]);
    }

    public function create()
    {
        $work_tools = JSAWorkTool::all();

        return view('work_tools.create', ['work_tools' => $work_tools]);
    }

    public function store(JSAWorkToolRequest $request)
    {
        $result = JSAWorkTool::create($request->all());

        if ($result) {
            Session::flash('succMessage', 'Tool Kerja berhasil ditambahkan!');
        } else {
            Session::flash('errMessage', 'Tool Kerja gagal ditambahkan!');
        }

        return redirect('/work_tools');
    }

    public function edit($uuid)
    {
        $work_tools = JSAWorkTool::findOrFail($uuid);

        return view('work_tools.edit', ['work_tools' => $work_tools]);
    }

    public function update(JSAWorkToolRequest $request, $uuid)
    {
        $user = JSAWorkTool::findOrFail($uuid);

        $result = $user->update($request->all());

        if ($result) {
            Session::flash('succMessage', 'Tool Kerja berhasil diubah!');
        } else {
            Session::flash('errMessage', 'Tool Kerja gagal diubah!');
        }

        return redirect('/work_tools');
    }

    public function destroy($uuid)
    {
        $work_tools = JSAWorkTool::findOrFail($uuid);
        $result = $work_tools->delete();

        if ($result) {
            Session::flash('succMessage', 'Tool Kerja berhasil dihapus!');
        } else {
            Session::flash('errMessage', 'Tool Kerja gagal dihapus!');
        }

        return redirect('/work_tools');
    }

    public function request()
    {
        $work_tools = JSAWorkTool::all();

        return response()->json([$work_tools]);
    }
}
