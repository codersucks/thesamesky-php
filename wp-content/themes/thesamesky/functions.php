<?php
/**
 * Register widget area.
 *
 * @link http://codex.wordpress.org/Function_Reference/register_sidebar
 */
function the_same_sky_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'the-same-sky' ),
			'id'            => 'sidebar-1',
			'description'   => '',
			'before_widget' => '<aside id="%1$s" class="widget %2$s">',
			'after_widget'  => '</aside>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2><div class="colored-line-left"></div><div class="clearfix widget-title-margin"></div>',
		)
	);
	register_sidebar(array(
		'name' => 'sidebar2',
		'id' => 'sidebar-2',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => '</aside>',
		'before_title' => '<h2 class="widget-title">',
		'after_title' =>  '</h2><div class="colored-line-left"></div><div class="clearfix widget-title-margin"></div>',
	));
	register_sidebar(array(
		'name' => 'sidebar3',
		'id' => 'sidebar-3',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => '</aside>',
		'before_title' => '<h2 class="widget-title">',
		'after_title' =>  '</h2><div class="colored-line-left"></div><div class="clearfix widget-title-margin"></div>',
	));
}
add_action( 'widgets_init', 'the_same_sky_widgets_init' );
register_nav_menus();
/**
 * Comments callback function.
 *
 * @param     mixed $comment Author’s User ID, an E-mail Address (a string) or the comment object from the comment loop.
 * @param     array $args Arguments for wp_list_comments.
 * @param     int   $depth How deep (in comment replies) should the comments be fetched.
 */
add_theme_support( 'post-thumbnails' );
function custom_loginlogo() {
echo'<style type="text/css"> h1 a {background-image: url('.get_bloginfo('template_directory').'/images/logo-login.png) !important; } </style>';
}
add_action('login_head', 'custom_loginlogo');
function custom_loginlogo_url($url) {
  return'http://thesamesky.cn'; //在此输入你需要链接到的URL地址
}
add_filter( 'login_headerurl', 'custom_loginlogo_url');

