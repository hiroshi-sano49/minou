<?php get_header(); ?>
<main id="page-news" class="wrapper">
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
	<section class="sec-news-page">
		<div class="inner">
			<ul class="menu-list__btn menu-list__btn--cate js-scrollin">
				<li class="menu-list__btn-item <?php if (is_home()) {
																					echo 'active';
																				} ?>"><a href=" <?php echo esc_url(home_url('/')); ?>news/">すべて</a></li>
				<?php
				$categories = get_categories('hide_empty=1&title_li=');
				if (is_array($categories)) {
					foreach ($categories as $category):
						$cat_id = $category->cat_ID;
						$cat_title = $category->cat_name;
						$cat_url = get_category_link($cat_id);
				?>
						<li class="menu-list__btn-item <?php if (is_category($cat_id)) {
																							echo 'active';
																						} ?>">
							<a href="<?php echo $cat_url; ?>"><?php echo $cat_title; ?></a>
						</li>
				<?php
					endforeach;
				}
				?>
			</ul>

			<ul class="news-list">
				<?php if (have_posts()): while (have_posts()): the_post(); ?>
						<li class="news-list__item js-scrollin">
							<a href="<?php the_permalink(); ?>">
								<div class="news-meta">
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
								<p class="news-list__ttl"><?php the_title(); ?></p>
							</a>
						</li>
				<?php endwhile;
				endif; ?>
			</ul>
			<div class="nums-page js-scrollin">
				<?php wp_pagenavi(); ?>
			</div>
		</div>
	</section>
</main>
<?php get_footer(); ?>