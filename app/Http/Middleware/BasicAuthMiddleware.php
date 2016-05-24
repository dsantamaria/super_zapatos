<?php

namespace App\Http\Middleware;

use Closure;

class BasicAuthMiddleware
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
        if((isset($_SERVER['PHP_AUTH_USER']) && isset($_SERVER['PHP_AUTH_PW']))
            && $_SERVER['PHP_AUTH_USER'] == 'my_user' && $_SERVER['PHP_AUTH_PW'] == 'my_password')
        {
            return $next($request);
        }
        else
        {
            return response('Unauthorized.', 401);
        }
    }
}
