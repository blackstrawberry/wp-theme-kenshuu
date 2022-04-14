
<?php get_header(); ?>

<?php while(have_posts()) {
  the_post(); ?>
    <?php
      if( get_the_ID() == 7){
        ?>
          <!--contents-->
          <div class="container">
            <div class="content">
              <h1><?php the_title();?></h1>
              <?php the_content();?>
              <div class="shoukai_img"></div>
            </div>
          </div>
        <?php 
      }
      elseif( get_the_ID() == 10){
        ?>
        <!--contents-->
        <div class="container">
              <h1><?php the_title(); ?></h1>
              <!-- <div class="border border-2 border-dark">
                  <div class="keikaku-post">
                      <div class="row">
                          <div class="col">
                              <button type="button" class="btn btn-light">《《　一覧へ戻る</button>
                          </div>
                      </div>
                      <br><br>
                      <div class="row">
                          <h2>title</h2>
                          <hr>
                          <p>2022/00/00</p>
                          <hr>
                          <div class="form-check">
                              <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
                              <label class="form-check-label" for="flexCheckChecked">
                                  運動１
                              </label>
                          </div>
                          <div class="form-check">
                              <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                              <label class="form-check-label" for="flexCheckDefault">
                                  運動２
                              </label>
                          </div>
                          <div class="form-check">
                              <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                              <label class="form-check-label" for="flexCheckDefault">
                                  運動３
                              </label>
                          </div>
                      </div>    
                  </div>
              </div> -->
          </div> 
          <!--content end-->
        <?php
      }
      elseif( get_the_ID() == 14){
        ?>
        <!--contents-->
        <div class="container">
                <h1><?php the_title();?></h1>
                <div class="sentaku">
                    <div class="row">
                        <div class="col-sm-6">
                          <div class="card text-white bg-primary border-dark text-center" onclick="location.href='<?php echo site_url('/運動レコード/ランニング')?>'">
                            <img src="<?php echo get_theme_file_uri('/img/running.png');?>" class="card-img-top" alt="running">
                            <div class="card-body">
                                <h2>ランニング</h2>
                            </div>
                          </div>
                        </div>
                        <div class="col-sm-6">
                          <div class="card text-white bg-secondary border-dark text-center" onclick="location.href='<?php echo site_url('/運動レコード/懸垂')?>'">
                            <img src="<?php echo get_theme_file_uri('/img/kensui.png');?>" class="card-img-top" alt="kensui">
                            <div class="card-body">
                              <h2>懸垂</h2>
                            </div>
                          </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="card text-white bg-warning border-dark text-center" onclick="location.href='<?php echo site_url('/運動レコード/腕立て伏せ')?>'">
                                <img src="<?php echo get_theme_file_uri('/img/udetate.png');?>" class="card-img-top" alt="udetate">
                              <div class="card-body">
                                <h2>腕立て伏せ</h2>
                              </div>
                            </div>
                          </div>
                          <div class="col-sm-6">
                            <div class="card text-white bg-info border-dark text-center" onclick="location.href='<?php echo site_url('/運動レコード/腹筋運動')?>'">
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
        <?php
      }
      elseif( get_the_ID() == 16){
        ?>
        <!--contents-->
        <div class="container">
                <h1><?php the_title(); ?></h1>
                <br>
                <form class="row g-3">
                    <div class="col-12">
                        <label for="name" class="form-label h4">お名前</label>
                        <input type="text" class="form-control" id="inputAddress" placeholder="お名前を書いてください。" required>
                    </div>
                    <div class="col-12">
                        <label for="Address" class="form-label h4">メールアドレス</label>
                        <input type="text" class="form-control" id="inputAddress2" placeholder="メールアドレスを書いてください。" required>
                    </div>
                    <div class="col-md-12">
                        <label for="content" class="form-label h4">お問い合わせ内容</label>
                        <textarea type="text" class="form-control" id="contents" placeholder="内容を書いてください。" required rows="3"></textarea>
                    </div>
                    <div class="d-grid gap-2">
                        <button type="submit" class="btn btn-secondary">内容を確認する</button>
                    </div>
                    </form>
                    <br>
            </div> 
            <!--content end-->
        <?php
      }
      else{
        ?>
          <!--contents-->
          <div class="container">
                <h1><?php the_title(); ?></h1>
                <div class="row">
                    <div class="col">
                        <button type="button" class="btn btn-light">《《　一覧へ戻る</button>
                    </div>
                </div>
          </div>
          <!--content end-->
        <?php
      }
    ?>
<?php } ?>
<?php get_footer(); ?>