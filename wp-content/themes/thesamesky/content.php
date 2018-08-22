<?php 
/**
 * The template for displaying the content.
 * @package thesamesky
 */
?>
			<!-- Post Title -->
			<h1><a href="<?php the_permalink(); ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?>
				</a></h1>
			<!-- Post Data -->
			<div class="sub"><span><i class="fa fa-user" aria-hidden="true"></i><a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ) ); ?>" rel="author"><?php the_author(); ?> </a> </span><span><i class="fa fa-clock-o"></i><?php echo esc_html(get_the_date( get_option( 'date_format' ))); ?></span><span><i class="fa fa-folder-open" aria-hidden="true"></i> <?php _e( '发布在', '' ); ?><?php $categories_list = get_the_category_list(esc_html__( ', ', '' )); $pos= strpos( $categories_list, ',' );
						if ( $pos ) {echo substr( $categories_list, 0, $pos );} else {echo $categories_list;}?></span><span class="right"><i class="fa fa-comment" aria-hidden="true"></i><?php comments_popup_link('0 条评论', '1 条评论', '% 条评论', '', '评论已关闭'); ?></span></div>
			<div class="hr dotted clearfix">&nbsp;</div>
			<!-- Post Content -->
			<div class="graph">
			<?php the_content(); ?>
			</div>
			<div id="share-1" style="text-align:center"></div>
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
					'before' => '<div class="page-links">' . esc_html__( 'Pages:', '' ),
					'after'  => '</div>',
				)
			);?>