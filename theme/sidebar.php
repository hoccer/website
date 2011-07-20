<?php
/**
 * @package WordPress
 * @subpackage Toolbox
 */
?>
	<?php if ( is_active_sidebar('sidebar') ) : ?>

		<?php dynamic_sidebar( 'sidebar' ); ?>

	<?php else : ?>

		<div class="headless widget_box">
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


		<?php endif; // end sidebar widget area ?>
