$(function(){
  $("ul.blog-menues li").hover(function(){
    $("ul.sub-menu:not(:animated)", this).show();
  }, function(){
    $("ul.sub-menu",this).hide();
  });
});


$( document ).ready(function() {

$( ".cross" ).hide();
$( ".hamburger-menu" ).hide();
$(".hamburger-sub-menues").hide();
$( ".hamburger" ).click(function() {
$( ".hamburger-menu" ).slideToggle( function() {
$( ".hamburger" ).hide();
$( ".cross" ).show();
});
});

$( ".cross" ).click(function() {
$( ".hamburger-menu" ).slideToggle( function() {
$( ".cross" ).hide();
$( ".hamburger" ).show();
$('.hamburger-sub-menues').slideUp();
$('.hamburger-main-menues').find('span').html('<i class="fa fa-caret-down" aria-hidden="true"></i>');
});
});


// hamberger-main-menuesの中のliがクリックされたら
$('.hamburger-main-menues li').click(function(){
// 実際にクリックされた('.hamburger-main-menues li')要素の次にある('.hamburger-sub-menues')をスライドとぐる
	$(this).next('.hamburger-sub-menues').slideToggle();
// 実際にクリックされなかった('.hamburger-main-menues li')要素の次にある('.hamburger-sub-menues')をスライドあっぷる
	$('.hamburger-main-menues li').not($(this)).next('.hamburger-sub-menues').slideUp();

// 実際にクリックされた('.hamburger-main-menues li')要素の次にある('span')を上向きにする
  $(this).find('span').html('<i class="fa fa-caret-up" aria-hidden="true"></i>');

// もしクラスが('.open-menu')だったら
  if($(this).find('span').hasClass('open-menu')){
// 実際にクリックされた('.hamburger-main-menues li')要素の次にある('span')を下向きにする
    $(this).find('span').html('<i class="fa fa-caret-down" aria-hidden="true"></i>');
// open-menuクラスを削除
    $(this).find('span').removeClass('open-menu');
// もしクラスが('.open-menu')じゃなかったら
  }else{
// 実際にクリックされた('.hamburger-main-menues li')要素の次にある('span')を上向きにする
    $(this).find('span').html('<i class="fa fa-caret-up" aria-hidden="true"></i>');
// open-menuクラスを追加
    $(this).find('span').addClass('open-menu');
  }

// 実際にクリックされなかった('.hamburger-main-menues li')要素の次にある('span')を下向きにする
  $('.hamburger-main-menues li').not($(this)).find('span').html('<i class="fa fa-caret-down" aria-hidden="true"></i>');
// 実際にクリックされなかった('.hamburger-main-menues li')要素の次にある('span')のクラスを消す
  $('.hamburger-main-menues li').not($(this)).find('span').removeClass('open-menu');
 });

return false;

});




  $(function(){
     // #で始まるアンカーをクリックした場合に処理
     $('#natsuo-button').click(function() {
       var headerHeight = 75;
        // スクロールの速度
        var speed = 700; // ミリ秒
        // アンカーの値取得
        var href= $(this).attr("href");
        // 移動先を取得
        var target = $(href == "#" || href == "" ? 'html' : href);
        // 移動先を数値で取得
        var position = target.offset().top-headerHeight;
        // スムーススクロール
        $('body,html').animate({scrollTop:position}, speed, 'swing');
        return false;
     });
  });
