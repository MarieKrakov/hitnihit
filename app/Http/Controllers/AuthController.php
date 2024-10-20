<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function show()
    {
        return view('pages.login');
    }

    public function login(Request $request)
    {
        dd($request);
    }

    public function register()
    {
        return view('pages.register');
    }
}



//šablona pro login
//proces při zalogování
//šablona pro registraci
//registrace pro uživatele