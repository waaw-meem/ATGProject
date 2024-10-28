
export default function formFieldAnim() {
  if (document.querySelector(".get-in-touch__form")) {
    let formFieldcontrol = document.querySelectorAll(".c_form-field .c_form-field__control");

    formFieldcontrol.forEach(function (ff) {
      ff.addEventListener("focus", function (evt) {
        evt.target.closest(".c_form-field").classList.add("focused")
      });

      ff.addEventListener("blur", function (e) {
        var inputValue = e.target.value;
        //   console.log(inputValue)
        if (inputValue == "") {
          e.target.classList.remove('filled');
          e.target.closest(".c_form-field").classList.remove("focused")
        }
        else {
          e.target.classList.add("filled")
        }
      })


    });
  }
}
