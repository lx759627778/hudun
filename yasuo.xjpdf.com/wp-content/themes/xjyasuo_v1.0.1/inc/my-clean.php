<?php
/*实现文章浏览次数*/
function getPostViews($postID) {
    $count_key = "post_views_count";
    $count = get_post_meta ( $postID, $count_key, true );
    if ($count == "") {
        delete_post_meta ( $postID, $count_key );
        add_post_meta ( $postID, $count_key, "0" );
        return "0 View";
    }
    return $count . " Views";
}
function setPostViews($postID) {
    $count_key = "post_views_count";
    $count = get_post_meta ( $postID, $count_key, true );
    if ($count == "") {
        $count = 0;
        delete_post_meta ( $postID, $count_key );
        add_post_meta ( $postID, $count_key, "0" );
    } else {
        $count ++;
        update_post_meta ( $postID, $count_key, $count );
    }
}
/**
 * 移动设备浏览下删除文章内容中img的width和height属性
 * @param  [type] $content [description]
 * @return [type]          [description]
 */
function removeImgSize($content){
    preg_match_all('/<[img|IMG].*?src=[\'|"](.*?(?:[\.gif|\.jpg|\.png\.bmp]))[\'|"].*?[\/]?>/', $content, $images);
    if(!empty($images)) {
        foreach($images[0] as $index => $value){
            $new_img = preg_replace('/(width|height)="\d*"\s/', "", $images[0][$index]);
            $content = str_replace($images[0][$index], $new_img, $content);
        }
    }
    return $content;
}
if(wp_is_mobile()) {
    add_filter('the_content', 'removeImgSize', 99);
}
/**
 * 如果后台启了.html后缀的固定链接，则对页面添加.html后缀
 */
function html_page_permalink() {
    global $wp_rewrite;
    if(get_option('permalink_structure') == '/%postname%.html' ||get_option('permalink_structure') == '/%post_id%.html'){
        if ( !strpos($wp_rewrite->get_page_permastruct(), '.html')){
            $wp_rewrite->page_structure = $wp_rewrite->page_structure . '.html';
        }
    }
}
//add_action('init', 'html_page_permalink', -1);
/**
 * 资源路径，去掉http:或https
 */
function mySrc(){
    global $mySRC;
    $home_URL = substr(get_stylesheet_directory_uri(),strpos(get_stylesheet_directory_uri(),'/'));
    $mySRC = $home_URL;
    echo $home_URL;
}
/**
 * 创建菜单
 */
if(function_exists('register_nav_menu')){
    register_nav_menu('mainmenu','主导航');
    register_nav_menu('helpmenu','教程导航');
    register_nav_menu('footermenu','底部导航');
    register_nav_menu('topmenu','顶部导航');
}
if (!is_nav_menu('主导航')||!is_nav_menu('顶部导航')||!is_nav_menu('底部导航')){
    $menu_id_1 = wp_create_nav_menu('主导航');
    $menu_id_3 = wp_create_nav_menu('教程导航');
    $menu_id_3 = wp_create_nav_menu('底部导航');
    $menu_id_2 = wp_create_nav_menu('顶部导航');
    wp_update_nav_menu_item($menu_id_1, 0);
    wp_update_nav_menu_item($menu_id_2, 2);
    wp_update_nav_menu_item($menu_id_3, 3);
    wp_update_nav_menu_item($menu_id_4, 4);
}
add_filter('nav_menu_css_class', 'my_css_attributes_filter', 100, 1);
add_filter('nav_menu_item_id', 'my_css_attributes_filter', 100, 1);
add_filter('page_css_class', 'my_css_attributes_filter', 100, 1);
function my_css_attributes_filter($var){
   return is_array($var) ? array_intersect($var, array('menu-item','current-menu-item','current-post-parent','current-menu-parent')) : '';
}
/**
 * 文件上传格式
 */
add_filter('upload_mimes', 'wpdit_filter_mime_types');
function wpdit_filter_mime_types($mimes)
{
    $mimes['ttf'] = 'font/ttf';
    $mimes['woff'] = 'font/woff';
    $mimes['svg'] = 'font/svg';
    $mimes['eot'] = 'font/eot';
    $mimes['swf'] = 'application/x-shockwave-flash';
    return $mimes;
}

