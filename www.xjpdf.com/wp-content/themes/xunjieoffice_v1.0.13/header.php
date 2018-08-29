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
    <meta name="renderer" content="webkit, webkit|ie-comp|ie-stand">
    <?php
    // global $wp_query;
    // if(is_category()){
    //     $term_id = $wp_query->get('cat');
    // }else{
    //     $term_id = $wp_query->get('tag_id');
    // }
    // $term_meta = get_option( "vianrouge_taxonomy_$term_id" );
    // $tax_title = $term_meta['tax_title'] ? $term_meta['tax_title'] : '';
    // $tax_description = $term_meta['tax_description'] ? $term_meta['tax_description'] : '';
    // $tax_keywords = $term_meta['tax_keywords'] ? $term_meta['tax_keywords'] : '';
    global $wp_query;
        $title = '';
        $description = '';
        $keywords = '';
        if (is_home()) {
            $title = '迅捷办公 - 提供专业的办公应用软件及技术服务';
            $keywords = '迅捷办公,PDF转换器,PDF转Word,Word转PDF,PDF转JPG,PDF编辑器,OCR文字识别软件,图片转文字,PDF虚拟打印机';
            $description = '迅捷办公官网为用户提供了包括PDF转Word、JPG、PPT在内的多种格式相互转换方案,及PDF修改内容、扫描图片转换成文字、虚拟打印文件等办公常见难题,帮助用户无忧处理办公文档.';
        }
        // elseif (is_category()) {
        //     $title = single_cat_title();
        //     $keywords = single_cat_title('', false);
        //     $description = category_description();
        // }elseif (is_tag()){
        //     $title = single_tag_title();
        //     $description = tag_description();
        //     $keywords = single_tag_title('', false);
        // }
        elseif (is_single() || is_page()) {
            $title = get_post_meta($post->ID, "title", true);
            $description = get_post_meta($post->ID, "description", true);
            $keywords = get_post_meta($post->ID, "keywords", true);
        }elseif (is_search() ) {
        }
        elseif (is_404() ) {
             $title = '404';
            $keywords = '迅捷办公,PDF转换器,PDF转Word,Word转PDF,PDF转JPG,PDF编辑器,OCR文字识别软件,图片转文字,PDF虚拟打印机';
            $description = '迅捷办公官网为用户提供了包括PDF转Word、JPG、PPT在内的多种格式相互转换方案,及PDF修改内容、扫描图片转换成文字、虚拟打印文件等办公常见难题,帮助用户无忧处理办公文档.';
        } else {
        }
    ?>
    <title><?php echo $title;?></title>
    <meta name="description" content="<?php echo $description;?>">
    <meta name="keywords" content="<?php echo $keywords;?>" >
    <meta name="robots" content="all">
    <meta itemprop="name" content="">
    <meta itemprop="image" content="">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="HandheldFriendly" content="true">
    <meta name="format-detection" content="telephone=no">
    <meta name="format-detection" content="email=no">
     <meta name="applicable-device" content="mobile">
    <link rel="bookmark" href="<?php echo mySrc();?>/images/favicon.png" mce_href="<?php echo mySrc();?>/images/favicon.png" type="image/x-icon">
    <link rel="icon" href="<?php echo mySrc();?>/images/favicon.png" mce_href="<?php echo mySrc();?>/images/favicon.png" type="image/x-icon">
    <link rel="shortcut icon" href="<?php echo mySrc();?>/images/favicon.png" mce_href="<?php echo mySrc();?>/images/favicon.png" type="image/x-icon">
    <!-- <meta name="apple-itunes-app" content="app-id=, affiliate-data=myAffiliateData, app-argument=myURL"> -->
    <!--[if lte IE 8]><script type="text/javascript">document.createElement('svg');document.createElement('path');document.createElement('use');document.createElement('symbol');document.createElement('circle');document.createElement('defs');document.createElement('polygon');document.createElement('linearGradient')</script><![endif]-->
    <!-- <script> if (navigator.userAgent.match(/iPad/i)) {tdocument.getElementsByName('apple-itunes-app')[0].setAttribute('content', 'app-id=407925512');} </script> -->
    <?php wp_head();?>
    <script type="text/javascript" src="<?php echo mySrc();?>/js/jquery-1.10.1.min.js"></script>
</head>

<body <?php body_class();?>>
    <header class="page-header">
        <div class="header-center w1200">
            <div class="header-logo-box">
                <a href="/"><img class="header-logo" src="<?php echo mySrc();?>/images/logo/logo.png" alt=""></a>
            </div>
            <div class="nav-icon">
                <span class="menubar-ie">
                    <em></em>
                    <em></em>
                    <em></em>
                </span>
            </div>
            <nav id="site-navigation" class="main-navigation"><?php header_nav_menu(); ?></nav>
        </div>
    </header>
	<main class="site-main">
