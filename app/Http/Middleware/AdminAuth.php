<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class AdminAuth
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if(auth()->check()){
            if($request->user()->is_admin){
                return redirect()->route('getLogin')->with('error','you dont have admin access');
            }
        }else{
            return redirect()->route('getLogin')->with('error','Login to access');
        }
        return $next($request);
    }
}
