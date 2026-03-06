<?php

// ============================================================
// 定数定義
// ============================================================
define('H_HTTP', home_url('/'));                        // ホーム 絶対パス
define('T_HTTP', get_template_directory_uri() . '/');  // テーマディレクトリ 絶対パス
define('H_URL', rootRelativeURL(H_HTTP));               // ホーム ルート相対パス
define('T_URL', rootRelativeURL(T_HTTP));               // テーマディレクトリ ルート相対パス
define('T_PATH', get_template_directory() . '/');      // テーマディレクトリ フルパス
define('U_URL', content_url() . '/uploads/');          // メディアアップロードディレクトリURL

function rootRelativeURL($url)
{
	$siteRootUrl = '';
	if (empty($_SERVER['HTTPS'])) {
		$siteRootUrl = 'http://' . $_SERVER['HTTP_HOST'];
	} else {
		$siteRootUrl = 'https://' . $_SERVER['HTTP_HOST'];
	}
	$url = str_replace($siteRootUrl, '', $url);
	return $url;
}


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
function custom_excerpt_more($more) {
	return ' ... ';
}
add_filter('excerpt_more', 'custom_excerpt_more');

function custom_excerpt_length($length) {
	return 48;
}
add_filter('excerpt_length', 'custom_excerpt_length', 999);

// 固定ページのみ自動的に付与される p タグや br タグを無効
function disable_page_wpautop() {
	if (is_page()) remove_filter('the_content', 'wpautop');
}
add_action('wp', 'disable_page_wpautop');

remove_filter('the_excerpt', 'wpautop');


// ============================================================
// 以下は page-*.php への移行完了後に削除予定
// ============================================================

// // ACFフィールド内の相対画像パスを絶対パスに変換（the_content()フック）
// // → page-*.php では get_template_directory_uri() で直接記述するため不要
// function replaceImagePath($arg) {
// 	$content = str_replace('"img/', '"' . get_bloginfo('template_directory') . '/img/', $arg);
// 	return $content;
// }
// add_action('the_content', 'replaceImagePath');

// // [tp] ショートコード → テーマディレクトリURI
// // → page-*.php では get_template_directory_uri() で直接記述するため不要
// function shortcode_tp() {
// 	return get_template_directory_uri();
// }
// add_shortcode('tp', 'shortcode_tp');

// // [home] ショートコード → ホームURL
// // → page-*.php では home_url('/') で直接記述するため不要
// function shortcode_home() {
// 	return home_url('/');
// }
// add_shortcode('home', 'shortcode_home');

// // <source> タグの srcset 属性へのショートコード許可
// // → [tp] ショートコード廃止に伴い不要
// function allow_shortcode_in_source_tag($allowedposttags) {
// 	$allowedposttags['source']['srcset'] = true;
// 	return $allowedposttags;
// }
// add_filter('wp_kses_allowed_html', 'allow_shortcode_in_source_tag', 10, 1);
