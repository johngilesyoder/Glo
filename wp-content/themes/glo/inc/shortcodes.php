<?php

/*==========================

Gumby Framework Shortcodes
By Chris Blakley
gearside.com

Documentation: http://gearside.com/wordpress-shortcodes-gumby-framework/

===========================*/

function get_flags($atts) {
	$flags = array();
	if (is_array($atts)) {
		foreach ($atts as $key => $value) {
			if ($value != '' && is_numeric($key)) {
				array_push($flags, $value);
			}
		}
	}
	return $flags;
}




//Rows
add_shortcode('row', 'row_shortcode');
function row_shortcode($atts, $content=''){
	extract( shortcode_atts( array('c' => '', 's' => ''), $atts) );
	$GLOBALS['col_counter'] = 0;
	return '<div class="row ' . $c . '">' . do_shortcode($content) . '</div><!--/.' . $c . '-->';
}

add_shortcode('wrap', 'wrap_shortcode');
function wrap_shortcode($atts, $content=''){
	extract( shortcode_atts( array('c' => '', 's' => ''), $atts) );
	$GLOBALS['col_counter'] = 0;
	return '<div class="' . $c . '">' . do_shortcode($content) . '</div><!--/.' . $c . '-->';
}

add_shortcode('div', 'div_shortcode');
function div_shortcode($atts, $content=''){
	extract( shortcode_atts( array('c' => '', 's' => ''), $atts) );
	$GLOBALS['col_counter'] = 0;
	return '<div class="' . $c . '">' . do_shortcode($content) . '</div><!--/.' . $c . '-->';
}

?>