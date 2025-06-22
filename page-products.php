<?php get_header(); ?>

<main class="technology">
    <!-- CSSの読み込み（必要であれば） -->
  <!-- <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/object/project/page_technology.css"> -->
    <!-- ===メインビジュアル === -->

<div class="products_mv">
  <div class="mv_video">
    <video
      src="<?= get_template_directory_uri(); ?>/movie/mov_aqubio_01.mp4"
      autoplay
      loop
      muted
      playsinline
    ></video>
  </div>

  <div class="mv_products_tablet">
    <img
      src="<?= get_template_directory_uri(); ?>/img/products_img/products_img/products_img_mv.jpg"
      alt="AQUBIOの製品イメージ画像（タブレット用）"
    />
  </div>

  <div class="mv_products_SP">
    <img
      src="<?= get_template_directory_uri(); ?>/img/products_img/products_img/products_img_mv_SP.jpg"
      alt="AQUBIOの製品イメージ画像（スマートフォン用）"
    />
  </div>

  <div class="products_mv_title">
    <h1 class="products_mv_headline">OUR PRODUCTS</h1>
    <p class="products_mv_description">
      使い手のことを第一に考えたものづくりを続けて25年。<br />
      今、私たちがお届けするメイドインジャパン・クオリティ。<br />
      もう何も持たない、新しいキーシステム。
    </p>
  </div>
