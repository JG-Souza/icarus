<?php

namespace Jgsouza\Icarus\Controllers;

class AuthController extends Controller
{
    public function loginGet()
    {
        return view('icarus::login');
    }
}