<div class="container flex flex-box">
    <div class="left">
        <section id="sec01">
          <ul class="flex">
            <?php
            $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
            $type = get_query_var( 'blogs_type' );
            $args = array(
                'post_type' => array('blogs'),
                'paged' => $paged,
                'posts_per_page' => 8,
                'post_status' => 'publish',
            ); ?>
            <?php query_posts( $args ); ?>
            <?php if (have_posts()) : ?>
            <?php while (have_posts()) : the_post(); ?>
                <li>
                <a href="<?php the_permalink(); ?>">
                  <div class="img-box">
                    <?php if (has_post_thumbnail()) : ?>
                          <?php the_post_thumbnail('post-thumbnail'); ?>
                      <?php else : ?>
                          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/dummy.svg">
                    <?php endif ; ?>
                  </div>
                  <div class="data en"><?php echo get_the_date(); ?></div>
                  <p class="title"><?php the_title(); ?></p>
                </a>
              </li>
            <?php endwhile; else: ?>
            <p>表示できるコンテンツがありません</p>
            <?php endif; ?>
          </ul>
          <?php wp_pagenavi(); ?>
      </section>
    </div>
    <div class="right">
        <?php get_sidebar(); ?>
    </div>
</div>