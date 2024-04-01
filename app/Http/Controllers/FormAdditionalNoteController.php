<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\FormAdditionalNote;
use Illuminate\Support\Facades\Session;
use App\Http\Requests\FormAdditionalNoteRequest;

class FormAdditionalNoteController extends Controller
{
    public function index()
    {

        $additional_notes = FormAdditionalNote::all();

        return view('additional_notes.index', ['additional_notes' => $additional_notes]);
    }

    public function create()
    {
        $additional_notes = FormAdditionalNote::all();

        return view('additional_notes.create', ['additional_notes' => $additional_notes]);
    }

    public function store(FormAdditionalNoteRequest $request)
    {
        try {

            FormAdditionalNote::create($request->all());

            Session::flash('succMessage', 'Catatan Tambahan berhasil ditambahkan!');
        } catch (\Throwable $th) {


            Session::flash('errMessage', 'Catatan Tambahan gagal ditambahkan!');
        }

        return redirect('/additional_notes');
    }

    public function edit($uuid)
    {
        $additional_notes = FormAdditionalNote::findOrFail($uuid);

        return view('additional_notes.edit', ['additional_notes' => $additional_notes]);
    }

    public function update(FormAdditionalNoteRequest $request, $uuid)
    {
        $user = FormAdditionalNote::findOrFail($uuid);

        $result = $user->update($request->all());

        if ($result) {
            Session::flash('succMessage', 'Catatan Tambahan berhasil diubah!');
        } else {
            Session::flash('errMessage', 'Catatan Tambahan gagal diubah!');
        }

        return redirect('/additional_notes');
    }

    public function destroy($uuid)
    {
        $additional_notes = FormAdditionalNote::findOrFail($uuid);
        $result = $additional_notes->delete();

        if ($result) {
            Session::flash('succMessage', 'Catatan Tambahan berhasil dihapus!');
        } else {
            Session::flash('errMessage', 'Catatan Tambahan gagal dihapus!');
        }

        return redirect('/additional_notes');
    }

    public function request()
    {
        $additional_notes = FormAdditionalNote::all();

        return response()->json([$additional_notes]);
    }
}
