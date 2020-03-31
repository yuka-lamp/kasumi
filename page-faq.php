<?php
$home = esc_url(home_url());
$wp_url = get_template_directory_uri();
get_header(); ?>

<section id="faq" class="sec">
  <div class="wrap">
    <div class="">
      <div class="table">
        <?php
        $arg = array(
          'posts_per_page' => -1,
          'orderby' => 'date',
          'order' => 'DESC',
          'post_type' => 'qa',
        );
        $posts = get_posts($arg);
        if ($posts): ?>
        <?php foreach ($posts as $post): setup_postdata($post);
        ?>
        <dl class="ac">
          <dt class="serif"><?php the_field( 'q' ); ?></dt>
          <dd><?php the_field( 'a' ); ?></dd>
        </dl>
      <?php endforeach; ?>
      <?php endif; wp_reset_postdata(); ?>
      </div>
    </div>
</section>

<?php get_footer();
