<?php get_header(); ?>

<main class="technology">
    <!-- CSSの読み込み（必要であれば） -->
  <!-- <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/object/project/page_technology.css"> -->
    <!-- ===メインビジュアル === -->

    <div class="technology_mv">
      <div class="mv_technology_PC">
       <img
            src="<?= get_template_directory_uri(); ?>/img/technology_img/technology_img_mv.jpg"
          alt="パソコンに向かって技術を開発している社員のイメージ画像"
        />
      </div>
      <!-- レスポンシブ（860px）でmv画像tablet版 -->
      <div class="mv_technology_tablet">
        <img
          src="<?= get_template_directory_uri(); ?>/img/technology_img/technology_img_mv_tablet.jpg"
          alt="パソコンに向かって技術を開発している社員のイメージ画像（タブレット用）"
        />
      </div>
      <!-- レスポンシブ（680px）でmv画像版 -->
      <div class="mv_technology_SP">
        <img
          src="<?= get_template_directory_uri(); ?>/img/technology_img/technology_img_mv_SP.jpg"
          alt="パソコンに向かって技術を開発している社員のイメージ画像（スマートフォン用）"
        />
      </div>

      <div class="technology_mv_title">
        <h1 class="technology_mv_headline">Technology</h1>
        <p class="technology_mv_description">
          使い手のことを第一に考えたものづくりを続けて25年。<br />
          自社開発に拘り、市場に真摯に向き合ってつくりあげる、<br />
          光をあやつり血管を科学する私たちのテクノロジー。
        </p>
      </div>
    </div>

    <!-- ===メインビジュアルここまで === -->
    <!-- ↓メインタイトル「血流認証とは」セクションここから -->
    <section class="main_title effect-fade">
      <!-- クラスmission_titleは、ページ内リンクのために付与 -->
      <p class="common_title_small_jp">血流認証とは</p>
      <h2 id="common_title" class="common_title">
        What’s blood vessel <br />authentication ?
      </h2>
      <p class="common_text">
        「血流認証」という耳慣れない言葉は、実際にどういう認証技術なのか、<br />そして私たちバイオニクスは、なぜ血流認証技術を追求するのか、私たち<br />の想いも含め、ご紹介します。
      </p>
    </section>
    <!-- ↓「血流認証とは」の説明セクションここから -->
    <section class="explanation_vessel">
      <div class="background_img_vessel_PC">
        <img
          src="<?= get_template_directory_uri(); ?>/img/technology_img/technology_img_1_PC.jpg"
          alt="PC用の血流のイメージ画像"
        />
      </div>
      <div class="background_img_vessel_tablet">
        <img
          src="<?= get_template_directory_uri(); ?>/img/technology_img/technology_img_1_tablet.jpg"
          alt="タブレット用の血流のイメージ画像"
        />
      </div>
      <div class="background_img_vessel_SP">
        <img
          src="<?= get_template_directory_uri(); ?>/img/technology_img/technology_img_1_SP.jpg"
          alt="スマホ用の血流のイメージ画像"
        />
      </div>

      <div class="explanation_box">
        <h3 class="explanation_headline">血流認証とは</h3>
        <p class="explanation_text">
          ひとの身体の一部を使った認証技術を総称して、生体認証と言います。生体認証には、指紋認証や顔認証、虹彩認証や静脈認証などがありますが、血流認証もその中のひとつです。そもそも、ひとの血
          管とは細胞に血液を送る管で、臓器の中で唯一、からだの隅々にまではりめぐらされたものです。そしてひとそれぞれ、そのかたちはちがっています。そこにはひとの細胞分裂や遺伝子の話などが絡んでくるのですが、つまりはその血管のはりめぐらされている模様（かたち）の違いを認証に利用しています。ではなぜ静脈認証とは言わず、血流認証と言うのか、それは私たちが認証に使用している指先は血管の折り返し地点、撮影画像には静脈も動脈も写っているのではないか、ということから、血流認証という呼び方を使っています。
        </p>
      </div>
    </section>
    <!-- ↓「血流認証の仕組み」セクションここから -->
    <section class="howitworks_vessel">
      <div class="howitworks_vessel_headline_box">
        <h3 class="howitworks_vessel_headline">血流認証の仕組み</h3>
      </div>
      <div class="howitworks_vessel_video_box">
        <video
  src="<?= get_template_directory_uri(); ?>/movie/technology_movie_1.mp4"
  controls
  autoplay
  muted
  playsinline
  loop
