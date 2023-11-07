<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class loginAuth
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        if(!session('candidate_id') && ($request->path() != "login" && $request->path() != 'verify-otp')){
            return redirect('login');
        }
        if(session('candidate_id') && ($request->path() == 'login' || $request->path() == 'verify-otp')){
            return back();
        }
        return $next($request)->header('Cache-control','mo-cache, no-store,max-age=0, must-revalidate')
                              ->header('pragma','no-cache')
                              ->header('Expires','Sat 01 Jan 1990 00:00:00 GMT');
    }
}
