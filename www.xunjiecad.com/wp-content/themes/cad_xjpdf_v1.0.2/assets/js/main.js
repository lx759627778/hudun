/* 
 * @Author: Marte
 * @Date:   2017-11-30 11:24:06
 * @Last Modified by:   Marte
 * @Last Modified time: 2017-12-26 09:25:20
 */

// 首页软件特点tab栏切换
function showDescribe(obj, index) {
    $(obj).eq(index).addClass('current').siblings().removeClass('current');
}

function paginationStyle(paginationName, postNum, listNum) {
    var currentPage = $(paginationName + ' .active').text();
    var lastPage = Math.ceil($(postNum).text() / listNum);
    if (currentPage == 1) {
        $(paginationName + ' .prev').css({
            color: '#ccc',
            borderColor: '#ccc',
            cursor: 'default'
        });
    } else if (currentPage == lastPage) {
        $(paginationName + ' .next').css({
            color: '#ccc',
            borderColor: '#ccc',
            cursor: 'default'
        });
    };
    if (lastPage == 1) {
        $(paginationName + ' .next').css({
            color: '#ccc',
            borderColor: '#ccc',
            cursor: 'default'
        });
    };
}

function paginationInit(paginationName, postNum, listNum) {
    var str = window.location.href;
    var indexNum = str.lastIndexOf("\/");
    var pageNum = str.substring(indexNum + 1, str.length);
    $(paginationName).pagination({
        pageCount: Math.ceil($(postNum).text() / listNum),
        jump: true,
        coping: true,
        homePage: '1',
        endPage: Math.ceil($(postNum).text() / listNum),
        prevContent: '上一页',
        nextContent: '下一页',
        count: 2,
        isHide: $(postNum).text() > listNum ? false : true,
        keepShowPN: $(postNum).text() > listNum ? true : false,
        current: Number(pageNum) > 0 ? pageNum : 1,
        jumpBtn: '确定',
        callback: function() {
            var currentPage = $(paginationName + ' .active').text();
            if (Number(pageNum) > 0 ? false : true) {
                var newStr1 = str + '/page/' + currentPage;
                window.location.href = newStr1;
            } else {
                var newStr2 = str.replace(pageNum, currentPage);
                window.location.href = newStr2;
            };
            if ($('.jump-ipt').val() > Math.ceil($(postNum).text() / listNum)) {
                alert('123123');
            };
        }
    });
}
$(document).ready(function() {
    $('#foot-title li').click(function(event) {
        $(this).addClass('current').siblings('li').removeClass('current');
        var _index = $(this).index();
        showDescribe('.index-describe .foot ul', _index);
    })

    if (window.location.href.indexOf('help-majors') != -1) {
        $('.menu-item').eq(2).children('a').css({
            color: '#337ffd',
            fontWeight: 700
        });
    };
});

