<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<title><?php
	/*
	 * Print the <title> tag based on what is being viewed.
	 */
	global $page, $paged;

	wp_title( '|', true, 'right' );

	// Add the blog name.
	bloginfo( 'name' );

	// Add the blog description for the home/front page.
	$site_description = get_bloginfo( 'description', 'display' );
	if ( $site_description && ( is_home() || is_front_page() ) )
		echo " | $site_description";

	// Add a page number if necessary:
	if ( $paged >= 2 || $page >= 2 )
		echo ' | ' . sprintf( __( 'Page %s', 'twentyten' ), max( $paged, $page ) );

	?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<script type="text/javascript" src="<?php bloginfo("template_url"); ?>/javascripts/jquery.min.js"></script>
<script type="text/javascript" src="<?php bloginfo("template_url"); ?>/javascripts/carousel.js"></script>
<script type="text/javascript" src="<?php bloginfo("template_url"); ?>/javascripts/ui.core.js"></script> 
<script type="text/javascript" src="<?php bloginfo("template_url"); ?>/javascripts/ui.tabs.js"></script>
<script type="text/javascript">
$(document).ready(function () {
  $('.infiniteCarousel').infiniteCarousel();
  $("#video-gallery").tabs({fx:{opacity: "toggle"}}).tabs("rotate", 4000);
});

</script>

<?php
	/* We add some JavaScript to pages with the comment form
	 * to support sites with threaded comments (when in use).
	 */
	if ( is_singular() && get_option( 'thread_comments' ) )
		wp_enqueue_script( 'comment-reply' );

	/* Always have wp_head() just before the closing </head>
	 * tag of your theme, or you will break many plugins, which
	 * generally use this hook to add elements to <head> such
	 * as styles, scripts, and meta tags.
	 */
	wp_head();
?>
<script src="<?php bloginfo("template_url"); ?>/javascripts/superfish.js"></script> 
 
<script type="text/javascript">
 
    $(document).ready(function(){ 
        $("ul.menu").superfish({ 
            pathClass:  'current-menu-item' 
        }); 
    }); 
 
</script>
</head>



<body <?php body_class(); ?>>

<!--   ==============   HEADER   ==============   -->
<div id="header" class="wrap">
<!--Logo -->
	<a href="http://codeforamerica.org" class="like-btn" id="logo">Code for America</a>
	<!--Tag line -->
	<div id="tag-line">
	<img src="<?php bloginfo('template_directory'); ?>/images/headers/header.png"><!--	<h1>A New Kind of Public Service</h1>
		<h2>We connect tech leaders and city governments to build civic apps that make lives better</h2>-->
	</div>
	<!--Social Links -->
	<ul id="social">
		<li><a href="#" id="rss">RSS</a></li>
		<li><a href="http://www.facebook.com/codeforamerica" id="fb">Facebook</a></li>
		<li><a href="http://www.youtube.com/user/CodeforAmerica" id="yt">YouTube</a></li>
		<li><a href="http://www.twitter.com/codeforamerica" id="tw">Twitter</a></li>
		<li><a href="mailto:info@codeforamerica.org" id="mail">E-mail</a></li>
	</ul>
	<!--Navigation -->
	<div id="nav-wrap">
		<?php wp_nav_menu( array('menu'=> 'cfa_main', 'menu_id' => 'nav', 'container' => 'ul',  ) ); ?>
		<a href="/donate" id="donate" class="like-btn">Donate</a>
	</div>
</div>
	
	<div id="main">
