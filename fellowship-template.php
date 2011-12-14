

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
    <h2>OUR FELLOWSHIP</h2>
    <p>Through Code for America's fellowship program, talented web developers, designers, and entrepreneurs leverage the power of the internet to make governments more open and efficient, and in doing so, they become civic leaders able to realize transformational change in government with technology.</p>
  </div>
  <?php include 'fellow_carousel.php'; ?>

</div>
<div class="wrap" id="dots"></div>
<div class="wrap clearfix" id="fellows-wrap">
  <div id="maincontent">
    <h2 class="ttl">Why Become a Fellow? <a href="#" class="red-btn"><span class="st_sharethis_custom">SHARE THIS +</span></a></h2>
<p>	During the 11-month program, fellows not only work together to help cities innovate, but also receive the training and support to be positioned as a leader in business, public service, or both:</p>
    <ul id="why">
      <li><strong class="number">1</strong> <strong>Gov 2.0 Training.</strong> You will start with a crash course in municipal government and gain a practical understanding of the vital intersection of politics and technology.</li>
      <li><strong class="number">2</strong> <strong>Professional Development.</strong> The biggest names in the web industry and the Gov 2.0 movement will provide you unparalleled networking, mentoring, and support.</li>
      <li><strong class="number">3</strong> <strong>Alumni Connections.</strong> Working closely with other talented individuals, you will develop lasting professional relationships in a fast-paced, startup atmosphere.</li>
    </ul>
    <div class="box">
      <h3 class="ttl">What Are We looking For? <a href="/fellows/2012-program-and-timeline/" class="more">The Program</a></h3>
      <ul id="what" class="clearfix">
        <li><img src="<?php bloginfo( 'template_url' ); ?>/images/fellows1.jpg" alt="" /></li>
        <li><img src="<?php bloginfo( 'template_url' ); ?>/images/fellows2.jpg" alt="" /></li>
        <li><img src="<?php bloginfo( 'template_url' ); ?>/images/fellows3.jpg" alt="" /></li>
        <li><img src="<?php bloginfo( 'template_url' ); ?>/images/fellows5.jpg" alt="" /></li>
      </ul>
      <p>Anyone with the skills and passion to make cities work better using technology. Many of you will be starting your careers, but others of you will have been working on the web for years and just want a chance to do something important and altruistic. All of you will want to see your work make a difference to cities and change how government works.</p>
    </div>
    <div class="box">
      <h3 class="ttl">The application Process <a href="/fellows/fellow-selection/" class="more">Read More</a></h3>
      <p>To apply, prospective fellows must submit examples of previous relevant work, along with short essays explaining their interest, goals, and background. The 2012 Fellowship begins in January 2012. The application cycle for 2013 is now open with a <strong>Spring Cycle deadline of March 18, 2012</strong>.</p>
    </div>
    <div class="box">
      <h3 class="ttl">The Training <a href="/fellows/institute/" class="more">Read More</a></h3>
      <p>The selected fellows come together at the Bay Area headquarters for a month of training, team building, working on internal tools, and project research.  A key element of this portion of the program is the guest speaker series; leaders in both government and the web industry provide inspiration and build the corps’ networks.</p>
    </div>
  </div>
  <div class="right-col">
    <div class="testimonial-wrap">
      <div class="testimonial-content">
        <h4>"Join our movement... and <em>make a difference</em>"</h4>
        <p>Aneesh Chopra <span class="position">United States CTO</span></p>
        <img src="<?php bloginfo( 'template_url' ); ?>/images/Aneesh.jpg" alt="Aneesh Chopra" /> </div>
    </div>
    <ul>
      <li><a href="/2011-code-for-america-fellows/">Meet Our Fellows</a></li>
      <li><a href="/fellows/2012-program-and-timeline/">Learn More About the Fellowship</a></li>
      <li><a href="/fellows/nominate/">Nominate a Future Fellow</a></li>
      
      <li><a href="http://codeforamerica.org/fellows/apply/" class="active">Apply To Be A Fellow</a></li>
    </ul>
    <div id="dates">
      <h3>Dates To Keep In Mind</h3>
      <h4>2013 Applicants</h4>
      <table border="0" cellspacing="0" cellpadding="0">
		<tr  class="odd">
          <td>03/18/11</td>
          <th>Spring Cycle Application Deadline <span>&raquo;</span></th>
        </tr>
		<tr>
          <td>03/18/11 - 04/15/11</td>
          <th>Interviews for Spring Applicants <span>&raquo;</span></th>
        </tr>
        <tr class="odd">
          <td>05/4/11</td>
          <th>Spring Applicants Notified of Selection <span>&raquo;</span></th>
        </tr>
        <tr>
          <td>07/29/11</td>
          <th>Fall Application Deadline <span>&raquo;</span></th>
        </tr>
        <tr class="odd">
          <td>08/11 - 09/11</td>
          <th>Interviews <span>&raquo;</span></th>
        </tr>
        <tr>
          <td>09/14/11</td>
          <th>Applicants Notified of Selection <span>&raquo;</span></th>
        </tr>
		 <tr class="odd">
	          <td>10/11</td>
	          <th>2013 CfA Fellows<br>Announced <span>&raquo;</span></th>
	        </tr>
       	<tr>
          <td>01/02/13</td>
          <th>2013 Fellowship Starts <span>&raquo;</span></th>
        </tr>
      </table>
      <h4>2012 Fellows</h4>
      <table border="0" cellspacing="0" cellpadding="0">
        <tr class="odd">
          <td>01/11</td>
          <th>Orientation/CFA Institute <span>&raquo;</span></th>
        </tr>
        <tr>
          <td>02/11</td>
          <th>City Tour <span>&raquo;</span></th>
        </tr>
        <tr class="odd">
          <td>03/11 - 09/11</td>
          <th>Development with ongoing training and mentoring <span>&raquo;</span></th>
        </tr>
		  <tr>
	          <td>10/11</td>
	          <th>CfA Summit (Conference) <span>&raquo;</span></th>
	        </tr>
			<tr class="odd">
	          <td>10/11 - 11/11</td>
	          <th>Maintenance/Hand-off <span>&raquo;</span></th>
	        </tr>
      </table>
    </div>
  </div>
</div>
<?php get_footer(); ?>