</div>
    <!-- ===メインビジュアルここまで === -->
    <!-- ↓ AQUBIO SERIESセクションここから -->
    <section class="aqubio_series effect-fade">
      <h2 id="aqubio_series_title" class="aqubio_series_title">
        AQUBIO SERIES
      </h2>
      <p class="aqubio_series_title_jp">アキュービオ シリーズ</p>
      <div class="aqubio_series_container">
        <div class="aqubio_box">
          <p class="aqubio_description_first">
            指１本でお家のセキュリティ問題が解決する、<br />血流認証のスマートロック
          </p>
          <div class="aqubio_minibox">
            <img
              src="<?= get_template_directory_uri(); ?>/img/products_img/products_img_1.png"
              alt="ドアに実装されたAQUBIO本体と認証するための指がドアにちかづいている画像"
            />
          </div>
        </div>
        <div class="aqubio_box">
          <div class="aqubio_minibox">
            <img
              src="<?= get_template_directory_uri(); ?>/img/products_img/products_img_2.png"
              alt="ドアに実装されたAQUBIO本体の画像"
            />
          </div>
          <p class="aqubio_description_second">
            偽造・複製・紛失・流失などの危険性が最も少ない<br />認証方法を採用
          </p>
        </div>
        <div class="aqubio_box">
          <p class="aqubio_description_third">
            肌荒れや発汗など環境や体調の影響を受けにくい<br />ため半永久的に使用可能
          </p>
          <div class="aqubio_minibox">
            <img
              src="<?= get_template_directory_uri(); ?>/img/products_img/products_img_3.png"
              alt="AQUBIOの認証部分の画像"
            />
          </div>
        </div>
      </div>
      <div class="button_area_aqubio_lp">
        <a class="btn bgskew" href="https://www.bionics-k.co.jp/lp/"
          ><span>AQUBIO Seriesに関する詳細はこちら</span></a
        >
      </div>
    </section>
    <!-- ↓AQUBIO FUNCTION & SPECIFICATIONセクションここからここから -->
    <section class="aqubio_fnc_spec_first effect-fade">
      <div class="aqubio_fnc_spec_inner">
        <h3 id="aqubio_fnc_spec_title" class="aqubio_fnc_spec_title">
          FUNCTION & SPECIFICATION
        </h3>
      </div>
      <div class="aqubio_fnc_spec_container">
        <p class="aqubio_fnc_spec_subtitle">
          AQUBIO / AQUBIO H (埋込型)
        </p>
        <div class="aqubio_spec_img">
          <img
            src="<?= get_template_directory_uri(); ?>/img/products_img/products_img/products_img_4.png"
            alt="AQUBIOのスペック表示のイラスト（パソコン表示用）"
          />
        </div>
        <div class="aqubio_spec_img_SP">
          <img
            src="<?= get_template_directory_uri(); ?>/img/products_img/products_img_SP4.png"
            alt="AQUBIOのスペック表示のイラスト（スマートフォン表示用）"
          />
        </div>
        <ul class="accordion-area">
          <li>
            <!--li ~ /li までが一つのアコーディオン-->
              <div class="accordion_title_box">
              <h3 class="accordion_title">機能・スペックをみる</h3>
              <div class="spec_button">
                <img src="<?= get_template_directory_uri(); ?>/img/products_img/spec_button.png" alt="逆三角矢印のボタン">
              </div>
              </div>
              <div class="accordion_box">
        <table class="aqubio_fnc_spec_table">
          <tbody>
            <tr>
              <th><span>適用錠前</span></th>
              <td>弊社指定錠ケースを使用</td>
            </tr>
            <tr>
              <th><span>適用シリンダー</span></th>
              <td>弊社指定シリンダーを使用</td>
            </tr>
            <tr>
              <th><span>適用バックセット・扉厚</span></th>
              <td>扉厚範囲：36～40mm</td>
            </tr>
            <tr>
              <th><span>寸法</span></th>
              <td>
                リーダー部：<br />1150mm(H) × 58mm(W) × 47.1mm (D)<br />
                ただし、扉表面露出部分24.2mm、扉内部埋没部分34.1mm、ゴム部・突起部を除く<br />
                電動部：<br />
                140mm(H) × 70mm(W) × 23mm(D)
              </td>
            </tr>
            <tr>
              <th><span>材質・仕上げ処理</span></th>
              <td>
                材質：処理ABS 樹脂またはダイキャスト<br />仕上げ：塗装仕上または亜鉛メッキ
                ほか
              </td>
            </tr>
            <tr>
              <th><span>Wi-Fi規格</span></th>
              <td>802.11b/g/n</td>
            </tr>
            <tr>
              <th><span>通信方式</span></th>
              <td>Bluetooth 4.0LE</td>
            </tr>
            <tr>
              <th><span>カラーバリエーション</span></th>
              <td>
                シャンパンゴールド塗装仕上／ブラック塗装仕上／シルバー塗装仕上
              </td>
            </tr>
            <tr>
              <th><span>認証媒体</span></th>
              <td>指の血流・FeliCaカード（当社指定）</td>
            </tr>
            <tr>
              <th><span>登録ID数</span></th>
              <td>
                指：<br />最大20本（責任者・一般者合計）<br />カード／工事用：1枚&emsp;管理用：登録一括カード：1枚<br />空室用カード：20枚&emsp;ユーザー用：登録・抹消カード：1枚&emsp;入居者用カード：10枚<br />接続できるスマートフォン台数は10台<br />（内最低1台は管理権限スマートフォンとしての登録が必要です。）
              </td>
            </tr>
            <tr>
              <th><span>認証時間</span></th>
              <td>0.8 秒程度</td>
            </tr>
            <tr>
              <th>
                <span>本人拒否率（FRR）</span>
              </th>
              <td>1％未満</td>
            </tr>
            <tr>
              <th><span>他人受入率（FAR）</span></th>
              <td>0.0001％</td>
            </tr>
            <tr>
              <th>
                <span>左右勝手</span>
              </th>
              <td>なし</td>
            </tr>
            <tr>
              <th><span>使用電源</span></th>
              <td>単3アルカリ乾電池4本</td>
            </tr>
            <tr>
              <th><span>非常用電源</span></th>
              <td>モバイルバッテリー（USB Type-B コネクターを使用）</td>
            </tr>
            <tr>
              <th><span>電池寿命</span></th>
              <td>20℃にて約1年（1日10回操作）</td>
            </tr>
            <tr>
              <th><span>使用温湿度範囲</span></th>
              <td>-10℃～ 50℃／ 20 ～ 80%RH&emsp;結露なきこと</td>
            </tr>
            <tr>
              <th><span>防水性能</span></th>
              <td>
                屋外側：IPX5保護等級5相当（IPX5とは対噴流を意味します。）<br />室内側：IPX4相当
              </td>
            </tr>
            <tr>
              <th><span>専用スマホアプリ動作条件</span></th>
              <td>
                iOS：10以上&emsp;Android：5以上<br />のいずれかを搭載したスマートフォン。<br />※PINコード受信のため、SMSでが受信できる必要があります。
              </td>
            </tr>
          </tbody>
        </table>
        <p class="about_aqubioh wrapper_medium">
          ※AQUBIO Hは、ヘルスケア測定機能付き
        </p>
              </div>
                            <p class="accordion_title_end">閉じる</p>

          </li>
        </ul>
    </section>
    <section class="aqubio_fnc_spec_second">
            <div class="aqubio_fnc_spec_inner">
        <h3 id="aqubio_fnc_spec_title" class="aqubio_fnc_spec_title">
          FUNCTION & SPECIFICATION
        </h3>
      </div>

      <div class="aqubio_fnc_spec_container">
        <p class="aqubio_fnc_spec_subtitle">AQUBIOⅡ(直付型)</p>
        <div class="aqubio_spec_img">
          <img
            src="<?= get_template_directory_uri(); ?>/img/products_img/products_img_5.png"
            alt="AQUBIO2のスペック表示のイラスト（パソコン表示用）"
          />
        </div>
        <div class="aqubio_spec_img_SP">
          <img
            src="<?= get_template_directory_uri(); ?>/img/products_img/products_img_SP5.png"
            alt="AQUBIO2のスペック表示のイラスト（スマートフォン表示用）"
          />
        </div>
        <ul class="accordion-area">
          <li>
            <!--li ~ /li までが一つのアコーディオン-->
              <div class="accordion_title_box">
              <h3 class="accordion_title">機能・スペックをみる</h3>
              <div class="spec_button">
                <img src="<?= get_template_directory_uri(); ?>/img/products_img/spec_button.png" alt="逆三角矢印のボタン">
              </div>
              </div>
              <div class="accordion_box">
        <table class="aqubio_fnc_spec_table wrapper_medium">
          <tbody>
            <tr>
              <th><span>適用錠前</span></th>
              <td>LA・LAF・MA・DA・DAF</td>
            </tr>
            <tr>
              <th><span>適用シリンダー</span></th>
              <td>U9・PR・JN・UR</td>
            </tr>
            <tr>
              <th><span>適用バックセット・扉厚</span></th>
              <td>バックセット：64mm<br />扉厚範囲：36～40mm</td>
            </tr>
            <tr>
              <th><span>寸法</span></th>
              <td>
                リーダー部：<br />H208mm(H)x W62.3(W) x D58.8(D)<br />
                電動部：<br />
                160.0mm(H) x 73.3mm(W) x 46.0mm(D)<br />
                （マグネット部 W9.7mm）<br />
                ※防水パッキン部含む
              </td>
            </tr>
            <tr>
              <th><span>材質・仕上げ処理</span></th>
              <td>
                材質：処理ABS 樹脂またはダイキャスト<br />
                仕上げ：塗装仕上または亜鉛メッキ ほか
              </td>
            </tr>
            <tr>
              <th><span>Wi-Fi規格</span></th>
              <td>802.11b/g/n</td>
            </tr>
            <tr>
              <th><span>通信方式</span></th>
              <td>Bluetooth 4.0LE</td>
            </tr>
            <tr>
              <th><span>カラーバリエーション</span></th>
              <td>シャンパンゴールド塗装仕上／ブラック塗装仕上</td>
            </tr>
            <tr>
              <th><span>認証媒体</span></th>
              <td>指の血流・FeliCaカード（当社指定）</td>
            </tr>
            <tr>
              <th><span>登録ID数</span></th>
              <td>
                指：<br />最大20本（責任者・一般者合計）<br />カード／工事用：1枚&emsp;管理用：登録一括カード：1枚<br />
                空室用カード：20枚&emsp;ユーザー用：登録・抹消カード：1枚&emsp;入居者用カード：10枚<br />接続できるスマフォン台数は10台（内最低1台は管理権限スマートフォンとしての登録が必要です。）
              </td>
            </tr>
            <tr>
              <th><span>認証時間</span></th>
              <td>0.8 秒程度</td>
            </tr>
            <tr>
              <th><span>本人拒否率（FRR）</span></th>
              <td>1％未満</td>
            </tr>
            <tr>
              <th><span>他人受入率（FAR）</span></th>
              <td>0.0001％</td>
            </tr>
            <tr>
              <th><span>左右勝手</span></th>
              <td>有り</td>
            </tr>
            <tr>
              <th><span>使用電源</span></th>
              <td>単3リチウム乾電池4本</td>
            </tr>
            <tr>
              <th><span>非常用電源</span></th>
              <td>モバイルバッテリー（USB Type-B コネクターを使用）</td>
            </tr>
            <tr>
              <th><span>電池寿命</span></th>
              <td>20℃にて約1年（1日10回操作）</td>
            </tr>
            <tr>
              <th>
                <span>使用温湿度範囲</span>
              </th>
              <td>-10℃～ 50℃／ 20 ～ 80%RH&emsp;結露なきこと</td>
            </tr>
            <tr>
              <th><span>防水性能</span></th>
              <td>
                屋外側：IPX5 保護等級5相当（IPX5とは対噴流を意味します。）
              </td>
            </tr>
            <tr>
              <th>
                <span>専用スマホアプリ動作条件</span>
              </th>
              <td>
                OS：10以上&emsp;Android：5以上<br />のいずれかを搭載したスマートフォン。<br />
                ※PINコード受信のため、SMSでが受信できる必要があります。
              </td>
            </tr>
          </tbody>
        </table>
      </div>
