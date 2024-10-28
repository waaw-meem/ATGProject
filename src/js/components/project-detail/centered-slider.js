export default function productCenteredSlider() {


    const slider = new Swiper('.product-center_swiper-slider', {
        grabCursor: true,
        centeredSlides: true,
        slidesPerView: 1,
        initialSlide: 2,
        watchSlidesProgress: true,
        spaceBetween: 30,
        speed: 800,
        loop: true,
        breakpoints: {
            1280: {
                slidesPerView: 3.5,
                spaceBetween: 30,
            },
            768:{
                slidesPerView: 2.5,
                spaceBetween: 30,
            }
        }
    });

}