<?php

define('THEME_URL', get_template_directory_uri());

function register_my_menu() {
  register_nav_menu('main_menu',__( 'Main Menu' ));
}

add_action( 'init', 'register_my_menu' );

function load_styles() {

  $style_path = plugin_dir_path( __FILE__ ) . 'css/main.min.css';
  $style_version = date("Ymd-Gis", filemtime( $style_path ));

  // wp_enqueue_style('normalize', 'https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css', array(), null);
  // wp_enqueue_style('lato', 'https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap', array(), null);
  wp_enqueue_style('nunito', 'https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,200;0,300;0,400;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,600;1,700;1,800;1,900&display=swap', array(), null);
  wp_enqueue_style('main', get_template_directory_uri().'/css/main.min.css', array(), $style_version);

}

add_action( 'wp_enqueue_scripts', 'load_styles');

function load_scripts() {

  $script_path = plugin_dir_path( __FILE__ ) . 'js/main.min.js';
  $script_version = date("Ymd-Gis", filemtime( $script_path ));
  
	wp_deregister_script('jquery');
  wp_enqueue_script('jquery', 'https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js', array(), null, true);
  wp_enqueue_script('popper', 'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js', array(), null, true);
  wp_enqueue_script('gsap', 'https://cdnjs.cloudflare.com/ajax/libs/gsap/3.2.6/gsap.min.js', array(), null, true);
  wp_enqueue_script('barba', 'https://unpkg.com/@barba/core', array(), null, true);
  wp_enqueue_script('lazysizes', 'https://cdnjs.cloudflare.com/ajax/libs/lazysizes/5.2.0/lazysizes.min.js', array(), null, true);
  wp_enqueue_script('lightgallery', 'https://cdnjs.cloudflare.com/ajax/libs/lightgallery/1.7.0/js/lightgallery.min.js', array('jquery'), null, true);
  wp_enqueue_script('main', get_template_directory_uri().'/js/main.min.js', array('jquery', 'gsap', 'barba', 'lazysizes', 'lightgallery'), $script_version, true);

}

add_action( 'wp_enqueue_scripts', 'load_scripts');