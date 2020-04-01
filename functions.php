<?php

require_once('lib/func/setting.php');
require_once('lib/func/add-func.php');
require_once('lib/func/resources.php');

#アイキャッチ設定
add_theme_support('post-thumbnails');

#oembed消去
remove_action('wp_head', 'rest_output_link_wp_head');
remove_action('wp_head', 'wp_oembed_add_discovery_links');
remove_action('wp_head', 'wp_oembed_add_host_js');

#wp-json消去
remove_action('template_redirect', 'rest_output_link_header', 11);

#絵文字消去
remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('wp_print_styles', 'print_emoji_styles');

#外部エディター消去
remove_action('wp_head', 'rsd_link');
remove_action('wp_head', 'wlwmanifest_link');

#generator消去
remove_action('wp_head', 'wp_generator');

#短縮URL消去
remove_action('wp_head', 'wp_shortlink_wp_head');

// ソーシャルボタン
function set_sns($id)
{
    $ttl = get_the_title($id);
    $permalink = get_the_permalink($id);
    $source_html = <<< EOM
<div class="sns-btns clearfix">
<a class="btn-t" href="https://twitter.com/share" data-text="{$ttl}" data-url="{$permalink}" data-hashtags="株式会社ランプ" data-via="twitterdev" data-related="twitterapi,twitter" target="_blank"><i class="fab fa-twitter"></i></a>
<a class="btn-f" href="https://www.facebook.com/sharer.php?u={$permalink}" target="_blank"><i class="fab fa-facebook-f"></i></a>
<a class="btn-g" href="https://plus.google.com/share?url={$permalink}" target="_blank"><i class="fab fa-google-plus-g"></i></a>
<a class="btn-h" href="http://b.hatena.ne.jp/add?mode=confirm&url={$permalink}" target="_blank"><i class="fa fa-hatena"></i></a>
<a class="btn-p" href="http://getpocket.com/edit?url={$permalink}" target="_blank"><i class="fab fa-get-pocket"></i></a>
<a class="btn-l" href="http://line.naver.jp/R/msg/text/{$permalink}" target="_blank"><i class="fab fa-line"></i></a>
</div>
EOM;
    echo $source_html;
}
