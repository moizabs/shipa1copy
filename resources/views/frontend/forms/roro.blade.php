@extends('frontend.layouts.app')
@section('title', 'RORO Shipping Get Quote')
@section('meta_description',
'Need RORO shipping? Get an instant quote now! We offer efficient and affordable solutions for transporting your vehicles safely and securely.')
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
    .suggestionsTwo {
        background: #fff;
        font-size: 14px;
        margin-top: -2px;
        padding-bottom: 20px;
        list-style: none;
        line-height: 28px;
        padding-left: 14px;
        display: none;
    }
    .suggestionsTwo li {
        cursor: pointer;
    }
    .suggestionsTwo li:hover {
        color: #8fc445;
    }
    .suggestionsCountry {
        background: #fff;
        font-size: 14px;
        margin-top: -2px;
        padding-bottom: 20px;
        list-style: none;
        line-height: 28px;
        padding-left: 14px;
        display: none;
    }
    .suggestionsCountry li {
        cursor: pointer;
    }
    .suggestionsCountry li:hover {
        color: #8fc445;
    }
    .image_input {
        padding: 0px !important;
        padding-left: 10px !important;
    }
</style>
<section class="breadcrumb-wrapper" data-bg-image="{{ asset('frontend/images/banner/all-cover-banner.webp') }}">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb-content">
                    <h1 class="breadcrumb-title text-center">RORO</h1>
                    <div class="breadcrumb-link">
                        <span>
                            <a href="{{ route('welcome') }}">
                                <span>Home</span>
                            </a>
                        </span>
                        >
                        <span>
                            <span> RORO</span>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="tj-choose-us-section-roro">
    <div class="container-fluid">
        <div class="row">
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
            <div class="col-lg-12" data-sal="slide-down" data-sal-duration="800">
                <div class="tj-input-form" data-bg-image="">
                    <form action="{{ route('submit.quote') }}" novalidate method="post"
                        class="rd-mailform validate-form" id="calculatePriceFromRoro" data-parsley-validate
                        data-parsley-errors-messages-disabled enctype="multipart/form-data">
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
                        <div class="container mt-2">
                            <input type="hidden" name="roro" value="RORO SHIPMENT">
                            <div class="route_quote_info" id="step1">
                                <div class="row">
                                    <h4 class="title text-center">Quote Request!</h4>
                                    <div class="col-xl-12 col-lg-12 mb-4">
                                        <h6 class="text-white">Moving From</h6>
                                        <label class="text-white mb-2">Where Are You Moving From?</label>
                                        <div class="single-input-field">
                                            <input class="form-control" type="text" id="pickup-location"
                                                placeholder="Enter City or ZipCode" name="From_ZipCode" required>
                                            <ul class="suggestions suggestionsTwo"></ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <h6 class="text-white">Deliver To</h6>
                                    <div class="col-xl-4 col-lg-4 mb-4">
                                        <label class="text-white mb-2">Country:</label>
                                        <div class="single-input-field">
                                            <input class="form-control" type="text" id="delivery-country"
                                                placeholder="Enter Country" name="To_Country" required>
                                            <ul class="suggestions suggestionsCountry"></ul>
                                            <small id="errDLoc" class="err-loc"></small>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-4 mb-4">
                                        <label class="text-white mb-2">City:</label>
                                        <div class="single-input-field">
                                            <input class="form-control" type="text" id="delivery-city"
                                                placeholder="Enter City" name="To_City" required>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-4 mb-4">
                                        <label class="text-white mb-2">Zip Code:<small>(Optional)</small></label>
                                        <div class="single-input-field">
                                            <input class="form-control" type="text" id="delivery-zipcode"
                                                placeholder="Enter ZipCode" name="To_ZipCode"  >
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xl-12">
                                        <div class="price__cta-btn text-center">
                                            <button class="tj-submit-btn" type="button" id="step1_next">
                                                Next <i class="fa-light fa-arrow-right"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="vehicle_quote_info" id="step2" style="display: none;">
                                <div class="row">
                                    <h4 class="title text-center">VEHICLE INFORMATION</h4>
                                    <select id="tabSelector"   aria-label="Tab selector" required>
                                        <option value="" selected disabled>Select a Vehicle</option>
                                        <option value="Atv">Atv Utv Transport</option>
                                        <option value="Boat-Transport">Boat Transport</option>
                                        <option value="Car">Car Transport</option>
                                        <option value="Golf-Cart">Golf Cart Transport</option>
                                        <option value="Heavy-Equipment">Heavy Equipment Transport</option>
                                        <option value="Motorcycle">Motorcycle Transport</option>
                                        <option value="RV-Transport">RV Transport</option>
                                    </select>
                                    <div class="tab-content" id="additionalContent"></div>
                                </div>
                                <div class="row mt-2">
                                    <div class="col-xl-6 col-lg-6">
                                        <div class="price__cta-btn">
                                            <button class="tj-submit-btn previous" id="step2_previous">
                                                Previous <i class="fa-light fa-arrow-right"></i>
                                            </button>
                                        </div>
                                    </div>

                                    <div class="col-xl-6 col-lg-6">
                                        <div class="price__cta-btn float-end">
                                            <button class="tj-submit-btn" type="button" id="step2_next">
                                                Next <i class="fa-light fa-arrow-right"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="basic_quote_info" id="step3" style="display: none;">
                                <div class="row mb-3">
                                    <h4 class="text-center text-white target-top">Customer Information</h4>
                                    <div class="col-xl-6 col-lg-6">
                                        <div class="single-input-field">
                                            <label class="d-block text-white"> Your Name:</label>
                                            <input class="form-control" id="name" name="name" type="text"
                                                placeholder="Customer Name" required>
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-6">
                                        <div class="single-input-field">
                                            <label class="d-block text-white">Phone:</label>
                                            <input id="phone" class="form-control ophone" name="phone"
                                                type="tel" placeholder="Customer Phone" required>
                                            <small id="errPhone" class="err-style"></small>
                                            <input type="hidden" name="country_code" id="country_code" />
                                        </div>
                                    </div>
                                    <div class="col-xl-12 col-lg-12">
                                        <div class="single-input-field">
                                            <label class="d-block text-white"> Email Address:</label>
                                            <input class="form-control" id="email" name="email" type="email"
                                                placeholder="Email address" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xl-6 col-lg-6">
                                        <div class="price__cta-btn">
                                            <button class="tj-submit-btn previous scroll-up-btn" id="step3_previous">
                                                Previous <i class="fa-light fa-arrow-right"></i>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-6">
                                        <div class="price__cta-btn float-end">
                                            <button class=" tj-submit-btn " href="" type="submit"
                                                id="submit_instant_code" value="Submit Form">
                                                Calculate Price <i class="fa-light fa-arrow-right"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
@section('extraScript')
<script>
    $(document).ready(function() {
        $(document).on('keyup', '#delivery-country', function() {
            var inputField = $(this);
            var suggestionsList = inputField.siblings(".suggestionsCountry");
            var query = inputField.val();
            if (query !== "") {
                suggestionsList.css("display", "block");
                $.ajax({
                    url: '/get-countries',
                    type: 'GET',
                    data: {
                        search: query
                    },
                    success: function(response) {
                        suggestionsList.empty();
                        if (response.length > 0) {
                            response.forEach(function(country) {
                                suggestionsList.append(
                                    '<li class="suggestion-item-country">' +
                                    country.name + '</li>');
                            });
                        } else {
                            suggestionsList.append(
                                '<li class="no-results">No results found</li>');
                        }
                    }
                });
            } else {
                suggestionsList.css("display", "none");
            }
        });
        $(document).on('click', '.suggestion-item-country', function() {
            var selectedCountry = $(this).text();
            $('#delivery-country').val(selectedCountry);
            $('.suggestionsCountry').css("display", "none");
        });
        $(document).on('click', '#submit_instant_code', function() {
            console.log('yes yes yes');
            $('#calculatePriceFromRoro').submit();
        });
    });
</script>
@endsection