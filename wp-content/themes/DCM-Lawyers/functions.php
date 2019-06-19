<?php
/**
 * Author: Ole Fredrik Lie
 * URL: http://olefredrik.com
 *
 * FoundationPress functions and definitions
 *
 * Set up the theme and provides some helper functions, which are used in the
 * theme as custom template tags. Others are attached to action and filter
 * hooks in WordPress to change core functionality.
 *
 * @link https://codex.wordpress.org/Theme_Development
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

/** Various clean up functions */
require_once( 'library/cleanup.php' );

/** Required for Foundation to work properly */
require_once( 'library/foundation.php' );

/** Format comments */
require_once( 'library/class-foundationpress-comments.php' );

/** Register all navigation menus */
require_once( 'library/navigation.php' );

/** Add menu walkers for top-bar and off-canvas */
require_once( 'library/class-foundationpress-top-bar-walker.php' );
require_once( 'library/class-foundationpress-mobile-walker.php' );

/** Create widget areas in sidebar and footer */
require_once( 'library/widget-areas.php' );

/** Return entry meta information for posts */
require_once( 'library/entry-meta.php' );

/** Enqueue scripts */
require_once( 'library/enqueue-scripts.php' );

/** Add theme support */
require_once( 'library/theme-support.php' );

/** Add Nav Options to Customer */
require_once( 'library/custom-nav.php' );

/** Change WP's sticky post class */
require_once( 'library/sticky-posts.php' );

/** Configure responsive image sizes */
require_once( 'library/responsive-images.php' );

/** Gutenberg editor support */
require_once( 'library/gutenberg.php' );

// require_once( 'library/customisation.php' );
// require_once( 'library/custom-meta-boxes.php' );

require_once( 'library/custom-post-types.php' );

require_once( 'library/lawyer-bio-meta-boxes.php' );

require_once( 'library/lawyer-bio-meta-boxes-name.php' );

// require_once( 'library/phone-number.php' );

// require_once( 'library/custom-nav.php' );

require_once get_template_directory() . '/library/customisation.php';


/** If your site requires protocol relative url's for theme assets, uncomment the line below */
// require_once( 'library/class-foundationpress-protocol-relative-theme-assets.php' );

if ( !function_exists('dcm_setup')) :
    function dcm_setup()
    {
        //add theme support

        add_theme_support( 'customize-selective-refresh-widgets' );
        //register menus
        register_nav_menus(array(
            'practice-areas-menu' => __('Practice Areas'),
            'featured-articles-menu' => __('Featured Articles'),
            'team-menu' => __('Team Menu'),
            // 'footer-menu' => __('Footer'),
            // 'social-menu' => __('Social'),
        ));

        //set the permalink structure
        // global $wp_rewrite;
        // $wp_rewrite->set_permalink_structure('/%postname%/');
    }

endif;
add_action('after_setup_theme', 'dcm_setup');

function dcm_widgets_init() {

	register_sidebar(
		array(
			'name'          => __( 'Home Testimonials', 'dcm-lawyers' ),
			'id'            => 'home-testimonials',
			'description'   => __( 'Testimonials section on the home page.', 'dcm-lawyers' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			// 'before_title'  => '<h2 class="widget-title">',
			// 'after_title'   => '</h2>',
		)
	);

}
add_action( 'widgets_init', 'dcm_widgets_init' );




