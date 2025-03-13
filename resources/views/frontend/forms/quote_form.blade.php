@extends('frontend.layouts.app')
@section('title', 'Get Quote for Commercial & Non Commercial Vehicles')
@section('meta_description',
'Get instant quote for commercial & non commercial vehicles from trusted providers. Simple and comprehensive instant quote services.')
@section('content')
<style>
    .text-overline {
        text-decoration: overline;
    }
    .services-h1 {
        text-align: center;
        text-decoration: overline;
        margin-bottom: 50px;
        color: #ffffff;
    }
    .services {
        text-align: center;
        border-radius: 12px;
        padding: 10px 30px 0px 30px;
    }
    .custom-card {
        background: #ffffff70;
        border: none;
        border-radius: 10px;
        margin-bottom: 20px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        overflow: hidden;
        position: relative;
        transition: transform 0.8s;
    }
    .card-body::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background: rgba(255, 255, 255, 0.5);
        z-index: 1;
        transition: background 0.8s ease-in-out;
        opacity: 0;
    }
    .custom-card:hover {
        transform: translateY(-10px);
    }
    .card-body {
        transition: 0.8s;
        text-align: center;
        padding: 20px;
        transition: .8s ease-in-out;
        background-size: cover;
        background-position: center;
    }
    .card-title {
        color: black;
        font-size: 1.25rem;
        font-weight: bold;
    }
    .card-text {
        text-wrap: nowrap;
        color: black;
        font-size: 1rem;
    }
    .btn-primary {
        background-color: #8FC445;
        border: none;
        border-radius: 5px;
    }
    .custom-card:hover .card-title,
    .custom-card:hover .card-text {
        color: white;
    }
    .custom-card :hover .card-icon i {
        color: #000000;
    }
    .custom-card.car-card:hover .card-body {
        background-image: url('{{ asset('/frontend/images/slider/car-transports.webp') }}');
    }
    .custom-card.motorcycle-card:hover .card-body {
        background-image: url('{{ asset('/frontend/images/service/Bike.webp') }}');
    }
    .custom-card.heavy-equip-card:hover .card-body {
        background-image: url('{{ asset('frontend/images/slider/home-slider-2.webp') }}');
    }
    .custom-card.atv-utv-card:hover .card-body {
        background-image: url('{{ asset('img/atv.webp') }}');
    }
    .custom-card.excavator-card:hover .card-body {
        background-image: url('{{ asset('/frontend/images/service/Excavator.webp') }}');
    }
    .custom-card.construction-card:hover .card-body {
        background-image: url('{{ asset('/frontend/images/service/Construction.webp') }}');
    }
    .custom-card.farm-card:hover .card-body {
        background-image: url('{{ asset('img/farm-equipment.webp') }}');
    }
    .custom-card.trucks-card:hover .card-body {
        background-image: url('{{ asset('img/truck-.webp') }}');
    }
    .custom-card.boat-card:hover .card-body {
        background-image: url('{{ asset('img/boat2.webp') }}');
    }
    .custom-card.dry-van-card:hover .card-body {
        background-image: url('{{ asset('img/dry-van.webp') }}');
    }
    .custom-card.roro-card:hover .card-body {
        background-image: url('{{ asset('img/roro-banner.webp') }}');
    }
    .custom-card.golf-cart-card:hover .card-body {
        background-image: url('{{ asset('/frontend/images/service/Golf.webp') }}');
    }
    .custom-card.rv-card:hover .card-body {
        background-image: url('{{ asset('/frontend/images/service/RV.webp') }}');
    }
    .custom-card.commercial-card:hover .card-body {
        background-image: url('{{ asset('/frontend/images/service/Commercial.webp') }}');
    }
    .custom-card.Reefer-card:hover .card-body {
        background-image: url('{{ asset('img/ReeferTruck3.webp') }}');
    }
    .custom-card.hazmat-card:hover .card-body {
        background-image: url('{{ asset('img/HAZMAT-BANNER.webp') }}');
    }
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
<section class="tj-choose-us-section-get-quote pt-200">
    <div class="container w-75">
        <h1 class="text-center text-white mb-5 text-overline  position-relative">Get an instant Quote</h1>
        <div class="row ">
            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="custom-card car-card">
                    <div class="card-body">
                        <div class="card-icon">
                        </div>
                        <h2 class="card-title">Car</h2>
                        <p class="card-text">Sedan, SUV, Pickup etc.</p>
                        <a href="{{ route('form.vehicle.car') }}">
                            <button class="tj-submit-btn" type="button">Get Quote</button>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="custom-card motorcycle-card">
                    <div class="card-body">
                        <div class="card-icon">
                        </div>
                        <h2 class="card-title">Motorcycle</h2>
                        <p class="card-text">Mopeds, Power Sports etc.</p>
                        <a href="{{ route('form.vehicle.form.vehicle.car') }}">
                            <button class="tj-submit-btn" type="button">Get Quote</button>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="custom-card atv-utv-card">
                    <div class="card-body">
                        <div class="card-icon">
                        </div>
                        <h2 class="card-title">ATV/UTV</h2>
                        <p class="card-text">Sport, Quads, Military etc.</p>
                        <a href="{{ route('form.vehicle.atv_utv') }}">
                            <button class="tj-submit-btn" type="button">Get Quote</button>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="custom-card golf-cart-card">
                    <div class="card-body">
                        <div class="card-icon">
                        </div>
                        <h2 class="card-title">Golf Cart</h2>
                        <p class="card-text">Utility cart, electric cart etc.</p>
                        <a href="{{ route('form.vehicle.golf_cart') }}">
                            <button class="tj-submit-btn" type="button">Get Quote</button>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="custom-card construction-card">
                    <div class="card-body">
                        <div class="card-icon">
                        </div>
                        <h2 class="card-title">Construction</h2>
                        <p class="card-text">Cranes, Drills, Grinders etc.</p>
                        <a href="{{ route('frontend.forms.construction_transport') }}">
                            <button class="tj-submit-btn" type="button">Get Quote</button>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="custom-card heavy-equip-card">
                    <div class="card-body">
                        <div class="card-icon">
                        </div>
                        <h2 class="card-title">Heavy Equip</h2>
                        <p class="card-text">Trucks, Bulldozers etc.</p>
                        <a href="{{ route('form.vehicle.heavyEquipment') }}">
                            <button class="tj-submit-btn" type="button">Get Quote</button>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="custom-card excavator-card">
                    <div class="card-body">
                        <div class="card-icon">
                        </div>
                        <h2 class="card-title">Excavator</h2>
                        <p class="card-text">Digger, Driller, Miners etc.</p>
                        <a href="{{ route('frontend.forms.excavator') }}">
                            <button class="tj-submit-btn" type="button">Get Quote</button>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="custom-card boat-card">
                    <div class="card-body">
                        <div class="card-icon">
                        </div>
                        <h2 class="card-title">Boat</h2>
                        <p class="card-text">Speedboats, yard, jet skis etc.</p>
                        <a href="{{ route('form.vehicle.boat') }}">
                            <button class="tj-submit-btn" type="button">Get Quote</button>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="custom-card rv-card">
                    <div class="card-body">
                        <div class="card-icon">
                        </div>
                        <h2 class="card-title">RV</h2>
                        <p class="card-text">Motorhome, camper van etc.</p>
                        <a href="{{ route('frontend.forms.rv_transport') }}">
                            <button class="tj-submit-btn" type="button">Get Quote</button>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="custom-card commercial-card">
                    <div class="card-body">
                        <div class="card-icon">
                        </div>
                        <h2 class="card-title">Commercial Truck</h2>
                        <p class="card-text">Commercial, Dump Trucks etc.</p>
                        <a href="{{ route('commercial.truck.transport') }}">
                            <button class="tj-submit-btn" type="button">Get Quote</button>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="custom-card farm-card">
                    <div class="card-body">
                        <div class="card-icon">
                        </div>
                        <h2 class="card-title">Farm</h2>
                        <p class="card-text">Tractor, Planter, Baler etc.</p>
                        <a href="{{ route('frontend.forms.farm_transport') }}">
                            <button class="tj-submit-btn" type="button">Get Quote</button>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="custom-card Reefer-card">
                    <div class="card-body">
                        <div class="card-icon">
                        </div>
                        <h2 class="card-title">Reefer</h2>
                        <p class="card-text">frozen , refrigerated etc.</p>
                        <a href="{{ route('frontend.forms.reefertrucking') }}">
                            <button class="tj-submit-btn" type="button">Get Quote</button>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="custom-card hazmat-card">
                    <div class="card-body">
                        <div class="card-icon">
                        </div>
                        <h2 class="card-title">Hazmat</h2>
                        <p class="card-text">Explosive, Flammable, etc.</p>
                        <a href="{{ route('frontend.forms.hazmattransport') }}">
                            <button class="tj-submit-btn" type="button">Get Quote</button>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="custom-card dry-van-card">
                    <div class="card-body">
                        <div class="card-icon">
                        </div>
                        <h2 class="card-title">Dry Van</h2>
                        <p class="card-text">palletized, boxed, freight etc.</p>
                        <a href="{{ route('frontend.forms.dryvan') }}">
                            <button class="tj-submit-btn" type="button">Get Quote</button>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="custom-card roro-card">
                    <div class="card-body">
                        <div class="card-icon">
                        </div>
                        <h2 class="card-title">RORO</h2>
                        <p class="card-text">palletized, boxed, freight etc.</p>
                        <a href="{{ route('form.vehicle.roro') }}">
                            <button class="tj-submit-btn" type="button">Get Quote</button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
@section('extraScript')
@endsection