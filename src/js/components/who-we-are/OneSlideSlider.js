export default function OneSideSlider() {
    const swiper = new Swiper('.image_swiper-slider', {
        slidesPerView: 1,
        spaceBetween: 30,
        loop: true,
        autoplay: {
            delay: 5000,
            disableOnInteraction: false,
        },
    });
}