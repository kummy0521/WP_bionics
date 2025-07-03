<?php

function my_theme_enqueue_assets() {
    // --- CSS読み込み ---

    // Slick Carousel（CDN）
    wp_enqueue_style(
        'slick-carousel',
        'https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css',
        array(),
        null
    );

    // テーマ共通CSS
    wp_enqueue_style('style', get_template_directory_uri() . '/css/style.css');
    
 // base.css の読み込み
wp_enqueue_style(
    'base-style',
    get_template_directory_uri() . '/css/base.css',
    array(),
    null
);
    // --- JavaScript読み込み ---

    // jQuery（CDNに差し替え）
    wp_deregister_script('jquery'); // 既存のWordPress jQueryを解除
    wp_register_script(
        'jquery',
        'https://code.jquery.com/jquery-3.7.1.min.js',
        array(),
        null,
        true
    );
    wp_enqueue_script('jquery');

    // Slick Carousel（CDN）
    wp_enqueue_script(
        'slick-carousel',
        'https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js',
        array('jquery'),
        null,
        true
    );

    // InViewプラグイン（CDN）
    wp_enqueue_script(
        'jquery-inview',
        'https://cdnjs.cloudflare.com/ajax/libs/protonet-jquery.inview/1.1.2/jquery.inview.min.js',
        array('jquery'),
        null,
        true
    );

    // TOPページだけで読み込むJS
    if (is_front_page()) {
        wp_enqueue_script(
            'custom-script',
            get_template_directory_uri() . '/js/script.js',
            array('jquery', 'slick-carousel', 'jquery-inview'),
            null,
            true
        );
    }

    
    // --- 固定ページ「technology」専用のCSSとJS ---
    if (is_page('technology')) {
        // tech_slick.css（SCSSから変換）
        wp_enqueue_style(
            'tech-slick-style',
            get_template_directory_uri() . '/css/object/project/tech_slick.css',
            array('base-style'), // base.css の後に読み込ませる
            null
        );

        // page-technology.css（ページ専用スタイル）
        wp_enqueue_style(
            'page-technology-style',
            get_template_directory_uri() . '/css/object/project/page_technology.css',
            array('base-style'), // base.css の後に読み込ませる
            null
        );

        // technology.js（ページ専用スクリプト）
        wp_enqueue_script(
            'technology-script',
            get_template_directory_uri() . '/js/technology.js',
            array('jquery'),
            null,
            true
        );
    }

    // --- 固定ページ「products」専用のCSSとJS ---
    if (is_page('products')) {
        // accordion.css
        wp_enqueue_style(
            'accordion-style',
            get_template_directory_uri() . '/css/object/project/accordion.css',
            array('base-style'), // base.css の後に読み込ませる
            null
        );

        // page-products.css
        wp_enqueue_style(
            'page-products-style',
            get_template_directory_uri() . '/css/object/project/page-products.css',
            array('base-style'), // base.css の後に読み込ませる
            null
        );

        // products.js
        wp_enqueue_script(
            'products-script',
            get_template_directory_uri() . '/js/products.js',
            array('jquery'),
            null,
            true
        );
    }

    // --- 固定ページ「aboutus」専用のCSSとJS ---
    if (is_page('aboutus')) {
        // aboutus.css（SCSSから変換されたCSSファイル）
        wp_enqueue_style(
            'page-aboutus-style',
            get_template_directory_uri() . '/css/object/project/page-aboutus.css',
            array('base-style'), // base.css の後に読み込ませる
            null
        );

        // aboutus.js（ページ専用スクリプト）
        wp_enqueue_script(
            'aboutus-script',
            get_template_directory_uri() . '/js/aboutus.js',
            array('jquery'),
            null,
            true
        );
    }


}
add_action('wp_enqueue_scripts', 'my_theme_enqueue_assets');

// アイキャッチ画像の有効化
add_theme_support('post-thumbnails');

function register_custom_post_type_news() {
  register_post_type('news', array(
    'labels' => array(
      'name' => 'NEWS',
      'singular_name' => 'NEWS',
      'add_new' => '新規追加',
      'add_new_item' => '新規NEWSを追加',
      'edit_item' => 'NEWSを編集',
      'new_item' => '新しいNEWS',
      'view_item' => 'NEWSを表示',
      'search_items' => 'NEWSを検索',
      'not_found' => 'NEWSが見つかりませんでした',
      'not_found_in_trash' => 'ゴミ箱内にNEWSが見つかりませんでした',
      'all_items' => 'NEWS一覧',
    ),
    'public' => true,
    'has_archive' => true, // ← これでアーカイブとページネーションが有効に
    'rewrite' => array('slug' => 'news'), // URLが /news/ になる
    'menu_position' => 5,
    'menu_icon' => 'dashicons-megaphone', // 管理画面アイコン（お好みで変更可）
    'supports' => array('title', 'editor', 'thumbnail', 'custom-fields'),
    'show_in_rest' => true, // ブロックエディタ使用時に必要
  ));
}
add_action('init', 'register_custom_post_type_news');

// カスタムタクソノミー「news_taxonomy」の登録
function register_custom_taxonomy_news() {
    register_taxonomy(
        'news_taxonomy',
        'news',
        array(
            'labels' => array(
                'name'              => 'ニュース分類',
                'singular_name'     => 'ニュース分類',
                'search_items'      => '分類を検索',
                'all_items'         => 'すべての分類',
                'parent_item'       => '親分類',
                'parent_item_colon' => '親分類:',
                'edit_item'         => '分類を編集',
                'update_item'       => '分類を更新',
                'add_new_item'      => '新しい分類を追加',
                'new_item_name'     => '新しい分類名',
                'menu_name'         => 'ニュース分類',
            ),
            'hierarchical' => true, // true でカテゴリ型、false でタグ型
            'show_ui' => true,
            'show_admin_column' => true,
            'rewrite' => array('slug' => 'news-category'),
            'show_in_rest' => true, // Gutenberg対応
        )
    );
}
add_action('init', 'register_custom_taxonomy_news');

