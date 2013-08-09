<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query. 
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage CfA New Template
 * @since Cfa 2.0
 */

get_header(); ?>

<div class="wrap-b">

	<!--featured -->	  
    <div id="featured" style="width: 935px; margin: 0 auto; height: 290px; background: url() no-repeat bottom;padding: 20px 0px; clear: both;">
      <div class="callout" style="width: 400px; padding: 50px 15px 105px 10px; float: left;">
	    <h1 style="font-family: 'Oswald', Helvetica; text-transform: uppercase; color: black; font-size: 46px; line-height:50px; padding-bottom:10px; text-align: left;">Meet the Accelerator Companies</h1>
			<p style="text-align: left; font-size:18px; padding-left: 3px; padding-top: 0px; margin-top: 0px;">Our five accelerator companies have landed in CfA's San Francisco headquarters. Learn more about the <a href="/category/accelerator/">companies</a> or <a href="/accelerator-2/">learn more about the program</a>.</p>
		</div>
		<div class="acceleratorheader" style="float:right; width: 500px; padding: 5px 5px 5px 5px;"> <img src="<?php bloginfo('template_directory'); ?>/images/2013_accelerator_companies.png"></div>
</div>
	</div>
  </div>
</div>	
<div class="wrap clearfix" id="whos">
	<h3>Who’s Got Our Back?</h3>
	<div class="prev"><img src="<?php bloginfo('template_directory'); ?>/images/back-arrow2.png" alt="Back"></div>
	<div id="mycarousel">
		<ul>
			<li><a href="http://www.knightfoundation.org"       title="Knight Foundation"     ><img src="<?php bloginfo('template_directory'); ?>/images/logos/knight-logo.png"      alt="Knight Foundation"     ></a></li>
			<li><a href="http://www.omidyar.com/"               title="Omidyar Foundation"    ><img src="<?php bloginfo('template_directory'); ?>/images/logos/on-logo.png"          alt="Omidyar Foundation"    ></a></li>
			<li><a href="http://www.google.com"                 title="Google"                ><img src="<?php bloginfo('template_directory'); ?>/images/logos/google-logo.png"      alt="Google"                ></a></li>
            <li><a href="http://www.bluehost.com"               title="Bluehost"              ><img src="<?php bloginfo('template_directory'); ?>/images/logos/bluehost.jpg"         alt="Bluehost"              ></a></li>			
            <li><a href="http://www.arnoldfoundation.org"       title="Arnold Foundation"     ><img src="<?php bloginfo('template_directory'); ?>/images/logos/laurajohnarnoldfoundation.jpg"        alt="Arnold Foundation"></a></li>
            <li><a href="http://www.kauffman.org"               title="Kauffman"              ><img src="<?php bloginfo('template_directory'); ?>/images/logos/ewingmarionkauffman.jpg"         alt="Kauffman"              ></a></li>
            <li><a href="http://brfny.org/"                     title="Blue Ridge Foundation" ><img src="<?php bloginfo('template_directory'); ?>/images/logos/blueridgefoundation.jpg"         alt="Blue Ridge Foundation" ></a></li>
            <li><a href="http://downtownproject.com/" title="Downtown Project/Vegas Tech Fund" ><img src="<?php bloginfo('template_directory'); ?>/images/logos/downtownproject.jpg" alt="Downtown Project/Vegas Tech Fund" ></a></li>

			<li><a href="http://www.accela.com/"                 title="Accela"                ><img src="<?php bloginfo('template_directory'); ?>/images/logos/accela.jpg"      alt="Accela"                ></a></li>

            <li><a href="http://www.esri.com"                   title="ESRI"                  ><img src="<?php bloginfo('template_directory'); ?>/images/logos/esri-logo.png"        alt="ESRI"                  ></a></li>
            <li><a href="http://www.emc.com/"                   title="EMC"                  ><img src="<?php bloginfo('template_directory'); ?>/images/logos/emc.jpg"        alt="EMC"                  ></a></li>

			
			<li><a href="http://www.oreillymedia.com"           title="O'Reilly Media"        ><img src="<?php bloginfo('template_directory'); ?>/images/logos/oreilly-logo.png"     alt="O'Reilly Media"        ></a></li>

			<li><a href="http://www.hewlett.org/"     title="Hewlett Foundation"   ><img src="<?php bloginfo('template_directory'); ?>/images/logos/hewlettfoundation.jpg"    alt="Hewlett Foundation"   ></a></li>
			<li><a href="http://www.venturesfoundation.org/" title="Philanthropic Ventures Foundation"><img src="<?php bloginfo('template_directory'); ?>/images/logos/philanthropicventures.jpg" alt="Philanthropic Ventures Foundation"></a></li>
			<li><a href="http://www.chcf.org/" title="California Healthcare Foundation"   ><img src="<?php bloginfo('template_directory'); ?>/images/logos/californiahealthcare.jpg"    alt="California Healthcare Foundation"   ></a></li>
			<li><a href="/donors"                               title="More"                  ><img src="<?php bloginfo('template_directory'); ?>/images/logos/more.png"             alt="More"                  ></a></li>
		</ul>
	</div>
	<div class="next"><img src="<?php bloginfo('template_directory'); ?>/images/next-arrow2.png" alt="Next"></div>
</div>
<div class="wrap-t">
	<div class="wrap clearfix">
		<!--Helping Cities Solve Common Issues -->
		<div id="cities-issues" class="home-tile right-col" style="background: none;">				
			<div id="wp-widget">
              <h2>Key Dates:</h2>
  <ul class="dates">
  <li><div>Oct 15-17</div> <a href="http://cfasummit.org">CfA Summit</a></li>
  <li><div>Nov (TBA)</div> Accelerator Demo Day</li>
  </ul>
				<ul>
					<li><a href="http://codeforamerica.org/apply">Apply for the Fellowship</a></li>
					<li><a href="http://brigade.codeforamerica.org">Join the Brigade</a></li>
					<li><a href="/about">Learn More</a></li>
				</ul>
			</div>
		</div>
  	<!--CfA Blog -->
  	<div id="cfa-blog" class="home-tile">
  		<h2>CfA Blog <a href="http://c4a.me/feed/" class="like-btn">RSS</a></h2>

  		<?php query_posts('showposts=2&tag__not_in=61'); ?>		  

  		<ul>
  		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
  			<li>
  				<h3><a href="<?php the_permalink() ?>"><?php the_title(); ?> <strong>»</strong></a></h3>
  				<p><?php echo excerpt(12); ?></p>
  			</li>
  		<?php endwhile; endif; ?>
  		</ul>

  		<a href="/code-for-america-blog/" class="btn">Go to Blog</a>
  	</div>
  	<!--Featured App -->
  	<div id="featured-app" class="home-tile right-col">
  		<?php if ( is_active_sidebar( 'fourth-footer-widget-area' ) ) : ?>

  		<?php dynamic_sidebar( 'fourth-footer-widget-area' ); ?>
  		<?php endif; ?>
  	</div>
	</div>
</div>

<?php get_footer(); ?>
