@extends('frontend.layouts.app') @section('title', 'Your Trusted, Top-Rated Auto Transport Agency in USA')
@section('meta_description',
    'Looking for the best vehicle transport company? ShipA1 is here for all-in-one shipping services
in the USA. Time to partner with an expert agency.') @section('content')
@section('canonical')
    <link rel="canonical" href="{{ url()->current() }}">
@endsection


<link rel="preload" as="image" href="{{ asset('frontend/images/banner/home-underline.webp') }}" type="image/webp">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="preload" as="image" href="/frontend/images/slider/fright-banner-home.webp" />
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script type="application/ld+json">
{
  "@context": "https://schema.org",  
  "@type": "Organization",
  "@id": "https://www.shipa1.com/#organization",
  "name": "ShipA1",
  "url": "https://www.shipa1.com/",
  "logo": "https://shipa1.com/frontend/images/logo/LOGO%20NEW-2.webp",
  "foundingDate": "2020",
  "sameAs": [
    "https://www.facebook.com/shipa1autotransport",
    "https://www.instagram.com/shipa1_transport",
    "https://www.youtube.com/@shipA1autotransport",
    "https://www.linkedin.com/in/shipa1-transport"
  ]
}
</script>
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "LocalBusiness",
  "@id": "https://www.shipa1.com/#localbusiness",
  "name": "ShipA1",
  "description": "ShipA1 is a trusted auto transport and logistics company offering nationwide vehicle shipping services with reliability, speed, and safety.",
  "url": "https://www.shipa1.com/",
  "telephone": "(844) 474-4721",
  "priceRange": "$$",
  "address": {
    "@type": "PostalAddress",
    "streetAddress": "201 International Cir STE 230",
    "addressLocality": "Hunt Valley",
    "addressRegion": "MD",
    "postalCode": "21030",
    "addressCountry": {
      "@type": "Country",
      "name": "US"
    }
  },
  "geo": {
    "@type": "GeoCoordinates",
    "latitude": 39.4960629,
    "longitude": -76.6603247
  },
  "openingHoursSpecification": {
    "@type": "OpeningHoursSpecification",
    "dayOfWeek": [
      "https://schema.org/Monday",
      "https://schema.org/Tuesday",
      "https://schema.org/Wednesday",
      "https://schema.org/Thursday",
      "https://schema.org/Friday",
      "https://schema.org/Saturday"
    ],
    "opens": "08:00",
    "closes": "19:00"
  },
  "areaServed": {
    "@type": "Country",
    "name": "United States"
  },
  "parentOrganization": {
    "@type": "Organization",
    "@id": "https://www.shipa1.com/#organization",
    "name": "ShipA1",
    "url": "https://www.shipa1.com/"
  }
}
</script>
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "FAQPage",
  "mainEntity": [
    {
      "@type": "Question",
      "name": "How is ShipA1 the trusted automobile transport agency in the USA?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Simply put, we offer qualified carriers, benefits to customers with door-to-door vehicle shipping, and back automobiles with one hundred percent insurance support."
      }
    },
    {
      "@type": "Question",
      "name": "Does ShipA1 offer the cheapest car shipping services in the USA?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "ShipA1 never aims to trap its existing and potential customers by highlighting offering cheap car shipping services. Our customized car transport service plans come under budget-friendly ranges."
      }
    },
    {
      "@type": "Question",
      "name": "How much time does it take to hire the best car shipping agency near me?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Locating and hiring a car shipping agency depends on your digital exploration and selected car transport partner. However, at ShipA1, you get quotes and order booking confirmation within minutes."
      }
    },
    {
      "@type": "Question",
      "name": "How do I identify a reliable and trusted vehicle shipping partner?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "As per our experienced shipping team, clients should explore the digital presence, read online reviews, and ask for licensed verification to identify their top-picked freight."
      }
    },
    {
      "@type": "Question",
      "name": "How can I get fast automobile transport services right now?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Connect with ShipA1 and click on “Get a Quote”. By following a simple order booking process, you can get your automobile shipping consignment started."
      }
    }
  ]
}
</script>




