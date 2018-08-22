<!-- =========================
     Page Breadcrumb   
============================== -->
<?php get_header(); ?>
<div class="clearfix"></div>
<!-- =========================
     Page Content Section      
============================== -->
<div id="wrapper">
	<div class="<?php if( !is_active_sidebar('sidebar-1')) { echo "col-lg-12"; } else { echo "col-md-8 col-lg-8"; }  ?>">
			<div class="content">
			<?php while ( have_posts() ) { the_post(); ?>
				<div>
                <article class="small">
				<?php get_template_part( 'content', 'single' ); ?>
				<div class="edit"><span><?php edit_post_link('编辑', ' &nbsp; ', ''); ?></span></div>
				<?php the_post_navigation( array(
                          'prev_text' => __( '上一篇: %title' ),
                          'next_text' => __( '下一篇: %title' ),
                          'screen_reader_text' => __( ' ' ),) );?>
                </article>
				</div>
			<?php } ?>
			<?php if ( comments_open() || get_comments_number() ) {
					comments_template();
				}
			?>
			</div>
    </div>
	  <?php get_sidebar(); ?>
	  <script>$('#share-1').share({sites: ['weibo','qq', 'wechat','douban','qzone','linkedin']}); </script>
	  <?php get_footer(); ?>