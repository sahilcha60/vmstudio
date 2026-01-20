<script src="{{ asset('js/jquery-3.7.1.min.js')}}"></script>
<script src="{{ asset('js/bootstrap.bundle.min.js')}}"></script>
<script src="{{ asset('js/plugin.js')}}"></script>
<script src="{{ asset('js/main.js')}}"></script>
<script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

<script>
$(document).ready(function () {
  $('.portfolio-slider').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows: true,
    dots: true,
    infinite: true,
    autoplay: true,
    autoplaySpeed: 3000,
    pauseOnHover: true,
    adaptiveHeight: true,
    prevArrow: `<button type="button" class="slick-prev">
                  <i class="fa fa-angle-left"></i>
                </button>`,
    nextArrow: `<button type="button" class="slick-next">
                  <i class="fa fa-angle-right"></i>
                </button>`
  });
});
</script>
