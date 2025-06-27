<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class HSTSHeader
{
    public function handle(Request $request, Closure $next)
    {
        $response = $next($request);

        // Only apply if request is secure (HTTPS)
        if ($request->secure()) {
            $response->headers->set('Strict-Transport-Security', 'max-age=63072000; includeSubDomains; preload');
        }

        return $response;
    }
}
