let toggle = document.querySelector(".navtoggle");
let body = document.querySelector("body");

toggle.addEventListener("click", function () {
  body.classList.toggle("open");
});

const ratio = 0.3;
const options = {
  root: null,
  rootMargin: "0px",
  threshold: ratio,
};

const handleIntersect = function (entries, observer) {
  entries.forEach(function (entry) {
    if (entry.intersectionRatio > ratio) {
      entry.target.classList.add("reveal-visible");
      observer.unobserve(entry.target);
    }
  });
};

if (window.matchMedia("(min-width: 991px)").matches) {
  const observer = new IntersectionObserver(handleIntersect, options);
  document.querySelectorAll('[class*="reveal"]').forEach(function (visible) {
    observer.observe(visible);
  });
} else {
  const observer = new IntersectionObserver(handleIntersect, options);
  document
    .querySelectorAll('[class*="reveal"], [class*="quiz"]')
    .forEach(function (visible) {
      observer.observe(visible);
    });
}

if (window.matchMedia("(min-width: 991px)").matches) {
  const handleIntersectQuiz = function (entries, observerQuiz) {
    entries.forEach(function (entry) {
      if (entry.intersectionRatio > ratio) {
        entry.target.classList.add("reveal-quiz");
        observerQuiz.unobserve(entry.target);
      }
    });
  };

  const observerQuiz = new IntersectionObserver(handleIntersectQuiz, options);
  document.querySelectorAll('[class*="quiz"]').forEach(function (visible) {
    observerQuiz.observe(visible);
  });
}
