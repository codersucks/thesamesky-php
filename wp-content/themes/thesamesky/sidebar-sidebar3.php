<?php
if ( ! is_active_sidebar( 'sidebar-3' ) ) {
	return;
}
?>
<div role="complementary"  id="sidebar-secondary" class="col-md-4 widget-area">
	<?php dynamic_sidebar('sidebar-3' ); ?>
</div>