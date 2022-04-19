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
            if(the_post_thumbnail()){
              ?>
              <img class="card-img-top" src="<?php the_post_thumbnail_url('thumbnail'); ?>" alt="image"/>
              <?php
            }
            ?>
            </div>
            <p class="card-text"><?php the_excerpt(); ?></p>
            <p class="card-text"><a href="<?php the_permalink(); ?>"><?php comments_number(); ?></a></p>
        </div>
    </div>
</div>