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
	<script type="text/javascript">var _sf_startpt=(new Date()).getTime()</script>
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
<!--link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" /-->
<link rel="SHORTCUT ICON" href="<?php bloginfo( 'template_url' ); ?>/images/favicon.ico"/> 
<!--link href='http://fonts.googleapis.com/css?family=Oswald&amp;v1' rel='stylesheet' type='text/css'--> 
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.4/jquery.min.js"></script>
<?php if (is_home()) {?>
<meta name="description" content="Helping governments work better for everyone with the people and the power of the web."> <script type="text/javascript" src="<?php bloginfo( 'template_url' ); ?>/javascripts/header-min.js"></script>
<script type="text/javascript" src="<?php bloginfo( 'template_url' ); ?>/javascripts/carousel.min.js"></script>
<script type="text/javascript">
$(document).ready(function() {
  $("ul.menu").superfish({pathClass: "current-menu-item" }); 
  $("#video-gallery").tabs({fx:{opacity: "toggle"}}).tabs("rotate", 4000);
});
</script>
<?php } elseif (is_page(array(2,344))) { ?>	
<script type="text/javascript" src="<?php bloginfo( 'template_url' ); ?>/javascripts/header-min.js"></script>
	<script type="text/javascript" src="<?php bloginfo( 'template_url' ); ?>/javascripts/carousel.min.js"></script>
	<script type="text/javascript">
	$(document).ready(function() {
	  $("ul.menu").superfish({pathClass: "current-menu-item" }); 
	  $('a[rel=tooltip1]').mouseover(function(e) {
	        var tip1 = $(this).attr('title');    
	        $(this).attr('title','');
			$("#tip1").html(tip1);
	    }).mouseout(function() {
	        $(this).attr('title',$('#tip1').html());
			$("#tip1").html(' ');
	    });
		$('a[rel=tooltip2]').mouseover(function(e) {
	        var tip2 = $(this).attr('title');    
	        $(this).attr('title','');
			$("#tip2").html(tip2);
	    }).mouseout(function() {
	        $(this).attr('title',$('#tip2').html());
			$("#tip2").html(' ');
	    });
		$('a[rel=tooltip3]').mouseover(function(e) {
	        var tip3 = $(this).attr('title');    
	        $(this).attr('title','');
			$("#tip3").html(tip3);
	    }).mouseout(function() {
	        $(this).attr('title',$('#tip3').html());
			$("#tip3").html(' ');
	    });
	});
	</script>
<?php } elseif (is_page("36"))  { ?>
	<script type="text/javascript" src="<?php bloginfo( 'template_url' ); ?>/javascripts/header-min.js"></script>
	<script type="text/javascript" src="<?php bloginfo( 'template_url' ); ?>/javascripts/jquery.anythingslider.min.js"></script>
<link rel="stylesheet" href="<?php bloginfo( 'template_url' ); ?>/slider.css" type="text/css" />
	<script type="text/javascript">
	$(document).ready(function() {
	  $("ul.menu").superfish({pathClass: "current-menu-item" }); 
	 $("#slider").anythingSlider({	
			  buildArrows         : true,      
			  buildNavigation     : false,      
			  autoPlay            : true,  
			  easing              : "swing"
			});
	});
	</script>
<?php	} elseif (is_page(array(2647,2568,2617)))  { ?>
		<script type="text/javascript" src="<?php bloginfo( 'template_url' ); ?>/javascripts/header-min.js"></script>
		<script type="text/javascript" src="<?php bloginfo( 'template_url' ); ?>/javascripts/accordion.js"></script>
		<script type="text/javascript">
		$(document).ready(function() {
		  $("ul.menu").superfish({pathClass: "current-menu-item" }); 
		$('#issues').accordion({ active: "none", autoHeight: false });
	   
		});
		</script>			
<?php } else {  ?>
	<script type="text/javascript" src="<?php bloginfo( 'template_url' ); ?>/javascripts/header-min.js"></script>
			<script type="text/javascript">
			$(document).ready(function() {
			  $("ul.menu").superfish({pathClass: "current-menu-item" }); 

			});
			</script>		
<?php } ?>
<?php
	if ( is_singular() && get_option( 'thread_comments' ) )
	wp_enqueue_script( 'comment-reply' );
	wp_head();
