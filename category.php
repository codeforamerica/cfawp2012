<?php
/**
 * Category page template
 *
 * @package cfa-wp
 */

get_header(); ?>

	<div class="layout-semibreve">
		<div class="layout-minor">
			<?php recent_catigories() ?>
		</div>
		<div class="layout-major">
			<?php if ( have_posts() ) : ?>
				<header class="page-header">
					<h2 class="page-title"><?php printf( __( 'Filed Under %s', '_s' ), '<span>' . single_cat_title("",false) . '</span>' ); ?></h2>
				</header><!-- .page-header -->

				<?php while ( have_posts() ) : the_post(); ?>

					<?php get_template_part( 'content', get_post_format() );?>

				<?php endwhile; ?>

			<?php else : ?>

				<?php get_template_part( 'content', 'none' ); ?>

			<?php endif; ?>
		</div>
	</div>

<?php get_footer(); ?>