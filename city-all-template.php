

<?php
/**
 * The template for displaying all pages.
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */

/*
Template Name: All Cities
*/

get_header(); ?>
<style>
.anythingControls {display:none;}
</style>
<div class="wrap clearfix" id="cities">
  <!--PARTICIPATING CITIES -->
  <div id="participating-wrap" class="clearfix">
    <div id="participating">
      <h2>CITY PARTNERS </h2>
      <div class="links"> 2011: <a href="/boston">Boston <span>&raquo;</span></a> <a href="/philadelphia">Philadelphia <span>&raquo;</span></a> <a href="/seattle">Seattle <span>&raquo;</span></a> <br />
	2012: <a href="/austin">Austin <span>&raquo;</span></a> <a href="/2012-partners/detroit">Detroit <span>&raquo;</span></a> <a href="/2012-partners/chicago">Chicago <span>&raquo;</span></a>  <a href="/2012-partners/honolulu">Honolulu <span>&raquo;</span></a>  <a href="/2012-partners/macon">Macon <span>&raquo;</span></a> <a href="/2012-partners/nola">New Orleans <span>&raquo;</span></a>  <a href="/2012-partners/philadelphia">Philadelphia <span>&raquo;</span></a>  <a href="/2012-partners/santa-cruz">Santa Cruz <span>&raquo;</span></a> <a href="http://codeforamerica.org/cities/apply/">Apply for 2014 <span>&raquo;</span></a></div>
      <p>CfA connects forward-thinking cities with the talent from the web industry to develop reusable civic technology. Partnering cities will not only solve a critical problem using technology, but also help cultivate the next generation of tech-savvy, civic leaders.
	
	</p>
      <ul>
        <li><a href="/cities/faqs-cities-applying-to-program/">Learn more about the  program</a></li>
        <li><a href="/citizen-action-center">Spread the word in your city</a></li>
        <li><a href="http://codeforamerica.org/cities/apply/" class="active">apply to become a cfa city</a></li>
      </ul>
    </div>
	<link rel="stylesheet" href="http://leaflet.cloudmade.com/dist/leaflet.css" />
	<!--[if lte IE 8]><link rel="stylesheet" href="../dist/leaflet.ie.css" /><![endif]-->
	<div id="map" style="width: 600px; height: 325px"><iframe src="http://player.vimeo.com/video/53640839" width="600" height="325" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe></div>
  </div>

  <div id="twocols-container" class="clearfix">
    <div id="maincontent" class="entry-content">
      
			<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>


								<?php the_content(); ?>
							
								<?php edit_post_link( __( 'Edit', 'twentyten' ), '<span class="edit-link">', '</span>' ); ?>


		<?php endwhile; ?>


    </div>
    <div class="right-col">
      <h3>Dates To Keep In Mind</h3>
      <h4>2014 City Application Timeline</h4>
      <p>The application process for 2013 cities will be opening in early January. Till then, be sure to let us know your city is interested, and we can start the conversation.</p>
      <table border="0" cellspacing="0" cellpadding="0">
        <tr class="odd">
          <td>1/09/13</td>
          <th>Application Process<br />
            Opened <span>&raquo;</span></th>
        </tr>
        <tr>
          <td>1/10 - 03/31</td>
          <th>City Application Period <span>&raquo;</span></th>
        </tr>
        <tr class="odd">
          <td>03/31</td>
          <th>Deadline for 
            Applications <span>&raquo;</span></th>
        </tr>
        <tr>
          <td>4/1 - 4/30</td>
          <th>City Applications Reviewed <span>&raquo;</span></th>
        </tr>
        <tr class="odd">
          <td>5/01 - 6/01</td>
          <th>Cities confirm support & funding<span>&raquo;</span></th>
        </tr>
        <tr>
          <td>6/01</td>
          <th>City Finalists Announced (Rolling Acceptance)<span>&raquo;</span></th>
        </tr>
        <tr class="odd">
          <td>October</td>
          <th>Selected Cities Announced to the Press <span>&raquo;</span></th>
        </tr>
        <tr>
          <td>January 2014</td>
          <th>New Class of Fellows
            Begins Program <span>&raquo;</span></th>
        </tr>
      </table>
    </div>
  </div>
</div>
<?php get_footer(); ?>
