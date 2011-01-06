

<?php
/**
 * The template for displaying all pages.
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */

/*
Template Name: Issues Single
*/

get_header(); ?>

<div class="wrap clearfix issues"  id="inner">
  <div id="maincontent">
	<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
<div id="issues">	
	<h3 id="page-header" style="background:url(<?php $headerimg="headerimg"; echo get_post_meta($post->ID, $headerimg, true); ?>) center center no-repeat"><a href="#"><?php the_title(); ?></a></h3></div>
	
			<div class="entry-content">
				<?php the_content(); ?>
				<?php wp_link_pages( array( 'before' => '<div class="page-link">' . __( 'Pages:', 'twentyten' ), 'after' => '</div>' ) ); ?>
				<?php edit_post_link( __( 'Edit', 'twentyten' ), '<span class="edit-link">', '</span>' ); ?>
			</div><!-- .entry-content -->
	
<?php endwhile; ?>
</div>
<div class="right-col">

<?php get_sidebar(); ?>
<?php get_footer(); ?>

