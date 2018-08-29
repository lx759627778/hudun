<?php
/*
Template Name:产品购买
*/
get_header();
$defaultPrice = '128.00';
$defaultPriceInt = '128';
?>
<section class="banner banner-buy">
    <ul class="wrapper current">
        <li class="banner-cxt"></li>
    </ul>
</section>
<section class="buy-wrapper">
    <form  class="formfmt">
        <div class="wrapper buy">
            <div class="buy-step"><span class="step-num"><em>1</em><i class="icon-step-diamond"></i></span>您要购买的软件</div>
            <dl class="goods">
                <dd class="goods-pics">
                    <div class="goods-pic goods-pic-1"></div>
                    <div class="goods-pic goods-pic-2"></div>
                    <div class="goods-pic goods-pic-5"></div>
                    <div class="goods-pic goods-pic-3"></div>
                    <div class="goods-pic goods-pic-4 current"></div>
                </dd>
                <dd class="goods-infor">
                    <div class="plan-titles">
                        <h1 class="plan-title">迅捷PDF转换器 48元套餐</h1>
                        <h1 class="plan-title">迅捷PDF转换器 68元套餐</h1>
                        <h1 class="plan-title">迅捷PDF转换器 88元套餐</h1>
                        <h1 class="plan-title">迅捷PDF转换器 超值套餐</h1>
                        <h1 class="plan-title current">迅捷PDF转换器 黄金套餐</h1>
                    </div>
                    <div class="plan-title-tips">
                        <p class="slogan">48元半年授权</p>
                        <p class="slogan">68元一年授权</p>
                        <p class="slogan">88元永久授权</p>
                        <p class="slogan">118元永久授权 + 迅捷PDF在线转换三年授权</p>
                        <p class="slogan current">128元永久授权 + 迅捷PDF编辑器永久授权 + 迅捷PDF在线转换三年授权(推荐)</p>
                    </div>
                    <h2 class="price-wrap">￥<span class="price"><span class="thePlanPrice"><?php echo $defaultPrice ?></span></span></h2>
                    <div class="plans">
                        <div class="plans-title">套餐：</div>
                        <div class="plan xjpdf-plans">
                            <a value="vip48m6" data-type="1"  data-price="48">
                                <span>48元/1台电脑半年授权 </span>
                                <em class="active-icon"></em>
                            </a>
                            <a value="vip68m12" data-type="2"  data-price="68">
                                <span>68元/1台电脑1年授权 </span>
                                <em class="active-icon"></em>
                            </a>
                            <a value="vip88m12" data-type="3"  data-price="88">
                                <span>88元/1台电脑永久授权</span>
                                <em class="active-icon"></em>
                            </a>
                            <a value="vip118m120m36" data-type="4"  data-price="118">
                                <span>118元超值套餐组合</span>
                                <em class="active-icon"></em>
                            </a>
                            <a class="current" value="vip128m120m120m36" data-type="5"  data-price="128">
                                <span>128元黄金套餐组合</span>
                                <em class="active-icon"></em>
                                <em class="hot-icon"></em>
                            </a>
                        </div>
                    </div>
                </dd>
            </dl>
            <ul class="user-infor">
                <div class="buy-step"><span class="step-num"><em>2</em><i class="icon-step-diamond"></i></span>填写个人信息</div>
                <dl class="buy-input">
                    <dd class="dd-01">姓名：</dd>
                    <dd class="dd-02"><input type="text" value="" placeholder="请输入姓名" class="name"></input></dd>
                    <div class="clearfix"></div>
                </dl>
                <dl class="buy-input">
                    <dd class="dd-01 buy-input-cxt">手机：</dd>
                    <dd class="dd-02 contact-phones" id="mtel">
                        <input name="mobilenum" type="text" value="" placeholder="请输入手机" size="25" maxlength="15" id="mobilenum">
                    </dd>
                    <div class="clearfix"></div>
                </dl>
                <div class="form-error form-error-buy" style="color:#ff0030"></div>
            </ul>
            <ul class="payment-wrapper">
                <div class="buy-step"><span class="step-num"><em>3</em><i class="icon-step-diamond"></i></span>请选择付款方式</div>
                <div class="payment">
                    <a value="alipay" id="aliPay" class="pay-ali current" ><span class="icon icon-tag"></span><img src="<?php mySrc();?>/images/pay-ali.png"></a>
                    <a value="weixinpay" id="wechatPay" class="pay-wechat"><span class="icon icon-tag"></span><img src="<?php mySrc();?>/images/pay-wechat.png"></a>
                </div>
                <div class="pay-now" id="payNow">
                    立即购买
                </div>
            </ul>
        </div>
    </form>
