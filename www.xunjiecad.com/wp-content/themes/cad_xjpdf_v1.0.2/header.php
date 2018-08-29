<!DOCTYPE html>
<html lang="zh-CN">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,Chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
	<?php
	    global $wp_query;
	    if(is_category()){
	        $term_id = $wp_query->get('cat');

	    }else{
	        $term_id = $wp_query->get('tag_id');
	    }
	    $term_meta = get_option( "vianrouge_taxonomy_$term_id" );
	    $tax_image = $term_meta['tax_image'] ? $term_meta['tax_image'] : '';
	    $tax_title = $term_meta['tax_title'] ? $term_meta['tax_title'] : '';
	    $tax_title = str_replace(array("\r\n", "\r", "\n"), "", strtr(strtr($tax_title, array(' '=>'')), array(' '=>'')));
	    $tax_description = $term_meta['tax_description'] ? $term_meta['tax_description'] : '';
	    $tax_description = str_replace(array("\r\n", "\r", "\n"), "", strtr(strtr($tax_description, array(' '=>'')), array(' '=>'')));
	    $tax_keywords = $term_meta['tax_keywords'] ? $term_meta['tax_keywords'] : '';
	    $tax_keywords = str_replace(array("\r\n", "\r", "\n"), "", strtr(strtr($tax_keywords, array(' '=>'')), array(' '=>'')));
	    echo '<title>';
	    if ( is_home() ) {
	        echo "迅捷CAD编辑器|专业的CAD二维三维制图软件-CAD正版软件下载";
	    }
	    elseif ( is_category() ) {
	        if($tax_title==''){
	            single_cat_title();
	            echo " - 迅捷CAD编辑器";
	            bloginfo('name');
	        }else{
	            echo $tax_title;
	        }
	    }
	    elseif (is_tag()) {
	        if($tax_title==''){
	            single_tag_title();
	            echo " - 迅捷CAD编辑器";
	            bloginfo('name');
	        }else{
	            echo $tax_title;
	        }
	    }
	    elseif (is_single() || is_page()) {
	        $title_written = get_post_meta($post->ID, "title", true);
	        if($title_written==''){
	            single_post_title();
	            echo " - 迅捷CAD编辑器";
	        }else{
	            echo $title_written;
	        }
	    }
	    elseif (is_search() ) {
	        echo "搜索结果 - 迅捷CAD编辑器";
	        bloginfo('name');
	    }
	    elseif (is_404() ) {
	        echo "页面未找到! - 迅捷CAD编辑器";
	    } else {
	        wp_title('',true);
	    }
	    echo '</title>';
	    if (is_home()) {
	        $description = "迅捷CAD是一款功能齐全,稳定可靠的正版CAD软件,用于建筑、机械等领域专业二维三维制图,软件安装简单,启动快速,可流畅查看编辑CAD图纸文件,兼容各版本CAD文件.";
	        $keywords = "迅捷CAD编辑器,CAD软件,CAD下载,CAD看图软件";
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
	    $description = trim(strip_tags($description));
	    $keywords = trim(strip_tags($keywords));
	    echo '<meta name="description" content="'.$description.'" />';
	    echo '<meta name="keywords" content="'.$keywords.'" />';
	?>
	<link rel="stylesheet" type="text/css" href="<?php mySrc();?>/assets/css/normalize.css">
	<link rel="stylesheet" type="text/css" href="<?php mySrc();?>/assets/css/animate.css">
	<link rel="stylesheet" type="text/css" href="<?php mySrc();?>/style.css">
	<script type="text/javascript" src="<?php mySrc();?>/assets/js/jquery.min.js"></script>
	<script type="text/javascript" src="<?php mySrc();?>/assets/js/jquery.pagination.js"></script>
	<script type="text/javascript" src="<?php mySrc();?>/assets/js/html5shiv.min.js"></script>
	<script type="text/javascript" src="<?php mySrc();?>/assets/js/respond.min.js"></script>
	<script type="text/javascript" src="<?php mySrc();?>/assets/js/main.js"></script>
	<script type="text/javascript" src="<?php mySrc();?>/assets/js/md5.js"></script>
	<link href="<?php mySrc();?>/favicon.ico" rel="icon shortcut" type="image/x-icon" />
	<?php wp_head(); ?>
</head>
<body>
<header class="site-header">
	<div class="header-center">
		<div class="site-branding left"><a href="/"><img src="<?php mySrc();?>/assets/images/logo.png" alt=""></a></div>
		<?php storefront_primary_navigation(); ?>
	</div>
</header>