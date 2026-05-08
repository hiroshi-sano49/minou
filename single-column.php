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