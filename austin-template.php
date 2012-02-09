<?php
/**
 * The template for displaying all pages.
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */

/*
Template Name: Austin
*/

get_header(); ?>

<div class="wrap clearfix">
  <div id="mission">
    <h2>Team Austin loves BBQ!</h2>
    <p>
			<!-- Begin MailChimp Signup Form -->
			<link href="http://cdn-images.mailchimp.com/embedcode/slim-081711.css" rel="stylesheet" type="text/css">
			<style type="text/css">
				#mc_embed_signup{background:#fff; clear:left; font:14px Helvetica,Arial,sans-serif; }
				/* Add your own MailChimp form style overrides in your site stylesheet or in this style block.
				   We recommend moving this block and the preceding CSS link to the HEAD of your HTML file. */
			</style>
			<div id="mc_embed_signup">
			<form action="http://codeforamerica.us4.list-manage1.com/subscribe/post?u=7eae25b3fcdc6e862a1a20456&amp;id=5fa034319d" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank">
				<label for="mce-EMAIL">Subscribe to our mailing list</label>
				<input type="email" value="" name="EMAIL" class="email" id="mce-EMAIL" placeholder="email address" required>
				<div class="clear"><input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="button"></div>
			</form>
			</div>

			<!--End mc_embed_signup-->    	
		</p>
		<p>
			If you're near City Hall, come say hi!   We're usually in <strong>Room 3102</strong>, at least for the rest of this week.
		</p>
		<p>			
			Please send any suggestions and ideas you may have for us at <a href='mailto:austin@codeforamerica.org'>austin@codeforamerica.org</a>. Thanks.
    </p>
  </div>
  <img src="<?php bloginfo( 'template_url' ); ?>/images/austin/austin_conjunctured_banner.png" alt="" />
</div>

<div class="wrap" id="dots"></div>

<div class="wrap clearfix" id="fellows-wrap">
  <div id="maincontent">		
		
    <h3 class="ttl">Are you wondering, "Should I go to a Hackathon?" <a href="/fellows/2012-program-and-timeline/" class="more">Read More</a></h3>
    <p>Here's a guide to help you decide.  And when you become convinced, remember to save the date of <strong>February 25th for "Code Across America: A National Day of Civic Innovation"</strong>.</p>
    <img src="<?php bloginfo( 'template_url' ); ?>/images/austin/hackathonpromo620px.png" alt="" />
		
    <div class="box">
      <h3 class="ttl">Why Austin? <a href="/2012-city-finalists/austin-old/" class="more">Read More</a></h3>
			<p id="internal-source-marker_0.628739543234031"><a href="http://codeforamerica.org/wp-content/uploads/2011/06/austinv3.jpeg"><img class="aligncenter size-full wp-image-6290" title="austinv3" src="http://codeforamerica.org/wp-content/uploads/2011/06/austinv3.jpeg" alt="" width="630" height="180" /></a></p>

			<blockquote>“I  think it would be good if Austin could work with Code for America  fellows and create new applications for our community... I know  Austin’s tech community will be very interested in the Fellowship  program – it’s a great opportunity.”

			- Mayor Lee Leffingwell</blockquote>
			<a href="http://codeforamerica.org/wp-content/uploads/2011/06/Austinseal1.jpg"><img class="alignright size-medium wp-image-6293" title="Austinseal" src="http://codeforamerica.org/wp-content/uploads/2011/06/Austinseal1-300x300.jpg" alt="" width="168" height="168" /></a>Austin  has proposed to partner with Code for America to produce lightweight  creative technology that empowers the city to become a platform for  community engagement. The project will extend access to government that  allows city agencies to easily and effectively deliver information and  services. Instead of a citizen government relationship limited to  request and response, such a system will allow for more dynamic  collection of feedback, issue management, email notification, discussion  and event management.			
			The  goals of transparency and openness are becoming standard expectations  in nearly every level of government. Often government agencies struggle  to achieve these goals and meet the demands of the communities they  serve due to a lack of technological resources that make common  information and services available.  The City of Austin is challenged  with keeping up with their motivated and engaged community. City leaders  are committed to closing the gap between typical city government issues  and the best impulses of the community it represents.
    </div>
  </div>
  <div class="right-col">
    <ul>
      <li><a href="/fellows/2012-program-and-timeline/">Learn More About the Fellowship</a></li>
      <li><a href="/2012-fellows/">Meet The Fellows</a></li>
    </ul>
		
    <div class="testimonial-wrap">
      <div class="testimonial-content">
        <h4>"Working to further Austin's open government momentum."</h4>
        <p>Joe Merante <span class="position">Law, Drupal, Guitars</span></p>
        <img src="<?php bloginfo( 'template_url' ); ?>/images/austin/merante.png" alt="Joe Merante" />
			</div>
    </div>
		&nbsp;
		
    <div class="testimonial-wrap">
      <div class="testimonial-content">
        <h4>"Listening for ways to encourage participation."</h4>
        <p>Emily Wright Moore <span class="position">Design, Cities, Stories</span></p>
        <img src="<?php bloginfo( 'template_url' ); ?>/images/austin/moore.png" alt="Emily Wright Moore" />
			</div>
    </div>
		&nbsp;
		
    <div class="testimonial-wrap">
      <div class="testimonial-content">
        <h4>"Applying a startup mindset to the city."</h4>
        <p>Aurelio Tinio <span class="position">Travel, Coding, Basketball</span></p>
        <img src="<?php bloginfo( 'template_url' ); ?>/images/austin/tinio.png" alt="Aurelio Tinio" />
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
          <th>End of Austin Residency <span>&raquo;</span></th>
        </tr>
				<tr  class="odd">
	        <td>11/12</td>
	        <th>End of 2012 Fellowship <span>&raquo;</span></th>
        </tr>
      </table>
    </div>
		
  </div>
</div>
<?php get_footer(); ?>
