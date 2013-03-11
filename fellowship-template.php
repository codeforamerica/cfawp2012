

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
    <p>Through Code for America's fellowship program, passionate web developers, designers, and entrepreneurs collaborate with municipal leaders to leverage the power of the internet -- to make government better, more efficient for us all. In doing so, fellows develop new skills, create a broad network of civic and tech leaders, and most of all, have an impact.</p>
  </div>
  <?php include 'fellow_carousel.php'; ?>

</div>
<div class="wrap" id="dots"></div>
<div class="wrap clearfix" id="fellows-wrap">
  <div id="maincontent">
    <h2 class="ttl">You Can Code for America. Deadline 7/31. <a href="/apply" class="red-btn"><span>Apply Now +</span></a></h2>
<p>	During the 11-month program, fellows not only work together to help cities innovate, but also receive the training and support to be positioned as a leader in business, public service, or both:</p>
    <ul id="why">
      <li><strong class="number">1</strong> <strong>Gov 2.0 Training.</strong> You will start with a crash course in municipal government and gain a practical understanding of the vital intersection of politics and technology.</li>
      <li><strong class="number">2</strong> <strong>Professional Development.</strong> The biggest names in the web industry and the Gov 2.0 movement will provide you unparalleled networking, mentoring, and support.</li>
      <li><strong class="number">3</strong> <strong>Connections.</strong> Working closely with other talented individuals, you will develop lasting relationships in a fast-paced, startup atmosphere.</li>
      <li><strong class="number">4</strong> <strong>A Labor of Love.</strong> You’ll not only accomplish a lot and make the world a better place, you’ll have a lot of fun working with other passionate people. To borrow a line from the Peace Corps, it will be the toughest job you’ll ever love.</li>
    </ul>
    <div class="box">
      <h3 class="ttl">What Are We looking For? <a href="/fellows/2012-program-and-timeline/" class="more">The Program</a></h3>
      <ul id="what" class="clearfix">
        <li><img src="<?php bloginfo( 'template_url' ); ?>/images/fellows1.jpg" alt="" /></li>
        <li><img src="<?php bloginfo( 'template_url' ); ?>/images/fellows2.jpg" alt="" /></li>
        <li><img src="<?php bloginfo( 'template_url' ); ?>/images/fellows3.jpg" alt="" /></li>
        <li><img src="<?php bloginfo( 'template_url' ); ?>/images/fellows5.jpg" alt="" /></li>
      </ul>
      <p>Anyone with the skills and passion to make cities work better using technology. Some of you will be starting your careers, but others of you will have been working on the web for years and just want a chance to give back. All of you will want to see your work make a difference and change how government works.</p>
    </div>
    <div class="box">
      <h3 class="ttl">The application Process <a href="/fellows/fellow-selection/" class="more">Read More</a></h3>
      <p>To apply, prospective fellows must submit examples of previous relevant work, along with short explanations their interest, goals, and background. The 2014 Fellowship begins in January 2014. The application cycle for 2014 is open now through a <strong>July 31, 2013</strong>.</p>
    </div>
    <div class="box">
      <h3 class="ttl">The Training <a href="/fellows/institute/" class="more">Read More</a></h3>
      <p>The selected fellows kick-off the year at the San Francisco headquarters for a month of training, team building, working on internal tools, and project research. A key element of this portion of the program is the guest speaker series; leaders in both government and the web industry provide information and inspiration.</p>
    </div>
  </div>
  <div class="right-col">
    <div class="testimonial-wrap">
      <div class="testimonial-content">
        <h4>"Join our movement... and <em>make a difference</em>"</h4>
        <p>Aneesh Chopra <span class="position">Former U.S. CTO</span></p>
        <img src="<?php bloginfo( 'template_url' ); ?>/images/Aneesh.jpg" alt="Aneesh Chopra" /> </div>
    </div>
    <ul>
      <li><a href="/2011-code-for-america-fellows/">Meet Our Fellows</a></li>
      <li><a href="/fellows/2012-program-and-timeline/">Learn More About the Fellowship</a></li>
      
      <li><a href="http://codeforamerica.org/fellows/apply/" class="active">Apply To Be A Fellow</a></li>
    </ul>
    <div id="dates">
      <h3>Dates To Keep In Mind</h3>
      <h4>2014 Applicants</h4>
      <table border="0" cellspacing="0" cellpadding="0">
		<tr  class="odd">
          <td>07/31/13</td>
          <th>Application Deadline <span>&raquo;</span></th>
        </tr>
		<tr>
          <td>07/31/13 - 08/30/13</td>
          <th>Applicant Interviews<span>&raquo;</span></th>
        </tr>
        <tr class="odd">
          <td>09/01/13</td>
          <th>Applicants Notified of Selection <span>&raquo;</span></th>
        </tr>
		 <tr class="odd">
	          <td>10/13</td>
	          <th>2014 Fellows<br>Announced Publicly <span>&raquo;</span></th>
	        </tr>
       	<tr>
          <td>01/14</td>
          <th>2014 Fellowship Starts <span>&raquo;</span></th>
        </tr>
      </table>
      <h4>2013 Fellows</h4>
      <table border="0" cellspacing="0" cellpadding="0">
        <tr class="odd">
          <td>01/13</td>
          <th>Orientation/CfA Training <span>&raquo;</span></th>
        </tr>
        <tr>
          <td>02/13</td>
          <th>City Tour <span>&raquo;</span></th>
        </tr>
        <tr class="odd">
          <td>03/13 - 09/13</td>
          <th>Development w/ ongoing training & mentoring <span>&raquo;</span></th>
        </tr>
		  <tr>
	          <td>10/13</td>
	          <th>CfA Summit <span>&raquo;</span></th>
	        </tr>
			<tr class="odd">
	          <td>10/13 - 11/13</td>
	          <th>Hand-off to city<span>&raquo;</span></th>
	        </tr>
      </table>
    </div>
  </div>
</div>
<?php get_footer(); ?>
