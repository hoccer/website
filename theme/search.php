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
      <h1>Search</h1>
      <p class="grid_5">
        <?php
          echo get_post_meta($post->ID, "description", true) ?>
      </p>
    </div>
  </div>
  <div class="row" id="articles">
    <div class="column grid_7">

      <?php if ( have_posts() ) : ?>

        <h1 class="page-title"><?php printf( __( 'Search Results for: %s', 'themename' ), '<span>' . get_search_query() . '</span>' ); ?></h1>
        <?php get_template_part( 'loop', 'search' ); ?>

      <?php else : ?>

        <article id="post-0" class="post no-results not-found">
          <header class="entry-header">
            <h1 class="entry-title"><?php _e( 'Nothing Found', 'themename' ); ?></h1>
          </header><!-- .entry-header -->

          <div class="entry-content">
            <p><?php _e( 'Sorry, but nothing matched your search criteria. Please try again with some different keywords.', 'themename' ); ?></p>
            <?php get_search_form(); ?>
          </div><!-- .entry-content -->
        </article><!-- #post-0 -->

      <?php endif; ?>

    </div><!-- #content -->
    <div class="column grid_1">&nbsp;</div>
    <div class="column grid_4">
      <?php get_sidebar(); ?>
    </div>
  </div>
</div><!-- #primary -->
<?php get_footer(); ?>
