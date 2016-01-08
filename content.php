<article id="post-<?php the_ID(); ?>" <?php post_class('post-preview'); ?>>

	<header class="post-header isolate">
		<?php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>
	</header>
	<?php post_time_author() ?>
	<div class="filed">
		<p>Filed Under: <?php echo get_the_category_list( ', ' ); ?></p>
	</div>
	<div class="post-body">
		<?php $thumbnail = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'square', false); ?>
		<?php if (isset($thumbnail[0]) && $thumbnail[0] != null) : ?>
			<div class="post-image">
				<?php echo '<img class="img-responsive" src="'.$thumbnail[0].'" width="137" height="137" itemprop="image" alt="'.$post->post_title.'" />'; ?>
			</div>
		<?php endif; ?>
		<div class="post-content">
			<?php the_excerpt() ?>
		</div>
	</div><!-- .post-body -->
</article><!-- .post -->
