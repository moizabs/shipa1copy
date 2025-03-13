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
                    <h4 class="title text-center target-top">Quote Request!</h4>
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
            <div class="vehicle_quote_info target-top" id="step2" style="display: none;">
                <div class="row">
                    <h4 class="title text-center">VEHICLE INFORMATION</h4>
                    <select id="tabSelector"   aria-label="Tab selector" required>
                        <option value="" selected disabled>Select a Vehicle</option>
                        <option value="Atv">Atv Utv Transport</option>
                        <option value="Car">Car Transport</option>
                        <option value="Golf-Cart">Golf Cart Transport</option>
                        <option value="Motorcycle">Motorcycle Transport</option>
                    </select>
                    <label class="error-message" id="tabSelector-error">This field is required.</label>
                    <div class="tab-content mt-3" id="additionalContent"></div>
                </div>
                <div class="row mt-2">
                    <div class="col-xl-6 col-lg-6">
                        <div class="price__cta-btn">
                            <button class="tj-submit-btn previous scroll-up-btn" id="step2_previous">
                                Previous <i class="fa-light fa-arrow-right"></i>
                            </button>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6">
                        <div class="price__cta-btn float-end">
                            <button class="tj-submit-btn scroll-up-btn" type="button" id="step2_next">
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
                                <input class="form-control" type="text" id="name" name="name" placeholder="Full Name"
                                required />
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
                                <input class="form-control" type="email" id="email" name="email" placeholder="Your Email Address"
                            required />
                            <label class="error-message" id="Custo_Email-error">This field is
                                required.</label>
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
                            <button class="tj-submit-btn" type="submit" id="submit_instant_code"
                                value="submit">
                                Calculate Price <i class="fa-light fa-arrow-right"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>