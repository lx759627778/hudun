<?php
add_action( 'load-themes.php',  'no_category_base_refresh_rules');
add_action('created_category', 'no_category_base_refresh_rules');
add_action('edited_category', 'no_category_base_refresh_rules');
add_action('delete_category', 'no_category_base_refresh_rules');
if( ! function_exists('no_category_base_refresh_rules') ){
	/**
	 * 去除分类标志category
	 * [no_category_base_refresh_rules description]
	 * @return [type] [description]
	 */
	function no_category_base_refresh_rules() {
		global $wp_rewrite;
		$wp_rewrite -> flush_rules();
	}
}

add_action('init', 'no_category_base_permastruct');
if( !function_exists('no_category_base_permastruct') ){
	/**
	 * Remove category base
	 * [no_category_base_permastruct description]
	 * @return [type] [description]
	 */
	function no_category_base_permastruct() {
		global $wp_rewrite, $wp_version;
		if (version_compare($wp_version, '3.4', '<')) {
			// For pre-3.4 support
			$wp_rewrite -> extra_permastructs['category'][0] = '%category%';
		} else {
			$wp_rewrite -> extra_permastructs['category']['struct'] = '%category%';
		}
	}

}


add_filter('category_rewrite_rules', 'no_category_base_rewrite_rules');
if(!function_exists('no_category_base_rewrite_rules')){
	/**
	 * Add our custom category rewrite rules
	 * var_dump($category_rewrite);For Debugging
	 * recursive recursion
	 * [no_category_base_rewrite_rules description]
	 * @param  [type] $category_rewrite [description]
	 * @return [type]                   [description]
	 */
	function no_category_base_rewrite_rules($category_rewrite) {
		$category_rewrite = array();
		$categories = get_categories(array('hide_empty' => false));
		foreach ($categories as $category) {
			$category_nicename = $category -> slug;
			if ($category -> parent == $category -> cat_ID)
				$category -> parent = 0;
			elseif ($category -> parent != 0)
				$category_nicename = get_category_parents($category -> parent, false, '/', true) . $category_nicename;
			$category_rewrite['(' . $category_nicename . ')/(?:feed/)?(feed|rdf|rss|rss2|atom)/?$'] = 'index.php?category_name=$matches[1]&feed=$matches[2]';
			$category_rewrite['(' . $category_nicename . ')/page/?([0-9]{1,})/?$'] = 'index.php?category_name=$matches[1]&paged=$matches[2]';
			$category_rewrite['(' . $category_nicename . ')/?$'] = 'index.php?category_name=$matches[1]';
		}
		// Redirect support from Old Category Base
		global $wp_rewrite;
		$old_category_base = get_option('category_base') ? get_option('category_base') : 'category';
		$old_category_base = trim($old_category_base, '/');
		$category_rewrite[$old_category_base . '/(.*)$'] = 'index.php?category_redirect=$matches[1]';

		//var_dump($category_rewrite); // For Debugging
		return $category_rewrite;
	}

}


add_filter('query_vars', 'no_category_base_query_vars');
if( !function_exists('no_category_base_query_vars') ){
	/**
	 * Add 'category_redirect' query variable
	 * [no_category_base_query_vars description]
	 * @param  [type] $public_query_vars [description]
	 * @return [type]                    [description]
	 */
	function no_category_base_query_vars($public_query_vars) {
		$public_query_vars[] = 'category_redirect';
		return $public_query_vars;
	}

}


add_filter('request', 'no_category_base_request');
if( !function_exists('no_category_base_request') ){
	/**
	 * Redirect if 'category_redirect' is set
	 * print_r($query_vars);For Debugging
	 * [no_category_base_request description]
	 * @param  [type] $query_vars [description]
	 * @return [type]             [description]
	 */
	function no_category_base_request($query_vars) {
		if (isset($query_vars['category_redirect'])) {
			$catlink = trailingslashit(get_option('home')) . user_trailingslashit($query_vars['category_redirect'], 'category');
			status_header(301);
			header("Location: $catlink");
			exit();
		}
		return $query_vars;
	}
}
