<?php
/**
 * The template for displaying all pages.
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */

/*
Template Name: About
*/

get_header(); ?>



<div class="wrap-b">
	<div class="wrap clearfix">
		<div id="mission">
			<h2>OUR MISSION</h2>
			<p>Code for America helps governments work better for everyone with the people and the power of the web. Through our <a href="/fellows">Fellowship</a>, <a href="/accelerator">Accelerator</a>, and <a href="/brigade">Brigade</a>, we're building a network of cities, citizens, community groups, and startups, all equally committed to reimagining government for the 21st century.</p>
		</div>
        <?php include 'fellow_carousel.php'; ?>		
	</div>
</div>
<div class="wrap clearfix" id="whh">
	<div class="box">
		<h3>Who we are</h3>
		<p>Code for America is a new non-profit, and a new kind of organization. Our team is made up of web geeks, city experts, and technology industry leaders. We are building a network of civic leaders and organizations who believe there is a better way of doing things and want to make a difference.</p>
		<p align="right"><a href="/who-we-are" class="more">Get to know us</a></p> 
	</div>
	<div class="box">
		<h3>what we do</h3>
		<p>We make it easy and attractive for the web generation to give back through our Fellowship, which connects  technologists with cities to work together to innovate; our Accelerator, which will support disruptive civic startups; and our Brigade, which helps local, community groups reuse civic software.</p>
		<p align="right"><a href="/cities" class="more">Our Current Projects</a></p> 
		
	</div>
	<div class="box">
			<h3>how we make a difference</h3>
			<p>Code for America helps governments become more connected, lean, and participatory through new opportunities for public service -- both inside and outside government -- so we're not only making a direct impact everyday, but also creating the relationships and network for lasting change.</p>
			<p align="right"><a href="/broader-impact" class="more">Our Broader Impact</a></p> 
			
	<!--	<h3>How we’re funded</h3>
		<p>Code for America is generously supported by leaders in philanthropy and technology. Their support helps make our work connecting city government and web talent possible.</p>
		<p align="right"><a href="#" class="more">our generous donors</a></p>-->
	</div>
