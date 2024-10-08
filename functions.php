<?php
// Enqueue Styles and Scripts
function travel_theme_enqueue_styles() {
    wp_enqueue_style( 'main-style', get_stylesheet_uri() );
}

add_action( 'wp_enqueue_scripts', 'travel_theme_enqueue_styles' );

function greyhawk_enqueue_styles() {
    wp_enqueue_style( 'custom-style', get_template_directory_uri() . '/css/main.css' );
}
add_action( 'wp_enqueue_scripts', 'greyhawk_enqueue_styles' );



// Register Custom Post Type for Tours
function create_tour_post_type() {
    $args = array(
        'labels' => array(
            'name' => __( 'Tours' ),
            'singular_name' => __( 'Tour' )
        ),
        'public' => true,
        'has_archive' => true,
        'supports' => array( 'title', 'editor', 'excerpt', 'thumbnail' ),
        'rewrite' => array( 'slug' => 'tours' ),
    );
    register_post_type( 'tour', $args );
}

add_action( 'init', 'create_tour_post_type' );

// Register Menu
function register_my_menu() {
    register_nav_menu('primary', __( 'Primary Menu' ));
}
add_action( 'init', 'register_my_menu' );

// Register Footer Widgets
function travel_theme_widgets_init() {
    register_sidebar( array(
        'name'          => 'Footer Widget',
        'id'            => 'footer-widget',
        'before_widget' => '<div>',
        'after_widget'  => '</div>',
        'before_title'  => '<h4>',
        'after_title'   => '</h4>',
    ));
}
add_action( 'widgets_init', 'travel_theme_widgets_init' );

function enqueue_google_maps_script() {
    wp_enqueue_script( 'google-maps', 'https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY', array(), null, true );
}
add_action( 'wp_enqueue_scripts', 'enqueue_google_maps_script' );


// Enable support for Post Thumbnails
add_theme_support( 'post-thumbnails' );

// Enable support for custom Logo
add_theme_support( 'custom-logo' );

?>
