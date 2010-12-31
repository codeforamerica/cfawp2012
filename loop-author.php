<?php
/**
 * The loop that displays posts.
 *
 * The loop displays the posts and the post content.  See
 * http://codex.wordpress.org/The_Loop to understand it and
 * http://codex.wordpress.org/Template_Tags to understand
 * the tags used in it.
 *
 * This can be overridden in child themes with loop.php or
 * loop-template.php, where 'template' is the loop context
 * requested by a template. For example, loop-index.php would
 * be used if it exists and we ask for the loop with:
 * <code>get_template_part( 'loop', 'index' );</code>
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */
?>

<div class="ttl"><?php printf( esc_attr__( 'Posts by %s', 'twentyten' ), get_the_author() ); ?></div>
<div id="posts">
<div id="cfa-blog" class="wrap">

<?php /* If there are no posts to display, such as an empty archive page */ ?>
<?php if ( ! have_posts() ) : ?>
	<div id="post-0" class="post error404 not-found">
		<h1 class="entry-title"><?php _e( 'Not Found', 'twentyten' ); ?></h1>
		<div class="entry-content">
			<p><?php _e( 'Apologies, but no results were found for the requested archive. Perhaps searching will help find a related post.', 'twentyten' ); ?></p>
			<?php get_search_form(); ?>
		</div><!-- .entry-content -->
	</div><!-- #post-0 -->
<?php endif; ?>
<?php
	/* Start the Loop.
	 *
	 * In Twenty Ten we use the same loop in multiple contexts.
	 * It is broken into three main parts: when we're displaying
	 * posts that are in the gallery category, when we're displaying
	 * posts in the asides category, and finally all other posts.
	 *
	 * Additionally, we sometimes check for whether we are on an
	 * archive page, a search page, etc., allowing for small differences
	 * in the loop on each template without actually duplicating
	 * the rest of the loop that is shared.
	 *
	 * Without further ado, the loop:
	 */ ?>
<?php while ( have_posts() ) : the_post(); ?>
	<div id="post" class="loop-post">
	 	<h2 class=""><div style="float: right;">  <?php echo get_avatar( get_the_author_meta( 'user_email' ), apply_filters( 'twentyten_author_bio_avatar_size', 40 ) ); ?></div><a href="<?php the_permalink(); ?>" title="<?php printf( esc_attr__( 'Permalink to %s', 'twentyten' ), the_title_attribute( 'echo=0' ) ); ?>" rel="bookmark"><?php the_title(); ?></a></h2>
			<p class="date"><?php twentyten_posted_on(); ?></p>
	<div style="float: left;"><?php the_post_thumbnail('thumbnail'); ?></div>	<div class="post" style="
	<?php 
			if (has_post_thumbnail()) {
			echo 'margin-left: 180px';
			 };
				?> " >
			<?php the_excerpt(); ?>
            <ul>
<li>Share: <a href="#" class="like-btn" id="mail-b">E-mail</a> <a href="#" class="like-btn" id="rss-b">RSS</a> <a href="#" class="like-btn" id="fb-b">Facebook</a> <a href="#" class="like-btn" id="tw-b">Twitter</a></li>
            	<li><?php comments_popup_link( __( 'Leave a comment', 'twentyten' ), __( 'Comment (1)', 'twentyten' ), __( 'Comments (%)', 'twentyten' ), 'comments' ); ?></li>
            	<li class="right"><a class="more" href="<?php the_permalink(); ?>">Read More</a></li>
            </ul>
            </div>
        </div>
<?php endwhile; // End the loop. Whew. ?>



<?php /* Display navigation to next/previous pages when applicable */ ?>
<?php if (  $wp_query->max_num_pages > 1 ) : ?>
				<div id="nav-below" class="navigation">
					<div class="nav-previous"><?php next_posts_link( __( '<span class="meta-nav">&larr;</span> Older posts', 'twentyten' ) ); ?></div>
					<div class="nav-next"><?php previous_posts_link( __( 'Newer posts <span class="meta-nav">&rarr;</span>', 'twentyten' ) ); ?></div>
				</div><!-- #nav-below -->
<?php endif; ?>
</div>
</div>
