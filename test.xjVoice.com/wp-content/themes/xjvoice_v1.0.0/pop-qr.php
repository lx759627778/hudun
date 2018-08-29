    <!-- 微信支付弹窗 -->
    <link rel="stylesheet" type="text/css" href="<?php echo mySrc();?>/css/pop-qr.css">
    <div class="WeChat-mask"></div>
    <div class="WeChat-payment-pop">
            <i class="pop-close js-WeChat-close"></i>
            <div class="WeChat-payment-header">
                <h6>微信扫码支付</h6>
            </div>
            <div class="WeChat-payment-ctt">
                <p class="WeChat-payment-money"></p>
                <div class="WeChat-payment-details">
                    <div class="WeChat-payment-text">
                        <p>支付过程中遇到问题，请联系 客服。</p>
                        <p>联系电话：<br/><span>400 668 5572</span></p>
                        <p>技术邮箱：<br/><span>support@huduntech.com </span></p>
                        <p>在线QQ客服：<br/><span>400 668 5572</span></p>
                    </div>
                    <div class="WeChat-payment-qr">
                        <div class="qr-box js-qr-img"><img src="<?php echo mySrc();?>/images/index/weixin-zhqr.png" alt=""></div>
                        <img src="<?php echo mySrc();?>/images/index/weixin-sys.png" alt="">
                    </div>
                    <div class="WeChat-payment-img">
                        <img src="<?php echo mySrc();?>/images/index/weixin-zhzs.png" alt="">
                    </div>
                </div>
            </div>
        </div>

        <script>
            $(".js-WeChat-close").click(function(){
                 $(".WeChat-mask").hide();
                 $(".WeChat-payment-pop").hide();
            })
        </script>