<div class="tj-input-form w-100 target-top" data-bg-image="">
    <form action="{{ route('submit.quote') }}" method="post" class="rd-mailform validate-form target-top-1" novalidate id="calculatePriceFrom"
        data-parsley-validate data-parsley-errors-messages-disabled enctype="multipart/form-data">
        @csrf
        @if (isset($errors) &&  count($errors) > 0)
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
                                <ul class="suggestions suggestionsPickup"></ul>
                        </div>
                    </div>
                    <div class="col-xl-12 col-lg-12 mb-4">
                        <h6 class="text-white">Moving To</h6>
                        <label class="text-white mb-2">Where Are You Moving To?</label>
                        <div class="single-input-field">
                            <input class="form-control" type="text" id="delivery-location"
                                placeholder="Enter City or ZipCode" name="To_ZipCode" required>
                                <ul class="suggestions suggestionsDelivery"></ul>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-12">
                        <div class="price__cta-btn text-center">
                            <button class="tj-submit-btn scroll-up-btn" type="button" id="step1_next">
                                Next <i class="fa-light fa-arrow-right"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="vehicle_quote_info " id="step2" style="display: none;">
                <div class="row">
                    <h4 class="target-top target-top-3 title text-center">VEHICLE INFORMATION</h4>
                    <select id="tabSelector"   aria-label="Tab selector" required>
                        <option value="" selected disabled>Select a Vehicle</option>
                        <option value="Atv">Atv Utv Transport</option>
                        <option value="Boat-Transport">Boat Transport</option>
                        <option value="Car">Car</option>
                        <option value="Freight-Transportation">Freight Transportation</option>
                        <option value="Golf-Cart">Golf Cart</option>
                        <option value="Heavy-Equipment">Heavy Equipment Transport</option>
                        <option value="Motorcycle">Motorcycle</option>
                        <option value="RV-Transport">RV Transport</option>
                    </select>

                    <div class="tab-content mt-3" id="additionalContent"></div>
                </div>
                <div class="row mt-2">
                    <div class="col-12 d-flex flex-column flex-md-row justify-content-evenly">
                        <div class="price__cta-btn">
                            <button class="tj-submit-btn previous scroll-up-btn-1" type="button" id="step2_previous">
                                Previous <i class="fa-light fa-arrow-right"></i>
                            </button>
                        </div>
                        <div class="price__cta-btn float-end">
                            <button class="tj-submit-btn scroll-up-btn-2" type="button" id="step2_next">
                                Next <i class="fa-light fa-arrow-right"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="basic_quote_info " id="step3" style="display: none;">
                <div class="row mb-3">
                    <h4 class="text-center text-white target-top-2">Customer Information</h4>
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
                            <input id="phone" class="form-control ophone" name="phone" type="tel"
                                placeholder="Customer Phone" required>
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
                    <div class="col-12 d-flex flex-column flex-md-row justify-content-evenly">
                        <div class="price__cta-btn">
                            <button class="tj-submit-btn previous scroll-up-btn-3" type="button" id="step3_previous">
                                Previous <i class="fa-light fa-arrow-right"></i>
                            </button>
                        </div>
                        <div class="price__cta-btn float-end">
                            <button class=" tj-submit-btn" type="submit" id="submit_instant_code"
                                value="Submit Form">
                                Calculate Price <i class="fa-light fa-arrow-right"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>