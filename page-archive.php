<?php
get_header();
?>
<section class="content archives">
<?php
// The loop
while ( have_posts() ) :
the_post();
?>
<h1 class="taxonomy-title">Archive</h1>
<input id="filter-archives" autocomplete="off" class="search-input archives" type="text" value="" placeholder="Filter ...">

<?php

// WP_Query arguments
$args = array (
	'posts_per_page'         => '1000000000',
	'order'                  => 'DESC',
	'orderby'                => 'date',
);

// The Query
$query = new WP_Query( $args );

// The Loop
if ( $query->have_posts() )
{
	$date = false;
	$first = true;
	echo '<ul class="month">';
	while ( $query->have_posts() ):
		$query->the_post();
		// do something
		if( $date != get_the_time('F, Y') )
		{
			if( $first ):
				$first = false;
				$date = get_the_time('F, Y');
				echo '<li class="date"><h3>'.$date.'<h3></li>';
			else:
				echo '</ul>';
				echo '<ul class="month">';
				$date = get_the_time('F, Y');
				echo '<li class="date"><h3>'.$date.'<h3></li>';
			endif;

		}
		?>
		<li class="title">
			<span><?php the_time('d') ?></span>
			<a class="p-name u-url" href="<?php the_permalink(); ?>"><?php the_title() ?></a>
		</li>
		<?php
	endwhile;
	echo '</ul>';
	echo '<div id="no-results"></div>';
} else {
	// no posts found
}

// Restore original Post Data
wp_reset_postdata();
?>

<?php
endwhile;
?>
</section>
<?php
get_sidebar();
get_footer();
