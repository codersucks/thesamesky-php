<?php 
$limit = get_option('posts_per_page');
	$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
	query_posts('&showposts=' . $limit . '&paged=' . $paged);
	$wp_query->is_archive = true; $wp_query->is_home = false;

get_header(); ?>
<div id="wrapper">
			<!-- Blog Area -->
			<div class="<?php if( !is_active_sidebar('sidebar-1')) { echo "col-lg-12"; } else { echo "main col-md-8 col-lg-8"; }  ?>">
			<div class="content">
			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			<!-- Post Title -->
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
			<!-- Post Content -->
			<p>
			<?php the_excerpt(); ?>
			</p>
			<!-- Read More Button -->
			<div class="clearfix"><a href="<?php the_permalink(); ?>" class="more">阅读全文</a></div>
		<div class="hr clearfix">&nbsp;</div>
		<?php endwhile; ?>

		
		<?php else : ?>
		<h1 class="title"><a href="#" rel="bookmark">未找到</a></h1>
		<p>没有找到任何文章！</p>
		<?php endif; ?>
		<!-- Blog Navigation -->
		<div class="navigation">
		<div class="nav-previous"><?php previous_posts_link(); ?></div>
		 <div class="nav-next"><?php next_posts_link(); ?></div>
	     </div>
	   </div>
			</div>
			<!--Sidebar Area-->
			<?php get_sidebar('sidebar2'); ?>
			<!--Sidebar Area-->
			<?php get_footer();?>
