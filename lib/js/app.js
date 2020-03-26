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
