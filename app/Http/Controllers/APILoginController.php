<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Tymon\JWTAuth\Facades\JWTAuth;

class APILoginController extends Controller
{
    public function login()
    {
        $user = User::first();
        $token = JWTAuth::fromUser($user);
        return $this->respondWithToken($token);
    }

    private function respondWithToken($token)
    {
        return response()->json([
            'token' => $token,
            'expires' => auth('api')->factory()->getTTL() * 60,
        ]);
    }
}
