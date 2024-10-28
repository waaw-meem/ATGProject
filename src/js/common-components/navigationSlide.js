

function navigationSlide() {
  if (document.querySelector("#toggle")) {
    let toggleMenu = document.querySelector("#toggle");
    let htmlEl = document.querySelector("html");

    toggleMenu.addEventListener("click", (event) => {
      // console.log('this', event)
      let _this = event.target;
      _this.classList.toggle("active");
      document.querySelector(".navigation").classList.toggle("open");
      htmlEl.classList.toggle("overflow-hidden");
    });
  }
}

export default navigationSlide;
