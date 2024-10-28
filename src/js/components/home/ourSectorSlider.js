export default function ourSectorSlider() {
  if (document.querySelector(".our-sectors__two-slider-wrapper")) {
    let thumbSwiper = new Swiper(".our-sectors__thumb-slider .swiper", {
      spaceBetween: 10,
      slidesPerView: 4,
      freeMode: true,
      watchSlidesProgress: true,
      direction: "vertical",
    });

    let interleaveOffset = 0.5;
    let figureSwiper = new Swiper(".our-sectors__figure-slider .swiper", {
      spaceBetween: 0,
      allowTouchMove: false,
      speed: 1500,
      watchSlidesProgress: true,
      thumbs: {
        swiper: thumbSwiper,
      },
      on: {
        progress: function () {
          var swiper = this;
          for (var i = 0; i < swiper.slides.length; i++) {
            var slideProgress = swiper.slides[i].progress,
                innerOffset = swiper.width * interleaveOffset,
                innerTranslate = slideProgress * innerOffset;
            swiper.slides[i].querySelector(".img-wrapper").style.transform ="translateX(" + innerTranslate + "px)";
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
            swiper.slides[i].querySelector(".img-wrapper").style.transition = speed + "ms";
          }
        },
      },
    });

    let textSwiper = new Swiper(".our-sectors__text-slider .swiper", {
      spaceBetween: 0,
      slidesPerView: 1,
      watchSlidesProgress: true,
      allowTouchMove: false,
      speed: 1500,
      effect: 'fade',
      fadeEffect: {
        crossFade: true
      },
    });


    figureSwiper.controller.control = textSwiper;  


  }
}
