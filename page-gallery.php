<?php
$home = esc_url(home_url());
$wp_url = get_template_directory_uri();
get_header(); ?>

<section id="gallery-list">
    <div class="sec">
      <a href="<?php echo $home ?>/gallery">
      <?php
      $arg = array(
        'posts_per_page' => 8,
        'orderby' => 'date',
        'order' => 'DESC',
        'post_type' => 'photo',
      );
      $posts = get_posts($arg);
      if ($posts): ?>
      <ul>
      <?php foreach ($posts as $post): setup_postdata($post);?>
        <li class="img-wrap">
          <img src="<?php echo the_field( 'img' ); ?>" alt="<?php echo $plan; ?>画像">
          <tr>
            <td class="ttl">料金</td>
            <td><?php echo the_field( 'price' ); ?>円</td>
          </tr>
          <tr>
            <td class="ttl">プラン名</td>
            <td><?php echo the_field( 'plan' ); ?></td>
          </tr>
          <tr>
            <td class="ttl">オプション</td>
            <td><?php echo the_field( 'option' ); ?></td>
          </tr>
        </li>
      <?php endforeach; wp_reset_postdata(); ?>
      </ul>
      <?php endif; ?>
      </a>
    </div>
  </div>
</section>

<?php get_footer();
