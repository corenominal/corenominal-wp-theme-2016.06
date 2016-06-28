<?php
/**
 * Miscellaneous theme functions
 */
function theme_slug_filter_wp_title( $title )
{
    if ( is_404() )
    {
        $title = 'Lost in Cyberspace - 404 | ';
    }
    return $title;
}
add_filter( 'wp_title', 'theme_slug_filter_wp_title' );
