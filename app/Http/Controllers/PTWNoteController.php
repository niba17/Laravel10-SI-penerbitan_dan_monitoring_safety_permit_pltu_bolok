<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PTWNote;
use Illuminate\Support\Facades\Session;
use App\Http\Requests\PTWNoteRequest;

class PTWNoteController extends Controller
{
    public function index()
    {
        $ptw_notes = PTWNote::all();

        return view('ptw_notes.index', ['ptw_notes' => $ptw_notes]);
    }

    public function create()
    {
        $ptw_notes = PTWNote::all();

        return view('ptw_notes.create', ['ptw_notes' => $ptw_notes]);
    }

    public function store(PTWNoteRequest $request)
    {
        $result = PTWNote::create($request->all());

        if ($result) {
            Session::flash('succMessage', 'Catatan Tambahan berhasil ditambahkan!');
        } else {
            Session::flash('errMessage', 'Catatan Tambahan gagal ditambahkan!');
        }

        return redirect('/ptw_notes');
    }

    public function edit($uuid)
    {
        $ptw_note = PTWNote::findOrFail($uuid);

        return view('ptw_notes.edit', ['ptw_note' => $ptw_note]);
    }

    public function update(PTWNoteRequest $request, $uuid)
    {
        $ptw_note = PTWNote::findOrFail($uuid);

        $result = $ptw_note->update($request->all());

        if ($result) {
            Session::flash('succMessage', 'Catatan Tambahan berhasil diubah!');
        } else {
            Session::flash('errMessage', 'Catatan Tambahan gagal diubah!');
        }

        return redirect('/ptw_notes');
    }

    public function destroy($uuid)
    {
        $ptw_note = PTWNote::findOrFail($uuid);
        $result = $ptw_note->delete();

        if ($result) {
            Session::flash('succMessage', 'Catatan Tambahan berhasil dihapus!');
        } else {
            Session::flash('errMessage', 'Catatan Tambahan gagal dihapus!');
        }

        return redirect('/ptw_notes');
    }

    public function request()
    {
        $ptw_notes = PTWNote::all();

        return response()->json([$ptw_notes]);
    }
}
