<?php
/**
 * The Sidebar containing the primary and secondary widget areas.
 *
 * @package     WordPress
 * @subpackage CfAWordpress
 * @since CfA
 */
?>
  	

<?php
	/* When we call the dynamic_sidebar() function, it'll spit out
	 * the widgets for that widget area. If it instead returns false,
	 * then the sidebar simply doesn't exist, so we'll hard-code in
	 * some default sidebar stuff just in case.
	 */
	if ( ! dynamic_sidebar( 'labs-primary-widget-area' ) ) : ?>

		<?php endif; // end primary widget area ?>

<?php
	// A second sidebar for widgets, just because.
	if ( is_active_sidebar( 'labs-secondary-widget-area' ) ) : ?>

		<div id="secondary" class="widget-area" role="complementary">
				<?php dynamic_sidebar( 'secondary-widget-area' ); ?>
		</div><!-- #secondary .widget-area -->

<?php endif; ?>


</div>
</div>
