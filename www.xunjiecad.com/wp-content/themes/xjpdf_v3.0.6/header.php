<!DOCTYPE html>
<html lang="zh-CN">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,Chrome=1">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
<?php
    global $wp_query;
    $site_title = get_bloginfo('name');
    $site_description = get_bloginfo('description');
    $theme_title = myCleanString(stripslashes(get_option('mytheme_title')));
    $theme_description = myCleanString(stripslashes(get_option('mytheme_description')));
    $theme_keywords = myCleanString(stripslashes(get_option('mytheme_keywords')));
    if(is_category()){
        $term_id = $wp_query->get('cat');
    }else{
        $term_id = $wp_query->get('tag_id');
    }
    $term_meta = get_option( "vianrouge_taxonomy_$term_id" );
    $tax_title = myCleanString($term_meta['tax_title'] ? $term_meta['tax_title'] : '');
    $tax_description = myCleanString($term_meta['tax_description'] ? $term_meta['tax_description'] : '');
    $tax_keywords = myCleanString($term_meta['tax_keywords'] ? $term_meta['tax_keywords'] : '');
    echo '<title>';
        if ( is_home() ) {
            if($theme_title==''){
                echo $site_title;
            }else{
                echo $theme_title;
            }
        }
        elseif ( is_category() ) {
            if($tax_title==''){
                single_cat_title();
                echo ' - '.$site_title;
            }else{
                echo $tax_title;
            }
        }
        elseif (is_tag()) {
            if($tax_title==''){
                single_tag_title();
                echo ' - '.$site_title;
            }else{
                echo $tax_title;
            }
        }
        elseif (is_single() || is_page()) {
            $title_written = get_post_meta($post->ID, "title", true);
            if($title_written==''){
                single_post_title();
                echo ' - '.$site_title;
            }else{
                echo myCleanString($title_written);
            }
        }
        elseif (is_search() ) {
            echo '搜索结果 - '.$site_title;
        }
        elseif (is_404() ) {
            echo '页面未找到 - '.$site_title;
        } else {
            wp_title('',true);
        }
        echo '</title>';
    if (is_home()) {
        if( $theme_description=='' ){
        }else{
            $description = $theme_description;
        }
        if( $theme_keywords=='' ){
            $keywords = $site_title;
        }else{
            $keywords = $theme_keywords;
        }
    }
    elseif (is_single() || is_page()) {
        $description_written = get_post_meta($post->ID, "description", true);
        $description_not_written = mb_strimwidth(strip_tags(apply_filters('the_content', $post->post_content)), 0, 200, "…");
        $description = $description_written ? $description_written : $description_not_written;
        $keywords = get_post_meta($post->ID, "keywords", true);
        if($keywords == '') {
            $tags = wp_get_post_tags($post->ID);
            foreach ($tags as $tag ) {
                $keywords = $keywords . $tag->name . ", ";
            }
            $keywords = rtrim($keywords, ', ');
        }
    }
    elseif (is_category()) {
        if($tax_keywords == ''){
            $keywords = single_cat_title('', false);
        }else{
            $keywords = $tax_keywords;
        }
        if($tax_description==''){
            $description = mb_strimwidth(trim(strip_tags(category_description())),0, 200, "…");
        }else{
            $description = $tax_description;
        }
    }
    elseif (is_tag()){
        if($tax_keywords == ''){
            $keywords = single_tag_title('', false);
        }else{
            $keywords = $tax_keywords;
        }
        if($tax_description==''){
            $description = mb_strimwidth(trim(strip_tags(tag_description())),0, 200, "…");
        }else{
            $description = $tax_description;
        }
    }
    $description = myCleanString($description);
    $keywords = myCleanString($keywords);
    echo '<meta name="description" content="'.$description.'" />';
    echo '<meta name="keywords" content="'.$keywords.'" />';
?>
<link rel="stylesheet" type="text/css" href="<?php mySrc(); ?>/style.css">
<script src="<?php mySrc(); ?>/js/jquery.min.js"></script>
<script src="<?php mySrc(); ?>/js/md5.js"></script>
<script src="<?php mySrc(); ?>/js/html5shiv.js"></script>
<script src="<?php mySrc(); ?>/js/respond.min.js"></script>
<script src="<?php mySrc(); ?>/js/main.js"></script>
<script src="<?php mySrc(); ?>/js/pay.js"></script>
<script src="<?php mySrc();?>/js/jquery.qrcode.js"></script>
<script src="<?php mySrc();?>/js/qrcode.js"></script>
<?php wp_head(); ?>
</head>
<?php flush(); ?>
<body>

<aside class="back-to-top aside-fix">
    <a class="to-top"><img src="<?php mySrc();?>/images/icon-right-side-01.png"><span>返回顶部</span></a>
    <a href="<?php myQQLink();?>" target="_blank"><img src="<?php mySrc();?>/images/icon-right-side-02.png"><span>在线客服</span</a>
    <a class="weixin"><img src="<?php mySrc();?>/images/weixin.png"><span>微信客服</span>
        <div class="weixin_box">
            <div class="wexin_box_content">
                <img src="<?php mySrc(); ?>/images/xunjiepdf_scan.png" alt="">
                <p>微信号 <b>xjpdf6</b></p>
                <p>1、使用问题、技巧、购买咨询</p>
                <p>2、加好友<b>免费</b>送100GB精品PPT模板、Word模板</p>
            </div>
        </div>
    </a>
    <a class="download" href="<?php myDownloadLink();?>"><img src="<?php mySrc();?>/images/icon-right-side-03.png"><span>下载客户端</span></a>
</aside>
<header class="header site-header">
    <div class="wrapper">
        <div class="site-header-content">
            <div class="site-brannding">
                <a href="/"><img src="<?php mySrc();?>/images/logo.png"><span>迅捷PDF转换器</span><span>XJPDF.COM</span></a>
            </div>
            <?php
                wp_nav_menu(array(
                    'theme_location'    => 'mainmenu',
                    'container' => false,
                    'menu_class' => 'site-navigation nav',
                    'menu_id' => 'site-navigation',
                ));
            ?>
            <div class="nav-icon"><span class="menubar-ie"><em></em><em></em><em></em></span></div>
        </div>
    </div>
    <p class="themeUrl" style="display:none;"><?php echo bloginfo('template_url');?></p>
</header>