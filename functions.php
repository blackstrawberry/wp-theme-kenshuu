<?php
  function followandrew_theme_support(){
    // add dynamic title tag support
    add_theme_support('title-tag');
    add_theme_support('custom-logo');
    add_theme_support('post-thumbnails');
  }
  add_action('after_setup_theme', 'followandrew_theme_support');
  
  function followandrew_menus(){
    $locations = array(
      'primary' => "Desktop Primary Left Sidebar",
      'footer' => "Footer Menu Items"
    );
    register_nav_menus($locations);
  }
  add_action('init','followandrew_menus');

  function main_files() {
    wp_enqueue_script( 'makechart', get_theme_file_uri('/js/main.js'), NULL, '1.0', true );
    wp_enqueue_script( 'swiper-js', '//unpkg.com/swiper@8/swiper-bundle.min.js', NULL, '1.0', true );
    wp_enqueue_script( 'bootstrap-js', '//cdn.jsdelivr.net/npm/bootstrap@4.9.2/dist/js/bootstrap.bundle.min.js', NULL, '1.0', true );
    wp_enqueue_style( 'bootstrap-css', '//cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css');
    wp_enqueue_style( 'swiper-css', '//unpkg.com/swiper@8/swiper-bundle.min.css');
    wp_enqueue_style('main_styles', get_stylesheet_uri());
  }
  add_action('wp_enqueue_scripts','main_files');

  function main_features() {
    add_theme_support('title_tag');
  }
  add_action('after_setup_theme', 'main_features');
?>
