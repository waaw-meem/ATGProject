export default function latestNewsSlider() {
  if (document.querySelector(".latest-news__slider")) {
    let latestNewsSlider = new Swiper(
      ".latest-news__slider .swiper",
      {
        spaceBetween: 20,
        slidesPerView: 2,
        loop: false,
        freeMode: false,
        watchSlidesProgress: true,
        grabCursor: true,
        observeParents: true,
        observer: true,
        observeSlideChildren: true,
        speed: 2000,
        breakpoints: {
          768: {
            slidesPerView: 3,
            spaceBetween: 29,
          }
        }
      }
    );

    

    

  }
}
