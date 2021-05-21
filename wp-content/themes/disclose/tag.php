<?php
/*
 * The template for displaying Tag pages
 */

get_header(); 

include_once get_template_directory() . '/inc/stramien.php';
?>
<div class="tags-page overflow-hidden mb-5 pb-5">
<h2 class="text-center mt-5">Tag archief voor: <?php single_tag_title(); ?></h2>
	<div class="row mb-5">
		<?php if ( have_posts() ) :

				while ( have_posts() ) :
					the_post();
					get_template_part( 'template-parts/blog/content', 'tags' );
					endwhile;
				endif; ?>
			</div>
		</div>
			



<?php get_footer(); ?>