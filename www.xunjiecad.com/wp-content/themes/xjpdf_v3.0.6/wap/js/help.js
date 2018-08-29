function getQueryString(name) {
    var reg = new RegExp("(^|&)" + name + "=([^&]*)(&|$)");
    var r = decodeURI(window.location.search).substr(1).match(reg);
    if (r != null) return unescape(r[2]);
    return null;
}
/*判断手机系统*/
$(function() {
    if (typeof(Storage) !== "undefined") {
        // 支持 localStorage  sessionStorage 对象!
        sessionStorage.pageindex = 4;
    } else {
        //  不支持 web 存储。
        setCookie("pageindex", 4);
    }

})
$(function() {
    var url = $(".js-url").text();
    var helpdata = {
        help_1: {
            title: "PDF阅读器主页操作",
            step: [{
                    textnub: "第一步：",
                    text: "手机内的 PDF文件添加进 APP后都会显示在主页，文档右侧菜单栏提供：重命名、收藏/取消收藏、分享、删除 4 个功能。",
                    imgsrc: url + "/wap/images/help1-1.png"
                },
                {
                    textnub: "第二步：",
                    text: "浏览记录可查看您浏览过的文档，收藏的PDF可从APP下部菜单的收藏按钮进行查看。",
                    imgsrc: url + "/wap/images/help1-2.png"
                }
            ]
        },
        help_2: {
            title: "如何设置合适的阅读方式？",
            step: [{
                    textnub: "第一步：",
                    text: "点击软件菜单栏的“设置”选项，即可进入文档的翻阅样式设置。",
                    imgsrc: url + "/wap/images/help2-1.jpg"
                },
                {
                    textnub: "第二步：",
                    text: "可自行设置页面的过渡方式是“连续”/“跳转”，滑动方式垂直阅读还是水平阅读。 ",
                    imgsrc: url + "/wap/images/help2-2.jpg"
                }
            ]
        },
        help_3: {
            title: "如何进行批注？",
            step: [{
                textnub: "第一步：",
                text: "打开PDF文档，单击界面上的“编辑按钮 ”。",
                imgsrc: url + "/wap/images/help3-1.jpg"
            }, {
                textnub: "第二步：",
                text: "批注选项 – 选择要添加批注的文字<br/>注：在添加批注信息的界面，点击右下角的编辑按钮，可以修改批注的样式和颜色。",
                imgsrc: url + "/wap/images/help3-2.jpg"
            }]
        },
        help_4: {
            title: "如何进行注释？ ",
            step: [{
                textnub: "第一步：",
                text: "在添加批注信息的界面，点击注释按钮可以添加注释。 ",
                imgsrc: url + "/wap/images/help4-1.jpg"
            }, {
                textnub: "第二步：",
                text: "在文本框内输入注释内容。",
                imgsrc: url + "/wap/images/help4-2.jpg"
            }]
        },

    }
    var pageid = getQueryString("id");
    var pagename = "help_" + pageid;
    console.log(pagename);
    $('.help-h').text(helpdata[pagename].title);
    var step = helpdata[pagename].step;
    var stephtml = "";
    for (var i = 0; i < step.length; i++) {
        stephtml += '<div class="help-step-li"> <h6> ' + step[i].textnub + ' </h6> <p>' + step[i].text + ' </p> <img src = "' + step[i].imgsrc + '"alt = "" ></div>';
    }
    $(".help-step").html(stephtml);
})