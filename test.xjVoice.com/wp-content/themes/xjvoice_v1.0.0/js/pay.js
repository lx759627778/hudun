var paypack = {
    "vip188m12": "CEB023483BB7F3F34E8832F381ED5522AF7AEED26E6978B8D5AACA257C72A628",
    "vip128m6": "AFE7DA4697AA4F1BE24E498317AB2525E265B751B8E6AD78",
    "vip88m1": "15DFDC3DBF4DD228A81D60001DFADC8D661FF426DE1EFAE2",
    "vip198m12": "48E77CF5256747F04E8832F381ED5522AF7AEED26E6978B8D5AACA257C72A628",
    "vip138m6": "38528C168DC45665E24E498317AB2525E265B751B8E6AD78",
    "vip98m1": "6496BE4EF36DC305A81D60001DFADC8D661FF426DE1EFAE2",
}

// var setjson = {
//     "softname": "xunjievoice",
//     "productid": "119",
//     "package": "vip98m1"
// }
// $.ajax({
//     url: "http://app.xunjiepdf.com/api/v4/setpaypack",
//     type: "POST",
//     contentType: "application/json; charset=utf-8",
//     dataType: "json",
//     data: JSON.stringify(setjson),
//     async: false,
//     success: function(data) {
//         console.log(setjson["package"]);
//         console.log(data);
//     }
// });

var paydata = {
        "phonetic-writing": {
            "title": "语音转文字月会员",
            "setmeal": [{
                "data-type": "vip188m12",
                "data-price": "188",
                "paypack": "CEB023483BB7F3F34E8832F381ED5522AF7AEED26E6978B8D5AACA257C72A628"
            }, {
                "data-type": "vip128m6",
                "data-price": "128",
                "paypack": "AFE7DA4697AA4F1BE24E498317AB2525E265B751B8E6AD78"
            }, {
                "data-type": "vip88m1",
                "data-price": "88",
                "paypack": "15DFDC3DBF4DD228A81D60001DFADC8D661FF426DE1EFAE2"
            }],
        },
        "writing-phonetic": {
            "title": "文字转语音月会员",
            "setmeal": [{
                "data-type": "vip198m12",
                "data-price": "198",
                "paypack": "48E77CF5256747F04E8832F381ED5522AF7AEED26E6978B8D5AACA257C72A628"
            }, {
                "data-type": "vip138m6",
                "data-price": "138",
                "paypack": "38528C168DC45665E24E498317AB2525E265B751B8E6AD78"
            }, {
                "data-type": "vip98m1",
                "data-price": "98",
                "paypack": "6496BE4EF36DC305A81D60001DFADC8D661FF426DE1EFAE2"
            }],
        },
    }
    /* 支付 */
$(".js-pay-btn").click(function() {
    var producttype = $(this).parents(".recharge-type").attr("data-type");
    $(".js-pay-title").text(paydata[producttype]["title"]);
    var spanindex = $(this).parents(".recharge-list").find("li").index($(this).parent("li"));
    $(".js-time-type>span").removeClass("active");
    $(".js-time-type>span").eq(spanindex).addClass("active");
    $(".js-time-type>span").each(function(index) {
        $(this).attr({
            "data-type": paydata[producttype]["setmeal"][index]["data-type"],
            "data-price": paydata[producttype]["setmeal"][index]["data-price"],
            "paypack": paydata[producttype]["setmeal"][index]["paypack"]
        });
    })
    $(".js-money").text("￥" + $(".js-time-type>span").eq(spanindex).attr("data-price"));
    $(".buy-mask").show();
    $(".buy-pop").show();
})

$(".js-time-type>span").click(function() {
    $(".js-time-type>span").removeClass("active");
    $(this).addClass("active");
    $(".js-money").text("￥" + $(this).attr("data-price"));
})

$(".js-paymethod-slt>a").click(function() {
    $(".js-paymethod-slt>a").removeClass("active");
    $(this).addClass("active");
})


$(".js-pay-submit").click(function() {
    var account = "17621250502";
    var paymethod = $(".js-paymethod-slt>a.active").attr("data-paymethod");
    var paypack = $(".js-time-type>span.active").attr("paypack");
    var timestamp = Math.round(new Date().getTime() / 1000);
    var package = $(".js-time-type>span.active").attr("data-type");
    var noticeurl = '';
    var truename = '';
    var datasign = $.md5("account=" + account + "&noticeurl=" + noticeurl + "&paymethod=" + paymethod + "&paypack=" + paypack + "&softversion=" + "v1.0" + "&timestamp=" + timestamp + "&truename=" + truename + "hUuPd20171206LuOnD");
    var payjson = { "account": account, "noticeurl": noticeurl, "paymethod": paymethod, "paypack": paypack, "softversion": "v1.0", "timestamp": timestamp, "truename": truename, "datasign": datasign };
    $(".themeUrl").text(JSON.stringify(payjson));
    $.ajax({
        url: "http://app.xunjiepdf.com/api/v4/buypaypack",
        type: "POST",
        contentType: "application/json; charset=utf-8",
        dataType: "json",
        data: JSON.stringify(payjson),
        async: false,
        success: function(data) {
            if (paymethod == "weixinpay") {
                var formData = new FormData();
                formData.append("iflogo", "1");
                formData.append("totype", "base64");
                formData.append("width", "150");
                formData.append("url", data.orderno);
                console.log(formData);
                $.ajax({
                    url: "http://app.xunjiepdf.com/api/urlCQRcode",
                    type: "POST",
                    dataType: "json",
                    contentType: false, // 告诉jQuery不要去设置Content-Type请求头
                    processData: false, // 告诉jQuery不要去处理发送的数据
                    data: formData,
                    async: false,
                    success: function(data) {
                        $(".buy-pop").hide();
                        $(".buy-mask").hide();
                        $(".WeChat-payment-money").text("￥" + $(".js-time-type>span.active").attr("data-price") + ".00");
                        $(".js-qr-img>img").attr("src", data.message);
                        $(".WeChat-mask").show();
                        $(".WeChat-payment-pop").show();
                    }
                });
            } else if (paymethod == "alipay") {
                window.location.href = data.message + "&orderno" + data.orderno;
            }
        }
    });
})


$(".js-buy-close").click(function() {
    $(".buy-pop").hide();
    $(".buy-mask").hide();
})