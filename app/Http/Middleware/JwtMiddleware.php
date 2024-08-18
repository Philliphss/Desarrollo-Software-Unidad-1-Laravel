<?php

namespace App\Http\Middleware;

use Closure;
use Exception;
use Firebase\JWT\JWT;
use Firebase\JWT\ExpiredException;
use Illuminate\Http\Request;

class JwtMiddleware
{
    public function handle(Request $request, Closure $next)
    {
        $token = $request->bearerToken();

        if (!$token) {
            return response()->json(['error' => 'Token no proporcionado.'], 401);
        }

        try {
            $credentials = JWT::decode($token, env('JWT_SECRET'), ['HS256']);
        } catch (ExpiredException $e) {
            return response()->json(['error' => 'El token ha expirado.'], 400);
        } catch (Exception $e) {
            return response()->json(['error' => 'Ocurrió un error al decodificar el token.'], 400);
        }

        $request->auth = $credentials->sub;

        return $next($request);
    }

    protected $routeMiddleware = [
        // Otros middlewares
        'jwt.auth' => \App\Http\Middleware\JwtMiddleware::class,
    ];
}
