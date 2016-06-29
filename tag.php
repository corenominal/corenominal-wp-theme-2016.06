<?php
get_header();
?>
<section class="content">
    <h1 class="taxonomy-title">Tagged: <?php echo single_tag_title( '', false ) ?></h1>
<?php
// The loop
while ( have_posts() ) :
the_post();
$categories = get_the_category();
$category = $categories[0]->slug;
require get_template_directory() . '/article_' . $category . '.php';
endwhile;
require get_template_directory() . '/pager.php';
?>
</section>
<?php
get_sidebar();
get_footer();
