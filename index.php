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
                <header class="post-header isolate">
                	<h2 class="post-title"><?php $blogtitle = get_post_meta($post->ID, 'blogtitle', true);
	$blogdesc = get_post_meta($post->ID, 'blogdesc', true); ?></h2>
					<!--time class="post-date insulate text-whisper" datetime="2013-11-13 00:00:00 +0000">November 1st 2013</time-->
                </header>
				<div class="ttl" style="background: none; padding: 0; margin-bottom: 25px;">	<?php $headerimg="headerimg"; echo get_post_meta($post->ID, $headerimg, true); ?>
				</div> 
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
				
				 	

			</div>
		</div>

<?php get_footer(); ?>


