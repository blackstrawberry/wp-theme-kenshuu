<!--contents-->
    <!-- Swiper -->
    <div class="swiper mySwiper">
        <div class="swiper-wrapper">
            <div class="swiper-slide to-right-underline"><img src="<?php echo get_theme_file_uri('/img/main_1.jpg')?>" alt="unndouimage1"></div>
            <div class="swiper-slide"><img src="<?php echo get_theme_file_uri('/img/main_2.jpg')?>" alt="unndouimage2"></div>
            <div class="swiper-slide"><img src="<?php echo get_theme_file_uri('/img/main_3.jpg')?>" alt="unndouimage3"></div>
            <div class="swiper-slide"><img src="<?php echo get_theme_file_uri('/img/main_4.jpg')?>" alt="unndouimage4"></div>
        </div>
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
    </div>
    <div class="container">
        <div>
          <br>
            <h2>Progress</h2>
            <div class="row row-cols-md-2 g-2">
                <div class="col-sm-6">
                    <canvas id="myChart" width="400px" height="400px"></canvas>
                    <script src="<?php echo get_theme_file_uri('/js/chart.js');?>" type="text/javascript"></script>
                </div>
                <div class="col-sm-6">
                    <div class="card justify-content-center">
                        <div class="card-body">
                          <br>
                          <img src="<?php echo get_theme_file_uri('/img/mainshoukai.png');?>" alt="shoukai" width="100%"/>
                          <div class="d-grid gap-4">
                              <div class="motto">
                                <a href="<?php echo site_url('/プロジェクト紹介');?>" class="btn btn-dark">プロジェクト紹介を見る</a>
                              </div>
                          </div>
                          <br>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div>
          <br>
            <h2>News</h2>


            <ul class="nav nav-pills nav-fill" id="myTab" role="tablist">
                <li class="nav-item d-grid gap-2" role="presentation">
                    <button class="btn btn-primary" id="run-tab" data-bs-toggle="tab" data-bs-target="#run" type="button" role="tab" aria-controls="run" aria-selected="true">ランニング</button>
                </li>
                <li class="nav-item d-grid gap-2" role="presentation">
                    <button class="btn btn-secondary" id="kensui-tab" data-bs-toggle="tab" data-bs-target="#kensui" type="button" role="tab" aria-controls="kensui" aria-selected="false">懸垂</button>
                </li>
                <li class="nav-item d-grid gap-2" role="presentation">
                    <button class="btn btn-warning text-white" id="ude-tab" data-bs-toggle="tab" data-bs-target="#ude" type="button" role="tab" aria-controls="ude" aria-selected="false">腕立て伏せ</button>
                </li>
                <li class="nav-item d-grid gap-2" role="presentation">
                    <button class="btn btn-info text-white" id="hukkin-tab" data-bs-toggle="tab" data-bs-target="#hukkin" type="button" role="tab" aria-controls="hukkin" aria-selected="false">腹筋運動</button>
                </li>
            </ul>
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="run" role="tabpanel" aria-labelledby="home-tab">
                    <br>
                    <div class="row row-cols-md-4 g-4">
                        <?php
                            $opinionPosts = new WP_Query('cat=6');

                            if($opinionPosts->have_posts()){
                                while($opinionPosts->have_posts()){
                                    $opinionPosts->the_post();
                                    get_template_part('template-parts/content','archive');
                                } 
                            }
                        ?>
                    </div>
                    <br>
                    <div class="row justify-content-center">
                        <div class="col" style="text-align: center;">
                            <div class="motto">
                                <button type="button" class="btn btn-primary text-white" onclick="location.href='<?php echo site_url('/category/undou_recode/running/'); ?>'">もっと見る</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="kensui" role="tabpanel" aria-labelledby="profile-tab">
                    <br>
                    <div class="row row-cols-md-4 g-4">
                        <?php
                            $opinionPosts = new WP_Query('cat=7');

                            if($opinionPosts->have_posts()){
                                while($opinionPosts->have_posts()){
                                    $opinionPosts->the_post();
                                    get_template_part('template-parts/content','archive');
                                } 
                            }
                        ?>
                    </div>
                    <br>
                    <div class="row justify-content-center">
                        <div class="col" style="text-align: center;">
                            <div class="motto">
                                <button type="button" class="btn btn-secondary text-white" onclick="location.href='<?php echo site_url('/category/undou_recode/kensui/'); ?>'">もっと見る</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="ude" role="tabpanel" aria-labelledby="contact-tab">
                    <br>
                    <div class="row row-cols-md-4 g-4">
                        <?php
                            $opinionPosts = new WP_Query('cat=8');

                            if($opinionPosts->have_posts()){
                                while($opinionPosts->have_posts()){
                                    $opinionPosts->the_post();
                                    get_template_part('template-parts/content','archive');
                                } 
                            }
                        ?>
                    </div>
                    <br>
                    <div class="row justify-content-center">
                        <div class="col" style="text-align: center;">
                            <div class="motto">
                                <button type="button" class="btn btn-warning text-white" onclick="location.href='<?php echo site_url('/category/undou_recode/udetate/'); ?>'">もっと見る</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="hukkin" role="tabpanel" aria-labelledby="contact-tab">
                    <br>
                    <div class="row row-cols-md-4 g-4">
                        <?php
                            $opinionPosts = new WP_Query('cat=9');

                            if($opinionPosts->have_posts()){
                                while($opinionPosts->have_posts()){
                                    $opinionPosts->the_post();
                                    get_template_part('template-parts/content','archive');
                                } 
                            }
                        ?>
                    </div>
                    <br>
                    <div class="row justify-content-center">
                        <div class="col" style="text-align: center;">
                            <div class="motto">
                                <button type="button" class="btn btn-info text-white" onclick="location.href='<?php echo site_url('/category/undou_recode/hukkin/'); ?>'">もっと見る</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <br>
    </div>
    <!--content end-->
