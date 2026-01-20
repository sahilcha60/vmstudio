@extends('frontend.layouts.master')

@section('content')

<!-- Breadcrumb Section -->
<section class="breadcrumb p-0 position-relative"
    style="background-image: url('{{ asset('image/breadcrumb-spotlight-bg.jpg') }}');
           background-size: cover;
           background-position: center;
           height: 500px;">
    <div class="overlay"
         style="position:absolute; inset:0; background:rgba(0,0,0,.5);"></div>

    <div class="container position-relative h-100">
        <div class="breadcrumb-inner position-absolute top-50 start-50 translate-middle text-center">
            <h2 class="white" style="color:#fff;">
                Our Studios Spotlights
            </h2>
        </div>
    </div>
</section>

<!-- Spotlight Name Filter -->
<section class="spotlight-filter py-4 bg-dark">
    <div class="container text-center">

        <div class="spotlight-filter-list">
            <span class="filter-item active" data-filter="all">ALL</span>

            @foreach ($spotlightNames as $name)
                <span class="filter-item"
                      data-filter="{{ Str::slug($name) }}">
                    {{ strtoupper($name) }}
                </span>
            @endforeach
        </div>

    </div>
</section>

<!-- GALLERY SECTION -->
<section class="client-gallery bg-secondary">
    <div class="container">
        <div class="client-gallery-inner grey text-center">
            <div class="review-tabs text-start grey">
                <div class="tab-content p-4 border-0">
                    <div class="tab-pane fade show active text-center">

                        <div class="gallery mb-3">

                            @foreach ($spotlights as $spotlight)

                                @foreach ($spotlight->image as $img)

                                    <a data-fancybox="gallery1"
                                      href="{{ asset('storage/' . $img) }}"
                                      class="position-relative gallery-item"
                                      data-name="{{ Str::slug($spotlight->name) }}">

                                        <span class="overlay"></span>

                                        <img src="{{ asset('storage/' . $img) }}"
                                            alt="{{ $spotlight->name }}">

                                    </a>

                                @endforeach

                            @endforeach

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@include('frontend.components.experience')
@include('frontend.components.maps')

@endsection