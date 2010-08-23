    <?php
        /**
        * Template Name: Frontpage
        * Description: Frontpage with custom grid
        *
        * @package WordPress
        * @subpackage Toolbox
        */
        get_header() ?>

        <div class="row" id="splash_screen">
          <div class="column grid_12">
            <div class="row">
              <div class="column grid_6" id="splash_description">
                Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed
                diam nonumy eirmod tempor invidunt ut labore et dolore magna
                aliquyam erat, sed diam voluptua. At vero eos et accusam et
                justo duo dolores et ea rebum. Stet clita kasd gubergren, no
                sea takimata sanctus est Lorem ipsum dolor sit amet.
              </div>



              <div class="column grid_3" id="iphone">
                <img src="<?php bloginfo('stylesheet_directory'); ?>/images/iphone.jpg" alt="iphone" />
              </div>

              <div class="column grid_3" id="android">
                <img src="<?php bloginfo('stylesheet_directory'); ?>/images/android_phone.jpg" alt="iphone" />
              </div>

            </div>
          </div>
        </div>

        <div class="row" style="padding-top: 10px">

          <div class="column grid_6" style="overflow: visible;">
            <div id="how_to">
              <?php dynamic_sidebar( 'frontpage-how-to' ) ?>
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
                <?php dynamic_sidebar( 'frontpage-app-store' ) ?>
              </div>
            </div>

            <div id="latest_posts">
              <h2>Lastest Posts</h2>
              <hr />

              <ul>
                <?php while ( have_posts() ) : the_post(); ?>
                <li>
                  <h5><?php the_title() ?></h5>
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

