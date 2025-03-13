@extends('frontend.layouts.app') @section('title', 'Trusted State to State Auto Transport Services in USA - SHIPA1')
@section('meta_description', 'Best state to state auto transport services in USA for quick, safe & secure auto vehicle
delivery. We focus on your satisfaction with reliable, affordable services.') @section('content')
<head>
    <link rel="preload" as="image" href="{{ asset('/frontend/images/banner/home-underline.webp') }}" type="image/webp">
</head>
<style>
        .card {
            background: #fff;
            border: 1px solid #ddd;
            border-radius: 5px;
            padding: 15px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, .1)
        }

        .card .row {
            display: flex;
            flex-wrap: wrap
        }

        .card .col-6 {
            width: 50%
        }

        @keyframes custom-slides {
            from {
                transform: translateX(0)
            }

            to {
                transform: translateX(-80%)
            }
        }

        .input-field {
            width: 50px;
            padding: 5px;
            font-size: 14px;
            border: none;
            outline: 0
        }

        .input-field-1 {
            width: 65px;
            padding: 0 0 0 10px;
            font-size: 14px;
            border: none;
            outline: 0
        }

        .form-wrap {
            margin-bottom: 10px;
            position: relative
        }

        .form-label-outside {
            color: #fff;
            display: block;
            margin-bottom: 5px
        }

        .err-style {
            color: red
        }

        .error-message {
            display: none;
            color: red
        }

        .error-field {
            border: 2px solid red
        }

        .service-link {
            display: block;
            text-decoration: none;
            color: #fff
        }

        .service-link:hover {
            text-decoration: none
        }

        .service-link:hover .tj-service-item {
            box-shadow: 0 4px 8px rgba(0, 0, 0, .2)
        }

        .service-link:hover .service-content {
            color: #8fc445
        }

        .service-link:hover .icon-box i {
            color: #fff
        }

        .project-link {
            display: block;
            position: relative;
            text-decoration: none;
            color: inherit;
            width: 100%;
            height: 100%
        }

        .tj-project-item {
            position: relative;
            overflow: hidden
        }

        .tj-project-item img {
            width: 100%;
            height: auto;
            display: block
        }
    </style>
    <div id="preloader" class="preloader">
        <div class="animation-preloader"></div>
    </div>
    <section class="tj-slider-section">
        <div class="slider_shape"><img src="{{ asset('/frontend/images/banner/home-underline.webp') }}"
                fetchpriority="high" alt="Image" width="1200" height="150" 
                style="max-width: 100%; height: auto;"></div>
        <div class="swiper sc-slider-1" data-autoplay="5000">
            <div class="swiper-wrapper">
                @php
                    $slides = [
                        ['image' => 'frontend/images/slider/DSF.webp', 'title' => 'Trustworthy, Efficient, And Cost-effective Auto Transport Solutions', 'desc' => 'ShipA1 has pledged to provide all-in-one auto transport solutions to all its customers and seeks your trust in return of our services.'],
                        ['image' => 'frontend/images/slider/home-slider-2.webp', 'title' => 'Trustworthy, Efficient and Cost-Effective Transportation Services', 'desc' => 'ShipA1 has pledged to provide all-in-one Heavy Equipment transportation solutions to all its customers and seeks your trust in return of our services.'],
                        ['image' => 'frontend/images/slider/freight-banner-home.webp', 'title' => 'Trustworthy, Efficient and Cost-Effective Logistic Services', 'desc' => 'ShipA1 has pledged to provide all-in-one Freight Shipping solutions to all its customers and seeks your trust in return of our services.']
                    ];
                @endphp
                @foreach ($slides as $slide)
                    <div class="swiper-slide slide-bg" style="background-image: url('{{ asset($slide['image']) }}');">
                        <div class="container">
                            <div class="slider-content p-z-idex">
                                <h4 class="slider-title">{{ $slide['title'] }}</h4>
                                <div class="slider-desc">{{ $slide['desc'] }}</div>
                                <div class="tj-theme-button">
                                    <a class="tj-transparent-btn ms-4 mt-4" href="{{ route('quote.form.combine') }}">
                                        Get Quote <i class="flaticon-right-1"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="banner-shape"></div>
                    </div>
                @endforeach
            </div>            
            {{-- <div class="swiper-wrapper">
                <div class="swiper-slide" style="background-image: url('{{ asset('frontend/images/slider/DSF.webp') }}');">
                    <div class="container">
                        <div class="slider-content p-z-idex">
                            <h1 class="slider-title">Trustworthy, Efficient, And Cost-effective Auto Transport Solutions
                            </h1>
                            <div class="slider-desc">ShipA1 has pledged to provide all-in-one auto transport solutions to
                                all its customers and seeks your trust in return of our services.</div>
                            <div class="tj-theme-button"><a class="tj-transparent-btn ms-4"
                                    href="{{ route('quote.form.combine') }}">Get Quote<i class="flaticon-right-1"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="banner-shape"></div>
                </div>
                <div class="swiper-slide"  style="background-image: url('{{ asset('frontend/images/slider/home-slider-2.webp') }}');">
                    <div class="container">
                        <div class="slider-content p-z-idex">
                            <h4 class="slider-title">Trustworthy, Efficient and Cost-Effective Transportation Services</h4>
                            <div class="slider-desc">ShipA1 has pledged to provide all-in-one Heavy Equipment transportation
                                solutions to all its customers and seeks your trust in return of our services.</div>
                            <div class="tj-theme-button"><a class="tj-transparent-btn ms-4"
                                    href="{{ route('quote.form.combine') }}">Get Quote<i class="flaticon-right-1"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="banner-shape"></div>
                </div>
                <div class="swiper-slide"  style="background-image: url('{{ asset('frontend/images/slider/freight-banner-home.webp') }}');">
                    <div class="container">
                        <div class="slider-content p-z-idex">
                            <h4 class="slider-title">Trustworthy, Efficient and Cost-Effective Logistic Services</h4>
                            <div class="slider-desc">ShipA1 has pledged to provide all-in-one Freight Shipping solutions to
                                all its customers and seeks your trust in return of our services.</div>
                            <div class="tj-theme-button"><a class="tj-transparent-btn ms-4 mt-4"
                                    href="{{ route('quote.form.combine') }}">Get Quote<i class="flaticon-right-1"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="banner-shape"></div>
                </div>
            </div> --}}
            <div></div>
        </div>
        @php
            $services = [
                ['icon' => 'fa-car-side', 'title' => 'VEHICLE TRANSPORTATION', 'route' => 'vehicleTransportDetail'],
                ['icon' => 'fa-tractor', 'title' => 'HEAVY TRANSPORTATION', 'route' => 'heavy-transport-detail'],
                ['icon' => 'fa-truck', 'title' => 'FREIGHT TRANSPORTATION', 'route' => 'freighttransport-detail'],
            ];
        @endphp
        <div class="tj-service-icon-box">
            <ul class="list-gap">
                @foreach($services as $service)
                    <li>
                        <div class="service-item">
                            <div class="tj-service-icon">
                                <div class="service-icon"><i class="fa-light {{ $service['icon'] }} fa-xs"></i></div>
                                <div class="sub-title"><span>{!! nl2br(e($service['title'])) !!}</span></div>
                            </div>
                            <div class="service-arrow">
                                <a href="{{ route($service['route']) }}" title="{{ $service['title'] }}">
                                    <i class="fa-light fa-arrow-right" aria-hidden="true"></i>
                                </a>
                            </div>
                        </div>
                    </li>
                @endforeach
            </ul>
        </div>
    </section>
    @include('partials.reveiw-site')
    <section class="tj-about-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-6" data-sal="slide-left" data-sal-duration="800">
                    <div class="about-content-one">
                        <div class="tj-section-heading"><span class="sub-title active-shape">A1 Transportation
                                Company</span>
                            <h2 class="title">What Makes Us Dependable?</h2>
                            <p class="desc">Among all the shipping companies out there, factors that make us stand out
                                from the rest are:</p>
                        </div>
                        <div class="tj-icon-box">
                            <div class="ab-text d-flex align-items-center">
                                <div class="ab-icon">
                                    <img loading="lazy"
                                        src="{{ asset('frontend/images/icon/winner.svg') }}"
                                        fetchpriority="high"
                                        alt="Icon"
                                        width="40" height="40">
                                </div>
                                <div class="ab-title">
                                    <h6 class="title fs-5">Our Values</h6>
                                </div>
                            </div>                            
                            <p class="desc">We are a licensed Transportation company with high moral values and have
                                attained customer satisfaction through their remarks on esteemed platforms.</p>
                        </div>
                        <div class="tj-icon-box">
                            <div class="ab-text d-flex align-items-center">
                                <div class="ab-icon"><i class="fa-light fa-bell-concierge fa-2xl"
                                        style="color:#8fc445"></i></div>
                                <div class="ab-title">
                                    <h6 class="title fs-5">Scope of Services</h6>
                                </div>
                            </div>
                            <p class="desc">Range of vehicles, we ship, is not limited to just conventional cars and
                                motorbikes.</p>
                        </div>
                        <div class="tj-icon-box">
                            <div class="ab-text d-flex align-items-center">
                                <div class="ab-icon"><i class="fa-light fa-shield-heart fa-2xl"
                                        style="color:#8fc445"></i></div>
                                <div class="ab-title">
                                    <h6 class="title fs-5">Safety Is Our Priority</h6>
                                </div>
                            </div>
                            <p class="desc">No matter which mode of transportation you use, ShipA1 assures its customers,
                                atmost security to their assets.</p>
                        </div>
                        <div class="tj-icon-box">
                            <div class="ab-text d-flex align-items-center">
                                <div class="ab-icon"><i class="fa-light fa-handshake fa-2xl" style="color:#8fc445"></i>
                                </div>
                                <div class="ab-title">
                                    <h6 class="title fs-5">Skilful & Devoted Staff</h6>
                                </div>
                            </div>
                            <p class="desc">Our team is loaded with highly experienced professionals of both customer
                                dealing and vehicle handling.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 align-items-center justify-content-center sal-animate pt-4 mt-4"
                    data-sal="slide-right" data-sal-duration="800">
                    <div class="about-group-image d-flex flex-wrap align-items-start flex-column">
                        <div class="tj-icon-box2 text-center">
                            <div class="number-icon"><i class="flaticon-in-person"></i></div>
                            <div class="about-number">
                                <div class="tj-count"><span class="odometer" data-count="289">0</span>k+</div>
                                <p class="desc">Satisfied Client</p>
                            </div>
                        </div>
                        {{-- <div class="image-box"><img class="p-z-idex aspect-ratio aspect-ratio-3x2 img-fluid"
                                src="{{ asset('/frontend/images/about/WMUD-Home.webp') }}" fetchpriority="high"
                                loading="lazy" alt="Image"></div><img
                            class="group-1 p-z-idex aspect-ratio aspect-ratio-3x2 img-fluid"
                            src="{{ asset('/frontend/images/about/about-3.webp') }}" fetchpriority="high" loading="lazy"
                            alt="Image" width="1200" height="800"> --}}
                            <div class="image-box">
                                <img class="p-z-idex aspect-ratio aspect-ratio-3x2 img-fluid"
                                    src="{{ asset('/frontend/images/about/WMUD-Home.webp') }}"
                                    fetchpriority="high"
                                    loading="lazy"
                                    alt="Image"
                                    width="1200" height="800"> 
                            </div>
                            <img class="group-1 p-z-idex aspect-ratio aspect-ratio-3x2 img-fluid"
                                src="{{ asset('/frontend/images/about/about-3.webp') }}"
                                fetchpriority="high"
                                loading="lazy"
                                alt="Image"
                                width="1200" height="800">                            
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- @include('partials.car-cta-section')
    <section class="tj-step-section">
        <div class="container">
            <div class="row">
                <div class="tj-section-heading text-center"><span class="sub-title active-shape">Working Process</span>
                    <h2 class="title">We Follow Great Process</h2>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="tj-step-area">
                            <div class="tj-step-item text-center">
                                <div class="step-icon-box">
                                    <div class="step-box"></div><i class="flaticon-economics"></i><span
                                        class="number">01.</span>
                                </div>
                                <div class="step-content">
                                    <h6 class="title fs-4">Online Quote</h6><span>Get an instant online quote from our website
                                        or call our agent.</span>
                                </div>
                            </div>
                            <div class="tj-step-item text-center">
                                <div class="step-icon-box">
                                    <div class="step-box"></div><i class="flaticon-pick"></i><span
                                        class="number">02.</span>
                                </div>
                                <div class="step-content">
                                    <h6 class="title fs-4">Confirm Order</h6><span>Confirm your order over the phone and fill
                                        out the booking form.</span>
                                </div>
                            </div>
                            <div class="tj-step-item text-center">
                                <div class="step-icon-box">
                                    <div class="step-box"></div><i class="flaticon-tracking"></i><span
                                        class="number">03.</span>
                                </div>
                                <div class="step-content">
                                    <h6 class="title fs-4">Track Shipment</h6><span>Track your shipment by your unique order id
                                        number.</span>
                                </div>
                            </div>
                            <div class="tj-step-item text-center">
                                <div class="step-icon-box">
                                    <div class="step-box"></div><i class="flaticon-delivery-van"></i><span
                                        class="number">04.</span>
                                </div>
                                <div class="step-content">
                                    <h6 class="title fs-4">Shipment Delivery</h6><span>Your shipment reached to their drop-off
                                        location.</span>
                                </div>
                                <div class="stp-arrow"><i class="fa-regular fa-arrow-right"></i></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
    @include('partials.cta-section')
    <section class="tj-team-section">
        <div class="container">
            <div class="tj-section-heading text-center">
                <span class="sub-title active-shape">Our Services</span>
                <h2 class="title">Pick Your Transport Type</h2>
            </div>
        </div>
    </section>
    <section class="tj-project-section">
        <div class="tj-project-slider owl-carousel">
            {{-- @php
                $services = [
                    ['route' => 'frontend.pages.services.car-service', 'img' => 'project/9.webp', 'title' => 'Car Shipping Service', 'label' => 'CAR'],
                    ['route' => 'frontend.pages.services.bike-service', 'img' => 'project/PYT-Bike.webp', 'title' => 'Motorcycle Shipping Service', 'label' => 'Motorcycle'],
                    ['route' => 'frontend.pages.services.heavy-service', 'img' => 'project/PYT-Heavy.webp', 'title' => 'Heavy Transportation Service', 'label' => 'HEAVY EQUIP'],
                    ['route' => 'frontend.pages.services.roro-service', 'img' => 'project/RORO-Slider (1)--.webp', 'title' => 'Roro Shipping International', 'label' => 'RORO'],
                    ['route' => 'frontend.pages.services.golf-cart-service', 'img' => 'project/PYT-Golf.webp', 'title' => 'Golf Cart Transportation Service', 'label' => 'Golf Cart'],
                    ['route' => 'frontend.pages.services.atv-utv-service', 'img' => 'project/PYT-ATV.webp', 'title' => 'ATV/UTV Transportation Service', 'label' => 'ATV/UTV'],
                    ['route' => 'frontend.pages.services.construction-service', 'img' => 'project/PYT-Construction.webp', 'title' => 'Construction Transportation Service', 'label' => 'CONSTRUCTION'],
                    ['route' => 'frontend.pages.services.farm-service', 'img' => 'project/PYT-Farm.webp', 'title' => 'Farm Transportation Service', 'label' => 'FARM'],
                    ['route' => 'frontend.pages.services.excavator-service', 'img' => 'project/PYT-Excavator.webp', 'title' => 'Excavator Shipping Service', 'label' => 'EXCAVATOR'],
                    ['route' => 'frontend.pages.services.commercial-service', 'img' => 'project/PYT-Commercial.webp', 'title' => 'Truck Transportation Service', 'label' => 'COMMERCIAL'],
                ];
            @endphp
            @foreach ($services as $index => $service)
                @php
                    $serviceRoute = route($service['route']);
                    $imgSrc = asset('/frontend/images/' . $service['img']);
                    $fetchPriority = $index === 0 ? 'high' : 'low';
                @endphp
    
                <div class="tj-project-item">
                    <a href="{{ $serviceRoute }}" class="project-link" aria-label="Learn more about {{ $service['title'] }}" title="{{ $service['title'] }}">
                        <img src="{{ $imgSrc }}" loading="lazy" fetchpriority="{{ $fetchPriority }}" alt="{{ $service['title'] }}">
                        <div class="arrow-icon">
                            <a href="{{ $serviceRoute }}" aria-label="Learn more about {{ $service['title'] }}" title="{{ $service['title'] }}">
                            <i class="fa-light fa-arrow-right"></i></a>
                        </div>
                        
                        <div class="tj-project-content">
                            <span class="sub-title">{{ $service['label'] }}</span>
                            <h6><a class="title-link" href="{{ $serviceRoute }}" aria-label="Learn more about {{ $service['title'] }}" title="{{ $service['title'] }}">{{ $service['title'] }}</a></h6>
                        </div>
    
                    </a>
                </div>
            @endforeach --}}
            @php
                $services = [
                    ['route' => 'frontend.pages.services.car-service', 'img' => 'project/9.webp', 'title' => 'Car Shipping Service', 'label' => 'CAR', 'width' => 300, 'height' => 200],
                    ['route' => 'frontend.pages.services.bike-service', 'img' => 'project/PYT-Bike.webp', 'title' => 'Motorcycle Shipping Service', 'label' => 'Motorcycle', 'width' => 300, 'height' => 200],
                    ['route' => 'frontend.pages.services.heavy-service', 'img' => 'project/PYT-Heavy.webp', 'title' => 'Heavy Transportation Service', 'label' => 'HEAVY EQUIP', 'width' => 300, 'height' => 200],
                    ['route' => 'frontend.pages.services.roro-service', 'img' => 'project/RORO-Slider (1)--.webp', 'title' => 'Roro Shipping International', 'label' => 'RORO', 'width' => 300, 'height' => 200],
                    ['route' => 'frontend.pages.services.golf-cart-service', 'img' => 'project/PYT-Golf.webp', 'title' => 'Golf Cart Transportation Service', 'label' => 'Golf Cart', 'width' => 300, 'height' => 200],
                    ['route' => 'frontend.pages.services.atv-utv-service', 'img' => 'project/PYT-ATV.webp', 'title' => 'ATV/UTV Transportation Service', 'label' => 'ATV/UTV', 'width' => 300, 'height' => 200],
                    ['route' => 'frontend.pages.services.construction-service', 'img' => 'project/PYT-Construction.webp', 'title' => 'Construction Transportation Service', 'label' => 'CONSTRUCTION', 'width' => 300, 'height' => 200],
                    ['route' => 'frontend.pages.services.farm-service', 'img' => 'project/PYT-Farm.webp', 'title' => 'Farm Transportation Service', 'label' => 'FARM', 'width' => 300, 'height' => 200],
                    ['route' => 'frontend.pages.services.excavator-service', 'img' => 'project/PYT-Excavator.webp', 'title' => 'Excavator Shipping Service', 'label' => 'EXCAVATOR', 'width' => 300, 'height' => 200],
                    ['route' => 'frontend.pages.services.commercial-service', 'img' => 'project/PYT-Commercial.webp', 'title' => 'Truck Transportation Service', 'label' => 'COMMERCIAL', 'width' => 300, 'height' => 200],
                ];
            @endphp
            @foreach ($services as $index => $service)
                @php
                    $serviceRoute = route($service['route']);
                    $imgSrc = asset('/frontend/images/' . $service['img']);
                    $fetchPriority = $index === 0 ? 'high' : 'low';
                @endphp

                <div class="tj-project-item">
                    <a href="{{ $serviceRoute }}" class="project-link" aria-label="Learn more about {{ $service['title'] }}" title="{{ $service['title'] }}">
                        <img src="{{ $imgSrc }}" loading="lazy" fetchpriority="{{ $fetchPriority }}" alt="{{ $service['title'] }}" width="{{ $service['width'] }}" height="{{ $service['height'] }}">
                        <div class="arrow-icon">
                            <a href="{{ $serviceRoute }}" aria-label="Learn more about {{ $service['title'] }}" title="{{ $service['title'] }}">
                                <i class="fa-light fa-arrow-right"></i>
                            </a>
                        </div>

                        <div class="tj-project-content">
                            <span class="sub-title">{{ $service['label'] }}</span>
                            <h6><a class="title-link" href="{{ $serviceRoute }}" aria-label="Learn more about {{ $service['title'] }}" title="{{ $service['title'] }}">{{ $service['title'] }}</a></h6>
                        </div>
                    </a>
                </div>
            @endforeach
            {{-- @foreach ($services as $index => $service)
                @php
                    $serviceRoute = route($service['route'] ?? '');
                    $imgSrc = isset($service['img']) ? asset('/frontend/images/' . $service['img']) : asset('/frontend/images/default.webp');
                    $fetchPriority = $index === 0 ? 'high' : 'low';

                    // Define default dimensions
                    $imgDimensions = [
                        'project/9.webp' => ['width' => 600, 'height' => 400],
                        'project/PYT-Bike.webp' => ['width' => 600, 'height' => 400],
                        'project/PYT-Heavy.webp' => ['width' => 600, 'height' => 400],
                        'project/RORO-Slider (1)--.webp' => ['width' => 800, 'height' => 400],
                        'project/PYT-Golf.webp' => ['width' => 600, 'height' => 400],
                        'project/PYT-ATV.webp' => ['width' => 600, 'height' => 400],
                        'project/PYT-Construction.webp' => ['width' => 600, 'height' => 400],
                        'project/PYT-Farm.webp' => ['width' => 600, 'height' => 400],
                        'project/PYT-Excavator.webp' => ['width' => 600, 'height' => 400],
                        'project/PYT-Commercial.webp' => ['width' => 600, 'height' => 400],
                    ];

                    // Assign width and height, use default if key is missing
                    $width = isset($service['img']) && isset($imgDimensions[$service['img']]) ? $imgDimensions[$service['img']]['width'] : 600;
                    $height = isset($service['img']) && isset($imgDimensions[$service['img']]) ? $imgDimensions[$service['img']]['height'] : 400;
                @endphp

                <div class="tj-project-item">
                    <a href="{{ $serviceRoute }}" class="project-link" aria-label="Learn more about {{ $service['title'] ?? 'Service' }}" title="{{ $service['title'] ?? 'Service' }}">
                        <img src="{{ $imgSrc }}" loading="lazy" fetchpriority="{{ $fetchPriority }}" 
                            alt="{{ $service['title'] ?? 'Service' }}" width="{{ $width }}" height="{{ $height }}">
                        <div class="arrow-icon">
                            <a href="{{ $serviceRoute }}" aria-label="Learn more about {{ $service['title'] ?? 'Service' }}" title="{{ $service['title'] ?? 'Service' }}">
                                <i class="fa-light fa-arrow-right"></i>
                            </a>
                        </div>
                        
                        <div class="tj-project-content">
                            <span class="sub-title">{{ $service['label'] ?? '' }}</span>
                            <h6><a class="title-link" href="{{ $serviceRoute }}" aria-label="Learn more about {{ $service['title'] ?? 'Service' }}" title="{{ $service['title'] ?? 'Service' }}">{{ $service['title'] ?? 'Service' }}</a></h6>
                        </div>
                    </a>
                </div>
            @endforeach --}}
        </div>
    </section>
    <section class="tj-choose-us-section-home">
        <div class="container">
            <div class="row">
                @if (session('success'))
                    <div class="alert alert-success">{{ session('success') }}</div>
                    @endif @if (session('error'))
                        <div class="alert alert-error">{{ session('error') }}</div>
                    @endif
                    <div class="col-lg-6 sal-animate" data-sal="slide-left" data-sal-duration="800">
                        <div class="choose-us-content-1">
                            <div class="tj-section-heading"><span class="sub-title active-shape2">Get Instant quote</span>
                                <h2 class="title">Get an instant quote in few simple steps</h2>
                                <p class="desc">ShipA1 has pledged to provide all-in-one auto transport solutions to all
                                    its customers and seeks your trust in return of our services.</p>
                            </div>
                            <div class="row">
                                <div class="col-md-4 col-sm-4 col-6">
                                    <div class="tj-icon-box3 text-center"><i class="flaticon flaticon-courier"></i>
                                        <h6 class="title">Optimized Cost</h6>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-4 col-6">
                                    <div class="tj-icon-box3 text-center"><i class="flaticon flaticon-cargo"></i>
                                        <h6 class="title">Delivery on Time</h6>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-4 col-6">
                                    <div class="tj-icon-box3 text-center"><i class="flaticon flaticon-agreement"></i>
                                        <h6 class="title">Safety &amp; Reliability</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6" data-sal="slide-down" data-sal-duration="800">@include('partials.multi-form')
                    </div>
            </div>
        </div>
    </section>
    {{-- <section class="tj-map-section">
        <div class="google-map"><iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3105.167331138309!2d-76.66251388426676!3d39.496062943506464!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c81261c3eae243%3A0x81e995e93023e64a!2s201%20International%20Cir%20STE%20230%2C%20Hunt%20Valley%2C%20MD%2021030%2C%20USA!5e0!3m2!1sen!2s!4v1649863458559!5m2!1sen!2s"
                title="Google Maps location of [your specific location or purpose]" fetchpriority="high" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe></div>
        <div class="tj-map-tabs" data-bg-image="{{ asset('frontend/images/banner/form-shape2.png') }}">
            <div class="accordion" id="accordionExample">
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingOne"><button class="accordion-button" type="button"
                            data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true"
                            aria-controls="collapseOne">Contact us</button></h2>
                    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                        data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <ul class="list-gap">
                                <li><i class="flaticon-placeholder"></i><a fetchpriority="high"
                                        href="https://www.google.com/maps/place/201+International+Cir+STE+230,+Hunt+Valley,+MD+210301344,+USA/@39.4960629,-76.6603247,17z/data=!3m2!4b1!5s0x89c8128abe53a693:0xccf0052e1abf77f2!4m6!3m5!1s0x89c81261c3eae243:0x81e995e93023e64a!8m2!3d39.4960629!4d-76.6603247!16s%2Fg%2F11scxbqcdd?entry=ttu">201
                                        International Cir STE 230, Hunt Valley, MD 21030-1344</a></li>
                                <li><i class="flaticon-mail"></i><a
                                        href="mailto:shawntransport@shipa1.com">shawntransport@shipa1.com</a></li>
                                <li><i class="flaticon-call"></i><a href="tel:1 (844) 474-4721">1 (844) 474-4721</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
    <section class="tj-map-section">
        <div class="google-map">
            <iframe 
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3105.167331138309!2d-76.66251388426676!3d39.496062943506464!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c81261c3eae243%3A0x81e995e93023e64a!2s201%20International%20Cir%20STE%20230%2C%20Hunt%20Valley%2C%20MD%2021030%2C%20USA!5e0!3m2!1sen!2s!4v1649863458559!5m2!1sen!2s" 
                title="Location: Hunt Valley, MD" 
                loading="lazy" 
                referrerpolicy="no-referrer-when-downgrade"
                width="100%" 
                height="400" 
                style="border:0;"
                allowfullscreen>
            </iframe>
        </div>
        <div class="tj-map-tabs" style="background-image: url('{{ asset('public/frontend/images/banner/form-shape2.webp') }}');">
            <div class="accordion" id="contactAccordion">
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingContact">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#contactCollapse" aria-expanded="true" aria-controls="contactCollapse">
                            Contact Us
                        </button>
                    </h2>
                    <div id="contactCollapse" class="accordion-collapse collapse show" aria-labelledby="headingContact" data-bs-parent="#contactAccordion">
                        <div class="accordion-body">
                            <ul class="list-gap">
                                <li>
                                    <i class="flaticon-placeholder"></i>
                                    <a href="https://www.google.com/maps/place/201+International+Cir+STE+230,+Hunt+Valley,+MD+21030" target="_blank">
                                        201 International Cir STE 230, Hunt Valley, MD 21030
                                    </a>
                                </li>
                                <li>
                                    <i class="flaticon-mail"></i>
                                    <a href="mailto:shawntransport@shipa1.com">shawntransport@shipa1.com</a>
                                </li>
                                <li>
                                    <i class="flaticon-call"></i>
                                    <a href="tel:+18444744721">1 (844) 474-4721</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="tj-counter-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="tj-counter-area d-flex justify-content-between flex-wrap">
                        <!-- Shipment Counter -->
                        <div class="counter-item d-flex align-items-center" data-sal="slide-up">
                            <div class="counter-icon">
                                <i class="fa fa-car-side fa-2x mt-2"></i>
                            </div>
                            <div class="counter-number">
                                <div class="tj-count">
                                    <span class="odometer" data-count="318">0</span>k+
                                </div>
                                <span class="sub-title">Successful Shipments</span>
                            </div>
                        </div>
                        <!-- Clients Counter -->
                        <div class="counter-item d-flex align-items-center" data-sal="slide-up">
                            <div class="counter-icon">
                                <i class="flaticon-courier"></i>
                            </div>
                            <div class="counter-number">
                                <div class="tj-count">
                                    <span class="odometer" data-count="289">0</span>k+
                                </div>
                                <span class="sub-title">Satisfied Clients</span>
                            </div>
                        </div>
                        <!-- Miles Covered Counter -->
                        <div class="counter-item d-flex align-items-center" data-sal="slide-up">
                            <div class="counter-icon">
                                <i class="flaticon-worldwide"></i>
                            </div>
                            <div class="counter-number">
                                <div class="tj-count">
                                    <span class="odometer" data-count="270092">0</span>k
                                </div>
                                <span class="sub-title">Miles Covered</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>    
    {{-- <section class="tj-counter-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="tj-counter-area">
                        <div class="counter-item d-flex align-items-center" data-sal="slide-up" data-sal-duration="800"
                            data-sal-delay="300">
                            <div class="counter-icon"><i class="fa-light fa-car-side mt-4 fa-2xs"></i></div>
                            <div class="counter-number">
                                <div class="tj-count"><span class="odometer" data-count="318">0</span>k+</div><span
                                    class="sub-title">Succesful Shipment</span>
                            </div>
                        </div>
                        <div class="counter-item d-flex align-items-center" data-sal="slide-up" data-sal-duration="800"
                            data-sal-delay="400">
                            <div class="counter-icon"><i class="flaticon-courier"></i></div>
                            <div class="counter-number">
                                <div class="tj-count"><span class="odometer" data-count="289">0</span>k+</div><span
                                    class="sub-title">Satisfied Clients</span>
                            </div>
                        </div>
                        <div class="counter-item d-flex align-items-center" data-sal="slide-up" data-sal-duration="800"
                            data-sal-delay="500">
                            <div class="counter-icon"><i class="flaticon-worldwide"></i></div>
                            <div class="counter-number">
                                <div class="tj-count"><span class="odometer" data-count="270,092">0</span>k</div><span
                                    class="sub-title">Miles Covered</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
    @include('partials.blog-slider')
    @include('partials.newsletter')
@endsection
