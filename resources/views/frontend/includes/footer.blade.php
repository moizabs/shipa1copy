<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" defer></script>
<style>
    .social-media-section {
        position: relative;
        bottom: 70px;
    }
    .social-media-section h1 {
        margin-bottom: 20px;
        color: #fff;
    }
    .social-icons {
        display: flex;
        justify-content: space-evenly;
    }
    .social-icons a {
        color: #fff;
        transition: color 0.3s ease, transform 0.3s ease;
        text-decoration: none;
    }
    .social-icons a:hover {
        color: #ddd;
        transform: scale(1.1);
    }
    @media (max-width: 768px) {
        .social-media-section h1 {
            font-size: 20px;
        }
        .social-icons {
            gap: 10px;
        }
        .social-icons a {
            font-size: 1.5rem;
        }
    }
    @media (max-width: 576px) {
        .social-media-section h1 {
            font-size: 18px;
        }
        .social-icons a {
            font-size: 1.2rem;
        }
    }
</style>
<footer class=tj-footer-area>
    <div class=container>
    <div class=row>
    <div class="col-xl-4 col-lg-3 col-md-6 col-sm-6">
    <div class="footer-widget footer1_col_1 footer-content-info">
    <a href="{{ route('welcome') }}"> <img src="{{ asset('/frontend/images/logo/logo-white-2.webp') }}" loading=lazy alt=Logo></a>
    <p>
    Ship A1 Transport is one of the top logistic and shipping companies, with a vast variety of shipping methods, quality services, and a well-equipped staff.
    </p>
    <div class="row mt-3">
    <div class=col-lg-12>
    <h4 class="text-white text-center mb-3">Follow Us on Social Media</h4>
    <div class="social-icons">
        <a href="https://www.facebook.com/shipa1autotransport" aria-label="Follow us on Facebook">
            <i class="fa-brands fa-facebook-f text-white fa-2x"></i>
        </a>
        <a href="https://www.instagram.com/shipa1_transport/" aria-label="Follow us on Instagram">
            <i class="fa-brands fa-instagram text-white fa-2x"></i>
        </a>
        <a href="https://www.linkedin.com/in/shipa1-transport/" aria-label="Connect with us on LinkedIn">
            <i class="fa-brands fa-linkedin-in text-white fa-2x"></i>
        </a>
        <a href="https://www.youtube.com/@shipA1autotransport/" aria-label="Subscribe to our YouTube channel">
            <i class="fa-brands fa-youtube text-white fa-2x"></i>
        </a>
        <a href="https://wa.me/+14107184031" aria-label="Chat with us on WhatsApp">
            <i class="fa-brands fa-whatsapp text-white fa-2x"></i>
        </a>
    </div>    
    </div>
    </div>
    </div>
    </div>
    <div class="col-xl-2 col-lg-3 col-md-6 col-sm-6">
    <div class="footer-widget footer1_col_2 widget_nav_menu">
    <div class=footer-title>
    <h5 class=title>Our Services</h5>
    </div>
    <div class=widget-menu>
    <ul>
    <li>
    <a href="{{ route('frontend.pages.services.boat-service') }}">Boat Transport</a>
    </li>
    <li>
    <a href="{{ route('frontend.pages.services.car-service') }}">Car Transport</a>
    </li>
    <li>
    <a href="{{ route('frontend.pages.services.dryvan-service') }}">Dry Van Transport</a>
    </li>
    <li>
    <a href="{{ route('frontend.pages.services.golf-cart-service') }}">Golf Cart Transport</a>
    </li>
    <li>
    <a href="{{ route('frontend.pages.services.heavy-service') }}">Heavy Equipment</a>
    </li>
    <li style=width:108%>
    <a href="{{ route('frontend.pages.services.bike-service') }}">Motorcycle Shipping</a>
    </li>
    <li>
    <a href="{{ route('frontend.pages.services.reefer-service') }}">Reefer Transport</a>
    </li>
    <li>
    <a href="{{ route('frontend.pages.services.rv-service') }}">RV Transport</a>
    </li>
    <li>
    <a href="{{ route('services') }}">View More</a>
    </li>
    </ul>
    </div>
    </div>
    </div>
    <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
    <div class="footer-widget footer1_col_3 widget_nav_menu">
    <div class=footer-title>
    <h5 class=title>Useful Links</h5>
    </div>
    <div class=widget-menu>
    <ul>
    <li>
    <a href="{{ route('aboutUs') }}">About Us </a>
    </li>
    <li>
    <a href="{{ route('blogs') }}">Blogs</a>
    </li>
    <li>
    <a href="{{ route('contactUs') }}">Contact Us</a>
    </li>
    <li>
    <a href="{{ route('faq') }}">FAQ!</a>
    </li>
    <li>
    <a href="{{ route('order.form') }}">Order Form</a>
    </li>
    <li>
    <a href="{{ route('blogs.trailer.truck') }}">Trailers & Trucks</a>
    </li>
    <li>
    <a href="{{ route('order.tracking') }}">Track Order </a>
    </li>
    <li>
    <a href="{{ route('termsAndConditions') }}">Terms & Conditions</a>
    </li>
    <li>
    <a href="{{ route('privacyPolicy') }}">Privacy Policy</a>
    </li>
    </ul>
    </div>
    </div>
    </div>
    <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
    <div class="footer-widget footer1_col_4 footer-contact-info">
    <div class=footer-title>
    <h5 class=title>Contact Info</h5>
    </div>
    <div class=widget-contact>
    <div class=contact-list>
    <ul class=list-gap>
    <li><i class=flaticon-placeholder></i><a href="https://www.google.com/maps/place/201+International+Cir+STE+230,+Hunt+Valley,+MD+210301344,+USA/@39.4960629,-76.6603247,17z/data=!3m2!4b1!5s0x89c8128abe53a693:0xccf0052e1abf77f2!4m6!3m5!1s0x89c81261c3eae243:0x81e995e93023e64a!8m2!3d39.4960629!4d-76.6603247!16s%2Fg%2F11scxbqcdd?entry=ttu">
    201 International Cir STE 230, Hunt Valley, MD 21030-1344</a>
    </li>
    <li>
    <i class=flaticon-phone-call></i>
    <a href="tel: 1 (844) 474-4721"> 1 (844) 474-4721</a>
    </li>
    <li>
    <i class=flaticon-email-2></i>
    <a href=mailto:info@shipa1.com> shawntransport@shipa1.com</a>
    </li>
    </ul>
    </div>
    </div>
    </div>
    <div class="footer-widget footer1_col_4 footer-contact-info mt-4">
    <div class=footer-title>
    <h5 class=title>Review & Rating</h5>
    </div>
    <div class="widget-contact d-flex" style=position:relative;right:19px>
    <div class=contact-list>
    <a href=https://www.bbb.org/us/md/hunt-valley/profile/trucking-transportation-brokers/ship-a1-llc-0011-90287002/customer-reviews target=_blank title="Google Reviews">
    <img loading=lazy src="{{ asset('/public/frontend/images/project/test-BBB (1).webp') }}" alt=Image loading=lazy style=width:191px>
    </a>
    </div>
    <div class=contact-list>
    <a href="https://www.google.com/search?q=shipa1&rlz=1C1GCEU_enPK1086PK1086&oq=shipa1+&gs_lcrp=EgZjaHJvbWUqBggAEEUYOzIGCAAQRRg7MgYIARBFGDsyBggCEEUYPDIGCAMQRRg8MgYIBBBFGDwyBggFEEUYQTIGCAYQRRhBMgYIBxBFGEHSAQg2MzYwajBqN6gCALACAA&sourceid=chrome&ie=UTF-8" target=_blank title=Trustpilot>
    <img loading=lazy src="{{ asset('/public/frontend/images/project/test-BBB (2).webp') }}" alt=Image loading=lazy style=position:relative;width:102px;bottom:4px>
    </a>
    <a href=https://www.trustpilot.com/review/shipa1.com target=_blank title=Trustpilot>
    <img loading=lazy src="{{ asset('/public/frontend/images/project/test-BBB (3).webp') }}" alt=Image loading=lazy style=height:100px;width:100px;position:relative;bottom:58px>
    </a>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    <div class=copyright-bottom>
    <div class=container>
    <div class=row>
    <div class="col-lg-12 text-center">
    <div class=footer-copyright-area>
    <div class=copyright-target>
    <p>
    Copyright © 2025 ShipA1. All Rights Reserved.
    </p>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    </footer>