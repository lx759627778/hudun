<?php
get_header(); ?>
<main class="container page-404">
    <div class="wrapper text-center">
        <img src="<?php echo mySrc(); ?>/images/404.png"><br>
        <a class="btn btn-blue" href="<?php echo get_option('home'); ?>"><img src="<?php echo mySrc(); ?>/images/icon-home.png">返回首页</a>
    </div>
</main>
<?php get_footer();
