<?php
$home = esc_url(home_url());
$wp_url = get_template_directory_uri(); ?>
</main>
<!-- メインコンテンツ終了 -->

<!-- フッター -->
<footer id="footer">
  <div class="content-01 flex">
    <div class="left">
      <div class="img-wrap">
        <img src="<?php echo $wp_url ?>/lib/images/common/logo.png" alt="<?php bloginfo( 'name' ); ?>">
      </div>
    </div>
    <div class="right">
      <div class="">
        <p>〇〇店(本店)</p>
        <div class="flex">
          <div class="right-l">
            <p>〒000-0000 京都市下京区東塩小路町736番地3階<a href="#">map</a></p>
            <p><span>TEL</span>000-0000-0000</p>
            <p><span>営業時間</span>10:00~18:00 ※月曜定休</p>
          </div>
          <div class="right-r">
            <ul>
              <li><a href="<?php echo $home ?>/consept">コンセプト</a></li>
              <li><a href="<?php echo $home ?>/plan">プラン</a></li>
              <li><a href="<?php echo $home ?>/flow">体験の流れ</a></li>
              <li><a href="<?php echo $home ?>/gallery">フォトギャラリー</a></li>
              <li><a href="<?php echo $home ?>/faq">よくあるご質問</a></li>
              <li><a href="<?php echo $home ?>/blog">ブログ</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="content-02">
    <ul>
      <li><a href="<?php echo $home ?>/privacy policy">プライバシーポリシー</a></li>
      <li><a href="<?php echo $home ?>/sitemap">サイトマップ</a></li>
      <li><a href="<?php echo $home ?>/flow">permalink</a></li>
    </ul>
  </div>
</footer>
<!-- フッター終了 -->

<!-- js -->
<script src="<?php echo $wp_url ?>/lib/js/jquery.min.js"></script>
<script src="<?php echo $wp_url; ?>/lib/js/jquery.fatNav.min.js"></script>
<script src="<?php echo $wp_url ?>/lib/js/jquery.bgswitcher.js"></script>
<script src="<?php echo $wp_url ?>/lib/js/slick.min.js"></script>
<script src="<?php echo $wp_url ?>/lib/js/vegas.min.js"></script>
<script src="<?php echo $wp_url ?>/lib/js/app.js"></script>
<!-- js終了 -->

<?php wp_footer(); ?>
</body>
</html>
