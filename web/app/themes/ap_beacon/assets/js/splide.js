(function($, w, d, h, b) {
  var app = {
    initSplideSliders: function() {
      document.querySelectorAll(".splide").forEach(function(sliderElement, index) {
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
    }
  };
  $(document).ready(function() {
    app.initSplideSliders();
  });
})(jQuery);
