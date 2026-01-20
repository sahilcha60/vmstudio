@extends('frontend.layouts.master')

@section('content')

<!-- Breadcrumb background -->
<section class="breadcrumb p-0 position-relative mb-0" 
         style="background-image: url('{{ $category->cover_image ? Storage::url($category->cover_image) : '' }}'); 
                background-size: cover; 
                background-position: center; 
                height: 300px;">
    <div class="overlay" style="position: absolute; top:0; left:0; width:100%; height:100%; background-color: rgba(0,0,0,0.5);"></div>
    <div class="container position-relative h-100">
        <div class="breadcrumb-inner position-absolute top-50 start-50 translate-middle text-center w-100 w-md-75">
            <h2 class="white mb-3">{{ $category->name ?? 'Portfolio' }}</h2>
        </div>
    </div>
</section>

<!-- Portfolio Detail Section -->
<section class="portfolio-detail py-5">
    <div class="container">
        <div class="row">
            <!-- LEFT -->
            <div class="col-lg-8">  
                <div class="portfolio-gallery">
                    <div class="row g-3">
                        @if($category->images->isNotEmpty())
                            @foreach($category->images as $portfolioImage)
                                @if(!empty($portfolioImage->image_url))
                                    @foreach($portfolioImage->image_url as $img)
                                        <div class="col-6 col-md-4 col-lg-6">
                                            <a data-fancybox="portfolio-gallery" href="{{ Storage::url($img) }}" class="d-block position-relative">
                                                <span class="overlay position-absolute top-0 start-0 w-100 h-100"></span>
                                                <img src="{{ Storage::url($img) }}" alt="{{ $portfolioImage->caption ?? 'Portfolio Image' }}" class="img-fluid w-100" loading="lazy">
                                            </a>
                                        </div>
                                    @endforeach
                                @endif
                            @endforeach
                        @endif
                    </div>
                </div>

                <!-- Tools -->
                <div class="tool-names mt-4">
                    @if($category->tools->isNotEmpty())
                        @foreach($category->tools as $tool)
                            {!! $tool->tool_name !!}
                        @endforeach
                    @endif
                </div>
            </div>

            <!-- RIGHT -->
            <div class="col-lg-4">
                <div class="portfolio-detail-right position-sticky" style="top: 100px;">
                    <!-- CTA -->
                    <div class="closing-section mb-5 text-center">
                        <p>Love what you see? Let’s create something beautiful together.</p>
                        <a href="{{ route('contact') }}" class="btn-primary mt-2">Book Your Session</a>
                    </div>

                    <!-- Contact Info -->
                    <div class="contact-info p-4 bg-secondary">
                        <h4 class="text-center">Contact Information</h4>
                        <div class="seperator bg-primary w-25 m-auto mb-4" style="height:2px;"></div>

                        <ul class="white text-start">
                            <li class="mb-4">
                                <i class="fa fa-map-marker me-2"></i> Kaldhara, Kathmandu, Nepal
                            </li>
                            <li class="mb-4">
                                <i class="fa fa-phone me-2"></i> +977 9860584778
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
<!-- Portfolio Detail Ends -->

@include('frontend.components.experience')
@include('frontend.components.maps')

@endsection
