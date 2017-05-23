<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class RedirectIfJobseeker
{
	/**
	 * Handle an incoming request.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  \Closure  $next
	 * @param  string|null  $guard
	 * @return mixed
	 */
	public function handle($request, Closure $next, $guard = 'jobseeker')
	{
	    if (Auth::guard($guard)->check()) {
	        //return redirect('jobseeker/home');
	        return redirect()->intended('jobseeker');
	    }

	    return $next($request);
	}
}