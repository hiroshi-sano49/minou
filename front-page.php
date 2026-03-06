<?php get_header(); ?>
<main id="page-index" class="wrapper">
	<div class="bg-gradient">
		<section class="mv-index">
			<div class="mv-index__main">
				<div class="mv-index__ct">
					<p class="mv-index__ct-txt"><span>2026年4月 グランドオープン！</span></p>
					<h1 class="mv-index__ct-ttl">あたりまえを<br class="pc">最期まで。</h1>
					<p class="mv-index__ct-desc"> 小さなお子様から大人まで、<br>世界基準のケアで一生涯の健康をサポートします。 </p>
					<div class="mv-index__ct-note">
						<picture>
							<source srcset="<?php echo esc_url(get_template_directory_uri()); ?>/img/webp/index/ttl-mv.webp" type="image/webp">
							<img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/index/ttl-mv.png" alt="Grand open!">
						</picture>
					</div>
				</div>
				<div class="mv-index__main-wp">
					<ul class="mv-index__list">
						<li class="mv-index__list-item">
							<small><img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/index/icon-01.png" alt="icon"></small>
							<span>箕面萱野駅<span>徒歩5分</span></span>
						</li>
						<li class="mv-index__list-item">
							<small><img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/index/icon-02.png" alt="icon"></small>
							<span><span>安心安全</span>な歯科治療</span>
						</li>
					</ul>
					<div class="mv-index__calendar">
						<a href="https://reservation.stransa.co.jp/47f4f9361243ec0de8a3020288b7d279" target="_blank">
							<span>初診予約はこちら</span>24時間受付 </a>
					</div>
					<div class="mv-index__img">
						<picture>
							<source srcset="<?php echo esc_url(get_template_directory_uri()); ?>/img/webp/index/mv-sp01.webp" media="(max-width:640px)" type="image/webp">
							<source srcset="<?php echo esc_url(get_template_directory_uri()); ?>/img/index/mv-sp01.jpg" media="(max-width:767px)">
							<source srcset="<?php echo esc_url(get_template_directory_uri()); ?>/img/webp/index/mv01.webp" type="image/webp">
							<img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/index/mv01.jpg" alt="あたりまえを最期まで。">
						</picture>
					</div>
				</div>
			</div>
		</section>
		<section class="sec-calendar">
			<div class="inner">
				<ul class="calendar-list">
					<li class="calendar-list__item js-scrollin">
						<h2 class="calendar-list__ttl">初めての来院（初診）</h2>
						<div class="calendar-list__box">
							<div class="calendar-list__box-item">
								<iframe
									width="580"
									height="240"
									src="https://reservation.stransa.co.jp/47f4f9361243ec0de8a3020288b7d279/menu-frames/48887">
								</iframe>
							</div>
						</div>
					</li>
					<li class="calendar-list__item js-scrollin">
						<h2 class="calendar-list__ttl">小児歯科</h2>
						<div class="calendar-list__box">
							<iframe
								width="580"
								height="240"
								src="https://reservation.stransa.co.jp/47f4f9361243ec0de8a3020288b7d279/menu-frames/48888">
							</iframe>
						</div>
					</li>
				</ul>
			</div>
		</section>
	</div>
	<div class="sec-news js-scrollin">
		<div class="inner">
			<?php
			$query = new WP_Query(
				array(
					'post_type' => 'post',
					'posts_per_page' => 1,
					'order' => 'DESC',
					'orderby' => 'date'
				)
			);
			?>
			<?php if ($query->have_posts()) : ?>
				<?php while ($query->have_posts()) : $query->the_post(); ?>
					<div class="news-posts">
						<?php
						$category = get_the_category();
						for ($i = 0; $i < count($category); ++$i) {
							$term_idsp = "category_" . $category[$i]->term_id;
							if (get_field('背景カテゴリ', $term_idsp)) {
								$color = get_field('背景カテゴリ', $term_idsp);
								echo "<span class='news-posts__cate' style='background-color:" . $color . ";'>" . $category[$i]->cat_name . "</span>";
							} else {
								echo "<span class='news-posts__cate'>" . $category[$i]->cat_name . "</span>";
							}
						}
						?>
						<time class="news-posts__time"><?php the_time('Y.m.d') ?></time>
						<a href="<?php the_permalink(); ?>" class="news-posts__ttl"><?php the_title(); ?></a>
						<a href=" <?php echo esc_url(home_url('/')); ?>news/" class="news-posts__btn">トピックス一覧</a>
					</div>
				<?php endwhile; ?>
			<?php endif;
			wp_reset_postdata(); ?>
		</div>
	</div>
	<section class="sec-family">
		<div class="inner">
			<div class="family-box">
				<h2 class="c-ttl__01 js-scrollin">
					<span class="c-ft--jp"><span>ヨクシオ歯科が</span>大切にする3つのこと</span>
				</h2>
				<p class="c-txt__01 js-scrollin">
					「あたりまえを最期まで」とは？<br>それは単に病気がない状態のことではありません。<br>人が人としての尊厳を保ち、<br class="sp-sm">自分らしく生き続けること。<br><br>私たちは、この使命を実現するために、<br>3つの視点から皆様の人生をサポートします。
				</p>
				<ol class="family-list">
					<li class="family-list__item js-scrollin">
						<h3 class="family-list__ttl">Happiness</h3>
						<div class="family-list__ico">
							<picture>
								<source srcset="<?php echo esc_url(get_template_directory_uri()); ?>/img/webp/index/ico-family-01.webp" type="image/webp">
								<img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/index/ico-family-01.png" alt="Happiness" width="133">
							</picture>
						</div>
						<h4 class="family-list__caption">人間の根源的な喜び</h4>
						<p class="c-txt__02">
							「食べる・話す・笑う」。<br>これらは人間にとって根源的な喜びであり、尊厳ある日々の象徴です。 私たちは生涯を通じて、この「あたりまえ」の楽しみを損なわないよう守り続けます。
						</p>
					</li>
					<li class="family-list__item js-scrollin">
						<h3 class="family-list__ttl">Quality of time</h3>
						<div class="family-list__ico">
							<picture>
								<source srcset="<?php echo esc_url(get_template_directory_uri()); ?>/img/webp/index/ico-family-02.webp" type="image/webp">
								<img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/index/ico-family-02.png" alt="Quality of time" width="127">
							</picture>
						</div>
						<h4 class="family-list__caption">「時間の質」としての健康</h4>
						<p class="c-txt__02">
							健康とは、単に病気がないことではありません。<br>「尊厳・笑顔・自立」を失わずに生きる"時間の質"そのものです。 最期まで自分らしく、健やかに生きる人生（ピンピンコロリ）を実現します。
						</p>
					</li>
					<li class="family-list__item js-scrollin">
						<h3 class="family-list__ttl">Control</h3>
						<div class="family-list__ico">
							<picture>
								<source srcset="<?php echo esc_url(get_template_directory_uri()); ?>/img/webp/index/ico-family-03.webp" type="image/webp">
								<img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/index/ico-family-03.png" alt="Control" width="137">
							</picture>
						</div>
						<h4 class="family-list__caption">「あたりまえ」を支える実践</h4>
						<p class="c-txt__02">
							「炎症のコントロール」で全身の健康を守り、<br>「力のコントロール」で生きる力を取り戻す。<br>この2つの医療哲学の実践により、失われた「あたりまえ」を取り戻し、未来へとつなぎます。
						</p>
					</li>
				</ol>
				<div class="family-control js-scrollin">
					<!-- 修正: T_HTTP（テーマディレクトリ）→ home_url（ページURL）へ修正 -->
					<a href=" <?php echo esc_url(home_url('/')); ?>treatment-policy/" class="c-btn__01">治療方針・理念について</a>
				</div>
			</div>
		</div>
	</section>

	<section class="sec-point">
		<div class="inner">
			<div class="point-heading js-scrollin">
				<h2 class="c-ttl__01">
					<strong>STRONG POINT</strong>
					<span class="c-ft--en">STRONG POINT</span>
					<span class="c-ft--jp">
						<span>
							当院が地域の皆様に選ばれる
						</span>
						6つの特徴
					</span>
				</h2>
				<div class="point-heading__icon">
					<div class="point-heading__icon-before">
						<img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/index/icon-before.png" alt="STRONG POINT">
					</div>
					<div class="point-heading__icon-after">
						<img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/index/icon-after.png" alt="STRONG POINT">
					</div>
				</div>
			</div>
			<ol class="point-list">
				<li class="point-list__item js-scrollin">
					<h3 class="point-list__ttl">Solution</h3>
					<div class="point-list__img">
						<picture>
							<source srcset="<?php echo esc_url(get_template_directory_uri()); ?>/img/webp/index/img-point-01.webp" type="image/webp">
							<img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/index/img-point-01.jpg" alt="Solution">
						</picture>
					</div>
					<h4 class="point-list__desc">対処療法でなく根本治療を</h4>
					<p class="c-txt__02 mh">痛みを取るだけの治療は行いません。なぜそうなったのか原因を突き止め、根本から解決することで再発を防ぎます。</p>
				</li>
				<li class="point-list__item js-scrollin delay01">
					<h3 class="point-list__ttl">Best Plan</h3>
					<div class="point-list__img">
						<picture>
							<source srcset="<?php echo esc_url(get_template_directory_uri()); ?>/img/webp/index/img-point-02.webp" type="image/webp">
							<img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/index/img-point-02.jpg" alt="Best Plan">
						</picture>
					</div>
					<h4 class="point-list__desc">患者様にあわせた二次ヒアリングまで徹底（審査診断）ベストプラン</h4>
					<p class="c-txt__02 mh">初診時のカウンセリングだけでなく、検査結果に基づいた「セカンドカウンセリング」を実施。患者様一人ひとりに最適な治療計画（ベストプラン）をご提案します。</p>
				</li>
				<li class="point-list__item js-scrollin delay02">
					<h3 class="point-list__ttl">Doctor</h3>
					<div class="point-list__img">
						<picture>
							<source srcset="<?php echo esc_url(get_template_directory_uri()); ?>/img/webp/index/img-point-03.webp" type="image/webp">
							<img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/index/img-point-03.jpg" alt="Doctor">
						</picture>
					</div>
					<h4 class="point-list__desc">認定資格を有する歯科医師たちによる専門性の高い連携治療</h4>
					<p class="c-txt__02 mh">各分野の専門知識を持つ歯科医師が在籍。難症例においても、チーム医療で質の高い治療を提供します。</p>
				</li>
				<li class="point-list__item js-scrollin delay03">
					<h3 class="point-list__ttl">4 Ggroup</h3>
					<div class="point-list__img">
						<picture>
							<source srcset="<?php echo esc_url(get_template_directory_uri()); ?>/img/webp/index/img-point-04.webp" type="image/webp">
							<img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/index/img-point-04.jpg" alt="4 Ggroup">
						</picture>
					</div>
					<h4 class="point-list__desc">患者様にとって一番よい治療を提供xするための最先端、最高峰の設備</h4>
					<p class="c-txt__02 mh">CT、マイクロスコープ、口腔内スキャナーなど、大学病院レベルの最新設備を導入し、精密な診断と治療を実現します。</p>
				</li>
				<li class="point-list__item js-scrollin delay04">
					<h3 class="point-list__ttl">Consideration</h3>
					<div class="point-list__img">
						<picture>
							<source srcset="<?php echo esc_url(get_template_directory_uri()); ?>/img/webp/index/img-point-05.webp" type="image/webp">
							<img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/index/img-point-05.jpg" alt="Consideration">
						</picture>
					</div>
					<h4 class="point-list__desc">痛みに配慮した優しい治療</h4>
					<p class="c-txt__02 mh">表面麻酔や極細の針、電動麻酔器を使用し、麻酔の痛みそのものを軽減。治療中の痛みや不快感にも最大限配慮しています。</p>
				</li>
				<li class="point-list__item js-scrollin delay05">
					<h3 class="point-list__ttl">Prevention</h3>
					<div class="point-list__img">
						<picture>
							<source srcset="<?php echo esc_url(get_template_directory_uri()); ?>/img/webp/index/img-point-06.webp" type="image/webp">
							<img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/index/img-point-06.jpg" alt="Prevention">
						</picture>
					</div>
					<h4 class="point-list__desc">歯科衛生士主担当による徹底した予防医療</h4>
					<p class="c-txt__02 mh">患者様専属の歯科衛生士が担当。継続的なケアでお口の変化を見逃さず、長期的な健康維持をサポートします。</p>
				</li>
			</ol>
		</div>
	</section>
	<div class="bg-main">
		<section class="sec-trouble">
			<div class="inner">
				<div class="trouble-block js-scrollin">
					<h2 class="c-ttl__01">
						<span class="c-ft--en">Trouble</span>
						<span class="c-ft--jp">このようなお悩みは<br class="sp">ありませんか？</span>
					</h2>
					<p class="c-txt__01">症状や目的に合わせて、最適な治療をご提案します</p>
					<div class="trouble-block__icon">
						<img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/index/icon-after-02.png" alt="Trouble このようなお悩みはありませんか？">
					</div>
				</div>
				<ul class="trouble-list">
					<li class="trouble-list__item js-scrollin">
						<a href=" <?php echo esc_url(home_url('/')); ?>general" class="trouble-list__main">歯を失ってしまい<br>しっかり噛めない</a>
					</li>
					<li class="trouble-list__item js-scrollin">
						<a href=" <?php echo esc_url(home_url('/')); ?>orthodontics" class="trouble-list__main">歯並びが気になり<br>思い切り笑えない</a>
					</li>
					<li class="trouble-list__item js-scrollin">
						<a href=" <?php echo esc_url(home_url('/')); ?>ceramic" class="trouble-list__main">銀歯が目立つのが<br>コンプレックス</a>
					</li>
					<li class="trouble-list__item js-scrollin">
						<a href=" <?php echo esc_url(home_url('/')); ?>denture" class="trouble-list__main">歯の根の治療が<br>なかなか終わらない</a>
					</li>
					<li class="trouble-list__item js-scrollin">
						<a href=" <?php echo esc_url(home_url('/')); ?>periodontal" class="trouble-list__main">入れ歯が合わない・痛い</a>
					</li>
					<li class="trouble-list__item js-scrollin">
						<a href=" <?php echo esc_url(home_url('/')); ?>pediatric" class="trouble-list__main">歯を白く美しくしたい</a>
					</li>
					<li class="trouble-list__item js-scrollin">
						<a href=" <?php echo esc_url(home_url('/')); ?>general" class="trouble-list__main">他院で抜歯と言われた</a>
					</li>
					<li class="trouble-list__item js-scrollin">
						<a href=" <?php echo esc_url(home_url('/')); ?>ceramic" class="trouble-list__main">金属アレルギーが心配</a>
					</li>
				</ul>
			</div>
		</section>
		<section class="sec-menu">
			<div class="inner">
				<h2 class="c-ttl__01 js-scrollin">
					<span class="c-ft--en">Menu</span>
					<span class="c-ft--jp">診療内容</span>
				</h2>
				<ul class="menu-list">
					<li class="menu-list__item js-scrollin">
						<h3 class="menu-list__ttl mh">
							<small>GENERAL</small>
							<span><img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/index/icon-menu-01.png" alt="icon" width="40"></span>
							<strong>一般・予防</strong> お口の健康の土台を作る
						</h3>
						<ul class="menu-list__btn">
							<li class="menu-list__btn-item"><a href=" <?php echo esc_url(home_url('/')); ?>general/">一般歯科</a></li>
							<li class="menu-list__btn-item"><a href=" <?php echo esc_url(home_url('/')); ?>periodontal/">歯周病治療</a></li>
							<li class="menu-list__btn-item"><a href=" <?php echo esc_url(home_url('/')); ?>preventive/">予防・メンテナンス</a></li>
							<!-- <li class="menu-list__btn-item"><a href=" <?php echo esc_url(home_url('/')); ?>visit/">訪問診療</a></li> -->
						</ul>
					</li>
					<li class="menu-list__item js-scrollin">
						<h3 class="menu-list__ttl mh">
							<small>KIDS & FAMILY</small>
							<span><img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/index/icon-menu-02.png" alt="icon" width="38"></span>
							<strong>お子様・ご家族</strong> 家族みんなで通える安心感
						</h3>
						<ul class="menu-list__btn menu-list__btn--green">
							<li class="menu-list__btn-item"><a href=" <?php echo esc_url(home_url('/')); ?>pediatric/">小児歯科</a></li>
							<li class="menu-list__btn-item"><a href=" <?php echo esc_url(home_url('/')); ?>maternity/">マタニティ歯科</a></li>
							<!-- <li class="menu-list__btn-item"><a href=" <?php echo esc_url(home_url('/')); ?>implant/">インプラント</a></li>
							<li class="menu-list__btn-item"><a href=" <?php echo esc_url(home_url('/')); ?>denture/">入れ歯（義歯）</a></li> -->
						</ul>
					</li>
					<li class="menu-list__item js-scrollin">
						<h3 class="menu-list__ttl mh">
							<small>ESTHETIC</small>
							<span><img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/index/icon-menu-03.png" alt="icon" width="40"></span>
							<strong>審美・矯正</strong> 美しく機能的な口元へ
						</h3>
						<ul class="menu-list__btn menu-list__btn--pink">
							<li class="menu-list__btn-item"><a href=" <?php echo esc_url(home_url('/')); ?>orthodontics/">成人矯正</a></li>
							<li class="menu-list__btn-item"><a href=" <?php echo esc_url(home_url('/')); ?>ceramic/">セラミック・審美矯正</a></li>
						</ul>
					</li>
					<li class="menu-list__item js-scrollin">
						<h3 class="menu-list__ttl mh">
							<small>RESTORE</small>
							<span><img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/index/icon-menu-04.png" alt="icon" width="28"></span>
							<strong>修復・欠損</strong> 噛める喜びを取り戻す
						</h3>
						<ul class="menu-list__btn menu-list__btn--brown">
							<li class="menu-list__btn-item"><a href=" <?php echo esc_url(home_url('/')); ?>implant/">インプラント</a></li>
							<li class="menu-list__btn-item"><a href=" <?php echo esc_url(home_url('/')); ?>denture/">入れ歯</a></li>
						</ul>
					</li>
					<li class="menu-list__item js-scrollin">
						<h3 class="menu-list__ttl mh">
							<small>CARE</small>
							<span><img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/index/icon-menu-05.png" alt="icon" width="35"></span>
							<strong>守る</strong> 一生涯の健康のために
						</h3>
						<ul class="menu-list__btn menu-list__btn--purple">
							<li class="menu-list__btn-item"><a href=" <?php echo esc_url(home_url('/')); ?>preventive/">予防歯科</a></li>
							<!-- <li class="menu-list__btn-item"><a href=" <?php echo esc_url(home_url('/')); ?>pediatric/">小児歯科</a></li>
							<li class="menu-list__btn-item"><a href=" <?php echo esc_url(home_url('/')); ?>maternity/">マタニティ歯科</a></li> -->
							<!-- <li class="menu-list__btn-item"><a href=" <?php echo esc_url(home_url('/')); ?>visit">訪問歯科</a></li> -->
						</ul>
					</li>
				</ul>
			</div>
		</section>
	</div>
	<section class="sec-environment">
		<div class="inner">
			<div class="environment-block js-scrollin">
				<h2 class="c-ttl__01">
					<strong>MANAGEMENT AND<br>FACILITIES</strong>
					<span class="c-ft--en">ENVIRONMENT</span>
					<span class="c-ft--jp">徹底した衛生管理<br class="sp">と最新設備</span>
				</h2>
				<p class="c-txt__01">見えない部分にこそ、こだわりを。</p>
			</div>
			<ul class="environment-list">
				<li class="environment-list__item js-scrollin">
					<div class="environment-list__img">
						<picture>
							<source srcset="<?php echo esc_url(get_template_directory_uri()); ?>/img/webp/index/img-envi-01.webp" type="image/webp">
							<img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/index/img-envi-01.jpg" alt="完全個室">
						</picture>
					</div>
					<h3 class="environment-list__ttl">完全個室</h3>
					<p class="c-txt__02">プライバシーへの配慮</p>
				</li>
				<li class="environment-list__item js-scrollin">
					<div class="environment-list__img">
						<picture>
							<source srcset="<?php echo esc_url(get_template_directory_uri()); ?>/img/webp/index/img-envi-02.webp" type="image/webp">
							<img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/index/img-envi-02.jpg" alt="カウンセリングルーム">
						</picture>
					</div>
					<h3 class="environment-list__ttl">カウンセリングルーム</h3>
					<p class="c-txt__02">じっくり話せる環境</p>
				</li>
				<li class="environment-list__item js-scrollin">
					<div class="environment-list__img">
						<picture>
							<source srcset="<?php echo esc_url(get_template_directory_uri()); ?>/img/webp/index/img-envi-03.webp" type="image/webp">
							<img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/index/img-envi-03.jpg" alt="医科レベルの滅菌体制">
						</picture>
					</div>
					<h3 class="environment-list__ttl">医科レベルの滅菌体制</h3>
					<p class="c-txt__02">世界基準の滅菌体制</p>
				</li>
				<li class="environment-list__item js-scrollin">
					<div class="environment-list__img">
						<picture>
							<source srcset="<?php echo esc_url(get_template_directory_uri()); ?>/img/webp/index/img-envi-04.webp" type="image/webp">
							<img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/index/img-envi-04.jpg" alt="CT・マイクロスコープ">
						</picture>
					</div>
					<h3 class="environment-list__ttl">CT・マイクロスコープ</h3>
					<p class="c-txt__02">精密治療の証</p>
				</li>
			</ul>
			<div class="environment-director js-scrollin">
				<div class="environment-director__ct js-scrollin">
					<h2 class="c-ttl__01">
						<span class="c-ft--en">DIRECTOR</span>
						<span class="c-ft--jp">歯科で人々を幸せに。<br>目指すのはピンピンコロリの人生</span>
					</h2>
					<p class="environment-director__ct-info">
						医療法人 翼翔会 理事長
						<span>安岡 大志</span>
					</p>
					<p class="c-txt__02 environment-director__ct-txt">
						「木を見て森を見ず」の治療では、本当の健康は手に入りません。私は、噛み合わせ、歯周病、審美性をトータルで回復させる「フルマウスリコンストラクション」を専門とし、患者様が一生涯、自分の歯で美味しく食事ができ、自信を持って笑える人生をサポートします。
					</p>
				</div>
				<div class="environment-director__img js-scrollin">
					<picture>
						<source srcset="<?php echo esc_url(get_template_directory_uri()); ?>/img/webp/index/img-director.webp" type="image/webp">
						<img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/index/img-director.jpg" alt="DIRECTOR 歯科で人々を幸せに。目指すのはピンピンコロリの人生">
					</picture>
				</div>
			</div>
			<div class="environment-docter js-scrollin">
				<div class="environment-docter__txt"><span>DOCTOR INTRODUCTION</span></div>
				<div class="environment-docter__flex">
					<div class="environment-docter__flex-ct js-scrollin">
						<h2 class="environment-docter__flex-ttl"> 箕面萱野の皆様の<br>健康を守るパートナーとして </h2>
						<p class="environment-docter__flex-desc"> はじめまして。<br class="sp">ヨクシオ歯科 箕面萱野 院長の川越です。<br> 当院では、患者様一人ひとりのライフスタイルやご要望に合わせた最適な治療プランをご提案いたします。<br> 「歯医者は怖い」というイメージを払拭し、通うのが楽しみになるような歯科医院を目指しています。 </p>
						<h3 class="environment-docter__flex-name"><span>経歴・資格</span></h3>
						<ul class="environment-docter__flex-txt">
							<li>・大阪歯科大学 卒業</li>
							<li>・医療法人翼翔会 入職</li>
						</ul>
						<!-- <a href=" <?php echo esc_url(home_url('/')); ?>staff" class="c-btn__01">ドクター紹介を見る</a> -->
					</div>
					<div class="environment-docter__flex-img js-scrollin">
						<picture>
							<source srcset="<?php echo esc_url(get_template_directory_uri()); ?>/img/webp/index/img-docter.webp" type="image/webp">
							<img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/index/img-docter.jpg" alt="箕面萱野の皆様の健康を守るパートナーとして">
						</picture>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="sec-flow">
		<div class="inner">
			<div class="flow-block js-scrollin">
				<h2 class="c-ttl__01">
					<span class="c-ft--en">Flow</span>
					<span class="c-ft--jp">初診の流れ</span>
				</h2>
				<p class="c-txt__01">いきなり削りません。<br class="sp">納得いただいてから治療します。</p>
				<div class="flow-block__icon">
					<div class="flow-block__icon-before">
						<img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/index/icon-before-02.png" alt="STRONG POINT">
					</div>
					<div class="flow-block__icon-after">
						<img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/index/icon-after-03.png" alt="STRONG POINT">
					</div>
				</div>
			</div>
			<ol class="flow-list c-txt__02">
				<li class="flow-list__item js-scrollin">
					<h3 class="flow-list__ttl">ご予約</h3>
					<p>WEBまたはお電話にて</p>
				</li>
				<li class="flow-list__item js-scrollin delay01">
					<h3 class="flow-list__ttl">カウンセリング</h3>
					<p>お悩みをお伺いします</p>
				</li>
				<li class="flow-list__item js-scrollin delay02">
					<h3 class="flow-list__ttl">精密検査</h3>
					<p>レントゲン・写真撮影</p>
				</li>
				<li class="flow-list__item js-scrollin delay03">
					<h3 class="flow-list__ttl">治療計画の説明</h3>
					<p>モニターで分かりやすく</p>
				</li>
			</ol>
			<div class="js-scrollin">
				<a href=" <?php echo esc_url(home_url('/')); ?>first-visit/" class="c-btn__01 c-btn__01--shorter">初診の方へ</a>
			</div>
		</div>
	</section>
	<section class="sec-topics">
		<div class="inner">
			<ul class="topics-list">
				<li class="topics-list__item">
					<div class="topics-list__flex js-scrollin">
						<h2 class="c-ttl__02 topics-list__heading"><span>TOPICS</span>最新情報</h2>
						<a href=" <?php echo esc_url(home_url('/')); ?>news/" class="c-btn__02">一覧を見る</a>
					</div>
					<?php
					$query = new WP_Query(
						array(
							'post_type' => 'post',
							'posts_per_page' => 3,
						)
					);
					?>
					<?php if ($query->have_posts()) : ?>
						<ul class="topics-posts">
							<?php while ($query->have_posts()) : $query->the_post(); ?>
								<li class="topics-posts__item js-scrollin">
									<a href="<?php the_permalink(); ?>">
										<div class="topics-posts__meta">
											<time class="topics-posts__meta-time"><?php the_time('Y.m.d') ?></time>
											<?php
											$category = get_the_category();
											for ($i = 0; $i < count($category); ++$i) {
												$term_idsp = "category_" . $category[$i]->term_id;
												if (get_field('背景カテゴリ', $term_idsp)) {
													$color = get_field('背景カテゴリ', $term_idsp);
													echo "<span class='topics-posts__meta-cate' style='background-color:" . $color . ";'>" . $category[$i]->cat_name . "</span>";
												} else {
													echo "<span class='topics-posts__meta-cate'>" . $category[$i]->cat_name . "</span>";
												}
											}
											?>
										</div>
										<p class="topics-posts__ttl"><?php the_title(); ?></p>
									</a>
								</li>
							<?php endwhile; ?>
						</ul>
					<?php endif;
					wp_reset_postdata(); ?>
				</li>
				<li class="topics-list__item">
					<div class="topics-list__flex js-scrollin">
						<h2 class="c-ttl__02 topics-list__heading"><span>INSTAGRAM</span>インスタグラム</h2>
						<a href="https://www.instagram.com/yokucio_dental_official/" target="_blank" class="c-btn__02">フォローする</a>
					</div>
					<div class="instagram-box">
						<?php echo do_shortcode('[instagram-feed feed=1]'); ?>
					</div>
				</li>
			</ul>
		</div>
	</section>
	<section class="sec-fqa">
		<div class="inner">
			<h2 class="c-ttl__01 js-scrollin">
				<span class="c-ft--en">FAQ</span>
				<span class="c-ft--jp">よくあるご質問</span>
			</h2>
			<ul class="fqa-list fqa-list--index c-txt__02">
				<li class="fqa-list__item js-scrollin">
					<h3 class="fqa-list__question"><span>駐車場はありますか？</span></h3>
					<p class="fqa-list__answer">
						<span>はい、提携駐車場をご用意しております。診療時間分のサービス券をお渡しします。</span><br>
						<a href="https://qs-mall.jp/minoh/information/detail/309" target="_blank">https://qs-mall.jp/minoh/information/detail/309</a>
					</p>
				</li>
				<li class="fqa-list__item js-scrollin">
					<h3 class="fqa-list__question"><span>子供連れでも大丈夫ですか？</span></h3>
					<p class="fqa-list__answer"><span>もちろんです。キッズスペースを完備しており、保育士も在籍予定です。</span></p>
				</li>
				<li class="fqa-list__item js-scrollin">
					<h3 class="fqa-list__question"><span>クレジットカードは使えますか？</span></h3>
					<p class="fqa-list__answer"><span>各種クレジットカードをご利用いただけます。</span></p>
				</li>
				<li class="fqa-list__item js-scrollin">
					<h3 class="fqa-list__question"><span>予約なしでも行けますか？</span></h3>
					<p class="fqa-list__answer"><span>当院は予約制となっておりますが、急患対応も可能です。まずはお電話にてご連絡ください。</span></p>
				</li>
			</ul>
		</div>
	</section>
	<section class="sec-access">
		<div class="inner">
			<div class="access-flex">
				<div class="access-flex__ct js-scrollin">
					<h2 class="c-ttl__02"><span>ACCESS</span>アクセス・診療時間</h2>
					<h3 class="access-flex__ttl">ヨクシオ歯科 箕面萱野</h3>
					<p class="access-flex__txt"> 〒562-0013<br> 大阪府箕面市坊島4丁目10-8 TEN24BLDG..<br>
						<br>北大阪急行「箕面萱野駅」徒歩5分
					</p>
					<div class="access-flex__table">
						<table>
							<tr>
								<th></th>
								<th>月</th>
								<th>火</th>
								<th>火</th>
								<th>木</th>
								<th>金</th>
								<th><span>土</span></th>
								<th><span>日</span></th>
							</tr>
							<tr>
								<td>9:30〜13:00</td>
								<td><span></span></td>
								<td><span></span></td>
								<td><span></span></td>
								<td>／</td>
								<td><span></span></td>
								<td><span></span></td>
								<td>／</td>
							</tr>
							<tr>
								<td>14:30〜18:30</td>
								<td><span></span></td>
								<td><span></span></td>
								<td><span></span></td>
								<td>／</td>
								<td><span></span></td>
								<td><span></span></td>
								<td>／</td>
							</tr>
						</table>
					</div>
					<p class="c-txt__02"> 休診日：木曜、日曜、祝日 ※最終受付は18:00まで </p>
				</div>
				<div class="access-flex__map js-scrollin">
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6549.696341767842!2d135.48223328255858!3d34.834909735715215!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6000fb136f896b0b%3A0x7f50fb4f4a96d955!2z44Oo44Kv44K344Kq5q2v56eR566V6Z2i6JCx6YeO!5e0!3m2!1sja!2sjp!4v1771479429599!5m2!1sja!2sjp" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
				</div>
			</div>
		</div>
	</section>
	<section class="sec-calendar sec-calendar--02">
		<div class="inner">
			<ul class="calendar-list">
				<li class="calendar-list__item js-scrollin">
					<h2 class="calendar-list__ttl">初めての来院（初診）</h2>
					<div class="calendar-list__box">
						<div class="calendar-list__box-item">
							<iframe
								width="580"
								height="240"
								src="https://reservation.stransa.co.jp/47f4f9361243ec0de8a3020288b7d279/menu-frames/48887">
							</iframe>
						</div>
					</div>
				</li>
				<li class="calendar-list__item js-scrollin">
					<h2 class="calendar-list__ttl">小児歯科</h2>
					<div class="calendar-list__box">
						<iframe
							width="580"
							height="240"
							src="https://reservation.stransa.co.jp/47f4f9361243ec0de8a3020288b7d279/menu-frames/48888">
						</iframe>
					</div>
				</li>
			</ul>
		</div>
	</section>
	<a href="https://lin.ee/1gHDCfb" target="_blank" class="btn-float">
		<img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/common/img-line.png" alt="LINE予約">
	</a>
</main>
<?php get_footer(); ?>