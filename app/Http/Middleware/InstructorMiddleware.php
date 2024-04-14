<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class InstructorMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if(Auth::check()){
            if((Auth::user()->role=='i')|| (Auth::user()->role=='a')){
                return $next($request);
            }else{
                return redirect('/')->with('error', 'You do not have permission to access this page.');
            }
        }else{
            return redirect()->route('login');
        }
        // return $next($request);
    }
}
