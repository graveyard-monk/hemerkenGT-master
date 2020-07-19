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
	<?php dynamic_sidebar( 'right-sidebar' ); ?>
</aside><!-- #secondary -->
