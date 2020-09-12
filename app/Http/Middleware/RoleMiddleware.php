<?php

namespace App\Http\Middleware;

use Closure;

class RoleMiddleware
{
    
    protected function handle($request, Closure $next)
    {
        
       return $next($request);
        }
    }
