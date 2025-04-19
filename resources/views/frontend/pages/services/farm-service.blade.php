@extends('frontend.layouts.app')
@section('title', 'Top-Rated Farm Equipment Transport In the USA – Ship A1')
@section('meta_description', 'Need farm tractor transport services? Ship A1 ensures safe, secure, and on-time delivery of tractors and farming equipment nationwide.')
@section('canonical')
<link rel="canonical" href="{{ url()->current() }}">
@endsection
<script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "LocalBusiness",
      "name": "ShipA1",
      "url": "https://www.shipa1.com/transport-services/farm-equipment",
      "image": "https://www.shipa1.com/frontend/images/project/4c-image-for-Farm-transport.webp",
      "telephone": "(844) 474-4721",
      "address": {
        "@type": "PostalAddress",
        "streetAddress": "201 International Cir STE 230",
        "addressLocality": "Hunt Valley",
        "addressRegion": "MD",
        "postalCode": "21030",
        "addressCountry": "US"
      },
      "department": {
        "@type": "Service",
        "name": "Farm Equipment Transport Service",
        "serviceType": "Heavy Equipment Transport",
        "description": "Need farm tractor transport services? Ship A1 ensures safe, secure, and on-time delivery of tractors and farming equipment nationwide.",
        "areaServed": {
          "@type": "Country",
          "name": "United States"
        }
      },
      "aggregateRating": {
        "@type": "AggregateRating",
        "ratingValue": 4.9,
        "reviewCount": 745,
        "bestRating": 5,
        "worstRating": 1
      }
    }
    </script>
    
