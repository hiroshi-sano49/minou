<?php get_header(); ?>

<main id="page-column" class="wrapper">
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

  <section class="sec-news-page">
    <div class="inner">
      <ul class="menu-list__btn menu-list__btn--cate js-scrollin">
        <li class="menu-list__btn-item">
          <a href="<?php echo esc_url(home_url('/column/')); ?>">すべて</a>
        </li>
        <?php
        $terms = get_terms([
          'taxonomy'   => 'column-category',
          'hide_empty' => true,
        ]);
        if ($terms && ! is_wp_error($terms)) {
          foreach ($terms as $term) :
        ?>
            <li class="menu-list__btn-item <?php echo is_tax('column-category', $term->slug) ? 'active' : ''; ?>">
              <a href="<?php echo esc_url(get_term_link($term)); ?>"><?php echo esc_html($term->name); ?></a>
            </li>
        <?php
          endforeach;
        }
        ?>
      </ul>

      <ul class="news-list">
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <li class="news-list__item column-list__item js-scrollin">
              <a href="<?php the_permalink(); ?>">
                <div class="column-posts__thumbnail-archive">
                  <?php the_post_thumbnail('medium', ['alt' => get_the_title()]); ?>
                </div>

                <div class="column-list__item-inr">
                  <div class="news-meta">
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
                  <h3 class="news-list__ttl"><?php the_title(); ?></h3>
                </div>

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