/**
 * 文章摘要字数
 */
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );
function custom_excerpt_length( $length ){
    return 150;
}

/**
 * 文章缩略图
 */
add_theme_support( 'post-thumbnails' );
function get_content_first_image($content){
    if ( $content === false ) $content = get_the_content();
    preg_match_all('|<img.*?src=[\'"](.*?)[\'"].*?>|i', $content, $images);
    if($images){
        return $images[1][0];
    }else{
        return false;
    }
}
set_post_thumbnail_size( 155, 110, true );
add_image_size( 'one', 155, 110, true );
/**
 * 获取特色图片并调用
 * 如果没有特色图片，则显示默认图片
 * 例：$defaltImg = '<img src="'.$mySRC.'images/thubmnail.png" alt="">'
 */
function getMyThumbnail($defaltImg){
    if ( has_post_thumbnail() ) {
        $thumbID = get_the_post_thumbnail( $post->ID, 'one', $imgsrcparam );
        echo "$thumbID";
    } else {
        echo $defaltImg;
    }
}
/**
 * 分页
 */
add_filter('pre_handle_404','_404');
function _404(){
    global $wp_query;
    if ( !is_admin() && ( 0 == count( $wp_query->posts ) ) && !is_404() && !is_robots() && !is_search() && !is_home() ) {
        if ( ( is_tag() || is_category() || is_tax() || is_author() ) && $wp_query->get_queried_object() ) {
            if ( !is_404() )
                status_header( 200 );
                return;
            }
            $wp_query->set_404();
            status_header( 404 );
            nocache_headers();
        } elseif ( !is_404() ) {
            status_header( 200 );
    }
}
function par_pagenavi($range = 9){
    global $paged, $wp_query;
    if ( !$max_page ){
        $max_page = $wp_query->max_num_pages;
    }
    if($max_page > 1){
        if(!$paged){
            $paged = 1;
        }
        if($paged != 1){
            echo "<a href='" . get_pagenum_link(1) . "' class='extend' title='跳转到首页'> 返回首页 </a>";
        }
        previous_posts_link(' 上一页 ');
        if($max_page > $range){
            if($paged < $range){
                for($i = 1; $i <= ($range + 1); $i++){
                    echo "<a href='" . get_pagenum_link($i) ."'";
                    if($i==$paged)
                        echo " class='current'";echo ">$i</a>";
                }
            }
            elseif($paged >= ($max_page - ceil(($range/2)))){
                for($i = $max_page - $range; $i <= $max_page; $i++){
                    echo "<a href='" . get_pagenum_link($i) ."'";
                    if($i==$paged)
                        echo " class='current'";echo ">$i</a>";
                }
            }
            elseif($paged >= $range && $paged < ($max_page - ceil(($range/2)))){
                for($i = ($paged - ceil($range/2));$i <= ($paged + ceil(($range/2)));$i++){
                    echo "<a href='" . get_pagenum_link($i) ."'";
                    if($i==$paged)
                        echo " class='current'";echo ">$i</a>";
                }
            }
        }
        else{
            for($i = 1; $i <= $max_page; $i++){
                echo "<a href='" . get_pagenum_link($i) ."'";
                if($i==$paged)
                    echo " class='current'";
                echo ">$i</a>";
            }
        }
        next_posts_link(' 下一页 ');
        if($paged != $max_page){
            echo "<a href='" . get_pagenum_link($max_page) . "' class='extend' title='跳转到最后一页'> 最后一页 </a>";
        }
    }
}
/**
 * 面包屑导航
 */
