@extends('frontend.layouts.app')
@section('title', 'State to State Commercial Truck Transport Services in USA')
@section('meta_description', 'Experience hassle free commercial truck transport with our trusted services in USA. We provide efficient and cost-effective solutions for truck transportation.')
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
</Style>
<section class="tj-choose-us-section-service-commercial">
    <div class="container mt-4">
        <div class="row mt-4">
            <div class="col-lg-6 sal-animate mt-4" data-sal="slide-left" data-sal-duration="800">
                <div class="choose-us-content-1">
                    <div class="tj-section-heading">
                        <span class="sub-title active-shape2">SERVICES</span>
                        <h2 class="title">COMMERCIAL TRUCK TRANSPORT</h2>
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
<section class="tj-about-section pt-0 pb-4 mb-2">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-12 order-sm-2 order-md-1 order-1 d-flex align-items-center justify-content-center sal-animate pt-4 mt-4" data-sal="slide-left" data-sal-duration="800">
                <div class="about-content-one">
                    <div class="tj-section-heading">
                        <h3 class="sal-animate" data-sal="slide-left" data-sal-duration="800">Overview of Commercial Truck Transport</h3>
                        <p class="desc">Whether it comes to transporting standard vehicles or delivering goods through commercial trucks, all these 
                            services are accessible on the Internet easily. The industry of auto transport is increasing rapidly and has successfully 
                            spread over multiple domains and categories, offering a variety of different services. <br>
                            Ship A1 is a leading transportation company that has been in the market for 16 years, we not only offer multiple services
                             to our valuable customers. We also ensure we have gained their trust by giving our 100% to them. With advanced trailers 
                             and top-tier quality, Ship A1 has made more than 1000 successful deliveries nationwide. 
                            </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-12 order-sm-1 order-md-2 order-2 d-flex align-items-center justify-content-center sal-animate" data-sal="slide-left" data-sal-duration="800">
                <div class="mt-4 rounded">
                    <div class="image-box">
                        <img class="rounded img-fluid" src="{{ asset('/frontend/images/project/3b image for commercial truck transport (1).webp') }}" alt="Image">
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
                        <img class="rounded img-fluid" src="{{ asset('/frontend/images/project/3a images for commercial transport.webp') }}" alt="Image">
                    </div>
                </div>
            </div>
            <div class="col-lg-8 col-md-12 order-sm-2 order-1 d-flex align-items-center justify-content-center sal-animate pt-4 mt-4" data-sal="slide-left" data-sal-duration="800">
                <div class="about-content-one">
                    <div class="tj-section-heading">
                        <h3 class="sal-animate" data-sal="slide-left" data-sal-duration="800">Choosing a Truck Transport Service</h3>
                        <p class="desc">There are certain terms and conditions that you need to know before you go to search for 
                            commercial truck transport service through a reliable shipping company. Although the companies offering auto transport 
                            services are in great numbers, finding a suitable service at a market-competitive price that meets your transportation 
                            requirements is not an easy job. <br>
                            When you are looking for a commercial truck shipping service, some key points come into play affecting the overall price
                             factor and the service quality. The factors that you need to consider will determine your overall shipping journey. When 
                             transporting your vehicle some scenarios play a major role in the price and service you are getting for example distance,
                              route, and time.
                            </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@include('partials.cta-section')
