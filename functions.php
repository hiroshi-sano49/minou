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

// 標準投稿のアーカイブを有効化し、スラッグを news に設定
add_action('registered_post_type_post', function ($post_type, $post_type_object) {
	$post_type_object->has_archive = 'news';
	$post_type_object->rewrite = [
		'slug'       => 'news',
		'with_front' => false,
	];
	// リライトルールを再登録
	add_rewrite_rule(
		'news/page/([0-9]{1,})/?$',
		'index.php?post_type=post&paged=$matches[1]',
		'top'
	);
	add_rewrite_rule(
		'news/?$',
		'index.php?post_type=post',
		'top'
	);
}, 10, 2);

// Yoastパンくず：お知らせアーカイブ・カテゴリページ対応
add_filter('wpseo_breadcrumb_links', function ($links) {
	if (is_post_type_archive('post') || is_home()) {
		// /news/ アーカイブ：TOP ＞ お知らせ
		$links[] = [
			'text' => 'お知らせ',
			'url'  => home_url('/news/'),
		];
	} elseif (is_category()) {
		// カテゴリページ：TOP ＞ お知らせ ＞ カテゴリ名
		$news_link = [
			'text' => 'お知らせ',
			'url'  => home_url('/news/'),
		];
		array_splice($links, 1, 0, [$news_link]);
	}
	return $links;
});

// アーカイブ・タクソノミーページの表示件数を10件に設定
add_action('pre_get_posts', function ($query) {
	if (is_admin() || ! $query->is_main_query()) return;

	// お知らせ（標準投稿）アーカイブ
	if ($query->is_home() || $query->is_archive() && $query->get('post_type') === 'post') {
		$query->set('posts_per_page', 10);
	}

	// コラム（CPT）アーカイブ・タクソノミー
	if ($query->is_post_type_archive('column') || $query->is_tax('column-category')) {
		$query->set('posts_per_page', 10);
	}
});

// 管理画面の「投稿」表示を「お知らせ」に変更
add_action('init', function () {
	global $wp_post_types;
	if (isset($wp_post_types['post'])) {
		$labels = &$wp_post_types['post']->labels;
		$labels->name                  = 'お知らせ';
		$labels->singular_name         = 'お知らせ';
		$labels->add_new               = '新規お知らせを追加';
		$labels->add_new_item          = '新規お知らせを追加';
		$labels->edit_item             = 'お知らせを編集';
		$labels->new_item              = '新規お知らせ';
		$labels->view_item             = 'お知らせを表示';
		$labels->search_items          = 'お知らせを検索';
		$labels->not_found             = 'お知らせが見つかりません';
		$labels->not_found_in_trash    = 'ゴミ箱にお知らせはありません';
		$labels->all_items             = 'お知らせ一覧';
		$labels->menu_name             = 'お知らせ';
		$labels->name_admin_bar        = 'お知らせ';
	}
});
