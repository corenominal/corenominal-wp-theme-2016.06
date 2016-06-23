<?php
get_header();
?>
<section class="content">
<?php
// The loop
while ( have_posts() ) :
the_post();
$categories = get_the_category();
$category = $categories[0]->slug;
require get_template_directory() . '/article_' . $category . '.php';
endwhile;
?>
<?php if( get_next_posts_link() || get_previous_posts_link() ): ?>
<div id="pager" class="pager">
<div id="next_posts_link" class="next_posts_link">
<svg id="chevron-left" class="icon chevron-left" xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#" xmlns="http://www.w3.org/2000/svg" height="10.155mm" width="6.5264mm" version="1.1" xmlns:cc="http://creativecommons.org/ns#" xmlns:dc="http://purl.org/dc/elements/1.1/" viewBox="0 0 23.125001 35.98214">
 <metadata id="metadata4760">
  <rdf:RDF>
   <cc:Work rdf:about="">
    <dc:format>image/svg+xml</dc:format>
    <dc:type rdf:resource="http://purl.org/dc/dcmitype/StillImage"/>
    <dc:title/>
   </cc:Work>
  </rdf:RDF>
 </metadata>
 <g id="layer1" transform="translate(-14.152 -365.8)">
  <g id="text4714" fill="#fff" transform="translate(-98.143 -78.429)">
   <path id="path4723" fill="#fff" d="m135 450.37-11.853 11.853 11.853 11.853q0.42411 0.4241 0.42411 1.0045 0 0.58036-0.42411 1.0045l-3.7054 3.7054q-0.4241 0.42411-1.0045 0.42411-0.58036 0-1.0045-0.42411l-16.562-16.562q-0.4241-0.4241-0.4241-1.0045 0-0.58036 0.4241-1.0045l16.562-16.562q0.42411-0.4241 1.0045-0.4241 0.58036 0 1.0045 0.4241l3.7054 3.7054q0.42411 0.42411 0.42411 1.0045 0 0.58035-0.42411 1.0045z"/>
  </g>
 </g>
</svg> <?php next_posts_link( 'Older Posts' ) ?>
</div>
<div id="previous_posts_link" class="previous_posts_link">
<?php previous_posts_link( 'Newer Posts' ) ?> <svg id="chevron-right" class="icon chevron-right" xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#" xmlns="http://www.w3.org/2000/svg" height="10.155mm" width="6.5264mm" version="1.1" xmlns:cc="http://creativecommons.org/ns#" xmlns:dc="http://purl.org/dc/elements/1.1/" viewBox="0 0 23.125001 35.98214">
 <metadata id="metadata4760">
  <rdf:RDF>
   <cc:Work rdf:about="">
    <dc:format>image/svg+xml</dc:format>
    <dc:type rdf:resource="http://purl.org/dc/dcmitype/StillImage"/>
    <dc:title/>
   </cc:Work>
  </rdf:RDF>
 </metadata>
 <g id="layer1" transform="translate(-14.152 -365.8)">
  <g id="text4714" fill="#fff" transform="matrix(-1 0 0 1 149.57 -78.429)">
   <path id="path4723" fill="#fff" d="m135 450.37-11.853 11.853 11.853 11.853q0.42411 0.4241 0.42411 1.0045 0 0.58036-0.42411 1.0045l-3.7054 3.7054q-0.4241 0.42411-1.0045 0.42411-0.58036 0-1.0045-0.42411l-16.562-16.562q-0.4241-0.4241-0.4241-1.0045 0-0.58036 0.4241-1.0045l16.562-16.562q0.42411-0.4241 1.0045-0.4241 0.58036 0 1.0045 0.4241l3.7054 3.7054q0.42411 0.42411 0.42411 1.0045 0 0.58035-0.42411 1.0045z"/>
  </g>
 </g>
</svg>
</div>
</div>
<?php endif; ?>
</section>
<?php
get_sidebar();
get_footer();
