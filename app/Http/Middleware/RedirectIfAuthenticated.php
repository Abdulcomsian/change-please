<?php

namespace App\Http\Middleware;

use App\Providers\RouteServiceProvider;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @param  string|null  ...$guards
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next, ...$guards)
    {
        $guards = empty($guards) ? [null] : $guards;

        foreach ($guards as $guard) {
            if (Auth::guard($guard)->check()) { 

                if(auth()->user()->role == \AppConst::INVESTEE_ROLE)
                {
                    return redirect(RouteServiceProvider::INVESTEE_HOME);
                }
                elseif(auth()->user()->role == \AppConst::INVESTER_ROLE)
                {
                    return redirect(RouteServiceProvider::INVESTER_HOME);
                }
                //return redirect(RouteServiceProvider::HOME);
            }
        }

        return $next($request);
    }
}
