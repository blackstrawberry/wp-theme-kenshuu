<!DOCTYPE html>
<html lang="en">
<head>
    <?php wp_head(); ?>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/chart.js@3.7.1/dist/chart.min.js" type="text/javascript"></script>
</head>
<body>
    <!--header-->
    <div class="px-4 pt-5 my-5">
        <h1 class="display-4 text-center fw-bold" onclick="location.href='<?php echo site_url() ?>';" style="cursor:pointer;">MyExerciseHistory</h1>
        <nav class="navbar navbar-expand-lg navbar-light bg-white justify-content-center">
            <div class="container-fluid">
                <a class="navbar-brand" href="#"></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
              <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
                <ul class="navbar-nav">
                  <li class="nav-item">
                    <a class="nav-link active" href="<?php echo site_url('/プロジェクト紹介')?>">プロジェクト紹介</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link active" href="<?php echo site_url('/運動計画') ?>">運動計画</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link active" href="<?php echo site_url('/運動レコード') ?>">運動レコード</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link active" href="<?php echo site_url('/お問い合わせ') ?>">お問い合わせ</a>
                  </li>
                </ul>
              </div>
            </div>
          </nav>
    </div>
    <!--header end-->
