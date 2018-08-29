/*判断手机系统*/
$(function() {
    var u = navigator.userAgent,
        app = navigator.appVersion,
        isAndroid = u.indexOf('Android') > -1 || u.indexOf('Linux') > -1,
        isiOS = !!u.match(/\(i[^;]+;( U;)? CPU.+Mac OS X/);
    var urlsearch = window.location.search;
    if (isiOS) {
        $('.dwon-link').attr('href', 'https://itunes.apple.com/cn/app/%E8%BF%85%E6%8D%B7pdf%E9%98%85%E8%AF%BB%E5%99%A8-%E4%B8%93%E4%B8%9Apdf%E7%BC%96%E8%BE%91%E6%B5%8F%E8%A7%88%E7%AD%BE%E5%90%8D%E5%B7%A5%E5%85%B7/id1248693408?mt=8' + urlsearch);
    } else {
        $('.dwon-link').attr('href', 'https://download.huduntech.com/software/pdfeditor/xunjiepdf.apk');
    }
})

$(function() {
    var pageindex;
    if (typeof(Storage) !== "undefined") {
        // 支持 localStorage  sessionStorage 对象!
        pageindex = sessionStorage.pageindex;
    } else {
        //  不支持 web 存储。
        pageindex = getCookie("pageindex");
    }
    if (pageindex == 4) {
        var myswiper = new Swiper('.full-page', {
            direction: 'vertical',
            mousewheel: true,
            initialSlide: 4,
            on: {
                slideChangeTransitionEnd: function() {
                    if (this.activeIndex >= 4) {
                        $(".Arrow-icon").hide();
                    } else {
                        $(".Arrow-icon").show();
                    }
                },
            },
        });
        if (typeof(Storage) !== "undefined") {
            // 支持 localStorage  sessionStorage 对象!
            sessionStorage.pageindex = "";
        } else {
            //  不支持 web 存储。
            setCookie("pageindex", "");
        }
    } else {
        var myswiper = new Swiper('.full-page', {
            direction: 'vertical',
            mousewheel: true,
            on: {
                slideChangeTransitionEnd: function() {
                    if (this.activeIndex >= 4) {
                        $(".Arrow-icon").hide();
                    } else {
                        $(".Arrow-icon").show();
                    }
                },
            },
        });
    }
    var swiper1 = new Swiper('.user-rating-swiper', {
        pagination: {
            el: '.user-rating-pagination',
        },
        autoplay: true,
        loop: true
    });
});