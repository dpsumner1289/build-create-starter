<?php
/**
 * build/create - nrc functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package build/create_-_nrc
 */

if ( ! function_exists( 'build_create_starter_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function build_create_starter_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on build/create - nrc, use a find and replace
		 * to change 'build-create-nrc' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'build-create-nrc', get_template_directory() . '/languages' );

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
			'menu-1' => esc_html__( 'Primary', 'build-create-nrc' ),
			'menu-footer' => esc_html__( 'Footer Menu', 'build-create-nrc' ),
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
		add_theme_support( 'custom-background', apply_filters( 'build_create_starter_custom_background_args', array(
			'default-color' => 'ffffff',
			'default-image' => '',
		) ) );

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support( 'custom-logo', array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		) );
	}
endif;
add_action( 'after_setup_theme', 'build_create_starter_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function build_create_starter_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'build_create_starter_content_width', 640 );
}
add_action( 'after_setup_theme', 'build_create_starter_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function build_create_starter_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Post Sidebar', 'build-create-nrc' ),
		'id'            => 'sidebar-post',
		'description'   => esc_html__( 'Add widgets here for post sidebar.', 'build-create-nrc' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'Page Sidebar', 'build-create-nrc' ),
		'id'            => 'sidebar-page',
		'description'   => esc_html__( 'Add widgets here for page sidebar.', 'build-create-nrc' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'Resource Sidebar', 'build-create-nrc' ),
		'id'            => 'sidebar-resource',
		'description'   => esc_html__( 'Add widgets here for resource sidebar.', 'build-create-nrc' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'build_create_starter_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function build_create_starter_scripts() {
	
	//#- Styles
	wp_enqueue_style( 'font-style', get_stylesheet_directory_uri().'/assets/fonts/font.css' );
	wp_enqueue_style( 'font-awesome-style', get_stylesheet_directory_uri().'/assets/fontawesome-free-5.0.9/web-fonts-with-css/css/fontawesome-all.css' );
	wp_enqueue_style( 'build-create-nrc-style', get_stylesheet_uri() );

	//##-- Owl Carousel Styles
	wp_enqueue_style( 'owl-styles', get_stylesheet_directory_uri().'/owl-carousel/owl.carousel.min.css' );
	wp_enqueue_style( 'owl-theme-styles', get_stylesheet_directory_uri().'/owl-carousel/owl.theme.default.min.css' );
	
	//##-- mmenu styles
	wp_enqueue_style( 'mmenu-style', get_stylesheet_directory_uri().'/inc/mmenu/dist/jquery.mmenu.all.css' );

	//#- Scripts
	// wp_enqueue_script( 'build-create-nrc-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

	wp_enqueue_script( 'build-create-nrc-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	//##-- mmenu scripts
	wp_enqueue_script( 'mmenu', get_template_directory_uri() . '/inc/mmenu/dist/jquery.mmenu.all.js', array('jquery'), null, true );

	wp_enqueue_script( 'layouts', get_template_directory_uri() . '/js/layouts-min.js', array('jquery'), null, true );

	//##-- Animations
	wp_enqueue_script( 'counter', get_template_directory_uri() . '/js/animations/counter-min.js', array('jquery'), null, true );

	//##-- Custom Functionality
	wp_enqueue_script( 'feature-list', get_template_directory_uri() . '/js/custom-functionality/feature-list-min.js', array('jquery'), null, true );
	wp_enqueue_script( 'tabs', get_template_directory_uri() . '/js/custom-functionality/tabs-min.js', array('jquery'), null, true );
	wp_enqueue_script( 'mmenu-custom', get_template_directory_uri() . '/js/custom-functionality/mmenu-custom-min.js', array('jquery'), null, true );
	wp_enqueue_script( 'scroll', get_template_directory_uri() . '/js/custom-functionality/scroll-min.js', array('jquery'), null, true );

	//##-- Owl Carousel

	wp_enqueue_script( 'owl-slider', get_template_directory_uri() . '/owl-carousel/owl.carousel.min.js', array('jquery'), null, true );	

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'build_create_starter_scripts' );

/**
 * Link all post thumbnails to the post permalink.
 *
 * @param string $html          Post thumbnail HTML.
 * @param int    $post_id       Post ID.
 * @param int    $post_image_id Post image ID.
 * @return string Filtered post image HTML.
 */

function wpdocs_post_image_html( $html, $post_id, $post_image_id ) {
    $html = '<a href="' . get_permalink( $post_id ) . '" alt="' . esc_attr( get_the_title( $post_id ) ) . '">' . $html . '</a>';
    return $html;
}
add_filter( 'post_thumbnail_html', 'wpdocs_post_image_html', 10, 3 );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Add ACF config
 */
include (trailingslashit(get_template_directory()).'inc/acf-config.php');

/**
 * Add custom functions
 */
include (trailingslashit(get_template_directory()).'inc/custom-functions.php');

/**
 * Add custom post types
 */
include (trailingslashit(get_template_directory()).'cpts/focal-point-issue-post-type.php');
include (trailingslashit(get_template_directory()).'cpts/review-post-type.php');
include (trailingslashit(get_template_directory()).'cpts/resource-post-type.php');
include (trailingslashit(get_template_directory()).'cpts/faq-post-type.php');

/**
 * Add Gravity Forms functionality
 */
add_filter( 'gform_enable_field_label_visibility_settings', '__return_true' );