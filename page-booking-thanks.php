<?php
ini_set('display_errors', 0);
$home = esc_url(home_url());
$wp_url = get_template_directory_uri();
get_header(); ?>

<section class="sec">
  <div class="wrap txt-c">
    <h2 class="gold">予約完了</h2>
    <p>自動返信メールをもって<br class="sp-only">受付完了とさせていただきます。<br>ご予約内容に変更等がありましたら、<br class="sp-only">お手数ですがお電話にてお問い合わせください。</p>
    <div class="btn01">
      <a href="<?php echo $home ?>">トップページへ戻る</a>
    </div>
  </div>
</section>

<?php get_footer();
