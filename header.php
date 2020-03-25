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
<section id="mv" class="flex">
  <div class="left">
    <div class="content">
      <div class="img-wrap">
        <img class="logo" src="<?php echo $wp_url ?>/lib/images/common/logo_01.png" alt="<?php bloginfo( 'name' ); ?>">
      </div>
      <div class="copy">
        <p class="serif">キ<br>ャ<br>ッ<br>チ<br>コ<br>ピ<br>ー<br>が<br>入<br>り<br>ま<br>す<br>。</p>
        <p class="serif">キ<br>ャ<br>ッ<br>チ<br>コ<br>ピ<br>ー<br>が<br>入<br>り<br>ま<br>す<br>。</p>
      </div>
      <div class="tel-btn">
        <a href="tel:000-0000-0000"><img src="<?php echo $wp_url ?>/lib/images/common/tel_01.png" alt="甲冑体験かすみの電話番号"></a>
      </div>
    </div>
    <div class="booking-btn">
      <a class="serif" href="#">空き状況を確認する</a>
    </div>
  </div>
  <div class="bg-slider"></div>
</section>
<!-- トップページメインビジュアル終了 -->

<?php else: ?>

<!-- 下層ページメインビジュアル -->
<section id="submv">
    <div class="">
      <p><?php echo $slug; ?></p>
      <h2 class=""><?php echo get_the_title(); ?></h2>
    </div>
    <div class="img-wrap">
      <img class="logo" src="<?php echo $wp_url ?>/lib/images/common/logo_02.png" alt="<?php bloginfo( 'name' ); ?>">
    </div>
    <div class="img-wrap">
      <a href="tel:000-0000-0000"><img src="<?php echo $wp_url ?>/lib/images/common/tel_02.png" alt="甲冑体験かすみの電話番号"></a>
    </div>
</section>
<!-- 下層ページメインビジュアル終了 -->

<?php endif; ?>

<main>
<!-- メインコンテンツ -->
<header>
    <!-- スマホヘッダー -->
    <div class="fat-nav">
      <div class="fat-nav__wrapper">
        <nav id="sp-header" class="gnav">
          <div class="gnav__wrap">
            <ul class="gnav__menu">
              <li><a href="<?php echo $home ?>/consept">consept<span>コンセプト</span></a></li>
              <li><a href="<?php echo $home ?>/plan">plan<span>プラン</span></a></li>
              <li><a href="<?php echo $home ?>/flow">flow<span>体験の流れ</span></a></li>
              <li><a href="<?php echo $home ?>/gallery">gallery<span>フォトギャラリー</span></a></li>
              <li><a href="<?php echo $home ?>/faq">faq<span>よくあるご質問</span></a></li>
              <li><a href="<?php echo $home ?>/blog">blog<span>ブログ</span></a></li>
            </ul>
          </div>
        </nav>
      </div>
    </div>
    <!-- スマホヘッダー終了 -->
    <!-- PCヘッダー -->
    <nav id="pc-header" class="flex pc-only">
      <div class="content">
        <ul>
          <li><a href="<?php echo $home ?>/consept">consept<span>コンセプト</span></a></li>
          <li><a href="<?php echo $home ?>/plan">plan<span>プラン</span></a></li>
          <li><a href="<?php echo $home ?>/flow">flow<span>体験の流れ</span></a></li>
          <li><a href="<?php echo $home ?>/gallery">gallery<span>フォトギャラリー</span></a></li>
          <li><a href="<?php echo $home ?>/faq">faq<span>よくあるご質問</span></a></li>
          <li><a href="<?php echo $home ?>/blog">blog<span>ブログ</span></a></li>
        </ul>
      </div>
    </nav>
    <!-- PCヘッダー終了 -->
    <div class="fix-btn">
      <a href="#"><img src="<?php echo $wp_url ?>/lib/images/common/booking_btn.png" alt="空き情報を確認"></a>
    </div>
</header>
