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
</article>
