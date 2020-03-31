<?php
$home = esc_url(home_url());
$wp_url = get_template_directory_uri();
get_header(); ?>

<section id="sub-about" class="wrap">
  <div class="sec pc-flex align-center">
    <div class="txt-wrap">
      <h2 class="serif"><span>特別な体験を</span><span>甲冑体験studioかすみで</span></h2>
      <p>サンプルテキストサンプルテキストサンプルテキストサンプルテキストサンプルテキストサンプルテキストサンプルテキストサンプルテキストサンプルテキストサンプルテキストサンプルテキストサンプルテキストサンプルテキストサンプルテキストサンプルテキストサンプルテキスト</p>
    </div>
    <div class="img-wrap">
      <img src="<?php echo $wp_url ?>/lib/images/flow/about.png" alt="甲冑体験studioかすみプラン画像">
    </div>
  </div>
</section>

<section id="flow-intro" class="wrap">
  <div class="sec">
    <ul>
      <li class="pc-flex align-center">
        <div class="img-wrap">
          <img src="<?php echo $wp_url ?>/lib/images/flow/about.png" alt="甲冑体験studioかすみ体験の流れ">
        </div>
        <div class="txt-wrap">
          <h3 class="serif">Webまたはお電話からご予約</h3>
          <p>花魁体験studio 雅ではお電話だけでなくWEBでもご予約を受け付けております。お客様の人数、ご希望のプランをご入力いただきどこでも簡単にご予約いただけます。</p>
        </div>
      </li>
      <li class="pc-flex align-center">
        <div class="img-wrap">
          <img src="<?php echo $wp_url ?>/lib/images/flow/about.png" alt="甲冑体験studioかすみ体験の流れ">
        </div>
        <div class="txt-wrap">
          <h3 class="serif">ご来店</h3>
          <p>ご予約いただいた日時に、京阪祇園四条駅から徒歩10分の店舗までお越しください。 <a href="<?php echo $home ?>#access">アクセスを確認</a> </p>
        </div>
      </li>
      <li class="pc-flex align-center">
        <div class="img-wrap">
          <img src="<?php echo $wp_url ?>/lib/images/flow/about.png" alt="甲冑体験studioかすみ体験の流れ">
        </div>
        <div class="txt-wrap">
          <h3 class="serif">撮影準備</h3>
          <p>花魁体験studio 雅ではお電話だけでなくWEBでもご予約を受け付けております。お客様の人数、ご希望のプランをご入力いただきどこでも簡単にご予約いただけます。</p>
        </div>
      </li>
      <li class="pc-flex align-center">
        <div class="img-wrap">
          <img src="<?php echo $wp_url ?>/lib/images/flow/about.png" alt="甲冑体験studioかすみ体験の流れ">
        </div>
        <div class="txt-wrap">
          <h3 class="serif">撮影開始</h3>
          <p>全ての準備が整ったら、いよいよ撮影開始です！<br>お部屋にて、打掛を選んでいただいて上に羽織った状態で撮影開始です。プロのカメラマンによる撮影がございます。</p>
        </div>
      </li>
      <li class="pc-flex align-center">
        <div class="img-wrap">
          <img src="<?php echo $wp_url ?>/lib/images/flow/about.png" alt="甲冑体験studioかすみ体験の流れ">
        </div>
        <div class="txt-wrap">
          <h3 class="serif">撮影完了・お支払い</h3>
          <p>撮影が完了しましたら、お着物から着替えていただきます。メイクを落とし、ヘアも下ろすことができるのでお帰りの身支度を整えることができます。お帰りの準備が整いましたら、受付にてお支払いをしていただき終了となります。</p>
        </div>
      </li>
    </ul>
  </div>
</section>

<?php get_footer();
