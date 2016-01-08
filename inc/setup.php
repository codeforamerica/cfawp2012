<?php
add_action( 'init', 'cfa_setup' );
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );
add_filter('excerpt_more', 'new_excerpt_more');
add_filter('pre_get_posts','searchfilter');
add_filter('user_contactmethods', 'nukeContactMethods', 10, 1);

if ( ! function_exists( 'cfa_setup' ) )
{
	function cfa_setup() {
		add_theme_support( 'automatic-feed-links' );

		add_theme_support( 'post-thumbnails' );
		add_image_size('square', 137, 137, array('center', 'center'));
	}
}

function custom_excerpt_length( $length ) {
	return 45;
}

function new_excerpt_more($more) {
	global $post;
	return '... <a class="more-link" href="'. get_permalink($post->ID) . '"">' . 'Continue Reading' . '</a>';
}

function searchfilter($query) {
	if ($query->is_search && !is_admin() ) {
		$query->set('post_type',array('post'));
	}
	return $query;
}

/**
 * Removes obsolete profile fields
 *
 * @return void
 */
function nukeContactMethods($contactMethods) {
	unset($contactMethods['yim']);
	unset($contactMethods['aim']);
	unset($contactMethods['jabber']);
	$contactMethods['twitter']='Twitter';
	return $contactMethods;
}
