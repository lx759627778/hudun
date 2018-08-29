function CheckData(strTitle, strInput, strType, blNeed) {
    var pattern='',msg='';
    switch (strType) {
    case "username":
        // 定义用户名、登录名的模板(3-20位字母、数字或下划线)
        pattern = /^[a-zA-Z0-9]{1}[a-zA-Z0-9_]{1,18}[a-zA-Z0-9]{1}$/;
        msg = "\n\n格式要求: 由3-20位字母、数字或下划线组成(不能以下划线开头或结尾) ";
        break;
    case "pname":
        // 定义姓名的模板(2-20个字符)
        pattern = /^.{2,20}$/;
        msg = "\n\n格式要求: 2-20个字符    ";
        break;
    case "idcard":
        // 定义身份证号的模板(15位数字或者18位数字(最后一位可以为字母))
        pattern = /^[0-9]{15}$|^([0-9]{17}[a-zA-Z0-9]{1})$/;
        msg = "\n\n格式要求: 15位数字或者18位数字(最后一位可以为字母) ";
        break;
    case "password":
        // 定义密码的模板(6-20位字母或数字)
        pattern = /^[a-zA-Z0-9]{6,20}$/;
        msg = "\n\n格式要求: 由6-20位字母或数字组成    ";
        break;
    case "email":
        // 定义Email格式的模板(abc_123@abc-123.com)
        pattern = /^[a-zA-Z0-9_\-\.]+@([a-zA-Z0-9\-]+\.)+[a-zA-Z]{2,5}$/;
        msg = "";
        if (strInput != "") {
            msg = "\n\n- 您填写的电子邮箱是 " + strInput;
            msg += "   \n\n- 请仔细核对拼写是否正确，注意不要用全角字母输入。  ";
        }
        break;
    case "telphone":
        // 定义电话号码的模板(7-20位数字、下划线、连字符或括号)
        pattern = /^[0-9_,\-\(\)\s]{7,20}$/;
        msg = "\n\n格式要求: 7-20位数字、下划线、连字符或括号    ";
        break;
    case "mtel":
        // 定义手机号码的模板(11位数字,1开头),小灵通号码(106开头，后带9-12个数字)
        pattern = /^1[0-9]{10}$|^106[0-9]{9,12}$/;
        msg = "";
        break;
    case "postcode":
        // 定义邮政编码的模板(6位数字)
        pattern = /^[0-9]{6}$/;
        msg = "\n\n格式要求: 6位数字    ";
        break;
    case "number":
        // 定义数字
        pattern = /^[1-9]{1}[0-9]{0,4}$/;
        msg = "\n\n格式要求: 数字    ";
        break;
    }
    strInput = strInput.replace(/(^\s*)|(\s*$)/g, ""); //去除前后空格
    if ((strInput == "") && blNeed) // 如果输入内容为空并且此项是必填项
    {
        $(".form-error").text("请您填写" + strTitle + "。  " + msg);
        errorMsgShow();
        return false;
    }
    if (strInput != "") // 如果输入内容不为空
    {
        var result = strInput.match(pattern); // 尝试格式匹配
        if (result == null) // 不匹配
        {
            $(".form-error").text("请您填写有效的" + strTitle + "。  " + msg);
            errorMsgShow();
            return false;
        }
    }
    return true;
}
/**
 * 表单验证
 */
function VerifyData() {
    $("#payNow .btn-green").addClass("btn-grey").attr("disabled",true);
    var int = setInterval(function() {
        $("#payNow .btn-green").removeClass("btn-grey").attr("disabled",false);
    },1000);
    setInterval(function() {
        clearInterval(int);
    },1010);
    if ($("#noemail").is(':checked')) {
        if (!CheckData("手机号码", $("#mobilenum").val(), "mtel", true)){
            $("#mobilenum").focus();
            return false;
        }
        $("#noemail").val('1');
        }else{
        if (!CheckData("电子邮箱", $("#phonenum").val(), "email", true)){
            $("#phonenum").focus();
            return false;
        }
        $("#noemail").val('0');
    }
    if ($("#wechatPay").is(':checked')){
        $url = 'http://pay.sjhfrj.com/Home/Ordertest/toPay?s_id='+$("input[name='s_id']").val()+'&need_mc='+$("input[name='need_mc']").val()+'&rmk='+$("input[name='rmk']").val()+'&ft_id='+$("input[name='ft_id']").val()+'&orsoqty='+$("input[name='orsoqty']").val()+'&phonenum='+$("input[name='phonenum']").val()+'&mobilenum='+$("input[name='mobilenum']").val()+'&pay-wy=weixin&_=1433920639227&noemail='+ $("#noemail").val()+'&s_price='+$("input[name='s_price']").val();
        //$("#qrCodeFrame").attr("src",$("#qrCodeFrame").attr("src")+ escape($url));
        $("#qrCodeFrame").attr("src",$url);
        weChatDialogShow();
        return false;
    }
    return true;
}
/**
 * 支付方式
 * @param  {[type]} ) {               $("#aliPay").attr({checked: true});    $('.payment-tag a').click(function(){        $(this).addClass("current").siblings().removeClass("current");        $(this).children('input').attr({checked: true});    });} [description]
 * @return {[type]}   [description]
 */
