<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index()
    {
        return view('auth.login');
    }

    public function login(){
        $credentials = request()->only('email', 'password');
        if (auth()->attempt($credentials)) {
            request()->session()->regenerate();
            return redirect()->intended('/dashboard');
        }
        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ]);
    }
}
