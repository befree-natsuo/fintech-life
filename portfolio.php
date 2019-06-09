<!DOCTYPE html>
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
     <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">
     <!-- FontAwesome読み込み -->
     <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
     <!-- GoogleFonts読み込み -->
     <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <title>FinTech Life</title>
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

      <div class="hamburger-menu">

        <ul class="hamburger-main-menues">
        <li class="hamburger-main-menu">FinTech<span><i class="fa fa-caret-down" aria-hidden="true"></i></span></li>
          <ul class="hamburger-sub-menues">
            <a class="hamburger-sub-menu" href=""><li>全記事</li></a>
            <a class="hamburger-sub-menu" href=""><li>サービス</li></a>
            <a class="hamburger-sub-menu" href=""><li>ニュース</li></a>
            <a class="hamburger-sub-menu" href=""><li>企業</li></a>
            <a class="hamburger-sub-menu" href=""><li>キャッシュレス</li></a>
            <a class="hamburger-sub-menu" href=""><li>仮想通貨</li></a>
            <a class="hamburger-sub-menu" href=""><li>ブロックチェーン</li></a>
          </ul>


          <li class="hamburger-main-menu">Finance<span><i class="fa fa-caret-down" aria-hidden="true"></i></span></li>
            <ul class="hamburger-sub-menues">
              <a class="hamburger-sub-menu" href=""><li>全記事</li></a>
              <a class="hamburger-sub-menu" href=""><li>投資</li></a>
              <a class="hamburger-sub-menu" href=""><li>税金</li></a>
              <a class="hamburger-sub-menu" href=""><li>資金調達</li></a>
              <a class="hamburger-sub-menu" href=""><li>ビジネス</li></a>
              <a class="hamburger-sub-menu" href=""><li>起業・独立</li></a>
              <a class="hamburger-sub-menu" href=""><li>フリーランス</li></a>
              <a class="hamburger-sub-menu" href=""><li>ファイナンス</li></a>
            </ul>


          <li class="hamburger-main-menu">Technology<span><i class="fa fa-caret-down" aria-hidden="true"></i></i></span></li>
            <ul class="hamburger-sub-menues">
              <a class="hamburger-sub-menu" href=""><li>全記事</li></a>
              <a class="hamburger-sub-menu" href=""><li>HTML&CSS</li></a>
              <a class="hamburger-sub-menu" href=""><li>JavaScript</li></a>
              <a class="hamburger-sub-menu" href=""><li>WordPress</li></a>
              <a class="hamburger-sub-menu" href=""><li>PHP</li></a>
              <a class="hamburger-sub-menu" href=""><li>AI</li></a>
              <a class="hamburger-sub-menu" href=""><li>IoT</li></a>
              <a class="hamburger-sub-menu" href=""><li>テクノロジー</li></a>
            </ul>


          <li class="hamburger-main-menu">Life<span><i class="fa fa-caret-down" aria-hidden="true"></i></i></span></li>
            <ul class="hamburger-sub-menues">
              <a class="hamburger-sub-menu" href=""><li>全記事</li></a>
              <a class="hamburger-sub-menu" href=""><li>考え方</li></a>
              <a class="hamburger-sub-menu" href=""><li>健康</li></a>
              <a class="hamburger-sub-menu" href=""><li>本</li></a>
              <a class="hamburger-sub-menu" href=""><li>ライフ</li></a>
            </ul>

              <a class="hamburger-main-menu" href="about.html"><li>About</li></a>

        </ul>

      </div>
      <!-- hamburger終了 -->

      <div class="portfolio-wrapper">
        <h1 class="portfolio-message">現在作成中</h1>
      </div>

      <footer>
        <div class="footer-wrapper">
          <div class="slogan">
            <h3>SITEMAP</h3>
          </div>
          <!-- <div class="footer-contents sns">
            <h4>SNS</h4>
            <i class="fab fa-twitter"></i>
            <i class="fab fa-facebook"></i>
            <i class="fab fa-instagram"></i>
            <p>2,019 viewers</p>
          </div> -->
          <div class="footer-contents links">
              <a href="#"><h4 class="sitemap-titles">FinTech</h4></a>
            <ul>
              <li class="sitemap"><a href="">サービス</a></li>
              <li class="sitemap"><a href="">ニュース</a></li>
              <li class="sitemap"><a href="">企業</a></li>
              <li class="sitemap"><a href="">キャッシュレス</a></li>
              <li class="sitemap"><a href="">仮想通貨</a></li>
              <li class="sitemap"><a href="">ブロックチェーン</a></li>
            </ul>
          </div>
          <div class="footer-contents links">
              <a href="#"><h4 class="sitemap-titles">Finance</h4></a>
              <ul>
                <li class="sitemap"><a href="">投資</a></li>
                <li class="sitemap"><a href="">税金</a></li>
                <li class="sitemap"><a href="">資金調達</a></li>
                <li class="sitemap"><a href="">ビジネス</a></li>
                <li class="sitemap"><a href="">起業・独立</a></li>
                <li class="sitemap"><a href="">フリーランス</a></li>
                <li class="sitemap"><a href="">ファイナンス</a></li>
              </ul>
          </div>
          <div class="footer-contents links">
              <a href="#"><h4 class="sitemap-titles">Technology</h4></a>
            <ul>
              <li class="sitemap"><a href="">HTML&CSS</a></li>
              <li class="sitemap"><a href="">JavaScript</a></li>
              <li class="sitemap"><a href="">WordPress</a></li>
              <li class="sitemap"><a href="">PHP</a></li>
              <li class="sitemap"><a href="">AI</a></li>
              <li class="sitemap"><a href="">IoT</a></li>
              <li class="sitemap"><a href="">テクノロジー</a></li>
            </ul>
          </div>
          <div class="footer-contents links">
              <a href="#"><h4 class="sitemap-titles">Life</h4></a>
              <ul>
                <li class="sitemap"><a href="">考え方</a></li>
                <li class="sitemap"><a href="">健康</a></li>
                <li class="sitemap"><a href="">本</a></li>
                <li class="sitemap"><a href="">ライフ</a></li>
              </ul>
          </div>
            <div class="footer-contents links">
              <h4>Menues</h4>
              <ul>
                <li class="sitemap"><a href="about.html">ABOUT</a></li>
                <li class="sitemap"><a href="portfolio.html">PORTFOLIO</a></li>
              </ul>
            </div>
            <div class="footer-contents links last-footer-contents">

            </div>
          <!-- footer-contents終了 -->
        </div>
        <!-- footer-wrapper終了 -->
        <div class="footer-copy">
          <p>©Copyright 2019 FinTech Life All rights reserved.</p>
        </div>
      </footer>
      <!-- footer終了 -->
    </div>
    <!-- container終了 -->
    <script src="script.js"></script>
  </body>
</html>
