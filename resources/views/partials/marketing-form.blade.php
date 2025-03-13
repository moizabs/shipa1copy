<div class="tj-input-form mt-4 w-100" data-bg-image="">
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
    {{-- <form id="marketing-form" action="{{ route('lead.generation') }}" method="post" novalidate data-parsley-validate data-parsley-errors-messages-disabled>
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
            <div class="row">
                <div class="col-md-6">
                    <div class="input-form">
                        <label class="d-block">Name:</label>
                        <input type="text" id="name" name="name" placeholder="Name" required />
                        <small id="errName" class="err-style"></small>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="input-form">
                        <label class="d-block">Phone:</label>
                        <input class="ophone" type="tel" id="phone2" name="phone" placeholder="Number" required />
                        <small id="errPhone" class="err-style"></small>
                        <input type="hidden" name="country_code" id="country_code2" />
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="input-form">
                        <label class="d-block">Email:</label>
                        <input type="email" id="email" name="email" placeholder="Email" required />
                        <small id="errEmail" class="err-style"></small>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="text-white">Services:</label>
                        <select name="service" id="service" required>
                            <option value="" selected="" disabled="">Service</option>
                            <option value="Car Transport Service">Car Transport Service</option>
                            <option value="Motorcycle Transport Service">Motorcycle Transport Service</option>
                            <option value="ATV/UTV Transport Service">ATV/UTV Transport Service</option>
                            <option value="Golf Cart Transport Service">Golf Cart Transport Service</option>
                            <option value="Boat Transport Services">Boat Transport Services</option>
                            <option value="Construction Equipment Services">Construction Equipment Services</option>
                            <option value="Commercial Truck Transport">Commercial Truck Transport</option>
                            <option value="Excavator Transport Services">Excavator Transport Services</option>
                            <option value="Farm Transport Services">Farm Transport Services</option>
                            <option value="Heavy Equipment Services">Heavy Equipment Services</option>
                            <option value="RV Transport Services">RV Transport Services</option>
                            <option value="Dry Van Transport">Dry Van Transport</option>
                            <option value="Hazmat Transport">Hazmat Transport</option>
                            <option value="Reefer Transport">Reefer Transport</option>
                        </select>
                        <small id="errService" class="err-style"></small>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="input-form">
                        <label class="">Message:</label>
                        <br>
                        <textarea placeholder="Enter your message" name="message" required class="bg-white border rounded custom-textarea"></textarea>
                        <small id="errMessage" class="err-style"></small>
                    </div>
                </div>
            </div>
            <div class="tj-theme-button text-center mt-3">
                <button class="tj-submit-btn" type="submit" id="submitBtn" value="submit">
                    Submit<i class="fa-light fa-arrow-right"></i>
                </button>
            </div>
        </div>
    </form> --}}
    <form action="{{ route('lead.generation') }}" method="post" class="rd-mailform validate-form"
        id="calculatePriceFrom" novalidate data-parsley-validate data-parsley-errors-messages-disabled
        enctype="multipart/form-data">
        @csrf
        <input type="hidden" name="service" value="kch bhi">
        <input type="hidden" name="message" value="kch bhi chal">
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
                            {{-- <label class="error-message" id="pickup-location-error">This field is
                                required.</label> --}}
                        </div>
                    </div>
                    <div class="col-xl-12 col-lg-12 mb-4">
                        <h6 class="text-white">Moving To</h6>
                        <label class="text-white mb-2">Where Are You Moving To?</label>
                        <div class="single-input-field">
                            <input class="form-control" type="text" id="delivery-location"
                                placeholder="Enter City or ZipCode" name="To_ZipCode" required>
                            <ul class="suggestions suggestionsTwo"></ul>
                            {{-- <label class="error-message" id="delivery-location-error">This field is
                                required.</label> --}}
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
                    {{-- <label class="error-message" id="tabSelector-error">This field is required.</label> --}}
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
                            {{-- <label class="error-message" id="Custo_Name-error">This field is
                                required.</label> --}}
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6">
                        <div class="single-input-field">
                            <label class="d-block text-white">Phone:</label>
                            <input id="phone" class="form-control ophone" required name="phone"
                                type="tel" placeholder="Customer Phone">
                            {{-- <label class="error-message" id="Custo_Phone-error">This field is
                                required.</label> --}}
                        </div>
                    </div>
                    <div class="col-xl-12 col-lg-12">
                        <div class="single-input-field">
                            <label class="d-block text-white"> Email Address:</label>
                                <input class="form-control" type="email" id="email" name="email" placeholder="Your Email Address"
                            required />
                            {{-- <label class="error-message" id="Custo_Email-error">This field is
                                required.</label> --}}
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
<script>
    $(document).ready(function() {
        // Custom validation function for input fields
        function validateInput(inputField, errorField, validationFunction) {
            var inputValue = inputField.val().trim();
            if (!validationFunction(inputValue)) {
                if (errorField) {
                    errorField.text("This field is required.");
                }
                return false;
            } else {
                if (errorField) {
                    errorField.text("");
                }
                return true;
            }
        }

        // Validate if the email is valid
        function validateEmail(inputValue) {
            var emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            return emailPattern.test(inputValue);
        }

        // Handle form submission
        $("form").submit(function(event) {
            var isNameValid = validateInput($('#name'), $("#errName"), function(value) {
                return value !== "";
            });
            var isPhoneValid = validateInput($('#phone2'), $("#errPhone"), function(value) {
                return value !== "";
            });
            var isEmailValid = validateInput($('#email'), $("#errEmail"), validateEmail);
            var isMessageValid = validateInput($('textarea[name="message"]'), $("#errMessage"), function(value) {
                return value !== "";
            });
            var isServiceValid = validateInput($('#service_name'), $("#errService"), function(value) {
                return value !== "";
            });

            // Handle validation and prevent form submission if invalid
            if (!isNameValid || !isPhoneValid || !isEmailValid || !isMessageValid || !isServiceValid) {
                event.preventDefault();

                // Show error messages for the invalid fields
                if (!isNameValid) {
                    $("#errName").text("Name is required.");
                }
                if (!isPhoneValid) {
                    $("#errPhone").text("Phone number is required.");
                }
                if (!isEmailValid) {
                    $("#errEmail").text("Valid email is required.");
                }
                if (!isMessageValid) {
                    $("#errMessage").text("Message is required.");
                }
                if (!isServiceValid) {
                    $("#errService").text("Please select a service.");
                }
            }
        });
    });
</script>