<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class AuthCheck
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next)
    {
        if (!Session::has('loginId')) { // Check if session contains loginId
            return redirect('/login')->with('fail', 'Anda harus login terlebih dahulu.'); // Redirect to login
        }
        return $next($request);
    }
}
