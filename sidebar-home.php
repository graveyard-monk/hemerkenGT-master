<?php
/**
 * The sidebar containing the main widget area.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package hemerkenGT
 */


?>

<aside id="secondary" class="widget-area sidebar">

<?php if ( is_active_sidebar( 'homepage-sidebar' ) ) { ?>

	<?php dynamic_sidebar( 'homepage-sidebar' ); ?>

<?php } elseif ( is_active_sidebar( 'right-sidebar' ) ) { ?>
	
	<?php dynamic_sidebar( 'right-sidebar' ); ?>

<?php } else { ?>

	<div class="widget">
		<p><?php echo __('Please put widgets to the <strong>Homepage Sidebar</strong>', 'hemerken'); ?></p>
		</div>

<?php } ?>

</aside><!-- #secondary -->

