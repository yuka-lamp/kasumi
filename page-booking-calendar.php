<?php
$home = esc_url(home_url());
$wp_url = get_template_directory_uri();
get_header(); ?>

<section class="sec">
  <div class="wrap">
    <?php echo do_shortcode('[monthly_calendar id="43"]'); ?>
  </div>
</section>

<?php get_footer();
