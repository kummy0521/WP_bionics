<?php get_header(); ?>

<main class="main">
  <!-- ↓NEWS一覧セクションここから -->
  <section class="news">
    <p class="common_title_small_jp">ニュース</p>
    <h2 id="mission_title" class="common_title mission_title">NEWS</h2>

    <ul class="news_archive">
      <?php
      $news_query = new WP_Query(array(
        'post_type' => 'news',
        'posts_per_page' => 8,
        'orderby' => 'menu_order',
        'order' => 'ASC'
      ));

      if ($news_query->have_posts()) :
        while ($news_query->have_posts()) : $news_query->the_post();

          // タクソノミー（例：お知らせ、メディア掲載など）取得
          $terms = get_the_terms(get_the_ID(), 'news_taxonomy');
          $label = !empty($terms) && !is_wp_error($terms) ? esc_html($terms[0]->name) : '';
      ?>
          <li class="news_item">
            <a href="<?php the_permalink(); ?>">
              <?php if ($label) : ?>
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
  </section>
</main>

<?php get_footer(); ?>
