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
	  <!--Video Gallery -->
	  	<div class="wrap clearfix" id="video-gallery">
			<ul class="thumbs">
				<li><a href="#"><img src="images/video-thumb.jpg" alt="" /> <strong><span>New York</span></strong></a></li>
				<li><a href="#"><img src="images/video-thumb.jpg" alt="" /> <strong><span>Washington, DC</span></strong></a></li>
				<li><a href="#"><img src="images/video-thumb.jpg" alt="" /> <strong><span>San Francisco</span></strong></a></li>
			</ul>
			<div id="player"><object width="547" height="330"><param name="movie" value="http://www.youtube.com/v/yR5Zsc-YEq4?fs=1&amp;hl=en_US&amp;rel=0"></param><param name="allowFullScreen" value="true"></param><param name="allowscriptaccess" value="always"></param><embed src="http://www.youtube.com/v/yR5Zsc-YEq4?fs=1&amp;hl=en_US&amp;rel=0" type="application/x-shockwave-flash" allowscriptaccess="always" allowfullscreen="true" width="547" height="330"></embed></object></div>
			<ul class="thumbs">
				<li><a href="#" class="active"><img src="images/video-thumb-active.jpg" alt="" /> <strong><span>New York</span></strong></a></li>
				<li><a href="#"><img src="images/video-thumb.jpg" alt="" /> <strong><span>Washington, DC</span></strong></a></li>
				<li><a href="#"><img src="images/video-thumb.jpg" alt="" /> <strong><span>San Francisco</span></strong></a></li>
			</ul>
		</div>
	  </div>
	  <!--Newsletter Subscribtion -->
	  <form method="post" action="" id="newsletter" class="clearfix">
	  	<strong>CONNECT WITH CfA</strong> <input type="text" value="type email here" /><button type="submit" class="like-btn">Send</button> <span>Enter your email address <br />
	to receive our (infrequent) newsletter</span>
	  </form>
	    <div class="wrap-t">
			<div class="wrap clearfix" id="become-wrap">
			<!--Become a Fellow -->
				<div class="box">
					<h2><strong>1</strong> Become a Fellow</h2>
					<img src="images/become-fellow.jpg" alt="Become a Fellow" />
					<ul>
						<li><a href="#">Learn About CfA</a></li>
						<li><a href="#">Meet CfA Fellows</a></li>
						<li><a href="#">Apply</a></li>
					</ul>
				</div>
				<!--Get Involved -->
				<div class="box">
					<h2><strong>2</strong> Get Involved</h2>
					<img src="images/get-involved.jpg" alt="Get Involved" />
					<ul>
						<li><a href="#">Contribute</a></li>
						<li><a href="#">Contact Your City</a></li>
						<li><a href="#">Blog for CfA</a></li>
					</ul>
				</div>
				<!--Become a City -->
				<div class="box">
					<h2><strong>3</strong> Become a City</h2>
					<img src="images/become-city.jpg" alt="Become a City" />
					<ul>
						<li><a href="#">Learn More</a></li>
						<li><a href="#">Recommend a City</a></li>
						<li><a href="#">Apply</a></li>
					</ul>
				</div>
				<!--Support CfA -->
				<div class="box">
					<h2><strong>4</strong> Support CfA</h2>
					<img src="images/support-cfa.jpg" alt="Support CfA" />
					<ul>
						<li><a href="#">Sponsor</a></li>
						<li><a href="#">Spread the Word</a></li>
						<li><a href="#">Volunteer</a></li>
					</ul>
				</div>
			</div>
		</div>
		<div class="wrap-b">&nbsp;</div>
		<div class="wrap clearfix" id="whos">
			<h3>Who’s Got Our Back?</h3>
			<div id="slider-wrap">
				<ul id="slider">
					<li><a href="#"><img src="images/sunlight-logo.png" alt="Sunlight Foundation" /></a></li>
					<li><a href="#"><img src="images/rockefeller-logo.png" alt="Rockefeller Foundation" /></a></li>
					<li><a href="#"><img src="images/case-logo.png" alt="The Case Foundation" /></a></li>
					<li><a href="#"><img src="images/esri-logo.png" alt="ESRI" /></a></li>
					<li><a href="#"><img src="images/on-logo.png" alt="Omidyar Network" /></a></li>
				</ul>
				<a href="#" class="like-btn" id="prev">Previous</a>
				<a href="#" class="like-btn" id="next">Next</a>		</div>
		</div>
		<div class="wrap-t">
			<div class="wrap clearfix">
			<!--Helping Cities Solve Common Issues -->
				<div id="cities-issues">
					<h2>Helping Cities Solve <br />
					Common Issues</h2>
					<img src="images/helping-cities.jpg" alt="Vivamus fermentum sollicitudin laoreet" class="left" />
					<h3>Vivamus fermentum sollicitudin laoreet</h3>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer ac ante in elit fringilla ullamcorpert integer amet, elit ante in fringilla ac Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus placerat diam id lorem iaculis at rhoncus turpis fermentum. Class aptent taciti sociosqu ad.</p>
					<a href="#" class="btn">Read More</a>
				</div>
				<!--CfA Blog -->
				<div id="cfa-blog">
					<h2>CfA Blog <a href="#" class="like-btn">RSS</a></h2>
					<ul>
						<li>
							<h3><a href="#">An Atypical Internship: Come Build CfA with a title of two lines <strong>&raquo;</strong></a></h3>
							<p>Here is a short description of the blog artcile to tease the viewer. It can span multiple lines..</p>
						</li>
						<li>
							<h3><a href="#">single line title <strong>&raquo;</strong></a></h3>
							<p>Here is a short description of the blog artcile to tease the viewer.</p>
						</li>
					</ul>
					<a href="#" class="btn">Go to Blog</a>
				</div>
				<!--Tweets -->
				<div id="tweets">
					<h3>What’s Being Said About CfA ?</h3>
					<div class="tweet">
						<p><a href="#">jalbertbowdenii</a> anybody in 757 hrva doing Code for America?</p>
						<p class="posted">13 hours ago reply</p>
						<img src="images/author-thumb.jpg" alt="" class="author" />
					</div>
					<div class="tweet last">
						<p><a href="#">democracy</a> Code for America webinar - this tuesday <a href="#">http://bit.ly/bxbIqK #edem</a></p>
						<p class="posted">13 hours ago reply</p>
						<img src="images/author-thumb1.jpg" alt="" class="author" />
					</div>
				</div>
			</div>
		</div>
		
		

<?php get_sidebar(); ?>
<?php get_footer(); ?>
