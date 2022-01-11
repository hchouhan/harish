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

function harish_enqueue_style_sheet() {

	wp_enqueue_style( 'harish-styles', get_stylesheet_directory_uri() . '/style.css', array(), wp_get_theme()->get( 'Version' ) );

}
add_action( 'wp_enqueue_scripts', 'harish_enqueue_style_sheet' );
