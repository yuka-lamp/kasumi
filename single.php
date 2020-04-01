<?php
$home = esc_url(home_url());
$wp_url = get_template_directory_uri();
get_header(); ?>

<?php if (have_posts()): while (have_posts()):the_post(); ?>
<article id="single" class="post-content sec">
<div class="wrap">
<h2 class="postttl"><?php the_title(); ?></h2>
<time datetime="<?php the_modified_date('Y.m.d') ?>"><?php the_modified_date('Y.m.d') ?></time>
<?php set_sns(get_the_ID()) ?>
<figure class="thumbnail">
<?php if (has_post_thumbnail()):
echo get_the_post_thumbnail($post->ID, 'large', array('alt'=>trim(get_the_title()))); ?>
<?php endif; ?>
</figure>
<div class="contents">
<?php the_content(); ?>
</div>
</div>
</article>
<?php endwhile; endif; ?>

<?php get_footer();
