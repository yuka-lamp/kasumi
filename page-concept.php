<?php
$home = esc_url(home_url());
$wp_url = get_template_directory_uri();
get_header(); ?>

<section id="sub-about" class="wrap">
  <div class="sec pc-flex align-center">
    <div class="txt-wrap">
      <h2 class="serif"><span>特別な体験を</span><span>甲冑体験studioかすみで</span></h2>
      <p>サンプルテキストサンプルテキストサンプルテキストサンプルテキストサンプルテキストサンプルテキストサンプルテキストサンプルテキストサンプルテキストサンプルテキストサンプルテキストサンプルテキストサンプルテキストサンプルテキストサンプルテキストサンプルテキスト</p>
    </div>
    <div class="img-wrap">
      <img src="<?php echo $wp_url ?>/lib/images/concept/about.png" alt="甲冑体験studioかすみプラン画像">
    </div>
  </div>
</section>

<section id="concept-intro" class="wrap">
  <ul>
    <li class="pc-flex align-center">
      <div class="txt-wrap">
        <img src="<?php echo $wp_url ?>/lib/images/concept/eng_01.png" alt="point01">
        <h3 class="serif">SNS用に写真撮り放題。</h3>
        <p>フリータイムというものを設けております。お持ちのスマートフォンで自撮りをお楽しみいただけるというものです。SNSへのアップも自由ですので写真を撮ってすぐ写真を投稿することができます。美しい花魁姿で周りのお友達を驚かせましょう。</p>
      </div>
      <div class="img-wrap">
      <img src="<?php echo $wp_url ?>/lib/images/concept/point_01.png" alt="SNS用に写真撮り放題。">
      </div>
    </li>
    <li class="pc-flex align-center">
      <div class="txt-wrap">
        <img src="<?php echo $wp_url ?>/lib/images/concept/eng_02.png" alt="point02">
        <h3 class="serif">本格的な甲冑体験。</h3>
        <p>フリータイムというものを設けております。お持ちのスマートフォンで自撮りをお楽しみいただけるというものです。SNSへのアップも自由ですので写真を撮ってすぐ写真を投稿することができます。美しい花魁姿で周りのお友達を驚かせましょう。</p>
      </div>
      <div class="img-wrap">
      <img src="<?php echo $wp_url ?>/lib/images/concept/point_02.png" alt="本格的な甲冑体験。">
      </div>
    </li>
  </ul>
</section>

<?php get_footer();
