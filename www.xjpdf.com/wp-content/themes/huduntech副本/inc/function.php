<?php
if (!isset($content_width)) {
    $content_width = 660;
}


if (!function_exists('theme_setup')):

    function theme_setup()
{

        load_theme_textdomain('text_domain');

        add_theme_support('automatic-feed-links');

        add_theme_support('title-tag');

        add_theme_support('post-thumbnails');
        add_image_size('industy-cover', 280, 180, true);
        add_image_size('home-cover-1', 280, 150, true);
        add_image_size('home-cover-2', 270, 150, true);

        register_nav_menus(array(
            'header_menu' => __('导航菜单', 'text_domain'),
            'header_menu_left' => __('顶部左侧导航', 'text_domain'),
            'header_menu_right' => __('顶部右侧导航', 'text_domain'),
            'footer_menu' => __('页脚菜单', 'text_domain'),
            'mobile_menu' => __('移动端菜单', 'text_domain'),
        ));

        add_theme_support('html5', array(
            'search-form', 'comment-form', 'comment-list', 'gallery', 'caption',
        ));

        add_theme_support('post-formats', array(
            'aside', 'image', 'video', 'quote', 'link', 'gallery', 'status', 'audio', 'chat',
        ));

        add_theme_support('custom-logo', array(
            'height' => 248,
            'width' => 248,
            'flex-height' => true,
        ));

        add_theme_support('customize-selective-refresh-widgets');
    }
endif;
add_action('after_setup_theme', 'theme_setup');

if(!function_exists('theme_widgets_init')){
    function theme_widgets_init()
    {
        register_sidebar(array(
            'name' => __('Widget Area', 'text_domain'),
            'id' => 'sidebar-1',
            'description' => __('Add widgets here to appear in your sidebar.', 'text_domain'),
            'before_widget' => '<aside id="%1$s" class="widget %2$s">',
            'after_widget' => '</aside>',
            'before_title' => '<h2 class="widget-title">',
            'after_title' => '</h2>',
        ));
    }
}

add_action('widgets_init', 'theme_widgets_init');

// 加载js和css
function load_scripts()
{
    // <link rel="stylesheet" href="./js/swiper/idangerous.swiper.css">
    // <script src="./js/swiper/idangerous.swiper.min.js"></script>
    wp_enqueue_style('theme-style-reset', mySrc() .'/reset.css', '20180518');
    wp_enqueue_style('theme-style', mySrc() . '/style.css', '20180518');
    wp_enqueue_style('theme-style-new', mySrc() . '/css/style.css', '20180518');
    wp_enqueue_style('swiper', mySrc() . '/js/swiper/idangerous.swiper.css', '20180518');
    wp_enqueue_style('banner-homepage', mySrc() . '/css/banner-homepage.css', '20180518');
    wp_enqueue_style('dwon', mySrc() . '/css/dwon.css', '20180518');

    wp_enqueue_script('site_main_1', mySrc() . '/js/jquery-1.10.1.min.js', '', '', true);
    wp_enqueue_script('swiper', mySrc() . '/js/swiper/idangerous.swiper.min.js', '', '', true);
    wp_enqueue_script('site_main', mySrc() . '/js/main.js', '', '', true);

    if (is_page('contact')) {
        wp_enqueue_script('baiduMap', '//api.map.baidu.com/api?v=2.0&ak=ZFCiCYmT0MeFDRYdxx9cUdQAaFcbHcTc&s=1"', '', THEME_DB_VERSION);
    }
}
add_action('wp_enqueue_scripts', 'load_scripts');

// 标签云
function theme_widget_tag_cloud_args($args)
{
    $args['largest'] = 22;
    $args['smallest'] = 8;
    $args['unit'] = 'pt';
    $args['format'] = 'list';

    return $args;
}
add_filter('widget_tag_cloud_args', 'theme_widget_tag_cloud_args');


// 资源路径，去掉http:或https
function mySrc()
{
    $stylesheet_dir = get_stylesheet_directory_uri();
    return substr($stylesheet_dir, strpos($stylesheet_dir, '/'));
}



