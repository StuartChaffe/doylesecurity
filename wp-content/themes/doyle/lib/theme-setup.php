<?php

/**
 * Add theme support
 */
function origin_theme_setup() {
    add_theme_support( 'title-tag' );
    add_theme_support( 'post-thumbnails', array( 'post', 'case-study', 'team', 'page' ) );
	add_theme_support( 'disable-custom-font-sizes' );
    add_theme_support( 'html5', array( 'comment-list', 'comment-form', 'search-form', 'gallery', 'caption' ) );
}
add_action('after_setup_theme','origin_theme_setup');


/**
 * Tidy up head
 */
remove_action( 'wp_head', 'rsd_link' );
remove_action( 'wp_head', 'wp_generator' );
remove_action( 'wp_head', 'feed_links', 2  );
remove_action( 'wp_head', 'feed_links_extra', 3 );
remove_action( 'wp_head', 'index_rel_link' );
remove_action( 'wp_head', 'wlwmanifest_link') ;
remove_action( 'wp_head', 'start_post_rel_link', 10, 0 );
remove_action( 'wp_head', 'parent_post_rel_link', 10, 0 );
remove_action( 'wp_head', 'adjacent_posts_rel_link', 10, 0 );
remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
remove_action( 'wp_print_styles', 'print_emoji_styles' );
remove_action( 'wp_head', 'rest_output_link_wp_head', 10 );
remove_action( 'wp_head', 'wp_oembed_add_discovery_links', 10 );



/**
 * Add no-js class to body
 */

function origin_no_js_body_classes( $classes ) {
    return array_merge( $classes, array( 'no-js' ) );
}
add_filter( 'body_class', 'origin_no_js_body_classes', 20 );



/**
 * Tidy up body classes
 */
function origin_clean_body_classes( $classes ) {
    $allowed_classes = [
        'single',
		'single-post',
		'error404',
        'page',
        'archive',
        'admin-bar',
        'no-js',
    ];
    return array_intersect( $classes, $allowed_classes );
}
add_filter( 'body_class', 'origin_clean_body_classes', 20 );



/**
 * Remove the default WordPress Gutenberg junk added by WP 5.9
 */
add_action('after_setup_theme', function() {
	// remove SVG and global styles
	remove_action('wp_enqueue_scripts', 'wp_enqueue_global_styles');

	// remove wp_footer actions which add's global inline styles
	remove_action('wp_footer', 'wp_enqueue_global_styles', 1);

	// remove render_block filters which adding unnecessary stuff
	remove_filter('render_block', 'wp_render_duotone_support');
	remove_filter('render_block', 'wp_restore_group_inner_container');
	remove_filter('render_block', 'wp_render_layout_support_flag');
});



/**
 * Editor formats
 */
function add_style_select_buttons( $buttons ) {
	array_unshift( $buttons, 'styleselect' );
	return $buttons;
}
add_filter( 'mce_buttons_2', 'add_style_select_buttons' );
function my_custom_styles( $init_array ) {  
	$style_formats = array(  
		array(  
			'title' => 'Paragraph lead',  
			'block' => 'p',  
			'classes' => 'lead',
			'wrapper' => false,
		), 
		array(  
			'title' => 'Red button',  
			'block' => 'span',  
			'classes' => 'btn',
			'wrapper' => false,
		),  
		array(  
			'title' => 'White button',  
			'block' => 'span',  
			'classes' => 'btn btn--secondary',
			'wrapper' => false,
		), 
		array(  
			'title' => 'Border button',  
			'block' => 'span',  
			'classes' => 'btn btn--outline',
			'wrapper' => false,
		),  
	);  
	// Insert the array, JSON ENCODED, into 'style_formats'
	$init_array['style_formats'] = json_encode( $style_formats );  

	return $init_array;  

	} 
// Attach callback to 'tiny_mce_before_init' 
add_filter( 'tiny_mce_before_init', 'my_custom_styles' );

// Remove comments 

// Removes from admin menu
add_action( 'admin_menu', 'pk_remove_admin_menus' );
function pk_remove_admin_menus() {
	remove_menu_page( 'edit-comments.php' );
}

// Removes from post and pages
add_action('init', 'pk_remove_comment_support', 100);
function pk_remove_comment_support() {
	remove_post_type_support( 'post', 'comments' );
	remove_post_type_support( 'page', 'comments' );
}

// Removes from admin bar
add_action( 'wp_before_admin_bar_render', 'pk_remove_comments_admin_bar' );
function pk_remove_comments_admin_bar() {
	global $wp_admin_bar;
	$wp_admin_bar->remove_menu('comments');
}

// Add excert to pages
add_post_type_support( 'page', 'excerpt' );


add_filter( 'body_class', 'custom_class' );
function custom_class( $classes ) {
    if ( is_page_template( 'single.php' ) ) {
        $classes[] = 'example';
    }
    return $classes;
}


function my_password_form() {
    global $post;
    $label = 'pwbox-'.( empty( $post->ID ) ? rand() : $post->ID );
    $o = '<form action="' . esc_url( site_url( 'wp-login.php?action=postpass', 'login_post' ) ) . '" method="post" class="post-password-form">
    ' . __( "This content is password protected.<br /> To view it please enter your password below:" ) . '
    <p><label for="' . $label . '">' . __( "Password:" ) . ' </label><input name="post_password" id="' . $label . '" type="password" size="20" maxlength="20" /><input type="submit" name="Submit" value="' . esc_attr__( "Submit" ) . '" /></p>
    </form>
    ';
    return $o;
}
add_filter( 'the_password_form', 'my_password_form' );

add_filter( 'protected_title_format', 'remove_protected_text' );
	function remove_protected_text() {
	return __('%s');
}