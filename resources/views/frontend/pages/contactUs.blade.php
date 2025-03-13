@extends('frontend.layouts.app')
@section('title', 'Contact Us')
@section('meta_description','Need assistance or have a question? Our team is ready to help! Contact us now and let’s get the conversation started. We’d love to hear from you!')
@section('content')
<style>
    .is-invalid {
        border-color: #ff0019;
    }
    .swal2-popup {
        background-color: #f8f9fa; 
        border-radius: 10px;
        color: #333;
    }
    .swal2-title {
        font-size: 24px;
        font-weight: bold;
    }
    .swal2-content {
        font-size: 16px;
    }
    .swal2-confirm {
        background-color: var(--tj-primary-color);
        color: #fff;
        border: none;
    }
    .swal2-cancel {
        background-color: #ff0019; 
        color: #fff; 
        border: none; 
    }
    .swal2-styled {
        border-radius: 5px;
    }
</style>
<section class="breadcrumb-wrapper" data-bg-image="{{ asset('frontend/images/banner/all-cover-banner.webp') }}">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb-content">
                    <h1 class="breadcrumb-title text-center">Contact Us</h1>
                    <div class="breadcrumb-link">
                        <span>
                            <a href="{{ route('welcome') }}">
                                <span>Home</span>
                            </a>
                        </span>
                        >
                        <span>
                            <span> Contact</span>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="tj-contact-page">
    <div class="container">
        <div class="row tj-contact-box">
            <div class="col-lg-4 col-md-6" data-sal="slide-left" data-sal-duration="800">
                <div class="tj-contact-list">
                    <div class="contact-icon">
                        <i class="flaticon-phone-call"></i>
                    </div>
                    <div class="contact-header">
                        <span>Any Questions? Call us</span>
                        <a href="tel: 1 (844) 474-4721">1 (844) 474-4721</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6" data-sal="slide-top" data-sal-duration="800">
                <div class="tj-contact-list">
                    <div class="contact-icon">
                        <i class="flaticon-email-3"></i>
                    </div>
                    <div class="contact-header">
                        <span>Any Questions? Email us</span>
                        <a href="mailto:shawntransport@shipa1.com" class="text-break"> shawntransport@shipa1.com</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6" data-sal="slide-right" data-sal-duration="800">
                <div class="tj-contact-list">
                    <div class="contact-icon">
                        <i class="flaticon-map"></i>
                    </div>
                    <div class="contact-header">
                        <span>201 International Cir STE 230,</span>
                        <a href="#"> Hunt Valley, MD 21030-1344</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row align-items-center">
            <div class="col-lg-7" data-sal="slide-right" data-sal-duration="800">
                <div class="tj-section-heading">
                    <span class="sub-title active-shape"> Need Any Help?</span>
                    <h2 class="title">Get in Touch With Us</h2>
                </div>
                <div class="tj-animate-form d-flex align-items-center">
                    <form id="contactForm" class="animate-form contactForm" action="{{ route('contact_messages.store') }}"
                        method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-lg-6 col-md-6">
                                <div class="form__div">
                                    <input type="text" class="form__input" name="first_name" placeholder=" " required/>
                                    <label class="form__label">First Name*</label>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div class="form__div">
                                    <input type="text" class="form__input" name="last_name" placeholder=" " required/>
                                    <label class="form__label">Last Name*</label>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div class="form__div">
                                    <input type="tel" class="form__input" name="phone" placeholder=" " required/>
                                    <label class="form__label">Phone*</label>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div class="form__div">
                                    <input type="email" class="form__input" name="email" placeholder=" " required/>
                                    <label class="form__label">Email Address*</label>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div class="form__div">
                                    <input type="text" class="form__input" name="website" placeholder=" " />
                                    <label class="form__label">Website</label>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div class="form__div">
                                    <input type="text" class="form__input" name="subject" placeholder=" " />
                                    <label class="form__label">Subject</label>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form__div">
                                    <input type="text" class="form__input textarea" name="message" placeholder=" " required/>
                                    <label class="form__label">Message*</label>
                                </div>
                            </div>
                        </div>
                        <div class="tj-theme-button">
                            <button id="submitButton" class="tj-primary-btn contact-btn" type="button">
                                Send Message <i class="flaticon-right-1"></i>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-lg-5" data-sal="slide-left" data-sal-duration="800">
                <div class="google-map">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3105.167331138309!2d-76.66251388426676!3d39.496062943506464!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c81261c3eae243%3A0x81e995e93023e64a!2s201%20International%20Cir%20STE%20230%2C%20Hunt%20Valley%2C%20MD%2021030%2C%20USA!5e0!3m2!1sen!2s!4v1649863458559!5m2!1sen!2s"
                        title="Google Maps location of [your specific location or purpose]"
                        loading="lazy" 
                        referrerpolicy="no-referrer-when-downgrade">
                    </iframe>
                </div>
            </div>
        </div>
    </div>
</section>
@include('partials.newsletter')
@endsection
@section('extraScript')
<script>
    $(document).ready(function() {
        $('#submitButton').click(function(e) {
            e.preventDefault(); 
            $('.contactForm .invalid-feedback').remove();
            var isValid = true;
            $('.contactForm input, .contactForm textarea').each(function() {
                var field = $(this);
                var fieldValue = field.val().trim();
                if (field.prop('required') && fieldValue === '') {
                    field.addClass('is-invalid');
                    isValid = false;
                    if (!field.next('.invalid-feedback').length) {
                        field.after('<div class="invalid-feedback">This field is required.</div>');
                    }
                } else {
                    field.removeClass('is-invalid'); 
                    field.next('.invalid-feedback').remove(); 
                }
            });
            if (isValid) {
                var formData = $('.contactForm').serialize();
                $.ajax({
                    type: 'POST',
                    url: '{{ route('contact_messages.store') }}',
                    data: formData,
                    success: function(response) {
                        Swal.fire({
                            icon: 'success',
                            title: 'Message Sent',
                            text: response.message
                        }).then(function() {
                            $('.contactForm')[0].reset();
                            $('.contactForm input, .contactForm textarea').removeClass('is-invalid');
                        });
                    },
                    error: function(xhr, status, error) {
                        var response = xhr.responseJSON;
                        Swal.fire({
                            icon: 'error',
                            title: 'Error',
                            text: response.message
                        });
                    }
                });
            } else {
                Swal.fire({
                    icon: 'warning',
                    title: 'Form Validation Error',
                    text: 'Please fill in all required fields.'
                });
            }
        });
        $('.contactForm input, .contactForm textarea').on('input', function() {
            $(this).removeClass('is-invalid');
            $(this).next('.invalid-feedback').remove(); 
        });
    });
</script>
@endsection