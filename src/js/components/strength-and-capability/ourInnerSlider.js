export default function ourInnerSlider() {
    const thumbnails = document.querySelectorAll('.inner__list-thumb-slider .our-inner__thumb__item');

    // Initialize the first heading as active
    updateActiveThumbnail(0);

    // Function to update active thumbnail
    function updateActiveThumbnail(index) {
        thumbnails.forEach((thumb, i) => {
            if (i === index) {
                thumb.classList.add('active');
                thumb.classList.add('title-arrow');
            } else {
                thumb.classList.remove('active');
                thumb.classList.remove('title-arrow');
            }
        });
    }

    // Add click event to thumbnail items
    thumbnails.forEach((item, index) => {
        item.addEventListener('click', (event) => {
            event.preventDefault(); // Prevent default action

            // Update active thumbnail
            updateActiveThumbnail(index);

            // Scroll to corresponding section
            const sectionIds = ['design', 'joinery', 'mep'];
            const targetId = sectionIds[index];
            const targetSection = document.getElementById(targetId);
            if (targetSection) {
                targetSection.scrollIntoView({ behavior: 'smooth' });
            }
        });
    });
}
