@extends('frontend.layouts.app')
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
    .error-message {
        display: none;
        color: red;
    }
    .error-field {
        border: 2px solid red;
    }
</style>
<section class="tj-choose-us-section">
    <div class="container mt-4">
        <div class="row mt-4">
            <div class="col-lg-6 sal-animate mt-4" data-sal="slide-left" data-sal-duration="800">
                <div class="choose-us-content-1">
                    <div class="tj-section-heading">
                        <span class="sub-title active-shape2">VEHICLE TRANSPORTATION</span>
                        <h2 class="title">RELIABLE, SECURE & VALUE FOR MONEY SHIPPING SERVICES</h2>
                        <p class="desc">
                            ShipA1 has pledged to provide all-in-one auto transport solutions to all its
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
            <div class="col-lg-6 mt-4" data-sal="slide-down" data-sal-duration="800">
                @include('partials.multi-form-Vehicle-detail')
            </div>
        </div>
    </div>
</section>
@include('partials.reveiw-small-detail') 
<section class="tj-about-section-three">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 sal-animate" data-sal="slide-right" data-sal-duration="800">
                <div class="about_image text-center">
                    <img src="{{ asset('/frontend/images/project/Vehicle Transportation 1a image.webp') }}" alt="Image">
                </div>
            </div>
            <div class="col-lg-6 sal-animate" data-sal="slide-left" data-sal-duration="800">
                <div class="about-content-three">
                    <div class="tj-section-heading">
                        <span class="sub-title active-shape ">Ship A1 Transport</span>
                        <p class="desc">
                        Want to ship your vehicle without worrying about emptying your bank account? At Ship A1 your comfort is our top priority, ship the best vehicles at reasonable rates without compromising quality. Our professional and expert team provides you with 100% insured and secure vehicle transport solutions that are specifically tailored to your needs.
                    <br> At Ship A1 you don’t just have 1 option for shipping your vehicle, here you can even find various suitable services! For shipping your luxurious vehicle, you can opt for enclosed trailers as they are made to protect your vehicle from road debris, scratches, the uncertainty of weather conditions, and potential risks. However, if you are searching for something equally cost-effective and safe, go for open transport! We have expedited options and door-to-door delivery for fast vehicle shipping.
                    <br> So, what are you waiting for? Get a free online quote now and enjoy the ride!
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
                            </div>
                            <div class="ab-title">
                                <h5 class="title">Safety Is Our Priority</h5>
                            </div>
                        </div>
                        <p class="desc">
                            No matter which mode of transportation you use, ShipA1 assures its customers, atmost security
                            to their assets.
                        </p>
                    </div>
                    <div class="tj-icon-box">
                        <div class="ab-text d-flex align-items-center">
                            <div class="ab-icon">
                            <i class="fa-light fa-handshake fa-2xl" style="color: #8fc445;"></i>
                            </div>
                            <div class="ab-title">
                                <h5 class="title">Skilful & Devoted Staff</h5>
                            </div>
                        </div>
                        <p class="desc">
                            Our team is loaded with highly experienced professionals of both customer dealing and vehicle
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
                        <img class="p-z-idex" src="{{ asset('/frontend/images/about/Untitled design-neww.webp') }}"
                            alt="Image" />
                    </div>
                    <img class="group-1 p-z-idex"
                        src="{{ asset('/frontend/images/about/new--design.webp') }}" alt="Image" />
                    <img class="group-shape" src="{{ asset('frontend/images/about/ab-shape.png') }}"
                        alt="Image" />
                </div>
            </div>
        </div>
    </div>
