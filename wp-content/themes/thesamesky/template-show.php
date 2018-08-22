<?php
/**
 * Template Name: Show
 *
 * @package the-same-sky
 */
get_header(); ?>
<script>
		$(window).resize(function() {
         var height = document.documentElement.clientHeight; 
		 $("#impress").height(height-160);
		})
		 </script>
<div id="impress">
		<iframe id="frame" style="min-height:620px;width:100%;height:100%" src="<?php bloginfo('template_url'); ?>/assets/impress.html" frameborder="0" scrolling="auto"></iframe>
		<?php get_footer(); ?>