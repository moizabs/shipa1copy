<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class ForceHttps
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */

    public function handle(Request $request, Closure $next)
    {
        if (app()->environment('production')) {
            $host = $request->getHost();

            if (!$request->isSecure() || !str_starts_with($host, 'www.')) {
                $newUrl = 'https://www.' . ltrim($host, 'www.') . $request->getRequestUri();
                return Redirect::to($newUrl, 301);
            }
        }

        return $next($request);
    }
}
