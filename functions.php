<?php
/**
 * The magic WordPress functions.php file. Whoa, functions!
 * ========================================================
 */

/**
 * Theme support.
 */
require get_template_directory() . '/functions/theme_support.php';

/**
 * Custom RSS feeds
 */
require get_template_directory() . '/functions/feeds.php';

/**
 * Enqueue scripts
 */
require get_template_directory() . '/functions/enqueue_scripts.php';

/**
 * Menus
 */
require get_template_directory() . '/functions/menus.php';

/**
 * Taxonomies
 */
require get_template_directory() . '/functions/taxonomies.php';

/**
 * Metaboxes
 */
require get_template_directory() . '/functions/metaboxes.php';

/**
 * Miscellaneous
 */
require get_template_directory() . '/functions/misc.php';
