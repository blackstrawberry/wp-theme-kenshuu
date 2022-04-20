<?php
$postDate = get_the_date();
?>
<div class="col-sm-3">
    <div class="card w-100" style="width: 18rem;" onclick="location.href='<?php the_permalink(); ?>'">
        <div class="card-body">
            <h5 class="card-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5>
            <p class="card-text"><?php echo $postDate; ?></p>
            <div style="text-align:center;">
            <?php
            if(get_post_thumbnail_id()){
              ?>
              <img class="card-img-top" src="<?php the_post_thumbnail_url('thumbnail'); ?>" alt="image"/>
              <?php
            }
            else{
                ?>
              <img class="card-img-top" src="<?php echo get_theme_file_uri('/img/sample.png') ?>" alt="image"/>
              <?php
            }
            ?>
            </div>
            <p class="card-text"><?php the_excerpt(); ?></p>
            <p class="card-text"><a href="<?php the_permalink(); ?>"><?php comments_number(); ?></a></p>
        </div>
    </div>
</div>