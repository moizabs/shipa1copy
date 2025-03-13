@extends('frontend.layouts.app')
@section('title', 'Safe & Fast Excavator Shipping Services in USA')
@section('meta_description', 'Get expert excavator shipping services that ensure your machinery arrives safely and on time in USA. Trust us for reliable and efficient excavator shipping.')
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
        background: url('/img/Excavator-transport-on-semi-truck.webp');
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
</Style>
<section class="tj-choose-us-section-service-excavator">
    <div class="container mt-4">
        <div class="row mt-4">
            <div class="col-lg-6 sal-animate mt-4" data-sal="slide-left" data-sal-duration="800">
                <div class="choose-us-content-1">
                    <div class="tj-section-heading">
                        <span class="sub-title active-shape2">SERVICES</span>
                        <h2 class="title">EXCAVATOR SHIPPING SERVICES</h2>
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
<section class="tj-about-section pt-0 pb-0">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-12 order-sm-2 order-md-1 order-1 d-flex align-items-center justify-content-center sal-animate pt-4 mt-4" data-sal="slide-left" data-sal-duration="800">
                <div class="about-content-one">
                    <div class="tj-section-heading">
                        <h3 class="sal-animate" data-sal="slide-left" data-sal-duration="800">Dependable Excavator Shipping Solutions</h3>
                        <p class="desc">
                            Heavy equipment of construction like excavators consist of dippers and boom, and heavy
                            rotating body, etc.
                            Excavators are usually designed to help in the digging, making holes, agroforestry,
                            construction work, mining,
                            dredging, and removing snow, etc. There might be many situations that will raise the need to
                            ship excavators from
                            one state to another state of America. You might need it shipped because it is required at
                            someplace for the digging work,
                            or you may want to use it for business purposes, etc. No matter what the nature of the need
                            is, your excavator can be
                            shipped easily by the company that is worthy of trust.</p>
                    </div>

                </div>
            </div>
            <div class="col-lg-4 col-md-12 order-sm-1 order-md-2 order-2 d-flex align-items-center justify-content-center sal-animate" data-sal="slide-left" data-sal-duration="800">
                <div class="mt-4 rounded">
                    <div class="image-box">
                        <img class="rounded" src="{{ asset('/frontend/images/project/3a-image-for-excavator-transport.webp') }}"
                            alt="Image">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container pb-4">
        <div class="row">
            <div class="col-lg-4 col-md-12 order-sm-2 order-md-1 order-2 d-flex align-items-center justify-content-center sal-animate" data-sal="slide-left" data-sal-duration="800">
                <div class="mt-4 rounded">
                    <div class="image-box">
                        <img class="rounded" src="{{ asset('/frontend/images/project/3b-image-for-excavator-transport.webp') }}"
                            alt="Image">
                    </div>
                </div>
            </div>
            <div class="col-lg-8 col-md-12 order-sm-1 order-md-2 order-1 d-flex align-items-center justify-content-center sal-animate pt-4 mt-4" data-sal="slide-left" data-sal-duration="800">
                <div class="about-content-one">
                    <div class="tj-section-heading">
                        <h3 class="sal-animate" data-sal="slide-left" data-sal-duration="800">Ship A1's Excavator Transport Solutions</h3>
                        <p class="desc">
                            Excavator shipping services is just one of the major services here at ShipA1. Usually, when
                            it comes
                            to shipping of excavators, terminal delivery is preferred because it becomes easy for the
                            customer to
                            drop it off at a terminal and pick it up from the terminal. Also, if you want to conserve
                            money, the
                            option for terminal shipping at ShipA1 is a better approach. Door to door shipping is
                            costlier but
                            can be of an advantage if you want the excavator delivered right at the working field or any
                            place
                            that you want.So once you’re shipping an excavator, whether you are in need of a huge
                            excavator
                            hauled or just a small mini-excavator moved, you must be careful of its size. Because of the
                            complexity, weight, and size of an excavator, finding the best excavator shipping service is
                            the only
                            approach to get it transported ship A1 provides free online quotes.</p>
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
                        <h3 class="sal-animate" data-sal="slide-left" data-sal-duration="800">Specialized Transport for Heavy Excavators</h3>
                        <p class="desc">
                            Heavy excavators need a step-deck trailer and expert loading. This will have an influence on
                            what sort of flatbed
                            hauler will ship it, whether it’s a conventional flatbed or lowboy.Price is another enormous
                            aspect
                            and people want the quality at its best price. If you need to decrease cost, you can always
                            go in for
                            heavy haulers auto transport or lowboy haulers of ShipA1 as it’s far much cheaper than other
                            options
                            for vehicle transport. Heavy haulers are an excellent choice for heavy construction vehicles
                            like
                            excavators. Heavy haulers and flatbeds at ShipA1 are specially designed to withhold the
                            pressure and
                            weight of excavators and other heavy construction machinery and are designed to make the
                            smooth
                            delivery possible. We’ve got huge experience, and we promise to deliver according to the
                            customers’
                            expectations. </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-12 order-sm-1 order-md-2 order-2 d-flex align-items-center justify-content-center sal-animate" data-sal="slide-left" data-sal-duration="800">
                <div class="mt-4 rounded">
                    <div class="image-box">
                        <img class="rounded" src="{{ asset('/frontend/images/project/tipo-sultan.webp') }}"
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
            <h2 class="title text-center sal-animate" data-sal="slide-left" data-sal-duration="800">
                Ensuring Safe and Efficient Excavator Transport</h2>
            <div class="col-lg-6 sal-animate pt-4 mt-0" data-sal="slide-left" data-sal-duration="800">
                <div class="about-content-one border rounded-5 p-4">
                    <div class="tj-section-heading">
                        <span class="sub-title active-shape">Protected Shipment</span>
                        <p class="desc">
                            Whenever we are shipping a heavy equipment our ultimate focus must be on
                            choosing the right trailer for a safer experience during transit & at time of delivery.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 sal-animate pt-4 mt-0" data-sal="slide-left" data-sal-duration="800">
                <div class="about-content-one border rounded-5 p-4">
                    <div class="tj-section-heading">
                        <span class="sub-title active-shape">Trailer for Excavator</span>
                        <p class="desc">
                            Not every trailer that can be used in shipping an excavator. Mostly a lowboy trailer is used
                            while others are used as per the dimensions of the excavator.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6 sal-animate pt-4 mt-0" data-sal="slide-left" data-sal-duration="800">
                <div class="about-content-one border rounded-5 p-4">
                    <div class="tj-section-heading">
                        <span class="sub-title active-shape">Expert Loading</span>
                        <p class="desc">Loading and securing in a professional way protect from damage and assure safety 
                            from start to finish, minimizing the risk and delays of transportation.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 sal-animate pt-4 mt-0" data-sal="slide-left" data-sal-duration="800">
                <div class="about-content-one border rounded-5 p-4">
                    <div class="tj-section-heading">
                        <span class="sub-title active-shape">Custom Transport Solutions</span>
                        <p class="desc">
                            Custom transport options are offered in relation to the excavator's 
                            specifications and delivery requirements for optimum safety and efficiency.</p>
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
                <h5 class="title fs-1">Trailers used for Excavator</h5>
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
                                    <img src="{{ asset('/frontend/images/slider/Excavator on Lowboy Trailor (1).webp') }}" class="img-fluid rounded-start" style="height: 100%; background-size: cover; background-position: center;" alt="...">
                                    </div>
                                    <div class="col-sm-6 d-flex align-items-center justify-content-center">
                                    <div class="card-body tj-section-heading mb-0">
                                        <h5 class="card-title sub-title active-shape">Lowboy Trailers</h5>
                                        <p class="card-text  text-dark">These trailers are designed to carry heavy loads like excavators featuring a low deck height to support
                                            the stability and easy loading of excavators.</p>
                                        <div class="tj-theme-button mt-2">
                                        <a class="tj-transparent-btn" href="{{ route('frontend.forms.excavator') }}" >
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
                                        <p class="card-text text-dark">This trailer has an open deck which is convenient for flexible loading and securing machinery, most commonly
                                            used for small excavators.</p>
                                        <div class="tj-theme-button mt-2">
                                        <a class="tj-transparent-btn" href="{{ route('frontend.forms.excavator') }}" >
                                            Get Quote
                                            <i class="flaticon-right-1"></i>
                                        </a>
                                    </div>
                                    </div>
                                    </div>
                                    <div class="col-sm-6 d-flex align-items-center justify-content-center">
                                        <img src="{{ asset('/frontend/images/slider/Excavator on flatbed Trailor.webp') }}" class="img-fluid rounded-start" style="height: 100%; background-size: cover; background-position: center;" alt="...">
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
                                    <img src="{{ asset('/frontend/images/slider/Excavator on Dropdeck Trailor.webp') }}" class="img-fluid rounded-start" style="height: 100%; background-size: cover; background-position: center;" alt="...">
                                    </div>
                                    <div class="col-sm-6 d-flex align-items-center justify-content-center">
                                    <div class="card-body tj-section-heading mb-0">
                                        <h5 class="card-title sub-title active-shape">Drop Deck Trailers</h5>
                                        <p class="card-text text-dark">This type of trailer has combined elements of a flatbed and a lowboy. With the help of 
                                            a lower deck height, allows easy accommodation of taller equipment like excavators.</p>
                                        <div class="tj-theme-button mt-2">
                                        <a class="tj-transparent-btn" href="{{ route('frontend.forms.excavator') }}" >
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
                                        <h5 class="card-title sub-title active-shape">Extendable Trailers</h5>
                                        <p class="card-text text-dark">This trailer is adjustable in length and can handle longer or oversized excavators while also 
                                            offering versatility for multiple sizes and configurations of excavators.</p>
                                        <div class="tj-theme-button mt-2">
                                        <a class="tj-transparent-btn" href="{{ route('frontend.forms.excavator') }}" >
                                            Get Quote
                                            <i class="flaticon-right-1"></i>
                                        </a>
                                    </div>
                                    </div>
                                    </div>
                                    <div class="col-sm-6 d-flex align-items-center justify-content-center">
                                        <img src="{{ asset('/frontend/images/slider/Excavator on Extendable Trailor.webp') }}" class="img-fluid rounded-start" style="height: 100%; background-size: cover; background-position: center;" alt="...">
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
<section class="tj-choose-us-section-service-commercial-5">
    <div class="container why-box">
        <div class="row services">
            <div class="col-12">
                <h1 class="services-h1">Things You Should Expect</h1>
            </div>    
            <div class="col-12 col-md-4 mb-4">
                <div class="card- h-100">
                    <div class="card-body">
                        <h5 class="card-title text-dark">Dimensions of the Excavator</h5>
                        <p class="card-text text-dark">The first and foremost thing you need to mention is the size,
                            weight etc and will determine
                            what trailer should be used for your excavator. It could be a simple flatbed or lowboy etc.</p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-4 mb-4">
                <div class="card- h-100">
                    <div class="card-body">
                        <h5 class="card-title text-dark">A Higher Price</h5>
                        <p class="card-text text-dark">You should expect to pay a price slightly higher than other
                            vehicles in all
                            the heavy equipments as they are bigger in size and needs utmost care to be delivered
                            safely.</p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-4 mb-4">
                <div class="card- h-100">
                    <div class="card-body">
                        <h5 class="card-title text-dark">Ample Time in Delivery</h5>
                        <p class="card-text text-dark">Because of the vehicle’s dimension it takes proper due
                            diligence in order to make the delivery.
                            Due to that it takes ample time for your delivery to get done & you must expect that.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="tj-faq-section tj-faq-page pt-5">
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
                    <h3 class="slide-title">Speedy Delivery:</h3>
                    <p class="slide-text">Once you have partnered with Ship A1, say goodbye to delayed deliveries, our expert
                        team of carriers ensures your vehicle is being delivered to you on time.
                    </p>
                </div>
            </div>
            <div class="col-md-4 col-lg-4 mb-4">
                <div class="slide text-center">
                    <i class="fas fa-dollar-sign icon-hover-shake" style="font-size: 50px;"></i>
                    <h3 class="slide-title">Affordable Rates:</h3>
                    <p class="slide-text"> Experience the luxury of our services without hurting your bank accounts, yes, we
                        offer the best reasonable and cost-effective rates without compromising the quality of our services.</p>
                </div>
            </div>
            <div class="col-md-4 col-lg-4 mb-4">
                <div class="slide text-center">
                    <i class="fas fa-clock icon-hover-shake" style="font-size: 50px;"></i>
                    <h3 class="slide-title">No Upfront Payment:</h3>
                    <p class="slide-text">We have no policy of any upfront payments before the delivery. We let our
                        customers see for themselves and then they pay once their vehicle is safely delivered to their
                        destination.</p>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-4 col-lg-4 mb-4">
                <div class="slide text-center">
                    <i class="fas fa-headset icon-hover-shake" style="font-size: 50px;"></i>
                    <h3 class="slide-title"> Real-Time Tracking: </h3>
                    <p class="slide-text">Our customers facilitate this service whenever they want to know the current and
                        updated status of their shipment.</p>
                </div>
            </div>
            <div class="col-md-4 col-lg-4 mb-4">
                <div class="slide text-center">
                    <i class="fas fa-shield-alt icon-hover-shake" style="font-size: 50px;"></i>
                    <h3 class="slide-title">100% Insurance:</h3>
                    <p class="slide-text">To avoid any risks and damage we have 100% insured vehicles to ensure your vehicle is
                        in safe hands.</p>
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
</script>
@endsection