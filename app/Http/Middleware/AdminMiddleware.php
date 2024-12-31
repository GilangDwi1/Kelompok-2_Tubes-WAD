<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class AdminMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle($request, Closure $next): Response
    {
        if (!Auth::check() || Auth::user()->role === 'admin') {
            // Optionally, you can redirect to a specific page or return a 403 response
            return $next($request);
        }
        abort(403, 'Unauthorized action.');

    }
}
