<?php get_header(); ?>
<main id="page-news_details" class="wrapper">
	<section class="sec-mv">
		<div class="sec-mv__ct">
			<h1 class="sec-mv__ttl">
				<span class="c-ft--en">NEWS</span>
				<span class="c-ft--jp">お知らせ</span>
			</h1>
			<h2 style="display: none;"></h2>
		</div>
	</section>
	<?php
	if (function_exists('yoast_breadcrumb')) {
		yoast_breadcrumb('<div class="breadcrumb"><div class="inner">', '</div></div>');
	}
	?>
	<section class="sec-news-detail">
		<div class="inner">
			<div class="news-detail">
				<div class="news-meta js-scrollin">
					<time class="news-meta__time"><?php the_time('Y.m.d') ?></time>
					<?php
					$category = get_the_category();
					for ($i = 0; $i < count($category); ++$i) {
						$term_idsp = "category_" . $category[$i]->term_id;
						if (get_field('背景カテゴリ', $term_idsp)) {
							$color = get_field('背景カテゴリ', $term_idsp);
							echo "<span class='news-meta__cate' style='background-color:" . $color . ";'>" . $category[$i]->cat_name . "</span>";
						} else {
							echo "<span class='news-meta__cate'>" . $category[$i]->cat_name . "</span>";
						}
					}
					?>
				</div>
				<h1 class="news-detail__ttl js-scrollin"><?php the_title(); ?></h1>
				<div class="news-detail__main js-scrollin">
					<?php if (have_posts()): while (have_posts()): the_post(); ?>
							<?php the_content(); ?>
					<?php endwhile;
					endif; ?>
				</div>
				<div class="news-detail__link js-scrollin">
					<a href=" <?php echo esc_url(home_url('/')); ?>news/">一覧へ戻る</a>
				</div>
			</div>
		</div>
	</section>
</main>
<?php get_footer(); ?>