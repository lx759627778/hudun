<?php

add_action('init', 'vianrouge_post_type');
function vianrouge_post_type() {
	register_post_type( 'dailypic',
		array(
			'labels' => array(
				'name' => '每日一图',
				'singular_name' => '每日一图',
				'add_new' => '添加',
				'add_new_item' => '添加',
				'edit_item' => '编辑',
				'new_item' => '新的',
      ),
		'public' => true,
		'publicly_queryable' => true,
		'show_ui' => true,
		'show_in_menu' => true,
		'query_var' => true,
		'rewrite' => array('slug'=>'dailypics'),
		'capability_type' => 'post',
		'has_archive' => true,
		'hierarchical' => false,
		'menu_position' => 8,
        'taxonomies'=> array('post_tag'),
		'supports' => array('title','editor','thumbnail','custom-fields'),
		'map_meta_cap' => true
		)
	);
	$labels = array(
		'name' => '每日一图分类',
		'singular_name' => '每日一图分类',
		'parent_item' => null,
		'parent_item_colon' => null,
		'edit_item' => '编辑',
		'add_new_item' => '添加',
		'new_item_name' => '每日一图分类',
		'menu_name' => '每日一图分类',
	);
	register_taxonomy(
		'dailypics',
		array('dailypic'),
		array(
			'hierarchical' => true,
			'labels' => $labels,
			'show_ui' => true,
			'query_var' => true
		)
	);
}

// 添加一个动作 admin 初始化时调起， add_action( 'admin_init', 'remove_meta_boxes' );

add_action( 'admin_init', 'remove_meta_boxes' );
function remove_meta_boxes(){
    remove_meta_box( 'postcustom', 'dailypic', 'normal' );
}
add_action( 'admin_init', 'storefront_daily_pic_admin' );
function storefront_daily_pic_admin() {
    add_meta_box(
    	'daily_pic_meta_box',
        __('基本信息', 'storefront'),
        'storefront_display_daily_pic_meta_box',
        'dailypic',
        'normal',
        'high'
    );
}
function storefront_display_daily_pic_meta_box( $daily_pic ) {
    $daily_pic_size = esc_html( get_post_meta( $daily_pic->ID, 'daily_pic_size', true ) );
    $daily_pic_type = esc_html( get_post_meta( $daily_pic->ID, 'daily_pic_type', true ) );
    $daily_pic_rating = intval( get_post_meta( $daily_pic->ID, 'daily_pic_rating', true ) );
    $daily_pic_download_times = intval( get_post_meta( $daily_pic->ID, 'daily_pic_download_times', true ) );
    $post_views_count = intval( get_post_meta( $daily_pic->ID, 'post_views_count', true ) );
    $daily_pic_download_link = esc_html( get_post_meta( $daily_pic->ID, 'daily_pic_download_link', true ) );
    include ('storefront-post-types-metabox-page.php');
}

add_action( 'save_post', 'storefront_add_daily_pic_fields', 10, 2 );
function storefront_add_daily_pic_fields( $daily_pic_id, $daily_pic ) {
    if ( $daily_pic->post_type == 'dailypic' ) {
        if ( isset( $_POST['daily_pic_size'] ) && $_POST['daily_pic_size'] != '' ) {
            update_post_meta( $daily_pic_id, 'daily_pic_size', $_POST['daily_pic_size'] );
        }
        if ( isset( $_POST['daily_pic_type'] ) && $_POST['daily_pic_type'] != '' ) {
            update_post_meta( $daily_pic_id, 'daily_pic_type', $_POST['daily_pic_type'] );
        }
        if ( isset( $_POST['daily_pic_download_times'] ) && $_POST['daily_pic_download_times'] != '' ) {
            update_post_meta( $daily_pic_id, 'daily_pic_download_times', $_POST['daily_pic_download_times'] );
        }
        if ( isset( $_POST['post_views_count'] ) && $_POST['post_views_count'] != '' ) {
            update_post_meta( $daily_pic_id, 'post_views_count', $_POST['post_views_count'] );
        }
        if ( isset( $_POST['daily_pic_download_link'] ) && $_POST['daily_pic_download_link'] != '' ) {
            update_post_meta( $daily_pic_id, 'daily_pic_download_link', $_POST['daily_pic_download_link'] );
        }
        if ( isset( $_POST['daily_pic_rating'] ) && $_POST['daily_pic_rating'] != '' ) {
            update_post_meta( $daily_pic_id, 'daily_pic_rating', $_POST['daily_pic_rating'] );
        }
    }
}

//指定 自定义类型文章 single 页面 模板
add_filter( 'template_include', 'storefront_daily_pic_single_template', 1 );
function storefront_daily_pic_single_template( $template_path ) {
    if ( get_post_type() == 'daily_pic' ) {
        if ( is_single() ) {
            if ( $theme_file = locate_template( array ( 'single-dailypic.php' ) ) ) {
                $template_path = $theme_file;
            } else {
            	global $mySRC;
                $template_path =  $mySRC .'/single-dailypic.php';
            }
        }
    }
    return $template_path;
}

$storefront_custom_post_types = array(
    'dailypic' => 'dailypics'
);

add_filter('post_type_link', 'storefront_custom_post_type_link', 1, 3);
function storefront_custom_post_type_link( $link, $post = 0 ){
    global $storefront_custom_post_types;
    if ( in_array( $post->post_type,array_keys($storefront_custom_post_types) ) ){
        return home_url( $storefront_custom_post_types[$post->post_type].'/' . $post->ID .'.html' );
    } else {
        return $link;
    }
}
add_action( 'init', 'storefront__custom_post_type_rewrites_init' );
function storefront__custom_post_type_rewrites_init(){
    global $storefront_custom_post_types;
    foreach( $storefront_custom_post_types as $k => $v ) {
        add_rewrite_rule(
            $v.'/([0-9]+)?.html$',
            'index.php?post_type='.$k.'&p=$matches[1]',
            'top'
        );
        add_rewrite_rule(
            $v.'/([0-9]+)?.html/comment-page-([0-9]{1,})$',
            'index.php?post_type='.$k.'&p=$matches[1]&cpage=$matches[2]',
            'top'
        );
    }
}

add_action('wp_ajax_nopriv_dailypic_download_times', 'dailypic_download_times');
add_action('wp_ajax_dailypic_download_times', 'dailypic_download_times');
function dailypic_download_times(){
    global $wpdb,$post;
    $id = $_POST["um_id"];
    $action = $_POST["um_action"];
    if ( $action == 'download'){
        $specs_raters = get_post_meta($id,'daily_pic_download_times',true);
        $expire = time() + 99999999;
        $domain = ($_SERVER['HTTP_HOST'] != 'localhost') ? $_SERVER['HTTP_HOST'] : false;
        setcookie('daily_pic_download_times_'.$id,$id,$expire,'/',$domain,false);
        if (!$specs_raters || !is_numeric($specs_raters)) {
            update_post_meta($id, 'daily_pic_download_times', 1);
        }
        else {
            update_post_meta($id, 'daily_pic_download_times', ($specs_raters + 1));
        }
        echo get_post_meta($id,'daily_pic_download_times',true);
    }
    die;
}
