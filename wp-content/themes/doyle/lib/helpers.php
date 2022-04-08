<?php

/**
 * Display Post Blocks
 */

function origin_display_post_blocks() {
	global $post;
	origin_pp( esc_html( $post->post_content ) );
}
// add_action( 'wp_footer', 'origin_display_post_blocks' );


/**
 * Handy function for seeing if a page is parent of child
 * Usage:
 * if ( is_tree(2) ) {
 *   // stuff
 * }
 * via http://css-tricks.com/snippets/wordpress/if-page-is-parent-or-child/
 */

function is_tree($pid){
	global $post;

	$ancestors = get_post_ancestors($post->$pid);
	$root = count($ancestors) - 1;
	$parent = $ancestors[$root];

	if(is_page() && (is_page($pid) || $post->post_parent == $pid || in_array($pid, $ancestors)))
	{
		return true;
	}
	else
	{
		return false;
	}
}



/**
 * SVG helper icon
 * Usage:
 */

function get_icon($icon) {
	return '<svg class="icon icon-' . $icon . '"><use xlink:href="#' . $icon . '"></use></svg>';
}



/**
 * Dump helper. Functions to dump variables to the screen, in a nicley formatted manner.
 * https://gist.github.com/accentinteractive/3838495
 */
if (!function_exists('dump')) {
    function dump ($var, $label = 'Dump', $echo = TRUE)
    {
        // Store dump in variable
        ob_start();
        var_dump($var);
        $output = ob_get_clean();

        // Add formatting
        $output = preg_replace("/\]\=\>\n(\s+)/m", "] => ", $output);
        $output = '<pre style="background: #FFFEEF; color: #000; border: 1px dotted #000; padding: 10px; margin: 10px 0; text-align: left;">' . $label . ' => ' . $output . '</pre>';

        // Output
        if ($echo == TRUE) {
            echo $output;
        }
        else {
            return $output;
        }
    }
}


if (!function_exists('dump_exit')) {
    function dump_exit($var, $label = 'Dump', $echo = TRUE) {
        dump ($var, $label, $echo);
        exit;
    }
}
