<?php
/**
 * The template for displaying all pages.
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */

/*
Template Name: City Detail Page (new)
*/

get_header(); ?>

<div class="wrap clearfix city-pages">
    <?php while(have_posts()) { the_post(); ?>
        <h2><?php the_title(); ?></h2>
        <?php the_content(); ?>
        
        <div class="clearfix"></div>
        
        <?php edit_post_link( __( 'Edit', 'twentyten' ), '<span class="edit-link">', '</span>' ); ?>
    <?php } ?>  
</div>

<?php get_footer(); ?>
