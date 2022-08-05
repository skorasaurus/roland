<?php


add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );
function my_theme_enqueue_styles() {
    wp_enqueue_style( 'roland', get_template_directory_uri() . '/style.css' );
}

// disable emojis, remove comments
// UGH, annoying wordpress child error
require get_stylesheet_directory() . '/inc/remove-comments.php';
require get_stylesheet_directory() . '/inc/disable-emoji.php';

function my_theme_setup() {
    // Lots of other code …

    // Enqueue editor styles.
    add_editor_style( 'style-editor.css' );

    add_theme_support( 'wp-block-styles' );
}
add_action( 'after_setup_theme', 'my_theme_setup' );

// add support for gutenberg 
// https://deliciousbrains.com/preparing-wordpress-themes-gutenberg/

// add_theme_support( 'editor-styles' );

// register patterns

register_block_pattern(
    'Default JHFF Button',
    array(
        'title'   => __( 'Default button', 'my-plugin' ),
        'content' => "<!-- wp:buttons -->
<div class=\"wp-block-buttons\"><!-- wp:button {\"style\":{\"color\":{\"background\":\"#1634d2\"}},\"textColor\":\"white\"} -->
<div class=\"wp-block-button\"><a class=\"wp-block-button__link has-white-color has-text-color has-background\" style=\"background-color:#1634d2\">Placeholder Text</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->

<!-- wp:paragraph -->
<p></p>
<!-- /wp:paragraph -->",
    )
);

?>