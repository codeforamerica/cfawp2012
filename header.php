<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/img/global/favicon.ico" />
		<link rel="apple-touch-icon-precomposed" href="https://style.codeforamerica.org/style/favicons/60x60/flag-red.png"/>
		<title><?php wp_title( '-', true, 'right' ); ?></title>
		<?php post_metadata($post) ?>
		<?php wp_head(); ?>
	</head>
	<body <?php body_class(); ?>>
	<div class="js-container">
		<?php require_once( get_template_directory() . '/inc/scripts-header.php' ); ?>
		<nav class="nav-global-primary" role="navigation"></nav>
		<div class="masthead masthead-s">
			<div class="masthead-hero">
				<div class="masthead-image"></div>
			</div>
			<header class="layout-semibreve masthead-header" role="banner">
				<h1 class="page-title">Blogging For America</h1>
			</header>
		</div>
		<?= file_get_contents('http://www.codeforamerica.org/fragments/global-header-blog.html') ?>
		<main role="main">
