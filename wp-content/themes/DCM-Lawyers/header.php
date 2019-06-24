<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "container" div.
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

?>
<!doctype html>
<html class="no-js" <?php language_attributes(); ?> >
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.2/css/all.min.css" />
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/hamburgers/1.1.3/hamburgers.css" integrity="sha256-T83uxgXXWPZaSIlVc2Y1H6ZSAZVjHyXfX4Y8qof8WKA=" crossorigin="anonymous" />	
		<?php wp_head(); ?>
	</head>
	<body <?php body_class(); ?>>

	<?php if ( get_theme_mod( 'wpt_mobile_menu_layout' ) === 'offcanvas' ) : ?>
		<?php get_template_part( 'template-parts/mobile-off-canvas' ); ?>
	<?php endif; ?>
	<header class="site-header" role="banner">
		<div class="grid-container dcm-top-nav">
			<p><i class="fas fa-envelope-open"></i><?php echo get_theme_mod('dcm-email-setting', 'admin@dcmlawyers.com'); ?></p>
			<p><i class="fas fa-phone"></i><?php echo get_theme_mod('dcm-phone-number-setting', '(03) 9670 0001'); ?></p>
		</div>	
		<div class="grid-container">
			<div data-hide-for="nav" class="site-title-bar title-bar" <?php foundationpress_title_bar_responsive_toggle(); ?>>
				<div class="title-bar-left">
					<button aria-label="<?php _e( 'Main Menu', 'foundationpress' ); ?>" class="menu-icon" type="button" data-toggle="<?php foundationpress_mobile_menu_id(); ?>"></button>
					<span class="site-mobile-title title-bar-title">
						<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
							<img class="dcm-logo" src="<?php bloginfo('template_directory');?>/src/assets/images/dcm-logo.png" alt="DCM Lawyers Logo">
						</a>
					</span>
				</div>
			</div>

			<nav class="site-navigation top-bar" data-toggler data-animate="fade-in fade-out" role="navigation" id="<?php foundationpress_mobile_menu_id(); ?>">
				<div class="top-bar-left">
					<div class="site-desktop-title top-bar-title">
						<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
						<img class="dcm-logo" src="<?php bloginfo('template_directory');?>/src/assets/images/dcm-logo.png" alt="DCM Lawyers Logo">
						</a>
					</div>
				</div>
				<div class="top-bar-right">
					<?php foundationpress_top_bar_r(); ?>

					<?php if ( ! get_theme_mod( 'wpt_mobile_menu_layout' ) || get_theme_mod( 'wpt_mobile_menu_layout' ) === 'topbar' ) : ?>
						<?php get_template_part( 'template-parts/mobile-top-bar' ); ?>
					<?php endif; ?>
				</div>
			</nav>
		</div>
	</header>
	<!-- to handle fixed navigation padding for the rest of conteint -->
	<div class="dcm-paddington-bear">
