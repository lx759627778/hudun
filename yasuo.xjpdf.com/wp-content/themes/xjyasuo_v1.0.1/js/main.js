/** 友情链接滚动 **/
$(function() {
    var setTime;
    $(".scroll-wrapper").hover(function() {
        clearInterval(setTime);
    }, function() {
        setTime = setInterval(function() {
            var x = $(".scroll-wrapper ul:first");
            var y = x.find("li:first").height();
            x.animate({
                "marginTop": -y + "px"
            }, 1000, function() {
                x.css({
                    marginTop: 0
                }).find("li:first").appendTo(x);
            });
        }, 1500);
    }).trigger("mouseleave");
});