/* 点击购买 */
$(".js-buy-btn").click(function() {
    var viptype = $(this).attr("data-type");
    var price = $(this).attr("data-price");
    var paypack = $(this).attr("data-paypack");
    $("#price").val(price);
    $("#vip").val(viptype);
    $("#paypack").val(paypack);
    $(".buy-mask,.buy-pop").show();
})


function checkPhone(phone) {
    if (!(/^1[34578]\d{9}$/.test(phone))) {
        return false;
    } else {
        return true;
    }
}

$(".js-tel-ipt").change(function() {
    var telnub = $(this).val();
    console.log(telnub);
    $(this).val(telnub.slice(0, 11));
})
var paypackdata = [
    "D5987DF6B4472FB6FE4BA911B7E84A51E822B38A76CD1326612C3DBE7BD1B1F8",
    "5BC1D717A60C15CA7617BC789132C25161F70CA39DB091DE",
    "BBC537C59F1F20EE15404B84062DA2370F7E31841224135E"
];



$(".js-pay-btn").click(function() {
    var account = $(".js-tel-ipt").val();
    if (!checkPhone(account)) {
        $(".js-tel-tips").show();
        return false;
    } else {
        $(".js-tel-tips").hide();
    }
    var paymethod = $(this).attr("data-paytype");
    var truename = $(".js-name-ipt").val();
    var softversion = "v1.0.0";
    var timestamp = Math.round(new Date().getTime() / 1000);
    var noticeurl = '';
    var paypack = $("#paypack").val();
    var datasign = $.md5("account=" + account + "&noticeurl=" + noticeurl + "&paymethod=" + paymethod + "&paypack=" + paypack + "&softversion=" + "v1.0" + "&timestamp=" + timestamp + "&truename=" + truename + "hUuPd20171206LuOnD");
    var payjson = { "account": account, "noticeurl": noticeurl, "paymethod": paymethod, "paypack": paypack, "softversion": "v1.0", "timestamp": timestamp, "truename": truename, "datasign": datasign };
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
                formData.append("url", data.message);
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
                        $(".js-pay-qr").attr("src", data.message);
                        $(".js-money-nub").text("￥" + $("#price").val() + "元");
                        $(".WeChat-mask").show();
                        $(".WeChat-pop").show();
                    }
                });
            } else if (paymethod == "alipay") {
                window.open(data.message);
            }
        }
    });
})