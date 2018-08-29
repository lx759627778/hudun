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
        <script src="<?php echo mySrc();?>/js/jquery.md5.js"></script>
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
                            <a href="javascript:void(0)" class="js-login-btn">登录</a>
                        </div>
                        <div class="login-Success">
                            <p class="login-number">13555523298</p>
                            <div class="login-Success-pop">
                                <i class="login-sz"></i>
                                <div class="login-Success-header">
                                    <p>13555523298</p>
                                </div>
                                <div class="login-Success-ctt">
                                    <div class="login-Success-line">
                                        <p>语音转文字</p>
                                        <div class="line-right">
                                            <a href="">充值</a>
                                            <p>2018-07-17到期</p>
                                        </div>
                                    </div>
                                    <div class="login-Success-line">
                                        <p>文字转语音</p>
                                        <div class="line-right member">
                                            <a class="btn-12b3a8" href="">充值</a>
                                            <p>2018-07-17到期</p>
                                        </div>
                                    </div>
                                    <div class="Sign-out">
                                        <button>退出</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
            <!-- 登录弹窗 -->
            <?php get_template_part( 'login'); ?>
            <!-- .site-header -->

            <div id="content" class="site-content">