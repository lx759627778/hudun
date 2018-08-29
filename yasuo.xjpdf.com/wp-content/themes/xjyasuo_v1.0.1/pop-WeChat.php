<!-- 确认订单弹窗 -->
<link rel="stylesheet" type="text/css" href="<?php echo mySrc();?>/css/pop-wechat.css">
<div class="WeChat-mask"></div>
<div class="WeChat-pop">
    <div class="WeChat-header">
        <h6>微信扫码支付</h6>
        <i class="js-WeChat-close"></i>
    </div>
    <div class="WeChat-ctt">
        <div class="WeChat-qr">
            <img class="js-pay-qr" src="" alt="">
            <p>打开微信“扫一扫”</p>
            <p>扫描上方二维码支付</p>
        </div>
        <div class="WeChat-contact">
            <div class="WeChat-text">
                <h6>支付过程中遇到问题请联系客服</h6>
                <p>客服热线：400-668-5572</p>
                <p>QQ：400 668 5572</p>
            </div>
        </div>
    </div>
    <div class="WeChat-footer">
        <p>实际支付：<span class="js-money-nub">¥75元</span></p>
    </div>
</div>

<script>
    $(".js-WeChat-close").click(function() {
        $(".WeChat-mask,.WeChat-pop").hide();
        $('.js-pay-qr').attr('src', '');
    })
</script>