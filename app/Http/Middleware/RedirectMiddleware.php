<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class RedirectMiddleware
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
        $redirects = [
            // transport-services
            'services/car-shipping-service' => 'transport-services/car/',
            'services/motorcycle-shipping-service' => 'transport-services/motorcycle/',
            'services/atv-utv-transport' => 'transport-services/atv-utv/',
            'services/golf-cart-shipping-service' => 'transport-services/golf-cart/',
            'services/boat-service' => 'transport-services/boat/',
            'services/construction-equipment-transport-shipping' => 'transport-services/construction-equipment/',
            'services/commercial-truck-transport' => 'transport-services/commercial-truck/',
            'services/excavator-shipping-services' => 'transport-services/excavator/',
            'services/farm-transport-services' => 'transport-services/farm-equipment/',
            'services/heavy-equipment-shipping-services' => 'transport-services/heavy-equipment/',
            'services/rv-service' => 'transport-services/rv/',
            'services/dry-van-transportation' => 'transport-services/dry-van/',
            'services/hazmat-transport' => 'transport-services/hazmat/',
            'services/reefer-trucking' => 'transport-services/reefer/',
            'roro-shipping-international' => 'transport-services/roro/',
            // Auction Transport Services
            'auctions-car-transport' => 'auction-transport/car/',
            'heavy-auction-transport' => 'auction-transport/heavy-equipment/',
            '3pl-logistics' => 'auction-transport/freight/',            
            // Instant Quote Services
            'quote-form' => 'instant-quote/',
            'atv-utv' => 'instant-quote/atv-utv/',
            'car' => 'instant-quote/car/',
            'golf-cart' => 'instant-quote/golf-cart/',
            'motorcycle' => 'instant-quote/motorcycle/',
            'boat' => 'instant-quote/boat/',
            'commercial-truck-transport' => 'instant-quote/commercial-truck/',
            'construction_transport' => 'instant-quote/construction-equipment/',
            'heavy' => 'instant-quote/heavy-equipment/',
            'excavator' => 'instant-quote/excavator/',
            'rv_transport' => 'instant-quote/rv/',
            'Hazmat-Transport' => 'instant-quote/hazmat/',
            'Dry-Van-Transport' => 'instant-quote/dry-van/',
            'Reefer-Shipping-Transport' => 'instant-quote/reefer/',
            'roro-shipping' => 'instant-quote/roro/',
        ];

        $currentPath = $request->path();

        if (array_key_exists($currentPath, $redirects)) {
            return redirect($redirects[$currentPath], 301);
        }

        return $next($request);
    }

}
