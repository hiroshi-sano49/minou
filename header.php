<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <!-- Google Tag Manager -->
  <script>
    (function(w, d, s, l, i) {
      w[l] = w[l] || [];
      w[l].push({
        'gtm.start': new Date().getTime(),
        event: 'gtm.js'
      });
      var f = d.getElementsByTagName(s)[0],
        j = d.createElement(s),
        dl = l != 'dataLayer' ? '&l=' + l : '';
      j.async = true;
      j.src =
        'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
      f.parentNode.insertBefore(j, f);
    })(window, document, 'script', 'dataLayer', 'GTM-NKLKRLZ6');
  </script>
  <!-- End Google Tag Manager -->
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=no">
  <meta name="format-detection" content="telephone=no">
  <link rel="shortcut icon" href="<?php echo esc_url(get_template_directory_uri()); ?>/favicon.ico">
  <link type="text/css" rel="stylesheet" href="<?php echo esc_url(get_template_directory_uri()); ?>/js/slick/slick-theme.css">
  <link type="text/css" rel="stylesheet" href="<?php echo esc_url(get_template_directory_uri()); ?>/js/slick/slick.css">
  <link rel="stylesheet" href="https://unpkg.com/scroll-hint@latest/css/scroll-hint.css">
  <link type="text/css" rel="stylesheet" href="<?php echo esc_url(get_template_directory_uri()); ?>/css/styles.css">
  <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "Dentist",
      "name": "ヨクシオ歯科 箕面萱野",
      "url": "<?php echo esc_url(get_template_directory_uri()); ?>",
      "logo": "<?php echo esc_url(get_template_directory_uri() . '/img/common/logo.png'); ?>",
      "telephone": "+81-050-5840-4618",
      "address": {
        "@type": "PostalAddress",
        "streetAddress": "坊島4丁目10 TEN24BLDG.",
        "addressLocality": "箕面市",
        "addressRegion": "大阪府",
        "postalCode": "562-0013",
        "addressCountry": "JP"
      },
      "openingHoursSpecification": [{
          "@type": "OpeningHoursSpecification",
          "dayOfWeek": ["Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"],
          "opens": "09:00",
          "closes": "13:00"
        },
        {
          "@type": "OpeningHoursSpecification",
          "dayOfWeek": ["Saturday"],
          "opens": "14:00",
          "closes": "17:00"
        },
        {
          "@type": "OpeningHoursSpecification",
          "dayOfWeek": ["Monday", "Tuesday", "Wednesday", "Thursday", "Friday"],
          "opens": "14:30",
          "closes": "18:30"
        }
      ]
    }
  </script>
  <?php if (is_page('first-visit')) : ?>
    <script type="application/ld+json">
      {
        "@context": "https://schema.org",
        "@type": "FAQPage",
        "mainEntity": [{
            "@type": "Question",
            "name": "初診でも治療してもらえますか？",
            "acceptedAnswer": {
              "@type": "Answer",
              "text": "はい、痛みがある場合は応急処置を行います。ただし、本格的な治療は検査結果に基づいた計画を立ててからとなりますので、ご了承ください。"
            }
          },
          {
            "@type": "Question",
            "name": "予約なしでも診てもらえますか？",
            "acceptedAnswer": {
              "@type": "Answer",
              "text": "当院は予約制となっておりますが、急患の方は随時受け付けております。まずはお電話にてお問い合わせください。"
            }
          },
          {
            "@type": "Question",
            "name": "子どもを連れて行っても大丈夫ですか？",
            "acceptedAnswer": {
              "@type": "Answer",
              "text": "はい、大歓迎です。キッズスペースを完備しており、保育士も在籍しております。安心してご来院ください。"
            }
          },
          {
            "@type": "Question",
            "name": "TCとのカウンセリングは必須ですか",
            "acceptedAnswer": {
              "@type": "Answer",
              "text": "より良い治療を提供するために、基本的にはすべての方にカウンセリングを受けていただいております。"
            }
          }
        ]
      }
    </script>
  <?php endif; ?>
  <?php if (is_page('general')) : ?>
    <script type="application/ld+json">
      {
        "@context": "https://schema.org",
        "@type": "FAQPage",
        "mainEntity": [{
            "@type": "Question",
            "name": "痛いのが苦手なのですが、配慮してもらえますか？",
            "acceptedAnswer": {
              "@type": "Answer",
              "text": "はい、もちろんです。当院では表面麻酔や極細の針、電動麻酔器を使用し、麻酔時の痛みを最小限に抑えています。また、治療中もお声がけをしながら進めますので、痛みを感じた際は遠慮なく合図をしてください。"
            }
          },
          {
            "@type": "Question",
            "name": "予約なしでも診てもらえますか？",
            "acceptedAnswer": {
              "@type": "Answer",
              "text": "基本的には予約制とさせていただいておりますが、急患（強い痛みがある、腫れている等）の場合は随時対応いたします。ご来院前にお電話いただけますと、比較的スムーズにご案内できる時間をお伝えできます。"
            }
          },
          {
            "@type": "Question",
            "name": "妊娠中でも治療は受けられますか？",
            "acceptedAnswer": {
              "@type": "Answer",
              "text": "はい、可能です。安定期（妊娠5～7ヶ月）の治療が最も望ましいですが、緊急時は他の時期でも応急処置を行います。母子手帳をお持ちいただき、問診時に妊娠中であることをお伝えください。"
            }
          }
        ]
      }
    </script>
  <?php endif; ?>
  <?php if (is_page('preventive')) : ?>
    <script type="application/ld+json">
      {
        "@context": "https://schema.org",
        "@type": "FAQPage",
        "mainEntity": [{
            "@type": "Question",
            "name": "定期検診はどのくらいの間隔で受ければいいですか？",
            "acceptedAnswer": {
              "@type": "Answer",
              "text": "お口の状態にもよりますが、基本的には3ヶ月〜6ヶ月に1回の受診をおすすめしています。歯周病のリスクが高い方などは、より短い間隔をご提案する場合もあります。"
            }
          },
          {
            "@type": "Question",
            "name": "歯磨きをしていれば、定期検診は必要ないですか？",
            "acceptedAnswer": {
              "@type": "Answer",
              "text": "どんなに丁寧に歯磨きをしていても、磨き残しは必ず出てしまいます。また、歯石は歯ブラシでは取れません。プロによるケアとチェックを受けることで、トラブルを未然に防ぐことができます。"
            }
          },
          {
            "@type": "Question",
            "name": "クリーニングは痛いですか？",
            "acceptedAnswer": {
              "@type": "Answer",
              "text": "基本的には痛みはありません。歯石が多い場合や歯ぐきに炎症がある場合は、多少チクチクすることもありますが、我慢できないような痛みではありません。痛みが苦手な方は遠慮なくお申し出ください。"
            }
          }
        ]
      }
    </script>
  <?php endif; ?>
  <?php if (is_page('pediatric')) : ?>
    <script type="application/ld+json">
      {
        "@context": "https://schema.org",
        "@type": "FAQPage",
        "mainEntity": [{
            "@type": "Question",
            "name": "泣いてしまって治療ができるか不安です。",
            "acceptedAnswer": {
              "@type": "Answer",
              "text": "ご安心ください。泣いてしまうのは当たり前のことです。当院では、お子様の気持ちに寄り添い、まずは雰囲気に慣れることから始めます。無理やり押さえつけて治療することは緊急時を除いてありません。"
            }
          },
          {
            "@type": "Question",
            "name": "何歳まで親が仕上げ磨きをすればいいですか？",
            "acceptedAnswer": {
              "@type": "Answer",
              "text": "小学校中学年（9〜10歳頃）までは、仕上げ磨きをしてあげることをおすすめします。それ以降も、時々チェックしてあげると安心です。"
            }
          },
          {
            "@type": "Question",
            "name": "乳歯のむし歯は放置しても大丈夫ですか？",
            "acceptedAnswer": {
              "@type": "Answer",
              "text": "いいえ、放置は危険です。乳歯のむし歯が進行すると、その下に控えている永久歯の色や形が悪くなったり、歯並びが悪くなる原因になります。早めの治療が大切です。"
            }
          }
        ]
      }
    </script>
  <?php endif; ?>
  <?php if (is_page('pediatric-ortho')) : ?>
    <script type="application/ld+json">
      {
        "@context": "https://schema.org",
        "@type": "FAQPage",
        "mainEntity": [{
            "@type": "Question",
            "name": "矯正の相談は何歳くらいから行けばいいですか？",
            "acceptedAnswer": {
              "@type": "Answer",
              "text": "気になった時が相談のタイミングですが、一般的には前歯が生え変わり始める6〜7歳頃にご相談に来られる方が多いです。受け口や交叉咬合などは、3歳頃からの早期治療が有効な場合もあります。"
            }
          },
          {
            "@type": "Question",
            "name": "治療期間はどのくらいかかりますか？",
            "acceptedAnswer": {
              "@type": "Answer",
              "text": "第1期治療は、永久歯が生え揃うまでの数年間（1〜3年程度）かかることが一般的です。その後、経過観察を行い、必要であれば第2期治療へ移行します。"
            }
          },
          {
            "@type": "Question",
            "name": "痛みはありますか？",
            "acceptedAnswer": {
              "@type": "Answer",
              "text": "装置をつけた直後や調整後は、歯が浮くような違和感や痛みを感じることがありますが、数日で慣れることがほとんどです。お子様は大人よりも骨が柔らかいため、痛みを感じにくい傾向にあります。"
            }
          }
        ]
      }
    </script>
  <?php endif; ?>
  <?php if (is_page('orthodontics')) : ?>
    <script type="application/ld+json">
      {
        "@context": "https://schema.org",
        "@type": "FAQPage",
        "mainEntity": [{
            "@type": "Question",
            "name": "矯正治療は何歳までできますか？",
            "acceptedAnswer": {
              "@type": "Answer",
              "text": "歯と歯ぐきの健康状態が良ければ、年齢制限はありません。 60代、70代で矯正治療を始められる方もいらっしゃいます。 ただし、歯周病などが進行している場合は、先にそちらの治療が必要になることがあります。"
            }
          },
          {
            "@type": "Question",
            "name": "治療期間はどのくらいかかりますか？",
            "acceptedAnswer": {
              "@type": "Answer",
              "text": "歯並びの状態や治療方法によって異なりますが、全体矯正の場合、平均して2年～3年程度かかります。 部分矯正の場合は、数ヶ月～1年程度で終わることもあります。 初診相談の際に、おおよその期間をお伝えすることができます。"
            }
          },
          {
            "@type": "Question",
            "name": "抜歯は必ず必要ですか？",
            "acceptedAnswer": {
              "@type": "Answer",
              "text": "必ずしも抜歯が必要なわけではありません。 当院では、可能な限り非抜歯での治療を目指していますが、あごの大きさと歯の大きさのバランスが悪く、歯を並べるスペースが著しく不足している場合などは、抜歯が必要になることもあります。 精密検査の結果をもとに、抜歯の必要性について慎重に判断し、ご説明いたします。"
            }
          },
          {
            "@type": "Question",
            "name": "支払いにクレジットカードやデンタルローンは使えますか？",
            "acceptedAnswer": {
              "@type": "Answer",
              "text": "はい、ご利用いただけます。 各種クレジットカード、デンタルローン（分割払い）に対応しております。 患者さんのライフスタイルに合わせたお支払い方法をお選びいただけますので、お気軽にご相談ください。"
            }
          }
        ]
      }
    </script>
  <?php endif; ?>
  <?php if (is_page('implant')) : ?>
    <script type="application/ld+json">
      {
        "@context": "https://schema.org",
        "@type": "FAQPage",
        "mainEntity": [{
            "@type": "Question",
            "name": "手術は痛いですか？",
            "acceptedAnswer": {
              "@type": "Answer",
              "text": "局所麻酔を十分に行いますので、手術中に痛みを感じることはほとんどありません。術後は多少の腫れや痛みが出ることがありますが、痛み止めでコントロールできる範囲内です。"
            }
          },
          {
            "@type": "Question",
            "name": "インプラントはどのくらい持ちますか？",
            "acceptedAnswer": {
              "@type": "Answer",
              "text": "適切なメンテナンスを続けていれば、10年、20年と長期間使い続けることができます。当院では保証制度も設けておりますので、安心して治療を受けていただけます。"
            }
          },
          {
            "@type": "Question",
            "name": "誰でもインプラント治療を受けられますか？",
            "acceptedAnswer": {
              "@type": "Answer",
              "text": "あごの骨が成長途中のお子様や、重度の全身疾患がある方、妊娠中の方などは受けられない場合があります。まずはカウンセリングにてご相談ください。"
            }
          }
        ]
      }
    </script>
  <?php endif; ?>
  <?php if (is_page('denture')) : ?>
    <script type="application/ld+json">
      {
        "@context": "https://schema.org",
        "@type": "FAQPage",
        "mainEntity": [{
            "@type": "Question",
            "name": "入れ歯を作ると、どのくらいで完成しますか？",
            "acceptedAnswer": {
              "@type": "Answer",
              "text": "通常、型取りから完成まで1ヶ月〜1ヶ月半程度かかります。週1回程度の通院で、4〜5回のステップが必要です。"
            }
          },
          {
            "@type": "Question",
            "name": "寝る時は入れ歯を外した方がいいですか？",
            "acceptedAnswer": {
              "@type": "Answer",
              "text": "はい、基本的には外して就寝してください。歯ぐきを休ませるためと、誤飲を防ぐためです。外した入れ歯は、乾燥を防ぐために水や洗浄液につけて保管してください。"
            }
          },
          {
            "@type": "Question",
            "name": "他院で作った入れ歯の調整はできますか？",
            "acceptedAnswer": {
              "@type": "Answer",
              "text": "はい、可能です。合わない入れ歯を無理に使い続けると、歯ぐきや残っている歯に悪影響を与えますので、お早めにご相談ください。"
            }
          }
        ]
      }
    </script>
  <?php endif; ?>
  <?php if (is_page('maternity')) : ?>
    <script type="application/ld+json">
      {
        "@context": "https://schema.org",
        "@type": "FAQPage",
        "mainEntity": [{
            "@type": "Question",
            "name": "妊婦歯科健診ではレントゲン検査を行いますか？",
            "acceptedAnswer": {
              "@type": "Answer",
              "text": "レントゲンはおなかの赤ちゃんへの影響が否定できないため、特別な場合を除いて、妊婦歯科健診ではレントゲン検査は行いません。 健診では、丁寧にお話をうかがった上で、むし歯・歯周病などお口のトラブルのチェック、赤ちゃんと妊婦さんのお口の健康を守るためのアドバイスを行います。"
            }
          },
          {
            "@type": "Question",
            "name": "麻酔注射は赤ちゃんに影響しますか？",
            "acceptedAnswer": {
              "@type": "Answer",
              "text": "歯科治療で使用する局所麻酔は、注射をした部分にのみ作用し、胎盤を通して赤ちゃんに届くことはほとんどありません。 通常の使用量であれば、母体にも胎児にも影響はないとされていますので、ご安心ください。 痛みを我慢して治療を受けるストレスの方が、赤ちゃんに良くない影響を与えることもあります。"
            }
          },
          {
            "@type": "Question",
            "name": "妊娠中に痛み止めなどのお薬を飲んでも大丈夫ですか？",
            "acceptedAnswer": {
              "@type": "Answer",
              "text": "妊娠中の方へのお薬の処方は、原則として必要最小限にとどめます。 どうしても必要な場合は、妊娠中でも安全性が高いとされているお薬（アセトアミノフェンなど）を選んで処方いたします。 自己判断で市販薬を服用せず、必ず歯科医師にご相談ください。"
            }
          }
        ]
      }
    </script>
  <?php endif; ?>
  <?php wp_head(); ?>
