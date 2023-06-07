<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<title><?php wp_title( '' ); ?><?php if ( wp_title( '', false ) ) { echo ' : '; } ?><?php bloginfo( 'name' ); ?></title>

		<link href="//www.google-analytics.com" rel="dns-prefetch">
		<link href="<?php echo esc_url( get_template_directory_uri() ); ?>/img/icons/favicon.ico" rel="shortcut icon">
		<link href="<?php echo esc_url( get_template_directory_uri() ); ?>/img/icons/touch.png" rel="apple-touch-icon-precomposed">
		<link rel="alternate" type="application/rss+xml" title="<?php bloginfo( 'name' ); ?>" href="<?php bloginfo( 'rss2_url' ); ?>" />

		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="<?php bloginfo( 'description' ); ?>">

		<?php wp_head(); ?>
	</head>
	<body <?php body_class(); ?>>

	<!-- header -->
	<header class="header clear bg-gray-950" role="banner">
		<div class="flex flex-wrap items-center justify-between max-w-screen-xl p-4 mx-auto">
			<a href="/" class="flex items-center">
			<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/logo.svg" alt="Logo" class="max-w-[200px] logo-img">
			</a>
			<div class="hidden w-full md:block md:w-auto" id="navbar-default">
				<nav role="navigation" class="flex flex-col p-4 mt-4 font-medium text-white md:p-0 md:flex-row md:space-x-8 md:mt-0">
						<?php html5blank_nav(); ?>
				</nav>
			</div>
		</div>
	</header>
