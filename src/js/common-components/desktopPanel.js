

export default function desktopPanel() {
  if (document.querySelector(".burger-menu")) {
    let burger__menu = document.querySelector(".burger-menu");
    let main__side__panel = document.querySelector(".main-side-panel");
    let main__cross = document.querySelector(".burger-menu-close");

    burger__menu.addEventListener("click", function () {
      main__side__panel.classList.add("active");
      document.querySelector(".header").classList.add("active-black");
      document.querySelector(".header").classList.remove("sticky");
      document.querySelector("html").classList.add("overflow-hidden");
      document.querySelector(".header__search-burger-wrapper .btnn").classList.remove("btnn--white-outline");
    });

    main__cross.addEventListener("click", function () {
      main__side__panel.classList.remove("active");
      document.querySelector(".header").classList.remove("active-black")
      document.querySelector("html").classList.remove("overflow-hidden");
      if(!document.querySelector(".header--inner")) {
        document.querySelector(".header__search-burger-wrapper .btnn").classList.add("btnn--white-outline");
      }

    });

    let side_nav_items = document.getElementsByClassName("side-nav-item");

    if(window.innerWidth > 1199) {
      for (const side_nav_item of side_nav_items) {

        if(side_nav_item.lastElementChild.classList.contains("side-panel-dropdown")) {
          side_nav_item.classList.add("title-arrow")
        }

        side_nav_item.addEventListener("mouseover", function () {
          let current_nav_item = this;
          let current__nav_dropdown = current_nav_item.lastElementChild;
  
          if (current__nav_dropdown.matches("ul")) {
            for (const side_nav_item of side_nav_items) {
              if (side_nav_item.lastElementChild.matches("ul")) {
                side_nav_item.lastElementChild.classList.remove("active");
              }
            }
            current__nav_dropdown.classList.add("active");
          }
        });


      }
    }


  }

  


}
