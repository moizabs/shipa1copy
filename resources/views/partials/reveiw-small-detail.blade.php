<style>
    .fa-star {
    color: #f39c12;
    }
    .rates {
        background: #8FC445;
        font-size: 12px;
        color: #FFFFFF;
        font-weight: bold;
        width: 36px;
        height: 22px;
        float: right;
        border-radius: 5px;
        display: flex;
        align-items: center;
        justify-content: center;
        margin-right: 10px;
    }
</style>
<section class="pt-4 mt-4">
    <div class="container">
        <h3 class="text-center mb-4">See what customers say about their experience with ShipA1 Transport.</h3>
        <div class="swiper-container swiper-container-1 swiper-new-2">
            <div class="swiper-wrapper">
                @foreach ($site_reviews as $key => $site_review)  
                    <div class="swiper-slide">
                        <div class="card" >
                            <div class="firstrow px-2 pt-2 d-flex justify-content-between">
                                <div>{{ $site_review->user }}</div>
                                <div class="d-flex">
                                    <div class="rates">{{ $site_review->rating }}</div>
                                    <div>
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
                            </div>
                            <div class="secondrow px-2 ">
                                <p style="font-size:15px;">
                                    <a href="{{ $site_review->rating_url }}" >
                                        <span class="text-dark">
                                        {!! \Illuminate\Support\Str::limit($site_review->description, 100) !!}
                                        </span>
                                        <span style="display:none;" class="text-dark">
                                        {!! $site_review->description !!}
                                        </span>
                                    </a>
                                </p>
                            </div>
                            <div class="thirdrow px-2 py-2 d-flex justify-content-between">
                                <div class="date">{{ $site_review->date }}</div>
                                <div>
                                    <div class="images">
                                        @if ($site_review->profile_name == 'BBB')
                                            <img class="float-end"
                                                src="{{ asset('frontend/images/testimonial/bbb.png') }}" width="60%"
                                                height="100%" alt="BBB" loading="lazy"/>
                                        @elseif ($site_review->profile_name == 'Google')
                                            <img class="float-end"
                                                src="{{ asset('frontend/images/testimonial/google.png') }}"
                                                width="80%" height="100%" alt="Google" loading="lazy"/>
                                        @elseif($site_review->profile_name == 'Transport Reviews')
                                            <img class="float-end"
                                                src="{{ asset('frontend/images/testimonial/transport.png') }}"
                                                width="90%" height="100%" alt="Transport Reviews" loading="lazy"/>
                                        @elseif($site_review->profile_name == 'Trust Pilot')
                                            <img class="float-end"
                                                src="{{ asset('frontend/images/testimonial/turst.png') }}"
                                                width="70%" height="100%" alt="Trust Pilot" loading="lazy"/>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</section>
<script>
    document.addEventListener("DOMContentLoaded", function() {
        const swiperContainer = document.querySelector('.swiper-container-1');
        const swiper = new Swiper('.swiper-container-1', {
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