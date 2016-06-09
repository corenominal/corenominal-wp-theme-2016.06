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

}
add_action( 'wp_enqueue_scripts', 'corenominal_enqueue_scripts' );
