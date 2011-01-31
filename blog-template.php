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
				
					<?php
						// A second sidebar for widgets, just because.
						if ( is_active_sidebar( 'secondary-widget-area' ) ) : ?>

							<div id="secondary" class="widget-area" role="complementary">
									<?php dynamic_sidebar( 'secondary-widget-area' ); ?>
							</div><!-- #secondary .widget-area -->
						<?php endif; ?>
				<br /><br />
					<!--		<h3 class="widget-title">Tweets</h3>				
							<script src="http://widgets.twimg.com/j/2/widget.js"></script>
			                <script>
			                new TWTR.Widget({
			                  version: 2,
			                  type: 'search',
			                  search: 'codeforamerica',
			                  interval: 3000,
			                  title: '',
			                  subject: '',
			                  width: 300,
			                  height: 350,
			                  theme: {
			                    shell: {
			                      background: '#ffffff',
			                      color: '#ffffff'
			                    },
			                    tweets: {
			                      background: '#ffffff',
			                      color: '#444444',
			                      links: '#1985b5'
			                    }
			                  },
			                  features: {
			                    scrollbar: false,
			                    loop: true,
			                    live: true,
			                    hashtags: true,
			                    timestamp: true,
			                    avatars: true,
			                    toptweets: true,
			                    behavior: 'default'
			                  }
			                }).render().start();
			                </script>
								<style>.twtr-hd { padding: 0px;}
								.twtr-ft {display: none;}
								.twtr-tweet {font-size: 10px; font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif;}
								.twtr-widget {
								margin-left: 0px;
								}
								</style><br /><br />-->
				
		<!--		<h3 class="widget-title">CfA Blogs</h3>
			<a href="http://c4a.me/staff-blog/">	<img src="<?php bloginfo('template_directory'); ?>/images/headerblog.jpg" width="300px;" hspace="15"></a>
				<a href="http://c4a.me/fellows-blog/"><img src="<?php bloginfo('template_directory'); ?>/images/headerfellow.jpg" width="300px;"  hspace="15"></a>
		<a href="http://c4a.me/projects-blog/">	<img src="<?php bloginfo('template_directory'); ?>/images/headerproj.jpg" width="300px;"  hspace="15"></a>
			<br><br>-->
				
<?php get_sidebar(); ?>

<?php get_footer(); ?>
