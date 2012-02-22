<?php
/**
 * The template for displaying all pages.
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */

/*
Template Name: New Orleans
*/

get_header(); ?>

<style>
#twitter_feed{
	float:right;
	width: 300px;
}

#content{
	float: left;
	width: 605px;
}
#mc_embed_signup{
	clear:both;
	height: 100px;
}
.team{
	float: left;
	width: 170px;
}

#content li {
	font-size: 135%;
	line-height: 35px;
}
.post-edit-link{
	clear: both;
}
</style>

<div class="wrap clearfix">
	<div id="main">
		<?php if (have_posts()) : ?>

		<h1><?php the_title(); ?></h1>
	
		<?php while (have_posts()) : the_post(); ?>    
			<div id="content">
			<?php the_content(); ?>
			</div>
	 	
			<div id="twitter_feed">
				<script charset="utf-8" src="http://widgets.twimg.com/j/2/widget.js"></script>
				<script>
				new TWTR.Widget({
				  version: 2,
				  type: 'search',
				  search: '#cfaNOLA',
				  interval: 30000,
				  title: 'Code for America',
				  subject: 'New Orleans, LA',
				  width: 'auto',
				  height: 300,
				  theme: {
				    shell: {
				      background: '#8ec1da',
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
				    behavior: 'default'
				  }
				}).render().start();
				</script>
			</div>		
			<?php edit_post_link(); ?>
		
		
		
			<div id="mc_embed_signup">
				<h1>Notifications</h1>
				<form action="http://codeforamerica.us4.list-manage.com/subscribe/post?u=bc89bc1a568c7ecb05735ef0d&amp;id=c5194b384f" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank">
					<label for="mce-EMAIL">Subscribe to our mailing list</label>
					<input type="email" value="" name="EMAIL" class="email" id="mce-EMAIL" placeholder="email address" required>
					<div class="clear"><input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="button"></div>
				</form>
			</div>
			
			
			
			<h1>Meet the Team</h1>
			<div id="the_team">
				<div class="team">
				<img src="/wp-content/themes/cfawp2012/images/2012fellows/pandel.png" width="100px">
				<p><b>Alex Pandel, Designer</b></p>
				</div>

				<div class="team">
				<img src="/wp-content/themes/cfawp2012/images/2012fellows/reavis-bey.png" width="100px">
				<p><b>Amir Reavis-Bey, Software Engineer</b></p>
				</div>

				<div class="team">
				<img src="/wp-content/themes/cfawp2012/images/2012fellows/tejeda.png" width="100px">
				<p><b>Eddie A Tejeda, Web Developer</b></p>
				</div>

				<div class="team">
				<img src="/wp-content/themes/cfawp2012/images/2012fellows/wales.png" width="100px">
				<p><b>Serena Wales, Web Developer</a></p>
				</div>
			</div>	
			
		<?php endwhile; ?>
  <?php endif; ?>

  </div>
</div>

<div class="wrap" id="dots"></div>
<!--
<div class="wrap clearfix" id="fellows-wrap">
  <div id="maincontent">	
 	
  </div>
</div>
-->
<?php get_footer(); ?>
