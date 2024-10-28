
export default function tabLinks() {
    if (document.querySelectorAll('.tabs__links')) {
        // Get all tab links
        const tabLinks = document.querySelectorAll('.tabs__links');

        // Loop through each tab link and add a click event listener
        tabLinks.forEach(tabLink => {
            tabLink.addEventListener('click', function (event) {
                event.preventDefault();

                // Remove 'active' class from all tab links
                tabLinks.forEach(link => {
                    link.classList.remove('active');
                });

                // Add 'active' class to the clicked tab link
                this.classList.add('active');

                // Get the target content ID from data-target attribute
                const targetId = this.getAttribute('data-target');

                // Hide all tab content sections
                const tabContents = document.querySelectorAll('.tab-content');
                tabContents.forEach(content => {
                    content.classList.remove('active');
                });

                // Show the corresponding content section
                const targetContent = document.querySelector(targetId);
                if (targetContent) {
                    targetContent.classList.add('active');
                }
            });

            // Trigger click on the default active tab link to show its content
            if (tabLink.classList.contains('active')) {
                tabLink.click();
            }
        });

    }
}