// 如果后台启了.html后缀的固定链接，则对页面添加.html后缀
function html_page_permalink()
{
    global $wp_rewrite;
    if (get_option('permalink_structure') == '/%postname%.html' || get_option('permalink_structure') == '/%post_id%.html') {
        if (!strpos($wp_rewrite->get_page_permastruct(), '.html')) {
            $wp_rewrite->page_structure = $wp_rewrite->page_structure . '.html';
        }
    }
}
add_action('init', 'html_page_permalink', -1);

// 关闭 Admin Bar
add_filter('show_admin_bar', '__return_false', 8);

// 搜索结果只有一篇文章时自动跳转到该文章
function Bing_search_one_redirect()
{
    global $wp_query;

    if ($wp_query->is_search() && $wp_query->found_posts == 1) {
        wp_redirect(get_permalink($wp_query->posts['0']->ID));
        die;
    }
}
add_action('template_redirect', 'Bing_search_one_redirect');
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

add_filter('pre_handle_404', '_404');
function _404()
{
    global $wp_query;
    if (!is_admin() && (0 == count($wp_query->posts)) && !is_404() && !is_robots() && !is_search() && !is_home()) {
        if ((is_tag() || is_category() || is_tax() || is_author()) && $wp_query->get_queried_object()) {
            if (!is_404()) {
                status_header(200);
            }

            return;
        }
        $wp_query->set_404();
        status_header(404);
        nocache_headers();
    } elseif (!is_404()) {
        status_header(200);
    }
}

/**
 * 移除 wp 导航 自动生成classname
 *
 * @param [type] $var
 * @return void
 */
function my_css_attributes_filter($var)
{
    return is_array($var) ? array_intersect($var, array('menu-item', 'current-menu-item', 'current-post-parent', 'current-menu-parent')) : '';
}
add_filter('nav_menu_css_class', 'my_css_attributes_filter', 100, 1);
add_filter('nav_menu_item_id', 'my_css_attributes_filter', 100, 1);
add_filter('page_css_class', 'my_css_attributes_filter', 100, 1);
/**
 * 建立菜单
 *
 * @see register_nav_menus()
 */
/**
 * 获取菜单名称
 *
 * @see get_registered_nav_menus()
 * @see wp_get_nav_menu_object()
 */
function Bing_menu_name($menu)
{
    $locations = get_registered_nav_menus();

    $menu_locations = get_nav_menu_locations();
    if (empty($menu_locations[$menu])) {
        return $locations[$menu];
    }

    $menu_object = wp_get_nav_menu_object($menu_locations[$menu]);
    if (empty($menu_object) || is_wp_error($menu_object)) {
        return $locations[$menu];
    }

    return $menu_object->name;
}

/**
 * 导航菜单未设置回调函数
 *
 * @see wp_nav_menu()
 */
function Bing_not_set_menu_fallback($args)
{
    $menus = array(
        array(
            'url' => home_url(),
            'name' => __('首页', 'Bing'),
            'current' => is_home(),
        ),
        array(
            'url' => admin_url('nav-menus.php?action=locations'),
            'name' => __('⊕添加菜单', 'Bing'),
        ),
    );

    $code = '<ul id="' . esc_attr($args['theme_location']) . '">';

    foreach ($menus as $menu) {
        $current_clsss = isset($menu['current']) && $menu['current'] ? 'current-menu-item"' : '';
        $code .= sprintf('<li class="%s"><a href="%s">%s</a></li>', $current_clsss, esc_url($menu['url']), $menu['name']);
    }

    $code .= '</ul>';

    if (!$args['echo']) {
        return $code;
    }

    echo $code;
}

/**
 * 调用菜单
 *
 * @see wp_nav_menu()
 */
function get_nav_menu($theme_location, $args = array())
{
    $menu_className = $args['menu_class'] ? $args['menu_class'] : '';
    $defaults = array(
        'theme_location' => $theme_location,
        'container' => false,
        'items_wrap' => '<ul id="' . esc_attr($theme_location) . '" class="' . $menu_className . '">%3$s</ul>',
        'fallback_cb' => 'Bing_not_set_menu_fallback',
    );
    $r = wp_parse_args($args, $defaults);
    $r['echo'] = false;
    return wp_nav_menu($r);
}

if (!function_exists('theme_custom_logo')):
    function theme_custom_logo()
{
        $custom_logo_id = get_theme_mod('custom_logo');
        $image = wp_get_attachment_image_src($custom_logo_id, 'full');
        return $image[0];
    }
