<?php
if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
}
?>
<div role="complementary"  id="sidebar-secondary" class="col-md-4 widget-area">
	<?php dynamic_sidebar('sidebar-1' ); ?>
</div>