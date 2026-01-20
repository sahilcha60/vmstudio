  <!-- Review Section Starts -->
<section class="review pb-0 position-relative">
  <div class="overlay"></div>

  <div class="container position-relative">
    <div class="review-inner">
      <div class="row gx-lg-5 gy-5">

        {{-- LEFT SLIDER --}}
        <div class="col-lg-5 order-2 order-lg-1">
          <div class="review-left mb-5">
            <div class="review-slider">

              @foreach ($testimonials as $testimonial)
                <div class="slide">
                  <div class="review-box p-4 bg-secondary">

                    <div class="review-icon mb-3">
                      <img src="{{ asset('image/quote.png') }}"
                           alt="quote"
                           style="height:48px;width:48px;">
                    </div>

                    <p class="my-4 h6 white fw-light fst-italic lh-base">
                      "{{ $testimonial->review }}"
                    </p>

                    <ul class="d-flex align-items-center gap-3 list-unstyled p-0 m-0">
                      <li>
                        <img src="{{ asset('storage/' . $testimonial->client_photo) }}"
                             alt="{{ $testimonial->client_name }}"
                             class="rounded-circle border border-3 border-dark"
                             style="height:100px;width:100px;object-fit:cover;">
                      </li>

                      <li class="primary">
                        <span class="d-block jost h5 white mb-1">
                          {{ $testimonial->client_name }}
                        </span>

                        {{-- Rating --}}
                        <div class="text-warning">
                          @for ($i = 1; $i <= 5; $i++)
                            <i class="fa {{ $i <= $testimonial->rating ? 'fa-star' : 'fa-star-o' }}"></i>
                          @endfor
                        </div>
                      </li>
                    </ul>

                  </div>
                </div>
              @endforeach

            </div>
          </div>
        </div>

        {{-- RIGHT CONTENT --}}
        <div class="col-lg-7 order-1 order-lg-2 text-center text-lg-start">
          <div class="review-right mt-lg-5">
            <h3 class="white mb-3">
              Need help with <span class="text-gradient">professional photography?</span>
              <span class="d-block">Let's work together!</span>
            </h3>
            <div class="header-divider mb-3"></div>
            <a href="{{route('contact')}}" class="btn-primary">Contact Us</a>
          </div>
        </div>

      </div>
    </div>
  </div>
</section>
  <!-- Review Section Ends -->