<?php //Functions Routing File

require_once( get_template_directory() . '/inc/setup.php' );   // Setup Theme
require_once( get_template_directory() . '/inc/scripts.php' ); // Scripts
require_once( get_template_directory() . '/inc/helper.php' );  // Helper Functions

/*
 * remove inline width and height added to images
 * from: https://snipt.net/dnnsldr/remove-image-height-and-width-for-responsive-design-in-wp/
 */

add_filter( 'post_thumbnail_html', 'remove_thumbnail_dimensions', 10 );
add_filter( 'image_send_to_editor', 'remove_thumbnail_dimensions', 10 );

// Removes attached image sizes as well
add_filter( 'the_content', 'remove_thumbnail_dimensions', 10 );

// Remove caption sizes
add_filter( 'img_caption_shorcode', 'remove_thumbnail_dimensions', 10 );

function remove_thumbnail_dimensions( $html ) {
  $html = preg_replace( '/(width|height)=\"\d*\"\s/', "", $html );
  return $html;
}