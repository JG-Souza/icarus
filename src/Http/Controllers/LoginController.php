<?php

namespace Jgsouza\Icarus\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Routing\Controller;

class LoginController extends Controller
{

    public function create()
    {
        return view('icarus::auth.login');
    }

    public function store(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            return redirect()->intended(route('home'));
        }

        return back()->withErrors([
            'email' => 'Invalid credentials.'
        ]);
    }
}

//