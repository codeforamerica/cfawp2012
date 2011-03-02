

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
	
				<?php the_content(); ?></div></div><div class="right-col">
				<div id="wp-widget"><h3 class="widget-title">Get Involved Now</h3>			<div class="textwidget">
					<ul>
						<li><a href="#">Sign up for updates</a>

					<form name="signup" action="http://action.codeforamerica.org/page/signup/cfa-email" method="post" id="newsletter" class="clearfix">
						   <input type="text" value="Email"  type="email" id="email" name="email" onfocus="if(this.value==this.defaultValue)this.value='';" onblur="if(this.value=='')this.value=this.defaultValue;" /><button type="submit" class="like-btn">Send</button> 
						  </form>
						</li>
						<li><a href="http://action.codeforamerica.org/page/share/cfa">Spread the Word</a></li>
						<li><a href="http://action.codeforamerica.org/page/s/2011-signup">Contribute some code</a></li>
						<li><a href="/cities/citizen-action-center">Contact Your City</a></li>
						<li><a href="/donate" class="active">Donate</a></li>
					</ul></div>
						</div></div></div>
						<div id="twocols-container" class="clearfix">
						    <div id="maincontent" class="entry-content">
									<?php $leftcolumn="leftcolumn"; echo get_post_meta($post->ID, $leftcolumn, true); ?>	<?php edit_post_link( __( 'Edit', 'twentyten' ), '<span class="edit-link">', '</span>' ); ?>
							 </div>
							    <div class="right-col">

			<?php $rightcolumn="rightcolumn"; echo get_post_meta($post->ID, $rightcolumn, true); ?></div>
			</div><!-- .entry-content -->
	
</div>

	
	
<?php endwhile; ?>

<?php get_footer(); ?>

