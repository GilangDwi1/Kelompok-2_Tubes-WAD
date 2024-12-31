<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminMiddleware
{
    public function handle($request, Closure $next, $role)
    {
        if (!Auth::check() || Auth::user()->role = 'admin') {
            return redirect('admin.dashboard');
        }
        return $next($request);
        // Jika pengguna tidak admin, redirect ke halaman login atau halaman lain
        return redirect('/')->with('error', 'You do not have client access.');
    }
}
