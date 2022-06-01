<?php get_header(); ?>
<?php if (is_singular('works')) : ?>
  <div class="title-box">
      <div class="container"><h2 class="title"><span class="en orange">Works</span>実績について</h2></div>
  </div>
<?php elseif (is_singular('blogs')) : ?>
  <div class="title-box">
      <div class="container"><h2 class="title"><span class="en orange">Blogs</span>ブログ</h2></div>
  </div>
<?php else : ?>
  <div class="title-box">
      <div class="container"><h2 class="title"><span class="en orange">News</span>お知らせ</h2></div>
  </div>
<?php endif; ?>



    <?php if (have_posts()) : ?>
      <?php if (is_singular('blogs')) : ?>
          <?php get_template_part('template-parts/single', 'blogs'); ?>
      <?php elseif (is_singular('works')) : ?>
          <?php get_template_part('template-parts/single', 'works'); ?>
      <?php else : ?>
        <section id="sec01">
          <div class="container">
          <?php while (have_posts()) : the_post(); ?>
                    <h3 class="a1"><?php the_title(); ?></h3>
                    <div class="contents">
                        <?php the_content(); ?>
                    </div>
                  <div class="single-pagenation">
                    <div class="prev"><?php previous_post_link('%link', 'Prev'); ?></div>
                    <div class="next"><?php next_post_link('%link', 'Next'); ?></div>
                </div>
                <div class="clear"></div>
                 <div class="btn-box">
                    <a href="<?php echo home_url( '/' ); ?>news" class="btn">一覧へ戻る</a>
                </div>
            <?php endwhile; ?>
            </div>
          </section>
          <?php endif; ?>
      <?php else : ?>
      <section id="sec01">
          <div class="container">
            <p>記事がありません。</p>
          </div>
      </section>
  <?php endif; ?>
  
<?php get_footer(); ?>