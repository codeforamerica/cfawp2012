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

			<!--	<div id="nav-above" class="navigation">
					<div class="nav-previous"><?php previous_post_link( '%link', '<span class="meta-nav">' . _x( '&larr;', 'Previous post link', 'twentyten' ) . '</span> %title' ); ?></div>
					<div class="nav-next"><?php next_post_link( '%link', '%title <span class="meta-nav">' . _x( '&rarr;', 'Next post link', 'twentyten' ) . '</span>' ); ?></div>
				</div>--><!-- #nav-above -->

					 <div class="ttl"><?php the_title(); ?><a href="#" class="red-btn"><span class="st_sharethis_custom">Share This</a></div>

					<div class="entry-meta" style="margin-top: 10px;">
					<small>	<?php twentyten_posted_on(); ?></small>
					</div><!-- .entry-meta -->

					<div class="entry-content">
						<?php the_content(); ?>
						<?php wp_link_pages( array( 'before' => '<div class="page-link">' . __( 'Pages:', 'twentyten' ), 'after' => '</div>' ) ); ?>
					</div>
						<div class="entry-utility">
							<?php twentyten_posted_in(); ?>
							<?php edit_post_link( __( 'Edit', 'twentyten' ), '<span class="edit-link">', '</span>' ); ?>
						</div><!-- .entry-utility --><!-- .entry-content -->
						
						<div id="nav-below" class="navigation">
							<div class="nav-previous"><?php previous_post_link( '%link', '<span class="meta-nav">' . _x( '&larr;', 'Previous post link', 'twentyten' ) . '</span> %title' ); ?></div>
							<div class="nav-next"><?php next_post_link( '%link', '%title <span class="meta-nav">' . _x( '&rarr;', 'Next post link', 'twentyten' ) . '</span>' ); ?></div>
						</div><!-- #nav-below -->
						<?php comments_template( '', true ); ?>
</div>


<div class="right-col">



<?php if ( get_the_author_meta( 'description' ) ) : // If a user has filled out their description, show a bio on their entries  ?>
					<div id="entry-author-info">
						<!-- #author-avatar -->
						<div id="author-description">
							<h3 class="widget-title"><?php printf( esc_attr__( 'About %s', 'twentyten' ), get_the_author() ); ?></h3><br />
						<div id="author-avatar" style="float: left; margin: 0 5px 0px 0;">
								<?php echo get_avatar( get_the_author_meta( 'user_email' ), apply_filters( 'twentyten_author_bio_avatar_size', 105 ) ); ?>
							</div><span style="font-size: .85em;"><?php the_author_meta( 'description' ); ?>	<div id="author-link">
									<a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ) ); ?>">
										<?php printf( __( 'View all posts by %s <span class="meta-nav">&rarr;</span>', 'twentyten' ), get_the_author() ); ?>
									</a>
								</div></span>
							<!-- #author-link	-->
						</div><!-- #author-description -->
					</div><!-- #entry-author-info -->
<?php endif; ?>

				

<?php endwhile; // end of the loop. ?>
<br />
		

<?php get_sidebar(); ?>
<?php get_footer(); ?>
