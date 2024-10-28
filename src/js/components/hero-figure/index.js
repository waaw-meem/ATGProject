export default function heroFigureSlider() {
    if (document.querySelector(".inner-hero__figureSlider")) {
        let innerhero__figureSlider = new Swiper(".inner-hero__figureSlider", {
            spaceBetween: 20,
            slidesPerView: 1,
            loop: false,
            grabCursor: false,
            observeParents: true,
            observer: true,
            allowTouchMove: true,
            speed: 2000,
            scrollbar: {
                el: ".inner-hero__figureSlider .swiper-scrollbar",
            },
            pagination: {
                el: ".inner-hero__figureSlider .custom-sliderfractions",
                type: "custom",
                renderCustom: function (swiper, current, total) {
                    return `<div class="custom-sliderfractions__inner">
                                <span>${current}/</span>
                                <span>${total}</span>
                            </div>`;
                },
            },
            navigation: {
                nextEl: ".inner-hero__figureSlider .swiper-button-next",
                prevEl: ".inner-hero__figureSlider .swiper-button-prev",
            },
            on: {
                init: function () {
                    updateNavigationVisibility(this);
                },
                slideChange: function () {
                    // Optional: Update visibility on slide change if needed
                },
            },
        });

        function updateNavigationVisibility(swiper) {
            const totalSlides = swiper.slides.length;
            const nextBtn = document.querySelector(".inner-hero__figureSlider .swiper-button-next");
            const prevBtn = document.querySelector(".inner-hero__figureSlider .swiper-button-prev");

            if (totalSlides <= 1) {
                nextBtn.style.display = "none";
                prevBtn.style.display = "none";
            } else {
                nextBtn.style.display = "";
                prevBtn.style.display = "";
            }
        }
    }
}

// Ensure this function runs after the DOM is fully loaded
document.addEventListener("DOMContentLoaded", heroFigureSlider);
