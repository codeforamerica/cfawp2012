<?php
/**
 * The template for displaying Category Archive pages.
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */

get_header(); ?>

		<div class="wrap clearfix" id="inner">
	      <div id="maincontent">
			<div class="ttl"><?php
					printf( __( '%s', 'twentyten' ), '<span>' . single_cat_title( '', false ) . '</span>' );
				?></div>
				<?php
				get_template_part( 'loop', 'category' );
				?>

		</div><!-- #container -->
	    <div class="right-col">
			
<?php get_sidebar(); ?>
<?php get_footer(); ?>
