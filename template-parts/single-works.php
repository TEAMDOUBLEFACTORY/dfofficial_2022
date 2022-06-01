<section id="sec01">
    <div class="container">
    <?php if ( have_posts() ) : ?>
    <?php while( have_posts() ) : the_post(); ?>
        
    </div>
        <div class="contents-box">
            <div class="box">
                <div class="contents top-contents container">
                    <h3 class="a1"><?php the_title(); ?></h3>
                    <?php the_content(); ?>
                    <?php $field = get_field('service_icon'); if($field){ echo '<div class="service-icon"><img src="'.$field.'"></div>';} ?>
                    <div class="img-box"><?php the_post_thumbnail(''); ?></div>
                </div>
            </div>
            <?php if( get_field('slider_img1') ): ?>
            <div class="slider-box">
                <ul class="slider-center3">
                    <?php $slider1 = get_field('slider_img1'); if($slider1){ echo '<li class="slider-image"><img src="'.$slider1.'"></li>';} ?>
                    <?php $slider2 = get_field('slider_img2'); if($slider2){ echo '<li class="slider-image"><img src="'.$slider2.'"></li>';} ?>
                    <?php $slider3 = get_field('slider_img3'); if($slider3){ echo '<li class="slider-image"><img src="'.$slider3.'"></li>';} ?>
                    <?php $slider4 = get_field('slider_img4'); if($slider4){ echo '<li class="slider-image"><img src="'.$slider4.'"></li>';} ?>
                    <?php $slider5 = get_field('slider_img5'); if($slider5){ echo '<li class="slider-image"><img src="'.$slider5.'"></li>';} ?>
                </ul>
                
            </div>
            <?php endif; ?>

            <?php $full_img = get_field('full_img'); if($full_img){ echo '<div class="contents"><div class="container"><img src="'.$full_img.'" class="full_img"></div></div>';} ?>

            <?php if( get_field('background_color') ): ?>
            <div class="color-box" style="background-color:<?php $background_color = get_field('background_color'); if($background_color){ echo $background_color;} ?>;">
                <div class="contents container">
                    <div class="flex">
                        <?php $color1 = get_field('color_img1'); if($color1){ echo '<img src="'.$color1.'">';} ?>
                        <?php $color2 = get_field('color_img2'); if($color2){ echo '<img src="'.$color2.'">';} ?>
                        <?php $color3 = get_field('color_img3'); if($color3){ echo '<img src="'.$color3.'">';} ?>
                        <?php $color4 = get_field('color_img4'); if($color4){ echo '<img src="'.$color4.'">';} ?>
                    </div>
                    <div class="img-box">
                        <?php $color5 = get_field('color_img5'); if($color5){ echo '<img src="'.$color5.'">';} ?>
                    </div>
                </div>
            </div>
        <?php endif; ?>

        <?php $document_img = get_field('document_img'); if($document_img){ echo '<div class="contents"><div class="container"><img src="'.$document_img.'"></div></div>';} ?>

        <?php if( get_field('real_img1') ): ?>
        <div class="realimg-box">
            <div class="contents container">
                <?php $real_img1 = get_field('real_img1'); if($real_img1){ echo '<img src="'.$real_img1.'">';} ?>
                <div class="flex">
                    <?php $real_img2 = get_field('real_img2'); if($real_img2){ echo '<img src="'.$real_img2.'">';} ?>
                    <?php $real_img3 = get_field('real_img3'); if($real_img3){ echo '<img src="'.$real_img3.'">';} ?>
                </div>
            </div>
        </div>
        <?php endif; ?>

        <div class="category">
            <div class="contents container">
                <ul class="flex">
                 <?php 
                    $terms = get_terms('works_type','hide_empty=1');
                    if (is_array($terms)) {
                        foreach($terms as $term):
                            $cat_id = $term->term_id;
                            $slug = $term->slug;
                            $cat_title = $term->name;
                            $cat_url = get_term_link($slug, 'works_type');;
                            echo "<li";
                            if (is_object_in_term( get_the_ID(), 'works_type', $slug )) {
                                echo ' class="current"';
                            } 
                            echo '><a href="'.$cat_url.'" title="'.$cat_title.'">'.$cat_title.'</a></li>';
                    endforeach; }?>
                </ul>
            </div>
        </div>


        <div class="outline">
            <div class="contents container flex pc">
                <div class="box">
                    <?php $price = get_field('price'); if($price){ echo '<dl><dt>Price</dt><dd>'.$price.'</dd></dl>';} ?>
                    <?php $design = get_field('design'); if($design){ echo '<dl><dt>Design</dt><dd>'.$design.'</dd></dl>';} ?>
                </div>
                <div class="box">
                    <?php $production_schedule = get_field('production_schedule'); if($production_schedule){ echo '<dl><dt>Schedule</dt><dd>'.$production_schedule.'</dd></dl>';} ?>
                    <?php $main_cording = get_field('main_cording'); if($main_cording){ echo '<dl><dt>Main cording</dt><dd>'.$main_cording.'</dd></dl>';} ?>
                </div>
                <div class="box">
                    <?php $tools = get_field('tools'); if($tools){ echo '<dl><dt>Tools</dt><dd>'.$tools.'</dd></dl>';} ?>
                    <?php $sub_cording = get_field('sub_cording'); if($sub_cording){ echo '<dl><dt>Cording</dt><dd>'.$sub_cording.'</dd></dl>';} ?>
                </div>
            </div>
            <div class="contents container sp">
                <div class="box">
                    <?php $price = get_field('price'); if($price){ echo '<dl><dt>Price</dt><dd>'.$price.'</dd></dl>';} ?>
                    <?php $production_schedule = get_field('production_schedule'); if($production_schedule){ echo '<dl><dt>Schedule</dt><dd>'.$production_schedule.'</dd></dl>';} ?>
                    <?php $tools = get_field('tools'); if($tools){ echo '<dl><dt>Tools</dt><dd>'.$tools.'</dd></dl>';} ?>
                    <?php $design = get_field('design'); if($design){ echo '<dl><dt>Design</dt><dd>'.$design.'</dd></dl>';} ?>
                    <?php $main_cording = get_field('main_cording'); if($main_cording){ echo '<dl><dt>Main cording</dt><dd>'.$main_cording.'</dd></dl>';} ?>
                    <?php $sub_cording = get_field('sub_cording'); if($sub_cording){ echo '<dl><dt>Cording</dt><dd>'.$sub_cording.'</dd></dl>';} ?>
                </div>
            </div>
        </div>


        </div>
    <?php endwhile;?>
    <?php endif; ?>
