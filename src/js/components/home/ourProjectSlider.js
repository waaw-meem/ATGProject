export default function ourProjectSlider() {
  if (document.querySelector(".our-projects__slider-wrapper")) {
    let ourProjectSlider = new Swiper(".our-projects__slider-wrapper .swiper", {
      loop: false,
      speed: 1500,
      // autoplay: {
      //   delay: 3000,
      // },
      slidesPerView: "auto",
      watchSlidesProgress: true,
      observeParents: true,
      observer: true,
      spaceBetween: 20,
      navigation: {
        nextEl: ".our-projects__slider-wrapper .swiper-button-next",
        prevEl: ".our-projects__slider-wrapper .swiper-button-prev",
      },
      scrollbar: {
        el: ".our-projects__slider-wrapper .swiper-scrollbar",
      },
      breakpoints: {
        768: {
          spaceBetween: 0,
        },
      },
    });

    ourProjectSlider.on("click", function () {
      let clickedIndex = ourProjectSlider.clickedIndex;
      let counterResult = (clickedIndex) + 1;
      let counter = document.querySelector(
        ".our-projects__popup__side-design .counter"
      );
      counter.textContent = `0${counterResult}`;
    });

  }
}
