<?php
/**
 * The template for displaying all pages.
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */

/*
Template Name: Apps
*/

get_header(); ?>

<div class="wrap clearfix" id="inner">
  <div id="apps-page" class="fullcolumn" style="width: 940px;" >

    <div class="header">Our Apps and Projects</div>

    <p class="page-description">
      Our apps are the result of dozens of conversations with city staff and community members. Together, in partnership with the city, our fellows figure out what they need to best serve their community. We build apps that make life easier. If you think any of them would be useful in your city, <a href="#">let us know</a>.
    </p>

    <form class="search-input-wrapper">
      <input type="text" placeholder="Search for an app or project" />
      <span class="search-icon"></span>
    </form>

    <ul class="project-category-links">
      <li>
        <a data-filter="municipalities">Apps for Local Municipalities</a>
      </li>
      <li>
        <a data-filter="fellowship">Other Fellowship Projects</a>
      </li>
      <li>
        <a data-filter="citizens">Apps for Citizens and Urban Planners</a>
      </li>
      <li>
        <a data-filter="resources">Resources</a>
      </li>
      <li>
        <a data-filter="projects">Projects</a>
      </li>
    </ul>

    <div class="sort-by">
      Sort by <a data-sort="date">Most Recent</a> | <a data-sort="name" class="active">A - Z</a>
    </div>

    <div class="apps" id="apps-page">

      <?php
      $args = array( 'post_type' => 'cfa_app', 'posts_per_page' => 40, 'orderby' => 'date' );
      $loop = new WP_Query( $args );
      while ( $loop->have_posts() ) : $loop->the_post(); ?>

      <?php $post_custom = get_post_custom($post->ID); ?>

        <div class="app <?php if ($post_custom['app-featured']){ ?>featured<?php } ?>"
             style="display: none;"
             data-date="<?php echo get_post_time('U', true); ?>"
             data-content="<?php echo strip_tags($post->post_content); ?>"
             data-name="<?php echo $post->post_title ?>"
             <?php if ($post_custom['app-municipalities']){ ?>data-municipalities="true" <?php } ?>
             <?php if ($post_custom['app-fellowship']){ ?>data-fellowship="true" <?php } ?>
             <?php if ($post_custom['app-citizens']){ ?>data-citizens="true" <?php } ?>
             <?php if ($post_custom['app-resources']){ ?>data-resources="true" <?php } ?>
             <?php if ($post_custom['app-projects']){ ?>data-projects="true" <?php } ?>
             >
          <div class="app-inner">
            <div class="featured-app">Featured App</div>
            <img src="<?php $img_url = wp_get_attachment_image_src( get_post_thumbnail_id(), 'full'); echo $img_url[0] ?>" />
            <div class='app-info'>
              <p class="description">
                <?php echo $post->post_excerpt; ?>
              </p>
              <?php if ($post_custom['app-reuse-count']): ?>
                <div class="reuse-stats">
                  <span class="reuse-icon"></span>
                  Reused in <?php echo $post_custom['app-reuse-count'][0]; ?> cities
                </div>
              <?php endif; ?>
              <div class="get-this-app-wrapper">
                <a class="get-this-app" href="<?php echo get_permalink() ?>">
                  Get this app &amp; learn more &rarr;
                </a>
              </div>
            </div>
          </div>
        </div>



      <?php endwhile; ?>
    </div>
  </div>
</div>

<script>
$(function(){

  jQuery.fn.sort = function() {
    return this.pushStack( [].sort.apply( this, arguments ), []);
  };

  var $selectedFilter;

  var showApps = function($apps) {
    $(".app").hide();
    $apps.show();
  }

  var sortApps = function() {
    var sortBy = $("[data-sort].active").data('sort');

    $('.apps .app').sort(function(a, b){
      if ($(a).data('featured')) return 1;

      if (sortBy == 'name') {
        return $(a).data('name').toLowerCase() > $(b).data('name').toLowerCase() ? 1 : -1;
      } else if (sortBy == 'date') {
        return parseInt($(a).data('date')) < parseInt($(b).data('date')) ? 1 : -1;
      }

    }).appendTo('.apps');
  }

  $("[data-filter]").click(function(e){
    $(".search-input-wrapper input").val('')
    $selectedFilter = $(this);
    $("[data-filter]").removeClass("active");
    $(this).addClass('active');
    var filterName = $(this).data('filter');

    showApps($(".app[data-"+filterName+"]"))
  });

  $("[data-sort]").click(function(){
    $("[data-sort]").removeClass('active');
    $(this).addClass('active');
    sortApps();
  });

  $(".search-input-wrapper").submit(function(e){
    e.preventDefault();
  });

  $(".search-input-wrapper input").keyup(function(){
    var filter = $(this).val();

    if (filter == "") {
      return $selectedFilter.click();
    }

    $("[data-filter].active").removeClass('active');

    var regexp = new RegExp(filter, 'i');

    var apps = $(".app").filter(function(){
      return $(this).text().match(regexp) ||
             $(this).data('content').match(regexp) ||
             $(this).data('name').match(regexp);
    });

    showApps(apps);
  });

  sortApps();
  $("[data-filter]").eq(0).click()
});
</script>


<?php get_footer(); ?>
