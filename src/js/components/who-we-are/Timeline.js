export default function Timeline() {
    const contentSwiper = new Swiper('.content_wrapper', {
        slidesPerView: 1,
        spaceBetween: 10,
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
        effect: 'slide',
        autoplay: false,
    });

    const imageSwiper = new Swiper('.timeline_image-slider', {
        slidesPerView: 1,
        spaceBetween: 10,
        effect: 'slide',
        autoplay: false,
    });

    const scrollToActiveTimelineItem = (index) => {
        const timelineContainer = document.querySelector('.timeline-items-wrapper');
        const activeTimelineItem = document.querySelectorAll('.timeline-item')[index];
        const timelineItemOffset = activeTimelineItem.offsetTop; // Change to offsetTop for vertical scroll
        const timelineContainerHeight = timelineContainer.offsetHeight;
        const timelineItemHeight = activeTimelineItem.offsetHeight;

        timelineContainer.scroll({
            top: timelineItemOffset - (timelineContainerHeight / 2) + (timelineItemHeight / 2),
            behavior: 'smooth',
        });
    };

    const updateActiveTimelineItem = (activeIndex) => {
        document.querySelectorAll('.timeline-item').forEach((item, index) => {
            if (index === activeIndex) {
                item.classList.add('active');
                scrollToActiveTimelineItem(index);
            } else {
                item.classList.remove('active');
            }
        });
    };

    contentSwiper.on('slideChange', () => {
        const activeIndex = contentSwiper.activeIndex;
        imageSwiper.slideTo(activeIndex);
        updateActiveTimelineItem(activeIndex);

        const timelineItemsWrapper = document.querySelector('.timeline-items-wrapper');
        const lastTimelineItem = document.querySelector('.timeline-item:last-child');
        const timelineItemsWrapperHeight = timelineItemsWrapper.scrollHeight;

        // Check if the active item is near the end and scroll the timeline items container
        if (lastTimelineItem && activeIndex === document.querySelectorAll('.timeline-item').length - 1) {
            timelineItemsWrapper.scrollTo({
                top: timelineItemsWrapperHeight,
                behavior: 'smooth',
            });
        }
    });

    imageSwiper.on('slideChange', () => {
        const activeIndex = imageSwiper.activeIndex;
        contentSwiper.slideTo(activeIndex);
        updateActiveTimelineItem(activeIndex);
    });

    // Timeline item click functionality
    const timelineItems = document.querySelectorAll('.timeline-item');
    timelineItems.forEach((item, index) => {
        item.addEventListener('click', () => {
            contentSwiper.slideTo(index);
            imageSwiper.slideTo(index);
            scrollToActiveTimelineItem(index);
        });
    });
}
