export default function milestoneSlider() {
    // Initialize Swipers for both sliders
    const imageSlider = document.querySelector(".milestone_image-slider .swiper");
    const contentSlider = document.querySelector(".testimonial_content-slider .swiper");

    if (imageSlider && contentSlider) {
        // Create the image slider
        const imageSwiper = new Swiper(imageSlider, {
            spaceBetween: 0,
            slidesPerView: 1,
            speed: 1500,
            effect: 'fade',
            autoplay: {
                delay: 3000,
                disableOnInteraction: false,
            },
            scrollbar: {
                el: ".milestone_image-slider .swiper-scrollbar",
            },
            on: {
                slideChange: function () {
                    contentSwiper.slideTo(imageSwiper.activeIndex);
                },
            },
        });

        // Create the content slider
        const contentSwiper = new Swiper(contentSlider, {
            spaceBetween: 0,
            slidesPerView: 1,
            speed: 1500,
            scrollbar: {
                el: ".testimonial_content-slider .swiper-scrollbar",
            },
            pagination: {
                el: ".testimonial_content-slider .custom-sliderfractions",
                type: "custom",
                renderCustom: function (swiper, current, total) {
                    return `<div class="custom-sliderfractions__inner">
                                <span>0${current}/</span>
                                <span>0${total}</span>
                            </div>`;
                },
            },
            navigation: {
                nextEl: ".testimonial_content-slider .swiper-button-next",
                prevEl: ".testimonial_content-slider .swiper-button-prev",
            },
            on: {
                slideChange: function () {
                    imageSwiper.slideTo(contentSwiper.activeIndex);
                },
            },
        });
    }
}