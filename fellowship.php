<?php
/**
 * The template for displaying all fellowship pages
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */
/*
Template Name: Fellowshippages
*/


get_header(); ?>
<div class="wrap clearfix" id="inner">
  <div id="maincontent">
	<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
	
    <div class="ttl"><?php the_title(); ?></div>

					<div class="entry-content">
						<?php the_content(); ?>
						<?php wp_link_pages( array( 'before' => '<div class="page-link">' . __( 'Pages:', 'twentyten' ), 'after' => '</div>' ) ); ?>
						<?php edit_post_link( __( 'Edit', 'twentyten' ), '<span class="edit-link">', '</span>' ); ?>
					</div><!-- .entry-content -->


<?php endwhile; ?>

  </div>
<div class="right-col">
<?php  if ( ! dynamic_sidebar( 'fellowship-widget-area' ) ) : ?>
<?php endif; // end primary widget area ?>
<?php get_footer(); ?>
