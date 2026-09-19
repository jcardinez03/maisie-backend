<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login(Request $request)
    {
        # receive credentials
        $request->validate([
            'email' => 'email|required',
            'password'=> 'required'
        ]);

        # Auth::guard('api')->attempt() - check credentials using JWT auth guard
        $token = Auth::guard('api')->attempt([
            'email' => $request->email,
            'password' => $request->password
        ]);

        if(!$token){
            return response()->json([
                'message' => 'Email or password is incorrect'
            ], 401);
        }

        return response()->json([
            'token' => $token
        ]);
    } 
}
