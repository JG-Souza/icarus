<?php

namespace Jgsouza\Icarus\Http\Controllers\Web;

use Illuminate\Support\Facades\Auth;
use Illuminate\Routing\Controller;
use Jgsouza\Icarus\Http\Requests\LoginRequest;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function showLoginForm()
    {
        return view('icarus::login');
    }

    public function login(LoginRequest $request)
    {
        $data = $request->only('email', 'password');

        if (Auth::attempt($data)) {
            $request->session()->regenerate();
            return redirect()->intended('/dashboard');
        }

        return back()->withErrors(['email' => 'Credenciais inválidas.']);
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/login');
    }

    public function index()
    {
        return view('icarus::dashboard');
    }

}