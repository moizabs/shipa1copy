@extends('frontend.layouts.app')
@section('title', 'Get Top Construction Equipment Shipping Services in USA | Safe & Secure Transportation')
@section('meta_description', 'Ship A1 specializes in construction equipment shipping, ensuring safe handling and fast shipping across the USA. Contact us today!')
@section('canonical')
<link rel="canonical" href="{{ url()->current() }}">
@endsection
<script type="application/ld+json">
    {
    "@context": "https://schema.org",
    "@type": "LocalBusiness",
    "name": "ShipA1",
    "url": "https://www.shipa1.com/transport-services/construction-equipment ",
    "image": "https://www.shipa1.com/frontend/images/project/4b image for construction-equipment (1).webp",
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
    "name": "Construction Equipment Shipping Service",
    "serviceType": "Heavy Equipment Transport",
    "description": "Ship A1 specializes in construction equipment shipping, ensuring safe handling and fast shipping across the USA. Contact us today!",
    "areaServed": {
    "@type": "Country",
    "name": "United States"
    }
    },
    "aggregateRating": {
    "@type": "AggregateRating",
    "ratingValue": 4.8,
    "reviewCount": 1153,
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
        background: url('/img/1-background-image-construction-equipment.webp');
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
<section class="tj-choose-us-section-service-construction">
    <div class="container mt-4">
        <div class="row mt-4">
            <div class="col-lg-6 sal-animate mt-4" data-sal="slide-left" data-sal-duration="800">
                <div class="choose-us-content-1">
                    <div class="tj-section-heading">
                        <span class="sub-title active-shape2">SERVICES</span>
                        <h1 class="title fs-2">Nationwide Construction Equipment Shipping – Reliable & Secure Transportation!</h1>
                        <h2 class="desc-2 fs-6">
                            ShipA1 has pledged to provide all-in-one auto transport solutions to all its
                            customers and seeks your trust in return of our services.
                        </h2>
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
<section class="tj-about-section pt-2 pb-0">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-12 order-sm-2 order-md-1 order-1 d-flex align-items-center justify-content-center sal-animate pt-4 mt-4" data-sal="slide-left" data-sal-duration="800">
                <div class="about-content-one">
                    <div class="tj-section-heading">
                        <h3 class="sal-animate" data-sal="slide-left" data-sal-duration="800">Certified & Approved Construction Equipment Shipping </h3>
                        <p class="desc">
                            Heavy loads of industrial machinery cost time, money, and expertise. Your construction equipment (cranes, excavators, bulldozers, graders, and dump trucks) can be a kind of headache that comes without a warranty while shipping. And all of a sudden and urgent need, you will end up hiring inexperienced novices for your construction equipment shipping in the USA. As an ultimate solution to avoid paying sky-high costs, ShipA1 comes as a validated and trained machinery transport for you and your industrial partners. Trust the service and our:
                            <ul>
                                <li>Proven expert shippers</li>
                                <li>Fast deliveries all across the USA </li>
                                <li>All-day active customer service</li>
                                <li> Fully protected advanced trailers</li>
                                <li>Vigilantly monitored transport tracking</li>
                                {{-- <li>Advanced Equipment</li>
                                <li>Professional and Experience Staff</li> --}}
                            </ul>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-12 order-sm-1 order-md-2 order-2 d-flex align-items-center justify-content-center sal-animate" data-sal="slide-left" data-sal-duration="800">
                <div class="mt-4 rounded">
                    <div class="image-box">
                        <img class="rounded" src="{{ asset('/frontend/images/project/4b image for construction-equipment (1).webp') }}"
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
                        <img class="rounded" src="{{ asset('/frontend/images/project/4c image for construction-equipment (1).webp') }}"
                            alt="Image">
                    </div>
                </div>
            </div>
            <div class="col-lg-8 col-md-12 order-sm-2 order-md-2 order-1 d-flex align-items-center justify-content-center sal-animate pt-4 mt-4" data-sal="slide-left" data-sal-duration="800">
                <div class="about-content-one">
                    <div class="tj-section-heading">
                        <h3 class="sal-animate" data-sal="slide-left" data-sal-duration="800">Why ShipA1’s Construction Equipment Transport Services </h3>
                        <p class="desc">
                            The <a class="pp-link-2" href="{{ route('frontend.pages.services.heavy-service') }}">heavy machinery </a> transport business has used technology in the best way possible. Many types of
                             haulers are identified with ShipA1. Some are constructed to haul a single car, while some are
                              developed to haul things that are incredibly long and heavy. For the mechanical edition, the 
                              truck needs a huge winch. <br>
                            For anything you need to ship, ShipA1 has advanced trucks that are designed to move it. 
                            With such a wide variety of construction equipment out there, knowing precisely what you’re
                             shipping will let ShipA1 secure you a better and more accurate Construction Equipment transport
                              quote, which, in return, will help us get your construction equipment moved a lot more quickly.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <section class="tj-about-section pt-0 pb-4">
        <div class="container">
            <div class="row">
                <h2 class="title sal-animate text-center pt-4" data-sal="slide-left" data-sal-duration="800">
                    Why ShipA1’s Construction Equipment Transport Services </h2>
                <div class="col-lg-6 sal-animate pt-4 mt-4" data-sal="slide-left" data-sal-duration="800">
                    <div class="about-content-one border rounded-5 p-4">
                        <div class="tj-section-heading">
                            <span class="sub-title active-shape">Decade-Strong Reliability</span>
                            <p class="desc">
                                Active dominance not just in construction machinery shipping; we are also proficient in logistics freight and vehicle shipping services. You can’t beat the sixteen years of successful business journey.
                            </p>
                        </div>
    
                    </div>
                </div>
                <div class="col-lg-6 sal-animate pt-4 mt-4" data-sal="slide-left" data-sal-duration="800">
                    <div class="about-content-one border rounded-5 p-4">
                        <div class="tj-section-heading">
                            <span class="sub-title active-shape">Ready Set Trailers </span>
                            <p class="desc">
                                Pick trailers of your choice for the construction machinery. We offer customized options to all in the USA. Our haul trucks are ready and a few steps away to load your heavy-duty equipment in no time.</p>
                        </div>
    
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 sal-animate pt-4 mt-4" data-sal="slide-left" data-sal-duration="800">
                    <div class="about-content-one border rounded-5 p-4">
                        <div class="tj-section-heading">
                            <span class="sub-title active-shape">Fast Service & Support </span>
                            <p class="desc">
                                ShipA1’s construction equipment transportation costs challenge other markets’ average fares. As an advantage, our fast-shipping solutions and free advisory come as bonus benefits to all clients in the USA.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 sal-animate pt-4 mt-4" data-sal="slide-left" data-sal-duration="800">
                    <div class="about-content-one border rounded-5 p-4">
                        <div class="tj-section-heading">
                            <span class="sub-title active-shape">Quick Quote Booking</span>
                            <p class="desc">
                                The process is simple and less time-consuming. It just takes a few minutes to share the needed info, handpick the transport trailer, and book our heavy equipment shipping team ready to serve you with more value.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @include('partials.cta-section')
    <div class="container pt-4">
        <div class="row">
            <div class="col-lg-8 col-md-12 order-sm-2 order-md-1 order-1 d-flex align-items-center justify-content-center sal-animate pt-4 mt-4" data-sal="slide-left" data-sal-duration="800">
                <div class="about-content-one">
                    <div class="tj-section-heading">
                        <h3 class="sal-animate" data-sal="slide-left" data-sal-duration="800">Your Heavy Loads, Our Specialized Shipping Services</h3>
                        <p class="desc">
                            The USA construction building and large-scale infrastructure development marketplace is connected with machinery equipment shipping agencies. For speedy assistance and cost-cutting during the peak seasons, having a reliable and expert shipping partner is the dream of every growing enterprise. Let us back you with specialized construction equipment cargo transport services. Our solutions come with uninterrupted deliveries, fulfilling all on-road shipping requirements. 
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-12 order-sm-1 order-md-2 order-2 d-flex align-items-center justify-content-center sal-animate" data-sal="slide-left" data-sal-duration="800">
                <div class="mt-4 rounded">
                    <div class="image-box">
                        <img class="rounded" src="{{ asset('/frontend/images/project/4d image for construction-equipment (1).webp') }}"
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
                        <img class="rounded" src="{{ asset('/frontend/images/project/4a image for construction-equipment (1).webp') }}"
                            alt="Image">
                    </div>
                </div>
            </div>
            <div class="col-lg-8 col-md-12 order-sm-2 order-md-2 order-1 d-flex align-items-center justify-content-center sal-animate pt-4 mt-4" data-sal="slide-left" data-sal-duration="800">
                <div class="about-content-one">
                    <div class="tj-section-heading">
                        <h3 class="sal-animate" data-sal="slide-left" data-sal-duration="800">What’s Your Construction Equipment Type?</h3>
                        <p class="desc">
                            ShipA1 is your trusted heavy equipment transportation agency. So, what’s your heavy-duty industrial construction machinery type? Is it a bulldozer, crane, or a grader? Or maybe you need our skilled carriers for easy shipping of your loaders and pavers. Time to share, how you want it and where you want in the USA.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="tj-choose-us-section-service-commercial-3 my-5">
    <div class="container why-box">
        <div class="row services">
            <div class="col-12">
                <h2 class="services-h1">Cost Determining Factors for Your Construction Equipment Shipping</h2>
            </div>
            <div class="col-12 col-md-4 mb-4">
                <div class="card- h-100">
                    <div class="card-body">
                        <h5 class="card-title text-dark">Shipping Distance</h5>
                        <p class="card-text text-dark">Distance plays a major role in the price of your building construction machinery shipping. City-to-city and state-to-state transport have different charging costs. </p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-4 mb-4">
                <div class="card- h-100">
                    <div class="card-body">
                        <h5 class="card-title text-dark">Trailer Type</h5>
                        <p class="card-text text-dark">The hauling trucks are suggested as per the size of your construction machinery equipment. That’s why pricing factors also apply to trailer options.</p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-4 mb-4">
                <div class="card- h-100">
                    <div class="card-body">
                        <h5 class="card-title text-dark">Shipping Type</h5>
                        <p class="card-text text-dark">Urgent orders during the peak season will directly affect the prices. Our team gets involved to obtain early permits and arrange things quickly for you.</p>
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
                <h5 class="title fs-1">Advanced Trailers for Your Construction Equipment Transport </h5>
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
                                    <img src="{{ asset('/frontend/images/slider/Construction equipment on flatbed trailer.webp') }}" class="img-fluid rounded-start" style="height: 100%; background-size: cover; background-position: center;" alt="...">
                                    </div>
                                    <div class="col-sm-6 d-flex align-items-center justify-content-center">
                                    <div class="card-body tj-section-heading mb-0">
                                        <h5 class="card-title sub-title active-shape">Lowboy Trailers </h5>
                                        <p class="card-text  text-dark">This trailer type is best for your oversized and difficult-to-load equipment. The lower deck height helps in the easy loading of cranes, backhoes, and bulldozers.</p>
                                        <div class="tj-theme-button mt-2">
                                        <a class="tj-transparent-btn" href="{{ route('frontend.forms.construction_transport') }}" >
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
                                        <h5 class="card-title sub-title active-shape">Flatbed Trailers </h5>
                                        <p class="card-text text-dark">Primary and most efficient trailer type in all advanced options. It gives a clear and open space for your construction heavy loads. </p>
                                        <div class="tj-theme-button mt-2">
                                        <a class="tj-transparent-btn" href="{{ route('frontend.forms.construction_transport') }}" >
                                            Get Quote
                                            <i class="flaticon-right-1"></i>
                                        </a>
                                    </div>
                                    </div>
                                    </div>
                                    <div class="col-sm-6 d-flex align-items-center justify-content-center">
                                        <img src="{{ asset('/frontend/images/slider/Construction equipment on lowboy trailer.webp') }}" class="img-fluid rounded-start" style="height: 100%; background-size: cover; background-position: center;" alt="...">
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
                                    <img src="{{ asset('/frontend/images/slider/Construction equipment on gooseneck trailer.webp') }}" class="img-fluid rounded-start" style="height: 100%; background-size: cover; background-position: center;" alt="...">
                                    </div>
                                    <div class="col-sm-6 d-flex align-items-center justify-content-center">
                                    <div class="card-body tj-section-heading mb-0">
                                        <h5 class="card-title sub-title active-shape">Step Deck Trailers</h5>
                                        <p class="card-text text-dark">Much more familiar like the flatbed trailer, step deck carries types of machinery that are too tall for flat space and need an extra open area.</p>
                                        <div class="tj-theme-button mt-2">
                                        <a class="tj-transparent-btn" href="{{ route('frontend.forms.construction_transport') }}" >
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
                {{-- <div class="swiper-slide">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card-2 mb-3">
                                <div class="row g-0">
                                    <div class="col-sm-6 d-flex align-items-center justify-content-center">
                                    <div class="card-body tj-section-heading mb-0">
                                        <h5 class="card-title sub-title active-shape">Step Deck Trailers</h5>
                                        <p class="card-text text-dark">Mainly used for the shipping of tall construction vehicles, equipped with a lower deck for height
                                            accommodation and a higher deck for additional load.</p>
                                        <div class="tj-theme-button mt-2">
                                        <a class="tj-transparent-btn" href="{{ route('frontend.forms.construction_transport') }}" >
                                            Get Quote
                                            <i class="flaticon-right-1"></i>
                                        </a>
                                    </div>
                                    </div>
                                    </div>
                                    <div class="col-sm-6 d-flex align-items-center justify-content-center">
                                        <img src="{{ asset('/frontend/images/slider/Construction equipment on step deck trailer.webp') }}" class="img-fluid rounded-start" style="height: 100%; background-size: cover; background-position: center;" alt="...">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> --}}
            </div>
        </div>
    </div>
</section>

@include('partials.usa-states-map')
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
                <button class="faq-toggle">Is construction equipment transportation time-consuming?<span>+</span></button>
                <div class="faq-content">
                    <p>No, construction equipment shipping takes the same time as it takes for other freight logistics and vehicle transportation. </p>
                </div>
            </div>
        
            <div class="faq">
                <button class="faq-toggle">Do industrial generators and compressors come in heavy equipment? <span>+</span></button>
                <div class="faq-content">
                    <p>Yes, industrial generators and compressors come in heavy-duty construction equipment that can be transported in bulk through gooseneck trailers. </p>
                </div>
            </div>
        
            <div class="faq">
                <button class="faq-toggle">What is the average cost of construction equipment shipping in the USA? <span>+</span></button>
                <div class="faq-content">
                    <p>There are no fixed average costs for construction heavy loads. Fares go up and down every month. In the USA, charges depend on distance, shipping type, and trailer selection.</p>
                </div>
            </div>
            
            <div class="faq">
                <button class="faq-toggle">Which is the most convenient trailer type for construction equipment transport?<span>+</span></button>
                <div class="faq-content">
                    <p>The step deck trailer is the ideal trailer type that gives extra space for more large machinery. However, the flatbed is the most considered hauler in the USA for such heavy loads.</p>
                </div>
            </div>
        
            <div class="faq">
                <button class="faq-toggle">Does construction equipment have insurance support? <span>+</span></button>
                <div class="faq-content">
                    <p>Yes, Leading shipping agencies such as ShipA1 back their clients with strong insurance coverage for the transporting of heavy-weight equipment in the USA. </p>
                </div>
            </div>
        
        </div>
       </div>
    </div>
</div>
{{-- <section class="why-choose-us-slider">
    <div class="container">
        <div class="tj-section-heading text-center">
            <h2 class="title text-white">Why Choose Us?</h2>
            <span class="sub-title active-shape">Discover the benefits of choosing ShipA1 through our features.</span>
        </div>
        <div class="row">
            <div class="col-md-4 col-lg-4 mb-4">
                <div class="slide text-center">
                    <i class="fas fa-users icon-hover-shake" style="font-size: 50px;"></i>
                    <h3 class="slide-title">Affordability: </h3>
                    <p class="slide-text">We offer the best rates in the market, and that too without compromising the quality of
                        our services.</p>
                </div>
            </div>
            <div class="col-md-4 col-lg-4 mb-4">
                <div class="slide text-center">
                    <i class="fas fa-dollar-sign icon-hover-shake" style="font-size: 50px;"></i>
                    <h3 class="slide-title">Fast and Secure Shipping:</h3>
                    <p class="slide-text"> Gain access to our super speedy services like door-to-door and expedited,
                        specially tailored to the tailored needs of our customers.</p>
                </div>
            </div>
            <div class="col-md-4 col-lg-4 mb-4">
                <div class="slide text-center">
                    <i class="fas fa-clock icon-hover-shake" style="font-size: 50px;"></i>
                    <h3 class="slide-title">100% Insurance:</h3>
                    <p class="slide-text"> Each vehicle at Ship A1 is 100% protected to avoid unforeseen incidents</p>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-4 col-lg-4 mb-4">
                <div class="slide text-center">
                    <i class="fas fa-headset icon-hover-shake" style="font-size: 50px;"></i>
                    <h3 class="slide-title">24/7 Customer Support: </h3>
                    <p class="slide-text">We are present 24/7 for our customers to best assist them according to their
                        logistic concerns and needs.</p>
                </div>
            </div>
            <div class="col-md-4 col-lg-4 mb-4">
                <div class="slide text-center">
                    <i class="fas fa-shield-alt icon-hover-shake" style="font-size: 50px;"></i>
                    <h3 class="slide-title">Real-Time Tracking: </h3>
                    <p class="slide-text">Avail our real-time tracking service that allows the customer to track their shipment
                        status anytime.</p>
                </div>
            </div>
        </div>
    </div>
</section> --}}
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