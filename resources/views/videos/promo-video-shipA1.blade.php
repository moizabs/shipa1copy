@extends('frontend.layouts.app')

@section('title', 'Blog')

@section('meta_description',
    'ShipA1 helps you transport your vehicle in 3 easy steps: book, pickup, and delivery. Fast, safe, and simple car shipping. Talk to our advisor today!')
@section('canonical')
    <link rel="canonical" href="{{ request()->url() }}{{ request()->getQueryString() ? '?' . request()->getQueryString() : '' }}">
@endsection

@section('content')
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "VideoObject",
  "name": "Promo Video ShipA1 | BEST TRANSPORT COMPANY| OPEN TRANSPORT | ENCLOSED TRANSPORT",
  "description": "Looking to transport your vehicle? ShipA1 makes it fast, safe, and easy!
Book your vehicle shipment in just 3 simple steps:

Book your order

Vehicle pickup

Vehicle delivery

Talk to our shipping advisor today for booking and inquiries.
ShipA1 — Your trusted vehicle transport partner.",
  "thumbnailUrl": "https://img.youtube.com/vi/cr4Nya5jVn0/maxresdefault.jpg",
  "uploadDate": "2025-07-09",
  "duration": "PT0M42S",
  "contentUrl": "https://www.youtube.com/watch?v=cr4Nya5jVn0",
  "embedUrl": "https://www.youtube.com/embed/cr4Nya5jVn0?si=RLh4uuppLT63xVBT",
  "potentialAction": {
    "@type": "SeekToAction",
    "target": "https://www.shipa1.com/instant-quote={seek_to_second_number}",
    "startOffset-input": "required name=seek_to_second_number"
  }
}
</script>
    <section class="breadcrumb-wrapper" data-bg-image="{{ asset('frontend/images/banner/all-cover-banner.webp') }}">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-content">
                        <h1 class="breadcrumb-title text-center">
Promo Video ShipA1 | BEST TRANSPORT COMPANY| OPEN TRANSPORT | ENCLOSED TRANSPORT</h1>
                        <div class="breadcrumb-link">
                            <span>
                                <a href="{{ route('welcome') }}">
                                    <span>Home</span>
                                </a>
                            </span>
                            >
                            <span>
                                <span>Blog</span>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-md-10 text-center">
                <h2 class="mb-4"></h2>

                <div class="embed-responsive embed-responsive-16by9">
                    <iframe class="embed-responsive-item"
                        src="https://www.youtube.com/embed/cr4Nya5jVn0?si=RLh4uuppLT63xVBTPromo"
                        allowfullscreen></iframe>
                </div><br>
                <div class="text-center">
<h3 class="text-left">
   Description:

</h3>
<p class="text-left">
    Looking to transport your vehicle? ShipA1 makes it fast, safe, and easy!
Book your vehicle shipment in just 3 simple steps:

Book your order

Vehicle pickup

Vehicle delivery

Talk to our shipping advisor today for booking and inquiries.
ShipA1 — Your trusted vehicle transport partner.
</p>
</div>

            </div>
        </div>
    </div>

@endsection