<section class="tj-about-section pt-4 mt-2 pb-0">
    <div class="container">
        <div class="row">           
            <div class="col-lg-8 col-md-12 sal-animate d-flex align-items-center justify-content-center" data-sal="slide-left" data-sal-duration="800">
                <div class="about-content-one">
                    <div class="tj-section-heading">
                    <h3 class="sal-animate" 
                    data-sal="slide-left" data-sal-duration="800">Safe and Affordable Truck Transport</h3>
                        <p class="desc">
                            We understand that It is quite risky to transport the vehicle on your own, especially on certain routes. One does not need to
                             worry again because ShipA1 offers reliable commercial truck transport service at an affordable cost. <br>
                            Ship A1 has an extensive network of workers who are experts in the vehicle shipping industry as well as aware of the 
                            routes and pathways that work best during the shipment. To add more safety and security, our team tracks your vehicle
                             continuously during the shipment. </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-12 sal-animate d-flex align-items-center justify-content-center" data-sal="slide-left" data-sal-duration="800">
                <div class="mt-4 rounded">
                    <div class="image-box">
                        <img class="rounded img-fluid" src="{{ asset('/frontend/images/project/3c images for commercial transport.webp') }}" alt="Image">
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
            Why Choose Ship A1 Transport for Your Truck Hauling Needs?</h2>
            <div class="col-lg-6 sal-animate pt-4 mt-0" data-sal="slide-left" data-sal-duration="800">
                <div class="about-content-one border rounded-5 p-4 mb-0">
                    <div class="tj-section-heading">
                        <span class="sub-title active-shape">Affordable Pricing</span>
                        <p class="desc">
                        The reason why we standout as a supreme quality truck hauling company is our stellar quality with pricing. We haul your trucks with utmost care and prompt delivery.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 sal-animate pt-4 mt-0" data-sal="slide-left" data-sal-duration="800">
                <div class="about-content-one border rounded-5 p-4 mb-0">
                    <div class="tj-section-heading">
                        <span class="sub-title active-shape">Country-Wide Shipping</span>
                        <p class="desc">
                        Even if you are looking to move commercial truck to a new state you won’t feel any obstacle in shipping with us. We ship all around the contiguous United States.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6 sal-animate pt-4 mt-2" data-sal="slide-left" data-sal-duration="800">
                <div class="about-content-one border rounded-5 p-4 mb-0">
                    <div class="tj-section-heading">
                        <span class="sub-title active-shape">Dependability You Can Count On</span>
                        <p class="desc">
                        You may feel easy knowing that your vehicles are being carried by a team of experts who work together to ensure safety and security throughout the entire procedure.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 sal-animate pt-4 mt-2" data-sal="slide-left" data-sal-duration="800">
                <div class="about-content-one border rounded-5 p-4 mb-0">
                    <div class="tj-section-heading">
                        <span class="sub-title active-shape">High-Tech Equipment</span>
                        <p class="desc">
                        In order to minimize the possibility of damage occurring during transit, we load, move, and unload your trucks quickly and efficiently using the newest technology and equipment.</p>
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
                <h5 class="title fs-1">Advanced Trailers for Commercial Trucks</h5>
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
                                    <img src="{{ asset('/frontend/images/slider/Semi-Truck-with-Lowboy-Trailer.webp') }}" class="img-fluid rounded-start" style="height: 100%; background-size: cover; background-position: center;" alt="...">
                                    </div>
                                    <div class="col-sm-6 d-flex align-items-center justify-content-center">
                                    <div class="card-body tj-section-heading mb-0">
                                        <h5 class="card-title sub-title active-shape">Lowboy Trailer</h5>
                                        <p class="card-text  text-dark">These trailers have a low deck height that allows easier
                                            transport of tall commercial
                                            trucks. With detachable goosenecks, it is easier for them to load and unload the cargo.</p>
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
                <div class="swiper-slide">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card-2 mb-3">
                                <div class="row g-0">
                                    <div class="col-sm-6 d-flex align-items-center justify-content-center">
                                    <img src="{{ asset('/frontend/images/slider/Semi-Truck-With-Multi-Axel-Trailer.webp') }}" class="img-fluid rounded-start" style="height: 100%; background-size: cover; background-position: center;" alt="...">
                                    </div>
                                    <div class="col-sm-6 d-flex align-items-center justify-content-center">
                                    <div class="card-body tj-section-heading mb-0">
                                        <h5 class="card-title sub-title active-shape">Multi-Axle Trailers</h5>
                                        <p class="card-text text-dark">These trailers are only required and used for oversized trucks. By maintaining the
                                            weight and distributing it across multiple axles, these provide stability and reduce the axle load.</p>
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
<section class="tj-choose-us-section-service-commercial-2">
    <div class="container why-box">
        <div class="row services">
            <div class="col-12">

                <h1 class="services-h1">Factors Affecting the Price</h1>
            </div>

            <div class="col-12 col-md-4 mb-4">
                <div class="card- h-100">
                    <div class="card-body">
                        <h5 class="card-title text-dark">Dimensions of the Truck</h5>
                        <p class="card-text text-dark">The size and weight of the moving vehicle is the detrimental factor that
                            brings change to the price. The trailer type also varies as per the dimensions of the truck.</p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-4 mb-4">
                <div class="card- h-100">
                    <div class="card-body">
                        <h5 class="card-title text-dark">Underlying Trailer Type</h5>
                        <p class="card-text text-dark">To ship a truck in a safe manner from one place to another destination,
                            you need to have a specific trailer type. For mid-size trucks a flatbed trailer is fine but not for 
                            every truck.</p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-4 mb-4">
                <div class="card- h-100">
                    <div class="card-body">
                        <h5 class="card-title text-dark">Pick-up and drop-off location</h5>
                        <p class="card-text text-dark">Its a no-brainer to calculate the per-mile cost of delivery. Lesser the miles more the cost & vice versa. If the route being travelled is common then also the cost will be down.</p>
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
                                    <strong>Yes, Ship A1 offers a variety of heavy equipment services specially tailored to your needs, whether it’s a
                        forklift, excavator, trailer, crane, etc. we are here to assist you with a 100% guarantee of quality, safety,
                        and flexible rates for your route.
                        </strong>
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
                                    <strong>It all depends on the type of equipment you are planning on shipping, other than that our estimated
                                        delivery time also varies on the distance, weather conditions as well and road conditions. However, if
                                        you want your heavy equipment to be delivered urgently then we would suggest you opt for expedited
                                        shipping as it’s the fastest shipping service provided by Ship A1, while it is a bit pricey it would ensure
                                        your equipment reaches you in your desired timeframe.
                                        </strong>
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
                                    <strong>ShipA1 can connect you with qualified heavy equipment loading and unloading service providers in your
                                    area. We can advise on the best approach based on your specific equipment and needs.</strong>
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
                            <div id="collapseFour" class="accordion-collapse collapse"
                                aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                Not only you will get the insurance coverage. The carrier company will provide you with 
                                insurance up to a whopping upto $1 million. As soon as you get in touch with the driver you 
                                will get the documents which are related to your insurance.  
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