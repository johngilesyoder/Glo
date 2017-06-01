<?php

// Creates Custom Fields Function
function get_custom_field($key, $echo = FALSE) {
	global $post;
	$custom_field = get_post_meta($post->ID, $key, true);
	if ($echo == FALSE) return $custom_field;
	echo $custom_field;
}



function thePressURL() {
	get_custom_field('wpcf-url', TRUE);
}

function aboutYou() {
	get_custom_field('wpcf-about-you-home', TRUE);
}

function aboutUs() {
	get_custom_field('wpcf-about-us-home', TRUE);
}

?>
