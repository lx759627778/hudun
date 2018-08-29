<?php
/**
 * Template name: Page Buy Majors
 */
get_header();
	if( !function_exists('myProductPrice')){
		function myProductPrice(){
			$my_price= '88';
			echo $my_price;
		}
	}
?>
<?php get_template_part('template-parts/content/content','banner-help'); ?>
<main class="site-main buy-majors-main buy-main content">
	<form  class="formfmt" id="buy_form" action="<?php mySrc(); ?>/pay.php" method="post" target="_blank">
        <input type="hidden" name="paymethod" value="" class="input-paymethod" />
        <input type="hidden" name="package" value="" class="input-package" />
        <input type="hidden" name="noticeurl" value="" class="input-noticeurl" />
        <input type="hidden" name="truename" value="" class="input-truename" />
        <input type="hidden" name="softname" value="" class="input-softname" />
        <input type="hidden" name="softversion" value="5.0" class="input-softversion" />
        <input type="hidden" name="timestamp" value="" class="input-timestamp" />
        <input type="hidden" name="datasign" value="" class="input-datasign" />
		<div class=" buy-items purchase-items">
            <h3 class="buy-steps">一、确认商品信息：</h3>
			<ul class="product-info clearfix">
				<li class="col-1">
					<div class="product-pic">
                        <img src="<?php mySrc();?>/assets/images/product-pic-04.png">
                        <img src="<?php mySrc();?>/assets/images/product-pic-05.png" class="current">
						<img src="<?php mySrc();?>/assets/images/product-pic-06.png">
					</div>
				</li>
				<li class="col-2">
					<div class="product-cxt">
                        <h3 class="product-name" value="XunjieCAD">迅捷CAD编辑器【专业版】</h3>
						<div class="plan-cxt">
                            <p class="plan-detail">迅捷CAD编辑器(专业版)永久授权</p>
                            <p class="plan-detail current">迅捷CAD编辑器(专业版)永久授权 + 迅捷CAD转换器一年会员</p>
                            <p class="plan-detail">迅捷CAD编辑器(专业版)永久授权 + 迅捷CAD转换器永久会员</p>
						</div>
                        <p class="product-price"><span class="smaller">￥</span><b class="price">128.00</b></p>
					</div>
                    <div class="product-type">
                        <h4 class="tips-title">版本类型：</h4>
                        <a href="/buy.html">标准版</a>
                        <a href="/buy-majors.html" class="current">专业版</a>
                    </div>
					<div class="product-plans">
                        <h4 class="tips-title">套餐信息：</h4>
						<div class="plan-tips">
                            <a href="javascript:void(0);" value="vip88m120" data-price="88.00">88元/永久授权</a>
                            <a href="javascript:void(0);" value="vip128m120m12" data-price="128.00" class="no-margin-r current">128元超值套餐<i class="icon-rec"></i></a>
                            <a href="javascript:void(0);" value="vip156m120m120" data-price="156.00">156元超值套餐组合</a>                  
                        </div>
					</div>
				</li>
			</ul>
		    <div class="container form-conent">
		    	<h3 class="buy-steps">二、填写表单信息：</h3>
    			<ul class="form-elements clearfix">
    				<li>
    					<div class="plan-form-input">
    					    <input type="text" name="user-name" placeholder="姓名：">
                            <img src="<?php mySrc();?>/assets/images/icon-09.png" class="icon-user" alt="" />
    					</div>
    				</li>
    				<li>
		        		<div class="plan-form-input" id="mtel">
		        		    <input name="account" placeholder="手机：" id="mobilenum" type="text" class="inputfmt">
                            <img src="<?php mySrc();?>/assets/images/icon-11.png" class="icon-tel" alt="" />
		        		</div>
                        <p>用户需填写正确的手机号码，未注册用户会以该手机号自动注册账户并开通VIP功能，已注册用户会在该手机账户上开通VIP权限;</p>
    				</li>
					<li>
						<div class="form-error form-error-buy"></div>
					</li>
    			</ul>
		    </div>
			<div class="container">
				<h3 class="buy-steps">三、选择支付方式：</h3>
			    <ul class="payment-tag">
			        <a class="current"><span></span><input name="pay-wy" type="radio" value="alipay" id="aliPay"><img src="<?php mySrc(); ?>/assets/images/pay-ali.png"></a>
			        <a><span></span><input name="pay-wy" type="radio" value="weixinpay" id="wechatPay"><img src="<?php mySrc(); ?>/assets/images/pay-wechat.png"></a>
			        <!-- <a><span></span><input name="pay-wy" type="radio" value=""><img src="<?php mySrc(); ?>/assets/images/pay-ebank.png"></a> -->
			    </ul>
			</div>
		 	<div onclick="buy_form();return false;" class="pay-now" id="payNow">立即购买</div>
		</div>
	</form>

<!-- 微信扫码支付弹出框开始 -->
    <div class="wechat-pay-dialog-bg"></div>
    <div class="wechat-pay-dialog" id="weChatQrcode">
        <a class="btn-close"></a>
        <ul>
            <h3 class="text-center">微信扫码支付</h3>
            <p class="text-center price-wechat">￥<span class="price">128.00</span></p>
            <li class="wechat-pay-dialog-cxt">
                <?php get_template_part('template-parts/content/content','wechat-contact');?>
            </li>
            <li class="text-center middle">
                <div class="qr-code-wrapper qr-code-wrapper-majors" id="qr-code-wrapper">
                    <img src="" alt="" />
                </div>
                <div class="tips"><span>请使用微信扫一扫</span><span>扫描二维码支付</span></div>
            </li>
            <li class="wechat-pay-dialog-cxt"><img src="<?php mySrc(); ?>/assets/images/code-tips.png"></li>
        </ul>
    </div>
