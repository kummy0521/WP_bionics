<?php get_header(); ?>

    <!-- メインビジュアル 画像３種あり フェードインアウトで表示させる-->
    <div class="top_mv">
      <ul class="slider">
        <li class="slider-item slider-item01">
          <img
            src="<?= get_template_directory_uri(); ?>/img/top_img_mv_1.jpg"
            alt="笑顔の家族のイメージ画像（パソコン表示用）"
          />
        </li>
        <li class="slider-item slider-item02">
          <img
            src="<?= get_template_directory_uri(); ?>/img/top_img_mv_2.jpg"
            alt="同僚と会話をする会社員のイメージ画像（パソコン表示用）"
          />
        </li>
        <li class="slider-item slider-item03">
          <img
            src="<?= get_template_directory_uri(); ?>/img/top_img_mv_3.jpg"
            alt="建設現場で働く男性のイメージ画像（パソコン表示用）"
          />
        </li>
      </ul>
      <!-- レスポンシブ（860px）でmv画像tablet版 -->
      <div class="mv_top_tablet">
        <img
          src="<?= get_template_directory_uri(); ?>/img/top_img_mv_tablet.jpg"
          alt="笑顔の家族のイメージ画像（タブレット表示用）"
        />
      </div>
      <!-- レスポンシブ（680px）でmv画像版 -->
      <div class="mv_top_SP">
        <img
          src="<?= get_template_directory_uri(); ?>/img/top_img_mv_SP.jpg"
          alt="笑顔の家族のイメージ画像（スマートフォン表示用）"
        />
      </div>

      <div class="top_mv_title">
        <p class="top_mv_headline_PC">
          私たちバイオニクスは、血管を科学します。
        </p>
        <p class="top_mv_headline_SP">
          私たちバイオニクスは、<br />血管を科学します。
        </p>
        <p class="top_mv_description">
          身体の中で、唯一隅々まで張りめぐらされている臓器「血管」。<br />そしてその織りなす形状は、人それぞれ異なります。<br />私たちバイオニクスはそこに注目し、その可能性を追求してきました。<br />これまでも、そしてこれからも。
        </p>
      </div>
    </div>

    <!-- ↓Conceptセクションoriginalここから -->
    <section class="concept effect-fade">
      <h2 class="concept_title">CONCEPT</h2>
      <p class="concept_text">
        あなたの指が鍵になる。誰もが持っていて、誰とも違うあなたの血管。<br />血流認証による完全カードレス・キーレス化で、セキュリティ問題を解決します。
      </p>
    </section>

    <!-- ↓Technologyセクションここから -->
    <section class="technology effect-fade">
      <h2 id="technology_title" class="technology_title">TECHNOLOGY</h2>
      <p class="technology_text">
        バイオニクスが育んできた、独自の血流認証技術。
      </p>
    </section>

    <!-- ↓Featureセクションここから -->
    <section class="feature effect-fade">
      <h3 class="feature_title">FEATURE</h3>
      <div class="feature_inner">
        <div class="feature_container_left">
          <div class="feature_box_for_number">
            <div class="feature_number_img">
              <img src="<?= get_template_directory_uri(); ?>/img/top_img_number01.png" alt="数字の01" />
            </div>
            <div class="feature_box_for_text">
              <p class="feature_lead_sentencs">
                体内の情報なので、他の生体認証と違い、偽造が困難
              </p>
              <p class="feature_text">
                指紋や顔、虹彩など、生体認証に使える身体の部位はたくさんありますが、静脈を流れる血液（＝血流）は体内にあるため人目には触れにくく、偽造や盗難や流出などの危険性が非常に低く、紛失することがありません。
              </p>
            </div>
          </div>
          <div class="feature_img_sp">
            <img
              src="<?= get_template_directory_uri(); ?>/img/top_img_SP_1.jpg"
              alt="01用のテクノロジーのコラージュ画像"
            />
          </div>

          <div class="feature_box_for_number">
            <div class="feature_number_img">
              <img src="<?= get_template_directory_uri(); ?>/img/top_img_number02.png" alt="数字の02" />
            </div>
            <div class="feature_box_for_text">
              <p class="feature_lead_sentencs">
                体調や個体差に左右されず、失くすことのない鍵
              </p>
              <p class="feature_text">
                血流内のヘモグロビンが特定の赤外線を吸収するという特徴を利用し、バイオニクス独自の特殊な撮影方法によるパターン判定で本人を特定。体内情報を用いるので、体調や体毛、肌荒れなどの要因の影響を受けにくいのが特徴です。
              </p>
            </div>
            <div class="feature_img_sp">
              <img
                src="<?= get_template_directory_uri(); ?>/img/top_img_SP_2.jpg"
                alt="02用のテクノロジーのコラージュ画像"
              />
            </div>
          </div>
          <div class="feature_box_for_number">
            <div class="feature_number_img">
              <img src="<?= get_template_directory_uri(); ?>/img/top_img_number03.png" alt="数字の03" />
            </div>
            <div class="feature_box_for_text">
              <p class="feature_lead_sentencs">
                紛失や暗証番号が必要ないので、お子さまやご高齢の方にも安心
              </p>
              <p class="feature_text">
                体内を通る静脈が鍵となるため、従来のように鍵やカードを持ち歩く必要がなく、また、パスワードを覚えておく必要もありません。そのため、盗難や複製、不正な使用のリスクがなく、管理も簡単です。
              </p>
            </div>
            <div class="feature_img_sp">
              <img
                src="<?= get_template_directory_uri(); ?>/img/top_img_SP_3.jpg"
                alt="03用のテクノロジーのコラージュ画像"
              />
            </div>
          </div>
          <div class="feature_box_for_number">
            <div class="feature_number_img">
              <img src="<?= get_template_directory_uri(); ?>/img/top_img_number04.png" alt="数字の04" />
            </div>
            <div class="feature_box_for_text">
              <p class="feature_lead_sentencs">
                見守り機能や入退室管理の機能付き
              </p>
              <p class="feature_text">
                専用スマホアプリから設定することで、指定した指で認証して扉を開けた際の帰宅情報をお知らせしたり、一定時間以上にわたって鍵の開閉がなかった際に、登録された連絡先へお知らせすることができます。
              </p>
            </div>
            <div class="feature_img_sp">
              <img
                src="<?= get_template_directory_uri(); ?>/img/top_img_SP_4.jpg"
                alt="04用のテクノロジーのコラージュ画像"
              />
            </div>
          </div>
        </div>
        <div class="feature_container_right">
          <img
            src="<?= get_template_directory_uri(); ?>/img/top_img_1.jpg"
            alt="PCで表示用のテクノロジーのコラージュ画像"
          />
        </div>
      </div>
    </section>

    <!-- ↓How it Worksセクションここから -->
    <section class="howitworks effect-fade">
      <h3 class="howitworks_title">HOW IT WORKS</h3>
      <p class="howitworks_text">
        血流認証の仕組みの決め手は、血管の撮影方法。<br />他には真似のできない高い精度を、4つのプロセスで実現。
      </p>
      <div class="howitworks_container">
        <div class="howitworks_box_for_img">
          <img src="<?= get_template_directory_uri(); ?>/img/top_img_2.png" alt="血流認証の仕組みの画像" />
        </div>
        <div class="howitworks_box_for_text">
          <p class="authentification_flow">
            ❶ 近赤外線LED（発光ダイオード）を使用し、指を透過します。<br />❷
            高品質の小型カメラを用いて画像を取り込みます。<br />❸
            指の中を走る血管画像を撮像し、独自の画像処理技術により鮮明な血管画像を抽出します。<br />❹
            バイオニクス独自のアルゴリズムを用いて個人認証を行います。
          </p>
        </div>
      </div>
    </section>
    <!-- technologyページへの誘導ボタン -->
    <ul class="technology_gnavi">
  <li class="technology_gnavi_text">
    <a href="<?= esc_url( home_url( '/technology/' ) ); ?>">TECHNOLOGYについてもっと見る</a>
  </li>