endif;

// 图片上传自动以年月日时分秒重命名
function custom_upload_name($file)
{
    if (!$ext) {
        $ext = ltrim(strrchr($file['name'], '.'), '.');
    }
    $file['name'] = date("YmdHis") . '.' . $ext;
    return $file;
}
add_filter('wp_handle_upload_prefilter', 'custom_upload_name');

/**
 * 根据别名获取页链接
 */
if (!function_exists('geturl')) {
    function geturl($slug, $type = "page")
    {
        global $wpdb;
        if ($type == "page") {
            $url_id = $wpdb->get_var("SELECT ID FROM $wpdb->posts WHERE post_name = '" . $slug . "'");
            return get_permalink($url_id);
        } else {
            $url_id = $wpdb->get_var("SELECT term_id FROM $wpdb->terms WHERE slug = '" . $slug . "'");
            return get_category_link($url_id);
        }
    }
}

add_filter('the_time', 'timeago');
function timeago()
{
    global $post;
    $date = $post->post_date;
    $time = get_post_time('G', true, $post);
    $time_diff = time() - $time;
    if ($time_diff > 0 && $time_diff < 24 * 60 * 60) {
        $display = sprintf(__('%s ago'), human_time_diff($time));
    } else {
        $display = date(get_option('date_format'), strtotime($date));
    }
    return $display;
}

/**
 * 移除 wordpress 自带摘要省略号
 */
function emtx_continue_reading_link()
{
    return ' ';
}

function emtx_auto_excerpt_more($more)
{
    return ' ' . emtx_continue_reading_link();
}
add_filter('excerpt_more', 'emtx_auto_excerpt_more');

function emtx_custom_excerpt_more($output)
{
    if (has_excerpt() && !is_attachment()) {
        $output .= emtx_continue_reading_link();
    }
    return $output;
}
add_filter('get_the_excerpt', 'emtx_custom_excerpt_more');

function cmp_breadcrumbs()
{
    $delimiter = ' > ';
    $before = '<span class="current">';
    $after = '</span>';
    if (!is_home() && !is_front_page() || is_paged()) {
        echo '<div id="crumbs">' . __('当前位置：', 'cmp');
        global $post;
        $homeLink = home_url();
        echo ' <a href="' . $homeLink . '">' . __('首页', 'cmp') . '</a> ' . $delimiter . ' ';
        if (is_category()) {
            global $wp_query;
            $cat_obj = $wp_query->get_queried_object();
            $thisCat = $cat_obj->term_id;
            $thisCat = get_category($thisCat);
            $parentCat = get_category($thisCat->parent);
            if ($thisCat->parent != 0) {
                $cat_code = get_category_parents($parentCat, true, ' ' . $delimiter . ' ');
                echo $cat_code = str_replace('<a', '<a', $cat_code);
            }
            echo $before . '' . single_cat_title('', false) . '' . $after;
        } elseif (is_day()) {
            echo '<a href="' . get_year_link(get_the_time('Y')) . '">' . get_the_time('Y') . '</a> ' . $delimiter . ' ';
            echo '<a href="' . get_month_link(get_the_time('Y'), get_the_time('m')) . '">' . get_the_time('F') . '</a> ' . $delimiter . ' ';
            echo $before . get_the_time('d') . $after;
        } elseif (is_month()) {
            echo '<a href="' . get_year_link(get_the_time('Y')) . '">' . get_the_time('Y') . '</a> ' . $delimiter . ' ';
            echo $before . get_the_time('F') . $after;
        } elseif (is_year()) {
            echo $before . get_the_time('Y') . $after;
        } elseif (is_single() && !is_attachment()) { // 文章
            if (get_post_type() != 'post') { // 自定义文章类型
                $post_type = get_post_type_object(get_post_type());
                $slug = $post_type->rewrite;
                echo '<a href="' . $homeLink . '/' . $slug['slug'] . '/">' . $post_type->labels->singular_name . '</a> ' . $delimiter . ' ';
                echo $before . get_the_title() . $after;
            } else { // 文章 post
                $cat = get_the_category();
                $cat = $cat[0];
                $cat_code = get_category_parents($cat, true, ' ' . $delimiter . ' ');
                echo $cat_code = str_replace('<a', '<a itemprop="breadcrumb"', $cat_code);
                echo $before . get_the_title() . $after;

            }
        } elseif (!is_single() && !is_page() && get_post_type() != 'post') {
            $post_type = get_post_type_object(get_post_type());
            echo $before . $post_type->labels->singular_name . $after;
        } elseif (is_attachment()) { // 附件
            $parent = get_post($post->post_parent);
            $cat = get_the_category($parent->ID);
            $cat = $cat[0];
            echo '<a href="' . get_permalink($parent) . '">' . $parent->post_title . '</a> ' . $delimiter . ' ';
            echo $before . get_the_title() . $after;
        } elseif (is_page() && !$post->post_parent) { // 页面
            echo $before . get_the_title() . $after;
        } elseif (is_page() && $post->post_parent) { // 父级页面
            $parent_id = $post->post_parent;
            $breadcrumbs = array();
            while ($parent_id) {
                $page = get_page($parent_id);
                $breadcrumbs[] = '<a itemprop="breadcrumb" href="' . get_permalink($page->ID) . '">' . get_the_title($page->ID) . '</a>';
                $parent_id = $page->post_parent;
            }
            $breadcrumbs = array_reverse($breadcrumbs);
            foreach ($breadcrumbs as $crumb) {
                echo $crumb . ' ' . $delimiter . ' ';
            }

            echo $before . get_the_title() . $after;
        } elseif (is_search()) { // 搜索结果
            echo $before;
            printf(__('%s的搜索结果 : ', 'cmp'), get_search_query());
            echo $after;
        } elseif (is_tag()) { //标签 存档
            echo $before;
            printf(__('标签: %s', 'cmp'), single_tag_title('', true));
            echo $after;
        } elseif (is_author()) { // 作者存档
            global $author;
            $userdata = get_userdata($author);
            echo $before;
            printf(__('作者归档: %s', 'cmp'), $userdata->display_name);
            echo $after;
        } elseif (is_404()) { // 404 页面
            echo $before;
            _e('未找到', 'cmp');
            echo $after;
        }
        if (get_query_var('paged')) { // 分页
            if (is_category() || is_day() || is_month() || is_year() || is_search() || is_tag() || is_author()) {
                echo sprintf(__('( 第 %s 页)', 'cmp'), get_query_var('paged'));
            }

        }
        echo '</div>';
    }
}

