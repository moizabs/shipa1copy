@extends('frontend.layouts.app')
@section('title', 'Nationwide RV Transport Services')
@section('meta_description', 'Your class a, b, c RVs need the secured and trusted hands. It’s time to choose the expert RV transporter in
USA. Hire ShipA1 today.')
@section('canonical')
    <link rel="canonical" href="{{ url()->current() }}">
@endsection
<script type="application/ld+json">
    {
  "@context": "https://schema.org",
  "@type": "Service",
  "name": "RV Transportation Service",
  "description": "ShipA1 offers trusted, nationwide RV and heavy equipment transportation across the USA, ensuring timely delivery and professional service. With competitive pricing, advanced trailers, and a proven track record, we cater to all your shipping needs from New York to California.",
  "provider": {
    "@type": "Organization",
    "name": "ShipA1",
    "url": "https://www.update.shipa1.com/transport-services/rv",
    "logo": "https://www.update.shipa1.com/frontend/images/logo/LOGO%20NEW-2.webp",
    "contactPoint": {
      "@type": "ContactPoint",
      "telephone": "+1 (844) 474-4721",
      "email": "shawntransport@shipa1.com",
      "contactType": "Customer Support",
      "areaServed": "US",
      "availableLanguage": "English"
    }
  },
  "serviceType": "RV Transportation Service",
  "areaServed": {
    "@type": "Place",
    "name": "USA"
  },
  "offers": {
    "@type": "AggregateOffer",
    "url": "https://www.update.shipa1.com/transport-services/rv",
    "priceCurrency": "USD",
    "lowPrice": 199
  },
  "sameAs": [
    "https://www.facebook.com/shipa1",
    "https://www.update.shipa1.com"
  ]
}

</script>
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "FAQPage",
  "mainEntity": [{
    "@type": "Question",
    "name": "How much does it cost to ship heavy machinery?",
    "acceptedAnswer": {
      "@type": "Answer",
      "text": "The costs of heavy machinery depend on the size, distance, trailer type, and extra protection features offered by your shipping agency."
    }
  },{
    "@type": "Question",
    "name": "How quickly can I hire a heavy equipment transport service?",
    "acceptedAnswer": {
      "@type": "Answer",
      "text": "Leading and most trusted shipping agencies such as ShipA1 allow you to book a quote within minutes on their official websites. It just takes simple equipment information form-filling, trailer selection, and order confirmation to get the shipping started."
    }
  },{
    "@type": "Question",
    "name": "What is the best trailer type for transporting heavy equipment?",
    "acceptedAnswer": {
      "@type": "Answer",
      "text": "The selection of trailers depends on your heavy equipment load. Otherwise, drop deck and RGN trailers are best for self-propelled hauling vehicles."
    }
  },{
    "@type": "Question",
    "name": "What’s the process to get permits for oversized equipment?",
    "acceptedAnswer": {
      "@type": "Answer",
      "text": "For early permits and fast oversized equipment shipping, you will have to collaborate with experienced transport agencies such as ShipA1."
    }
  },{
    "@type": "Question",
    "name": "What does heavy equipment transportation insurance cover?",
    "acceptedAnswer": {
      "@type": "Answer",
      "text": "Heavy equipment transportation insurance is the security coverage benefit offered by shipping agencies to their clients as an assurance and maintenance proof for transporting goods."
    }
  }]
}
</script>

    
@section('content')
    <Style>
        .text-c-1 {
            background: #183c46eb;
        }

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
            box-shadow: 0 5px 30px 0 rgba(35, 43, 54, .3);
        }

        .services {
            text-align: center;
            border-radius: 12px;
            padding: 10px 30px 0px 30px;
        }

        .services-h1 {
            text-align: center;
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
            background: url('/img/1-background-image-RV-on-trailer.webp');
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

        .side-container {
            display: flex;
            justify-content: center;
            align-items: center;
            margin: 50px auto;
            padding: 20px;
        }

        .side-container div h2 {
            color: #062e39;
        }

        .side-container div p {
            color: #062e39;
        }

        .side-container div h2 span {
            color: #8fc445;
            font-weight: 700;
        }

        .side-container div hr {
            color: #8fc445;
            height: 8px;
            opacity: 1;
            /* border-radius: 5px; */
            border-top-left-radius: 50px;
            border-bottom-right-radius: 50px;
        }

        .btnfaq {
            border: none;
            border-radius: 5px;
            background-color: #8fc445;
            color: white;
            padding: 6px;
            transition: 1s;
        }

        .btnfaq:hover {
            background-color: #062e39;
            color: white;
        }

        .faq-container {
            max-width: 700px;
            margin: 50px auto;
            background: #fff;
            padding: 20px;
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
    <section class="tj-choose-us-section-service-rv">
        <div class="container mt-4">
            <div class="row mt-4">

                <div class="col-lg-6 sal-animate mt-4" data-sal="slide-left" data-sal-duration="800">
                    <div class="choose-us-content-1">
                        <div class="tj-section-heading">
                            <span class="sub-title active-shape2">SERVICES</span>
                            <h1 class="title fs-2">Nationwide RV Transportation Services in USA – Trusted & Professional
                            </h1>
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
    <section class="tj-about-section pt-4">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-12 order-sm-2 order-md-1 order-1 d-flex align-items-center justify-content-center sal-animate pt-4 mt-4"
                    data-sal="slide-left" data-sal-duration="800">
                    <div class="about-content-one">
                        <div class="tj-section-heading">
                            <h3 class="sal-animate" data-sal="slide-left" data-sal-duration="800">Nothing, Just Speedy Heavy
                                Equipment Shipping in the USA </h3>
                            <p class="desc">
                                We know that you want to end your web-maze-search to find the <a class="alllinks" href="">best
                                    transport agency</a> for heavy equipment in the USA. ShipA1 is nothing, just a trusted,
                                verified, and a decade of experience offering a shipping agency that gets the heavy
                                machinery and equipment done in no time. From New York to California, we cover all states.
                                Our brand comes within the most profitable, sustainable, and reliable heavy equipment
                                shipping solutions in the USA. Got a shipping order? Reach out to us today!
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12 order-sm-1 order-md-2 order-2 d-flex align-items-center justify-content-center sal-animate"
                    data-sal="slide-left" data-sal-duration="800">
                    <div class="mt-4 rounded">
                        <div class="image-box">
                            <img class="rounded"
                                src="{{ asset('frontend/images/project/4a image for RV-Transport.webp') }}" alt="Image">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container pb-4">
            <div class="row">
                <div class="col-lg-4 col-md-12 order-sm-1 order-md-1 order-2 d-flex align-items-center justify-content-center sal-animate"
                    data-sal="slide-left" data-sal-duration="800">
                    <div class="mt-4 rounded">
                        <div class="image-box">
                            <img class="rounded"
                                src="{{ asset('frontend/images/project/4b image for RV-Transport.webp') }}" alt="Image">
                        </div>

                    </div>
                </div>
                <div class="col-lg-8 col-md-12 order-sm-2 order-md-2 order-1 d-flex align-items-center justify-content-center sal-animate pt-4 mt-4"
                    data-sal="slide-left" data-sal-duration="800">
                    <div class="about-content-one">
                        <div class="tj-section-heading">
                            <h3 class="sal-animate" data-sal="slide-left" data-sal-duration="800">What is RV Shipping ?</h3>
                            <p class="desc">
                                Just like any other shipping of vehicles, RV shipping includes transporting your
                                recreational vehicle
                                from one state to another with a 100% guarantee of protection and timely delivery! This
                                service is
                                usually used by people who need to move their vehicles for multiple reasons, like
                                relocation, going
                                on trips and vacations, getting their RV removed, or even selling and purchasing. <br>
                                We have an entire variety of RVs ready to be shipped, ranging from
                            <ul class="list-inline">
                                <li class="list-inline-item">&bull; Motorhomes</li>
                                <li class="list-inline-item">&bull; Travel Trailers</li>
                                <li class="list-inline-item">&bull; Class B Motorhome</li>
                                <li class="list-inline-item">&bull; Class C Motorhome</li>
                            </ul>
                            <ul class="list-inline">
                                <li class="list-inline-item">&bull; Fifth Wheels</li>
                                <li class="list-inline-item">&bull; Camper Vans</li>
                                <li class="list-inline-item">&bull; Truck Camper</li>
                                <li class="list-inline-item">&bull; Class A Motorhome</li>
                            </ul>
                            <ul class="list-inline">
                                <li class="list-inline-item">&bull; Folding Tent Trailer</li>
                            </ul>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <section class="tj-about-section pt-4">
            <div class="container">
                <div class="row">
                    <h2 class="title sal-animate text-center" data-sal="slide-left" data-sal-duration="800">
                        Why ShipA1’s Heavy Equipment Transportation? </h2>
                    <div class="col-lg-6 sal-animate pt-4 mt-4" data-sal="slide-left" data-sal-duration="800">
                        <div class="about-content-one border rounded p-4">
                            <div class="tj-section-heading">
                                <span class="sub-title active-shape">Nationwide Reputation</span>
                                <p class="desc">
                                    Get the local professional carriers and have uninterrupted heavy equipment
                                    transportation. ShipA1 is the licensed and industry-benchmark setting agency. </p>
                            </div>

                        </div>
                    </div>
                    <div class="col-lg-6 sal-animate pt-4 mt-4" data-sal="slide-left" data-sal-duration="800">
                        <div class="about-content-one border rounded p-4">
                            <div class="tj-section-heading">
                                <span class="sub-title active-shape">Low Shipping Prices</span>
                                <p class="desc">
                                    Learn how much low we charge through our online available digital average pricing
                                    suggesting calculator. No extra, hidden charges.</p>
                            </div>

                        </div>
                    </div>
                    <div class="col-lg-6 sal-animate pt-4 mt-4" data-sal="slide-left" data-sal-duration="800">
                        <div class="about-content-one border rounded p-4">
                            <div class="tj-section-heading">
                                <span class="sub-title active-shape">Early Permits, Strong Network</span>
                                <p class="desc">
                                    Our regular and all legal compliance following consignment records allows us to get
                                    early permits even in peak seasons.</p>
                            </div>

                        </div>
                    </div>
                    <div class="col-lg-6 sal-animate text-align-center pt-4 mt-4" data-sal="slide-left"
                        data-sal-duration="800">
                        <div class="about-content-one border rounded p-4">
                            <div class="tj-section-heading">
                                <span class="sub-title active-shape">Trained Native Team </span>
                                <p class="desc">
                                    We actively follow each shipping guideline allocated by DOT, CBP, and FMC. Our expert
                                    team is just one quote away from serving you. </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <div class="container pt-4">
            <div class="row">
                <div class="col-lg-8 col-md-12 order-sm-2 order-md-1 order-1 d-flex align-items-center justify-content-center sal-animate pt-4 mt-4"
                    data-sal="slide-left" data-sal-duration="800">
                    <div class="about-content-one">
                        <div class="tj-section-heading">
                            <h3 class="sal-animate" data-sal="slide-left" data-sal-duration="800">Proven Record of 1000+ Heavy Equipment Shipping Orders 
                            </h3>
                            <p class="desc">The network is spread all across the USA. You just have to come on board and share your requirements. We are here to deliver safely equipment loading and carefully maintained trailer cargo, leading to your drop-off location. ShipA1 is currently on the voyage to become the household name for vehicle dealers, freight logistics partners, and construction agencies. Be the ideal member of our elite clients' group by booking an instant <a href="" class="alllinks">heavy equipment shipping quote </a>right now!
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12 order-sm-1 order-md-2 order-2 d-flex align-items-center justify-content-center sal-animate"
                    data-sal="slide-left" data-sal-duration="800">
                    <div class="mt-4 rounded">
                        <div class="image-box">
                            <img class="rounded"
                                src="{{ asset('frontend/images/project/4c image for RV-Transport.webp') }}"
                                alt="Image">
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="tj-about-section pt-4">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-12 order-sm-1 order-md-2 order-2 d-flex align-items-center justify-content-center sal-animate"
                    data-sal="slide-left" data-sal-duration="800">
                    <div class="mt-4 rounded">
                        <div class="image-box">
                            <img class="rounded"
                                src="{{ asset('frontend/images/project/4d image for RV-Transport.webp') }}"
                                alt="Image">
                        </div>
                    </div>
                </div>
                <div class="col-lg-8 col-md-12 order-sm-2 order-md-2 order-1 d-flex align-items-center justify-content-center sal-animate pt-4 mt-4"
                    data-sal="slide-left" data-sal-duration="800">
                    <div class="about-content-one">
                        <div class="tj-section-heading">
                            <h3 class="sal-animate" data-sal="slide-left" data-sal-duration="800">On-Time Pickup/Drop-off of Agri, Constr, & Mining Heavy Equip </h3>
                            <p class="desc">
                                It has been more than a decade since ShipA1 came as an all-in-one heavy equipment transporter all across the USA. So, without having our clients wait and face issues during physical meetings, we get them early quotes for their nationwide agricultural, construction, and mining equipment shipping.
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-4 mb-3">
                                        <h5>Agri Equipment Transport</h5>
                                        <ul class="list-unstyled ps-0">
                                            <li>★ Tractors </li>
                                            <li>★ Harvesters </li>
                                            <li>★ Plows </li>
                                            <li>★ Seeders </li>
                                        </ul>
                                    </div>
                                    <div class="col-md-4 mb-3">
                                        <h5>Constr Equipment Transport </h5>
                                        <ul class="list-unstyled ps-0">
                                            <li>★ Cranes </li>
                                            <li>★ Bulldozers </li>
                                            <li>★ Excavators </li>
                                            <li>★ Dump Trucks</li>
                                        </ul>
                                    </div>
                                    <div class="col-md-4 mb-3">
                                        <h5>Mining Equipment Transport</h5>
                                        <ul class="list-unstyled ps-0">
                                            <li>★ Drilling rigs </li>
                                            <li>★ Rock crushers  </li>
                                            <li>★ Dozers  </li>
                                            <li>★ Wheel Loaders </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            </p>
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
                                                <h5 class="card-title sub-title active-shape">Flatbed Trailers</h5>
                                                <p class="card-text text-dark">The flatbed trailer is the open-air, first choice for heavy machinery shipping. With strong safety guards, this hauling truck comes in cost-effective ranges.</p>
                                                <div class="tj-theme-button mt-2">
                                                    <a class="tj-transparent-btn"
                                                        href="{{ route('frontend.forms.farm_transport') }}">
                                                        Get Quote
                                                        <i class="flaticon-right-1"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6 d-flex align-items-center justify-content-center">
                                            <img src="{{ asset('frontend/images/slider/Farm Low Boy trailer.webp') }}"
                                                class="img-fluid rounded-start"
                                                style="height: 100%; background-size: cover; background-position: center;"
                                                alt="...">
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
                                            <img src="{{ asset('frontend/images/slider/Farm tilt deck trailer.webp') }}"
                                                class="img-fluid rounded-start"
                                                style="height: 100%; background-size: cover; background-position: center;"
                                                alt="...">
                                        </div>
                                        <div class="col-sm-6 d-flex align-items-center justify-content-center">
                                            <div class="card-body tj-section-heading mb-0">
                                                <h5 class="card-title sub-title active-shape">Lowboy Trailers</h5>
                                                <p class="card-text text-dark">The heavy equipment often becomes irregular and oversized machinery during loading. Lowboy trailer offers comfortable space for tall loads. </p>
                                                <div class="tj-theme-button mt-2">
                                                    <a class="tj-transparent-btn"
                                                        href="{{ route('frontend.forms.farm_transport') }}">
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
                                                <h5 class="card-title sub-title active-shape">Drop Deck Trailers</h5>
                                                <p class="card-text text-dark">Much similar to a flatbed, a drop deck hauler gives you the extra lower space for struggle-free loading and unloading of heavy industrial machinery.</p>
                                                <div class="tj-theme-button mt-2">
                                                    <a class="tj-transparent-btn"
                                                        href="{{ route('frontend.forms.farm_transport') }}">
                                                        Get Quote
                                                        <i class="flaticon-right-1"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6 d-flex align-items-center justify-content-center">
                                            <img src="{{ asset('frontend/images/slider/Farm enclosed trailer.webp') }}"
                                                class="img-fluid rounded-start"
                                                style="height: 100%; background-size: cover; background-position: center;"
                                                alt="...">
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
    @include('partials.cta-section')
    @include('partials.usa-states-map')
   @php
    $faqs = [
        [
            'question' => 'How much does it cost to ship heavy machinery?',
            'answer' => 'The costs of heavy machinery depend on the size, distance, trailer type, and extra protection features offered by your shipping agency.',
        ],
        [
            'question' => 'How quickly can I hire a heavy equipment transport service?',
            'answer' => 'Leading and most trusted shipping agencies such as ShipA1 allow you to book a quote within minutes on their official websites. It just takes simple equipment information form-filling, trailer selection, and order confirmation to get the shipping started.',
        ],
        [
            'question' => 'What is the best trailer type for transporting heavy equipment?',
            'answer' => 'The selection of trailers depends on your heavy equipment load. Otherwise, drop deck and RGN trailers are best for self-propelled hauling vehicles.',
        ],
        [
            'question' => 'What’s the process to get permits for oversized equipment?',
            'answer' => 'For early permits and fast oversized equipment shipping, you will have to collaborate with experienced transport agencies such as ShipA1.',
        ],
        [
            'question' => 'What does heavy equipment transportation insurance cover?',
            'answer' => 'Heavy equipment transportation insurance is the security coverage benefit offered by shipping agencies to their clients as an assurance and maintenance proof for transporting goods.',
        ],
    ];
@endphp

<x-faq :faqs="$faqs" />
    {{-- <section class="tj-choose-us-section-service-RV-4">
    <div class="container why-box">
        <div class="row services">
            <div class="col-12">
                <h2 class="services-h1">RV Preparation and Documentation</h2>
            </div>
            <div class="col-12 col-md-4 mb-4">
                <div class="card- h-100">
                    <div class="card-body">
                        <h5 class="card-title text-dark">Clean & Inspect RV</h5>
                        <p class="card-text text-dark">Ensure your RV is clean inside and out,
                            and remove any dirt, debris, and personal belongings that have a risk of damaging your vehicle further.</p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-4 mb-4">
                <div class="card- h-100">
                    <div class="card-body">
                        <h5 class="card-title text-dark">Prepare Necessary Documentation</h5>
                        <p class="card-text text-dark">Make sure the necessary documents of your RV like registration papers,
                            insurance certificates, or any permits and licenses required.</p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-4 mb-4">
                <div class="card- h-100">
                    <div class="card-body">
                        <h5 class="card-title text-dark">Track your Ride</h5>
                        <p class="card-text text-dark">If you are someone who constantly has to keep updates on their vehicle, 
                            worry not! Contact Ship A1 for timely updates, or you can even track your ride online.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> --}}
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
            <div class="col-lg-6 sal-animate" data-sal="slide-left" data-sal-duration="800">
                <div class="tj-faq-left-content">
                    <div class="faq-image">
                        <img src="{{ asset('frontend/images/slider/FAQ.webp') }}" alt="Image">
                    </div>
                </div>
            </div>
            <div class="col-lg-6 sal-animate" data-sal="slide-right" data-sal-duration="800">
                <div class="tj-faq-area">
                    <div class="accordion" id="accordionExample">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingOne">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    What sorts of RVs can be transported?
                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse show"
                                aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <strong> From motor homes to travel trailers, fifth-wheel trailers, and camper vans
                                        and many more.</strong>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    How do I prepare my RV for shipping?
                                </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <strong>Secure loose components, turn off propane tanks, remove all personal items,
                                        ensure the tire pressure is okay, and keep the RV clean and locked up.
                                    </strong>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseThree" aria-expanded="false"
                                    aria-controls="collapseThree">
                                    How is the cost of RV transport determined?
                                </button>
                            </h2>
                            <div id="collapseThree" class="accordion-collapse collapse"
                                aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <strong>The actual fee will depend on the size and weight of the RV, the distance of
                                        transportation, and any special needs. For an accurate quote, call 1(844)
                                        474-4721.</strong>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingfour">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapsefour" aria-expanded="false"
                                    aria-controls="collapsefour">
                                    How do I get a quote for RV transportation with ShipA1?
                                </button>
                            </h2>
                            <div id="collapsefour" class="accordion-collapse collapse"
                                aria-labelledby="headingfour" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <strong>Give ShipA1 the specifics, including the size, weight, and condition of the RV as well as the locations
                                         for collection and delivery, to receive an estimate for RV transportation. With this data, ShipA1 will
                                          provide you with an accurate and affordable price.</strong>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section> --}}
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
            iframe.src = videoSrc + "&autoplay=1"; // Autoplay the video
        }

    </script>
@endsection
