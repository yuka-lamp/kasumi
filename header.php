<?php
$home = esc_url(home_url());
$wp_url = get_template_directory_uri(); ?>
<!DOCTYPE HTML>
<html lang="ja">

<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width,initial-scale=1.0">
<link href="https://fonts.googleapis.com/css?family=Libre+Baskerville|Noto+Sans+JP:400,700|Noto+Serif+JP:400,700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="<?php echo $wp_url ?>/lib/css/jquery.fatNav.min.css">
<link rel="stylesheet" href="<?php echo $wp_url ?>/lib/css/slick.css"/>
<link rel="stylesheet" href="<?php echo $wp_url ?>/lib/css/slick-theme.css"/>
<link rel="stylesheet" href="<?php echo $wp_url ?>/lib/css/vegas.min.css">
<link rel="stylesheet" href="<?php echo $wp_url ?>/lib/css/common.css">
<link rel="stylesheet" href="<?php echo $wp_url ?>/lib/css/header.css">
<link rel="stylesheet" href="<?php echo $wp_url ?>/lib/css/footer.css">
<link rel="stylesheet" href="<?php echo $wp_url ?>/lib/css/mv.css">
<link rel="stylesheet" href="<?php echo $wp_url ?>/lib/css/sub-mv.css">
<link rel="stylesheet" href="<?php echo $wp_url ?>/lib/css/sub-about.css">
<link rel="stylesheet" href="<?php echo $wp_url ?>/lib/css/top.css">
<link rel="stylesheet" href="<?php echo $wp_url ?>/lib/css/concept.css">
<link rel="stylesheet" href="<?php echo $wp_url ?>/lib/css/plan.css">
<link rel="stylesheet" href="<?php echo $wp_url ?>/lib/css/flow.css">
<?php wp_head(); ?>
<?php if (!is_user_logged_in()): ?>
<!-- ここにGAトラッキングタグ -->
<?php endif; ?>
</head>

<body>

<?php
global $wp_query;
$post_obj = $wp_query->get_queried_object();
$slug = $post_obj->post_name;
?>

<?php if (is_home() || is_front_page()): ?>

<!-- トップページメインビジュアル -->
<section id="mv">
  <div class="bg-slider"></div>
  <div class="left">
    <div class="content">
      <div class="img-wrap">
        <a href="<?php echo $wp_url ?>">
        <img class="logo" src="<?php echo $wp_url ?>/lib/images/common/logo_01.png" alt="<?php bloginfo( 'name' ); ?>">
        </a>
      </div>
      <div class="copy">
        <p class="serif">キ<br>ャ<br>ッ<br>チ<br>コ<br>ピ<br>ー<br>が<br>入<br>り<br>ま<br>す<br>。</p>
        <p class="serif">キ<br>ャ<br>ッ<br>チ<br>コ<br>ピ<br>ー<br>が<br>入<br>り<br>ま<br>す<br>。</p>
      </div>
      <div class="tel-btn">
        <a href="tel:000-0000-0000"><img src="<?php echo $wp_url ?>/lib/images/common/tel_01.png" alt="甲冑体験studioかすみの電話番号"></a>
      </div>
    </div>
    <div class="booking-btn">
      <a class="serif" href="#">空き状況を確認する</a>
    </div>
  </div>
  <div class="top-news flex">
    <ul class="news-slider">
    <?php
    $args = array(
      'posts_per_page' => 3,
    );
    $posts = get_posts($args);
    foreach ($posts as $post):
    setup_postdata($post); ?>
    <li class="flex">
      <a href="<?php the_permalink(); ?>">
      <time datetime="<?php the_time('Y-m-d'); ?>"><?php the_time('Y.m.d'); ?></time><p><?php
      if(mb_strlen(get_the_title(), 'UTF-8')>11){
        $title= mb_substr(get_the_title(), 0, 11, 'UTF-8');
        echo $title.'…';
      }else{
        echo get_the_title();
      }
      ?>
      </a>
    </li>
    <?php
    endforeach;
    wp_reset_postdata(); ?>
    </ul>
  </div>
</section>
<!-- トップページメインビジュアル終了 -->

<?php else: ?>

<!-- 下層ページメインビジュアル -->
<section id="submv" class="<?php echo $slug; ?>">
    <div class="bg flex align-center">
      <div class="content">
        <p class="eng"><?php echo $slug; ?></p>
        <h2 class="serif"><?php echo get_the_title(); ?></h2>
      </div>
    </div>
    <div class="img-wrap">
      <a href="<?php echo $wp_url ?>">
      <img class="logo" src="<?php echo $wp_url ?>/lib/images/common/logo_02.png" alt="<?php bloginfo( 'name' ); ?>">
      </a>
    </div>
    <div class="tel img-wrap">
      <a href="tel:000-0000-0000"><img src="<?php echo $wp_url ?>/lib/images/common/tel_02.png" alt="甲冑体験studioかすみの電話番号"></a>
    </div>
</section>
<!-- 下層ページメインビジュアル終了 -->

<?php endif; ?>

<main>
<!-- メインコンテンツ -->
<header id="header">
    <!-- スマホヘッダー -->
    <div id="sp-header">
      <div class="fat-nav">
      <div class="fat-nav__wrapper">
        <nav class="gnav">
          <div class="gnav__wrap">
            <ul class="gnav__menu">
              <li><a class="serif" href="<?php echo $home ?>/consept"><span class="eng">consept</span>コンセプト</a></li>
              <li><a class="serif" href="<?php echo $home ?>/plan"><span class="eng">plan</span>プラン</a></li>
              <li><a class="serif" href="<?php echo $home ?>/flow"><span class="eng">flow</span>体験の流れ</a></li>
              <li><a class="serif" href="<?php echo $home ?>/gallery"><span class="eng">gallery</span>フォトギャラリー</a></li>
              <li><a class="serif" href="<?php echo $home ?>/faq"><span class="eng">faq</span>よくあるご質問</a></li>
              <li><a class="serif" href="<?php echo $home ?>/blog"><span class="eng">blog</span>ブログ</a></li>
            </ul>
          </div>
        </nav>
      </div>
      </div>
    </div>
    <!-- スマホヘッダー終了 -->
    <!-- PCヘッダー -->
    <nav id="pc-header">
      <div class="content wrap">
        <ul class="flex">
          <li><a class="serif" href="<?php echo $home ?>/consept"><span class="eng">consept</span>コンセプト</a></li>
          <li><a class="serif" href="<?php echo $home ?>/plan"><span class="eng">plan</span>プラン</a></li>
          <li><a class="serif" href="<?php echo $home ?>/flow"><span class="eng">flow</span>体験の流れ</a></li>
          <li><a class="serif" href="<?php echo $home ?>/gallery"><span class="eng">gallery</span>フォトギャラリー</a></li>
          <li><a class="serif" href="<?php echo $home ?>/faq"><span class="eng">faq</span>よくあるご質問</a></li>
          <li><a class="serif" href="<?php echo $home ?>/blog"><span class="eng">blog</span>ブログ</a></li>
        </ul>
      </div>
    </nav>
    <!-- PCヘッダー終了 -->
    <div class="fix-btn">
      <a href="#"><img src="<?php echo $wp_url ?>/lib/images/common/booking_btn.png" alt="空き情報を確認"></a>
    </div>
</header>
