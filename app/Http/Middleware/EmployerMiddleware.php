<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;

class Employer
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        return $next($request);
    }

    function handle($request, Closure $next)
    {
        if (Auth::check() && Auth::user()->role == 'employer') {
            return $next($request);
        } elseif (Auth::check() && Auth::user()->role == 'worker') {
            return redirect('/worker');
        } else {
            return redirect('/admin');
        }
    }
}
