var checkednum=false;
function checkPhone(id){ 
    var phone = document.getElementById(id).value;
    if(!(/^1[34578]\d{9}$/.test(phone))){ 
        errorMsgShow();
        checkednum=false;
        return false; 
    }else{
        checkednum=true;
    }
}

function isIE(){
    var theUA = window.navigator.userAgent.toLowerCase();
    if ((theUA.match(/msie\s\d+/) && theUA.match(/msie\s\d+/)[0]) || (theUA.match(/trident\s?\d+/) && theUA.match(/trident\s?\d+/)[0])) {
        var ieVersion = theUA.match(/msie\s\d+/)[0].match(/\d+/)[0] || theUA.match(/trident\s?\d+/)[0];
        if (ieVersion < 9) {
            return true;
        }
    }
}
/**
 * 手机号验证
 */

$(function() {
    $('#mobilenum').blur(function(event) {
        checkPhone('mobilenum');
    });
});


/**
 * 支付方式
 */
$(function() {
    $("#aliPay").attr({checked: true});
    $('.payment-tag a').click(function(){
        $(this).addClass("current").siblings().removeClass("current");
        $(this).children('input').attr({checked: true});
    });
});


/**
 * 微信扫码支付弹出框显示
 */
function weChatDialogShow(){
    $(".wechat-pay-dialog-bg").css({display: "block",height: $(document).height()});
    $(".wechat-pay-dialog").css("display","block");
};
/**
 * 微信扫码支付弹出框隐藏
 */
$(function () {
    $(".btn-close").click(function (event) {
        $(".wechat-pay-dialog-bg").css("display", "none");
        $(".wechat-pay-dialog").css("display", "none");
        $('#qrcode img').attr('src', '');
    });
});
/**
 * 错误信息提示
 */
function errorMsgHide(id){
    var errorMsgHide = setInterval(function() {$(id).css({display:'none'});},5000);
    setInterval(function() {clearInterval(errorMsgHide );},5010);
}
function errorMsgShow(){
    $(".form-error-buy").text('请正确填写11位手机号');
    $(".form-error-buy").css({display:'block'})
    errorMsgHide(".form-error-buy");
}
function erroCode(){
    $(".form-error-code").css({display: 'block'});
    if ($("#oraddcode").val()=="" ) {
         errorMsgHide(".form-error-code");
    }
}

/**
 * 选择商品
 */

$(function(){
    $('.product-info .product-plans .plan-tips a').click(function(event) {
        var _index = $(this).index();
        var price = $(this).attr('data-price');
        $(this).addClass('current').siblings().removeClass('current');
        $('.plan-cxt .plan-detail').eq(_index).addClass('current').siblings().removeClass('current');
        var plans = $('.product-info .product-pic .plans');
        $('.price').text(price);
        $('.product-pic img').eq(_index).addClass('current').siblings().removeClass('current');
    })
})
function getSoftPack(){
    var _index1 = $('.plan-tips a.current').index();
    var softpack;
    if ($('.product-name').attr('value')=='xunjiecadeditor') {
        switch (_index1) {
            case 0:
                softpack = 'xunjiecadeditor';
                break;
            case 1:
                softpack = 'xunjiecadeditor|pdfconverter';
                break;
            case 2:
                softpack = 'xunjiecadeditor|pdfconverter';
                break;
            default:
                break;
        }
    }else{
        switch (_index1) {
            case 0:
                softpack = 'XunjieCAD';
                break;
            case 1:
                softpack = 'XunjieCAD|pdfconverter';
                break;
            case 2:
                softpack = 'XunjieCAD|pdfconverter';
                break;
            default:
                break;
        }
    };
    
    return softpack;
}
/**
 * 购买商品
 */
// 支付宝支付
function alipay(){
        var account = $('#mobilenum').val();
        var paymethod = $('.payment-tag a.current input').attr('value');
        var package = $('.plan-tips a.current').attr('value');
        var noticeurl = '';
        var truename = '';
        var softname = getSoftPack();
        var softversion = '5.0';
        var timestamp = Math.round(new Date().getTime() / 1000);
        var datasign = $.md5('account=' + account + '&noticeurl=' + noticeurl + '&package=' + package + '&paymethod=' + paymethod + '&softname=' + softname + '&softversion=' + softversion + '&timestamp=' + timestamp + '&truename=' + truename + 'hUuPd20171206LuOnD');
        $('.input-paymethod').val(paymethod);
        $('.input-package').val(package);
        $('.input-softname').val(softname);
        $('.input-timestamp').val(timestamp);
        $('.input-datasign').val(datasign);
        $('#buy_form').submit();    
    }
// 微信支付
function weixinPay() {
    var account = $('#mobilenum').val();
    var paymethod = $('.payment-tag a.current input').attr('value');
    var package = $('.plan-tips a.current').attr('value');
    var noticeurl = '';
    var truename = '';
    var softname = getSoftPack();
    var softversion = '5.0';
    var timestamp = Math.round(new Date().getTime() / 1000);
    var datasign = $.md5('account=' + account + '&noticeurl=' + noticeurl + '&package=' + package + '&paymethod=' + paymethod + '&softname=' + softname + '&softversion=' + softversion + '&timestamp=' + timestamp + '&truename=' + truename + 'hUuPd20171206LuOnD');
    $.ajax({
        url: $('.themeUrl').text() + '/request.php',
        type: 'post',
        dataType: 'json',
        data: {
            "path":'/v3/buypaypack',
            "json":1,
            "params":{
                "account": account,
                "paymethod": paymethod,
                "package": package,
                "noticeurl": noticeurl,
                "truename": truename,
                "softname": softname,
                "softversion": softversion,
                "timestamp": timestamp,
                "datasign": datasign
            }
        },
        success: function (data) {
            if (data.code == 10000) {
                if (paymethod == 'alipay') {
                    return false;
                } else if (paymethod == 'weixinpay') {
                    var weixinUrl = data.message;
                    weChatDialogShow();
                    $.ajax({
                        url: $('.themeUrl').text() + '/request.php',
                        type: 'post',
                        dataType: 'json',
                        data: {
                            "path":'/urlCQRcode',
                            "params":{
                                "url":weixinUrl,
                                "width":120,
                                "iflogo":0,
                                "totype":":base64"
                            }
                        },
                        success: function (data) {
                            $('#qr-code-wrapper img').attr('src', data.message);
                        }
                    })
                };
            };
        }
    })
}
function buy_form(){
    if (checkednum) {
        if($('.payment-tag a.current input').attr('value') == 'alipay'){
            alipay();
        }else{
            weixinPay();
        }
    } else {
        errorMsgShow();
    };
}