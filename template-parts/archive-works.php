<section id="sec01">
  <div class="container">
    <h3 class="en orange">Enjoy creative</h3>
    <p class="a1">製品・サービスの魅力を<br class="sp">的確に打ち出すためのコンテンツづくり。<br>お客様にもっともふさわしい<br class="sp">ビジュアル・デザイン制作を提案いたします。</p>
    <div class="graph flex">
      <dl class="">
        <dt class="a1">新規ユーザー数1年平均</dt>
        <dd class="count js-count"><span class="js-num" data-num="30711">0</span><span class="a1">2022年保守管理<br class="sp">10サイト平均</span></dd>
      </dl>
      <dl class="">
        <dt class="a1">制作サイト実績</dt>
        <dd class="count js-count"><span class="js-num" data-num="396">0</span><span class="a1">2022年までの<br class="sp">過去サイト制作実績</span></dd>
      </dl>
      <dl class="">
        <dt class="a1">制作リピート率</dt>
        <dd class="count js-count"><span class="js-num" data-num="76">0</span><span class="a1">2022年2回目以上<br class="sp">取引の方</span></dd>
      </dl>
    </div>
  </div>
</section>











<section id="sec02">
  <div class="container">
    <ul class="flex">
      <?php
      $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
      $type = get_query_var( 'works_type' );
      $args = array(
          'post_type' => array('works'),
          'paged' => $paged,
          'posts_per_page' => 100,
          'post_status' => 'publish',
      ); ?>
      <?php query_posts( $args ); ?>
      <?php if (have_posts()) : ?>
      <?php while (have_posts()) : the_post(); ?>
          <li>
            <a href="<?php the_permalink(); ?>">
              <div class="img-box"><?php the_post_thumbnail(''); ?></div>
              <p class="work-title"><?php the_title(); ?></p>
              <span class="category">
                <?php
                $terms = get_the_terms($post->ID, 'works_type');
                if (empty($terms)) {
                  echo "";
                } else {
                 foreach($terms as $term){ echo '<span>'.$term->name.'</span>'; }
                }
                ?>
              </span>
            </a>
          </li>
      <?php endwhile; else: ?>
      <p>表示できるコンテンツがありません</p>
      <?php endif; ?>
    </ul>
    <?php wp_pagenavi(); ?>
    <div class="text">
      <p>ここに掲載しているサイトはほんの一部です。<br>掲載出来ない実績はお問い合わせページより<br class="sp">ご請求いただき閲覧いただくことが可能です。</p>
      <div class="btn-box"><a href="<?php echo home_url( '/' ); ?>contact" target="_brank" class="btn">他の実績を請求する</a></div>
    </div>
  </div>
</section>