<?php
get_header(); ?>
<main class="container page-404">
    <div class="wrapper text-center">
        <img src="<?php echo mySrc(); ?>/images/404.png"><br>
        <a class="btn btn-blue back-home" href="<?php echo get_option('home'); ?>">返回首页</a>
    </div>
</main>
<?php get_footer();
