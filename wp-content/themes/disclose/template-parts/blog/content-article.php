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
                <div class="stramienHeader bronze"><?php the_title(); ?></div>
                <div class="stramienInfo"><?php echo excerpt(10); ?></div>
                <?php echoMenu(false); ?>
            </div>
        </div>
    </div>

    <div class="stramien-container">

        <section class="blog-section">
            <div class="blog-info ">
                <div class="row">
                    <div class="col-md-6">
                        <span class="date" id="taviraj-r"><?php the_time(get_option('date_format'));?></span>
                    </div>
                    <div class="col-md-3 tags">
                        <?php the_tags('<span class="tag" id="taviraj-r">', '</span><span class="tag" id="taviraj-r">', '</span>'); ?>
                    </div>
                    <div class="col-md-3"></div>
                </div>

            </div>

            <div class="blog-content">
                <?php 
                    the_content();
                ?>

            </div>
        </section>


        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <?php wp_footer() ?>


<?php get_footer(); ?>