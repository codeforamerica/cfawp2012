<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/img/global/favicon.ico" />
		<link rel="apple-touch-icon-precomposed" href="http://style.codeforamerica.org/1/style/favicons/60x60/flag-red.png"/>
		<title><?php wp_title( '-', true, 'right' ); ?></title>
		<?php wp_head(); ?>
	</head>
	<body <?php body_class(); ?>>
	<div class="js-container">
		<?php require_once( get_template_directory() . '/inc/scripts-header.php' ); ?>
		<nav class="nav-global-primary" role="navigation">
			<ul class="layout-breve layout-tight">
				<li><a href="../blog/">Blog</a></li>
				<li><a href="../library/">Library</a></li>
				<li>
					<!-- This form is in 2 different places on the main site template, so make sure IDs are unique each time it is used -->
					<form class="search-global" id="search-global" role="search" method="GET">
						<input type="search" id="search-global-input" class="search-global-input" autocomplete="off" placeholder="Search" name="s">
						<!-- consider applying autofocus="autofocus" to input -->
						<button class="search-global-submit" id="search-global-submit" value="Search" type="submit">Search</button>
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
						<li><a href="../home">Home</a></li>
						<li><a href="../">Blog</a></li>
					</ul>
				</nav>
				<h1 class="page-title">Blogging For America</h1>
			</header>
		</div>
		<div class="global-header">

			<a href="../home/" class="global-header-logo">
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/global/logo.png">
			</a>

			<p class="skip-to-nav"><a href="#global-footer">Menu</a></p>

			<nav class="nav-global-secondary" role="navigation">
				<ul>
					<li class="nav-tier1 nav-has-children">
						<a href="../about/">Who we are</a>
					</li>
					<li class="nav-tier1 nav-has-children">
						<a href="../governments/">Governments</a>
					</li>
					<li class="nav-tier1 nav-has-children">
						<a href="../citizens/">Citizens</a>
					</li>
					<li class="nav-tier1">
						<a href="../apps/">Apps</a>
					</li>
					<li><a href="../donate/" class="button">Donate</a></li>
				</ul>
			</nav>

		</div>
		<main rolw="main">
