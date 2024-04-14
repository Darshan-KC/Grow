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
    public function handle(Request $request, Closure $next): Response
    {
        // echo "problem create by admin middleware";
        // die;
        if(Auth::check()){
            if(Auth::user()->role=='a'){
                return $next($request);
            }else{
                return redirect()->route('frontend.home')->with('error', 'You do not have permission to access this page.');
            }
        }else{
            return redirect()->route('login');
        }
        // return $next($request);
    }
}
