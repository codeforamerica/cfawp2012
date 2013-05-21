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

    <span class="search-input-wrapper">
      <input type="text" placeholder="Search for an app or project" />
      <span class="search-icon">S</span>
    </span>

    <ul class="project-category-links">
      <li>
        <a href="#" class="active">Apps for Local Municipalities</a>
      </li>
      <li>
        <a href="#">Other Fellowship Projects</a>
      </li>
      <li>
        <a href="#">Apps for Citizens and Urban Planners</a>
      </li>
      <li>
        <a href="#">Resources</a>
      </li>
      <li>
        <a href="#">Projects</a>
      </li>
    </ul>

    <div class="sort-by">
      Sort by <a href="#">Most Recent</a> | <a href="#" class="active">A - Z</a>
    </div>

    <div class="apps">

      <?php for ($i = 1; $i <= 9; $i++) { ?>
        <div class="app <?php if ($i==1){ ?>featured<?php } ?>">
          <div class="app-inner">
            <div class="featured-app">Featured App</div>
            <img src="http://placehold.it/300x150/ffffff" />
            <div class='app-info'>
              <p class="description">
                Adopt-a-hydrant allows citizens to claim responsibility for shoveling out fire hydrants after heavy snowfall.
              </p>
              <div class="reuse-stats">
                <span class="reuse-icon">R</span>
                Reused in 5 cities
              </div>
              <div class="program-name">
                Accelerator
              </div>
              <div class="get-this-app-wrapper">
                <a class="get-this-app" href="#">
                  Get this app &amp; learn more &rarr;
                </a>
              </div>
            </div>
          </div>
        </div>
      <?php } ?>
    </div>
  </div>
</div>

<?php get_footer(); ?>
