<?php
/**
 * Storefront Class
 *
 * @author   WooThemes
 * @since    2.0.0
 * @package  storefront
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

if ( ! class_exists( 'Storefront' ) ) :

	/**
	 * The main Storefront class
	 */
	class Storefront {

		private static $structured_data;

		/**
		 * Setup class.
		 *
		 * @since 1.0
		 */
		public function __construct() {
			add_action( 'after_setup_theme',          array( $this, 'setup' ) );
			add_action( 'widgets_init',               array( $this, 'widgets_init' ) );
			add_action( 'wp_enqueue_scripts',         array( $this, 'child_scripts' ), 30 );
			add_filter( 'body_class',                 array( $this, 'body_classes' ) );
			add_filter( 'wp_page_menu_args',          array( $this, 'page_menu_args' ) );
			add_filter( 'navigation_markup_template', array( $this, 'navigation_markup_template' ) );
		}

		/**
		 * Sets up theme defaults and registers support for various WordPress features.
		 *
		 * Note that this function is hooked into the after_setup_theme hook, which
		 * runs before the init hook. The init hook is too late for some features, such
		 * as indicating support for post thumbnails.
		 */
		public function setup() {
			/*
			 * Load Localisation files.
			 *
			 * Note: the first-loaded translation file overrides any following ones if the same translation is present.
			 */

			// Loads wp-content/languages/themes/storefront-it_IT.mo.
			load_theme_textdomain( 'storefront', trailingslashit( WP_LANG_DIR ) . 'themes/' );

			// Loads wp-content/themes/child-theme-name/languages/it_IT.mo.
			load_theme_textdomain( 'storefront', get_stylesheet_directory() . '/languages' );

			// Loads wp-content/themes/storefront/languages/it_IT.mo.
			load_theme_textdomain( 'storefront', get_template_directory() . '/languages' );

			/**
			 * Add default posts and comments RSS feed links to head.
			 */
			add_theme_support( 'automatic-feed-links' );

			/*
			 * Enable support for Post Thumbnails on posts and pages.
			 *
			 * @link http://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
			 */
			add_theme_support( 'post-thumbnails' );

			/**
			 * Enable support for site logo
			 */
			add_theme_support( 'custom-logo', array(
				'height'      => 60,
				'width'       => 282,
				'flex-width'  => true,
			) );

			// This theme uses wp_nav_menu() in two locations.
			register_nav_menus( array(
				'primary'   => __( 'Primary Menu', 'storefront' ),
				'secondary' => __( 'Secondary Menu', 'storefront' ),
				'handheld'  => __( 'Handheld Menu', 'storefront' ),
			) );

			/*
			 * Switch default core markup for search form, comment form, comments, galleries, captions and widgets
			 * to output valid HTML5.
			 */
			add_theme_support( 'html5', array(
				'search-form',
				'comment-form',
				'comment-list',
				'gallery',
				'caption',
				'widgets',
			) );

			// Setup the WordPress core custom background feature.
			add_theme_support( 'custom-background', apply_filters( 'storefront_custom_background_args', array(
				'default-color' => apply_filters( 'storefront_default_background_color', 'ffffff' ),
				'default-image' => '',
			) ) );

			/**
			 *  Add support for the Site Logo plugin and the site logo functionality in JetPack
			 *  https://github.com/automattic/site-logo
			 *  http://jetpack.me/
			 */
			add_theme_support( 'site-logo', array( 'size' => 'full' ) );

			// Declare WooCommerce support.
			add_theme_support( 'woocommerce' );

			// Declare support for selective refreshing of widgets.
			add_theme_support( 'customize-selective-refresh-widgets' );
		}

		/**
		 * Register widget area.
		 *
		 * @link http://codex.wordpress.org/Function_Reference/register_sidebar
		 */
		public function widgets_init() {
			$sidebar_args['sidebar'] = array(
				'name'          => __( 'Sidebar', 'storefront' ),
				'id'            => 'sidebar-1',
				'description'   => ''
			);

			$sidebar_args['header'] = array(
				'name'        => __( 'Below Header', 'storefront' ),
				'id'          => 'header-1',
				'description' => __( 'Widgets added to this region will appear beneath the header and above the main content.', 'storefront' ),
			);

			$footer_widget_regions = apply_filters( 'storefront_footer_widget_regions', 4 );

			for ( $i = 1; $i <= intval( $footer_widget_regions ); $i++ ) {
				$footer = sprintf( 'footer_%d', $i );

				$sidebar_args[ $footer ] = array(
					'name'        => sprintf( __( 'Footer %d', 'storefront' ), $i ),
					'id'          => sprintf( 'footer-%d', $i ),
					'description' => sprintf( __( 'Widgetized Footer Region %d.', 'storefront' ), $i )
				);
			}

			foreach ( $sidebar_args as $sidebar => $args ) {
				$widget_tags = array(
					'before_widget' => '<div id="%1$s" class="widget %2$s">',
					'after_widget'  => '</div>',
					'before_title'  => '<span class="gamma widget-title">',
					'after_title'   => '</span>'
				);

				/**
				 * Dynamically generated filter hooks. Allow changing widget wrapper and title tags. See the list below.
				 *
				 * 'storefront_header_widget_tags'
				 * 'storefront_sidebar_widget_tags'
				 *
				 * storefront_footer_1_widget_tags
				 * storefront_footer_2_widget_tags
				 * storefront_footer_3_widget_tags
				 * storefront_footer_4_widget_tags
				 */
				$filter_hook = sprintf( 'storefront_%s_widget_tags', $sidebar );
				$widget_tags = apply_filters( $filter_hook, $widget_tags );

				if ( is_array( $widget_tags ) ) {
					register_sidebar( $args + $widget_tags );
				}
			}
		}

		/**
		 * Enqueue scripts and styles.
		 *
		 * @since  1.0.0
		 */
		public function scripts() {
			global $storefront_version;
		}

		/**
		 * Enqueue child theme stylesheet.
		 * A separate function is required as the child theme css needs to be enqueued _after_ the parent theme
		 * primary css and the separate WooCommerce css.
		 *
		 * @since  1.5.3
		 */
		public function child_scripts() {
			if ( is_child_theme() ) {
				wp_enqueue_style( 'storefront-child-style', get_stylesheet_uri(), '' );
			}
		}

		/**
		 * Get our wp_nav_menu() fallback, wp_page_menu(), to show a home link.
		 *
		 * @param array $args Configuration arguments.
		 * @return array
		 */
		public function page_menu_args( $args ) {
			$args['show_home'] = true;
			return $args;
		}

		/**
		 * Adds custom classes to the array of body classes.
		 *
		 * @param array $classes Classes for the body element.
		 * @return array
		 */
		public function body_classes( $classes ) {
			// Adds a class of group-blog to blogs with more than 1 published author.
			if ( is_multi_author() ) {
				$classes[] = 'group-blog';
			}

			if ( ! function_exists( 'woocommerce_breadcrumb' ) ) {
				$classes[]	= 'no-wc-breadcrumb';
			}

			/**
			 * What is this?!
			 * Take the blue pill, close this file and forget you saw the following code.
			 * Or take the red pill, filter storefront_make_me_cute and see how deep the rabbit hole goes...
			 */
			$cute = apply_filters( 'storefront_make_me_cute', false );

			if ( true === $cute ) {
				$classes[] = 'storefront-cute';
			}

			// If our main sidebar doesn't contain widgets, adjust the layout to be full-width.
			if ( ! is_active_sidebar( 'sidebar-1' ) ) {
				$classes[] = 'storefront-full-width-content';
			}

			return $classes;
		}

		/**
		 * Custom navigation markup template hooked into `navigation_markup_template` filter hook.
		 */
		public function navigation_markup_template() {
			$template  = '<nav id="post-navigation" class="navigation %1$s" role="navigation" aria-label="Post Navigation">';
			$template .= '<span class="screen-reader-text">%2$s</span>';
			$template .= '<div class="nav-links">%3$s</div>';
			$template .= '</nav>';

			return apply_filters( 'storefront_navigation_markup_template', $template );
		}

		/**
		 * Sets `self::structured_data`.
		 *
		 * @param array $json
		 */
		public static function set_structured_data( $json ) {
			if ( ! is_array( $json ) ) {
				return;
			}

			self::$structured_data[] = $json;
		}

		/**
		 * Sanitizes structured data.
		 *
		 * @param  array $data
		 * @return array
		 */
		public function sanitize_structured_data( $data ) {
			$sanitized = array();

			foreach ( $data as $key => $value ) {
				if ( is_array( $value ) ) {
					$sanitized_value = $this->sanitize_structured_data( $value );
				} else {
					$sanitized_value = sanitize_text_field( $value );
				}

				$sanitized[ sanitize_text_field( $key ) ] = $sanitized_value;
			}

			return $sanitized;
		}
	}
endif;

return new Storefront();
