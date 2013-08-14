
<?php
/**
 * The template for displaying all pages.
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */

/*
Template Name: Finalist Detail
*/

get_header(); ?>

<div class="wrap clearfix" id="cities-detail">
  <div id="top-wrap" class="clearfix">
  	<div id="intro" class="entry-content">
      <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
        <h2><?php the_title(); ?><span style="color: #b3b2b2; font-size: 14px; vertical-align: top; margin-left: 5px;"></span></h2>
          <?php the_content(); ?>
          <?php edit_post_link( __( 'Edit', 'twentyten' ), '<span class="edit-link">', '</span>' ); ?>
    </div>
    <div class="right-col">
      <!--Get involved now -->
  	  <div id="get-involved">
		<h3>Get involved now</h3>
		<img src="<?php bloginfo( 'template_url' ); ?>/images/get-involved-rc.jpg" alt="Get involved now" />
	  </div>
	    <ul>
		  <li><a href="#">Sign up for updates</a>
    	   <form name="signup" action="http://action.codeforamerica.org/page/signup/<?php $emailform="emailform"; echo get_post_meta($post->ID, $emailform, true); ?>" method="post" id="newsletter" class="clearfix">
		   <input type="text" value="Email"  type="email" id="email" name="email" onfocus="if(this.value==this.defaultValue)this.value='';" onblur="if(this.value=='')this.value=this.defaultValue;" /><button type="submit" class="like-btn">Send</button> 
		   </form>
		  </li>
		  <li><a href="http://codeforamerica.org/fellows/apply">Apply for the Fellowship</a></li>
		  <li><a href="http://github.com/codeforamerica">Contribute some code</a></li>
		  <li><a href="/donate" class="active">Donate</a></li>
	    </ul>
      </div>
    </div>
    <div class="clearfix"><div>
  </div>
	<?php endwhile; ?>  
</div>



<?php get_footer(); ?>
