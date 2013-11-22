<?php
/**
 * The template for displaying all pages.
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */

/*
Template Name: Geeks Page (new)
*/

get_header(); ?>

<div class="wrap clearfix geeks-page">
    <?php while(have_posts()) { the_post(); ?>
        <h2><?php the_title(); ?></h2>
        <?php the_content(); ?>
        
        <div class="clearfix"></div>
        
        <?php edit_post_link( __( 'Edit', 'twentyten' ), '<span class="edit-link">', '</span>' ); ?>
    <?php } ?>  
</div>

<?php get_footer(); ?>
