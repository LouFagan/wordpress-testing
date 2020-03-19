<?php

// load css into the website's front-end
function load_stylesheets()
 {
	wp_register_style( 'stylesheet', get_template_directory_uri() . '/assets/css/bootstrap.min.css', array(), false, 'all' ); 
    wp_enqueue_style('stylesheet');
    wp_register_style( 'style', get_template_directory_uri() . '/style.css', array(), false, 'all' ); 
    wp_enqueue_style('style');
}
add_action( 'wp_enqueue_scripts', 'load_stylesheets' );


function loadjs()
 {
	
	 wp_register_script('bootstrap', get_template_directory_uri() . '/assets/js/bootstrap.bundle.min.js', array('jquery') );

    wp_register_script('customjs', get_template_directory_uri() . '/assets/js/scripts.js', '' , 1, true);
	wp_enqueue_script('customjs');
    wp_enqueue_script('bootstrap');
  

}

add_action('wp_enqueue_scripts', 'loadjs');

//function include_jquery()
//{

  //  wp_deregister_script('jquery');

   // wp_enqueue_script('jquery', get_template_directory_uri() . '/assets/js/jquery-3.4.1.min.js', '', 1,true);
//}

//add_action('wp_enqueue_scripts', 'include_jquery');


add_theme_support('menus');
add_theme_support('post-thumbnails', array('post','page'));
add_theme_support( 'post-formats', array( 'aside', 'link', 'gallery', 'status', 'quote', 'image' ));
add_theme_support( 'custom-background' );

function wptesting_custom_header_setup() {
    $args = array(
        'default-image'      => get_template_directory_uri() . '/assets/images/default.jpg',
        'default-text-color' => '000',
        'width'              => 1280,
        'height'             => 200,
        'flex-width'         => true,
        'flex-height'        => true,
    );
    add_theme_support( 'custom-header', $args );
}
add_action( 'after_setup_theme', 'wptesting_custom_header_setup' );



register_nav_menus(
	array(

		'top-menu'=>__('Top Menu', 'theme'),
		'footer-menu' => __('Footer Menu', 'theme'),

	)

);
add_filter('nav_menu_css_class' , 'add_active_class' , 10 , 2);

function add_active_class ($classes, $item) {
  if (in_array('current-menu-item', $classes) ){
    $classes[] = 'active ';
  }
  return $classes;
}
add_image_size('smallest', 150, 150, true);
add_image_size('largest', 800, 800, true);

/**
 * Register Custom Navigation Walker
 */
function register_navwalker(){
    require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';
}
add_action( 'after_setup_theme', 'register_navwalker' );



?>