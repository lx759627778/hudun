<footer class="site-footer">
	<section class="content clearfix">
		<div class="about">
			<h5>上海互盾信息科技有限公司</h5>
			<p>上海互盾信息科技有限公司成立于2013年，是一家专业的软件自主研发企业。依托互联网和大数据优势，以及持续投入以及对用户需求的不断挖掘，公司为超过千万用户提供了强大的办公应用服务，是目前国内办公应用服务专业内，少数拥有自主核心技术和全国运营团队的企业之一。</p>
		</div>
		<div class="guide">
			<nav class="footer-navigation">
				<h5>站点导航</h5>
				<ul>
					<li><a href="/">首页</a></li>
					<li><a href="<?php geturl('help');?>">使用帮助</a></li>
					<li><a href="<?php geturl('buy');?>">软件购买</a></li>
					<!-- <li><a href="<?php geturl('about');?>">关于我们</a></li> -->
					<li><a href="<?php geturl('dailypic');?>">每日一图</a></li>
					<li><a href="<?php geturl('privacy');?>">使用条款</a></li>
				</ul>
			</nav>
		</div>
		<div class="col-2 friendlink">
			<h5>相关服务</h5>
			<div class="scrollbox">
				<ul id="fontlist">
					<?php if (function_exists('wpjam_blogroll')) wpjam_blogroll();?>

				</ul>
			</div>
		</div>
		<div class="footer-contact">
			<h5>联系方式</h5>
			<p>联系电话：<?php myTelNum();?></p>
			<p>技术邮箱：support@huduntech.com</p>
			<p><a href="<?php myQQLink();?>" target="_blank">QQ客服：<?php myQQNum();?></a></p>
		</div>
	</section>
	<div class="content bottom">
		<div class="footer-copyright">Copyright ©2013-2018.All Rights Reserved. 互盾科技 版权所有 沪ICP备14017499号-11</div>
	</div>
	<p class="themeUrl" style="display:none;"><?php echo bloginfo('template_url');?></p>
</footer>
<div class="back-to-top aside-fix">
    <a href="javascript:void(0)" class="to-top">
	    <img src="<?php mySrc();?>/assets/images/icon-aside-top.png">
	    <span>返回顶部</span>
    </a>
    <a href="<?php myQQLink();?>" target="_blank">
	    <img src="<?php mySrc();?>/assets/images/icon-aside-qq.png">
	    <span>在线客服</span>
    </a>
    <a href="javascript:;" class="weixin">
	    <img src="<?php mySrc();?>/assets/images/weixin.png">
	    <span>微信客服</span>
	    <div class="weixin_box">
	      <img src="<?php mySrc(); ?>/assets/images/xunjiecad_scan.png" alt="">
	      <p>微信号 <b>xunjiecad</b></p>
	      <p>1、使用问题、技巧、购买咨询</p>
	      <p>2、加好友<b>免费</b>送海量别墅、室内装修CAD图纸</p>
	    </div>
    </a>
    <a href="<?php myDownloadLinkStandard(); ?>" class="download">
	    <img src="<?php mySrc();?>/assets/images/icon-aside-download.png">
	    <span>标准版下载</span>
    </a>
    <a href="<?php myDownloadLinkMajors(); ?>" class="download">
	    <img src="<?php mySrc();?>/assets/images/icon-aside-download.png">
	    <span>专业版下载</span>
    </a>
    
</div>


<script>
	var _hmt = _hmt || [];
	(function() {
		var hm = document.createElement("script");
		hm.src = "https://hm.baidu.com/hm.js?8067cd9d96dc341b003991f5d5ce8489";
		var s = document.getElementsByTagName("script")[0];
		s.parentNode.insertBefore(hm, s);
	})();

	$(window).scroll(function() {
	    if ($(window).scrollTop() > 200) {
	        $(".aside-fix .to-top").addClass('show');
	    } else {
	        $(".aside-fix .to-top").removeClass('show');
	    }
	});
	$(".aside-fix  .to-top").click(function() {
	    $('body,html').animate({
	        scrollTop: 0
	    }, 1000);
	    return false;
	});
	$(function(){
	  $('.aside-fix .weixin').mouseenter(function(event) {
	    $(this).children('.weixin_box').stop().fadeIn(200);
	  }).mouseleave(function(event) {
	    $(this).children('.weixin_box').stop().fadeOut(200);
	  });
	})

</script>

<?php wp_footer(); ?>
</body>
</html>