<!-- 微信扫码支付弹出框结束 -->

<!-- 套餐介绍 -->
<div class="buy-contrast content">
    <div class="head">
        <h4>“专业版”套餐</h4>
        <span></span>
    </div>
    <div class="table_body clearfix">
        <div class="table_win">
            <ul class="list1">
                <li class="col-1">标准版</li>
                <li class="col-3">授权时间</li>
                <li class="col-5">人工服务</li>
                <li class="col-4">
                    <p>套餐内容</p>
                </li>
            </ul>
            <ul class="list5">
                <li class="col-1">非VIP</li>
                <li class="col-3"><span class="false"></span></li>
                <li class="col-5">无</li>
                <li class="col-4">
                    <span class="false"></span>
                </li>
            </ul>
            <ul class="list2">
                <li class="col-1">88元套餐</li>
                <li class="col-3">永久</li>
                <li class="col-5">10次</li>
                <li class="col-4">
                    <div>
                        <img src="<?php mySrc(); ?>/assets/images/logo-5.png" />
                        <p>迅捷CAD编辑器(专业版)<br>【永久授权】</p>
                    </div>
                </li>
            </ul>
            <ul class="list3 rec">
                <li class="col-1">128元套餐</li>
                <li class="col-3">永久</li>
                <li class="col-5">20次</li>
                <li class="col-4">
                    <div class="floor1 clearfix">
                        <div>
                            <img src="<?php mySrc(); ?>/assets/images/logo-5.png" />
                            <p>迅捷CAD编辑器(专业版)<br>【永久授权】</p>
                        </div>
                        <div>
                            <img src="<?php mySrc(); ?>/assets/images/logo-6.png" />
                            <p>迅捷CAD转换器<br>【一年授权】</p>
                        </div>
                    </div>
                </li>
            </ul>
            <ul class="list4">
                <li class="col-1">156元套餐</li>
                <li class="col-3">永久</li>
                <li class="col-5">50次</li>
                <li class="col-4">
                    <div class="floor1 clearfix">
                        <div>
                            <img src="<?php mySrc(); ?>/assets/images/logo-5.png" />
                            <p>迅捷CAD编辑器(专业版)<br>【永久授权】</p>
                        </div>
                        <div>
                            <img src="<?php mySrc(); ?>/assets/images/logo-6.png" />
                            <p>迅捷CAD转换器<br>【永久授权】</p>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</div>
<div class="good-details">
    <div class="head">
        <h4>商品详情</h4>
        <span></span>
    </div>
    <div class="good-func clearfix">
        <h5>产品参数：</h5>
        <div class="left col-1">
            <p>品牌：互盾</p>
            <p>软件种类：CAD编辑</p>
            <p>软件形式：直接授权</p>
        </div>
        <div class="left">
            <p>运行环境: WIN 7 WINXP WinVista WIN8 WIN10...</p>
            <p>购买方式: 在线购买</p>
            <p>软件开发商/运营商: 互盾信息科技有限公司</p>
        </div>
    </div>
    <div class="good-price">
        <a href="<?php myDownloadLinkMajors(); ?>" class="down-btn">立即下载</a>
        <div class="container">
            <p class="price-txt">迅捷CAD编辑器专业版完美兼容AutoCAD设计软件，可支持工程建筑、机械行业等领域中各种工程图纸设计和编辑工作。软件拥有强大的CAD图纸设计能力，运行速度块，支持AutoCAD众多高级功能，是目前比较先进的国产CAD设计软件。</p>
            <ul class="clearfix">
                <li class="icon-box">
                    <div>
                        <img src="<?php mySrc(); ?>/assets/images/icon-16.png" alt="" />
                    </div>
                    <p>完美支持AutoCAD功能</p>
                </li>
                <li class="icon-box">
                    <div>
                        <img src="<?php mySrc(); ?>/assets/images/icon-17.png" alt="" />
                    </div>
                    <p>全面兼容设计图纸编辑</p>
                </li>
                <li class="icon-box">
                    <div>
                        <img src="<?php mySrc(); ?>/assets/images/icon-18.png" alt="" />
                    </div>
                    <p>支持二次开发和移植</p>
                </li>
            </ul>
        </div>
    </div>
    <div class="standard-tips-pic">
        <img src="<?php mySrc(); ?>/assets/images/majors-pic-02.png" alt="" />
    </div>
    <div class="shopping-tips">
        <h3>购<br />买<br />须<br />知</h3>
        <div class="shopping-txt">
            <p>1. 免费试用版软件仅可编辑2M以内的CAD文件，用户购买软件后，即可无限制使用该软件编辑文件功能。</p>
            <p>2. 用户需填写正确的手机号码，未注册用户会以该手机号自动注册账户并开通VIP功能；已注册用户会在该手机账户上开通VIP权限;
</p>
            <p>3. 在VIP有效期内用户可任意使用软件功能，并享受免费在线技术支持服务;</p>
            <p>4. 用户可通过VIP账号在任意一台电脑上使用软件，但一个账号同一时间只能在一台电脑上使用。</p>
            <p>5. 我们为您提供7*24小时的人工服务，您有任何软件上的问题均可以通过以下方式联系我们的客服人员</p>
            <p>6. 本软件仅限个人使用，不允许对账户进行出租，出售等或其它利用账户进行牟利的行为，若有相关滥用行为，我方有权单方面暂停、禁止账户相关功能。</p>
        </div>
    </div>
</div>

</main>
<script type="text/javascript" src="<?php mySrc();?>/assets/js/pay-majors.js"></script>
<?php
get_footer();