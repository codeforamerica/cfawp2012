

<?php
/**
 * The template for displaying all pages.
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */

/*
Template Name: Project Single
*/

get_header(); ?>

<div class="wrap clearfix issues"  id="inner">
    <div id="participating-wrap" class="clearfix">
         <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
        <div id="issues">	
            <div style="width: 620px; padding: 0px; float: left; " class="entry-content">	<h3 id="page-header" style="background:url(<?php $headerimg="headerimg"; echo get_post_meta($post->ID, $headerimg, true); ?>) center center no-repeat"><a href="#" ><?php the_title(); ?></a></h3>
                <?php the_content(); ?>
            </div>
        </div>
        <div class="right-col">
            <div id="wp-widget"><h3 class="widget-title">Get Involved Now</h3>	
                <div class="textwidget">
                    <?php $getinvolved="getinvolved"; echo get_post_meta($post->ID, $getinvolved, true); ?>	
                </div>
            </div>
    </div>
</div>

<div id="twocols-container" class="clearfix">
    <div id="maincontent" class="entry-content">
        <?php $leftcolumn="leftcolumn"; echo get_post_meta($post->ID, $leftcolumn, true); ?>	
        <?php edit_post_link( __( 'Edit', 'twentyten' ), '<span class="edit-link">', '</span>' ); ?>
    </div>
    <div class="right-col">
        <?php $rightcolumn="rightcolumn"; echo get_post_meta($post->ID, $rightcolumn, true); ?></div>
    </div>
</div>


<?php endwhile; ?>

<?php get_footer(); ?>