function cmp_breadcrumbs() {
    $delimiter = ' > ';
    $before = '<span class="current">';
    $after = '</span>';
    if ( !is_home() && !is_front_page() || is_paged() ){
        echo '<div id="crumbs">'.__( '当前位置：' , 'cmp' );
        global $post;
        $homeLink = home_url();
        echo ' <a href="' . $homeLink . '">' . __( '首页' , 'cmp' ) . '</a> ' . $delimiter . ' ';
        if ( is_category() ){
            global $wp_query;
            $cat_obj = $wp_query->get_queried_object();
            $thisCat = $cat_obj->term_id;
            $thisCat = get_category($thisCat);
            $parentCat = get_category($thisCat->parent);
            if ($thisCat->parent != 0){
                $cat_code = get_category_parents($parentCat, TRUE, ' ' . $delimiter . ' ');
                echo $cat_code = str_replace ('<a','<a', $cat_code );
            }
            echo $before . '' . single_cat_title('', false) . '' . $after;
        }
        elseif ( is_day() ){
            echo '<a href="' . get_year_link(get_the_time('Y')) . '">' . get_the_time('Y') . '</a> ' . $delimiter . ' ';
            echo '<a href="' . get_month_link(get_the_time('Y'),get_the_time('m')) . '">' . get_the_time('F') . '</a> ' . $delimiter . ' ';
            echo $before . get_the_time('d') . $after;
        }
        elseif ( is_month() ){
            echo '<a href="' . get_year_link(get_the_time('Y')) . '">' . get_the_time('Y') . '</a> ' . $delimiter . ' ';
            echo $before . get_the_time('F') . $after;
        }
        elseif ( is_year() ){
            echo $before . get_the_time('Y') . $after;
        }
        elseif ( is_single() && !is_attachment() ){// 文章
            if ( get_post_type() != 'post' ){// 自定义文章类型
                $post_type = get_post_type_object(get_post_type());
                $slug = $post_type->rewrite;
                echo '<a href="' . $homeLink . '/' . $slug['slug'] . '/">' . $post_type->labels->singular_name . '</a> ' . $delimiter . ' ';
                echo $before . get_the_title() . $after;
            }
            else{// 文章 post
                $cat = get_the_category();
                $category = get_the_category();
                $cat = $cat[0];
                $category_name = $category[0]->cat_name;
                $cat_links = get_category_link($cat->term_id);
                $cat_links = rtrim($cat_links, '/');
                //$cat_links = str_replace ('/category','', $cat_links);
                echo '<a href ="' .$cat_links .'">'. $category_name. '</a>' .  $delimiter . get_the_title();

            }
        }
        elseif ( !is_single() && !is_page() && get_post_type() != 'post' ){
            $post_type = get_post_type_object(get_post_type());
            echo $before . $post_type->labels->singular_name . $after;
        }
        elseif ( is_attachment() ){// 附件
            $parent = get_post($post->post_parent);
            $cat = get_the_category($parent->ID);
            $cat = $cat[0];
            echo '<a href="' . get_permalink($parent) . '">' . $parent->post_title . '</a> ' . $delimiter . ' ';
            echo $before . get_the_title() . $after;
        }
        elseif ( is_page() && !$post->post_parent ){// 页面
            echo $before . get_the_title() . $after;
        }
        elseif ( is_page() && $post->post_parent ){// 父级页面
            $parent_id  = $post->post_parent;
            $breadcrumbs = array();while ($parent_id) {
                $page = get_page($parent_id);
                $breadcrumbs[] = '<a itemprop="breadcrumb" href="' . get_permalink($page->ID) . '">' . get_the_title($page->ID) . '</a>';
                $parent_id  = $page->post_parent;
            }
            $breadcrumbs = array_reverse($breadcrumbs);
            foreach ($breadcrumbs as $crumb) echo $crumb . ' ' . $delimiter . ' ';
            echo $before . get_the_title() . $after;
        }
        elseif ( is_search() ){// 搜索结果
            echo $before ;
            printf( __( 'Search Results for: %s', 'cmp' ),  get_search_query() );
            echo  $after;
        }
        elseif ( is_tag() ){//标签 存档
            echo $before ;
            printf( __( '标签: %s', 'cmp' ), single_tag_title( '', false ) );
            echo  $after;
        }
        elseif ( is_author() ){// 作者存档
            global $author;
            $userdata = get_userdata($author);
            echo $before ;
            printf( __( 'Author Archives: %s', 'cmp' ),  $userdata->display_name );
            echo  $after;
        }
        elseif ( is_404() ){// 404 页面
            echo $before;
            _e( 'Not Found', 'cmp' );
            echo  $after;
        }
        if ( get_query_var('paged') ){// 分页
            if ( is_category() || is_day() || is_month() || is_year() || is_search() || is_tag() || is_author() )
                echo sprintf( __( '( 第 %s 页)', 'cmp' ), get_query_var('paged') );
        }
        echo '</div>';
    }
}

