<?php
/**
 * Wee Wiggles functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Wee_Wiggles
 */

if ( ! function_exists( 'wee_wiggles_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function wee_wiggles_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on Wee Wiggles, use a find and replace
	 * to change 'wee-wiggles' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( 'wee-wiggles', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
	add_theme_support( 'title-tag' );

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
	 */
	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' => esc_html__( 'Primary', 'wee-wiggles' ),
	) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );

	// Set up the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'wee_wiggles_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );
}
endif;
add_action( 'after_setup_theme', 'wee_wiggles_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function wee_wiggles_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'wee_wiggles_content_width', 640 );
}
add_action( 'after_setup_theme', 'wee_wiggles_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function wee_wiggles_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'wee-wiggles' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'wee-wiggles' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'wee_wiggles_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function wee_wiggles_scripts() {
	wp_enqueue_script ( 'modernizr', get_template_directory_uri() . '/js/modernizr.custom.min.js', array(), '2.8.3' );

	wp_enqueue_style ( 'glide-core', get_template_directory_uri() . '/css/glide.core.css' );
	wp_enqueue_style ( 'glide-theme', get_template_directory_uri() . '/css/glide.theme.css' );
	wp_enqueue_style( 'wee-wiggles-style', get_stylesheet_uri() );

	wp_enqueue_script('jquery');
	wp_enqueue_script( 'wee-wiggles-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '', true );
	wp_enqueue_script( 'flexslider', get_template_directory_uri() . '/js/jquery.flexslider.min.js', array(), '2.6.1', true );
	wp_enqueue_script( 'waypoints', get_template_directory_uri() . '/js/jquery.waypoints.min.js', array(), '4.0.0', true );
	wp_enqueue_script( 'tween-max', get_template_directory_uri() . '/js/TweenMax.min.js', array(), '4.0.0', true );
	wp_enqueue_script( 'scroll-magic', get_template_directory_uri() . '/js/ScrollMagic.js', array(), '2.0.5', true );
	wp_enqueue_script( 'animation-gsap', get_template_directory_uri() . '/js/animation.gsap.js', array(), '2.0.5', true );
	wp_enqueue_script( 'debug-indicator', get_template_directory_uri() . '/js/debug.addIndicators.js', array(), '2.0.5', true );
	wp_enqueue_script( 'glide', get_template_directory_uri() . '/js/glide.min.js', array(), '2.0.8', true );
	wp_enqueue_script( 'main-js-file', get_template_directory_uri() . '/js/main.js', array(), '1.15.1', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'wee_wiggles_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';

?>
