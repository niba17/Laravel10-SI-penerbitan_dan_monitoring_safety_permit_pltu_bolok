<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\PTWNote;
use Spatie\Permission\Models\Role;
use App\Http\Requests\PTWNoteRequest;
use Illuminate\Support\Facades\Session;
use App\Http\Requests\RoleAndUserRequest;

class RoleAndUserController extends Controller
{
    public function index()
    {
        $roles_and_users = Role::with('users')->get();

        return view('roles_and_users.index', ['roles_and_users' => $roles_and_users]);
    }

    public function create()
    {
        $roles_and_users = PTWNote::all();

        return view('roles_and_users.create', ['roles_and_users' => $roles_and_users]);
    }

    public function store(RoleAndUserRequest $request)
    {
        $result = PTWNote::create($request->all());

        if ($result) {
            Session::flash('succMessage', 'Catatan Tambahan berhasil ditambahkan!');
        } else {
            Session::flash('errMessage', 'Catatan Tambahan gagal ditambahkan!');
        }

        return redirect('/roles_and_users');
    }

    public function edit($id)
    {
        $role = Role::with('users')->findOrFail($id);
        $users = User::with('roles')->get();

        // dd($role);

        return view('roles_and_users.edit', ['role' => $role, 'users' => $users]);
    }

    public function update(RoleAndUserRequest $request, $id)
    {
        $users = User::all();

        try {
            if (isset($request->user_id)) {

                foreach ($request->user_id as $requset_user_id) {

                    $user = User::findOrFail($requset_user_id);
                    $role = Role::findOrFail($request->role_id);
                    $user->assignRole($role);
                }
            }

            foreach ($users as $user) {

                $bool = false;
                if (isset($request->user_id)) {

                    foreach ($request->user_id as $request_user_id) {



                        if ($request_user_id == $user->id) {
                            $bool = true;
                        }
                    }
                }

                if ($bool == false) {
                    $user = User::findOrFail($user->id);
                    $role = Role::findOrFail($request->role_id);
                    $user->removeRole($role);
                }
            }

            Session::flash('succMessage', 'Role & User berhasil diubah!');
        } catch (\Throwable $th) {
            Session::flash('errMessage', 'Role & User gagal diubah!');
        }

        return redirect('/roles_and_users');
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

        return redirect('/roles_and_users');
    }

    public function request()
    {
        $roles_and_users = PTWNote::all();

        return response()->json([$roles_and_users]);
    }
}
