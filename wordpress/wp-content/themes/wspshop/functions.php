<?php

function custom_theme_assets() {
	wp_enqueue_style( 'bootstrap', get_template_directory_uri().'/assets/css/vendor/bootstrap.min.css' );
	wp_enqueue_style( 'fontawesome', get_template_directory_uri().'/assets/css/vendor/font-awesome.css' );
	wp_enqueue_style( 'flaticon', get_template_directory_uri().'/assets/css/vendor/flaticon/flaticon.css' );
	wp_enqueue_style( 'slick', get_template_directory_uri().'/assets/css/vendor/slick.css' );
	wp_enqueue_style( 'slick-theme', get_template_directory_uri().'/assets/css/vendor/slick-theme.css' );
	wp_enqueue_style( 'jquery-ui', get_template_directory_uri().'/assets/css/vendor/jquery-ui.min.css' );
	wp_enqueue_style( 'sal', get_template_directory_uri().'/assets/css/vendor/sal.css' );
	wp_enqueue_style( 'magnific-popup', get_template_directory_uri().'/assets/css/vendor/magnific-popup.css' );
	wp_enqueue_style( 'base', get_template_directory_uri().'/assets/css/vendor/base.css' );
	wp_enqueue_style( 'style-min', get_template_directory_uri().'/assets/css/style.min.css' );
	wp_enqueue_style( 'main-style', get_template_directory_uri().'/assets/main.css' );
}
add_action( 'wp_enqueue_scripts', 'custom_theme_assets' );

function custom_js() {
    wp_enqueue_script( 'modernizr-min', get_template_directory_uri() . '/assets/js/vendor/modernizr.min.js');
    wp_enqueue_script( 'jquery', get_template_directory_uri() . '/assets/js/vendor/jquery.js');
    wp_enqueue_script( 'popper-min', get_template_directory_uri() . '/assets/js/vendor/popper.min.js');
    wp_enqueue_script( 'bootstrap-min', get_template_directory_uri() . '/assets/js/vendor/bootstrap.min.js');
    wp_enqueue_script( 'slick-min', get_template_directory_uri() . '/assets/js/vendor/slick.min.js');
    wp_enqueue_script( 'js-cookie', get_template_directory_uri() . '/assets/js/vendor/js.cookie.js');
    wp_enqueue_script( 'jquery-ui', get_template_directory_uri() . '/assets/js/vendor/jquery-ui.min.js');
    wp_enqueue_script( 'jquery-countdown', get_template_directory_uri() . '/assets/js/vendor/jquery.countdown.min.js');
    wp_enqueue_script( 'sal', get_template_directory_uri() . '/assets/js/vendor/sal.js');
    wp_enqueue_script( 'jquery-magnific', get_template_directory_uri() . '/assets/js/vendor/jquery.magnific-popup.min.js');
    wp_enqueue_script( 'images-loaded', get_template_directory_uri() . '/assets/js/vendor/imagesloaded.pkgd.min.js');
    wp_enqueue_script( 'isotope', get_template_directory_uri() . '/assets/js/vendor/isotope.pkgd.min.js');
    wp_enqueue_script( 'counterup', get_template_directory_uri() . '/assets/js/vendor/counterup.js');
    wp_enqueue_script( 'waypoints', get_template_directory_uri() . '/assets/js/vendor/waypoints.min.js');
    wp_enqueue_script( 'main', get_template_directory_uri() . '/assets/js/main.js');
}
add_action('wp_footer', 'custom_js');

function navbar_menu() {
    register_nav_menu('my-header-menu',__( 'My Header Menu' ));
  }
add_action( 'init', 'navbar_menu' );

function wpdocs_custom_dropdown_class( $classes ) {
	$classes[] = 'axil-submenu';
	return $classes;
}
add_filter( 'nav_menu_submenu_css_class', 'wpdocs_custom_dropdown_class' );

/* Custom Post Type Start */

function create_posttype() {
    register_post_type( 'products',
    array(
      'labels' => array(
       'name' => __( 'Товары'),
       'singular_name' => __( 'Товар')
      ),
      'public' => true,
      'has_archive' => false,
      'rewrite' => array('slug' => 'products'),
        'taxonomies'  => array( 'category' )
     )
    );
}
// Hooking up our function to theme setup
add_action( 'init', 'create_posttype' );    
/* Custom Post Type End */