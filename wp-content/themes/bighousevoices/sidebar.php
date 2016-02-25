<?php
/**
 * The sidebar containing the main widget area.
 *
 * @package crio-msv
 */

if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
}
?>

<div class="grid__sidebar" role="complementary">
	<?php dynamic_sidebar( 'sidebar-1' ); ?>
</div><!-- #secondary -->