</ul>


    <!-- ↓Productsセクションここから -->

    <section class="products effect-fade">
      <h3 class="products_title">PRODUCTS</h3>
      <div class="products_container_row_first">
        <div class="products_box">
          <div class="products_minibox">
<a href="<?= esc_url( home_url( '/products/#aqubio_series_title' ) ); ?>">              
  <div class="products_aqubio_img">
                <img
                  src="<?= get_template_directory_uri(); ?>/img/top_img_3.png"
                  alt="AQUBIOシリーズの製品の画像"
                />
              </div>
              <div class="products_aqubio_description">
                <p class="products_name">AQUBIO Series</p>
                <p class="products_text">
                  玄関用血流認証装置<br />アキュービオシリーズ
                </p>
              </div>
            </a>
          </div>
          <div class="button_area">
<a
  class="btn bgskew"
  href="<?= esc_url( home_url( '/products/#aqubio_fnc_spec_title' ) ); ?>"
><span>View more</span></a>
          </div>
        </div>
        <div class="products_box">
          <div class="products_minibox">
<a href="<?= esc_url( home_url( '/products/#bio_cobra_title' ) ); ?>">
              <div class="products_cobra_img">
                <img src="<?= get_template_directory_uri(); ?>/img/top_img_4.png" alt="Bio-COBRAの製品の画像" />
              </div>
              <div class="products_cobra_description">
                <p class="products_name">Bio-COBRA</p>
                <p class="products_text">
                  共用部用血流認証装置<br />バイオコブラ
                </p>
              </div>
            </a>
          </div>

          <div class="button_area">