</section>
@include('partials.car-cta-section')
<section class="tj-team-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="tj-section-heading text-center">
                    <span class="sub-title active-shape"> Our Services</span>
                    <h2 class="title">Pick Your Vehicle Type</h2>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="tj-project-section">
    <div class="tj-project-slider owl-carousel" aria-label="Loading indicator for carousel content">
        <div class="tj-project-item">
            <img src="{{ asset('/frontend/images/project/9.webp') }}" alt="Image" />
            <div class="arrow-icon">
                <a href="{{ route('frontend.pages.services.car-service') }}"  > <i class="fa-light fa-arrow-right"></i></a>
            </div>
            <div class="tj-project-content">
                <span class="sub-title">Car</span>
                <h4><a href="{{ route('frontend.pages.services.car-service') }}"   class="title-link">Car Transportation Services</a></h4>
            </div>
        </div>
        <div class="tj-project-item">
            <img src="{{ asset('/frontend/images/project/PYT-Bike.webp') }}" alt="Image" />
            <div class="arrow-icon">
                <a href="{{ route('frontend.pages.services.bike-service') }}"  > <i class="fa-light fa-arrow-right"></i></a>
            </div>
            <div class="tj-project-content">
                <span class="sub-title">Motorcycle</span>
                <h4><a href="{{ route('frontend.pages.services.bike-service') }}"   class="title-link">Motorcycle Transportation Services</a></h4>
            </div>
        </div>
        <div class="tj-project-item">
            <img src="{{ asset('/frontend/images/project/RORO-Slider (1)--.webp') }}" alt="Image" />
            <div class="arrow-icon">
                <a href="{{ route('frontend.pages.services.roro-service') }}"  > <i class="fa-light fa-arrow-right"></i></a>
            </div>
            <div class="tj-project-content">
                <span class="sub-title">RORO</span>
                <h4><a href="{{ route('frontend.pages.services.roro-service') }}"   class="title-link">RORO Transportation Services</a></h4>
            </div>
        </div>
        <div class="tj-project-item">
            <img src="{{ asset('/frontend/images/project/PYT-ATV.webp') }}" alt="Image" />
            <div class="arrow-icon">
                <a href="{{ route('frontend.pages.services.atv-utv-service') }}"  > <i class="fa-light fa-arrow-right"></i></a>
            </div>
            <div class="tj-project-content">
                <span class="sub-title">ATV/UTV</span>
                <h4><a href="{{ route('frontend.pages.services.atv-utv-service') }}"   class="title-link">ATV/UTV Transportation Services</a></h4>
            </div>
        </div>
        <div class="tj-project-item">
            <img src="{{ asset('/frontend/images/project/PYT-Golf.webp') }}" alt="Image" />
            <div class="arrow-icon">
                <a href="{{ route('frontend.pages.services.golf-cart-service') }}"  > <i class="fa-light fa-arrow-right"></i></a>
            </div>
            <div class="tj-project-content">
                <span class="sub-title">Golf Cart</span>
                <h4><a href="{{ route('frontend.pages.services.golf-cart-service') }}"   class="title-link">Golf Cart Transportation Services</a>
                </h4>
            </div>
        </div>
    </div>
</section>
<section class="tj-video-section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="video-wrapper text-center">
                    <iframe width="80%" height="500"
                        src="https://www.youtube.com/embed/cr4Nya5jVn0?si=RLh4uuppLT63xVBT"
                        title="YouTube video player" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                        referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
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
                </div>
            </div>
            <div class="col-lg-6" data-sal="slide-right" data-sal-duration="800">
                <div class="tj-faq-area">
                <div class="accordion" id="accordionExample">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingOne">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    What should I choose for my luxurious vehicle?
                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse show"
                                aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <strong>If you have a luxurious vehicle, we would suggest you go for the enclosed trailer as it protects your vehicle and offers you peace of mind, or if you are looking for a cheaper option then open transport is the best for you, without compromising the quality experience the best, safe and secure shipping with Ship A1!</strong>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    How do I get a quote?
                                </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <strong>At Ship A1 we have the convenience of providing free online quotes to our customers, you can check them out at www.shipa1.com</strong>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseThree" aria-expanded="false"
                                    aria-controls="collapseThree">
                                    Can I track my vehicle during transport?
                                </button>
                            </h2>
                            <div id="collapseThree" class="accordion-collapse collapse"
                                aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <strong>Yes!  ShipA1 provides a user-friendly tracking system for real-time updates on your vehicle's location throughout the journey.</strong>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingFour">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseFour" aria-expanded="false"
                                    aria-controls="collapseFour">
                                    How do I prepare my vehicle for transport?
                                </button>
                            </h2>
                            <div id="collapseFour" class="accordion-collapse collapse"
                                aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <strong>We'll provide detailed instructions, but you'll need to remove personal belongings, as well as make sure to follow guidelines or instructions based on the chosen transport method.</strong>
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