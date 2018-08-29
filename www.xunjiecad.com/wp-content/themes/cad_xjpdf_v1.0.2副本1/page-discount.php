<?php
/**
 * Template name: Page Discount
 */
get_header();
	if( !function_exists('myProductPrice')){
		function myProductPrice(){
			$my_price= '48';
			echo $my_price;
		}
	}
?>
<div class="l-banner l-banner-buy">
	<div class="container">
		<div class="l-banner-slogan">
			<h1>图纸文件轻松编辑</h1>
			<h1><span>无限制●更方便</span></h1>
			<p>*免费试用版软件仅可编辑2M以内的CAD文件，感谢您支持正版~</p>
		</div>
	</div>
</div>
<main class="site-main">
	<form name="orderform" onsubmit="return VerifyData();" method="post" action="http://pay.sjhfrj.com/Home/Order/toPay.shtml" target="_blank">
	    <input name="s_id" type="hidden" value="132" id="s_id" />
	    <input type="hidden" name="need_mc" value="2" />
	    <input name="rmk" type="hidden" value="" />
	    <input name="ft_id" type="hidden" value="2" />
	    <input name="softid" type="hidden" id="softid3" value="46652">
	    <input name="link" type="hidden" id="link" value="">
	    <input name="orsoqty" type="hiddtmpmailen" value="1" class="orsoqty" style="display: none;">
		<div class=" buy-items purchase-items">
			<ul class="container">
				<li class="col-5">
					<div class="product-pic">
						<img src="<?php mySrc();?>/assets/images/product-pic.png">
					</div>
				</li>
				<li class="col-7">
					<div class="product-cxt">
						<h3 class="product-name">迅捷CAD编辑器 优惠版</h3>
						<div class="common-divider"></div>
						<h4 class="product-intro">购买须知：<br>1、订单支付后，用户通过预留邮箱或短信方式在三分钟左右收到注册码。<br>2、一个软件机器码绑定一个注册码，可在一台电脑上永久使用。<br>3、免费提供全天候7*24人工服务，全面提供远程技术协助和帮助。</h4>
					</div>
			        <a class="purchase-plan">价格：<span><?php myProductPrice(); ?>元</span>（支持1台电脑永久授权）</a>
				</li>
			</ul>
		    <div class="container form-conent">
		    	<h3 class="buy-steps">购买信息</h3>
		    	<div class="buy-steps-line"></div>
    			<ul class="form-elements">
    				<li>
    					<div class="plan-form-input">
    						<span>姓名：</span>
    					    <input type="text" name="user-name" placeholder="请输入姓名">
    					</div>
    				</li>
    				<li>
		        		<div class="plan-form-input plan-form-email">
		        			<span>邮箱：</span>
		        		    <input name ="phonenum" placeholder="请输入邮箱" id="phonenum" type="text" class="inputfmt">
		        		</div>
		        		<div class="plan-form-input" id="mtel">
		        			<span>手机：</span>
		        		    <input name="mobilenum" placeholder="请输入手机" id="mobilenum" type="text" class="inputfmt">
		        		</div>
    				</li>
    				<li>
    					<div class="email-check">
    						<a class="email-checkbox"></a><span>我没有电子邮箱</span><input type="checkbox" name="noemail" id="noemail">
    					</div>
					</li>
					<li>
						<div class="form-error form-error-buy"></div>
					</li>
    			</ul>
		    </div>
			<div class="container">
				<h3 class="buy-steps">付款方式</h3>
				<div class="buy-steps-line"></div>
			    <ul class="payment-tag">
			        <a class="current"><span></span><input name="pay-wy" type="radio" value="alipay" id="aliPay"><img src="<?php mySrc(); ?>/assets/images/pay-ali.png"></a>
			        <a><span></span><input name="pay-wy" type="radio" value="weixin" id="wechatPay"><img src="<?php mySrc(); ?>/assets/images/pay-wechat.png"></a>
			        <a><span></span><input name="pay-wy" type="radio" value=""><img src="<?php mySrc(); ?>/assets/images/pay-ebank.png"></a>
			    </ul>
			</div>
		 	<div class="text-center">
		 		<div id="payNow" class="pay-now"><input value="立即付款" type="submit"></div>
		 	</div>

		</div>
	</form>

	<div class="container">
		<h3>商品详情</h3>
		<div class="buy-steps-line"></div>
		<ul class="product-detail">
			<p>品牌名称：<span>迅捷</span></p>
			<li>
				<p><strong>产品参数：</strong></p>
				<p><span>品牌：互盾</span></p>
				<p><span>软件种类：CAD编辑</span></p>
				<p><span>软件形式：序列号</span></p>
			</li>
			<li>
				<p><span>运行环境: WIN 7 WINXP WinVista WIN8 WIN10...</span></p>
				<p><span>购买方式: 在线购买</span></p>
				<p><span>软件开发商/运营商: 互盾信息科技有限公司</span></p>
			</li>
		</ul>
		<div class="product-detail-pic">
			<div>
				<h1 class="cxt-01">迅捷CAD编辑器</h1>
				<p class="cxt-02">支持CAD、DWG、DXF、DWT等多种图纸格式</p>
				<h2 class="cxt-03">功能强大</h2>
				<h2 class="cxt-04">全面兼容</h2>
				<h2 class="cxt-03">精准解析</h2>
				<h2 class="cxt-04">超强输出</h2>
			</div>
			<p class="cxt-05"><span>软件简介</span><span>迅捷CAD编辑器是一款功能强大的专门应用于图纸DWG格式文件的编辑软件，主要为DWG、DXF等文件格式图纸提供浏览、编辑功能。使用迅捷CAD编辑器不但支持多种图纸格式的浏览，还全面支持图纸编辑功能，功能完全超越同类图纸编辑工具。</span></p>
			<span class="product-intro-light"><img src="<?php mySrc();?>/assets/images/product-intro-light.png"></span>
			<span class="product-intro-pic"><img src="<?php mySrc();?>/assets/images/product-intro-pic.png"></span>
			<span class="product-intro-cloud"><img src="<?php mySrc();?>/assets/images/product-intro-cloud.png"></span>
			<span class="product-intro-tag"><img src="<?php mySrc();?>/assets/images/product-new-tag.png" alt=""></span>
		</div>
		<div class="product-detail-cxt">
			<h4><span>●</span>一个软件机器码绑定一个注册码，可在一台电脑上永久使用。</h4>
			<h4><span>●</span>订单支付后，用户通过预留邮箱或短信方式在三分钟左右收到注册码。</h4>
			<h4><span>●</span>免费提供全天候7*24人工服务，全面提供远程技术协助和帮助。</h4>
		</div>
		<div class="product-detail-slogan">
			<div>
				<h3><img src="<?php mySrc();?>/assets/images/product-detail-slogan-01.png">购物安全</h3>
				<h3><img src="<?php mySrc();?>/assets/images/product-detail-slogan-02.png">安全认证</h3>
				<h3><img src="<?php mySrc();?>/assets/images/product-detail-slogan-03.png">客户服务</h3>
				<h3><img src="<?php mySrc();?>/assets/images/product-detail-slogan-04.png">用户信赖</h3>
			</div>
		</div>
	</div>
</main>
<!-- 微信扫码支付弹出框开始 -->
    <div class="wechat-pay-dialog-bg"></div>
    <div class="wechat-pay-dialog" id="weChatQrcode">
        <a class="btn-close"></a>
        <ul>
            <h3 class="text-center">微信扫码支付</h3>
            <p class="text-center price-wechat">￥<?php myProductPrice(); ?>.00</p>
            <li class="wechat-pay-dialog-cxt">
                <?php get_template_part('template-parts/content/content','wechat-contact');?>
            </li>
            <li class="text-center middle">
                <div class="qr-code-wrapper">
                    <iframe class='qr-code' id='qrCodeFrame' frameborder='0' scrolling='no' src=''></iframe>
                </div>
                <div class="tips"><span>请使用微信扫一扫</span><span>扫描二维码支付</span></div>
            </li>
            <li class="wechat-pay-dialog-cxt"><img src="<?php mySrc(); ?>/assets/images/code-tips.png"></li>
        </ul>
    </div>
<!-- 微信扫码支付弹出框结束 -->
<script type="text/javascript" src="<?php mySrc();?>/assets/js/pay.js"></script>
<?php
get_footer();