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
<section class="tj-choose-us-section-freight">
    <div class="container mt-4">
        <div class="row mt-4">
            <div class="col-lg-6 sal-animate mt-4" data-sal="slide-left" data-sal-duration="800">
                <div class="choose-us-content-1">
                    <div class="tj-section-heading-freight">
                        <span class="sub-title active-shape2">Freight Shipping</span>
                        <h2 class="title text-white">RELIABLE, SECURE & VALUE FOR MONEY LOGISTICS SERVICES</h2>
                        <p class="desc text-white">
                            ShipA1 has pledged to provide all-in-one Freight Shipping solutions to all its
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
                @include('partials.multi-form-Freight-detail')
                {{-- <div class="tj-input-form mt-4 w-100" data-bg-image="">
                    <form action="{{ route('submit.quote') }}" method="post" class="rd-mailform validate-form"
                        id="calculatePriceFrom" novalidate data-parsley-validate data-parsley-errors-messages-disabled
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
                        <div class="container mt-2">
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
                                            <label class="error-message" id="pickup-location-error">This field is
                                                required.</label>
                                        </div>
                                    </div>
                                    <div class="col-xl-12 col-lg-12 mb-4">
                                        <h6 class="text-white">Moving To</h6>
                                        <label class="text-white mb-2">Where Are You Moving To?</label>
                                        <div class="single-input-field">
                                            <input class="form-control" type="text" id="delivery-location"
                                                placeholder="Enter City or ZipCode" name="To_ZipCode" required>
                                            <ul class="suggestions suggestionsTwo"></ul>
                                            <label class="error-message" id="delivery-location-error">This field is
                                                required.</label>
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
                                    <h4 class="title text-center">FREIGHT INFORMATION</h4>
                                    <div class="input-form">
                                        <label for="category">Category</label>
                                        <select class="form-control" id="category" name="category">
                                            <option value="" disabled selected>Select</option>
                                            <option value="LTL USED COMMERCIAL GOODS">LTL USED COMMERCIAL GOODS
                                            </option>
                                            <option value="LTL NEW COMMERCIAL GOODS">LTL NEW COMMERCIAL GOODS</option>
                                            <option value="LTL USED GOODS">LTL USED GOODS</option>
                                            <option value="LTL NEW GOODS">LTL NEW GOODS</option>
                                            <option value="FTL FULL TRUCK LOAD">FTL FULL TRUCK LOAD</option>
                                        </select>
                                    </div>
                                    <div class="row mb-3 mt-3">
                                        <div class="col-md-4">
                                            <label class="lab-cos">Length</label>
                                            <div class="input-container">
                                                <input type="number" id="feet-input" name="length_ft[]" class="input-field" placeholder=""
                                                    min="0" maxlength="3" oninput="limitDigits(this, 3)">
                                                <span class="separator">(Ft.)</span>
                                                <input type="number" id="inches-input" class="input-field" name="length_in[]" placeholder=""
                                                    min="0" max="11" maxlength="2" oninput="limitDigits(this, 2)">
                                                <span class="separators">(In.)</span>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <label class="lab-cos">Width</label>
                                            <div class="input-container">
                                                <input type="number" id="feet-input1" class="input-field" placeholder="" name="width_ft[]"
                                                    min="0" maxlength="3" oninput="limitDigits(this, 3)">
                                                <span class="separator">(Ft.)</span>
                                                <input type="number" id="inches-input1" class="inches-input1 input-field" placeholder="" name="width_in[]"
                                                    min="0" max="11" maxlength="2" oninput="limitDigits(this, 2)">
                                                <span class="separators">(In.)</span>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <label class="lab-cos">Height</label>
                                            <div class="input-container">
                                                <input type="number" id="feet-input2" class="input-field" placeholder="" name="height_ft[]"
                                                    min="0" maxlength="3" oninput="limitDigits(this, 3)">
                                                <span class="separator">(Ft.)</span>
                                                <input type="number" id="inches-input2" class="inches-input1 input-field" placeholder="" name="height_in[]"
                                                    min="0" max="11" maxlength="2" oninput="limitDigits(this, 2)">
                                                <span class="separators">(In.)</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <label class="lab-cos">Weight</label>
                                            <div class="input-container1">
                                                <input type="" id="feet-input" class="input-field-1" name="weight[]" placeholder=""
                                                    min="0" maxlength="6" oninput="limitDigits(this, 6)">
                                                <span class="separators-w">(Lbs.)</span>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="input-form">
                                                <label class="d-block">Commodity :</label>
                                                <input type="text" id="commodity_detail" name="commodity_detail"
                                                    placeholder="Commodity Detail" required="" />
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="input-form">
                                                <label class="d-block">Handling Unit:</label>
                                                <select class="form-control" id="handling_unit" name="handling_unit">
                                                    <option value="" selected disabled>Select</option>
                                                    <option value="Pallet">Pallet</option>
                                                    <option value="Crate">Crate</option>
                                                    <option value="Box">Box</option>
                                                    <option value="Bag">Bag</option>
                                                    <option value="Bale">Bale</option>
                                                    <option value="Bundle">Bundle</option>
                                                    <option value="Can">Can</option>
                                                    <option value="Carton">Carton</option>
                                                    <option value="Case">Case</option>
                                                    <option value="Coil">Coil</option>
                                                    <option value="Cylinder">Cylinder</option>
                                                    <option value="Drum">Drum</option>
                                                    <option value="Loose">Loose</option>
                                                    <option value="Pail">Pail</option>
                                                    <option value="Reel">Reel</option>
                                                    <option value="Roll">Roll</option>
                                                    <option value="Pipe">Pipe</option>
                                                    <option value="Other">Other</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="input-form">
                                                <label class="d-block">Commodity Unit:</label>
                                                <input type="number" id="commodity_unit" name="commodity_unit"
                                                    placeholder="Unit" required="" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="input-form">
                                                <label class="d-block">Trailer Specification</label>
                                                <select id="example-multiple"
                                                    class="js-example-basic-multiple sel-mul"
                                                    name="trailer_specification[]" multiple="multiple"
                                                    style="width: 100%">
                                                    <option value="Air Ride(A)">Air Ride(A)</option>
                                                    <option value="Blanket Wrap (B)">Blanket Wrap (B)</option>
                                                    <option value="B-Train (BT)">B-Train (BT)</option>
                                                    <option value="Chain(CH)">Chain(CH)</option>
                                                    <option value="Chassis (CS)">Chassis (CS)</option>
                                                    <option value="Conestoga(CO)">Conestoga(CO)</option>
                                                    <option value="Curtain(C)">Curtain(C)</option>
                                                    <option value="Double(2)">Double(2)</option>
                                                    <option value="Extendable (E)">Extendable (E)</option>
                                                    <option value="E-Track (ET)">E-Track (ET)</option>
                                                    <option value="Hazmat (Z)">Hazmat (Z)</option>
                                                    <option value="Hot Shot (HS)">Hot Shot (HS)</option>
                                                    <option value="Insulated (N)">Insulated (N)</option>
                                                    <option value="Lift Gate (LG)">Lift Gate (LG)</option>
                                                    <option value="Load Out (LO)">Load Out (LO)</option>
                                                    <option value="Load Ramp (LR)">Load Ramp (LR)</option>
                                                    <option value="Moving (MV)">Moving (MV)</option>
                                                    <option value="Open Top (OT)">Open Top (OT)</option>
                                                    <option value="Oversized (O)">Oversized (O)</option>
                                                    <option value="Pallet Exchange (X)">Pallet Exchange (X)</option>
                                                    <option value="Side Kit (S)">Side Kit (S)</option>
                                                    <option value="Tarp(T)">Tarp(T)</option>
                                                    <option value="Team Driver(M)">Team Driver(M)</option>
                                                    <option value="Temp Control (TC)">Temp Control (TC)</option>
                                                    <option value="Triple (3)">Triple (3)</option>
                                                    <option value="Vented (V)">Vented (V)</option>
                                                    <option value="Walking Floor (WF)">Walking Floor (WF)</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="input-form">
                                                <label class="d-block">Equipment Type</label>
                                                <select id="example-multiple-2"
                                                    class="js-example-basic-multiple sel-mul" name="equipment_type[]"
                                                    multiple="multiple" style="width: 100%">
                                                    <option value="VAN (V)">VAN (V)</option>
                                                    <option value="REEFER (RE)">REEFER (RE)</option>
                                                    <option value="FLATBED (F)">FLATBED (F)</option>
                                                    <option value="STEP DECK (SD)">STEP DECK (SD)</option>
                                                    <option value="REMOVABLE GOOSENECK (RGN)">REMOVABLE GOOSENECK (RGN)
                                                    </option>
                                                    <option value="CONESTOGA (CS)">CONESTOGA (CS)</option>
                                                    <option value="CONTAINER / DRAYAGE (C)">CONTAINER / DRAYAGE (C)
                                                    </option>
                                                    <option value="TRUCK (T)">TRUCK (T)</option>
                                                    <option value="HAZMAT (hazardous materials)">HAZMAT (hazardous
                                                        materials)</option>
                                                    <option value="POWER ONLY (PO)">POWER ONLY (PO)</option>
                                                    <option value="HOT SHOT (HS)">HOT SHOT (HS)</option>
                                                    <option value="LOWBOY (LB)">LOWBOY (LB)</option>
                                                    <option value="ENDUMP (ED)">ENDUMP (ED)</option>
                                                    <option value="LANDOLL (LD)">LANDOLL (LD)</option>
                                                    <option value="PARTIAL (PT)">PARTIAL (PT)</option>
                                                    <option value="20ft container">20ft container</option>
                                                    <option value="40ft container">40ft container</option>
                                                    <option value="48ft container">48ft container</option>
                                                    <option value="53ft container">53ft container</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" id="hazardous"
                                                    name="hazardous" value="1" />
                                                <label class="form-check-label text-white" for="hazardous">
                                                    Hazardous</label>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" id="stackable"
                                                    name="stackable" value="1" />
                                                <label class="form-check-label text-white" for="stackable">
                                                    Stackable</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mt-3">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="pick_up_services" class="text-white">Pickup
                                                    Services</label>
                                                <select class="form-control" id="pick_up_services"
                                                    name="pick_up_services">
                                                    <option value="" disabled selected>Select</option>
                                                    <option value="Construction_Utility">Construction / Utility</option>
                                                    <option value="Container_Station">Container Station</option>
                                                    <option value="Exhibition">Exhibition</option>
                                                    <option value="Inside_Pickup">Inside Pickup</option>
                                                    <option value="Lift_Gate_Service">Lift Gate Service</option>
                                                    <option value="Residential">Residential</option>
                                                    <option value="Single_Shipment">Single Shipment</option>
                                                    <option value="Sorting_Segregation">Sorting / Segregation</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="deliver_services" class="text-white">Deliver
                                                    Services</label>
                                                <select class="form-control" id="deliver_services"
                                                    name="deliver_services">
                                                    <option value="" disabled selected>Select</option>
                                                    <option value="After_Business_Hours_Delivery">After Business Hours Delivery
                                                    </option>
                                                    <option value="Construction_Utility">Construction / Utility</option>
                                                    <option value="Appointment">Appointment</option>
                                                    <option value="Container_Station">Container Station</option>
                                                    <option value="Exhibition">Exhibition</option>
                                                    <option value="In_Bond_Freight">In Bond Freight</option>
                                                    <option value="In_Bond_TIR_Caret">In Bond TIR Caret</option>
                                                    <option value="Inside_Same_Level_as_Delivery_Vehicle">Inside - Same Level as
                                                        Delivery Vehicle</option>
                                                    <option value="Lift_Gate_Service">Lift Gate Service</option>
                                                    <option value="Residential">Residential</option>
                                                    <option value="Mine_Govt_Airport">Mine / Govt / Airport</option>
                                                    <option value="Notification_Prior_Delivery">Notification Prior Delivery
                                                    </option>
                                                    <option value="Delivery_Appointment_Required">Delivery appointment required
                                                    </option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mt-3">
                                        <div class="col-md-6">
                                            <div class="input-form">
                                                <label class="d-block"> Pickup Date:</label>
                                                <input type="date" id="ex_pickup_date" name="ex_pickup_date"
                                                    required="" />
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="input-form">
                                                <label class="d-block"> Pickup Time:</label>
                                                <input type="time" id="ex_pickup_time" name="ex_pickup_time"
                                                    required="" />
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="input-form">
                                                <label class="d-block"> Delivery Date:</label>
                                                <input type="date" id="ex_delivery_date" name="ex_delivery_date"
                                                    required="" />
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="input-form">
                                                <label class="d-block"> Delivery Time:</label>
                                                <input type="time" id="ex_delivery_time" name="ex_delivery_time"
                                                    required="" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox"
                                                    id="available_at_auction" name="available_at_auction"
                                                    value="1" />
                                                <label class="form-check-label text-white" for="available_at_auction">
                                                    Available at
                                                    Auction?</label>
                                            </div>
                                            <div class="input-form div-link mt-3" style="display: none;">
                                                <label class="d-block"> Enter Link:</label>
                                                <input class="form-control" type="url" id="link"
                                                    name="link" placeholder="Enter Link" />
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" id="boat_on_trailer"
                                                    name="boat_on_trailer" value="1" />
                                                <label class="form-check-label text-white" for="boat_on_trailer"> Is
                                                    your freight already on
                                                    a
                                                    trailer?</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mt-3">
                                        <div class="col-md-12">
                                            <div class="input-form">
                                                <label class="d-block" class="text-white"> Image:</label>
                                                <input class="form-control image_input"  name="image[]" type="file" accept="image/*" multiple
                                                    onchange="previewImages(event)">
                                                <div class="image-preview-container" id="imagePreviewContainer"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <h4 class="text-white">Additional Services</h4>
                                        <div class="col-md-4">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox"
                                                    id="protect_from_freezing" name="protect_from_freezing"
                                                    value="1" />
                                                <label class="form-check-label text-white" for="protect_from_freezing"
                                                    style="font-size: 14px;"> Protect from freezing</label>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" id="sort_segregate"
                                                    name="sort_segregate" value="1" />
                                                <label class="form-check-label text-white" for="sort_segregate"
                                                    style="font-size: 14px;"> Sort & Segregate</label>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" id="blind_shipment"
                                                    name="blind_shipment" value="1" />
                                                <label class="form-check-label text-white" for="blind_shipment"
                                                    style="font-size: 14px;"> Blind Shipment</label>
                                            </div>
                                        </div>
                                    </div>
                                    <input type="hidden" value="2010" name="year[]">
                                    <input type="hidden" value="freight" name="model[]">
                                    <input type="hidden" value="freight" name="make[]">
                                    <input type="hidden" name="vehicle_opt" value="freight" hidden>
                                    <input type="hidden" name="car_type" value="3" hidden>
                                    <input type="hidden" name="frieght_class" id="frieght_class" value="" hidden>
                                    <div class="tab-content mt-3" id="additionalContent"></div>
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
                                    <h4 class="text-center text-white">Customer Information</h4>
                                    <div class="col-xl-6 col-lg-6">
                                        <div class="single-input-field">
                                            <label class="d-block text-white"> Your Name:</label>
                                                <input class="form-control" id="name" name="name" type="text"
                                                    placeholder="Customer Name" required>
                                            <label class="error-message" id="Custo_Name-error">This field is
                                                required.</label>
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-6">
                                        <div class="single-input-field">
                                            <label class="d-block text-white">Phone:</label>
                                            <input id="phone" class="form-control ophone" required name="phone"
                                                type="tel" placeholder="Customer Phone">
                                            <label class="error-message" id="Custo_Phone-error">This field is
                                                required.</label>
                                        </div>
                                    </div>
                                    <div class="col-xl-12 col-lg-12">
                                        <div class="single-input-field">
                                            <label class="d-block text-white"> Email Address:</label>
                                                <input class="form-control" id="email" name="email" type="email"
                                                 placeholder="Email address" required>
                                            <label class="error-message" id="Custo_Email-error">This field is
                                                required.</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xl-6 col-lg-6">
                                        <div class="price__cta-btn">
                                            <button class="tj-submit-btn previous" id="step3_previous">
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
                </div> --}}
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
                    <img src="{{ asset('frontend/images/project/freight-detail-page.webp') }}" alt="Image">
                </div>
            </div>
            <div class="col-lg-6 sal-animate" data-sal="slide-left" data-sal-duration="800">
                <div class="about-content-three">
                    <div class="tj-section-heading">
                        <span class="sub-title active-shape ">Ship A1 Transport</span> 
                        <p class="desc">
                            Looking for a shipping company for your freight transportation? Introducing you to Ship A1,
                            where our delivery matches top-notch quality catered especially according to the needs of
                            our customers, where you want to ship your car, any other type of vehicle or heavy equipment
                            look no further than our freight transportation! At Ship A1, our expert team aspires to
                            ensure customer satisfaction as well as maintain the quality and delivery of our logistics.
                            <br>Our wide shipping services ensure efficient and cost-effective delivery of your
                            vehicles, LTL (Less Than Truckload), or even full truckload shipments across USA.
                            <br>So, what are you waiting for? Experience the safest and best shipping all across the
                            United States of America and make haste by grabbing the most splendid deals on our website
                            and get a free quote now! All you need to do is enter your shipment details and desired
                            route and get the most reasonable quotes that fit your needs.
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
                        <img class="p-z-idex" src="{{ asset('/frontend/images/about/Freight Transportation 1b image.webp') }}"
                            alt="Image" />
                    </div>
                    <img class="group-1 p-z-idex"
                        src="{{ asset('/frontend/images/about/Freight Transportation 1a image.webp') }}" alt="Image" />
                    <img class="group-shape" src="{{ asset('frontend/images/about/ab-shape.png') }}"
                        alt="Image" />
                </div>
            </div>
        </div>
    </div>
