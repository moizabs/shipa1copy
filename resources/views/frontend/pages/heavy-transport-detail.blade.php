@extends('frontend.layouts.app')
@section('title', 'ShipA1 Auto Transport Quotes | Best Vehicle Shipping Service in USA')
@section('meta_description', 'Get car shipping services in USA, scratchless vehicle transport service along with huge
    discount offers and FREE auto shipping quotes nationwide.')
@section('content')
    <style>
        .tj-testimonial-section {
            padding: 50px 0;
            background: #f9f9f9;
        }
        .tj-testimonial2-section {
            padding: 50px 0;
        }
        .carousel-wrapper {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 15px;
        }
        .card {
            background: #fff;
            border: 1px solid #ddd;
            border-radius: 5px;
            padding: 15px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }
        .card .row {
            display: flex;
            flex-wrap: wrap;
        }
        .card .col-6 {
            width: 50%;
        }
        .star {
            margin-top: 10px;
        }
        .fa-star {
            color: #f39c12;
        }
        .owl-nav button {
            background: none;
            border: none;
            font-size: 2rem;
            color: #333;
        }
        .owl-nav button {
            display: none;
            background: none;
            border: none;
            font-size: 2rem;
            color: #333;
        }
        .owl-dot {
            display: inline-block;
            width: 12px;
            height: 12px;
            background: #ddd;
            border-radius: 50%;
            margin: 0 5px;
        }
        .owl-dot.active {
            background: #333;
        }
        @keyframes custom-slides {
            from {
                transform: translateX(0);
            }
            to {
                transform: translateX(-80%);
            }
        }
        .custom-logos {
            overflow: hidden;
            padding: 30px 0px;
            white-space: nowrap;
            position: relative;
        }
        .custom-logos:before,
        .custom-logos:after {
            position: absolute;
            top: 0;
            content: '';
            width: 250px;
            height: 100%;
            z-index: 2;
        }
        .custom-logos:before {
            left: 0;
            background: linear-gradient(to left, rgba(255, 255, 255, 0), rgb(255, 255, 255));
        }
        .custom-logos:after {
            right: 0;
            background: linear-gradient(to right, rgba(255, 255, 255, 0), rgb(255, 255, 255));
        }
        .custom-logo-items {
            display: inline-block;
            animation: 35s custom-slides infinite linear;
        }
        .custom-logos:hover .custom-logo-items {
            animation-play-state: paused;
        }
        .custom-logo-items img {
            height: 100px;
        }
        .lab-cos {
            font-size: 15px;
            font-weight: 500;
            color: var(--tj-white-color);
            margin-bottom: 10px;
        }
        .input-container {
            height: 34px;
            background: white;
            display: flex;
            align-items: center;
            border-radius: 4px;
            padding: 8px 0px 8px 0px;
            width: fit-content;
        }
        .input-container1 {
            height: 34px;
            background: white;
            display: flex;
            align-items: center;
            border-radius: 4px;
            padding: 8px 0px 8px 0px;
            width: fit-content;
        }
        .input-field {
            width: 50px;
            padding: 5px;
            font-size: 14px;
            border: none;
            outline: none;
        }
        .input-field-1 {
            width: 65px;
            padding: 0px 0px 0px 10px;
            font-size: 14px;
            border: none;
            outline: none;
        }
        .separator {
            margin: 0px 0px 0px 0px;
            font-size: 14px;
        }
        .separators {
            margin: 0px 5px 0px 0px;
            font-size: 14px;
        }
        .separators-w {
            margin: 0px 5px 0px 0px;
            font-size: 14px;
        }
        .input-container input[type="number"] {
            -moz-appearance: textfield;
        }
        .input-container input[type="number"]::-webkit-outer-spin-button,
        .input-container input[type="number"]::-webkit-inner-spin-button {
            -webkit-appearance: none;
            margin: 0;
        }
        .form-wrap {
            margin-bottom: 10px;
            position: relative;
        }
        .form-label-outside {
            color: white;
            display: block;
            margin-bottom: 5px;
        }
        .input-container {
            display: flex;
            align-items: center;
        }
        .input-container input {
            border: none;
            padding: 5px 0px 5px 0px;
            font-size: 14px;
            width: 38px;
            text-align: center;
        }
        .input-container .placeholders {
            position: relative;
            right: 72px;
            color: black;
            display: inline-block;
            width: auto;
            padding: 0px 8px;
        }
        .err-style {
            color: red;
        }
        .tj-input-form .input-form label {
            font-size: 15px;
            font-weight: 500;
            color: var(--tj-white-color);
            margin-bottom: 10px;
        }
        .video-thumbnail {
            position: relative;
            cursor: pointer;
            display: inline-block;
        }
        .video-thumbnail img {
            width: 100%;
            height: auto;
        }
        .play-button {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            font-size: 50px;
            color: white;
            opacity: 0.8;
        }
        .play-button:hover {
            opacity: 1;
        }
        .error-message {
            display: none;
            color: red;
        }
        .error-field {
            border: 2px solid red;
        }
    </style>
    <section class="tj-choose-us-section-heavy">
        <div class="container mt-4">
            <div class="row mt-4">
                <div class="col-lg-6 sal-animate mt-4" data-sal="slide-left" data-sal-duration="800">
                    <div class="choose-us-content-1">
                        <div class="tj-section-heading">
                            <span class="sub-title active-shape2">HEAVY EQUIPMENT</span>
                            <h2 class="title">RELIABLE, SECURE & VALUE FOR MONEY SHIPPING SERVICES</h2>
                            <p class="desc">
                                ShipA1 has pledged to provide all-in-one Heavy Equipment transportation solutions to all its
                                customers and seeks your trust in return of our services.
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
                                    <h6 class="title">Safety &amp; Reliability</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 mt-4" data-sal="slide-down" data-sal-duration="800">
                    @include('partials.multi-form-heavy')
                </div>
            </div>
        </div>
    </section>
    @include('partials.reveiw-small-detail')
    <section class="tj-service-details pt-4 pb-0">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 sal-animate" data-sal="slide-right" data-sal-duration="800">
                    <div class="about_image text-center">
                        <img src="{{ asset('/frontend/images/project/Heavy Transportation 1 image.webp') }}" alt="Image">
                    </div>
                </div>
                <div class="col-lg-6 sal-animate" data-sal="slide-left" data-sal-duration="800">
                    <div class="about-content-three">
                        <div class="tj-section-heading">
                            <span class="sub-title active-shape ">Ship A1 Transport</span>
                            <p class="desc">
                                Need to move your Excavators, Forklift, and any sort of heavy equipment? Ship A1 masters the
                                art of
                                transporting your heavy equipment across the USA with 100% quality, dedication, and safety.
                                <br> At ShipA1 we offer a variety of trailers and assistance to ensure your heavy equipment
                                arrives on time
                                and within safety regulations. From open-air trailers for cost-effective transport or
                                enclosed trailers for
                                maximum protection, choose the best shipping mode for your vehicle! ShipA1 is your one-stop
                                solution
                                for safe and efficient heavy equipment transport across the United States. We go beyond
                                standard
                                vehicle transport, specializing in the unique requirements of oversized and heavyweight
                                cargo. <br> ShipA1 is committed to providing exceptional service and exceeding your
                                expectations. Let us handle
                                the heavy lifting. Contact us today for a smooth and stress-free heavy equipment transport
                                experience.
                            </p>
                        </div>
                        <div class="tj-theme-button">
                            <a class="tj-primary-btn" href="{{ route('quote.form.combine') }}" >
                                Get Quote<i class="flaticon-right-1"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="tj-about-section pt-4">
        <div class="container">
            <div class="row">
                <div class="col-lg-6" data-sal="slide-left" data-sal-duration="800">
                    <div class="about-content-one">
                        <div class="tj-section-heading">
                            <span class="sub-title active-shape"> A1 Transportation Company</span>
                            <h2 class="title">What Makes Us Dependable?</h2>
                            <p class="desc">
                                Among all the shipping companies out there, factors that make us stand out from therest are:
                            </p>
                        </div>
                        <div class="tj-icon-box">
                            <div class="ab-text d-flex align-items-center">
                                <div class="ab-icon">
                                    <img src="{{ asset('frontend/images/icon/winner.svg') }}" alt="Icon" />
                                    <!-- <img src="{{ asset('frontend/images/icon/global.svg') }}" alt="Icon" /> -->
                                </div>
                                <div class="ab-title">
                                    <h5 class="title">Our Values</h5>
                                </div>
                            </div>
                            <p class="desc">
                                We are a licensed Transportation company with high moral values and have attained customer
                                satisfaction through their remarks on esteemed platforms.
                            </p>
                        </div>
                        <div class="tj-icon-box">
                            <div class="ab-text d-flex align-items-center">
                                <div class="ab-icon">
                                    <i class="fa-light fa-bell-concierge fa-2xl" style="color: #8fc445;"></i>
                                    <!-- <img src="{{ asset('frontend/images/icon/winner.svg') }}" alt="Icon" /> -->
                                </div>
                                <div class="ab-title">
                                    <h5 class="title">Scope of Services</h5>
                                </div>
                            </div>
                            <p class="desc">
                                Range of vehicles, we ship, is not limited to just conventional cars and motorbikes.
                            </p>
                        </div>
                        <div class="tj-icon-box">
                            <div class="ab-text d-flex align-items-center">
                                <div class="ab-icon">
                                    <i class="fa-light fa-shield-heart fa-2xl" style="color: #8fc445;"></i>
                                    <!-- <img src="{{ asset('frontend/images/icon/winner.svg') }}" alt="Icon" /> -->
                                </div>
                                <div class="ab-title">
                                    <h5 class="title">Safety Is Our Priority</h5>
                                </div>
                            </div>
                            <p class="desc">
                                No matter which mode of transportation you use, ShipA1 assures its customers, atmost
                                security
                                to their assets.
                            </p>
                        </div>
                        <div class="tj-icon-box">
                            <div class="ab-text d-flex align-items-center">
                                <div class="ab-icon">
                                    <i class="fa-light fa-handshake fa-2xl" style="color: #8fc445;"></i>
                                    <!-- <img src="{{ asset('frontend/images/icon/winner.svg') }}" alt="Icon" /> -->
                                </div>
                                <div class="ab-title">
                                    <h5 class="title">Skilful & Devoted Staff</h5>
                                </div>
                            </div>
                            <p class="desc">
                                Our team is loaded with highly experienced professionals of both customer dealing and
                                vehicle
                                handling.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6" data-sal="slide-right" data-sal-duration="800">
                    <div class="about-group-image d-flex flex-wrap align-items-start flex-column">
                        <div class="tj-icon-box2 text-center">
                            <div class="number-icon">
                                <i class="flaticon-in-person"></i>
                            </div>
                            <div class="about-number">
                                <div class="tj-count"><span class="odometer" data-count="289">0</span>k+</div>
                                <p class="desc">Satisfied Client</p>
                            </div>
                        </div>
                        <div class="image-box">
                            <img class="p-z-idex" src="{{ asset('/frontend/images/about/what-makes-us-Heavy1.webp') }}"
                                alt="Image" />
                        </div>
                        <img class="group-1 p-z-idex"
                            src="{{ asset('/frontend/images/about/what-makes-us-Heavy2.webp') }}" alt="Image" />
                        <img class="group-shape" src="{{ asset('frontend/images/about/ab-shape.png') }}"
                            alt="Image" />
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="tj-cta-section icon-animate">
        <div class="cta-inner" data-bg-image="{{ asset('/frontend/images/cta/Efficient-trans-Heavy.webp') }}"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <div class="cta-content-area">
                        <div class="cta-content">
                            <div class="cta-icon">
                                <i class="fa-light fa-tractor fa-xs"></i>
                            </div>
                            <div class="cta-text">
                                <h3 class="title">Efficient Transportation of heavy equipment.</h3>
                                <p class="desc">We deliver quality, with prosperity. Because your Shipping needs, our
                                    solution.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 position-relative">
                    <div class="tj-theme-button">
                        <a class="tj-transparent-btn" href="{{ route('quote.form.combine') }}">
                            Get Quote<i class="flaticon-right-1"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="tj-team-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="tj-section-heading text-center">
                        <span class="sub-title active-shape"> Our Services</span>
                        <h2 class="title">Pick Your Transport Type</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="tj-project-section">
        <div class="tj-project-slider owl-carousel" aria-label="Loading indicator for carousel content">
            <div class="tj-project-item">
                <img src="{{ asset('/frontend/images/project/PYT-Heavy.webp') }}" alt="Image" />
                <div class="arrow-icon">
                    <a href="{{ route('frontend.pages.services.heavy-service') }}" > <i
                            class="fa-light fa-arrow-right"></i></a>
                </div>
                <div class="tj-project-content">
                    <span class="sub-title">HEAVY EQUIP</span>
                    <h4><a href="{{ route('frontend.pages.services.heavy-service') }}" 
                            class="title-link">Heavy Transportation Services</a></h4>
                </div>
            </div>
            <div class="tj-project-item">
                <img src="{{ asset('/frontend/images/project/RORO-Slider (1)--.webp') }}" alt="Image" />
                <div class="arrow-icon">
                    <a href="{{ route('frontend.pages.services.roro-service') }}" > <i
                            class="fa-light fa-arrow-right"></i></a>
                </div>
                <div class="tj-project-content">
                    <span class="sub-title">RORO</span>
                    <h4><a href="{{ route('frontend.pages.services.roro-service') }}" 
                            class="title-link">RORO Transportation Services</a></h4>
                </div>
            </div>
            <div class="tj-project-item">
                <img src="{{ asset('/frontend/images/project/PYT-Construction.webp') }}" alt="Image" />
                <div class="arrow-icon">
                    <a href="{{ route('frontend.pages.services.construction-service') }}" > <i
                            class="fa-light fa-arrow-right"></i></a>
                </div>
                <div class="tj-project-content">
                    <span class="sub-title">CONSTRUCTION</span>
                    <h4><a href="{{ route('frontend.pages.services.construction-service') }}" 
                            class="title-link">Construction Transportation Services</a></h4>
                </div>
            </div>
            <div class="tj-project-item">
                <img src="{{ asset('/frontend/images/project/PYT-Farm.webp') }}" alt="Image" />
                <div class="arrow-icon">
                    <a href="{{ route('frontend.pages.services.farm-service') }}" > <i
                            class="fa-light fa-arrow-right"></i></a>
                </div>
                <div class="tj-project-content">
                    <span class="sub-title">FARM</span>
                    <h4><a href="{{ route('frontend.pages.services.farm-service') }}" 
                            class="title-link">FARM Transportation Services</a></h4>
                </div>
            </div>
            <div class="tj-project-item">
                <img src="{{ asset('/frontend/images/project/PYT-Excavator.webp') }}" alt="Image" />
                <div class="arrow-icon">
                    <a href="{{ route('frontend.pages.services.excavator-service') }}" > <i
                            class="fa-light fa-arrow-right"></i></a>
                </div>
                <div class="tj-project-content">
                    <span class="sub-title">EXCAVATOR</span>
                    <h4><a href="{{ route('frontend.pages.services.excavator-service') }}" 
                            class="title-link">EXCAVATOR Transportation Services</a></h4>
                </div>
            </div>
            <div class="tj-project-item">
                <img src="{{ asset('/frontend/images/project/PYT-Commercial.webp') }}" alt="Image" />
                <div class="arrow-icon">
                    <a href="{{ route('frontend.pages.services.commercial-service') }}" > <i
                            class="fa-light fa-arrow-right"></i></a>
                </div>
                <div class="tj-project-content">
                    <span class="sub-title">TRUCKS</span>
                    <h4><a href="{{ route('frontend.pages.services.commercial-service') }}" 
                            class="title-link">Trucks Transportation Services</a></h4>
                </div>
            </div>
        </div>
    </section>
    <section class="tj-video-section">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="video-wrapper text-center">
                        <div class="video-thumbnail" onclick="playVideo()">
                            <img src="{{ asset('frontend/images/banner/tn.jpg') }}" alt="Video Thumbnail" />
                            <div class="play-button">
                                <i class="fa fa-play-circle"></i>
                            </div>
                        </div>
                        <div class="video-iframe" style="display:none;">
                            <iframe width="80%" height="500"
                                src="https://www.youtube.com/embed/cr4Nya5jVn0?si=RLh4uuppLT63xVBT"
                                title="YouTube video player" frameborder="0"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @include('partials.transport-by-state')
    <section class="tj-faq-section tj-faq-page">
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
                        {{-- <div class="faq-content">
                            <div class="faq-icon">
                                <i class="fa-regular fa-check"></i>
                            </div>
                            <div class="faq-text">
                                <h6 class="title">Reliable & Trustworthy</h6>
                                <p>Safe, trustworthy, and reliable for all of your shipping and transportation needs.</p>
                            </div>
                        </div>
                        <div class="faq-content">
                            <div class="faq-icon">
                                <i class="fa-regular fa-check"></i>
                            </div>
                            <div class="faq-text">
                                <h6 class="title">High Quality service</h6>
                                <p>Attention to detail and customer satisfaction are incorporated in delivering quality
                                    service consistently.</p>
                            </div>
                        </div> --}}
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
                                        Are your vehicles insured?
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
    </section>
    @include('partials.blog-slider')
@endsection
@section('extraScript')
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