export default function testimonialSlider() {
  if (document.querySelector(".testimonials__figure-slider")) {
    let interleaveOffset = 0.5;
    let figureSwiper = new Swiper(".testimonials__figure-slider .swiper", {
      spaceBetween: 0,
      allowTouchMove: false,
      speed: 1500,
      watchSlidesProgress: true,
      on: {
        progress: function () {
          var swiper = this;
          for (var i = 0; i < swiper.slides.length; i++) {
            var slideProgress = swiper.slides[i].progress,
              innerOffset = swiper.width * interleaveOffset,
              innerTranslate = slideProgress * innerOffset;
            swiper.slides[i].querySelector(".img-wrapper").style.transform =
              "translateX(" + innerTranslate + "px)";
            // console.log(swiper.slides[i].querySelector(".img-wrapper"))
          }
        },
        touchStart: function () {
          var swiper = this;
          for (var i = 0; i < swiper.slides.length; i++) {
            swiper.slides[i].style.transition = "";
          }
        },
        setTransition: function (swiper, speed) {
          for (var i = 0; i < swiper.slides.length; i++) {
            swiper.slides[i].style.transition = speed + "ms";
            swiper.slides[i].querySelector(".img-wrapper").style.transition =
              speed + "ms";
          }
        },
      },
    });

    let contentSwiper = new Swiper(".testimonials__content-slider .swiper", {
      spaceBetween: 0,
      slidesPerView: 1,
      speed: 1500,
      pagination: {
        el: ".testimonials__content-slider .custom-sliderfractions",
        type: "custom",
        renderCustom: function (contentSwiper, current, total) {
          return `<div class="custom-sliderfractions__inner"> <span>0${current}/</span> <span>0${total}</span>  </div>`;
        },
      },
      navigation: {
        nextEl: ".testimonials__content-slider .swiper-button-next",
        prevEl: ".testimonials__content-slider .swiper-button-prev",
      },
    });

    contentSwiper.controller.control = figureSwiper;
  }
}
