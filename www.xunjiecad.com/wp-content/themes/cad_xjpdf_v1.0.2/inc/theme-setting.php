<?php
add_action('admin_menu', 'mytheme_page');
function mytheme_page (){
	if ( count($_POST) > 0 && isset($_POST['mytheme_settings']) ){
		$options = array ('keywords','description','analytics','firendlinks');
		foreach ( $options as $opt ){
			delete_option ( 'mytheme_'.$opt, $_POST[$opt] );
			add_option ( 'mytheme_'.$opt, $_POST[$opt] );
		}
	}
	add_theme_page(__('主题设置'), __('主题设置'), 'edit_themes', basename(__FILE__), 'mytheme_settings');
}
function mytheme_settings(){
	require_once dirname(__FILE__) . "/theme-setting-page.php";
}

function get_my_firendlinks(){
	$my_friend_links = get_option('mytheme_firendLinks');
	if($my_friend_links){
	    $my_keys = explode("\n", $my_friend_links);
	    foreach ($my_keys as $my_value) {
	        $my_value = explode(" ", $my_value );
	        echo '<li><a href="'.trim($my_value[1]).'" title="'.esc_attr(trim($my_value[0])).'" target="_blank">'.trim($my_value[0]).'</a></li>';
	    }
	}
}