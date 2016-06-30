<?php
get_header();
?>
<section class="content">
<?php
// The loop
while ( have_posts() ) :
the_post();
?>
<h1 class="taxonomy-title">Browse Content by Tags</h1>
<input id="filter" autocomplete="off" class="search-input tags" type="text" value="" placeholder="Filter ...">
<ul class="tags">
<?php
$args = array(
	//'orderby' 	 => 'count',
	'order' 	 => 'ASC',
	'hide_empty' => true
	);
$tags = get_tags( $args );
foreach ($tags as $tag):
?>
<li class="tag"><a class="nowrap" href="<?php echo site_url( 'tag/' . $tag->slug ) ?>"><?php echo $tag->name ?></a></li>
<?php
endforeach;
?>
</ul>
<?php
endwhile;
?>
</section>
<?php
get_sidebar();
get_footer();
