<?php
/**
 * venus functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package venus
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function venus_setup() {
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on venus, use a find and replace
		* to change 'venus' to the name of your theme in all the template files.
		*/
	load_theme_textdomain( 'venus', get_template_directory() . '/languages' );

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
	register_nav_menus(
		array(
			'primary_menu' => esc_html__( 'Primary', 'venus' ),
			'ftr_menu' => esc_html__( 'Footer', 'venus' ),
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
			'venus_custom_background_args',
			array(
				'default-color' => 'ffffff',
				'default-image' => '',
			)
		)
	);

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );

	/**
	 * Add support for core custom logo.
	 *
	 * @link https://codex.wordpress.org/Theme_Logo
	 */
	add_theme_support(
		'custom-logo',
		array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		)
	);

		$defaults = array(
			'height'               => 90,
			'width'                => 26,
			'flex-height'          => true,
			'flex-width'           => true,
			'header-text'          => array( 'site-title', 'site-description' ),
			'unlink-homepage-logo' => true,
		);
		add_theme_support( 'custom-logo', $defaults );

	add_image_size('venus-portfolio-square', 715, 555, true);
	add_image_size('venus-portfolio-masonry', 715, 9999);
	add_image_size('venus-team', 800, 800, true);
}
add_action( 'after_setup_theme', 'venus_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function venus_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'venus_content_width', 640 );
}
add_action( 'after_setup_theme', 'venus_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function venus_widgets_init() {

	register_sidebar( array(
		'name'          => __( 'Footer one', 'venus' ),
		'id'            => 'ftr1',
		'description'   => __( 'Widgets in this area will be shown on Footer One Section.', 'venus' ),
		'before_widget' => '<li id="%1$s" class="widget %2$s">',
		'after_widget'  => '</li>',
		'before_title'  => '<h2 class="widgettitle">',
		'after_title'   => '</h2>',
	) );

	register_sidebar( array(
		'name'          => __( 'Footer Two ', 'venus' ),
		'id'            => 'ftr2',
		'description'   => __( 'Widgets in this area will be shown on Footer Two Section.', 'venus' ),
		'before_widget' => '<li id="%1$s" class="widget %2$s">',
		'after_widget'  => '</li>',
		'before_title'  => '<h6 class="mb-4">',
		'after_title'   => '</h6>',
	) );

		register_sidebar( array(
		'name'          => __( 'Footer Three ', 'venus' ),
		'id'            => 'ftr3',
		'description'   => __( 'Widgets in this area will be shown on Footer Three Section.', 'venus' ),
		'before_widget' => '<li id="%1$s" class="widget %2$s">',
		'after_widget'  => '</li>',
		'before_title'  => '<h6 class="mb-4">',
		'after_title'   => '</h6>',
	) );

		register_sidebar( array(
		'name'          => __( 'Footer Four ', 'venus' ),
		'id'            => 'ftr4',
		'description'   => __( 'Widgets in this area will be shown on Footer Four Section.', 'venus' ),
		'before_widget' => '<li id="%1$s" class="widget %2$s">',
		'after_widget'  => '</li>',
		'before_title'  => '<h6 class="mb-4">',
		'after_title'   => '</h6>',
	) );

		register_sidebar( array(
		'name'          => __( 'Footer Bottom ', 'venus' ),
		'id'            => 'ftr5',
		'description'   => __( 'Widgets in this area will be shown on Footer Bottom Section.', 'venus' ),
		'before_widget' => '<li id="%1$s" class="widget %2$s copyright">',
		'after_widget'  => '</li>',
		'before_title'  => '<h6>',
		'after_title'   => '</h6>',
	) );



}
add_action( 'widgets_init', 'venus_widgets_init' );

/**
 * Enqueue scripts and styles.
 *     <!--web fonts-->
<link href="https:" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Lora:400i" rel="stylesheet">

<!--basic styles-->
 */
