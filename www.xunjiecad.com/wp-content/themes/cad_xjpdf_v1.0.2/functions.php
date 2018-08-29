<?php
$theme = wp_get_theme( 'storefront' );
$storefront_version = $theme['Version'];
if ( ! isset( $content_width ) ) {
	$content_width = 980;
}
$storefront = (object) array(
	'version' => $storefront_version,
	'main'       => require 'inc/class-storefront.php',
);
require 'inc/storefront-clean.php';
require 'inc/storefront-functions.php';
require 'inc/storefront-template-hooks.php';
require 'inc/storefront-template-functions.php';
require 'inc/storefront-my-add.php';
require 'inc/storefront-post-types.php';
require 'inc/storefront-sticky-custom-post-types.php';
require 'inc/storefront-create-pages.php';
require 'inc/storefront-no-category.php';
require 'inc/storefront-my-meta-box.php';
require 'inc/theme-setting.php';