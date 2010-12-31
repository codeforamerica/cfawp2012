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

<div class="ttl"><?php printf( esc_attr__( '%s', 'twentyten' ), get_the_author() ); ?></div>

  		<div style="min-height: 150px;">	<span style="font-size: 1em; line-height: 1.6em;"><p><div id="author-avatar" style="float: left; margin: 0 5px 0px 0;">
  								<?php echo get_avatar( get_the_author_meta( 'user_email' ), apply_filters( 'twentyten_author_bio_avatar_size', 120 ) ); ?>
  							</div><?php the_author_meta( 'description' ); ?>	</p>
  								</span>
  					</div>	
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

 

    <?php get_sidebar(); ?>
    <?php get_footer(); ?>