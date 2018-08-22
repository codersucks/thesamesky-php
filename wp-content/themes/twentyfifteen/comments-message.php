<?php
/**
 * The template for displaying comments.
 *
 * The area of the page that contains both current comments
 * and the comment form.
 *
 * @package thesamesky
 */

/*
 * If the current post is protected by a password and
 * the visitor has not yet entered the password we will
 * return early without loading the comments.
 *
 */
if ( post_password_required() ) {
	return;
}
?>

<div id="comments" class="comments-area">
	<?php if ( have_comments() ) { ?>
	<h2 class="comments-title">
			<?php
			printf( /* translators: %1$s is the number of comments and %2$s is the post title */
				esc_html( _nx( '%1$s 条留言', '%1$s 条留言', get_comments_number(), '留言', '' ) ),
				number_format_i18n( get_comments_number() ),
				'<span>' . get_the_title() . '</span>'
			);
			?>
		</h2>
		<?php
		if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : // are there comments to navigate through
		?>
		<nav id="comment-nav-above" class="navigation comment-navigation" role="navigation">
			<h2 class="screen-reader-text"><?php esc_html_e( '留言列表', '' ); ?></h2>
			<div class="nav-links">
				<div class="nav-previous"><?php previous_comments_link( esc_html__( '较早的留言', '' ) ); ?></div>
				<div class="nav-next"><?php next_comments_link( esc_html__( '较新的留言', '' ) ); ?></div>

			</div><!-- .nav-links -->
		</nav><!-- #comment-nav-above -->
		<?php
		endif; // check for comment navigation
		?>

		<ol class="comment-list">
			<?php
				wp_list_comments(
					array(
						'style'       => 'ol',
						'short_ping'  => true,
						'callback'    => 'thesamesky_comment_message',
						'avatar_size' => 60,
					)
				);
			?>
		</ol><!-- .comment-list -->

		<?php
		if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : // are there comments to navigate through
		?>
		<nav id="comment-nav-below" class="navigation comment-navigation" role="navigation">
			<h2 class="screen-reader-text"><?php esc_html_e( '留言列表', '' ); ?></h2>
			<div class="nav-links">

				<div class="nav-previous"><?php previous_comments_link( esc_html__( '较早的留言', '' ) ); ?></div>
				<div class="nav-next"><?php next_comments_link( esc_html__( '较新的留言', '' ) ); ?></div>

			</div><!-- .nav-links -->
		</nav><!-- #comment-nav-below -->
		<?php
		endif; // check for comment navigation
		?>

	<?php
	} // End if().
	?>

	<?php
		// If comments are closed and there are comments, let's leave a little note, shall we?
		if ( ! comments_open() && '0' != get_comments_number() && post_type_supports( get_post_type(), 'comments' ) ) :
	?>
	<p class="no-comments"><?php esc_html_e( '留言已关闭.', '' ); ?></p>
	<?php endif; ?>

	<?php thesamesky_comment_form(); ?>

</div><!-- #comments -->
