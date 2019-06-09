<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

?><!DOCTYPE html>
<html lang="Ja" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
     <!-- サイトの説明文を追加している -->
     <meta name="description" content="FinTechに特化した記事をなつをが発信するブログです。金融とテクノロジーについてあまり馴染みのない人にとっても、わかりやすい記事になるように心がけて発信していきます。">
     <!-- 著者は私ですという記述 -->
     <meta name="author" content="Daiki Natsui">
     <!-- 検索のときのキーワードを設定 -->
     <meta name="keywords" content="FinTech,FINTECH,独立,起業,ブロックチェーン,仮想通貨,なつを,投資,ビジネス,プログラミング,生き方,フィンテック,金融×IT,IT×金融,テクノロジー,AI">
     <!-- IEに最新の挙動をさせるために書きます。  -->
     <meta http-equiv="X-UA-Compatible:" content="ie=edge">
     <!-- スタイルシートの読み込み -->
		 <link rel="stylesheet" href="<?php bloginfo( 'stylesheet_url' ); ?>">
     <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">
     <!-- FontAwesome読み込み -->
     <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
     <!-- GoogleFonts読み込み -->
     <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <!-- <title>FinTech Life</title> -->
		<title><?php wp_title('|', true, 'right'); ?><?php bloginfo('Fintech Life'); ?></title>
		<?php wp_head(); ?>
  </head>
  <body>
    <div class="container">
      <header>
        <div class="header-left">
          <a class="blog-title" href="index.html"><h1>FinTech Life</h1></a>
        </div>
        <!-- header-left終了 -->

        <!-- hambuegerのfontawesome -->
        <!-- <span class="fa fa-bars menu-icon"></span> -->
        <!-- hamburgerの要素 -->
        <button class="hamburger">&#9776;</button>
        <button class="cross">&#735;</button>


        <div class="header-right">
          <ul class="blog-menues">
          <li class="blog-menu"><a href="">FinTech<span><i class="fa fa-caret-down" aria-hidden="true"></i></span></a>
            <ul class="sub-menu">
              <li><a href="">全記事</a></li>
              <li><a href="">サービス</a></li>
              <li><a href="">ニュース</a></li>
              <li><a href="">企業</a></li>
              <li><a href="">キャッシュレス</a></li>
              <li><a href="">仮想通貨</a></li>
              <li><a href="">ブロックチェーン</a></li>
            </ul>
          </li>

            <li class="blog-menu"><a href="">Finance<span><i class="fa fa-caret-down" aria-hidden="true"></i></span></a>
              <ul class="sub-menu">
              <li><a href="">全記事</a></li>
              <li><a href="">投資</a></li>
              <li><a href="">税金</a></li>
              <li><a href="">資金調達</a></li>
              <li><a href="">ビジネス</a></li>
              <li><a href="">起業・独立</a></li>
              <li><a href="">フリーランス</a></li>
              <li><a href="">ファイナンス</a></li>
              </ul>
            </li>

            <li class="blog-menu"><a href="">Technology<span><i class="fa fa-caret-down" aria-hidden="true"></i></span></a>
              <ul class="sub-menu">
              <li><a href="">全記事</a></li>
              <li><a href="">HTML&CSS</a></li>
              <li><a href="">JavaScript</a></li>
              <li><a href="">WordPress</a></li>
              <li><a href="">PHP</a></li>
              <li><a href="">AI</a></li>
              <li><a href="">IoT</a></li>
              <li><a href="">テクノロジー</a></li>
              </ul>
            </li>

            <li class="blog-menu"><a href="">Life<span><i class="fa fa-caret-down" aria-hidden="true"></i></span></a>
              <ul class="sub-menu">
                <li><a href="">全記事</a></li>
                <li><a href="">考え方</a></li>
                <li><a href="">健康</a></li>
                <li><a href="">本</a></li>
                <li><a href="">ライフ</a></li>
              </ul>
            </li>
            <li class="blog-menu last-menu"><a href="about.html">About</a></li>
          </ul>


        </div>
        <!-- header-right終了 -->
      </header>
      <!-- header終了 -->

	<?php

	/*
	 * If a regular post or page, and not the front page, show the featured image.
	 * Using get_queried_object_id() here since the $post global may not be set before a call to the_post().
	 */
	if ( ( is_single() || ( is_page() && ! twentyseventeen_is_frontpage() ) ) && has_post_thumbnail( get_queried_object_id() ) ) :
		echo '<div class="single-featured-image-header">';
		echo get_the_post_thumbnail( get_queried_object_id(), 'twentyseventeen-featured-image' );
		echo '</div><!-- .single-featured-image-header -->';
	endif;
	?>

	<div class="site-content-contain">
		<div id="content" class="site-content">
