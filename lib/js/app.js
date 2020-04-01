//スマホナビゲーション
$(function() {
    $.fatNav();
});

// トップページスライドショー
$(function($) {
$('.bg-slider').vegas({
slides: [{
src: './wp-content/themes/kasumi/lib/images/mv/01.png'
},
{
src: './wp-content/themes/kasumi/lib/images/mv/02.png'
},
{
src: './wp-content/themes/kasumi/lib/images/mv/03.png'
}
],
animation: 'kenburns',
transition: 'fade',
delay: 10000,
animationDuration: 10000,
});
});

$(document).ready(function() {
  //トップページギャラリースライドショー
  $('.slider').slick({
    autoplay: true,
    autoplaySpeed: 0,
    dots: false,
    arrows: false,
    slidesToShow: 3,
    slidesToScroll: 1,
    cssEase: 'linear',
    speed: 10000,
    responsive: [{
      breakpoint: 768, //767px以下のサイズに適用
      settings: {
        slidesToShow: 1,
        speed: 15000,
      }
    }]
  });
  //トップページお知らせスライドショー
  $('.news-slider').slick({
    autoplay: true,
    arrows: false,
    autoplaySpeed: 5000,
    slidesToShow: 1,
    slidesToScroll: 1,
  });
  /*--よくあるご質問--*/
  $(".ac dt").on("click", function() {
    $(this).next().slideToggle();
  });
});
