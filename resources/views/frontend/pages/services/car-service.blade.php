@extends('frontend.layouts.app')
@section('title', 'ShipA1 - Fast State-to-State Car Shipping in USA')
@section('meta_description',
    'Take advantage of ShipA1’s all-in-one delivery types and customized shipping services. Hire us
    and transport your auto vehicles all over the USA.')
@section('canonical')
    <link rel="canonical" href="{{ url()->current() }}">
@endsection
@section('content')
    <script type="application/ld+json">
    {
  "@context": "https://schema.org",
  "@type": "Service",
  "name": "Car Transport Service",
  "description": "ShipA1 offers fast, secure, and nationwide car transport services across the USA with multiple trailer options. Customers enjoy door-to-door delivery, real-time tracking, and full insurance coverage.",
  "provider": {
    "@type": "Organization",
    "name": "ShipA1",
    "url": "https://www.update.shipa1.com/transport-services/car",
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
  "serviceType": "Car Transportation Service",
  "areaServed": {
    "@type": "Place",
    "name": "USA"
  },
  "offers": {
    "@type": "AggregateOffer",
    "url": "https://www.update.shipa1.com/transport-services/car",
    "priceCurrency": "USD",
    "eligibleRegion": {
      "@type": "Place",
      "name": "USA"
    },
    "lowPrice": 199
  },
  "sameAs": "https://www.facebook.com/shipa1"
}

</script>
    <script type="application/ld+json">
    {
  "@context": "https://schema.org",
  "@type": "FAQPage",
  "mainEntity": [
    {
      "@type": "Question",
      "name": "Does ShipA1 provide fast car transport services in major U.S. cities?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "ShipA1’s team is operational across all states of the US. It allows us to be ready for each coming car shipping order. We believe in quick and customer-friendly transport assistance."
      }
    },
    {
      "@type": "Question",
      "name": "How does ShipA1 ensure secure car transport services?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "All our shippers, carriers, brokers, and consignees are certified and experienced for this regular job of car shipping. They are qualified experts, taking care of each consignment with proper care and attention."
      }
    },
    {
      "@type": "Question",
      "name": "How can I get affordable car shipping services from ShipA1?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Simply, go for city-to-city, open car transportation service. Or just reach out to our professional customer support team, share the requirements/budget, and get a suitable quote."
      }
    },
    {
      "@type": "Question",
      "name": "How long does ShipA1 take to drop off cars at shared destinations?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "At ShipA1, our carriers and drivers mostly take two days on average to drop off cars at the shared destinations."
      }
    },
    {
      "@type": "Question",
      "name": "What is the average cost of state-to-state car shipping in the USA?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "The cost of car shipping in the USA depends on the load, distance, type of service, and your selected transport agency. At ShipA1, state-to-state deliveries typically take five to seven days."
      }
    }
  ]
}


