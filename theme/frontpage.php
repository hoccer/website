    <?php
        /**
        * Template Name: Frontpage
        * Description: Frontpage with custom grid
        *
        * @package WordPress
        * @subpackage Toolbox
        */
        get_header() ?>

        <div class="row">
          <div class="column grid_12 page_header" id="splash_screen">
            <h1 class="grid_5">
            <?php echo get_post_meta($post->ID, "tagline", true) ?>
            </h1>
            <p class="grid_5">
            <?php echo get_post_meta($post->ID, "hoccer_description", true) ?>
            </p>
            <p class="grid_2">
            <a class="lbp-inline-link" href="#">
                <img src="<?php bloginfo('template_directory') ?>/images/demo_thumb.jpg" width="86" height="54" alt="Watch Video">
                <span>Watch Video</span></a>
            </p>
                
            <div class="grid_3" id="iphone">
              <img src="<?php bloginfo('template_directory') ?>/images/iphone.jpg" alt="iphone" />
            </div>
            <div class="grid_3" id="android">
              <img src="<?php bloginfo('template_directory') ?>/images/android_phone.jpg" alt="iphone" />
            </div>
          </div>
        </div>


        <div class="row" id="articles">

          <div class="column grid_6">
            <div class="info_box">
              <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                <?php the_content() ?>
              <?php endwhile; endif; ?>
            </div>
          </div>

          <div class="column grid_6">

            <div id="features">
              <div class="row">
                <div class="column grid_3 app_market">
                    <a href="http://itunes.apple.com/de/app/hoccer/id340180776?mt=8" alt="Hoccer for iPhone">
                        <img src="<?php bloginfo('stylesheet_directory'); ?>/images/app_store.jpg" alt="app store" />
                    </a>
                </div>
                <div class="column grid_3 app_market">
                    <a href="http://apps.doubletwist.com/Hoccer:-transfer-data/-6581303752730936964" alt="Hoccer for Android">
                        <img src="<?php bloginfo('stylesheet_directory'); ?>/images/market.jpg" alt="andriod market" />
                    </a>
                </div>
              </div>
              <div class="row">
                <div class="column grid_6">
                  <hr />
                  <div>
                    <h4>Features</h4>
                  </div>
                </div>
              </div>
              <div class="row">
                <?php dynamic_sidebar( 'frontpage-features' ) ?>
              </div>
            </div>

            <div id="latest_posts">
              <h2>Latest Posts <a href="/blog/">more »</a></h2>
              <hr />

              <ul>
                <?php query_posts('type=page&posts_per_page=3') ?>
                <?php while ( have_posts() ) : the_post(); ?>
                <li>
                  <h5><a href="<?php the_permalink(); ?>" title="<?php printf( esc_attr__( 'Permalink to %s', 'themename' ), the_title_attribute( 'echo=0' ) ); ?>" rel="bookmark"><?php the_title(); ?></a></h5>
                  <p><?php the_excerpt() ?></p>
                  <footer><?php the_date() ?> by <?php the_author() ?></footer>
                </li>
              <?php endwhile; ?>
              </ul>
            </div>
          </div>
        </div>

        <div id="lightbox">
            <div id="lbp-inline-href">
                <!--<object width="601" height="338"> -->
<iframe src="http://player.vimeo.com/video/14925523" width="601" height="318" frameborder="0"></iframe><p><a href="http://vimeo.com/14925523">Hoccer - App for Simple Data Sharing</a> from <a href="http://vimeo.com/artcom">Art+Com</a> on <a href="http://vimeo.com">Vimeo</a>.</p>
                
            </div>
        </div>
    
        <?php get_footer() ?>
  </body>
</html>


