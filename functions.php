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

    // テーマ共通スクリプト
    wp_enqueue_script(
        'custom-script',
        get_template_directory_uri() . '/js/script.js',
        array('jquery', 'slick-carousel', 'jquery-inview'),
        null,
        true
    );

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
}
add_action('wp_enqueue_scripts', 'my_theme_enqueue_assets');