</head>

<body>
  <!-- Google Tag Manager (noscript) -->
  <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NKLKRLZ6"
      height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
  <!-- End Google Tag Manager (noscript) -->
  <header id="header" class="<?php if (!is_front_page()) {
                                echo 'header-page';
                              } ?>">
    <div class="inner">
      <a href="<?php echo esc_url(home_url('/')); ?>" class="header-logo">
        <p>2026.4 NEW OPEN</p>
        <picture>
          <source srcset="<?php echo esc_url(get_template_directory_uri()); ?>/img/common/logo02.png">
          <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/common/logo.png"
            alt="2026.2 NEW OPEN ヨクシオ歯科　箕面萱野"
            loading="lazy"
            decoding="async"
            fetchpriority="high">
        </picture>
      </a>
      <nav class="header-nav">
        <ul class="header-nav__menu">
          <li class="header-nav__menu-item <?php if (is_front_page()): echo 'active';
                                            endif; ?>">
            <a href="<?php echo esc_url(home_url('/')); ?>">ホーム</a>
          </li>
          <li class="header-nav__menu-item <?php if (is_page('first-visit')): echo 'active';
                                            endif; ?>">
            <a href="<?php echo esc_url(home_url('/')); ?>first-visit/">初診の方へ</a>
          </li>
          <li class="header-nav__menu-item has-sub <?php if (is_page('about') || is_page('sterilization')): echo 'active';
                                                    endif; ?>">
            <a href="<?php echo esc_url(home_url('/')); ?>about/">医院紹介</a>
            <div class="js-submenu"></div>
            <div class="header-nav__submenu">
              <ul class="header-nav__submenu-list center">
                <li class="header-nav__submenu-item"><a href="<?php echo esc_url(home_url('/')); ?>about">医院紹介</a></li>
                <li class="header-nav__submenu-item"><a href="<?php echo esc_url(home_url('/')); ?>treatment-policy">治療方針</a></li>
                <li class="header-nav__submenu-item"><a href="<?php echo esc_url(home_url('/')); ?>sterilization">減菌体制</a></li>
              </ul>
            </div>
          </li>
          <li class="header-nav__menu-item has-sub <?php if (is_page('medical') || is_page('general') || is_page('periodontal') || is_page('preventive') || is_page('pediatric') || is_page('pediatric-ortho') || is_page('orthodontics') || is_page('ceramic') || is_page('implant') || is_page('denture') || is_page('visit')): echo 'active';
                                                    endif; ?>">
            <a href="<?php echo esc_url(home_url('/')); ?>medical">診療内容</a>
            <div class="js-submenu"></div>
            <div class="header-nav__submenu">
              <ul class="header-nav__submenu-list">
                <li class="header-nav__submenu-item"><a href="<?php echo esc_url(home_url('/')); ?>general">一般歯科・根管治療</a></li>
                <li class="header-nav__submenu-item"><a href="<?php echo esc_url(home_url('/')); ?>periodontal">歯周病治療</a></li>
                <li class="header-nav__submenu-item"><a href="<?php echo esc_url(home_url('/')); ?>preventive">予防・メンテナンス</a></li>
                <li class="header-nav__submenu-item"><a href="<?php echo esc_url(home_url('/')); ?>pediatric">小児歯科</a></li>
                <li class="header-nav__submenu-item"><a href="<?php echo esc_url(home_url('/')); ?>pediatric-ortho">小児矯正</a></li>
                <li class="header-nav__submenu-item"><a href="<?php echo esc_url(home_url('/')); ?>orthodontics">成人矯正</a></li>
                <li class="header-nav__submenu-item"><a href="<?php echo esc_url(home_url('/')); ?>ceramic">セラミック・審美治療</a></li>
                <li class="header-nav__submenu-item"><a href="<?php echo esc_url(home_url('/')); ?>implant">インプラント</a></li>
                <li class="header-nav__submenu-item"><a href="<?php echo esc_url(home_url('/')); ?>denture">入れ歯（義歯）</a></li>
                <!-- <li class="header-nav__submenu-item"><a href="<?php echo esc_url(home_url('/')); ?>visit">訪問診療</a></li> -->
                <li class="header-nav__submenu-item"><a href="<?php echo esc_url(home_url('/')); ?>maternity">マタニティ歯科</a></li>
              </ul>
            </div>
          </li>
          <!-- <li class="header-nav__menu-item <?php if (is_page('staff')): echo 'active';
                                                endif; ?>">
            <a href="<?php echo esc_url(home_url('/')); ?>staff">院長・スタッフ</a>
          </li> -->
          <li class="header-nav__menu-item <?php if (is_page('access')): echo 'active';
                                            endif; ?>">
            <a href="<?php echo esc_url(home_url('/')); ?>access">診療時間・アクセス</a>
          </li>
        </ul>
        <div class="header-nav__tel">
          <a href="tel:05058404618">
            <small>ご予約・お問い合わせはこちら</small>
            <strong>TEL.<span>050-5840-4618</span></strong>
            <span>診療時間<span>9:30〜13:00／14:30〜18:30</span><br>
              <p>木曜・日曜・祝日休診</p>
            </span>
          </a>
        </div>
        <a href="https://reservation.stransa.co.jp/47f4f9361243ec0de8a3020288b7d279" target="_blank" class="header-nav__web">
          <span><img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/common/icon-fixed.png" alt="WEB予約"></span> WEB予約
        </a>
      </nav>
      <span class="js-mobile">
        <span></span>
      </span>
    </div>
  </header>