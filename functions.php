<?php

// ============================================================
// 基本設定
// ============================================================

// 管理バー非表示
add_filter('show_admin_bar', '__return_false');

// アイキャッチを有効化
add_theme_support('post-thumbnails');
add_image_size("sq-image", 500, 500, true);
add_image_size("se-image", 500, 300, true);

// 抜粋文末文字を変更
function custom_excerpt_more($more)
{
	return ' ... ';
}
add_filter('excerpt_more', 'custom_excerpt_more');

function custom_excerpt_length($length)
{
	return 48;
}
add_filter('excerpt_length', 'custom_excerpt_length', 999);

// 固定ページのみ自動的に付与される p タグや br タグを無効
function disable_page_wpautop()
{
	if (is_page()) remove_filter('the_content', 'wpautop');
}
add_action('wp', 'disable_page_wpautop');

remove_filter('the_excerpt', 'wpautop');

// jQueryの重複排除
function fix_jquery_duplicate()
{
	if (!is_admin()) {
		wp_deregister_script('jquery');
		wp_deregister_script('jquery-core');
		wp_deregister_script('jquery-migrate');
	}
}
add_action('wp_enqueue_scripts', 'fix_jquery_duplicate', 999);


function defer_js($tag, $handle)
{
	if (is_admin()) return $tag;
	return str_replace(' src', ' defer src', $tag);
}
add_filter('script_loader_tag', 'defer_js', 10, 2);

function original_css_js_init()
{
	// Google Fonts の読み込み
	wp_enqueue_style('google_font_style', 'https://fonts.googleapis.com/css2?family=Zen+Kaku+Gothic+New:wght@300;400;500;700;900&family=Teachers:ital,wght@0,400..800;1,400..800&family=League+Spartan:wght@100..900&family=Roboto:ital,wght@0,100..900;1,100..900&family=Noto+Sans+JP:wght@100..900&display=swap', array(), null);

	// ScrollHintのCSS
	wp_enqueue_style('scrollhint-css', 'https://unpkg.com/scroll-hint@latest/css/scroll-hint.css', array(), null);

	// メインスタイルの読み込み
	wp_enqueue_style('style', get_template_directory_uri() . '/css/style.css', array(), '1.0.0');

	// jQuery の読み込み
	if (!is_admin()) {
		wp_deregister_script('jquery');
		wp_enqueue_script('jquery', 'https://code.jquery.com/jquery-3.7.1.min.js', array(), null, false);
	}
}
add_action('wp_enqueue_scripts', 'original_css_js_init');