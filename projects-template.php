<?php
/**
 * The template for displaying all pages.
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */

/*
Template Name: Projects
*/

get_header(); ?>

<div class="wrap clearfix" id="inner">
	
	  <div id="maincontent" class="fullcolumn" style="width: 940px;" >

      <div style="width: 295px; height: 500px; padding-right: 0px; float: left; ">	
          <div class="ttl" style="padding: 5px; font-size: 1.51em;">Code for America. Now.</div>  
          
			<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
          
      <?php the_content(); ?><?php endwhile; ?>
      <h4>Tools and Resources</h4>
<ul>
    <li><a href="http://help.github.com/">Learn How to Setup Git</a></li>
	<li><a href="http://github.com/codeforamerica">Code for America GitHub</a></li>    
    <li><a href="http://devcenter.heroku.com/articles/quickstart">Learn How to Setup Heroku</a></li>
    <li><a href="http://rubyonrails.org/download">Learn How to Setup Rails</a></li>
</ul>
      
    </div>
    
        <div style="width: 630px; padding-left: 15px; float: left; " class="entry-content">	
            <div id="issues">	

<?php
$args = array( 'post_type' => 'cfa_project', 'posts_per_page' => 10 );
$loop = new WP_Query( $args );
while ( $loop->have_posts() ) : $loop->the_post(); ?>

    <h3 id="page-header" style="text-align: left; padding-left: 0px; background:url(<?php $large_image_url = wp_get_attachment_image_src( get_post_thumbnail_id(), 'large'); echo $large_image_url[0]; ?>) center center no-repeat"><a href="#" ><?php the_title(); ?></a></h3>
    <div>
        <?php the_content(); ?>                
        <p><a href="<?php the_permalink(); ?>" title="<?php printf( esc_attr__( 'Permalink to %s', 'twentyten' ), the_title_attribute( 'echo=0' ) ); ?>" rel="bookmark">Read more</a></p>
    </div>

<?php endwhile; ?>


</div></div></div>


<?php get_footer(); ?>
