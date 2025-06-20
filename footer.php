
    <!-- ↓ABOUT USセクションここから -->

    <section class="aboutus">
      <div class="wrp_aboutus">
        <div class="aboutus_inner_gradation">
          <h2 class="aboutus_title">ABOUT US</h2>
          <div class="aboutus_container">
            <div class="aboutus_box_left">
              <ul class="aboutus_list">
                <li>
                  <a href="./aboutus/aboutus.html#mission_title">企業理念</a>
                </li>
                <li>
                  <a href="./aboutus/aboutus.html#company_prof_title"
                    >会社概要</a
                  >
                </li>
                <li>
                  <a href="./aboutus/aboutus.html#history_title">沿革</a>
                </li>
              </ul>
            </div>
            <div class="aboutus_box_right">
              <ul class="aboutus_list">
                <li>
                  <a href="./aboutus/aboutus.html#vision_title">ビジョン</a>
                </li>
                <li>
                  <a href="./aboutus/aboutus.html#access_title">アクセス</a>
                </li>
              </ul>
            </div>
          </div>
          <div class="button_area_aboutus">
            <a class="button" href="./aboutus/aboutus.html">View more</a>
          </div>
        </div>
        <div class="aboutus_inner_img">
          <img src="<?= get_template_directory_uri(); ?>/img/common_img_1.jpg" alt="オフィスのイメージ画像" />
        </div>
      </div>
    </section>



    <!-- ↓フッターここから -->
    <footer class="footer">
      <div class="footer_container">
        <div class="footer_box_left">
          <ul class="footer_list">
            <li>
              <img
                src="<?= get_template_directory_uri(); ?>/img/logo.png"
                alt="バイオニクス株式会社のロゴマーク"
                class="footer_logo"
              />
            </li>
            <li class="companyinfo_list_address">
              〒541-0053 大阪市中央区本町1丁目2番1号<br />本町リバーサイドビル
              2F
            </li>
            <li class="companyinfo_list_tel_fax">
              TEL：06-6267-2527&emsp;FAX：06-6267-2921
            </li>
          </ul>
        </div>

        <div class="footer_box_right">
          <div class="footer_minibox_right">
            <a href="https://forms.gle/xR1NrYDhrFhCGfrg7">
              <h2 class="contact_title">CONTACT</h2>
            </a>
            <a
              class="contact_arrow_link"
              href="https://forms.gle/xR1NrYDhrFhCGfrg7"
            >
              <div class="arrow">
                <img src="<?= get_template_directory_uri(); ?>/img/footer_img_2.png" alt="右向きの矢印の画像" />
              </div>
            </a>
          </div>
          <p class="contact_text">
            お見積りや商品に関するご質問など、お気軽に<br />お問い合わせください。
          </p>
        </div>
      </div>
      <div class="copy_right">
        <p class="copy_right_text">
          Copyright © 2025 Bionics Co.,Ltd. All Rights Reserved.
        </p>
      </div>
    </footer>
<?php wp_footer(); ?>  
  </body>
?>