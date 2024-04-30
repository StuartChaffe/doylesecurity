<?php

/**
 * Change Gravity Forms validation message
 */
function origin_gf_validation_message( $message, $form ) {
	return '<div class="alert alert--error">Your submission had errors, please try again.</div>';
}
add_filter( 'gform_validation_message', 'origin_gf_validation_message', 10, 2 );



/**
 * Move Gravity Forms JS to footer
 */
add_filter( 'gform_init_scripts_footer', '__return_true' );
function origin_gf_cdata_open( $content = '' ) {
	$content = 'document.addEventListener( "DOMContentLoaded", function() { ';
	return $content;
}
add_filter( 'gform_cdata_open', 'origin_gf_cdata_open' );

function origin_gf_cdata_close( $content = '' ) {
	$content = ' }, false );';
	return $content;
}
add_filter( 'gform_cdata_close', 'origin_gf_cdata_close' );
