<?php
/**
 * 移除文章摘要自动生成的P标签
 */
remove_filter (  'the_excerpt' ,  'wpautop'  );
/**
 * 文章摘要字数
 */
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );
function custom_excerpt_length( $length ){
    return 150;
}
/**
 *
 * 文章底部统一添加友情链接
 * 后台   设置->阅读  选项中添加友情链接选项，以批量添加友情链接。
 * 链接与链接标题之间以空格区分
 * 每组链接之间回车区分
 */
add_action('admin_init', 'wpjam_blogroll_settings_api_init');
function wpjam_blogroll_settings_api_init() {
    add_settings_field(
        'wpjam_blogroll_setting',
        '友情链接',
        'wpjam_blogroll_setting_callback_function',
        'reading'
    );
    register_setting('reading','wpjam_blogroll_setting');
}
function wpjam_blogroll_setting_callback_function() {
    echo '<textarea name="wpjam_blogroll_setting" rows="10" cols="50" id="wpjam_blogroll_setting" class="large-text code">' . get_option('wpjam_blogroll_setting') . '</textarea>';
}
function wpjam_blogroll(){
    $wpjam_blogroll_setting = get_option('wpjam_blogroll_setting');
    if($wpjam_blogroll_setting){
        $wpjam_blogrolls = explode("\n", $wpjam_blogroll_setting);
        foreach ($wpjam_blogrolls as $wpjam_blogroll) {
            $wpjam_blogroll = explode(" ", $wpjam_blogroll );
            echo '<li><a href="'.trim($wpjam_blogroll[1]).'" title="'.esc_attr(trim($wpjam_blogroll[0])).'" target="_blank">'.trim($wpjam_blogroll[0]).'</a></li>';
        }
    }
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
add_action('init', 'html_page_permalink', -1);
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
 * 移除wordpress自动生成的导航class
 */
add_filter('nav_menu_css_class', 'my_css_attributes_filter', 100, 1);
add_filter('nav_menu_item_id', 'my_css_attributes_filter', 100, 1);
add_filter('page_css_class', 'my_css_attributes_filter', 100, 1);
function my_css_attributes_filter($var){
   return is_array($var) ? array_intersect($var, array('menu-item','current-menu-item','current-post-parent','current-menu-parent')) : '';
}
/**
 * 分页
 */
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

if( !function_exists('cmp_breadcrumbs') ){
    /**
     * 面包屑导航
     */
    function cmp_breadcrumbs() {
        $delimiter = ' > ';
        $before = '<span class="current">';
        $after = '</span>';
        if ( !is_home() && !is_front_page() || is_paged() ) {
            echo '<div itemscope class="l-crumbs">'.__( 'You are here:' , 'storefront' );
            global $post;
            $homeLink = home_url();
            echo ' <a itemprop="breadcrumb" href="' . $homeLink . '">' . __( 'Home' , 'storefront' ) . '</a> ' . $delimiter . ' ';
            if ( is_category() ) {
                global $wp_query;
                $cat_obj = $wp_query->get_queried_object();
                $thisCat = $cat_obj->term_id;
                $thisCat = get_category($thisCat);
                $parentCat = get_category($thisCat->parent);
                if ($thisCat->parent != 0){
                    $cat_code = get_category_parents($parentCat, TRUE, ' ' . $delimiter . ' ');
                    echo $cat_code = str_replace ('<a','<a itemprop="breadcrumb"', $cat_code );
                }
                echo $before . '' . single_cat_title('', false) . '' . $after;
            } elseif ( is_day() ) {
                echo '<a itemprop="breadcrumb" href="' . get_year_link(get_the_time('Y')) . '">' . get_the_time('Y') . '</a> ' . $delimiter . ' ';
                echo '<a itemprop="breadcrumb"  href="' . get_month_link(get_the_time('Y'),get_the_time('m')) . '">' . get_the_time('F') . '</a> ' . $delimiter . ' ';
                echo $before . get_the_time('d') . $after;
            } elseif ( is_month() ) {
                echo '<a itemprop="breadcrumb" href="' . get_year_link(get_the_time('Y')) . '">' . get_the_time('Y') . '</a> ' . $delimiter . ' ';
                echo $before . get_the_time('F') . $after;
            } elseif ( is_year() ) {
                echo $before . get_the_time('Y') . $after;
            } elseif ( is_single() && !is_attachment() ) {
                if ( get_post_type() != 'post' ) {
                    $post_type = get_post_type_object(get_post_type());
                    $slug = $post_type->rewrite;
                    echo '<a itemprop="breadcrumb" href="' . $homeLink . '/' . $slug['slug'] . '/">' . $post_type->labels->singular_name . '</a> ' . $delimiter . ' ';
                    echo $before . get_the_title() . $after;
                } else {
                    $cat = get_the_category(); $cat = $cat[0];
                    $cat_code = get_category_parents($cat, TRUE, ' ' . $delimiter . ' ');
                    echo $cat_code = str_replace ('<a','<a itemprop="breadcrumb"', $cat_code );
                    echo $before . get_the_title() . $after;
                }
            } elseif ( !is_single() && !is_page() && get_post_type() != 'post' ) {
                $post_type = get_post_type_object(get_post_type());
                echo $before . $post_type->labels->singular_name . $after;
            } elseif ( is_attachment() ) {
                $parent = get_post($post->post_parent);
                $cat = get_the_category($parent->ID); $cat = $cat[0];
                echo '<a itemprop="breadcrumb" href="' . get_permalink($parent) . '">' . $parent->post_title . '</a> ' . $delimiter . ' ';
                echo $before . get_the_title() . $after;
            } elseif ( is_page() && !$post->post_parent ) {
                echo $before . get_the_title() . $after;
            } elseif ( is_page() && $post->post_parent ) {
                $parent_id  = $post->post_parent;
                $breadcrumbs = array();
                while ($parent_id) {
                    $page = get_page($parent_id);
                    $breadcrumbs[] = '<a itemprop="breadcrumb" href="' . get_permalink($page->ID) . '">' . get_the_title($page->ID) . '</a>';
                    $parent_id  = $page->post_parent;
                }
                $breadcrumbs = array_reverse($breadcrumbs);
                foreach ($breadcrumbs as $crumb) echo $crumb . ' ' . $delimiter . ' ';
                echo $before . get_the_title() . $after;
            } elseif ( is_search() ) {
                echo $before ;
                printf( __( 'Search Results for: %s', 'storefront' ),  get_search_query() );
                echo  $after;
            } elseif ( is_tag() ) {
                echo $before ;
                printf( __( 'Tag Archives: %s', 'storefront' ), single_tag_title( '', false ) );
                echo  $after;
            } elseif ( is_author() ) {
                global $author;
                $userdata = get_userdata($author);
                echo $before ;
                printf( __( 'Author Archives: %s', 'storefront' ),  $userdata->display_name );
                echo  $after;
            } elseif ( is_404() ) {
                echo $before;
                _e( 'Not Found', 'storefront' );
                echo  $after;
            }
            if ( get_query_var('paged') ) {
                if ( is_category() || is_day() || is_month() || is_year() || is_search() || is_tag() || is_author() )
                    echo sprintf( __( '( Page %s )', 'storefront' ), get_query_var('paged') );
            }
            echo '</div>';
        }
    }
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
 * 移除后台谷歌字体
 */
function themege_remove_open_sans() {
    wp_deregister_style( 'open-sans' );
    wp_register_style( 'open-sans', false );
    wp_enqueue_style('open-sans','');
}
add_action( 'init', 'themege_remove_open_sans' );
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
 * show post id
 */
function post_res(){
    echo random_str();
    die();
}
add_action('wp_ajax_post_toturial', 'post_res');

//thumbnails
add_theme_support( 'post-thumbnails' );
function catch_that_image() {
    global $post, $posts;
    $first_img = '';
    ob_start();
    ob_end_clean();
    $output = preg_match_all('/<img.+src=[\'"]([^\'"]+)[\'"].*>/i', $post->post_content, $matches);
     
    //获取文章中第一张图片的路径并输出
    $first_img = $matches [1] [0];
     
    //如果文章无图片，获取自定义图片
     
    if(empty($first_img)){ //Defines a default image
    $first_img = get_stylesheet_directory_uri()."/assets/images/default.png";
     
    //请自行设置一张default.jpg图片
    }
     
    return $first_img;
}

