<?php
     /**
     * Template Name: Company Info
     * Description: Company Info with custom grid
     *
     * @package WordPress
     * @subpackage Toolbox
     */
     get_header() ?>

      <div class="page">
        <div class="row">
          <div class="column grid_12 page_header">
            <h1>Company</h1>
            <p class="grid_5">
              Our Mission Statement/Vision: Hoccer installed on any device.
              easy exchange of information and content. Hoccer allows for the
              instant of data, by way of intuitive gesturing.
            </p>
          </div>
        </div>

        <div class="row" id="articles">
          <div class="column grid_7">
            <div class="info_box">
              <header>
                <h2>How to share data with hoccer</h2>
              </header>
              <section>
                <p>
                  Hoccer uses Geolocation. Are you tired of typing contact
                  details into your mobile phone although the person is standing
                  right in front of you? You need to exchange data with a large
                  number of people at the same time? You want to share a
                  presentation with your audience right now?
                </p>
                <p><a href="#">Find Out Why »</a></p>
              </section>
            </div>
          
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                <?php the_content(); ?>
            <?php endwhile; endif; ?>
          
          </div>
          <div class="column grid_1">&nbsp;</div>
          <div class="column grid_4">
            <?php dynamic_sidebar( 'company-sidebar' ) ?>
            
        
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


        </div>          
        <?php get_footer() ?>
  </body>
</html>
