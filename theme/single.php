<?php
/**
 * @package WordPress
 * @subpackage Toolbox
 */

get_header(); ?>

        <div class="page">
          <div class="row">
            <?php $header_class = (get_post_meta($post->ID, "description", true) ? "" : "page_header_small")   ?>
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
            <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

        <article>
          <h2><?php the_title(); ?></h2>
          <hr />
          <div class="meta">
            <?php
              printf( __( '<span class="meta-prep meta-prep-author">Posted on </span>
              <a href="%1$s" rel="bookmark"><time class="entry-date" datetime="%2$s" pubdate>%3$s</time></a>
              <span class="meta-sep"> by </span> <span class="author vcard">
              <a class="url fn n" href="%4$s" title="%5$s">%6$s</a></span>', 'themename' ),
                get_permalink(),
                get_the_date( 'c' ),
                get_the_date(),
                get_author_posts_url( get_the_author_meta( 'ID' ) ),
                sprintf( esc_attr__( 'View all posts by %s', 'themename' ), get_the_author() ),
                get_the_author()
              );
            ?>
          </div><!-- .entry -->
          <div class="post_content">
            <?php the_content(); ?>
            <?php wp_link_pages( array( 'before' => '<div class="page-link">' . __( 'Pages:', 'themename' ), 'after' => '</div>' ) ); ?>
          </div>
          <footer class="entry-meta">
            <?php
              $tag_list = get_the_tag_list( '', ', ' );
              if ( '' != $tag_list ) {
                $utility_text = __( 'This entry was posted in %1$s and tagged %2$s. Bookmark the <a href="%3$s" title="Permalink to %4$s" rel="bookmark">permalink</a>.', 'themename' );
              } else {
                $utility_text = __( 'This entry was posted in %1$s. Bookmark the <a href="%3$s" title="Permalink to %4$s" rel="bookmark">permalink</a>.', 'themename' );
              }
              printf(
                $utility_text,
                get_the_category_list( ', ' ),
                $tag_list,
                get_permalink(),
                the_title_attribute( 'echo=0' )
              );
            ?>

            <?php edit_post_link( __( 'Edit', 'themename' ), '<span class="edit-link">', '</span>' ); ?>
          </footer><!-- .entry-meta -->
        </article><!-- #post-<?php the_ID(); ?> -->

        <nav id="nav-below">
          <h1 class="screen-reader-text"><?php _e( 'Post navigation', 'themename' ); ?></h1>
          <div class="nav-previous"><?php previous_post_link( '%link', '<span class="meta-nav">' . _x( '&larr;', 'Previous post link', 'themename' ) . '</span> %title' ); ?></div>
          <div class="nav-next"><?php next_post_link( '%link', '%title <span class="meta-nav">' . _x( '&rarr;', 'Next post link', 'themename' ) . '</span>' ); ?></div>
        </nav><!-- #nav-below -->

        <?php comments_template( '', true ); ?>

      <?php endwhile; // end of the loop. ?>
            </div>
            <div class="column grid_1">&nbsp;</div>
             <div class="column grid_4">
               <?php get_sidebar(); ?>
             </div>
      </div><!-- #content -->
    </div><!-- #primary -->

<?php get_footer(); ?>
