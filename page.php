
<?php get_header(); ?>

<?php
  if( have_posts() ){
    while( have_posts() ){
      
      the_post();
      if( get_the_title() == 'Home'){
        get_template_part('template-parts/content','main');
      }
      else if( get_the_title() == 'プロジェクト紹介'){
        get_template_part('template-parts/content','shoukai');
      }
      else if( get_the_title() == '運動レコード'){
        get_template_part('template-parts/content','recode');
      }
      else if( get_the_title() == 'お問い合わせ'){
        get_template_part('template-parts/content','otoiawase');
      }
      else{
        get_template_part('template-parts/content','archive');
      }
    }

  }
?> 

<?php get_footer(); ?>