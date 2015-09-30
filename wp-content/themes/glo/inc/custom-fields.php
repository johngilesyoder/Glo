<?php

// Creates Custom Fields Function
function get_custom_field($key, $echo = FALSE) {
	global $post;
	$custom_field = get_post_meta($post->ID, $key, true);
	if ($echo == FALSE) return $custom_field;
	echo $custom_field;
}

// Modal Custom Field Functions
function imageOne() {
	get_custom_field('wpcf-image-one', TRUE);
}

function imageTwo() {
	get_custom_field('wpcf-image-two', TRUE);
}

function longName() {
	get_custom_field('wpcf-long-name', TRUE);
}

function colorSwatches() {
	get_custom_field('wpcf-colors', TRUE);
}

function woodSwatches() {
	get_custom_field('wpcf-wood', TRUE);
}

function handles() {
	get_custom_field('wpcf-handles', TRUE);
}

function doorHandles() {
	get_custom_field('wpcf-door-handles', TRUE);
}

function details() {
	get_custom_field('wpcf-details', TRUE);
}

function rvalue() {
	get_custom_field('wpcf-r-value', TRUE);
}

function thePressURL() {
	get_custom_field('wpcf-url', TRUE);
}

function theSpecs() {
	get_custom_field('wpcf-specifications', TRUE);
}

function doorStyles() {
	get_custom_field('wpcf-door-styles', TRUE);
}

function aboutYou() {
	get_custom_field('wpcf-about-you-home', TRUE);
}

function aboutUs() {
	get_custom_field('wpcf-about-us-home', TRUE);
}

?>