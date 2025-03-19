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
            'https://www.shipa1.com/services/car-shipping-service' => 'https://www.shipa1.com/transport-services/car/',
            'https://www.shipa1.com/services/motorcycle-shipping-service' => 'https://www.shipa1.com/transport-services/motorcycle/',
            'https://www.shipa1.com/services/atv-utv-transport' => 'https://www.shipa1.com/transport-services/atv-utv/',
            'https://www.shipa1.com/services/golf-cart-shipping-service' => 'https://www.shipa1.com/transport-services/golf-cart/',
            'https://www.shipa1.com/services/boat-service' => 'https://www.shipa1.com/transport-services/boat/',
            'https://www.shipa1.com/services/construction-equipment-transport-shipping' => 'https://www.shipa1.com/transport-services/construction-equipment/',
            'https://www.shipa1.com/services/commercial-truck-transport' => 'https://www.shipa1.com/transport-services/commercial-truck/',
            'https://www.shipa1.com/services/excavator-shipping-services' => 'https://www.shipa1.com/transport-services/excavator/',
            'https://www.shipa1.com/services/farm-transport-services' => 'https://www.shipa1.com/transport-services/farm-equipment/',
            'https://www.shipa1.com/services/heavy-equipment-shipping-services' => 'https://www.shipa1.com/transport-services/heavy-equipment/',
            'https://www.shipa1.com/services/rv-service' => 'https://www.shipa1.com/transport-services/rv/',
            'https://www.shipa1.com/services/dry-van-transportation' => 'https://www.shipa1.com/transport-services/dry-van/',
            'https://www.shipa1.com/services/hazmat-transport' => 'https://www.shipa1.com/transport-services/hazmat/',
            'https://www.shipa1.com/services/reefer-trucking' => 'https://www.shipa1.com/transport-services/reefer/',
            'https://www.shipa1.com/roro-shipping-international' => 'https://www.shipa1.com/transport-services/roro/',
            // Auction Transport Services
            'https://www.shipa1.com/auctions-car-transport' => 'https://www.shipa1.com/auction-transport/car/',
            'https://www.shipa1.com/heavy-auction-transport' => 'https://www.shipa1.com/auction-transport/heavy-equipment/',
            'https://www.shipa1.com/3pl-logistics' => 'https://www.shipa1.com/auction-transport/freight/',            
            // Instant Quote Services
            'https://www.shipa1.com/quote-form' => 'https://www.shipa1.com/instant-quote/',
            'https://www.shipa1.com/atv-utv' => 'https://www.shipa1.com/instant-quote/atv-utv/',
            'https://www.shipa1.com/car' => 'https://www.shipa1.com/instant-quote/car/',
            'https://www.shipa1.com/golf-cart' => 'https://www.shipa1.com/instant-quote/golf-cart/',
            'https://www.shipa1.com/motorcycle' => 'https://www.shipa1.com/instant-quote/motorcycle/',
            'https://www.shipa1.com/boat' => 'https://www.shipa1.com/instant-quote/boat/',
            'https://www.shipa1.com/commercial-truck-transport' => 'https://www.shipa1.com/instant-quote/commercial-truck/',
            'https://www.shipa1.com/construction_transport' => 'https://www.shipa1.com/instant-quote/construction-equipment/',
            'https://www.shipa1.com/heavy' => 'https://www.shipa1.com/instant-quote/heavy-equipment/',
            'https://www.shipa1.com/excavator' => 'https://www.shipa1.com/instant-quote/excavator/',
            'https://www.shipa1.com/rv_transport' => 'https://www.shipa1.com/instant-quote/rv/',
            'https://www.shipa1.com/Hazmat-Transport' => 'https://www.shipa1.com/instant-quote/hazmat/',
            'https://www.shipa1.com/Dry-Van-Transport' => 'https://www.shipa1.com/instant-quote/dry-van/',
            'https://www.shipa1.com/Reefer-Shipping-Transport' => 'https://www.shipa1.com/instant-quote/reefer/',
            'https://www.shipa1.com/roro-shipping' => 'https://www.shipa1.com/instant-quote/roro/',
        ];

        $currentPath = $request->path();

        if (array_key_exists($currentPath, $redirects)) {
            return redirect($redirects[$currentPath], 301);
        }

        return $next($request);
    }

}
