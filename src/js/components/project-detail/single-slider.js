export default function howWeDoProject() {


    const slider = new Swiper('.how-we-do-project', {
        grabCursor: true,
        slidesPerView: 1,
        speed: 800,
        loop: true,
        navigation: {
            nextEl: ".how-we-do-project .swiper-button-next",
            prevEl: ".how-we-do-project .swiper-button-prev",
        },
    });

}