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
             <?php get_sidebar(); ?>
           </div>
         </div>
        </div>

        <?php /* Display navigation to next/previous pages when applicable */ ?>
        <?php if (  $wp_query->max_num_pages > 1 ) : ?>
          <nav id="nav-below" class="row">
            <div class="nav-previous column grid_2">
            <?php next_posts_link( __( '<span class="meta-nav">&larr;</span> Older posts', 'themename' ) ); ?>
            </div>
            <div class="column grid_3">&nbsp;</div>
            <div class="nav-next column grid_2">
            <?php previous_posts_link( __( 'Newer posts <span class="meta-nav">&rarr;</span>', 'themename' ) ); ?>
            </div>
          </nav><!-- #nav-below -->
        <?php endif; ?>
        </div>
        <?php get_footer() ?>
  </body>
</html>