// 首页轮播图
$(function() {
    var len = $(".main_banner li").length;
    var index_2 = 0;
    var timer = 800;
    var intervaltimer = 0;
    var isMoving = false;

    function slide(slideMode) { //轮播方法        
        if (isMoving == false) {
            isMoving = true;
            var prev;
            var next;
            var hidden;
            var curr = $("#imgCard" + index_2); //当前正中显示

            if (index_2 == 0) { //当前正中显示的是第0张时 prev为最后一张
                prev = $("#imgCard" + (len - 1));
            } else { //否则  序列号-1
                prev = $("#imgCard" + (index_2 - 1));
            }
            if (index_2 == (len - 1)) { //当前正中显示的是最后一张时 next为第0张
                next = $("#imgCard0");
            } else { //否则  序列号+1
                next = $("#imgCard" + (index_2 + 1));
            }

            if (slideMode) { //slideMode为1(true)，执行slide(1)，上一张
                if (index_2 - 2 >= 0) { //index_2                       2       3       4
                    hidden = $("#imgCard" + (index_2 - 2)); //                                 0       1       2
                } else { //index_2       0       1
                    hidden = $("#imgCard" + (len + index_2 - 2)); //         3       4
                }
                prev.css("z-index", "5"); //点击prev按钮  让prev位置上的这张图片 层级最高 显示
                next.css("z-index", "1");
                curr.css("z-index", "2");
                hidden.css("z-index", "1");
                //当index_2自减，各图片往右运动效果
                hidden.css({ width: "300px", height: "180px", top: "60px", "left": "0px", "opacity": 0 });
                hidden.stop(true, true).animate({ width: "350px", height: "250px", top: "40px", left: "0px", opacity: 1 }, timer);
                curr.stop(true, true).animate({ width: "350px", height: "250px", top: "40px", left: "600px", opacity: 1 }, timer);
                next.stop(true, true).animate({ width: "300px", height: "180px", top: "60px", "left": "730px", "opacity": 0 }, timer, function() {
                    next.find("span").css("opacity", 0);
                    isMoving = false;
                });
                //prev  -->  curr     prev中的图片li轮换到curr的位置      其他一次轮换
                prev.find("span").css("opacity", 0);
                $(".main_banner_box li").find("p").css({ "bottom": "-80px" }); //所有标题隐藏
                prev.stop(true, true).animate({ width: "460px", height: "328px", left: "255px", top: 0, opacity: 1 }, timer, function() {
                    $(this).find("p").animate({ "bottom": "0px" }); //当前这张图片的标题运动出来
                });
                index_2--;
            } else { //执行next 操作
                if (index_2 + 2 >= len) { //index_2                               3       4   
                    hidden = $("#imgCard" + (index_2 + 2 - len)); //                                     0       1
                } else { //index_2       0       1       2
                    hidden = $("#imgCard" + (index_2 + 2)); //                     2       3       4
                }
                prev.css("z-index", "1");
                next.css("z-index", "5"); //点击next按钮  让next位置上的这张图片 层级最高 显示
                curr.css("z-index", "2");
                hidden.css("z-index", "1");
                //当index_2自增，各图片往左运动效果
                hidden.css({ width: "300px", height: "180px", top: "60px", "left": "780px", "opacity": 0 });
                hidden.stop(true, true).animate({ width: "350px", height: "250px", top: "40px", left: "650px", opacity: 1 }, timer);
                curr.stop(true, true).animate({ width: "350px", height: "250px", top: "40px", left: "50px", opacity: 1 }, timer);
                //next  -->  curr     next中的图片li轮换到curr的位置      其他一次轮换
                next.find("span").css("opacity", 0);
                $(".main_banner_box li").find("p").css({ "bottom": "-80px" }); //所有标题隐藏
                next.stop(true, true).animate({ width: "460px", height: "328px", left: "305px", top: 0, opacity: 1 }, timer, function() {
                    $(this).find("p").animate({ "bottom": "0px" }); //当前这张图片的标题运动出来
                });
                prev.stop(true, true).animate({ width: "300px", height: "180px", left: "50px", top: "60px", opacity: 0 }, timer, function() {
                    isMoving = false;
                });
                index_2++;
            } //if else

            hidden.find("span").css("opacity", 0.5);
            curr.find("span").css("opacity", 0.5);

            if (index_2 == len) index_2 = 0;
            if (index_2 < 0) index_2 = len + index_2; //限制index_2的范围
            $(".btn_list span").removeClass('curr').eq(index_2).addClass('curr'); //给序列号按钮添加、移除样式
        }
    } //slide()


    if (len > 3) {
        //序列号按钮 跳序切换 方法
        $(".btn_list span").click(function(event) {

            if (isMoving) return;
            var oIndex = $(this).index();

            if (oIndex == index_2) return; //点击按钮的序列号与当前图片的序列号一致，return
            clearInterval(intervaltimer)
            intervaltimer = null;

            var flag = false;
            //当前显示图片的序列号  和  被点击按钮的序列号  间隔超过1且不是首尾两个的时候
            if (Math.abs(index_2 - oIndex) > 1 && Math.abs(len - Math.abs(index_2 - oIndex)) != 1) {
                //统一样式
                $(".main_banner_box li").css({ width: "300px", height: "120px", left: "600px", top: "60px", opacity: 0 });
                //如果当前的序列号   比    被点击按钮序列号     大     而且     不相邻、不是首尾  
                if (index_2 > oIndex && len - Math.abs(index_2 - oIndex) != 1) {
                    flag = true;
                    index_2 = oIndex + 1; //oIndex+1    通过slide()  运动回上一张    oIndex
                } else { //比   小     而且     不相邻、不是首尾
                    index_2 = oIndex - 1; //oIndex-1     通过slide()  运动到下一张    oIndex
                    if (index_2 < 0) index_2 = len - 1;
                }
            } else { //当前 比 被点击  大 且   相邻                                  //从0    跳到     4        要执行上一张方法
                if ((index_2 > oIndex && len - (index_2 - oIndex) != 1) || (index_2 < oIndex && len + (index_2 - oIndex) == 1)) {
                    flag = true; //执行上一张
                }
            }
            slide(flag);
            intervaltimer = setInterval(slide, 3000); //自动轮播

        });

        $(".main_banner_box li").on("mousemove", function() {
            if ($(this).css("width") == "460px") { //鼠标移入为当前正中显示的图片li，则清除定时器
                clearInterval(intervaltimer);
                intervaltimer = null;
            }
        }).on("mouseout", function() { //鼠标移除重新滚动
            clearInterval(intervaltimer);
            intervaltimer = null;
            intervaltimer = setInterval(slide, 3000);
        });

        $(".js_pre").click(function(event) { //上一张
            if (isMoving) return;
            clearInterval(intervaltimer);
            intervaltimer = null;
            slide(1);
            intervaltimer = setInterval(slide, 3000);
        });

        $(".js_next").click(function(event) { //下一张
            if (isMoving) return;
            clearInterval(intervaltimer);
            intervaltimer = null;
            slide();
            intervaltimer = setInterval(slide, 3000);
        });

        intervaltimer = setInterval(slide, 3000);

    } else {

        $(".js_pre").hide();
        $(".js_next").hide();

    } //if else

});

