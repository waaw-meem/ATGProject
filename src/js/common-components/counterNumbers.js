export default function counterNumbers() {
  function animateCounters() {
    document.querySelectorAll(".count").forEach((element) => {
      const targetValue = parseFloat(element.getAttribute("data-target"));
      animateCounter(element, 0, targetValue, 2000);
    });
  }

  function animateCounter(element, start, end, duration) {
    let current = start;
    const increment = (end - start) / (duration / 10);
    const interval = setInterval(() => {
      current += increment;
      if (
        (increment > 0 && current >= end) ||
        (increment < 0 && current <= end)
      ) {
        element.textContent = end;
        clearInterval(interval);
      } else {
        if (element.classList.contains("whole")) {
          element.textContent = Math.floor(current);
        } else if (element.classList.contains("decimal")) {
          element.textContent = current.toFixed(1);
        }
      }
    }, 10);
  }

  // Intersection Observer for animating counters
  const section = document.querySelector(".key-growth");
  if ("IntersectionObserver" in window) {
    const observer = new IntersectionObserver(
      (entries, observer) => {
        entries.forEach((entry) => {
          if (entry.isIntersecting) {
            animateCounters();
            observer.unobserve(entry.target);
          }
        });
      },
      { threshold: 0.5 }
    );

    observer.observe(section);
  } else {
    let isAnimated = false;
    window.addEventListener("scroll", () => {
      if (!isAnimated && isElementInViewport(section)) {
        animateCounters();
        isAnimated = true;
      }
    });
  }

  function isElementInViewport(el) {
    const rect = el.getBoundingClientRect();
    return (
      rect.top >= 0 &&
      rect.left >= 0 &&
      rect.bottom <=
        (window.innerHeight || document.documentElement.clientHeight) &&
      rect.right <= (window.innerWidth || document.documentElement.clientWidth)
    );
  }
}
