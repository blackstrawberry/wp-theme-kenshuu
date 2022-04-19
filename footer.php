    <!--footer-->
    <div class="footer">
    <div class="row row-cols-md-5 g-5">
        <div class="col-xs">
            <h4 onclick="location.href='<?php echo site_url()?>';">MyExseciseHistory</h4>
        </div>
        <div class="col-xs">
            <h5 onclick="location.href='<?php echo site_url('/プロジェクト紹介')?>';">プロジェクト紹介</h3>
        </div>
        <div class="col-xs">
            <h5 onclick="location.href='<?php echo site_url('/運動計画')?>';">運動計画</h3>
        </div>
        <div class="col-xs">
            <h5 onclick="location.href='<?php echo site_url('/運動レコード')?>';">運動レコード</h3>
            <ul>
                <li onclick="location.href='<?php echo site_url('/category/undou_recode/running/')?>';">ランニング</li>
                <li onclick="location.href='<?php echo site_url('/category/undou_recode/kensui/')?>';">懸垂</li>
                <li onclick="location.href='<?php echo site_url('/category/undou_recode/udetate/')?>';">腕立て伏せ</li>
                <li onclick="location.href='<?php echo site_url('/category/undou_recode/hukkin/')?>';">腹筋運動</li>
            </ul>
        </div>
        <div class="col-xs">
            <h5 onclick="location.href='<?php echo site_url('/お問い合わせ')?>';">お問い合わせ</h3>
        </div>
    </div>
    <p>© 2022, Onoff Inc. All Rights Reserved.</p>
    </div>
    <!--footer end-->
    <?php wp_footer(); ?>

  </body>

<!-- Swiper JS -->
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
<!-- Initialize Swiper -->
<script>
    var swiper = new Swiper(".mySwiper", {
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },
    autoplay: {
          delay: 2500,
          disableOnInteraction: false,
        },
    });
</script>
</html>