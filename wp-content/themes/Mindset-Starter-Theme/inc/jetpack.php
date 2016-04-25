<?php
/**
 * Jetpack Compatibility File
 * See: https://jetpack.me/
 *
 * @package Mindset
 */

/**
 * Add theme support for Infinite Scroll.
 * See: https://jetpack.me/support/infinite-scroll/
 */
function mindset_jetpack_setup() {
	add_theme_support( 'infinite-scroll', array(
		'container' => 'main',
		'render'    => 'mindset_infinite_scroll_render',
		'footer'    => 'page',
	) );
} // end function mindset_jetpack_setup
add_action( 'after_setup_theme', 'mindset_jetpack_setup' );

/**
 * Custom render function for Infinite Scroll.
 */
function mindset_infinite_scroll_render() {
	while ( have_posts() ) {
		the_post();
		get_template_part( 'template-parts/content', get_post_format() );
	}
} // end function mindset_infinite_scroll_render
