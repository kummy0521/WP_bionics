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

// ===↓↓↓メインビジュアル（画像３枚をフェードインアウトで表示させるスライダー
$(".slider").slick({
  fade: true, //切り替えをフェードで行う。初期値はfalse。
  autoplay: true, //自動的に動き出すか。初期値はfalse。
  autoplaySpeed: 3000, //次のスライドに切り替わる待ち時間
  speed: 1000, //スライドの動きのスピード。初期値は300。
  infinite: true, //スライドをループさせるかどうか。初期値はtrue。
  slidesToShow: 1, //スライドを画面に3枚見せる
  slidesToScroll: 1, //1回のスクロールで3枚の写真を移動して見せる
  arrows: true, //左右の矢印あり
  prevArrow: '<div class="slick-prev"></div>', //矢印部分PreviewのHTMLを変更
  nextArrow: '<div class="slick-next"></div>', //矢印部分NextのHTMLを変更
  dots: true, //下部ドットナビゲーションの表示
  pauseOnFocus: false, //フォーカスで一時停止を無効
  pauseOnHover: false, //マウスホバーで一時停止を無効
  pauseOnDotsHover: false, //ドットナビゲーションをマウスホバーで一時停止を無効
});

//スマホ用：スライダーをタッチしても止めずにスライドをさせたい場合
$(".slider").on("touchmove", function (event, slick, currentSlide, nextSlide) {
  $(".slider").slick("slickPlay");
});

// ===↓↓↓「news一覧へ」テキスト下線と「→」円の同時ホバー時に出現させるアニメーション
document.addEventListener("DOMContentLoaded", function () {
  const gnavi = document.querySelector(".gnavi");

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

// ===↓↓↓実績の数値カウントアップ

// フラグ変数を追加
let hasAnimated = false;
//box1の指定
$("#box1").on("inview", function (event, isInView) {
  // isInViewがtrueで、かつアニメーションがまだ実行されていない場合のみ実行
  if (isInView && !hasAnimated) {
    $("#box1 .count-up").each(function () {
      $(this)
        .prop("Counter", 0)
        .animate(
          {
            Counter: $(this).text(),
          },
          {
            duration: 1000,
            easing: "swing",
            step: function (now) {
              $(this).text(Math.ceil(now));
            },
            // アニメーション完了時にフラグを立てる
            complete: function () {
              hasAnimated = true;
            },
          }
        );
    });
  }
});
//box2の指定
$("#box2").on("inview", function (event, isInView) {
  // isInViewがtrueで、かつアニメーションがまだ実行されていない場合のみ実行
  if (isInView && !hasAnimated) {
    $("#box2 .count-up").each(function () {
      $(this)
        .prop("Counter", 0)
        .animate(
          {
            Counter: $(this).text(),
          },
          {
            duration: 1000,
            easing: "swing",
            step: function (now) {
              $(this).text(Math.ceil(now));
            },
            // アニメーション完了時にフラグを立てる
            complete: function () {
              hasAnimated = true;
            },
          }
        );
    });
  }
});
//box3の指定
$("#box3").on("inview", function (event, isInView) {
  // isInViewがtrueで、かつアニメーションがまだ実行されていない場合のみ実行
  if (isInView && !hasAnimated) {
    $("#box3 .count-up").each(function () {
      $(this)
        .prop("Counter", 0)
        .animate(
          {
            Counter: $(this).text(),
          },
          {
            duration: 1000,
            easing: "swing",
            step: function (now) {
              $(this).text(Math.ceil(now));
            },
            // アニメーション完了時にフラグを立てる
            complete: function () {
              hasAnimated = true;
            },
          }
        );
    });
  }
});
//box4の指定
$("#box4").on("inview", function (event, isInView) {
  // isInViewがtrueで、かつアニメーションがまだ実行されていない場合のみ実行
  if (isInView && !hasAnimated) {
    $("#box4 .count-up").each(function () {
      $(this)
        .prop("Counter", 0)
        .animate(
          {
            Counter: $(this).text(),
          },
          {
            duration: 1000,
            easing: "swing",
            step: function (now) {
              $(this).text(Math.ceil(now));
            },
            // アニメーション完了時にフラグを立てる
            complete: function () {
              hasAnimated = true;
            },
          }
        );
    });
  }
});

// //box1～4の指定（これだけでは何度もカウントアップを実行するので、↑のようにフラグを使用して条件分岐を行う）
