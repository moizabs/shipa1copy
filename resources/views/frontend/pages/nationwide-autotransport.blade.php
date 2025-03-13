@extends('frontend.layouts.app')
@section('content')
<Style>
    .why-box {
        border-radius: 12px;
        padding: 40px 0px;
        background: #183c46eb;
    }
    .title-2 {
        color: #8fc445;
    }
    .desc-2 {
        color: white;
    }
    .card- {
        background: #29494e;
        border: 1px solid #ddd;
        border-radius: 12px;
        padding: 15px;
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
    }
    .services {
        text-align: center;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        border-radius: 12px;
        padding: 10px 10px 30px 10px;
        background-color: #9d9e9f14;
    }
    .services-h1 {
        text-align: center;
        text-decoration: overline;
        margin-bottom: 50px;
        color: #8FC445;
    }
</Style>
<section class="tj-choose-us-section-service-roro">
    <div class="container mt-4">
        <div class="row mt-4">
            <div class="col-lg-6 sal-animate mt-4" data-sal="slide-left" data-sal-duration="800">
                <div class="choose-us-content-1">
                    <div class="tj-section-heading">
                        <span class="sub-title active-shape2">SERVICES</span>
                        <h2 class="title">California Car Transport</h2>
                        <p class="desc-2">ShipA1 has pledged to provide all-in-one auto transport solutions to all its customers and seeks your trust in return of our services.</p>
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
                @include('partials.multi-form')
            </div>
        </div>
    </div>
</section>
@include('partials.reveiw-site')
@if (isset($transport) && $transport != null)
    <div class="detail_data">
        @include('partials.transport-by-state-detail')
    </div>
