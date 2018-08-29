/* 轮播 */
$(function() {
    var myswiper = new Swiper('.swiper-container', {
        autoplay: {
            delay: 4000, //1秒切换一次
        },
        loop: true,
        speed: 500,
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
        pagination: {
            el: '.swiper-pagination',
            clickable: true
        },
    });
})

$(".nav-icon").click(function() {
    $(".main-navigation").slideToggle();
})

/** 友情链接滚动 **/
$(function() {
    var setTime;
    $(".Relevant-link-list").hover(function() {
        clearInterval(setTime);
    }, function() {
        setTime = setInterval(function() {
            var x = $(".Relevant-link-list ul:first");
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


/*返回顶部*/
$(function() {;
    $(window).scroll(function() {
        if ($(window).scrollTop() > 200) {
            $(".sidebar-top").css('display', 'block');
        } else {
            $(".sidebar-top").css('display', 'none');
        }
    });
    $(".sidebar-top").click(function() {
        $('body,html').animate({
            scrollTop: 0
        }, 1000);
        return false;
    });
});

$(".ocr-Support-list>li").mouseover(function() {
    var index = $(".ocr-Support-list>li").index($(this));
    $(this).siblings("li").removeClass("active");
    $(".ocr-img-text").eq(index).addClass("active");
    $(this).addClass("active");
    $(".ocr-img-text").eq(index).siblings(".ocr-img-text").removeClass("active");
    $(".ocr-img-text").eq(index).addClass("active");
})