<?php


add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );
function my_theme_enqueue_styles() {
    wp_enqueue_style( 'quark', get_template_directory_uri() . '/style.css' );
}

function my_theme_setup() {
    // Lots of other code …

    // Enqueue editor styles.
    add_editor_style( 'style-editor.css' );
}
add_action( 'after_setup_theme', 'my_theme_setup' );

// add support for gutenberg 
// https://deliciousbrains.com/preparing-wordpress-themes-gutenberg/



?>