<?php

namespace App\Http\Middleware;

use Closure;

class AkunMiddleware
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
        if(!session('login_berhasil')){
            return redirect()->route('masuk');
        }
        return $next($request);
    }
}
