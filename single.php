<?php
/**
 * The Template for displaying all single posts.
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */

get_header(); ?>

	<div class="wrap clearfix" id="inner">
	  <div id="maincontent">

<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

<!--	<?php
            if ( in_category('CfA Labs') ) {
           echo "<div class='ttl' style='margin-bottom: 15px;'>	<img style='border: none;' src='http://codeforamerica.org/wp-content/uploads/2011/04/CfA_Labs.jpg'></div>"; }
           
           else {
               
               echo "<div class='ttl' style='margin-bottom: 15px;'>	<img style='border: none;' src='http://codeforamerica.org/wp-content/uploads/2010/12/BloggingForAmerica.jpg'></div>"; 
               
           
           
            } 
            ?>-->

					 <div class="ttl"><?php the_title(); ?><a href="#" class="red-btn"><span class="st_sharethis_custom">Share This</a></span></div>

					<div class="entry-meta" style="margin-top: 10px;">
					<small>	<?php twentyten_posted_on(); ?> <?php twentyten_posted_in(); ?></small>
					</div><!-- .entry-meta -->

					<div class="entry-content">
						<?php the_content(); ?>
						<?php wp_link_pages( array( 'before' => '<div class="page-link">' . __( 'Pages:', 'twentyten' ), 'after' => '</div>' ) ); ?>
						
					</div>
						<div class="entry-utility">
							<!--<?php twentyten_posted_in(); ?>-->
							<?php edit_post_link( __( 'Edit', 'twentyten' ), '<span class="edit-link">', '</span>' ); ?>
						</div><!-- .entry-utility --><!-- .entry-content -->
						<div id="nav-below" class="navigation" style="margin-bottom: 25px; min-height: 30px;">
							
						
							<div class="nav-previous" style="width: 250px;"><?php previous_post_link( '%link', '<span class="btn">' . _x( '&larr;', 'Previous post link', 'twentyten' ) . '</span> %title' ); ?></div>
							<div class="nav-next"  style="width: 250px; text-align: right;"><?php next_post_link( '%link', '%title <span class="meta-nav">' . _x( '&rarr;', 'Next post link', 'twentyten' ) . '</span>' ); ?></div>
						</div>
						<?php comments_template( '', true ); ?>
</div>


<div class="right-col">



<?php if ( get_the_author_meta( 'description' ) ) : // If a user has filled out their description, show a bio on their entries  ?>
				
					
					<div class="testimonial-wrap">
				      <div class="testimonial-content"> <?php echo get_avatar( get_the_author_meta( 'user_email' ), apply_filters( 'twentyten_author_bio_avatar_size', 90 ) ); ?>
				        <p><a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ) ); ?>"><?php printf( esc_attr__( '%s', 'twentyten' ), get_the_author() ); ?></a> <span class="position"><?php the_author_meta( 'nickname' ); ?></span></p>
				<p style="font-size: .8em; color: #666;">	
						
								<?php the_author_meta( 'oneline' ); ?>
									<br>	<a href="http://twitter.com/<?php the_author_meta( 'twitter' ); ?>"><?php the_author_meta( 'twitter' ); ?></a> | <a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ) ); ?>"><?php printf( __( 'Bio & Posts <span class="meta-nav">&rarr;</span>', 'twentyten' ), get_the_author() ); ?></a>	
															</p>
				         </div>
				    </div>
<?php endif; ?>

				

<?php endwhile; // end of the loop. ?>
<br />		

<?php get_sidebar(); ?>
<?php get_footer(); ?>