<a
  class="btn bgskew"
  href="<?= esc_url( home_url( '/products/#va-300_fnc_spec_title' ) ); ?>"
><span>View more</span></a>
          </div>
        </div>
      </div>
      <div class="products_container_row_second">
        <div class="products_box">
          <div class="products_minibox">
<a href="<?= esc_url( home_url( '/products/#va-300_title' ) ); ?>">
              <div class="products_va-300_img">
                <img src="<?= get_template_directory_uri(); ?>/img/top_img_5.png" alt="VA-300の製品の画像" />
              </div>
              <div class="products_va-300_description">
                <p class="products_name">VA-300</p>
                <p class="products_text">
                  共用部用血流認証装置<br />ブイエー300
                </p>
              </div>
            </a>
          </div>
          <div class="button_area">
<a
  class="btn bgskew"
  href="<?= esc_url( home_url( '/products/#bio_cobra_fnc_spec_title' ) ); ?>"
><span>View more</span></a>          </div>
        </div>
        <div class="products_box">
          <div class="products_minibox">
            <!-- aタグのurl記載なし -->
            <a href="">
              <div class="products_bio-egg_img">
                <img src="<?= get_template_directory_uri(); ?>/img/top_img_6.png" alt="Bio-EGGの製品の画像" />
              </div>
              <div class="products_bio-egg_description">
                <p class="products_name">Bio-EGG</p>
                <p class="products_text">
                  PHR（パーソナルヘルスレコード測定器）<br />バイオエッグ
                </p>
              </div>
            </a>
          </div>
          <!-- 製品リリース時に挿入 -->
          <!-- <div class="button_area">
            <a
              class="btn bgskew"
              href="./products/products.html#aqubio_fnc_spec_title"
              ><span>View more</span></a
            >
          </div> -->
        </div>
      </div>
    </section>
    <!-- ↓Newsセクションここから -->
<section class="news effect-fade">
  <div class="news_wrapper">
    <div class="news_container_left">
      <h2 id="news_title" class="news_title">NEWS</h2>

      <ul class="gnavi">
        <li class="gnavi_text">
          <a href="<?= get_post_type_archive_link('news'); ?>">ニュース一覧へ</a>
        </li>
        <li>
          <span>
            <a class="news_arrow_link" href="<?= get_post_type_archive_link('news'); ?>">
              <div class="small_arrow">
                <img
                  src="<?= get_template_directory_uri(); ?>/img/top_small_arrow.jpg"
                  alt="小さな右向き矢印"
                  width="26"
                  height="24"
                />
              </div>
            </a>
          </span>
        </li>
      </ul>
    </div>

<ul class="news_container_right">
  <?php
  $news_query = new WP_Query([
    'post_type'      => 'news',
    'posts_per_page' => 4,
    'post_status'    => 'publish',
    'orderby'        => 'date',
    'order'          => 'DESC',
  ]);

  if ($news_query->have_posts()) :
    while ($news_query->have_posts()) :
      $news_query->the_post();

      // タクソノミー「news_taxonomy」の最初の名前を取得
      $terms = get_the_terms(get_the_ID(), 'news_taxonomy');
      $term_name = (!empty($terms) && !is_wp_error($terms)) ? $terms[0]->name : '';

      // ACFの「link_url」フィールドを取得
      $link_url = get_field('link_url');
      // ACFの「target_blank」フィールドを取得（trueなら別タブ）
      $target_blank = get_field('target_blank');

      // 「link_url」があればそちらをリンクに使い、なければ投稿ページのリンクを使う
      $href = !empty($link_url) ? esc_url($link_url) : get_permalink();

      // target属性の設定（trueなら target="_blank"、そうでなければ空文字）
      $target_attr = ($target_blank === true) ? ' target="_blank" rel="noopener noreferrer"' : '';
  ?>
      <li class="news_box_content">
        <a href="<?php echo $href; ?>"<?php echo $target_attr; ?>>
          <span class="news_label"><?= esc_html($term_name); ?></span>
          <time datetime="<?= get_the_date('Y-m-d'); ?>"><?= get_the_date('Y.m.d'); ?></time>
          <p class="news_text"><?= esc_html(get_the_title()); ?></p>
        </a>
      </li>
  <?php
    endwhile;
    wp_reset_postdata();
  else :
  ?>
    <li class="news_box_content">現在ニュースはありません。</li>
  <?php endif; ?>
