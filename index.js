// HISTORY API AND NAV LINK NAVIGATION
function updateHistory(hash) {
  clearTimeout(updateHistory.timeout);
  updateHistory.timeout = setTimeout(function () {
    if (window.location.hash !== hash) {
      history.pushState({}, window.title, hash);
    }
  }, 1000);
}

window.addEventListener(
  "hashchange",
  function (e) {
    const sectionToShow =
      document.querySelector(window.location.hash) ||
      document.querySelector("section");
    sectionToShow.scrollIntoView({ behavior: "smooth" });
    e.preventDefault();
  },
  false
);

// SCROLL PROMPT
var scrollArrow = document.getElementById("scrollArrow");

if (scrollArrow) {
  scrollArrow.onclick = function () {
    window.scrollTo(0, window.innerHeight);
  };
}

// NAV MENU CONTROL ON MOBILE
document.getElementById("navLink").onclick = function () {
  document.getElementById("navMenu").classList.toggle("active");

  this.classList.toggle("close");
};

var navLinks = document.getElementsByClassName("navLink");

for (var i = 0; i < navLinks.length; i++) {
  navLinks[i].onclick = function () {
    document.getElementById("navMenu").classList.toggle("active");
    document.getElementById("navLink").classList.toggle("close");
  };
}
