<?php get_header(); ?>

<main id="page-about" class="wrapper">
  <section class="sec-mv">
    <div class="sec-mv__ct">
      <div class="sec-mv__ttl">
        <span class="c-ft--en">CLINIC CONCEPT</span>
        <h1 class="c-ft--jp">医院紹介</h1>
      </div>
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
      <div class="customer-harassment customer-harassment_margin" id="customer-harassment">
        <h2 class="c-ttl__03 mbpc-42 js-scrollin">
          <span class="c-ft--jp">
            患者さんへのご案内<small>（保険医療機関における書面掲示）</small>
          </span>
          <span class="c-ft--en">INFORMATION</span>
        </h2>
        <div class="about-infomation2 c-txt__02">
          <div class="about-infomation__item js-scrollin">
            <ul>
              <li>・当医院は保険医療機関です。</li>
              <li>・個人情報保護法を順守しています。</li>
              <li>・問診票、診療録、検査記録、処方せん等の「個人情報」は利用目的以外には使用しません。</li>
            </ul>
          </div>
          <div class="about-infomation__item js-scrollin">
            <h3 class="about-infomation__ttl about-infomation__ttl2"> マイナ保険証・マイナンバーカードによるオンライン資格確認をおこなっています</h3>
            <p>
              当院は、オンライン資格確認による情報（受診歴、薬剤情報、特定健診情報、その他必要な診療情報）を取得して活用しています。マイナンバーカードを持参することで、限度額認定証が不要となります。受診時にマイナンバーカードをご持参ください。
            </p>
          </div>
          <div class="about-infomation__item js-scrollin">
            <h3 class="about-infomation__ttl about-infomation__ttl2">電子的歯科診療情報連携体制整備加算について</h3>
            <p>
              オンライン資格確認等システムにより取得した診療情報等を活用して診療を実施しており、マイナ保険証の利用促進や電子処方箋の発行等、医療DXを通じて質の高い医療を提供できるよう取り組んでいます。また、算定した診療報酬の区分・項目の名称及びその点数又は金額を記載した詳細な明細書を無料で交付しています。
            </p>
          </div>
          <div class="about-infomation__item js-scrollin">
            <h3 class="about-infomation__ttl about-infomation__ttl2">歯科初診料の注1に規定する基準について</h3>
            <p>
              歯科外来診療における院内感染防止対策に十分な体制の整備、十分な機器を有し、研修を受けた歯科医師が常勤し、職員に院内感染防止対策に係る院内研修等の実施をしています。
            </p>
          </div>
          <div class="about-infomation__item js-scrollin">
            <h3 class="about-infomation__ttl about-infomation__ttl2">歯科外来診療医療安全対策加算について</h3>
            <p>
              歯科外来診療における医療安全対策に十分な体制の整備、十分な機器を有し、研修を受けた歯科医師が常勤し、職員に医療安全対策に係る院内研修等の実施をしています。自動体外式除細動器（AED）を常備しています。
            </p>
          </div>
          <div class="about-infomation__item js-scrollin">
            <h3 class="about-infomation__ttl about-infomation__ttl2">歯科外来診療感染対策加算について</h3>
            <p>
              歯科外来診療における診療感染対策に十分な体制の整備、十分な機器を有し、研修を受けた者が常勤し、院内感染防止に努めています。
            </p>
          </div>
          <div class="about-infomation__item js-scrollin">
            <h3 class="about-infomation__ttl about-infomation__ttl2">歯科治療時医療管理料について</h3>
            <p>
              患者さんの歯科治療にあたり、医科の主治医や病院と連携し、モニタリング等、全身的な管理体制を取ることが出来ます。
            </p>
          </div>
          <div class="about-infomation__item js-scrollin">
            <h3 class="about-infomation__ttl about-infomation__ttl2">小児口腔機能管理料の注3に規定する口腔管理体制強化加算について</h3>
            <p>
              歯科疾患の重症化予防に資する継続管理、高齢者・小児の心身の特性、口腔機能の管理及び緊急時対応等に係る研修を全て修了するとともに、う蝕や歯周病の重症化予防に関する継続管理の実績があり、地域連携に関する会議等に参加しています。自動体外式除細動器（AED）を常備しています。
            </p>
          </div>
          <div class="about-infomation__item js-scrollin">
            <h3 class="about-infomation__ttl about-infomation__ttl2">口腔機能実地指導料について</h3>
            <p>
              摂食・嚥下機能や口腔乾燥などのお悩みに合わせ、お口の「噛む・飲み込む・話す」機能を維持・改善するための専門的な実地指導や管理を行っています。
            </p>
          </div>
          <div class="about-infomation__item js-scrollin">
            <h3 class="about-infomation__ttl about-infomation__ttl2">歯科訪問診療料の注15に規定する基準について</h3>
            <p>
              在宅で療養している患者さんへの診療を行っています。
            </p>
          </div>
          <div class="about-infomation__item js-scrollin">
            <h3 class="about-infomation__ttl about-infomation__ttl2">歯科口腔リハビリテーション2について</h3>
            <p>
              顎関節症の患者さんに、顎関節治療用装置を製作し、指導や訓練を行っています。
            </p>
          </div>
          <div class="about-infomation__item js-scrollin">
            <h3 class="about-infomation__ttl about-infomation__ttl2">手術用顕微鏡加算について</h3>
            <p>
              複雑な根管治療には手術用顕微鏡を用いて治療を行っています。
            </p>
          </div>
          <div class="about-infomation__item js-scrollin">
            <h3 class="about-infomation__ttl about-infomation__ttl2">口腔粘膜処置について</h3>
            <p>
              再発性アフタ性口内炎に対してレーザー照射による治療を行っています。
            </p>
          </div>
          <div class="about-infomation__item js-scrollin">
            <h3 class="about-infomation__ttl about-infomation__ttl2">歯科技工士連携加算1及び光学印象歯科技工士連携加算について</h3>
            <p>
              歯科技工士との連携体制を整え、迅速かつ質の高い歯科技工の提供を行っています。
            </p>
          </div>
          <div class="about-infomation__item js-scrollin">
            <h3 class="about-infomation__ttl about-infomation__ttl2">歯科技工士連携加算2について</h3>
            <p>
              技工士と情報通信機器を用いた連携体制を整え、迅速かつ質の高い歯科技工の提供を行っています。
            </p>
          </div>
          <div class="about-infomation__item js-scrollin">
            <h3 class="about-infomation__ttl about-infomation__ttl2">光学印象について</h3>
            <p>
              十分な経験を積んだ歯科医師が、光学印象機を用いて印象採得を行います。
            </p>
          </div>
          <div class="about-infomation__item js-scrollin">
            <h3 class="about-infomation__ttl about-infomation__ttl2">CAD／CAM冠及びCAD／CAMインレーについて</h3>
            <p>
              CAD／CAMと呼ばれるコンピュータ支援設計・製造ユニットを用いて製作される冠やインレー（かぶせ物、詰め物）を用いて治療を行っています。
            </p>
          </div>


          <div class="about-infomation__item js-scrollin">
            <h3 class="about-infomation__ttl about-infomation__ttl2">歯根端切除手術の注3について</h3>
            <p>
              歯科用3次元エックス線断層撮影装置（CT）で得られた画像診断を基に、手術用顕微鏡を用いて治療（歯根端切除手術）を行っています。
            </p>
          </div>
          <div class="about-infomation__item js-scrollin">
            <h3 class="about-infomation__ttl about-infomation__ttl2">レーザー機器加算について</h3>
            <p>
              口腔内の軟組織の切開、止血、凝固等が可能なものとして保険適用されている機器を使用した手術を行っています。
            </p>
          </div>
          <div class="about-infomation__item js-scrollin">
            <h3 class="about-infomation__ttl about-infomation__ttl2"> クラウン・ブリッジの維持管理料について</h3>
            <p>
              装着した冠やブリッジについて、２年間の維持管理を行っています。
            </p>
          </div>
          <div class="about-infomation__item js-scrollin">
            <h3 class="about-infomation__ttl about-infomation__ttl2">歯科外来・在宅ベースアップ評価料について</h3>
            <p>
              職員の賃金の改善を行い、働きやすい職場の環境づくりに努めています。
            </p>
          </div>
          <div class="about-infomation__item js-scrollin">
            <h3 class="about-infomation__ttl about-infomation__ttl2">歯科技工所ベースアップ支援料について</h3>
            <p>
              質の高い入れ歯や被せ物を安心してお使いいただけるよう、歯科技工士の労働環境改善や技術向上を支える環境づくりに努めています。
            </p>
          </div>
        </div>
      </div>

      <div class="customer-harassment">
        <h2 class="c-ttl__03 mbpc-42 js-scrollin">
          <span class="c-ft--jp">
            カスタマーハラスメントに対する基本方針
          </span>
          <span class="c-ft--en">INFORMATION</span>
        </h2>
        <div class="about-infomation2 c-txt__02">
          <div class="about-infomation__item js-scrollin">
            <h3 class="about-infomation__ttl about-infomation__ttl2">ドクターと患者様の架け橋</h3>
            <p>
              医療法人翼翔会は、患者さまに安心して通っていただける医院であることを大切にしています。そのためには、患者さまをお迎えする職員一人ひとりが、心身ともに健康で、安全に働ける環境が欠かせません。<br>
              患者さまからのご意見・ご要望は、私たちが診療と医院運営をよりよくするための大切な声です。これからも真摯に受け止め、誠実に対応いたします。<br>
              一方で、職員の人格や尊厳を傷つける言動、社会通念上許容される範囲を超えた要求に対しては、職員を守るため、医院として毅然と対応いたします。皆さまのご理解とご協力をお願い申し上げます。
            </p>
          </div>
          <div class="about-infomation__item js-scrollin">
            <h3 class="about-infomation__ttl about-infomation__ttl2">カスタマーハラスメントとは</h3>
            <p>
              患者さま、ご家族、お取引先などからのご要望・言動のうち、その内容や手段が社会通念上許容される範囲を超え、職員の就業環境を害するものをいいます。<br>
              治療内容や費用についてのご質問、ご不満のお申し出は、カスタマーハラスメントには当たりません。また、障害や疾患のある方が必要な配慮をお申し出いただくことも同様です。どうぞ安心してお伝えください。
            </p>
          </div>
          <div class="about-infomation__item js-scrollin">
            <h3 class="about-infomation__ttl about-infomation__ttl2">対象となる行為の例</h3>
            <p>
            <ul class="about-infomation2__weight">
              <li>暴力、物を投げる・壊すなどの行為</li>
              <li>大声、暴言、威圧的な態度、人格を否定する発言</li>
              <li>土下座の要求、職員個人への謝罪文の要求など、過剰な対応の要求</li>
              <li>根拠のない返金・金銭補償の要求</li>
              <li>長時間の居座り、同じ要求の電話を繰り返す、業務時間外の連絡の要求</li>
              <li>治療中の身体への接触、私的な連絡先の要求など、性的な言動やつきまとい</li>
              <li>インターネットやSNSでの、職員の名前を挙げた誹謗中傷や、投稿をほのめかした要求</li>
              <li>職員の撮影・録音・投稿（無断で行うもの）</li>
            </ul>
            <span>これらは例示であり、これに限るものではありません。</span>
            </p>
          </div>
          <div class="about-infomation__item js-scrollin">
            <h3 class="about-infomation__ttl about-infomation__ttl2">カスタマーハラスメントへの対応</h3>
            <ul class="about-infomation2__weight">
              <li>カスタマーハラスメントに該当すると判断した場合は、対応を中止し、お引き取りをお願いすることがあります</li>
              <li>職員は一人で対応せず、院長・責任者が組織として対応いたします</li>
              <li>悪質と判断した場合や、暴力・脅迫など安全が脅かされる場合は、警察や弁護士と連携して対応いたします</li>
            </ul>
          </div>
          <div class="about-infomation__item js-scrollin">
            <h3 class="about-infomation__ttl about-infomation__ttl2">診療をお断りする場合について</h3>
            <p>
              医療機関として、緊急の処置が必要な方の診療は行います。そのうえで、迷惑行為が繰り返され、患者さまとの信頼関係を保つことが難しいと判断した場合には、今後の診療をお断りし、他の医療機関をご案内することがあります。
            </p>
          </div>
          <div class="about-infomation__item js-scrollin">
            <h3 class="about-infomation__ttl about-infomation__ttl2">録音・録画について</h3>
            <p>
              職員と患者さまの安全確保、および対応内容の正確な記録のため、院内での会話やお電話を録音・録画させていただく場合があります。取得した記録は、これらの目的の範囲内で適切に管理いたします。
            </p>
          </div>
          <div class="about-infomation__item js-scrollin">
            <h3 class="about-infomation__ttl about-infomation__ttl2">皆さまへのお願い</h3>
            <p>
              ほとんどの患者さまには、日頃から温かいご理解をいただいております。この方針は、すべての患者さまと職員が互いに敬意を持ち、安心して過ごせる医院であり続けるためのものです。ご理解とご協力を賜りますよう、お願い申し上げます。
            </p>
          </div>
          <p class="customer-harassment_text">
            2026年10月16日 制定<br>
            医療法人翼翔会 理事長　安岡大志
          </p>
        </div>
      </div>
    </div>
  </section>

  <?php get_template_part('inc/entry'); ?>

</main>

<?php get_footer(); ?>