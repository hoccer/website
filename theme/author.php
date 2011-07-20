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
      <h1><?php
          printf( __( 'Category Archives: %s', 'themename' ), '<span>' . single_cat_title( '', false ) . '</span>' );
        ?></h1>
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
      <?php printf( __( 'Author Archives: <span class="vcard">%s</span>', 'themename' ), "<a class='url fn n' href='" . get_author_posts_url( get_the_author_meta( 'ID' ) ) . "' title='" . esc_attr( get_the_author() ) . "' rel='me'>" . get_the_author() . "</a>" ); ?>
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
