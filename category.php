<?php
$home = esc_url(home_url());
$wp_url = get_template_directory_uri();
get_header(); ?>
<section id="category" class="sec">
<div class="wrap">
<ul>
<?php if (have_posts()): while (have_posts()):the_post(); ?>
<li>
<a href="<?php the_permalink(); ?>">
<div class="img-wrap">
<figure class="icatch">
<?php the_post_thumbnail('medium', array('alt' => get_the_title())); ?>
</figure>
</div>
<div class="txt-wrap">
<time class="eng" datetime="<?php the_time('Y.m.d'); ?>"><?php the_time('Y.m.d'); //日付 ?></time>
<h3><?php the_title(); ?></h3>
</div>
</a>
</li>
<?php endwhile; endif; ?>
</ul>
<?php if(function_exists('wp_pagenavi')) { wp_pagenavi(); } ?>
</div>
</section>
<?php get_footer();
