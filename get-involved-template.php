

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
		<li><a href="#"><img src="<?php bloginfo( 'template_url' ); ?>/images/donate.jpg" alt="Donate" /><strong>1</strong> Donate <span>&raquo;</span></a></li>
		<li><a href="#"><img src="<?php bloginfo( 'template_url' ); ?>/images/spread-the-world.jpg" alt="Spread the Word" /><strong>2</strong> Spread the Word <span>&raquo;</span></a></li>
		<li><a href="#"><img src="<?php bloginfo( 'template_url' ); ?>/images/contribute-code.jpg" alt="Contribute Some Code" /><strong>3</strong> Contribute Some Code <span>&raquo;</span></a></li>
		<li><a href="#"><img src="<?php bloginfo( 'template_url' ); ?>/images/contact-your-city.jpg" alt="Contact Your City" /><strong>4</strong> Contact Your City <span>&raquo;</span></a></li>
		<li><a href="#"><img src="<?php bloginfo( 'template_url' ); ?>/images/become-a-partner.jpg" alt="Become a Partner" /><strong>5</strong> Become a Partner <span>&raquo;</span></a></li>
	</ul>
	<div class="wrap">
		<h3>Our Impact</h3>
		<ul>
			<li><a href="#">Read our latest story of Impact <span>&raquo;</span></a></li>
			<li><a href="#">Find out what we’ve accomplished in 2010 <span>&raquo;</span></a></li>
			<li><a href="#">Our future plans <span>&raquo;</span></a></li>
		</ul>
	</div>
	<div class="wrap">
		<h3>What we need now</h3>
		<ul>
			<li><a href="#">Donate Office Supplies <span>&raquo;</span></a></li>
			<li><a href="#">Code a Wordpress Plugin <span>&raquo;</span></a></li>
		</ul>
	</div>
	<div class="wrap" id="cfa-blog">
		<div class="ttl"><a href="#" class="like-btn" id="ttl-rss">RSS</a> CfA BLOG <a href="#" class="more">Go to Blog</a></div>
		<h2>An Atypical Internship: Come Build CfA</h2>
		<p class="date">Sept 23, 2010, <a href="#">Abhi Nemani</a></p>
		<div class="post"><p><img src="<?php bloginfo( 'template_url' ); ?>/images/abhi.jpg" alt="" />Not sure why they’re making me do this. It’s kind of awkward, actually. See I was just an intern, like a week ago, and now they’re asking me to recruit more interns. It’s as if they are either saying, “you need help” or “render yourself irrelevant”. Either way, not sure…</p>
		<ul>
			<li>Share: <a href="#" class="like-btn" id="mail-b">E-mail</a> <a href="#" class="like-btn" id="rss-b">RSS</a> <a href="#" class="like-btn" id="fb-b">Facebook</a> <a href="#" class="like-btn" id="tw-b">Twitter</a></li>
			<li><a href="#" id="comments">Comments (2)</a></li>
			<li class="right"><a href="#" class="more">Read More</a></li>
		</ul></div>
	</div>
  </div>
  <div class="right-col" id="featured-partners">
	<ul>
		<li><h3>Featured Partners &amp; Supporters <span></span></h3></li>
		<li><a href="#"><img src="<?php bloginfo( 'template_url' ); ?>/images/case-logo.png" alt="The Case Foundation" /></a></li>
		<li><a href="#"><img src="<?php bloginfo( 'template_url' ); ?>/images/esri-logo.png" alt="ESRI" /></a></li>
		<li><a href="#"><img src="<?php bloginfo( 'template_url' ); ?>/images/on-logo.png" alt="Omidyar Network" /></a></li>
		<li><a href="#"><img src="<?php bloginfo( 'template_url' ); ?>/images/sunlight-logo.png" alt="Sunlight Foundation" /></a></li>
		<li><a href="#"><img src="<?php bloginfo( 'template_url' ); ?>/images/rockefeller-logo.png" alt="Rockefeller Foundation" /></a></li>
		<li><a href="#"><img src="<?php bloginfo( 'template_url' ); ?>/images/gf-logo.png" alt="GF" /></a></li>
		<li><a href="#"><img src="<?php bloginfo( 'template_url' ); ?>/images/next-logo.png" alt="Next American City" /></a></li>
	</ul>
	<div id="bg-end"></div>
  </div>
</div>
<?php get_footer(); ?>
