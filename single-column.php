<?php get_header(); ?>

<main id="page-column_details" class="wrapper">
  <section class="sec-mv">
    <div class="sec-mv__ct">
      <h1 class="sec-mv__ttl">
        <span class="c-ft--en">COLUMN</span>
        <span class="c-ft--jp">コラム</span>
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
      <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
          <div class="news-detail">
            <div class="news-meta js-scrollin">
              <time class="news-meta__time"><?php the_time('Y.m.d'); ?></time>
              <?php
              $terms = get_the_terms(get_the_ID(), 'column-category');
              if ($terms && ! is_wp_error($terms)) {
                foreach ($terms as $term) {
                  echo "<span class='news-meta__cate news-meta__cate_column'>" . esc_html($term->name) . "</span>";
                }
              }
              ?>
            </div>
            <h1 class="news-detail__ttl js-scrollin"><?php the_title(); ?></h1>
            <div class="news-detail__main js-scrollin">
              <?php the_content(); ?>
            </div>
            <?php
            $radio_value = get_field('doct');
            if ($radio_value === 'yasuoka') {
              echo '<div class="bl_author">
	<div class="bl_flex">
		<figure><img src="https://yasuoka-dental.net/wp-content/uploads/2024/11/rijicyo.jpeg" alt=""></figure>
		<div class="bl_txt-area">
			<span>この記事の監修医師</span>
			<dl>
				<dt>医療法人 翼翔会理事長<br>安岡 大志</dt>
				<dd>当オフィスは患者様とのコミュニケーションを重視し、価値観やライフステージに合わせた最適な治療を提供いたします。患者様のご希望を叶えることが私たちの喜びですので、どんなことでもお気軽にご相談ください。<a href="https://yasuoka-dental.net/chairman/" target="_blank" style="display:block; border:solid 1px #7ECC30; padding:.5em; color:#7ECC30;width:fit-content; text-decoration:none; margin-top:.5rem;">監修者プロフィール詳細を見る⇒</a></dd>
			</dl>
		</div>
	</div>
	<p>大阪歯科大学卒業後、最新の歯科治療技術を研究。数多くの症例を経験したのち、安岡デンタルオフィスを開業後、医療社団法人翼翔会の理事長に就任。臨床歯周病学会、国際口腔インプラント学会(ICOI)、日本口腔インプラント学会、日本臨床歯科学会などに所属、ICOI認定の指導医でもある。</p>
</div>';
            } elseif ($radio_value === 'kawagoe') {
              echo '<div class="bl_author">
	<div class="bl_flex">
		<figure><img src="https://umeda.yasuoka-dental.net/wp-content/uploads/2024/12/kawagoesennei.png" alt=""></figure>
		<div class="bl_txt-area">
			<span>この記事の監修医師</span>
			<dl>
				<dt>YASUOKA DENTAL OFFICE UMEDA　歯科医師<br>川越 智仁</dt>
				<dd>みなさんは歯医者に行くタイミングはどのような時ですか？痛みが出た時や検診のためなど、さまざまだと思います。しかし、痛みが出てからの治療は歯を削る量が増え、費用もかさみます。そうなる前に検診に来ていただければ、早期に対処でき、大切な歯と健康を守ることができます。ご来院された方には笑顔と幸せをお届けできるよう、丁寧な対応を心がけています。</dd>
			</dl>
		</div>
	</div>
</div>';
            } elseif ($radio_value === 'hayashi') {
              echo '<div class="bl_author">
	<div class="bl_flex">
		<figure><img src="https://umeda.yasuoka-dental.net/wp-content/uploads/2025/08/dr.jpg" alt=""></figure>
		<div class="bl_txt-area">
			<span>この記事の監修医師</span>
			<dl>
				<dt>根管治療（歯内療法）専門医<br>林 洋介</dt>
				<dd>当オフィスは天然歯を守るための根管治療に専門的に取り組んでいます。顕微鏡を用いた精密な診療や海外での研鑽を通じて、より確かな治療をご提供できるよう努めています。大切な歯をできる限り残し、将来にわたる健康につなげることが私たちの使命です。どうぞ安心してご相談ください。<a href="https://umeda.yasuoka-dental.net/treatment/endo/" target="_blank" style="display:block; border:solid 1px #7ECC30; padding:.5em; color:#7ECC30;width:fit-content; text-decoration:none; margin-top:.5rem;">監修者プロフィール詳細を見る⇒</a></dd>
			</dl>
		</div>
	</div>
</div>';
            } elseif ($radio_value === 'nagano') {
              echo '<div class="bl_author">
				<div class="bl_flex">
					<figure><img src="https://yasuoka-dental.net/wp-content/uploads/2024/11/naganoincyo.jpeg" alt=""></figure>
					<div class="bl_txt-area">
						<span>この記事の監修医師</span>
						<dl>
							<dt>安岡デンタルオフィス院長<br>長野 繫彦</dt>
							<dd>スタディーグループ歯庵、大阪SJCD 会員、COI(国際口腔インプラント学会) 会員、学術団体JAID 会員</dd>
						</dl>
					</div>
				</div>
				<p>目標を持つことが人の努力を支えると考え、歯科医療においても患者様の価値観に合った目標を共に作り上げることが大切です。痛みを治すだけでなく、人生を豊かにする歯科医療の実現が私の目標です。<a href="https://yasuoka-dental.net/staff/" target="_blank" style="display:block; border:solid 1px #7ECC30; padding:.5em; color:#7ECC30;width:fit-content; text-decoration:none; margin-top:.5rem;">監修者プロフィール詳細を見る⇒</a></p>
			</div>';
            } else {
              echo '';
            }
            ?>
            <div class="news-detail__link js-scrollin">
              <a href="<?php echo esc_url(home_url('/column/')); ?>">一覧へ戻る</a>
            </div>
          </div>
      <?php endwhile;
      endif; ?>
    </div>
  </section>
</main>

<?php get_footer(); ?>