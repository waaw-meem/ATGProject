export default function AccredidationSlider() {
    
    const swiper = new Swiper('.accreditation_swiper-slider', {
        spaceBetween: 200, 
        slidesPerView: 1,
        centeredSlides: true,
        loop: true, 
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
        breakpoints: {
          
            640: {
                slidesPerView: 1, 
                spaceBetween: 100,
            },
           
            768: {
                slidesPerView: 1.5,
                spaceBetween: 30,
            },
            1024: {
                slidesPerView: 2, 
                spaceBetween: 30,
            },
            1280: {
                slidesPerView: 3,
                spaceBetween: 30,
            },
        },
    });
    
}