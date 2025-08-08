<?php get_header(); ?>
<main class="main">
  <!-- ↓NEWS一覧セクションここから -->
  <section class="news">
    <p class="common_title_small_jp">ニュース</p>
    <h2 id="mission_title" class="common_title mission_title">NEWS</h2>
    <ul class="news_archive">
      <?php
      // 現在のページ番号を取得（1ページ目なら1）
      $paged = max(1, get_query_var('paged'), get_query_var('page'));
      // カスタム投稿「news」を取得
      $news_query = new WP_Query(array(
        'post_type'           => 'news',
        'posts_per_page'      => 8,
        'paged'               => $paged,
        'orderby'             => 'date', // 公開日の順で並べる
        'order'               => 'DESC', // 新しい→古い
        'ignore_sticky_posts' => true,    // 固定記事を除外
      ));
      // 投稿があればループで表示
      if ($news_query->have_posts()) :
        while ($news_query->have_posts()) : $news_query->the_post();
          // カスタムタクソノミー（例：お知らせ、メディア掲載など）取得
          $terms = get_the_terms(get_the_ID(), 'news_taxonomy');
          $label = (!empty($terms) && !is_wp_error($terms)) ? esc_html($terms[0]->name) : '';
          // ACFフィールド「link_url」を取得（外部リンクや別ページ用）
          $custom_link = get_field('link_url');
          // ACFフィールド「target_blank」を取得（trueなら別タブで開く）
          $target_blank = get_field('target_blank');
          // リンク先URLを決定（ACFがあればそちら、無ければ記事ページ）
          $link_url = $custom_link ? esc_url($custom_link) : esc_url(get_permalink());
          // target属性を決定（trueの場合のみ別タブ）
          $target_attr = $target_blank ? ' target="_blank" rel="noopener noreferrer"' : '';
      ?>
          <li class="news_item">
            <a href="<?php echo $link_url; ?>" <?php echo $target_attr; ?>>
              <?php if ($label): ?>
                <span class="news_label"><?php echo $label; ?></span>
              <?php endif; ?>
              <time datetime="<?php echo esc_attr(get_post_time('c')); ?>">
                <?php echo esc_html(get_the_date('Y.m.d')); ?>
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