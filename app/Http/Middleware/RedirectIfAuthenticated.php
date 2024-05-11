<?php

namespace App\Http\Middleware;

use App\Providers\RouteServiceProvider;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  $guard
     * @return mixed
     */
    public function handle(Request $request, Closure $next, $guard = null)
    {
        if (Auth::guard($guard)->check()) {
            // If the user is logged in and accessing '/home', redirect to '/loggedin'
            if ($request->is('home')) {
                return redirect('/loggedin');
            }

            // If not accessing '/home', redirect to RouteServiceProvider::HOME
            return redirect(RouteServiceProvider::HOME);
        }

        return $next($request);
    }
}
