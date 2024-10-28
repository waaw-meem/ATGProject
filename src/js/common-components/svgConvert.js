

function svgConvert() {
  window.addEventListener("load", function () {
    if (document.querySelector(".svg-convert")) {
      let svgs = document.querySelectorAll("img.svg-convert");
      svgs.forEach((el) => {
        const imgID = el.getAttribute("id");
        const imgClass = el.getAttribute("class");
        const imgURL = el.getAttribute("src");

        fetch(imgURL)
          .then((response) => response.text())
          .then((data) => {
            const parser = new DOMParser();
            const xmlDoc = parser.parseFromString(data, "text/html");
            let svg = xmlDoc.querySelector("svg");

            if (typeof imgID !== "undefined") {
              svg.setAttribute("id", imgID);
            }

            if (typeof imgClass !== "undefined") {
              svg.setAttribute("class", imgClass + " svg-converted");
            }

            svg.removeAttribute("xmlns:a");

            el.parentNode.replaceChild(svg, el);
          })
          .catch(error => console.error('Error: your svg is not set correctly:', error));
      });
    }
  });
}

export default svgConvert;
