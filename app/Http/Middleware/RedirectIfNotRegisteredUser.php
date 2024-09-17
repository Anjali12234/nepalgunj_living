<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class RedirectIfNotRegisteredUser
{
    public function handle($request, Closure $next, $guard = 'registered-user')
    {
        if (!Auth::guard($guard)->check()) {
            return redirect()->route('register');
        }

        return $next($request);
    }
}
