

<?php
/**
 * The template for displaying all pages.
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */

/*
Template Name: Get Involved
*/

get_header(); ?>

<div class="wrap clearfix" id="involved">
  <div id="maincontent">
    <h2 class="ttl">5 Ways You Can Make a Difference: <a href="#" class="red-btn"><span>Share This +</span></a></h2>
    <ul id="the-ways" class="clearfix">
		<li><a href="/donate"><img src="<?php bloginfo( 'template_url' ); ?>/images/donate.jpg" alt="Donate" /><strong>1</strong> Donate <span>&raquo;</span></a></li>
		<li><a href="http://action.codeforamerica.org/page/share/cfa"><img src="<?php bloginfo( 'template_url' ); ?>/images/spread-the-world.jpg" alt="Spread the Word" /><strong>2</strong> Spread the Word <span>&raquo;</span></a></li>
		<li><a href="http://groups.google.com/group/cfa-labs"><img src="<?php bloginfo( 'template_url' ); ?>/images/contribute-code.jpg" alt="Contribute Some Code" /><strong>3</strong> Contribute Some Code <span>&raquo;</span></a></li>
		<li><a href="/cities/citizen-action-center"><img src="<?php bloginfo( 'template_url' ); ?>/images/contact-your-city.jpg" alt="Contact Your City" /><strong>4</strong> Contact Your City <span>&raquo;</span></a></li>
		<li><a href="mailto:info@codeforamerica.org"><img src="<?php bloginfo( 'template_url' ); ?>/images/become-a-partner.jpg" alt="Become a Partner" /><strong>5</strong> Become a Partner <span>&raquo;</span></a></li>
	</ul>
	
		<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>


							<?php the_content(); ?>
						
							<?php edit_post_link( __( 'Edit', 'twentyten' ), '<span class="edit-link">', '</span>' ); ?>


	<?php endwhile; ?>
	
	<div class="wrap" id="cfa-blog" style="">
		<div class="ttl"><a href="#" class="like-btn" id="ttl-rss">RSS</a> CfA BLOG <a href="#" class="more">Go to Blog</a></div>
	
		<?php query_posts('showposts=2&category_name=get-involved'); ?>		  

				<div>
			      <div id="maincontent">
				<div class="ttl">	<?php $headerimg="headerimg"; echo get_post_meta($post->ID, $headerimg, true); ?>
			</div><?php $blogtitle = get_post_meta($post->ID, 'blogtitle', true);
			$blogdesc = get_post_meta($post->ID, 'blogdesc', true); ?>
						<?php
						get_template_part( 'loop' );
						?>
	
</div></div>  </div></div>
  <div class="right-col" id="featured-partners">
	<ul>
		<li><h3>Featured Partners &amp; Supporters <span></span></h3></li>
		<li><a href="#"><img src="<?php bloginfo( 'template_url' ); ?>/images/logos/case-logo.png" alt="The Case Foundation" /></a></li>
		<li><a href="#"><img src="<?php bloginfo( 'template_url' ); ?>/images/logos/esri-logo.png" alt="ESRI" /></a></li>
		<li><a href="#"><img src="<?php bloginfo( 'template_url' ); ?>/images/logos/on-logo.png" alt="Omidyar Network" /></a></li>
		<li><a href="#"><img src="<?php bloginfo( 'template_url' ); ?>/images/logos/sunlight-logo.png" alt="Sunlight Foundation" /></a></li>
		<li><a href="#"><img src="<?php bloginfo( 'template_url' ); ?>/images/logos/rockefeller-logo.png" alt="Rockefeller Foundation" /></a></li>
		<li><a href="#"><img src="<?php bloginfo( 'template_url' ); ?>/images/gf-logo.png" alt="GF" /></a></li>
		<li><a href="#"><img src="<?php bloginfo( 'template_url' ); ?>/images/next-logo.png" alt="Next American City" /></a></li>
	</ul>
	<div id="bg-end"></div>
  </div>
</div>
<?php get_footer(); ?>