<style>
    body {
        font-family: Arial, sans-serif;
    }

    body a {
        text-decoration: none;
    }


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

    .service-section-parent {
        display: flex;
        justify-content: center;
        margin-bottom: 50px;
        display: grid;
        grid-template-columns: auto auto auto auto auto;
        /* background-color: dodgerblue; */
        padding: 10px;
    }

    .services-section {
        /* background-color: #f1f1f1;
        border: 1px solid black;
        padding: 10px; */
        /* font-size: 30px; */
        text-align: center;
        color: black;
        background-color: #fff;
        width: 210px;
        height: 210px;
        border-radius: 50%;
        display: flex;
        justify-content: center;
        align-items: center;
        padding: 0 4px;
        border-top-right-radius: 25px;
        border-bottom-left-radius: 25px;
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
    }

    .services-section:hover {
        color: white;
        background-color: #062e39;
        transition: 1s;
        border-radius: 50%;
        border-top-left-radius: 25px;
        border-bottom-right-radius: 25px;
    }

    @media only screen and (max-width: 1200px) {
        .service-section-parent {
            grid-template-columns: auto auto auto auto;
        }
    }

    @media only screen and (max-width: 1000px) {
        .service-section-parent {
            grid-template-columns: auto auto auto;
        }
    }

    @media only screen and (max-width: 770px) {
        .service-section-parent {
            grid-template-columns: auto auto;
        }
    }

    @media only screen and (max-width: 454px) {
        .service-section-parent {
            grid-template-columns: auto;
            text-align: center;

        }

        .services-section {
            width: 260px;
        }
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
<style>
    .card-btn-container {
        border: 1px solid #ddd;
        border-radius: 8px;
        padding: 10px;
        background: #f9f9f9;
    }

    .card-btn {
        width: 100%;
        text-align: left;
        background: rgba(204, 200, 200, 0.171);
        color: #062e39;
        padding: 10px;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        transition: background 0.3s ease-in-out;
    }

    .card-btn:hover {
        background: #8fc445;
    }

    .card-btn-collapse {
        display: none;
        padding: 10px;
        background: #fff;
        border-left: 3px solid #007bff;
        margin-top: 5px;
        border-radius: 5px;
    }

    .show {
        display: block;
    }

    .homeunderline {
        max-width: 100%;
        height: auto;
    }

    .iconsss {
        color: #8fc445;
    }

    .service-m {
        background-color: rgba(255, 255, 255, 0.5);
        border-radius: 25px;
    }

    .services-bg {
        background-image: url({{ asset('img/1430_x_863_Nebraska%281%29.jpg') }} )
    }

    .firstorthird {
        background-color: #f5f7fa;
        color: black;
        transition: 1s;
    }

    .secondorforth {
        background-color: #e2e6ec;
        color: black;
        transition: 1s;
    }

    .firstorthird:hover {
        background-color: #062e39;
        color: white;
    }

    .secondorforth:hover {
        background-color: #062e39;
        color: white;
    }
   
</style>


</div>
<section class="tj-slider-section">
    <div class="slider_shape"><img src="{{ asset('frontend/images/banner/home-underline.webp') }}"
            class="home-underline" fetchpriority="high" alt="Image" width="1200" height="150" loading="lazy"
            decoding="async"></div>
    <div class="swiper sc-slider-1" data-autoplay="5000">
        <div class="swiper-wrapper">
            @php
                $slides = [
                    [
                        'image' => 'frontend/images/slider/DSF.webp',
                        'title' => 'Top-Rated Auto Transport Company in All Over USA – Safe, Fast & Affordable',
                        'desc' =>
                            'ShipA1 has pledged to provide all-in-one auto transport solutions to all its customers and seeks your trust in return of our services.',
                    ],
                    [
                        'image' => 'frontend/images/slider/home-slider-2.webp',
                        'title' => 'Top-Rated Auto Transport Company in All Over USA – Safe, Fast & Affordable',
                        'desc' =>
                            'ShipA1 has pledged to provide all-in-one Heavy Equipment transportation solutions to all its customers and seeks your trust in return of our services.',
                    ],
                    [
                        'image' => 'frontend/images/slider/freight-banner-home.webp',
                        'title' => 'Top-Rated Auto Transport Company in All Over USA – Safe, Fast & Affordable',
                        'desc' =>
                            'ShipA1 has pledged to provide all-in-one Freight Shipping solutions to all its customers and seeks your trust in return of our services.',
                    ],
                ];
            @endphp
            @foreach ($slides as $index => $slide)
                <div class="swiper-slide slide-bg" style="background-image: url('{{ asset($slide['image']) }}');">
                    <div class="container">
                        <div class="slider-content p-z-idex ml-5">
                            {{-- <h1 class="slider-title fs-2">{{ $slide['title'] }}</h1> --}}
                            @if ($index == 0)
                                <h1 class="slider-title fs-2">{{ $slide['title'] }}</h1>
                            @else
                                <h2 class="slider-title fs-2">{{ $slide['title'] }}</h2>
                            @endif
                            <p class="slider-desc  fs-6">{{ $slide['desc'] }}</p>
                            <div class="tj-theme-button">
                                <a class="tj-transparent-btn  mt-4" href="{{ route('quote.form.combine') }}">
                                    Get Quote <i class="flaticon-right-1"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="banner-shape"></div>
                </div>
            @endforeach
        </div>

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
            @foreach ($services as $service)
                <li>
                    <div class="service-item">
                        <div class="tj-service-icon">
                            <div class="service-icon"><i class="fa-light {{ $service['icon'] }} fa-xs"></i></div>
                            <div class="sub-title"><span>
                                    <h3 class="fs-4">{!! nl2br(e($service['title'])) !!}</h3>
                                </span></div>
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
{{-- @include('partials.reveiw-site') --}}
<section>
    <div class="container mt-5">
        <div class="row">
            <div class="col-lg-12 tj-section-heading mt-5">
                <h3 class="text-center"><span class="sub-title active-shape">Your One-Stop Agency for Complete Auto
                        Shipping Services</h3>
                <p class="text-center">
                    In the hunt for the best auto transport services in the USA? Ever heard about ShipA1’s qualified,
                    expert team? Connect with the shipping industry legend, offering speedy city-to-city,
                    state-to-state,
                    and cross-country vehicle transport services. Become part of our elite automobile, freight cargo,
                    and
                    heavy machinery transportation clients today. Customized and affordable quotes - just one click
                    away!
                </p>
            </div>
        </div>
    </div>
</section>
@include('partials.reveiw-small-detail')
<section class="tj-about-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-6" data-sal="slide-left" data-sal-duration="800">
                <div class="about-content-one">
                    <div class="tj-section-heading"><span class="sub-title active-shape">
                            <h3>A1 Transportation
                                Company</h3>
                        </span>
                        <h3 class="title fs-4">How Are We Trusted & Unstopable?</h3>
                        <p class="desc"> It took us a decade to rule the industry and to be known as a reliable and
                            top-notch hub
                            of auto transport services in the USA. As we believe in:</p>
                    </div>
                    <div class="tj-icon-box">
                        <div class="ab-text d-flex align-items-center">
                            <div class="ab-icon">
                                <img loading="lazy" src="{{ asset('frontend/images/icon/winner.svg') }}"
                                    fetchpriority="high" alt="Icon" width="40" height="40" loading="lazy"
                                    decoding="async">
                            </div>
                            <div class="ab-title">
                                <h4 class="title fs-5 font-weight-bold">Following Client-First Policy</h4>
                            </div>
                        </div>
                        <p class="desc">We listen to what you demand. The team is always ready to suggest under-budget
                            and convenient auto shipping service instant quotes. How you want it and where you want it -
                            share with us.
                        </p>
                    </div>
                    <div class="tj-icon-box">
                        <div class="ab-text d-flex align-items-center">
                            <div class="ab-icon"><i class="fa-light fa-bell-concierge fa-2xl iconsss"></i>
                            </div>
                            <div class="ab-title">
                                <h4 class="title fs-5 font-weight-bold">Providing Skillful Expert</h4>
                            </div>
                        </div>
                        <p class="desc">The staff is qualified enough to handle everything from your and our side.
                            They
                            are native, trained, and professional enough to complete city-to-city car transport journeys
                            within a couple of days!
                        </p>
                    </div>
                    <div class="tj-icon-box">
                        <div class="ab-text d-flex align-items-center">
                            <div class="ab-icon"><i class="fa-light fa-shield-heart fa-2xl iconsss"></i>
                            </div>
                            <div class="ab-title">
                                <h4 class="title fs-5 font-weight-bold">Offering Security & Efficiency</h4>
                            </div>
                        </div>
                        <p class="desc">Enclosed and fully secured trailers are lined up to load your luxurious
                            vehicles.
                            Connect with the team and learn more about budget-friendly deals, high-tech haulers, and our
                            trending highest-rated auto transport services.
                        </p>
                    </div>
                    <div class="tj-icon-box">
                        <div class="ab-text d-flex align-items-center">
                            <div class="ab-icon"><i class="fa-light fa-handshake fa-2xl iconsss"></i>
                            </div>
                            <div class="ab-title">
                                <h4 class="title fs-5 font-weight-bold">Be Sustained as Qualified</h4>
                            </div>
                        </div>
                        <p class="desc">Experts don’t need paid promotions to be highlighted at the top. ShipA1, your
                            trusted and best auto shipping services companion is a licensed firm, running freight and
                            logistics business all over the USA.
                        </p>
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
                                src="{{ asset('frontend/images/about/WMUD-Home.webp') }}" fetchpriority="high"
                                loading="lazy" alt="Image"></div><img
                            class="group-1 p-z-idex aspect-ratio aspect-ratio-3x2 img-fluid"
                            src="{{ asset('frontend/images/about/about-3.webp') }}" fetchpriority="high" loading="lazy"
                            alt="Image" width="1200" height="800"> --}}
                    <div class="image-box">
                        <img class="p-z-idex aspect-ratio aspect-ratio-3x2 img-fluid"
                            src="{{ asset('frontend/images/about/WMUD-Home.webp') }}" fetchpriority="high"
                            loading="lazy" alt="Image" width="1200" height="800" decoding="async">
                    </div>
                    <img class="group-1 p-z-idex aspect-ratio aspect-ratio-3x2 img-fluid"
                        src="{{ asset('frontend/images/about/about-3.webp') }}" fetchpriority="high" alt="Image"
                        width="1200" height="800" loading="lazy" decoding="async">
                </div>
            </div>
        </div>
    </div>
