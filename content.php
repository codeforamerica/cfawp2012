<article id="post-<?php the_ID(); ?>" <?php post_class('post-preview'); ?>>

	<header class="post-header isolate">
		<?php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>
	</header>
	<?php post_time_author() ?>
	<span class="filed">Filed Under: <?php posted_in() ?></span>
	<div class="post-body">
		<?php $thumbnail = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'square', false); ?>
		<?php if (isset($thumbnail[0]) && $thumbnail[0] != null) : ?>
			<div class="post-image">
				<?php echo '<img class="img-responsive img-circle" src="'.$thumbnail[0].'" width="137" height="137" itemprop="image" alt="'.$post->post_title.'" />'; ?>
			</div>
		<?php else : ?>
			<div class="post-image">
				<img class="img-responsive" src="http://placehold.it/137x137" width="137" height="137" itemprop="image" alt="placeholder" />
			</div>
		<?php endif; ?>
		<div class="post-content">
			<?php the_excerpt() ?>
		</div>
	</div><!-- .post-body -->
</article><!-- .post -->