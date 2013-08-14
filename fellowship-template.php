<?php
/**
 * The template for displaying all pages.
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */

/*
Template Name: Fellowship
*/

get_header(); ?>

<div class="wrap clearfix">
  <div id="mission">
    <h1>Our Fellowship</h1>
    <p>Through Code for America's fellowship program, passionate web developers, designers, and entrepreneurs collaborate with municipal leaders to leverage the power of the internet -- to make government better, more efficient for us all. In doing so, fellows develop new skills, create a broad network of civic and tech leaders, and most of all, have an impact.</p>
  </div>
  <?php include 'fellow_carousel.php'; ?>

</div>
<div class="wrap" id="dots"></div>
<div class="wrap clearfix" id="fellows-wrap">
  <div id="maincontent">
<p style="text-align:center"><iframe src="http://player.vimeo.com/video/71280045" width="600" height="340" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe> </p>

<p>The Code for America Fellowship is an 11-month program where developers, designers, researchers, and product managers work with city staff to produce open-source <a href="/apps">web apps</a> to improve city services and the community. Fellows work out of the San Francisco office for the bulk of the year -- traveling to their assigned partner cities for the month February and various times throughout the year to meet with community members and city staff, and test their apps. Fellows receive $35,000 USD, professional development opportunities, and healthcare benefits.</p>
  <div class="box">
      <h2 class="ttl">Who Are We looking For?</h2>
      <ul id="what" class="clearfix">
        <li><img src="<?php bloginfo( 'template_url' ); ?>/images/fellows1.jpg" alt="" /></li>
        <li><img src="<?php bloginfo( 'template_url' ); ?>/images/fellows2.jpg" alt="" /></li>
        <li><img src="<?php bloginfo( 'template_url' ); ?>/images/fellows3.jpg" alt="" /></li>
        <li><img src="<?php bloginfo( 'template_url' ); ?>/images/fellows5.jpg" alt="" /></li>
      </ul>
      <p>The average fellow in <a href="/2013-fellows/">this year’s class</a> is 30-years-old with some previous work experience and an interest in helping communities. Fellows from across the country come together from a variety of development, design, research and project management backgrounds. Code for America is committed to a diverse fellowship class. Minorities and women are encouraged to apply.</div>
    <div class="box">
      <h2 class="ttl">The Application Process</h2>
      <p>To apply, prospective fellows must submit examples of previous relevant work, along with short explanations their interest, goals, and background. The 2014 Fellowship begins in January 2014. The application cycle for 2014 is open now through <strong>July 31, 2013</strong>. <a href="http://codeforamerica.org/fellows/apply">Apply Today</a>.</p>
    </div>
    <div class="box">
      <h2 class="ttl">The Training</h2>
<p>	During the 11-month program, fellows not only work together to help cities innovate, but also receive the training and support to be positioned as a leader in business, public service, or both:</p>
    <ul id="why">
      <li><strong class="number">1</strong> <strong>Civic Tech Training.</strong> You will start with a crash course in municipal government and gain a practical understanding of the vital intersection of politics and technology.</li>
      <li><strong class="number">2</strong> <strong>Professional Development.</strong> The biggest names in the web industry and the Gov 2.0 movement will provide you unparalleled networking opportunities, mentorship and support.</li>
      <li><strong class="number">3</strong> <strong>Connections.</strong> Working closely with other talented individuals, you will develop lasting relationships in a fast-paced, startup atmosphere.</li>
      <li><strong class="number">4</strong> <strong>A Labor of Love.</strong> You’ll not only accomplish a lot and make the world a better place, you’ll have a lot of fun working with other passionate people. To borrow a line from the Peace Corps, it will be the toughest job you’ll ever love.</li>
    </ul> </div>
</div>
  <div class="right-col">
    <div class="testimonial-wrap">
      <div class="testimonial-content">
        <h4>"Join our movement... and <em>make a difference</em>"</h4>
        <p>Aneesh Chopra <span class="position">Former U.S. CTO</span></p>
        <img src="<?php bloginfo( 'template_url' ); ?>/images/Aneesh.jpg" alt="Aneesh Chopra" /> </div>
    </div>
    <ul>
      <li><a href="http://codeforamerica.org/2013-fellows/">Meet Our Fellows</a></li>
      <li><a href="http://codeforamerica.org/fellows/program-and-timeline/">Learn More About the Fellowship</a></li>
      
      <li><a href="http://codeforamerica.org/fellows/apply/" class="active">Apply To Be A Fellow</a></li>
    </ul>
    <div id="dates">
      <h3>Dates To Keep In Mind</h3>
      <h4>2014 Applicants</h4>
      <table border="0" cellspacing="0" cellpadding="0">
		<tr  class="odd">
          <td>07/31/13</td>
          <th><a href="http://codeforamerica.org/fellows/apply">Application Deadline</a></th>
        </tr>
		<tr>
          <td>07/31/13 - 08/30/13</td>
          <th>Applicant Interviews</th>
        </tr>
        <tr class="odd">
          <td>09/20/13</td>
          <th>Applicants Notified of Selection</th>
        </tr>
		 <tr class="odd">
	          <td>10/13</td>
	          <th>2014 Fellows<br>Announced Publicly</th>
	        </tr>
       	<tr>
          <td>01/14</td>
          <th>2014 Fellowship Starts</th>
        </tr>
      </table>
      <h4>2013 Fellows</h4>
      <table border="0" cellspacing="0" cellpadding="0">
        <tr class="odd">
          <td style="width:110px">01/13</td>
          <th>Orientation/Training</th>
        </tr>
        <tr>
          <td>02/13</td>
          <th>City Tour</th>
        </tr>
        <tr class="odd">
          <td>03/13 - 09/13</td>
          <th>Development w/ ongoing training & mentoring</th>
        </tr>
		  <tr>
	          <td>10/13</td>
	          <th><a href="http://cfasummit.org/">CfA Summit</a></th>
	        </tr>
			<tr class="odd">
	          <td>10/13 - 11/13</td>
	          <th>Hand-off to city</th>
	        </tr>
      </table>
    </div>
  </div>
</div>
<?php get_footer(); ?>