<p class="accordion_title_end">閉じる</p>

          </li>
        </ul>
    </section>
    <!-- ↓Bio-COBRAセクションここから -->
    <section class="bio_cobra effect-fade">
      <h2 id="bio_cobra_title" class="bio_cobra_title">Bio-COBRA</h2>
      <p class="bio_cobra_title_jp">バイオ コブラ</p>
      <div class="bio_cobra_container">
        <div class="bio_cobra_box">
          <div class="bio_cobra_minibox">
            <img
              src="<?= get_template_directory_uri(); ?>/img/products_img/products_img_6.png"
              alt="オフィスのドアに実装されたBio-COBRAの画像"
            />
          </div>

          <p class="bio_cobra_description_first">
            建物のあらゆるセキュリティ管理を担える、<br />多機能性を誇る最高傑作。<br />「血流認証」の特性をフルに活かし、個人や<br />建物の財産を守り、安心で快適な建物空間を<br />演出します。
          </p>
        </div>
        <div class="bio_cobra_box">
          <p class="bio_cobra_description_second">
            管理が難しい共用部のさまざまな問題も、<br />Bio-COBRAを導入することで、建物そのものの<br />セキュリティを向上することができます。<br />さらにエレベーターや宅配ボックスなどの<br />住宅設備と連携することで、より付加価値の<br />高い物件としての価値向上が見込めます。
          </p>
          <div class="bio_cobra_minibox">
            <img
              src="<?= get_template_directory_uri(); ?>/img/products_img/products_img_7.png"
              alt="フロントドアに実装されたBio-COBRAの画像"
            />
          </div>
        </div>
        <div class="bio_cobra_box">
          <div class="bio_cobra_minibox">
            <img
              src="<?= get_template_directory_uri(); ?>/img/products_img/products_img_8.png"
              alt="指を認証中のBio-COBRAの画像"
            />
          </div>

          <p class="bio_cobra_description_third">
            多くの居住者が共同で使用しても安心。<br />認証部を自動で除菌する機能が備わっています。<br />また、指を近づけると自動で認証部が開く仕組み<br />なので、衛生的かつ利便性を向上できます。
          </p>
        </div>
      </div>
    </section>
    <!-- ↓Bio-COBRA FUNCTION & SPECIFICATIONセクションここからここから -->
    <section class="bio_cobra_fnc_spec effect-fade">
      <div class="bio_cobra_fnc_spec_inner">
        <h3 id="bio_cobra_fnc_spec_title" class="bio_cobra_fnc_spec_title">
          FUNCTION & SPECIFICATION
        </h3>
      </div>
      <div class="bio_cobra_fnc_spec_container">
        <p class="bio_cobra_fnc_spec_subtitle">Bio-COBRA</p>
        <div class="bio_cobra_spec_img">
          <img
            src="<?= get_template_directory_uri(); ?>/img/products_img/products_img_9.png"
            alt="Bio-COBRAのスペック表示のイラスト（パソコン表示用）"
          />
        </div>
        <div class="bio_cobra_spec_img_SP">
          <img
            src="<?= get_template_directory_uri(); ?>/img/products_img/products_img_SP9.png"
            alt="Bio-COBRAのスペック表示のイラスト（スマートフォン表示用）"
          />
        </div>
        <ul class="accordion-area">
          <li>
            <!--li ~ /li までが一つのアコーディオン-->
              <div class="accordion_title_box">
              <h3 class="accordion_title">機能・スペックをみる</h3>
              <div class="spec_button">
                <img src="<?= get_template_directory_uri(); ?>/img/products_img/spec_button.png" alt="逆三角矢印のボタン">
              </div>
              </div>
              <div class="accordion_box">
        <table class="bio_cobra_fnc_spec_table">
          <tbody class="bio_cobra_fnc_spec_box">
            <tr>
              <th><span>登録ID数</span></th>
              <td>
                指 :<br />人差し指、中指、薬指最大5,000指（単体）、<br />最大20,000指（＋センターユニット）<br />
                カード :<br />最大2,500枚（単体）、最大10,000指（＋センターユニット）
              </td>
            </tr>
            <tr>
              <th><span>電源仕様</span></th>
              <td>DC12V~24V、またはPOE(48V)</td>
            </tr>
            <tr>
              <th><span>BLE仕様</span></th>
              <td>Bluetooth 5.2</td>
            </tr>
            <tr>
              <th><span>使用温湿度範囲</span></th>
              <td>-10℃～ 50℃／ 30 ～ 90%RH&emsp;結露なきこと</td>
            </tr>
            <tr>
              <th><span>WIFI仕様</span></th>
              <td>
                無線LAN規格； IEEE802.11b/g/n (IEEE802.11-2012)<br />準拠: (2.4
                GHz band channels 1-13)<br />シングルストリーム； 1 X 1<br />
                認証方法； WPA2-PSK<br />暗号方式； AES<br />無線LAN接続；
                スマートフォンによる手動接続<br />通信規格；1Pv4、1Pv6、及びTCP/IP
                Stackを保持
              </td>
            </tr>
            <tr>
              <th><span>インターフェース</span></th>
              <td>
                Ethernet（PoE対応）x1、<br />
                無電圧接点入力（2ピン）x1、無電圧接点出力（2ピン）x1、<br />JEMA（入出力4ピン）x1、電源入力(DC9~24V)
                x 1
              </td>
            </tr>
            <tr>
              <th><span>(1)本人拒否率（FRR）</span></th>
              <td>1%以下</td>
            </tr>
            <tr>
              <th><span>(2)他人受入率(FAR)</span></th>
              <td>0.0001％（百万分の1）</td>
            </tr>
            <tr>
              <th><span>(3)認証時間</span></th>
              <td>0.8秒程度</td>
            </tr>
            <tr>
              <th><span>(4)Felica反応距離</span></th>
              <td>筐体から5mm</td>
            </tr>
            <tr>
              <th>
                <span
                  >外形寸法(mm)<br />
                  TYPE-A(埋込型)</span
                >
              </th>
              <td>192×88×21.8 (突起部含まず)</td>
            </tr>
            <tr>
              <th>
                <span>TYPE-B（直付型）</span>
              </th>
              <td>192×88×59 (突起部含まず)</td>
            </tr>
          </tbody>
        </table>
              </div>
