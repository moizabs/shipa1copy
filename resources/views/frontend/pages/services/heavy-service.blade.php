@extends('frontend.layouts.app')
@section('title', ' Your Expert Team for Heavy Equipment Transportation')
@section('meta_description', 'You think heavy equipment transport is expensive? Utilize our digital cost calculator to learn
about average prices and get an instant quote today.')
@section('canonical')
    <link rel="canonical" href="{{ url()->current() }}">
@endsection
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "Service",
  "name": "Heavy Equipment Shipping Services",
  "description": "ShipA1 offers trusted, efficient heavy equipment shipping across the USA, specializing in agricultural, construction, and mining machinery. With a decade of experience, competitive pricing, and advanced trailers, we ensure timely, reliable transport from New York to California.",
  "provider": {
    "@type": "Organization",
    "name": "ShipA1",
    "url": "https://www.update.shipa1.com/transport-services/heavy-equipment",
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
  "serviceType": "Heavy Equipment Transportation Service",
  "areaServed": {
    "@type": "Place",
    "name": "USA"
  },
  "offers": {
    "@type": "AggregateOffer",
    "url": "https://www.update.shipa1.com/transport-services/heavy-equipment",
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
    "name": "Can I book a heavy equipment transporter right now?",
    "acceptedAnswer": {
      "@type": "Answer",
      "text": "Leading and most trusted shipping agencies such as ShipA1 allow you to book a quote within minutes on their official websites. It just takes simple equipment information form-filling, trailer selection, and order confirmation to get the shipping started."
    }
  },{
    "@type": "Question",
    "name": "What type of trailer is best for heavy equipment transport?",
    "acceptedAnswer": {
      "@type": "Answer",
      "text": "The selection of trailers depends on your heavy equipment load. Otherwise, drop deck and RGN trailers are best for self-propelled hauling vehicles."
    }
  },{
    "@type": "Question",
    "name": "What does heavy equipment transportation insurance cover?",
    "acceptedAnswer": {
      "@type": "Answer",
      "text": "Heavy equipment transportation insurance is the security coverage benefit offered by shipping agencies to their clients as an assurance and maintenance proof for transporting goods."
    }
  },{
    "@type": "Question",
    "name": "How can I get early permits for transporting oversized equipment?",
    "acceptedAnswer": {
      "@type": "Answer",
      "text": "For early permits and fast oversized equipment shipping, you will have to collaborate with experienced transport agencies such as ShipA1."
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
            background: url('/img/1-background-image-heavy-equipment-transport.webp');
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
    <section class="tj-choose-us-section-service-heavy">
        <div class="container mt-4">
            <div class="row mt-4">
                <div class="col-lg-6 sal-animate mt-4" data-sal="slide-left" data-sal-duration="800">
                    <div class="choose-us-content-1">
                        <div class="tj-section-heading">
                            <span class="sub-title active-shape2">SERVICES</span>
                            <h1 class="title fs-2">Top Heavy Equipment Shipping Company – Trusted & Efficient
                            </h1>
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

    <section class="tj-about-section pt-0 pb-0">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-12 order-sm-2 order-md-1 order-1 d-flex align-items-center justify-content-center sal-animate pt-4 mt-4"
                    data-sal="slide-left" data-sal-duration="800">
                    <div class="about-content-one">
                        <div class="tj-section-heading">
                            <h3 class="sal-animate" data-sal="slide-left" data-sal-duration="800">Nothing, Just Speedy Heavy
                                Equipment Shipping in the USA</h3>
                            <p class="desc">
                                We know that you want to end your web-maze-search to find the <a
                                    href="{{ route('welcome') }}" class="alllinks">best transport agency</a> for heavy equipment in the USA.
                                ShipA1 is nothing, just a trusted, verified, and a decade of experience offering a shipping
                                agency that gets the heavy machinery and equipment done in no time. From New York to
                                California, we cover all states. Our brand comes within the most profitable, sustainable,
                                and reliable heavy equipment shipping solutions in the USA. Got a shipping order? Reach out
                                to us today!
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12 order-sm-1 order-md-2 order-2 d-flex align-items-center justify-content-center sal-animate"
                    data-sal="slide-left" data-sal-duration="800">
                    <div class="mt-4 rounded">
                        <div class="image-box">
                            <img class="rounded" src="{{ asset('frontend/images/project/tuxpi.com.1729.webp') }}"
                                alt="Image">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="tj-about-section pt-0 pb-4">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-12 order-sm-1 order-md-1 order-2 d-flex align-items-center justify-content-center sal-animate"
                    data-sal="slide-left" data-sal-duration="800">
                    <div class="mt-4 rounded">
                        <div class="image-box">
                            <img class="rounded" src="{{ asset('frontend/images/project/tuxpi.com.17292466.webp') }}"
                                alt="Image">
                        </div>
                    </div>
                </div>
                <div class="col-lg-8 col-md-12 order-sm-2 order-md-2 order-1 d-flex align-items-center justify-content-center sal-animate pt-4 mt-4"
                    data-sal="slide-left" data-sal-duration="800">
                    <div class="about-content-one">
                        <div class="tj-section-heading">
                            <h3 class="sal-animate" data-sal="slide-left" data-sal-duration="800">On-Time Pickup/Drop-off of
                                Agri, Constr, & Mining Heavy Equip </h3>
                            <p class="desc">
                                It has been more than a decade since ShipA1 came as an all-in-one heavy equipment
                                transporter all across the USA. So, without having our clients wait and face issues during
                                physical meetings, we get them early quotes for their nationwide agricultural, construction,
                                and mining equipment shipping.
                            </p>
                            <div class="d-flex justify-content-between">
                                <div>
                                    <h6>Agri Equipment Transport</h6>
                                    <ul>
                                        <li>Tractors </li>
                                        <li>Harvesters </li>
                                        <li>Plows </li>
                                        <li>Seeders </li>
                                    </ul>
                                </div>
                                <div>
                                    <h6>Constr Equipment Transport</h6>
                                    <ul>
                                        <li>Cranes </li>
                                        <li>Bulldozers </li>
                                        <li>Excavators </li>
                                        <li>Dump Trucks </li>
                                    </ul>
                                </div>
                                <div>
                                    <h6>Mining Equipment Transport </h6>
                                    <ul>
                                        <li>Drilling rigs </li>
                                        <li>Rock crushers </li>
                                        <li>Dozers </li>
                                        <li>Wheel Loaders </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    @include('partials.reveiw-small-detail')
    <section class="tj-about-section pt-0">
        <div class="container">
            <div class="row">
                <h2 class="title sal-animate text-center" data-sal="slide-left" data-sal-duration="800">
                    Why ShipA1’s Heavy Equipment Transportation?</h2>
                <div class="col-lg-6 sal-animate pt-4 mt-4" data-sal="slide-left" data-sal-duration="800">
                    <div class="border rounded-5 p-4">
                        <div class="tj-section-heading">
                            <span class="sub-title active-shape">Nationwide Reputation</span>
                            <p class="desc">
                                Get the local professional carriers and have uninterrupted heavy equipment transportation.
                                ShipA1 is the licensed and industry-benchmark setting agency.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 sal-animate pt-4 mt-4" data-sal="slide-left" data-sal-duration="800">
                    <div class="border rounded-5 p-4">
                        <div class="tj-section-heading">
                            <span class="sub-title active-shape">Low Shipping Prices</span>
                            <p class="desc">
                                Learn how much low we charge through our online available digital average pricing suggesting
                                calculator. No extra, hidden charges.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 sal-animate pt-4 mt-4" data-sal="slide-left" data-sal-duration="800">
                    <div class="border rounded-5 p-4">
                        <div class="tj-section-heading">
                            <span class="sub-title active-shape">Trained Native Team</span>
                            <p class="desc">
                                We actively follow each shipping guideline allocated by DOT, CBP, and FMC. Our expert team
                                is just one quote away from serving you.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 sal-animate pt-4 mt-4" data-sal="slide-left" data-sal-duration="800">
                    <div class="border rounded-5 p-4">
                        <div class="tj-section-heading">
                            <span class="sub-title active-shape">Early Permits, Strong Network</span>
                            <p class="desc">
                                Our regular and all legal compliance following consignment records allows us to get early
                                permits even in peak seasons. </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @include('partials.cta-section')
    <section class="tj-about-section pt-0 pb-4">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-12 order-sm-2 order-md-1 order-1 d-flex align-items-center justify-content-center sal-animate pt-4 mt-4"
                    data-sal="slide-left" data-sal-duration="800">
                    <div class="about-content-one">
                        <div class="tj-section-heading">
                            <h3 class="sal-animate" data-sal="slide-left" data-sal-duration="800">Proven Record of 1000+
                                Heavy Equipment Shipping Orders</h3>
                            <p class="desc">
                                The network is spread all across the USA. You just have to come on board and share your
                                requirements. We are here to deliver safely equipment loading and carefully maintained
                                trailer cargo, leading to your drop-off location. ShipA1 is currently on the voyage to
                                become the household name for vehicle dealers, freight logistics partners, and construction
                                agencies. Be the ideal member of our elite clients' group by booking an instant heavy
                                equipment shipping quote right now!
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12 order-sm-1 order-md-2 order-2 d-flex align-items-center justify-content-center sal-animate"
                    data-sal="slide-left" data-sal-duration="800">
                    <div class="mt-4 rounded">
                        <div class="image-box">
                            <img class="rounded" src="{{ asset('frontend/images/project/tuxpi.commmm.webp') }}"
                                alt="Image">
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
                    <h5 class="title fs-1">Advanced Trailers for Your Farm Transport</h5>
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
                                            <img src="{{ asset('frontend/images/slider/Heavy Equipment on Lowboy Trailer.webp') }}"
                                                class="img-fluid rounded-start"
                                                style="height: 100%; background-size: cover; background-position: center;"
                                                alt="...">
                                        </div>
                                        <div class="col-sm-6 d-flex align-items-center justify-content-center">
                                            <div class="card-body tj-section-heading mb-0">
                                                <h5 class="card-title sub-title active-shape">Flatbed Trailers</h5>
                                                <p class="card-text  text-dark">The flatbed trailer is the open-air, first
                                                    choice for heavy machinery shipping. With strong safety guards, this
                                                    hauling truck comes in cost-effective ranges. </p>
                                                <div class="tj-theme-button mt-2">
                                                    <a class="tj-transparent-btn"
                                                        href="{{ route('form.vehicle.heavyEquipment') }}">
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
                                                <h5 class="card-title sub-title active-shape">Lowboy Trailers</h5>
                                                <p class="card-text text-dark">The heavy equipment often becomes irregular
                                                    and oversized machinery during loading. Lowboy trailer offers
                                                    comfortable space for tall loads.</p>
                                                <div class="tj-theme-button mt-2">
                                                    <a class="tj-transparent-btn"
                                                        href="{{ route('form.vehicle.heavyEquipment') }}">
                                                        Get Quote
                                                        <i class="flaticon-right-1"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6 d-flex align-items-center justify-content-center">
                                            <img src="{{ asset('frontend/images/slider/Heavy Equipment on Flatbed Trailer.webp') }}"
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
                                            <img src="{{ asset('frontend/images/slider/Heavy Equipment on dropdeck Trailer.webp') }}"
                                                class="img-fluid rounded-start"
                                                style="height: 100%; background-size: cover; background-position: center;"
                                                alt="...">
                                        </div>
                                        <div class="col-sm-6 d-flex align-items-center justify-content-center">
                                            <div class="card-body tj-section-heading mb-0">
                                                <h5 class="card-title sub-title active-shape">Drop Deck Trailers </h5>
                                                <p class="card-text text-dark">Much similar to a flatbed, a drop deck
                                                    hauler gives you the extra lower space for struggle-free loading and
                                                    unloading of heavy industrial machinery.</p>
                                                <div class="tj-theme-button mt-2">
                                                    <a class="tj-transparent-btn"
                                                        href="{{ route('form.vehicle.heavyEquipment') }}">
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
                                                <h5 class="card-title sub-title active-shape">Removable Gooseneck Trailers
                                                </h5>
                                                <p class="card-text text-dark">RGN is ideal for self-propelled machinery.
                                                    It’s a detachable hauling truck, best for transporting your bulldozers,
                                                    loaders, and excavators.</p>
                                                <div class="tj-theme-button mt-2">
                                                    <a class="tj-transparent-btn"
                                                        href="{{ route('form.vehicle.heavyEquipment') }}">
                                                        Get Quote
                                                        <i class="flaticon-right-1"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6 d-flex align-items-center justify-content-center">
                                            <img src="{{ asset('frontend/images/slider/Heavy Equipment on Gooseneck Trailer.webp') }}"
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
    {{-- <section class="tj-choose-us-section-service-heavy-7">
    <div class="container why-box">
        <div class="row services">
            <div class="col-12">
                <h2 class="services-h1">Ins & Outs of Heavy Equipment</h2>
            </div>
            <div class="col-12 col-md-4 mb-4">
                <div class="card- h-100">
                    <div class="card-body">
                        <h5 class="card-title text-dark">Affordable cost for shipping</h5>
                        <p class="card-text text-dark">The good news is that the price to ship a heavy equipment
                            wouldn’t be as big as the size of your equipment. We have affordable prices with optimum
                            service.</p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-4 mb-4">
                <div class="card- h-100">
                    <div class="card-body">
                        <h5 class="card-title text-dark">Type of trailers used in Heavy Equipment</h5>
                            <p class="card-text text-dark">A vast majority of the heavy equipments are being shipped by a
                                hotshot trailer or a lowboy trailer. Our network of skilled truckers know how to pickup &
                                offload equipment.</p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-4 mb-4">
                <div class="card- h-100">
                    <div class="card-body">
                        <h5 class="card-title text-dark">Kind of equipments that could be shipped</h5>
                        <p class="card-text text-dark">As a matter of fact, There are a plethora of equipment types
                            that could be shipped. Such as semi tractors, tanks, forklifts, and bulldozer. At ShipA1 we
                            have the right match of truckers & trailers.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> --}}
    @include('partials.usa-states-map')
  @php
    $faqs = [
        [
            'question' => 'How much does it cost to ship heavy machinery?',
            'answer' => 'The costs of heavy machinery depend on the size, distance, trailer type, and extra protection features offered by your shipping agency.',
        ],
        [
            'question' => 'Can I book a heavy equipment transporter right now?',
            'answer' => 'Leading and most trusted shipping agencies such as ShipA1 allow you to book a quote within minutes on their official websites. It just takes simple equipment information form-filling, trailer selection, and order confirmation to get the shipping started.',
        ],
        [
            'question' => 'What type of trailer is best for heavy equipment transport?',
            'answer' => 'The selection of trailers depends on your heavy equipment load. Otherwise, drop deck and RGN trailers are best for self-propelled hauling vehicles.',
        ],
        [
            'question' => 'What does heavy equipment transportation insurance cover?',
            'answer' => 'Heavy equipment transportation insurance is the security coverage benefit offered by shipping agencies to their clients as an assurance and maintenance proof for transporting goods.',
        ],
        [
            'question' => 'How can I get early permits for transporting oversized equipment?',
            'answer' => 'For early permits and fast oversized equipment shipping, you will have to collaborate with experienced transport agencies such as ShipA1.',
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
                    <h3 class="slide-title"> Convenience:</h3>
                    <p class="slide-text"> Ship A1 offers convenience to its customers in the form of easy access to the best
                        shipping services of heavy equipment all across the USA, feasible, and various solutions tailored to
                        customer needs.
                    </p>
                </div>
            </div>
            <div class="col-md-4 col-lg-4 mb-4">
                <div class="slide text-center">
                    <i class="fas fa-dollar-sign icon-hover-shake" style="font-size: 50px;"></i>
                    <h3 class="slide-title">100% Insurance:</h3>
                    <p class="slide-text"> Every vehicle you find here is secured and protected by 100% insurance.</p>
                </div>
            </div>
            <div class="col-md-4 col-lg-4 mb-4">
                <div class="slide text-center">
                    <i class="fas fa-clock icon-hover-shake" style="font-size: 50px;"></i>
                    <h3 class="slide-title">Timely Delivery:</h3>
                    <p class="slide-text"> Fast and secure delivery in any state, we transport your vehicle according to your given
                        time.</p>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-4 col-lg-4 mb-4">
                <div class="slide text-center">
                    <i class="fas fa-headset icon-hover-shake" style="font-size: 50px;"></i>
                    <h3 class="slide-title">24/7 Customer Support:</h3>
                    <p class="slide-text"> Any questions regarding the shipping? Worry not our team of professionals
                        and experts are available 24/7 to assist you regarding your concerns.</p>
                </div>
            </div>
            <div class="col-md-4 col-lg-4 mb-4">
                <div class="slide text-center">
                    <i class="fas fa-shield-alt icon-hover-shake" style="font-size: 50px;"></i>
                    <h3 class="slide-title">Affordability:</h3>
                    <p class="slide-text"> Get amazing and quality services without emptying your bank! Better rates and top-notch
                        quality are what we promise our customers.</p>
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