// 首页轮播图图片切换
var list1 = [
    '1、运行迅捷CAD编辑器，软件界面打开之后，点击“文件”选项，接着点击“打印”里的“批量打印”功能。',
    '2、进入批量打印界面后，点击“添加文件”选项，添加需要批量打印的CAD图纸。',
    '3、文件添加好后，选择上方“打印”选项，然后勾选里面需要打印的CAD文件。',
    '4、接下来点击“打印设置”按钮，对“打印机”和“打印纸张”进行设置。',
    '5、最后点击右下角的“打印”按钮，即可将添加的CAD图纸进行批量打印。'
]
var list2 = [
    '1、运行迅捷CAD编辑器，软件打开后，点击界面里的“文件”—“选项”按钮。',
    '2、进入选项界面后，点击界面左侧的“转换设置”栏，然后将输出质量调为最高，并点击“OK”按钮进行保存。',
    '3、接下来点击“文件”按钮里的“批处理”功能。',
    '4、进入批处理界面，点击“添加文件”选项，添加需要转换的CAD文件。',
    '5、接着点击“输出格式”选项，将输出的文件格式更改为JPG图片格式。然后按确定'
]
$(function() {
    $('.slide-tab li').click(function(event) {
        $(this).addClass('current').siblings('li').removeClass('current');
        var _index = $(this).index();
        var imgArr = $('.main_banner li img');
        var txtArr = $('.main_banner li p');
        for (var i = 0; i < imgArr.length; i++) {
            var imgUrl = imgArr.eq(i).attr('src');
            if (_index == 0) {
                imgUrl = imgUrl.replace('slede', 'slide');
                imgArr.eq(i).attr('src', imgUrl);
                txtArr.eq(i).text(list1[i]);
            } else {
                imgUrl = imgUrl.replace('slide', 'slede');
                imgArr.eq(i).attr('src', imgUrl);
                txtArr.eq(i).text(list2[i]);
            };
        };
    })
})