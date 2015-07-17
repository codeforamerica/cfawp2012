<?php
/**
 * Single page template
 *
 * @package cfa-wp
 */

get_header(); ?>

	<div class="layout-semibreve">

		<?php if ( have_posts() ) : ?>

			<?php while ( have_posts() ) : the_post(); ?>

				<div class="layout-minor">
					<div class="author-info">
						<?php echo get_avatar($post->post_author, 80) ?>
						<div class="contact-info">
							<?php echo get_the_author_meta('first_name', $post->post_author) ?><br/>
							<?php echo get_the_author_meta('last_name', $post->post_author) ?><br/>
							<?php if (get_the_author_meta('twitter', $post->post_author)) : ?>
								<span><a href="http://www.twitter.com/<?php echo str_replace('@', '', get_the_author_meta('twitter', $post->post_author)) ?>"><?php echo str_replace('@@', '@', '@' . get_the_author_meta('twitter', $post->post_author)) ?></a></span>
							<?php endif; ?>
						</div>
						<p class="description"><?php echo get_the_author_meta('description', $post->post_author) ?></p>
					</div>
					<span class="filed pull-left">Filed Under <?php posted_in() ?></span>
				</div>

				<div class="layout-major">

					<article id="post-<?php the_ID(); ?>" <?php post_class('post-single'); ?>>
						<header class="post-header isolate">
							<?php the_title( sprintf( '<h2 class="entry-title">', esc_url( get_permalink() ) ), '</h2>' ); ?>
						</header>
						<?php post_time_author() ?>
						<?php if (has_post_thumbnail( $post->ID )): ?>
							<div class="post-image">
								<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
								<img src="<?= $image[0] ?>" alt="" />
							</div>
						<?php endif; ?>
						<div class="post-body">
							<div class="post-content">
								<?php the_content() ?>
							</div>
						</div><!-- .post-body -->
						<div class="post-footer">
							<div class="comments">
								<div class="layout-centered">
									<p><strong class="h5">Questions? Comments?</strong> <a class="button button-prominent insulate-sides" href="http://twitter.com/codeforamerica">Hit us up at <strong class="icon-twitter2">@codeforamerica</strong></a></p>
								</div>
							</div>
						</div>
					</article><!-- .post -->

					<a class="button" href="<?php bloginfo('url');?>">&larr; Back To All Articles</a>

				</div>

			<?php endwhile; ?>

		<?php endif; ?>

	</div>

<?php get_footer(); ?>
