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

// Add Customizer setting and control for homepage categories
add_action( 'customize_register', function( $wp_customize ) {
    // Add section
    $wp_customize->add_section( 'es_homepage_categories', array(
        'title'    => 'Homepage Categories',
        'priority' => 30,
    ) );

    // Setting for category IDs (comma-separated)
    $wp_customize->add_setting( 'es_homepage_cat_ids', array(
        'default'           => '',
        'sanitize_callback' => function( $value ) {
            return sanitize_text_field( $value );
        }
    ) );

    // Control
    $wp_customize->add_control( 'es_homepage_cat_ids_control', array(
        'label'       => 'Category IDs (comma-separated)',
        'section'     => 'es_homepage_categories',
        'settings'    => 'es_homepage_cat_ids',
        'type'        => 'text',
        'description' => 'Enter product category IDs in the order you want them to appear.',
    ) );
} );
?>
