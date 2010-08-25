<?php
/**
 * @package WordPress
 * @subpackage Toolbox
 */
?>

<?php if ( ! dynamic_sidebar( 'sidebar' ) ) : ?>

<div class="widget_box">
  <h4>Search</h4>
  <section>
    <?php get_search_form(); ?>
  </section>
</div>

<div class="widget_box">
  <h4><?php _e( 'Archives', 'themename' ); ?></h4>
  <section>
    <ul>
      <?php wp_get_archives( array( 'type' => 'monthly' ) ); ?>
    </ul>
  </section>
</div>

<div class="widget_box">
  <h4><?php _e( 'Meta', 'themename' ); ?></h4>
  <section>
    <ul>
      <?php wp_register(); ?>
      <li><?php wp_loginout(); ?></li>
      <?php wp_meta(); ?>
    </ul>
  </section>
</div>

<?php endif; // end sidebar widget area ?>