</section>
@include('partials.cta-section')


{{-- @include('partials.car-cta-section') --}}
<section class="tj-step-section">
    <div class="container">
        <div class="row">
            <div class="tj-section-heading text-center"><span class="sub-title active-shape">
                    <h3>Working Process</h3>
                </span>
                <h3 class="">Here Is How ShipA1, A Complete Automobile Shipping Agency Works </h3>
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
                                <h4 class="title fs-4">Offer Customized Quote</h4>
                            </div>
                        </div>
                        <div class="tj-step-item text-center">
                            <div class="step-icon-box">
                                <div class="step-box"></div><i class="flaticon-pick"></i><span
                                    class="number">02.</span>
                            </div>
                            <div class="step-content">
                                <h4 class="title fs-4">Schedule an Instant Shipment</h4>
                            </div>
                        </div>
                        <div class="tj-step-item text-center">
                            <div class="step-icon-box">
                                <div class="step-box"></div><i class="flaticon-tracking"></i><span
                                    class="number">03.</span>
                            </div>
                            <div class="step-content">
                                <h4 class="title fs-4">Early Pickup & Fast Delivery </h4>
                            </div>
                        </div>
                        <div class="tj-step-item text-center">
                            <div class="step-icon-box">
                                <div class="step-box"></div><i class="flaticon-delivery-van"></i><span
                                    class="number">04.</span>
                            </div>
                            <div class="step-content">
                                <h4 class="title fs-4">Shipment Delivery</h4>
                            </div>
                            <div class="stp-arrow"><i class="fa-regular fa-arrow-right"></i></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="tj-faq-section tj-faq-page pt-5">
    <div class="container mt-5">
        <div class="row">
            <div class="tj-section-heading text-center"><span class="sub-title active-shape">
                    <h3>Transport Services Modes</h3>
                </span>
            </div>
        </div>
        <div class="row">
            <!-- Dynamic Content Section -->
            <div class="col-lg-6">
                <div class="p-3 border bg-light">
                    <h6 class="card-btn" id="dynamicHeader"> 1. Cross-Country Vehicle Transport</h6>
                    <div id="dynamicContent">
                        ShipA1’s team of shippers, carriers, and consignees have decades of experience in long-distance
                        cross-country vehicle shipping all over the USA. This mode is ideal for extended-range
                        transportation of your vehicles to a remote or far-off state.
                    </div>
                </div>
            </div>

            <!-- Card Button Section -->
            <div class="col-lg-6">
                <div class="card-btn-container" id="cardBtnExample">
                    <div class="card-btn-item">
                        <h2 class="card-btn-header" id="headingOne">
                            <button class="card-btn" type="button">
                                <h6> 1. Cross-Country Vehicle Transport </h6>
                            </button>
                        </h2>
                        <div class="card-btn-collapse " id="collapseOne">
                            <div class="card-btn-body">
                                ShipA1’s team of shippers, carriers, and consignees have decades of experience in
                                long-distance cross-country vehicle shipping all over the USA. This mode is ideal for
                                extended-range transportation of your vehicles to a remote or far-off state.
                            </div>
                        </div>
                    </div>

                    <div class="card-btn-item">
                        <h2 class="card-btn-header" id="headingTwo">
                            <button class="card-btn" type="button">
                                <h6> 2. State-to-State Vehicle Transport </h6>
                            </button>
                        </h2>
                        <div class="card-btn-collapse" id="collapseTwo">
                            <div class="card-btn-body">
                                This mode of state-to-state automobile transport is our trending shipping type. Our
                                carriers take 5 to 7 days on average to deliver your luxury vehicle cargo. No matter if
                                your consignment is from Florida to Georgia or California to Nevada. Just remember you
                                are partnering with one of the top automobile transport companies in the USA.
                            </div>
                        </div>
                    </div>

                    <div class="card-btn-item">
                        <h2 class="card-btn-header" id="headingThree">
                            <button class="card-btn" type="button">
                                <h6> 3. City-to-City Vehicle Transport </h6>
                            </button>
                        </h2>
                        <div class="card-btn-collapse" id="collapseThree">
                            <div class="card-btn-body">
                                Let our experts handle everything for your short-distance city-to-city car transport
                                consignment. It usually takes a couple of days to pick up and unload your vehicles in
                                your own customized selected enclosed, open, flatbed, or drop deck trailers.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
{{-- <div class="container">
    
</div> --}}

