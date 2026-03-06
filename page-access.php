<?php get_header(); ?>

<main id="page-access" class="wrapper">

  <section class="sec-mv">
    <div class="sec-mv__ct">
      <h1 class="sec-mv__ttl">
        <span class="c-ft--en">ACCESS</span>
        <span class="c-ft--jp">診療時間・アクセス</span>
      </h1>
      <p class="sec-mv__desc">北大阪急行「箕面萱野駅」より徒歩5分。<br>みのおキューズモール近く、<br class="sp">通いやすい立地です。</p>
    </div>
  </section>
  <div class="breadcrumb">
    <div class="inner"><?php echo do_shortcode('[wpseo_breadcrumb]'); ?></div>
  </div>
  <section class="sec-accesspage">
    <div class="inner">
      <h2 class="c-ttl__03 js-scrollin">
        <span class="c-ft--jp">診療時間・医院情報</span>
        <span class="c-ft--en">INFORMATION</span>
      </h2>
      <div class="access-wrap">
        <div class="access-wrap__ct">
          <div class="access-wrap__ct-ttl js-scrollin">
            <span class="c-ft--jp">ヨクシオ歯科 箕面萱野</span>
            <span class="c-ft--en">Yokushio Dental Clinic Minoh Kayano</span>
          </div>
          <p class="access-wrap__ct-location js-scrollin">〒562-0013　大阪府箕面市坊島4丁目10-8 TEN24BLDG.<br>北大阪急行「箕面萱野駅」徒歩5分</p>
          <a href="tel:05058404618" class="access-wrap__ct-tel js-scrollin">TEL.<span>050-5840-4618</span></a>
          <div class="access-wrap__ct-btn js-scrollin">
            <a href="https://reservation.stransa.co.jp/47f4f9361243ec0de8a3020288b7d279" target="_blank"><img width="38" src="<?php echo esc_url(get_template_directory_uri()); ?>/img/access/icon-calendar.svg" alt="WEB予約">WEB予約</a>
            <a href="https://lin.ee/1gHDCfb" target="_blank" class="btn-line"><img width="42" src="<?php echo esc_url(get_template_directory_uri()); ?>/img/access/icon-line.svg" alt="LINE予約">LINE予約</a>
          </div>
        </div>
        <div class="access-wrap__calendar js-scrollin">
          <h3 class="access-wrap__calendar-ttl"><img width="21" src="<?php echo esc_url(get_template_directory_uri()); ?>/img/access/icon-clock.svg" alt="診療時間">診療時間</h3>
          <div class="access-wrap__calendar-table">
            <table>
              <tr>
                <th></th>
                <th>月</th>
                <th>火</th>
                <th>水</th>
                <th>木</th>
                <th>金</th>
                <th><span>土</span></th>
                <th><span>日</span></th>
              </tr>
              <tr>
                <td>9:30〜13:00</td>
                <td>&#9679;</td>
                <td>&#9679;</td>
                <td>&#9679;</td>
                <td>／</td>
                <td>&#9679;</td>
                <td>&#9679;</td>
                <td>／</td>
              </tr>
              <tr>
                <td>14:30〜18:30</td>
                <td>&#9679;</td>
                <td>&#9679;</td>
                <td>&#9679;</td>
                <td>／</td>
                <td>&#9679;</td>
                <td>&#9679</td>
                <td>／</td>
              </tr>
            </table>
          </div>
          <p class="access-wrap__calendar-note js-scrollin"> 定休日：木曜・日曜・祝日 ※最終受付は18時まで</p>
        </div>
      </div>
      <h2 class="c-ttl__03 js-scrollin">
        <span class="c-ft--jp">アクセス</span>
        <span class="c-ft--en">ACCESS</span>
      </h2>
      <div class="access-map js-scrollin">
        <iframe src=https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6549.696341767842!2d135.48223328255858!3d34.834909735715215!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6000fb136f896b0b%3A0x7f50fb4f4a96d955!2z44Oe44Kv44K344Kq5q2v56eR566V6Z2i6JCx6YeO!5e0!3m2!1sja!2sjp!4v1771479429599!5m2!1sja!2sjp allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
      </div>
      <ul class="access-vehicle">
        <li class="access-vehicle__item">
          <div class="access-vehicle__img js-scrollin">
            <picture>
              <source srcset="<?php echo esc_url(get_template_directory_uri()); ?>/img/webp/access/access-sub1.webp" type="image/webp">
              <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/access/access-sub1.png" alt="電車でお越しの方">
            </picture>
          </div>
          <div class="access-vehicle__ct js-scrollin">
            <h3 class="access-vehicle__ct-ttl">電車でお越しの方</h3>
            <p>北大阪急行「箕面萱野駅」より徒歩5分。<br>駅直結のデッキを通ってスムーズにご来院いただけます。雨の日でも濡れずにアクセス可能です。</p>
          </div>
        </li>
        <li class="access-vehicle__item">
          <div class="access-vehicle__img js-scrollin">
            <picture>
              <source srcset="<?php echo esc_url(get_template_directory_uri()); ?>/img/webp/access/access-sub2.webp" type="image/webp">
              <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/access/access-sub2.png" alt="お車でお越しの方">
            </picture>
          </div>
          <div class="access-vehicle__ct js-scrollin">
            <h3 class="access-vehicle__ct-ttl">お車でお越しの方</h3>
            <p>提携駐車場あり（みのおキューズモール駐車場）。<br>診療時間分の駐車サービス券をお渡しいたしますので、駐車券を受付までお持ちください。</p>
          </div>
        </li>
      </ul>
    </div>
  </section>

  <?php get_template_part('inc/entry'); ?>

</main>

<?php get_footer(); ?>