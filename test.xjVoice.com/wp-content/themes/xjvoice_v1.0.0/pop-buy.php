<!-- 确认订单弹窗 -->
<link rel="stylesheet" type="text/css" href="<?php echo mySrc();?>/css/pop-buy.css">
<div class="buy-mask"></div>
<div class="buy-pop">
    <div class="buy-header">
        <h6 class="js-pay-title">月会员</h6>
        <i class="js-buy-close"></i>
    </div>
    <div class="buy-ctt">
        <div class="buy-from-li">
            <h6>购买产品：</h6>
            <div class="buy-from-right">
                <span class="active">月会员</span>
            </div>
        </div>
        <div class="buy-from-li">
            <h6>期限：</h6>
            <div class="buy-from-right js-time-type">
                <span>12个月</span>
                <span>6个月</span>
                <span>1个月</span>
            </div>
        </div>
        <div class="buy-from-li">
            <h6>价格：</h6>
            <div class="buy-from-right">
               <p class="js-money">￥88.00</p>
            </div>
        </div>
         <div class="buy-from-li">
            <h6>支付方式：</h6>
            <div class="buy-from-right clearfix js-paymethod-slt">
               <a href="javascript:void(0)" class="icon-wx active" data-paymethod="weixinpay"><span>微信支付</span></a>
               <a href="javascript:void(0)" class="icon-zfb" data-paymethod="alipay"><span>支付宝</span></a>
            </div>
        </div>
         <div class="buy-from-li">
            <div class="buy-from-right clearfix">
               <button class="js-pay-submit" type="button">确定订单</button>
            </div>
        </div>
    </div>
</div>