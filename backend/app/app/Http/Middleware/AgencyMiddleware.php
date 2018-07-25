<?php

namespace App\Http\Middleware;

use Closure;

class AgencyMiddleware
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
    if ($request->user() && $request->user()->type != 'agency')
}
return new Responsive(view('unauthroised')->with('role','AGENCY'));

    {
        return $next($request);
    }
}
