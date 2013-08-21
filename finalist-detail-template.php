<?php
/**
 * The template for displaying all pages.
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */

/*
Template Name: Finalist Detail
*/

get_header(); ?>

<div class="wrap clearfix" id="cities-detail">
  <div id="top-wrap" class="clearfix">
  	<div id="intro" class="entry-content">
      <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
        <h2><?php the_title(); ?><span style="color: #b3b2b2; font-size: 14px; vertical-align: top; margin-left: 5px;"></span></h2>
          <?php the_content(); ?>
          <?php edit_post_link( __( 'Edit', 'twentyten' ), '<span class="edit-link">', '</span>' ); ?>
    </div>
    <div class="right-col">
      <!--Get involved now -->
  	  <div id="get-involved">
  	  <ul>
		  <li><a href="https://codeforamerica.wufoo.com/forms/x7p4s5/">Join the Muni Innovation List</a></li>
		  <li><a href="/apps">Browse the Apps</a></li>
		  <li><a href="/cities/fellowship">Learn About the Fellowship</a></li>
		  <li><a href="http://cfasummit.org/">Attend the Summit</a></li>
	    </ul>
      </div>
    </div>
    <div class="clearfix"><div>
  </div>
	<?php endwhile; ?>  
</div>



<?php get_footer(); ?>
