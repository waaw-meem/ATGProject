export default function getTouchTabs() {

  if (document.querySelector(".get-in-touch__tabs")) {
    let tabs_wrapper = document.querySelector(".get-in-touch__tabs"); // targeting parent element
    let tabs = tabs_wrapper.querySelectorAll(".btnn"); // targeting buttons which is in tabs_wrapper
    let get__contents = document.querySelectorAll(".get-in-touch__content"); // targeting content


    tabs_wrapper.addEventListener("click", function (evt) {
      if (evt.target.matches(".btnn")) {
        for (const tab of tabs) {
          // console.log(tab.dataset.formTab)
          tab.classList.remove("active");
        }
        for (const get__content of get__contents) {
          get__content.style.display = "none";
        }
        evt.target.classList.add("active");
        document.querySelector(`#${evt.target.dataset.formTab}`).style.display = "block";
      }

    });
  }
}
