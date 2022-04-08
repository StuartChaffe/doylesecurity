<?php

/**
 * Enqueue JS and CSS
 */
function origin_scripts() {
	if ( !is_admin() ) {
		wp_enqueue_style( 'styles', mix( 'assets/css/styles.css' ), array(), null );

		wp_register_script( 'scripts', get_template_directory_uri().'/assets/js/scripts.js', array( 'jquery' ), null, true );
		wp_enqueue_script( 'scripts' );
	}
}
add_action( 'wp_enqueue_scripts', 'origin_scripts', 100 );



/**
 * Remove wp-embed.js
 */
function origin_deregister_scripts() {
	if ( !is_admin() ) {
		wp_deregister_script( 'wp-embed' );
	}
}
add_action( 'wp_print_scripts', 'origin_deregister_scripts', 100);



/**
 * Remove jquery-migrate.js
 */
function origin_deregister_jquery_migrate( $scripts ) {
	if ( ! is_admin() && ! empty( $scripts->registered['jquery'] ) ) {
		$jquery_dependencies = $scripts->registered['jquery']->deps;
		$scripts->registered['jquery']->deps = array_diff( $jquery_dependencies, array( 'jquery-migrate' ) );
	}
}
add_action( 'wp_default_scripts', 'origin_deregister_jquery_migrate' );



/**
 * Gets the path to a versioned Mix file in a theme.
 * Source: https://github.com/mindkomm/theme-lib-mix
 */
function mix( $path, $manifest_directory = 'assets' ) {
	static $manifest;
	static $manifest_path;

	if ( ! $manifest_path ) {
		$manifest_path = get_theme_file_path( $manifest_directory . '/mix-manifest.json' );
	}

	// Bailout if manifest couldn’t be found
	if ( ! file_exists( $manifest_path ) ) {
		return get_theme_file_uri( $path );
	}

	if ( ! $manifest ) {
		// @codingStandardsIgnoreLine
		$manifest = json_decode( file_get_contents( $manifest_path ), true );
	}

	// Remove manifest directory from path
	$path = str_replace( $manifest_directory, '', $path );
	// Make sure there’s a leading slash
	$path = '/' . ltrim( $path, '/' );

	// Bailout with default theme path if file could not be found in manifest
	if ( ! array_key_exists( $path, $manifest ) ) {
		return get_theme_file_uri( $path );
	}

	// Get file URL from manifest file
	$path = $manifest[ $path ];
	// Make sure there’s no leading slash
	$path = ltrim( $path, '/' );

	return get_theme_file_uri( trailingslashit( $manifest_directory ) . $path );
}
