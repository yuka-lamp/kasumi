<?php
$home = esc_url(home_url());
$wp_url = get_template_directory_uri();
get_header(); ?>
<section id="gallery-list" class="sec">
<div class="wrap">
<ul>
<?php if (have_posts()): while (have_posts()):the_post(); ?>
<li>
<div class="img-wrap">
  <img src="<?php echo the_field( 'img' ); ?>" alt="<?php echo the_field( 'plan' ); ?>">

</div>
<div class="txt-wrap">
  <div>
    <p class="left">プラン名</p>
    <p class="right"><?php echo the_field( 'plan' ); ?></p>
  </div>
  <div>
    <p class="left">金額</p>
    <p class="right"><?php echo the_field( 'price' ); ?>円</p>
  </div>
  <div>
    <p class="left">オプション</p>
    <p class="right"><?php echo the_field( 'option' ); ?></p>
  </div>
</div>
</li>
<?php endwhile; endif; ?>
</ul>
<?php if(function_exists('wp_pagenavi')) { wp_pagenavi(); } ?>
</div>
</section>
<?php get_footer();
