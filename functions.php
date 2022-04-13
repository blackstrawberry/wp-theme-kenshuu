<?php
  function main_files() {
    wp_enqueue_script( 'makechart', get_theme_file_uri('/js/chart.js'), NULL, '1.0', true );
    wp_enqueue_script( 'swiper-js', '//unpkg.com/swiper@8/swiper-bundle.min.js', NULL, '1.0', true );
    wp_enqueue_script( 'bootstrap-js', '//cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js', NULL, '1.0', true );
    wp_enqueue_style( 'bootstrap-css', '//cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css');
    wp_enqueue_style( 'swiper-css', '//unpkg.com/swiper@8/swiper-bundle.min.css');
    wp_enqueue_style('main_styles', get_stylesheet_uri());
  }
  add_action('wp_enqueue_scripts','main_files');
?>
