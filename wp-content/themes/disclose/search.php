<?php
/*
 * The template for displaying search results
 */

get_header(); 

include_once get_template_directory() . '/inc/stramien.php';
?>
<div class="tags-page overflow-hidden mb-5 pt-3 pb-5">
<h2 class="text-center mt-5">Zoek resultaten voor: <?php echo get_search_query(); ?></h2>
	<div class="row mb-5">
		<?php if ( have_posts() ) :

				while ( have_posts() ) :
					the_post();
					get_template_part( 'template-parts/search/content', 'search' );
					endwhile;
				endif; ?>
			</div>
		</div>
			



<?php get_footer(); ?>