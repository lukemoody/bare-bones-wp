<?php
/*
 * BareBones Includes
 * The $bareBones_includes array determines the code library included into the site.
 *
 */

$bareBones_includes = [
  'lib/root-wrapper.php',
  'lib/metaboxes.php'
];

foreach ($bareBones_includes as $file) {
  if (!$filepath = locate_template($file)) {
    trigger_error(sprintf(__('Error locating %s for inclusion', 'bare-bones-wp'), $file), E_USER_ERROR);
  }

  require_once $filepath;
}
unset($file, $filepath);

// require_once( get_template_directory().'/lib/root-wrapper.php' );
// require_once( get_template_directory().'/lib/metaboxes.php' );

/*
 * Resgister and include Script
 * Stylesheet to Header and Footer
 *
 */

// Register Scripts
function register_load_scripts(){
  wp_register_script( 'scripts', get_template_directory_uri().'/dist/main.min.js','','', true );
  wp_enqueue_script( 'scripts' );

}

add_action( 'wp_enqueue_scripts', 'register_load_scripts'  );

// Register Stylesheet
function register_load_stylesheets(){
  wp_register_style( 'styles', get_template_directory_uri().'/dist/main.min.css', '', '', 'screen', false );
  wp_enqueue_style( 'styles' );

}

add_action( 'wp_enqueue_scripts', 'register_load_stylesheets'  );

/*
 * Register Navigation
 * Main and Mobile menus registered
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
    'name'          => __('Primary Sidebar', 'bare-bones-wp'),
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
