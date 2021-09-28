<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package theme4w4
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
<?php if(is_front_page()) : ?>
	<?php endif; ?>
	<body <?php body_class(is_front_page() || is_category() ? 'no-sidebar': '' ); ?>>


<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'theme4w4' ); ?></a>

	<header id="masthead" class="site-header">
		<div class="site-branding">
			<?php
			the_custom_logo();
			if ( is_front_page() && is_home() ) :
				?>
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
				<?php
			else :
				?>
				<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
				<?php
			endif;
			$theme4w4_description = get_bloginfo( 'description', 'display' );
			if ( $theme4w4_description || is_customize_preview() ) :
				?>
				<p class="site-description"><?php echo $theme4w4_description; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></p>
			<?php endif; ?>
		</div><!-- .site-branding -->
		
			

		<nav id="site-navigation" class="main-navigation">
			<!-- button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><img src="https://s2.svgbox.net/hero-solid.svg?ic=menu&color=000000" width="32" height="32"></button -->
			<button id='burger' class="menu-toggle" aria-controls="primary-menu" aria-expanded="false">
				<div></div>
				<div></div>
				<div></div>
			</button>
			<?php
			wp_nav_menu(
				array(
					'theme_location' => 'menu-1',
					'menu_id'        => 'primary-menu',
				)
			);
			?>
		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->