></video>

      </div>
      <div class="howitworks_vessel_text_box">
        <p class="howitworks_vessel_text_first">
          ひとの身体に光を照射すると、深紫外線帯域の光が血液中のヘモグロビン（鉄分）に吸収され、結果、血管の部分が黒く浮かび上がります。その画像をカメラで撮影し、画像処理を施し、独自開発の演算処理で登録画像と認証時撮影画像を比べ、本人か他人かを切り分けています。生体認証を語るときに出てくる指数に、FAR（他人受入率）とFRR（本人拒否率）があります。FRRは、指の入れ方などの理由から、ゼロにはできませんが、FARはゼロという高精度です。
        </p>
        <p class="howitworks_vessel_text_second">
          また、血管のかたちは変化します。なぜなら、ひとは生まれてから死ぬまで細胞分裂をし続けますから、古い細胞は死に、また新たな細胞が生まれる。そのびに血管の形も少しずつ変わっていきます。大きくなっていくお子さまの成長のことを考えるとわかりやすいと思います。私たちの装置は、その小さな変化を学習していく機能を備えています。これは、長年、住宅分野で技術を育んできた、私たちのノウハウです。
        </p>
      </div>
    </section>

    <!-- スライドショー -->
    <ul class="slider">
      <li>
        <img
          src="<?= get_template_directory_uri(); ?>/img/technology_img/technology_img_2.jpg"
          alt="技術開発の様子のイメージ画像その１"
        />
      </li>
      <li>
        <img
          src="<?= get_template_directory_uri(); ?>/img/technology_img/technology_img_3.jpg"
          alt="技術開発の様子のイメージ画像その２"
        />
      </li>
      <li>
        <img
          src="<?= get_template_directory_uri(); ?>/img/technology_img/technology_img_4.jpg"
          alt="技術開発の様子のイメージ画像その３"
        />
      </li>
      <li>
        <img
          src="<?= get_template_directory_uri(); ?>/img/technology_img/technology_img_5.jpg"
          alt="技術開発の様子のイメージ画像その４"
        />
      </li>
      <li>
        <img
          src="<?= get_template_directory_uri(); ?>/img/technology_img/technology_img_6.jpg"
          alt="技術開発の様子のイメージ画像その５"
        />
      </li>

      <!--/slider-->
    </ul>
    <!-- ↓「命と暮らしを守る私たちの技術」の説明セクションここから -->
    <section class="explanation_our_technology">
      <div class="background_img_our_technology_PC">
        <img src="<?= get_template_directory_uri(); ?>/img/technology_img/technology_img_7_PC.jpg" alt="医療現場のイメージ画像" />
      </div>
      <div class="background_img_our_technology_tablet">
        <img
          src="<?= get_template_directory_uri(); ?>/img/technology_img/technology_img_7_tablet.jpg"
          alt="医療現場のイメージ画像（タブレット用）"
        />
      </div>
      <div class="background_img_our_technology_SP">
        <img
          src="<?= get_template_directory_uri(); ?>/img/technology_img/technology_img_7_SP.jpg"
          alt="医療現場のイメージ画像（タブレット用）"
        />
      </div>
      <div class="explanation_box_our_technology">
        <h3 class="explanation_headline_our_technology">
          命と暮らしを守る私たちの技術
        </h3>
        <p class="explanation_text_our_technology">
          「指先の血管画像から健康情報が取得できればきっと日常生活にプラスになる」。そのような思いを抱きつつ開発を続けてきた矢先、新型コロナウイルスの蔓延を機に、個人認証に特化した高い技術が評価され、大阪市衛生検査所から「遺伝子関連・染色体検査（病原体核酸検査、体細胞遺伝子検査）」の登録を受けました。高精度かつ厳重な管理が必要とされるPCR検査装置の開発・検査の実施を行う中で着想したのは、個人認証とバイタルチェック機能を兼ね備えた装置の開発でした。まずは個人認証で個人を特定する、という私たちの技術は、その後に測定するバイタルデータが必ずその人に紐づきます。この、血管を科学する私たちだけが実現できるシステムは、将来的には遠隔医療にも貢献できるものだと確信しています。コロナですっかり変わってしまった医療の現場において、患者と医療機関との新しい関係性「メディカルDX」を実現します。<br />
          日常の身体のコンディションのちょっとした変化に気付くことで、病気の早期発見につながったり、結果的に健康寿命を延ばすことができる。現在、血流認証ならではの技術を使用して、健康寿命を延ばすことを実現する新たな商品を開発中です。
        </p>
      </div>
    </section>

</main>
<?php get_footer(); ?>