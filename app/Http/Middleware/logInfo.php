<?php

namespace App\Http\Middleware;

use Closure;
use App\logdata;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class loginfo
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
        if(Auth::guard('jobseeker')->check()) {
            $id = Auth::guard('jobseeker')->user()->id;
            logdata::insert(['jobseeker_id'=>$id,'links'=>$request->url()]);
            
        }
        
        return $next($request);
    }
}
