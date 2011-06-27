

<?php
/**
 * The template for displaying all pages.
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */

/*
Template Name: Labs-Main
*/

get_header(); ?>

<div class="wrap clearfix" id="cities">
  <div id="participating-wrap" class="clearfix">
    <div id="participating">
      <h2>Labs Fridays</h2>
      <p>Every Friday is Labs Day at Code for America.  We open the doors, and work on projects that you and our fellows care about.  We're focused on cool gov-y projects, things that will make your m    ayor go, 'cool!'  Coders and technologists are welcome, zombies are not.
      <ul>
        <li><a href="http://github.com/cfalabs">github.com/cfalabs</a></li>
        <li><a href="http://webchat.freenode.net/?channels=cfalabs">IRC: #cfalabs</a></li>
        <li><a href="#">Best Practice Stuff</a></li>        
      </ul>
    </div>
    <ul id="slider">
      <li> <img src="http://farm6.static.flickr.com/5084/5341083064_f4886d0175_z.jpg" width="600" alt="CfA Group" />
        <div class="clearfix">
          <table border="0" cellspacing="0" cellpadding="0">
            <tr>
              <th>Don't Be Scared</th>
              <td>Join us and code something cool for government.</td>
            </tr>
          </table>
        </div>
      </li>
      <li> <img src="<?php bloginfo( 'template_url' ); ?>/images/labs/scottanddan.png" alt="Labs" />
        <div class="clearfix">
          <table border="0" cellspacing="0" cellpadding="0">
            <tr>
              <th>I Haz Code?</th>
              <td>Contribute it! Win a prize.</td>
            </tr>
          </table>
        </div>
      </li>
    </ul>
  </div>
  <div id="twocols-container" class="clearfix">
    <div id="maincontent" class="entry-content">
      
			<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>


								<?php the_content(); ?>
							
								<?php edit_post_link( __( 'Edit', 'twentyten' ), '<span class="edit-link">', '</span>' ); ?>


		<?php endwhile; ?>

    	<div class="wrap" id="cfa-blog" style="">
    		<div class="ttl">
    		    <a href="http://codeforamerica.org/feed/" class="like-btn" id="ttl-rss">RSS</a> Labs Friday Posts <a href="/blog" class="more">Go to Blog</a>
    		</div>	
    		<?php query_posts('showposts=3&category_name=labs'); ?>		  
    		<div>
        		<div id="maincontent">
        		    <div class="ttl">	
        		        <?php $headerimg="headerimg"; echo get_post_meta($post->ID, $headerimg, true); ?>
        			</div>
        			<?php $blogtitle = get_post_meta($post->ID, 'blogtitle', true);
        			$blogdesc = get_post_meta($post->ID, 'blogdesc', true); ?>
        			<?php get_template_part( 'loop' ); ?>
        	    </div>
    	    </div>  
    	</div>
    </div>
    <div class="right-col"> 
      <h3>Upcoming Labs Fridays</h3>
      <p>We have an open house policy on CfA Fridays.  Drop in and code with us.</p>
      <table border="0" cellspacing="0" cellpadding="0">
        <tr class="odd">
          <td>1/14/2011</td>
          <th>Register <span>&raquo;</span></th>          
        </tr>
        <tr>
          <td>1/21/2010</td>
          <th>Register <span>&raquo;</span></th>
        </tr>
        <tr class="odd">
        <td><td>
        </tr>        
      </table>
      <p><h3>Labs Award Board</h3></p>
      <p>Awesome Projects By Awesome People</p>
      <table border="0" cellspacing="0" cellpadding="0">
        <tr class="odd">
          <td>1/14/2010</td>
          <th>Erik Michaels-Ober</th>
          <th>Follow-All <span>&raquo;</span></th>                    
        </tr>
      </table>
      
    </div>
  </div>
</div>
<?php get_footer(); ?>
