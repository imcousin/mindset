<?php
/**
 * Mindset functions and definitions
 *
 * @package Mindset
 */

if ( ! function_exists( 'mindset_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function mindset_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on Mindset, use a find and replace
	 * to change 'mindset' to the name of your theme in all the template files
	 */
	load_theme_textdomain( 'mindset', get_template_directory() . '/languages' );

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
	 * @link http://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
	 */
	add_theme_support( 'post-thumbnails' );
	add_image_size('blog-featured-thumbnail', 200, 9999);

       
        
	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' => esc_html__( 'Primary Menu', 'mindset' ),
		'footer' => esc_html__( 'Footer Menu', 'mindset' ),
		'footer-social' => esc_html__( 'Footer Social Menu', 'mindset' ),
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

	/*
	 * Enable support for Post Formats.
	 * See http://codex.wordpress.org/Post_Formats
	 */
//	add_theme_support( 'post-formats', array(
//		'aside',
//		'image',
//		'video',
//		'quote',
//		'link',
//	) );

}
endif; // mindset_setup
add_action( 'after_setup_theme', 'mindset_setup' );




/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function mindset_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'mindset_content_width', 640 );
}
add_action( 'after_setup_theme', 'mindset_content_width', 0 );





/**
 * Register widget area.
 *
 * @link http://codex.wordpress.org/Function_Reference/register_sidebar
 */
function mindset_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'mindset' ),
		'id'            => 'sidebar-1',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h1 class="widget-title">',
		'after_title'   => '</h1>',
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'Contact Page Widget', 'mindset' ),
		'id'            => 'sidebar-contact',
		'description'   => 'shows up on contact page',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h1 class="widget-title">',
		'after_title'   => '</h1>',
	) );
        
	register_sidebar( array(
		'name'          => esc_html__( 'Services Page Widget', 'mindset' ),
		'id'            => 'sidebar-services',
		'description'   => 'shows up on services page',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h1 class="widget-title">',
		'after_title'   => '</h1>',
	) );
}
add_action( 'widgets_init', 'mindset_widgets_init' );





/****************************
 * Enqueue scripts and styles.
 ****************************/
function mindset_scripts() {
    wp_enqueue_style( 'mindset-style', get_stylesheet_uri() );      

    wp_enqueue_script( 'mindset-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20120206', true );

    wp_enqueue_script( 'mindset-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20130115', true );
        
    wp_enqueue_script( 'mindset-superfish', get_template_directory_uri() . '/js/superfish.min.js', array('jquery'), '20140404', true );

    wp_enqueue_script( 'mindset-superfish-settings', get_template_directory_uri() . '/js/superfish-settings.js', array('mindset-superfish'), '20140328', true );

    wp_enqueue_script( 'backtotop-btn', get_template_directory_uri() . '/js/backtotop-btn.js', '20140328', true );

    wp_enqueue_style( 'backtotop-style', get_template_directory_uri() . '/css/backtotop-btn.css' );  

if(is_front_page()){
    wp_enqueue_script( 'flex-slider-js', get_template_directory_uri() . '/js/jquery.flexslider-min.js', array('jquery'), true );

    wp_enqueue_style( 'flex-slider-style', get_template_directory_uri() . '/css/flexslider.css' );

    wp_enqueue_script( 'flex-slider-settings', get_template_directory_uri() . '/js/flexslider-settings.js', array('flex-slider-js'), '20160426', true );
}


    wp_enqueue_style('font-awesome', 'https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css');            
        
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'mindset_scripts' );





//Add Favicon
function mindset_favicon() { 
//echo '<link href="'. get_template_directory_uri().'/favicon.ico" rel="shortcut icon" type="image/x-icon">';

echo '<!-- For iPad with high-resolution Retina display running iOS >= 7: -->';
echo '<link rel="apple-touch-icon-precomposed" sizes="152x152" href="'. get_template_directory_uri().'/images/favicon-theming-152.png">';
echo '<!-- For iPhone with high-resolution Retina display running iOS >= 7: -->';
echo '<link rel="apple-touch-icon-precomposed" sizes="120x120" href="'. get_template_directory_uri().'/images/favicon-theming-120.png">';
echo '<!-- Chrome / Firefox / Opera -->';
echo '<link rel="icon" href="'. get_template_directory_uri().'/images/favicon-theming-96.png">';
echo '<!-- for IE up to IE9 -->';
echo '<!--[if IE]>';
echo '<link rel="shortcut icon" href="'. get_template_directory_uri().'/images/favicon.ico">';
echo '<![endif]-->';
echo '<!-- for IE10 and up -->';
echo '<meta name="msapplication-TileImage" content="'. get_template_directory_uri().'/images/favicon-theming-144.png">';
echo '<meta name="msapplication-TileColor" content="#000000">';
 }
add_action('wp_head', 'mindset_favicon');




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

//Page Slug Body Class
function add_slug_body_class( $classes ) {
global $post;
if ( isset( $post ) ) {
$classes[] = $post->post_type . '-' . $post->post_name;
}
return $classes;
}
add_filter( 'body_class', 'add_slug_body_class' );




 function mindset_excerpt_more( $more ) {
        return '<a class="read-more" href="' . get_permalink() . '">...Continue Reading...</a>';
    }
    add_filter( 'excerpt_more', 'mindset_excerpt_more' );

    function mindset_excerpt_length( $length ) {
    	if(!is_post_type_archive('work')){
	return 55;
}else {
		return 15;
}
}
add_filter( 'excerpt_length', 'mindset_excerpt_length', 999 );