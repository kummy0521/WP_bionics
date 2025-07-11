<?php get_header(); ?>


<?php
if (have_posts()) {
	while (have_posts()) : the_post();
		// 投稿日
		$single_time = get_the_date('Y.m.d');
		// カテゴリー
		$terms = get_the_terms($post->ID, 'news_taxonomy');
		if (!empty($terms) && !is_wp_error($terms)) {
			$single_taxonomy = '<p class="single_taxonomy">カテゴリ: <span>' . esc_html($terms[0]->name) . '</span></p>';
		} else {
			// タクソノミーの項目が見つからない場合の処理
			$single_taxonomy = '';
		}
		// アイキャッチ画像情報を取得
		$single_image = get_the_post_thumbnail($post->ID, 'full', array('class' => 'single_image'));
		if (!$single_image) {
			$single_image = '';
		}
?>

		<main class="main">
			    <!-- パンくずリスト -->
    <div class="breadcrumb">
      <ul>
        <li><a href="<?= home_url(); ?>">TOP</a></li>
        <li><a href="<?= home_url('/news'); ?>">NEWS</a></li>
        <li><span><?= get_the_title(); ?></span></li>
      </ul>
    </div>

<!-- タイトル / 投稿タイトルの横に、タクソノミー名をボタン風に表示-->
<div class="single_inner">

  <div class="single_title_wrap">
    <div class="single_meta">
      <?php if (!empty($terms) && !is_wp_error($terms)) : ?>
        <span class="news_label"><?= esc_html($terms[0]->name); ?></span>
      <?php endif; ?>

      <time class="single_data" data-time="<?= $single_time; ?>"><?= $single_time; ?></time>

      <h1 class="single_title"><?php the_title(); ?></h1>
    </div>
  </div>

  <?php
  // アイキャッチ画像
  echo $single_image;
  ?>

  <!-- 投稿内容 -->
  <div class="single_content">
    <?php the_content(); ?>
  </div>

</div>
			<!-- ナビボタン -->
			<div class="single_nav">
				<?php if (get_previous_post_link()) : ?>
					<div class="single_prev single_navItem">
						<?php previous_post_link('%link', '<span>前の記事</span> %title'); ?>
					</div>
				<?php endif; ?>
				<?php if (get_next_post_link()) : ?>
					<div class="single_next single_navItem">
						<?php next_post_link('%link', '<span>次の記事</span> %title'); ?>
					</div>
				<?php endif; ?>
			</div>

    <!-- News一覧へボタン -->
    <ul class="gnavi_news">
      <li class="gnavi_text_news"><a href="<?= home_url('/news'); ?>">ニュース一覧へ</a>
</li>
      <li>
        <span
          ><a class="news_arrow_link" href="<?= home_url('/news'); ?>">
            <div class="small_arrow">
              <img
                src="<?= get_template_directory_uri(); ?>/img/top_small_arrow.jpg"
                alt="小さな右向き矢印"
                width="26px"
                height="24px"
              />
            </div> </a
        ></span>
      </li>
    </ul>

		</main>


<?php
	endwhile;
}
?>


<?php get_footer(); ?>