<p class="accordion_title_end">閉じる</p>

          </li>
        </ul>

      </div>
      
    </section>

    <!-- ↓ VA-300セクションここから -->
    <section class="va-300 effect-fade">
      <h2 id="va-300_title" class="va-300_title">VA-300</h2>
      <p class="va-300_title_jp">ブイエー&nbsp;-&nbsp;300</p>
      <div class="va-300_container">
        <div class="va-300_box">
          <p class="va-300_description_first">
            2015年の発売以来、数多くのお客様に<br />ご使用いただいているロングセラー商品です
          </p>
          <div class="va-300_minibox">
            <img
              src="<?= get_template_directory_uri(); ?>/img/products_img/products_img_10.jpg"
              alt="エントランスに実装しているVA-300の画像"
            />
          </div>
        </div>
        <div class="va-300_box">
          <div class="va-300_minibox">
            <img
              src="<?= get_template_directory_uri(); ?>/img/products_img/products_img_11.jpg"
              alt="集合住宅に実装しているVA-300の画像"
            />
          </div>
          <p class="va-300_description_second">
            集合住宅の玄関に設置されることで、<br />何も持たずに外出することが可能に
          </p>
        </div>
        <div class="va-300_box">
          <p class="va-300_description_third">
            一般法人の人貨用エレベーターや駐車場など、<br />多数のご利用者様の指を一括登録でき、<br />自動除菌機能も搭載
          </p>
          <div class="va-300_minibox">
            <img
              src="<?= get_template_directory_uri(); ?>/img/products_img/products_img_12.jpg"
              alt="一般法人の人貨用エレベーターに実装しているVA-300の画像"
            />
          </div>
        </div>
        
      </div>
    </section>
    <!-- ↓VA-300 FUNCTION & SPECIFICATIONセクションここからここから -->
    <section class="va-300_fnc_spec effect-fade">
      <div class="va-300_fnc_spec_inner">
        <h3 id="va-300_fnc_spec_title" class="va-300_fnc_spec_title">
          FUNCTION & SPECIFICATION
        </h3>
      </div>
      <div class="va-300_fnc_spec_container">
        <p class="va-300_fnc_spec_subtitle">VA-300</p>
        <div class="va-300_spec_img">
          <img
            src="<?= get_template_directory_uri(); ?>/img/products_img/products_img_10.png"
            alt="VA-300のスペック表示のイラスト（パソコン表示用）"
          />
        </div>
        <div class="bio_cobra_spec_img_SP">
          <img
            src="<?= get_template_directory_uri(); ?>/img/products_img/products_img_SP10.png"
            alt="VA-300のスペック表示のイラスト（スマートフォン表示用）"
          />
        </div>
        <ul class="accordion-area">
          <li>
            <!--li ~ /li までが一つのアコーディオン-->
              <div class="accordion_title_box">
              <h3 class="accordion_title">機能・スペックをみる</h3>
              <div class="spec_button">
                <img src="<?= get_template_directory_uri(); ?>/img/products_img/spec_button.png" alt="逆三角矢印のボタン">
              </div>
              </div>
              <div class="accordion_box">
        <table class="va-300_fnc_spec_table">
          <tbody class="va-300_fnc_spec_box">
            <tr>
              <th><span>登録指数</span></th>
              <td>
                最大2,000指（オプションのテンキー使用により、最大9600指まで対応可能）
              </td>
            </tr>
            <tr>
              <th><span>認証媒体</span></th>
              <td>指(血流画像)FaliCa&nbsp;Card</td>
            </tr>
            <tr>
              <th><span>カード</span></th>
              <td>
                工事用、管理用（登録一括カード、空室用カード）、ユーザー用（登録・抹消カード、入居者用カード）に対応。<br />枚数等についてはお問合せ下さい。
              </td>
            </tr>
            <tr>
              <th><span>認証時間</span></th>
              <td>1秒前後</td>
            </tr>
            <tr>
              <th><span>ID番号</span></th>
              <td>2～8桁</td>
            </tr>
            <tr>
              <th><span>電源周波数</span></th>
              <td>50/60Hz±1Hz</td>
            </tr>
            <tr>
              <th><span>通信I/F</span></th>
              <td>
                RS-232C、RS-485、Ethernet、無電圧接点出力、ホトカプラー入力
              </td>
            </tr>
            <tr>
              <th><span>消費電力</span></th>
              <td>20W以下</td>
            </tr>
            <tr>
              <th><span>電源電圧</span></th>
              <td>AC100V±10%</td>
            </tr>
            <tr>
              <th><span>使用環境</span></th>
              <td>湿度-10~5050℃／ 30 ～ 90%RH&emsp;結露なきこと</td>
            </tr>
            <tr>
              <th><span>インターフェース</span></th>
              <td>RS485、<br />イーサーネット</td>
            </tr>
            <tr>
              <th>
                <span>本人拒否率（FRR）</span>
              </th>
              <td>1%未満</td>
            </tr>
            <tr>
              <th>
                <span>他人拒否率（FAR）</span>
              </th>
              <td>0.0001%</td>
            </tr>
          </tbody>
        </table>
              </div>
                            <p class="accordion_title_end">閉じる</p>

          </li>
        </ul>

      </div>
      
    </section>

    <!-- ↓トータル管理システムのセクションここから     -->
    <section class="totla_ms effect-fade">
      <div class="total_ms_cotainer">
               <p class="total_ms_title_small_jp">トータル管理システム</p>

        <h2 class="total_ms_title">TOTAL MANAGEMENT SYSTEM</h2>
        <p class="total_ms_text">
          「血流認証」の特性を最大限に活かすことで、ハイセキュリティの鍵としての機能はもちろん、ネットワークに繋げることにより、トータル管理システムへと進化しました。<br />
          新時代の血流認証装置で指1本から始まる、安心・安全そして便利で快適な暮らしをお届けします。
        </p>
        <div class="total_ms_video_box">
          <video src="<?= get_template_directory_uri(); ?>/movie/products_movie_1_compressed.mp4" controls></video>
        </div>
      </div>
    </section>
<?php get_footer(); ?>