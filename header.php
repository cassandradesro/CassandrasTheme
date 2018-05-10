<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<!-- <link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_uri(); ?>" />
 --><!-- < this is how to link the style sheet directly
 -->
<!--  <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/main.css">
 --> <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
	<div id="wrapper" class="hfeed">
	<header id="header" role="banner">
		<h2 id="name">
			Cassandra's Blog
		</h2>
		<section id="branding">
			<div id="site-title"><?php if ( is_front_page() || is_home() || is_front_page() && is_home() ) { echo '<h1>'; } ?><a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_html( get_bloginfo( 'name' ) ); ?>" rel="home"><?php echo esc_html( get_bloginfo( 'name' ) ); ?></a><?php if ( is_front_page() || is_home() || is_front_page() && is_home() ) { echo '</h1>'; } ?>
			</div>
			<div id="site-description"><?php bloginfo( 'description' ); ?></div>
		</section>
		<nav id="menu" role="navigation">
			<div id="search">
			<?php get_search_form(); ?>
			</div>
			<?php wp_nav_menu( array( 'theme_location' => 'main-menu' ) ); ?>
		</nav>
	</header>
	<div id="container">