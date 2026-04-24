<?php get_header(); ?>

<main id="page-about" class="wrapper">
  <section class="sec-mv">
    <div class="sec-mv__ct">
      <h1 class="sec-mv__ttl">
        <span class="c-ft--en">CLINIC CONCEPT</span>
        <span class="c-ft--jp">医院紹介</span>
      </h1>
      <p class="sec-mv__desc">小さなお子様から大人まで、世界基準のケアで一生涯の健康をサポートします。、</p>
    </div>
  </section>
  <div class="breadcrumb">
    <div class="inner"><?php echo do_shortcode('[wpseo_breadcrumb]'); ?></div>
  </div>
  <section class="sec-about">
    <div class="inner">
      <div class="about-block">
        <div class="about-block__ct js-scrollin">
          <div class="about-block__ct--box">
            <h2 class="about-block__ct-ttl">
              <span class="c-ft--en">PHILOSOPHY</span>
              <span class="c-ft--jp">
                私たちは歯科医療を通じて<br>
                世界で一番人々を幸せにする
              </span>
            </h2>
            <p>
              当院は、世界基準の歯科診療の提供を大切にしながら、誰にとっても通いやすく、 親しみの持てる歯科医院でありたいと考えています。<br>
              スタッフ一人ひとりが患者さんに寄り添い、お口の健康はもちろん、 全身の健康維持をしっかりとサポートいたします。
            </p>
          </div>
          <div class="about-block__ct-note">
            <p>
              「治療を決めるのは歯科医ではなく患者さん。<br>二度とは戻らない大切な歯だからこそ。」
            </p>
          </div>
        </div>
        <div class="about-block__img js-scrollin">
          <picture>
            <source srcset="<?php echo esc_url(get_template_directory_uri()); ?>/img/webp/about/img-01.webp" type="image/webp">
            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/about/img-01.jpg" alt="妥協なき歯科医療で 人々を幸せに。">
          </picture>
        </div>
      </div>
      <div class="about-img js-scrollin">
        <picture>
          <source srcset="<?php echo esc_url(get_template_directory_uri()); ?>/img/webp/about/img-02-sp.webp" media="(max-width:834px)" type="image/webp">
          <source srcset="<?php echo esc_url(get_template_directory_uri()); ?>/img/about/img-02-sp.png" media="(max-width:834px)">
          <source srcset="<?php echo esc_url(get_template_directory_uri()); ?>/img/webp/about/img-02.webp" type="image/webp">
          <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/about/img-02.png" alt="妥協なき歯科医療で 人々を幸せに。">
        </picture>
      </div>
      <div class="point-heading js-scrollin mbpc-68">
        <h2 class="c-ttl__01">
          <strong>STRONG POINT</strong>
          <span class="c-ft--en">STRONG POINT</span>
          <span class="c-ft--jp">
            <span>
              当院が選ばれる
            </span>
            5つの特徴
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
      <div class="about-list">
        <div class="about-list__item js-scrollin">
          <div class="about-list__box">
            <div class="about-list__ct c-txt__02">
              <h3 class="about-list__ct-ttl">チーム医療で幅広く対応</h3>
              <p>
                大阪エリアに5院を展開する医療法人ならではのネットワーク。 インプラント指導医、矯正認定医など、各分野の専門家が連携し、 難症例にも対応可能な高度な治療を提供します。
              </p>
              <ul class="about-list__tag">
                <li><span>ICOI指導医</span></li>
                <li><span>インビザライン・ダイヤモンド</span></li>
                <li><span>歯内療法専門医</span></li>
              </ul>
            </div>
            <div class="about-list__img">
              <picture>
                <source srcset="<?php echo esc_url(get_template_directory_uri()); ?>/img/webp/about/img-03.webp" type="image/webp">
                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/about/img-03.jpg" alt="チーム医療で幅広く対応">
              </picture>
            </div>
          </div>
        </div>
        <div class="about-list__item js-scrollin">
          <div class="about-list__box">
            <div class="about-list__icon">
              <picture>
                <source srcset="<?php echo esc_url(get_template_directory_uri()); ?>/img/webp/about/icon-01.webp" type="image/webp">
                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/about/icon-01.png" alt="先端設備による精密治療">
              </picture>
            </div>
            <div class="about-list__ct c-txt__02">
              <h3 class="about-list__ct-ttl">先端設備による精密治療</h3>
              <p>
                歯科用CT、マイクロスコープ、口腔内スキャナー（iTero）を完備。 「勘」に頼らない、データに基づいた精密な診断と治療を実現します。
              </p>
            </div>
          </div>
        </div>
        <div class="about-list__item js-scrollin">
          <div class="about-list__box">
            <div class="about-list__icon">
              <picture>
                <source srcset="<?php echo esc_url(get_template_directory_uri()); ?>/img/webp/about/icon-02.webp" type="image/webp">
                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/about/icon-02.png" alt="痛みへの徹底配慮">
              </picture>
            </div>
            <div class="about-list__ct c-txt__02">
              <h3 class="about-list__ct-ttl">痛みへの徹底配慮</h3>
              <p>
                表面麻酔、極細針、電動麻酔器を使用し、痛みを最小限に。 リラックスして治療を受けられる「静脈内鎮静法」にも対応しています。
              </p>
            </div>
          </div>
        </div>
        <div class="about-list__item js-scrollin">
          <div class="about-list__box">
            <div class="about-list__icon">
              <picture>
                <source srcset="<?php echo esc_url(get_template_directory_uri()); ?>/img/webp/about/icon-03.webp" type="image/webp">
                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/about/icon-03.png" alt="通いやすい環境">
              </picture>
            </div>
            <div class="about-list__ct c-txt__02">
              <h3 class="about-list__ct-ttl">通いやすい環境</h3>
              <p>
                みのおキューズモール近く。お買い物ついでに通院可能です。 キッズルーム完備で、小さなお子様連れの方も安心して受診いただけます。
              </p>
            </div>
          </div>
        </div>
        <div class="about-list__item js-scrollin">
          <div class="about-list__box">
            <div class="about-list__icon">
              <picture>
                <source srcset="<?php echo esc_url(get_template_directory_uri()); ?>/img/webp/about/icon-04.webp" type="image/webp">
                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/about/icon-04.png" alt="徹底した衛生管理">
              </picture>
            </div>
            <div class="about-list__ct c-txt__02">
              <h3 class="about-list__ct-ttl">徹底した衛生管理</h3>
              <p>
                世界基準「クラスB」滅菌器を導入。 器具の個別パック化や使い捨て製品の活用で、院内感染を徹底的に防ぎます。
              </p>
            </div>
          </div>
        </div>
      </div>
      <h2 class="c-ttl__03  mbpc-28 js-scrollin">
        <span class="c-ft--jp">
          院内・設備紹介
          <small>安心・安全な治療のための環境づくり</small>
        </span>
        <span class="c-ft--en">FLOOR</span>
      </h2>
      <ul class="about-floor c-txt__02">
        <li class="about-floor__item js-scrollin">
          <div class="about-floor__img">
            <picture>
              <source srcset="<?php echo esc_url(get_template_directory_uri()); ?>/img/webp/about/floor-img-01.webp" type="image/webp">
              <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/about/floor-img-01.jpg" alt="歯科用CT・セファロ ">
            </picture>
          </div>
          <div class="about-floor__ct">
            <h3 class="about-floor__ct-ttl">歯科用CT・セファロ </h3>
            <p>
              3次元での精密診断
            </p>
          </div>
        </li>
        <li class="about-floor__item js-scrollin">
          <div class="about-floor__img">
            <picture>
              <source srcset="<?php echo esc_url(get_template_directory_uri()); ?>/img/webp/about/floor-img-02.webp" type="image/webp">
              <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/about/floor-img-02.jpg" alt="マイクロスコープ">
            </picture>
          </div>
          <div class="about-floor__ct">
            <h3 class="about-floor__ct-ttl">マイクロスコープ</h3>
            <p>
              肉眼の20倍で患部を確認
            </p>
          </div>
        </li>
        <li class="about-floor__item js-scrollin">
          <div class="about-floor__img">
            <picture>
              <source srcset="<?php echo esc_url(get_template_directory_uri()); ?>/img/webp/about/floor-img-03.webp" type="image/webp">
              <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/about/floor-img-03.jpg" alt="口腔内スキャナー">
            </picture>
          </div>
          <div class="about-floor__ct">
            <h3 class="about-floor__ct-ttl">口腔内スキャナー</h3>
            <p>
              型取りの不快感を軽減
            </p>
          </div>
        </li>
        <li class="about-floor__item js-scrollin">
          <div class="about-floor__img">
            <picture>
              <source srcset="<?php echo esc_url(get_template_directory_uri()); ?>/img/webp/about/floor-img-04.webp" type="image/webp">
              <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/about/floor-img-04.jpg" alt="クラスB滅菌器">
            </picture>
          </div>
          <div class="about-floor__ct">
            <h3 class="about-floor__ct-ttl">クラスB滅菌器</h3>
            <p>
              世界最高水準の滅菌
            </p>
          </div>
        </li>
        <li class="about-floor__item js-scrollin">
          <div class="about-floor__img">
            <picture>
              <source srcset="<?php echo esc_url(get_template_directory_uri()); ?>/img/webp/about/floor-img-05.webp" type="image/webp">
              <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/about/floor-img-05.jpg" alt="歯科用CT・セファロ ">
            </picture>
          </div>
          <div class="about-floor__ct">
            <h3 class="about-floor__ct-ttl">個室診療室</h3>
            <p>
              プライバシーに配慮
            </p>
          </div>
        </li>
        <li class="about-floor__item js-scrollin">
          <div class="about-floor__img">
            <picture>
              <source srcset="<?php echo esc_url(get_template_directory_uri()); ?>/img/webp/about/floor-img-06.webp" type="image/webp">
              <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/about/floor-img-06.jpg" alt="カウンセリングルーム">
            </picture>
          </div>
          <div class="about-floor__ct">
            <h3 class="about-floor__ct-ttl">カウンセリングルーム</h3>
            <p>
              じっくり相談できる空間
            </p>
          </div>
        </li>
        <li class="about-floor__item js-scrollin">
          <div class="about-floor__img">
            <picture>
              <source srcset="<?php echo esc_url(get_template_directory_uri()); ?>/img/webp/about/floor-img-07.webp" type="image/webp">
              <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/about/floor-img-07.jpg" alt="キッズルーム">
            </picture>
          </div>
          <div class="about-floor__ct">
            <h3 class="about-floor__ct-ttl">キッズルーム </h3>
            <p>
              お子様も楽しく通院
            </p>
          </div>
        </li>
        <li class="about-floor__item js-scrollin">
          <div class="about-floor__img">
            <picture>
              <source srcset="<?php echo esc_url(get_template_directory_uri()); ?>/img/webp/about/floor-img-08.webp" type="image/webp">
              <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/about/floor-img-08.jpg" alt="バリアフリー">
            </picture>
          </div>
          <div class="about-floor__ct">
            <h3 class="about-floor__ct-ttl">バリアフリー</h3>
            <p>
              ベビーカーもそのまま入室
            </p>
          </div>
        </li>
      </ul>
      <h2 class="c-ttl__03 mbpc-42 js-scrollin">
        <span class="c-ft--jp">
          患者さんへのご案内
        </span>
        <span class="c-ft--en">INFORMATION</span>
      </h2>
      <ul class="about-infomation c-txt__02">
        <li class="about-infomation__item js-scrollin">
          <h3 class="about-infomation__ttl">保険医療機関としての取り組み</h3>
          <p>
            当院は保険医療機関であり、個人情報保護法を順守しています。問診票や診療録などの個人情報は、利用目的以外には使用いたしません。
          </p>
        </li>
        <li class="about-infomation__item js-scrollin">
          <h3 class="about-infomation__ttl">医療情報の活用について</h3>
          <p>
            オンライン資格確認を行う体制を整え、質の高い診療を実施するために十分な情報を取得・活用して診療を行っております。
          </p>
        </li>
        <li class="about-infomation__item js-scrollin">
          <h3 class="about-infomation__ttl">明細書の発行について</h3>
          <p>
            領収証の発行の際に、個別の診療報酬の算定項目の分かる明細書を無償で交付しています。
          </p>
        </li>
        <li class="about-infomation__item js-scrollin">
          <h3 class="about-infomation__ttl">一般名処方について</h3>
          <p>
            薬剤の一般的名称を記載する処方箋を交付する場合に、一般名処方の趣旨を患者さんに十分に説明しております。
          </p>
        </li>
      </ul>
    </div>
  </section>

  <?php get_template_part('inc/entry'); ?>

</main>

<?php get_footer(); ?>