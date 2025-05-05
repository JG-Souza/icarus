<?php

namespace Jgsouza\Icarus\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{

    public function loginGet()
    {
        return view('icarus::login');
    }

    public function loginPost(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            return redirect()->intended('/home');
        }

        return back()->withErrors([
            'email' => 'Invalid credentials.'
        ]);
    }
}

//