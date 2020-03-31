<?php
$home = esc_url(home_url());
$wp_url = get_template_directory_uri(); ?>

<!-- お問い合わせ -->
<section id="contact">
  <div class="bg-img">
    <div class="wrap">
      <div class="sec">
        <h2 class="eng upper">contact</h2>
        <p>ご予約・お問い合わせはこちらから</p>
        <div class="content">
          <div class="btn-wrap">
            <a  class="flex align-center"href="#"> <img src="<?php echo $wp_url ?>/lib/images/common/tel_03.png" alt="甲冑体験かすみの電話番号">
            </a>
          </div>
          <div class="pc-flex">
            <div class="btn-wrap">
              <a class="flex align-center" href="<?php echo $home ?>/booking-calendar">空き情報を確認する</a>
            </div>
            <div class="btn-wrap">
              <a class="flex align-center" href="<?php echo $home ?>/contact">お問い合わせ</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- お問い合わせ終了 -->

<!-- 花魁紹介 -->
<section id="oiran">
  <div class="bg-img">
    <div class="wrap">
      <div class="sec">
        <h2 class="eng upper">OIRAN Experience </h2>
        <p>プロのカメラ撮影 & 自由に写メ撮り放題の花魁体験！<br>本格的な花魁「あられ」1つ上の花魁体験「雅」の2店舗</p>
        <ul class="pc-flex">
          <li>
            <a href="https://www.oiran-arare.com/" target="_blank">
            <div><p><span class="serif">本格体験を低価格で</span>花魁体験studioあられ</p></div>
          </a>
          </li>
            <li>
              <a href="https://oiran-miyabi.com" target="_blank">
              <div><p><span class="serif">絢爛豪華な京都一の花魁</span>花魁体験studio雅</p></div>
            </a>
          </li>
        </ul>
      </div>
    </div>
  </div>
</section>
<!-- 花魁紹介終了 -->

</main>
<!-- メインコンテンツ終了 -->

<!-- フッター -->
<footer id="footer">
  <div class="content-01 flex">
    <div class="left flex align-center">
      <a href="<?php echo $home ?>">
        <img class="logo" src="<?php echo $wp_url ?>/lib/images/common/logo_01.png" alt="<?php bloginfo( 'name' ); ?>">
      </a>
    </div>
    <div class="right">
      <div class="flex align-center">
        <div class="">
          <p>〇〇店(本店)</p>
          <div class="flex">
            <div class="right-c">
              <p>〒000-0000 京都市下京区東塩小路町736番地3階<a href="#" class="eng" target="_blank">map</a></p>
              <p><span>TEL</span>000-0000-0000</p>
              <p><span>営業時間</span>10:00~18:00 ※月曜定休</p>
            </div>
            <div class="right-r">
              <ul>
                <li><a href="<?php echo $home ?>">ホーム</a></li>
                <li><a href="<?php echo $home ?>/consept">コンセプト</a></li>
                <li><a href="<?php echo $home ?>/plan">プラン</a></li>
                <li><a href="<?php echo $home ?>/flow">体験の流れ</a></li>
                <li><a href="<?php echo $home ?>/gallery">フォトギャラリー</a></li>
                <li><a href="<?php echo $home ?>/faq">よくあるご質問</a></li>
                <li><a href="<?php echo $home ?>/blog">ブログ</a></li>
                <li><a href="<?php echo $home ?>/contact">お問い合わせ</a></li>
              </ul>
            </div>
            <div class="right-l flex align-center">
              <div class="">
                <p>公式LINE</p>
                <div class="img-wrap">
                  <img src="https://qr-official.line.me/sid/M/597wiann.png">
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="content-02">
    <div class="wrap">
      <ul>
        <li><a href="<?php echo $home ?>/privacy policy">プライバシーポリシー</a></li>
        <li><a href="<?php echo $home ?>/sitemap">サイトマップ</a></li>
        <li><a href="<?php echo $home ?>/flow">permalink</a></li>
      </ul>
    </div>
  </div>
  <div class="sns">
    <ul>
      <li><a href="https://twitter.com/katchu_kasumi" target="_blank"><img src="<?php echo $wp_url ?>/lib/images/common/sns_tw.png" alt="Twitterアイコン"></a></li>
      <li><a href="https://www.instagram.com/katchu.kasumi/" target="_blank"><img src="<?php echo $wp_url ?>/lib/images/common/sns_inst.png" alt="Instagramアイコン"></a></li>
      <li><a href="https://www.facebook.com/katchu.kasumi" target="_blank"><img src="<?php echo $wp_url ?>/lib/images/common/sns_fb.png" alt="Facebookアイコン"></a></li>
    </ul>
  </div>
</footer>
<!-- フッター終了 -->

<!-- js -->
<script src="<?php echo $wp_url ?>/lib/js/jquery.min.js"></script>
<script src="<?php echo $wp_url; ?>/lib/js/jquery.fatNav.min.js"></script>
<script src="<?php echo $wp_url ?>/lib/js/slick.min.js"></script>
<script src="<?php echo $wp_url ?>/lib/js/vegas.min.js"></script>
<script src="<?php echo $wp_url ?>/lib/js/app.js"></script>
<!-- js終了 -->

<?php wp_footer(); ?>
</body>
</html>
