<?php



add_filter('show_admin_bar', '__return_false');

function add_site_styles() {
  wp_enqueue_style( 'style-name', get_stylesheet_uri() );
}
add_action( 'wp_enqueue_scripts', 'add_site_styles' );

function add_site_scripts() {

  wp_register_script('vendor_scripts', 'https://unpkg.com/zdog@1/dist/zdog.dist.js', array('jquery'),'1.1', true);
  wp_enqueue_script('vendor_scripts');

  wp_register_script('site_scripts', get_template_directory_uri() . '/scripts.js', array('jquery'),'1.1', true);
  wp_enqueue_script('site_scripts');
}
add_action( 'wp_enqueue_scripts', 'add_site_scripts' );



function register_site_menu() {
  register_nav_menu('Site menu',__( 'site-menu' ));
}
add_action( 'init', 'register_site_menu' );



?>