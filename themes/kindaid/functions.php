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
		'footer-menu'  => __( 'Footer Menu', 'kindaid' ),
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


	// Remove wordpress block editor
	remove_theme_support('widgets-block-editor');




}
endif; // kindaid_setup
add_action( 'after_setup_theme', 'kindaid_setup' );




/**
 * Kindaid widget code here
 */
function Kindaid_widgets_init() {

	//  Footer Style 1

	register_sidebar( array(
		'name'          => __( 'Blog Sidebar', 'textdomain' ),
		'id'            => 'blog-sidebar',
		'description'   => __( 'Widgets in this area will be shown on Blog Sidebar', 'textdomain' ),
		'before_widget' => '<div id="%1$s" class="tp-widget-sidebar mb-20 %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="tp-widget-main-title mb-25">',
		'after_title'   => '</h3>',
	) );
	register_sidebar( array(
		'name'          => __( 'Footer 1 : Widget 1', 'textdomain' ),
		'id'            => 'footer-1-widget-1',
		'description'   => __( 'Widgets in this area will be shown on Footer 1 : Widget 1', 'textdomain' ),
		'before_widget' => '<div id="%1$s" class="tp-footer-widget mb-40 wow fadeInUp %2$s" data-wow-duration=".9s" data-wow-delay=".3s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="tp-footer-title mb-15">',
		'after_title'   => '</h3>',
	) );
	register_sidebar( array(
		'name'          => __( 'Footer 1 : Widget 2', 'textdomain' ),
		'id'            => 'footer-1-widget-2',
		'description'   => __( 'Widgets in this area will be shown on Footer 2 : Widget 1', 'textdomain' ),
		'before_widget' => '<div id="%1$s" class="tp-footer-widget ml-75 mb-50 wow fadeInUp %2$s" data-wow-duration=".9s" data-wow-delay=".4s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="tp-footer-title mb-15">',
		'after_title'   => '</h3>',
	) );
	register_sidebar( array(
		'name'          => __( 'Footer 1 : Widget 3', 'textdomain' ),
		'id'            => 'footer-1-widget-3',
		'description'   => __( 'Widgets in this area will be shown on Footer 1 : Widget 3', 'textdomain' ),
		'before_widget' => '<div id="%1$s" class="tp-footer-widget tp-footer-col-2 mb-50 wow fadeInUp %2$s" data-wow-duration=".9s" data-wow-delay=".5s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="tp-footer-title mb-15">',
		'after_title'   => '</h3>',
	) );
	register_sidebar( array(
		'name'          => __( 'Footer 1 : Widget 4', 'textdomain' ),
		'id'            => 'footer-1-widget-4',
		'description'   => __( 'Widgets in this area will be shown on Footer 1 : Widget 4', 'textdomain' ),
		'before_widget' => '<div id="%1$s" class="tp-footer-widget mb-50 wow fadeInUp %2$s" data-wow-duration=".9s" data-wow-delay=".6s>',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="tp-footer-cta-title mb-30">',
		'after_title'   => '</h3>',
	) );


	//  Footer Style 2
	register_sidebar( array(
		'name'          => __( 'Footer 2 : Widget 1', 'textdomain' ),
		'id'            => 'footer-2-widget-1',
		'description'   => __( 'Widgets in this area will be shown on Footer 2 : Widget 1', 'textdomain' ),
		'before_widget' => '<div id="%1$s" class="tp-footer-widget mb-40 mr-70 wow fadeInUp %2$s" data-wow-duration=".9s" data-wow-delay=".3s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="tp-footer-title mb-15">',
		'after_title'   => '</h3>',
	) );
	register_sidebar( array(
		'name'          => __( 'Footer 2 : Widget 2', 'textdomain' ),
		'id'            => 'footer-2-widget-2',
		'description'   => __( 'Widgets in this area will be shown on Footer 2 : Widget 2', 'textdomain' ),
		'before_widget' => '<div id="%1$s" class="tp-footer-widget ml-30 mb-50 wow fadeInUp %2$s" data-wow-duration=".9s" data-wow-delay=".4s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="tp-footer-title mb-15">',
		'after_title'   => '</h3>',
	) );
	register_sidebar( array(
		'name'          => __( 'Footer 2 : Widget 3', 'textdomain' ),
		'id'            => 'footer-2-widget-3',
		'description'   => __( 'Widgets in this area will be shown on Footer 2 : Widget 3', 'textdomain' ),
		'before_widget' => '<div id="%1$s" class="tp-footer-widget ml-75 tp-footer-col-2 mb-50 wow fadeInUp %2$s" data-wow-duration=".9s" data-wow-delay=".5s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="tp-footer-title mb-15">',
		'after_title'   => '</h3>',
	) );
	register_sidebar( array(
		'name'          => __( 'Footer 2 : Widget 4', 'textdomain' ),
		'id'            => 'footer-2-widget-4',
		'description'   => __( 'Widgets in this area will be shown on Footer 2 : Widget 4', 'textdomain' ),
		'before_widget' => '<div id="%1$s" class="tp-footer-widget ml-30 tp-footer-3-cta mb-50 wow fadeInUp %2$s" data-wow-duration=".9s" data-wow-delay=".6s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="tp-footer-title mb-15">',
		'after_title'   => '</h3>',
	) );

}
add_action( 'widgets_init', 'Kindaid_widgets_init' );




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

	function tp_widget_media_upload() {
		wp_enqueue_media();
	}
	add_action('admin_enqueue_scripts', 'tp_widget_media_upload');



	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}

}
add_action( 'wp_enqueue_scripts', 'kindaid_script' );


