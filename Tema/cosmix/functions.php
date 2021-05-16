<?php
/* Theme setup */
if ( ! function_exists( 'cosmix_setup' ) ) {

    function cosmix_setup() {

        // Enable title in header
        add_theme_support( "title-tag" );

        // Enable automatic feed links
        add_theme_support( 'automatic-feed-links' );

        // Enable featured image
        add_theme_support( 'post-thumbnails' );

        // Thumbnail sizes
        add_image_size( 'cosmix_single', 800, 450, false );
        add_image_size( 'cosmix_big', 1400, 928, true ); 	//(cropped)
        		
        // Custom menu areas
		register_nav_menus( array(
			'header' => esc_html__( 'Header', 'cosmix' ),
		    ) 
        );

    }
}
add_action('after_setup_theme', 'cosmix_setup');

/* Add import  */
if ( ! function_exists( 'cosmix_styles_scripts' ) ) {

    function cosmix_styles_scripts() {

        // Import file js
        wp_enqueue_script('cosmix-js', get_template_directory_uri() . '/script/script.js', array(), '1.0.0', true);

        // Import font
        wp_enqueue_style('cosmix-poppins', 'https://fonts.googleapis.com/css2?family=Poppins:wght@500&display=swap');

        // Import file css
        wp_enqueue_style('cosmix-style', get_template_directory_uri() . '/style.css', array(), '1.0.0', 'all');

    }
}
add_action('wp_enqueue_scripts', 'cosmix_styles_scripts');

?>
