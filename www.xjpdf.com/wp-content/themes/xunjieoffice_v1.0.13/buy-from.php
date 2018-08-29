<!-- 购买表单 -->
<section class="editor-buy-form">
    <div class="buy-form-li">
        <div class="editor-buy-center w1200">
            <h6><span>1.</span>您要购买的软件</h6>
            <div class="buy-img-text js-taocan-box">
                <!-- <div class="buy-img">
                    <img src="<?php echo mySrc();?>/images/dwon/zhq-1.jpg" alt="">
                </div>
                <div class="buy-text">
                    <h6>迅捷PDF转换器 黄金套餐</h6>
                    <p class="buy-text-p">128元终身授权+迅捷PDF编辑器永久授权+迅捷PDF在线转换三年授权(推荐)</p>
                    <p class="buy-text-p1"><span>¥</span>128.00</p>
                    <div class="buy-slt-box">
                        <a href=""><span>48元/1台电脑半年授权</span><em></em></a>
                        <a href=""><span>88元/1台电脑1年授权</span><em></em></a>
                        <a href="" class=""><span>118元超值套餐组合</span><em></em></a>
                        <a href="" class="hot-Setmeal active"><i></i><span>128元黄金套餐组合</span><em></em></a>
                    </div> 
                </div> -->
            </div>
        </div>
    </div>
    <div class="buy-form-li">
        <div class="editor-buy-center w1200"> 
            <div class="buy-step-two">
                <div class="buy-step-li">
                    <h6><span>2.</span>填写个人信息</h6>
                    <div class="buy-step-slt">
                        <input type="text" placeholder="姓名" class="icon-name js-name-ipt">
                        <input type="text" placeholder="手机" class="icon-phone js-tel-ipt">
                    </div>
                </div>
                <div class="buy-step-li no-mr">
                    <h6><span>3.</span>请选择付款方式</h6>
                    <div class="buy-step-slt js-pay-mode">
                        <a href="javascript:void(0)" data-paytype="weixinpay" class="pay-WeChat active"><em></em></a>
                        <a href="javascript:void(0)" data-paytype="alipay" class="pay-Alipay"><em></em></a>
                    </div>
                </div>
            </div>

            <div class="buy-step-li step-li-bd">
                <div class="buy-step-slt">
                    <button type="button" class="js-buy-btn">立即购买</button>
                </div>
            </div>
        </div>
    </div>
</section>
<p class="js-domain" style="display: none;">
    <?php echo mySrc();?>
</p>
<script type="text/javascript" src="<?php echo mySrc();?>/js/jquery.md5.js"></script>
<script type="text/javascript" src="<?php echo mySrc();?>/js/pay.js"></script>