<section class="">
    <div class="row">
        <div class="tj-section-heading text-center"><span class="sub-title active-shape">
                <h3>Our Services</h3>
            </span>
        </div>
    </div>
</section>
{{-- <section class="tj-project-section">
    <div class="tj-project-slider owl-carousel"> --}}
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
                    $imgSrc = asset('frontend/images/' . $service['img']);
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

{{-- services section start --}}
{{-- @php
            $services = [
                [
                    'route' => 'frontend.pages.services.car-service',
                    'img' => 'project/9.webp',
                    'title' => 'Car Shipping Service',
                    'label' => 'CAR',
                    'width' => 300,
                    'height' => 200,
                ],
                [
                    'route' => 'frontend.pages.services.bike-service',
                    'img' => 'project/PYT-Bike.webp',
                    'title' => 'Motorcycle Shipping Service',
                    'label' => 'Motorcycle',
                    'width' => 300,
                    'height' => 200,
                ],
                [
                    'route' => 'frontend.pages.services.heavy-service',
                    'img' => 'project/PYT-Heavy.webp',
                    'title' => 'Heavy Transportation Service',
                    'label' => 'HEAVY EQUIP',
                    'width' => 300,
                    'height' => 200,
                ],
                [
                    'route' => 'frontend.pages.services.roro-service',
                    'img' => 'project/RORO-Slider (1)--.webp',
                    'title' => 'Roro Shipping International',
                    'label' => 'RORO',
                    'width' => 300,
                    'height' => 200,
                ],
                [
                    'route' => 'frontend.pages.services.golf-cart-service',
                    'img' => 'project/PYT-Golf.webp',
                    'title' => 'Golf Cart Transportation Service',
                    'label' => 'Golf Cart',
                    'width' => 300,
                    'height' => 200,
                ],
                [
                    'route' => 'frontend.pages.services.atv-utv-service',
                    'img' => 'project/PYT-ATV.webp',
                    'title' => 'ATV/UTV Transportation Service',
                    'label' => 'ATV/UTV',
                    'width' => 300,
                    'height' => 200,
                ],
                [
                    'route' => 'frontend.pages.services.construction-service',
                    'img' => 'project/PYT-Construction.webp',
                    'title' => 'Construction Transportation Service',
                    'label' => 'CONSTRUCTION',
                    'width' => 300,
                    'height' => 200,
                ],
                [
                    'route' => 'frontend.pages.services.farm-service',
                    'img' => 'project/PYT-Farm.webp',
                    'title' => 'Farm Transportation Service',
                    'label' => 'FARM',
                    'width' => 300,
                    'height' => 200,
                ],
                [
                    'route' => 'frontend.pages.services.excavator-service',
                    'img' => 'project/PYT-Excavator.webp',
                    'title' => 'Excavator Shipping Service',
                    'label' => 'EXCAVATOR',
                    'width' => 300,
                    'height' => 200,
                ],
                [
                    'route' => 'frontend.pages.services.commercial-service',
                    'img' => 'project/PYT-Commercial.webp',
                    'title' => 'Truck Transportation Service',
                    'label' => 'COMMERCIAL',
                    'width' => 300,
                    'height' => 200,
                ],
            ];
        @endphp
        @foreach ($services as $index => $service)
            @php
                $serviceRoute = route($service['route']);
                $imgSrc = asset('frontend/images/' . $service['img']);
                $fetchPriority = $index === 0 ? 'high' : 'low';
            @endphp

            <div class="tj-project-item">
                <a href="{{ $serviceRoute }}" class="project-link"
                    aria-label="Learn more about {{ $service['title'] }}" title="{{ $service['title'] }}">
                    <img src="{{ $imgSrc }}" loading="lazy" fetchpriority="{{ $fetchPriority }}"
                        alt="{{ $service['title'] }}" width="{{ $service['width'] }}"
                        height="{{ $service['height'] }}" loading="lazy">
                    <div class="arrow-icon">
                        <a href="{{ $serviceRoute }}" aria-label="Learn more about {{ $service['title'] }}"
                            title="{{ $service['title'] }}">
                            <i class="fa-light fa-arrow-right"></i>
                        </a>
                    </div>

                    <div class="tj-project-content">
                        <span class="sub-title">{{ $service['label'] }}</span>
                        <h6><a class="title-link" href="{{ $serviceRoute }}"
                                aria-label="Learn more about {{ $service['title'] }}"
                                title="{{ $service['title'] }}">{{ $service['title'] }}</a></h6>
                    </div>
                </a>
            </div>
        @endforeach --}}
{{-- services section end --}}





