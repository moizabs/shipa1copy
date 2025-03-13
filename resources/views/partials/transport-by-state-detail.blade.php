<section class="tj-about-section-four">
    <div class="container">
        <h2 class="title sal-animate text-center mb-4 pb-4" data-sal="slide-left" data-sal-duration="800">
            {{ $transport->name }}
        </h2>
    </div>
</section>
<section class="tj-about-section pt-4">
    @foreach ($transport->details as $index => $detail)
        @if ($index % 2 == 0)
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 sal-animate pt-4 mt-4" data-sal="slide-left" data-sal-duration="800">
                        <div class="about-content-one">
                            <div class="tj-section-heading">
                                <span class="sub-title active-shape">{{ $detail->heading }}</span>
                                <p class="desc">{!! $detail->description !!}</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 sal-animate" data-sal="slide-left" data-sal-duration="800">
                        <div class="mt-4 rounded">
                            <div class="image-box">
                                <img class="rounded" src="{{ $detail->image }}" alt="Image">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @else
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 sal-animate" data-sal="slide-left" data-sal-duration="800">
                        <div class="mt-4 rounded">
                            <div class="image-box">
                                <img class="rounded" src="{{ $detail->image }}" alt="Image">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8 sal-animate pt-4 mt-4" data-sal="slide-left" data-sal-duration="800">
                        <div class="about-content-one">
                            <div class="tj-section-heading">
                                <span class="sub-title active-shape">{{ $detail->heading }}</span>
                                <p class="desc">{!! $detail->description !!}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endif
    @endforeach
</section>