function uploadDirHeadRewrite($content)
{
    $upload_dir = wp_upload_dir();
    $uplaod_dir_base = $upload_dir['baseurl'];
    $uplaod_dir_base_instead = substr($uplaod_dir_base, strpos($uplaod_dir_base, '/'));
    $content = str_replace($uplaod_dir_base, $uplaod_dir_base_instead, $content);
    return $content;
}
add_filter('the_content', 'uploadDirHeadRewrite');
function replace_src_str($html)
{
    $buffer = str_replace('src="https:', 'src="', $html);
    $buffer = str_replace('src="http:', 'src="', $buffer);
    return $buffer;
}
function replace_src_str_start()
{
    ob_start("replace_src_str");
}
function replace_src_str_end()
{
    ob_end_flush();
}
add_action('init', 'replace_src_str_start');
add_action('shutdown', 'replace_src_str_end');

/**
 * 移除字符串中的空格，换行，回车
 * 剥去字符串中的 HTML 标签：
 */
if (!function_exists('myCleanString')) {
    function myCleanString($my_string)
    {
        return $my_string = str_replace(array("\r\n", "\r", "\n"), "", strtr(strtr(trim(strip_tags($my_string)), array(' ' => '')), array(' ' => '')));
    }
}

function getNewsList_homepage()
{
    $per_page = 4;
    $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
    $limit = get_option('posts_per_page');
    $args = array(
        'post_type' => 'news',
        'showposts' => $limit,
        'paged' => $paged,
        'order' => 'DESC',
        'posts_per_page' => $per_page,
    );
    query_posts($args);
    $news_list_index = 0;
    if (have_posts()):
        $news_list_html = '';
        while (have_posts()): the_post();
            $news_list_index++;
            $post_title = get_the_title();
            $post_title = mb_substr($post_title, 0, 14) . '...';
            $post_excerpt = get_the_excerpt() ? get_the_excerpt() : $post_title;
            $post_excerpt = mb_substr($post_excerpt, 0, 50) . '...';
            $post_time = get_the_date('Y-m-d');
            $post_link = get_the_permalink();
            if ($news_list_index == 1) {
                $news_list_html .= '<div class="news-first"><div class="news-date"><span class="news-day">' . get_the_date('d') . '</span><span>' . get_the_date('Y') . '.' . get_the_date('m') . '</span></div>' . '<a href="' . $post_link . '" class="news-title">' . $post_title . '</a>' . '<a href="" class="news-excerpt">' . $post_excerpt . '</a></div>';
            } else {
                $news_list_html .= '<a href="' . $post_link . '" class="news-title">' . $post_title . '<span class="news-date">' . $post_time . '</span></a>';
            }

        endwhile;
    else:
    endif;
    wp_reset_query();
    return $news_list_html;
}

