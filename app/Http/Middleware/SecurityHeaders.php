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

             $response->headers->set('Content-Security-Policy', "
                default-src 'self';
                script-src 'self' 'unsafe-inline' https://cdn.jsdelivr.net https://cdnjs.cloudflare.com https://code.jquery.com https://unpkg.com https://stackpath.bootstrapcdn.com https://ajax.googleapis.com https://www.googletagmanager.com https://www.clarity.ms;
                style-src 'self' 'unsafe-inline' https://fonts.googleapis.com https://cdn.jsdelivr.net https://cdnjs.cloudflare.com https://stackpath.bootstrapcdn.com https://maxcdn.bootstrapcdn.com;
                font-src 'self' https://fonts.gstatic.com https://cdnjs.cloudflare.com;
                img-src 'self' data:;
                connect-src 'self' https://www.clarity.ms https://www.googletagmanager.com;
                object-src 'none';
                frame-ancestors 'self';
                base-uri 'self';
            ");
            // You can customize CSP based on what your app actually needs (see note below).
        }

        return $response;
    }
}
