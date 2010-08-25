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

      <article id="post-0" class="post error404 not-found">
        <header class="entry-header">
          <h1 class="entry-title"><?php _e( 'This is somewhat embarrassing, isn&rsquo;t it?', 'themename' ); ?></h1>
        </header>

        <div class="entry-content">
          <p><?php _e( 'It seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps searching, or one of the links below, can help.', 'themename' ); ?></p>

          <?php get_search_form(); ?>

          <?php the_widget( 'WP_Widget_Recent_Posts' ); ?>

          <div class="widget">
            <h2 class="widgettitle"><?php _e( 'Most Used Categories', 'themename' ); ?></h2>
            <ul>
            <?php wp_list_categories( array( 'orderby' => 'count', 'order' => 'DESC', 'show_count' => 'TRUE', 'title_li' => '', 'number' => '10' ) ); ?>
            </ul>
          </div>

          <?php
          $archive_content = '<p>' . sprintf( __( 'Try looking in the monthly archives. %1$s', 'themename' ), convert_smilies( ':)' ) ) . '</p>';
          the_widget( 'WP_Widget_Archives', 'dropdown=1', "after_title=</h2>$archive_content" );
          ?>

          <?php the_widget( 'WP_Widget_Tag_Cloud' ); ?>

        </div><!-- .entry-content -->
      </article><!-- #post-0 -->

    </div><!-- #content -->
  </div><!-- #primary -->
</div>
<?php get_footer(); ?>
