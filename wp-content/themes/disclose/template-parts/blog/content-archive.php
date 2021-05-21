<?php

get_header(); 
include get_template_directory() . '/sidebar.php';

?>

    <!-- Scroll effect, this text must match the one given above apart from colors -->
    <div class="logo">
        <div class="logoPart logoIcon"><a href="<?php echo get_option("siteurl"); ?>"><?php echo file_get_contents(get_template_directory() . "/img/logoIcon.svg"); ?></a></div>
        <div class="logoPart logoText black"><a href="<?php echo get_option("siteurl"); ?>"><?php echo file_get_contents(get_template_directory() . "/img/logoText.svg"); ?></a></div>
    </div>
    <h2 class="menuHeading">Menu</h2>
    <?php echoMenu(true); ?>
    <div class="stramienBackground overlay">
        <div class="innerTextRelativeContainer">
            <div class="innerTextAbsoluteContainer">    
                <div class="logo">
                    <div class="logoPart logoIcon"><a href="<?php echo get_option("siteurl"); ?>"><?php echo file_get_contents(get_template_directory() . "/img/logoIcon.svg"); ?></a></div>
                    <div class="logoPart logoText"><a href="<?php echo get_option("siteurl"); ?>"><?php echo file_get_contents(get_template_directory() . "/img/logoText.svg"); ?></a></div>
                </div>
                <h2 class="menuHeading">Menu</h2>
    <?php echoMenu(false); ?>
                <div class="stramienHeader bronze"><?php single_post_title(); ?></div>
                <div class="stramienInfo">Memorabele verhalen om te lezen</div>
            </div>
        </div>
    </div>
    <div class="container row"> 
        <div class="tag-container">
        
            <div class="tag-text">We delen graag onze kennis, verhalen, updates en leuke cases die we hebben gerealiseerd voor klanten.</div>
            <div class="tags">
                <?php
                    $args = array( 'orderby'=> 'popularity','order'=> 'ASC','public'=> true,); 
                    $tags = get_tags($args);

                    foreach ( $tags as $tag ) {
                        echo '<span class="tag" id="taviraj-r">' . $tag->name . '</span><br/>';
                }?>
            </div>

        </div>
    <?php 
        $the_query = new WP_Query( array(
            'posts_per_page' => 1,
        )); 
    
        if ( $the_query->have_posts()) {
            while ( $the_query->have_posts()) { $the_query->the_post();
        ?>
            <section class="col-md-12 archive-section pt-5">
                <div class="newPost" id="magnite">Nieuwste Post</div>                    
            <div class="post mb-5">
                <div class="media">
                    <img src="<?php the_post_thumbnail_url(); ?>" alt="" class="mr-3 img-fluid post-thumb d-none d-md-flex">
                    <div class="media-body">
                        <h3 class="title mb-1"><?php the_title(); ?></h3>
                        <div class="meta mb-1">
                            <span class="date"><?php the_time(get_option('date_format')); ?></span>
                            <span class="time">
                                <p><?php echo $est; ?> min leestijd</p>
                            </span>

                            <div class="intro"><?php the_excerpt(); ?></div>
                            <a href="<?php the_permalink(); ?>" class="more-link">Read More &rarr;</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
                <?php } wp_reset_postdata(); } ?>  
     
     
        <?php
    
            $i = 0;
            if(have_posts()) { while(have_posts()) { the_post(); 
                $mycontent = $post->post_content; // wordpress users only
                $word = str_word_count(strip_tags($mycontent));
                $m = floor($word / 200);
                $s = floor($word % 200 / (200 / 60));
                $est = $m . ' minute' . ($m == 1 ? '' : 's') . ', ' . $s . ' seconde' . ($s == 1 ? '' : 's');

                
                if ( $i++ > 0 ) {
            ?>
        <section class="col-md-6 archive-section pt-5">                    
            <div class="post mb-5">
                <div class="media">
                    <img src="<?php the_post_thumbnail_url(); ?>" alt="" class="mr-3 img-fluid post-thumb d-none d-md-flex">
                    <div class="media-body">
                        <h3 class="title mb-1"><?php the_title(); ?></h3>
                        <div class="meta mb-1">
                            <span class="date"><?php the_time(get_option('date_format')); ?></span>
                            <span class="time">
                                <p><?php echo $est; ?> min leestijd</p>
                            </span>

                            <div class="intro"><?php the_excerpt(); ?></div>
                            <a href="<?php the_permalink(); ?>" class="more-link">Read More &rarr;</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    <?php  }} } ?>
</div>