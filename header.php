<?php
/**
 * The default header template
 */
require get_template_directory() . '/meta.php';
?>
<div class="page">
<header class="masthead">
<a href="<?php bloginfo('url') ?>" title="corenominal" class="site-logo">
<svg id="corenominal" class="corenominal" width="100px" height="100px" viewBox="0 0 100 101" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xml:space="preserve" style="fill-rule:evenodd;clip-rule:evenodd;stroke-linecap:square;stroke-linejoin:round;stroke-miterlimit:1.5;"><g id="logo.-100x100"><circle id="background" cx="50" cy="50.5" r="50" style="fill:#212121;"/><path id="arm.-right" d="M14.223,35.339l12.64,32.64" style="fill:none;stroke:#fff;stroke-width:5.76px;"/><path id="arm.-left" d="M62.897,85.589l-32.357,-13.35" style="fill:none;stroke:#fff;stroke-width:5.76px;"/><path id="body" d="M37.294,62.639l-20.991,20.87" style="fill:none;stroke:#fff;stroke-width:5.76px;"/><circle id="head" cx="56.14" cy="42.379" r="24" style="fill:#232729;stroke:#fff;stroke-width:5.76px;"/></g></svg>
</a>
<?php if( is_home() || is_front_page() ): ?>
<h1 class="site-title"><a href="<?php bloginfo('url') ?>" title="<?php bloginfo('description') ?>"><?php bloginfo('name') ?></a></h1>
<?php else: ?>
<h2 class="site-title"><a href="<?php bloginfo('url') ?>" title="<?php bloginfo('description') ?>"><?php bloginfo('name') ?></a></h2>
<?php endif; ?>

<form class="search-form search-result" action="<?php echo site_url(); ?>" method="get">
<input id="s" class="search-input" autocomplete="off" type="text" name="s" placeholder="SEARCH ..." value="<?php the_search_query(); ?>">
</form>

<p class="site-description"><span>Full stack web developer, interested in all the things, but especially the web, code, design, Linux, OS X, PHP, WordPress, JavaScript &amp; robots.</span></p>

<button id="hamburger" class="hamburger" type="button">

<svg width="12px" height="10px" viewBox="273 -101 21 17" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
    <desc>Burger Menu Icon</desc>
    <defs></defs>
    <path d="M274.115,-85.027 C274.272,-84.87 274.452,-84.78 274.676,-84.78 L292.296,-84.78 C292.521,-84.78 292.7,-84.87 292.88,-85.027 C293.037,-85.184 293.104,-85.364 293.104,-85.588 L293.104,-87.182 C293.104,-87.406 293.037,-87.586 292.88,-87.743 C292.7,-87.9 292.521,-87.99 292.296,-87.99 L274.676,-87.99 C274.452,-87.99 274.272,-87.9 274.115,-87.743 C273.958,-87.586 273.868,-87.406 273.868,-87.182 L273.868,-85.588 C273.868,-85.364 273.958,-85.184 274.115,-85.027 Z M274.115,-91.446 C274.272,-91.289 274.452,-91.2 274.676,-91.2 L292.296,-91.2 C292.521,-91.2 292.7,-91.289 292.88,-91.446 C293.037,-91.604 293.104,-91.783 293.104,-92.008 L293.104,-93.601 C293.104,-93.826 293.037,-94.005 292.88,-94.162 C292.7,-94.319 292.521,-94.409 292.296,-94.409 L274.676,-94.409 C274.452,-94.409 274.272,-94.319 274.115,-94.162 C273.958,-94.005 273.868,-93.826 273.868,-93.601 L273.868,-92.008 C273.868,-91.783 273.958,-91.604 274.115,-91.446 Z M274.115,-97.843 C274.272,-97.686 274.452,-97.596 274.676,-97.596 L292.296,-97.596 C292.521,-97.596 292.7,-97.686 292.88,-97.843 C293.037,-98.001 293.104,-98.18 293.104,-98.405 L293.104,-99.998 C293.104,-100.223 293.037,-100.402 292.88,-100.559 C292.7,-100.716 292.521,-100.806 292.296,-100.806 L274.676,-100.806 C274.452,-100.806 274.272,-100.716 274.115,-100.559 C273.958,-100.402 273.868,-100.223 273.868,-99.998 L273.868,-98.405 C273.868,-98.18 273.958,-98.001 274.115,-97.843 Z" id="burger" stroke="none" fill="#212121" fill-rule="evenodd"></path>
</svg>
  Menu
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
