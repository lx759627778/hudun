<?php
/*
Template Name:404
*/
get_header()?>
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
<main class="container page-404">
  <div class="wrapper text-center">
    <img src="<?php bloginfo('template_directory'); ?>/images/404.png"><br>
    <a class="btn btn-blue" href="<?php echo get_option('home'); ?>"><img src="<?php bloginfo('template_directory'); ?>/images/icon-home.png">返回首页</a>
  </div>
</main>
<?php get_footer()?>