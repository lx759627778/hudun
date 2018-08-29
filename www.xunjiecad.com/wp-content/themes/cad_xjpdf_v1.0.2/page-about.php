<?php
/**
 * Template name: Page About
 */
get_header();
?>
<div class="l-banner l-banner-about">
	<div class="container">
		<div class="l-banner-slogan">
			<h1>提高工作效率</h1>
			<h1>从这里开始！</h1>
		</div>
	</div>
</div>
<main class="site-main">
	<section class="container">
		<div class="about-us">
			<h2 class="text-center bg-wave primary-title">公司简介</h2>
			<h4>上海互盾信息科技有限公司成立于2013年，先后研发了互盾数据恢复软件、迅捷PDF转换器、互盾苹果恢复大师等产品。上述产品拥有较大用户量，累计日新增装机量10万以上。公司产品以Windows客户端产品为主，坚持以技术为导向，现有多款产品在持续研发中，发展势头良好。</h4>
			<h4>成功地推出了包括数据恢复软件在内的多种行业软件，获得了数百万用户的支持与信赖。 作为业内领先的软件研发企业，互盾科技坚持以用户需求作为企业生存与发展的立足点。先后研发了顶尖数据恢复软件、迅捷PDF转换器、捷速OCR文字识别软件以及多款应用于安卓、苹果平台的APP。基于用户需求的产品研发，提倡“简单、无忧、智能化”的研发理念，强大的在线技术专家团队，使得产品面市以来，就获得了大量用户的支持，美誉度不断提高。</h4>
		</div>
	</section>
	<section class="our-items-list">
		<h2 class="text-center bg-wave primary-title">相关软件</h2>
		<ul class="container our-items">
			<li>
				<div>
					<h3><img src="<?php mySrc();?>/assets/images/our-items-01.png">迅捷PDF编辑器</h3>
					<h6>编辑PDF文件中的文本内容，对图片、多媒体等内容进行处理，根据用户需求编辑个性化PDF文档。</h6>
					<h4>
						<a href="https://bianji.xjpdf.com/" target="_blank">去看看>></a>
					</h4>
				</div>
			</li>
			<li>
				<div>
					<h3><img src="<?php mySrc();?>/assets/images/our-items-02.png">迅捷PDF转换器</h3>
					<h6>功能强大、操作简单的PDF转换器，支持PDF文档和doc、ppt、图片以及txt文档等多种格式之间的转换。</h6>
					<h4>
						<a href="http://www.xjpdf.com/" target="_blank">去看看>></a>
					</h4>
				</div>
			</li>
			<li>
				<div>
					<h3><img src="<?php mySrc();?>/assets/images/our-items-03.png">轻快PDF阅读器</h3>
					<h6>体积小巧，使用简单并且内存占用极少的阅读器，页面整体框架优化，启动快速，给用户带来优质的阅读体验。</h6>
					<h4>
						<a href="http://www.qingkuaipdf.com/" target="_blank">去看看>></a>
					</h4>
				</div>
			</li>
			<li>
				<div>
					<h3><img src="<?php mySrc();?>/assets/images/our-items-04.png">捷速OCR文字识别</h3>
					<h6>先进的OCR识别技术，高达99%的识别精度，轻松实现文档数字化，完美还原文档的逻辑结构和格式。</h6>
					<h4>
						<a href="http://www.jsocr.com/" target="_blank">去看看>></a>
					</h4>
				</div>
			</li>
		</ul>
	</section>

	<h2 class="text-center bg-wave primary-title">联系我们</h2>
	<section class="container">
		<ul class="our-addresss">
			<li>
				<div class="cxt">
					<h4><em class="icon icon-address"></em>Add: 上海宝山区陆翔路111号6号楼310</h4>
					<h4><em class="icon icon-email"></em>Email: support@huduntech.com</h4>
					<h4><em class="icon icon-tel"></em>Tel: <?php myPhoneNum(); ?></h4>
					<h4><a href="<?php myQQLink();?>" target="_blank"><em class="icon icon-qq"></em>QQ: <?php myQQNum();?></a></h4>
				</div>
			</li>
			<li>
				<div id="allmap" class="company-map"></div>
			</li>
		</ul>
	</section>
</main>
<script type="text/javascript" src="https://api.map.baidu.com/api?v=2.0&ak=ZFCiCYmT0MeFDRYdxx9cUdQAaFcbHcTc&s=1"></script>
<script type="text/javascript">
    var map = new BMap.Map("allmap");
    map.centerAndZoom(new BMap.Point(121.378976,31.350698), 18);
    map.addControl(new BMap.MapTypeControl());
    map.setCurrentCity("上海");
    map.addControl(new BMap.OverviewMapControl({isOpen:false,anchor:BMAP_ANCHOR_BOTTOM_RIGHT}));
    map.addControl(new BMap.NavigationControl());
    map.addControl(new BMap.ScaleControl());
    var local = new BMap.LocalSearch(map, {
      renderOptions:{map: map}
    });
    local.search("上海市互盾科技有限公司");
</script>
<script type="text/javascript">
	jQuery(document).ready(function($) {
		function setHeight(a,b){
		  var x = $(a).height() + 'px';
		  $(b).css({height: x});
		};
		setHeight(".our-addresss",".company-map");
	});
</script>
<?php
get_footer();