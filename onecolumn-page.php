<?php
/**
 * Template Name: One column, no sidebar
 *
 * A custom page template without sidebar.
 *
 * The "Template Name:" bit above allows this to be selectable
 * from a dropdown menu on the edit page screen.
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */

get_header(); ?>

	<div class="wrap clearfix" id="inner">
	  <div id="maincontent" class="fullcolumn" style="width: 940px;" >
<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

				<div class="entry-content" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				    <div class="ttl"><?php the_title(); ?> <a href="#" class="red-btn"><span>Share This +</span></a></div>

				
						<?php the_content(); ?>
						<?php wp_link_pages( array( 'before' => '<div class="page-link">' . __( 'Pages:', 'twentyten' ), 'after' => '</div>' ) ); ?>
						<?php edit_post_link( __( 'Edit', 'twentyten' ), '<span class="edit-link">', '</span>' ); ?>
						<?php comments_template(); ?>
				
					</div><!-- .entry-content -->


<?php endwhile; ?>

			</div><!-- #content -->
		</div><!-- #container -->

<?php get_footer(); ?>
