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
          <ul id="slide-nav" class="thumbs"> 
         <div style="width: 181px; float: left;">     
	<li><a href="#slide-1"><img src="<?php bloginfo("template_url"); ?>/images/headers/codedsky.jpg" alt="" /><strong><span>Seeking Cites</span></strong></a></li> 
              <li><a href="#slide-2"><img src="<?php bloginfo('template_directory'); ?>/images/headers/boston.jpg" alt="" /><strong><span>Boston</span></strong></a></li>       
              <li><a href="#slide-3"><img src="<?php bloginfo("template_url"); ?>/images/headers/philly.jpg" alt="" /><strong><span>Philadelphia</span></strong></a></li> 
		</div>
       
 		<div style="float: left;">
	
			 <div id="slide-1" class="player"> 
	            <a href="/2012-city-webinar" class="post-image"> 
	            <img width="550" height="330"  src="<?php bloginfo('template_directory'); ?>/images/headers/codedsky.jpg" class="attachment-rotator-post-image wp-post-image" alt="bridge-2" title="bridge-2" />   
				<span class="title"><strong>Recode Your City:</strong><br />Webinar: Learn about the 2012 City Program</span> 
	            </a> 
	          </div>
       
        <div id="slide-2" class="player"> 
          <a href="/boston" class="post-image"> 
          <img width="550" height="330"  src="<?php bloginfo('template_directory'); ?>/images/headers/boston.jpg" class="attachment-rotator-post-image wp-post-image" alt="bridge-2" title="bridge-2" /> 
		<span class="title"><strong>The Boston Project:</strong><br />Improving High School Education by Connecting the Community</span> 
  
          </a> 
        </div>
        <div id="slide-3" class="player"> 
           <a href="/philadelphia" class="post-image"> 
           <img width="550" height="330"  src="<?php bloginfo('template_directory'); ?>/images/headers/philly.jpg" class="attachment-rotator-post-image wp-post-image" alt="bridge-2" title="bridge-2" />  
		<span class="title"><strong>The Philadelphia Project:</strong><br />Helping Citizens Get Involved to Support Public Services</span> 
 
           </a> 
         </div>
        <div id="slide-4" class="player"> 
	        <object width="547" height="330"><param name="movie" value="http://www.youtube.com/v/yR5Zsc-YEq4?fs=1&amp;hl=en_US&amp;rel=0"></param><param name="allowFullScreen" value="true"></param><param name="allowscriptaccess" value="always"></param><embed src="http://www.youtube.com/v/yR5Zsc-YEq4?fs=1&amp;hl=en_US&amp;rel=0" type="application/x-shockwave-flash" allowscriptaccess="always" allowfullscreen="true" width="547" height="330"></embed></object>
			 
	        </div>
          <div id="slide-5" class="player"> 
             <a href="/seattle" class="post-image"> 
             <img width="550" height="330"  src="<?php bloginfo('template_directory'); ?>/images/headers/seattle.jpg" class="attachment-rotator-post-image wp-post-image" alt="bridge-2" title="bridge-2" />   
			<span class="title"><strong>The Seattle Project:</strong><br />Empowering Civic Leaders to Mobilize their Communities</span> 

             </a> 
           </div>
           <div id="slide-6" class="player"> 
              <a href="/dc" class="post-image"> 
              <img width="550" height="330"  src="<?php bloginfo('template_directory'); ?>/images/headers/dc.jpg" class="attachment-rotator-post-image wp-post-image" alt="bridge-2" title="bridge-2" />   
			<span class="title"><strong>The DC Project:</strong><br />Working with Government to Share Technology for the Public Good</span> 

              </a> 
            </div> </div>

<div style="width: 181px; float: right;">   
			<li><a href="#slide-4"><img src="<?php bloginfo("template_url"); ?>/images/headers/tim.jpg" alt="" /><strong><span>Video</span></strong></a></li> 
              <li><a href="#slide-5"><img src="<?php bloginfo("template_url"); ?>/images/headers/seattle.jpg" alt="" /><strong><span>Seattle</span></strong></a></li> 
              <li><a href="#slide-6"><img src="<?php bloginfo("template_url"); ?>/images/headers/dc.jpg" alt="" /><strong><span>Washington DC</span></strong></a></li>      
 </div>
          </ul>                                                                
		</div>
	  </div>
	  <!--Newsletter Subscribtion -->
	
	
	
	  <form name="signup" action="http://action.codeforamerica.org/page/signup/cfa-email" method="post" id="signup" class="clearfix">
	  	<strong>CONNECT WITH CfA</strong> <input type="text" value="Email"  type="email" style="width: 160px;" id="email" name="email" onfocus="if(this.value==this.defaultValue)this.value='';" onblur="if(this.value=='')this.value=this.defaultValue;" /><input type="text" value="Zip Code"  type="email" id="zip" name="zip" style="border-left: 2px solid #f2f2f2; width: 70px;" onfocus="if(this.value==this.defaultValue)this.value='';" onblur="if(this.value=='')this.value=this.defaultValue;" /><button type="submit" class="like-btn">Send</button> <span>You should sign up to receive <br />
