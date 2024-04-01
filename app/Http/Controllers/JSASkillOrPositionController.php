<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\JSASkillOrPosition;
use Illuminate\Support\Facades\Session;
use App\Http\Requests\JSASkillOrPositionRequest;

class JSASkillOrPositionController extends Controller
{
    public function index()
    {
        $skills_or_positions = JSASkillOrPosition::all();

        return view('skills_or_positions.index', ['skills_or_positions' => $skills_or_positions]);
    }

    public function create()
    {
        $skills_or_positions = JSASkillOrPosition::all();

        return view('skills_or_positions.create', ['skills_or_positions' => $skills_or_positions]);
    }

    public function store(JSASkillOrPositionRequest $request)
    {
        $result = JSASkillOrPosition::create($request->all());

        if ($result) {
            Session::flash('succMessage', 'Skill / Posisi berhasil ditambahkan!');
        } else {
            Session::flash('errMessage', 'Skill / Posisi gagal ditambahkan!');
        }

        return redirect('/skills_or_positions');
    }

    public function edit($uuid)
    {
        $skills_or_positions = JSASkillOrPosition::findOrFail($uuid);

        return view('skills_or_positions.edit', ['skills_or_positions' => $skills_or_positions]);
    }

    public function update(JSASkillOrPositionRequest $request, $uuid)
    {
        $user = JSASkillOrPosition::findOrFail($uuid);

        $result = $user->update($request->all());

        if ($result) {
            Session::flash('succMessage', 'Skill / Posisi berhasil diubah!');
        } else {
            Session::flash('errMessage', 'Skill / Posisi gagal diubah!');
        }

        return redirect('/skills_or_positions');
    }

    public function destroy($uuid)
    {
        $skills_or_positions = JSASkillOrPosition::findOrFail($uuid);
        $result = $skills_or_positions->delete();

        if ($result) {
            Session::flash('succMessage', 'Skill / Posisi berhasil dihapus!');
        } else {
            Session::flash('errMessage', 'Skill / Posisi gagal dihapus!');
        }

        return redirect('/skills_or_positions');
    }

    public function request()
    {
        $skills_or_positions = JSASkillOrPosition::all();

        return response()->json([$skills_or_positions]);
    }
}