</ul>

  </div>
</section>
    <!-- ↓Achievementsセクションここから -->
    <section class="achievements effect-fade">
      <h2 id="achievements_title" class="achievements_title">ACHIEVEMENTS</h2>
      <p class="achievements_text">
        これまで、たくさんの利用者がバイオニクスの血流認証の「安心・安全」で便利な機能に<br />ご満足いただいています。
      </p>
      <br />
      <div class="achievements_inner">
        <h3 class="achievements_small_title">For Residential</h3>
        <p class="achievements_small_title_jp">一般住宅向け</p>
        <div class="achievements_container">
          <div class="achievements_box">
            <p class="achievements_headline">導入済み</p>

            <div class="achievements_wrp">
              <div class="achievements_minibox_img">
                <img
                  src="<?= get_template_directory_uri(); ?>/img/top_icon_1.png"
                  alt="一般住宅向けの導入済みを表すアイコン"
                />
              </div>
              <div class="achievements_minibox_text">
                <div id="box1" class="box">
                  <!--画面に入ったら数字を動かす基点にするためのid を付与-->
                  <p class="for_number">
                    約&nbsp;<span class="count-up count-size">250</span>棟
                  </p>
                  <!-- count-up ← カウントアップ用class名-->
                  <!--/box-->
                </div>
              </div>
            </div>
          </div>
          <div class="achievements_box">
            <p class="achievements_headline">利用戸数</p>

            <div class="achievements_wrp">
              <div class="achievements_minibox_img">
                <img
                  src="<?= get_template_directory_uri(); ?>/img/top_icon_2.png"
                  alt="一般住宅向けの利用戸数を表すアイコン"
                />
              </div>
              <div class="achievements_minibox_text">
                <div id="box2" class="box">
                  <!--画面に入ったら数字を動かす基点にするためのid を付与-->
                  <p class="for_number">
                    約&nbsp;<span class="count-up count-size">15000</span>戸
                  </p>
                  <!-- count-up ← カウントアップ用class名-->
                  <!--/box-->
                </div>
              </div>
            </div>
          </div>
        </div>
        <h3 class="achievements_small_title">For Corporation</h3>
        <p class="achievements_small_title_jp">法人様向け</p>
        <div class="achievements_container">
          <div class="achievements_box">
            <p class="achievements_headline">導入社数</p>

            <div class="achievements_wrp">
              <div class="achievements_minibox_img">
                <img
                  src="<?= get_template_directory_uri(); ?>/img/top_icon_3.png"
                  alt="法人様向けの導入社数を表すアイコン"
                />
              </div>
              <div class="achievements_minibox_text">
                <div id="box3" class="box">
                  <!--画面に入ったら数字を動かす基点にするためのid を付与-->
                  <p class="for_number">
                    約&nbsp;<span class="count-up count-size">400</span>社
                  </p>
                  <!-- count-up ← カウントアップ用class名-->
                  <!--/box-->
                </div>
              </div>
            </div>
          </div>
          <div class="achievements_box">
            <p class="achievements_headline">導入台数</p>

            <div class="achievements_wrp">
              <div class="achievements_minibox_img">
                <img
                  src="<?= get_template_directory_uri(); ?>/img/top_icon_4.png"
                  alt="法人様向けの導入台数を表すアイコン"
                />
              </div>
              <div class="achievements_minibox_text">
                <div id="box4" class="box">
                  <!--画面に入ったら数字を動かす基点にするためのid を付与-->
                  <p class="for_number">
                    約&nbsp;<span class="count-up count-size">2500</span>台
                  </p>
                  <!-- count-up ← カウントアップ用class名-->
                  <!--/box-->
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>


<?php get_footer(); ?>