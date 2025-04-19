@extends('frontend.layouts.app')
@section('content')
    <style>
        .tj-service-section-four {
            background-color: #f8f9fa;
            padding: 60px 0;
            position: relative;
            overflow: hidden;
        }

        .service-item-three {
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0px 4px 20px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease-in-out, box-shadow 0.3s ease-in-out;
            overflow: hidden;
            position: relative;
            margin-bottom: 30px;
            cursor: pointer;
        }

        .service-item-three:hover {
            transform: translateY(-10px);
            box-shadow: 0px 8px 30px rgba(0, 0, 0, 0.15);
        }

        .service-item-three .overlay {
            position: absolute;
            top: -100%;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgb(6 46 57 / 59%);
            transition: top 0.3s ease-in-out;
            display: flex;
            justify-content: center;
            align-items: center;
            color: white;
            font-size: 18px;
            font-weight: bold;
            text-align: center;
            padding: 20px;
            box-sizing: border-box;
        }

        .service-item-three:hover .overlay {
            top: 0;
        }

        .service-image img {
            width: 100%;
            height: auto;
            display: block;
            transition: transform 0.3s ease-in-out;
        }

        .service-item-three:hover .service-image img {
            transform: scale(1.05);
        }

        .service-content-1 {
            padding: 20px;
            text-align: center;
        }

        .service-content-1 h4 {
            font-size: 20px;
            font-weight: 600;
            margin-bottom: 15px;
        }

        .service-content-1 h4 a {
            text-decoration: none;
            color: #333;
            transition: color 0.3s ease;
        }

        [data-sal="slide-up"] {
            opacity: 0;
            transform: translateY(50px);
            transition: opacity 0.8s ease, transform 0.8s ease;
        }

        [data-sal="slide-up"].sal-animate {
            opacity: 1;
            transform: translateY(0);
        }

        .tj-service-section-four {
            scroll-behavior: smooth;
        }

        @media (max-width: 991px) {
            .tj-section-heading .title {
                font-size: 28px;
            }

            .service-content-1 h4 {
                font-size: 18px;
            }
        }
    </style>
    <section class="breadcrumb-wrapper" data-bg-image="{{ asset('frontend/images/banner/all-cover-banner.webp') }}">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-content">
                        <h1 class="breadcrumb-title text-center">Marketing Page</h1>
                        <div class="breadcrumb-link">
                            <span>
                                <a href="{{ route('welcome') }}">
                                    <span>Home</span>
                                </a>
                            </span>
                            >
                            <span>
                                <span> Marketing</span>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="tj-faq-section tj-faq-page pt-5 mx-5">
        <div class="container ">
            <div class="row shadow-sm p-3 mb-1 bg-body rounded-pill">
                <div class="col-lg-12">
                    <div class="tj-section-heading text-center">
                        <span class="sub-title active-shape">Strategic Focus</span>
                        <h2 class="title fs-1">Logistic & Transport Services with <br> Marketing Innovation </h2>
                    </div>
                </div>
            </div>
            <div class="row p-3 mb-5">
                <div class="col-lg-12">
                    <div class="slider-tabs slider-tabs-two ">
                        <ul class="nav nav-pills flex-column flex-md-row" id="pills-tab" role="tablist">
                            <li class="nav-item d-flex flex-column flex-md-row" role="presentation">
                                <button class="nav-link active mb-2 mb-md-0" id="pills-home-tab" data-bs-toggle="pill"
                                    data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home"
                                    aria-selected="true">
                                    <i class="flaticon-shipped"></i> Vehicle Transport
                                </button>
                            </li>
                            <li class="nav-item d-flex flex-column flex-md-row" role="presentation">
                                <button class="nav-link mb-2 mb-md-0" id="pills-profile-tab" data-bs-toggle="pill"
                                    data-bs-target="#pills-profile" type="button" role="tab"
                                    aria-controls="pills-profile" aria-selected="false">
                                    <i class="flaticon-global-navigation"></i> Heavy Transport
                                </button>
                            </li>
                            <li class="nav-item d-flex flex-column flex-md-row" role="presentation">
                                <button class="nav-link mb-2 mb-md-0" id="pills-contact-tab" data-bs-toggle="pill"
                                    data-bs-target="#pills-contact" type="button" role="tab"
                                    aria-controls="pills-contact" aria-selected="false">
                                    <i class="flaticon-cargo-ship-1"></i> Freight Transport
                                </button>
                            </li>
                        </ul>
                        <div class="tab-content" id="pills-tabContent">
                            <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                                <div class="row">
                                    <div class="col-lg-12" data-sal="slide-right" data-sal-duration="800">
                                        <div class="row">
                                            @foreach ($vehicle as $item)
                                                <div class="col-lg-4 col-md-6" data-sal="slide-up" data-sal-duration="800"
                                                    data-sal-delay="300">
                                                    <div class="service-item-three">
                                                        <div class="service-image">
                                                            <img loading="lazy"
                                                                src="{{ asset($item->img_thumbnail) }}"
                                                                alt="Vehicle Transportation in Florida" />
                                                        </div>
                                                        <div class="overlay">
                                                            <div class="row justify-content-center align-items-center">
                                                                <div class="col-12 text-center mb-3">
                                                                    <i class="fa-solid fa-car-side fa-3x text-white"></i>
                                                                </div>
                                                                <div class="col-12 text-center text-white mb-3">
                                                                    <h4 class="overlay-title">{{ $item->heading_one }}
                                                                    </h4>
                                                                </div>
                                                                <div class="col-12 text-center">
                                                                    <a
                                                                        href="{{ route('blog.details.noSlug', $item->slug) }}">
                                                                        <button class="tj-submit-btn fs-6">Learn More<i
                                                                                class="fa fa-arrow-right ms-2"></i></button>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="service-content-1">
                                                            <h4><a class="title"
                                                                    href="{{ route('blog.details.noSlug', $item->slug) }}">{{ $item->heading_one }}</a></h4>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="pills-profile" role="tabpanel"
                                aria-labelledby="pills-profile-tab">
                                <div class="row">
                                    <div class="col-lg-12" data-sal="slide-right" data-sal-duration="800">
                                        <div class="row">
                                            @foreach ($heavy as $item)
                                                <div class="col-lg-4 col-md-6" data-sal="slide-up" data-sal-duration="800"
                                                    data-sal-delay="300">
                                                    <div class="service-item-three">
                                                        <div class="service-image">
                                                            <img loading="lazy"
                                                                src="{{ asset($item->img_thumbnail) }}"
                                                                alt="Vehicle Transportation in North Carolina" />
                                                        </div>
                                                        <div class="overlay">
                                                            <div class="row justify-content-center align-items-center">
                                                                <div class="col-12 text-center mb-3">
                                                                    <i class="fa-solid fa-car-side fa-3x text-white"></i>
                                                                </div>
                                                                <div class="col-12 text-center text-white mb-3">
                                                                    <h4 class="overlay-title">{{ $item->heading_one }}</h4>
                                                                </div>
                                                                <div class="col-12 text-center">
                                                                    <a
                                                                        href="{{ route('blog.details.noSlug', $item->slug) }}">
                                                                        <button class="tj-submit-btn fs-6">Learn More<i
                                                                                class="fa fa-arrow-right ms-2"></i></button>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="service-content-1">
                                                            <h4><a class="title"
                                                                    href="{{ route('blog.details.noSlug', $item->slug) }}">{{ $item->heading_one }}</a></h4>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="pills-contact" role="tabpanel"
                                aria-labelledby="pills-contact-tab">
                                <div class="row">
                                    <div class="col-lg-12" data-sal="slide-right" data-sal-duration="800">
                                        <div class="row">
                                            @foreach ($freight as $item)
                                                <div class="col-lg-4 col-md-6" data-sal="slide-up" data-sal-duration="800"
                                                    data-sal-delay="300">
                                                    <div class="service-item-three">
                                                        <div class="service-image">
                                                            <img loading="lazy"
                                                                src="{{ asset($item->img_thumbnail) }}"
                                                                alt="Vehicle Transportation in Colorado" />
                                                        </div>
                                                        <div class="overlay">
                                                            <div class="row justify-content-center align-items-center">
                                                                <div class="col-12 text-center mb-3">
                                                                    <i class="fa-solid fa-car-side fa-3x text-white"></i>
                                                                </div>
                                                                <div class="col-12 text-center text-white mb-3">
                                                                    <h4 class="overlay-title">{{ $item->heading_one }}</h4>
                                                                </div>
                                                                <div class="col-12 text-center">
                                                                    <a
                                                                        href="{{ route('blog.details.noSlug', $item->slug) }}">
                                                                        <button class="tj-submit-btn fs-6">Learn More<i
                                                                                class="fa fa-arrow-right ms-2"></i></button>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="service-content-1">
                                                            <h4><a class="title"
                                                                    href="{{ route('blog.details.noSlug', $item->slug) }}">{{ $item->heading_one }}</a></h4>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- <section class="tj-service-section-four tj-service-page">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="tj-section-heading text-center">
                        <span class="sub-title active-shape"> What We Do</span>
                        <h2 class="title">Logistic & Transport</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6" data-sal="slide-up" data-sal-duration="800" data-sal-delay="300">
                    <div class="service-item-three">
                        <div class="service-image">
                            <img loading="lazy" src="{{ asset('public/frontend/images/slider/car-transports.webp') }}"
                                alt="Vehicle Transportation in Florida" />
                        </div>
                        <div class="overlay">
                            <div class="row justify-content-center align-items-center">
                                <div class="col-12 text-center mb-3">
                                    <i class="fa-solid fa-car-side fa-3x text-white"></i>
                                </div>
                                <div class="col-12 text-center text-white mb-3">
                                    <h4 class="overlay-title">Vehicle Transport in <br> Florida</h4>
                                </div>
                                <div class="col-12 text-center">
                                    <a href="{{ route('frontend.pages.marketing.vehicleTransportInFlorida') }}">
                                        <button class="tj-submit-btn fs-6">Learn More<i
                                                class="fa fa-arrow-right ms-2"></i></button>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="service-content-1">
                            <h4><a class="title"
                                    href="{{ route('frontend.pages.marketing.vehicleTransportInFlorida') }}">Vehicle
                                    Transportation in <br> Florida</a></h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6" data-sal="slide-up" data-sal-duration="800" data-sal-delay="300">
                    <div class="service-item-three">
                        <div class="service-image">
                            <img loading="lazy" src="{{ asset('public/frontend/images/slider/car-transports.webp') }}"
                                alt="Vehicle Transportation in Washington" />
                        </div>
                        <div class="overlay">
                            <div class="row justify-content-center align-items-center">
                                <div class="col-12 text-center mb-3">
                                    <i class="fa-solid fa-car-side fa-3x text-white"></i>
                                </div>
                                <div class="col-12 text-center text-white mb-3">
                                    <h4 class="overlay-title">Vehicle Transport in <br> Washington</h4>
                                </div>
                                <div class="col-12 text-center">
                                    <a href="{{ route('frontend.pages.marketing.vehicleTransportInWashington') }}">
                                        <button class="tj-submit-btn fs-6">Learn More<i
                                                class="fa fa-arrow-right ms-2"></i></button>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="service-content-1">
                            <h4><a class="title"
                                    href="{{ route('frontend.pages.marketing.vehicleTransportInWashington') }}">Vehicle
                                    Transportation in <br> Washington</a></h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6" data-sal="slide-up" data-sal-duration="800" data-sal-delay="300">
                    <div class="service-item-three">
                        <div class="service-image">
                            <img loading="lazy" src="{{ asset('public/frontend/images/slider/car-transports.webp') }}"
                                alt="Vehicle Transportation in Maryland" />
                        </div>
                        <div class="overlay">
                            <div class="row justify-content-center align-items-center">
                                <div class="col-12 text-center mb-3">
                                    <i class="fa-solid fa-car-side fa-3x text-white"></i>
                                </div>
                                <div class="col-12 text-center text-white mb-3">
                                    <h4 class="overlay-title">Vehicle Transport in <br> Maryland</h4>
                                </div>
                                <div class="col-12 text-center">
                                    <a href="{{ route('frontend.pages.marketing.vehicleTransportInMaryland') }}">
                                        <button class="tj-submit-btn fs-6">Learn More<i
                                                class="fa fa-arrow-right ms-2"></i></button>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="service-content-1">
                            <h4><a class="title"
                                    href="{{ route('frontend.pages.marketing.vehicleTransportInMaryland') }}">Vehicle
                                    Transportation in <br> Maryland</a></h4>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6" data-sal="slide-up" data-sal-duration="800" data-sal-delay="300">
                    <div class="service-item-three">
                        <div class="service-image">
                            <img loading="lazy" src="{{ asset('public/frontend/images/slider/car-transports.webp') }}"
                                alt="Vehicle Transportation in Illinois" />
                        </div>
                        <div class="overlay">
                            <div class="row justify-content-center align-items-center">
                                <div class="col-12 text-center mb-3">
                                    <i class="fa-solid fa-car-side fa-3x text-white"></i>
                                </div>
                                <div class="col-12 text-center text-white mb-3">
                                    <h4 class="overlay-title">Vehicle Transport in <br> Illinois</h4>
                                </div>
                                <div class="col-12 text-center">
                                    <a href="{{ route('frontend.pages.marketing.vehicleTransportInIllinois') }}">
                                        <button class="tj-submit-btn fs-6">Learn More<i
                                                class="fa fa-arrow-right ms-2"></i></button>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="service-content-1">
                            <h4><a class="title"
                                    href="{{ route('frontend.pages.marketing.vehicleTransportInIllinois') }}">Vehicle
                                    Transportation in <br> Illinois</a></h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6" data-sal="slide-up" data-sal-duration="800" data-sal-delay="300">
                    <div class="service-item-three">
                        <div class="service-image">
                            <img loading="lazy" src="{{ asset('public/frontend/images/slider/car-transports.webp') }}"
                                alt="Vehicle Transportation in Michigan" />
                        </div>
                        <div class="overlay">
                            <div class="row justify-content-center align-items-center">
                                <div class="col-12 text-center mb-3">
                                    <i class="fa-solid fa-car-side fa-3x text-white"></i>
                                </div>
                                <div class="col-12 text-center text-white mb-3">
                                    <h4 class="overlay-title">Vehicle Transport in <br> Michigan</h4>
                                </div>
                                <div class="col-12 text-center">
                                    <a href="{{ route('frontend.pages.marketing.vehicleTransportInMichigan') }}">
                                        <button class="tj-submit-btn fs-6">Learn More<i
                                                class="fa fa-arrow-right ms-2"></i></button>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="service-content-1">
                            <h4><a class="title"
                                    href="{{ route('frontend.pages.marketing.vehicleTransportInMichigan') }}">Vehicle
                                    Transportation in <br> Michigan</a></h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6" data-sal="slide-up" data-sal-duration="800" data-sal-delay="300">
                    <div class="service-item-three">
                        <div class="service-image">
                            <img loading="lazy" src="{{ asset('public/frontend/images/slider/car-transports.webp') }}"
                                alt="Vehicle Transportation in Virginia" />
                        </div>
                        <div class="overlay">
                            <div class="row justify-content-center align-items-center">
                                <div class="col-12 text-center mb-3">
                                    <i class="fa-solid fa-car-side fa-3x text-white"></i>
                                </div>
                                <div class="col-12 text-center text-white mb-3">
                                    <h4 class="overlay-title">Vehicle Transport in <br> Virginia</h4>
                                </div>
                                <div class="col-12 text-center">
                                    <a href="{{ route('frontend.pages.marketing.vehicleTransportInVirginia') }}">
                                        <button class="tj-submit-btn fs-6">Learn More<i
                                                class="fa fa-arrow-right ms-2"></i></button>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="service-content-1">
                            <h4><a class="title"
                                    href="{{ route('frontend.pages.marketing.vehicleTransportInVirginia') }}">Vehicle
                                    Transportation in <br> Virginia</a></h4>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6" data-sal="slide-up" data-sal-duration="800" data-sal-delay="300">
                    <div class="service-item-three">
                        <div class="service-image">
                            <img loading="lazy" src="{{ asset('public/frontend/images/slider/car-transports.webp') }}"
                                alt="Vehicle Transportation in North Carolina" />
                        </div>
                        <div class="overlay">
                            <div class="row justify-content-center align-items-center">
                                <div class="col-12 text-center mb-3">
                                    <i class="fa-solid fa-car-side fa-3x text-white"></i>
                                </div>
                                <div class="col-12 text-center text-white mb-3">
                                    <h4 class="overlay-title">Vehicle Transport in <br> North Carolina</h4>
                                </div>
                                <div class="col-12 text-center">
                                    <a href="{{ route('frontend.pages.marketing.vehicleTransportInNorthCarolina') }}">
                                        <button class="tj-submit-btn fs-6">Learn More<i
                                                class="fa fa-arrow-right ms-2"></i></button>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="service-content-1">
                            <h4><a class="title"
                                    href="{{ route('frontend.pages.marketing.vehicleTransportInNorthCarolina') }}">Vehicle
                                    Transportation in <br> North Carolina</a></h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6" data-sal="slide-up" data-sal-duration="800" data-sal-delay="300">
                    <div class="service-item-three">
                        <div class="service-image">
                            <img loading="lazy" src="{{ asset('public/frontend/images/slider/car-transports.webp') }}"
                                alt="Vehicle Transportation in Texas" />
                        </div>
                        <div class="overlay">
                            <div class="row justify-content-center align-items-center">
                                <div class="col-12 text-center mb-3">
                                    <i class="fa-solid fa-car-side fa-3x text-white"></i>
                                </div>
                                <div class="col-12 text-center text-white mb-3">
                                    <h4 class="overlay-title">Vehicle Transport in <br> Texas</h4>
                                </div>
                                <div class="col-12 text-center">
                                    <a href="{{ route('frontend.pages.marketing.vehicleTransportInTexas') }}">
                                        <button class="tj-submit-btn fs-6">Learn More<i
                                                class="fa fa-arrow-right ms-2"></i></button>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="service-content-1">
                            <h4><a class="title"
                                    href="{{ route('frontend.pages.marketing.vehicleTransportInTexas') }}">Vehicle
                                    Transportation in <br> Texas</a></h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6" data-sal="slide-up" data-sal-duration="800" data-sal-delay="300">
                    <div class="service-item-three">
                        <div class="service-image">
                            <img loading="lazy" src="{{ asset('public/frontend/images/slider/car-transports.webp') }}"
                                alt="Vehicle Transportation in Indiana" />
                        </div>
                        <div class="overlay">
                            <div class="row justify-content-center align-items-center">
                                <div class="col-12 text-center mb-3">
                                    <i class="fa-solid fa-car-side fa-3x text-white"></i>
                                </div>
                                <div class="col-12 text-center text-white mb-3">
                                    <h4 class="overlay-title">Vehicle Transport in <br> Indiana</h4>
                                </div>
                                <div class="col-12 text-center">
                                    <a href="{{ route('frontend.pages.marketing.vehicleTransportInIndiana') }}">
                                        <button class="tj-submit-btn fs-6">Learn More<i
                                                class="fa fa-arrow-right ms-2"></i></button>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="service-content-1">
                            <h4><a class="title"
                                    href="{{ route('frontend.pages.marketing.vehicleTransportInIndiana') }}">Vehicle
                                    Transportation in <br> Indiana</a></h4>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6" data-sal="slide-up" data-sal-duration="800" data-sal-delay="300">
                    <div class="service-item-three">
                        <div class="service-image">
                            <img loading="lazy" src="{{ asset('public/frontend/images/slider/car-transports.webp') }}"
                                alt="Vehicle Transportation in Colorado" />
                        </div>
                        <div class="overlay">
                            <div class="row justify-content-center align-items-center">
                                <div class="col-12 text-center mb-3">
                                    <i class="fa-solid fa-car-side fa-3x text-white"></i>
                                </div>
                                <div class="col-12 text-center text-white mb-3">
                                    <h4 class="overlay-title">Vehicle Transport in <br> Colorado</h4>
                                </div>
                                <div class="col-12 text-center">
                                    <a href="{{ route('frontend.pages.marketing.vehicleTransportInColorado') }}">
                                        <button class="tj-submit-btn fs-6">Learn More<i
                                                class="fa fa-arrow-right ms-2"></i></button>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="service-content-1">
                            <h4><a class="title"
                                    href="{{ route('frontend.pages.marketing.vehicleTransportInColorado') }}">Vehicle
                                    Transportation in <br> Colorado</a></h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6" data-sal="slide-up" data-sal-duration="800" data-sal-delay="300">
                    <div class="service-item-three">
                        <div class="service-image">
                            <img loading="lazy" src="{{ asset('public/frontend/images/slider/car-transports.webp') }}"
                                alt="Vehicle Transportation in California" />
                        </div>
                        <div class="overlay">
                            <div class="row justify-content-center align-items-center">
                                <div class="col-12 text-center mb-3">
                                    <i class="fa-solid fa-car-side fa-3x text-white"></i>
                                </div>
                                <div class="col-12 text-center text-white mb-3">
                                    <h4 class="overlay-title">Vehicle Transport in <br> California</h4>
                                </div>
                                <div class="col-12 text-center">
                                    <a href="{{ route('frontend.pages.marketing.vehicleTransportInCalifornia') }}">
                                        <button class="tj-submit-btn fs-6">Learn More<i
                                                class="fa fa-arrow-right ms-2"></i></button>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="service-content-1">
                            <h4><a class="title"
                                    href="{{ route('frontend.pages.marketing.vehicleTransportInCalifornia') }}">Vehicle
                                    Transportation in <br> California</a></h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6" data-sal="slide-up" data-sal-duration="800" data-sal-delay="300">
                    <div class="service-item-three">
                        <div class="service-image">
                            <img loading="lazy" src="{{ asset('public/frontend/images/slider/car-transports.webp') }}"
                                alt="Vehicle Transportation in Arizona" />
                        </div>
                        <div class="overlay">
                            <div class="row justify-content-center align-items-center">
                                <div class="col-12 text-center mb-3">
                                    <i class="fa-solid fa-car-side fa-3x text-white"></i>
                                </div>
                                <div class="col-12 text-center text-white mb-3">
                                    <h4 class="overlay-title">Vehicle Transport in <br> Arizona</h4>
                                </div>
                                <div class="col-12 text-center">
                                    <a href="{{ route('frontend.pages.marketing.vehicleTransportInArizona') }}">
                                        <button class="tj-submit-btn fs-6">Learn More<i
                                                class="fa fa-arrow-right ms-2"></i></button>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="service-content-1">
                            <h4><a class="title"
                                    href="{{ route('frontend.pages.marketing.vehicleTransportInArizona') }}">Vehicle
                                    Transportation in <br> Arizona</a></h4>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6" data-sal="slide-up" data-sal-duration="800" data-sal-delay="300">
                    <div class="service-item-three">
                        <div class="service-image">
                            <img loading="lazy" src="{{ asset('public/frontend/images/slider/car-transports.webp') }}"
                                alt="Vehicle Transportation in New York" />
                        </div>
                        <div class="overlay">
                            <div class="row justify-content-center align-items-center">
                                <div class="col-12 text-center mb-3">
                                    <i class="fa-solid fa-car-side fa-3x text-white"></i>
                                </div>
                                <div class="col-12 text-center text-white mb-3">
                                    <h4 class="overlay-title">Vehicle Transport in <br> New York</h4>
                                </div>
                                <div class="col-12 text-center">
                                    <a href="{{ route('frontend.pages.marketing.vehicleTransportInNewyork') }}">
                                        <button class="tj-submit-btn fs-6">Learn More<i
                                                class="fa fa-arrow-right ms-2"></i></button>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="service-content-1">
                            <h4><a class="title"
                                    href="{{ route('frontend.pages.marketing.vehicleTransportInNewyork') }}">Vehicle
                                    Transportation in <br> New York</a></h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6" data-sal="slide-up" data-sal-duration="800" data-sal-delay="300">
                    <div class="service-item-three">
                        <div class="service-image">
                            <img loading="lazy" src="{{ asset('public/frontend/images/slider/car-transports.webp') }}"
                                alt="Vehicle Transportation in Hampshire" />
                        </div>
                        <div class="overlay">
                            <div class="row justify-content-center align-items-center">
                                <div class="col-12 text-center mb-3">
                                    <i class="fa-solid fa-car-side fa-3x text-white"></i>
                                </div>
                                <div class="col-12 text-center text-white mb-3">
                                    <h4 class="overlay-title">Vehicle Transport in <br> New Hampshire</h4>
                                </div>
                                <div class="col-12 text-center">
                                    <a href="{{ route('frontend.pages.marketing.vehicleTransportInHampshire') }}">
                                        <button class="tj-submit-btn fs-6">Learn More<i
                                                class="fa fa-arrow-right ms-2"></i></button>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="service-content-1">
                            <h4><a class="title"
                                    href="{{ route('frontend.pages.marketing.vehicleTransportInHampshire') }}">Vehicle
                                    Transportation in <br> New Hampshire</a></h4>
                        </div>
                    </div>
                </div>
                @foreach ($marketings as $marketing)
                    <div class="col-lg-4 col-md-6" data-sal="slide-up" data-sal-duration="800" data-sal-delay="300">
                        <div class="service-item-three">
                            <div class="service-image">
                                <img style="height: fit-content; width: fit-content;" loading="lazy"
                                    src="{{ asset($marketing->img_thumbnail) }}" alt="Vehicle Transportation in Connecticut" />
                            </div>
                            <div class="overlay">
                                <div class="row justify-content-center align-items-center">
                                    <div class="col-12 text-center mb-3">
                                        <i class="fa-solid fa-car-side fa-3x text-white"></i>
                                    </div>
                                    <div class="col-12 text-center text-white mb-3">
                                        <h4 class="overlay-title">{{ $marketing->heading_one }}</h4>
                                    </div>
                                    <div class="col-12 text-center">
                                        <a href="{{ route('blog.details.noSlug', $marketing->slug) }}">
                                            <button class="tj-submit-btn fs-6">Learn More<i
                                                    class="fa fa-arrow-right ms-2"></i></button>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="service-content-1">
                                <h4><a class="title"
                                        href="{{ route('blog.details.noSlug', $marketing->slug) }}">{{ $marketing->heading_one }}</a>
                                </h4>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="pagination">
                {{ $marketings->links() }}
            </div>
        </div>
    </section> --}}
    <section class="tj-choose-us-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-6" data-sal="slide-left" data-sal-duration="800">
                    <div class="choose-us-content-1">
                        <div class="tj-section-heading">
                            <span class="sub-title active-shape2"> Why Choose Us</span>
                            <h2 class="title">We are the Future of Cargo & Logistics</h2>
                            <p class="desc">
                                ShipA1 has pledged to provide all-in-one auto transport solutions to all
                                its customers and seeks your trust in return of our services.
                            </p>
                        </div>
                        <div class="row">
                            <div class="col-md-4 col-sm-4 col-6">
                                <div class="tj-icon-box3 text-center">
                                    <i class="flaticon flaticon-courier"></i>
                                    <h6 class="title">Optimized Cost</h6>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-4 col-6">
                                <div class="tj-icon-box3 text-center">
                                    <i class="flaticon flaticon-cargo"></i>
                                    <h6 class="title">Delivery on Time</h6>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-4 col-6">
                                <div class="tj-icon-box3 text-center">
                                    <i class="flaticon flaticon-agreement"></i>
                                    <h6 class="title">Safety & Reliability</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @if (session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif
                @if (session('error'))
                    <div class="alert alert-error">
                        {{ session('error') }}
                    </div>
                @endif
                <div class="col-lg-6" data-sal="slide-down" data-sal-duration="800">
                    @include('partials.multi-form')
                </div>
            </div>
        </div>
    </section>
    <section class="tj-service-section pt-4">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="tj-section-heading text-center">
                        <span class="sub-title active-shape">What We Do</span>
                        <h2 class="title">Logistic & Transport</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6" data-sal="slide-up" data-sal-duration="800" data-sal-delay="100">
                    <a href="{{ route('vehicleTransportDetail') }}" class="service-link text-decoration-none">
                        <div class="tj-service-item"
                            data-bg-image="{{ asset('frontend/images/service/CAR-CARD.webp') }}">
                            <div class="icon-box">
                                <i class="fa-light fa-car-side fa-2xs"></i>
                            </div>
                            <div class="service-content">
                                <h4 class="text-white">VEHICLE TRANSPORTATION</h4>
                                <p>Everything you need to know about 100% insured
                                    and secured vehicle transportation.</p>
                                <div class="d-flex justify-content-end">
                                    <a class="btn btn-outline-secondary btn-sm ms-2 mt-2"
                                        href="{{ route('vehicleTransportDetail') }}"
                                        style="background: #8fc445;color: white;">
                                        Read More<i class="bi bi-chevron-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-md-6" data-sal="slide-up" data-sal-duration="800" data-sal-delay="200">
                    <a href="{{ route('heavy-transport-detail') }}" class="service-link text-decoration-none">
                        <div class="tj-service-item"
                            data-bg-image="{{ asset('frontend/images/service/HEAVY-CARD.webp') }}">
                            <div class="icon-box">
                                <i class="fa-light fa-tractor fa-2xs"></i>
                            </div>
                            <div class="service-content">
                                <h4 class="text-white">HEAVY TRANSPORTATION</h4>
                                <p>Ship A1 is your trusted partner for safely and
                                    efficiently handling the toughest transportation challenges.</p>
                                <div class="d-flex justify-content-end">
                                    <a class="btn btn-outline-secondary btn-sm ms-2 mt-2"
                                        href="{{ route('heavy-transport-detail') }}"
                                        style="background: #8fc445;color: white;">
                                        Read More<i class="bi bi-chevron-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-md-6" data-sal="slide-up" data-sal-duration="800" data-sal-delay="300">
                    <a href="{{ route('freighttransport-detail') }}" class="service-link text-decoration-none">
                        <div class="tj-service-item"
                            data-bg-image="{{ asset('frontend/images/service/FREIGHT-CARD.webp') }}">
                            <div class="icon-box">
                                <i class="fa-light fa-truck fa-2xs"></i>
                            </div>
                            <div class="service-content">
                                <h4 class="text-white">FREIGHT TRANSPORTATION</h4>
                                <p>Unlock the door to smooth freight logistic
                                    transportation with Ship A1.</p>
                                <div class="d-flex justify-content-end">
                                    <a class="btn btn-outline-secondary btn-sm ms-2 mt-2"
                                        href="{{ route('freighttransport-detail') }}"
                                        style="background: #8fc445;color: white;">
                                        Read More<i class="bi bi-chevron-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>
    @include('partials.newsletter')
@endsection
