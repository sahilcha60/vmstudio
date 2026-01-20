@extends('frontend.layouts.master')

@section('content')

  <!-- Breadcrumb Section Starts -->
<section class="breadcrumb p-0 position-relative" style="background-image: url('{{ asset('image/breadcrumb-contact-bg.jpg') }}'); background-size: cover; background-position: center; height: 500px;">
  <div class="overlay" style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background-color: rgba(0,0,0,0.5);"></div>
  <div class="container position-relative h-100">
    <div class="breadcrumb-inner position-absolute top-50 start-50 translate-middle text-center">
      <h2 class="white" style="color: #fff; text-shadow: 2px 2px 10px rgba(0,0,0,0.7);">Contact Us</h2>
    </div>
  </div>
</section>
  <!-- Breadcrumb Section Ends -->

  <!-- Contact Section Starts -->
  <section class="contact">
    <div class="container">
      <div class="contact-inner">
        <div class="row align-items-center gx-lg-5 gy-5">
          <div class="col-lg-7">
            <div class="contact-left grey text-center text-lg-start">
              <h4 class="white mb-2">Contact Us</h4>
              <h2 class="white mb-3">Let’s capture your <span class="text-gradient d-block">moments together</span></h2>
              <div class="header-divider"></div>
              <p class="mb-5">We’d love to hear from you! Whether you’re looking to book a photoshoot, collaborate, or simply ask a question, feel free to reach out.</p>
              <div class="contact-us-info">
                <h4 class="white mb-4">Get in touch</h4>
                  <ul class="white">
                    <li class="mb-4">
                      <ul class="d-flex align-items-center justify-content-center justify-content-lg-start gap-3">
                        <li class="h3 mb-0"><i class="fa fa-map-marker" aria-hidden="true"></i></li>
                        <li>Mandala Building, Kaldhara, Kathmandu, Nepal</li>
                      </ul>
                    </li>
                    <li class="mb-4">
                      <ul class="d-flex align-items-center gap-3 justify-content-center justify-content-lg-start">
                        <li class="h3 mb-0"><i class="fa fa-phone" aria-hidden="true"></i></li>
                        <li>980-1388899 <a href="tel:980-1388899" class="d-block small primary">For information</a></li>
                      </ul>
                    </li>
                  </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Contact Section Ends -->

  @include('frontend.components.experience')
  @include('frontend.components.maps')
  @include('frontend.components.gallery')


@endsection
