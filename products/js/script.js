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

// ===↓↓↓画面幅1041px以上のときにヘッダーを800pxスクロールダウンしたら.header_wrapにjs_header_activeクラスが追加される。
// 画面幅1040px以下のときは、js_header_activeのクラスを削除===
// ※ロゴとナビをひとまとめにして背面を調整
document.addEventListener("DOMContentLoaded", function () {
  const headerWrap = document.querySelector(".header_wrap");

  const handleScroll = () => {
    if (window.innerWidth > 1040) {
      if (window.scrollY >= 800) {
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

// ===↓↓↓画面幅1041px以上のときにヘッダーを800pxスクロールダウンしたら.header_navにjs_nav_modifierクラスが追加される。
// 画面幅1040px以下のときは、js_nav_modifierのクラスを削除===
document.addEventListener("DOMContentLoaded", function () {
  const headerNav = document.querySelector(".header_nav");

  const handleScroll = () => {
    if (window.innerWidth > 1040) {
      if (window.scrollY >= 800) {
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

// ↓↓↓Productsページのみ　アコーディオンパネル↓↓↓

document.addEventListener("DOMContentLoaded", function () {
  // 初期状態を設定
  document
    .querySelectorAll(".accordion_box, .accordion_title_end")
    .forEach((el) => {
      el.style.display = "none";
    });

  // すべてのアコーディオンタイトルボックスを取得
  document.querySelectorAll(".accordion_title_box").forEach((titleBox) => {
    titleBox.addEventListener("click", function () {
      const section = titleBox.closest("li"); // 修正：sectionではなくli
      const accordionBox = section.querySelector(".accordion_box");
      const accordionEnd = section.querySelector(".accordion_title_end");
      const specButton = section.querySelector(".spec_button");

      // 表示・非表示の切り替え
      accordionBox.style.display = "block";
      accordionEnd.style.display = "block";
      specButton.style.display = "none";
    });
  });

  // アコーディオンを閉じる処理とスクロール追加
  document.querySelectorAll(".accordion_title_end").forEach((end) => {
    end.addEventListener("click", function () {
      const section = end.closest("li"); // 修正：sectionではなくli
      const accordionBox = section.querySelector(".accordion_box");
      const specButton = section.querySelector(".spec_button");

      // 非表示と表示の切り替え
      accordionBox.style.display = "none";
      end.style.display = "none";
      specButton.style.display = "block";

      // スムーズに spec_button の位置へスクロール
      specButton.scrollIntoView({ behavior: "smooth", block: "center" });
    });
  });
});

