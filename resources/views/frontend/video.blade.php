@extends('frontend.layouts.master')

@section('content')

<!-- Breadcrumb Section -->
<section class="breadcrumb p-0 position-relative"
    style="background-image: url('{{ asset('image/breadcrumb-video-bg.jpg') }}');
           background-size: cover;
           background-position: center;
           height: 500px;">
    <div class="overlay"
         style="position:absolute; inset:0; background:rgba(0,0,0,.5);"></div>

    <div class="container position-relative h-100">
        <div class="breadcrumb-inner position-absolute top-50 start-50 translate-middle text-center">
            <h2 class="white" style="color:#fff;">
                Our Studios Stories
            </h2>
        </div>
    </div>
</section>


<!-- Video Gallery -->
<div class="tab-pane fade show active text-center"
     id="profile-tab-pane"
     role="tabpanel" aria-labelledby="profile-tab" tabindex="0">

    <div class="video-gallery gallery mb-3">

        @foreach ($videos as $video)
            <a
                data-fancybox="videos"
                href="{{ $video->youtube_url }}"
                class="position-relative">

                <img
                    src="{{ $video->thumbnail_url }}"
                    alt="{{ $video->title }}"
                    loading="lazy">

                <span class="overlay"></span>

                <span class="play-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                        <path d="M8 5v14l11-7z"/>
                    </svg>
                </span>
            </a>
        @endforeach

    </div>
</div>

@include('frontend.components.experience')
@include('frontend.components.maps')

@endsection
