

export default function logoesSlider() {
  if(document.querySelector(".sponsership-logoes__slider")) {
    let logoesSlider = new Swiper(
        ".sponsership-logoes__slider .swiper",
        {
          loop: false,
          speed: 1500,
          autoplay: {
            delay: 3000,
          },
          slidesPerView: 3,
          grabCursor: true,
          watchSlidesProgress: true,
          grabCursor: true,
          observeParents: true,
          observer: true,
          spaceBetween: 25,
          breakpoints: {
            768: {
              slidesPerView: 5,
            },
          }, 
          scrollbar: {
            el: ".sponsership-logoes__slider .swiper-scrollbar",
          },
        }
      );
  }
}
