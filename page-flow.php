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

<section id="plan" class="wrap">
  <div class="sec">
  </div>
</section>

<?php get_footer();