/**
 * 移除后台谷歌字体
 */
function themege_remove_open_sans() {
    wp_deregister_style( 'open-sans' );
    wp_register_style( 'open-sans', false );
    wp_enqueue_style('open-sans','');
}
add_action( 'init', 'themege_remove_open_sans' );

/**
 * 禁用表情
 */
function disable_emojis_tinymce( $plugins ) {
    if ( is_array( $plugins ) ) {
        return array_diff( $plugins, array( 'wpemoji' ) );
    } else {
        return array();
    }
}
function disable_emojis() {
    remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
    remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
    remove_action( 'wp_print_styles', 'print_emoji_styles' );
    remove_action( 'admin_print_styles', 'print_emoji_styles' );
    remove_filter( 'the_content_feed', 'wp_staticize_emoji' );
    remove_filter( 'comment_text_rss', 'wp_staticize_emoji' );
    remove_filter( 'wp_mail', 'wp_staticize_emoji_for_email' );
    add_filter( 'tiny_mce_plugins', 'disable_emojis_tinymce' );
}
add_action( 'init', 'disable_emojis' );

/**
 * 移除CSS及JS版本号
 */
add_filter( 'style_loader_src', 'themege_remove_cssjs_ver', 999 );
add_filter( 'script_loader_src', 'themege_remove_cssjs_ver', 999 );
function themege_remove_cssjs_ver( $src ) {
    if( strpos( $src, 'ver='. get_bloginfo( 'version' ) ) )
        $src = remove_query_arg( 'ver', $src );
    return $src;
}

/**
 * 管理后台字体
 */
add_action('admin_head', 'Bing_admin_lettering');
function Bing_admin_lettering(){
        echo'<style type="text/css">
         body{ font-family:"Lantinghei SC","Open Sans",Arial,"Hiragino Sans GB","Microsoft YaHei","微软雅黑","STHeiti","WenQuanYi Micro Hei",SimSun,sans-serif !important;}
        </style>';
}

/**
 * 后台页脚
 */
add_filter('admin_footer_text', 'left_admin_footer_text');
function left_admin_footer_text($text) {
    $text = '<span id="footer-thankyou">感谢使用<a href="">Aha</a>进行创作</span>';
    return $text;
}

add_filter('update_footer', 'right_admin_footer_text', 11);
function right_admin_footer_text($text) {
    $text = "1.0.1版本";
    return $text;
}

/**
 * NO s.w.org
 */
function remove_dns_prefetch( $hints, $relation_type )
{
    if ( 'dns-prefetch' === $relation_type )
    {
        return array_diff( wp_dependencies_unique_hosts(), $hints );
    }
    return $hints;
}

add_filter( 'wp_resource_hints', 'remove_dns_prefetch', 10, 2 );

remove_action( 'wp_head', 'print_emoji_detection_script', 7 );

remove_action( 'wp_print_styles', 'print_emoji_styles' );

add_filter( 'emoji_svg_url', '__return_false' );

/**
 * NO WordPress Version
 */
remove_action('wp_head','wp_generator');
/**
 * NO rel="EditURI"
 */
remove_action('wp_head','rsd_link');
/**
 * NO rel="wlwmanifest"
 */
remove_action('wp_head','wlwmanifest_link');
/**
 * NO wp-json link
 */
remove_action( 'wp_head', 'rest_output_link_wp_head', 10 );
remove_action( 'wp_head', 'wp_oembed_add_discovery_links', 10 );

remove_action( 'wp_head', 'feed_links', 2 );
remove_action( 'wp_head', 'feed_links_extra', 3 );
/**
 *  NO REST API
 */
add_filter('rest_enabled', '_return_false'); add_filter('rest_jsonp_enabled', '_return_false');

/**
 * NO embed
 */
