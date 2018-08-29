/* 显示隐藏底部按钮 */
$(function() {
    if ($(".js-scroll").offset().top > $(window).height()) {
        $(".js-scroll").removeClass("active-dh");
    }
})
$(window).scroll(function() {
    var scrolltop = getScrollTop();
    if ($(".js-scroll").offset().top - $(window).height() <= scrolltop && $(".js-scroll1").offset().top - $(window).height() >= scrolltop) {
        $(".js-scroll").addClass("active-dh");
    }
    if ($(".js-scroll1").offset().top - $(window).height() <= scrolltop && $(".js-scroll2").offset().top - $(window).height() >= scrolltop) {
        $(".js-scroll1").addClass("active-dh");
    }
    if ($(".js-scroll2").offset().top - $(window).height() <= scrolltop) {
        $(".js-scroll2").addClass("active-dh");
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