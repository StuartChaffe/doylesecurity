<?php

add_action( 'init', 'cp_change_post_object' );
// Change dashboard Posts to Newsmedia-text
function cp_change_post_object() {
    $get_post_type = get_post_type_object('post');
    $labels = $get_post_type->labels;
        $labels->name = 'News';
        $labels->singular_name = 'News';
        $labels->add_new = 'Add News';
        $labels->add_new_item = 'Add News';
        $labels->edit_item = 'Edit News';
        $labels->new_item = 'News';
        $labels->view_item = 'View News';
        $labels->search_items = 'Search News';
        $labels->not_found = 'No News found';
        $labels->not_found_in_trash = 'No News found in Trash';
        $labels->all_items = 'All News';
        $labels->menu_name = 'News';
        $labels->name_admin_bar = 'News';
}

add_action('init', 'origin_cpts');

function origin_cpts() {
	$post_type_name = "case-study";
	$single_name    = "Case Study";
	$plural_name    = "Case studies";
	$icon           = "dashicons-format-aside";
	$gutenberg_enabled	= true;

	$post_type_options = array(
	    'label'                 => $single_name,
	    'public'                => true,
	    'menu_icon'             => $icon,
	    'show_ui'               => true,
	    'show_in_menu'          => true,
	    'capability_type'       => 'post',
	    'hierarchical'          => true,
	    'rewrite'               => array(
	        'slug'                  => 'case-studies',
	        'with_front'            => '0'
	    ),
	    'query_var'             => true,
	    'has_archive'           => false,
		'show_in_rest'			=> $gutenberg_enabled,
	    'supports'              => array(
	        'title',
	        'editor',
			'excerpt',
	        'revisions',
	        'thumbnail',
	        'author',
	        'page-attributes',
	    ),
	    'labels'                => array(
	        'name'                  => $plural_name,
	        'singular_name'         => $single_name,
	        'menu_name'             => $plural_name,
	        'add_new'               => 'Add ' . $single_name,
	        'add_new_item'          => 'Add New ' . $single_name,
	        'edit'                  => 'Edit',
	        'edit_item'             => 'Edit ' . $single_name,
	        'new_item'              => 'New '. $single_name,
	        'view'                  => 'View '. $single_name,
	        'view_item'             => 'View '. $single_name,
	        'search_items'          => 'Search ' . $plural_name,
	        'not_found'             => 'No '. $plural_name . ' Found',
	        'not_found_in_trash'    => 'No '. $plural_name .' Found in Trash',
	        'parent'                => 'Parent '. $single_name
	    ),
	);
	register_post_type($post_type_name, $post_type_options);

	$post_type_name		= "careers";
	$single_name		= "Job";
	$plural_name		= "Careers";
	$icon				= "dashicons-groups";
	$gutenberg_enabled	= true;
	
	$post_type_options = array(
	    'label'                 => $single_name,
	    'public'                => true,
	    'menu_icon'             => $icon,
	    'show_ui'               => true,
	    'show_in_menu'          => true,
	    'capability_type'       => 'post',
	    'hierarchical'          => true,
	    'rewrite'               => array(
	        'slug'                  => 'careers',
	        'with_front'            => '0'
	    ),
	    'query_var'             => true,
	    'has_archive'           => false,
		'show_in_rest'			=> $gutenberg_enabled,
	    'supports'              => array(
	        'title',
	        'editor',
			'excerpt',
	        'revisions',
	        'thumbnail',
	        'author',
	        'page-attributes',
	    ),
	    'labels'                => array(
	        'name'                  => $plural_name,
	        'singular_name'         => $single_name,
	        'menu_name'             => $plural_name,
	        'add_new'               => 'Add ' . $single_name,
	        'add_new_item'          => 'Add New ' . $single_name,
	        'edit'                  => 'Edit',
	        'edit_item'             => 'Edit ' . $single_name,
	        'new_item'              => 'New '. $single_name,
	        'view'                  => 'View '. $single_name,
	        'view_item'             => 'View '. $single_name,
	        'search_items'          => 'Search ' . $plural_name,
	        'not_found'             => 'No '. $plural_name . ' Found',
	        'not_found_in_trash'    => 'No '. $plural_name .' Found in Trash',
	        'parent'                => 'Parent '. $single_name
	    ),
	);
	register_post_type($post_type_name, $post_type_options);



	$post_type_name		= "team";
	$single_name		= "Team Member";
	$plural_name		= "Team";
	$icon				= "dashicons-admin-users";
	$gutenberg_enabled	= false;

	$post_type_options = array(
		'label'                 => $single_name,
		'public'                => false,
		'menu_icon'             => $icon,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'capability_type'       => 'post',
		'hierarchical'          => true,
		'rewrite'               => array(
			'slug'                  => '',
			'with_front'            => '0'
		),
		'query_var'             => true,
		'has_archive'           => false,
		'show_in_rest'			=> $gutenberg_enabled,
		'supports'              => array(
			'title',
			'editor',
			'revisions',
			'thumbnail',
			'author',
			'page-attributes',
		),
		'labels'                => array(
			'name'                  => $plural_name,
			'singular_name'         => $single_name,
			'menu_name'             => $plural_name,
			'add_new'               => 'Add ' . $single_name,
			'add_new_item'          => 'Add new ' . $single_name,
			'edit'                  => 'Edit',
			'edit_item'             => 'Edit ' . $single_name,
			'new_item'              => 'New '. $single_name,
			'view'                  => 'View '. $single_name,
			'view_item'             => 'View '. $single_name,
			'search_items'          => 'Search ' . $plural_name,
			'not_found'             => 'No '. $plural_name . ' Found',
			'not_found_in_trash'    => 'No '. $plural_name .' Found in Trash',
			'parent'                => 'Parent '. $single_name
		),
	);
	register_post_type($post_type_name, $post_type_options);

	$post_type_name		= "testimonials";
	$single_name		= "Testimonial";
	$plural_name		= "Testimonials";
	$icon				= "dashicons-format-quote";
	$gutenberg_enabled	= false;

	$post_type_options = array(
	    'label'                 => $single_name,
	    'public'                => true,
	    'menu_icon'             => $icon,
	    'show_ui'               => true,
	    'show_in_menu'          => true,
	    'capability_type'       => 'post',
	    'hierarchical'          => true,
	    'rewrite'               => array(
	        'slug'                  => '',
	        'with_front'            => '0'
	    ),
	    'query_var'             => true,
	    'has_archive'           => false,
		'show_in_rest'			=> $gutenberg_enabled,
	    'supports'              => array(
	        'title',
	        'editor',
	        'revisions',
	        'thumbnail',
	        'author',
	        'page-attributes',
	    ),
	    'labels'                => array(
	        'name'                  => $single_name,
	        'singular_name'         => $single_name,
	        'menu_name'             => $plural_name,
	        'add_new'               => 'Add ' . $single_name,
	        'add_new_item'          => 'Add New ' . $single_name,
	        'edit'                  => 'Edit',
	        'edit_item'             => 'Edit ' . $single_name,
	        'new_item'              => 'New '. $single_name,
	        'view'                  => 'View '. $single_name,
	        'view_item'             => 'View '. $single_name,
	        'search_items'          => 'Search ' . $plural_name,
	        'not_found'             => 'No '. $plural_name . ' Found',
	        'not_found_in_trash'    => 'No '. $plural_name .' Found in Trash',
	        'parent'                => 'Parent '. $single_name
	    ),
	);
	// register_post_type($post_type_name, $post_type_options);
}
