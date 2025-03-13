@extends('frontend.layouts.app')
@section('title', 'USA Boat Shipping & Transport Services at Best Pricing')
@section('meta_description',
'Trust our state to state boat shipping and transport services with timely delivery to your
home in USA. Explore our fast and reliable boat transportation services.')
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
</style>
<section class="tj-choose-us-section-service-boat">
    <div class="container mt-4">
        <div class="row mt-4">
            <div class="col-lg-6 sal-animate mt-4" data-sal="slide-left" data-sal-duration="800">
                <div class="choose-us-content-1">
                    <div class="tj-section-heading">
                        <span class="sub-title active-shape2">SERVICES</span>
                        <h2 class="title">BOAT TRANSPORT SERVICE</h2>
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
<section class="tj-about-section pt-4 pb-0">
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
</section>
<section class="tj-blog-standard pt-2 pb-4 mb-4">
    <div class="container">
        <div class="row full-width ps-4 pt-4">
            <div class="col-12 custom-style">
                <h4 class=" text-center">What is Boat Auto Shipping?</h4>
                <p class=" text-center">The process of transporting or shipping boats from one place to another using
                    specialized carriers is called Boat Auto Transport
                    or Boat Shipping! Is it safe? Yes! Ship A1 ensures that your boat is delivered or picked up from the
                    designated location safe and sound, with the
                    help of special and equipped carriers you don’t need to worry at all about the shipping process and
                    completely trust us to ensure timely delivery
                    with 100% transparency and 24/7 customer service to tend to your concerns and queries.</p>
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
@include('partials.cta-section')
<section class="tj-about-section pt-4">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-12 order-sm-2 order-md-1 order-1 d-flex align-items-center justify-content-center sal-animate pt-4 mt-4"
                data-sal="slide-left" data-sal-duration="800">
                <div class="about-content-one">
                    <div class="tj-section-heading">
                        <h3 class="sal-animate" data-sal="slide-left" data-sal-duration="800">Why is that?</h3>
                        <p class="desc">Keeping in mind the daily rising expenses we have customized suitable and
                            affordable
                            boat shipping solutions for you without compromising on the service quality or reliability!
                            We
                            maintain 100% transparency when it comes to our services and rates so it is convenient for
                            you
                            to choose the option that best fits your needs.<br>However, prices might differ depending on
                        <ul>
                            <li>Distance</li>
                            <li>Size & weight of the boat</li>
                            <li>Shipping method</li>
                            <li>Additional services</li>
                        </ul>
                        These factors play a significant role in determining the total cost of your shipping. To find
                        out an estimated rate of your shipping go get your free online quotes now!
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
                        <h3 class="sal-animate" data-sal="slide-left" data-sal-duration="800">Pick Your Perfect
                            Shipping</h3>
                        <p class="desc">
                            Are you an indecisive person? Need help with choosing the perfect mode of shipping for you?
                            Worry no
                            more! Ship A1 has a variety of shipping modes for your convenience, all you have to do is
                            select the
                            type of shipping you think is best for you, and leave the rest to us!
                        <ul>
                            <li>Open Transport:</li>
                            <li>Enclosed Transport:</li>
                            <li>Flat Rack Transport:</li>
                        </ul>
                        Ship A1 offers these shipping modes to ensure your boat is transported and delivered on time
                        with proper
                        safety measures!
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
                <h5 class="title fs-1">Trailers used for Boat Transportation</h5>
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
                                        <h5 class="card-title sub-title active-shape">Open Transport</h5>
                                        <p class="card-text  text-dark">This is the type of transport that is both cost-effective and suitable for
                                            shipping. This shipping mode involves your boat being situated onto an open trailer or a
                                            flatbed truck.</p>
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
                                        <h5 class="card-title sub-title active-shape">Enclosed Transport</h5>
                                        <p class="card-text text-dark">Enclosed transport may not be the cheapest mode of shipping but it does provide an extra
                                            layer
                                            of protection for your luxury yachts and boats that require extra care.</p>
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
                                        <h5 class="card-title sub-title active-shape">Flat Rack Transport</h5>
                                        <p class="card-text text-dark">This mode of shipping includes placing and securing your boat on a flat rack, it is only
                                            suitable
                                            for irregular-shaped boats or oversized boats which cannot be transported on standard
                                            trailers or carriers.</p>
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
                </div>
            </div>
        </div>
    </div>
</section>
<section class="tj-choose-us-section-service-commercial-4">
    <div class="container why-box">
        <div class="row services">
            <div class="col-12">
                <h1 class="services-h1">Boat Preparation and Documentation</h1>
            </div>
            <div class="col-12 col-md-4 mb-4">
                <div class="card- h-100">
                    <div class="card-body">
                        <h5 class="card-title text-dark">Clean & Inspect Boat</h5>
                        <p class="card-text text-dark">Ensure your Boat is clean inside and out,
                            and remove any dirt, debris, and personal belongings that have a risk of damaging your
                            vehicle further.</p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-4 mb-4">
                <div class="card- h-100">
                    <div class="card-body">
                        <h5 class="card-title text-dark">Prepare Necessary Documentation</h5>
                        <p class="card-text text-dark">Make sure the necessary documents of your boat like registration
                            papers,
                            insurance certificates, or any permits and licenses required.</p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-4 mb-4">
                <div class="card- h-100">
                    <div class="card-body">
                        <h5 class="card-title text-dark">Track your Ride</h5>
                        <p class="card-text text-dark">If you are someone who constantly has to keep updates on their
                            vehicle,
                            worry not! Contact Ship A1 for timely updates, or you can even track your ride online.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="tj-faq-section tj-faq-page pt-4 pb-0">
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
                                    How do I need to prepare my boat for transport?
                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse show"
                                aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <strong>Take out personal items; tie up loose parts, drain tanks, disconnect
                                        batteries, and document any pre-existing damage.</strong>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    How is my boat protected while in your care during a move?
                                </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <strong>Specialized trailers with the feature requirements of your boat's safe
                                        fastening and skilled handlers, frequent inspections along the route, and
                                        adherence to all safety regulations for all involved.</strong>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseThree" aria-expanded="false"
                                    aria-controls="collapseThree">
                                    How is the cost for boat transportation calculated?
                                </button>
                            </h2>
                            <div id="collapseThree" class="accordion-collapse collapse"
                                aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <strong>The factors that determine the price of boat transport include the size and
                                        weight of your vessel, how far it must travel, special handling requirements,
                                        and what additional services are needed. Give us a call for an accurate quote 1
                                        (844) 474-4721.</strong>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="why-choose-us-slider">
    <div class="container">
        <div class="tj-section-heading text-center">
            <h2 class="title text-white">Why Choose Us?</h2>
            <span class="sub-title active-shape">Discover the benefits of choosing ShipA1 through our features.</span>
        </div>
        <div class="row">
            <div class="col-md-4 col-lg-4 mb-4">
                <div class="slide text-center">
                    <i class="fas fa-users icon-hover-shake" style="font-size: 50px;"></i>
                    <h3 class="slide-title">Experience:</h3>
                    <p class="slide-text">Ship A1 has been in this business for 16 years maintaining a proven record of
                        satisfied
                        customers all across the USA</p>
                </div>
            </div>
            <div class="col-md-4 col-lg-4 mb-4">
                <div class="slide text-center">
                    <i class="fas fa-dollar-sign icon-hover-shake" style="font-size: 50px;"></i>
                    <h3 class="slide-title">Cost-Effective Rates:</h3>
                    <p class="slide-text">We offer the best rates in the market without compromising the quality of our
                        services.</p>
                </div>
            </div>
            <div class="col-md-4 col-lg-4 mb-4">
                <div class="slide text-center">
                    <i class="fas fa-headset icon-hover-shake" style="font-size: 50px;"></i>
                    <h3 class="slide-title">24/7 Customer Support: </h3>
                    <p class="slide-text">Anywhere and anytime customers reach out to our helpline 1 (844) 474-4721
                        whenever they have questions and concerns, we provide our assistance 24/7 leaving the customer
                        satisfied and happy at the end of the day.</p>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-4 col-lg-4 mb-4">
                <div class="slide text-center">
                    <i class="fas fa-shield-alt icon-hover-shake" style="font-size: 50px;"></i>
                    <h3 class="slide-title">Real-Time Tracking:</h3>
                    <p class="slide-text"> When transporting with Ship A1 you will have the benefit of tracking your
                        boat
                        from anywhere and anytime with the help of our tracking service.</p>
                </div>
            </div>
            <div class="col-md-4 col-lg-4 mb-4">
                <div class="slide text-center">
                    <i class="fas fa-clock icon-hover-shake" style="font-size: 50px;"></i>
                    <h3 class="slide-title">100% Insurance:</h3>
                    <p class="slide-text"> At Ship A1 all of our vehicles are secured and protected so our customers
                        don’t have to
                        worry about stressing over this factor.</p>
                </div>
            </div>
        </div>
    </div>
</section>
@include('partials.blog-slider')
@endsection
@section('extraScript')
@endsection