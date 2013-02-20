

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

    <div class="ttl fullcolumn">
      Bring CfA to your city
    </div>

    <div id="participating">
      <p>We just opened up the application process for our 2014 City Fellowship Program, and we are actively seeking local governments who want to engage with our fellowship program. As many of you know, the Code for America Fellowship is a year long program focused on civic collaboration and innovation. 

But don’t take our word for it. Find out what past partners have to say about the program. </p>
      <p><a class="button" href="http://codeforamerica.org/cities/apply-now/">Apply Now<img src="<?php bloginfo( 'template_url' ); ?>/images/arrow_white.png" alt="arrow" /></a></p>
      <p><strong>Applications due March 31, 2013</strong></p>
    </div>
	<div id="video" style="width: 600px; height: 325px"><iframe src="http://player.vimeo.com/video/53640839" width="600" height="325" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe></div>
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
