<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package HemerkenGT
 */

if ( ! is_active_sidebar( 'right-sidebar' ) ) {
	return;
}
?>

<aside id="secondary" class="widget-area sidebar">

<?php if ( is_active_sidebar( 'right-sidebar' ) ) { ?>

	<?php dynamic_sidebar( 'right-sidebar' ); ?>

<?php } else { ?>

	<div class="widget">
		<p><?php echo __('Please put widgets to the <strong>Sidebar</strong>', 'hemerken-gt'); ?></p>
		<p><a href="<?php echo home_url(); ?>/wp-admin/widgets.php"><?php echo __('Ok, I\'m doing now &raquo;', 'hemerken-gt'); ?></a></p>
	</div>

<?php } ?>

</aside><!-- #secondary -->
