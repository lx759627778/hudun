function isphone() {
    var ua = navigator.userAgent;
    var ipad = ua.match(/(iPad).*OS\s([\d_]+)/),
        isIphone = !ipad && ua.match(/(iPhone\sOS)\s([\d_]+)/),
        isAndroid = ua.match(/(Android)\s+([\d.]+)/),
        isMobile = isIphone || isAndroid;
    return isMobile;
}
$(function() {
    if (isphone()) {
        $(".full-page").show();
        $(".Arrow-icon").show();
        $(".is_pc").remove();
    } else {
        $(".full-page").remove();
        $(".Arrow-icon").remove();
    }
})