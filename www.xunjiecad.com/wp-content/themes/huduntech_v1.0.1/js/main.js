$(function() {
  function sideMenu(menuNav, menuContent) {
    $(menuNav).click(function(event) {
      $(this)
        .addClass("current")
        .siblings()
        .removeClass("current");
      $(menuContent)
        .eq($(this).index())
        .addClass("current")
        .siblings()
        .removeClass("current");
    });
  }
  sideMenu(".side-menu dd", ".about-content .wrap");
});
$(function() {
  var x = parseInt($("html").css("margin-top"));
  var y = 0 - x + "px";
  if (x != 0) {
    $(".header").css({
      marginTop: y
    });
  }
});

var homepageBannerSwiper = new Swiper(".swiper-container", {
  autoplay: 6000,
  loop: true,
  paginationClickable: true,
  pagination: ".pagination"
});

$(function() {
  $("#banner-homepage-btn-prev").on("click", function(e) {
    e.preventDefault();
    homepageBannerSwiper.swipePrev();
  });
  $("#banner-homepage-btn-next").on("click", function(e) {
    e.preventDefault();
    homepageBannerSwiper.swipeNext();
  });
});
