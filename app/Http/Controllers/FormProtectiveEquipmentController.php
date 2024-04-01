<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\FormProtectiveEquipment;
use Illuminate\Support\Facades\Session;
use App\Http\Requests\FormProtectiveEquipmentRequest;

class FormProtectiveEquipmentController extends Controller
{
    public function index()
    {
        $protective_equipments = FormProtectiveEquipment::all();

        return view('protective_equipments.index', ['protective_equipments' => $protective_equipments]);
    }

    public function create()
    {
        $protective_equipments = FormProtectiveEquipment::all();

        return view('protective_equipments.create', ['protective_equipments' => $protective_equipments]);
    }

    public function store(FormProtectiveEquipmentRequest $request)
    {
        $result = FormProtectiveEquipment::create($request->all());

        if ($result) {
            Session::flash('succMessage', 'Deskripsi berhasil ditambahkan!');
        } else {
            Session::flash('errMessage', 'Deskripsi gagal ditambahkan!');
        }

        return redirect('/protective_equipments');
    }

    public function edit($uuid)
    {
        $protective_equipment = FormProtectiveEquipment::findOrFail($uuid);

        return view('protective_equipments.edit', ['protective_equipment' => $protective_equipment]);
    }

    public function update(FormProtectiveEquipmentRequest $request, $uuid)
    {
        $protective_equipment = FormProtectiveEquipment::findOrFail($uuid);

        $result = $protective_equipment->update($request->all());

        if ($result) {
            Session::flash('succMessage', 'Deskripsi berhasil diubah!');
        } else {
            Session::flash('errMessage', 'Deskripsi gagal diubah!');
        }

        return redirect('/protective_equipments');
    }

    public function destroy($uuid)
    {
        $protective_equipment = FormProtectiveEquipment::findOrFail($uuid);
        $result = $protective_equipment->delete();

        if ($result) {
            Session::flash('succMessage', 'Deskripsi berhasil dihapus!');
        } else {
            Session::flash('errMessage', 'Deskripsi gagal dihapus!');
        }

        return redirect('/protective_equipments');
    }

    public function request()
    {
        $protective_equipments = FormProtectiveEquipment::all();

        return response()->json([$protective_equipments]);
    }
}
