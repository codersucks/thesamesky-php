<?php
/**
 * The template for displaying home pages.
 *
 * @package thesamesky
 */

get_header(); ?>

<div id="wrapper">
      	<div class="<?php if( !is_active_sidebar('sidebar-1')) { echo "col-lg-12"; } else { echo "col-md-8 col-lg-8"; } ?>">
      		<h1 class="archive_title">
      			<?php echo the_archive_title(); ?>	
      		</h1>
      		<div class="content">
					<?php 
					if( have_posts() ) :
					while( have_posts() ): the_post();
					get_template_part('content',''); 
					endwhile; endif;
					?>
          	</div>
      	</div>
        <?php get_sidebar(); ?>
		<?php get_footer(); ?>