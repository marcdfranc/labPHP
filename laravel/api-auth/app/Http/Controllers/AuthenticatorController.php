<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthenticatorController extends Controller
{
    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'email' => 'required|string|email|unique:users',
            'password' => 'required|string|confirmed',
        ]);

        $user = new User([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password)
        ]);

        $user->save();

        return response()->json([
            'res' => 'User created with success.'
        ], 201);
    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|string|email',
            'password' => 'required|string',
        ]);

        $credentials = [
            'email' => $request->email,
            'password' => $request->password
        ];

        if (!Auth::attempt($credentials)) {
            return response()->json([
                'res' => 'Forbiden'
            ], 401);
        }

        $user = $request->user();
        $token = Auth::user()->createToken('Access Token')->acessToken;

        return response()->json([
            'token' => $token
        ], 200);
    }

    public function logout(Request $request)
    {
        $request->user()->token()->revoque();
    }
}
