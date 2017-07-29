<?php

/*************************************************************************************/
// Resgister and include Script / Stylesheet to Header and Footer
/*************************************************************************************/

function register_load_scripts(){
  // Register Scripts
  wp_register_script( 'scripts', get_template_directory_uri().'/includes/js/scripts/main.min.js','','', true );

  wp_enqueue_script( 'scripts' );
}
add_action( 'wp_enqueue_scripts', 'register_load_scripts'  );

function register_load_stylesheets(){
  // Register Stylesheet
  wp_register_style( 'fabric', get_template_directory_uri().'/includes/css/main.min.css', '', '', 'screen', false );

  wp_enqueue_style( 'fabric' );
}
add_action( 'wp_enqueue_scripts', 'register_load_stylesheets'  );

/***************************************/
// Register Menus
/***************************************/

// Main Menu
function register_main_nav() {
  register_nav_menu('main-nav',__( 'Main Nav' ));
}

add_action( 'init', 'register_main_nav' );

// Mobile Menu
function register_mobile_nav() {
  register_nav_menu('mobile-nav',__( 'Mobile Nav' ));
}

add_action( 'init', 'register_mobile_nav' );

/**********************************************/
//	Add Featured Image
/**********************************************/

add_theme_support( 'post-thumbnails' );

/***************************************/
//	Include metaboxes / custom post types
/***************************************/

require_once( get_template_directory().'/framework/metaboxes.php' );

?>
