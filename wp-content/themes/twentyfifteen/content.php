<?php
/**
 * The default template for displaying content
 *
 * Used for both single and index/archive/search.
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<?php
		// Post thumbnail.
		twentyfifteen_post_thumbnail();
	?>
	<header class="entry-header">
		<?php
		if ( is_single() ) :
			the_title( '<h1 class="entry-title">', '</h1>' );
			else :
				the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' );
			endif;
		?>
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php
			/* translators: %s: Name of current post */
			the_content(
				sprintf(
					__( 'Continue reading %s', 'twentyfifteen' ),
					the_title( '<span class="screen-reader-text">', '</span>', false )
				)
			);?>
             <div class="share-1" style="text-align:center"></div>
			<div class="entry-shang text-center">
		    <button class="zs show-zs btn btn-bred" onclick="ZanShang();">赞赏</button>
	        </div>
	        <div class="zs-modal-bg"></div>
	        <div class="zs-modal-box">
		    <div class="zs-modal-head">
			<button type="button" class="close">×</button>
			<span class="author"><a href="http://thesamesky.cn/"><img alt="image" class="img-circle" src="<?php bloginfo('template_url'); ?>/images/head.jpg" width="64" height="64"/></a></span>
			<p class="tip"><i></i><span>感谢投喂</span></p>
		    </div>
		    <div class="zs-modal-body">
			<div class="zs-modal-pay">
				<p>使用<span id="pay-type">微信</span>扫描二维码完成支付</p>
				<img src="<?php bloginfo('template_url'); ?>/images/wechat.jpg" id="wechat-image"/>
				<img src="<?php bloginfo('template_url'); ?>/images/alipay.jpg" id="alipay-image" style="display:none;"/>
			</div>
		    </div>
		    <div class="zs-modal-footer">
			<label><input type="radio" name="zs-type" value="wechat" class="zs-type" checked="checked"><span class="zs-wechat"><img src="<?php bloginfo('template_url'); ?>/images/wechat-btn.png"/></span></label>
			<label><input type="radio" name="zs-type" value="alipay" class="zs-type"><span class="zs-alipay"><img src="<?php bloginfo('template_url'); ?>/images/alipay-btn.png"/></span></label>
		    </div>
	        </div>
			<?php wp_link_pages(
				array(
					'before'      => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'twentyfifteen' ) . '</span>',
					'after'       => '</div>',
					'link_before' => '<span>',
					'link_after'  => '</span>',
					'pagelink'    => '<span class="screen-reader-text">' . __( 'Page', 'twentyfifteen' ) . ' </span>%',
					'separator'   => '<span class="screen-reader-text">, </span>',
				)
			);
		?>
	</div><!-- .entry-content -->

	<?php
		// Author bio.
	if ( is_single() && get_the_author_meta( 'description' ) ) :
		get_template_part( 'author-bio' );
		endif;
	?>

	<footer class="entry-footer">
		<?php twentyfifteen_entry_meta(); ?>
		<?php edit_post_link( __( 'Edit', 'twentyfifteen' ), '<span class="edit-link">', '</span>' ); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->
