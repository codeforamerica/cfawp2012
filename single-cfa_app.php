<?php
get_header(); ?>

<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

<div class="wrap clearfix"  id="inner">
  <div class="header">
    <?php the_title(); ?>

    <div class="actions">
      <?php previous_post_link('%link', '&larr; Prev app'); ?>
      <a href="<?php echo site_url() ?>/apps/">[] All Apps</a>
      <?php next_post_link('%link', 'Next app &rarr;'); ?>
    </div>
  </div>

  <div class="left-column">
    <p class="excerpt"><?php echo $post->post_excerpt; ?></p>
    <div class="content">
      <?php the_content(); ?>
    </div>
  </div>

  <div class="right-column">
    <div class="sidebar-section get-this-app">
      <div>Want this app in your city?</div>
      <a href="<?php echo get_post_custom($post->ID)['app-url'][0] ?>">Get This App Now &rarr;</a>
    </div>

    <?php if (get_post_custom($post->ID)['app-overview'][0]): ?>
      <div class="sidebar-section overview">
        <div class="sidebar-section-header">Overview</div>
        <img src="<?php echo wp_get_attachment_image_src( get_post_thumbnail_id(), 'full')[0] ?>" />
        <p><?php echo get_post_custom($post->ID)['app-overview'][0] ?></p>
        <a href="<?php echo get_post_custom($post->ID)['app-url'][0] ?>"><?php echo get_post_custom($post->ID)['app-url'][0] ?></a>
      </div>
    <?php endif; ?>

    <?php if (get_post_custom($post->ID)['app-source-url'][0]): ?>
      <div class="sidebar-section get-the-code">
        <div class="sidebar-section-header">Get the code</div>
        <a href="<?php echo get_post_custom($post->ID)['app-source-url'][0] ?>"><?php echo get_post_custom($post->ID)['app-source-url'][0] ?></a>

        <?php if (get_post_custom($post->ID)['app-technical-difficulty'][0]): ?>
          <div class="datum">
            <strong>Technical difficulty: </strong> <?php echo get_post_custom($post->ID)['app-technical-difficulty'][0] ?> out of 5
          </div>
        <?php endif; ?>

        <?php if (get_post_custom($post->ID)['app-language'][0]): ?>
          <div class="datum">
            <strong>Written in: </strong> <?php echo get_post_custom($post->ID)['app-language'][0] ?>
          </div>
        <?php endif; ?>
      </div>
    <?php endif; ?>

    <?php if (get_post_custom($post->ID)['app-deployed-in'][0]): ?>
      <div class="sidebar-section deployed-in">
        <div class="sidebar-section-header">Deployed In</div>
        <p><?php echo get_post_custom($post->ID)['app-deployed-in'][0] ?></p>
      </div>
    <?php endif; ?>


  </div>
</div>

<?php endwhile; ?>

<?php get_footer(); ?>

