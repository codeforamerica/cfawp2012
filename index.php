<?php
/**
 * The template for displaying all pages.
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */

/*
Template Name: Blogs
*/

get_header(); ?>
<?php $queryargs = get_post_meta($post->ID, 'queryargs', true); ?>
<?php $page = (get_query_var('paged')) ? get_query_var('paged') : 1;
query_posts( $queryargs . '&paged=' . $page); ?>		  

		<div class="wrap clearfix" id="inner">
	      <div id="maincontent">
				<?php
				get_template_part( 'loop' );
				?>
			</div><!-- #container -->
		</div>

<?php get_footer(); ?>


