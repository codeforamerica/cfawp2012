<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/img/global/favicon.ico" />
		<link rel="apple-touch-icon-precomposed" href="http://style.codeforamerica.org/style/favicons/60x60/flag-red.png"/>
		<title><?php wp_title( '-', true, 'right' ); ?></title>
		<?php post_metadata($post) ?>
		<?php wp_head(); ?>
	</head>
	<body <?php body_class(); ?>>
	<div class="js-container">
		<?php require_once( get_template_directory() . '/inc/scripts-header.php' ); ?>
		<nav class="nav-global-primary" role="navigation">
			<ul class="layout-breve layout-tight">
				<li><a href="/blog">Blog</a></li>
				<li><a href="/library">Library</a></li>
				<li>
					<!-- This form is in 2 different places on the main site template, so make sure IDs are unique each time it is used -->
					<form class="search-global" id="search-global" action="https://www.google.com/search" method="get" role="search">
						<input type="search" id="search-global-input" class="search-global-input" autocomplete="off" placeholder="Search" name="q">
						<!-- consider applying autofocus="autofocus" to input -->
						<button class="search-global-submit" id="search-global-submit" value="www.codeforamerica.org" type="submit" name="as_sitesearch">Search</button>
					</form>
				</li>
			</ul>
		</nav>
		<div class="masthead masthead-s">
			<div class="masthead-hero">
				<div class="masthead-image"></div>
			</div>
			<header class="layout-semibreve masthead-header" role="banner">
				<nav class="nav-breadcrumbs" role="navigation">
					<ul>
						<li><a href="/">Home</a></li>
						<li><a href="/blog">Blog</a></li>
					</ul>
				</nav>
				<h1 class="page-title">Blogging For America</h1>
			</header>
		</div>
		<?= file_get_contents('http://www.codeforamerica.org/fragments/global-header.html') ?>
		<main role="main">
