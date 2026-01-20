@extends('frontend.layouts.master')

@section('content')

<!-- Breadcrumb Section Starts -->
<section class="breadcrumb p-0 position-relative" style="background-image: url('{{ asset('image/breadcrumb-cat-bg.jpg') }}'); background-size: cover; background-position: center; height: 500px;">
  <div class="overlay" style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background-color: rgba(0,0,0,0.5);"></div>
  <div class="container position-relative h-100">
    <div class="breadcrumb-inner position-absolute top-50 start-50 translate-middle text-center">
      <h2 class="white" style="color: #fff; text-shadow: 2px 2px 10px rgba(0,0,0,0.7);">Our Portfolio Categories</h2>
    </div>
  </div>
</section>
<!-- Breadcrumb Section Ends -->

<!-- Portfolio Categories Section Starts -->
<section class="portfolio">
  <div class="container">
    <div class="portfolio-inner d-flex flex-lg-row flex-column gap-5">

      <!-- Portfolio Categories -->
      <div class="flex-grow-1">
        <div class="portfolio-list mb-5">
          @forelse($categories as $category)
            <div class="portfolio-box p-3 border border-light mb-4">
              <div class="row align-items-center gx-lg-5 gy-4">
                <div class="col-lg-5">
                  <div class="portfolio-box-img">
                    @if($category->cover_image)
                      <img src="{{ asset('storage/'.$category->cover_image) }}" 
                           alt="{{ $category->name }}" 
                           class="w-100">
                    @else
                      @php
                        $firstImage = $category->images->first();
                      @endphp
                      @if($firstImage && !empty($firstImage->image_url[0]))
                        <img src="{{ asset('storage/'.$firstImage->image_url[0]) }}" 
                             alt="{{ $category->name }}" 
                             class="w-100">
                      @endif
                    @endif
                  </div>
                </div>
                <div class="col-lg-7">
                  <div class="portfolio-box-info grey">
                    <h3 class="mb-2">
                      <a href="{{ route('portfolio.single', ['slug' => $category->slug]) }}" class="primary">
                        {{ $category->name }}
                      </a>
                    </h3>
                    @if($category->description)
                      <p class="mb-3">{!! $category->description !!}</p>
                    @endif

                    <a href="{{ route('portfolio.single', ['slug' => $category->slug]) }}" class="btn-primary mt-2">View Projects</a>
                  </div>
                </div>
              </div>
            </div>
          @empty
            <p class="text-center text-muted">No portfolio categories found.</p>
          @endforelse
        </div>

        <!-- Pagination -->
        <div class="d-flex justify-content-center mt-4">
            {{ $categories->onEachSide(1)->links('vendor.pagination.custom') }}
        </div>

        <div class="closing-section text-center grey mt-5">
            <p class="mb-2">Discover the breadth of our creative work and the expertise we bring to every assignment.</p>
            <p class="mb-4">Call us to experience the quality and attention to detail that sets us apart.</p>
            <a href="{{ route('contact') }}" class="btn-primary">Book a Session</a>
        </div>
      </div>

    </div>
  </div>
</section>
<!-- Portfolio Categories Section Ends -->

@include('frontend.components.experience')
@include('frontend.components.maps')

@endsection