</section>
<!-- 微信扫码支付弹出框开始 -->
<div class="wechat-pay-dialog-bg"></div>
<div class="wechat-pay-dialog" id="show">
    <a class="close"></a>
    <ul>
        <li class="li-01">
            <h3>支付过程中，</h3>
            <h4>遇到问题，请联系客服。</h4>
            <p>客服热线：<?php myTelNum();?></p>
            <p>Q Q：<?php myQQNum();?></p>
        </li>
        <li class="li-02">
            <h3>微信扫码支付</h3>
            <h1 class="price-wechat">￥<span class="thePlanPrice"><?php echo $defaultPrice ?></span></h1>
            <div class="qr-code-wrapper" id="qrcode">
                
            </div>
            <div class="tips">
                <img src="<?php mySrc();?>/images/icon-scan.png">
                <p>请使用微信扫一扫</p>
                <p>扫描二维码支付</p>
            </div>
        </li>
        <li class="li-03">
            <img src="<?php mySrc();?>/images/code-tips.png">
        </li>
    </ul>
</div>
<!-- 微信扫码支付弹出框结束 -->
<section class="wrapper">
    <h3 class="plan-introduction-title">套餐介绍</h3>
    <ul class="plan-introduction">
        
        <li class="item item-1">
            <div class="item-title">
                <div>
                    <i class="icon icon-plan-device"></i>
                    <p>套餐类型</p>
                </div>
            </div>
            <div class="item-time">
                <div>
                    <i class="icon icon-plan-time"></i>
                    <p>授权时间</p>
                </div>
            </div>
            <div class="item-price">
                <div>
                    <i class="icon icon-plan-price"></i>
                    <p>套餐价格</p>
                </div>
            </div>
            <div class="item-limit">
                <div>
                    <i class="icon icon-plan-limit"></i>
                    <p>文档限制</p>
                </div>
            </div>
            <div class="item-sevice">
                <div>
                    <div>
                        <i class="icon icon-plan-sevice"></i>
                        <p>人工服务</p>
                    </div>
                </div>
            </div>
            <div class="item-package">
                <div>
                    <div>
                        <i class="icon icon-plan-package"></i>
                        <p>套餐内容</p>
                    </div>
                </div>
            </div>
        </li>

        <li class="item item-2">
            <div class="item-title">
                <div>
                    <i class="icon icon-48"></i>
                    <p>48VIP</p>
                </div>
            </div>
            <div class="item-time">
                <div>
                    <p>半年</p>
                </div>
            </div>
            <div class="item-price">
                <div>
                    <p><span>￥</span>48</p>
                </div>
            </div>
            <div class="item-limit">
                <div>
                    <p>无限制</p>
                </div>
            </div>
            <div class="item-sevice">
                <div>
                    <div>
                        <p>3次</p>
                    </div>
                </div>
            </div>
            <div class="item-package">
                <div>
                    <div class="logo-pdf-zhuan">
                        <h4>迅捷PDF转换器</h4>
                        <p>【半年授权】</p>
                    </div>
                </div>
            </div>
        </li>
        <li class="item item-2">
            <div class="item-title">
                <div>
                    <i class="icon icon-68"></i>
                    <p>68VIP</p>
                </div>
            </div>
            <div class="item-time">
                <div>
                    <p>一年</p>
                </div>
            </div>
            <div class="item-price">
                <div>
                    <p><span>￥</span>68</p>
                </div>
            </div>
            <div class="item-limit">
                <div>
                    <p>无限制</p>
                </div>
            </div>
            <div class="item-sevice">
                <div>
                    <div>
                        <p>20次</p>
                    </div>
                </div>
            </div>
            <div class="item-package">
                <div>
                    <div class="logo-pdf-zhuan">
                        <h4>迅捷PDF转换器</h4>
                        <p>【一年授权】</p>
                    </div>
                </div>
            </div>
        </li>
        <li class="item item-3">
            <div class="item-title">
                <div>
                    <i class="icon icon-88"></i>
                    <p>88VIP</p>
                </div>
            </div>
            <div class="item-time">
                <div>
                    <p>永久</p>
                </div>
            </div>
            <div class="item-price">
                <div>
                    <p><span>￥</span>88</p>
                </div>
            </div>
            <div class="item-limit">
                <div>
                    <p>无限制</p>
                </div>
            </div>
            <div class="item-sevice">
                <div>
                    <div>
                        <p>30次</p>
                    </div>
                </div>
            </div>
            <div class="item-package">
                <div>
                    <div class="logo-pdf-zhuan">
                        <h4>迅捷PDF转换器</h4>
                        <p>【永久授权】</p>
                    </div>
                </div>
            </div>
        </li>

        <li class="item item-4">
            <div class="item-title">
                <div>
                    <i class="icon icon-118"></i>
                    <p>118VIP</p>
                </div>
            </div>
            <div class="item-time">
                <div>
                    <p>永久</p>
                </div>
            </div>
            <div class="item-price">
                <div>
                    <p><span>￥</span>118</p>
                </div>
            </div>
            <div class="item-limit">
                <div>
                    <p>无限制</p>
                </div>
            </div>
            <div class="item-sevice">
                <div>
                    <div>
                        <p>50次</p>
                    </div>
                </div>
            </div>
            <div class="item-package">
                <div>
                    <div class="logo-pdf-zhuan">
                        <h4>迅捷PDF转换器</h4>
                        <p>【永久授权】</p>
                    </div>
                    <div class="logo-pdf-online">
                        <h4>迅捷PDF在线转换</h4>
                        <p>【三年授权】</p>
                    </div>
                </div>
            </div>
        </li>
        <li class="item item-5">
            <div class="item-title">
                <div>
                    <i class="icon icon-128"></i>
                    <p>128VIP</p>
                </div>
                <img src="<?php mySrc(); ?>/images/hot-rec-1.png" class="hot-rec"/>
            </div>
            <div class="item-time">
                <div>
                    <p>永久</p>
                </div>
            </div>
            <div class="item-price">
                <div>
                    <p><span>￥</span>128</p>
                </div>
            </div>
            <div class="item-limit">
                <div>
                    <p>无限制</p>
                </div>
            </div>
            <div class="item-note">
                <div>
                    <p>无限制</p>
                </div>
            </div>
            <div class="item-package">
                <div>
                    <div class="logo-pdf-zhuan">
                        <h4>迅捷PDF转换器</h4>
                        <p>【永久授权】</p>
                    </div>
                    <div class="logo-pdf-editor">
                        <h4>迅捷PDF编辑器</h4>
                        <p>【永久授权】</p>
                    </div>
                    <div class="logo-pdf-online">
                        <h4>迅捷PDF在线转换</h4>
                        <p>【三年授权】</p>
                    </div>
                </div>
            </div>
        </li>
    </ul>
</section>
<?php get_template_part( 'content', 'buy-product-intro' ); ?>
<section>
    <ul class="wrapper module">
        <li class="left">
            <?php get_template_part( 'content', 'buy-contact' ); ?>
        </li>
        <li class="left">
            <?php get_template_part( 'content', 'buy-feature' ); ?>
        </li>
        <li class="right">
            <div>
                <h1>相关说明</h1>
                <p>1、授权期间免费升级，重装系统仍可用。</p><hr>
                <p>2、开据正规机打发票，索要发票请联系客服人员。</p><hr>
                <p>3、授权期间提供免费技术支持，专家协助您处理文档。</p>
            </div>
        </li>
    </ul>
</section>
<?php

get_footer();