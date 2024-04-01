<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    public function login()
    {
        return view('auths.login');
    }

    public function authenticate(Request $request)
    {
        $rules = [
            'name' => 'required|max:255',
            'password' => 'required|max:255',
        ];

        $messages = [
            'name.required' => 'Username wajib diisi',
            'name.max' => 'Maksimal karakter Username adalah :max karakter!',

            'password.required' => 'Password wajib diisi',
            'password.max' => 'Maksimal karakter Password adalah :max karakter!',
        ];

        $credentials = $request->validate($rules, $messages);

        try {

            Auth::attempt($credentials);

            $request->session()->regenerate();

            Session::flash('logMessage', 'Selamat Datang ' . Auth::user()->name . '!');
            return redirect()->intended('/');
        } catch (\Throwable $th) {

            Session::flash('errMessage', 'Login Gagal!');
            return redirect('/auths');
        }
    }

    public function create()
    {
        return view('auths.create');
    }

    public function store(Request $request)
    {
        $rules = [
            'name' => 'required|max:255|unique:mysql2.users',
            'password' => 'required|max:255',
            'password_c' => 'required|max:255|same:password',
        ];

        $messages = [
            'name.required' => 'Username wajib diisi',
            'name.max' => 'Maksimal karakter Username adalah :max karakter!',
            'name.unique' => 'Nama sudah ada!',

            'password.required' => 'Password wajib diisi',
            'password.max' => 'Maksimal karakter Password adalah :max karakter!',

            'password_c.required' => 'Konfirmasi Password wajib diisi',
            'password_c.max' => 'Maksimal karakter Konfirmasi Password adalah :max karakter!',
            'password_c.same' => 'Konfirmasi Password tidak sesuai!',
        ];

        $request->validate($rules, $messages);

        try {

            $request->password = Hash::make($request->password);

            User::create($request->all());

            Session::flash('succMessage', 'Akun berhasil ditambahkan!');
            return redirect('/auths');
        } catch (\Throwable $th) {
            Session::flash('errMessage', 'Akun gagal ditambahkan!');
            return redirect('/auths-create');
        }

    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/auths');
    }
}
