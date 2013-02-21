<?php
/**
 * Template Name: OpenImpact 
 *
 * A custom page template without sidebar.
 *
 * The "Template Name:" bit above allows this to be selectable
 * from a dropdown menu on the edit page screen.
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */

get_header(); ?>
<style>
.submenu{

}
.submenu li{
float: left;
list-style:none;
font-size: 123%;
background: none !important;
font-weight: bold;
}

</style>
	<div class="wrap clearfix" id="inner">
	  <div id="maincontent" class="fullcolumn" style="width: 940px;" >
<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
<a href="/open-impact"><img src="http://codeforamerica.org/wp-content/uploads/2012/06/campaignbanner1.jpg">
</a>
<!--
<ul class="submenu">
<li><a href="">Home</a></li>
<li><a href="">What is  Open Government</a></li>
<li><a href="">Open Government Directive</a></li>
<li><a href="">New Urban Mechanics</a></li>
<li><a href="">Take the Pledge</a></li>

</ul>
-->
<div class="clear"></div>
						<?php the_content(); ?>
						<?php edit_post_link( __( 'Edit', 'twentyten' ), '<span class="edit-link">', '</span>' ); ?>
				
					</div><!-- .entry-content -->


<?php endwhile; ?>

			</div><!-- #content -->
		</div><!-- #container -->

<?php get_footer(); ?>
