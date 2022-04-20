<?php
  $cat = get_the_category();
  $cattitle = $cat[0]->name;
  $bg_color = "";
  $border_color = "";
  if ($cattitle == "ランニング"){
    $bg_color = "bg-primary";
    $border_color = "border-primary";
    $back_link = '/category/undou_recode/running/';
  }
  else if($cattitle == "懸垂"){
      $bg_color = "bg-secondary";
      $border_color = "border-secondary";
      $back_link = '/category/undou_recode/kensui/';
  }
  else if($cattitle == "腕立て伏せ"){
      $bg_color = "bg-warning";
      $border_color = "border-warning";
      $back_link = '/category/undou_recode/udetate/';
  }
  else if($cattitle == "腹筋運動"){
      $bg_color = "bg-info";
      $border_color = "border-info";
      $back_link = '/category/undou_recode/hukkin/';
  }
  else{
    $bg_color = "bg-primary";
    $border_color = "border-primary";
    $back_link = '/category/undou_recode/';
  }
  
?>
<h2 class="cat-title mb-2 <?php echo $bg_color; ?> text-white text-center"><?php echo $cattitle; ?></h2>

<h2><?php the_title() ?></h2>
<?php
    the_tags('<span class="tag"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-bookmark" viewBox="0 0 16 16">
    <path d="M2 2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v13.5a.5.5 0 0 1-.777.416L8 13.101l-5.223 2.815A.5.5 0 0 1 2 15.5V2zm2-1a1 1 0 0 0-1 1v12.566l4.723-2.482a.5.5 0 0 1 .554 0L13 14.566V2a1 1 0 0 0-1-1H4z"/>
  </svg>', '</span><span class="tag"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-bookmark" viewBox="0 0 16 16">
  <path d="M2 2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v13.5a.5.5 0 0 1-.777.416L8 13.101l-5.223 2.815A.5.5 0 0 1 2 15.5V2zm2-1a1 1 0 0 0-1 1v12.566l4.723-2.482a.5.5 0 0 1 .554 0L13 14.566V2a1 1 0 0 0-1-1H4z"/>
</svg>','</span>');
?>
<hr>
<div class="post-info">
  <span class="date"><?php the_date(); ?></span>
  <span class="comment"><a href="#comments"><i class='fa fa-comment'></i><?php comments_number(); ?></a></span>
</div>

<hr>
<?php
  the_content();
?>
<br>
<hr>
<div class="comment">
<?php
  comments_template();
?>
</div>
<div class="modoru">
  <button type="button" class="btn border <?php echo $border_color; ?>" onclick="location.href='<?php echo site_url($back_link); ?>'">← 一覧へ</button>
</div>