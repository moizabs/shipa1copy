<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class SecurityHeaders
{
    public function handle(Request $request, Closure $next)
    {
        $response = $next($request);

        // Set only in production (optional)
        if (App::environment('production')) {

            // ✅ X-Frame-Options (Clickjacking protection)
            $response->headers->set('X-Frame-Options', 'SAMEORIGIN');

            // ✅ X-Content-Type-Options (MIME sniffing)
            $response->headers->set('X-Content-Type-Options', 'nosniff');

            // ✅ Referrer-Policy
            $response->headers->set('Referrer-Policy', 'no-referrer-when-downgrade');

            // ✅ Content-Security-Policy (CSP)
            $response->headers->set('Content-Security-Policy', "default-src 'self'; script-src 'self' 'unsafe-inline'; style-src 'self' 'unsafe-inline'; object-src 'none'; frame-ancestors 'self';");

            // You can customize CSP based on what your app actually needs (see note below).
        }

        return $response;
    }
}
