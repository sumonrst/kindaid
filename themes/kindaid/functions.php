<?php 

if ( ! function_exists( 'kindaid_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 *
 * @since Twenty Fifteen 1.0
 */
function kindaid_setup() {

	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on twentyfifteen, use a find and replace
	 * to change 'twentyfifteen' to the name of your theme in all the template files
	 */
	load_theme_textdomain( 'kindaid', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded  tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
	add_theme_support( 'title-tag' );

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * See: https://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
	 */
	add_theme_support( 'post-thumbnails' );
	set_post_thumbnail_size( 825, 510, true );

	// This theme uses wp_nav_menu() in two locations.
	register_nav_menus( array(
		'main-menu' => __( 'Primary Menu',      'kindaid' ),
		'social'  => __( 'Social Links Menu', 'kindaid' ),
	) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form', 'comment-form', 'comment-list', 'gallery', 'caption'
	) );

	/*
	 * Enable support for Post Formats.
	 *
	 * See: https://codex.wordpress.org/Post_Formats
	 */
	add_theme_support( 'post-formats', array(
		'image', 'video', 'quote', 'gallery', 'audio',
	) );




}
endif; // kindaid_setup
add_action( 'after_setup_theme', 'kindaid_setup' );




// kindaid_css_scripts 
function kindaid_script() {

	// kindaid CSS files
    wp_enqueue_style( 'bootstrap-css', get_template_directory_uri() . '/assets/css/bootstrap.min.css', array(), '5.3.8', 'all' );
    wp_enqueue_style( 'animate', get_template_directory_uri() . '/assets/css/animate.css', array(), '1.0', 'all' );
    wp_enqueue_style( 'swiper-bundle', get_template_directory_uri() . '/assets/css/swiper-bundle.css', array(), '6.5.0', 'all' );
    wp_enqueue_style( 'magnific-popup', get_template_directory_uri() . '/assets/css/magnific-popup.css', array(), '1.0', 'all' );
    wp_enqueue_style( 'font-awesome-pro', get_template_directory_uri() . '/assets/css/font-awesome-pro.css', array(), '6.0.0', 'all' );
    wp_enqueue_style( 'kindaid-spacing', get_template_directory_uri() . '/assets/css/spacing.css', array(), '1.0', 'all' );
    wp_enqueue_style( 'kindaid-main', get_template_directory_uri() . '/assets/css/main.css', array(), '1.0', 'all' );
    wp_enqueue_style( 'style', get_stylesheet_uri() );

	// kindaid JS files
	wp_enqueue_script( 'bootstrap-js', get_template_directory_uri() . '/assets/js/bootstrap-min.js', array('jquery'), '5.3.8', true );
	wp_enqueue_script( 'swiper-bundle', get_template_directory_uri() . '/assets/js/swiper-bundle.js', array('jquery'), '6.5.0', true );
	wp_enqueue_script( 'magnific-popup', get_template_directory_uri() . '/assets/js/magnific-popup.js', array('jquery'), '1.1.0', true );
	wp_enqueue_script( 'nice-select', get_template_directory_uri() . '/assets/js/nice-select.js', array('jquery'), '1.0', true );
	wp_enqueue_script( 'purecounter', get_template_directory_uri() . '/assets/js/purecounter.js', array('jquery'), '1.5.0', true );
	wp_enqueue_script( 'range-slider', get_template_directory_uri() . '/assets/js/range-slider.js', array('jquery'), '1.12.1', true );
	wp_enqueue_script( 'parallax', get_template_directory_uri() . '/assets/js/parallax.js', array('jquery'), '1.0', true );
	wp_enqueue_script( 'parallax-scroll', get_template_directory_uri() . '/assets/js/parallax-scroll.js', array('jquery'), '1.0', true );
	wp_enqueue_script( 'wow', get_template_directory_uri() . '/assets/js/wow.min.js', array('jquery'), '1.0', true );
	wp_enqueue_script( 'kindaid-slider-init', get_template_directory_uri() . '/assets/js/slider-init.js', array('jquery'), '1.0', true );
	wp_enqueue_script( 'kindaid-main', get_template_directory_uri() . '/assets/js/main.js', array('jquery'), '1.0', true );


	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}

}
add_action( 'wp_enqueue_scripts', 'kindaid_script' );


// kindaid Template Helper File

if( file_exists( dirname(__FILE__) . '/inc/template-helper.php' ) ){
    require_once( dirname(__FILE__) . '/inc/template-helper.php' );
}


// kindaid Nav Walker Integration

if( file_exists( dirname(__FILE__) . '/inc/nav-walker.php' ) ){
    require_once( dirname(__FILE__) . '/inc/nav-walker.php' );
}



// Kirki Integration
function kindaid_load_kirki_init() {
    if ( class_exists( 'Kirki' ) ) {
        include_once('inc/kindaid-kirki.php');
    }
}
add_action( 'init', 'kindaid_load_kirki_init' );