{{-- @foreach ($services as $index => $service)
                @php
                    $serviceRoute = route($service['route'] ?? '');
                    $imgSrc = isset($service['img']) ? asset('frontend/images/' . $service['img']) : asset('frontend/images/default.webp');
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




{{-- </div>
</section> --}}

<section>
    <div class="container">

        <div class="row mx-5">
            <div class="firstorthird rounded col-md-3 px-3 py-4">
                <h3 class="pb-4">Car Shipping</h3>
                <p class="pt-4">Say the name of your auto transport type and let us handle everything. ShipA1 is here
                    for you, offering low cost car shipping with a door-to-door delivery benefit. Bring your luxury or
                    used cars and handpick your open or enclosed trailers in no time. </p>
            </div>
            <div class="secondorforth rounded col-md-3 px-3 py-4">
                <h3 class="pb-4">Motorcycle Shipping</h3>
                <p class="pt-4">ShipA1 should be your first choice if you are looking for an expert transport agency
                    to move your collection of brand-new or vintage bikes. Don’t worry about the safe loading and
                    on-road security, as we offer door-to-door motorcycle shipping all over the USA.</p>
            </div>
            <div class="firstorthird rounded col-md-3 px-3 py-4">
                <h3 class="pb-4">Heavy Equipment Transport</h3>
                <p class="pt-2">We are experienced and certified heavy equipment movers in the USA and beyond. The
                    team is ready to serve you with quick city-to-city, state-to-state, and cross-country transport
                    services in all fifty states of the USA.</p>
            </div>
            <div class="secondorforth rounded col-md-3 px-3 py-4">
                <h3 class="pb-4">Freight Forwarding</h3>
                <p class="pt-4">ShipA1 covers the top three categories of freight logistics transportation (Reefer,
                    Dry Van, and Hazmat). Completing city-to-city delivery in 48 hours and state-to-state consignment
                    within 7 days makes us one of the best freight shipping platforms in the USA.</p>
            </div>
        </div>
        <div class="tj-theme-button my-3 text-center">
            <a class="tj-transparent-btn" href="{{ route('services') }}">
                View All<i class="flaticon-right-1"></i>
            </a>
        </div>
    </div>
</section>

<section class="tj-choose-us-section-service-moiz my-5 services-bg">
    <div class="container why-box">
        <div class="row services">

            {{-- <p class="text-center">Find out who are our targeted businesses. It’s not just a common customer we
                    cater to in the USA.
                    ShipA1 is a brand of convenient and helpful assistance for each logistics transport requesting
                    business platform.
                </p> --}}
            <div class="pt-5 service-m">
                <h3 class="text-center ">ShipA1’s Conquered B2B Marketplace</h3>
                <div class="service-section-parent gap-3 ">
                    <div class="services-section ">
                        <span>
                            <h4 class="text-center fs-6 font-weight-bold">Auto Dealerships</h4>
                            <p class="text-center">Continuous collaboration opportunities for auto sales businesses.
                            </p>
                        </span>
                    </div>
                    <div class="services-section ">
                        <span>
                            <h4 class="text-center fs-6 font-weight-bold">Auto Auctions</h4>
                            <p class="text-center">Expedited shipping for vehicles destined for auctions.</p>
                        </span>
                    </div>
                    <div class="services-section ">
                        <span>
                            <h4 class="text-center fs-6 font-weight-bold">Company Vehicle Fleets</h4>
                            <p class="text-center">Corporate firms are also our special B2B clients for car shipping.
                            </p>
                        </span>
                    </div>
                    <div class="services-section ">
                        <span>
                            <h4 class="text-center fs-6 font-weight-bold">Rental Car Companies</h4>
                            <p class="text-center">We are all set every day for rental car agencies.</p>
                        </span>
                    </div>
                    <div class="services-section ">
                        <span>
                            <h4 class="text-center fs-6 font-weight-bold">Manufacturing Hubs</h4>
                            <p class="text-center">Fast and fully secure shipping for your manufacturing vehicles.</p>
                        </span>
                    </div>

                </div>
            </div>
        </div>
</section>
<section>
    <div class="container my-5">
        <div class="row">
            <div class="col-12 col-lg-7 ">
                <div class="col-12 my-5 mx-2 tj-section-heading">
                    <h3><span class="sub-title active-shape"> 3 Steps Order Booking Process - Get a Quote Today! </h3>
                    <p>ShipA1 is a 24/7 active remotely available automobile shipping agency. Follow the process to
                        book your vehicle transport consignment hassle-free.</p>
                    <br />
                    <h4 class="font-weight-bold">1. Request a Quote</h4>
                    <p>Learn about our services through our official website and request an instant customized plan by
                        clicking on <a href="{{ route('quote.form.combine') }}" class="alllinks">“Get a Quote”.</a>
                    </p>
                    <br />
                    <h4 class="font-weight-bold">2. Get Options & Booking Confirmation</h4>
                    <p>
                        Choose your automobile shipping plan and obtain booking confirmation by following a simple order
                        booking
                        process.
                    </p>
                    <br />
                    <h4 class="font-weight-bold">3. Wait for Speedy Shipping Delivery</h4>
                    <p>
                        That’s it; you are done here. Wait for the foremost and safe drop-off of your vehicle shipment
                        delivery.
                    </p>
                </div>
            </div>
            <div class="col-12 col-lg-5  d-flex justify-content-center align-items-center"><img class="shadow-lg"
                    src="{{ asset('frontend/images/about/450x500Nevada.jpg') }}" alt="450x500"
                    loading="lazy" decoding="async"></div>
        </div>
    </div>
</section>
<section>
    <div class="container my-5">
        <div class="row">
            <div class="col-12 col-lg-5 d-flex justify-content-center align-items-center">
                <img class="img-fluid" src="{{ asset('frontend/images/about/post-2.jpg') }}" alt="450x500"
                    loading="lazy" decoding="async">
            </div>

            <div class=" col-12 col-lg-7 ">
                <div class="col-12 my-5 mx-2 tj-section-heading">
                    <h3><span class="sub-title active-shape"> Say Goodbye to Auto Transport Hassles in the USA</h3>
                    <p>We got everything covered, you just have to reach out to our ready-to-assist expert team of
                        shippers, carriers, and consignees and
                        allow them to serve you with the best vehicle shipping service perks.</p>
                    <br />
                    <h4 class="font-weight-bold">No More On-Road Snags</h4>
                    <p>Fuel stops, vehicle maintenance and unpredictable weather are no longer on-route challenges for
                        ShipA1. Hire us and get uninterrupted
                        vehicle shipping experience.
                    </p>
                    <br />
                    <h4 class="font-weight-bold">We Handle All Legal Compliance</h4>
                    <p>
                        Cargo detentions are never new in the USA. ShipA1’s carriers and drivers are qualified enough to
                        get through
                        each regulatory checkpoint and vehicle inspection station.
                    </p>
                    <br />
                    <h4 class="font-weight-bold">Only Specialized Expert Carriers</h4>
                    <p>
                        ShipA1 works for your exceptional service satisfaction. That’s why our assigned carrier
                        companions are trained to follow professional friendly gestures throughout car shipping
                        journeys.
                    </p>
                </div>
            </div>
        </div>
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
                            <h2 class="title fs-3">Get an instant quote in few simple steps</h2>
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
                                    <h6 class="title">Safe &amp; Reliable</h6>
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
@include('partials.usa-states-map')
{{-- @include('partials.faqs') --}}

@php
    $faqs = [
        [
            'question' => 'How is ShipA1 the trusted automobile transport agency in the USA?',
            'answer' =>
                'Simply put, we offer qualified carriers, benefits to customers with door-to-door vehicle shipping, and back automobiles with one hundred percent insurance support.',
        ],
        [
            'question' => 'Does ShipA1 offer the cheapest car shipping services in the USA?',
            'answer' =>
                'ShipA1 never aims to trap its existing and potential customers by highlighting offering cheap car shipping services. Our customized car transport service plans come under budget-friendly ranges.',
        ],
        [
            'question' => 'How much time does it take to hire the best car shipping agency near me?',
            'answer' =>
                'Locating and hiring a car shipping agency depends on your digital exploration and selected car transport partner. However, at ShipA1, you get quotes and order booking confirmation within minutes.',
        ],
        [
            'question' => 'How do I identify a reliable and trusted vehicle shipping partner?',
            'answer' =>
                'As per our experienced shipping team, clients should explore the digital presence, read online reviews, and ask for licensed verification to identify their top-picked freight.',
        ],
        [
            'question' => 'How can I get fast automobile transport services right now?',
            'answer' =>
                'Connect with ShipA1 and click on “Get a Quote”. By following a simple order booking process, you can get your automobile shipping consignment started.',
        ],
    ];
@endphp

<x-faq :faqs="$faqs" />
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
            title="Location: Hunt Valley, MD" loading="lazy" referrerpolicy="no-referrer-when-downgrade"
            width="100%" height="400" allowfullscreen>
        </iframe>
    </div>
    <div class="tj-map-tabs"
        style="background-image: url('{{ asset('frontend/images/banner/form-shape2.webp') }}');">
        <div class="accordion" id="contactAccordion">
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingContact">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                        data-bs-target="#contactCollapse" aria-expanded="true" aria-controls="contactCollapse">
                        Contact Us
                    </button>
                </h2>
                <div id="contactCollapse" class="accordion-collapse collapse show" aria-labelledby="headingContact"
                    data-bs-parent="#contactAccordion">
                    <div class="accordion-body">
                        <ul class="list-gap">
                            <li>
                                <i class="flaticon-placeholder"></i>
                                <a href="https://www.google.com/maps/place/201+International+Cir+STE+230,+Hunt+Valley,+MD+21030"
                                    target="_blank">
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
<!-- jQuery Script to Update Dynamic Content -->

<script>
    $(document).ready(function() {
        $(".card-btn").click(function() {
            var content = $(this).closest(".card-btn-item").find(".card-btn-body").html();
            $("#dynamicContent").html(content);
            var heading = $(this).closest(".card-btn-item").find(".card-btn-header").html();
            $("#dynamicHeader").html(heading);
        });
    });
</script>


@endsection
