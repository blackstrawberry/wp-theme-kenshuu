<!DOCTYPE html>
<html lang="jp">
<head>
    <?php wp_head(); ?>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="<?php echo get_theme_file_uri('/img/BKSB.png'); ?>">
    <script src="https://cdn.jsdelivr.net/npm/chart.js@3.7.1/dist/chart.min.js" type="text/javascript"></script>
</head>
<body>
    <!--header-->
    <div class="mytitle">
        <h1 class="display-4 text-center fw-bold" id="titletext" onclick="location.href='<?php echo site_url() ?>';" style="cursor:pointer;">MyExerciseHistory</h1>
        <div class="wide">
        <ul class="navbar-nav">
            <?php
              wp_nav_menu(
                array(
                  'menu' => 'primary',
                  'container' => '',
                  'theme_location' => 'primary',
                  'items_wrap' => '<li class="nav-item">%3$s</li>'
                )
              );
            ?>
            </ul>
            </div>
        <nav class="navbar navbar-expand-lg navbar-light bg-white justify-content-center" id="nav-position">
            <div class="container-fluid">
                <a class="navbar-brand" href="#"></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>
          </nav>
          <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
            <ul class="navbar-nav">
            <?php
              wp_nav_menu(
                array(
                  'menu' => 'primary',
                  'container' => '',
                  'theme_location' => 'primary',
                  'items_wrap' => '<li class="nav-item">%3$s</li>'
                )
              );
            ?>
            </ul>
          </div>
    </div>

    <!--header end-->
