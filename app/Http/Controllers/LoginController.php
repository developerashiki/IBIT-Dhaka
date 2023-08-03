<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login(){
        return view('auth.login');
    }



    public function authenticate(Request $request)
    {
        $request->validate([
            'email'     => 'required|email|exists:users',
            'password'  => 'required',
        ]);

        $data = $request->only('email', 'password');

        if (Auth::attempt($data)) {
            return redirect()->route('dashboard-content');
        } else
            return redirect()->route('login')->withErrors(['Invalid Email and password']);
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('login');
    }

}
