<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Requests\UserRequest;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();

        return view('users.index', ['users' => $users]);
    }

    public function create()
    {
        $users = User::all();

        return view('users.create', ['users' => $users]);
    }

    public function store(UserRequest $request)
    {
        $request->password = Hash::make($request->password);

        $result = User::create($request->all());

        if ($result) {
            Session::flash('succMessage', 'User berhasil ditambahkan!');
        } else {
            Session::flash('errMessage', 'User gagal ditambahkan!');
        }

        return redirect('/users');
    }

    public function edit($id)
    {
        $user = User::findOrFail($id);

        return view('users.edit', ['user' => $user]);
    }

    public function update(UserRequest $request, $id)
    {
        $user = User::findOrFail($id);

        $request->merge([
            'password' => $request->password ? Hash::make($request->password) : $user->password,
        ]);

        $result = $user->update($request->all());

        if ($result) {
            Session::flash('succMessage', 'User berhasil diubah!');
        } else {
            Session::flash('errMessage', 'User gagal diubah!');
        }

        return redirect('/users');
    }

    public function destroy($id)
    {
        $user = User::findOrFail($id);
        $result = $user->delete();

        if ($result) {
            Session::flash('succMessage', 'User berhasil dihapus!');
        } else {
            Session::flash('errMessage', 'User gagal dihapus!');
        }

        return redirect('/users');
    }

    public function request()
    {
        $users = User::all();

        return response()->json([$users]);
    }
}
