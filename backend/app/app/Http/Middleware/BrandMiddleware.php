<?php

namespace App\Http\Middleware;

use Closure;

class BrandMiddleware
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
    if ($request->user() && $request->user()->type != 'brand')
}
return new Responsive(view('unauthroised')->with('role','BRAND'));

    {
        return $next($request);
    }
}
