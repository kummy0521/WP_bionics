<!DOCTYPE html>
<html lang="ja">
  <head
    prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb# article: http://ogp.me/ns/article#"
  >
    <!-- Google tag (gtag.js) -->
    <script
      async
      src="https://www.googletagmanager.com/gtag/js?id=G-DFB37W5BNK"
    ></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag() {
        dataLayer.push(arguments);
      }
      gtag("js", new Date());

      gtag("config", "G-DFB37W5BNK");
    </script>
    <meta name="robots" content="index, follow" />

    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>バイオニクス株式会社 | TOP</title>
    <!-- ディスクリプション -->
    <meta
      name="description"
      content="バイオニクスが育んできた独自の血流認証技術。これまでたくさんの利用者が血流認証の「安全・安心」で便利な機能にご満足いただいています。"
    />

    <!-- ファビコン -->
    <link rel="icon" type="image/png" href="./img/favicon.ico" />

    <!-- OGP※基本共通設定 -->
    <!-- ※テストアップから本番アップ後は、絶対パスの修正を行うこと！不要な部分は削除 -->
    <meta property="og:title" content="バイオニクス株式会社 | TOP" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="https://www.bionics-k.co.jp/" />
    <meta
      property="og:image"
      content="https://www.bionics-k.co.jp/img/OGP.jpg"
    />
    <meta property="og:site_name" content="バイオニクス株式会社" />
    <meta
      property="og:description"
      content="バイオニクスが育んできた独自の血流認証技術。これまでたくさんの利用者が血流認証の「安全・安心」で便利な機能にご満足いただいています。"
    />
    <!-- リセットcss -->
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/destyle.css@2.0.2/destyle.css"
    />
    <!-- Google fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Oswald:wght@200..700&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap"
      rel="stylesheet"
    />
    <link
      href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@100..900&display=swap"
      rel="stylesheet"
    />
<?php wp_head(); ?>  
</head>

  <body>
    <!-- ↓ヘッダーここから -->
    <header class="header">
      <div class="header_inner">
        <div class="header_wrap">
          <h1>
            <a href="#">
              <img
                src="<?= get_template_directory_uri(); ?>/img/logo.png"
                alt="バイオニクス株式会社のロゴマーク"
                class="header_logo"
              />
            </a>
          </h1>
          <div class="header_container">
            <nav class="header_nav">
              <ul>
                <li>
                  <a href="<?= esc_url( get_permalink( get_page_by_path('technology') ) ); ?>">Technology</a>

                </li>
                <li>
                  <a href="<?= esc_url( get_permalink( get_page_by_path('products') ) ); ?>">Products</a>
                </li>
                <li>
                  <a href="<?= esc_url( get_permalink( get_page_by_path('news') ) ); ?>">News</a>
                </li>
                <li><a href="#achievements_title">Achievements</a></li>
                <li>
                  <a href="<?= esc_url( get_permalink( get_page_by_path('aboutus') ) ); ?>">About Us</a>
                </li>
              </ul>
              <a href="https://forms.gle/xR1NrYDhrFhCGfrg7">
                <div class="nav_button">Contact</div>
              </a>
              <a href="https://www.bionics-k.co.jp/en/">
                <div class="nav_button_language">
                  <span>Japanase / English</span>
                </div>
                <div class="under_bar"></div>
              </a>
            </nav>
          </div>
          <!-- ハンバーガー -->
          <button class="nav_hamburger"></button>
        </div>
      </div>
    </header>
    <!-- ヘッダーここまで -->