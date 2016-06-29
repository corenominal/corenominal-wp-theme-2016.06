<?php
get_header();
?>
<section class="content">
<?php
switch ( strtolower( single_cat_title( '', false ) ) )
{
	case 'posts':
		echo '<h1 class="page-title">Category: Notes</h1>';
		break;

	default:
		echo '<h1 class="page-title">Category: ' . single_cat_title( '', false ) . '</h1>';
		break;
}
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
