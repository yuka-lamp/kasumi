<?php
$home = esc_url(home_url());
$wp_url = get_template_directory_uri();
get_header(); ?>

<section id="contact-form">
  <div class="sec">
    <div class="wrap">
    <?php echo do_shortcode( '[contact-form-7 id="105" title="コンタクトフォーム 1"]' ); ?>
    </div>
  </div>
</section>

<?php get_footer();
