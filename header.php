<?php
/**
 * The default header template
 */
require get_template_directory() . '/meta.php';
?>
<div class="page">
<header class="masthead">
<?php if( is_home() || is_front_page() ): ?>
<h1 class="site-title"><a href="<?php bloginfo('url') ?>" title="<?php bloginfo('description') ?>"><?php bloginfo('name') ?></a></h1>
<?php else: ?>
<h2 class="site-title"><a href="<?php bloginfo('url') ?>" title="<?php bloginfo('description') ?>"><?php bloginfo('name') ?></a></h2>
<?php endif; ?>
<?php //TODO: replace the below with a text widget ?>
<p class="site-description"><strong><?php bloginfo('description'); ?></strong></p>

<button id="hamburger" class="hamburger hamburger--spin" type="button">
  <span class="hamburger-box">
    <span class="hamburger-inner"></span>
  </span>
</button>

<nav id="site-menu" class="site-menu">
<?php
/**
 * The header menu
 */
wp_nav_menu( array( 'theme_location' => 'header-menu' ) );
?>
</nav>
</header>
