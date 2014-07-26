<?php
/**
 * Author page template
 *
 * @package cfa-wp
 */

get_header(); ?>

	<div class="layout-semibreve">
		<div class="layout-minor">
			<?php recent_catigories_by_author($author) ?>
		</div>
		<div class="layout-major">
			<?php if ( have_posts() ) : ?>
				<header class="page-header">
					<h2 class="page-title"><?php printf( __( 'Posts by %s', '_s' ), '<span>' . get_the_author_meta('first_name', $author) . ' ' . get_the_author_meta('last_name', $author)  . '</span>' ); ?></h2>
				</header><!-- .page-header -->

				<div class="author">
					<?php echo get_avatar($author, 137) ?>
					<p class="description">
						<?php echo get_the_author_meta('description', $author) ?>
					</p>
				</div>

				<?php while ( have_posts() ) : the_post(); ?>

					<?php get_template_part( 'content', get_post_format() );?>

				<?php endwhile; ?>

			<?php else : ?>

				<?php get_template_part( 'content', 'none' ); ?>

			<?php endif; ?>
		</div>
	</div>

<?php get_footer(); ?>