<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class ApiController extends Controller
{
    public function registro( Request $request ){
        // return 'ok';
        $request->validate([
            'name' => 'required|string',
            'email' => 'required|string|email|unique:users',
            'password' => 'required|string|confirmed'
        ]);

        $user = new User([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt( $request->password )
        ]);

        $user->save();

        return response()->json([
            'res' => 'User criado com sucesso'
        ], 201);

    }

    public function login( Request $request ){
        $request->validate([
            'email' => 'required|string|email',
            'password' => 'required|string'
        ]);

        $credenciais = [
            'email' => $request->email,
            'password' => $request->password 
        ];

        if( !Auth::attempt($credenciais) )
            return response()->json([
                'res' => 'Acesso negado'
            ], 401);
        
        $user = $request->user();
        $token = $user->createToken('Token acesso')->accessToken;

        return response()->json([
            'token' => $token
        ], 200);

    }

    public function logout( Request $request ){
        $request->user()->toke()->revoke();
        return response()->json([
            'res' => 'Deslogado'
        ], 200);
    }
}
