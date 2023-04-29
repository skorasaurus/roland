<?php


add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );
function my_theme_enqueue_styles() {
    wp_enqueue_style( 'roland-css', get_stylesheet_directory_uri() . '/style.css', filemtime( get_stylesheet_directory_uri() . '/style.css', );
}

// disable emojis, remove comments
require get_stylesheet_directory() . '/inc/remove-comments.php';
require get_stylesheet_directory() . '/inc/disable-emoji.php';

function my_theme_setup() {
    // Lots of other code …

    // Enqueue editor styles.
    add_editor_style( 'style-editor.css' );
    add_theme_support( 'responsive-embeds' );
}
add_action( 'after_setup_theme', 'my_theme_setup' );

// add_theme_support( 'editor-styles' );

register_block_style(
    'core/button',
         array(
        'name'  => 'the-jhff-style',
        'label' => __( 'The JHFF Style', 'textdomain' ),
        'inline_style' => '.is-style-the-jhff-style {  
           border-radius: 6px;
           background-color: var(--wp--preset--color--secondary-white);
            }',
        )
    
    );

?>