(function($, w, d) {
  var app = {
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
    }
  };
  $(d).ready(function() {
    app.initCounters();
  });
})(jQuery, window, document);
