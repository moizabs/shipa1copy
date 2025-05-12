<section class="tj-testimonial-section">
    <div class="container">
        <div class="row">
            <div class="tj-section-heading text-center">
                <span class="sub-title active-shape"> Client Feedback</span>
                <h2 class="title">Our Client Reviews</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="swiper tj-testimonial-slider">
                    <div class="swiper-wrapper">
                        @foreach ($site_reviews as $review)
                            <div class="swiper-slide">
                                <div class="tj-testimonial-item">
                                    <div class="testimonial-rating d-flex justify-content-between">
                                        <div class="testimoniasl-image">
                                            <img loading="lazy" src="{{ asset('frontend/images/icon/comment.svg') }}" alt="Icon" />
                                        </div>
                                        <div class="rating-icon">
                                            <ul class="list-gap">
                                                @for ($i = 0; $i < (int) floor($review->rating); $i++)
                                                    <li><i class="fa fa-star text-warning"></i></li>
                                                @endfor
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="content-area">
                                        <p style="height: 100px;">
                                            {{-- {{ $review->description }} --}}
                                            {{ !is_null($review->description) ? Illuminate\Support\Str::limit($review->description, 170, '...') : '' }}
                                        </p>
                                        <br><br><br>
                                        <div class="testimonial-content d-flex justify-content-between">
                                            <div class="testimonial-auother">
                                                <h5 class="title ">{{ $review->user }} </h5>
                                                <span
                                                    class="sub-title ">{{ !is_null($review->date) ? \Carbon\Carbon::parse($review->created_at)->format('M d, Y') : '' }}</span>
                                            </div>
                                            <div class="testimonial-comment ">
                                                {{-- @if ($review->site_name == 'BBB')
                                                    <img src="{{ asset('frontend/images/testimonial/bbb.png') }}"
                                                        alt="Image" style="width: 70px; height: 30px;" />
                                                @elseif ($review->site_name == 'Google')
                                                    <img src="{{ asset('frontend/images/testimonial/google.png') }}"
                                                        alt="Image" style="width: 70px; height: 30px;" />
                                                @else
                                                    <img src="{{ asset('frontend/images/testimonial/transport.png') }}"
                                                        alt="Image" style="width: 70px; height: 30px;" />
                                                @endif --}}
                                                @if ($review->profile_name == 'BBB')
                                                    <img class="float-end"
                                                        src="{{ asset('frontend/images/testimonial/bbb.png') }}" width="60%"
                                                        height="100%" alt="BBB" loading="lazy"/>
                                                @elseif ($review->profile_name == 'Google')
                                                    <img class="float-end"
                                                        src="{{ asset('frontend/images/testimonial/google.png') }}"
                                                        width="100%" height="100%" alt="Google" loading="lazy"/>
                                                @elseif($review->profile_name == 'Transport Reviews')
                                                    <img class="float-end"
                                                        src="{{ asset('frontend/images/testimonial/transport.png') }}"
                                                        width="90%" height="100%" alt="Transport Reviews" loading="lazy"/>
                                                @elseif($review->profile_name == 'Trust Pilot')
                                                    <img class="float-end"
                                                        src="{{ asset('frontend/images/testimonial/turst.png') }}"
                                                        width="100%" height="100%" alt="Trust Pilot" loading="lazy"/>
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
        </div>
    </div>
</section>