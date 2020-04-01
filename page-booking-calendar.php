<?php
$home = esc_url(home_url());
$wp_url = get_template_directory_uri();
get_header(); ?>

<section id="booking-c"class="sec">
  <div class="wrap">
    <div class="booking-txt">
      <h3 class="serif">現在の空き状況</h3>
      <p>甲冑体験をご予約されたい方、空き状況のご確認をされたい方はこちらのページからどうぞ。<br>お電話からのご予約やお問い合わせ受付ももちろん承っておりますので、お電話からもお気軽にお問い合わせください。</p>
    </div>
    <?php echo do_shortcode('[monthly_calendar id="43"]'); ?>
  </div>
</section>

<?php get_footer();
