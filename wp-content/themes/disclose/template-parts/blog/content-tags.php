
    <div class="container"> 

<section class="blogs col-md-6">
    <div class="card">
        <div class="card-horizontal">
        <div class="img-square-wrapper">
            <img src="<?php the_post_thumbnail_url(); ?>" alt="" class="mr-3 img-fluid post-thumb d-none d-md-flex">
        </div>
        <div class="card-body">
            <h4 class="card-date"><?php the_time(get_option('date_format'));?></h4>
            <h4 class="card-title ml-0"><?php the_title();?></h4>
            <a href="<?php the_permalink(); ?>" class="card-read pt-5 mt-4">Volledig artikel &rarr;</a>
        </div>
        </div>
        <div class="card-bottom">
        <p class="card-text pb-3" id="taviraj-r"><?php echo excerpt(30); ?></p>
        <a href="<?php the_permalink(); ?>" class="more-link">Lees artikel &rarr;</a>
        </div>
    </div>
</section>
</div>
