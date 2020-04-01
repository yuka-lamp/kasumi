<?php
$home = esc_url(home_url());
$wp_url = get_template_directory_uri();
get_header(); ?>

<section id="about" class="wrap">
  <div class="sec">
    <div class="contant">
      <div class="img-wrap">
        <img src="<?php echo $wp_url ?>/lib/images/top/about.png" alt="">
      </div>
      <div class="txt-wrap">
        <h2 class="serif">京都で戦国甲冑体験</h2>
        <p>「甲冑体験studioかすみ」では重量感のある本格的な鎧兜から女性やお子様にも装着していただきやすい軽量な鎧兜をご用意しております。<br>戦国時代にタイムトリップしたような甲冑体験から現代風アレンジまで「かすみ」ならではの甲冑体験をお楽しみください。</p>
      </div>
    </div>
  </div>
</section>

<section id="plan" class="wrap">
  <div class="sec">
    <div class="content">
      <a class="flex" href="<?php echo $home ?>/plan#01">
        <div class="img-wrap">
          <img src="<?php echo $wp_url ?>/lib/images/top/plan_01_01.png" alt="プラン画像">
        </div>
        <div class="img-wrap">
          <img src="<?php echo $wp_url ?>/lib/images/top/plan_01_02.png" alt="プラン画像">
        </div>
        <div class="txt-wrap">
          <h2 class="serif">武将プラン<span class="eng upper">busho</span></h2>
          <p class="price serif">¥4,500</p>
          <p>本格的な甲冑を身に纏って戦国時代にタイムトリップ鎧兜の重量感を体験。凛々しくかっこいい武将に変身できるプランです。<br>甲冑装備/メイク/背景3種類カメラマン撮影</p>
        </div>
      </a>
      <div class="btn01 sp-only">
        <a class="eng" href="<?php echo $home ?>/plan#busho">read more</a>
      </div>
    </div>
    <div class="content">
      <a  class="flex" href="<?php echo $home ?>/plan#02">
        <div class="img-wrap">
          <img src="<?php echo $wp_url ?>/lib/images/top/plan_02_01.png" alt="プラン画像">
        </div>
        <div class="img-wrap">
          <img src="<?php echo $wp_url ?>/lib/images/top/plan_02_02.png" alt="プラン画像">
        </div>
        <div class="txt-wrap">
          <h2 class="serif">女武将プラン<span class="eng upper">Female busho</span></h2>
          <p class="price serif">¥4,500~</p>
          <p>軽量の鎧を装着しメイクやヘアウィッグなどで妖艶に艶やかに女性らしさのある現代風女武将に変身できるプランです。<br>甲冑装着/妖艶メイク/背景3種類カメラマン撮影</p>
        </div>
      </a>
      <div class="btn01 sp-only">
        <a class="eng" href="<?php echo $home ?>/plan#busho-f">read more</a>
      </div>
    </div>
  </div>
</section>

<section id="gallery">
    <div class="sec">
      <a href="<?php echo $home ?>/photo">
      <?php
      $arg = array(
        'posts_per_page' => 5,
        'orderby' => 'date',
        'order' => 'DESC',
        'post_type' => 'photo',
      );
      $posts = get_posts($arg);
      if ($posts): ?>
      <ul class="slider">
      <?php foreach ($posts as $post): setup_postdata($post);?>
        <li class="img-wrap">
          <img src="<?php echo the_field( 'img' ); ?>" alt="<?php echo $t; ?>">
        </li>
      <?php endforeach; wp_reset_postdata(); ?>
      </ul>
      <?php endif; ?>
      </a>
    </div>
  </div>
</section>

