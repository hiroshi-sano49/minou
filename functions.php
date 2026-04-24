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


function defer_js($tag, $handle)
{
	if (is_admin()) return $tag;

	// deferしないスクリプトを除外
	$exclude = [
		'jquery',
		'jquery-core',
		'jquery-migrate',
		'sbi-scripts',
		'sbi-init',
	];
	if (in_array($handle, $exclude)) return $tag;

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
	wp_enqueue_style(
		'style',
		get_stylesheet_directory_uri() . '/css/styles.css',
		[],
		filemtime(get_stylesheet_directory() . '/css/styles.css')
	);
}
add_action('wp_enqueue_scripts', 'original_css_js_init');


// add_action('init', function () {

// 	if (
// 		isset($_GET['opcache_clear']) &&
// 		$_GET['opcache_clear'] === '1' &&
// 		isset($_GET['key']) &&
// 		$_GET['key'] === 'A03V03!'
// 	) {

// 		// IP制限（ここ修正）
// 		$allowed_ip = '14.132.197.245';
// 		if ($_SERVER['REMOTE_ADDR'] !== $allowed_ip) {
// 			status_header(403);
// 			exit('Forbidden');
// 		}

// 		// 管理者チェック
// 		if (!is_user_logged_in() || !current_user_can('administrator')) {
// 			status_header(403);
// 			exit('No permission');
// 		}

// 		// OPcacheクリア
// 		if (function_exists('opcache_reset')) {
// 			opcache_reset();
// 			echo 'OPcache cleared';
// 		} else {
// 			echo 'OPcache not enabled';
// 		}

// 		exit;
// 	}
// });