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

// Lazy loading implementation
document.addEventListener('DOMContentLoaded', function() {
    const lazyImages = [].slice.call(document.querySelectorAll('img.lazy'));
    const preloadOffset = 300; // Preload images 300px before they enter viewport

    if ('IntersectionObserver' in window) {
        const lazyImageObserver = new IntersectionObserver(function(entries, observer) {
            entries.forEach(function(entry) {
                if (entry.isIntersecting) {
                    const lazyImage = entry.target;
                    lazyImage.src = lazyImage.dataset.src;
                    if (lazyImage.dataset.srcset) {
                        lazyImage.srcset = lazyImage.dataset.srcset;
                    }
                    lazyImage.classList.remove('lazy');
                    lazyImageObserver.unobserve(lazyImage);
                }
            });
        }, {
            rootMargin: `${preloadOffset}px 0px ${preloadOffset}px 0px` // Add offset to top and bottom
        });

        lazyImages.forEach(function(lazyImage) {
            lazyImageObserver.observe(lazyImage);
        });
    } else {
        // Fallback for browsers that don't support IntersectionObserver
        let active = false;

        const lazyLoad = function() {
            if (active === false) {
                active = true;

                setTimeout(function() {
                    lazyImages.forEach(function(lazyImage) {
                        if ((lazyImage.getBoundingClientRect().top <= window.innerHeight + preloadOffset && 
                             lazyImage.getBoundingClientRect().bottom >= -preloadOffset) && 
                             getComputedStyle(lazyImage).display !== "none") {
                            lazyImage.src = lazyImage.dataset.src;
                            if (lazyImage.dataset.srcset) {
                                lazyImage.srcset = lazyImage.dataset.srcset;
                            }
                            lazyImage.classList.remove('lazy');

                            lazyImages = lazyImages.filter(function(image) {
                                return image !== lazyImage;
                            });

                            if (lazyImages.length === 0) {
                                document.removeEventListener('scroll', lazyLoad);
                                window.removeEventListener('resize', lazyLoad);
                                window.removeEventListener('orientationchange', lazyLoad);
                            }
                        }
                    });

                    active = false;
                }, 200);
            }
        };

        document.addEventListener('scroll', lazyLoad);
        window.addEventListener('resize', lazyLoad);
        window.addEventListener('orientationchange', lazyLoad);
        lazyLoad();
    }
});
