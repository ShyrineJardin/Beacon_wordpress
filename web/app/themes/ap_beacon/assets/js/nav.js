(function($, w, d) {
  var app = {
    initHamburgerMenu: function() {
      $(".header__contact--hamburger").on("click", function() {
        $(".header").toggleClass("mobile-menu-active");
        $(".mobile-nav-overlay").toggleClass("active");
        $("body").toggleClass("menu-open");
      });
    }
  };
  $(d).ready(function() {
    app.initHamburgerMenu();
  });
})(jQuery, window, document);
