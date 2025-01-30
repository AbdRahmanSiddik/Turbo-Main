<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;
use Spatie\Permission\Exceptions\UnauthorizedException;

class RolePermissionMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, $role = null, $permission = null): Response
    {
        $user = Auth::user();

        if (!$user) {
            return response()->json(['message' => 'Unauthorized'], 401);
        }

        // Jika role diberikan, cek apakah user memiliki role tersebut
        if ($role && !$user->hasRole($role)) {
            return response()->json(['message' => 'Forbidden - Missing Role'], 403);
        }

        // Jika permission diberikan, cek apakah user memiliki permission tersebut
        if ($permission && !$user->hasPermissionTo($permission)) {
            return response()->json(['message' => 'Forbidden - Missing Permission'], 403);
        }

        return $next($request);
    }
}
