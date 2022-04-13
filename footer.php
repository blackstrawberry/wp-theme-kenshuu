    <!--footer-->
    <div class="footer">
        <div>
            <h5>プロジェクト紹介</h3>
        </div>
        <div>
            <h5>運動計画</h3>
        </div>
        <div>
            <h5>運動レコード</h3>
            <ul>
                <li>ランニング</li>
                <li>懸垂</li>
                <li>腕立て伏せ</li>
                <li>腹筋運動</li>
            </ul>
        </div>
        <div>
            <h5>お問い合わせ</h3>
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