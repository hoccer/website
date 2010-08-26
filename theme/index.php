<?php
     /**
     * Template Name: Index
     * Description: Company Info with custom grid
     *
     * @package WordPress
     * @subpackage Toolbox
     */
     get_header() ?>
      <div class="page">
        <div class="row">
          <?php $header_class = (get_post_meta($post->ID, "description", true) ? "page_header" : "page_header_small")   ?>
          <div class="column grid_12 page_header <?php echo $header_class ?>">
            <h1>Blog</h1>
            <p class="grid_5">
              <?php
                echo get_post_meta($post->ID, "description", true) ?>
            </p>
          </div>
        </div>

        <div class="row" id="articles">
          <div class="column grid_7">
              <?php
                $title = get_post_meta($post->ID, "infobox_title", true);
                $content = get_post_meta($post->ID, "infobox_content", true);
                if ($content != null && $title != null) :
               ?>
                <div class="info_box">
                    <header><h2><?php echo $title ?></h2></header>
                    <section>
                    <?php echo $content ?>
                    </section>
                </div>
                <?php endif; ?>

                <?php if (have_posts()) :
                    while (have_posts()) : the_post(); ?>
                        <article>
                            <h2><a href="<?php the_permalink() ?>"><?php the_title() ?></a></h2>
                            <hr />
                            <?php the_content() ?>
                            <em>Posted on <?php the_date() ?> by <?php the_author() ?></em>

                        </article>
                    <?php endwhile;
                endif; ?>

          </div>
          <div class="column grid_1">&nbsp;</div>
          <div class="column grid_4">
           <?php
              $title = get_post_meta($post->ID, "sidebar_title", false);
              $content = get_post_meta($post->ID, "sidebar_content", false);
              if ($content != null && $title != null) :
                for ($i = 0; $i < count($content); $i++):
           ?>
              <div class="widget_box">
                <h4><?php echo $title[$i] ?></h4>
                <section>
                  <?php echo $content[$i] ?>
                </section>
              </div>
           <? endfor; endif; ?>



            <?php dynamic_sidebar( 'company_sidebar' ) ?>


          <?php if (get_post_meta($post->ID, "show_posts", true) == 1): ?>
          <div id="latest_posts">
              <h2>Latest Posts</h2>
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
            <? endif; ?>
            <div class="column grid_1">&nbsp;</div>
             <div class="column grid_4">
               <?php get_sidebar(); ?>
             </div>
          </div>
        </div>

        
        </div>
        <?php get_footer() ?>
  </body>
</html>


<?php get_header(); ?>

<?php get_footer(); ?>
