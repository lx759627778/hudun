<?php
/*
Template Name:single
*/
get_header()?>
<!-- <script src="<?php bloginfo('template_directory'); ?>/js/sidebar.js"></script> -->
<header class="header-wrap">
    <div class="container">
        <div class="row header">
            <a class="logo" href="<?php echo get_option('home'); ?>"><img src="<?php bloginfo('template_directory'); ?>/images/logo.png"></a>
            <ul class="right inline nav">
                <li><a href="<?php echo get_option('home'); ?>">首页<span></span></a></li>
                <li><a href="<?php echo get_option('home'); ?>/products.html">产品中心<span></span></a></li>
                <li><a href="<?php echo get_option('home'); ?>/about.html">关于我们<span></span></a></li>
            </ul>
        </div>
        <ul class="banner-wrapper">
            <li class="row banner "></li>
        </ul>
    </div>
</header>
<main class="article-main">
	<article class="container">
	    <ul class="row">
	    	<div class="nav-bread"><?php if(function_exists('cmp_breadcrumbs')) cmp_breadcrumbs();?></div>
	    	<li class="col-9">
	    		<div class="article-content">
		    		<?php if (have_posts()) : ?>
			        <?php while (have_posts()) : the_post(); ?>
			        <h3 class="artic-title"><?php the_title_attribute(); ?></h3>
			        <div class="post-content"><?php the_content(); ?></div>
			        <?php endwhile; ?>
			        <?php else : ?>
			        <?php endif; ?>
			        <div class="row single-nav">
			            <div class="prev">上一篇：<?php previous_post_link('&laquo; %link'); ?></div>
			            <div class="next">下一篇：<?php next_post_link('%link &raquo;'); ?></div>
			        </div>
		        <div class="bdsharebuttonbox" style="margin:10px 0 0;"><a href="#" class="bds_more" data-cmd="more"></a><a href="#" class="bds_qzone" data-cmd="qzone" title="分享到QQ空间"></a><a href="#" class="bds_tsina" data-cmd="tsina" title="分享到新浪微博"></a><a href="#" class="bds_weixin" data-cmd="weixin" title="分享到微信"></a><a href="#" class="bds_tqq" data-cmd="tqq" title="分享到腾讯微博"></a><a href="#" class="bds_renren" data-cmd="renren" title="分享到人人网"></a><script>window._bd_share_config={"common":{"bdSnsKey":{},"bdText":"","bdMini":"1","bdMiniList":false,"bdPic":"","bdStyle":"1","bdSize":"24"},"share":{},"image":{"viewList":["qzone","tsina","tqq","renren","weixin"],"viewText":"分享到：","viewSize":"32"},"selectShare":{"bdContainerClass":null,"bdSelectMiniList":["qzone","tsina","tqq","renren","weixin"]}};with(document)0[(getElementsByTagName('head')[0]||body).appendChild(createElement('script')).src='http://bdimg.share.baidu.com/static/api/js/share.js?v=89860593.js?cdnversion='+~(-new Date()/36e5)];</script></div>
					<div class="article-tag"><?php the_tags('推荐阅读：',''); ?></div>
				</div>
	    	</li>
	    	<li class="col-3 sidebar-post-wrapper">
	    		<?php get_template_part( 'content', 'sidebar-post' ); ?>
	    	</li>
	    </ul>
	</article>
</main>
<?php get_footer()?>