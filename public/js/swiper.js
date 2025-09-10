  document.addEventListener('DOMContentLoaded', function () {

    // Swiper init
    new Swiper('#heroSwiper', {
      loop: true,
      effect: 'fade',
      speed: 900,
      autoplay: {
        delay: 4000,
        disableOnInteraction: false,
      },
      pagination: {
        el: '.hero-swiper-pagination',
        clickable: true,
      },
      navigation: {
        nextEl: '.hero-swiper-next',
        prevEl: '.hero-swiper-prev',
      },
    });
  });