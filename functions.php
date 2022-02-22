<?php

// Enqueue scripts and styles

function b2w_assets() {
    // Enqueue CSS files

    // Google fonts
    wp_enqueue_style( 'google-font', '//fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap', array(), '1.0', 'all');
    // Bootstrap file
    wp_enqueue_style('bootstrap', get_theme_file_uri('assets/css/bootstrap.min.css'), array(), 'v5.1.3', 'all');
    // Flaticons
    wp_enqueue_style('flaticon', get_theme_file_uri('assets/font/flaticon.css'), array(), false, 'all');


    // Main CSS file - depends on the bootstrap file above
    wp_enqueue_style('my-style', get_stylesheet_uri(), array('bootstrap'), '1.0', 'all');

    // Enqueue JS files
    wp_enqueue_script('bootstrap', get_theme_file_uri('assets/js/bootstrap.min.js'), array(), 'v5.1.3', true);

    // Main script file
    wp_enqueue_script('main-script', get_theme_file_uri('assets/js/main-script.js'), array('jquery', 'jquery-ui-core', 'jquery-ui-selectmenu'), 'v1.0', true);

if( is_singular() && comments_open() && get_option( 'thread-comments')) {

    wp_enqueue_script( 'comment-reply' );
    }

}

add_action( 'wp_enqueue_scripts', 'b2w_assets');

?>