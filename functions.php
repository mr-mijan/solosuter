<?php
/**
 * solosuter functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package solosuter
 */

 // Theme Functions
 function solosuter_after_setup_theme() {
 
     /*
     * Make theme available for translation.
     * Translations can be filed in the /languages/ directory.
     * If you're building a theme based on the_theme, use a find and replace
     * to change 'the_theme' to the name of your theme in all the template files.
     */
     load_theme_textdomain( 'solosuter', get_template_directory() . '/languages' );
 
     /*
     * Let WordPress manage the document title.
     * By adding theme support, we declare that this theme does not use a
     * hard-coded <title> tag in the document head, and expect WordPress to
     * provide it for us.
     */
     add_theme_support('title-tag');
     /*
     * Enable support for Post Thumbnails on posts and pages.
     *
     * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
     */
     add_theme_support( 'post-thumbnails', array('post', 'page','portfolio' ));
 
 
     // This theme uses wp_nav_menu() in one location.
     register_nav_menu( 'Primary_Menu', __('Main Menu', 'solosuter'));
 
     /*
     * Switch default core markup for search form, comment form, and comments
     * to output valid HTML5.
     */
     add_theme_support(
         'html5',
         array(
             'search-form',
             'comment-form',
             'comment-list',
             'gallery',
             'caption',
             'style',
             'script',
         )
     );
 
     /**
      * Add support for core custom logo.
      *
      * @link https://codex.wordpress.org/Theme_Logo
      */
     add_theme_support( 'custom-logo' );
 
     // Add default posts and comments RSS feed links to head.
     add_theme_support( 'automatic-feed-links' );
 
     /// Add theme support for selective refresh for widgets.
     // add_theme_support( 'customize-selective-refresh-widgets' );
     
     }
     add_action( 'after_setup_theme', 'solosuter_after_setup_theme' );
 
     // Post Excerpt
     function solosuter_custom_excerpt_length( $length ) {
         return 30;
     }
     add_filter( 'excerpt_length', 'solosuter_custom_excerpt_length', 999 );
 
     function solosuter_length_excerpt_more( $more ) {
         return ' ...';
     }
     add_filter( 'excerpt_more', 'solosuter_length_excerpt_more' );


// CSS JS Enqueue
function solosuter_theme_style_enqueue(){

    // CSS Enqueue
    wp_enqueue_style( 'theme_style', get_stylesheet_uri() );
    wp_enqueue_style('plugin_css', get_template_directory_uri().'/css/plugins.css', array(), '1.0.0', 'all' );
    wp_enqueue_style('main_style', get_template_directory_uri().'/css/styles.css', array(), '1.0.0', 'all' );
    // wp_enqueue_style('bootstrap', get_template_directory_uri().'/assets/css/bootstrap.min.css', array(), '5.0.1', 'all' );
    // wp_enqueue_style('animate', get_template_directory_uri().'/assets/css/animate.css', array(), '3.5.0', 'all' );
    // wp_enqueue_style('owl.carousel', get_template_directory_uri().'/assets/css/owl.carousel.css', array(), '1.0.0', 'all' );
    // wp_enqueue_style('owl.theme', get_template_directory_uri().'/assets/css/owl.theme.css', array(), '1.0.0', 'all' );
    // wp_enqueue_style('slick', get_template_directory_uri().'/assets/css/slick.css', array(), '1.0.0', 'all' );
    // wp_enqueue_style('slick-theme', get_template_directory_uri().'/assets/css/slick-theme.css', array(), '1.0.0', 'all' );
    // wp_enqueue_style('swiper', get_template_directory_uri().'/assets/css/swiper.min.css', array(), '4.0.1', 'all' );
    // wp_enqueue_style('owl.transitions', get_template_directory_uri().'/assets/css/owl.transitions.css', array(), '1.0.0', 'all' );
    // wp_enqueue_style('fancybox', get_template_directory_uri().'/assets/css/jquery.fancybox.css', array(), '2.1.5', 'all' );
    // wp_enqueue_style('odometer', get_template_directory_uri().'/assets/css/odometer-theme-default.css', array(), '1.0.0', 'all' );
    // wp_enqueue_style('style', get_template_directory_uri().'/assets/css/style.css', array(), '1.0.0', 'all' );
    // wp_enqueue_style( 'Font_Awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css' );
    wp_enqueue_style( 'google_font', 'https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;500;600;700;800;900&amp;display=swap' );
    wp_enqueue_style( 'google_font_01', 'https://fonts.googleapis.com/css2?family=Work+Sans:wght@100;200;300;400;500;600;700;800;900&amp;display=swap' );
  
    // JS Enqueue
    wp_enqueue_script( 'jquery');
    wp_enqueue_script('plugin_js', get_template_directory_uri().'/js/plugins.js', array(), '1.0.0', 'true' );
    wp_enqueue_script('script', get_template_directory_uri().'/js/scripts.js', array(), '1.0.0', 'true' );
}
add_action('wp_enqueue_scripts', 'solosuter_theme_style_enqueue');


// // Widget Register
// require_once('inc/widget.php');

// // Customizer Register
// require_once('inc/customizer.php');

// // Custom Post For Event
// require_once('inc/event-custom-post.php');

// Redux
require_once (get_template_directory().'/inc/redux.php');
require_once (get_template_directory().'/inc/portfolio_custom_post.php');


function theme_prefix_register_elementor_locations( $elementor_theme_manager ) {

	$elementor_theme_manager->register_all_core_location();

}
add_action( 'elementor/theme/register_locations', 'theme_prefix_register_elementor_locations' );


