<style>
    .rates {
        background: #8FC445;
        font-size: 24px;
        color: #FFFFFF;
        font-weight: bold;
        box-shadow: 0 0px 30px 0 #56ff0061;
        width: 62px;
        height: 42px;
        float: right;
        border-radius: 5px;
        display: flex;
        align-items: center;
        justify-content: center;
        margin: auto;
        -webkit-box-shadow: 0px 0px 15px 5px rgba(143, 196, 69, 0.7);
        -moz-box-shadow: 0px 0px 15px 5px rgba(143, 196, 69, 0.7);
        box-shadow: 0px 0px 15px 5px rgba(143, 196, 69, 0.7);
    }
    .tj-testimonial-section {
        padding: 80px 0px 60px 0;
        background: #ffffff;
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
    @keyframes custom-slides {
        from {
            transform: translateX(0);
        }
        to {
            transform: translateX(-80%);
        }
    }
</style>
<section class="tj-testimonial-section pb-0">
<div class="container">
    <div class="swiper-container swiper-container-8 swiper-new-2">
        <div class="swiper-wrapper">
            @foreach ($site_reviews as $site_review)
                <div class="swiper-slide">
                    <div class="card">
                        <a href="{{ $site_review->rating_url }}" target="_blank"
                            style="text-decoration: none; color: inherit;">
                            <div class="row">
                                <div class="col-md-6 col-6">
                                    <div>
                                        @if ($site_review->profile_name == 'BBB')
                                            <img
                                                src="{{ asset('frontend/images/testimonial/bbb.png') }}" width="100%"
                                                height="100%" alt="BBB" loading="lazy"/>
                                        @elseif ($site_review->profile_name == 'Google')
                                            <img
                                                src="{{ asset('frontend/images/testimonial/google.png') }}"
                                                width="75%" height="100%" alt="Google" loading="lazy"/>
                                        @elseif($site_review->profile_name == 'Transport Reviews')
                                            <img
                                                src="{{ asset('frontend/images/testimonial/transport.png') }}"
                                                width="100%" height="100%" alt="Transport Reviews" loading="lazy"/>
                                        @elseif($site_review->profile_name == 'Trust Pilot')
                                            <img
                                                src="{{ asset('frontend/images/testimonial/turst.png') }}"
                                                width="100%" height="100%" alt="Trust Pilot" loading="lazy"/>
                                        @endif
                                    </div>
                                    <div class="star">
                                        @for ($i = 1; $i <= 5; $i++)
                                            @if ($site_review->rating >= $i)
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                            @elseif ($site_review->rating >= $i - 0.5)
                                                <i class="fa a-star-o" aria-hidden="true"></i>
                                            @else
                                                <i class="fa fa-star-o text-light" aria-hidden="true"></i>
                                            @endif
                                        @endfor
                                    </div>
                                </div>
                                <div class="col-md-6 col-6">
                                    <div class="rates">
                                        {{ $site_review->rating }}
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
</section>
<script>
    document.addEventListener("DOMContentLoaded", function() {
        const swiperContainer = document.querySelector('.swiper-container-8');
        const swiper = new Swiper('.swiper-container-8', {
            slidesPerView: 3, 
            loop: true,
            spaceBetween: 10, 
            autoplay: {
                delay: 3000,
                disableOnInteraction: false,
            },
            speed: 800,
            breakpoints: {
                0: { 
                    slidesPerView: 1 
                }, 
                600: { 
                    slidesPerView: 2 
                },
                1000: { 
                    slidesPerView: 3 
                }, 
            }
        });
        swiperContainer.style.opacity = '1';
        swiperContainer.style.visibility = 'visible';
    });
</script>