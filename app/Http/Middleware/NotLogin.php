<?php

namespace App\Http\Middleware;

use Closure;

class NotLogin
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
        if (session('key')==null) {
            return $next($request);
        }
        return redirect('/');
    }
}
