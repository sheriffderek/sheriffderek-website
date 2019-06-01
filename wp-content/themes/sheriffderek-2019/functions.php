<?php



add_filter('show_admin_bar', '__return_false');

function add_style_sheet() {
  wp_enqueue_style( 'style-name', get_stylesheet_uri() );
}
add_action( 'wp_enqueue_scripts', 'add_style_sheet' );

// function wpb_adding_scripts() {
// wp_register_script('my_amazing_script', get_template_directory_uri() . '/js/amazing_script.js', array('jquery'),'1.1', true);
// wp_enqueue_script('my_amazing_script');
// }
  
// add_action( 'wp_enqueue_scripts', 'wpb_adding_scripts' ); add_action( 'wp_enqueue_scripts', 'wpb_adding_scripts' );  



function register_site_menu() {
  register_nav_menu('Site menu',__( 'site-menu' ));
}
add_action( 'init', 'register_site_menu' );



?>