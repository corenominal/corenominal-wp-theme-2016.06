<?php
get_header();
?>
<section class="content">
<?php
// The loop
while ( have_posts() ) :
the_post();
require get_template_directory() . '/article_page.php';
comments_template();
endwhile;
?>
</section>
<?php
get_sidebar();
get_footer();