@endif
@include('partials.car-cta-section')
<section class="tj-testimonial-section">
    <div class="container">
        <div class="row">
            <div class="tj-section-heading text-center">
                <h5 class="title fs-1">Trailers used for Vehicle</h5>
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
                                    <img src="{{ asset('/frontend/images/slider/Car-Transport-on-Enclosed-trailer.webp') }}" class="img-fluid rounded-start" style="height: 100%; background-size: cover; background-position: center;" alt="...">
                                    </div>
                                    <div class="col-sm-6 d-flex align-items-center justify-content-center">
                                    <div class="card-body tj-section-heading mb-0">
                                        <h5 class="card-title sub-title active-shape">Enclosed transport</h5>
                                        <p class="card-text  text-dark">Enclosed transport service is the ideal option for people who want to provide their cars
                                            additional security. Although a little more expensive, guarantees that your vehicle
                                            is completely protected from outside elements including weather, road debris, and other possible
                                            threats.</p>
                                        <div class="tj-theme-button mt-2">
                                        <a class="tj-transparent-btn" href="{{ route('frontend.forms.dryvan') }}" >
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
                                    <img src="{{ asset('/frontend/images/slider/Car-Transportation-1212.webp') }}" class="img-fluid rounded-start" style="height: 100%; background-size: cover; background-position: center;" alt="...">
                                    </div>
                                    <div class="col-sm-6 d-flex align-items-center justify-content-center">
                                    <div class="card-body tj-section-heading mb-0">
                                        <h5 class="card-title sub-title active-shape">Open Transport</h5>
                                        <p class="card-text  text-dark">This is the usual method we use while shipping cars. The most affordable choice for car transportation
                                            is an open transport, which makes it perfect for individuals looking for a low-cost option. Due of its
                                            price and effectiveness, this method is very popular even if your car faces exposure to the environment
                                            while in transit.</p>
                                        <div class="tj-theme-button mt-2">
                                        <a class="tj-transparent-btn" href="{{ route('frontend.forms.dryvan') }}" >
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
                                        <p class="card-text text-dark">These types of trailers usually are pretty similar to flatbeds but with a lower deck, which allows easy transportation 
                                            of dry vans that exceeds the height limit.</p>
                                        <div class="tj-theme-button mt-2">
                                        <a class="tj-transparent-btn" href="{{ route('frontend.forms.dryvan') }}" >
                                            Get Quote
                                            <i class="flaticon-right-1"></i>
                                        </a>
                                    </div>
                                    </div>
                                    </div>
                                    <div class="col-sm-6 d-flex align-items-center justify-content-center">
                                        <img src="{{ asset('/frontend/images/slider/Dropdeck Trailer.webp') }}" class="img-fluid rounded-start" style="height: 100%; background-size: cover; background-position: center;" alt="...">
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
                                        <p class="card-text text-dark">These trailers are equipped with a flatbed without any sides or roof, which allows them
                                            to load and unload commercial trucks from any convenient angle.</p>
                                        <div class="tj-theme-button mt-2">
                                        <a class="tj-transparent-btn" href="{{ route('commercial.truck.transport') }}" >
                                            Get Quote
                                            <i class="flaticon-right-1"></i>
                                        </a>
                                    </div>
                                    </div>
                                    </div>
                                    <div class="col-sm-6 d-flex align-items-center justify-content-center">
                                        <img src="{{ asset('/frontend/images/slider/Semi-Truck-with-Flatbed-Trailer.webp') }}" class="img-fluid rounded-start" style="height: 100%; background-size: cover; background-position: center;" alt="...">
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
{{-- <section class="tj-about-section pt-4">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 sal-animate pt-4 mt-4" data-sal="slide-left" data-sal-duration="800">
                <div class="about-content-one border rounded p-4">
                    <div class="tj-section-heading">
                        <span class="sub-title active-shape">Affordability</span>
                    </div>
                    <p class="desc">RORO is the most preferred shipping method to ship vehicles from one port to the
                        other. It is also
                        the fastest method of transportation that will free you of any additional expenses. If your
                        country uses CIF
                        to calculate duties and taxes, then you can save double, and as long as you keep on shipping,
                        you indeed
                        save on tax duties too! Now that's a good deal.</p>
                </div>
            </div>
            <div class="col-lg-6 sal-animate pt-4 mt-4" data-sal="slide-left" data-sal-duration="800">
                <div class="about-content-one border rounded p-4">
                    <div class="tj-section-heading">
                        <span class="sub-title active-shape">Convenient</span>
                    </div>
                    <p class="desc">The outstanding and useful fact about RORO shipping is that it can apply to any
                        vehicle. So long
                        as you or the professional moving company you hire provide a trailer with wheels for boats and
                        caravans, you
                        do not need to pull them apart to fit inside a container. You may even be able to drive your car
                        right from
                        the destination port if you have enough gas left in the tank.</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6 sal-animate pt-4 mt-4" data-sal="slide-left" data-sal-duration="800">
                <div class="about-content-one border rounded p-4">
                    <div class="tj-section-heading">
                        <span class="sub-title active-shape">Safe</span>
                    </div>
                    <p class="desc">You might have read some articles concerned about the safety of the stuff they
                        ship. As long as
                        you have chosen RORO car shipping, you will not have to worry about the security of your
                        vehicles.</p>
                </div>
            </div>
            <div class="col-lg-6 sal-animate pt-4 mt-4" data-sal="slide-left" data-sal-duration="800">
                <div class="about-content-one border rounded p-4">
                    <div class="tj-section-heading">
                        <span class="sub-title active-shape">Speed</span>
                    </div>
                    <p class="desc">The lack of RORO availability at specific ports can cause delays in
                        transportation. If this does
                        occur, importers have to find a port that offers this option in their close vicinity.</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6 sal-animate pt-4 mt-4" data-sal="slide-left" data-sal-duration="800">
                <div class="about-content-one border rounded p-4">
                    <div class="tj-section-heading">
                        <span class="sub-title active-shape">Shipping Process</span>
                    </div>
                    <p class="desc">The shipping process is convenient, and it takes the least time when it comes to
                        processing
                        international shipping. Therefore, many people trust the RORO shipping. Therefore, if you are
                        planning
                        international car shipping, then you can rely on RORO services.</p>
                </div>
            </div>
            <div class="col-lg-6 sal-animate pt-4 mt-4" data-sal="slide-left" data-sal-duration="800">
                <div class="about-content-one border rounded p-4">
                    <div class="tj-section-heading">
                        <span class="sub-title active-shape">Fast</span>
                    </div>
                    <p class="desc">This mode of shipping is used when you want to transport your vehicle on urgent
                        or when time is
                        essential. The standard vehicle shipping services take more days for shipping overseas, but RORO
                        car shipping
                        is more efficient than its alternatives.</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6 sal-animate pt-4 mt-4" data-sal="slide-left" data-sal-duration="800">
                <div class="about-content-one border rounded p-4">
                    <div class="tj-section-heading">
                        <span class="sub-title active-shape">Saves Times and Money</span>
                    </div>
                    <p class="desc">Another advantage is the affordability. It is one of the cheapest international
                        shipping
                        services which deliver the automobiles on time. Therefore, it also saves time. The air shipping
                        and
                        another way of international shipping are pretty expensive when it compares with the RORO
                        shipping.</p>
                </div>
            </div>
            <div class="col-lg-6 sal-animate pt-4 mt-4" data-sal="slide-left" data-sal-duration="800">
                <div class="about-content-one border rounded p-4">
                    <div class="tj-section-heading">
                        <span class="sub-title active-shape">Safety</span>
                    </div>
                    <p class="desc">Although RORO shipping is considered more affordable and convenient, it is also
                        more
                        high-risk in terms of vehicle safety. The main reasons for this are the loading/unloading stage,
                        during which accidents can occur, and the extensive exposure to diverse climate changes.</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6 sal-animate pt-4 mt-4" data-sal="slide-left" data-sal-duration="800">
                <div class="about-content-one border rounded p-4">
                    <div class="tj-section-heading">
                        <span class="sub-title active-shape">Insurance</span>
                    </div>
                    <p class="desc">The various companies which offer the RORO service are now providing car
                        insurance.
                        Therefore, international car shipping is pretty safe now after incorporating coverage. The
                        company covers not
                        only the safety of the car but also, they verify the damages. In addition to that, the company
                        scrutinizes
                        the condition of the vehicle as they are liable for the damages.</p>
                </div>
            </div>
            <div class="col-lg-6 sal-animate pt-4 mt-4" data-sal="slide-left" data-sal-duration="800">
                <div class="about-content-one border rounded p-4">
                    <div class="tj-section-heading">
                        <span class="sub-title active-shape">Attractive Rates and Discounts</span>
                    </div>
                    <p class="desc">The service not only delivers car internationally at a very affordable price rate
                        but also,
                        they provide various attractive discounts. This can be an added advantage. Many companies offer
                        discounts
                        to maintain healthy competition in the market.</p>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="tj-cta-section-two">
    <div class="tj_cta_image-4 w-100 h-50"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-6">
                <div class="tj-cta-content d-flex justify-content-around" style="bottom: 40px; z-index: 3;">
                    <div class="tj-section-heading ">
                        <span class="sub-title active-shape2"> Support Center 24/7 </span>
                        <p class="text-white mt-2">Feel Free To Contact Us For Additional Info</p>
                    </div>
                    <div class="tj-theme-button mt-2">
                        <a class="tj-transparent-btn" href="{{ route('contactUs') }}" target="_blank">
                            Get Support<i class="flaticon-right-1"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="tj-about-section-five">
    <div class="container">
        <div class="row services">
            <h1 class="services-h1">Our RORO Shipping Process Explained</h1>
            <div class="col-12 col-md-4 mb-4">
                <div class="card- h-100">
                    <div class="card-body">
                        <h5 class="card-title text-white">Step 1</h5>
                        <p class="card-text text-light">The client contacts about shipping his vehicle overseas and
                            provides us with necessary documents relating to its automobile.</p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-4 mb-4">
                <div class="card- h-100">
                    <div class="card-body">
                        <h5 class="card-title text-white">Step 2</h5>
                        <p class="card-text text-light">Ship-A1 starts preparing your documents for secure shipping,
                            and you receive the bill detailing the cost of taxes.</p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-4 mb-4">
                <div class="card- h-100">
                    <div class="card-body">
                        <h5 class="card-title text-white">Step 3</h5>
                        <p class="card-text text-light">Ship-A1 offers seamless RORO shipping from the U.S., handling
                            customs, loading, and providing manual tracking. Trust us for safe, reliable, and affordable
                            car shipping with special discounts available.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> --}}
