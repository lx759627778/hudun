/* 显示隐藏底部按钮 */
$(function() {
    if ($(".js-scroll").offset().top > $(window).height()) {
        $(".js-scroll").removeClass("active-dh");
    }
})


function getScrollTop() {
    var scrollTop = 0;
    if (document.documentElement && document.documentElement.scrollTop) {
        scrollTop = document.documentElement.scrollTop;
    } else if (document.body) {
        scrollTop = document.body.scrollTop;
    }
    return scrollTop;
}
var thissrc = $(".js-src").text();
$(window).scroll(function() {
    var before = $(window).scrollTop();
    $(window).scroll(function() {
        var after = $(window).scrollTop();
        if (before < after) {
            if (!$(".js-scroll").hasClass("active-dh")) {
                if ($(".js-scroll").offset().top - $(window).height() <= after && $(".js-scroll1").offset().top - $(window).height() >= after) {
                    $(".js-scroll img").attr("src", thissrc + "/images/01_zhen.gif?" + new Date().getTime());
                    $(".js-scroll").addClass("active-dh");
                }
            }
            if (!$(".js-scroll1").hasClass("active-dh")) {
                if ($(".js-scroll1").offset().top - $(window).height() <= after && $(".js-scroll2").offset().top - $(window).height() >= after) {
                    $(".js-scroll1 img").attr("src", thissrc + "/images/02_zhen.gif?" + new Date().getTime());
                    $(".js-scroll1").addClass("active-dh");
                }
            }
            if (!$(".js-scroll2").hasClass("active-dh")) {
                if ($(".js-scroll2").offset().top - $(window).height() <= after) {
                    $(".js-scroll2 img").attr("src", thissrc + "/images/03_zhen.gif?" + new Date().getTime());
                    $(".js-scroll2").addClass("active-dh");
                }
            }

        } else {
            if ($(".js-scroll").offset().top - $(window).height() >= after) {
                $(".js-scroll").removeClass("active-dh");
            }
            if ($(".js-scroll1").offset().top - $(window).height() >= after) {
                $(".js-scroll1").removeClass("active-dh");
            }
            if ($(".js-scroll2").offset().top - $(window).height() >= after) {
                $(".js-scroll2").removeClass("active-dh");
            }
        }
    });
});