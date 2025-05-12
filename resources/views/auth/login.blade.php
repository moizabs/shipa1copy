@extends('auth.layouts.app')

@section('content')
<style>
    body, html {
        height: 100%;
        margin: 0;
        font-family: Arial, Helvetica, sans-serif;
        background: linear-gradient(to right, #032000b0, #8fc44536), url(https://www.transparenttextures.com/patterns/cubes.png) !important;
    }
    .container {
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100%;
    }
    .login-box {
        display: flex;
        flex-direction: column;
        width: 90%;
        max-width: 800px;
        background: #fff;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        border-radius: 10px;
        overflow: hidden;
        animation: fadeIn 1s;
    }
    @keyframes fadeIn {
        from {
            opacity: 0;
            transform: translateY(-20px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }
    .login-box .left {
        padding: 30px;
        flex: 1;
    }
    .login-box .right {
        display: none;
        /* padding: 20px; */
        background: #8FC445;
        justify-content: center;
        align-items: center;
        text-align: center;
    }
    .login-box h1 {
        font-size: 24px;
        margin-bottom: 20px;
    }
    .login-box .form-group {
        margin-bottom: 15px;
    }
    .login-box .form-control {
        height: 45px;
        border-radius: 5px;
    }
    .login-box .btn {
        height: 45px;
        border-radius: 5px;
        background-color: #8FC445;
        border: none;
    }
    .login-box .btn:hover {
        background-color: #7DBF39;
    }
    .login-box .links {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-top: 10px;
    }
    .login-box .links a {
        color: #8FC445;
    }
    .login-box .signup {
        text-align: center;
        margin-top: 20px;
    }
    .login-box .signup a {
        color: #8FC445;
    }
    @media (min-width: 768px) {
        .login-box {
            flex-direction: row;
        }
        .login-box .right {
            display: flex;
            flex-direction: column;
        }
        .login-box .right img {
            width: 80%;
            animation: float 3s ease-in-out infinite;
        }
        .social-links {
            margin-top: 20px;
        }
        .social-links a {
            margin: 0 10px;
            display: inline-block;
            color: #fff;
            font-size: 24px;
            transition: color 0.3s;
        }
        .social-links a:hover {
            color: #c3c3c3;
        }
    }
    @keyframes slideIn {
        from {
            opacity: 0;
            transform: translateX(100%);
        }
        to {
            opacity: 1;
            transform: translateX(0);
        }
    }
    @keyframes float {
        0%, 100% {
            transform: translateY(0);
        }
        50% {
            transform: translateY(-10px);
        }
    }
    .fadeOut {
        animation: fadeOut 1s forwards;
    }
    @keyframes fadeOut {
        from {
            opacity: 1;
        }
        to {
            opacity: 0;
        }
    }
</style>
<div class="container">
    <div class="login-box">
        <div class="left">
            <h1>Create an Account!</h1>
            <form id="loginForm" method="POST" action="{{ route('login') }}">
                @csrf

                <div class="form-group">
                    <label for="email">{{ __('Email Address') }}</label>
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                    @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="password">{{ __('Password') }}</label>
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                    @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>

                <div class="form-group form-check">
                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                    <label class="form-check-label" for="remember">
                        {{ __('Remember Me') }}
                    </label>
                </div>

                <button type="submit" class="btn btn-primary btn-block">
                    {{ __('Login') }}
                </button>

                <div class="links">
                    @if (Route::has('password.request'))
                    <a href="{{ route('password.request') }}">
                        {{ __('Forgot Your Password?') }}
                    </a>
                    @endif
                </div>
            </form>

            <div class="signup"><br>
                <!-- <a href="{{ route('register') }}">Don't have an account? Signup!</a> -->
            </div>
        </div>
        <div class="right">
            <img src="{{ asset('frontend/images/logo/logo-white.png') }}" alt="Delivery illustration">
            <div class="social-links">
                <a href="https://www.facebook.com/shipa1autotransport" target="_blank" title="Facebook">
                    <i class="fab fa-facebook-f"></i>
                </a>
                <a href="https://www.youtube.com/@shipA1autotransport" target="_blank" title="YouTube">
                    <i class="fab fa-youtube"></i>
                </a>
                <a href="https://www.linkedin.com/in/shipa1-transport/" target="_blank" title="LinkedIn">
                    <i class="fab fa-linkedin-in"></i>
                </a>
                <a href="https://twitter.com/ShipA1Transport" target="_blank" title="Twitter">
                    <i class="fab fa-twitter"></i>
                </a>
                <a href="https://wa.me/+14107184031" target="_blank" title="WhatsApp">
                    <i class="fab fa-whatsapp"></i>
                </a>
            </div>
        </div>
    </div>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/js/all.min.js" integrity="sha512-..." crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script>
    document.getElementById('loginForm').addEventListener('submit', function(event) {
        event.preventDefault(); // Prevent the form from submitting immediately
        document.querySelector('.login-box').classList.add('fadeOut'); // Add fadeOut class
        setTimeout(() => {
            this.submit(); // Submit the form after the animation
        }, 1000); // Match the animation duration
    });
</script>
@endsection
