<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session; // Import Session facade
use Symfony\Component\HttpFoundation\Response;

class AlreadyLoggedIn
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next)
    {
        if (Session()->has('loginId') && ($request->is('login') || $request->is('register'))) { // Provide feedback if already logged in
            return back()->with('info', 'Anda sudah login.');
        }
        return $next($request);
    }
}
