<?php
// if( !function_exists('storefront_add_new_page') ){
// 	function storefront_add_new_page($new_page_title,$new_page_slug,$new_page_template){
// 		if (is_admin()){
// 			if($new_page_template===''){
// 				$new_page_template = 'template-parts/page/page-'.$new_page_slug.'.php';
// 			};
// 			$page_check = get_page_by_title($new_page_title);
// 			$new_page = array(
// 				'post_type' => 'page',
// 				'post_title' => $new_page_title,
// 				'post_status' => 'publish',
// 				'post_author' => 1,
// 				'post_name' => $new_page_slug,
// 			);
// 			if(!isset($page_check->ID)){
// 				$new_page_id = wp_insert_post($new_page);
// 				if(!empty($new_page_template)){
// 					update_post_meta($new_page_id, '_wp_page_template', $new_page_template);
// 				}
// 			}
// 		}
// 	}
// }