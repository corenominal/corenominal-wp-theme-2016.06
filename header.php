<?php
/**
 * The default header template
 */
require get_template_directory() . '/meta.php';
?>
<div class="page">
<header class="masthead">
<a href="<?php bloginfo('url') ?>" title="corenominal" class="site-logo">
<svg id="corenominal" class="corenominal" xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#" xmlns="http://www.w3.org/2000/svg" height="100.77" width="103.53" version="1.1" xmlns:cc="http://creativecommons.org/ns#" xmlns:dc="http://purl.org/dc/elements/1.1/" viewBox="0 0 103.53185 100.76538">
 <metadata id="metadata3505">
  <rdf:RDF>
   <cc:Work rdf:about="">
    <dc:format>image/svg+xml</dc:format>
    <dc:type rdf:resource="http://purl.org/dc/dcmitype/StillImage"/>
    <dc:title/>
   </cc:Work>
  </rdf:RDF>
 </metadata>
 <g id="layer1" transform="translate(-293.95 -453.41)">
  <g id="g4300-3" transform="matrix(1.1888 0 0 1.1888 52.03 -102.5)" fill="#212121">
   <path id="path4138-5-2" d="m237.02 485.38c-18.489 0-33.512 15.023-33.512 33.512s15.023 33.513 33.512 33.513 33.512-15.024 33.512-33.513-15.023-33.512-33.512-33.512zm0 3.3255c16.691 0 30.187 13.495 30.187 30.187 0 16.691-13.495 30.187-30.187 30.187-16.691 0-30.187-13.496-30.187-30.187s13.495-30.187 30.187-30.187z"/>
   <path id="path4172-8-5" d="m281.25 467.63c-5.1531 0-9.3516 4.1986-9.3516 9.3516 0 5.1531 4.1986 9.3523 9.3516 9.3523 5.1531 0 9.3516-4.1992 9.3516-9.3523s-4.1986-9.3516-9.3516-9.3516zm0 1.9953c4.0747 0 7.3563 3.2816 7.3563 7.3563s-3.2816 7.357-7.3563 7.357-7.3563-3.2823-7.3563-7.357 3.2816-7.3563 7.3563-7.3563z"/>
   <g fill-rule="evenodd">
    <path id="path4174-2-9" d="m274.27 482.56-8.9788 7.9812 1.325 1.4913 8.9788-7.9812-1.325-1.4913z"/>
    <path id="path4174-5-9-4" d="m266.35 475.23-1.7865 0.88864 5.3483 10.757 1.7865-0.888-5.3484-10.757z"/>
    <path id="path4174-5-6-0-3" d="m271.56 486.1-0.8593 1.8011 10.841 5.1759 0.8593-1.8011-10.841-5.1759z"/>
    <path id="path4174-5-6-4-6-4" d="m265.74 490.23-3.2039 11.578 1.9226 0.53227 3.2045-11.578-1.9233-0.53237z"/>
    <path id="path4174-5-6-4-3-8-0" d="m266.59 489.72-11.643 2.9598 0.49168 1.9336 11.642-2.9598-0.49102-1.9336z"/>
   </g>
  </g>
 </g>
</svg>
</a>
<?php if( is_home() || is_front_page() ): ?>
<h1 class="site-title"><a href="<?php bloginfo('url') ?>" title="<?php bloginfo('description') ?>"><?php bloginfo('name') ?></a></h1>
<?php else: ?>
<h2 class="site-title"><a href="<?php bloginfo('url') ?>" title="<?php bloginfo('description') ?>"><?php bloginfo('name') ?></a></h2>
<?php endif; ?>

<form class="search-form search-result" action="<?php echo site_url(); ?>" method="get">
<input id="s" class="search-input" autocomplete="off" type="text" name="s" placeholder="SEARCH ..." value="<?php the_search_query(); ?>">
</form>

<p class="site-description"><span>Full stack web developer, interested in all the things, but especially the web, code, design, Linux, PHP, WordPress, JavaScript &amp; robots.</span></p>

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
