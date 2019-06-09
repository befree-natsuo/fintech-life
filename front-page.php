<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Fintech-Life
 * @since 1.0
 * @version 1.0
 */

get_header(); ?>

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

      <div class="top-wrapper">
        <div class="catch-copy">
          <h1>Finance<br>×<br>Technology</h1>
          <p>～金融とテクノロジーをもっと身近に～</p>
        </div>
        <!-- catch-copy終了 -->
      </div>
      <!-- top-wrapper終了 -->
      <div class="category-name">
        <h2>All Posts<span><i class="fa fa-search" aria-hidden="true"></i></span></h2>
      </div>
      <div class="blog-wrapper">
          <div class="content">
            <img src="<?php echo get_template_directory_uri(); ?>/img/photo1.jpg" alt="article1">
            <p>category</p>
            <h3>The titel of this article</h3>
            <p>This article is about<br>
            what you want to read!</p>
          </div>
          <div class="content">
            <img src="<?php echo get_template_directory_uri(); ?>/img/photo2.jpg" alt="article2">
            <p>category</p>
            <h3>The titel of this article</h3>
            <p>This article is about<br>
            what you want to read!</p>
          </div>
          <div class="content">
            <img src="<?php echo get_template_directory_uri(); ?>/img/photo3.jpg" alt="article1">
            <p>category</p>
            <h3>The titel of this article</h3>
            <p>This article is about<br>
            what you want to read!</p>
          </div>
          <div class="content">
            <img src="<?php echo get_template_directory_uri(); ?>/img/photo4.jpg" alt="article4">
            <p>category</p>
            <h3>The titel of this article</h3>
            <p>This article is about<br>
            what you want to read!</p>
          </div>
          <div class="content">
            <img src="<?php echo get_template_directory_uri(); ?>/img/photo5.jpg" alt="article5">
            <p>category</p>
            <h3>The titel of this article</h3>
            <p>This article is about<br>
            what you want to read!</p>
          </div>
          <div class="content">
            <img src="<?php echo get_template_directory_uri(); ?>/img/photo6.jpg" alt="article6">
            <p>category</p>
            <h3>The titel of this article</h3>
            <p>This article is about<br>
            what you want to read!</p>
          </div>
          <div class="content">
            <img src="<?php echo get_template_directory_uri(); ?>/img/photo7.jpg" alt="article7">
            <p>category</p>
            <h3>The titel of this article</h3>
            <p>This article is about<br>
            what you want to read!</p>
          </div>
          <div class="content">
            <img src="<?php echo get_template_directory_uri(); ?>/img/photo8.jpg" alt="article8">
            <p>category</p>
            <h3>The titel of this article</h3>
            <p>This article is about<br>
            what you want to read!</p>
          </div>
          <div class="content">
            <img src="<?php echo get_template_directory_uri(); ?>/img/photo9.jpg" alt="article9">
            <p>category</p>
            <h3>The titel of this article</h3>
            <p>This article is about<br>
            what you want to read!</p>
          </div>
          <div class="content">
            <img src="<?php echo get_template_directory_uri(); ?>/img/photo10.jpg" alt="article10">
            <p>category</p>
            <h3>The titel of this article</h3>
            <p>This article is about<br>
            what you want to read!</p>
          </div>
          <div class="content">
            <img src="<?php echo get_template_directory_uri(); ?>/img/photo11.jpg" alt="article11">
            <p>category</p>
            <h3>The titel of this article</h3>
            <p>This article is about<br>
            what you want to read!</p>
          </div>
          <div class="content">
            <img src="<?php echo get_template_directory_uri(); ?>/img/photo12.jpg" alt="article12">
            <p>category</p>
            <h3>The titel of this article</h3>
            <p>This article is about<br>
            what you want to read!</p>
          </div>


      </div>
      <!-- blog-wrapper終了 -->

      <div class="blog-pages">
        <ul>
          <li class="page-number"><a href=""><<</a></li>
          <li class="page-number"><a href="">1</a></li>
          <li class="page-number"><a href="">2</a></li>
          <li class="page-number"><a href="">3</a></li>
          <li class="page-number"><a href="">4</a></li>
          <li class="page-number"><a href="">5</a></li>
          <li class="page-number"><a href="">>></a></li>
        </ul>
      </div>
      <!-- blog-pages終了 -->

<?php get_footer(); ?>
