<?php

namespace Jgsouza\Icarus\Http\Controllers\Api;

use Illuminate\Routing\Controller;
use Tymon\JWTAuth\Facades\JWTAuth;
use Jgsouza\Icarus\Http\Requests\LoginRequest;

class AuthApiController extends Controller
{
    public function login(LoginRequest $request)
    {
        $data = $request->only('email', 'password');

        if (! $token = auth('api')->attempt($data)) {
            return response()->json(['error' => 'Unauthorized'], 401);
        }

        return response()->json([
            'access_token' => $token,
            'token_type' => 'bearer',
            'expires_in' => auth('api')->factory()->getTTL() * 60
        ]);
    }

    public function logout()
    {
        JWTAuth::invalidate(JWTAuth::getToken());
        return response()->json(['message' => 'Logged out']);
    }
}