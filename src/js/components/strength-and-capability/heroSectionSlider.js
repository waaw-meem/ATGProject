export default function heroSectionSlider() {
    const swiper = new Swiper('.swiper-container', {
        spaceBetween: 30, 
        slidesPerView: 1,
        effect: 'fade', 
        fadeEffect: {
            crossFade: true,
        },
        speed: 1000, 
        autoplay: {
            delay: 5000, 
            disableOnInteraction: false, 
        },
        on: {
            init: function () {
                console.log('Swiper initialized');
            },
            slideChange: function () {
                console.log('Slide changed to: ', this.activeIndex);
            },
        },
    });
}