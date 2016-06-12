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
</section>
<?php
get_sidebar();
get_footer();
