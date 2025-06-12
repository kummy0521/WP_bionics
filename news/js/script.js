// 全ページ共通のjs

// ↓ハンバーガーメニュー
// ナビボタンを登録
const NAV_HAMBURGER = document.querySelector(".nav_hamburger");

// classを着け外しするHTML要素（body）を登録
const BODY = document.querySelector("body");

// ナビボタンをクリックしたら...（クリックイベント）
NAV_HAMBURGER.addEventListener("click", () => {
  // bodyにclassを着け外し
  BODY.classList.toggle("nav_open");
});

// ===↓↓↓画面幅1041px以上のときにヘッダーを20pxスクロールダウンしたら.header_wrapにjs_header_activeクラスが追加される。
// 画面幅1040px以下のときは、js_header_activeのクラスを削除===
// ※ロゴとナビをひとまとめにして背面を調整
document.addEventListener("DOMContentLoaded", function () {
  const headerWrap = document.querySelector(".header_wrap");

  const handleScroll = () => {
    if (window.innerWidth > 1040) {
      if (window.scrollY >= 20) {
        headerWrap.classList.add("js_header_active");
      } else {
        headerWrap.classList.remove("js_header_active");
      }
    } else {
      headerWrap.classList.remove("js_header_active");
    }
  };

  const handleResize = () => {
    if (window.innerWidth <= 1040) {
      headerWrap.classList.remove("js_header_active");
    }
  };

  // スクロールイベントの設定
  window.addEventListener("scroll", handleScroll);

  // リサイズイベントの設定
  window.addEventListener("resize", handleResize);
});

// ===↓↓↓画面幅1041px以上のときにヘッダーを20pxスクロールダウンしたら.header_navにjs_nav_modifierクラスが追加される。
// 画面幅1040px以下のときは、js_nav_modifierのクラスを削除===
document.addEventListener("DOMContentLoaded", function () {
  const headerNav = document.querySelector(".header_nav");

  const handleScroll = () => {
    if (window.innerWidth > 1040) {
      if (window.scrollY >= 20) {
        headerNav.classList.add("js_nav_modifier");
      } else {
        headerNav.classList.remove("js_nav_modifier");
      }
    } else {
      headerNav.classList.remove("js_nav_modifier");
    }
  };

  const handleResize = () => {
    if (window.innerWidth <= 1040) {
      headerNav.classList.remove("js_nav_modifier");
    }
  };

  // スクロールイベントの設定
  window.addEventListener("scroll", handleScroll);

  // リサイズイベントの設定
  window.addEventListener("resize", handleResize);
});

// <!-- /*  ===↓↓↓フェードイン（要素がふわっと現れるjs）ここから -->

// <script type="text/javascript">
$(function () {
  $(window).scroll(function () {
    $(".effect-fade").each(function () {
      var elemPos = $(this).offset().top; /* 要素の位置を取得 */
      var scroll = $(window).scrollTop(); /* スクロール位置を取得 */
      var windowHeight =
        $(
          window
        ).height(); /* 画面幅を取得（画面の下側に入ったときに動作させるため） */
      if (scroll > elemPos - windowHeight) {
        /* 要素位置までスクロール出来たときに動作する */
        $(this).addClass("effect-scroll");
      }
    });
  });
  jQuery(window).scroll();
});
// </script>