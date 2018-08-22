<?php 
/**
 * The template for displaying the content.
 * @package thesamesky
 */
?>
			<!-- Post Title -->
			<h1><a href="<?php the_permalink(); ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?>
			<?php if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.?>
					<?php
					$image_id         = get_post_thumbnail_id();
					$image_url_big    = wp_get_attachment_image_src( $image_id, 'large', true );
					?>
					<img src="<?php echo esc_url( $image_url_big[0] ); ?>" alt="<?php the_title_attribute(); ?>">
					<?php } ?>
				</a></h1>
			<!-- Post Data -->
			<div class="hr dotted clearfix">&nbsp;</div>
			<!-- Post Content -->
			<div class="graph">
			<?php the_content(); ?>
			</div>
			<?php wp_link_pages(
				array(
					'before' => '<div class="page-links">' . esc_html__( 'Pages:', '' ),
					'after'  => '</div>',
				)
			);?>