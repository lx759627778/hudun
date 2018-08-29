<!-- 确认订单弹窗 -->
<link rel="stylesheet" type="text/css" href="<?php echo mySrc();?>/css/pop-buy.css">
<div class="buy-mask"></div>
<div class="buy-pop">
    <div class="buy-header">
        <h6 class="js-pay-title">填写个人信息</h6>
        <i class="js-buy-close"></i>
    </div>
    <div class="buy-ctt">
        <div class="buy-li">
            <input class="name-ipt js-name-ipt" type="text" placeholder="姓名">
        </div>
        <div class="buy-li">
            <input class="tel-ipt js-tel-ipt" type="text" placeholder="手机号码">
            <p class="Tips js-tel-tips">请输入正确的手机号</p>
        </div>
        <div class="buy-li clearfix">
            <a href="javascript:void(0)" class="pay-type icon-wx js-pay-btn" data-paytype="weixinpay"><span>微信支付</span></a>
            <a href="javascript:void(0)" class="pay-type no-mr icon-zfb js-pay-btn" data-paytype="alipay"><span>支付宝</span></a>
        </div>
    </div>
</div>

<script>
    $(".js-buy-close").click(function() {
        $(".buy-mask,.buy-pop").hide();
    })
</script>