function getProdctsCategoryData()
{
    $cat = 'products';
    $cat_category = 'products_category';
    $cat_term_all = get_terms($cat_category, array('hide_empty' => 0));
    $cat_menu_html = '';
    $post_content_html = '';
    $cat_menu_index = 0;
    $slider_html = '';
    if (!empty($cat_term_all) && !is_wp_error($cat_term_all)) {
        foreach ($cat_term_all as $term) {
            $cat_menu_index++;
            $term_name = $term->name;
            $term_slug = $term->slug;
            $term_link = get_term_link($term, $cat_category);
            $cat_menu_index_class = '';
            if ($cat_menu_index == 1) {
                $cat_menu_index_class = 'current';
            }

            $slider_img = of_get_option('slider_homepage_' . $cat_menu_index) ? of_get_option('slider_homepage_' . $cat_menu_index) : mySrc() . '/assets/images/homepage/banner_homepage_top_' . $cat_menu_index . '.jpg)';
            $slider_html .= '<div class="swiper-slide banner-item banner-item-' . $cat_menu_index . '"><a href="' . $term_link . '"><img src="'. $slider_img.'"></a></div>';



            $args = array(
                'post_type' => $cat,
                'tax_query' => array(
                    array(
                        'taxonomy' => $cat_category,
                        'field' => 'term_id',
                        'terms' => $term->term_id,
                    ),
                ),
            );
            query_posts($args);
            if (have_posts()):
                while (have_posts()):
                    the_post();
                    $products_post_link = get_the_permalink();
                    $products_post_title = get_the_title();
                    if ($term_slug != 'item-big-data') {
                        $our_item_products_html .= '<a href="' . $products_post_link . '">' . $products_post_title . '</a>';
                    }
                endwhile;
            endif;
            wp_reset_query();
        }
    }
    $slider_html .= '<div class="swiper-slide banner-item banner-item-4"><a><img src="'. of_get_option('slider_homepage_4').'"></a></div>';
    return array(
        'slider' => $slider_html,
        'post_list' => $our_item_products_html,
    );
}


function getCustomCategoryInPost(){
    $post = get_post( $post->ID );
    $post_type = $post->post_type;
    $taxonomies = get_object_taxonomies( $post_type, 'objects' );
    foreach ( $taxonomies as $taxonomy_slug => $taxonomy ){
        $term_list = wp_get_post_terms($post->ID, $taxonomy_slug, array("fields" => "all"));
    }
}



function get_my_firendlinks(){
	$my_friend_links = of_get_option('friend_links');
	if($my_friend_links){
	    $my_keys = explode("\n", $my_friend_links);
	    foreach ($my_keys as $my_value) {
	        $my_value = explode(" ", $my_value );
	        echo '<li><a href="'.trim($my_value[1]).'" title="'.esc_attr(trim($my_value[0])).'" target="_blank">'.trim($my_value[0]).'</a></li>';
	    }
	}
}


function header_nav_menu(){
    $defaults = array(
        'theme_location' => 'header_menu',//用于在调用导航菜单时指定注册过的某一个导航菜单名，如果没有指定，则显示第一个
        'container' => 'div',//最外层容器标签名
        'container_class' => 'menu-header_menu-container',//最外层容器class名
        'container_id' => '',//最外层容器id值
        'menu_class' => 'menu',//ul 节点的 class 属性值。
        'menu_id' => 'menu-header_menu',//ul 节点的 id 属性值。
       
    );
    wp_nav_menu( $defaults );
}


