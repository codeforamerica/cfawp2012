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

<div class="wrap clearfix">
  <div id="mission">
    <h2>Team New Orleans</h2>
    <p>
	<!-- Begin MailChimp Signup Form -->
	<link href="http://cdn-images.mailchimp.com/embedcode/slim-081711.css" rel="stylesheet" type="text/css">
	<style type="text/css">
		#mc_embed_signup{background:#fff; clear:left; font:14px Helvetica,Arial,sans-serif; }
		/* Add your own MailChimp form style overrides in your site stylesheet or in this style block.
		   We recommend moving this block and the preceding CSS link to the HEAD of your HTML file. */
	</style>
	<div id="mc_embed_signup">
	<form action="http://codeforamerica.us4.list-manage.com/subscribe/post?u=bc89bc1a568c7ecb05735ef0d&amp;id=c5194b384f" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank">
		<label for="mce-EMAIL">Subscribe to our mailing list</label>
		<input type="email" value="" name="EMAIL" class="email" id="mce-EMAIL" placeholder="email address" required>
		<div class="clear"><input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="button"></div>
	</form>
	</div>

	<!--End mc_embed_signup-->
		</p>
		<p>			
			Please send any suggestions and ideas you may have for by <a href='https://www.google.com/moderator/#15/e=1e9f42&t=1e9f42.40'>clicking here</a>. Thanks.
	    </p>
  </div>
</div>

<div class="wrap" id="dots"></div>

<div class="wrap clearfix" id="fellows-wrap">
  <div id="maincontent">		
	<?php the_content(); ?>
  </div>
  <div class="right-col">
    <ul>
      <li><a href="/fellows/2012-program-and-timeline/">Learn More About the Fellowship</a></li>
      <li><a href="/2012-fellows/">Meet The Fellows</a></li>
    </ul>
		
    <div class="testimonial-wrap">
      <div class="testimonial-content">
        <h4>"QUOTE."</h4>
        <p>Alex Pandel <span class="position">Designer</span></p>
        <a href='http://twitter.com/alexpandel/'><img src="<?php bloginfo( 'template_url' ); ?>/images/2012fellows/pandel.png" alt="Alex Pandel" /></a>
			</div>
    </div>
		&nbsp;
		
    <div class="testimonial-wrap">
      <div class="testimonial-content">
        <h4>"QUOTE."</h4>
        <p>Amir Reavis-Bey <span class="position">Software Engineer</span></p>
        <a href='http://twitter.com/emilyville/'><img src="<?php bloginfo( 'template_url' ); ?>/images/2012fellows/reavis-bey.png" alt="Amir Reavis-Bey" /></a>
			</div>
    </div>
		&nbsp;
		
    <div class="testimonial-wrap">
      <div class="testimonial-content">
        <h4>"QUOTE."</h4>
        <p>Eddie A Tejeda <span class="position">Web Developer</span></p>
        <a href='http://twitter.com/eddietejeda/'><img src="<?php bloginfo( 'template_url' ); ?>/images/2012fellows/tejeda.png" alt="Eddie A Tejeda" /></a>
			</div>
    </div>
		&nbsp;

    <div class="testimonial-wrap">
      <div class="testimonial-content">
        <h4>"QUOTE."</h4>
        <p>Serena Wales <span class="position">Web Developer</span></p>
        <a href='http://twitter.com/gangleton/'><img src="<?php bloginfo( 'template_url' ); ?>/images/2012fellows/wales.png" alt="Serena Wales" /></a>
	  </div>
    </div>

    <div id="dates">
      <h3>Dates To Keep In Mind</h3>
      <h4>&nbsp</h4>
      <table border="0" cellspacing="0" cellpadding="0">
				<tr  class="odd">
	        <td>02/25/12</td>
	        <th>Code Across America: A Day of Civic Innovation <span>&raquo;</span></th>
        </tr>
				<tr>
          <td>03/03/12</td>
          <th>End of New Orleans Residency <span>&raquo;</span></th>
        </tr>
				<tr  class="odd">
	        <td>11/12</td>
	        <th>End of 2012 Fellowship <span>&raquo;</span></th>
        </tr>
      </table>
    </div>
		&nbsp;
		&nbsp;
	
	<div>
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
		
  </div>
</div>
<?php get_footer(); ?>
