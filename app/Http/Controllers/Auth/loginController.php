<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class loginController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        $login = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (!Auth::attempt($login)) {
            return response([
                'message' => 'Invalid login details'
            ], 401);
        }

        $user = Auth::user();

        return response()->json([
            'token' => $user->createToken('apitodos')->plainTextToken
        ]);
    }
}
