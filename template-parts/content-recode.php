<!--contents-->
<div class="container">
    <h1><?php the_title();?></h1>
    <div class="sentaku">
        <div class="row">
            <div class="col-sm-6">
                <div class="card text-white bg-primary border-dark text-center" onclick="location.href='<?php echo site_url('/category/undou_recode/running/')?>'">
                <img src="<?php echo get_theme_file_uri('/img/running.png');?>" class="card-img-top" alt="running">
                <div class="card-body">
                    <h2>ランニング</h2>
                </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="card text-white bg-secondary border-dark text-center" onclick="location.href='<?php echo site_url('/category/undou_recode/kensui/')?>'">
                <img src="<?php echo get_theme_file_uri('/img/kensui.png');?>" class="card-img-top" alt="kensui">
                <div class="card-body">
                    <h2>懸垂</h2>
                </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="card text-white bg-warning border-dark text-center" onclick="location.href='<?php echo site_url('/category/undou_recode/udetate/')?>'">
                    <img src="<?php echo get_theme_file_uri('/img/udetate.png');?>" class="card-img-top" alt="udetate">
                    <div class="card-body">
                    <h2>腕立て伏せ</h2>
                    </div>
                </div>
                </div>
                <div class="col-sm-6">
                <div class="card text-white bg-info border-dark text-center" onclick="location.href='<?php echo site_url('/category/undou_recode/hukkin/')?>'">
                <img src="<?php echo get_theme_file_uri('/img/hukkin.png');?>" class="card-img-top" alt="hukkin">
                    <div class="card-body">
                    <h2>腹筋運動</h2>
                    </div>
                </div>
                </div>
            </div>
    </div> 
</div>
<!--content end-->
