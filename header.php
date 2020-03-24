<?php
$home = esc_url(home_url());
$wp_url = get_template_directory_uri(); ?>
<!DOCTYPE HTML>
<html lang="ja">

<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width,initial-scale=1.0">
<link rel="stylesheet" href="<?php echo $wp_url ?>/lib/css/jquery.fatNav.min.css">
<link rel="stylesheet" href="<?php echo $wp_url ?>/lib/css/slick.css"/>
<link rel="stylesheet" href="<?php echo $wp_url ?>/lib/css/slick-theme.css"/>
<link rel="stylesheet" href="<?php echo $wp_url ?>/lib/css/header.css">
<link rel="stylesheet" href="<?php echo $wp_url ?>/lib/css/footer.css">
<link rel="stylesheet" href="<?php echo $wp_url ?>/lib/css/common.css">
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

<!-- ヘッダー -->
<header>
  <div class="img-wrap">
    <img src="<?php echo $wp_url ?>/lib/images/common/logo.png" alt="タイトルがはいります">
  </div>
  <div class="fix-btn">
    <a href="https://kyoshin-korekara.etudes.jp/jp/top/dashboard" target="_blank"><img src="<?php echo $wp_url ?>/lib/images/header/fix_btn.png" alt="今すぐ受講する"></a>
  </div>
</header>
<!-- ヘッダー終了 -->

<!-- メインコンテンツ -->
<main>
  <?php if (is_home() || is_front_page()): ?>
  <div id="mv">
  </div>
  <!-- スマホヘッダー -->
  <div id="sp-header">
    <div class="fat-nav">
      <div class="fat-nav__wrapper">
        <nav class="gnav">
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
<?php else: ?>

<?php endif; ?>
