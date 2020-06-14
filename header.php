<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Timbre\'s_Underscores_Theme
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?> id="<?php if( is_front_page() ) { echo 'front-page-body'; } else { echo 'page-body' ;}; ?>">
	<button class="menu-toggle <?php echo is_front_page() ? 'white-menu' : ''; ?>" aria-controls="primary-menu" aria-expanded="false"><i class="site-header__menu-trigger fa fa-bars" aria-hidden="true"></i></button>

		<a href="<?php echo site_url(); ?>"></a>
	</div>

<div id="page" class="site">
	<header id="header" class="site-header">
		<div class="site-branding">
			<nav id="site-navigation" class="main-navigation <?php if(is_front_page()) echo 'front-page-navigation'; ?>">

		<?php
		wp_nav_menu( array(
			'theme_location' => 'menu-1',
			'menu_id'        => 'primary-menu',
		) );
		?>
	</nav>
	</div>
	</header><!-- #masthead -->

	<div id="content" class="site-content">