<section class="tj-choose-us-section-service-roro">
    <div class="container why-box">
        <div class="row">
            <div class="col-lg-8 sal-animate" data-sal="slide-right" data-sal-duration="800">
                <div class="about-content-two">
                    <div class="tj-section-heading">

                        <h2 class="title-2">Why Choose Us?</h2>
                        <p class="desc-2">
                            We have a distinct approach when it comes to the philosophy of business.<br>Our belief in
                            innovation & unique business practices differentiate us & here are the reasons why you must
                            choose us:
                        </p>
                    </div>
                    <div class="content-box d-flex align-items-center border-top">
                        <div class="tj-icon-box">
                            <div class="ab-text d-flex align-items-center">
                            </div>
                            <p class="desc-2">★ Professional & responsive customer service available 24/7.</p>
                        </div>
                        <div class="tj-icon-box">
                            <p class="desc-2">★ A wide range of services such as open, enclosed & expedited.</p>
                        </div>
                        <div class="tj-icon-box pb-4">
                            <p class="desc-2">★ Prompt delivery due to efficient use of trailers.</p>
                        </div>
                    </div>
                    <div class="content-box d-flex align-items-center">
                        <div class="tj-icon-box">
                            <p class="desc-2">★ Legion of truckers available with years old network.</p>
                        </div>
                        <div class="tj-icon-box">
                            <p class="desc-2">★ Get online car shipping quotes.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 sal-animate" data-sal="slide-left" data-sal-duration="800">
                <div class="about-group-image2 d-flex flex-wrap align-items-start flex-column mt-4">
                    <div class="image-box">
                        <img class="p-z-idex" src="{{ asset('frontend/images/project/vehicle-detail-page.webp') }}"
                            alt="Image">
                    </div>
                    <img class="group-1 p-z-idex"
                        src="{{ asset('frontend/images/project/vehicle-detail-page.webp') }}" alt="Image">
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
                                    How do I prepare my vehicle for transport?
                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse show"
                                aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <strong>We'll provide detailed instructions, but you'll need to remove personal
                                        belongings, as well as make sure to follow guidelines or instructions based on
                                        the chosen transport method.</strong>
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
                                    <strong>At Ship A1 we have the convenience of providing free online quotes to our
                                        customers, you can check them out at www.shipa1.com</strong>
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
                                    <strong>Yes! ShipA1 provides a user-friendly tracking system for real-time updates
                                        on your vehicle's location throughout the journey.</strong>
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
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/intlTelInput.min.js"></script>
<script src="path/to/jquery.min.js"></script>
<script type="text/javascript"
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDS8r7ZgkAHXuIJKgaYhhF4WccgswI-1F8&amp;v=3.exp&amp;libraries=places">
</script>
@endsection