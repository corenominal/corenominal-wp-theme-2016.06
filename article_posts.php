<article class="h-entry post">
<?php if( is_single() ): ?>
<h1 class="p-name"><?php the_title() ?></h1>
<p class="meta article-date"><a class="u-url" href="<?php the_permalink(); ?>"> <?php the_time('F j, Y') ?>&nbsp;&nbsp;<?php the_time() ?></a></p>
<?php else: ?>
<h2><a class="p-name u-url" href="<?php the_permalink(); ?>"><?php the_title() ?></a></h2>
<p class="meta article-date"><a href="<?php the_permalink(); ?>"><?php the_time('F j, Y') ?>&nbsp;&nbsp;<?php the_time() ?></a></p>
<?php endif; ?>
<div class="e-content">
<?php the_content() ?>
</div>
<footer>
    <p class="meta">
        <svg class="icon tags" id="svg3441" xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20.055445 16.000001" height="4.5156mm" width="5.6601mm" version="1.1" xmlns:cc="http://creativecommons.org/ns#" xmlns:dc="http://purl.org/dc/elements/1.1/" class="tags">
         <metadata id="metadata3446">
          <rdf:RDF>
           <cc:Work rdf:about="">
            <dc:format>image/svg+xml</dc:format>
            <dc:type rdf:resource="http://purl.org/dc/dcmitype/StillImage"/>
            <dc:title/>
           </cc:Work>
          </rdf:RDF>
         </metadata>
         <g id="layer1" transform="translate(458.6 32.781)">
          <g id="text3427" fill="#fff">
           <path id="path3338" style="" d="m-454.27-28.44q0.40131-0.40131 0.40131-0.96104 0-0.55972-0.40131-0.95047-0.39075-0.40131-0.95048-0.40131-0.55972 0-0.96103 0.40131-0.39075 0.39075-0.39075 0.95047t0.39075 0.96104q0.40131 0.39075 0.96103 0.39075 0.55973 0 0.95048-0.39075zm11.67 5.122q0 0.55972-0.39075 0.95047l-5.1854 5.1959q-0.41187 0.39075-0.96103 0.39075-0.55973 0-0.95048-0.39075l-7.551-7.5616q-0.40131-0.39075-0.68645-1.0666-0.27458-0.67589-0.27458-1.2356v-4.3933q0-0.54916 0.40131-0.95047t0.95047-0.40131h4.3933q0.55972 0 1.2356 0.28514 0.6759 0.27458 1.0772 0.67589l7.551 7.5404q0.39075 0.41187 0.39075 0.96104zm4.0554 0q0 0.55972-0.39075 0.95047l-5.1854 5.1959q-0.41187 0.39075-0.96104 0.39075-0.38018 0-0.62308-0.14785t-0.55973-0.47524l4.9636-4.9636q0.39075-0.39075 0.39075-0.95047 0-0.54916-0.39075-0.96104l-7.551-7.5404q-0.40131-0.40131-1.0772-0.67589-0.6759-0.28514-1.2356-0.28514h2.3656q0.55973 0 1.2356 0.28514 0.67589 0.27458 1.0772 0.67589l7.551 7.5404q0.39075 0.41187 0.39075 0.96104z"/>
          </g>
         </g>
        </svg>
        <span class="sr-only">Tags: </span>
        <?php the_tags( '' ) ?>
    </p>
</footer>
</article>