// kindaid Template Helper File

if( file_exists( dirname(__FILE__) . '/inc/template-helper.php' ) ){
    require_once( dirname(__FILE__) . '/inc/template-helper.php' );
}



// kindaid Metabox File

if( file_exists( dirname(__FILE__) . '/inc/kindaid-metabox.php' ) ){
    require_once( dirname(__FILE__) . '/inc/kindaid-metabox.php' );
}

// $kindaid_metabox_file = get_template_directory() . '/inc/template-helper.php';

// if ( function_exists( 'tpmeta_field' ) && file_exists( $kindaid_metabox_file ) ) {
// 	require_once $kindaid_metabox_file;
// }


// kindaid Nav Walker Integration

if( file_exists( dirname(__FILE__) . '/inc/nav-walker.php' ) ){
    require_once( dirname(__FILE__) . '/inc/nav-walker.php' );
}


// kindaid Footer Widgets File Here
if( file_exists( dirname(__FILE__) . '/inc/widgets/footer-info.php' ) ){
    require_once( dirname(__FILE__) . '/inc/widgets/footer-info.php' );
}
if( file_exists( dirname(__FILE__) . '/inc/widgets/footer-contact-info.php' ) ){
    require_once( dirname(__FILE__) . '/inc/widgets/footer-contact-info.php' );
}

// widget sytle 2 file here
if( file_exists( dirname(__FILE__) . '/inc/widgets/footer-newsletter.php' ) ){
    require_once( dirname(__FILE__) . '/inc/widgets/footer-newsletter.php' );
}

// widget sytle 2 file here
if( file_exists( dirname(__FILE__) . '/inc/widgets/footer-contact-info-2.php' ) ){
    require_once( dirname(__FILE__) . '/inc/widgets/footer-contact-info-2.php' );
}

// Kindaid KSES File Here
if( file_exists( dirname(__FILE__) . '/inc/kindaid-kses.php' ) ){
	require_once( dirname(__FILE__) . '/inc/kindaid-kses.php' );
}




// Kirki Integration
function kindaid_load_kirki_init() {
    if ( class_exists( 'Kirki' ) ) {
        include_once('inc/kindaid-kirki.php');
    }
}
add_action( 'init', 'kindaid_load_kirki_init' );