function venus_scripts() {
	wp_enqueue_style('google-fonts', '//fonts.googleapis.com/css?family=Nunito:300,400,600,700,800&family=Lora:400i');
	wp_enqueue_style('bootstrap-css', get_theme_file_uri('assets/vendor/bootstrap/css/bootstrap.min.css'));
	wp_enqueue_style('fontawesome-css', get_theme_file_uri('assets/vendor/fontawesome/css/all.min.css'));
	wp_enqueue_style('custom-icon-css', get_theme_file_uri('assets/vendor/custom-icon/style.css'));
	wp_enqueue_style('vl-nav-css', get_theme_file_uri('assets/vendor/vl-nav/css/core-menu.css'));
	wp_enqueue_style('animate-css', get_theme_file_uri('assets/vendor/animate.min.css'));
	wp_enqueue_style('magnific-popup-css', get_theme_file_uri('assets/vendor/magnific-popup/magnific-popup.css'));
	wp_enqueue_style('owl-carousel-css', get_theme_file_uri('assets/vendor/owl/assets/owl.carousel.min.css'));
	wp_enqueue_style('owl-theme-default-css', get_theme_file_uri('assets/vendor/owl/assets/owl.theme.default.min.css'));
	wp_enqueue_style('slide-menu-css', get_theme_file_uri('assets/vendor/vl-nav/css/effects/slide-menu.css'));
	wp_enqueue_style('venus-css', get_theme_file_uri('assets/css/main.css'));
	wp_enqueue_style('venus-main-css', get_stylesheet_uri());
	//	wp_style_add_data( 'venus-style', 'rtl', 'replace' );

	wp_enqueue_script('jquery', get_theme_file_uri('assets/vendor/jquery/jquery.min.js'), array(), _S_VERSION, true);
	wp_enqueue_script('popper-js', get_theme_file_uri('assets/vendor/popper.min.js'), array('jquery'), _S_VERSION, true);
	wp_enqueue_script('bootstrap-js', get_theme_file_uri('assets/vendor/bootstrap/js/bootstrap.min.js'), array('jquery'), _S_VERSION, true);
	wp_enqueue_script('vl-menu-js', get_theme_file_uri('assets/vendor/vl-nav/js/vl-menu.js'), array('jquery'), _S_VERSION, true);
	wp_enqueue_script('magnific-popup-js', get_theme_file_uri('assets/vendor/magnific-popup/jquery.magnific-popup.min.js'), array('jquery'), _S_VERSION, true);
	wp_enqueue_script('owl-carousel-js', get_theme_file_uri('assets/vendor/owl/owl.carousel.min.js'), array('jquery'), _S_VERSION, true);
	wp_enqueue_script('isotope-js', get_theme_file_uri('assets/vendor/jquery.isotope.js'), array('jquery'), _S_VERSION, true);
	wp_enqueue_script('imagesloaded-js', get_theme_file_uri('assets/vendor/imagesloaded.js'), array('jquery'), _S_VERSION, true);
	wp_enqueue_script('wow-js', get_theme_file_uri('assets/vendor/wow.min.js'), array('jquery'), _S_VERSION, true);
	wp_enqueue_script('venus-js', get_theme_file_uri('assets/js/scripts.js'), array('jquery'), _S_VERSION, true);
	wp_enqueue_script('custom-js', get_theme_file_uri('assets/js/custom.js'), array('jquery'), _S_VERSION, true);

	wp_enqueue_script( 'venus-navigation', get_template_directory_uri() . 'assets/js/navigation.js', array(), _S_VERSION, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'venus_scripts' );

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
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}


function venus_widget_nav_menu_args($nav_menu_args, $nav_menu, $args, $instance){
	$nav_menu_args['menu_class'] = 'menu footer-link';
	return $nav_menu_args;
}
add_filter('widget_nav_menu_args', 'venus_widget_nav_menu_args', 10, 4);
