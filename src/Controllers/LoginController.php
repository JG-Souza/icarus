<?php

namespace Jgsouza\Icarus\Http\Controllers; // Criar pasta Http?

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller // As classes daqui remetem a POO? O que seria o extend?
{
    public function loginGet(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            return redirect()->intended('home');
        }

        return back()->withErrors(['email' => 'Invalid credentials.']);
    }
}

//