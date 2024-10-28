function navigationAccordion() {
  if (window.innerWidth < 1200) {
    let dropdown = document.querySelectorAll(".side-panel-dropdown");

    dropdown.forEach(function (dp) {
      let dropdownItem = dp.closest(".side-nav-item");
      if (dropdownItem) {
        dropdownItem.classList.add("dropdown-active");
      }
    });

    let accordionNav = document.querySelectorAll(".side-nav-item.dropdown-active");

    for (let iterator = 0; iterator < accordionNav.length; iterator++) {
      let menuIcon = accordionNav[iterator].querySelector(".menu__menuitem__icon");

      // Check if the menu icon exists before adding an event listener
      if (menuIcon) {
        menuIcon.addEventListener("click", function (e) {
          e.stopPropagation();
          let currentItem = e.target;
          let panel = this.nextElementSibling;

          if (currentItem.classList.contains("open")) {
            currentItem.classList.remove("open");
            if (panel) panel.style.maxHeight = "0px";
          } else {
            let mainItem = currentItem.closest(".main-side-panel")?.querySelectorAll(".menu__menuitem__icon");
            mainItem?.forEach(function (itm) {
              itm.classList.remove("open");
              if (itm.nextElementSibling) {
                itm.nextElementSibling.style.maxHeight = "0px";
              }
            });
            currentItem.classList.add("open");
            if (panel) panel.style.maxHeight = panel.scrollHeight + "px";
          }
        });
      }
    }
  }
}

export default navigationAccordion;
