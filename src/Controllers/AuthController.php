<?php

namespace Jgsouza\Icarus\Controllers;

use Illuminate\Routing\Controller;

class AuthController extends Controller
{
    public function loginGet()
    {
        return view('icarus::login');
    }
}