@extends('frontend.layouts.master')

@section('content')

<!-- Breadcrumb Section Starts -->
<section class="breadcrumb p-0 position-relative" style="background-image: url('{{ asset('image/breadcrumb-about-bg.jpg') }}'); background-size: cover; background-position: center; height: 500px;">
  <div class="overlay" style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background-color: rgba(0,0,0,0.5);"></div>
  <div class="container position-relative h-100">
    <div class="breadcrumb-inner position-absolute top-50 start-50 translate-middle text-center">
      <h2 class="white" style="color: #fff; text-shadow: 2px 2px 10px rgba(0,0,0,0.7);">About Us</h2>
    </div>
  </div>
</section>
  <!-- Breadcrumb Section Ends -->

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
            </div>
          </div>
          <div class="col-12 order-3">
            <div class="about-bottom white">
              <div class="row align-items-center gy-4 gx-lg-5">
                <div class="col-lg-3">
                  <div class="about-bottom-left text-uppercase text-lg-end">
                    <span class="h3 fw-semibold">10 Year +</span>
                    <p class="mb-0 mt-2">of experience in this ground</p>
                  </div>
                </div>
                <div class="col-lg-9">
                  <div class="about-bottom-right">
                    <p class="mb-0">At Visionary Motion Studio, we’ve spent years turning moments into memories. Every photo and video we create is driven by our passion for storytelling and our love for capturing life’s genuine emotions. From joyful celebrations to professional projects, we take the time to understand your vision and make it come alive, because every story deserves to be told beautifully.</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- About Section Ends -->

<section id="video-section" class="services position-relative border-top border-bottom border-light">
  <div class="overlay"></div>
  <div class="container position-relative">
    <div class="services-inner">
      <div class="services-title text-center w-md-75 m-auto mb-5">
        <h4 class="white mb-2">Visit Our Studio</h4>
        <h2 class="white mb-3">Video <span class="text-gradient">Show</span></h2>
        <div class="header-divider m-auto"></div>
      </div>
      <div class="services-body text-center">
        <div class="row justify-content-center mb-4">
          <div class="col-lg-10 col-md-12">
            <div class="services-box position-relative">
              <!-- Responsive YouTube Embed -->
              <div class="embed-responsive" style="position: relative; padding-bottom: 56.25%; height: 0; overflow: hidden;">
                <iframe 
                  id="studioVideo"
                  src="https://www.youtube.com/embed/mQVBJ1kugO0?enablejsapi=1&controls=1&loop=1&playlist=mQVBJ1kugO0" 
                  title="YouTube video player" 
                  frameborder="0" 
                  allow="autoplay; fullscreen; picture-in-picture" 
                  allowfullscreen
                  style="position: absolute; top:0; left:0; width:100%; height:100%;">
                </iframe>
              </div>
              <div class="overlay" style="pointer-events: none;"></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

@include('frontend.components.gallery')

@include('frontend.components.maps')

  <script src="https://www.youtube.com/iframe_api"></script>
<script>
  let player;

  // Initialize YouTube Player
  function onYouTubeIframeAPIReady() {
    player = new YT.Player('studioVideo', {
      events: {
        'onReady': onPlayerReady
      }
    });
  }

  function onPlayerReady(event) {
    // Detect when the video section enters the viewport
    const section = document.getElementById('video-section');

    function checkVisibility() {
      const rect = section.getBoundingClientRect();
      const isVisible = rect.top < window.innerHeight && rect.bottom > 0;

      if (isVisible) {
        player.unMute();  // Unmute
      } else {
        player.pauseVideo();
      }
    }

    window.addEventListener('scroll', checkVisibility);
    checkVisibility(); // Initial check
  }
</script>
@endsection