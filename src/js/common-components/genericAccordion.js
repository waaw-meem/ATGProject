export default function genericAccordion() {
    let accordion = document.getElementsByClassName("individual-accordion");

    for (let i = 0; i < accordion.length; i++) {
        let innerAccordions = accordion[i].getElementsByClassName("inner-accordion");

        for (let j = 0; j < innerAccordions.length; j++) {
            let topWrapper = innerAccordions[j].querySelector(".top-wrapper");

            topWrapper.addEventListener("click", function () {
                let panel = innerAccordions[j].querySelector(".content-wrapper");

                if (innerAccordions[j].classList.contains('opened')) {
                    innerAccordions[j].classList.remove("opened");
                    panel.style.maxHeight = '0px';
                } else {
                    // Close all other open accordions in the same group
                    for (let k = 0; k < innerAccordions.length; k++) {
                        let otherInnerAccordion = innerAccordions[k];
                        let otherPanel = otherInnerAccordion.querySelector(".content-wrapper");

                        if (otherInnerAccordion.classList.contains('opened')) {
                            otherInnerAccordion.classList.remove("opened");
                            otherPanel.style.maxHeight = '0px';
                        }
                    }

                    // Open the clicked accordion
                    innerAccordions[j].classList.add("opened");
                    panel.style.maxHeight = panel.scrollHeight + 'px';
                }
            });
        }
    }
}
