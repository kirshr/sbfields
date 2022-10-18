<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package SBFields
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

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'sbfields' ); ?></a>

	<header id="masthead" class="site-header">
		<nav id="site-navigation" class="main-navigation sticky">
			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'sbfields' ); ?></button>
			<?php
			wp_nav_menu(
				array(
					'theme_location' => 'menu-1',
					'menu_id'        => 'primary-menu',
				)
			);
			?>
		</nav><!-- #site-navigation -->
		<div class="site-branding">
			<a class="sm-logo" rel="home" href="<?php echo esc_url(home_url( '/' ) ); ?>" itemprop="url">
			<img src="<?php bloginfo('template_directory'); ?>/assets/img/sbfields.png" alt="<?php the_title (); ?>">
			<span class="screen-reader-text"><?php bloginfo( 'name' ); ?></span>
			</a>
		</div><!-- .site-branding -->

	</header><!-- #masthead -->
