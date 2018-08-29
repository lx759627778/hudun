/** banner-change **/
$(function() {
    var bannerHeight = $(".banner").height();
    var CxtHeight = $(".banner-cxt").height();
    var bannerCxtMargin = (bannerHeight - CxtHeight) / 2;
    var bannerCtrlWidth = $('dl.banner-controller').width();
    $(".banner-cxt").css("margin-top", bannerCxtMargin + "px");
    $('.banner-controller').css({
        'margin-left': -0.5 * bannerCtrlWidth + 'px'
    });
    $('.banner-controller dd').mouseenter(function() {
        var x = $(this).index();
        $(this).addClass("current").siblings().removeClass("current");
        $(".banner-change .wrapper").hide().eq(x).css("display", "block");
    });
    $("ul.features li").mouseenter(function() {
        $(this).addClass("current").siblings().removeClass("current");
    });
    var index = 0;
    var timer = setInterval(function() {
        index = (index == 2) ? 0 : index + 1;
        $(".banner-change .wrapper").hide().eq(index).show();
        $("dl.banner-controller dd").removeClass("current").eq(index).addClass("current");
    }, 3000);
    $(".article-menu li,.article-list-01 a").mouseenter(function() {
        $(this).addClass("current").siblings().removeClass("current");
    });
    $(".article-list a").mouseleave(function() {
        $(this).removeClass("current");
    });
});
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
/** 侧边练导航收起展开 **/
$(function() {
    $(".guide-enter").mouseenter(function() {
        var x = $(".guide-enter ul").height();
        if (x > 160) {
            $(".guide-enter ul").css({
                'height': '160px'
            });
            $(".guide-enter a.drop").css('background-position', '50% 0');
        } else {
            $(".guide-enter ul").css({
                'height': 'auto'
            });
            $(".guide-enter a.drop").css('background-position', '50% 100%');
        }
    });
    $(".guide-enter ul").mouseleave(function() {
        $(".guide-enter ul").css({
            'height': '160px'
        });
        $(".guide-enter a.drop").css('background-position', '50% 0');
    });
});
/** 知识库文章导航切换 **/
$(function() {
    $(".artical-nav li").click(function() {
        $(this).addClass("current").siblings().removeClass("current");
        var x = $(this).index();
        $(".article-list-wrapper dd").eq(x).addClass("current").siblings().removeClass("current");
    });
});

$(function() {
    $(".tutorial-cxt-01 dd.dd-00").mouseenter(function() {
        var x = $(this).index();
        $(this).addClass("current").siblings().removeClass("current");
        $(".tutorial-pic-01 div.pic").eq(x).addClass("current").siblings().removeClass("current");
        $(".tutorial-pic-01 h1 a").eq(x).addClass("current").siblings().removeClass("current");
    });
    var index = 0;
    var timer = setInterval(function() {
        index = (index == 2) ? 0 : index + 1;
        $(".tutorial-cxt-01 dd.dd-00").removeClass("current").eq(index).addClass("current");
        $(".tutorial-pic-01 div.pic").removeClass("current").eq(index).addClass("current");
        $(".tutorial-pic-01 h1 a").removeClass("current").eq(index).addClass("current");
    }, 3000);
});

$(function() {
    $(".tutorial-cxt-02 dd.dd-00").mouseenter(function() {
        var x = $(this).index();
        $(this).addClass("current").siblings().removeClass("current");
        $(".tutorial-pic-02 div").eq(x).addClass("current").siblings().removeClass("current");
        $(".tutorial-pic-02 h1 a").eq(x).addClass("current").siblings().removeClass("current");
    });
    var index = 0;
    var timer = setInterval(function() {
        index = (index == 2) ? 0 : index + 1;
        $(".tutorial-cxt-02 dd.dd-00").removeClass("current").eq(index).addClass("current");
        $(".tutorial-pic-02 div.pic").removeClass("current").eq(index).addClass("current");
        $(".tutorial-pic-02 h1 a").removeClass("current").eq(index).addClass("current");
    }, 1000);
});
/** 步骤切换 **/
$(function() {
    var index = 0;
    var index2 = 0;
    var timer = setInterval(function() {
        index = (index == 2) ? 0 : index + 1;
        $("#step-dot s.dot").removeClass("current").eq(index).addClass("current");
        $("#support-tips-cxt li").removeClass("current").eq(index).addClass("current");
    }, 3000);
});
/**
 * 套餐介绍切换
 * @param  {[type]} ) {               $(".plan-control dd").click(function() {        var x [description]
 * @return {[type]}   [description]
 */
$(function() {
    $(".plan-control dd").click(function() {
        var x = $(this).index();
        $(this).addClass("current").siblings().removeClass("current");
        $(".plan-introduce ul.wrapper").removeClass("current").eq(x).addClass("current");
    });
});

/**
 * 返回顶部
 * @param  {[type]} )      {               $(window).scroll(function() {                          if            ($(window).scrollTop() > 200) {            $(".to-top").show(300);        } else {            $(".to-top").hide(100);        }    });    $(".to-top").click(function() {        $('body,html').animate({            scrollTop: 0        } [description]
 * @param  {[type]} 1000);                                                  return false;    });} [description]
 * @return {[type]}        [description]
 */
$(function() {;
    $(window).scroll(function() {
        if ($(window).scrollTop() > 200) {
            $(".to-top").css('display', 'block');
        } else {
            $(".to-top").css('display', 'none');
        }
    });
    $(".to-top").click(function() {
        $('body,html').animate({
            scrollTop: 0
        }, 1000);
        return false;
    });
});
/**
 * 保证服务中心页面文章列表出现单数，让单数最后一个列表居中
 */
$(function() {
    var y = $(window).width();
    var x = $(".surpport-cat-excerpt li").index();
    if (x < 1) {
        $(".surpport-cat-excerpt li").css("width", "100%");
    } else if (x % 2 == 0) {
        $(".surpport-cat-excerpt li").eq(x).css("width", "100%");
    } else {
        $(".surpport-cat-excerpt li").eq(x).css("width", "50%");
    }
    if (y <= 768) {
        $(".surpport-cat-excerpt li").eq(x).css("width", "100%");
    }
});

$(function() {
    $('.nav-icon').on('click', function(event) {
        $(this).siblings('.nav').toggleClass('is-visible');
    });
});

appMain=(function(){
    return {
        isPC:function(){
           var userAgentInfo = navigator.userAgent;
           var Agents = new Array("Android", "iPhone", "SymbianOS", "Windows Phone", "iPad", "iPod");
           var flag = true;
           for (var v = 0; v < Agents.length; v++) {
               if (userAgentInfo.indexOf(Agents[v]) > 0) { flag = false; break; }
           }
           return flag;
        }
    };
})(window);

jQuery(document).ready(function($) {
    ajustPlanIntroHeight= function(){
        if($('.plan-introduction .item-4 .item-detail').length>0 && appMain.isPC()){
            var h = $('.plan-introduction .item-4 .item-detail').height();
            $('.plan-introduction .item-detail,.plan-introduction .item-detail').css({
                'height':h+'px'
            });
        }
    };
    ajustPlanIntroHeight();
    $(window).resize(function(event) {
        ajustPlanIntroHeight();
    });
});