?>

	<!-- new CSS and stuff that'll need new paths added -->
    <link rel="stylesheet" type="text/css" href="//cloud.typography.com/6435252/678502/css/fonts.css" />
    <link rel="stylesheet" href="http://style.codeforamerica.org/style/css/main.css">
    <link rel="stylesheet" href="http://style.codeforamerica.org/style/css/layout.css" media="all and (min-width: 40em)">
    <link href="http://style.codeforamerica.org/style/css/prism.css" rel="stylesheet" />
    <link rel="shortcut icon" type="image/x-icon" href="/favicon.ico">
  	<!-- some overwrites to the design just for the blog-->
  	<style>
		.masthead::before {
			position: absolute;
			left: 0px;
			top: 0px;
			background-position: 50% 50%;
			background-size: cover;
			background-repeat: no-repeat;
			background-image: url('<?php bloginfo( 'template_url' ); ?>/images/masthead-3.jpg');
			content: '';
			max-width: none;
			width: 100%;
			min-height: 400px;
			z-index: 1;
		}	
  		.masthead-s{
		  	background-image: url('<?php bloginfo( 'template_url' ); ?>/images/masthead-3.jpg');
  		}
  		.h-card .avatar{
			width: 60px;
			height: 60px;
			float: left;
			margin: 0.5em 0.8em 0px 0px;
  		}
  		#cfa-blog .post-title a:link,
  		#cfa-blog .post-title a:visited,
  		h3 a:link,
  		h3 a:visited{
  			color:#000;
  		}
  		#cfa-blog article{
  			margin-bottom:3em;
  			clear:both;
  			overflow:auto;
  		}
  		.nav-articles{
  			background-color:#fff;
  		}
  	</style>
</head>

<body <?php body_class(); ?>>
	<div class="js-container">
	<nav class="nav-global-primary"><!-- global nav-->
	  <ul class="layout-breve layout-tight">
	    <li><a href="/blog">Blog</a></li>
	    <li><a href="/library">Library</a></li>
	    <li>
	      <form class="search-global" id="search-global">
	          <input type="search" id="search-global-input" class="search-global-input" autocomplete="off" placeholder="Search" name="search-global" />
	          <!-- consider applying autofocus="autofocus" to input -->
	          <button class="search-global-submit" id="search-global-submit" value="Search" type="submit" name="search-global">Search</button>
	      </form>
	    </li>
	  </ul>
	</nav>

	<div class="masthead masthead-s">
	  <div class="masthead-hero">
	    <div class="masthead-image">
	    </div>
	  </div>
	  <header class="layout-semibreve masthead-header">
	    <nav class="nav-breadcrumbs">
		  <ul>
		    <li><a href="/">Home</a></li>
		  
		        <li><a href="/blog">Blog</a></li>
		 
		  </ul>
		</nav>

	    <h1 class="page-title">Blogging for America</h1>
	  </header>
	</div>

	<div class="global-header">  
	  <a href="/" class="global-header-logo">
	      <img src="<?php bloginfo( 'template_url' ); ?>/images/logo.gif" />
	  </a>
	  <p class="skip-to-nav"><a href="#global-footer">Menu</a></p>

	  <nav class="nav-global-secondary">
	    <ul>
	      <li class="nav-tier1 nav-has-children">
	        <a href="/about">About</a>
	      </li>
	      <li class="nav-tier1 nav-has-children">
	        <a href="/cities">Governments</a>
	      </li>
	      <li class="nav-tier1 nav-has-children">
	        <a href="/geeks">Citizens</a>   
	      </li>
	      <li class="nav-tier1">
	        <a href="/apps">Apps</a>
	      </li>
	      <li><a href="/donate" class="button">Donate</a></li>
	    </ul>
	 
	</div>

	<!-- start content wrapper (ends in footer) -->
	<main role="main">
		<section>
			<div class="layout-semibreve">
