<?php
/**
 * The template for displaying archive pages.
 *
 * @package thesamesky
 */

get_header(); ?>

<div id="wrapper">
      	<div class="<?php if( !is_active_sidebar('sidebar-1')) { echo "col-lg-12"; } else { echo "col-md-8 col-lg-8"; } ?>">
      		<div class="content">
			<header class="page-header">
			<h2 class="page-title">
      			<?php echo the_archive_title(); ?>	
      		</h2>
			</header>
					<?php 
					if( have_posts() ) :
					while( have_posts() ): the_post();?>	
					<h1><a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a></h1>
			        <!-- Post Data -->
			        <div class="sub"><?php the_tags('标签：', ', ', ''); ?> &nbsp; <?php the_time('Y年n月j日') ?> &nbsp; <?php comments_popup_link('0 条评论', '1 条评论', '% 条评论', '', '评论已关闭'); ?><?php edit_post_link('编辑', ' &nbsp; ', ''); ?></div>
			        <div class="hr dotted clearfix">&nbsp;</div>
						<?php if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.?>
					<?php
					$image_id         = get_post_thumbnail_id();
					$image_url_big    = wp_get_attachment_image_src( $image_id, 'medium', true );
					?>
					<img src="<?php echo esc_url( $image_url_big[0] ); ?>" alt="<?php the_title_attribute(); ?>">
					<?php } ?>
					<p>
					<?php the_excerpt(); ?>
			       </p>
			        <!-- Read More Button -->
			        <div class="clearfix"><a href="<?php the_permalink(); ?>" class="more">阅读全文</a></div>
		            <div class="hr clearfix">&nbsp;</div>
					<?php endwhile; endif;
					?>
          	</div>
      	</div>
        <?php get_sidebar(); ?>
		<?php get_footer(); ?>