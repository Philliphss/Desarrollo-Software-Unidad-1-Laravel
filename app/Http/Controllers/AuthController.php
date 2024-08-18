<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Firebase\JWT\JWT;

class AuthController extends Controller
{
    public function register(Request $request)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
            'correo' => 'required|string|email|max:255|unique:usuarios',
            'clave' => 'required|string|min:8',
        ]);

        $usuario = Usuario::create([
            'nombre' => $request->nombre,
            'correo' => $request->correo,
            'clave' => Hash::make($request->clave),
        ]);

        return response()->json($usuario, 201);
    }

    public function login(Request $request)
    {
        $request->validate([
            'correo' => 'required|string|email',
            'clave' => 'required|string',
        ]);

        $usuario = Usuario::where('correo', $request->correo)->first();

        if (!$usuario || !Hash::check($request->clave, $usuario->clave)) {
            return response()->json(['error' => 'Credenciales inválidas'], 401);
        }

        $payload = [
            'iss' => "lumen-jwt", // Emisor del token
            'sub' => $usuario->id, // Subject (usuario ID)
            'iat' => time(), // Tiempo en que se emitió el token
            'exp' => time() + 60 * 60 // Tiempo de expiración (1 hora)
        ];

        $token = JWT::encode($payload, env('JWT_SECRET'));

        return response()->json(['token' => $token], 200);
    }
}

namespace App\Http\Controllers;

use App\Models\Usuario;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Firebase\JWT\JWT;

class AuthController extends Controller
{
    public function register(Request $request)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
            'correo' => 'required|string|email|max:255|unique:usuarios',
            'clave' => 'required|string|min:8',
        ]);

        $usuario = Usuario::create([
            'nombre' => $request->nombre,
            'correo' => $request->correo,
            'clave' => Hash::make($request->clave),
        ]);

        return response()->json($usuario, 201);
    }

    public function login(Request $request)
    {
        $request->validate([
            'correo' => 'required|string|email',
            'clave' => 'required|string',
        ]);

        $usuario = Usuario::where('correo', $request->correo)->first();

        if (!$usuario || !Hash::check($request->clave, $usuario->clave)) {
            return response()->json(['error' => 'Credenciales inválidas'], 401);
        }

        $payload = [
            'iss' => "lumen-jwt", // Emisor del token
            'sub' => $usuario->id, // Subject (usuario ID)
            'iat' => time(), // Tiempo en que se emitió el token
            'exp' => time() + 60 * 60 // Tiempo de expiración (1 hora)
        ];

        $token = JWT::encode($payload, env('JWT_SECRET'));

        return response()->json(['token' => $token], 200);
    }
}
