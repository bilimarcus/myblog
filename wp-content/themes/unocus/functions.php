<?php 
/**
 * Enqueue scripts and styles.
 *
 * @link https://www.unocus.com
 * 
 */


if ( !function_exists('unocus_setup')) :

    if ( !function_exists('optionsframework_init')) {
        define( 'OPTIONS_FRAMEWORK_DIRECTORY', get_template_directory_uri() . '/inc/' );
        require_once dirname( __FILE__ ) . '/inc/options-framework.php';
    }

    function unocus_scripts() {
    	wp_enqueue_style( 'unocus-style', get_stylesheet_uri() );
    }
    add_action( 'wp_enqueue_scripts', 'unocus_scripts' );

    function unocus_setup() {
        /*
         * Make theme available for translation.
         * Translations can be filed in the /languages/ directory.
         * If you're building a theme based on Akina, use a find and replace
         * to change 'akina' to the name of your theme in all the template files.
         */
        load_theme_textdomain( 'unocus', get_template_directory() . '/languages' );

        /*
         * Enable support for Post Thumbnails on posts and pages.
         */
        add_theme_support( 'post-thumbnails' );
        set_post_thumbnail_size( 150, 150, true );
    }

endif;
add_action( 'after_setup_theme', 'unocus_setup' );

 ?>