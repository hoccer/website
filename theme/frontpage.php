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
              Share Images, contacts, texts, URLs with ease using gestures.
              Zero configuration, based on your geolocation.
            </h1>
            <p class="grid_5">
              Hoccer is a new app for fast and easy exchange of information and
              content. Hoccer allows for the instant transfer of data, by way of
              intuitive gesturing with your phone, eliminating the sometimes
              cumbersome and time.
            </p>
            <div class="grid_3" id="iphone">
              <img src="/images/iphone.jpg" alt="iphone" />
            </div>
            <div class="grid_3" id="android">
              <img src="/images/android_phone.jpg" alt="iphone" />
            </div>
          </div>
        </div>


        <div class="row" id="articles">
	
          <div class="column grid_6">
            <div class="info_box">
				<header>
				  <h2>How to share data with hoccer</h2>
				</header>
				<section>
				    <ul>
					
                <?php dynamic_sidebar( 'frontpage-how-to' ) ?>
                    </ul>
                </section>
            </div>
          </div>

          <div class="column grid_6">

            <div id="features">
              <div class="row">
                <div class="column grid_3 app_market">
                  <img src="<?php bloginfo('stylesheet_directory'); ?>/images/app_store.jpg" alt="app store" />
                </div>
                <div class="column grid_3 app_market">
                  <img src="<?php bloginfo('stylesheet_directory'); ?>/images/app_store.jpg" alt="app store" />
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
              <h2>Lastest Posts</h2>
              <hr />

              <ul>
                <?php query_posts('type=page&posts_per_page=3') ?>
                <?php while ( have_posts() ) : the_post(); ?>
                <li>
                  <h5><a href="<?php the_permalink(); ?>" title="<?php printf( esc_attr__( 'Permalink to %s', 'themename' ), the_title_attribute( 'echo=0' ) ); ?>" rel="bookmark"><?php the_title(); ?></a></h5>
                  <p><?php the_content() ?></p>
                  <footer><?php the_date() ?> by <?php the_author() ?></footer>
                </li>
              <?php endwhile; ?>
              </ul>
            </div>

          </div>

        </div>

        <?php get_footer() ?>
  </body>
</html>


