<?php
$home = esc_url(home_url());
$wp_url = get_template_directory_uri();
get_header(); ?>

<section class="wrap">
  <div class="sec">
    <img src="<?php echo $wp_url ?>/lib/images/top/about.png" alt="">
    <div class="txt-wrap">
      <h2>コンセプト内容が<br>入ります</h2>
      <p>サンプルテキストサンプルテキストサンプルテキストサンプルテキストサンプルテキストサンプルテキストサンプルテキストサンプルテキストサンプルテキストサンプルテキストサンプルテキストサンプルテキスト</p>
    </div>
  </div>
</section>

<section class="wrap">
  <div class="sec">
    <div class="flex">
      <div class="img-wrap">
        <img src="<?php echo $wp_url ?>/lib/images/top/plan_01_01.png" alt="プラン画像">
      </div>
      <div class="img-wrap">
        <img src="<?php echo $wp_url ?>/lib/images/top/plan_01_02.png" alt="プラン画像">
      </div>
      <div class="txt-wrap">
        <h2>武将プラン<span>busho plan</span></h2>
        <p class="price">¥10,000~</p>
        <p>サンプルテキストサンプルテキストサンプルテキストサンプルテキストサンプルテキストサンプルテキストサンプルテキストサンプルテキスト</p>
      </div>
    </div>
    <div class="flex">
      <div class="img-wrap">
        <img src="<?php echo $wp_url ?>/lib/images/top/plan_02_01.png" alt="プラン画像">
      </div>
      <div class="img-wrap">
        <img src="<?php echo $wp_url ?>/lib/images/top/plan_02_02.png" alt="プラン画像">
      </div>
      <div class="txt-wrap">
        <h2>武将プラン<span>busho plan</span></h2>
        <p class="price">¥10,000~</p>
        <p>サンプルテキストサンプルテキストサンプルテキストサンプルテキストサンプルテキストサンプルテキストサンプルテキストサンプルテキスト</p>
      </div>
    </div>
  </div>
</section>

<?php get_footer();
