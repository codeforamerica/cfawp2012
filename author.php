<?php
/**
 * The template for displaying Author Archive pages.
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */

get_header(); ?>
    <div class="wrap clearfix" id="inner">
      <div id="maincontent">

<?php
	/* Queue the first post, that way we know who
	 * the author is when we try to get their name,
	 * URL, description, avatar, etc.
	 *
	 * We reset this later so we can run the loop
	 * properly with a call to rewind_posts().
	 */
	if ( have_posts() )
		the_post();
?>

<?php
	/* Since we called the_post() above, we need to
	 * rewind the loop back to the beginning that way
	 * we can run the loop properly, in full.
	 */
	rewind_posts();

	/* Run the loop for the author archive page to output the authors posts
	 * If you want to overload this in a child theme then include a file
	 * called loop-author.php and that will be used instead.
	 */
	 get_template_part( 'loop', 'author' );
?>

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

    <?php get_sidebar(); ?>
    <?php get_footer(); ?>