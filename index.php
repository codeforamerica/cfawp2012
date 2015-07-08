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
 * @package cfa-wp
 */

/**
 * Custom query that ignores password-protected posts.
 */

$index_query = null;
$index_query = new WP_Query(array(
							   'has_password' => false
							 ));

get_header(); ?>

	<div class="layout-semibreve">
		<div class="layout-minor">
		<form class="search-global" id="search-global" role="search" method="GET" style="white-space: nowrap; margin-bottom: 15px">
			<input type="search" id="search-global-input" class="search-global-input" autocomplete="off" placeholder="Search Blog" name="s">
			<!-- consider applying autofocus="autofocus" to input -->
			<input type="submit" value="Go">
		</form>
		<?php recent_catigories() ?>
		<?php recent_bloggers() ?>
		</div>
		<div class="layout-major">
			<?php if ( $index_query->have_posts() ) : ?>

				<?php while ( $index_query->have_posts() ) : the_post(); ?>

					<?php get_template_part( 'content', get_post_format() );?>

				<?php endwhile; ?>

				<?php if (  $index_query->max_num_pages > 1 ) : ?>
					<nav class="nav-articles">
						<ul>
							<li class="nav-previous"><?php next_posts_link( __( '<span class="meta-nav">&larr;</span> Older posts', 'twentyten' ) ); ?></li>
							<li><a class="icon-grid" href="/blog">All articles</a></li>
							<li class="nav-next"><?php previous_posts_link( __( 'Newer posts <span class="meta-nav">&rarr;</span>', 'twentyten' ) ); ?></li>
						</ul>
					</nav><!-- #nav-below -->
				<?php endif; ?>

			<?php else : ?>

				<?php get_template_part( 'content', 'none' ); ?>

			<?php endif; ?>
		</div>
	</div>

<?php get_footer(); ?>

<?php
	/* Reset our custom $index_query */
	wp_reset_postdata();
?>
