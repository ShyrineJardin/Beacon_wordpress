(function($, w, d, h, b) {
  var app = {
    // 1. Counter Animation
    initCounters: function() {
      var counters = $(".counter");
      function animateCounter(counter) {
        var $counter = $(counter);
        var target = +$counter.data("target");
        var current = 0;
        var increment = target / 100;
        function update() {
          current += increment;
          if (current < target) {
            $counter.text("$" + Math.floor(current).toLocaleString());
            requestAnimationFrame(update);
          } else {
            $counter.text("$" + target.toLocaleString());
          }
        }
        update();
      }
      var observer = new IntersectionObserver(function(entries, obs) {
        entries.forEach(function(entry) {
          if (entry.isIntersecting) {
            animateCounter(entry.target);
            obs.unobserve(entry.target);
          }
        });
      }, { threshold: 0.5 });
      counters.each(function() {
        observer.observe(this);
      });
    },
    // 2. Hamburger Menu
    initHamburgerMenu: function() {
      $(".header__contact--hamburger").on("click", function() {
        $(".header").toggleClass("mobile-menu-active");
        $(".mobile-nav-overlay").toggleClass("active");
        $("body").toggleClass("menu-open");
      });
    },
    // 3. Splide Sliders
    initSplideSliders: function() {
      document.querySelectorAll(".splide").forEach(function(sliderElement) {
        const splideInstance = new Splide(sliderElement, {
          type: "loop",
          perPage: 1,
          arrows: false,
          pagination: false,
          autoplay: true,
          speed: 1e3
        });
        splideInstance.mount();
        const prevBtn = sliderElement.closest(".splide").querySelector(".prev");
        const nextBtn = sliderElement.closest(".splide").querySelector(".next");
        if (prevBtn && nextBtn) {
          prevBtn.addEventListener("click", function() {
            splideInstance.go("<");
          });
          nextBtn.addEventListener("click", function() {
            splideInstance.go(">");
          });
        }
      });
    },
    init: function() {
      this.initCounters();
      this.initHamburgerMenu();
      this.initSplideSliders();
    }
  };
  $(d).ready(function() {
    app.init();
  });
})(jQuery, window, document);
