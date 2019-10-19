<?php

namespace App\Http\Middleware;

use Closure;

class Country
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function __construct() {

    }
    public function handle($request, Closure $next)
    {
        app()->setLocale(country());
        \Config::set('app.country', country());
        
        return $next($request);
    }
}
