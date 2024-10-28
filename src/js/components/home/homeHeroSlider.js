export default function homeHeroSlider() {
  document.addEventListener("DOMContentLoaded", () => {
    window.setTimeout(() => {
      const imgElements = document.querySelectorAll("img[data-src-hero]");
      const lazyLoadingImage = (entries, observer2) => {
        entries.forEach((entry) => {
          if (!entry.isIntersecting) return;
          entry.target.src = entry.target.dataset.srcHero;
          entry.target.addEventListener("load", () => {
            entry.target.classList.remove("lazy-img");
            observer2.unobserve(entry.target);
          });
        });
      };
      const lazyLoadingObserver = new IntersectionObserver(lazyLoadingImage, {
        threshold: 0,
        rootMargin: "0px 0px 150px 0px",
      });
      imgElements.forEach((img) => lazyLoadingObserver.observe(img));
    }, 100);
  });

  if (document.querySelector(".home-hero__slider")) {
    let home___content = new Swiper(".home-hero__content-slider .swiper", {
      spaceBetween: 20,
      slidesPerView: 1,
      loop: false,
      grabCursor: false,
      observeParents: true,
      observer: true,
      allowTouchMove: false,
      speed: 2000,
      navigation: {
        nextEl: '.home-hero__content-slider .swiper-button-next',
        prevEl: '.home-hero__content-slider .swiper-button-prev',
      }
    });

    let homeImage = new Swiper(".home-hero__slider", {
      slidesPerView: 1,
      loop: false,
      speed: 1500,
      allowTouchMove: false,
      observeParents: true,
      observer: true,
      watchSlidesProgress: true,
      effect: "fade",
      fadeEffect: {
        crossFade: true,
      },
      scrollbar: {
        el: ".home-hero__slider .swiper-scrollbar",
      },
      pagination: {
        el: ".home-hero__slider .custom-sliderfractions",
        type: "custom",
        renderCustom: function (contentSwiper, current, total) {
          return `<div class="custom-sliderfractions__inner"> <span>${current}</span> <span>${total}</span>  </div>`;
        },
      },
      
    });

    home___content.controller.control = homeImage;  


  }



}
