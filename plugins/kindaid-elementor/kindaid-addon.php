<?php
/**
 * Plugin Name: Kindaid Core Addon
 * Description: Simple hello world widgets for Elementor.
 * Version:     1.0.0
 * Author:      Md.Sumon Reja
 * Author URI:  https://developers.elementor.com/
 * Text Domain: kindaid-Core
 *
 * Requires Plugins: elementor
 * Elementor tested up to: 3.33.5
 * Elementor Pro tested up to: 3.25.0
 */



if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

// Define constants for plugin paths
define( 'KINDAID_PATH', plugin_dir_path( __FILE__ ) );
define( 'KINDAID_URL', plugin_dir_url( __FILE__ ) );


// Kindaid Theme Widgets File Here
require_once KINDAID_PATH . 'wp-widgets/footer-info.php';
require_once KINDAID_PATH . 'wp-widgets/footer-newsletter.php';
require_once KINDAID_PATH . 'wp-widgets/recent-post-blog-sidebar.php';
require_once KINDAID_PATH . 'wp-widgets/footer-contact-info.php';
require_once KINDAID_PATH . 'wp-widgets/footer-contact-info-2.php';
require_once KINDAID_PATH . 'wp-widgets/blog-sidebar-banner-widget.php';
require_once KINDAID_PATH . 'wp-widgets/blog-author-sidebar-widget.php';


// Helper function file inclusion here if needed
require_once KINDAID_PATH . 'inc/helper-functions.php';


// Register the widget
function kindaid_addon_register_widgets( $widgets_manager ) {

    require_once KINDAID_PATH . 'widgets/heading.php';
    require_once KINDAID_PATH . 'widgets/hero.php';
    require_once KINDAID_PATH . 'widgets/fact.php';
    require_once KINDAID_PATH . 'widgets/kd-service.php';
    require_once KINDAID_PATH . 'widgets/kd-join.php';

    $widgets_manager->register( new \Kindaid\Widgets\Heading_Widget() );
    $widgets_manager->register( new \Kindaid\Widgets\Hero_Widget() );
    $widgets_manager->register( new \Kindaid\Widgets\Fact_Widget() );
    $widgets_manager->register( new \Kindaid\Widgets\Service_Widget() );
    $widgets_manager->register( new \Kindaid\Widgets\Kd_Join_Widget() );

}
add_action( 'elementor/widgets/register', 'kindaid_addon_register_widgets' );



// Enqueue necessary styles and scripts for the plugin


// function kindaid_enqueue_styles() {
//     wp_enqueue_style( 'kindaid-style', KINDAID_URL . 'assets/css/styles.css' );
// }
// add_action( 'wp_enqueue_scripts', 'kindaid_enqueue_styles' );



// Register custom widget category
function kindaid_addon_custom_widget_category( $elements_manager ) {
    $elements_manager->add_category(
        'kindaid_widgets',
        [
            'title' => __( 'Kindaid Widgets', 'kindaid-core' ),
            'icon'  => 'eicon-code', 
        ]
    );
}
add_action( 'elementor/elements/categories_registered', 'kindaid_addon_custom_widget_category');





