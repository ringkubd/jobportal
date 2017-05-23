<?php

namespace App\Http\Middleware;

use Closure;
use App\logdata;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class logEmployer
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
        if(Auth::guard('employer')->check()) {
            $id = Auth::guard('employer')->user()->id;
            logdata::insert(['employer_id'=>$id,'links'=>$request->url()]);
        }
        return $next($request);
    }
}
