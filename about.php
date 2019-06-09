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

      <div class="about-wrapper">

      </div>
      <div class="about-fintechlife about-box">
        <h1>FinTech Lifeについて</h1>
        <p>FinTechに特化した記事を<span><a id="natsuo-button"href="#natsuo">なつを</a></span>が発信するブログです。
          金融とテクノロジーについてあまり馴染みのない人にとっても
          わかりやすい記事になるように心がけて発信していきます。
          今、世の中はテクノロジーによって大きく変化しています。
          20年前の人間は、スマートフォンがここまで普及することを予想できたでしょうか？
          それと同様に、今から20年後、どんなデバイスやサービスが普及し、
          それを使いこなせないことが不利になってしまうかわかりません。
          AI、ブロックシェーン、IoTというテクノロジーが世の中で使われるのが当たり前になり、
          それに決して世の中からなくなることのない「お金」が融合することで、
        　世界が新しく生まれ変わると考えています。そんな変化の激しい時代に取り残されないように
          最新の金融とテクノロジーの動向や、そもそもの基礎的概念を備忘代わりに
          このブログに記していきたいと思いますので、よろしくお願いいたします。</p>
      </div>
      <!-- about-fintechlife終了 -->
      <div class="about-fintech about-box">
        <h1>FinTechとは？</h1>
        <p>FinTech（フィンテック）とは、金融（Finance）と技術（Technology）を組み合わせた造語で、
          金融サービスと情報技術を結びつけたさまざまな革新的な動きを指します。
          身近な例では、スマートフォンなどを使った送金もその一つです。
          米国では、FinTechという言葉は、2000年代前半から使われていました。
          その後、リーマンショックや金融危機を経て、インターネットやスマートフォン、AI（Artificial Intelligence、人工知能）、
          ビッグデータなどを活用したサービスを提供する新しい金融ベンチャーが次々と登場しました。
          例えば、資金の貸し手と借り手を直接つないだり、Eコマースと結びついた決済サービスを提供する企業があるほか、
          ベンチャー企業が決済などの金融サービスに参入する動きも増えています。
          また、これまで金融サービスが十分普及していなかった途上国や新興国でも、
          スマートフォンを利用した金融サービスが急速に広がる動きが進んでいます。
          さらに、分散型台帳技術やブロックチェーンといった技術も登場しています。</p>
          <a href="https://www.boj.or.jp/announcements/education/oshiete/kess/i25.htm/">日本銀行HPより</a>
      </div>
      <div class="introduce" id="natsuo">
        </div>
        <div class="writer">
          <h1>このブログを書いている人</h1>
        </div>
        <!-- writer終了 -->
        <div class="profile-picture">
        </div>
        <!-- profile-picture終了 -->
        <div class="my-name">
          <h2>なつを</h2>
        </div>
        <!-- my-name終了 -->
        <div class="about-contents">
          <p>25歳の金融マン　2020年の独立を目指してプログラミングを勉強中<br>
          HTML、CSS、JavaScript、PHP、WordPress、Python、MySQLなど<br>
          起業を夢見て毎日ストイックに自分磨きに明け暮れる日々<br>
          時間、場所、金、健康の自由を手に入れるために今頑張るのがモットー<br>
          金融とテクノロジーについて書いていきます</p>
          <!-- <h3>保有資格</h3>
          <p>TOEIC 900</p>
          <p>証券アナリスト</p>
          <p>証券外務員</p>
          <p>FP技能検定2級(個人資産運用業務)</p>
          <p>財務戦略エキスパート</p>
          <p>事業承継 M&Aエキスパート</p>
          <p>その他金融関連資格7資格保有</p> -->
        </div>
        <!-- about-contents終了 -->

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
