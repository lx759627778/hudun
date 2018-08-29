<?php
add_action( 'admin_init', 'super_sticky_add_meta_box' );
add_action( 'admin_init', 'super_sticky_admin_init', 20 );
add_action( 'pre_get_posts', 'super_sticky_posts_filter' );

function super_sticky_description() {
	echo '<p>' . __( '让自定义文章类型支持置顶功能' ) . '</p>';
}

function super_sticky_admin_init() {
	register_setting( 'reading', 'sticky_custom_post_types' );
	register_setting( 'reading', 'sticky_custom_post_types_filters' );
	add_settings_section( 'super_sticky_options', __( '置顶自定义文章类型' ), 'super_sticky_description', 'reading' );
	add_settings_field( 'sticky_custom_post_types', __( '在自定义类型文章中显示“置顶选项”' ), 'super_sticky_set_post_types', 'reading', 'super_sticky_options' );
	add_settings_field( 'sticky_custom_post_types_filters', __( '在文章中显示“置顶选项”' ), 'super_sticky_set_filters', 'reading', 'super_sticky_options' );
}

function super_sticky_set_post_types() {
	$post_types = get_post_types( array( '_builtin' => false, 'public' => true ), 'names' );
	if ( ! empty( $post_types ) ) {
		$checked_post_types = super_sticky_post_types();
		foreach ( $post_types as $post_type ) { ?>
			<div><input type="checkbox" id="<?php echo esc_attr( 'post_type_' . $post_type ); ?>" name="sticky_custom_post_types[]" value="<?php echo esc_attr( $post_type ); ?>" <?php checked( in_array( $post_type, $checked_post_types ) ); ?> /> <label for="<?php echo esc_attr( 'post_type_' . $post_type ); ?>"><?php echo esc_html( $post_type ); ?></label></div><?php
		}
	} else {
		echo '<p>' . __( '未发现已发布的自定义文章类型' ) . '</p>';
	}
}
function super_sticky_set_filters() { ?>
	<span><input type="checkbox" id="sticky_custom_post_types_filters_home" name="sticky_custom_post_types_filters[]" value="home" <?php checked( super_sticky_filter( 'home' ) ); ?> /> <label for="sticky_custom_post_types_filters_home">home</label></span><?php
}

function super_sticky_filter( $query_type ) {
	$filters = (array) get_option( 'sticky_custom_post_types_filters', array() );

	return in_array( $query_type, $filters );
}

function super_sticky_post_types() {
	return (array) get_option( 'sticky_custom_post_types', array() );
}

function super_sticky_meta() { ?>
	<input id="super-sticky" name="sticky" type="checkbox" value="sticky" <?php checked( is_sticky() ); ?> /> <label for="super-sticky" class="selectit"><?php _e( '置顶这篇文章' ) ?></label><?php
}

function super_sticky_add_meta_box() {
	if( ! current_user_can( 'edit_others_posts' ) )
		return;

	foreach( super_sticky_post_types() as $post_type )
		add_meta_box( 'super_sticky_meta', __( '置顶' ), 'super_sticky_meta', $post_type, 'side', 'high' );
}

function super_sticky_posts_filter( $query ) {
	if ( $query->is_main_query() && $query->is_home() && ! $query->get( 'suppress_filters' ) && super_sticky_filter( 'home' ) ) {

		$super_sticky_post_types = super_sticky_post_types();

		if ( ! empty( $super_sticky_post_types ) ) {
			$post_types = array();

			$query_post_type = $query->get( 'post_type' );

			if ( empty( $query_post_type ) ) {
				$post_types[] = 'post';
			} elseif ( is_string( $query_post_type ) ) {
				$post_types[] = $query_post_type;
			} elseif ( is_array( $query_post_type ) ) {
				$post_types = $query_post_type;
			} else {
				return;
			}

			$post_types = array_merge( $post_types, $super_sticky_post_types );

			$query->set( 'post_type', $post_types );
		}
	}
}