function disable_embeds_init() {
    global $wp;
    $wp->public_query_vars = array_diff( $wp->public_query_vars, array(
        'embed',
    ) );
    remove_action( 'rest_api_init', 'wp_oembed_register_route' );
    add_filter( 'embed_oembed_discover', '__return_false' );
    remove_filter( 'oembed_dataparse', 'wp_filter_oembed_result', 10 );
    remove_action( 'wp_head', 'wp_oembed_add_discovery_links' );
    remove_action( 'wp_head', 'wp_oembed_add_host_js' );
    add_filter( 'tiny_mce_plugins', 'disable_embeds_tiny_mce_plugin' );
    add_filter( 'rewrite_rules_array', 'disable_embeds_rewrites' );
}
add_action( 'init', 'disable_embeds_init', 9999 );
/**
 * Removes the 'wpembed' TinyMCE plugin.
 */
function disable_embeds_tiny_mce_plugin( $plugins ) {
    return array_diff( $plugins, array( 'wpembed' ) );
}
/**
 * Remove all rewrite rules related to embeds.
 */
function disable_embeds_rewrites( $rules ) {
    foreach ( $rules as $rule => $rewrite ) {
        if ( false !== strpos( $rewrite, 'embed=true' ) ) {
            unset( $rules[ $rule ] );
        }
    }
    return $rules;
}
/**
 * Remove embeds rewrite rules on plugin activation.
 */
function disable_embeds_remove_rewrite_rules() {
    add_filter( 'rewrite_rules_array', 'disable_embeds_rewrites' );
    flush_rewrite_rules();
}
register_activation_hook( __FILE__, 'disable_embeds_remove_rewrite_rules' );
/**
 * Flush rewrite rules on plugin deactivation.
 */
function disable_embeds_flush_rewrite_rules() {
    remove_filter( 'rewrite_rules_array', 'disable_embeds_rewrites' );
    flush_rewrite_rules();
}
register_deactivation_hook( __FILE__, 'disable_embeds_flush_rewrite_rules' );

/**
 * register data
 */
function register_theme_settings() {
    register_setting("theme_mods_freshblog","theme_mods_freshblog");
}
add_filter('manage_posts_columns', 'wpjam_id_manage_posts_columns');
add_filter('manage_pages_columns', 'wpjam_id_manage_posts_columns');
function wpjam_id_manage_posts_columns($columns){
    $columns['post_id'] = 'ID';
    return $columns;
}
/**
 * show post id
 */
add_action('manage_posts_custom_column','wpjam_id_manage_posts_custom_column',10,2);
add_action('manage_pages_custom_column','wpjam_id_manage_posts_custom_column',10,2);
function wpjam_id_manage_posts_custom_column($column_name,$id){
    if ($column_name == 'post_id') {
        echo $id;
    }
}
/**
 * 判断是否是手机
 */
function wpjam_is_mobile() {
 
    if ( empty($_SERVER['HTTP_USER_AGENT']) ) {
        return false;
    } elseif ( ( strpos($_SERVER['HTTP_USER_AGENT'], 'Mobile') !== false  && strpos($_SERVER['HTTP_USER_AGENT'], 'iPad') === false) // many mobile devices (all iPh, etc.)
        || strpos($_SERVER['HTTP_USER_AGENT'], 'Android') !== false
        || strpos($_SERVER['HTTP_USER_AGENT'], 'Silk/') !== false
        || strpos($_SERVER['HTTP_USER_AGENT'], 'Kindle') !== false
        || strpos($_SERVER['HTTP_USER_AGENT'], 'BlackBerry') !== false
        || strpos($_SERVER['HTTP_USER_AGENT'], 'Opera Mini') !== false
        || strpos($_SERVER['HTTP_USER_AGENT'], 'Opera Mobi') !== false ) {
            return true;
    } else {
        return false;
    }
}

if ( ! function_exists( 'myDownloadLink' ) ){
    /**
     * 公用软件下载地址
     */
     function myDownloadLink(){
        global $download_link_easy;
        $download_link_easy = 'https://download.huduntech.com/software/compressmagician/installer/compressmagician.exe';
        echo $download_link_easy;
    }
   
}