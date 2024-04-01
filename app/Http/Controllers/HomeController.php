<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\JSA;
use App\Models\PTW;
use App\Models\Form;
use App\Models\User;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Auth;
use Spatie\Permission\Models\Permission;

class HomeController extends Controller
{
    public function index()
    {
        if (Auth::user()->getRoleNames()->isNotEmpty()) {
            $jsas = JSA::all();
            $forms = Form::all();
            $ptws = PTW::all();

            return view('homes.index', ['jsas' => $jsas, 'forms' => $forms, 'ptws' => $ptws]);
        } else {
            return view('homes.no_role_index');
        }
    }
}
