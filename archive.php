<?php get_header(); ?>

<main class="main">
  <!-- ↓NEWS一覧セクションここから -->
  <section class="news">
    <p class="common_title_small_jp">ニュース</p>
    <h2 id="mission_title" class="common_title mission_title">NEWS</h2>

    <ul class="news_archive">
      <?php
      // 「news」タイプの記事を最大8件、並び順は管理画面の順で
      $news_query = new WP_Query(array(
        'post_type' => 'news',       // 「news」という特別な記事だけ
        'posts_per_page' => 8,       // 最大8件
        'orderby' => 'menu_order',   // 管理画面の並び順
        'order' => 'ASC'             // 昇順（上から順に表示）
      ));

      // 記事があれば、ひとつずつ表示
      if ($news_query->have_posts()) :
        while ($news_query->have_posts()) : $news_query->the_post();

          // カテゴリーやタグのような「ラベル」を取得（例：お知らせ、メディア掲載など）
          $terms = get_the_terms(get_the_ID(), 'news_taxonomy'); // タクソノミー名は使っているものに合わせてください
          $label = '';
          if (!empty($terms) && !is_wp_error($terms)) {
            $label = $terms[0]->name;
          }
      ?>
          <li class="news_item">
            <a href="<?php the_permalink(); ?>">
              <span class="news_label"><?php echo esc_html($label); ?></span>
              <time datetime="<?php echo get_the_date('Y-m-d'); ?>"><?php echo get_the_date('Y.m.d'); ?></time>
              <p class="news_text"><?php the_title(); ?></p>
            </a>
          </li>
      <?php
        endwhile;
        wp_reset_postdata(); // データを元に戻す（大事です）
      endif;
      ?>
    </ul>
  </section>
</main>

<?php get_footer(); ?>
