let sw = window.innerWidth;
export default function heroFigureSlider() {
    if (sw < 767) {
        if (document.querySelector(".social-mediaSlider")) {
            let socialMediaSlider = new Swiper(".social-mediaSlider", {
                spaceBetween: 30,
                slidesPerView: 2,
                loop: false,
                grabCursor: false,
                observeParents: true,
                observer: true,
                allowTouchMove: true,
                speed: 2000,
                breakpoints: {
                    640: {
                      slidesPerView: 1,
                      spaceBetween: 20,
                    },
                    768: {
                      slidesPerView: 2,
                      spaceBetween: 40,
                    },
                    1024: {
                      slidesPerView: 2,
                      spaceBetween: 50,
                    },
                  },
            });
        }
    }
}