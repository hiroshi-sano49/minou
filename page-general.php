<?php get_header(); ?>

<main id="page-general" class="wrapper general">

  <section class="sec-mv">
    <div class="sec-mv__ct">
      <h1 class="sec-mv__ttl sec-mv__ttl--medical">
        <span class="c-ft--en">general</span>
        <span class="c-ft--jp">一般歯科</span>
      </h1>
    </div>
  </section>
  <div class="breadcrumb">
    <div class="inner"><?php echo do_shortcode('[wpseo_breadcrumb]'); ?></div>
  </div>
  <section class="sec-preventive">
    <div class="inner">
      <div class="preventive-block js-scrollin">
        <div class="preventive-block__thumb">
          <picture>
            <source srcset="<?php echo esc_url(get_template_directory_uri()); ?>/img/webp/general/img-01.webp"
              type="image/webp">
            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/general/img-01.jpg"
              alt="「痛くなってから」ではなく「痛くならないために」">
          </picture>
        </div>
        <h2 class="preventive-block__ttl">「痛くなってから行く歯医者」から、「行くほど健康になる歯医者」へ。</h2>
        <p class="c-txt__03">むし歯・詰め物のトラブル・親知らず・急な痛みまで、お口の身近な問題に幅広く対応するのが一般歯科です。ヨクシオ歯科
          箕面萱野では、痛みに配慮した「できるだけ削らない・抜かない」治療と、治療後の再発を防ぐ予防ケアをセットでご提供します。小さなお子様からご年配の方まで、地域の皆様の「かかりつけ歯科」としてご利用ください。
        </p>
      </div>
      <div class="preventive-check preventive-check--periodontal js-scrollin">
        <h3 class="preventive-check--periodontal-ttl">
          <span>こんなときはご相談ください</span>
        </h3>
        <ul class="check-list check-list--periodontal">
          <li class="check-list__item">歯が痛い、冷たいもの・甘いものがしみる</li>
          <li class="check-list__item">口臭が気になる</li>
          <li class="check-list__item">詰め物・被せ物が取れた、欠けた</li>
          <li class="check-list__item">親知らずが痛む・腫れる</li>
          <li class="check-list__item">歯ぐきから血が出る、腫れている</li>
          <li class="check-list__item">治療した歯がまた痛み出した</li>
          <li class="check-list__item">噛むと痛い、疲れると奥歯が重く感じる</li>
          <li class="check-list__item">何年も歯科医院に行っておらず、全体を診てほしい</li>
        </ul>
      </div>
    </div>
  </section>

  <section class="general__information">
    <div class="inner">
      <h2 class="c-ttl__03 general__information-ttl js-scrollin">
        <span class="c-ft--jp">むし歯は「自然に治らない」病気です ── 進行度と治療の関係</span>
        <span class="c-ft--en">treatment</span>
      </h2>
      <p class="c-txt__03 general__information-txt js-scrollin">むし歯は、放置して良くなることのない進行性の病気です。そして、進行するほど治療の負担は大きくなります。</p>
      <div class="general-show general__information-table js-scrollin">
        <table>
          <tr>
            <th>進行度</th>
            <th>状態</th>
            <th>主な症状</th>
            <th>治療の目安</th>
          </tr>
          <tr>
            <td>CO〜C1<br class="sp">（初期）</td>
            <td>表面のエナメル質が溶け始める</td>
            <td>ほぼ無症状</td>
            <td>削らずに経過観察＋フッ素等の予防強化で済む場合あり</td>
          </tr>
          <tr>
            <td>C2<br class="sp">（中等度）</td>
            <td>象牙質まで進行</td>
            <td>冷たいものがしみる</td>
            <td>むし歯を除去し、詰め物で修復</td>
          </tr>
          <tr>
            <td>C3<br class="sp">（重度）</td>
            <td>神経（歯髄）まで到達</td>
            <td>ズキズキと強く痛む</td>
            <td>根管治療＋被せ物。通院回数・費用が大きく増える</td>
          </tr>
          <tr>
            <td>C4<br class="sp">（末期）</td>
            <td>歯の大部分が崩壊</td>
            <td>神経が死に、痛みを感じないことも</td>
            <td>保存が難しい場合は抜歯し、失った歯の治療へ</td>
          </tr>
        </table>
        <p class="c-txt__03 general__information-table-txt">
          ポイントは、<span>「痛み」は当てにならない</span>ということです。初期のむし歯は痛まず、C4まで進むとむしろ痛みが消えることさえあります。「痛くないから大丈夫」ではなく、「痛くなる前に見つける」ことが、歯を守るいちばんの近道です。国内の調査では、定期的に歯科検診を受けている人は、受けていない人に比べて、将来失う歯の本数が大幅に少ないことが報告されています。
        </p>
      </div>
    </div>
  </section>

  <section class="general__promise">
    <div class="inner">
      <h2 class="c-ttl__03 js-scrollin">
        <span class="c-ft--jp">当院の一般歯科 ── 3つのお約束</span>
        <span class="c-ft--en">promise</span>
      </h2>
      <ol class="general-promise c-txt__04">
        <li class="general-promise__item js-scrollin">
          <div class="general-promise__img">
            <picture>
              <source srcset="<?php echo esc_url(get_template_directory_uri()); ?>/img/webp/general/icon-01.webp"
                type="image/webp">
              <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/general/icon-01.png"
                alt="治療の痛みに、こまやかに配慮します">
            </picture>
          </div>
          <div class="general-promise__ct">
            <h3 class="general-promise__ct-ttl">治療の痛みに、こまやかに配慮します</h3>
            <p> 「歯医者の痛みが苦手」という理由で受診を先延ばしにしている方は、決して少なくありません。当院では麻酔の段階から痛みを抑える工夫を重ねています。 </p>
            <ul>
              <li><span>表面麻酔：</span>注射の前に歯ぐきへ塗る麻酔で、針を刺す瞬間のチクッとした痛みを軽減します</li>
              <li><span>極細の注射針：</span>できるだけ細い針を使い、刺激を抑えます</li>
              <li>
                <span>電動麻酔器：</span>麻酔液を一定のゆっくりした速度で注入し、注入圧による痛みを抑えます。<br>それでも不安が強い方には、治療のペース配分から一緒に考えます。「怖い」と伝えていただくことは、まったく恥ずかしいことではありません。
              </li>
            </ul>
          </div>
        </li>
        <li class="general-promise__item js-scrollin">
          <div class="general-promise__img">
            <picture>
              <source srcset="<?php echo esc_url(get_template_directory_uri()); ?>/img/webp/general/icon-02.webp"
                type="image/webp">
              <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/general/icon-02.png"
                alt="できるだけ「削らない・抜かない」を追求します">
            </picture>
          </div>
          <div class="general-promise__ct">
            <h3 class="general-promise__ct-ttl">できるだけ「削らない・抜かない」を追求します</h3>
            <p> 歯は削るほど、抜くほど、確実に寿命が縮みます。当院は「必要なところを、必要な分だけ」を原則に、歯を残す選択肢を最後まで検討します。 </p>
            <ul>
              <li><span>5倍速コントラ：</span>ブレの少ない切削器具で、健康な歯質の削り過ぎを防ぎます</li>
              <li><span>カリエスチェッカー：</span>むし歯に感染した部分だけを染め出し、取り残しと削り過ぎの両方を防ぎます</li>
              <li><span>マイクロスコープ・歯科用CT：</span>精密な診断機器を必要に応じて活用し、「勘」に頼らない治療を行います</li>
            </ul>
          </div>
        </li>
        <li class="general-promise__item js-scrollin">
          <div class="general-promise__img">
            <picture>
              <source srcset="<?php echo esc_url(get_template_directory_uri()); ?>/img/webp/general/icon-03.webp"
                type="image/webp">
              <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/general/icon-03.png"
                alt="「治して終わり」にしません──再発予防までがセットです">
            </picture>
          </div>
          <div class="general-promise__ct">
            <h3 class="general-promise__ct-ttl">「治して終わり」にしません──再発予防までがセットです</h3>
            <p>
              歯科治療の多くは、実は「過去に治療した歯の再治療」です。この負の連鎖を断ち切るには、詰め物・被せ物の適合精度と、治療後のメンテナンスの両方が欠かせません。当院では適合精度の高い修復（症例によりメタルフリー素材のご提案を含む）と、担当歯科衛生士による定期メンテナンスで、「治療のやり直しが少ないお口」を目指します。
            </p>
          </div>
        </li>
      </ol>
    </div>
  </section>

  <section class="general__treatment">
    <div class="inner">
      <h2 class="c-ttl__03 js-scrollin">
        <span class="c-ft--jp">一般歯科の診療内容</span>
        <span class="c-ft--en">treatment</span>
      </h2>
      <ul class="general-treatment c-txt__04">
        <li class="general-treatment__item js-scrollin">
          <h3 class="general-treatment__ttl">むし歯治療</h3>
          <p class="c-txt__04 general-treatment__txt">
            初期むし歯の経過観察・レジン充填から、深いむし歯の修復まで対応します。神経の近くまで達したむし歯では、神経を残せる可能性（歯髄温存療法）も検討します。神経まで達している場合は根管治療が必要です（詳しくは<a
              href="<?php echo home_url('/medical/root-canal/'); ?>">「根管治療」ページへ</a>）。
          </p>
        </li>
        <li class="general-treatment__item js-scrollin">
          <h3 class="general-treatment__ttl">詰め物・被せ物のやり直し</h3>
          <p class="c-txt__04 general-treatment__txt">
            「取れた」「欠けた」の背景には、二次むし歯・噛み合わせ・接着の劣化など必ず原因があります。原因を確認してから再治療することで、同じトラブルの繰り返しを防ぎます。白い素材への置き換えのご相談も可能です（<a
              href="<?php echo home_url('/medical/ceramic/'); ?>">「セラミック・審美治療」ページへ</a>）。
          </p>
        </li>
        <li class="general-treatment__item js-scrollin">
          <h3 class="general-treatment__ttl">知覚過敏</h3>
          <p class="c-txt__04 general-treatment__txt">
            「むし歯じゃないのにしみる」場合、歯ぐきの下がり・歯の亀裂・歯ぎしりによる摩耗などが原因のことがあります。原因を切り分けたうえで、コーティング処置・生活習慣とブラッシングの改善指導などを行います。
          </p>
        </li>
        <li class="general-treatment__item js-scrollin">
          <h3 class="general-treatment__ttl">歯の破折・欠け</h3>
          <p class="c-txt__04 general-treatment__txt">
            欠けた範囲と神経の状態を確認し、レジン修復・被せ物など適した方法で回復します。転倒などで歯をぶつけた場合は、早めの受診をおすすめします。
          </p>
        </li>
        <li class="general-treatment__item js-scrollin">
          <h3 class="general-treatment__ttl">親知らずの相談・抜歯</h3>
          <p class="c-txt__04 general-treatment__txt">
            斜めに生えた親知らずは、手前の歯のむし歯・歯ぐきの腫れ・歯並びへの影響の原因になることがあります。CTで神経との位置関係を確認したうえで、抜歯の要否から一緒に判断します。「抜いたほうがいいのか知りたい」という相談だけでも構いません。
          </p>
        </li>
        <li class="general-treatment__item js-scrollin">
          <h3 class="general-treatment__ttl">急な痛み・外傷への応急対応</h3>
          <p class="c-txt__04 general-treatment__txt">
            強い痛み・腫れ・外傷時は、まず痛みと炎症を抑える処置を優先します。できる限り早く対応しますので、まずはお電話ください。
          </p>
        </li>
      </ul>
    </div>
  </section>

  <section class="general__flow">
    <div class="inner">
      <h2 class="c-ttl__03 mbpc-26 js-scrollin">
        <span class="c-ft--jp">初診から治療完了までの流れ</span>
        <span class="c-ft--en">FLOW</span>
      </h2>
      <ol class="flow-step c-txt__02">
        <li class="flow-step__item js-scrollin">
          <h3 class="flow-step__ttl">初診・カウンセリング</h3>
          <p>問診票をもとに、症状・治療への不安・ご希望を伺います。痛みがある場合は応急処置を優先します</p>
        </li>
        <li class="flow-step__item js-scrollin delay01">
          <h3 class="flow-step__ttl">検査</h3>
          <p>お口全体のチェック・レントゲン撮影を行い、必要に応じてCT・歯周検査を追加します</p>
        </li>
        <li class="flow-step__item js-scrollin delay02">
          <h3 class="flow-step__ttl">治療計画のご説明</h3>
          <p>検査結果を写真や画像でわかりやすくお見せし、治療の選択肢・期間・費用をご説明します。治療を決めるのは患者様ご自身です</p>
        </li>
        <li class="flow-step__item js-scrollin delay03">
          <h3 class="flow-step__ttl">治療</h3>
          <p>優先度の高い部位から、無理のないペースで段階的に進めます</p>
        </li>
        <li class="flow-step__item js-scrollin delay04">
          <h3 class="flow-step__ttl">定期メンテナンス</h3>
          <p>治療後は再発予防のステージへ。担当歯科衛生士が定期的にサポートします（<a
              href="<?php echo home_url('/medical/preventive/'); ?>">「予防・メンテナンス」ページへ</a>）</p>
        </li>
      </ol>
    </div>
  </section>

  <section class="general__price">
    <div class="inner">
      <h2 class="c-ttl__03 general__price-ttl js-scrollin">
        <span class="c-ft--jp">料金について</span>
        <span class="c-ft--en">price</span>
      </h2>
      <p class="c-txt__03 general__price-txt js-scrollin">
        一般歯科の治療（むし歯治療・詰め物・被せ物・親知らずの抜歯・応急処置など）は、<span>原則として健康保険が適用されます</span>（1〜3割の自己負担）。<br>
        見た目・耐久性・再発リスクの低減を重視される方には、自費診療の選択肢（セラミック・ゴールド等）もご提案しています。詳しい料金は「セラミック・審美治療」「根管治療」の各ページをご覧ください。いずれの場合も、治療開始前に費用の目安を必ずご説明します。
      </p>
    </div>
  </section>

  <section class="general__faq">
    <div class="inner">
      <h2 class="c-ttl__03 js-scrollin">
        <span class="c-ft--jp">よくあるご質問（一般歯科）</span>
        <span class="c-ft--en">FAQ</span>
      </h2>
      <ul class="fqa-list fqa-list--other c-txt__02">
        <li class="fqa-list__item js-scrollin">
          <h3 class="fqa-list__question"><span>何年も歯医者に行っていません。まとめて診てもらえますか？</span></h3>
          <p class="fqa-list__answer">
            <span>もちろんです。まずお口全体の検査を行い、優先順位をつけた治療計画をご提案します。受診いただいたこと自体が大切な一歩です。安心してお越しください。</span>
          </p>
        </li>
        <li class="fqa-list__item js-scrollin">
          <h3 class="fqa-list__question"><span>痛いところだけ先に治してもらえますか？</span></h3>
          <p class="fqa-list__answer">
            <span>はい、痛みのある部位の処置を最優先します。そのうえで、他に隠れた問題がないか全体のチェックをおすすめしています。</span>
          </p>
        </li>
        <li class="fqa-list__item js-scrollin">
          <h3 class="fqa-list__question"><span>妊娠中ですが治療できますか？</span></h3>
          <p class="fqa-list__answer">
            <span>時期と体調に配慮しながら対応可能です。当院はマタニティ診療に対応していますので、詳しくは「マタニティ診療」ページをご覧ください。</span>
          </p>
        </li>
        <li class="fqa-list__item js-scrollin">
          <h3 class="fqa-list__question"><span>子ども連れでも大丈夫ですか？</span></h3>
          <p class="fqa-list__answer">
            <span>キッズルームを完備し、ベビーカーのまま入れるバリアフリー設計です。お子様の診療は「小児歯科」ページをご覧ください。</span>
          </p>
        </li>
        <li class="fqa-list__item js-scrollin">
          <h3 class="fqa-list__question"><span>銀歯ではなく白い詰め物にできますか？</span></h3>
          <p class="fqa-list__answer">
            <span>部位や大きさによっては保険適用の白い素材で対応できる場合があります。より適合精度・耐久性を求める場合は自費のセラミック等をご提案します。両方の違いを丁寧にご説明したうえでお選びいただけます。</span>
          </p>
        </li>
      </ul>
      <div class="faq-attention js-scrollin">
        <p class="faq-attention__ttl">リスク・副作用・注意事項</p>
        <ul class="faq-attention__list">
          <li class="c-txt__02 faq-attention__item">麻酔後、数時間はしびれが残ります。誤って唇や頬を噛まないようご注意ください（特にお子様）</li>
          <li class="c-txt__02 faq-attention__item">治療後、一時的にしみる症状・違和感が出ることがありますが、多くは徐々に落ち着きます。長く続く場合はご相談ください</li>
          <li class="c-txt__02 faq-attention__item">詰め物・被せ物は、噛み合わせや歯ぎしり等の影響で破損・脱離することがあります。定期チェックをおすすめします</li>
          <li class="c-txt__02 faq-attention__item">抜歯後は、腫れ・痛み・出血が数日続くことがあります。注意事項を書面でお渡しします</li>
        </ul>
      </div>
    </div>
  </section>

  <?php get_template_part('inc/entry'); ?>

</main>

<?php get_footer(); ?>