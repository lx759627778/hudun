<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */
?>
    <!DOCTYPE html>
    <html <?php language_attributes(); ?> class="no-js">

    <head>
        <meta charset="<?php bloginfo( 'charset' ); ?>">
        <meta name="viewport" content="width=device-width">
        <link rel="profile" href="http://gmpg.org/xfn/11">
        <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
        <!--[if lt IE 9]>
	<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/html5.js"></script>
	<![endif]-->
        <?php wp_head(); ?>
        <script src="<?php echo mySrc();?>/js/jquery.min.js"></script>
    </head>

    <body <?php body_class(); ?>>
        <div id="page" class="hfeed site">
            <header id="masthead" class="site-header" role="banner">
                <div class="site-header-center w1200">
                    <div class="site-header-lg">
                        <a href=""><img src="<?php mySrc(); ?>/images/index/logo.png" alt=""></a>
                    </div>
                    <div class="site-header-nav">
                        <div class="nav-icon"><span class="menubar-ie"><em></em><em></em><em></em></span></div>
                        <?php header_nav_menu(); ?>
                        <div class="site-header-login">
                            <a href="">登录</a>
                        </div>
                    </div>
                </div>
            </header>
            <!-- 登录弹窗 -->
            <?php get_template_part( 'login'); ?>
            <!-- .site-header -->

            <div id="content" class="site-content">