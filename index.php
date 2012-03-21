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
	
		<div id="featured" style="
		    width: 935px;
		    margin: 0 auto;
		    background-image: url(http://codeforamerica.org/wp-content/uploads/2012/03/curve.png);
		    height: 385px;
		">
		<div class="callout" style="
		    width: 400px;
		    padding: 50px;
		">
		<h2 style="
		    font-family: oswald;
		    text-transform: uppercase;
		    color: black;
		    font-size: 32px;
		    text-align: left;
		    letter-spacing: -.04em;.;
		    line-height: 1.2em;
		">Getting Governments Back on the Innovation Curve</h2>
		<p style="
		    text-align: left;
		    padding-left: 3px;
		">Our fellows work hand in hand with forward thinking cities across the country to help them do more with less.<br />The deadline for the 2013 program is <strong>March 31</strong>.</p>
		<a href="/cities/apply"><img src="http://codeforamerica.org/wp-content/uploads/2012/03/cities-apply.png" align="left"></a>
		<a href="/cities"><img src="http://codeforamerica.org/wp-content/uploads/2012/03/learn.png" align="left"></a></div>
		</div>

	  </div>
	  <!--Newsletter Subscribtion -->

		<div class="wrap clearfix" id="whos">
			<h3>Who’s Got Our Back?</h3>
		<div class="prev"><img src="<?php bloginfo('template_directory'); ?>/images/prev-arrow.gif"></div>	<div id="mycarousel">
                <ul>
	<li><a href="http://www.knightfoundation.org" title="Knight Foundation"><img src="<?php bloginfo('template_directory'); ?>/images/logos/knight-logo.png"></a></li>
	<li><a href="http://www.omidyar.com/" title="Omidyar Foundation"><img src="<?php bloginfo('template_directory'); ?>/images/logos/on-logo.png"></a></li>
    <li><a href="http://www.rockefellerfoundation.org/" title="Rockefeller Foundation"><img src="<?php bloginfo('template_directory'); ?>/images/logos/rockefeller-logo.png"></a></li>
    <li><a href="http://www.google.com" title="Google"><img src="<?php bloginfo('template_directory'); ?>/images/logos/google-logo.png"></a></li>  

    <li><a href="http://www.esri.com" title="ESRI"><img src="<?php bloginfo('template_directory'); ?>/images/logos/esri-logo.png"></a></li>                
	<li><a href="http://www.oreillymedia.com" title="O'Reilly Media "><img src="<?php bloginfo('template_directory'); ?>/images/logos/oreilly-logo.png"></a></li>
	<li><a href="http://www.bluehost.com" title="Bluehost"><img src="<?php bloginfo('template_directory'); ?>/images/logos/bluehost.jpg"></a></li>
	
	<li><a href="http://www.casefoundation.org" title="Case Foundation"><img src="<?php bloginfo('template_directory'); ?>/images/logos/case-logo.png"></a></li>  
    
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
					<?php if ( is_active_sidebar( 'fourth-footer-widget-area' ) ) : ?>
									
											<?php dynamic_sidebar( 'fourth-footer-widget-area' ); ?>
					<?php endif; ?>
				</div>
				<!--CfA Blog -->
				
				

				<div id="cfa-blog">
					<h2>CfA Blog <a href="http://c4a.me/feed/" class="like-btn">RSS</a></h2>
					<?php query_posts('showposts=2&tag__not_in=61'); ?>		  
								     <ul>   <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
								           <li> <h3><a href="<?php the_permalink() ?>"><?php the_title(); ?> <strong>»</strong></a></h3>
										<p>		<?php echo excerpt(12); ?>
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
