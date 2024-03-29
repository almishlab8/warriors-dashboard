<?php

namespace App\Http\Middleware;

use Closure;
use Auth;
class AdminAndTeacher
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
        if (Auth::check() && Auth::user()->admin == 2) {
            return $next($request);
        }
        elseif (Auth::check() && Auth::user()->admin == 1) {
            return $next($request);
        }
        else {
            return redirect('/login');
        }
    }
}
