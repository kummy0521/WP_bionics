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


// ===↓↓↓「news一覧へ」テキスト下線と「→」円の同時ホバー時に出現させるアニメーション
  document.addEventListener("DOMContentLoaded", function () {
    const gnavi = document.querySelector(".gnavi_news");

    const gnaviTextLink = document.querySelector(".gnavi_text a");
    const newsArrowLink = document.querySelector(".news_arrow_link");

    gnavi.addEventListener("mouseenter", function () {
      gnaviTextLink.classList.add("hover-effect");
      newsArrowLink.classList.add("hover-effect");
    });

    gnavi.addEventListener("mouseleave", function () {
      gnaviTextLink.classList.remove("hover-effect");
      newsArrowLink.classList.remove("hover-effect");
    });
  });

