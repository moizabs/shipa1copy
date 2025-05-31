@extends('frontend.layouts.app')
@section('title', 'Your Trust Our Best Commercial Truck Shipping Services')
@section('meta_description', 'Looking for commercial truck transport companies? Ship A1 offers safe, reliable, and affordable commercial truck transport across the USA.')
@section('canonical')
<link rel="canonical" href="{{ url()->current() }}">
@endsection
<script type="application/ld+json">
    {
  "@context": "https://schema.org",
  "@type": "Service",
  "name": "Commercial Truck Shipping Services",
  "description": "ShipA1 offers reliable, secure, and affordable commercial truck shipping across all 50 states, backed by expert carriers and high-tech trailers. With over 16 years of experience, we ensure timely delivery, transparent pricing, and hassle-free permit handling for your heavy-duty transport needs.",
  "provider": {
    "@type": "Organization",
    "name": "ShipA1",
    "url": "https://www.shipa1.com/transport-services/commercial-truck",
    "logo": "https://www.shipa1.com/frontend/images/logo/LOGO%20NEW-2.webp",
    "contactPoint": {
      "@type": "ContactPoint",
      "telephone": "+1 (844) 474-4721",
      "email": "shawntransport@shipa1.com",
      "contactType": "Customer Support",
      "areaServed": "US",
      "availableLanguage": "English"
    }
  },
  "serviceType": "Commercial Truck Shipping Services",
  "areaServed": {
    "@type": "Place",
    "name": "USA"
  },
  "offers": {
    "@type": "AggregateOffer",
    "url": "https://www.shipa1.com/transport-services/commercial-truck",
    "priceCurrency": "USD",
    "eligibleRegion": {
      "@type": "Place",
      "name": "USA"
    },
    "lowPrice": 199
  },
  "sameAs": "https://www.facebook.com/shipa1"
}

