<?php
/*
Template Name: Apps
*/
?>

<?php get_header(); ?>

<div id="projects">

  <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
  <div id="projects-header">
    <h1><?php the_title(); ?></h1>
    <hr />
  </div>


  <div id="projects-description" class="left">
    <?php the_content(); ?>
    <input type="text" id="project-showcase-keywords-filters" placeholder="Search"></input>
  </div>
  <?php endwhile; ?>
  <?php endif; ?>


  <div id="projects-developer-resources" class="left">
    <ul>
      <li><a href="#">→ Join the Main Google Group</a></li>
      <li><a href="https://github.com/codeforamerica">→ Code for America GitHub</a></li>
    </ul>
  </div>

  <div class="clearfix"></div>
   
  <div id="projects-showcase">

    <div id="projects-showcase-category-filters">
      <ul>
        <li><a href="#" class="filter active" data-filter="*">ALL</a></li>
        <li><a href="#" class="filter" data-filter=".arts">Arts &amp; Culture</a></li>
        <li><a href="#" class="filter" data-filter=".economic">Economic Development</a></li>
        <li><a href="#" class="filter" data-filter=".education">Education</a></li>
        <li><a href="#" class="filter" data-filter=".engagement">Engagement</a></li>
        <li><a href="#" class="filter" data-filter=".environment">Environment</a></li>
        <li><a href="#" class="filter" data-filter=".transportation">Transportation</a></li>
      </ul>
    </div>

    <div id="projects-showcase-type-filters">
      <ul>
        <li>
          <input type="checkbox" id="fellowship-filter" data-filter="fellowship" />
          <label for="fellowship-filter">Fellowship</label>
        </li>
        <li>
          <input type="checkbox" id="accelerator-filter" data-filter="accelerator" />
          <label for="accelerator-filter">Accelerator</label>
        </li>
        <li>
          <input type="checkbox" id="incubator-filter" data-filter="incubator" />
          <label for="incubator-filter">Incubator</label>
        </li>
        <li>
          <input type="checkbox" id="brigade-filter" data-filter="brigade" />
          <label for="brigade-filter">Brigade</label>
        </li>
        <li>
          <input type="checkbox" id="open-source-filter" data-filter="open-source" />
          <label for="open-source-filter">Open Source</label>
        </li>
        <li>
          <input type="checkbox" id="paid-service-filter" data-filter="paid-service" />
          <label for="paid-service-filter">Paid Service</label>
        </li>
        <li><a href="#" id="projects-clear-filters">Clear all filters</a></li>
      </ul>
      <div class="clearfix"></div>
    </div>

    <div id="projects-showcase-sort">
      <ul>
        <li>Sort By:</li>
        <li><a href="#" class="sort" data-sort="date">Most Recent</a></li>
        <li>|</li>
        <li><a href="#" class="sort" data-sort="title">A-Z</a></li>
      </ul>
    </div>

  </div>

  <div id="projects-showcase-list">

    <?php
      $args = array( "post_type" => "cfa-project", "posts_per_page" => 40, "orderby" => "date" );
      $loop = new WP_Query( $args);
      while ( $loop->have_posts() ) : $loop->the_post();
      $large_image_url = wp_get_attachment_image_src( get_post_thumbnail_id(), "full")[0];
      $tag_list = "";
      $posttags = get_the_tags();
      if ($posttags)  {
        foreach($posttags as $tag) {
          $tag_list = $tag_list . $tag->name . ' ';
        } 
      } 
    ?>

    <a href="<?php the_permalink(); ?>">
      <div class="project <?php echo $tag_list ?>" data-title="<?php the_title(); ?>" data-date="<?php the_date(); ?>">
        <div class="project-image">
          <img src="<?php echo $large_image_url ?>" alt="<?php the_title(); ?>" />
        </div>

        <div class="project-tags">
          <ul>
          <?php
            if ($posttags)  {
              foreach($posttags as $tag) { ?>
                <li><?php echo $tag->name; ?></li>
            <?php } 
            } 
          ?>
          </ul>
        </div>

        <div class="project-caption">
          <h4><?php the_title(); ?></h4>
        </div>

      </div>
    </a>

    <?php endwhile; ?>

  </div>


</div>

<?php get_footer(); ?>
