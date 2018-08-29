<?php
/**
 * Template Name:404
 */
get_header();
?>
<section class="page-404">
	<div class="wrapper">
		<img src="<?php bloginfo('template_directory'); ?>/images/404-pic.png">
		<h1><?php _e('您访问的地址可能出错了。', '404'); ?></h1>
		<a href="<?php echo get_option('home'); ?>"><img src="<?php bloginfo('template_directory'); ?>/images/icon-home.png">返回首页</a>
		<p>（温馨提示，该网页可能已删除或移动）</p>
	</div>
</section>
<?php
get_footer();