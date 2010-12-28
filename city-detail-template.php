

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
  	<div id="intro">
    <h2>District of columbia, your new startup</h2>

		<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>


							<?php the_content(); ?>
						
							<?php edit_post_link( __( 'Edit', 'twentyten' ), '<span class="edit-link">', '</span>' ); ?>


	<?php endwhile; ?>
	
  </div>
  <div class="right-col">
  <!--Get involved now -->
  	<div id="get-involved">
		<h3>Get involved now</h3>
		<img src="<?php bloginfo( 'template_url' ); ?>/images/get-involved-rc.jpg" alt="Get involved now" />
	</div>
	<ul>
		<li><a href="#">Sign up for updates</a>
			<form method="post" action="" id="newsletter" class="clearfix">
		  	<input type="text" value="type email here" /><button type="submit" class="like-btn">Send</button> 
			</form>
		</li>
		<li><a href="#">Spread the Word</a></li>
		<li><a href="#">Contribute some code</a></li>
		<li><a href="#">Become a partner</a></li>
		<li><a href="#" class="active">Donate</a></li>
	</ul>
  </div></div>
  <div class="wrap clearfix">
  	<div id="maincontent">
	<!--The challenges -->
		<div class="ttl">The challenges</div>
		<ul>
			<li>Overcome the technical challenges to replicating an existing city infrastructure</li>
			<li>Research and consolidate existing policies and practice sinto a “how-to” manual for other municipalities</li>
			<li>Work with DC developers and staff to open source apps</li>
			<li>Discover and implement the best option for code hosting and sharing</li>
			<li>Design a system that enables cities to replicate existing code projects in a sustainable and cost-effective manner</li>
		</ul>
		<!--In the press -->
		<div id="press">
			<div class="ttl">In the press <a href="#" class="more">view more articles</a></div>
			<h2 class="first">Program matches geeks with government</h2>
			<p class="date-cat">Aug 13, 2010, <a href="#">Santa Cruz Sentinel</a></p>
			<p>Code for America is matching up geeks with government. The San Francisco-based nonprofit is accepting applications until Sunday for fellowships for software developers, designers, and eu nisi. Suspendisse gravida, est et facilisis posuere, turpis metus vestibulum justo, nec porttitor augue quam sit amet velit. Quisque interdum ante id diam rutrum a lobortis lorem tempus.</p>
			<h2>code for america offers young web developers a chance to bring cities to the web 2.0</h2>
			<p class="date-cat">Aug 8, 2010, <a href="#">Campus Progress</a></p>
			<p>Take a minute and look at your city government’s webpage. Is there anywhere for you to share input? Is there an app you can download to your phone to provide feedback or submit an id leo commodo imperdiet et in diam. Donec pharetra varius neque eu facilisis. In ullamcorper pellentesque diam. Fusce molestie, elit et scelerisque elementum, velit quam convallis lacus, sit amet molestie nisl nisi in nibh.</p>
		</div>
	</div>
	<div class="right-col">
		<div class="ttl">Blog Updates <a href="#" class="more">archives</a></div>
		<h2><a href="#">we are now officially recruiting!</a></h2>
	  <p class="date">June 1st, 2010<br />
		  <a href="#">by Jennifer Pahlka</a></p>
		<p>Yesterday we honored those who paid the highest price in service to their country. Suspendisse gravida, est et facilisis posuere, turpis metus vestibulum justo, nec porttitor augue quam sit amet velit...</p>
		<a href="#" class="red-btn left"><span>SHARE THIS +</span></a>
		<a href="#" class="red-btn right"><span>COMMENTS (7)</span></a>
		<h2><a href="#">ANOTHER BLOG ENTRY TITLE THAT SPANS TWO LINES</a></h2>
	  <p class="date">June 1st, 2010<br />
		  <a href="#">by Jennifer Pahlka</a></p>
		<p>Morbi dapibus, tellus consequat dictum auctor, nisi turpis volutpat felis, ac eleifend lorem nunc sed justo. Sed varius consectetur aliquet. Donec hendrerit lobortis vehicula. Maecenas quam lacus, congue quis rutrum vitae, facilisis in odio. Phasellus pharetra vehicula sapien vel mollis. Vivamus faucibus viverra semper. Aliquam convallis nibh sed nulla egestas ultricies.</p>
		<a href="#" class="red-btn left"><span>SHARE THIS +</span></a>
		<a href="#" class="red-btn right"><span>COMMENTS (15)</span></a>
	</div>
  </div>
</div>


<?php get_footer(); ?>
