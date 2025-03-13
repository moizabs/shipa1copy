@extends('frontend.layouts.app')
@section('title', 'FAQs')
@section('meta_description',
'Explore our FAQs to get quick answers and valuable information on common inquiries. Your go to resource for clarity and support is just a click away.')
@section('content')
<section class="breadcrumb-wrapper" data-bg-image="{{ asset('frontend/images/slider/FAQ.webp') }}">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb-content">
                    <h1 class="breadcrumb-title text-center">FAQ!</h1>
                    <div class="breadcrumb-link">
                        <span>
                            <a href="{{ route('welcome') }}">
                                <span>Home</span>
                            </a>
                        </span>
                        >
                        <span>
                            <span>FAQ!</span>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
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
            <div class="col-lg-12">
                <div class="slider-tabs slider-tabs-two ">
                    <ul class="nav nav-pills" id="pills-tab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pills-home-tab" data-bs-toggle="pill"
                                data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home"
                                aria-selected="false">
                                <i class="flaticon-shipped"></i> Vehicle Transportation
                            </button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="pills-profile-tab" data-bs-toggle="pill"
                                data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile"
                                aria-selected="true">
                                <i class="flaticon-global-navigation"></i> Heavy Equipment
                            </button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill"
                                data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact"
                                aria-selected="false">
                                <i class="flaticon-cargo-ship-1"></i> Freight Transportation
                            </button>
                        </li>
                    </ul>
                    <div class="tab-content" id="pills-tabContent">
                        <div class="tab-pane fade" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                            <div class="row">
                                <div class="col-lg-12" data-sal="slide-right" data-sal-duration="800">
                                    <div class="tj-faq-area">
                                        <div class="accordion" id="accordionExample">
                                            <div class="accordion-item">
                                                <h2 class="accordion-header" id="headingOne">
                                                    <button class="accordion-button" type="button"
                                                        data-bs-toggle="collapse" data-bs-target="#collapseOne"
                                                        aria-expanded="true" aria-controls="collapseOne">
                                                        What type of vehicle do you transport?
                                                    </button>
                                                </h2>
                                                <div id="collapseOne" class="accordion-collapse collapse show"
                                                    aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                                    <div class="accordion-body">
                                                        <strong>We transport all types of cars, motorcycles, trucks,
                                                            SUVs, vans, ATV, UTV,
                                                            Golf cart.</strong>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="accordion-item">
                                                <h2 class="accordion-header" id="headingTwo-1">
                                                    <button class="accordion-button collapsed" type="button"
                                                        data-bs-toggle="collapse" data-bs-target="#collapseTwo"
                                                        aria-expanded="false" aria-controls="collapseTwo">
                                                        How can I get a quote to ship my vehicle?
                                                    </button>
                                                </h2>
                                                <div id="collapseTwo" class="accordion-collapse collapse"
                                                    aria-labelledby="headingTwo-1" data-bs-parent="#accordionExample">
                                                    <div class="accordion-body">
                                                        <strong>You can get a quote by visiting our website and filling
                                                            up the online quote
                                                            form, providing your details of your vehicle with your
                                                            transportation
                                                            requirements. Or you can contact us directly for an instant
                                                            quote at 1 (844)
                                                            474-4721.</strong>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="accordion-item">
                                                <h2 class="accordion-header" id="headingThree">
                                                    <button class="accordion-button collapsed" type="button"
                                                        data-bs-toggle="collapse" data-bs-target="#collapseThree"
                                                        aria-expanded="false" aria-controls="collapseThree">
                                                        Is my vehicle insured during transport?
                                                    </button>
                                                </h2>
                                                <div id="collapseThree" class="accordion-collapse collapse"
                                                    aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                                    <div class="accordion-body">
                                                        <strong>Yes, your vehicle is fully insured during
                                                            transportation. Our insurance
                                                            covers any possible damage that may be caused during
                                                            transit. Please refer to
                                                            our insurance policy for more details.</strong>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="accordion-item">
                                                <h2 class="accordion-header" id="headingFour">
                                                    <button class="accordion-button collapsed" type="button"
                                                        data-bs-toggle="collapse" data-bs-target="#collapseFour"
                                                        aria-expanded="false" aria-controls="collapseFour">
                                                        How long does it take to transport my vehicle?
                                                    </button>
                                                </h2>
                                                <div id="collapseFour" class="accordion-collapse collapse"
                                                    aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                                                    <div class="accordion-body">
                                                        <strong>The time it takes to transport your vehicle varies based
                                                            on distance and
                                                            route. Estimated times for transport are 2-9 days cross
                                                            country and 1-3 days for
                                                            shorter distances. We will provide a more exact estimate
                                                            once you book your
                                                            transport with us.</strong>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="accordion-item">
                                                <h2 class="accordion-header" id="headingFive">
                                                    <button class="accordion-button collapsed" type="button"
                                                        data-bs-toggle="collapse" data-bs-target="#collapseFive"
                                                        aria-expanded="false" aria-controls="collapseFive">
                                                        Can I track the progress of my vehicle transport?
                                                    </button>
                                                </h2>
                                                <div id="collapseFive" class="accordion-collapse collapse"
                                                    aria-labelledby="headingFive" data-bs-parent="#accordionExample">
                                                    <div class="accordion-body">
                                                        <strong>Yes, you can track the status of your vehicle transport
                                                            through our online
                                                            tracking system or by contacting our customer service team
                                                            for updates.</strong>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="accordion-item">
                                                <h2 class="accordion-header" id="headingSix">
                                                    <button class="accordion-button collapsed" type="button"
                                                        data-bs-toggle="collapse" data-bs-target="#collapseSix"
                                                        aria-expanded="false" aria-controls="collapseSix">
                                                        How should I prepare my vehicle for shipment?
                                                    </button>
                                                </h2>
                                                <div id="collapseSix" class="accordion-collapse collapse"
                                                    aria-labelledby="headingSix" data-bs-parent="#accordionExample">
                                                    <div class="accordion-body">
                                                        <strong>Be sure to wash your vehicle, remove all personal
                                                            belongings, mark existing
                                                            damage, ensure the gas tank is not over a quarter full, and
                                                            turn off your
                                                            alarms. We'll email more detailed preparation instructions
                                                            once you book your
                                                            transport.</strong>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="accordion-item">
                                                <h2 class="accordion-header" id="headingSeven">
                                                    <button class="accordion-button collapsed" type="button"
                                                        data-bs-toggle="collapse" data-bs-target="#collapseSeven"
                                                        aria-expanded="false" aria-controls="collapseSeven">
                                                        Can I carry personal items in my vehicle?
                                                    </button>
                                                </h2>
                                                <div id="collapseSeven" class="accordion-collapse collapse"
                                                    aria-labelledby="headingSeven" data-bs-parent="#accordionExample">
                                                    <div class="accordion-body">
                                                        <strong>We do not suggest that you leave personal items inside
                                                            the vehicle during
                                                            transport. Our insurance doesn't cover personal items; also,
                                                            they may shift
                                                            during transit and cause damage.</strong>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="accordion-item">
                                                <h2 class="accordion-header" id="headingEight">
                                                    <button class="accordion-button collapsed" type="button"
                                                        data-bs-toggle="collapse" data-bs-target="#collapseEight"
                                                        aria-expanded="false" aria-controls="collapseEight">
                                                        What kinds of transport services do you offer?
                                                    </button>
                                                </h2>
                                                <div id="collapseEight" class="accordion-collapse collapse"
                                                    aria-labelledby="headingEight" data-bs-parent="#accordionExample">
                                                    <div class="accordion-body">
                                                        <strong>We offer both open and enclosed transport services. The
                                                            open transport is
                                                            more cost-effective and suitable for most vehicles, while
                                                            the enclosed transport
                                                            provides extra protection, especially for luxury, classic,
                                                            or high-value
                                                            vehicles.</strong>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="accordion-item">
                                                <h2 class="accordion-header" id="headingNine">
                                                    <button class="accordion-button collapsed" type="button"
                                                        data-bs-toggle="collapse" data-bs-target="#collapseNine"
                                                        aria-expanded="false" aria-controls="collapseNine">
                                                        What if my vehicle is damaged during transportation?
                                                    </button>
                                                </h2>
                                                <div id="collapseNine" class="accordion-collapse collapse"
                                                    aria-labelledby="headingNine" data-bs-parent="#accordionExample">
                                                    <div class="accordion-body">
                                                        <strong>In case your vehicle gets damaged during transit, our
                                                            insurance covers the
                                                            cost of repair. You need to document the damage and contact
                                                            our claims
                                                            department to initiate the process.</strong>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="accordion-item">
                                                <h2 class="accordion-header" id="headingTen">
                                                    <button class="accordion-button collapsed" type="button"
                                                        data-bs-toggle="collapse" data-bs-target="#collapseTen"
                                                        aria-expanded="false" aria-controls="collapseTen">
                                                        Am I able to choose a specific pick-up and delivery date?
                                                    </button>
                                                </h2>
                                                <div id="collapseTen" class="accordion-collapse collapse"
                                                    aria-labelledby="headingTen" data-bs-parent="#accordionExample">
                                                    <div class="accordion-body">
                                                        <strong>We can accommodate flexible scheduling based on your
                                                            needs. If specific
                                                            dates are possible, we will provide a pick-up and delivery
                                                            window for the most
                                                            efficient transport service. Please discuss any requirements
                                                            with our scheduling
                                                            team when you book.</strong>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade active show" id="pills-profile" role="tabpanel"
                            aria-labelledby="pills-profile-tab">
                            <div class="row">
                                <div class="col-lg-12" data-sal="slide-right" data-sal-duration="800">
                                    <div class="tj-faq-area">
                                        <div class="accordion" id="accordionExample">
                                            <div class="accordion-item">
                                                <h2 class="accordion-header" id="headingOne">
                                                    <button class="accordion-button" type="button"
                                                        data-bs-toggle="collapse" data-bs-target="#collapseOne-1"
                                                        aria-expanded="true" aria-controls="collapseOne-1">
                                                        What equipment do you transport?
                                                    </button>
                                                </h2>
                                                <div id="collapseOne-1" class="accordion-collapse collapse show"
                                                    aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                                    <div class="accordion-body">
                                                        <strong>We ship a variety of heavy equipment from construction
                                                            machinery and agricultural
                                                            equipment to industrial machines, fork-lifts, cranes,
                                                            bulldozers, Excavator and more.</strong>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="accordion-item">
                                                <h2 class="accordion-header" id="headingTwo">
                                                    <button class="accordion-button collapsed" type="button"
                                                        data-bs-toggle="collapse" data-bs-target="#collapseTwo"
                                                        aria-expanded="false" aria-controls="collapseTwo">
                                                        How can I get a quote to ship my equipment?
                                                    </button>
                                                </h2>
                                                <div id="collapseTwo" class="accordion-collapse collapse"
                                                    aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                                    <div class="accordion-body">
                                                        <strong>You can get a quote by visiting our website and filling
                                                            out the online quote form with details about your equipment
                                                            and transport requirements or by calling on our direct
                                                            number 1 (844) 474-4721.</strong>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="accordion-item">
                                                <h2 class="accordion-header" id="headingThree">
                                                    <button class="accordion-button collapsed" type="button"
                                                        data-bs-toggle="collapse" data-bs-target="#collapseThree"
                                                        aria-expanded="false" aria-controls="collapseThree">
                                                        Is my equipment insured during transport?
                                                    </button>
                                                </h2>
                                                <div id="collapseThree" class="accordion-collapse collapse"
                                                    aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                                    <div class="accordion-body">
                                                        <strong>Yes, your equipment is fully insured during transit. We
                                                            have insurance that covers any possible damage during
                                                            transit.</strong>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="accordion-item">
                                                <h2 class="accordion-header" id="headingFour">
                                                    <button class="accordion-button collapsed" type="button"
                                                        data-bs-toggle="collapse" data-bs-target="#collapseFour"
                                                        aria-expanded="false" aria-controls="collapseFour">
                                                        How long does it take to transport heavy equipment?
                                                    </button>
                                                </h2>
                                                <div id="collapseFour" class="accordion-collapse collapse"
                                                    aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                                                    <div class="accordion-body">
                                                        <strong>The time taken for transportation may vary on the
                                                            distance and the route. Cross-country transportation takes
                                                            approximately 3-10 days, and short-distance transport could
                                                            take about 1-5 days. We will give you a better estimate at
                                                            the time of your booking.</strong>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="accordion-item">
                                                <h2 class="accordion-header" id="headingFive">
                                                    <button class="accordion-button collapsed" type="button"
                                                        data-bs-toggle="collapse" data-bs-target="#collapseFive"
                                                        aria-expanded="false" aria-controls="collapseFive">
                                                        Can I track my heavy equipment transport status?
                                                    </button>
                                                </h2>
                                                <div id="collapseFive" class="accordion-collapse collapse"
                                                    aria-labelledby="headingFive" data-bs-parent="#accordionExample">
                                                    <div class="accordion-body">
                                                        <strong>Yes. You can track your equipment transport status by
                                                            our online tracking system or by contacting our customer
                                                            service team for updates on the same.</strong>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="accordion-item">
                                                <h2 class="accordion-header" id="headingSix">
                                                    <button class="accordion-button collapsed" type="button"
                                                        data-bs-toggle="collapse" data-bs-target="#collapseSix"
                                                        aria-expanded="false" aria-controls="collapseSix">
                                                        How should I get my equipment ready for transport?
                                                    </button>
                                                </h2>
                                                <div id="collapseSix" class="accordion-collapse collapse"
                                                    aria-labelledby="headingSix" data-bs-parent="#accordionExample">
                                                    <div class="accordion-body">
                                                        <strong>Make sure your equipment is clean, inspect it for
                                                            existing damage, tie loose parts down, and drain fluids
                                                            where applicable. Detailed preparation instructions will be
                                                            provided when you book your transport.</strong>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="accordion-item">
                                                <h2 class="accordion-header" id="headingSeven">
                                                    <button class="accordion-button collapsed" type="button"
                                                        data-bs-toggle="collapse" data-bs-target="#collapseSeven"
                                                        aria-expanded="false" aria-controls="collapseSeven">
                                                        Will I need any special permits to haul heavy equipment?
                                                    </button>
                                                </h2>
                                                <div id="collapseSeven" class="accordion-collapse collapse"
                                                    aria-labelledby="headingSeven" data-bs-parent="#accordionExample">
                                                    <div class="accordion-body">
                                                        <strong>This may involve special permits, depending on the size
                                                            and weight of equipment. Our logistic personnel will handle
                                                            all permits required to ensure a smooth transport
                                                            process.</strong>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="accordion-item">
                                                <h2 class="accordion-header" id="headingEight">
                                                    <button class="accordion-button collapsed" type="button"
                                                        data-bs-toggle="collapse" data-bs-target="#collapseEight"
                                                        aria-expanded="false" aria-controls="collapseEight">
                                                        What kind of transport services do we offer for heavy equipment?
                                                    </button>
                                                </h2>
                                                <div id="collapseEight" class="accordion-collapse collapse"
                                                    aria-labelledby="headingEight" data-bs-parent="#accordionExample">
                                                    <div class="accordion-body">
                                                        <strong>We have a fleet of flatbed trailers, step-deck trailers,
                                                            lowboy trailers, and specialized carriers to transport the
                                                            different kinds and sizes of heavy equipment.</strong>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="accordion-item">
                                                <h2 class="accordion-header" id="headingNine">
                                                    <button class="accordion-button collapsed" type="button"
                                                        data-bs-toggle="collapse" data-bs-target="#collapseNine"
                                                        aria-expanded="false" aria-controls="collapseNine">
                                                        What if my equipment is damaged during transport?
                                                    </button>
                                                </h2>
                                                <div id="collapseNine" class="accordion-collapse collapse"
                                                    aria-labelledby="headingNine" data-bs-parent="#accordionExample">
                                                    <div class="accordion-body">
                                                        <strong>If your equipment is damaged during transport—which
                                                            rarely happens—our insurance will pay for repairs. You will
                                                            be required to document the damage and then inform our
                                                            claims department to get the process underway.</strong>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="accordion-item">
                                                <h2 class="accordion-header" id="headingTen">
                                                    <button class="accordion-button collapsed" type="button"
                                                        data-bs-toggle="collapse" data-bs-target="#collapseTen"
                                                        aria-expanded="false" aria-controls="collapseTen">
                                                        Am I allowed to request a specific pick-up and delivery date for
                                                        my heavy equipment?
                                                    </button>
                                                </h2>
                                                <div id="collapseTen" class="accordion-collapse collapse"
                                                    aria-labelledby="headingTen" data-bs-parent="#accordionExample">
                                                    <div class="accordion-body">
                                                        <strong>We have flexible scheduling to fit your needs. While we
                                                            do our best to work with specific dates, we also want to
                                                            give you the best transport service possible by allowing for
                                                            a window of pick-up and delivery. Any special requirements
                                                            must be discussed with our scheduling team.</strong>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="pills-contact" role="tabpanel"
                            aria-labelledby="pills-contact-tab">
                            <div class="row">
                                <div class="col-lg-12" data-sal="slide-right" data-sal-duration="800">
                                    <div class="tj-faq-area">
                                        <div class="accordion" id="accordionExample">
                                            <div class="accordion-item">
                                                <h2 class="accordion-header" id="headingOne">
                                                    <button class="accordion-button" type="button"
                                                        data-bs-toggle="collapse" data-bs-target="#collapseOne-2"
                                                        aria-expanded="true" aria-controls="collapseOne-2">
                                                        What type of freight do you move?
                                                    </button>
                                                </h2>
                                                <div id="collapseOne-2" class="accordion-collapse collapse show"
                                                    aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                                    <div class="accordion-body">
                                                        <strong>We transport general cargo, hazmat, reefer shipments,
                                                            oversized loads, and special cargo.</strong>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="accordion-item">
                                                <h2 class="accordion-header" id="headingTwo">
                                                    <button class="accordion-button collapsed" type="button"
                                                        data-bs-toggle="collapse" data-bs-target="#collapseTwo"
                                                        aria-expanded="false" aria-controls="collapseTwo">
                                                        How do I get a freight quote?
                                                    </button>
                                                </h2>
                                                <div id="collapseTwo" class="accordion-collapse collapse"
                                                    aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                                    <div class="accordion-body">
                                                        <strong>You can receive a quote by using the online quote form
                                                            on our website after filling in the details of what you need
                                                            to ship or by contacting our direct number 1 (844)
                                                            474-4721.</strong>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="accordion-item">
                                                <h2 class="accordion-header" id="headingThree">
                                                    <button class="accordion-button collapsed" type="button"
                                                        data-bs-toggle="collapse" data-bs-target="#collapseThree"
                                                        aria-expanded="false" aria-controls="collapseThree">
                                                        Is my freight insured during transport?
                                                    </button>
                                                </h2>
                                                <div id="collapseThree" class="accordion-collapse collapse"
                                                    aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                                    <div class="accordion-body">
                                                        <strong>Yes, your freight is fully insured during
                                                            transportation. Our insurance covers any damage or loss that
                                                            your freight may incur during transit.</strong>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="accordion-item">
                                                <h2 class="accordion-header" id="headingFour">
                                                    <button class="accordion-button collapsed" type="button"
                                                        data-bs-toggle="collapse" data-bs-target="#collapseFour"
                                                        aria-expanded="false" aria-controls="collapseFour">
                                                        How long does freight shipping take?
                                                    </button>
                                                </h2>
                                                <div id="collapseFour" class="accordion-collapse collapse"
                                                    aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                                                    <div class="accordion-body">
                                                        <strong>Shipping times are decided by the distances, modes of
                                                            transport, and routes to be chosen. It can vary anywhere
                                                            between 3 to 10 days for shipment. We can go more precisely
                                                            into it once you book your shipment with us.</strong>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="accordion-item">
                                                <h2 class="accordion-header" id="headingFive">
                                                    <button class="accordion-button collapsed" type="button"
                                                        data-bs-toggle="collapse" data-bs-target="#collapseFive"
                                                        aria-expanded="false" aria-controls="collapseFive">
                                                        Will I be able to track my freight shipment?
                                                    </button>
                                                </h2>
                                                <div id="collapseFive" class="accordion-collapse collapse"
                                                    aria-labelledby="headingFive" data-bs-parent="#accordionExample">
                                                    <div class="accordion-body">
                                                        <strong>Yes, you can track your shipment with our provided
                                                            online tracking system or by contacting our customer service
                                                            team to have someone look up the status for you.</strong>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="accordion-item">
                                                <h2 class="accordion-header" id="headingSix">
                                                    <button class="accordion-button collapsed" type="button"
                                                        data-bs-toggle="collapse" data-bs-target="#collapseSix"
                                                        aria-expanded="false" aria-controls="collapseSix">
                                                        How must I prepare my freight for shipment?
                                                    </button>
                                                </h2>
                                                <div id="collapseSix" class="accordion-collapse collapse"
                                                    aria-labelledby="headingSix" data-bs-parent="#accordionExample">
                                                    <div class="accordion-body">
                                                        <strong>Make sure your freight is properly packaged, labeled
                                                            with proper documentation, and items are in compliance with
                                                            the regulations for shipment. For hazmat shipments, provide
                                                            the proper MSDS and labeling of items. Complete preparation
                                                            instructions will be provided once you have booked your
                                                            shipment.</strong>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="accordion-item">
                                                <h2 class="accordion-header" id="headingSeven">
                                                    <button class="accordion-button collapsed" type="button"
                                                        data-bs-toggle="collapse" data-bs-target="#collapseSeven"
                                                        aria-expanded="false" aria-controls="collapseSeven">
                                                        Do you handle hazardous materials, aka hazmat, shipments?
                                                    </button>
                                                </h2>
                                                <div id="collapseSeven" class="accordion-collapse collapse"
                                                    aria-labelledby="headingSeven" data-bs-parent="#accordionExample">
                                                    <div class="accordion-body">
                                                        <strong>Yes, we are certified to handle and transport hazardous
                                                            materials. Our team is trained in handling and transporting
                                                            hazmat shipments safely and in compliance with
                                                            regulations.</strong>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="accordion-item">
                                                <h2 class="accordion-header" id="headingEight">
                                                    <button class="accordion-button collapsed" type="button"
                                                        data-bs-toggle="collapse" data-bs-target="#collapseEight"
                                                        aria-expanded="false" aria-controls="collapseEight">
                                                        Do you provide refrigerated shipment services?
                                                    </button>
                                                </h2>
                                                <div id="collapseEight" class="accordion-collapse collapse"
                                                    aria-labelledby="headingEight" data-bs-parent="#accordionExample">
                                                    <div class="accordion-body">
                                                        <strong>Yes, we do. Our reefer trailers come fitted with
                                                            advanced temperature control systems to make sure your goods
                                                            are kept within the required temperature during
                                                            transit.</strong>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="accordion-item">
                                                <h2 class="accordion-header" id="headingNine">
                                                    <button class="accordion-button collapsed" type="button"
                                                        data-bs-toggle="collapse" data-bs-target="#collapseNine"
                                                        aria-expanded="false" aria-controls="collapseNine">
                                                        What transportation services do you offer in freight shipping?
                                                    </button>
                                                </h2>
                                                <div id="collapseNine" class="accordion-collapse collapse"
                                                    aria-labelledby="headingNine" data-bs-parent="#accordionExample">
                                                    <div class="accordion-body">
                                                        <strong>We have a variety of transport services that include
                                                            full truckload, less than truckload, specialized carriers
                                                            like hazmat and reefer shipments.</strong>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="accordion-item">
                                                <h2 class="accordion-header" id="headingTen">
                                                    <button class="accordion-button collapsed" type="button"
                                                        data-bs-toggle="collapse" data-bs-target="#collapseTen"
                                                        aria-expanded="false" aria-controls="collapseTen">
                                                        What if my freight is damaged or lost during transport?
                                                    </button>
                                                </h2>
                                                <div id="collapseTen" class="accordion-collapse collapse"
                                                    aria-labelledby="headingTen" data-bs-parent="#accordionExample">
                                                    <div class="accordion-body">
                                                        <strong>In case of unlikely eventualities of damages or loss
                                                            during transportation, our insurance shall cover such loss
                                                            or damage. You will need to document the damage and then
                                                            contact our claims department to initiate the
                                                            process.</strong>
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
        </div>
    </div>
</section>
@endsection