<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class RoleChecker
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, ...$roles)
    {
          // Check if user is authenticated
        if (!auth()->check()) {
            return redirect()->route('login');
        }
        $user = auth()->user();

        // Check if user has any of the required roles
        if (in_array($user->role, $roles)) {
            return $next($request);
        }

        // Redirect or show error if user doesn't have permission
        abort(403, 'Unauthorized. You do not have permission to access this resource.');
    }
}
