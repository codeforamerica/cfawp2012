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
<script type="text/javascript">
  var _kmq = _kmq || [];
  function _kms(u){
    setTimeout(function(){
      var s = document.createElement('script'); var f = document.getElementsByTagName('script')[0]; s.type = 'text/javascript'; s.async = true;
      s.src = u; f.parentNode.insertBefore(s, f);
    }, 1);
  }
  _kms('//i.kissmetrics.com/i.js');_kms('//doug1izaerwt3.cloudfront.net/b10955655811d1d8f1ae89b90b11d99540d5db32.1.js');
</script>
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
<link rel="SHORTCUT ICON" href="<?php bloginfo( 'template_url' ); ?>/images/favicon.ico"/> 
<link href='http://fonts.googleapis.com/css?family=Oswald&v1' rel='stylesheet' type='text/css'> 
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
<?php	} elseif (is_page(array(2647,3927,2568,2617)))  { ?>
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



</head>



<body <?php body_class(); ?>>

<!--   ==============   HEADER   ==============   -->
<div id="header" class="wrap">
<!--Logo -->
	<a href="/" class="like-btn" id="logo">Code for America</a>
	<!--Tag line -->
	<div id="tag-line">
	<img src="<?php bloginfo('template_directory'); ?>/images/headers/header.png"><!--	<h1>A New Kind of Public Service</h1>
		<h2>We connect tech leaders and city governments to build civic apps that make lives better</h2>-->
	</div>
	<!--Social Links -->
	<ul id="social">
		<li><a href="http://codeforamerica.org/feed/" id="rss">RSS</a></li>
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
	
