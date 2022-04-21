<?php

use Tribe\Utils\Strings;

get_header();
?>

<div class="container">

	<?php
		if( have_posts() ){
            ?>
            <h1>運動レコード</h1>
            <?php
            $category = get_queried_object();
            $cat = get_cat_name($category->term_id);
            $bg_color = "";
            $title = $cat;
            $para_1 = "";
            $para_2 = "";
            $imgsource = ""; 
            if ($title == "ランニング"){
                $bg_color = "bg-primary";
                $para_1 = "30分間休まず連続で走ることを目標とします。";
                $para_2 = "ランデイアプリを利用して長くランニングを行い、その結果をアップロードします。";
                $imgsource = "/img/running.png";
            }
            else if($title == "懸垂"){
                $bg_color = "bg-secondary";
                $para_1 = "1セット4回ずつ、合計4~5セット実施します。";
                $para_2 = "できるだけ長くぶら下がっていることを目指して、姿勢が崩れないように気を使います。";
                $imgsource = "/img/kensui.png"; 
            }
            else if($title == "腕立て伏せ"){
                $bg_color = "bg-warning";
                $para_1 = "1セット15回ずつ、大変なら10回にします。";
                $para_2 = "回数よりも、正しい姿勢を保つことに気をつかうようにします。";
                $imgsource = "/img/udetate.png"; 
            }
            else if($title == "腹筋運動"){
                $bg_color = "bg-info";
                $para_1 = "12分腹筋運動トレーニングユーチューブ動画を真似しながら運動します。";
                $para_2 = "中間休息なしに一度にずっと行うことを目標とします。";
                $imgsource = "/img/hukkin.png"; 
            }
            else{

            }
            
            ?>
            <div class="row">
                <div class="col-sm-6">
                  <div class="card text-white <?php echo $bg_color; ?> border-dark text-center">
                    <img src="<?php echo get_theme_file_uri($imgsource) ?>" class="card-img-top" alt="running">
                    <div class="card-body">
                        <h2><?php echo $title ?></h2>
                    </div>
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="card border-white text-black">
                    <div class="card-body">
                      <h1 class="card-title"><?php echo $title ?></h1>
                      <br>
                      <p class="card-text"><?php echo $para_1; ?></p>
                      <p class="card-text"><?php echo $para_2; ?></p>
                    </div>
                  </div>
                </div>
            </div>
            <br>
            <div class="sentaku">
                <div class="row row-cols-md-4 g-4">
                  <?php
                    while( have_posts() ){	
                      the_post();
                      get_template_part('template-parts/content','archive');
                    }
                  ?>
                </div>
            </div>
            <br>
            <?php
            the_posts_pagination();
            ?>
            <?php

		}
	?> 
<br>
</div>
	

<?php
get_footer();
?>
