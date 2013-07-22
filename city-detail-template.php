
<?php
/**
 * The template for displaying all pages.
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */

/*
Template Name: City Detail
*/

get_header(); ?>

<div class="wrap clearfix" id="cities-detail">
  <div id="top-wrap" class="clearfix">
  <!--District of columbia -->
  	<div id="intro" class="entry-content"><?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
	
    <h2><?php the_title(); ?></h2>



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
		<li><a href="http://github.com/codeforamerica">Contribute some code</a></li>
		<li><a href="/donate" class="active">Donate</a></li>
	</ul>
  </div></div>
  <div class="wrap clearfix">
  	<div id="maincontent">
	<!--The challenges -->
		<div class="ttl">The challenges</div>
	<?php $leftcolumn="leftcolumn"; echo get_post_meta($post->ID, $leftcolumn, true); ?>
	<?php endwhile; ?>
		<!--In the press -->
		<div id="press">
		<!--	<div class="ttl">In the press <a href="#" class="more">view more articles</a></div>
			<h2 class="first">Program matches geeks with government</h2>
			<p class="date-cat">Aug 13, 2010, <a href="#">Santa Cruz Sentinel</a></p>
			<p>Code for America is matching up geeks with government. The San Francisco-based nonprofit is accepting applications until Sunday for fellowships for software developers, designers, and eu nisi. Suspendisse gravida, est et facilisis posuere, turpis metus vestibulum justo, nec porttitor augue quam sit amet velit. Quisque interdum ante id diam rutrum a lobortis lorem tempus.</p>
			<h2>code for america offers young web developers a chance to bring cities to the web 2.0</h2>
			<p class="date-cat">Aug 8, 2010, <a href="#">Campus Progress</a></p>
			<p>Take a minute and look at your city government’s webpage. Is there anywhere for you to share input? Is there an app you can download to your phone to provide feedback or submit an id leo commodo imperdiet et in diam. Donec pharetra varius neque eu facilisis. In ullamcorper pellentesque diam. Fusce molestie, elit et scelerisque elementum, velit quam convallis lacus, sit amet molestie nisl nisi in nibh.</p>
		</div>-->
		
		<script type="text/javascript">// <![CDATA[
		  var is_ssl = ("https:" == document.location.protocol);
		  var asset_host = is_ssl ? "https://s3.amazonaws.com/getsatisfaction.com/" : "http://s3.amazonaws.com/getsatisfaction.com/";
		  document.write(unescape("%3Cscript src='" + asset_host + "javascripts/feedback-v2.js' type='text/javascript'%3E%3C/script%3E"));
		// ]]></script>
		<script type="text/javascript">// <![CDATA[
		  var feedback_widget_options = {};
		  feedback_widget_options.display = "inline";  
		  feedback_widget_options.company = "code_for_america";
		  feedback_widget_options.style = "question";
		  feedback_widget_options.product = "code_for_america_<?php $satisfactionid="satisfactionid"; echo get_post_meta($post->ID, $satisfactionid, true); ?>";
		  feedback_widget_options.limit = "10";
		  var feedback_widget = new GSFN.feedback_widget(feedback_widget_options);
		// ]]></script></div>
	</div>
	<div class="right-col">
	
		<div class="ttl">Blog Updates <a href="/cfa_wordpress/tag/<?php echo get_post_meta($post->ID, $satisfactionid, true); ?>" class="more">archives</a></div>
			<?php $queryargs = get_post_meta($post->ID, 'queryargs', true); ?>
				<?php query_posts( $queryargs . '&showposts=2' ); ?>
		<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
		
		<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
	  <p class="date"><?php the_date(); ?><br />
		  <a href="#">by <?php the_author(); ?></a></p>
		<p><?php the_excerpt(); ?></p>
		<a href="#" class="red-btn left"><span class="st_sharethis_custom">SHARE THIS +</span></a>
		<a href="<?php the_permalink(); ?>/#comments" class="red-btn right"><span>COMMENTS</span></a>
		<?php endwhile; ?>
		
	</div>
  </div>
</div>


<?php get_footer(); ?>
