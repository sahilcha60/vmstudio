@extends('frontend.layouts.master')

@section('content')
  <!-- Banner Section Starts -->
<section class="banner p-0 overflow-hidden">
    <div class="banner-slider">
        @foreach($banners as $banner)
        <div class="slide position-relative" style="background-image: url('{{ asset('storage/' . $banner->image) }}');">
            <div class="overlay"></div>
            <div class="slide-inner position-absolute start-50 translate-middle white text-center w-50 m-auto pt-5">
                <h1 class="mb-3">{{ $banner->title }}</h1>
                <p class="mb-5">{{ $banner->content }}</p>
                <a href="{{ route('contact') }}" class="btn-primary">Contact us</a>
            </div>
        </div>
        @endforeach
    </div>
</section>
  <!-- Banner Section Ends -->

@include('frontend.components.gallery')

  <!-- About Section Starts -->
  <section class="about">
    <div class="container">
      <div class="about-inner text-center text-lg-start">
        <div class="row align-items-center gx-lg-5 gy-5">
          <div class="col-lg-5 order-2 order-lg-1">
            <div class="about-left">
              <div class="row gy-4">
                <div class="col-md-6">
                  <div class="about-img">
                    <img src="{{asset('image/about1.jpg')}}" alt="about image">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="about-img">
                    <img src="{{asset('image/about2.jpg')}}" alt="about image">
                  </div>
                </div>
                <div class="col-12">
                  <div class="about-img" style="margin-top: -25px;">
                    <img src="{{asset('image/about3.jpg')}}" alt="about image" class="w-75">
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-7 order-1 order-lg-2">
            <div class="about-right white">
              <h4 class="white mb-2">About Us</h4>
              <h2 class="white mb-3">Capturing the moments </br><span class="text-gradient"> captivate your heart</span></h2>
              <div class="header-divider"></div>
              <p>At Visionary Motion Studio, we are passionate about capturing life’s most meaningful moments through the lens of creativity and precision. Our team of talented photographers and videographers work tirelessly to transform your vision into stunning visuals that tell a story, evoke emotions, and leave a lasting impression.</p>
              <p class="mb-4">We pride ourselves on combining cutting-edge technology with artistic insight, ensuring every shot is perfectly framed, every detail beautifully highlighted, and every memory preserved with clarity and style. From personal portraits to professional projects, we strive to exceed expectations and deliver exceptional results that inspire and delight.</p>
              <a href="{{ route('about')}}" class="btn-primary mt-3">Learn More</a>
            </div>
          </div>
          @include('frontend.components.experience')
        </div>
      </div>
    </div>
  </section>
  <!-- About Section Ends -->

  <!-- Services Section Starts -->
  <section class="projects bg-secondary">
    <div class="container">
        <div class="projects-inner">
            <div class="projects-title text-center w-md-75 m-auto mb-5">
                <h4 class="white mb-2">Our Spotlights</h4>
                <h2 class="white mb-3">
                    Studio <span class="text-gradient">Spotlights</span>
                </h2>
                <div class="header-divider m-auto"></div>
            </div>

            <div class="projects-body">
                <div class="row g-2">
                    @foreach($spotlights as $spotlight)
                        @php
                            $firstImage = $spotlight->image[0] ?? null;
                        @endphp
                        @if($firstImage)
                            <div class="col-lg-3 col-md-4 col-sm-6">
                                <div class="project-img position-relative">
                                    <a href="{{ route('spotlight') }}">
                                        <span class="overlay"></span>
                                        <img src="{{ asset('storage/' . $firstImage) }}" 
                                             alt="{{ $spotlight->name }}" 
                                             class="img-fluid">
                                    </a>
                                </div>
                            </div>
                        @endif
                    @endforeach
                </div>

                <div class="text-center mt-3">
                    <a href="{{ route('spotlight') }}" class="btn-primary">
                        View All Spotlights
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

  <!-- Services Section Ends -->

  <!-- Projects Section Starts -->
<section class="projects bg-secondary">
  <div class="container">
      <div class="projects-inner">
          <div class="projects-title text-center w-md-75 m-auto mb-5">
              <h4 class="white mb-2">Our Portfolio</h4>
              <h2 class="white mb-3">
                  Recent <span class="text-gradient">Photography</span>
              </h2>
              <div class="header-divider m-auto"></div>
          </div>

          <div class="projects-body">
              <div class="row g-2">

                  @foreach ($categories as $category)
                      @foreach ($category->images as $image)
                          @if (!empty($image->image_url[0]))
                              <div class="col-lg-3 col-md-4 col-sm-6">
                                  <div class="project-img position-relative">
                                      <a href="{{ route('portfolio.single', $image->id) }}">
                                          <span class="overlay"></span>
                                          <img src="{{ asset('storage/' . $image->image_url[0]) }}" 
                                                alt="{{ $image->caption ?? $category->name }}" 
                                                class="img-fluid">
                                      </a>
                                  </div>
                              </div>
                          @endif
                      @endforeach
                  @endforeach

              </div>
          </div>
      </div>
  </div>
</section>
  <!-- Projects Section Ends -->

@include('frontend.components.testimonals')
@include('frontend.components.maps')

@endsection