our (infrequent) newsletter</span>
	  </form>
	    <div class="wrap-t">
			<div class="wrap clearfix" id="become-wrap">
			<!--Become a Fellow -->
				<div class="box">
					<h2><strong>1</strong> Fellowship</h2>
					<img src="<?php bloginfo('template_directory'); ?>/images/become-fellow.jpg" alt="Become a Fellow" />
					<?php wp_nav_menu( array('menu'=> 'cfa_fellows', 'menu_id' => '','container' => 'ul',  ) ); ?>
				</div>
		
				<!--Become a City -->
				<div class="box">
					<h2><strong>2</strong> City Program</h2>
					<img src="<?php bloginfo('template_directory'); ?>/images/become-city.jpg" alt="Become a City" />
					<?php wp_nav_menu( array('menu'=> 'cfa_city', 'menu_id' => '','container' => 'ul',  ) ); ?>
				</div>
				
					<!--Get Involved -->
					<div class="box">
						<h2><strong>3</strong> Volunteers</h2>
						<img src="<?php bloginfo('template_directory'); ?>/images/get-involved.jpg" alt="Get Involved" />
						<?php wp_nav_menu( array('menu'=> 'cfa_get_involved', 'menu_id' => '','container' => 'ul',  ) ); ?>
					</div>
				<!--Support CfA -->
				<div class="box">
					<h2><strong>4</strong> Supporters</h2>
					<img src="<?php bloginfo('template_directory'); ?>/images/support-cfa.jpg" alt="Support CfA" />
					<?php wp_nav_menu( array('menu'=> 'cfa_support', 'menu_id' => '','container' => 'ul',  ) ); ?>
				</div>
			</div>
		</div>
		<div class="wrap-b">&nbsp;</div>
		<div class="wrap clearfix" id="whos">
			<h3>Who’s Got Our Back?</h3>
		<div class="prev"><img src="<?php bloginfo('template_directory'); ?>/images/prev-arrow.gif"></div>	<div id="mycarousel">
                <ul>
	<li><a href="http://www.knightfoundation.org" title="Knight Foundation"><img src="<?php bloginfo('template_directory'); ?>/images/logos/knight-logo.png"></a></li>
	<li><a href="http://www.omidyar.com/" title="Omidyar Foundation"><img src="<?php bloginfo('template_directory'); ?>/images/logos/on-logo.png"></a></li>
    <li><a href="http://www.rockefellerfoundation.org/" title="Rockefeller Foundation"><img src="<?php bloginfo('template_directory'); ?>/images/logos/rockefeller-logo.png"></a></li>
    <li><a href="http://www.casefoundation.org" title="Case Foundation"><img src="<?php bloginfo('template_directory'); ?>/images/logos/case-logo.png"></a></li>  
    <li><a href="http://www.esri.com" title="ESRI"><img src="<?php bloginfo('template_directory'); ?>/images/logos/esri-logo.png"></a></li>                

	<li><a href="http://www.oreillymedia.com" title="O'Reilly Media "><img src="<?php bloginfo('template_directory'); ?>/images/logos/oreilly-logo.png"></a></li>
    <li><a href="http://www.jointconcepts.com" title="Joint Concepts"><img src="<?php bloginfo('template_directory'); ?>/images/logos/jc-logo.png"></a></li>
 	
	<li><a href="http://www.sunlightfoundation.com" title="Sunlight Foundation"><img src="<?php bloginfo('template_directory'); ?>/images/logos/sunlight-logo.png"></a></li>
    
	<li><a href="/donors" title="More"><img src="<?php bloginfo('template_directory'); ?>/images/logos/more.png"></a></li>
	
                  <li><a href="http://www.sunlightfoundation.org" title="Sunlight Foundation"><img src="<?php bloginfo('template_directory'); ?>/images/logos/sunlight-logo.png"></a></li>
    </ul>             				
             </div><div class="next"><img src="<?php bloginfo('template_directory'); ?>/images/next-arrow.gif"></div>
			
		</div>
		<div class="wrap-t">
			<div class="wrap clearfix">
			<!--Helping Cities Solve Common Issues -->
				<div id="cities-issues">
					<h2>Helping Cities Solve <br />
					Common Issues</h2>
					<?php if ( is_active_sidebar( 'fourth-footer-widget-area' ) ) : ?>
									
											<?php dynamic_sidebar( 'fourth-footer-widget-area' ); ?>
					<?php endif; ?>
				</div>
				<!--CfA Blog -->
				
				

				<div id="cfa-blog">
					<h2>CfA Blog <a href="http://c4a.me/feed/" class="like-btn">RSS</a></h2>
					<?php query_posts('showposts=2'); ?>		  
								     <ul>   <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
								           <li> <h3><a href="<?php the_permalink() ?>"><?php the_title(); ?> <strong>»</strong></a></h3>
										<p>		<?php echo excerpt(10); ?>
										</p>
								</li>
								 
								        <?php endwhile; endif; ?>
				
					</ul>
					<a href="/code-for-america-blog/" class="btn">Go to Blog</a>
				</div>
				<!--Tweets -->
			<div id="tweets">				
				<h2>What’s Being Said About CfA ?</h2>				
				<script src="http://widgets.twimg.com/j/2/widget.js"></script>
                <script>
                new TWTR.Widget({
                  version: 2,
                  type: 'search',
                  search: 'codeforamerica',
                  interval: 3000,
                  title: '',
                  subject: '',
                  width: 280,
                  height: 170,
                  theme: {
                    shell: {
                      background: '#ebebeb',
                      color: '#ffffff'
                    },
                    tweets: {
                      background: '#ebebeb',
                      color: '#444444',
                      links: '#1985b5'
                    }
                  },
                  features: {
                    scrollbar: false,
                    loop: true,
                    live: true,
                    hashtags: true,
                    timestamp: true,
                    avatars: true,
                    toptweets: true,
                    behavior: 'default'
                  }
                }).render().start();
                </script>
					<style>.twtr-hd { padding: 0px; }
					.twtr-ft {display: none;}
					.twtr-tweet {font-size: 10px;}
					
					</style>
				</div>
			</div>
		</div>
		
		

<?php get_footer(); ?>
