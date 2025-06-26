<?php get_header(); ?>

<main class="main">
  <!-- ↓NEWS一覧セクションここから -->
  <section class="news">
    <p class="common_title_small_jp">ニュース</p>
    <h2 id="mission_title" class="common_title mission_title">NEWS</h2>

    <ul class="news_archive">
      <?php
      // 現在のページ番号を取得（1ページ目なら1）
      $paged = get_query_var('paged') ? get_query_var('paged') : 1;

      // カスタム投稿「news」を取得
      $news_query = new WP_Query(array(
        'post_type' => 'news',
        'posts_per_page' => 8,
        'paged' => $paged,
        'orderby' => 'menu_order', // 管理画面の「並び順」に従う
  'order' => 'ASC'           // 上にあるものから順に表示（ドラッグ順）
      ));

      // 投稿があればループで表示
      if ($news_query->have_posts()) :
        while ($news_query->have_posts()) : $news_query->the_post();

          // カスタムタクソノミー（例：お知らせ、メディア掲載など）取得
          $terms = get_the_terms(get_the_ID(), 'news_taxonomy');
          $label = (!empty($terms) && !is_wp_error($terms)) ? esc_html($terms[0]->name) : '';
      ?>
          <li class="news_item">
            <a href="<?php the_permalink(); ?>">
              <?php if ($label): ?>
                <span class="news_label"><?php echo $label; ?></span>
              <?php endif; ?>
              <time datetime="<?php echo get_the_date('Y-m-d'); ?>">
                <?php echo get_the_date('Y.m.d'); ?>
              </time>
              <p class="news_text"><?php the_title(); ?></p>
            </a>
          </li>
      <?php
        endwhile;
        wp_reset_postdata();
      endif;
      ?>
    </ul>

    <!-- ↓ページネーション -->
    <div class="pagination">
      <?php
      echo paginate_links(array(
        'total' => $news_query->max_num_pages,
        'current' => $paged,
        'mid_size' => 2,
        'prev_text' => '«',
        'next_text' => '»',
        'type' => 'list' // ul/li形式を出力したい場合
      ));
      ?>
    </div>
  </section>
</main>

<?php get_footer(); ?>
