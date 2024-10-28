
function animateObserver() {
  if (window.innerWidth > 767) {
    let anim = [...document.querySelectorAll(".animate")];

    let options = {
      rootMargin: "0px",
      threshold: 0.2,
    };

    let animate = (entries) => {
      entries.forEach((entry) => {
        if (entry.isIntersecting) {
          entry.target.style.animation = `anim 1s ${entry.target.dataset.delay} forwards ease-out`;
        }
      });
    };

    let observer = new IntersectionObserver(animate, options);

    anim.forEach((item, idx) => {
      observer.observe(item);
    });
  }
}

export default animateObserver;


