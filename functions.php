<?php
/**
 * This file adds functions to the Harish theme for WordPress.
 *
 * @package Harish
 * @author  Harish Chouhan
 * @license GNU General Public License v3 or later
 * @link    https://harishchouhan.com/
 */

// Enqueue style sheet on frontend.
add_action( 'wp_enqueue_scripts', 'harish_enqueue_style_sheet' );
function harish_enqueue_style_sheet() {
	wp_enqueue_style( 'harish-styles', get_stylesheet_directory_uri() . '/style.css', array(), wp_get_theme()->get( 'Version' ) );
}


add_filter( 'wp_lazy_loading_enabled', '__return_false' );

function skip_lazyloading_on_first_three_archive_images( $omit_threshold ) {
	if ( is_home() || is_archive() ) {
		return 3;
	}
	return $omit_threshold;
}
add_filter( 'wp_omit_loading_attr_threshold', 'skip_lazyloading_on_first_three_archive_images' );