<section id="flow" class="wrap">
  <div class="sec">
    <div class="img-wrap">
      <img src="<?php echo $wp_url ?>/lib/images/top/flow.png" alt="">
    </div>
    <div class="txt-wrap">
      <h3 class="eng upper">flow</h3>
      <p>「かすみ」でご予約いただいてから体験完了までの流れをご紹介いたします。Webからの予約は必要情報をご入力いただくだけなので、簡単にご予約いただけます。お電話からでももちろん受け付けておりますので、ご興味がある方はぜひお気軽にお問い合わせください。</p>
      <ul>
        <li>
          <div class="img-wrap">
            <img src="<?php echo $wp_url ?>/lib/images/top/num_01.png" alt="">
          </div>
          <p class="serif">Webまたはお電話からご予約</p>
        </li>
        <li>
          <div class="img-wrap">
            <img src="<?php echo $wp_url ?>/lib/images/top/num_02.png" alt="">
          </div>
          <p class="serif">ご来店 / 撮影準備</p>
        </li>
        <li>
          <div class="img-wrap">
            <img src="<?php echo $wp_url ?>/lib/images/top/num_03.png" alt="">
          </div>
          <p class="serif">撮影開始！</p>
        </li>
      </ul>
      <div class="btn01">
        <a class="eng" href="<?php echo $home ?>/flow">read more</a>
      </div>
    </div>
  </div>
</section>

<section id="blog" class="wrap">
  <div class="sec">
    <h2 class="eng upper">blog</h2>
    <p>ブログ</p>
      <?php
      $arg = array(
        'posts_per_page' => 3,
        'orderby' => 'date',
        'order' => 'DESC',
      );
      $posts = get_posts($arg);
      if ($posts): ?>
      <ul class="pc-flex">
      <?php foreach ($posts as $post): setup_postdata($post);
      $t = get_the_title();
      if (mb_strlen($t, 'UTF-8') > 28) {
          $t = mb_substr($t, 0, 28, 'UTF-8').'…';
      }
      $i_l = get_the_post_thumbnail_url(get_the_ID(), 'medium');
      ?>
        <li>
          <a href="<?php echo get_permalink(); ?>">
            <div class="img-wrap">
              <img src="<?php echo $i_l; ?>" alt="<?php echo $t; ?>">
            </div>
            <p class=""><?php echo $t; ?></p>
            <p class="eng"><?php echo get_the_date(); ?></p>
          </a>
        </li>
      <?php endforeach; wp_reset_postdata(); ?>
      </ul>
      <?php endif; ?>
      <div class="btn01">
        <a class="eng" href="<?php echo $home ?>/category/blog">read more
        </a>
      </div>
  </div>
</section>

<section id="access">
  <div class="sec">
    <h2 class="eng upper txt-c">access</h2>
    <p class="txt-c">アクセス</p>
    <div class="pc-flex mapwrap">
      <div class="map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3268.2903010379387!2d135.77534271524036!3d34.999437480358836!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x600108c5b032c3d5%3A0xdad7b1dd828994a7!2z6Iqx6a2B5L2T6aiTU3R1ZGlv6ZuFIOa4heawtOmrmOWPsOWvuuW6l3Byb2R1Y2UgYnkg44GC44KJ44KM!5e0!3m2!1sja!2sjp!4v1585211536827!5m2!1sja!2sjp" width="100%" height="100%" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
      </div>
      <div class="content">
        <div class="txt-wrap">
          <h3 class="serif">〇〇店 本店</h3>
          <p>〒000-0000<br>京都市下京区東塩小路町736番地3階<br>TEL 000-0000-0000<br>営業時間 10:00~18:00<br>※月曜定休</p>
        </div>
      </div>
    </div>
    <div class="wrap">
      <div>
        <ul class="pc-flex train">
          <li>
            <div class="border-g">
              <h3 class="serif">京都市営地下鉄でお越しの方</h3>
              <p>〇〇駅から〇〇分</p>
            </div>
          </li>
          <li>
            <div class="border-g">
              <h3 class="serif">京阪電車でお越しの方</h3>
              <p>〇〇駅から〇〇分</p>
            </div>
          </li>
          <li>
            <div class="border-g">
              <h3 class="serif">京都市営バスでお越しの方</h3>
              <p>〇〇バス停から〇〇分</p>
            </div>
          </li>
        </ul>
      </div>
    </div>
  </div>
</section>


<?php get_footer();
