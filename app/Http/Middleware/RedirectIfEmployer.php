<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class RedirectIfEmployer
{
	/**
	 * Handle an incoming request.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  \Closure  $next
	 * @param  string|null  $guard
	 * @return mixed
	 */
	public function handle($request, Closure $next, $guard = 'employer')
	{
	    if (Auth::guard($guard)->check()) {
	    	$id = Auth::guard($guard)->user()->id;
	    	$dateT = date('l jS \of F Y h:i:s A');
	    	Log::info('employer created a logout successfully', ['email' => $request->email,'time'=>$dateT]);
	       return Redirect('employer/profile/'.$id);
	    }

	    return $next($request);
	}
}