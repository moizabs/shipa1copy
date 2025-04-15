@extends('frontend.layouts.app')
@section('title', 'Get Best Boat Transportation & Shipping Services in All Over USA | Ship A1')
@section('meta_description',
'Looking for boat transporters in USA? Ship A1 is one of the top boat transport companies, Get a free boat transportation cost today!')
@section('canonical')
<link rel="canonical" href="{{ url()->current() }}">
@endsection
@section('content')
<style>
    .full-width {
        width: 100%;
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
    .custom-style {
        padding: 20px;
        background-color: #f9f9f9;
        box-shadow: 0 5px 30px 0 rgba(35, 43, 54, .3);
        border-radius: 15px;
    }
    .custom-style h4 {
        margin-top: 0;
    }
    .custom-style p {
        margin-bottom: 0;
    }
    .top-left-image {
        position: absolute;
        top: -25px;
        left: -25px;
        width: 100px;
        height: 100px;
    }
    .title-2 {
        color: #8fc445;
    }
    .desc-2 {
        color: white;
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
        background: url('/img/1-background-image-for-boat-transport.webp');
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
</style>
<section class="tj-choose-us-section-service-boat">
    <div class="container mt-4">
        <div class="row mt-4">
            <div class="col-lg-6 sal-animate mt-4" data-sal="slide-left" data-sal-duration="800">
                <div class="choose-us-content-1">
                    <div class="tj-section-heading">
                        <span class="sub-title active-shape2">SERVICES</span>
                        <h2 class="title">Nationwide Boat Transport Services in USA – Ship Your Boat with Confidence!</h2>
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
<section class="tj-blog-standard pt-2 pb-4 mb-4">
    <div class="container">
        <div class="row full-width ps-4 pt-4">
            <div class="col-12 custom-style">
                <h4 class=" text-center">Hiring ShipA1 for Boat Shipping - Simple, Fast, & Efficient</h4>
                <p class=" text-center">Offering speedy <a href="{{ route('services') }}">transport services</a> is not our primary goal. As one of the best boat transporters across the USA, with more than fifteen years of experience, our continuous elite legacy motivates us to serve with what’s best for you. Connect with us anytime; the team is ready to book your order and collaborate on your most satisfying boat transport experience in the USA.  </p>
                <div class="tj-theme-button  text-center mt-2">
                    <a class="tj-transparent-btn" href="{{ route('form.vehicle.boat') }}" >
                        Get Quote
                        <i class="flaticon-right-1"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
{{-- <section class="tj-about-section pt-4 pb-0">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-12 order-sm-2 order-md-1 order-1 d-flex align-items-center justify-content-center sal-animate pt-4 mt-4"
                data-sal="slide-left" data-sal-duration="800">
                <div class="about-content-one">
                    <div class="tj-section-heading">
                        <h3 class="sal-animate" data-sal="slide-left" data-sal-duration="800">Seamless Boat Transport
                        </h3>
                        <p class="desc">Let's make transportation easy and swift with Ship A1 Auto Transport! If you
                            are shipping your boat for the
                            first time or if you are finding a suitable, budget-friendly company to partner with, then
                            you have come to the right
                            place! Ship A1 is the best and most reputable leading auto transport company, with years of
                            built experience we have
                            dedicated ourselves to providing quality, reliable, and smooth transportation services
                            catered to your needs. <br>
                            Here, we strive to soar higher day by day by delivering outstanding services and
                            guaranteeing our customers a seamless
                            & hassle-free transportation process.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-12 order-sm-1 order-md-2 order-2 d-flex align-items-center justify-content-center sal-animate"
                data-sal="slide-left" data-sal-duration="800">
                <div class="mt-4 rounded">
                    <div class="image-box">
                        <img class="rounded"
                            src="{{ asset('/frontend/images/project/4a images for boat transport.webp') }}"
                            alt="Image">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-12 order-sm-1 order-md-1 order-2 d-flex align-items-center justify-content-center sal-animate"
                data-sal="slide-left" data-sal-duration="800">
                <div class="mt-4 rounded">
                    <div class="image-box">
                        <img class="rounded"
                            src="{{ asset('/frontend/images/project/4c images for boat transport.webp') }}"
                            alt="Image">
                    </div>
                </div>
            </div>
            <div class="col-lg-8 col-md-12 order-sm-2 order-md-2 order-1 d-flex align-items-center justify-content-center sal-animate pt-4 mt-4"
                data-sal="slide-left" data-sal-duration="800">
                <div class="about-content-one">
                    <div class="tj-section-heading">
                        <h3 class="sal-animate" data-sal="slide-left" data-sal-duration="800">Boat Transport Services
                        </h3>
                        <p class="desc">Here, we strive to soar higher day by day by delivering outstanding services
                            and guaranteeing our customers a seamless & hassle-free transportation process.
                        <ul>
                            <li>Experience</li>
                            <li>Cost-Effective Rates</li>
                            <li>Reliability</li>
                            <li>Good Customer Service</li>
                            <li>Scope of Services</li>
                            <li>Well Equipped Staff</li>
                        </ul>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> --}}


<section class="tj-about-section pt-4">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-12 order-sm-2 order-md-1 order-1 d-flex align-items-center justify-content-center sal-animate pt-4 mt-4"
                data-sal="slide-left" data-sal-duration="800">
                <div class="about-content-one">
                    <div class="tj-section-heading">
                        <h3 class="sal-animate" data-sal="slide-left" data-sal-duration="800">ShipA1’s Best Boat Shipping Services - How We Do It? </h3>
                        <p class="desc">Ship A1 allows you to pick your own highly advanced trailer for boat transport. After booking, the team will arrive at the pick-up location and load the boats before the on-road journey. Following the final paperwork, your shipment gets started. As You just have to: 

                        <ul>
                            <li>Visit the <Instant Boat Quote Calculator> section and share the asked info. </li>
                            <li>Learn about average costs through a digital pricing calculator.</li>
                            <li>Confirm the booking and wait for the instant delivery.</li>
                        </ul>
                        Here at ShipA1, we understand what our precious existing and potential clients are looking for regarding boat transport services in the USA. That's the reason, the team always lists down various budget-friendly boat transport cost packages. 
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-12 order-sm-1 order-md-2 order-2 d-flex align-items-center justify-content-center sal-animate"
                data-sal="slide-left" data-sal-duration="800">
                <div class="mt-4 rounded">
                    <div class="image-box">
                        <img class="rounded"
                            src="{{ asset('/frontend/images/project/4b images for boat transport.webp') }}"
                            alt="Image">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-12 order-sm-1 order-md-1 order-2 d-flex align-items-center justify-content-center sal-animate"
                data-sal="slide-left" data-sal-duration="800">
                <div class="mt-4 rounded">
                    <div class="image-box">
                        <img class="rounded"
                            src="{{ asset('/frontend/images/project/4d images for boat transport.webp') }}"
                            alt="Image">
                    </div>
                </div>
            </div>
            <div class="col-lg-8 col-md-12 order-sm-2 order-md-2 order-1 d-flex align-items-center justify-content-center sal-animate pt-4 mt-4"
                data-sal="slide-left" data-sal-duration="800">
                <div class="about-content-one">
                    <div class="tj-section-heading">
                        <h3 class="sal-animate" data-sal="slide-left" data-sal-duration="800">Boat Transport Quote in Minutes - Shipping of all Watercrafts</h3>
                        <p class="desc">
                            Your collaboration with ShipA1 won’t involve selective options regarding boat transportation. We load/unload every type of watercraft nationwide. Including these shared in their respectable categories:
                        <h5>Utility & Work Boats</h5>
                            <ul>
                            <li>Commercial boats</li>
                            <li>Fishing boats</li>
                            <li>Tugboats </li>
                        </ul>
                        Ship A1 offers these shipping modes to ensure your boat is transported and delivered on time
                        with proper
                        safety measures!
                        </p>
                        <h5>Personal & Speedy Boats</h5>
                        <ul>
                            <li>Jet Skis</li>
                            <li>Motorboats</li>
                            <li>Catamarans</li>
                        </ul>
                        <h5>Luxury & Customized Boats</h5>
                        <ul>
                            <li>Yachts </li>
                            <li>Sailboats </li>
                            <li>Pontoon Boats </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@include('partials.cta-section')
<br>
<br>
<section class="tj-choose-us-section-service-commercial-4">
    <div class="container why-box">
        <div class="row services">
            <div class="col-12">
                <h1 class="services-h1">Easy Boat Preparation & Documentation Process</h1>
            </div>
            <div class="col-12 col-md-4 mb-4">
                <div class="card- h-100">
                    <div class="card-body">
                        <h5 class="card-title text-dark">Boat Inspection & Packaging</h5>
                        <p class="card-text text-dark">The first step is the thorough inspection of the boat's conditions. It includes proper packaging to save the crafts from possible damage.</p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-4 mb-4">
                <div class="card- h-100">
                    <div class="card-body">
                        <h5 class="card-title text-dark">Documents Preparation</h5>
                        <p class="card-text text-dark">In this stage, both parties (client and broker) go through documentation verifications. Including boat ownership, insurance, BOL, permit, and contract agreement.</p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-4 mb-4">
                <div class="card- h-100">
                    <div class="card-body">
                        <h5 class="card-title text-dark">Live Boat Transport Tracking </h5>
                        <p class="card-text text-dark">ShipA1 keeps tracking active till the final boat cargo delivery. Clients can also track the shipment or leave it to us to handle everything.</p>
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
                <h5 class="title fs-1">Advanced Trailers Used for Boat Shipping </h5>
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
                                    <img src="{{ asset('/frontend/images/slider/Boat Transport on Open Trailer 1--.webp') }}" class="img-fluid rounded-start" style="height: 100%; background-size: cover; background-position: center;" alt="...">
                                    </div>
                                    <div class="col-sm-6 d-flex align-items-center justify-content-center">
                                    <div class="card-body tj-section-heading mb-0">
                                        <h5 class="card-title sub-title active-shape">Lowboy Trailers</h5>
                                        <p class="card-text  text-dark">This trailer type easily carries taller boats. With effortless loading, you can pick heavy crafts without any on-road trouble. This hauling cargo comes with an open-air option.</p>
                                        <div class="tj-theme-button mt-2">
                                        <a class="tj-transparent-btn" href="{{ route('form.vehicle.boat') }}" >
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
                                        <p class="card-text text-dark">The flat, open-air space allows you to load oversized or medium-sized boats from every side. This trailer type is more flexible and affordable than others.</p>
                                        <div class="tj-theme-button mt-2">
                                        <a class="tj-transparent-btn" href="{{ route('form.vehicle.boat') }}" >
                                            Get Quote
                                            <i class="flaticon-right-1"></i>
                                        </a>
                                    </div>
                                    </div>
                                    </div>
                                    <div class="col-sm-6 d-flex align-items-center justify-content-center">
                                        <img src="{{ asset('/frontend/images/slider/Boat Transport on Enclosed Trailer 1--.webp') }}" class="img-fluid rounded-start" style="height: 100%; background-size: cover; background-position: center;" alt="...">
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
                                    <img src="{{ asset('/frontend/images/slider/Boat Transport on Flat-Rack Trailer 1--.webp') }}" class="img-fluid rounded-start" style="height: 100%; background-size: cover; background-position: center;" alt="...">
                                    </div>
                                    <div class="col-sm-6 d-flex align-items-center justify-content-center">
                                    <div class="card-body tj-section-heading mb-0">
                                        <h5 class="card-title sub-title active-shape">Multi-Axle Trailers</h5>
                                        <p class="card-text text-dark">The premium transporting trailer offers much-needed security to both the boat and the trailer. Keeping the weight balanced, this hauler is used for oversized boats.</p>
                                        <div class="tj-theme-button mt-2">
                                        <a class="tj-transparent-btn" href="{{ route('form.vehicle.boat') }}" >
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
                                        <h5 class="card-title sub-title active-shape">Tow-Away Transport</h5>
                                        <p class="card-text text-dark">This is the method used for smaller boats and most of those that can be
                                            towed.
                                            The boat is attached to a towing vehicle and transported to its destination. This is quite
                                            a simple and efficient solution.</p>
                                        <div class="tj-theme-button mt-2">
                                        <a class="tj-transparent-btn" href="{{ route('form.vehicle.boat') }}" >
                                            Get Quote
                                            <i class="flaticon-right-1"></i>
                                        </a>
                                    </div>
                                    </div>
                                    </div>
                                    <div class="col-sm-6 d-flex align-items-center justify-content-center">
                                        <img src="{{ asset('/frontend/images/slider/Boat Transport on Tow-Away Trailer 1--.webp') }}" class="img-fluid rounded-start" style="height: 100%; background-size: cover; background-position: center;" alt="...">
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
<section class="why-choose-us-slider">
    <div class="container">
        <div class="tj-section-heading text-center">
            <h2 class="title text-white">Why ShipA1 for Boat Transport in the USA? </h2>
            <span class="sub-title active-shape">Discover the benefits of choosing ShipA1 through our features.</span>
        </div>
        <div class="row">
            <div class="col-md-4 col-lg-4 mb-4">
                <div class="slide text-center">
                    <i class="fas fa-users icon-hover-shake" style="font-size: 50px;"></i>
                    <h3 class="slide-title">Decades of Experience </h3>
                    <p class="slide-text">ShipA1 has been conquering the boat shipping market for more than sixteen years. Trust the experience.</p>
                </div>
            </div>
            <div class="col-md-4 col-lg-4 mb-4">
                <div class="slide text-center">
                    <i class="fas fa-dollar-sign icon-hover-shake" style="font-size: 50px;"></i>
                    <h3 class="slide-title">Trained Expert Team</h3>
                    <p class="slide-text">Our expert shippers and carriers are licensed boat transporters following allocated DOT compliance rules.</p>
                </div>
            </div>
            <div class="col-md-4 col-lg-4 mb-4">
                <div class="slide text-center">
                    <i class="fas fa-headset icon-hover-shake" style="font-size: 50px;"></i>
                    <h3 class="slide-title">Boat Security & Insurance</h3>
                    <p class="slide-text">Don’t worry about the safety and maintenance of your boats. ShipA1 offers proper security along with boat insurance support.</p>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-4 col-lg-4 mb-4">
                <div class="slide text-center">
                    <i class="fas fa-shield-alt icon-hover-shake" style="font-size: 50px;"></i>
                    <h3 class="slide-title">Real-Time Boat Monitoring </h3>
                    <p class="slide-text"> 24/7 active monitoring by ShipA1. We track each boat shipping trailer following assigned destination routes in the USA.</p>
                </div>
            </div>
            <div class="col-md-4 col-lg-4 mb-4">
                <div class="slide text-center">
                    <i class="fas fa-clock icon-hover-shake" style="font-size: 50px;"></i>
                    <h3 class="slide-title">Budget Friendly Shipping</h3>
                    <p class="slide-text"> Fill out the simple online form, pick your trailer, learn about cost-efficient average costs, and book a quote in minutes.</p>
                </div>
            </div>
        </div>
    </div>
</section>
@include('partials.usa-states-map')
<section>
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
                    <button class="faq-toggle">How should I prepare my boat for transport? <span>+</span></button>
                    <div class="faq-content">
                        <p>Firstly, clean your boat, get broken parts fixed, pack the whole watercraft, remove all personal belongings, and get the paperwork/documentation ready.</p>
                    </div>
                </div>
            
                <div class="faq">
                    <button class="faq-toggle">What is the average boat transport cost? <span>+</span></button>
                    <div class="faq-content">
                        <p>The boat shipping cost depends on various factors. Like size, distance, and your chosen transport partner. Otherwise, you can learn about the average price through ShipA1’s digital cost calculator. </p>
                    </div>
                </div>
            
                <div class="faq">
                    <button class="faq-toggle">How many days does it take to transport a boat?<span>+</span></button>
                    <div class="faq-content">
                        <p>As an average for city-to-city transport, it usually takes two to three days. Similarly, for longer, state-to-state boat delivery, you will have to wait for around five to seven days. </p>
                    </div>
                </div>
                
                <div class="faq">
                    <button class="faq-toggle">Is boat transportation safe?<span>+</span></button>
                    <div class="faq-content">
                        <p>Yes, boat shipping is safe in the USA when you hire a partner who is trusted and offers an experienced and trained team, taking care of every on-road challenge.</p>
                    </div>
                </div>
            
                <div class="faq">
                    <button class="faq-toggle">How to find trusted boat transport companies?<span>+</span></button>
                    <div class="faq-content">
                        <p>Search around for top-noted brands, read online available reviews about them, check verifications, and confirm if they offer boat damage insurance. Plus, learn about the average prices as well before the final go. </p>
                    </div>
                </div>
            
            </div>
           </div>
        </div>
    </div>
</section>

@include('partials.blog-slider')

<script>
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
@section('extraScript')
@endsection