

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
  	<div id="intro" class="entry-content"><?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
	
    <h1><?php the_title(); ?><span style="color: #b3b2b2; font-size: 14px; vertical-align: top;">[BETA]</span></h1>



							<?php the_content(); ?>
						
							<?php edit_post_link( __( 'Edit', 'twentyten' ), '<span class="edit-link">', '</span>' ); ?>


	
  </div>
  <div class="right-col">
  <!--Get involved now -->
  	<div id="get-involved">
		<h3>Get involved now</h3>
		<img src="<?php bloginfo( 'template_url' ); ?>/images/get-involved-rc.jpg" alt="Get involved now" />
	</div>
	<ul>
		<li><a href="#">Sign up for updates</a>

	<form name="signup" action="http://action.codeforamerica.org/page/signup/<?php $emailform="emailform"; echo get_post_meta($post->ID, $emailform, true); ?>" method="post" id="newsletter" class="clearfix">
		   <input type="text" value="Email"  type="email" id="email" name="email" onfocus="if(this.value==this.defaultValue)this.value='';" onblur="if(this.value=='')this.value=this.defaultValue;" /><button type="submit" class="like-btn">Send</button> 
		  </form>
		</li>
		<li><a href="http://codeforamerica.org/fellows/apply">Apply for the Fellowship</a></li>
		<li><a href="http://action.codeforamerica.org/page/s/2011-signup">Contribute some code</a></li>
		<li><a href="/cities/citizen-action-center">Contact Your City</a></li>
		<li><a href="/donate" class="active">Donate</a></li>
	</ul>
  </div></div>
  <div class="wrap clearfix">
  	<div>

		<div id="press">
		<script type="text/javascript">// <![CDATA[
		  var is_ssl = ("https:" == document.location.protocol);
		  var asset_host = is_ssl ? "https://s3.amazonaws.com/getsatisfaction.com/" : "http://s3.amazonaws.com/getsatisfaction.com/";
		  document.write(unescape("%3Cscript src='" + asset_host + "javascripts/feedback-v2.js' type='text/javascript'%3E%3C/script%3E"));
		// ]]></script>
		<script type="text/javascript">// <![CDATA[
		  var feedback_widget_options = {};
		  feedback_widget_options.display = "inline";  
		  feedback_widget_options.company = "code_for_america";
		  feedback_widget_options.style = "idea";
		  feedback_widget_options.product = "code_for_america_<?php $satisfactionid="satisfactionid"; echo get_post_meta($post->ID, $satisfactionid, true); ?>";
		  feedback_widget_options.limit = "10";
		  var feedback_widget = new GSFN.feedback_widget(feedback_widget_options);
		// ]]></script></div>
	</div>
	<?php endwhile; ?>
    
  </div>
</div>


<?php get_footer(); ?>
