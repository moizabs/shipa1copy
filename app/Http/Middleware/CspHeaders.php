<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class CspHeaders
{
  public function handle(Request $request, Closure $next)
{
    $response = $next($request);
    
    if (app()->environment('local')) {
        // Development CSP (all necessary external domains allowed)
        $csp = [
            "default-src 'self' http://127.0.0.1:8000",
            "script-src 'self' 'unsafe-inline' 'unsafe-eval' http://127.0.0.1:8000 http://localhost:3000 https: http://code.jquery.com http://cdnjs.cloudflare.com http://cdn.jsdelivr.net http://stackpath.bootstrapcdn.com http://maxcdn.bootstrapcdn.com http://ajax.googleapis.com http://unpkg.com http://www.googletagmanager.com",
            "style-src 'self' 'unsafe-inline' http://127.0.0.1:8000 http://localhost:3000 https: http://cdnjs.cloudflare.com http://cdn.jsdelivr.net http://stackpath.bootstrapcdn.com http://maxcdn.bootstrapcdn.com",
            "img-src 'self' data: blob: http://127.0.0.1:8000 https: http://picsum.photos http://firebasestorage.googleapis.com",
            "font-src 'self' data: http://127.0.0.1:8000 https: http://cdnjs.cloudflare.com http://cdn.jsdelivr.net http://stackpath.bootstrapcdn.com http://maxcdn.bootstrapcdn.com",
            "connect-src 'self' ws://127.0.0.1:3000 ws://localhost:3000 http://127.0.0.1:8000 https: http://www.googletagmanager.com",
            "form-action 'self' http://127.0.0.1:8000",
            "frame-src 'self' http://www.shipa1.com http://127.0.0.1:8000 http://www.googletagmanager.com http://www.google.com",
            "frame-ancestors 'self'",
            "media-src 'self' http://127.0.0.1:8000",
            "object-src 'none'",
            "base-uri 'self'",
            "worker-src 'self' blob:"
        ];
    } else {
        // Production CSP (strict rules)
        $csp = [
            "default-src 'self'",
            "script-src 'self' https:",
            "style-src 'self' https: 'unsafe-inline'",
            "img-src 'self' data: https:",
            "font-src 'self' https:",
            "connect-src 'self' https:",
            "form-action 'self'",
            "frame-src 'self' https:",
            "frame-ancestors 'self'",
            "media-src 'self' https:",
            "object-src 'none'",
            "base-uri 'self'"
        ];
    }

    $response->headers->set('Content-Security-Policy', implode('; ', $csp));
    // ... other security headers ...
    
    return $response;
}
}