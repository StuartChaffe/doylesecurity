<?php

$embed_code = get_field('analytics_embed_code', 'options');
$enabled_logged_in = get_field('analytics_enabled_logged_in', 'options');
$display_analytics = true;

if(is_user_logged_in()) {
	if($enabled_logged_in) {
		$display_analytics = true;
	} else {
		$display_analytics = false;
	}
}

if($embed_code && $display_analytics) {
	echo $embed_code;
}