</section>
<section class="tj-cta-section icon-animate">
    <div class="cta-inner" data-bg-image="{{ asset('frontend/images/cta/freight-cta.webp') }}"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-8 offset-lg-2">
                <div class="cta-content-area">
                    <div class="cta-content">
                        <div class="cta-icon">
                            <i class="fa-light fa-truck fa-xs"></i>
                        </div>
                        <div class="cta-text">
                            <h3 class="title">Simplify your freight shipment.</h3>
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
            <img src="{{ asset('frontend/images/project/reefer-truck-1.webp') }}" alt="Image" />
            <div class="arrow-icon">
                <a href="{{ route('frontend.pages.services.reefer-service') }}" > <i
                        class="fa-light fa-arrow-right"></i></a>
            </div>
            <div class="tj-project-content">
                <span class="sub-title">Reefer</span>
                <h4><a href="{{ route('frontend.pages.services.reefer-service') }}" 
                        class="title-link">Reefer Transportation Service</a></h4>
            </div>
        </div>
        <div class="tj-project-item">
            <img src="{{ asset('frontend/images/project/7.webp') }}" alt="Image" />
            <div class="arrow-icon">
                <a href="{{ route('frontend.pages.services.hazmat-service') }}" > <i
                        class="fa-light fa-arrow-right"></i></a>
            </div>
            <div class="tj-project-content">
                <span class="sub-title">Hazmat</span>
                <h4><a href="{{ route('frontend.pages.services.hazmat-service') }}" 
                        class="title-link">Hazmat Transportation Service</a></h4>
            </div>
        </div>
        <div class="tj-project-item">
            <img src="{{ asset('frontend/images/project/5.webp') }}" alt="Image" />
            <div class="arrow-icon">
                <a href="{{ route('services') }}" > <i class="fa-light fa-arrow-right"></i></a>
            </div>
            <div class="tj-project-content">
                <span class="sub-title">Dry van</span>
                <h4><a href="{{ route('services') }}"  class="title-link">Dry van Transportation
                        Service</a></h4>
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
{{-- @include('partials.transport-by-state') --}}
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
                                    How many types of freight do you transport?
                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse show"
                                aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <strong>Ship A1 handles a wide quantity and range of freight including LTL and FTL
                                        transporting services, as well as ensuring the safety of your vehicles and peace
                                        of mind.</strong>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    What’s the shipping process of freight in FTL?
                                </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <strong>The process is quite easy, if your shipment is large enough to take up
                                        enough space it will be a full truckload and it shall be transported in a
                                        separate truck all by itself, if your shipment does not take the entire space,
                                        it will be transported along with other shipments and this mode is called
                                        Partial Truckload.</strong>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseThree" aria-expanded="false"
                                    aria-controls="collapseThree">
                                    How much time will it take to ship my freight?
                                </button>
                            </h2>
                            <div id="collapseThree" class="accordion-collapse collapse"
                                aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <strong>It all depends on the potential route planning as well as the distance.
                                        However, Ship A1 will provide an estimated timeframe during the quote process
                                        and keep you updated throughout the entire journey.</strong>
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
                            <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <strong>We'll provide detailed instructions, but you'll need to remove personal
                                        belongings, as well as make sure to follow guidelines or instructions based on
                                        the chosen transport method.</strong>
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