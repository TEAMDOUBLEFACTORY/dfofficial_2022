<section id="sec01">
  <div class="container">
    <?php
      $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
      $type = get_query_var( 'recommend' );
      $args = array(
          'post_type' => array('works'),
          'tax_query' => array(
              'relation' => 'OR',
              array(
                  'taxonomy' => 'recommend',
                  'field' => 'slug',
                  'terms' => $type,
              ),
          ),
          'paged' => $paged,
          'posts_per_page' => 9,
      ); ?>
      <?php query_posts( $args ); ?>
    <ul class="flex">aaa
      <?php if (have_posts()) : ?>
      <?php while (have_posts()) : the_post(); ?>
          <li>
            <a href="<?php the_permalink(); ?>">
              <div class="img-box"><?php the_post_thumbnail(''); ?></div>
              <?php $terms = get_the_terms($post->ID,'recommend'); ?>
              <p class="work-title"><?php the_title(); ?></p>
              <?php foreach ($terms as $term) : ?>
                  <span class="category"><span class="<?php echo esc_html($term->slug); ?>"><?php echo esc_html($term->name); ?></span></span>
              <?php endforeach; ?>
            </a>
          </li>

      <?php endwhile; else: ?>
      <p>表示できるコンテンツがありません</p>
      <?php endif; ?>
    </ul>
    <?php wp_pagenavi(); ?>
  </div>
</section>
