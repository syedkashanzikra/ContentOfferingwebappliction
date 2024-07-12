<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class IsAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        // Check if the user is logged in and if their role is 'Admin'
        if (auth()->check() && auth()->user()->role === 'Admin') {
            return $next($request);
        }

        // If user is not an admin, return a 403 Forbidden response
        abort(403, 'Access denied');
    }
}
