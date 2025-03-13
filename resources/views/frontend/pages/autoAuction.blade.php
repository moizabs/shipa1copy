@extends('frontend.layouts.app')
@section('title', 'Auctions Car and Auto Transport Services in USA')
@section('meta_description', 'We are providing the best auctions car and auto transport services in USA, reliable auto and car delivery services to ensure your auctions run smoothly.')
@section('content')
<style>
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
    .top-left-image {
    position: absolute;
    top: -25px;
    left: -25px;
    width: 100px;
    height: 100px; 
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
        background: url('/img/autoauction banner 2.webp');
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
    @media (max-width: 768px) {
        .col-md-4 {
            flex: 0 0 50%;
            max-width: 50%;
        }
    }
    @media (max-width: 576px) {
        .col-md-4 {
            flex: 0 0 100%;
            max-width: 100%;
        }
    }
</style>
<section class="tj-choose-us-section-service-Auto-Transport">
    <div class="container mt-4">
        <div class="row mt-4">
            <div class="col-lg-6 sal-animate mt-4" data-sal="slide-left" data-sal-duration="800">
                <div class="choose-us-content-1">
                    <div class="tj-section-heading">
                        <span class="sub-title active-shape2">Specialized Service</span>
                        <h2 class="title">Auctions Auto Transport</h2>
                        <p class="desc-2 text-white">
                            Ship A1 specializes in providing all types of vehicles for auto
                            auction services tailored to your needs and specifications!
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
            @include('partials.multi-form')
            </div>
        </div>
    </div>
</section>
@include('partials.reveiw-small-detail') 
<section class="tj-blog-standard pt-2">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-12 order-sm-2 order-md-1 order-1 d-flex align-items-center justify-content-center sal-animate pt-4 mt-4" data-sal="slide-left" data-sal-duration="800">
                <div class="about-content-one">
                    <div class="tj-section-heading">
                        <h3 class="sal-animate" data-sal="slide-left" data-sal-duration="800">What are Auto Auctions?</h3>
                        <p class="desc">Ever heard of thrifting? Auctions are similar to that, basically at auctions all types of dealers and customers come to either purchase or sell out their vehicles in exceptional deals and rare models. Consider it a dynamic way of doing business, the best part is this dealing can be done both virtually and physically. Auto Auctions can handle a massive amount of all sorts of vehicles like motorcycles, cars,  golf carts, ATV, UTV pickup trucks, and so on.</p>
                        <br>
                        <p>If you’re confused about which Auto Auction to choose, below is a breakdown of the best auto auctions that cater to the needs of its customers:</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-12 order-sm-1 order-md-2 order-2 d-flex align-items-center justify-content-center sal-animate" data-sal="slide-left" data-sal-duration="800">
                <div class="mt-4 rounded">
                <div class="image-box">
                    <img class="rounded" src="{{ asset('/frontend/images/project/auto-auction.webp') }}" alt="Image">
                </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="tj-choose-us-section-two-1 pt-2">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="choose-us-top-content-1">
                    <div class="tj-section-heading-1">
                        <h2 class="title-1">Auto Auctions</h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-12" data-sal="slide-up" data-sal-duration="800" data-sal-delay="300">
                <div class="choose-us-step-item-1">
                    <div class="choose-step-box-1">
                        <div class="choose-box-1"></div>
                        <div class="step-content-1">
                            <h6 class="title-1">Copart:</h6>
                        </div>
                    </div>
                    <p>
                        Being one of the leading providers and suppliers of online auto auctions, Copart specializes in selling a wide range of vehicles daily, including salvage vehicles, clean title cars, and various other vehicle models and types. With its extensive inventory and innovative bidding platform, Copart is here to make itself renowned worldwide.
                    </p>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-12" data-sal="slide-up" data-sal-duration="800" data-sal-delay="300">
                <div class="choose-us-step-item-1">
                    <div class="choose-step-box-1">
                        <div class="choose-box-1"></div>
                        <div class="step-content-1">
                            <h6 class="title-1">Manheim:</h6>
                        </div>
                    </div>
                    <p>
                        A global leading auto auction that only offers a variety of vehicles and services but also allows customers
                        to bid however they want, whether it's online or a physical auction, it's your choice. Manheim provides a 
                        vast platform full of comprehensive solutions just for your comfort, from cars to motorcycles and plenty
                         of other vehicles Manheim provides the best vehicles.</p>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-12" data-sal="slide-up" data-sal-duration="800" data-sal-delay="300">
                <div class="choose-us-step-item-1">
                    <div class="choose-step-box-1">
                        <div class="choose-box-1"></div>
                        <div class="step-content-1">
                            <h6 class="title-1">IAA:</h6>
                        </div>
                    </div>
                    <p>
                        Insurance Auto Auction short for IAA is also another premium platform for the purchasing and selling of
                         vehicles that are a total loss, salvage as well as clean title vehicles. With 100% transparency maintained,
                          they ensure their customers are aware of every vehicle’s situation, model, as well as price.</p>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-12" data-sal="slide-up" data-sal-duration="800" data-sal-delay="300">
                <div class="choose-us-step-item-1">
                    <div class="choose-step-box-1">
                        <div class="choose-box-1"></div>
                        <div class="step-content-1">
                            <h6 class="title-1">ACV Auction:</h6>
                        </div>
                    </div>
                    <p>
                        Unlike the rest auctions, ACV only specializes in digital auto auctions, facilitating the purchasing and 
                        selling of vehicles through its online platform. Manheim’s system efficiency demands robust transportation 
                        to handle the quick bidding of vehicles.</p>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-12" data-sal="slide-up" data-sal-duration="800" data-sal-delay="300">
                <div class="choose-us-step-item-1">
                    <div class="choose-step-box-1">
                        <div class="choose-box-1"></div>
                        <div class="step-content-1">
                            <h6 class="title-1">ADESA:</h6>
                        </div>
                    </div>
                    <p>
                        This auto auction offers its services both digitally and physically, allowing users to bid nationwide 
                        according to their convenience only. ADESA also has a vast network of vehicles of all kinds while ensuring 
                        its services meet the standards and comfort of customers.</p>
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
                    <i class="fas fa-shield-alt icon-hover-shake" style="font-size: 50px;"></i>
                    <h3 class="slide-title">Insurance</h3>
                    <p class="slide-text">Our 100% insured vehicles ensure complete coverage for any unforeseen incidents.</p>
                </div>
            </div>
            <div class="col-md-4 col-lg-4 mb-4">
                <div class="slide text-center">
                    <i class="fas fa-dollar-sign icon-hover-shake" style="font-size: 50px;"></i>
                    <h3 class="slide-title">Affordability</h3>
                    <p class="slide-text">We offer reasonable rates without compromising the quality of your shipment!</p>
                </div>
            </div>
            <div class="col-md-4 col-lg-4 mb-4">
                <div class="slide text-center">
                    <i class="fas fa-clock icon-hover-shake" style="font-size: 50px;"></i>
                    <h3 class="slide-title">Convenience</h3>
                    <p class="slide-text">We ensure that your time and investment is returned with top-notch quality and convenience.</p>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-4 col-lg-4 mb-4">
                <div class="slide text-center">
                    <i class="fas fa-headset icon-hover-shake" style="font-size: 50px;"></i>
                    <h3 class="slide-title">24/7 Customer Support</h3>
                    <p class="slide-text">Our priority. For Ship A1 there is no odd time, we are present 24/7 for our customers and provide the best care and support throughout.</p>
                </div>
            </div>
            <div class="col-md-4 col-lg-4 mb-4">
                <div class="slide text-center">
                    <i class="fas fa-users icon-hover-shake" style="font-size: 50px;"></i>
                    <h3 class="slide-title">Trusted By Many</h3>
                    <p class="slide-text"><br> Check out our satisfied nationwide clients on Google, BBB, Trustpilot and other social media platforms.</p>
                </div>
            </div>
        </div>
    </div>
</section>
<div class="container">
    <div class="row">
        <div class="col-lg-8 col-md-12 order-sm-2 order-md-1 order-1 d-flex align-items-center justify-content-center sal-animate pt-4 mt-4" data-sal="slide-left" data-sal-duration="800">
            <div class="about-content-one">
                <div class="tj-section-heading">
                    <h3 class="sal-animate" data-sal="slide-left" data-sal-duration="800">What are Auto Auctions?</h3>
                    <p class="desc">On any regular and standard auction day, it isn’t unfamiliar or bizarre for hundreds and 
                        thousands of vehicles to get sold or purchased. Multiple good ratings and high-profile auctions monitor
                         the purchasing and selling of 1000 vehicles in a single day, depending on the pace and high volume of
                          transactions. For a company to run this well there should be a strong team and a reliable and 
                          efficient system. This is when Ship A1 comes into the picture, we work nationwide, providing 
                          transportation solutions that ensure every vehicle reaches its destination safe and sound.</p>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-12 order-sm-1 order-md-2 order-2 d-flex align-items-center justify-content-center sal-animate" data-sal="slide-left" data-sal-duration="800">
            <div class="mt-4 rounded">
            <div class="image-box">
                <img class="rounded" src="{{ asset('/frontend/images/project/car-auction-2-.webp') }}" alt="Image">
            </div>
            </div>
        </div>
    </div>
</div>
<section class=" mt-4">
    <div class="container why-box">
        <div class="row services">
            <div class="col-12">
                <h1 class="services-h1">Benefits of Our Services</h1>
            </div>
            <div class="col-12 col-md-4 mb-4">
                <div class="card- h-100">
                    <div class="card-body">
                        <h5 class="card-title text-dark">Price</h5>
                        <p class="card-text text-dark"> When preparing to ship a vehicle, it can be a daunting task to look for a 
                            company that has affordable rates as well as provides quality services, when working with Ship A1 you 
                            do not need to break the bank to ship a vehicle, you can get a necessary shipping service fit for an
                             automobile at an affordable price.</p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-4 mb-4">
                <div class="card- h-100">
                    <div class="card-body">
                        <h5 class="card-title text-dark">Quality Shipping Service</h5>
                        <p class="card-text text-dark">As previously mentioned, auto movers must get the vehicle to the 
                            destination on time, intact, and without any legal incidents every time. While this sounds pretty
                             basic, some companies fail to understand the assignment. However, at Ship A1, with 16 years of 
                             experience and a proven record of satisfied customers, we proudly claim our services because we 
                             have the muscle to live up to our words.</p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-4 mb-4">
                <div class="card- h-100">
                    <div class="card-body">
                        <h5 class="card-title text-dark">Insurance</h5>
                        <p class="card-text text-dark">According to federal law, all shipping companies should carry a valid
                             insurance certificate. When speaking with an auto-shipping representative, make sure that you
                              understand the policy. Find out what damage is not covered, such as that which might occur during
                               loading, offloading, and transit. A professional auto shipper like Ship-A1 will ensure that you 
                               are relaxed and comfortable with the process.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@include('partials.car-cta-section')
<section class="tj-about-section pt-4 mt-4">   
    <div class="container">
        <div class="row">
            <h2 class="title sal-animate text-center" data-sal="slide-left" data-sal-duration="800">
            Auto Transport Hauling Services</h2>
            <div class="col-lg-6 sal-animate pt-4 mt-0" data-sal="slide-left" data-sal-duration="800">
                <div class="about-content-one border rounded-5 p-4 mb-0">
                    <div class="tj-section-heading">
                        <span class="sub-title active-shape">Open Carrier</span>
                        <p class="desc">
                            Under open carrier transport, cars are shipped in the free trailer with automobiles being exposed
                             to the atmosphere. But do not let these facts distract you from the affordability and cheap services
                              provided by an open container. They are the most popular mode of transportation, mostly because the 
                              vehicles are shipped on a two-level trailer with 7 to 10 automobiles shipped at one time. This makes
                               them cheaper and provides faster services due to their efficiency.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 sal-animate pt-4 mt-0" data-sal="slide-left" data-sal-duration="800">
                <div class="about-content-one border rounded-5 p-4 mb-0">
                    <div class="tj-section-heading">
                        <span class="sub-title active-shape">Enclosed Carriers</span>
                        <p class="desc">
                            Enclosed carriers are covered to protect the vehicle from dust, road debris, rain, and snow. This 
                            service is optimal for antique automobiles, which require special care and experienced crew. This is
                            a premium service that comes with added features like extra vehicle insurance, constant surveillance,
                            and updates. This service will cost you more, but it serves to offer more protection to the car.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6 sal-animate pt-4 mt-2" data-sal="slide-left" data-sal-duration="800">
                <div class="about-content-one border rounded-5 p-4 mb-0">
                    <div class="tj-section-heading">
                        <span class="sub-title active-shape">Door to Door Transport</span>
                        <p class="desc">
                            Under door to door transport delivery, your automobile will be picked right from your door and will be
                            delivered to your exact location. This is the most popular method of car shipping because it is more
                            convenient for both the auto shipping company and the customer. With door to door delivery, you do
                            not need to drive your vehicle to a terminal. You also do not need to pay to have it spend time in 
                            a card terminal.
                        </p>
                    </div> 
                </div>
            </div>
            <div class="col-lg-6 sal-animate pt-4 mt-2" data-sal="slide-left" data-sal-duration="800">
                <div class="about-content-one border rounded-5 p-4 mb-0">
                    <div class="tj-section-heading">
                        <span class="sub-title active-shape">Expedited Shipping</span>
                        <p class="desc">
                            The speed of delivery is what matters to the customers the most. Ship A1 wants your vehicle be 
                            delivered within the given time and cannot afford the delay. Under standard shipping, your car would
                            be delivered in more than 4 days, with expedited shipping your automobile would be delivered within
                            four days.
                        </p>
                    </div> 
                </div>
            </div>
        </div>
    </div>
</section>
@include('partials.cta-section')
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
                            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                                data-bs-parent="#accordionExample">
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
                                    At Ship A1, we have the convenience of free quotes that we offer to all our
                                    customers online.<br>You can call our direct
                                    number<a class="pp-link" href="#"> 1 (844) 474-4721</a> for an instant quote.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    Can I track my vehicle during transport?
                                </button>
                            </h2>
                            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                                data-bs-parent="#accordionExample">
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
@endsection
@section('extraScript')
<script>
    $(document).ready(function() {
        function addNewVehicle() {
            var newVehicleHtml =
                `
                <div class="vehicle-info">
                <div class="row select-bm">
                    <!-- Bin icon for deleting vehicle -->
                    <span class="delete-vehicle"><i class="fa fa-trash" style="float: right; margin-top: 0px; color: red;"></i></span>
                    <div class="col-md-4">
                        <div class="input-form tj-select">
                            <label>Year</label>
                            <select class="nice-select year" name="year[]" required id="year"> <option value="" disabled selected>Select Year</option>`;
            var currentYear = {{ date('Y') }};
            for (var year = currentYear; year >= 1936; year--) {
                newVehicleHtml += `<option value="${year}">${year}</option>`;
            }
            newVehicleHtml += `
                            </select>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="input-form tj-select">
                            <label>Make</label>
                            <div class="dropdown">
                                <input class="form-control dropdown-toggle make" name="make[]" type="text" id="make" placeholder="Select Make" data-bs-toggle="dropdown" aria-expanded="false">
                                <ul class="dropdown-menu make-dropdown" aria-labelledby="make">
                                    <li><a class="dropdown-item" >Select Make</a></li>`;
            @foreach ($makes as $make)
                newVehicleHtml += `<li><a class="dropdown-item"  data-value="{{ $make->make }}">{{ $make->make }}</a></li>`;
            @endforeach
            newVehicleHtml += `
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="input-form tj-select model-div">
                            <label>Model</label>
                            <select class="nice-select model" name="model[]" id="model" required>
                                <!-- Options will be filled by JavaScript -->
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="condition" class="text-white">Condition</label>
                            <select class="nice-select" id="condition" name="condition[]">
                                <option value="1" selected>Running</option>
                                <option value="2">Non Running</option>
                            </select>
                        </div>
                    </div>
                </div>
                </div>
            `;
            $('#vehicles-container').append(newVehicleHtml);
        }
        $('#addVehicleBtn').click(function() {
            addNewVehicle();
        });
        $(document).on('click', '.delete-vehicle', function() {
            $(this).closest('.vehicle-info').remove();
        });
        $(document).on('click', '.make-dropdown .dropdown-item', function() {
            var make = $(this).data('value');
            $(this).closest('.dropdown').find('.form-control').val(make).end()
                .find('.dropdown-menu').removeClass('show');
            var vehicleInfo = $(this).closest('.vehicle-info');
            var year = vehicleInfo.find('.year').val();
            if (year && make) {
                getModel(year, make, vehicleInfo);
            }
        });
        $(document).on('click', '.year-dropdown .dropdown-item', function() {
            var selectedYear = $(this).data('value');
            $('#year').val(selectedYear); 
        });        
        $(document).on('click', '.year, .make', function() {
            var year = $(this).closest('.vehicle-info').find('.year').val();
            var makeId = $(this).closest('.vehicle-info').find('.make').val();
            var vehicleInfo = $(this).closest('.vehicle-info');
            if (year && makeId) {
                getModel(year, makeId, vehicleInfo);
            }
        });
        function getModel(year, makeId, vehicleInfo) {
            $.ajax({
                url: "{{ route('get.models') }}",
                method: 'GET',
                data: {
                    year: year,
                    make: makeId
                },
                success: function(response) {
                    var modelDropdown = vehicleInfo.find('.model-dropdown');
                    var modelInput = vehicleInfo.find('.model-input');
                    var modelSelect = vehicleInfo.find('.model'); 
                    if (modelDropdown.length && modelInput.length) {
                        modelDropdown.empty();
                        modelDropdown.append('<li><a class="dropdown-item" data-value="">Select Model</a></li>');
                        $.each(response, function(index, model) {
                            modelDropdown.append('<li><a class="dropdown-item" data-value="' + model + '">' + model + '</a></li>');
                        });
                        modelInput.on('focus', function() {
                            modelSelect.empty(); 
                            modelSelect.append('<option value="">Select Model</option>');
                            modelDropdown.show();
                        });
                        modelInput.on('input', function() {
                            var searchTerm = $(this).val().toLowerCase();
                            modelDropdown.find('li').each(function() {
                                var itemText = $(this).text().toLowerCase();
                                if (itemText.indexOf(searchTerm) !== -1 || searchTerm === '') {
                                    $(this).show();
                                } else {
                                    $(this).hide();
                                }
                            });
                        });
                        modelDropdown.on('click', 'a.dropdown-item', function(e) {
                            e.preventDefault(); 
                            var selectedText = $(this).text();
                            var selectedValue = $(this).data('value');
                            modelInput.val(selectedText);
                            modelDropdown.hide(); 
                            modelSelect.empty();
                            modelSelect.append('<option value="' + selectedValue + '">' + selectedText + '</option>');
                            modelSelect.val(selectedValue); 
                        });
                        $(document).on('click', function(e) {
                            if (!modelInput.is(e.target) && !modelDropdown.is(e.target) && modelDropdown.has(e.target).length === 0) {
                                modelDropdown.hide();
                            }
                        });
                    }
                    if (modelSelect.length) {
                        modelSelect.empty(); 
                        modelSelect.append('<option value="">Select Model</option>'); 
                        $.each(response, function(index, model) {
                            modelSelect.append('<option value="' + model + '">' + model + '</option>');
                        });
                        modelSelect.on('change', function() {
                            var selectedModel = $(this).val();
                            modelInput.val(modelSelect.find('option:selected').text());
                        });
                    }
                },
                error: function(xhr) {
                    console.log(xhr.responseText);
                }
            });
        }
        $(document).on('input', '.dropdown-toggle', function() {
            var input = $(this).val().toLowerCase();
            $(this).siblings('.dropdown-menu').find('.dropdown-item').each(function() {
                var text = $(this).text().toLowerCase();
                $(this).toggle(text.indexOf(input) > -1);
            });
        });
    });
</script>
@endsection