$(function() {
    $("#aliPay").attr({checked: true});
    $('.payment-tag a').click(function(){
        $(this).addClass("current").siblings().removeClass("current");
        $(this).children('input').attr({checked: true});
    });
});
/**
 * 有无邮箱判断
 * @param  {[type]} ){               $("#mtel").css("display","none");  $(".email-check .checkbox").click(function(event) {    var x [description]
 * @return {[type]}     [description]
 */
$(function(){
    $("#mtel").css("display","none");
    $(".email-checkbox").click(function(event) {
        if ($(this).hasClass('checked')) {//选择邮箱
            $(this).removeClass('checked');
            $("#mtel").css("display","none");
            $(".plan-form-email").css({display: 'block'});
            $("#phonenum").focus().attr({'readonly':false,'placeholder':'邮箱：','value': ""});
            $("#noemail").removeAttr('checked',false);
        }else{//选择手机
            $(this).addClass('checked');
            $("#mtel").css("display","block");
            $(".plan-form-email").css({display: 'none'});
            $("#mobilenum").focus().attr({'placeholder':'手机：'});
            $("#phonenum").attr({'readonly':true,'placeholder':'此项不需要填写','value':'此项不需要填写'}).css({'color':'grey'});
            $("#noemail").attr('checked',true);
        }
    });
});
/* 微信扫码支付弹出框显示 */
function weChatDialogShow(){
    $(".wechat-pay-dialog-bg").css({display: "block",height: $(document).height()});
    $(".wechat-pay-dialog").css("display","block");
}
/* 微信扫码支付弹出框隐藏 */
$(function(){
    $(".btn-close").click(function(event) {
        $(".wechat-pay-dialog-bg").css("display","none");
        $(".wechat-pay-dialog").css("display","none");
        $("#qrCodeFrame").attr("src",'');
    });
});
/** 改变s_id **/
function changeId1(id){
    $('#s_id').val(id);
}
function errorMsgShow(){
    $(".form-error-buy").css({display:'block'});
    var errorMsgHide = setInterval(function() {$(".form-error-buy").css({display:'none'});},5000);
    setInterval(function() {clearInterval(errorMsgHide );},5010);
}

$(function () {
    function changeId1(id){
        $('#s_id').val(id);
    }
    $('.product-plans a').on({
        click:function(){
            $(this).addClass('current').siblings('').removeClass('current');
            _index = $(this).index();
            $('.plan-cxt-main .plan-cxt').eq(_index).addClass('current').siblings('').removeClass('current');
            plan = $(this).attr('data-plan');
            price = $('.price, .price-wechat .price');
            text = $('.plan-cxt .plan-detail');
            product = $('.product-pic img');
            themeUrl = $('.themeUrl').text();
            switch(plan){
                case '88':
                    changeId1(131);
                    price.html('88.00');
                    text.text('1台电脑永久授权');
                    $('.product-pic').css({
                        textAlign: 'center',
                        paddingTop: '20px'
                    });
                    $('.product-pic img').css({
                        position: 'static'
                    });
                    product.attr('src',themeUrl+'/assets/images/product-pic-01.png');
                    break;
                case '128':
                    changeId1(152);
                    price.html('128.00');
                    text.text('1台电脑永久授权 + 迅捷CAD转换器一年会员 + VIP图库');
                    product.attr('src',themeUrl+'/assets/images/product-pic-02.png');
                    $('.product-pic').css({
                        textAlign: 'right',
                        paddingTop: 0
                    });
                    
                    break;
                case '156':
                    price.html('156.00');
                    changeId1(153);
                    text.text('3台电脑永久授权 + 迅捷CAD转换器一年会员 + VIP图库');
                    product.attr('src',themeUrl+'/assets/images/product-pic-03.png');
                    $('.product-pic').css({
                        textAlign: 'right',
                        paddingTop: 0
                    });
                    
                    break;
            }
            $("#qrCodeFrame").attr("src", '');
        }
    });
});