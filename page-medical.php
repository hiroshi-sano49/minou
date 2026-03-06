<?php get_header(); ?>

<main id="page-medical" class="wrapper">

  <section class="sec-mv">
    <div class="sec-mv__ct">
      <h1 class="sec-mv__ttl">
        <span class="c-ft--en">MEDICAL SERVICES</span>
        <span class="c-ft--jp">診療内容</span>
      </h1>
      <p class="sec-mv__desc">当院では、一般歯科から専門的な治療まで、患者様のお悩みやご希望に合わせた幅<br class="pc-sm">広い診療を行っています。</p>
    </div>
  </section>
  <div class="breadcrumb">
    <div class="inner"><?php echo do_shortcode('[wpseo_breadcrumb]'); ?></div>
  </div>
  <section class="sec-medical">
    <div class="inner">
      <ul class="medical-list">
        <li class="medical-list__item js-scrollin">
          <a href="../general">
            <div class="medical-list__img">
              <picture>
                <source srcset="<?php echo esc_url(get_template_directory_uri()); ?>/img/webp/medical/medical-sub1.webp" type="image/webp">
                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/medical/medical-sub1.jpg" alt="一般歯科">
              </picture>
            </div>
            <div class="medical-list__ct">
              <h2 class="medical-list__ct-ttl">一般歯科</h2>
              <p>むし歯治療、根管治療など、痛みに配慮した丁寧な治療を行います。</p>
            </div>
          </a>
        </li>
        <li class="medical-list__item js-scrollin">
          <a href="../periodontal">
            <div class="medical-list__img">
              <picture>
                <source srcset="<?php echo esc_url(get_template_directory_uri()); ?>/img/webp/medical/medical-sub2.webp" type="image/webp">
                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/medical/medical-sub2.jpg" alt="歯周病治療">
              </picture>
            </div>
            <div class="medical-list__ct">
              <h2 class="medical-list__ct-ttl">歯周病治療</h2>
              <p>歯を失う原因となる歯周病を、検査に基づき根本から改善します。</p>
            </div>
          </a>
        </li>
        <li class="medical-list__item js-scrollin">
          <a href="../preventive">
            <div class="medical-list__img">
              <picture>
                <source srcset="<?php echo esc_url(get_template_directory_uri()); ?>/img/webp/medical/medical-sub3.webp" type="image/webp">
                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/medical/medical-sub3.jpg" alt="予防・メンテナンス">
              </picture>
            </div>
            <div class="medical-list__ct">
              <h2 class="medical-list__ct-ttl">予防・メンテナンス</h2>
              <p>むし歯や歯周病にならないための、プロによるケアと指導。</p>
            </div>
          </a>
        </li>
        <li class="medical-list__item js-scrollin">
          <a href="../pediatric">
            <div class="medical-list__img">
              <picture>
                <source srcset="<?php echo esc_url(get_template_directory_uri()); ?>/img/webp/medical/medical-sub4.webp" type="image/webp">
                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/medical/medical-sub4.jpg" alt="小児歯科">
              </picture>
            </div>
            <div class="medical-list__ct">
              <h2 class="medical-list__ct-ttl">小児歯科</h2>
              <p>お子様のペースに合わせ、怖くない・痛くない治療を心がけています。</p>
            </div>
          </a>
        </li>
        <li class="medical-list__item js-scrollin">
          <a href="../pediatric-ortho">
            <div class="medical-list__img">
              <picture>
                <source srcset="<?php echo esc_url(get_template_directory_uri()); ?>/img/webp/medical/medical-sub5.webp" type="image/webp">
                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/medical/medical-sub5.jpg" alt="小児矯正">
              </picture>
            </div>
            <div class="medical-list__ct">
              <h2 class="medical-list__ct-ttl">小児矯正</h2>
              <p>お子様の成長を利用し、将来の歯並びと健康な発育をサポートします。</p>
            </div>
          </a>
        </li>
        <li class="medical-list__item js-scrollin">
          <a href="../orthodontics">
            <div class="medical-list__img">
              <picture>
                <source srcset="<?php echo esc_url(get_template_directory_uri()); ?>/img/webp/medical/medical-sub6.webp" type="image/webp">
                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/medical/medical-sub6.jpg" alt="成人矯正">
              </picture>
            </div>
            <div class="medical-list__ct">
              <h2 class="medical-list__ct-ttl">成人矯正</h2>
              <p>目立ちにくいマウスピース矯正など、ライフスタイルに合わせた矯正治療。</p>
            </div>
          </a>
        </li>
        <li class="medical-list__item js-scrollin">
          <a href="../ceramic">
            <div class="medical-list__img">
              <picture>
                <source srcset="<?php echo esc_url(get_template_directory_uri()); ?>/img/webp/medical/medical-sub7.webp" type="image/webp">
                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/medical/medical-sub7.jpg" alt="セラミック・審美治療">
              </picture>
            </div>
            <div class="medical-list__ct">
              <h2 class="medical-list__ct-ttl">セラミック・審美治療</h2>
              <p>銀歯が気になる、歯を白くしたいなど、口元の美しさを追求します。</p>
            </div>
          </a>
        </li>
        <li class="medical-list__item js-scrollin">
          <a href="../implant">
            <div class="medical-list__img">
              <picture>
                <source srcset="<?php echo esc_url(get_template_directory_uri()); ?>/img/webp/medical/medical-sub8.webp" type="image/webp">
                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/medical/medical-sub8.jpg" alt="インプラント">
              </picture>
            </div>
            <div class="medical-list__ct">
              <h2 class="medical-list__ct-ttl">インプラント</h2>
              <p>失った歯を人工歯根で補い、天然歯のような噛み心地を取り戻します。</p>
            </div>
          </a>
        </li>
        <li class="medical-list__item js-scrollin">
          <a href="../denture">
            <div class="medical-list__img">
              <picture>
                <source srcset="<?php echo esc_url(get_template_directory_uri()); ?>/img/webp/medical/medical-sub9.webp" type="image/webp">
                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/medical/medical-sub9.jpg" alt="入れ歯">
              </picture>
            </div>
            <div class="medical-list__ct">
              <h2 class="medical-list__ct-ttl">入れ歯</h2>
              <p>痛くない、外れにくい、見た目が自然な入れ歯をご提案します。</p>
            </div>
          </a>
        </li>
        <li class="medical-list__item js-scrollin">
          <a href="../maternity">
            <div class="medical-list__img">
              <picture>
                <source srcset="<?php echo esc_url(get_template_directory_uri()); ?>/img/webp/medical/medical-sub10.webp" type="image/webp">
                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/medical/medical-sub10.jpg" alt="マタニティ診療">
              </picture>
            </div>
            <div class="medical-list__ct">
              <h2 class="medical-list__ct-ttl">マタニティ診療</h2>
              <p>妊娠中のデリケートな時期に合わせた、安全でやさしい歯科治療。</p>
            </div>
          </a>
        </li>
        <!--<li class="medical-list__item js-scrollin">
				<a href="../visit">
					<div class="medical-list__img">
						<picture>
							<source srcset="<?php echo esc_url(get_template_directory_uri()); ?>/img/webp/medical/medical-sub11.webp" type="image/webp">
							<img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/medical/medical-sub11.jpg" alt="訪問診療">
						</picture>
					</div>
					<div class="medical-list__ct">
						<h2 class="medical-list__ct-ttl">訪問診療</h2>
						<p>通院が困難な方のご自宅や施設へ伺い、歯科治療を行います。</p>
					</div>
				</a>
			</li>-->
      </ul>
    </div>
  </section>

  <?php get_template_part('inc/entry'); ?>

</main>

<?php get_footer(); ?>