function thesamesky_comment( $comment, $args, $depth ) {
	$GLOBALS['comment'] = $comment;

	switch ( $comment->comment_type ) :
		case 'pingback':
		case 'trackback':
		?>
		<li class="post pingback">
		<p><?php _e( '引用:', '' ); ?><?php comment_author_link(); ?><?php edit_comment_link( __( '(编辑)', '' ), ' ' ); ?></p>
		<?php
			break;

		default:
			?>
			<li <?php comment_class(); ?> id="li-comment-<?php comment_ID(); ?>">
			<article id="comment-<?php comment_ID(); ?>" class="comment-body">
				<footer>
					<div class="comment-author vcard">
						<?php echo get_avatar( $comment, $args['avatar_size'] ); ?>
						<?php /* translators: %s is the author link */ printf( __( '<span">%s </span><span class="says">:</span>', '' ), sprintf( '<b class="fn">%s</b>', get_comment_author_link() ) ); ?>
					</div><!-- .comment-author .vcard -->
					<?php if ( $comment->comment_approved == '0' ) : ?>
						<em><?php _e( '你的评论正在审核.', '' ); ?></em>
						<br/>
					<?php endif; ?>
					<div class="comment-metadata">
						<a href="<?php echo esc_url( get_comment_link( $comment->comment_ID ) ); ?>" class="comment-permalink">
							<time class="comment-published" datetime="<?php comment_time( 'Y-m-d\TH:i:sP' ); ?>" title="<?php comment_time( _x( 'l, F j, Y, g:i a', 'comment time format', '' ) ); ?>">
								<?php
								/* translators: %1$s is the date of the comment and %2$s is the comment title */
								printf( __( '%1$s  %2$s', '' ), get_comment_date(), get_comment_time() );
								?>
							</time>
						</a>
						<?php edit_comment_link( __( '(编辑)', '' ), ' ' ); ?>
					</div><!-- .comment-meta .commentmetadata -->
				</footer>

				<div class="comment-content"><?php comment_text(); ?></div>

				<div class="reply">
					<?php
					comment_reply_link(
						array_merge(
							$args, array(
								'depth'     => $depth,
								'max_depth' => $args['max_depth'],
							)
						)
					);
					?>
				</div><!-- .reply -->
			</article><!-- #comment-## -->
			<?php
			break;
	endswitch;
}
function thesamesky_comment_form()
{$commenter = wp_get_current_commenter();
$req = get_option( 'require_name_email' );
$aria_req = ( $req ? " aria-required='true'" : '' );
$fields =  array(
    'author' => '<p class="comment-form-author">' . '<label for="author">' . __( 'Name' ) . '</label> ' . ( $req ? '<span class="required">*</span>' : '' ) .
        '<input id="author" name="author" class="form-control" type="text" value="' . esc_attr( $commenter['comment_author'] ) . '" size="30"' . $aria_req . ' /></p>',
    'email'  => '<p class="comment-form-email"><label for="email">' . __( 'Email' ) . '</label> ' . ( $req ? '<span class="required">*</span>' : '' ) .
        '<input id="email" name="email" class="form-control" type="text" value="' . esc_attr(  $commenter['comment_author_email'] ) . '" size="30"' . $aria_req . ' /></p>',
);
 
$comments_args = array(
    'fields' =>  $fields,
	'comment_field'        => '<p class="comment-form-comment"><label for="comment">' . _x( '留言', 'noun' ) . '</label> <textarea id="comment" name="comment" cols="45" rows="8" maxlength="65525" required="required"></textarea></p>',
    'title_reply'=>'发表留言',
    'label_submit' => '发表留言'
);
comment_form($comments_args);
}
function thesamesky_comment_message( $comment, $args, $depth ) {
	$GLOBALS['comment'] = $comment;

	switch ( $comment->comment_type ) :
		case 'pingback':
		case 'trackback':
		?>
		<li class="post pingback">
		<p><?php _e( '引用:', '' ); ?><?php comment_author_link(); ?><?php edit_comment_link( __( '(编辑)', '' ), ' ' ); ?></p>
		<?php
			break;

		default:
			?>
			<li <?php comment_class(); ?> id="li-comment-<?php comment_ID(); ?>">
			<article id="comment-<?php comment_ID(); ?>" class="comment-body">
				<footer>
					<div class="comment-author vcard">
						<?php echo get_avatar( $comment, $args['avatar_size'] ); ?>
						<?php /* translators: %s is the author link */ printf( __( '<span">%s </span><span class="says">:</span>', '' ), sprintf( '<b class="fn">%s</b>', get_comment_author_link() ) ); ?>
					</div><!-- .comment-author .vcard -->
					<?php if ( $comment->comment_approved == '0' ) : ?>
						<em><?php _e( '你的留言正在审核.', '' ); ?></em>
						<br/>
					<?php endif; ?>
					<div class="comment-metadata">
						<a href="<?php echo esc_url( get_comment_link( $comment->comment_ID ) ); ?>" class="comment-permalink">
							<time class="comment-published" datetime="<?php comment_time( 'Y-m-d\TH:i:sP' ); ?>" title="<?php comment_time( _x( 'l, F j, Y, g:i a', 'comment time format', '' ) ); ?>">
								<?php
								/* translators: %1$s is the date of the comment and %2$s is the comment title */
								printf( __( '%1$s  %2$s', '' ), get_comment_date(), get_comment_time() );
								?>
							</time>
						</a>
						<?php edit_comment_link( __( '(编辑)', '' ), ' ' ); ?>
					</div><!-- .comment-meta .commentmetadata -->
				</footer>

				<div class="comment-content"><?php comment_text(); ?></div>

				<div class="reply">
					<?php
					comment_reply_link(
						array_merge(
							$args, array(
								'depth'     => $depth,
								'max_depth' => $args['max_depth'],
							)
						)
					);
					?>
				</div><!-- .reply -->
			</article><!-- #comment-## -->
			<?php
			break;
	endswitch;
}
?>