@section('content')
<Style>
    .title-2 {
    color: #8fc445;
    }
    .desc-2 {
    color: white;
    }
    .why-box {
    border-radius: 12px;
    padding: 20px 0px;
    background: #f8f9fa9c;
    }
    .card- {
    background: #ffffff;
    border: 1px solid #ddd;
    border-radius: 12px;
    padding: 15px;
    box-shadow:0 5px 30px 0 rgba(35,43,54,.3);
    }
    .services {
    text-align: center;
    border-radius: 12px;
    padding: 10px 30px 0px 30px;
    }
    .services-h1 {
    text-align:center;
    margin-bottom: 50px;
    }
    .why-choose-us-slider::before {
        content: "";
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(0, 0, 0, 0.5);
        z-index: 0; 
    }
    .why-choose-us-slider {
        background: url('/img/1 background image Farm transport.webp');
        padding: 60px 0;
        background-color: #f9f9f9;
        position: relative;
        overflow: hidden;
        background-repeat: no-repeat;
        background-size: cover;
        z-index: 1;
    }
    .section-title {
        text-align: center;
        font-size: 2.5rem;
        color: #333;
        margin-bottom: 10px;
        font-weight: 700;
        letter-spacing: 0.5px;
        text-transform: uppercase;
        animation: fadeIn 1s ease-in-out;
    }
    .section-description {
        text-align: center;
        font-size: 1.1rem;
        color: #666;
        margin-bottom: 30px;
        line-height: 1.6;
        max-width: 600px;
        margin: 0 auto 30px;
        opacity: 0.8;
        animation: fadeIn 1.2s ease-in-out;
    }
    .slide {
        min-width: 33.333%;
        box-sizing: border-box;
        padding: 20px;
        background: rgba(255, 255, 255, 0.95);
        border-radius: 12px;
        border: 1px solid rgba(221, 221, 221, 0.6);
        text-align: center;
        box-shadow: 0 8px 20px rgba(0, 0, 0, 0.1);
        transition: all 0.3s ease;
        position: relative;
        overflow: hidden;
    }
    .slide:hover {
        box-shadow: 0 12px 30px rgba(0, 0, 0, 0.15);
        transform: translateY(-5px);
        background-color: rgba(255, 255, 255, 1);
    }
    .slide i {
        margin-bottom: 20px;
        color: #666;
        font-size: 3rem;
        transition: color 0.3s ease;
    }
    .slide:hover i {
        color: #8FC445;
    }
    .slide-title {
        font-size: 1.5rem;
        color: #333;
        margin-bottom: 10px;
        font-weight: bold;
        letter-spacing: 0.3px;
        transition: color 0.3s ease;
    }
    .slide:hover .slide-title {
        color: #8FC445;
    }
    .slide-text {
        font-size: 1rem;
        color: #666;
        line-height: 1.6;
        opacity: 0.9;
    }
    .side-container{
           display: flex;
           justify-content: center;
           align-items: center;
           margin: 50px auto;
           padding:20px;
        }
        .side-container div h2{
            color: #062e39;
        }
        .side-container div p {
            color: #062e39;
        }
        .side-container div h2 span{
            color: #8fc445;
            font-weight: 700;
        }
        .side-container div hr{
            color: #8fc445;
            height: 8px;    
            opacity: 1; 
            /* border-radius: 5px; */
            border-top-left-radius: 50px;
            border-bottom-right-radius: 50px;
        }
        .btnfaq{
            border: none;
            border-radius: 5px;
            background-color: #8fc445;
            color: white;
            padding: 6px ;
            transition: 1s;
        }
        .btnfaq:hover{
            background-color: #062e39;
            color: white;
        }
        .faq-container {
            max-width: 700px;
            margin: 50px auto;
            background: #fff;
            padding:20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .faq-container h2 {
            text-align: center;
            color: #8fc445;
        }
        .faq {
            border-bottom: 1px solid #ddd;
        }
        .faq button {
            width: 100%;
            background: none;
            color: #062e39;
            border: none;
            text-align: left;
            font-size: 18px;
            padding: 15px;
            cursor: pointer;
            outline: none;
            font-weight: bold;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        .faq button:hover {
            background: #f1f1f1;
        }
        .faq-content {
            display: none;
            padding: 15px;
            font-size: 16px;
            background: #f9f9f9;
            border-radius: 5px;
        }
        .open-faq {
            background: #d22;
            color: white;
        }
</Style>
<section class="tj-choose-us-section-service-farm">
    <div class="container mt-4">
        <div class="row mt-4">
            <div class="col-lg-6 sal-animate mt-4" data-sal="slide-left" data-sal-duration="800">
                <div class="choose-us-content-1">
                    <div class="tj-section-heading">
                        <span class="sub-title active-shape2">SERVICES</span>
                        <h1 class="title fs-2">Reliable Farm Equipment Transport Services In USA You Can Trust!</h1>
                        <p class="desc-2">
                            ShipA1 has pledged to provide all-in-one auto transport solutions to all its
                            customers and seeks your trust in return of our services.
                        </p>
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
            <div class="col-lg-6 mt-0" data-sal="slide-down" data-sal-duration="800">
                @include('partials.multi-form-heavy')
            </div>
        </div>
    </div>
</section>
@include('partials.reveiw-small-detail') 
<section class="tj-about-section pt-0 pb-4">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-12 order-sm-2 order-md-1 order-1 d-flex align-items-center justify-content-center sal-animate pt-4 mt-4" data-sal="slide-left" data-sal-duration="800">
                <div class="about-content-one">
                    <div class="tj-section-heading">
                        <h3 class="sal-animate" data-sal="slide-left" data-sal-duration="800">Quick Farm Equipment Transport Services by ShipA1 </h3>
                        <p class="desc">
                            Your farm equipment is the agricultural machinery that is mostly required in the USA’s rural areas, remote locations, and other grounding corps fields. These farmland vehicles, diggers, and forklifts are not comfortable to carry - you need better support for their hauling. That’s why ShipA1 is here to bring the <a href="{{ route('frontend.forms.farm_transport') }}">best transportation services</a>  for you in farm equipment. Trust the sixteen years of experience in the market for speedy farm machinery lifting.
                            </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-12 order-sm-1 order-md-2 order-2 d-flex align-items-center justify-content-center sal-animate" data-sal="slide-left" data-sal-duration="800">
                <div class="mt-4 rounded">
                    <div class="image-box">
                        <img class="rounded" src="{{ asset('/frontend/images/project/4c-image-for-Farm-transport.webp') }}"
                            alt="Image">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container pb-4">
        <div class="row">
            <div class="col-lg-4 col-md-12 order-sm-1 order-md-1 order-2 d-flex align-items-center justify-content-center sal-animate" data-sal="slide-left" data-sal-duration="800">
                <div class="mt-4 rounded">
                    <div class="image-box">
                        <img class="rounded" src="{{ asset('/frontend/images/project/4d-image-for-Farm-transport.webp') }}"
                            alt="Image">
                    </div>
                </div>
            </div>
            <div class="col-lg-8 col-md-12 order-sm-2 order-md-2 order-1 d-flex align-items-center justify-content-center sal-animate pt-4 mt-4" data-sal="slide-left" data-sal-duration="800">
                <div class="about-content-one">
                    <div class="tj-section-heading">
                        <h3 class="sal-animate" data-sal="slide-left" data-sal-duration="800">Choose the Best, Choose the Trusted</h3>
                        <p class="desc">
                            The comfortable hauling of farmland heavy loads means your agricultural machinery is not typical oversized materials. ShipA1’s farm tractor transport services include the loading of all types of wheeled lorries, including utility, row, compact, and high-horsepower tractors. That’s why you should never take the chance; only hire a trusted expert team like ShipA1's qualified carriers’ groups in the USA.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('partials.cta-section')
    <div class="container pt-4">
        <div class="row">
            <div class="col-lg-8 col-md-12 order-sm-2 order-md-1 order-1 d-flex align-items-center justify-content-center sal-animate pt-4 mt-4" data-sal="slide-left" data-sal-duration="800">
                <div class="about-content-one">
                    <div class="tj-section-heading">
                        <h3 class="sal-animate" data-sal="slide-left" data-sal-duration="800">No Time for Manual Mode of Farm Equipment Transportation</h3>
                        <p class="desc">
                            We have left the industrial era; this is the time to go for highly advanced tech-integrated transportation road fleets such as ShipA1 modern trailers. Here are the top-notch hauling trucks we use for the safe journeys of your farming machinery towards the pointed locations:
                        <ul>
                            <li>
                                Flatbed Transport 
                            </li>
                            <li>
                                Step Deck Transport 
                            </li>
                            <li>
                                Open Transport 
                            </li>
                            <li>
                                Enclosed Transport 
                            </li>
                            <li>
                                Lowboy Transport  
                            </li>
                            <li>
                                Tilt Deck Transport 
                            </li>

                        </ul>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-12 order-sm-1 order-md-2 order-2 d-flex align-items-center justify-content-center sal-animate" data-sal="slide-left" data-sal-duration="800">
                <div class="mt-4 rounded">
                    <div class="image-box">
                        <img class="rounded" src="{{ asset('/frontend/images/project/4a image for Farm transport.webp') }}"
                            alt="Image">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-12 order-sm-1 order-md-1 order-2 d-flex align-items-center justify-content-center sal-animate" data-sal="slide-left" data-sal-duration="800">
                <div class="mt-4 rounded">
                    <div class="image-box">
                        <img class="rounded" src="{{ asset('/frontend/images/project/4a image for Farm transport (1).webp') }}"
                            alt="Image">
                    </div>
                </div>
            </div>
            <div class="col-lg-8 col-md-12 order-sm-2 order-md-2 order-1 d-flex align-items-center justify-content-center sal-animate pt-4 mt-4" data-sal="slide-left" data-sal-duration="800">
                <div class="about-content-one">
                    <div class="tj-section-heading">
                        <h3 class="sal-animate" data-sal="slide-left" data-sal-duration="800">Your Farming Equipment Type, Our Fast-Shipping Services</h3>
                        <p class="desc">
                            Tractors and harvesters shipping is regular in the USA. Share your on-road machinery type with us and we will align the qualified team for you to handle everything. From early pick-up to timely unloading on your shared agricultural land, we got you covered here. The frontier of top farm equipment shipping is open for you with transporting numerous captivated land machinery types such as:
                        <ul>
                            <li>
                                Seeders 
                            </li>
                            <li>
                                Movers 
                            </li>
                            <li>
                                Backhoe loafers 
                            </li>
                            <li>
                                Front-end loafers
                            </li>
                            <li>
                                Plows  
                            </li>
                            <li>
                                Cultivators  
                            </li>
                            <li>
                                Forklifts  
                            </li>
                            <li>
                                Telehandlers 
                            </li>
                        </ul>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="tj-about-section pt-0">
    <div class="container">
        <div class="row">
            <h2 class="title sal-animate text-center" data-sal="slide-left" data-sal-duration="800">
                Why ShipA1’s Farm Equipment Transportation?</h2>
            <div class="col-lg-6 sal-animate pt-4 mt-0" data-sal="slide-left" data-sal-duration="800">
                <div class="about-content-one border rounded-5 p-4">
                    <div class="tj-section-heading">
                        <span class="sub-title active-shape">Reliable Collaboration </span>
                        <p class="desc">
                            The team is trained to serve you with professionalism. With ShipA1, it’s easy to track your shipping trailers of farming implements. Reliable service in every assistance.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 sal-animate pt-4 mt-0" data-sal="slide-left" data-sal-duration="800">
                <div class="about-content-one border rounded-5 p-4">
                    <div class="tj-section-heading">
                        <span class="sub-title active-shape">Super-Fast Service</span>
                        <p class="desc">
                            We are all set to work on your transportation consignment.  It just takes the order confirmation from your site. Hire them to be super-fast in farm tools drop-off. </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6 sal-animate pt-4 mt-4" data-sal="slide-left" data-sal-duration="800">
                <div class="about-content-one border rounded-5 p-4">
                    <div class="tj-section-heading">
                        <span class="sub-title active-shape">Experienced Team </span>
                        <p class="desc">
                            The market experience of more than fifteen years matters. Trust those who are licensed, certified, and proficient in the USA shipping market. </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 sal-animate pt-4 mt-4" data-sal="slide-left" data-sal-duration="800">
                <div class="about-content-one border rounded-5 p-4">
                    <div class="tj-section-heading">
                        <span class="sub-title active-shape">Safety Control</span>
                        <p class="desc">
                            ShipA1’s guaranteed safe deliveries make sure to track the cargo trailers of your farming tools following their rural or remote destinations. </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="tj-testimonial-section">
    <div class="container">
        <div class="row">
            <div class="tj-section-heading text-center">
                <h5 class="title fs-1">Advanced Trailers for Your Farm Transport </h5>
            </div>
        </div> 
        <div class="swiper-container swiper-new-1">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card-2 mb-3">
                                <div class="row g-0">
                                    <div class="col-sm-6 d-flex align-items-center justify-content-center">
                                    <div class="card-body tj-section-heading mb-0">
                                        <h5 class="card-title sub-title active-shape">Lowboy Trailers</h5>
                                        <p class="card-text text-dark">Your farm equipment loading may face oversized scenarios. That’s why lowboy is the better option for the effortless pick-up and unloading of your farming machinery.</p>
                                        <div class="tj-theme-button mt-2">
                                        <a class="tj-transparent-btn" href="{{ route('frontend.forms.farm_transport') }}" >
                                            Get Quote
                                            <i class="flaticon-right-1"></i>
                                        </a>
                                    </div>
                                    </div>
                                    </div>
                                    <div class="col-sm-6 d-flex align-items-center justify-content-center">
                                        <img src="{{ asset('/frontend/images/slider/Farm Low Boy trailer.webp') }}" class="img-fluid rounded-start" style="height: 100%; background-size: cover; background-position: center;" alt="...">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card-2 mb-3">
                                <div class="row g-0">
                                    <div class="col-sm-6 d-flex align-items-center justify-content-center">
                                    <img src="{{ asset('/frontend/images/slider/Farm tilt deck trailer.webp') }}" class="img-fluid rounded-start" style="height: 100%; background-size: cover; background-position: center;" alt="...">
                                    </div>
                                    <div class="col-sm-6 d-flex align-items-center justify-content-center">
                                    <div class="card-body tj-section-heading mb-0">
                                        <h5 class="card-title sub-title active-shape">Tilt Deck Trailers</h5>
                                        <p class="card-text text-dark">In this type of trailer, you just need a little push to carry tractors into a fully secured hauling space. This hauling vehicle is also convenient for all types of balers, plows, and harvesters</p>
                                        <div class="tj-theme-button mt-2">
                                        <a class="tj-transparent-btn" href="{{ route('frontend.forms.farm_transport') }}" >
                                            Get Quote
                                            <i class="flaticon-right-1"></i>
                                        </a>
                                    </div>
                                    </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card-2 mb-3">
                                <div class="row g-0">
                                    <div class="col-sm-6 d-flex align-items-center justify-content-center">
                                    <div class="card-body tj-section-heading mb-0">
                                        <h5 class="card-title sub-title active-shape">Enclosed Trailers</h5>
                                        <p class="card-text text-dark">While an open trailer is more convenient. But an enclosed hauling truck is an extra protective trailer type. Best choice for utility and high-horsepower tractors.</p>
                                        <div class="tj-theme-button mt-2">
                                        <a class="tj-transparent-btn" href="{{ route('frontend.forms.farm_transport') }}" >
                                            Get Quote
                                            <i class="flaticon-right-1"></i>
                                        </a>
                                    </div>
                                    </div>
                                    </div>
                                    <div class="col-sm-6 d-flex align-items-center justify-content-center">
                                        <img src="{{ asset('/frontend/images/slider/Farm enclosed trailer.webp') }}" class="img-fluid rounded-start" style="height: 100%; background-size: cover; background-position: center;" alt="...">
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
<section class="tj-choose-us-section-service-farming-8">
    <div class="container why-box">
        <div class="row services">
            <div class="col-12">
                <h2 class="services-h1">Cost Determining Factors for Your Farm Equip Shipping</h2>
            </div>
            <div class="col-12 col-md-4 mb-4">
                <div class="card- h-100">
                    <div class="card-body">
                        <h5 class="card-title text-dark">Shipping Distance</h5>
                        <p class="card-text text-dark">Distance is a vital factor for your rural and remote location farm equipment transportation. Use our instant farm equipment shipping calculator for average cost results.</p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-4 mb-4">
                <div class="card- h-100">
                    <div class="card-body">
                        <h5 class="card-title text-dark">Trailer Type</h5>
                        <p class="card-text text-dark">We allow our clients to handpick their form tools transporting trailers. As each hauling vehicle has a different price rate. </p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-4 mb-4">
                <div class="card- h-100">
                    <div class="card-body">
                        <h5 class="card-title text-dark">Shipping Type</h5>
                        <p class="card-text text-dark">The transportation type matters in costs. City-to-city and state-to-state shipping affect the overall fares for agricultural machinery transport.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
{{-- <section class="tj-faq-section tj-faq-page pt-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="tj-section-heading text-center">
                    <span class="sub-title active-shape"> How It’s Work</span>
                    <h2 class="title">Frequently Asked Questions</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6" data-sal="slide-left" data-sal-duration="800">
                <div class="tj-faq-left-content">
                    <div class="faq-image">
                        <img src="{{ asset('frontend/images/slider/FAQ.webp') }}" alt="Image" />
                    </div>
                </div>
            </div>
            <div class="col-lg-6" data-sal="slide-right" data-sal-duration="800">
                <div class="tj-faq-area">
                    <div class="accordion" id="accordionExample">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingOne">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    Do you transport all kinds of heavy equipment?
                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse show"
                                aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <strong>Yes, Ship A1 offers a variety of heavy equipment services specially tailored
                                        to your needs, whether it’s a
                                        forklift, excavator, trailer, crane, etc. we are here to assist you with a 100%
                                        guarantee of quality, safety,
                                        and flexible rates for your route.</strong>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    How much time will it take to ship my heavy equipment?
                                </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <strong>It all depends on the type of equipment you are planning on shipping, other
                                        than that our estimated
                                        delivery time also varies on the distance, weather conditions as well and road
                                        conditions. However, if
                                        you want your heavy equipment to be delivered urgently then we would suggest you
                                        opt for expedited
                                        shipping as it’s the fastest shipping service provided by Ship A1, while it is a
                                        bit pricey it would ensure
                                        your equipment reaches you in your desired timeframe.</strong>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseThree" aria-expanded="false"
                                    aria-controls="collapseThree">
                                    Can you arrange for the loading and unloading of my equipment?
                                </button>
                            </h2>
                            <div id="collapseThree" class="accordion-collapse collapse"
                                aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <strong>ShipA1 can connect you with qualified heavy equipment loading and unloading
                                        service providers in your
                                        area. We can advise on the best approach based on your specific equipment and
                                        needs.</strong>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingFour">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseFour" aria-expanded="false"
                                    aria-controls="collapseFour">
                                    Are your equipment insured?
                                </button>
                            </h2>
                            <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    Not only you will get the insurance coverage. The carrier company will provide you
                                    with insurance up to a whopping upto $1 million. As soon as you get in touch with
                                    the driver you will get the documents which are related to your insurance.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> --}}
<div class="container">
    <div class="row p-5">
       <div class="side-container col-12 col-lg-5 ">
            <div>
                <h2>Frequently <span>Asked Questions</span> </h2>
                <hr class="w-50">
                <p>Have a look at answers to trending customer queries about our vehicle shipping services.</p>
                    <a class="text-decoration-none  btnfaq" href="{{ route('faq') }}">Get Detailed Shipping Answer</a>
            </div>
       </div>

       <div class="col-12 col-lg-7">
        <div class="faq-container">
            <div class="faq">
                <button class="faq-toggle">Can I transport my tractor within the city in the USA?<span>+</span></button>
                <div class="faq-content">
                    <p>Yes, this within-the-city moving comes in an intercity transportation model. It charges less than city-to-city and state-to-state shipping.</p>
                </div>
            </div>
        
            <div class="faq">
                <button class="faq-toggle">Who loads and unloads agricultural machinery in city-to-city shipping? <span>+</span></button>
                <div class="faq-content">
                    <p>It’s the trained carriers and drivers who pick up/drop off the agricultural tools and equipment for every type of freight service. They carefully transport the heavy loads following guided fleet safety compliance sheets.  </p>
                </div>
            </div>
        
            <div class="faq">
                <button class="faq-toggle">Do I need a broker for farming tools transportation?<span>+</span></button>
                <div class="faq-content">
                    <p>Yes, in state-to-state transportation, dealers and heavy load owners have to reach out to experienced shipping brokers like ShipA1 for a secured and legally following fleet.</p>
                </div>
            </div>
            
        
            <div class="faq">
                <button class="faq-toggle">Can we transport personal belongings along with farm equipment?<span>+</span></button>
                <div class="faq-content">
                    <p>As per the transportation guidance, shippers are advised to remove personal belongings from the transporting vehicles due to safety hazards. However, it depends on the obtained shipping package and transportation type.</p>
                </div>
            </div>
        
            <div class="faq">
                <button class="faq-toggle">How to book instant farming equipment transportation services? 
                    <span>+</span></button>
                <div class="faq-content">
                    <p>Instant order booking agencies such as ShipA1 allow shippers to get transportation quotes in minutes. It just takes to click to get instant quote, fill out the form with basic info, select the trailer type, and submit the request. </p>
                </div>
            </div>
        
        </div>
       </div>
    </div>
</div>
<section class="why-choose-us-slider">
    <div class="container">
        <div class="tj-section-heading text-center">
            <h2 class="title text-white">Why Hire ShipA1 Right Now?</h2>
            <span class="sub-title active-shape">Here is why you should only trust us and hire our trained shipping team.</span>
        </div>
        <div class="row">
            <div class="col-md-4 col-lg-4 mb-4">
                <div class="slide text-center">
                    <i class="fas fa-shield-alt icon-hover-shake" style="font-size: 50px;"></i>
                    <h3 class="slide-title">Door-to-Door Shipping</h3>
                    <p class="slide-text">Our existing and potential clients get the advantage of door-to-door pickup and delivery services.</p>
                </div>
            </div>
            <div class="col-md-4 col-lg-4 mb-4">
                <div class="slide text-center">
                    <i class="fas fa-clock icon-hover-shake" style="font-size: 50px;"></i>
                    <h3 class="slide-title">No Hidden Charge</h3>
                    <p class="slide-text">We don’t charge hidden costs. Be free from the hassle of paying extra for shipping heavy loads and logistics.</p>
                </div>
            </div>
            <div class="col-md-4 col-lg-4 mb-4">
                <div class="slide text-center">
                    <i class="fas fa-users icon-hover-shake" style="font-size: 50px;"></i>
                    <h3 class="slide-title">Market Challenging Rates</h3>
                    <p class="slide-text">We welcome you to come and book a quote in minutes even in peak seasons. Try us for highly competitive rates.</p>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-4 col-lg-4 mb-4">
                <div class="slide text-center">
                    <i class="fas fa-headset icon-hover-shake" style="font-size: 50px;"></i>
                    <h3 class="slide-title">100% Insurance Coverage</h3>
                    <p class="slide-text">Don’t worry about machinery damage. Your cargo of heavy equipment is covered with strong insurance coverage. </p>
                </div>
            </div>
            <div class="col-md-4 col-lg-4 mb-4">
                <div class="slide text-center">
                    <i class="fas fa-phone-alt icon-hover-shake" style="font-size: 50px;"></i>
                    <h3 class="slide-title">24/7 Active Tracking </h3>
                    <p class="slide-text">Along with all-day available customer service, the team also keeps a vigilant eye on each consignment with active monitoring.</p>
                </div>
            </div>
        </div>
    </div>
</section>
@include('partials.blog-slider')
<script>
    function playVideo() {
        document.querySelector('.video-thumbnail').style.display = 'none';
        document.querySelector('.video-iframe').style.display = 'block';
        var iframe = document.getElementById('videoFrame');
        var videoSrc = iframe.src;
        iframe.src = videoSrc + "&autoplay=1";
    }
   
    document.querySelectorAll(".faq-toggle").forEach(button => {
        button.addEventListener("click", () => {
            const faqContent = button.nextElementSibling;
            const isOpen = button.classList.contains("open-faq");

            document.querySelectorAll(".faq-toggle").forEach(btn => {
                btn.classList.remove("open-faq");
                btn.nextElementSibling.style.display = "none";
                btn.querySelector("span").textContent = "+";
            });

            if (!isOpen) {
                button.classList.add("open-faq");
                faqContent.style.display = "block";
                button.querySelector("span").textContent = "-";
            }
        });
    });

</script>
@endsection