<?php
// Enqueue Styles and Scripts
function travel_theme_enqueue_styles() {
    wp_enqueue_style( 'main-style', get_stylesheet_uri() );
}

add_action( 'wp_enqueue_scripts', 'travel_theme_enqueue_styles' );

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
?>
