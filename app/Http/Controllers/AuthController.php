<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller {
    public function registration(Request $request) {
        $request->validate([
            'first_name'    => 'required|string|max:255',
            'last_name'     => 'required|string|max:255',
            'email'         => 'required|string|email|max:255|unique:users,email',
            'password'      => 'required|string|min:6|confirmed',
            'mobile'        => 'required|string|unique:users,mobile',
        ]);

        $user = User::create([
            'first_name'    => $request->first_name,
            'last_name'     => $request->last_name,
            'email'         => $request->email,
            'password'      => Hash::make($request->password),
            'mobile'        => $request->mobile,
        ]);

        return response()->json([
            'access_token'  => $user->createToken('auth_token')->plainTextToken,
            'token_type'    => 'Bearer',
        ]);
    }

    public function login(Request $request) {
        $request->validate([
            'email'         => 'required|string|email|max:255',
            'password'      => 'required|string|min:6',
        ]);

        $user = User::where('email', $request->email)->first();

        if (!$user || !Hash::check($request->password, $user->password)) {
            throw ValidationException::withMessages([
                'email' => ['The provided credentials are incorrect.'],
            ]);
        }

        return response()->json([
            'access_token'  => $user->createToken($request->email)->plainTextToken,
            'token_type'    => 'Bearer',
        ]);
    }

    public function logout() {
        Auth::user()->tokens()->delete();
        return response()->json([
            'message' => "Logout success"
        ]);
    }

    public function me(Request $request) {
        return $request->user();
    }
}
