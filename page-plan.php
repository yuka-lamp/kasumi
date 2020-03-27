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
      <img src="<?php echo $wp_url ?>/lib/images/plan/about.png" alt="甲冑体験studioかすみプラン画像">
    </div>
  </div>
</section>

<section id="plan-intro" class="wrap">
  <div class="sec">
    <div class="name-border">
      <div class="name">
        <h2 class="serif">プラン名</h2>
        <p class="upper eng gold">planname</p>
      </div>
    </div>
    <div class="img-wrap pc-flex">
      <div class="img-wrap pc-only">
        <img src="<?php echo $wp_url ?>/lib/images/plan/plan01/plan_pc.png" alt="甲冑体験studioかすみ[プラン名]画像">
      </div>
      <div class="img-wrap sp-only">
        <img src="<?php echo $wp_url ?>/lib/images/plan/plan01/plan_sp.png" alt="甲冑体験studioかすみ[プラン名]画像">
      </div>
    </div>
    <div class="pc-flex txt-wrap">
      <div class="left">
        <h3 class="serif">プランタイトルが<br>入ります。</h3>
        <p class="serif upper">¥00,000</p>
      </div>
      <p class="right">サンプルテキストサンプルテキストサンプルテキストサンプルテキストサンプルテキストサンプルテキストサンプルテキストサンプルテキストサンプルテキストサンプルテキストサンプルテキストサンプルテキストサンプルテキストサンプルテキストサンプルテキストサンプルテキストサンプルテキストサンプルテキストサンプルテキストサンプルテキストサンプルテキストサンプルテキストサンプルテキストサンプルテキストサンプルテキストサンプルテキストサンプルテキストサンプルテキストサンプルテキストサンプルテキストサンプルテキストサンプルテキスト</p>
    </div>
    <div class="content">
      <h3 class="gold serif">プランに含まれるもの</h3>
      <ul class="flex">
        <li>
          <div class="img-wrap">
            <img src="<?php echo $wp_url ?>/lib/images/plan/content_01.png" alt="甲冑体験studioかすみ[プラン名]画像">
          </div>
          <p class="serif">着付け</p>
        </li>
        <li>
          <div class="img-wrap">
            <img src="<?php echo $wp_url ?>/lib/images/plan/content_01.png" alt="甲冑体験studioかすみ[プラン名]画像">
          </div>
          <p class="serif">着付け</p>
        </li>
        <li>
          <div class="img-wrap">
            <img src="<?php echo $wp_url ?>/lib/images/plan/content_01.png" alt="甲冑体験studioかすみ[プラン名]画像">
          </div>
          <p class="serif">着付け</p>
        </li>
        <li>
          <div class="img-wrap">
            <img src="<?php echo $wp_url ?>/lib/images/plan/content_01.png" alt="甲冑体験studioかすみ[プラン名]画像">
          </div>
          <p class="serif">着付け</p>
        </li>
        <li>
          <div class="img-wrap">
            <img src="<?php echo $wp_url ?>/lib/images/plan/content_01.png" alt="甲冑体験studioかすみ[プラン名]画像">
          </div>
          <p class="serif">着付け</p>
        </li>
      </ul>
    </div>
    <div class="option">
      <ul class="flex">
        <li>
          <div class="img-wrap">
            <img src="<?php echo $wp_url ?>/lib/images/plan/content_01.png" alt="甲冑体験studioかすみオプション画像">
          </div>
          <div class="txt-wrap">
            <p>オプション名</p>
            <p class="eng">¥00,000</p>
          </div>
        </li>
        <li>
          <div class="img-wrap">
            <img src="<?php echo $wp_url ?>/lib/images/plan/content_02.png" alt="甲冑体験studioかすみオプション画像">
          </div>
          <div class="txt-wrap">
            <p>オプション名</p>
            <p class="eng">¥00,000</p>
          </div>
        </li>
        <li>
          <div class="img-wrap">
            <img src="<?php echo $wp_url ?>/lib/images/plan/content_03.png" alt="甲冑体験studioかすみオプション画像">
          </div>
          <div class="txt-wrap">
            <p>オプション名</p>
            <p class="eng">¥00,000</p>
          </div>
        </li>
        <li>
          <div class="img-wrap">
            <img src="<?php echo $wp_url ?>/lib/images/plan/content_04.png" alt="甲冑体験studioかすみオプション画像">
          </div>
          <div class="txt-wrap">
            <p>オプション名</p>
            <p class="eng">¥00,000</p>
          </div>
        </li>
      </ul>
    </div>
  </div>
</section>

<?php get_footer();