</script>
    <style>
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

        .custom-hover-flip {
            position: relative;
            display: inline-block;
            perspective: 1000px;
        }

        .custom-hover-flip img {
            width: 100%;
            display: block;
            transition: transform 0.6s ease;
            transform-style: preserve-3d;
        }

        .custom-hover-flip:hover img {
            transform: rotateY(180deg);
        }

        .overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5);
            display: flex;
            justify-content: center;
            align-items: center;
            opacity: 0;
            transition: opacity 0.3s ease;
            border-radius: 30px;
        }

        .custom-hover-flip:hover .overlay {
            opacity: 1;
        }

        .flip-button {
            background-color: #ff6347;
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            text-decoration: none;
            font-size: 16px;
            transition: opacity 0.3s ease;
            z-index: 1;
            opacity: 1;
        }

        .full-width {
            width: 100%;
        }

        .title-2 {
            color: #8fc445;
        }

        .desc-2 {
            color: white;
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

        .services-sec {
            color: #8fc445;
            font-weight: 700;
        }

        .underline {
            color: #8fc445;
            border: none;
            /* Remove default border */
            border-top: 8px solid #8fc445;
            /* Set the thickness and color */
            width: 50%;
            border-top-left-radius: 45px;
            border-bottom-right-radius: 50px;
            opacity: 1;
        }

        .top-notch-parent {
            display: grid;
            grid-template-columns: auto auto auto;
            /* background-color: dodgerblue; */
            padding: 10px;
            gap: 10px;
            text-align: center;
        }

        @media only screen and (max-width: 1000px) {
            .top-notch-parent {
                grid-template-columns: auto auto;
            }
        }

        @media only screen and (max-width: 560px) {
            .top-notch-parent {
                grid-template-columns: auto;
            }
        }

        .top-notch-childs {
            background-color: #f1f1f1;
            border: none;
            border-radius: 5px;
            padding: 50px 10px;
            text-align: center;
        }

        .top-notch-childs:hover {
            transition: 2s;
            border: 1px solid #062e39;

        }

        .top-notch-childs div {
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .top-notch-childs div div {
            border: none;
            border-radius: 50%;
            width: 50px;
            height: 50px;
            background-color: #8FC445;
            display: flex;
            justify-content: center;
            align-items: center;
            font-size: 25px;
            color: #062e39;
        }



        .top-notch-parent2 {
            display: grid;
            grid-template-columns: auto auto auto;
            /* background-color: dodgerblue; */
            padding: 10px;
            gap: 10px;
            text-align: center;
        }

        @media only screen and (max-width: 1000px) {
            .top-notch-parent2 {
                grid-template-columns: auto auto;
            }
        }

        @media only screen and (max-width: 560px) {
            .top-notch-parent2 {
                grid-template-columns: auto;
            }
        }

        .top-notch-childs2 {
            /* background-color: #f1f1f1; */
            border: none;
            border-radius: 5px;
            padding: 50px 10px;
            text-align: center;
        }



        .top-notch-childs2 div {
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .top-notch-childs2 div div {
            border: none;
            border-radius: 50%;
            width: 50px;
            height: 50px;
            background-color: #8FC445;
            display: flex;
            justify-content: center;
            align-items: center;
            font-size: 25px;
            color: #062e39;
        }
    </style>
    <section class="breadcrumb-wrapper" data-bg-image="{{ asset('frontend/images/banner/all-cover-banner.webp') }}">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-content">
                        <h1 class="breadcrumb-title ml-4 fs-2 w-75 ">Affordable Car Transportation Services from State to
                            State
                            in The USA – Fast & Secure Shipping</h1>
                        <h2 class="breadcrumb-title ml-4 fs-6 w-75 mb-5">
                            Need low cost car shipping services in USA? Stop your search. Hire ShipA1 for reliable cross
                            country and state to state car transport.
                        </h2>

                        <div class="breadcrumb-link">
                            <span>
                                <a href="{{ route('welcome') }}">
                                    <span>Home</span>
                                </a>
                            </span>
                            >
                            <span>
                                <span> Car</span>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- <section>
        <div class="container">
            <div class="row full-width mt-4 ms-1">
                <div class="col-12 mt-5">
                    <h2 class="fs-4 text-center">We Are Acclaimed for Swift & Secure Car Transport Services in the USA </h2>
                    <p class=" text-center">
                        Do you need fast and affordable car transport services in the USA right away? Guess what? We have
                        some amazing plans
                        for you to prevent all seasonal struggles in all fifty states of the USA. Our team is open to a
                        friendly negotiation;
                        otherwise, our active customer support team is here to suggest the best open, enclosed, flatbed, and
                        drop-dreck
                        <a href="{{ route('services') }}" class="alllinks"> transportation options </a>. Just say the magical words “I need
                        ShipA1’s expert carriers for car transport
                        services near me” and witness the magic of speedy and reliable vehicle transportation support.
                    </p>
                </div>
            </div>
        </div>
    </section> --}}
    <section class="tj-blog-standard pb-0 pt-4">
        <div class="container my-5">
            <div class="row">

                <div class="col-lg-7 d-flex align-items-center">
                    <div class="">
                        <div class="">
                            <h3 class="">We Are Acclaimed for Swift & Secure Car Transport Services in the USA </h3>
                            <p class="text-justify">
                                Do you need fast and affordable car transport services in the USA right away? Guess what? We
                                have
                                some amazing plans
                                for you to prevent all seasonal struggles in all fifty states of the USA. Our team is open
                                to a
                                friendly negotiation;
                                otherwise, our active customer support team is here to suggest the best open, enclosed,
                                flatbed, and
                                drop-dreck
                                <a href="{{ route('services') }}" class="alllinks"> transportation options </a>. Just say
                                the magical words “I need
                                ShipA1’s expert carriers for car transport
                                services near me” and witness the magic of speedy and reliable vehicle transportation
                                support.
                            </p>
                        </div>
                        {{-- <div class="image-container">
                            <img class="img-fluid" src="{{ asset('frontend/images/project/CAR-SERVICE-MAIN.webp') }}"
                                loading="lazy" alt="Motorcyle Transport">
                        </div>
                        <br> --}}
                        <div class="text-container ">
                            <h3>The First Stop Platform of Car Shipping Services</h3>
                            <p class="text-justify">Ship A1, your go-to partner in transportation services! We prioritize the needs of our
                                customers
                                and
                                ensure their shipping services are as smooth as possible. With over 16 years of experience,
                                we
                                can
                                proudly count ourselves as one of the leading transportation companies. <br>
                                Ready to ship your car to a new destination? Say no more, Ship A1 offers the best car
                                transportation
                                services, as well as equipped with advanced trailers for your vehicle.
                            </p>
                        </div>
                        {{-- <div class="row mt-4">
                            <div class="col-6 text-center">
                                <h4><i class="fas fa-ship" style="color: var(--tj-primary-color);"></i> Successful Shipment
                                </h4>
                                <div class="review-counter fs-2">
                                    <span id="counter-value" class="ms-3" data-target="318"
                                        style="color: var(--tj-secondary-color);">0</span>k+
                                </div>
                            </div>
                            <div class="col-6 text-center">
                                <h4><i class="fas fa-smile" style="color: var(--tj-primary-color);"></i> Satisfied Clients
                                </h4>
                                <div class="review-counter fs-2">
                                    <span id="counter-value-2" class="ms-3 " data-target="289"
                                        style="color: var(--tj-secondary-color);">0</span>k+
                                </div>
                            </div>
                        </div> --}}
                        <br>
                         <div class="image-container">
                            <img class=" " style="border-radius: 25px ; height:355px; width:100%; object-fit:cover;" src="{{ asset('frontend/images/project/new-car-services.png') }}"
                                loading="lazy" alt="Car Transport">
                            {{-- <img class="img-fluid" src="https://airforshare.com/files/Gncraq.png"
                                loading="lazy" alt="Motorcyle Transport"> --}}
                        </div>
                        
                    </div>
                </div>
                <div class="col-lg-5 ">
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
                    <div class="tj-input-form w-100" data-bg-image="">
                        <h4 class="title text-center">Car Quote!</h4>
                        <form action="{{ route('submit.quote') }}" method="post" class="rd-mailform validate-form"
                            novalidate id="calculatePriceFrom" data-parsley-validate data-parsley-errors-messages-disabled
                            enctype="multipart/form-data">
                            @csrf
                            @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                            <input type="hidden" name="vehicle_opt" value="vehicle" hidden>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="input-form">
                                        <label class="d-block">Name:</label>
                                        <input type="text" id="name" name="name" placeholder="Name"
                                            required="" />
                                        <small id="errName" class="err-style"></small>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="input-form">
                                        <label class="d-block">Phone:</label>
                                        <input class="ophone" type="tel" id="phone" name="phone"
                                            placeholder="Number" required />
                                        <small id="errPhone" class="err-style"></small>
                                        <input type="hidden" name="country_code" id="country_code" />
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="input-form">
                                        <label class="d-block">Email:</label>
                                        <input type="email" id="email" name="email" placeholder="Email "
                                            required="" />
                                        <small id="errEmail" class="err-style"></small>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="input-form">
                                        <label class="d-block mb-0"> Pickup Location:</label>
                                        <input type="text" id="pickup-location" name="origin" placeholder=""
                                            required="" />
                                        <small id="errOLoc" class="err-loc"></small>
                                        <ul class="suggestions suggestionsTwo"></ul>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="input-form">
                                        <label class="d-block  mb-0"> Delivery Location:</label>
                                        <input type="text" id="delivery-location" name="destination" placeholder=""
                                            required="" />
                                        <small id="errDLoc" class="err-loc"></small>
                                        <ul class="suggestions suggestionsTwo"></ul>
                                    </div>
                                </div>
                            </div>
                            <div class="vehicle-info">
                                <div class="row select-bm">
                                    <div class="col-md-12 text-center">
                                        <h4 class="text-white">Car Information</h4>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="input-form tj-select">
                                            <label>Year</label>
                                            <div class="dropdown">
                                                <input class="form-control dropdown-toggle year" type="text"
                                                    name="year[]" id="year" placeholder="Select Year"
                                                    data-bs-toggle="dropdown" aria-expanded="false" required>
                                                <ul class="dropdown-menu year-dropdown" aria-labelledby="year">
                                                    <li><a class="dropdown-item">Select Year</a></li>
                                                    @php
                                                        $currentYear = date('Y');
                                                        for ($year = $currentYear; $year >= 1936; $year--) {
                                                            echo "<li><a class='dropdown-item' data-value='$year'>$year</a></li>";
                                                        }
                                                    @endphp
                                                </ul>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="input-form tj-select">
                                            <label>Make</label>
                                            <div class="dropdown">
                                                <input class="form-control dropdown-toggle make" name="make[]" required
                                                    type="text" id="make" placeholder="Select Make"
                                                    data-bs-toggle="dropdown" aria-expanded="false">
                                                <ul class="dropdown-menu make-dropdown" aria-labelledby="make">
                                                    <li><a class="dropdown-item">Select Make</a></li>
                                                    @foreach ($makes as $make)
                                                        <li><a class="dropdown-item"
                                                                data-value="{{ $make->make }}">{{ $make->make }}</a>
                                                        </li>
                                                    @endforeach
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="input-form tj-select model-div">
                                            <label>Model</label>
                                            <div class="dropdown">
                                                <input class="form-control dropdown-toggle model-input" name="model[]"
                                                    type="text" id="model" required placeholder="Select Model"
                                                    data-bs-toggle="dropdown" aria-expanded="false">
                                                <ul class="dropdown-menu model-dropdown" aria-labelledby="model">
                                                    <li><a class="dropdown-item" href="#">Select Model</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="trailer_type" class="text-white">Select Trailer Type</label>
                                        <select class=" " id="trailer_type" name="trailer_type">
                                            <option value="1" selected>Open Trailer</option>
                                            <option value="2">Enclosed Trailer</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="condition" class="text-white">Condition</label>
                                        <select class=" " id="condition" name="condition[]">
                                            <option value="1" selected>Running</option>
                                            <option value="2">Non Running</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <a class="add-car-1" id="addVehicleBtn"><i class="fa fa-plus"></i> Add Vehicle</a>
                            <div id="vehicles-container">
                            </div>
                            <div class="row mt-2">
                                <di class="col-md-6">
                                    <div class="form-group">
                                        <input class="form-check-input " type="checkbox" id="modification"
                                            name="modification" value="1" />
                                        <label class="form-check-label text-white ms-4" for="modification">
                                            Modified?</label>
                                    </div>

                                    <div class="input-form div-modify_info" style="display: none;">
                                        <label class="d-block"> Modification Information:</label>
                                        <input type="text" id="c" name="modify_info"
                                            placeholder="Modification" />
                                    </div>
                                </di>
                                <di class="col-md-6">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="available_at_auction"
                                            name="available_at_auction" value="1" />
                                        <label class="form-check-label text-white" for="available_at_auction">
                                            Auction?</label>
                                    </div>

                                    <div class="input-form div-link mt-3" style="display: none;">
                                        <label class="d-block"> Enter Link:</label>
                                        <input class="form-control" type="url" id="link" name="link"
                                            placeholder="Link" />
                                    </div>
                                </di>
                            </div>
                            <div class="row">
                                <div class="input-form mt-1">
                                    <label class="d-block text-white"> Image:</label>
                                    <input class="form-control image_input" name="image[]" type="file"
                                        accept="image/*" multiple onchange="previewImages(event)">
                                    <div class="image-preview-container" id="imagePreviewContainer"></div>
                                </div>
                            </div>
                            <div class="tj-theme-button text-center mt-3">
                                <button class="tj-submit-btn" type="submit" value="submit">
                                    Calculate Price <i class="fa-light fa-arrow-right"></i>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- <section class="tj-about-section pt-0">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-12 order-sm-1 order-md-1 order-2 d-flex align-items-center justify-content-center sal-animate"
                    data-sal="slide-left" data-sal-duration="800">
                    <div class="mt-4 rounded ">
                        <div class="image-box">
                            <img class="rounded" src="{{ asset('frontend/images/project/car-transport.webp') }}"
                                alt="Image">
                            <div class="overlay">
                                <a href="{{ route('form.vehicle.car') }}">
                                    <button class="tj-submit-btn">
                                        Get Quote <i class="fa fa-arrow-left"></i>
                                    </button>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8 col-md-12 order-sm-2 order-md-2 order-1 d-flex align-items-center justify-content-center sal-animate pt-4 mt-4"
                    data-sal="slide-left" data-sal-duration="800">
                    <div class="about-content-one">
                        <div class="tj-section-heading">
                            <h3 class="sal-animate" data-sal="slide-left" data-sal-duration="800">Quality and
                                Affordability</h3>
                            <p class="desc">
                                Worried about emptying your bank accounts? Ship A1 is here to save the day, with our
                                affordable
                                rates and seamless services our customers can sustain their peace of mind for a long time.
                                Yes!
                                We provide cheaper rates than most companies without compromising the quality of our
                                services. <br>
                                Sounds like you have hit the jackpot! Ship A1 has multiple services that offer you the
                                comfort
                                of affordability like open transport, Terminal to Terminal Shipping as well as bundles of
                                discounts
                                and amazing deals.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8 col-md-12 order-sm-2 order-md-1 order-1 d-flex align-items-center justify-content-center sal-animate pt-4 mt-4"
                    data-sal="slide-left" data-sal-duration="800">
                    <div class="about-content-one">
                        <div class="tj-section-heading">
                            <h3 class="sal-animate" data-sal="slide-left" data-sal-duration="800">Fast and Secure Vehicle
                                Transport with ShipA1</h3>
                            <p class="desc">
                                A sudden change of plans? Emergencies? Urgent shipping? If any of this matches your
                                situation,
                                then you are at the right place. <br>
                                Ship A1 Transport is the trusted choice for expedited auto shipping. With years of
                                experience in the
                                industry, we have perfected our processes to deliver superior service and reliability. Our
                                team of
                                professionals is committed to providing personalized attention to each shipment, ensuring
                                that your
                                vehicle is handled with the utmost care and attention from pickup to delivery.
                                Moreover, we offer competitive rates and transparent pricing, giving you value for your
                                money without compromising quality.
                            </p>
                        </div>

                    </div>
                </div>
                <div class="col-lg-4 col-md-12 order-sm-1 order-md-2 order-2 d-flex align-items-center justify-content-center sal-animate"
                    data-sal="slide-left" data-sal-duration="800">
                    <div class="mt-4 rounded ">
                        <div class="image-box">
                            <img class="rounded" src="{{ asset('frontend/images/project/tuxpi.com.1724264978.webp') }}"
                                alt="Image">
                            <div class="overlay">
                                <a href="{{ route('form.vehicle.car') }}">
                                    <button class="tj-submit-btn">
                                        Get Quote <i class="fa fa-arrow-left"></i>
                                    </button>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row full-width mt-4 ms-1">
                <div class="col-12 custom-style">
                    <h4 class=" text-center">Premium Vehicle Transport Services</h4>
                    <p class=" text-center">ShipA1, with its standard <a class="pp-link-2"
                            href="{{ route('form.vehicle.car') }}">enclosed vehicle shipping,</a> makes it sure that
                        vehicle
                        transport is done in an exquisite and exclusive style. ShipA1 considers that Americans should have
                        the luxury and convenience to indulge in the delight of having their car shipped right at their
                        doors. For that, ShipA1 has devised a plan to provide door to door vehicle transport facility to
                        Americans, and that plan has been executed hundreds of times successfully as well. Through such a
                        facility, ShipA1 believes that it can provide services right at your doorsteps for your comfort. If
                        you do not want to transport it on your doorsteps, then another facility that is provided by the
                        ShipA1 is of the terminals. </p>
                    <div class="tj-theme-button  text-center mt-2">
                        <a class="tj-transparent-btn" href="{{ route('form.vehicle.car') }}">
                            Get Quote
                            <i class="flaticon-right-1"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
    <br>
    @include('partials.cta-section')
    <section class="tj-about-section pt-0">
        <div class="container">
            <div class="row">
                {{-- <div class="col-lg-4 col-md-12 order-sm-1 order-md-1 order-2 d-flex align-items-center justify-content-center sal-animate"
                    data-sal="slide-left" data-sal-duration="800">
                    <div class="mt-4 rounded ">
                        <div class="image-box">
                            <img class="rounded" src="{{ asset('frontend/images/project/car-transport.webp') }}"
                                alt="Image">
                            <div class="overlay">
                                <a href="{{ route('form.vehicle.car') }}">
                                    <button class="tj-submit-btn">
                                        Get Quote <i class="fa fa-arrow-left"></i>
                                    </button>
                                </a>
                            </div>
                        </div>
                    </div>
                </div> --}}
                {{-- <div class="col-lg-8 col-md-12 order-sm-2 order-md-2 order-1 d-flex align-items-center justify-content-center sal-animate pt-4 mt-4"
                    data-sal="slide-left" data-sal-duration="800">
                    <div class="about-content-one">
                        <div class="tj-section-heading">
                            <h3 class="sal-animate" data-sal="slide-left" data-sal-duration="800">Open Trailer Car
                                <span class="services-sec">Shipping Service</span>
                            </h3>
                            <hr class="underline">
                            <p class="desc">
                                The open transportation option in our shipping services is an element of a cost-efficient
                                model. For
                                multiple-vehicle transportation and budget-friendly packages, select the open transport
                                option. <a href="{{ route('home') }}">ShipA1</a> 
                                makes sure to offer proper security for your transporting vehicle all across the USA.
                            </p>
                        </div>
                    </div>
                </div> --}}
            </div>
            <div class="row">
                {{-- <div class="col-lg-8 col-md-12 order-sm-2 order-md-1 order-1 d-flex align-items-center justify-content-center sal-animate pt-4 mt-4"
                    data-sal="slide-left" data-sal-duration="800">
                    <div class="about-content-one">
                        <div class="tj-section-heading">
                            <h3 class="sal-animate" data-sal="slide-left" data-sal-duration="800">Enclosed Trailer Car
                                <span class="services-sec">Shipping Service</span>
                            </h3>
                            <hr class="underline">
                            <p class="desc">
                                Here comes the most protected trailer type offered by ShipA1. Enclosed transport is a
                                universal-satisfactory choice for luxury and high-rated cars. The fully digitally integrated
                                walls and roof make sure to keep your premium automobile protected from sunshine, roadside
                                dust,
                                and other vehicle damage. Enclosed transport is considerable for exotic cars, as prices are
                                a
                                bit higher than regular vehicle shipping trailers.

                            </p>
                        </div>

                    </div>
                </div> --}}
                {{-- <div class="col-lg-4 col-md-12 order-sm-1 order-md-2 order-2 d-flex align-items-center justify-content-center sal-animate"
                    data-sal="slide-left" data-sal-duration="800">
                    <div class="mt-4 rounded ">
                        <div class="image-box">
                            <img class="rounded" src="{{ asset('frontend/images/project/tuxpi.com.1724264978.webp') }}"
                                alt="Image">
                            <div class="overlay">
                                <a href="{{ route('form.vehicle.car') }}">
                                    <button class="tj-submit-btn">
                                        Get Quote <i class="fa fa-arrow-left"></i>
                                    </button>
                                </a>
                            </div>
                        </div>
                    </div>
                </div> --}}
            </div>
        </div>
    </section>

    <section>
        <div class="container py-5  ">
            <h2 class="text-center pb-3">Are ShipA1’s Car Transport Services Top-Notch & Reliable Enough?</h2>
            <div class=" top-notch-parent">
                <div class="top-notch-childs  ">
                    <div>
                        <div><i class="fa-solid fa-clipboard-check"></i></div>
                    </div>
                    <h5>Quick Order Booking</h5>
                    <p>Booking confirmation in minutes!</p>
                </div>
                <div class="top-notch-childs  ">
                    <div>
                        <div><i class="fa-solid fa-file-shield"></i></div>
                    </div>
                    <h5>Secured Shipping</h5>
                    <p>High-tech fully secured trailers.</p>
                </div>
                <div class="top-notch-childs  ">
                    <div>
                        <div><i class="fa-solid fa-people-arrows"></i></div>
                    </div>
                    <h5>Customer-First Perspective</h5>
                    <p>Personalized services for all.</p>
                </div>
            </div>
        </div>
    </section>
    <section class="tj-about-section pt-0">
        <div class="container">
            <div class="row">
                {{-- <div class="col-lg-8 col-md-12 order-sm-2 order-md-2 order-1 d-flex align-items-center justify-content-center sal-animate pt-4 mt-4"
                    data-sal="slide-left" data-sal-duration="800">
                    <div class="about-content-one">
                        <div class="tj-section-heading">
                            <h3 class="sal-animate" data-sal="slide-left" data-sal-duration="800">Drop Deck Trailer Car 
                                <span class="services-sec">Shipping Service</span>
                            </h3>
                            <hr class="underline">
                            <p class="desc">
                                Top choice for taller vehicles. For easy rides of your vehicles, choose the drop deck trailer option.
                                ShipA1 never comes short on the hauler and trailer types. It’s not only about offering the best car shipping
                                services under convincible transportation rates, but also about your custom demands; let us suggest the best 
                                vehicle transportation alternative.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12 order-sm-1 order-md-1 order-2 d-flex align-items-center justify-content-center sal-animate"
                    data-sal="slide-left" data-sal-duration="800">
                    <div class="mt-4 rounded ">
                        <div class="image-box">
                            <img class="rounded" src="{{ asset('frontend/images/project/car-transport.webp') }}"
                                alt="Image">
                            <div class="overlay">
                                <a href="{{ route('form.vehicle.car') }}">
                                    <button class="tj-submit-btn">
                                        Get Quote <i class="fa fa-arrow-left"></i>
                                    </button>
                                </a>
                            </div>
                        </div>
                    </div>
                </div> --}}
            </div>
            <div class="row">
                {{-- <div class="col-lg-4 col-md-12 order-sm-1 order-md-2 order-2 d-flex align-items-center justify-content-center sal-animate"
                    data-sal="slide-left" data-sal-duration="800">
                    <div class="mt-4 rounded ">
                        <div class="image-box">
                            <img class="rounded" src="{{ asset('frontend/images/project/tuxpi.com.1724264978.webp') }}"
                                alt="Image">
                            <div class="overlay">
                                <a href="{{ route('form.vehicle.car') }}">
                                    <button class="tj-submit-btn">
                                        Get Quote <i class="fa fa-arrow-left"></i>
                                    </button>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8 col-md-12 order-sm-2 order-md-1 order-1 d-flex align-items-center justify-content-center sal-animate pt-4 mt-4"
                    data-sal="slide-left" data-sal-duration="800">
                    <div class="about-content-one">
                        <div class="tj-section-heading">
                            <h3 class="sal-animate" data-sal="slide-left" data-sal-duration="800">Flatbed Trailer Car
                                <span class="services-sec">Shipping Service</span>
                            </h3>
                            <hr class="underline">
                            <p class="desc">
                                This trailer type also remains standard, non-enclosed like drop decks and open transport options. But still,
                                go for a Flatbed if you need a suitable auto transport truck for inoperable and oversized vehicles. Let us 
                                know how you want your car shipped. With custom security attachments, we serve with a hundred percent insurance
                                covering support.

                            </p>
                        </div>

                    </div>
                </div> --}}

            </div>
        </div>
    </section>

    {{-- <section class="tj-about-section pt-0 pb-0">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-12 order-sm-2 order-md-1 order-1 d-flex align-items-center justify-content-center sal-animate pt-4 mt-4"
                    data-sal="slide-left" data-sal-duration="800">
                    <div class="about-content-one">
                        <div class="tj-section-heading">
                            <h3 class="sal-animate" data-sal="slide-left" data-sal-duration="800">Find the Ideal Shipping
                                Solution for Your Vehicle</h3>
                            <p class="desc">
                                At Ship A1 you don’t just have 1 option for shipping your vehicle, here you can even
                                find various suitable services! For shipping your luxurious vehicle, you can opt for
                                enclosed trailers as they are made to protect your vehicle from road debris, scratches, the
                                uncertainty of weather conditions, and potential risks. However, if you are searching for
                                something equally cost-effective and safe, go for open transport! We have expedited options
                                and door-to-door delivery for fast vehicle shipping.
                                <br> So, what are you waiting for? Get a free online quote now and enjoy the ride!
                            </p>
                        </div>

                    </div>
                </div>
                <div class="col-lg-4 col-md-12 order-sm-1 order-md-2 order-2 d-flex align-items-center justify-content-center sal-animate"
                    data-sal="slide-left" data-sal-duration="800">
                    <div class="mt-4 rounded ">
                        <div class="image-box">
                            <img class="rounded" src="{{ asset('frontend/images/project/open vs enclosed.webp') }}"
                                alt="Image">
                            <div class="overlay">
                                <a href="{{ route('form.vehicle.car') }}">
                                    <button class="tj-submit-btn">
                                        Get Quote <i class="fa fa-arrow-left"></i>
                                    </button>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
    <section class="tj-testimonial-section">
        <div class="container">
            <div class="row">
                <div class="tj-section-heading text-center">
                    <h5 class="title fs-1">Trailers used for Vehicle Transportation</h5>
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
                                            <img src="{{ asset('frontend/images/slider/Car-Transport-on-Enclosed-trailer.webp') }}"
                                                class="img-fluid rounded-start"
                                                style="height: 100%; background-size: cover; background-position: center;"
                                                alt="...">
                                        </div>
                                        <div class="col-sm-6 d-flex align-items-center justify-content-center">
                                            <div class="card-body tj-section-heading mb-0">
                                                <h5 class="card-title sub-title active-shape">Enclosed Trailer Car Shipping
                                                    Service</h5>
                                                <p class="card-text  text-dark">Here comes the most protected trailer type
                                                    offered by ShipA1. Enclosed transport is a universal-satisfactory choice
                                                    for luxury and high-rated cars. The fully digitally integrated walls and
                                                    roof make sure to keep your premium automobile protected from sunshine,
                                                    roadside dust, and other vehicle damage. Enclosed transport is
                                                    considerable for exotic cars, as prices are a bit higher than regular
                                                    vehicle shipping trailers.</p>
                                                <div class="tj-theme-button mt-2">
                                                    <a class="tj-transparent-btn"
                                                        href="{{ route('frontend.forms.dryvan') }}">
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
                                            <img src="{{ asset('frontend/images/slider/Car-Transportation-1212.webp') }}"
                                                class="img-fluid rounded-start"
                                                style="height: 100%; background-size: cover; background-position: center;"
                                                alt="...">
                                        </div>
                                        <div class="col-sm-6 d-flex align-items-center justify-content-center">
                                            <div class="card-body tj-section-heading mb-0">
                                                <h5 class="card-title sub-title active-shape">Open Trailer Car Shipping
                                                    Service</h5>
                                                <p class="card-text  text-dark">The open transportation option in our
                                                    shipping services is an element of a cost-efficient model. For
                                                    multiple-vehicle transportation and budget-friendly packages, select the
                                                    open transport option. ShipA1 makes sure to offer proper security for
                                                    your transporting vehicle all across the USA.</p>
                                                <div class="tj-theme-button mt-2">
                                                    <a class="tj-transparent-btn"
                                                        href="{{ route('frontend.forms.dryvan') }}">
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
                                <div class="card-2 mb-2">
                                    <div class="row g-0">
                                        <div class="col-sm-6 d-flex align-items-center justify-content-center">
                                            <div class="card-body tj-section-heading mb-0">
                                                <h5 class="card-title sub-title active-shape">Drop Deck Trailer Car
                                                    Shipping Service</h5>
                                                <p class="card-text text-dark">Top choice for taller vehicles. For easy
                                                    rides of your vehicles, choose the drop deck trailer option. ShipA1
                                                    never comes short on the hauler and trailer types. It’s not only about
                                                    offering the best car shipping services under convincible transportation
                                                    rates, but also about your custom demands; let us suggest the best
                                                    vehicle transportation alternative.</p>
                                                <div class="tj-theme-button mt-2">
                                                    <a class="tj-transparent-btn"
                                                        href="{{ route('frontend.forms.dryvan') }}">
                                                        Get Quote
                                                        <i class="flaticon-right-1"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6 d-flex align-items-center justify-content-center">
                                            <img src="{{ asset('frontend/images/slider/Dropdeck Trailer.webp') }}"
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
                                            <div class="card-body tj-section-heading mb-0">
                                                <h5 class="card-title sub-title active-shape">Flatbed Trailer Car Shipping
                                                    Service</h5>
                                                <p class="card-text text-dark">This trailer type also remains standard,
                                                    non-enclosed like drop decks and open transport options. But still, go
                                                    for a Flatbed if you need a suitable auto transport truck for inoperable
                                                    and oversized vehicles. Let us know how you want your car shipped. With
                                                    custom security attachments, we serve with a hundred percent insurance
                                                    covering support.</p>
                                                <div class="tj-theme-button mt-2">
                                                    <a class="tj-transparent-btn"
                                                        href="{{ route('commercial.truck.transport') }}">
                                                        Get Quote
                                                        <i class="flaticon-right-1"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6 d-flex align-items-center justify-content-center">
                                            <img src="{{ asset('frontend/images/slider/Semi-Truck-with-Flatbed-Trailer.webp') }}"
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
    @include('partials.reveiw-small-detail')
    <section>
        <div class="container py-5  ">
            <h2 class="text-center pb-3">Why Get a Car Shipping Quote from Us?</h2>
            <p class="text-center">Find out how ShipA1 is your ideal pick for value-for-money car transport services in the
                USA.</p>
            <div class=" top-notch-parent2">
                <div class="top-notch-childs2  ">
                    <div>
                        <div><i class="fa-solid fa-clipboard-check"></i></div>
                    </div>
                    <h5>24/7 Active Tracking </h5>
                    <p>We offer secure, dependable, and activity-monitored car transport services in the USA and beyond.
                        Expert and trained carriers are one call away!</p>
                </div>
                <div class="top-notch-childs2  ">
                    <div>
                        <div><i class="fa-solid fa-file-shield"></i></div>
                    </div>
                    <h5>Budget Friendly Quotes</h5>
                    <p>All car shipping costs and fares are designed as per your custom demands. <a
                            href="{{ route('contactUs') }}" class="alllinks">Contact us</a> and get your personalized
                        quote today.</p>
                </div>
                <div class="top-notch-childs2  ">
                    <div>
                        <div><i class="fa-solid fa-people-arrows"></i></div>
                    </div>
                    <h5>All-in-One Services</h5>
                    <p>There is a list of features and trailer types for your car, freight cargo, and <a
                            href="{{ route('frontend.pages.services.heavy-service') }} " class="alllinks">heavy
                            transportation</a> needs. shipA1 is an omni-shipping service offering platform.</p>
                </div>
                <div class="top-notch-childs2  ">
                    <div>
                        <div><i class="fa-solid fa-clipboard-check"></i></div>
                    </div>
                    <h5>Door to Door Benefit</h5>
                    <p>Our team is ready to serve you by delivering vehicles to your doorsteps. Follow the simple order
                        booking process and share the pickup/drop-off location today!</p>
                </div>
                <div class="top-notch-childs2  ">
                    <div>
                        <div><i class="fa-solid fa-file-shield"></i></div>
                    </div>
                    <h5>Full Insurance Support </h5>
                    <p>Don’t worry about your vehicle safety; let us handle everything for you. ShipA1 got you covered with
                        careful transportation and strong insurance backup.</p>
                </div>
                <div class="top-notch-childs2  ">
                    <div>
                        <div><i class="fa-solid fa-people-arrows"></i></div>
                    </div>
                    <h5>Remote Shipping Anytime</h5>
                    <p>No physical visits for order booking and confirmation. Similarly, no more stress for the far-off
                        location delivery. Everything happens digitally from your side.</p>
                </div>
            </div>
        </div>
    </section>
    <br>
    <section class="tj-choose-us-section-home">
        <div class="container">
            <div class="row">
                @if (session('success'))
                    <div class="alert alert-success">{{ session('success') }}</div>
                    @endif @if (session('error'))
                        <div class="alert alert-error">{{ session('error') }}</div>
                    @endif
                    <div class="col-lg-6 sal-animate" data-sal="slide-left" data-sal-duration="800">
                        <div class="choose-us-content-1">
                            <div class="tj-section-heading"><span class="sub-title active-shape2">Get Instant quote</span>
                                <h2 class="title fs-3">Get an instant quote in few simple steps</h2>
                                <p class="desc">ShipA1 has pledged to provide all-in-one auto transport solutions to all
                                    its customers and seeks your trust in return of our services.</p>
                            </div>
                            <div class="row">
                                <div class="col-md-4 col-sm-4 col-6">
                                    <div class="tj-icon-box3 text-center"><i class="flaticon flaticon-courier"></i>
                                        <h6 class="title">Optimized Cost</h6>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-4 col-6">
                                    <div class="tj-icon-box3 text-center"><i class="flaticon flaticon-cargo"></i>
                                        <h6 class="title">Delivery on Time</h6>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-4 col-6">
                                    <div class="tj-icon-box3 text-center"><i class="flaticon flaticon-agreement"></i>
                                        <h6 class="title">Safety &amp; Reliability</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6" data-sal="slide-down" data-sal-duration="800">@include('partials.multi-form')
                    </div>
            </div>
        </div>
    </section>


    {{-- <section class="tj-choose-us-section-service-cars-2 mt-4">
        <div class="container why-box">
            <div class="row services">
                <div class="col-12">
                    <h2 class="services-h1">The Premier Unmatched Excellence</h2>
                </div>
                <div class="col-12 col-md-4 mb-4">
                    <div class="card- h-100">
                        <div class="card-body">
                            <h5 class="card-title text-dark">Neoteric Solutions</h5>
                            <p class="card-text text-dark">The unravelment provided to the emerging and the existing
                                problems of auto transport by
                                ShipA1 is through the unique neoteric solutions.</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-4 mb-4">
                    <div class="card- h-100">
                        <div class="card-body">
                            <h5 class="card-title text-dark">Premium Quality</h5>
                            <p class="card-text text-dark">You must expect nothing less than an optimum level service when
                                talking about ShipA1. You
                                will get the best car transport experience with us.</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-4 mb-4">
                    <div class="card- h-100">
                        <div class="card-body">
                            <h5 class="card-title text-dark">Customer-First Perspective</h5>
                            <p class="card-text text-dark">Customers are the center of every decision made by ShipA1. We
                                provide
                                customized solutions to fulfill specific requirements, guaranteeing a smooth and
                                personalized journey.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
    @include('partials.usa-states-map')
    {{-- @include('partials.faqs') --}}
    {{-- <div class="container">
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
                    <button class="faq-toggle">Does ShipA1 offer the fastest car transport services near me? <span>+</span></button>
                    <div class="faq-content">
                        <p>ShipA1’s team is operational across all states of the US. It allows us to be ready for each coming car shipping order. We believe in quick and customer-friendly transport assistance.</p>
                    </div>
                </div>
            
                <div class="faq">
                    <button class="faq-toggle">How does ShipA1 offer the most secure car transport service? <span>+</span></button>
                    <div class="faq-content">
                        <p>All our shippers, carriers, brokers, and consignees are certified and experienced for this regular job of car shipping. They are qualified experts, taking care of each consignment with proper care and attention.</p>
                    </div>
                </div>
            
                <div class="faq">
                    <button class="faq-toggle">How to get cheap car shipping services from ShipA1 <span>+</span></button>
                    <div class="faq-content">
                        <p>Simply, go for city-to-city, open car transportation service. Or just reach out to our professional customer support team, share the requirements/budget, and get a suitable quote.</p>
                    </div>
                </div>
                
                <div class="faq">
                    <button class="faq-toggle">How much time does it take for city-to-city car transport in the USA?<span>+</span></button>
                    <div class="faq-content">
                        <p>Every freight and logistics agency has its own delivery plans. At ShipA1, our carriers and drivers mostly take two days (on average) to drop off cars at the shared destinations.</p>
                    </div>
                </div>
            
                <div class="faq">
                    <button class="faq-toggle">How much does a state-to-state car shipping service cost?<span>+</span></button>
                    <div class="faq-content">
                        <p>The cost of car shipping in the USA depends on the load, distance, type of service, and your selected transport agency. However, if the days are concerned then at ShipA1, it takes five to seven days for a state-to-state car transport delivery.</p>
                    </div>
                </div>
            
            </div>
           </div>
        </div>
    </div> --}}
    @php
        $faqs = [
            [
                'question' => 'Does ShipA1 provide fast car transport services in major U.S. cities? ',
                'answer' =>
                    'ShipA1’s team is operational across all states of the US. It allows us to be ready for each coming car shipping order. We believe in quick and customer-friendly transport assistance.',
            ],
            [
                'question' => 'How does ShipA1 ensure secure car transport services?',
                'answer' =>
                    'All our shippers, carriers, brokers, and consignees are certified and experienced for this regular job of car shipping. They are qualified experts, taking care of each consignment with proper care and attention.',
            ],
            [
                'question' => 'How can I get affordable car shipping services from ShipA1?',
                'answer' =>
                    'Simply, go for city-to-city, open car transportation service. Or just reach out to our professional customer support team, share the requirements/budget, and get a suitable quote.',
            ],
            [
                'question' => 'How much time does it take for city-to-city car transport in the USA?',
                'answer' =>
                    'Every freight and logistics agency has its own delivery plans. At ShipA1, our carriers and drivers mostly take two days (on average) to drop off cars at the shared destinations.',
            ],
            [
                'question' => 'What is the average cost of state-to-state car shipping in the USA?',
                'answer' =>
                    'The cost of car shipping in the USA depends on the load, distance, type of service, and your selected transport agency. However, if the days are concerned then at ShipA1, it takes five to seven days for a state-to-state car transport delivery.',
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
                        <h3 class="slide-title">24/7 Customer Support</h3>
                        <p class="slide-text"> Your concern? Our priority. For ship a1 there is no odd time, we are present
                            24/7 for our customers and provide the best care and support throughout. With an experienced
                            staff,
                            we are here to make your shipping services better!
                        </p>
                    </div>
                </div>
                <div class="col-md-4 col-lg-4 mb-4">
                    <div class="slide text-center">
                        <i class="fas fa-dollar-sign icon-hover-shake" style="font-size: 50px;"></i>

                        <h3 class="slide-title">Affordability:</h3>
                        <p class="slide-text"> No need to fret about the overpriced services, at ship A1 your quality is
                            assured and your
                            amount is sustained because we offer reasonable rates without compromising the quality of your
                            shipment!</p>
                    </div>
                </div>
                <div class="col-md-4 col-lg-4 mb-4">
                    <div class="slide text-center">
                        <i class="fas fa-clock icon-hover-shake" style="font-size: 50px;"></i>
                        <h3 class="slide-title">Convenience:</h3>
                        <p class="slide-text">Your peace of mind is our responsibility, we ensure that the time and amount
                            you invest
                            in us is returned in the form of convenience, and top-notch quality.</p>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-4 col-lg-4 mb-4">
                    <div class="slide text-center">
                        <i class="fas fa-headset icon-hover-shake" style="font-size: 50px;"></i>
                        <h3 class="slide-title"> Door to Door:</h3>
                        <p class="slide-text">We handle every step, picking up the vehicle from your location and
                            delivering it to your
                            destination saving you time and effort</p>
                    </div>
                </div>
                <div class="col-md-4 col-lg-4 mb-4">
                    <div class="slide text-center">
                        <i class="fas fa-shield-alt icon-hover-shake" style="font-size: 50px;"></i>
                        <h3 class="slide-title">Insurance:</h3>
                        <p class="slide-text">Our 100% insured vehicles guarantee the comfort of our customers and allow
                            them to sit
                            back and relax when partnering with Ship A1 knowing that any unforeseen incidents are completely
                            covered.</p>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
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
                        <div class="dropdown">
                            <input class="form-control dropdown-toggle year" type="text"
                                name="year[]" id="year" placeholder="Select Year"
                                data-bs-toggle="dropdown" aria-expanded="false" required>
                            <ul class="dropdown-menu year-dropdown" aria-labelledby="year">
                                <li><a class="dropdown-item">Select Year</a></li>`;
                var currentYear = {{ date('Y') }};
                for (var year = currentYear; year >= 1936; year--) {
                    newVehicleHtml += `<li><a class='dropdown-item' data-value='${year}'>${year}</a></li>`;
                }
                newVehicleHtml += `
                            </ul>
                        </div>
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
                    newVehicleHtml +=
                        `<li><a class="dropdown-item"  data-value="{{ $make->make }}">{{ $make->make }}</a></li>`;
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
            // $(document).on('change', '.year, .make', function() {
            //     var year = $(this).closest('.vehicle-info').find('.year').val();
            //     var makeId = $(this).closest('.vehicle-info').find('.make').val();
            //     alert(makeId);
            //     var vehicleInfo = $(this).closest('.vehicle-info');
            //     if (year && makeId) {
            //         getModel(year, makeId, vehicleInfo);
            //     }
            // });
            $(document).on('click', '.year-dropdown .dropdown-item', function() {
                console.log('okokok');
                var selectedYear = $(this).data('value');
                var vehicleInfo = $(this).closest(
                    '.vehicle-info');
                vehicleInfo.find('.year').val(
                    selectedYear);
            });
            $(document).on('click', '.year, .make', function() {
                var year = $(this).closest('.vehicle-info').find('.year').val();
                var makeId = $(this).closest('.vehicle-info').find('.make').val();
                // alert(makeId);
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
                            modelDropdown.append(
                                '<li><a class="dropdown-item" data-value="">Select Model</a></li>');
                            $.each(response, function(index, model) {
                                modelDropdown.append(
                                    '<li><a class="dropdown-item" data-value="' + model +
                                    '">' + model + '</a></li>');
                            });
                            modelInput.on('focus', function() {
                                modelSelect.empty();
                                modelSelect.append(
                                    '<option value="">Select Model</option>'
                                );
                                modelDropdown.show();
                            });
                            modelInput.on('input', function() {
                                var searchTerm = $(this).val().toLowerCase();
                                modelDropdown.find('li').each(function() {
                                    var itemText = $(this).text().toLowerCase();
                                    if (itemText.indexOf(searchTerm) !== -1 ||
                                        searchTerm === '') {
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
                                modelInput.val(
                                    selectedText);
                                modelDropdown.hide();
                                modelSelect.empty();
                                modelSelect.append('<option value="' + selectedValue + '">' +
                                    selectedText + '</option>');
                                modelSelect.val(
                                    selectedValue
                                );
                            });
                            $(document).on('click', function(e) {
                                if (!modelInput.is(e.target) && !modelDropdown.is(e.target) &&
                                    modelDropdown.has(e.target).length === 0) {
                                    modelDropdown.hide();
                                }
                            });
                        }
                        if (modelSelect.length) {
                            modelSelect.empty();
                            modelSelect.append(
                                '<option value="">Select Model</option>');
                            $.each(response, function(index, model) {
                                modelSelect.append('<option value="' + model + '">' + model +
                                    '</option>');
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
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const counter = document.getElementById('counter-value');
            const target = +counter.getAttribute('data-target');
            let count = 0;
            const increment = target / 50;
            const updateCounter = () => {
                if (count < target) {
                    count = Math.ceil(count + increment);
                    counter.textContent = count;
                    setTimeout(updateCounter, 50);
                } else {
                    counter.textContent = target;
                }
            };
            updateCounter();
        });
        document.addEventListener("DOMContentLoaded", function() {
            const counter = document.getElementById('counter-value-2');
            const target = +counter.getAttribute('data-target');
            let count = 0;
            const increment = target / 50;
            const updateCounter = () => {
                if (count < target) {
                    count = Math.ceil(count + increment);
                    counter.textContent = count;
                    setTimeout(updateCounter, 50);
                } else {
                    counter.textContent = target;
                }
            };
            updateCounter();
        });


       
    </script>

@endsection
