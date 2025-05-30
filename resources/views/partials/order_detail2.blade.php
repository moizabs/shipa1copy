@include('partials.return_function2')
<style>
    input,
    select,
    textarea {
        border: 1px solid #b0a6e0 !important;
    }
    body {
        box-shadow: 2px 2px #9E9E9E !important;
        background-color: white;
    }
    .card-header {
        color: black !important;
        justify-content: center !important;
        font-weight: 800 !important;
        font-size: 25px !important;
        border: 2px solid black !important;
        background-color: #6c757d47 !important;
    }
    .card-body {
        border: 2px solid black !important;
        padding: 4px 16px !important;
    }
    .icon-container {
        font-size: 24px;
        text-align: center;
        margin-top: -30px;
        margin-bottom: 3px;
    }
    .heading {
        float: left;
    }
    .subhead {
        float: right;
    }
    .app-content .side-app {
        padding: 0px !important;
    }
    .error {
        border: 1px solid red !important;
    }
</style>
<div class="container " style=" margin-top: 0px; ">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header" style="    border-bottom: 1px solid;">
                    <div class=" mb-0 w-100"><strong class="heading">Order Online # {{ $data['id'] }} </strong>
                    </div>
                </div>
                <div class="card-body">
                    <form id="submitEmailOrderCard" class="needs-validation" name="myform" novalidate="">
                        @csrf
                        <input type="hidden" name="id" value="{{ $data['id'] }}">
                        <input type="hidden" name="ip" value="">
                        <input type="hidden" name="ipcity" value="">
                        <input type="hidden" name="ipregion" value="">
                        <input type="hidden" name="ipcountry" value="">
                        <input type="hidden" name="iploc" value="">
                        <input type="hidden" name="ippostal" value="">
                        <input type="hidden" name="browser" value=" ">
                        <input type="hidden" name="platform" value="">
                        <div class="text-muted text-right">
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <div class="mainTitle">
                                    <div class="stepContainer">
                                        <span></span>
                                    </div>
                                    <div class="stepTitle">
                                        <h5>Billing Information
                                            <a href="javascript:void(0);" data-toggle="tooltip" data-placement="right"
                                                title=""
                                                data-original-title="
                                                Review pricing and submit your payment information to book your order.
                                                ">
                                                <i class="fa fa-question-circle" aria-hidden="true"></i>
                                            </a>
                                        </h5>
                                    </div>
                                    <div class="alert alert-danger mt-2" id="success-alert">
                                        <button type="button" class="close" data-dismiss="alert">x</button>
                                        <strong class="error_text"></strong>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6 col-sm-12">
                                <div class="card-header bg-secondary text-white font-weight-bold">
                                    Price Information
                                </div>
                                <div class="card-body border">
                                    <div class="form-group">
                                        <label for="name"><strong>Booking Price</strong><span
                                                class="text-danger"></span></label>
                                        <input autocomplete="nope" type="text" class="form-control" id="price"
                                            readonly name="price" value="{{ $data['payment'] }}">
                                        <div class="invalid-feedback">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="address"><strong>Deposit</strong><span
                                                class="text-danger"></span></label>
                                        <input autocomplete="nope" type="text" class="form-control" id="deposit"
                                            readonly name="deposit" placeholder=""
                                            value="{{ $data['deposit_amount'] }}">
                                        <div class="invalid-feedback">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="balance"><strong>Balance Amount</strong></label>
                                        <input autocomplete="nope" type="text" class="form-control"
                                            id="balance" readonly name="balance" placeholder=""
                                            value="{{ $data['balance'] }}">
                                        <div class="invalid-feedback">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-sm-12">
                                <div class="card-header bg-secondary text-white font-weight-bold">
                                    Credit Card Information
                                </div>
                                <div class="card-body border">
                                    <label for="fname"><strong>Accepted Cards</strong></label>
                                    <div class="icon-container">
                                        <i class="fa fa-cc-visa"
                                            style="color:navy !important;    font-size: 40px;"></i>
                                        <img src="/assets/images/photos/mastercard.png"
                                            style=" width: auto; height: 40px; margin-top: -15px; ">
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="cardfirstname"><strong>Card First Name </strong><span
                                                    class="text-danger"> </span></label>
                                            <input autocomplete="nope" type="text" class="form-control"
                                                maxlength="100" id="firstname" name="firstname"
                                                placeholder="Enter First Card Name" required="" value="">
                                            <div class="invalid-feedback">
                                                This field is required.
                                            </div>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="cardlastname"><strong>Card Last Name </strong><span
                                                    class="text-danger"> </span></label>
                                            <input autocomplete="nope" type="text" value=""
                                                class="form-control" id="lastname" maxlength="100" name="lastname"
                                                placeholder="Enter Card Last Name" required>
                                            <div class="invalid-feedback">
                                                This field is required.
                                            </div>
                                        </div>
                                    </div>
                                    <div id="billingaddress">
                                        <div class="form-group">
                                            <label for="auction_name"><strong>Billing Address</strong><span
                                                    class="text-danger"> </span></label>
                                            <div class="controls position-relative has-icon-left">
                                                <input autocomplete="nope" type="text" name="billing_address"
                                                    id="billing_address" required class="form-control" value=""
                                                    placeholder="Enter Billing Address">
                                            </div>
                                        </div>
                                    </div>
                                    <div id="zip">
                                        <div class="form-group">
                                            <label class="form-label">Zip Code*</label>
                                            <input type="text" id="o_zip1" class="form-control "
                                                maxlength="11" name="o_zip1" value="{{ $data['originzsc'] }}"
                                                placeholder="ZIP CODE" required />
                                        </div>
                                    </div>
                                    <div id="cardtype">
                                        <div class="form-group">
                                            <label for="cardnumber"><strong>Card Type</strong><span
                                                    class="text-danger"> </span></label>
                                            <div class="controls position-relative has-icon-left">
                                                <select name="card_type" id="card_type" required
                                                    class="form-control select2">
                                                    <option value=''>Select Card Type</option>
                                                    <option value="visa">visa</option>
                                                    <option value="amex">amex</option>
                                                    <option value="discover">discover</option>
                                                    <option value="mastercard">mastercard</option>
                                                    <option value="MC">MC</option>
                                                </select>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="billingaddress">
                                        <div class="form-group">
                                            <label for="cardnumber"><strong>Credit Card Number</strong><span
                                                    class="text-danger"> </span></label>
                                            <div class="controls position-relative has-icon-left">
                                                <input autocomplete="nope" type="text" name="card_number"
                                                    id="card_number" required class="form-control" placeholder="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="cardfirstname"><strong>Card Expiry Date </strong><span
                                                    class="text-danger"> </span></label>
                                            <input autocomplete="nope" type="text" class="form-control"
                                                id="cardexpirydate" name="cardexpirydate" placeholder=""
                                                required="" value="">
                                            <div class="invalid-feedback">
                                                This field is required.
                                            </div>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="cardlastname"><strong>Card Security (CVC) </strong><span
                                                    class="text-danger"> </span></label>
                                            <input autocomplete="nope" type="text" value=""
                                                class="form-control" id="csvno" name="csvno" placeholder=""
                                                required maxlength="3">

                                            <div class="invalid-feedback">
                                                This field is required.
                                            </div>
                                        </div>
                                        <input type="hidden" name="save_but_value" id="save_but_value">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <br>
                        <div class="row mb-3">
                            <div class="col-lg-12 text-center">
                                <button type="submit" class="btn btn-primary w-35 submit_btn" id="submit_with_pay_btn"
                                    style=" font-size: 22px; border-radius: 10px; " name="save_but"
                                    value="save_with_pay" onclick="return validateForm();">
                                    Submit
                                </button>
                                <button type="submit" class="btn btn-danger w-35" name="save_but" id="cancel_btn"
                                    style=" font-size: 22px; border-radius: 10px; " value="save_without_pay">Cancel
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
    $(function() {
        $("#success-alert").hide();
    });
    function validateForm() {
        var firstname = document.getElementById("firstname").value;
        if (firstname == null || firstname == "") {
            $(".error_text").html("Please enter Card First Name!");
            $("#success-alert").fadeTo(2000, 500).slideUp(500, function() {
                $("#success-alert").slideUp(500);
            });
            $('#firstname').focus();
            $('#firstname').addClass("error");
            return false;
        }
        var lastname = document.getElementById("lastname").value;
        if (lastname == null || lastname == "") {
            $(".error_text").html("Please enter Card Last Name!");
            $("#success-alert").fadeTo(2000, 500).slideUp(500, function() {
                $("#success-alert").slideUp(500);
            });
            $('#lastname').focus();
            $('#lastname').addClass("error");
            return false;
        }
        var billaddress = document.getElementById("billing_address").value;
        if (billaddress == null || billaddress == "") {
            $(".error_text").html("Please enter billing address!");
            $("#success-alert").fadeTo(2000, 500).slideUp(500, function() {
                $("#success-alert").slideUp(500);
            });
            $('#billing_address').focus();
            $('#billing_address').addClass("error");
            return false;
        }
        var type_card = $('#card_type :selected').val();
        if (type_card == '') {
            $(".error_text").html("Please select Card Type!");
            $("#success-alert").fadeTo(2000, 500).slideUp(500, function() {
                $("#success-alert").slideUp(500);
            });
            $('#card_type').focus();
            $('#card_type').addClass("error");
            return false;
        }
        var cardno = document.getElementById("card_number").value;
        if (cardno == null || cardno == "") {
            $(".error_text").html("Please enter card no !");
            $("#success-alert").fadeTo(2000, 500).slideUp(500, function() {
                $("#success-alert").slideUp(500);
            });
            $('#card_number').focus();
            $('#card_number').addClass("error");
            return false;
        }
        if (cardno.length < 25) {
            $(".error_text").html("Please enter valid card no !");
            $("#success-alert").fadeTo(2000, 500).slideUp(500, function() {
                $("#success-alert").slideUp(500);
            });
            $('#card_number').focus();
            $('#card_number').addClass("error");

            return false;
        }
        var cardexpirydate = document.getElementById("cardexpirydate").value;
        var expire = cardexpirydate.replace(/\//g, "");
        var res = expire.split("  ");
        var card_year1 = res[1];
        var card_month1 = res[0];
        var year = "{{ date('Y') }}";
        var month = "{{ date('m') }}";
        year = parseInt(year);
        card_month1 = parseInt(card_month1);
        card_year1 = parseInt(card_year1);
        month = parseInt(month);
        if (month.toString().length < 2) {
            month = "0" + month;
        }
        if (card_month1.toString().length < 2) {
            card_month1 = "0" + card_month1;
        }
        var temp = 0;
        if (card_month1 > month) {
            temp++;
        }
        if (card_year1 > year) {
            temp++;
        }
        if (card_month1 < month && card_year1 > year) {
            temp++;
        }
        if (temp > 0) {
        }
        if (temp <= 0) {
            $(".error_text").html("Please enter valid expiry date");
            $("#success-alert").fadeTo(2000, 500).slideUp(500, function() {
                $("#success-alert").slideUp(500);
            });
            $('#cardexpirydate').focus();
            $('#cardexpirydate').addClass("error");
            return false;
        }
        var cardsecurity = document.getElementById("csvno").value;
        if (cardsecurity == null || cardsecurity == "") {
            $(".error_text").html("Please enter card card CVC !");
            $("#success-alert").fadeTo(2000, 500).slideUp(500, function() {
                $("#success-alert").slideUp(500);
            });
            $('#csvno').focus();
            $('#csvno').addClass("error");
            return false;
        }
        if (cardsecurity.length < 3) {
            $(".error_text").html("Please enter valid CVC !");
            $("#success-alert").fadeTo(2000, 500).slideUp(500, function() {
                $("#success-alert").slideUp(500);
            });
            $('#csvno').focus();
            $('#csvno').addClass("error");
            return false;
        }
    };
</script>