</div>
<div class="wrap-t">
<div class="wrap clearfix" id="team-donors">
  <div id="maincontent">
	<h2 class="ttl">meet our team</h2>    
    <div class="team">
        
		<h3>board of directors <span style="color: #999; margin-left: 10px;"><span id="tip2"></span></span></h3>
		<ul class="clearfix">
			<li class="first"><a href="/author/jen" rel="tooltip2" title="Jennifer Pahlka"><img src="<?php bloginfo( 'template_url' ); ?>/images/staff/jen.jpg" alt="Jennifer Pahlka" /></a></li>
		<li>	<a href="/who-we-are/#toreilly" rel="tooltip2" title="Tim O'Reilly"><img src="<?php bloginfo( 'template_url' ); ?>/images/staff/toreilly.jpg" alt="Staff name" /></a></li>
		<li>	<a href="/who-we-are/#jlilly" rel="tooltip2" title="John Lilly"><img src="<?php bloginfo( 'template_url' ); ?>/images/staff/jlilly.jpg" alt="Staff name" /></a></li>
		<li>	<a href="/who-we-are/#sdonohue" rel="tooltip2" title="Stacy Donohue"><img src="<?php bloginfo( 'template_url' ); ?>/images/staff/sdonohue.png" alt="Stacy Donohue" /></a></li>
		<li>	<a href="/who-we-are/#eries" rel="tooltip2" title="Eric Ries"><img src="<?php bloginfo( 'template_url' ); ?>/images/staff/eries.png" alt="Staff name" /></a></li>
		<li>	<a href="/who-we-are/#njacob" rel="tooltip2" title="Nigel Jacob"><img src="<?php bloginfo( 'template_url' ); ?>/images/staff/njacob.png" alt="Staff name" /></a></li>
		</ul>
		
		<h3>STAFF <span style="color: #999; margin-left: 10px;"><span id="tip1"></span></span></h3>
		<ul class="clearfix">
			
			<li class="first"><a href="/who-we-are/#bob" rel="tooltip1" title="Bob Sofman"><img src="<?php bloginfo( 'template_url' ); ?>/images/staff/bob.jpg" alt="Bob Sofman" /></a></li>
			<li><a href="/author/abhi" rel="tooltip1" title="Abhi Nemani"><img src="<?php bloginfo( 'template_url' ); ?>/images/staff/abhi.jpg" alt="Staff name" /></a></li>
			<li><a href="/author/mreilly"  rel="tooltip1" title="Meghan Reilly"><img src="<?php bloginfo( 'template_url' ); ?>/images/staff/meghan.png" alt="Staff name" /></a></li>
			<li><a href="/author/kevin" rel="tooltip1" title="Kevin Curry"><img src="<?php bloginfo( 'template_url' ); ?>/images/staff/kcurry.jpg" alt="Kevin Curry" /></a></li>
			<li><a href="/who-we-are/#rboug" rel="tooltip1" title="Ron Bouganim"><img src="<?php bloginfo( 'template_url' ); ?>/images/staff/rboug.png" alt="Staff name" /></a></li>
			<li><a href="/author/lr" rel="tooltip1" title="Lauren Reid"><img src="<?php bloginfo( 'template_url' ); ?>/images/staff/lauren.jpg" alt="Lauren Reid" /></a></li>
			
			<li class="first"><a href="http://codeforamerica.org/author/lauren/" rel="tooltip1" title="Lauren Dyson"><img src="http://codeforamerica.org/wp-content/uploads/2011/03/ldyson.jpeg" width="80px" alt="Staff name" /></a></li>
			<li><a href="/who-we-are/#michael" rel="tooltip1"  title="Michael Santus"><img src="<?php bloginfo( 'template_url' ); ?>/images/staff/michael.jpg" alt="Staff name" /></a></li>
			<li><a href="/who-we-are/#ashley" rel="tooltip1" title="Ashley Meyers"><img src="http://codeforamerica.org/wp-content/uploads/2011/03/ashley.jpg" width="80px" alt="Staff name" /></a></li>
			<li><a href="/who-we-are/#jack" rel="tooltip1" title="Jack Madans"><img src="<?php bloginfo( 'template_url' ); ?>/images/staff/jack.jpg" alt="Staff name" /></a></li>
			<li><a href="/who-we-are/#alex" rel="tooltip1" title="Alex Tran"><img src="http://codeforamerica.org/wp-content/uploads/2011/03/2012-09-10_AlexTran_8914sq-150x150.jpg" width="80px" alt="Staff name" /></a></li>
			<li><a href="/who-we-are/#clementine" rel="tooltip1" title="Clementine Breslin"><img src="http://codeforamerica.org/wp-content/uploads/2011/03/ClemBreslin.jpg" width="80px" alt="Staff name" /></a></li>
			
		</ul>


		<h3>board of advisors <span style="color: #999; margin-left: 10px;"><span id="tip3"></span></span></h3>
		<ul class="clearfix">
				<li class="first"><a href="/who-we-are/#dbryant" rel="tooltip3" title="Deb Bryant"><img src="<?php bloginfo( 'template_url' ); ?>/images/staff/dbryant.jpg" alt="Staff name" /></a></li>
				<li><a href="/who-we-are/#cjohnson" rel="tooltip3" title="Clay Johnson"><img src="<?php bloginfo( 'template_url' ); ?>/images/staff/cjohnson.jpg" alt="Staff name" /></a></li>
				<li><a href="/who-we-are/#jhodge" rel="tooltip3" title="Jascha Franklin-Hodge"><img src="<?php bloginfo( 'template_url' ); ?>/images/staff/jhodge.jpg" alt="Staff name" /></a></li>
				<li><a href="/who-we-are/#agreenfield" rel="tooltip3" title="Adam Greenfield"><img src="<?php bloginfo( 'template_url' ); ?>/images/staff/agreenfield.jpg" alt="Staff name" /></li>
				<li><a href="/who-we-are/#pcorbett" rel="tooltip3" title="Peter Corbett"><img src="<?php bloginfo( 'template_url' ); ?>/images/staff/pcorbett.jpg" alt="Staff name" /></a></li>
				<!--<li class="first"><a href="/who-we-are/#clawson" rel="tooltip3" title="Carolyn Lawson"><img src="<?php bloginfo( 'template_url' ); ?>/images/staff/clawson.jpg" alt="Staff name" /></a></li>-->
				<li><a href="/who-we-are/#mmigurski" rel="tooltip3" title="Michal Migursky"><img src="<?php bloginfo( 'template_url' ); ?>/images/staff/mmigurski.jpg" alt="Staff name" /></a></li>
				<li><a href="/who-we-are/#bcerveny" rel="tooltip3" title="Ben Cerveny"><img src="<?php bloginfo( 'template_url' ); ?>/images/staff/bcerveny.jpg" alt="Staff name" /></a></li>
				<li class="last"><a href="/who-we-are/#david" rel="tooltip3"  title="David Eaves"><img src="<?php bloginfo( 'template_url' ); ?>/images/staff/david.jpg" alt="Staff name" /></a></li>
  			
				<li><a href="/who-we-are/#arasiej" rel="tooltip3" title="Andrew Rasiej"><img src="<?php bloginfo( 'template_url' ); ?>/images/staff/arasiej.jpg" alt="Staff name" /></a></li>

				<li><a href="/who-we-are/#cshirky" rel="tooltip3" title="Clay Shirky"><img src="<?php bloginfo( 'template_url' ); ?>/images/staff/cshirky.jpg" alt="Staff name" /></a></li>
				<li><a href="/who-we-are/#tsteinberg" rel="tooltip3" title="Tom Steinberg"><img src="http://codeforamerica.org/wp-content/uploads/2011/03/tomsteinbergsmall.jpg" width="80px" alt="Staff name" /></a></li>
				<li><a href="/who-we-are/#ekim" rel="tooltip3" title="Eugene Eric Kim"><img src="http://codeforamerica.org/wp-content/uploads/2011/03/eugenekimsmall.jpg" width="80px" alt="Staff name" /></a></li>
				
				
				
		</ul>
		<p align="right" style="margin-top: -3px;"><a href="/who-we-are/#city-steering" class="more"><strong>CITY STEERING COMMITTEE</strong></a>&nbsp;&nbsp;&nbsp;<a href="/jobs" class="more"><strong>JOB OPPORTUNITIES</strong></a></p>
		
	</div>
	
  </div>
  <div class="right-col">
	<h3>Current Donors</h3>
	<table border="0" cellspacing="0" cellpadding="0">
	<tr class="odd">
	 <th>Google</th>
	 <td>$1,500,000</td>
	</tr>
	<tr>
    <th>Omidyar Network</th>
    <td>$1,000,000</td>
  </tr>
  <tr class="odd">
    <th>Knight Foundation</th>
    <td>$750,000</td>
  </tr>
  <tr>
    <th>Bluehost</th>
    <td>$250,000</td>
  </tr>
  <tr class="odd">
      <th>Kauffman Foundation</th>
      <td>$135,000</td>
    </tr>
 <tr>
    <th>ESRI</th>
    <td>$100,000</td>
  </tr>
