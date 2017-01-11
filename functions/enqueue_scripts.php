<?php
/**
 * Enqueue CSS and JS
 */
function corenominal_enqueue_scripts()
{

    if(! is_404() )
    {
        /**
         * CSS
         */
        wp_enqueue_style( 'corenominal_reset', get_template_directory_uri() . '/css/vendor/reset.css', false );
        wp_enqueue_style( 'roboto_font', get_template_directory_uri() . '/fonts/Roboto/css/fonts.css', false );
        wp_enqueue_style( 'corenominal_typography', get_template_directory_uri() . '/css/typography.css', false );
        wp_enqueue_style( 'corenominal_style', get_template_directory_uri() . '/css/style.css', false );
    	wp_enqueue_style( 'corenominal_layout', get_template_directory_uri() . '/css/layout.css', false );
    	wp_enqueue_style( 'corenominal_shame', get_template_directory_uri() . '/css/shame.css', false );

        /**
         * Conditional CSS
         */
        if( is_page( 'projects' ) )
        {
            wp_enqueue_style( 'corenominal_page_projects', get_template_directory_uri() . '/css/page-projects.css', false );
        }

         if( is_page_template( 'page_project.php' ) )
        {
            wp_enqueue_style( 'corenominal_page_projects', get_template_directory_uri() . '/css/page-project.css', false );
        }

        if( is_page_template( 'page_pwgenweb.php' ) )
        {
            wp_enqueue_style( 'pwgen_web_css', get_template_directory_uri() . '/css/page_pwgenweb.css', false );
        }

        /**
         * JavaScript
         */
        wp_enqueue_script( 'modernizr_js', get_template_directory_uri() . '/js/vendor/modernizr-2.8.3.min.js', array(), false, false );
        wp_deregister_script( 'jquery' );
        wp_register_script( 'jquery', includes_url( '/js/jquery/jquery.js' ), false, NULL, true );
        wp_enqueue_script( 'jquery' );
        wp_enqueue_script( 'fitvids_js', get_template_directory_uri() . '/js/vendor/jquery.fitvids.js', array(), false, true );
        wp_enqueue_script( 'main_js', get_template_directory_uri() . '/js/main.js', array(), false, true );

        /**
         * Conditional JS
         */
        if( is_page_template( 'page_pwgenweb.php' ) )
        {
            wp_enqueue_script( 'clipboard_js', get_template_directory_uri() . '/js/vendor/clipboard.min.js', array(), false, true );
            wp_enqueue_script( 'js_cookie_js', get_template_directory_uri() . '/js/vendor/js.cookie.js', array(), false, true );
            wp_enqueue_script( 'page_pwgenweb_js', get_template_directory_uri() . '/js/page_pwgenweb.js', array(), false, true );
        }
    }
    else
    {
        /**
         * 404 CSS
         */
        wp_enqueue_style( 'corenominal_reset', get_template_directory_uri() . '/css/vendor/reset.css', false );
        wp_enqueue_style( 'share_tech_mono_font', get_template_directory_uri() . '/fonts/Share-Tech-Mono-regular/fonts.css', false );
        wp_enqueue_style( '404_style', get_template_directory_uri() . '/css/404.css', false );

        /**
         * 404 JavaScript
         */
        wp_enqueue_script( 'modernizr_js', get_template_directory_uri() . '/js/vendor/modernizr-2.8.3.min.js', array(), false, false );
        wp_deregister_script( 'jquery' );
        wp_register_script( 'jquery', includes_url( '/js/jquery/jquery.js' ), false, NULL, true );
        wp_enqueue_script( 'jquery' );
        wp_enqueue_script( '404_js', get_template_directory_uri() . '/js/404.js', array(), false, true );
    }
}
add_action( 'wp_enqueue_scripts', 'corenominal_enqueue_scripts' );
