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
	<div class="post-body">
		<article>
        <div class="post-content layout-major">
			<div class="entry-content">
	 			<h3><a href="<?php the_permalink(); ?>" title="<?php printf( esc_attr__( 'Permalink to %s', 'twentyten' ), the_title_attribute( 'echo=0' ) ); ?>" rel="bookmark"><?php the_title(); ?></a></h3>
	 			
				<div style="float: left; margin-bottom: 30px;"><?php the_post_thumbnail('thumbnail'); ?></div>	

				<?php the_excerpt(); ?>
            
            </div>
        </div>
        <div class="post-author layout-minor">
        <div class="post-categories">
        	<time>Posted on <?php the_date(); ?></time> 
	        <h2 class="text-quiet layout-tight">Filed under</h2>
	        <ul class="list-no-bullets link-invert text-whisper">
	        	<?php twentyten_posted_in(); ?>
	        </ul>  

	    </div>
		</div>
        </article>
    </div>
<?php endwhile; // End the loop. Whew. ?>



<?php /* Display navigation to next/previous pages when applicable */ ?>
<?php if (  $wp_query->max_num_pages > 1 ) : ?>
				<nav class="nav-articles">
					<ul>
						<li class="nav-previous"><?php next_posts_link( __( '<span class="meta-nav">&larr;</span> Older posts', 'twentyten' ) ); ?></li>
						<li><a class="icon-grid" href="#">All articles</a></li>
						<li class="nav-next"><?php previous_posts_link( __( 'Newer posts <span class="meta-nav">&rarr;</span>', 'twentyten' ) ); ?></li>
					</ul>
				</nav><!-- #nav-below -->
<?php endif; ?>
</div>
</div>
