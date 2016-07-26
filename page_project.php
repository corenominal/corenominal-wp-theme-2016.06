<?php /* Template Name: Project Page */
get_header();
?>
<section class="content project">
<?php
// The loop
while ( have_posts() ) :
the_post();
?>
<article class="h-entry post">
<h1 class="p-name"><a href="<?php echo site_url('projects') ?>">Project</a>: <?php the_title() ?></h1>
<div class="e-content">
<?php the_content() ?>
</div>
</article>
<?php
comments_template();
endwhile;
?>
</section>
<?php
get_sidebar();
get_footer();
