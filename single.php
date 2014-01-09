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
					<header class="post-header isolate">
						<h2 class="post-title"><?php the_title(); ?></h2>
						<time class="post-date insulate text-whisper"><?php twentyten_posted_on(); ?></time>
					</header>

					

					<div class="post-body">
                
                    <div class="post-content layout-major">
						<div class="entry-content">
							<?php the_content(); ?>
							<?php wp_link_pages( array( 'before' => '<div class="page-link">' . __( 'Pages:', 'twentyten' ), 'after' => '</div>' ) ); ?>
						
						</div>
						<div class="entry-utility">
							<!--<?php twentyten_posted_in(); ?>-->
							<?php edit_post_link( __( 'Edit', 'twentyten' ), '<span class="edit-link">', '</span>' ); ?>
						</div><!-- .entry-utility --><!-- .entry-content -->
					</div>
						 <div class="post-author layout-minor"><!-- start author gubbins -->
	                        <h2 class="text-whisper layout-tight">Written by</h2>
	                        <div class="h-card">
	                            <h3 class="p-name profile-name text-prominent">Zachary Townsend</h3>
	                            <img class="u-photo profile-photo" src="/_media/images/avatar-zachary-townsend.jpg" />
	                        </div>
	                        
	                        <div class="p-note profile-note">
	                            <p>I have spent most of my professional life working to understand and improve the efficiencies and effectiveness of governments.</p>
	                        </div>
	                        
	                        <div class="post-categories">
	                            <h2 class="text-quiet layout-tight">Filed under STUFF</h2>
	                            <?php twentyten_posted_in(); ?>
	                            <!--ul class="list-no-bullets link-invert text-whisper">
	                                <li><a href="#">Accelerator</a></li>
	                                <li><a href="#">Commentary</a></li>
	                                <li><a href="#">Guest Post</a></li>
	                                <li><a href="#">Mentor</a></li>
	                            </ul-->
	                        </div>
	                        
                    	</div><!-- .post-author -->

						<div id="nav-below" class="navigation" style="margin-bottom: 25px; min-height: 30px;">
							<div class="nav-previous" style="width: 250px;"><?php previous_post_link( '%link', '<span class="btn">' . _x( '&larr;', 'Previous post link', 'twentyten' ) . '</span> %title' ); ?></div>
							<div class="nav-next"  style="width: 250px; text-align: right;"><?php next_post_link( '%link', '%title <span class="meta-nav">' . _x( '&rarr;', 'Next post link', 'twentyten' ) . '</span>' ); ?></div>
						</div>
					
				</div>

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

</div>
</div>
<?php get_footer(); ?>
