<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Log;

class FirstMiddleware
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
        Log::debug("Passsed through the first middleware");
        return $next($request);
        //return response("Teste");
    }
}