</script>
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "FAQPage",
  "mainEntity": [{
    "@type": "Question",
    "name": "What is the best way to transport commercial trucks in the USA?",
    "acceptedAnswer": {
      "@type": "Answer",
      "text": "Towing or driving your commercial truck does have its disadvantages. That’s why, always go for an expert shipping agency that has experience in regular truck hauling in the USA."
    }
  },{
    "@type": "Question",
    "name": "Is a legal permit important for commercial truck shipping?",
    "acceptedAnswer": {
      "@type": "Answer",
      "text": "It all depends on your vehicle or truck type. For commercial trucks and logistics, you will be asked to have a permit during crossing state lines."
    }
  },{
    "@type": "Question",
    "name": "Will I have to pay upfront for commercial truck transportation?",
    "acceptedAnswer": {
      "@type": "Answer",
      "text": "It all depends on your shipping service provider. Transport agencies such as ShipA1 offer customized deals including no upfront payment."
    }
  },{
    "@type": "Question",
    "name": "Are commercial truck shipping brokers trustworthy?",
    "acceptedAnswer": {
      "@type": "Answer",
      "text": "Yes, in general. However, commercial truck dealers and car owners are advised to do a background check of their service providers before hiring them for state-to-state transport."
    }
  },{
    "@type": "Question",
    "name": "Can I drive a commercial truck in the USA?",
    "acceptedAnswer": {
      "@type": "Answer",
      "text": "Yes! However, it is highly advised to have verified documents and a transportation permit by yourself. As in the USA, each state follows strict regulations regarding heavy-duty trucks and vehicles."
    }
  }]
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
        background: url('/img/1 background bas commercial bas.webp');
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
        .top-notch-parent {
            display: grid;
            grid-template-columns: auto auto auto auto;
            /* background-color: dodgerblue; */
            padding: 10px;
            gap: 10px;
            text-align: center;
        }

        @media only screen and (max-width: 1000px) {
            .top-notch-parent {
                grid-template-columns: auto auto auto ;
            }
        }
        @media only screen and (max-width: 560px) {
            .top-notch-parent {
                grid-template-columns: auto auto ;
            }
        }

        .top-notch-childs {
            /* background-color: #f1f1f1; */
            border: none;
            border-radius: 5px;
            padding: 50px 10px;
            text-align: center;
        }
        /* .top-notch-childs:hover{
            transition: 2s; 
            border: 1px solid #062e39 ; 

        } */
        .top-notch-childs div {
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .top-notch-childs div div {
            border: none;
            border-radius: 50%;
            width: 50px;
            height: 50px;
            background-color: #8FC445;
            display: flex;
            justify-content: center;
            align-items: center;
            font-size: 25px;
            color: #062e39;
        }

</Style>
<section class="tj-choose-us-section-service-commercial">
    <div class="container mt-4">
        <div class="row mt-4">
            <div class="col-lg-6 sal-animate mt-4" data-sal="slide-left" data-sal-duration="800">
                <div class="choose-us-content-1">
                    <div class="tj-section-heading">
                        <span class="sub-title active-shape2">SERVICES</span>
                        <h1 class="title fs-2">Reliable Commercial Truck Shipping Services In The USA – Secure & Affordable</h1>
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
<section class="tj-about-section pt-0 pb-4 mb-2">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-12 order-sm-2 order-md-1 order-1 d-flex align-items-center justify-content-center sal-animate pt-4 mt-4" data-sal="slide-left" data-sal-duration="800">
                <div class="about-content-one">
                    <div class="tj-section-heading">
                        <h3 class="sal-animate" data-sal="slide-left" data-sal-duration="800">Industrial Expert Carriers for Your Commercial Truck Transport </h3>
                        <p class="desc">The commercial trucks are heavy-duty loads. You may need expert help to have an unerupted run on the challenging remote areas in the US. And that expert help means ShipA1’s experienced carriers. It takes days to get your pickup, tanker, box, and dump trucks crossed through strict regulations following states in the USA. That's why be with someone who has a certified team, serving locals for more than a decade. Our drivers and carriers are proven, qualified, and trained as per the guidance of FMCSA and DOT. 
                            </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-12 order-sm-1 order-md-2 order-2 d-flex align-items-center justify-content-center sal-animate" data-sal="slide-left" data-sal-duration="800">
                <div class="mt-4 rounded">
                    <div class="image-box">
                        <img class="rounded img-fluid" src="{{ asset('frontend/images/project/3b image for commercial truck transport (1).webp') }}" alt="Image">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-12 order-sm-1 order-2 d-flex align-items-center justify-content-center sal-animate" data-sal="slide-left" data-sal-duration="800">
                <div class="mt-4 rounded">
                    <div class="image-box">
                        <img class="rounded img-fluid" src="{{ asset('frontend/images/project/3a images for commercial transport.webp') }}" alt="Image">
                    </div>
                </div>
            </div>
            <div class="col-lg-8 col-md-12 order-sm-2 order-1 d-flex align-items-center justify-content-center sal-animate pt-4 mt-4" data-sal="slide-left" data-sal-duration="800">
                <div class="about-content-one">
                    <div class="tj-section-heading">
                        <h3 class="sal-animate" data-sal="slide-left" data-sal-duration="800">Quick Shipping Quotes - Fast Truck Hauling Services</h3>
                        <p class="desc">Heavy vehicles such as your commercial truck are difficult to load, pass through cross-state borders, drive through challenging traffic, and safely unload on the shared site. But when you have a licensed and proficient truck-hauling partner like ShipA1 then you should only care about being on the drop-off locations. <br>
                            When you are looking for a commercial truck shipping service, some key points come into play affecting the overall price
                            It just takes a few simple steps to learn how ShipA1 has left behind other competitors in commercial truck transport companies. Our expert team is just one click away! 
                            </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="tj-about-section pt-4 mt-4">   
    <div class="container">
        <div class="row">
            <h2 class="title sal-animate text-center" data-sal="slide-left" data-sal-duration="800">
                Why ShipA1’s Commercial Truck Shipping? </h2>
            <div class="col-lg-6 sal-animate pt-4 mt-0" data-sal="slide-left" data-sal-duration="800">
                <div class="about-content-one border rounded-5 p-4 mb-0">
                    <div class="tj-section-heading">
                        <span class="sub-title active-shape">Shipping All Across The USA </span>
                        <p class="desc">
                            We cover all fifty states. Our network for speedy commercial truck transport is spread all over the USA. ShipA1 is a popular nationwide shipping brand. 
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 sal-animate pt-4 mt-0" data-sal="slide-left" data-sal-duration="800">
                <div class="about-content-one border rounded-5 p-4 mb-0">
                    <div class="tj-section-heading">
                        <span class="sub-title active-shape">No More Permit Issues </span>
                        <p class="desc">
                            Easy transportation to or from your native state. Don’t worry about the permit clearance. Our team handles everything to serve you better and quickly. </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6 sal-animate pt-4 mt-2" data-sal="slide-left" data-sal-duration="800">
                <div class="about-content-one border rounded-5 p-4 mb-0">
                    <div class="tj-section-heading">
                        <span class="sub-title active-shape">Early Booking</span>
                        <p class="desc">
                            There are no peak season limitations here in ShipA1. You can book a <a class="alllinks" href="{{ route('commercial.truck.transport') }}"> customized quote for commercial truck shipping</a> within a few minutes. 
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 sal-animate pt-4 mt-2" data-sal="slide-left" data-sal-duration="800">
                <div class="about-content-one border rounded-5 p-4 mb-0">
                    <div class="tj-section-heading">
                        <span class="sub-title active-shape">High-Tech Trailers </span>
                        <p class="desc">
                            Come and select the suitable trailer for the comfortable shipping of your heavy-duty trucks. Or let us suggest the best hauling option.</p>
                    </div>  
                </div>
            </div>
        </div>
    </div>
</section>
@include('partials.cta-section')
<section>
    <div class="container py-5  ">
        <h2 class="text-center pb-3">What Do You Get Along with Fast Truck Shipping Services?</h2>
        <div class=" top-notch-parent">
            <div class="top-notch-childs  ">
                <div>
                    <div><i class="fa-solid fa-clipboard-check"></i></div>
                </div>
                <h5>No Hidden Charges</h5>
                <p>ShipA1 only charges what is contracted and shared through a digital pricing calculator.</p>
            </div>
            <div class="top-notch-childs  ">
                <div>
                    <div><i class="fa-solid fa-file-shield"></i></div>
                </div>
                <h5>No Shipping Delays</h5>
                <p>Early pickup and timely delivery are our prime motto here at ShipA1.</p>
            </div>
            <div class="top-notch-childs  ">
                <div>
                    <div><i class="fa-solid fa-people-arrows"></i></div>
                </div>
                <h5>No Cargo Maintenance Issues</h5>
                <p>Trailer fueling and heavyweight maintenance are not your hassle.</p>
            </div>
            <div class="top-notch-childs  ">
                <div>
                    <div><i class="fa-solid fa-people-arrows"></i></div>
                </div>
                <h5>No Logistics Equipment Damage</h5>
                <p>Our team is trained in cargo security. Otherwise, your trucks are covered with strong insurance.</p>
            </div>
        </div>
    </div>
</section>
<section class="tj-about-section pt-4 mt-2 pb-0">
    <div class="container">
        <div class="row">           
            <div class="col-lg-8 col-md-12 sal-animate d-flex align-items-center justify-content-center" data-sal="slide-left" data-sal-duration="800">
                <div class="about-content-one">
                    <div class="tj-section-heading">
                    <h3 class="sal-animate" 
                    data-sal="slide-left" data-sal-duration="800">We Dominate the Market with Unmatched Heavy Duty Truck Transport</h3>
                        <p class="desc">
                            ShipA1 is the <a class="alllinks" href="{{ route('welcome') }}">trusted transportation company</a>  of B2B enterprises, serving them with market-dominating heavy-duty shipping packages. <br>
                            Our online quote booking platforms managed by a skilled customer support team give an edge to our shipping agency in the USA. It has been more than sixteen years, and we have been admired for the professionalism shown by our local carriers (available all across the USA). </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-12 sal-animate d-flex align-items-center justify-content-center" data-sal="slide-left" data-sal-duration="800">
                <div class="mt-4 rounded">
                    <div class="image-box">
                        <img class="rounded img-fluid" src="{{ asset('frontend/images/project/3c images for commercial transport.webp') }}" alt="Image">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="tj-choose-us-section-service-commercial-2 mt-5">
    <div class="container why-box">
        <div class="row services">
            <div class="col-12">

                <h2 class="services-h1">Cost Determining Factors for Your Commercial Truck Transport</h2>
            </div>

            <div class="col-12 col-md-4 mb-4">
                <div class="card- h-100">
                    <div class="card-body">
                        <h5 class="card-title text-dark">Shipping Distance</h5>
                        <p class="card-text text-dark">Commercial truck shipping costs depend on the distance covered through city-to-city or state-to-state transport types.</p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-4 mb-4">
                <div class="card- h-100">
                    <div class="card-body">
                        <h5 class="card-title text-dark">Trailer Type </h5>
                        <p class="card-text text-dark">Flatbed, lowboy, and multi-axle do have their different price rates for commercial truck hauling. They also affect the overall pricing.</p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-4 mb-4">
                <div class="card- h-100">
                    <div class="card-body">
                        <h5 class="card-title text-dark">Shipping Type</h5>
                        <p class="card-text text-dark">It takes extra effort to get an early permit in peak seasons. That’s why there are different costs for regular and urgent quote orders.</p>
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
                <h5 class="title fs-1">Advanced Trailers for Your Construction Equip Transport </h5>
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
                                    <img src="{{ asset('frontend/images/slider/Semi-Truck-with-Lowboy-Trailer.webp') }}" class="img-fluid rounded-start" style="height: 100%; background-size: cover; background-position: center;" alt="...">
                                    </div>
                                    <div class="col-sm-6 d-flex align-items-center justify-content-center">
                                    <div class="card-body tj-section-heading mb-0">
                                        <h5 class="card-title sub-title active-shape">Lowboy Trailers</h5>
                                        <p class="card-text  text-dark">The flatbed trailer offers the open wide space for easy shipping of your commercial trucks. This hauling vehicle is convenient for all.</p>
                                        <div class="tj-theme-button mt-2">
                                        <a class="tj-transparent-btn" href="{{ route('commercial.truck.transport') }}" >
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
                                        <h5 class="card-title sub-title active-shape">Flatbed Trailers</h5>
                                        <p class="card-text text-dark">The flatbed trailer offers the open wide space for easy shipping of your commercial trucks. This hauling vehicle is convenient for all.</p>
                                        <div class="tj-theme-button mt-2">
                                        <a class="tj-transparent-btn" href="{{ route('commercial.truck.transport') }}" >
                                            Get Quote
                                            <i class="flaticon-right-1"></i>
                                        </a>
                                    </div>
                                    </div>
                                    </div>
                                    <div class="col-sm-6 d-flex align-items-center justify-content-center">
                                        <img src="{{ asset('frontend/images/slider/Semi-Truck-with-Flatbed-Trailer.webp') }}" class="img-fluid rounded-start" style="height: 100%; background-size: cover; background-position: center;" alt="...">
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
                                    <img src="{{ asset('frontend/images/slider/Semi-Truck-With-Multi-Axel-Trailer.webp') }}" class="img-fluid rounded-start" style="height: 100%; background-size: cover; background-position: center;" alt="...">
                                    </div>
                                    <div class="col-sm-6 d-flex align-items-center justify-content-center">
                                    <div class="card-body tj-section-heading mb-0">
                                        <h5 class="card-title sub-title active-shape">Multi-Axle</h5>
                                        <p class="card-text text-dark">If your cranes, dump trucks, and semi-trucks are oversized and much heavier, go for a multi-axle trailer type for conformable pickup and secure delivery.  </p>
                                        <div class="tj-theme-button mt-2">
                                        <a class="tj-transparent-btn" href="{{ route('commercial.truck.transport') }}" >
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
            </div>
        </div>
    </div>
</section>
@include('partials.usa-states-map')
@php
    $faqs = [
        [
            'question' => 'What is the best way to transport commercial trucks in the USA?',
            'answer' => 'Towing or driving your commercial truck does have its disadvantages. That’s why, always go for an expert shipping agency that has experience in regular truck hauling in the USA.',
        ],
        [
            'question' => 'Is a legal permit important for commercial truck shipping?',
            'answer' => 'It all depends on your vehicle or truck type. For commercial trucks and logistics, you will be asked to have a permit during crossing state lines.',
        ],
        [
            'question' => 'Will I have to pay upfront for commercial truck transportation?',
            'answer' => 'It all depends on your shipping service provider. Transport agencies such as ShipA1 offer customized deals including no upfront payment.',
        ],
        [
            'question' => 'Are commercial truck shipping brokers trustworthy?',
            'answer' => 'Yes, in general. However, commercial truck dealers and car owners are advised to do a background check of their service providers before hiring them for state-to-state transport.',
        ],
        [
            'question' => 'Can I drive a commercial truck in the USA?',
            'answer' => 'Yes! However, it is highly advised to have verified documents and a transportation permit by yourself. As in the USA, each state follows strict regulations regarding heavy-duty trucks and vehicles.',
        ],
    ];
@endphp

<x-faq :faqs="$faqs" />
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
                    <h3 class="slide-title">24/7 Customer Support</h3>
                    <p class="slide-text">24/7 Customer Support: Our customers are our top priority, which is why we offer
                         24/7 support to our customers to erase any doubt and offer tailored solutions to their needs and concerns.
                    </p>
                </div>
            </div>
            <div class="col-md-4 col-lg-4 mb-4">
                <div class="slide text-center">
                    <i class="fas fa-dollar-sign icon-hover-shake" style="font-size: 50px;"></i>
                    <h3 class="slide-title">On-Time Delivery</h3>
                    <p class="slide-text">At Ship A1 we keep in mind that time is equally valuable for both our customers and our company which is why we 
                        ensure the quick delivery of your cargo as scheduled and in perfect condition.</p>
                </div>
            </div>
            <div class="col-md-4 col-lg-4 mb-4">
                <div class="slide text-center">
                    <i class="fas fa-clock icon-hover-shake" style="font-size: 50px;"></i>
                    <h3 class="slide-title">Experienced Professionals</h3>
                    <p class="slide-text">Our highly skilled and professional carriers and staff are experts in what they do, which is handling, maintaining,
                         and easily loading your vehicle on our trailers.</p>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-4 col-lg-4 mb-4">
                <div class="slide text-center">
                    <i class="fas fa-headset icon-hover-shake" style="font-size: 50px;"></i>
                    <h3 class="slide-title">Real-Time Tracking</h3>
                    <p class="slide-text">Making it easy for our customers to easily track their vehicle’s current and updated status anytime and anywhere.</p>
                </div>
            </div>
            <div class="col-md-4 col-lg-4 mb-4">
                <div class="slide text-center">
                    <i class="fas fa-shield-alt icon-hover-shake" style="font-size: 50px;"></i>
                    <h3 class="slide-title">Refrigeration Technology</h3>
                    <p class="slide-text">Our fully equipped trailers maintain precise temperature control
                         suitable for your cargo throughout the journey</p>
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


</script>
@endsection