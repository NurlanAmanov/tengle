  document.addEventListener('DOMContentLoaded', function () {
    // Hər slayd üçün şəkil + başlıq + mətn
    const slides = [
      {
        image: 'https://i.ibb.co/WpBKTy2F/10.jpg',
        title: 'Trusted Marine Partner',
        text: 'Delivering excellence in shipbuilding and engineering solutions.'
      },
      {
        image: 'https://i.ibb.co/XrVqz5LR/49.jpg',
        title: 'Ship Repair & Retrofit',
        text: 'Efficient, reliable, and cost-effective repair services.'
      },
      {
        image: 'https://i.ibb.co/rKFrcp08/44.jpg',
        title: 'Engineering Expertise',
        text: 'Innovative solutions tailored for offshore industries.'
      },
      {
        image: 'https://i.ibb.co/N6qcBW8t/52.png',
        title: 'Global Presence',
        text: 'Serving clients across Singapore, Baku, and beyond.'
      }
    ];

    const swiperWrapper = document.querySelector('#heroSwiper .swiper-wrapper');

    // Dinamik olaraq slaydları əlavə et
    slides.forEach(slideData => {
      const slide = document.createElement('div');
      slide.className = 'swiper-slide relative';
      slide.innerHTML = `
        <img src="${slideData.image}" 
             class="absolute inset-0 w-full h-full object-cover" 
             alt="${slideData.title}" />
        <div class="absolute inset-0 bg-black/40"></div>
        <div class="relative z-10 text-center text-white max-w-3xl mx-auto px-4 top-1/2 -translate-y-1/2">
          <h2 class="text-3xl md:text-5xl font-bold drop-shadow-lg">${slideData.title}</h2>
          <p class="mt-4 text-md md:text-lg drop-shadow">${slideData.text}</p>
        </div>
      `;
      swiperWrapper.appendChild(slide);
    });

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