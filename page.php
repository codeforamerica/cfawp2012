<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */

get_header(); ?>
<div class="wrap clearfix" id="inner">
  <div id="maincontent">
	<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
	
    <div class="ttl"><?php the_title(); ?> <a href="#" class="red-btn"><span>Share This +</span></a></div>

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
