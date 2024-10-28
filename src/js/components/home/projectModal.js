export default function projectModal() {
  if (document.querySelector(".our-projects__slider-wrapper")) {
    let projects__slider = document.querySelector(
      ".our-projects__slider-wrapper"
    );
    let projects__popup = document.querySelector(".our-projects__popup");
    let projects__popup__close = document.querySelector(
      ".our-projects__popup__close-icon"
    );

    projects__slider.addEventListener("click", function (evt) {
      let currentObj = evt.target;

      if (currentObj.matches(".card--title-only")) {
        // console.log(currentObj)
        projects__popup.classList.add("show");
        // document.querySelector("html").classList.add("overflow-hidden")
      }
    });

    projects__popup__close.addEventListener("click", function() {
        projects__popup.classList.remove("show");
        // document.querySelector("html").classList.remove("overflow-hidden")
    });


  }
}