<tr class="odd">
    <th>O'Reilly Media</th>
    <td>$100,000</td>
  </tr>
<tr>
    <th>Kaphan Foundation</th>
    <td>$50,000</td>
  </tr>
  <tr class="odd">
    <th>O’Reilly Foundation</th>
    <td>$50,000</td>
  </tr>
</table>
<p align="right"><a href="/donors" class="more"><strong>MORE</strong></a></p>

  </div>
  
</div>
<!--In the press -->
		<div class="wrap" id="press">
			<div class="ttl">In the press <a href="/press" class="more">view more articles</a></div>
			<a href="http://www.fastcompany.com/magazine/151/icitizen-bonus.html"><h2 class="first">How an Army of Techies is Taking on City Hall</h2></a>
			<p class="date-cat">Nov 29, 2010, <a href="http://www.fastcompany.com">Fast Company</a></p>
			<p><img src="/wp-content/themes/cfawp2012/images/Fast-Company-Logo.jpg" width="200px" align="right">This January, a new organization called Code for America, with support from Yahoo, Microsoft, and others, will launch, aiming to leverage the idealism of a generation of young programmers, this time from within city hall… “This transcends political ideology,” says Jennifer Pahlka, Code for America’s founder. “One thing that people of different backgrounds can agree on is that government needs to get better.”</p>
			
		
			
			<a href="http://www.govtech.com/education/Code-for-America-Programmers-City-Governments.html"><h2>‘Code for America’ Programmers to Work in City Governments</h2></a>
			<p class="date-cat">Nov 3, 2010, <a href="http://www.govtech.com">Government Technology</a></p>
			<p><img src="/wp-content/themes/cfawp2012/images/govtech-logo.gif" width="200px" align="right">Four cities will each receive a team of five open source Web programmers for 11 months, as selected by Code for America, a new nonprofit that’s pairing Web geeks with city governments. The selected cities were Boston, Seattle, Philadelphia and Washington, D.C. Each city paid $250,000 to participate, which included submitting applications and proposals for what they wanted from a team of fellows.</p>
			
	

			<a href="http://bits.blogs.nytimes.com/2010/07/06/changing-government-and-tech-with-geeks/">	<h2>Changing Government and Tech With Geeks</h2></a>
				<p class="date-cat">July 6, 2010, <a href="http://www.nytimes.com">New York Times</a></p>
				<p><img src="/wp-content/themes/cfawp2012/images/nyt-logo.jpg" width="200px" align="right">Talking about government and computer programming most likely doesn’t evoke the feeling of “fun” for most Americans. But a group of Web geeks and technology leaders is trying to change that with a new nonprofit project, Code for America, which aims to import the efficiency of the Web into government infrastructures.</p>
			
		</div>
</div>
		

<?php get_footer(); ?>
