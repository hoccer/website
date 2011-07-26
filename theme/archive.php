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
      <h1>Archives</h1>
      <p class="grid_5">
        <?php
          echo get_post_meta($post->ID, "description", true) ?>
      </p>
    </div>
  </div>
  <div class="row" id="articles">
    <div class="column grid_7">
      <?php the_post(); ?>

      <h2 class="page-title">
      <?php if ( is_day() ) : ?>
        <?php printf( __( 'Daily Archives: <span>%s</span>', 'themename' ), get_the_date() ); ?>
      <?php elseif ( is_month() ) : ?>
        <?php printf( __( 'Monthly Archives: <span>%s</span>', 'themename' ), get_the_date( 'F Y' ) ); ?>
      <?php elseif ( is_year() ) : ?>
        <?php printf( __( 'Yearly Archives: <span>%s</span>', 'themename' ), get_the_date( 'Y' ) ); ?>
      <?php else : ?>
        <?php _e( 'Blog Archives', 'themename' ); ?>
      <?php endif; ?>
      </h2>

      <?php rewind_posts(); ?>

      <?php get_template_part( 'loop', 'archive' ); ?>

    </div><!-- #primary -->
    <div class="column grid_1">&nbsp;</div>
    <div class="column grid_4">
      <?php get_sidebar(); ?>
    </div>
  </div>

</div>
<?php get_footer(); ?>
