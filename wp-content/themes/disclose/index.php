<?php 
    get_header();
?>


<article>
    <?php
    
        if(have_posts()) {
                the_post();
                
                get_template_part( 'template-parts/blog/content', 'archive');
            
        }
    ?>
</article>

<?php
    get_footer();
?>