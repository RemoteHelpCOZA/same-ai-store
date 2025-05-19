<?php
// Theme setup
function es_theme_setup() {
    add_theme_support( 'title-tag' );
    add_theme_support( 'post-thumbnails' );
    register_nav_menu( 'header-menu', 'Header Menu' );
}
add_action( 'after_setup_theme', 'es_theme_setup' );

// Enqueue styles and scripts
function es_enqueue_assets() {
    wp_enqueue_style( 'google-font-poppins', 'https://ext.same-assets.com/493246017/2925447614.woff2', array(), null );
    wp_enqueue_style( 'es-style', get_stylesheet_uri() );
    wp_enqueue_script( 'es-script', get_template_directory_uri() . '/assets/js/main.js', array('jquery'), null, true );
}
add_action( 'wp_enqueue_scripts', 'es_enqueue_assets' );

// Register footer widget areas and footer menu
function es_widgets_init() {
    register_sidebar(array(
        'name' => 'Footer Column 1',
        'id' => 'footer-1',
        'before_widget' => '<div class="footer-widget">',
        'after_widget' => '</div>',
        'before_title' => '<h4>',
        'after_title' => '</h4>',
    ));
    register_sidebar(array(
        'name' => 'Footer Column 2',
        'id' => 'footer-2',
        'before_widget' => '<div class="footer-widget">',
        'after_widget' => '</div>',
        'before_title' => '<h4>',
        'after_title' => '</h4>',
    ));
    register_sidebar(array(
        'name' => 'Footer Column 3',
        'id' => 'footer-3',
        'before_widget' => '<div class="footer-widget">',
        'after_widget' => '</div>',
        'before_title' => '<h4>',
        'after_title' => '</h4>',
    ));
    register_nav_menu( 'footer-menu', 'Footer Menu' );
}
add_action( 'widgets_init', 'es_widgets_init' );
?>
