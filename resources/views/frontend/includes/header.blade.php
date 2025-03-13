<head>
  <link rel="preload" as="image" href="{{ asset('/frontend/images/logo/LOGO NEW-2.webp') }}" type="image/webp">
</head>
<style>
    .active {
        color: #8fc445 !important;
    }
  .ul-child-custom-heading {
    letter-spacing: 1px;
    font-size: larger;
    text-decoration: none;
    font-weight: bold;
    color: #212529;
  }
</style>
<header class=tj-header-section id=header-sticky>
    <div class=container style=border-radius:12px>
    <div class=row>
    <div class=col-lg-12>
    <div class="bg-color d-flex flex-wrap">
    <div class=logo-area>
    <div class=logo-box>
    <a href="{{ route('welcome') }}" aria-label=Home title=Home><img src="{{ asset('/frontend/images/logo/LOGO NEW-2.webp') }}" width="200" height="70" alt="Logo"></a>
    </div>
    </div>
    <div class=header-content-area>
    <div class=header-topbar>
    <div class="topbar-content-area d-flex flex-wrap align-items-center justify-content-start">
    <div class="header-content-right mr-4">
    <span><i class="fa-regular fa-mobile-screen fa-bounce fa-lg" style=color:#8fc445></i>
    <a href="tel: 1 (844) 474-4721" class="text-white nav-num-hover" aria-label="Call 1 (844) 474-4721" title="Call 1 (844) 474-4721">1 (844) 474-4721</a>
    </span>
    </div>
    <div class="header-content-left me-auto">
    <span><i class="fa-regular fa-envelope fa-bounce fa-lg" style=color:#8fc445></i>
    <a href=mailto:shawntransport@shipa1.com class=text-white aria-label="Email shawntransport@shipa1.com" title="Email shawntransport@shipa1.com"> shawntransport@shipa1.com</a></span>
    </div>
    <div class=header-content-right>
    <div class=header-social-icon>
    <ul class="list-gap social-list">
    <li><a href=https://www.facebook.com/shipa1autotransport aria-label="Visit our Facebook" title="Visit our Facebook"><i class="fa-brands fa-facebook-f"></i></a></li>
    <li><a href=https://www.youtube.com/@shipA1autotransport aria-label="Visit our YouTube" title="Visit our YouTube"><i class="fa-brands fa-youtube"></i></a></li>
    <li><a href=https://www.linkedin.com/in/shipa1-transport/ aria-label="Visit our LinkedIn" title="Visit our LinkedIn"><i class="fa-brands fa-linkedin-in"></i></a></li>
    <li><a href=https://wa.me/+14107184031 aria-label="Contact us on WhatsApp" title="Contact us on WhatsApp"><i class="fa-brands fa-whatsapp"></i></a></li>
    <li><a href=https://www.instagram.com/shipa1_transport/ aria-label="Visit our Instagram" title="Visit our Instagram"><i class="fa-brands fa-instagram"></i></a></li>
    <li><a href=https://www.pinterest.com/shipa10231/ aria-label="Visit our Pinterest" title="Visit our Pinterest"><i class="fa-brands fa-pinterest"></i></a></li>
    </ul>
    </div>
    </div>
    </div>
    </div>
    <div class="header-content d-flex flex-wrap align-items-center justify-content-between">
    <div class="mobile-logo-area d-lg-none">
    <a href="{{ route('welcome') }}" aria-label=Home title=Home>
    <img src="{{ asset('/frontend/images/logo/LOGO NEW-2.webp') }}" width="200" height="70" loading=lazy alt=Logo>
    </a>
    </div>
    <div class="tj-main-menu d-lg-block d-none text-end" id=main-menu>
    <ul class=main-menu>
    @php $navbars = App\Models\Menu::where('status',1)->orderBy('id', 'ASC')->get(); @endphp @foreach ($navbars as $navbar) @if($navbar->id == 1)
    <li class=ab-gap>
    <a href="{{ route('welcome') }}" class="{{ Request::routeIs('welcome') ? ' active' : '' }}"> {{ $navbar->menu_name }}</a>
    </li>
    @endif @endforeach @foreach ($navbars as $navbar) @if($navbar->id == 2)
    <li class=ab-gap>
    <a href="{{ route('quote.form.combine') }}" class="{{ Request::routeIs('quote.form.combine') ? ' active' : '' }}"> {{ $navbar->menu_name }}</a>
    {{-- <ul class="list-gap sub-menu-list">
    <div class=row>
    <div class="col-sm-12 col-md-12 col-lg-4 bd-l bd-r">
    <h4 class="mb-3 ul-child-custom-heading">Vehicle Transportation</h4>
    <li>
    <a class=title href="{{ route('form.vehicle.atv_utv') }}">Atv Utv Transport</a>
    </li>
    <li>
    <a class=title href="{{ route('form.vehicle.car') }}">Car Transport</a>
    </li>
    <li>
    <a class=title href="{{ route('form.vehicle.golf_cart') }}">Golf Cart Transport</a>
    </li>
    <li>
    <a class=title href="{{ route('form.vehicle.form.vehicle.car') }}">Motorcycle Transport</a>
    </li>
    </div>
    <div class="col-sm-12 col-md-12 col-lg-4 bd-r">
    <h4 class="mb-3 ul-child-custom-heading">Heavy Equipment</h4>
    <li>
    <a class=title href="{{ route('form.vehicle.boat') }}"> Boat Transport</a>
    </li>
    <li>
    <a class=title href="{{ route('commercial.truck.transport') }}">Commercial Truck Transport</a>
    </li>
    <li>
    <a class=title href="{{ route('frontend.forms.construction_transport') }}">Construction Transport</a>
    </li>
    <li>
    <a class=title href="{{ route('form.vehicle.heavyEquipment') }}">Heavy Transport</a>
    </li>
    <li>
    <a class=title href="{{ route('frontend.forms.excavator') }}"> Excavator Transport</a>
    </li>
    <li>
    <a class=title href="{{ route('frontend.forms.farm_transport') }}">Farm Transport</a>
    </li>
    <li>
    <a class=title href="{{ route('frontend.forms.rv_transport') }}">RV Transport</a>
    </li>
    </div>
    <div class="col-sm-12 col-md-12 col-lg-4">
    <h4 class="mb-3 ul-child-custom-heading">Freight Transportation</h4>
    <li>
    <a class=title href="{{ route('frontend.forms.hazmattransport') }}">Hazmat Transport</a>
    </li>
    <li>
    <a class=title href="{{ route('frontend.forms.dryvan') }}">Dry Van Transport</a>
    </li>
    <li>
    <a class=title href="{{ route('frontend.forms.reefertrucking') }}">Reefer Trucking</a>
    </li>
    <h4 class="mb-3 ul-child-custom-heading">RORO</h4>
    <li>
    <a class=title href="{{ route('form.vehicle.roro') }}">Roro Transportation</a>
    </li>
    </div>
    </div>
    </ul> --}}
    <ul class="list-gap sub-menu-list">
    <div class=row>
    <div class="col-sm-12 col-md-12 col-lg-4 bd-l bd-r">
    <h4 class="mb-3 ul-child-custom-heading" title="Vehicle Transportation">
    Vehicle Transportation
    </h4>
    <li>
    <a class=title href="{{ route('form.vehicle.atv_utv') }}" title="Atv Utv Transport" aria-label="Atv Utv Transport">
    Atv Utv Transport
    </a>
    </li>
    <li>
    <a class=title href="{{ route('form.vehicle.car') }}" title="Car Transport" aria-label="Car Transport">
    Car Transport
    </a>
    </li>
    <li>
    <a class=title href="{{ route('form.vehicle.golf_cart') }}" title="Golf Cart Transport" aria-label="Golf Cart Transport">
    Golf Cart Transport
    </a>
    </li>
    <li>
    <a class=title href="{{ route('form.vehicle.form.vehicle.car') }}" title="Motorcycle Transport" aria-label="Motorcycle Transport">
    Motorcycle Transport
    </a>
    </li>
    </div>
    <div class="col-sm-12 col-md-12 col-lg-4 bd-r">
    <h4 class="mb-3 ul-child-custom-heading" title="Heavy Equipment">
    Heavy Equipment
    </h4>
    <li>
    <a class=title href="{{ route('form.vehicle.boat') }}" title="Boat Transport" aria-label="Boat Transport">
    Boat Transport
    </a>
    </li>
    <li>
    <a class=title href="{{ route('commercial.truck.transport') }}" title="Commercial Truck Transport" aria-label="Commercial Truck Transport">
    Commercial Truck Transport
    </a>
    </li>
    <li>
    <a class=title href="{{ route('frontend.forms.construction_transport') }}" title="Construction Transport" aria-label="Construction Transport">
    Construction Transport
    </a>
    </li>
    <li>
    <a class=title href="{{ route('form.vehicle.heavyEquipment') }}" title="Heavy Transport" aria-label="Heavy Transport">
    Heavy Transport
    </a>
    </li>
    <li>
    <a class=title href="{{ route('frontend.forms.excavator') }}" title="Excavator Transport" aria-label="Excavator Transport">
    Excavator Transport
    </a>
    </li>
    <li>
    <a class=title href="{{ route('frontend.forms.farm_transport') }}" title="Farm Transport" aria-label="Farm Transport">
    Farm Transport
    </a>
    </li>
    <li>
    <a class=title href="{{ route('frontend.forms.rv_transport') }}" title="RV Transport" aria-label="RV Transport">
    RV Transport
    </a>
    </li>
    </div>
    <div class="col-sm-12 col-md-12 col-lg-4">
    <h4 class="mb-3 ul-child-custom-heading" title="Freight Transportation">
    Freight Transportation
    </h4>
    <li>
    <a class=title href="{{ route('frontend.forms.hazmattransport') }}" title="Hazmat Transport" aria-label="Hazmat Transport">
    Hazmat Transport
    </a>
    </li>
    <li>
    <a class=title href="{{ route('frontend.forms.dryvan') }}" title="Dry Van Transport" aria-label="Dry Van Transport">
    Dry Van Transport
    </a>
    </li>
    <li>
    <a class=title href="{{ route('frontend.forms.reefertrucking') }}" title="Reefer Trucking" aria-label="Reefer Trucking">
    Reefer Trucking
    </a>
    </li>
    <h4 class="mb-3 ul-child-custom-heading" title=RORO>
    RORO
    </h4>
    <li>
    <a class=title href="{{ route('form.vehicle.roro') }}" title="Roro Transportation" aria-label="Roro Transportation">
    Roro Transportation
    </a>
    </li>
    </div>
    </div>
    </ul>
    </li>
    @endif @endforeach @php $categories = \App\Models\ServiceCategory::has('services')->get(); $services = \App\Models\Service::where('status', '=', 1)->get(); @endphp @foreach ($navbars as $navbar) @if($navbar->id == 3)
    <li class="current-menu-item menu-item-has-children">
    <a href="{{ route('services') }}" class="{{ Request::routeIs('services*') ? ' active' : '' }}">{{ $navbar->menu_name }}</a>
    <ul class="list-gap sub-menu-list">
    <div class=row>
    <div class="col-sm-12 col-md-12 col-lg-4 bd-l bd-r">
    <h4 class="mb-3 ul-child-custom-heading">Vehicle Transportation</h4>
    @foreach ($services as $service) @if ($service->category->name == 'Vehicle Transportation')
    <li>
    <a class=title href="{{ route('service.details', $service->slug) }}" aria-label="View details for {{ $service->name }}" title="Click to view details for {{ $service->name }}">
    {{ $service->name }}
    </a>
    </li>
    @endif @endforeach
    <li>
    <a class=title href="{{ route('frontend.pages.services.car-service') }}" aria-label="Car Transport Service" title="Click to learn more about Car Transport Service">
    Car Transport Service
    </a>
    </li>
    <li>
    <a class=title href="{{ route('frontend.pages.services.bike-service') }}" aria-label="Motorcycle Transport Service" title="Click to learn more about Motorcycle Transport Service">
    Motorcycle Transport Service
    </a>
    </li>
    <li>
    <a class=title href="{{ route('frontend.pages.services.atv-utv-service') }}" aria-label="ATV/UTV Transport Service" title="Click to learn more about ATV/UTV Transport Service">
    ATV/UTV Transport Service
    </a>
    </li>
    <li>
    <a class=title href="{{ route('frontend.pages.services.golf-cart-service') }}" aria-label="Golf Cart Transport Service" title="Click to learn more about Golf Cart Transport Service">
    Golf Cart Transport Service
    </a>
    </li>
    </div>
    <div class="col-sm-12 col-md-12 col-lg-4 bd-r">
    <h4 class="mb-3 ul-child-custom-heading">Heavy Equipment</h4>
    @foreach ($services as $service) @if ($service->category->name == 'Heavy Equipment')
    <li>
    <a class=title href="{{ route('service.details', $service->slug) }}" aria-label="View details for {{ $service->name }}" title="Click to view details for {{ $service->name }}">
    {{ $service->name }}
    </a>
    </li>
    @endif @endforeach
    <li>
    <a class=title href="{{ route('frontend.pages.services.boat-service') }}" aria-label="Boat Transport Services" title="Click to learn more about Boat Transport Services">
    Boat Transport Services
    </a>
    </li>
    <li>
    <a class=title href="{{ route('frontend.pages.services.construction-service') }}" aria-label="Construction Equipment Services" title="Click to learn more about Construction Equipment Services">
    Construction Equipment Services
    </a>
    </li>
    <li>
    <a class=title href="{{ route('frontend.pages.services.commercial-service') }}" aria-label="Commercial Truck Transport" title="Click to learn more about Commercial Truck Transport">
    Commercial Truck Transport
    </a>
    </li>
    <li>
    <a class=title href="{{ route('frontend.pages.services.excavator-service') }}" aria-label="Excavator Transport Services" title="Click to learn more about Excavator Transport Services">
    Excavator Transport Services
    </a>
    </li>
    <li>
    <a class=title href="{{ route('frontend.pages.services.farm-service') }}" aria-label="Farm Transport Services" title="Click to learn more about Farm Transport Services">
    Farm Transport Services
    </a>
    </li>
    <li>
    <a class=title href="{{ route('frontend.pages.services.heavy-service') }}" aria-label="Heavy Equipment Services" title="Click to learn more about Heavy Equipment Services">
    Heavy Equipment Services
    </a>
    </li>
    <li>
    <a class=title href="{{ route('frontend.pages.services.rv-service') }}" aria-label="RV Transport Services" title="Click to learn more about RV Transport Services">
    RV Transport Services
    </a>
    </li>
    </div>
    <div class="col-sm-12 col-md-12 col-lg-4">
    <h4 class="mb-3 ul-child-custom-heading">Freight Transportation</h4>
    @foreach ($services as $service) @if ($service->category->name == 'Freight Transportation')
    <li>
    <a class=title href="{{ route('service.details', $service->slug) }}" aria-label="View details for {{ $service->name }}" title="Click to view details for {{ $service->name }}">
    {{ $service->name }}
    </a>
    </li>
    @endif @endforeach
    <li>
    <a class=title href="{{ route('frontend.pages.services.dryvan-service') }}" aria-label="Dry Van Transport" title="Click to learn more about Dry Van Transport">
    Dry Van Transport
    </a>
    </li>
    <li>
    <a class=title href="{{ route('frontend.pages.services.hazmat-service') }}" aria-label="Hazmat Transport" title="Click to learn more about Hazmat Transport">
    Hazmat Transport
    </a>
    </li>
    <li>
    <a class=title href="{{ route('frontend.pages.services.reefer-service') }}" aria-label="Reefer Transport" title="Click to learn more about Reefer Transport">
    Reefer Transport
    </a>
    </li>
    <h4 class="mb-3 ul-child-custom-heading">RORO</h4>
    @foreach ($services as $service) @if ($service->category->name == 'RORO')
    <li>
    <a class=title href="{{ route('service.details', $service->slug) }}" aria-label="View details for {{ $service->name }}" title="Click to view details for {{ $service->name }}">
    {{ $service->name }}
    </a>
    </li>
    @endif @endforeach
    <li>
    <a class=title href="{{ route('frontend.pages.services.roro-service') }}" aria-label="Roro Shipping International" title="Click to learn more about Roro Shipping International">
    Roro Shipping International
    </a>
    </li>
    </div>
    </div>
    </ul>
    </li>
    @endif @endforeach @foreach ($navbars as $navbar) @if($navbar->id == 4)
    <li class=ab-gap>
    <a href="{{ route('autoAuction') }}" class="{{ Request::routeIs('autoAuction') || Request::routeIs('heavyAuction') ? ' active' : '' }}">{{ $navbar->menu_name }}</a>
    <ul class="list-gap sub-menu-list sub-menu-list-2">
    <div class=row>
    <div class="col-sm-12 col-md-12 col-lg-6 bd-l bd-r">
    <h4 class="mb-3 ul-child-custom-heading">Auction Transport Service</h4>
    <li>
    <a class=title href="{{ route('autoAuction') }}" title="Auto Auction Transport" aria-label="Auto Auction Transport">
    Auto Auction Transport
    </a>
    </li>
    <li>
    <a class=title href="{{ route('heavyAuction') }}" title="Heavy Auction Transport" aria-label="Heavy Auction Transport">
    Heavy Auction Transport
    </a>
    </li>
    </div>
    <div class="col-sm-12 col-md-12 col-lg-6 bd-l bd-r">
    <h4 class="mb-3 ul-child-custom-heading">Freight Transport Solution</h4>
    <li>
    <a class=title href="{{ route('thirdPartyLogistics') }}" title="Freight Logistics Solution" aria-label="Freight Logistics Solution">
    Freight Logistics Solution
    </a>
    </li>
    </div>
    </div>
    </ul>
    </li>
    @endif @endforeach @foreach ($navbars as $navbar) @if($navbar->id == 5)
    <li class=ab-gap>
    <a href="{{ route('blogs') }}" class="{{ Request::routeIs('blogs') ? ' active' : '' }}">{{ $navbar->menu_name }}</a>
    </li>
    @endif @endforeach @foreach ($navbars as $navbar) @if($navbar->id == 6)
    <li>
    <a href="{{ route('contactUs') }}" class="{{ Request::routeIs('contactUs') ? ' active' : '' }}">{{ $navbar->menu_name }}</a>
    </li>
    @endif @endforeach
    </ul>
    </div>
    <div class="header-menu-select d-flex align-items-center justify-content-end">
    <div class="tj-header-button d-none d-lg-block">
    <a class=tj-header-btn href="{{ route('quote.form.combine') }}" title="Get a quote for your needs" aria-label="Get a quote for your needs">Get Quote<i class=flaticon-right-1></i>
    </a>
    </div>
    <div class="tj-hambagur-icon d-lg-none">
    <a class="canva_expander nav-menu-link menu-button" href=#>
    <span class=dot1></span>
    <span class=dot2></span>
    <span class=dot3></span>
    </a>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    </header>