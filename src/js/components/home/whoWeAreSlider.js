export default function whoWeAreSlider() {
  if (document.querySelector(".who-we-are__slider-wrapper")) {
    let whoWeAreSlider = new Swiper(
      ".who-we-are__slider-wrapper .swiper",
      {
        spaceBetween: 20,
        slidesPerView: 1,
        loop: true,
        freeMode: false,
        watchSlidesProgress: true,
        grabCursor: true,
        observeParents: true,
        observer: true,
        observeSlideChildren: true,
        speed: 2000,
        centeredSlides: true,
        initialSlide: 0,
        autoplay: {
          delay: 3000,
          disableOnInteraction: false,
        },
        breakpoints: {
          // 576: {
          //   slidesPerView: 3,
          // },
          768: {
            initialSlide: 1,
            slidesPerView: 3,
          }
        }
      }
    );





  }
}
