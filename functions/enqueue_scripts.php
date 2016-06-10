<?php
/**
 * Enqueue CSS and JS
 */
function corenominal_enqueue_scripts()
{

    /**
     * CSS
     */
     wp_enqueue_style( 'corenominal_reset', get_template_directory_uri() . '/css/vendor/reset.css', false );
     wp_enqueue_style( 'corenominal_typography', get_template_directory_uri() . '/css/typography.css', false );
	 wp_enqueue_style( 'corenominal_layout', get_template_directory_uri() . '/css/layout.css', false );
	 wp_enqueue_style( 'corenominal_shame', get_template_directory_uri() . '/css/shame.css', false );

    /**
     * JavaScript
     */
    wp_enqueue_script( 'modernizr_js', get_template_directory_uri() . '/js/vendor/modernizr-2.8.3.min.js', array(), false, false );
    if ( !is_admin()) add_action("wp_enqueue_scripts", "my_jquery_enqueue", 11 );

}
add_action( 'wp_enqueue_scripts', 'corenominal_enqueue_scripts' );

function my_jquery_enqueue()
{
    wp_deregister_script( 'jquery' );
    wp_register_script( 'jquery', get_template_directory_uri() . '/js/vendor/jquery-1.11.3.min.js', false, null, true );
    wp_enqueue_script( 'jquery' );
}
