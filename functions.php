<?php
/*
 * Resgister and include Script
 * Stylesheet to Header and Footer
 *
 */

// Register Scripts
function register_load_scripts(){
  wp_register_script( 'scripts', get_template_directory_uri().'/inc/js/dist/main.min.js','','', true );
  wp_enqueue_script( 'scripts' );
}
add_action( 'wp_enqueue_scripts', 'register_load_scripts'  );

// Register Stylesheet
function register_load_stylesheets(){
  wp_register_style( 'fabric', get_template_directory_uri().'/inc/css/dist/main.min.css', '', '', 'screen', false );
  wp_enqueue_style( 'fabric' );
}
add_action( 'wp_enqueue_scripts', 'register_load_stylesheets'  );

/*
 * Register Menu Navigation
 *
 */

function register_main_nav() {
  register_nav_menu('main-nav',__( 'Main Nav' ));
}
add_action( 'init', 'register_main_nav' );

function register_mobile_nav() {
  register_nav_menu('mobile-nav',__( 'Mobile Nav' ));
}
add_action( 'init', 'register_mobile_nav' );

/*
 * Register Sidebars
 *
 */

function widgets_init() {
  register_sidebar([
    'name'          => __('Primary', 'bare-bones-wp'),
    'id'            => 'sidebar-primary',
    'before_widget' => '<section class="widget %1$s %2$s">',
    'after_widget'  => '</section>',
    'before_title'  => '<h3>',
    'after_title'   => '</h3>'
  ]);
}
add_action('widgets_init', __NAMESPACE__ . '\\widgets_init');

/*
 * Register Featured Image Support
 *
 */

add_theme_support( 'post-thumbnails' );

/*
 * Include metaboxes
 * Custom Post Types
 *
 */

require_once( get_template_directory().'/lib/metaboxes.php' );
