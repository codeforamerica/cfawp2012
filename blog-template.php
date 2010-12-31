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
<?php query_posts($queryargs); ?>		  

		<div class="wrap clearfix" id="inner">
	      <div id="maincontent">
		<div class="ttl">	<?php $headerimg="headerimg"; echo get_post_meta($post->ID, $headerimg, true); ?>
	</div><?php $blogtitle = get_post_meta($post->ID, 'blogtitle', true);
	$blogdesc = get_post_meta($post->ID, 'blogdesc', true); ?>
				<?php
				get_template_part( 'loop' );
				?>
		</div><!-- #container -->
	    <div class="right-col">
					<div class="testimonial-wrap">
				    
				
						<div class="testimonial-content" style="min-height: 70px; padding-left: 16px;">
					        <p>About This Blog</a> <span class="position"><?php echo $blogtitle ;?></span></p>
					<p style="font-size: .8em; color: #666;"><?php echo $blogdesc ;?></p>
					         </div>
				
				    </div><br>
				
				<h3 class="widget-title">CfA Blogs</h3>
				<img src="<?php bloginfo('template_directory'); ?>/images/headerblog.jpg" width="300px;" hspace="15">
				<img src="<?php bloginfo('template_directory'); ?>/images/headerfellow.jpg" width="300px;"  hspace="15">
			
				<img src="<?php bloginfo('template_directory'); ?>/images/headerproj.jpg" width="300px;"  hspace="15">
			<br><br>
				
<?php get_sidebar(); ?>

<?php get_footer(); ?>
