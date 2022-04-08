<?php

/**
 * Adds an indicator to top of admin to show whether you're on staging or production
 * Inspired by https://github.com/johnbillion/vip-go-indicator/blob/master/vip-go-indicator.php
 */



/**
 * Returns environment colour
 */
function origin_get_environment_color( $env ) {
	switch ( $env ) {
		case 'local':
		case 'development':
			$color = '#555';
			break;

		case 'staging':
			$color = '#d80';
			break;

		case 'production':
		default:
			$color = '#f00';
			break;
	}

	return $color;
}



/**
 * Adds the environment menu item to the admin toolbar
 */
function origin_admin_bar_menu( WP_Admin_Bar $wp_admin_bar ) {
	$env = wp_get_environment_type();

	$wp_admin_bar->add_node( [
		'title'  => esc_html( ucwords( $env ) ),
		'id'     => 'env-indicator',
		'parent' => 'top-secondary',
		'meta'   => [
			'class' => 'env-indicator',
		],
	] );
}
add_action( 'admin_bar_menu', 'origin_admin_bar_menu', 1 );





/**
 * Adds the CSS to the head
 *
 * @return void
 */
function origin_indicator_head() {
	$color = origin_get_environment_color( wp_get_environment_type() );
	?>
	<style type="text/css">
		#wpadminbar .env-indicator .ab-item {
			background-color: <?php echo esc_html( $color ); ?> !important;
			color: #eee !important;
		}
	</style>
	<?php
}
add_action( 'admin_head', 'origin_indicator_head' );
add_action( 'wp_head', 'origin_indicator_head' );
