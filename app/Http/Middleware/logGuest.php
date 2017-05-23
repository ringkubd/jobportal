<?php

namespace App\Http\Middleware;

use Closure;
use App\logdata;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class logGuest
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if(!Auth::guard('jobseeker')->check() && !Auth::guard('employer')->check()){

            logdata::insert(['guest_ip'=>$request->ip(),'links'=>$request->url()]);
        }
        return $next($request);
    }
}
