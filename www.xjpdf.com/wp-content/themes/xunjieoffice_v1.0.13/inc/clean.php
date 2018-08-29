<?php
function themege_remove_cssjs_ver($src)
{
    if (strpos($src, 'ver=' . get_bloginfo('version'))) {
        $src = remove_query_arg('ver', $src);
    }

    return $src;
}
add_filter('style_loader_src', 'themege_remove_cssjs_ver', 999);
add_filter('script_loader_src', 'themege_remove_cssjs_ver', 999);

function disable_emojis_tinymce($plugins)
{
    if (is_array($plugins)) {
        return array_diff($plugins, array('wpemoji'));
    } else {
        return array();
    }
}
function disable_emojis()
{
    remove_action('wp_head', 'print_emoji_detection_script', 7);
    remove_action('admin_print_scripts', 'print_emoji_detection_script');
    remove_action('wp_print_styles', 'print_emoji_styles');
    remove_action('admin_print_styles', 'print_emoji_styles');
    remove_filter('the_content_feed', 'wp_staticize_emoji');
    remove_filter('comment_text_rss', 'wp_staticize_emoji');
    remove_filter('wp_mail', 'wp_staticize_emoji_for_email');
    add_filter('tiny_mce_plugins', 'disable_emojis_tinymce');
}
add_action('init', 'disable_emojis');
function remove_dns_prefetch($hints, $relation_type)
{
    if ('dns-prefetch' === $relation_type) {
        return array_diff(wp_dependencies_unique_hosts(), $hints);
    }
    return $hints;
}
add_filter('wp_resource_hints', 'remove_dns_prefetch', 10, 2);

function disable_embeds_init()
{
    global $wp;
    $wp->public_query_vars = array_diff($wp->public_query_vars, array(
        'embed',
    ));
    remove_action('rest_api_init', 'wp_oembed_register_route');
    add_filter('embed_oembed_discover', '__return_false');
    add_filter('rest_enabled', '_return_false');
    add_filter('rest_jsonp_enabled', '_return_false');
    remove_filter('oembed_dataparse', 'wp_filter_oembed_result', 10);
    remove_action('wp_head', 'wp_oembed_add_discovery_links');
    remove_action('wp_head', 'wp_oembed_add_host_js');
    add_filter('tiny_mce_plugins', 'disable_embeds_tiny_mce_plugin');
    add_filter('rewrite_rules_array', 'disable_embeds_rewrites');
}
add_action('init', 'disable_embeds_init', 9999);
function disable_embeds_tiny_mce_plugin($plugins)
{
    return array_diff($plugins, array('wpembed'));
}

function disable_embeds_rewrites($rules)
{
    foreach ($rules as $rule => $rewrite) {
        if (false !== strpos($rewrite, 'embed=true')) {
            unset($rules[$rule]);
        }
    }
    return $rules;
}

function register_theme_settings()
{
    register_setting("theme_mods_freshblog", "theme_mods_freshblog");
}

function wpjam_id_manage_posts_columns($columns)
{
    $columns['post_id'] = 'ID';
    return $columns;
}
add_filter('manage_pages_columns', 'wpjam_id_manage_posts_columns');

function wpjam_id_manage_posts_custom_column($column_name, $id)
{
    if ($column_name == 'post_id') {
        echo $id;
    }
}
add_action('manage_pages_custom_column', 'wpjam_id_manage_posts_custom_column', 10, 2);

function disable_embeds_remove_rewrite_rules()
{
    add_filter('rewrite_rules_array', 'disable_embeds_rewrites');
    flush_rewrite_rules();
}
register_activation_hook(__FILE__, 'disable_embeds_remove_rewrite_rules');

function disable_embeds_flush_rewrite_rules()
{
    remove_filter('rewrite_rules_array', 'disable_embeds_rewrites');
    flush_rewrite_rules();
}
register_deactivation_hook(__FILE__, 'disable_embeds_flush_rewrite_rules');

function themege_remove_open_sans()
{
    wp_deregister_style('open-sans');
    wp_register_style('open-sans', false);
    wp_enqueue_style('open-sans', '');
}
add_action('init', 'themege_remove_open_sans');
/**
 * 移除头部无用信息
 */
function Bing_remove_head_refuse()
{
    remove_action('wp_head', 'wp_generator');
    remove_action('wp_head', 'index_rel_link');
    remove_action('wp_head', 'parent_post_rel_link', 10);
    remove_action('wp_head', 'start_post_rel_link', 10);
    remove_action('wp_head', 'adjacent_posts_rel_link_wp_head', 10);
    remove_action('wp_head', 'feed_links', 2);
    remove_action('wp_head', 'feed_links_extra', 3);
    remove_action('wp_head', 'rsd_link');
    remove_action('wp_head', 'wlwmanifest_link');
    remove_action('wp_head', 'rest_output_link_wp_head', 10);
}
add_action('init', 'Bing_remove_head_refuse');
function Bing_admin_lettering()
{
    echo '<style type="text/css">
		body{ font-family:"Lantinghei SC","Open Sans",Arial,"Hiragino Sans GB","Microsoft YaHei","微软雅黑","STHeiti","WenQuanYi Micro Hei",SimSun,sans-serif !important;}
	</style>';
}
add_action('admin_head', 'Bing_admin_lettering');

// 修改 wp 底部版本号
function modify_footer_version()
{
    return ' ';
}
add_filter('update_footer', 'modify_footer_version', 9999);

// 移除 wp 底部信息
function remove_footer_admin()
{
    echo ' ';
}
add_filter('admin_footer_text', 'remove_footer_admin');

// 移除 wp logo
function custom_logo()
{
    echo '<style type="text/css">
    #wp-admin-bar-wp-logo { display: none !important; }
    </style>';
}
add_action('admin_head', 'custom_logo');
