(function($, w, d, h, b) {
  var app = {
    initNavigation: function() {
      var $nav = jQuery("#nav");
      if ($nav.length > 0) $nav.navTabDoubleTap();
    },
    initFeaturedProperties: function() {
    },
    initFeaturedCommunities: function() {
    },
    initTestimonials: function() {
    },
    initQuickSearch: function() {
    },
    initCustomFunction: function() {
    }
  };
  jQuery(document).ready(function() {
    app.initNavigation();
  });
  jQuery(window).on("load", function() {
  });
})(jQuery);
