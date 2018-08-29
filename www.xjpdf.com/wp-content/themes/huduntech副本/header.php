<!DOCTYPE html>
<!--[if lte IE 6 ]> <html class="ie ie6 lte_ie7 lte_ie8 lte_ie9" lang="zh-CN"> <![endif]-->
<!--[if IE 7 ]> <html class="ie ie7 lte_ie7 lte_ie8 lte_ie9" lang="zh-CN"> <![endif]-->
<!--[if IE 8 ]> <html class="ie ie8 lte_ie8 lte_ie9" lang="zh-CN"> <![endif]-->
<!--[if IE 9 ]> <html class="ie ie9 lte_ie9" lang="zh-CN"> <![endif]-->
<html <?php language_attributes();?>>
<!--<![endif]-->

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta http-equiv="Cache-Control" content="max-age=60">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">
    <title><?php echo bloginfo('name'); ?></title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="renderer" content="webkit, webkit|ie-comp|ie-stand">
    <meta name="robots" content="all">
    <meta itemprop="name" content="">
    <meta itemprop="image" content="">
    <!-- <meta name="apple-touch-fullscreen" content="yes"> -->
    <!-- <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent"> -->
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="HandheldFriendly" content="true">
    <meta name="format-detection" content="telephone=no">
    <meta name="format-detection" content="email=no">
    <meta name="applicable-device" content="mobile">
    <!-- <meta name="apple-itunes-app" content="app-id=, affiliate-data=myAffiliateData, app-argument=myURL"> -->
    <!--[if lte IE 8]><script type="text/javascript">document.createElement('svg');document.createElement('path');document.createElement('use');document.createElement('symbol');document.createElement('circle');document.createElement('defs');document.createElement('polygon');document.createElement('linearGradient')</script><![endif]-->
    <!-- <script> if (navigator.userAgent.match(/iPad/i)) {tdocument.getElementsByName('apple-itunes-app')[0].setAttribute('content', 'app-id=407925512');} </script> -->
    <?php wp_head();?>
</head>

<body <?php body_class();?>>
    <header class="page-header">
        <div class="header-center w1200">
            <div class="header-logo-box">
                <img class="header-more" src="<?php echo mySrc();?>/images/editor/more.png" alt="">
                <a href=""><img class="header-logo" src="<?php echo mySrc();?>/images/editor/logo.png" alt=""></a>
            </div>
            <nav id="site-navigation" class="main-navigation"><?php header_nav_menu(); ?></nav>
        </div>
    </header>
	<main class="site-main">
