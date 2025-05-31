<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class CspHeaders
{
    public function handle(Request $request, Closure $next)
    {
        $response = $next($request);
        
        $csp = [
            "default-src 'self'",
            "script-src 'self' 'unsafe-inline' https:",
            "style-src 'self' 'unsafe-inline' https:",
            "img-src 'self' data: https:",
            "font-src 'self' https:",
            "connect-src 'self'",
            "form-action 'self'",
            "frame-ancestors 'self'",
            // Add more directives as needed
        ];
        
        $response->headers->set(
            'Content-Security-Policy', 
            implode('; ', $csp)
        );
        
        // For older browsers
        $response->headers->set('X-Content-Security-Policy', implode('; ', $csp));
        
        // Add Referrer-Policy header
        $response->headers->set('Referrer-Policy', 'strict-origin-when-cross-origin');
       
        return $response;
    }
}