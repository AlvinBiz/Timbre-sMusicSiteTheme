<?php
/**
 * Timbre\'s Underscores Theme functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Timbre\'s_Underscores_Theme
 */

if ( ! function_exists( 'timbres_underscores_theme_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function timbres_underscores_theme_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on Timbre\'s Underscores Theme, use a find and replace
		 * to change 'timbres-underscores-theme' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'timbres-underscores-theme', get_template_directory() . '/languages' );

		// Add woocommerce theme support.

		add_theme_support( 'woocommerce', array(
        'thumbnail_image_width' => 150,
        'single_image_width'    => 300,

        'product_grid'          => array(
            'default_rows'    => 3,
            'min_rows'        => 2,
            'max_rows'        => 8,
            'default_columns' => 4,
            'min_columns'     => 2,
            'max_columns'     => 5,
        ),
    ) );


		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );


		add_action( 'after_setup_theme', 'mytheme_add_woocommerce_support' );

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );

		add_theme_support( 'post-thumbnails' );

		/*
		 * Add a custom image type for albums if needed.
		 */

		// add_image_size('albumCustom', )

		register_nav_menus( array(
			'menu-1' => esc_html__( 'Primary', 'timbres-underscores-theme' ),
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
		add_theme_support( 'custom-background', apply_filters( 'timbres_underscores_theme_custom_background_args', array(
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

add_action( 'after_setup_theme', 'timbres_underscores_theme_setup' );

remove_action( 'woocommerce_before_main_content', 'woocommerce_output_content_wrapper', 10);
remove_action( 'woocommerce_after_main_content', 'woocommerce_output_content_wrapper_end', 10);
add_action('woocommerce_before_main_content', 'my_theme_wrapper_start', 10);
add_action('woocommerce_after_main_content', 'my_theme_wrapper_end', 10);

function my_theme_wrapper_start() {
echo '<section id="main">';
}

function my_theme_wrapper_end() {
echo '</section>';
}

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function timbres_underscores_theme_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'timbres_underscores_theme_content_width', 640 );
}
add_action( 'after_setup_theme', 'timbres_underscores_theme_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function timbres_underscores_theme_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'timbres-underscores-theme' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'timbres-underscores-theme' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'timbres_underscores_theme_widgets_init' );

function timbres_underscores_theme_scripts() {
	wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' , array() , '5.3.4' );

	wp_enqueue_style('font_awesome', '//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');

	wp_enqueue_style('custom_google_font', '//fonts.googleapis.com/css?family=Baskervville:400,400i|Cormorant:400,400i|Beth+Ellen|Charmonman:400,700|Open+Sans:400,400i');

	wp_enqueue_script( 'timbres-underscores-theme-navigation', get_template_directory_uri() . '/js/navigation.js', array( 'jquery' ), '20151215', true );

	wp_enqueue_script( 'timbres-underscores-search', get_template_directory_uri() . '/js/search.js', array( 'jquery' ), '20151215', true );

	wp_enqueue_script( 'vimeo-player-sdk', 'https://player.vimeo.com/api/player.js' );

	wp_enqueue_script( 'timbres-underscores-theme-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	wp_enqueue_script( 'timbres-underscores-post-animations', get_template_directory_uri() . '/js/post-animations.js', array( 'jquery' ), '20200319', true );

	wp_enqueue_script( 'timbres-underscores-mobile-menu-animation', get_template_directory_uri() . '/js/mobile-menu-animation.js', array( 'jquery' ), '20200319', true );

	wp_enqueue_script( 'timbres-underscores-video-fix', get_template_directory_uri() . '/js/video-fix.js', array( 'jquery' ), '20200319', true );


	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}


add_action('elementor/frontend/after_enqueue_scripts', function() {
	wp_enqueue_script( 'timbres-underscores-theme-video-fix', get_template_directory_uri() . '/js/video-fix.js', array( 'jquery' ), '20200319', true );
});

add_action( 'wp_enqueue_scripts', 'timbres_underscores_theme_scripts' );

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

add_filter( 'woocommerce_page_title', 'woo_shop_page_title');
    function woo_shop_page_title( $page_title ) {
        if( 'Shop' == $page_title) {
            return "scores";
        }
    }

		function custom_type_archive_display($query) {
	     if (is_post_type_archive('composition') && ! is_admin() && $query->is_main_query() ) {
	          $query->set('posts_per_page',50);
	          $query->set('orderby', 'date' );
	          $query->set('order', 'DESC' );
	         return;
	     }
	 }
	 add_action('pre_get_posts', 'custom_type_archive_display');


	 /**
	  * Modify the REST API
	  */

		function maximum_api_filter($query_params) {
			$query_params['per_page']["maximum"]=200;
			return $query_params;
		}
		add_filter('rest_page_collection_params', 'maximum_api_filter');


	 function json_custom_fields( $data, $post, $request ) {
	 	$_data = $data->data;

	 	$_data['arrangement'] = get_field('arrangement', $post->ID);


	 	$data->data = $_data;
	 	return $data;
	 }

	 add_filter( 'rest_prepare_composition', 'json_custom_fields', 10, 3 );

	 function my_allow_meta_query( $valid_vars ) {

    $valid_vars = array_merge( $valid_vars, array( 'meta_key', 'meta_value' ) );
    return $valid_vars;
	}

	add_filter( 'rest_query_vars', 'my_allow_meta_query' );
