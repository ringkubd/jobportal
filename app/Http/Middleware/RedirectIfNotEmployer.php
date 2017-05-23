<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
class RedirectIfNotEmployer
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
	    if (!Auth::guard($guard)->check()) {
	    	$dateT = date('l jS \of F Y h:i:s A');
	    	Log::info('employer try a access', ['email' => $request->ip,'time'=>$dateT]);
	        return redirect('employer/login');
	    }

	    return $next($request);
	}
}