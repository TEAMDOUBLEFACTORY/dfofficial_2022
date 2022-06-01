<?php get_header(); ?>
  <div class="title-box">
      <div class="container"><h2 class="title"><span class="en orange">News</span><?php echo esc_html( $post->subtitle ); ?></h2></div>
  </div>


<section id="sec01">
  <div class="container">
    <?php
      $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
      $args = array(
          'post_type' => 'post',
          'paged' => $paged,
          'posts_per_page' => 10,
      ); ?>
      <?php query_posts( $args ); ?>
    <ul>
      <?php if (have_posts()) : ?>
      <?php while (have_posts()) : the_post(); ?>
          <li>
          <a href="<?php the_permalink(); ?>" class="flex">
            <div class="data en"><?php echo get_the_date(); ?></div>
            <p class="title"><?php the_title(); ?></p>
          </a>
        </li>

      <?php endwhile; else: ?>
      <p>表示できるコンテンツがありません</p>
      <?php endif; ?>
    </ul>
    <?php wp_pagenavi(); ?>
  </div>
</section>

<?php get_footer(); ?>