<?php
/**
 * law functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package law
 */

if (!defined('_S_VERSION')) {
	// Replace the version number of the theme on each release.
	define('_S_VERSION', '1.0.0');
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function law_setup()
{
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on law, use a find and replace
	 * to change 'law' to the name of your theme in all the template files.
	 */
	load_theme_textdomain('law', get_template_directory() . '/languages');

	// Add default posts and comments RSS feed links to head.
	add_theme_support('automatic-feed-links');

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
	add_theme_support('post-thumbnails');

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus(
		array(
			'menu-1' => esc_html__('Primary', 'law'),
		)
	);

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

	// Set up the WordPress core custom background feature.
	add_theme_support(
		'custom-background',
		apply_filters(
			'law_custom_background_args',
			array(
				'default-color' => 'ffffff',
				'default-image' => '',
			)
		)
	);

	// Add theme support for selective refresh for widgets.
	add_theme_support('customize-selective-refresh-widgets');

	/**
	 * Add support for core custom logo.
	 *
	 * @link https://codex.wordpress.org/Theme_Logo
	 */
	add_theme_support(
		'custom-logo',
		array(
			'height' => 250,
			'width' => 250,
			'flex-width' => true,
			'flex-height' => true,
		)
	);
}
add_action('after_setup_theme', 'law_setup');

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function law_content_width()
{
	$GLOBALS['content_width'] = apply_filters('law_content_width', 640);
}
add_action('after_setup_theme', 'law_content_width', 0);

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function law_widgets_init()
{
	register_sidebar(
		array(
			'name' => esc_html__('Sidebar', 'law'),
			'id' => 'sidebar-1',
			'description' => esc_html__('Add widgets here.', 'law'),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget' => '</section>',
			'before_title' => '<h2 class="widget-title">',
			'after_title' => '</h2>',
		)
	);
}
add_action('widgets_init', 'law_widgets_init');

/**
 * Enqueue scripts and styles.
 */
function law_scripts()
{
	// add vendor js
	wp_enqueue_script('phenikaa-script-vendor', get_template_directory_uri() . '/assets/js/vendor.js', array(), _S_VERSION, true);

	// add select2
	wp_enqueue_style('law-style-select2', get_template_directory_uri() . '/assets/inc/select2/select2.css', array(), _S_VERSION);
	wp_enqueue_script('law-script-select2', get_template_directory_uri() . '/assets/inc/select2/select2.js', array(), _S_VERSION, true);

	// add tiny-slider
	wp_enqueue_style('law-style-tiny', get_template_directory_uri() . '/assets/css/tiny-slider.css', array(), _S_VERSION);
	wp_enqueue_script('law-script-tiny', get_template_directory_uri() . '/assets/js/tiny-slider.js', array(), _S_VERSION, true);

	// add aos
	// wp_enqueue_style('law-style-aos', get_template_directory_uri() . '/assets/css/aos.css', array(), _S_VERSION);
	// wp_enqueue_script('law-script-aos', get_template_directory_uri() . '/assets/js/aos.js', array(), _S_VERSION, true);

	// add glightbox
	// wp_enqueue_style('law-style-glightbox', get_template_directory_uri() . '/assets/js/glightbox.min.css', array(), _S_VERSION);
	// wp_enqueue_script('law-script-glightbox', get_template_directory_uri() . '/assets/js/glightbox.min.js', array(), _S_VERSION, true);

	//add custom main css/js
	wp_enqueue_style('law-style-main', get_template_directory_uri() . '/assets/css/main.css', array(), _S_VERSION);
	wp_enqueue_script('law-script-main', get_template_directory_uri() . '/assets/js/main.js', array(), _S_VERSION, true);

	//add core css/js
	wp_enqueue_style('law-style-core', get_template_directory_uri() . '/assets/css/style.css', array(), _S_VERSION);
	wp_enqueue_script('law-script-core', get_template_directory_uri() . '/assets/js/custom.js', array(), _S_VERSION, true);
}
add_action('wp_enqueue_scripts', 'law_scripts');

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

// Security
require get_template_directory() . '/inc/security.php';