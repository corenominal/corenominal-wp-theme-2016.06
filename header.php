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
  <g id="g4300-3" transform="matrix(1.1888 0 0 1.1888 52.03 -102.5)" fill="#fff">
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

<p class="site-description"><span><?php bloginfo('description'); ?></span></p>

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
