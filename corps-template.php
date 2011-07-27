

<?php
/**
 * The template for displaying all pages.
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */

/*
Template Name: Corps
*/

get_header(); ?>

<div class="wrap clearfix" id="cities">
  <!--PARTICIPATING CITIES -->
  <div id="participating-wrap" class="clearfix">
 

<img src="<?php bloginfo( 'template_url' ); ?>/images/corps.png">
<ul id="slider">
  <li> <img src="http://farm6.static.flickr.com/5084/5341083064_f4886d0175_z.jpg" width="600" alt="CfA Group" />
    <div class="clearfix">
      <table border="0" cellspacing="0" cellpadding="0">
        <tr>
          <th>Don't Be Scared</th>
          <td>Join us and code something cool for government.</td>
        </tr>
      </table>
    </div>
  </li>
  <li> <img src="<?php bloginfo( 'template_url' ); ?>/images/labs/scottanddan.png" alt="Labs" />
    <div class="clearfix">
      <table border="0" cellspacing="0" cellpadding="0">
        <tr>
          <th>I Haz Code?</th>
          <td>Contribute it! Win a prize.</td>
        </tr>
      </table>
    </div>
  </li>
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
