<div class="tj-input-form mt-4 w-100" data-bg-image="">
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
                        </div>
                    </div>
                    <div class="col-xl-12 col-lg-12 mb-4">
                        <h6 class="text-white">Moving To</h6>
                        <label class="text-white mb-2">Where Are You Moving To?</label>
                        <div class="single-input-field">
                            <input class="form-control" type="text" id="delivery-location"
                                placeholder="Enter City or ZipCode" name="To_ZipCode" required>
                            <ul class="suggestions suggestionsTwo"></ul>
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
                                    placeholder="Customer Name" required oninput="this.value = this.value.replace(/[^a-zA-Z\s]/g, '')">
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6">
                        <div class="single-input-field">
                            <label class="d-block text-white">Phone:</label>
                            <input id="phone" class="form-control ophone" required name="phone"
                                type="tel" placeholder="Customer Phone">
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
</div>