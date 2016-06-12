<?php
/**
 * The default header template
 */
require get_template_directory() . '/meta.php';
?>
<header class="masthead">
<div id="logo" class="container">
<?php if( is_home() || is_front_page() ): ?>
<h1 class="site-title"><a href="<?php bloginfo('url') ?>" title="<?php bloginfo('description') ?>"><?php bloginfo('name') ?></a></h1>
<?php else: ?>
<h2 class="site-title"><a href="<?php bloginfo('url') ?>" title="<?php bloginfo('description') ?>"><?php bloginfo('name') ?></a></h2>
<?php endif; ?>
<p class="site-description"><strong><?php bloginfo('description'); ?></strong></p>
<div id="nav-icons" class="nav-icons">
<a class="search-icon" href="<?php echo site_url( 'search' ); ?>"><i class="fa fa-search"></i></a>
</div>
<nav id="site-menu" class="site-menu">
<?php
/**
 * The header menu
 */
wp_nav_menu( array( 'theme_location' => 'header-menu' ) );
?>

</nav>
</div>
</header>
