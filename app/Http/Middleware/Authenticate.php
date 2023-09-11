<?php

namespace App\Http\Middleware;

use Illuminate\Auth\Middleware\Authenticate as Middleware;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Authenticate extends Middleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, \Closure $next, ...$guards)
    {
        if ($this->authenticate($request, $guards) === 'authentication_failed') {
            return $this->unauthenticated($request, $guards);
        }

        return $next($request);
    }

    /**
     * Determine if the user is logged in to any of the given guards.
     */
    protected function authenticate($request, array $guards)
    {
        if (empty($guards)) {
            $guards = [null];
        }
    
        foreach ($guards as $guard) {
            if (Auth::guard($guard)->check()) {
                return Auth::shouldUse($guard);
            }
        }
    
        return 'authentication_failed';
    }
    

    /**
     * Handle unauthenticated requests.
     */
    protected function unauthenticated($request, array $guards)
    {
        // For API calls
        if ($request->expectsJson()) {
            return response()->json(['error' => 'You need to login first to access this route.'], 401);
        }

        // For web routes
        return response('You need to login first to access this page.', 401);
    }
}