</section>
    
<section id="sec02">
  <div class="container">
    <h3><span class="en orange">Another works</span>その他の実績</h3>
      <?php
        $args = array(
            'posts_per_page'   => 6,
            'offset'           => 0,
            'orderby'          => 'date',
            'order'            => 'DESC',
            'post_type'        =>'works',
            'post_status'      => 'publish',
            'tax_query' => array( 
              array(
                'taxonomy' => 'recommend',
                'field' => 'slug',
                'terms' => array('true')
              ),
            ),
            'suppress_filters' => true
        );
        $postslist = get_posts( $args );
      ?>
      <?php if( $postslist ): ?>
      <ul class="flex">
      <?php foreach( $postslist as $post ): ?>
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
        <?php endforeach; ?>
        <?php else: ?>
        <p>表示できるコンテンツがありません</p>
        <?php endif; ?>
      </ul>
      <div class="text">
          <!--<p>ここに掲載しているサイトはほんの一部です。<br>掲載出来ない実績はパスワードをお送りさせて<br class="sp">いただき閲覧いただくことが可能です。</p>
          <div class="btn-box"><a href="<?php echo home_url( '/' ); ?>secret-works" target="_brank" class="btn">他の実績を見る</a></div>-->
          <div class="btn-box"><a href="<?php echo home_url( '/' ); ?>works" target="_brank" class="btn">実績一覧ページへ戻る</a></div>
      </div>
  </div> 
</section>