import fontResizer from "./fontResizer";


function pageLoader() {
  document.querySelector("html").classList.add("loadjs");
  setTimeout(function () {
    if (document.querySelector(".loader-first")) {
      document.querySelector(".loader-first").style.display = "none";
      document.querySelector("html").classList.remove("loadjs");
    }
  }, 3000);
}


window.addEventListener("load", function() {
  pageLoader();
  if (window.innerWidth > 1199) {
    fontResizer();
  }
});



export default pageLoader;
