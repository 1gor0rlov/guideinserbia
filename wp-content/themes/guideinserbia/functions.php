<?php

//Including Styles and Scripts
function wp_styles_scripts() {
    wp_enqueue_style( 'style', get_stylesheet_uri() );
    wp_enqueue_style( 'Font Awesome', get_template_directory_uri() . '/css/font-awesome.min.css');
    wp_enqueue_style( 'Bootstrap', get_template_directory_uri() . '/css/bootstrap.css');
    wp_enqueue_style( 'Theme', get_template_directory_uri() . '/css/theme.css');
    wp_enqueue_style( 'Custom', get_template_directory_uri() . '/css/custom.css');
    wp_enqueue_style( 'LightBox', get_template_directory_uri() . '/css/lightbox.css');
    wp_enqueue_style( 'Google Maps-css', get_template_directory_uri() . '/css/googlemap.css');
    wp_enqueue_style( 'Themify', 'https://cdn.jsdelivr.net/gh/lykmapipo/themify-icons@0.1.2/css/themify-icons.css');
    wp_enqueue_style( 'FlexSlider-css', get_template_directory_uri() . '/css/flexslider.css');
    // wp_enqueue_style( 'Google Fonts', 'https://fonts.googleapis.com/css?family=Alegreya|Inconsolata');
    wp_enqueue_style( 'Google Fonts', 'https://fonts.googleapis.com/css?family=Pacifico');

    wp_enqueue_script( 'jQuery', get_template_directory_uri() . '/js/jquery.min.js');
    wp_enqueue_script( 'Bootstrap-JS', get_template_directory_uri() . '/js/bootstrap.min.js');
    wp_enqueue_script( 'Scripts', get_template_directory_uri() . '/js/scripts.js');
    // wp_enqueue_script( 'Google Maps', 'https://maps.googleapis.com/maps/api/js?key=AIzaSyDu3igG7JCAjro0yvCDE6cqZEWv0npIoBI&callback=initMap');
    wp_enqueue_script( 'FlexSlider-js', get_template_directory_uri() . '/js/flexslider.min.js');
    wp_enqueue_script( 'FontAwesomeJS', 'https://use.fontawesome.com/releases/v5.0.6/js/all.js');
}
add_action( 'wp_enqueue_scripts', 'wp_styles_scripts' );

//Menus
function register_my_menus() {
  register_nav_menus(
    array(
      'left-menu' => __( 'Left Navigation Menu' ),
      'right-menu' => __( 'Right Navigation Menu' )
    )
  );
}
add_action( 'init', 'register_my_menus' );

//Removing Admin Menu Pages
function remove_menus(){
  remove_menu_page( 'index.php' );                  //Dashboard
  remove_menu_page( 'edit.php' );                   //Posts
  // remove_menu_page( 'upload.php' );                 //Media
  remove_menu_page( 'edit-comments.php' );          //Comments
  // remove_menu_page( 'plugins.php' );                //Plugins
}
add_action( 'admin_menu', 'remove_menus' );

//Adding Custom Post Types
function create_posttype() {

    register_post_type( 'belgrade',
        array(
            'labels' => array(
                'name' => __( 'Belgrade' ),
                'singular_name' => __( 'Belgrade' )
            ),
            'public' => true,
            'has_archive' => false,
            'rewrite' => array('slug' => 'belgrade'),
            'menu_position' => 3,
            'supports' => array( 'title', 'editor', 'thumbnail', 'excerpt'  ),
        )
    );
    register_post_type( 'serbia',
        array(
            'labels' => array(
                'name' => __( 'Serbia' ),
                'singular_name' => __( 'Serbia' )
            ),
            'public' => true,
            'has_archive' => false,
            'rewrite' => array('slug' => 'serbia'),
            'menu_position' => 4,
            'supports' => array( 'title', 'editor', 'thumbnail', 'excerpt' ),
        )
    );
}
add_action( 'init', 'create_posttype' );

//Excerpt Length
function custom_excerpt_length( $length ) {
	return 30;
}
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );

//Excerpt Sign
function wpdocs_excerpt_more( $more ) {
    return '';
}
add_filter( 'excerpt_more', 'wpdocs_excerpt_more' );

//Adding Featured Image
function featured_image(){
  add_theme_support('post-thumbnails');
}
add_action('after_setup_theme','featured_image');

//ACF
include_once( get_stylesheet_directory() . '/plugins/acf/acf.php' );
//ACF Map
function my_acf_google_map_api( $api ){

	$api['key'] = 'AIzaSyDu3igG7JCAjro0yvCDE6cqZEWv0npIoBI';

	return $api;

}
add_filter('acf/fields/google_map/api', 'my_acf_google_map_api');

//Option Tree
add_filter( 'ot_theme_mode', '__return_true' );
add_filter( 'ot_show_pages', '__return_true' );
require( trailingslashit( get_template_directory() ) . '/plugins/option-tree/ot-loader.php' );

//Contact Form 7
// include_once( get_stylesheet_directory() . '/plugins/contact-form/wp-contact-form-7.php' );


 ?>
