
export default function footerAccordion() {
    if(window.innerWidth < 768) {
        let accordion = document.getElementsByClassName("js-footer-links-accordion");
        let j;
        for (j = 0; j < accordion.length; j++) {
          accordion[j].querySelector(".h6").addEventListener("click", function (e) {
            let currentItem = e.target;
            let panel = this.nextElementSibling;
            if(currentItem.classList.contains('opened')) {
              currentItem.classList.remove("opened");
              panel.style.maxHeight = '0px';
            } else {
              let mainItem = currentItem.closest(".js-footer-links").querySelectorAll(".h6");
                mainItem.forEach(function(itm) {
                itm.classList.remove("opened");
                itm.nextElementSibling.style.maxHeight = '0px';
              });
              currentItem.classList.add("opened");
              panel.style.maxHeight = panel.scrollHeight + 'px'
            }
          });
        }
      }
}

