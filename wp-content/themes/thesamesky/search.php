<?php
/**
 * The template for displaying search results pages.
 *
 * @package thesamesky
 */

get_header(); 
?>
<div class="clearfix"></div>
<div id="wrapper">
      <div class="<?php if( !is_active_sidebar('sidebar-1')) { echo "col-lg-12"; } else { echo "col-md-8 col-lg-8"; } ?>">
			<div class="content">
	        <?php 
			global $i;
			if ( have_posts() ) : ?>
			<h2><?php printf( esc_html__( "搜索结果: %s", 'key' ), '<span>' . get_search_query() . '</span>' ); ?></h2>
	        	<div class="grid">
					<?php while ( have_posts() ) : the_post();  
					 get_template_part('content','');
					 endwhile; ?>
				</div>
				<div class="col-lg-12 text-center">
		          	<?php
					//Previous / next page navigation
					the_posts_pagination( array(
					'prev_text'          => '<i class="fa fa-long-arrow-left"></i>',
					'next_text'          => '<i class="fa fa-long-arrow-right"></i>',
					'screen_reader_text' => ' ',
					) );
					?>
	         	</div>
		      	<div class="clearfix"></div>
					<?php else : ?>
					<h2><?php esc_html_e('没有找到你要的内容哦','key'); ?></h2>
					<p><?php esc_html_e('抱歉, 没有找到...','key' ); ?>
					</p>
					<?php get_search_form(); ?>
					<?php endif; ?>
			</div>
      </div>
        <?php get_sidebar(); ?>
		<?php get_footer();?>