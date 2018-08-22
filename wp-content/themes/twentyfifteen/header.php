<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<!--[if lt IE 9]>
	<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/html5.js"></script>
	<![endif]-->
	<link href="<?php bloginfo('template_url'); ?>/css/bootstrap.min.css?v=3.3.6" rel="stylesheet">
	<link href="<?php bloginfo('template_url'); ?>/css/font-awesome.css?v=4.4.0" rel="stylesheet">
	<link href="<?php bloginfo('template_url'); ?>/css/GalMenu.css" rel="stylesheet">
	<link href="<?php bloginfo('template_url'); ?>/css/player.css" rel="stylesheet">
	<link href="<?php bloginfo('template_url'); ?>/css/share.min.css" rel="stylesheet">
	<link href="<?php bloginfo('template_url'); ?>/css/zanshang.css" rel="stylesheet">
	<link href="<?php bloginfo('template_url'); ?>/css/time-axis.css" rel="stylesheet">
        <link href="<?php bloginfo('template_url'); ?>/css/custom.css" rel="stylesheet">
	<script src="<?php bloginfo('template_url'); ?>/js/jquery.min.js?v=2.1.4"></script>
	<script src="<?php bloginfo('template_url'); ?>/js/bootstrap.min.js?v=3.3.6"></script>
	<script src="<?php bloginfo('template_url'); ?>/js/plugins/pace/pace.min.js"></script>
	<script src="<?php bloginfo('template_url'); ?>/js/GalMenu.js"></script>
	<script src="<?php bloginfo('template_url'); ?>/js/jquery.share.min.js"></script>
	<script src="<?php bloginfo('template_url'); ?>/js/script.js"></script>
    <script>
     var _hmt = _hmt || [];
     (function() {
		var hm = document.createElement("script");
		hm.src = "https://hm.baidu.com/hm.js?8c7ef05d106fc2b4557e90b4622b8421";
		var s = document.getElementsByTagName("script")[0]; 
		s.parentNode.insertBefore(hm, s);
	})();
    </script>
	<script>
   (function(){
    var bp = document.createElement('script');
    var curProtocol = window.location.protocol.split(':')[0];
    if (curProtocol === 'https') {
        bp.src = 'https://zz.bdstatic.com/linksubmit/push.js';
    }
    else {
        bp.src = 'http://push.zhanzhang.baidu.com/push.js';
    }
    var s = document.getElementsByTagName("script")[0];
    s.parentNode.insertBefore(bp, s);
  })();
  </script>
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div class="GalMenu GalDropDown">
	      <div class="circle" id="gal">
	        <div class="ring">
	          <a href="http://thesamesky.cn/index" title="首页" class="menuItem">首页</a>
	          <a href="http://thesamesky.cn/message" title="反馈" class="menuItem">反馈</a>
	          <a href="javascript:history.go(1);" title="前进" class="menuItem">前进</a>
	          <a href="javascript:history.go(-1);" title="后退" class="menuItem">后退</a>
			  <a href="http://thesamesky.cn/about" title="关于" class="menuItem">关于</a>
			  </div>
	        <audio id="audio" src="<?php bloginfo('template_url'); ?>/media/niconiconi.mp3"></audio>
	      </div>
	</div>
	<div id="overlay" style="opacity: 1; cursor: pointer;"></div>
	<script type="text/javascript">var items = document.querySelectorAll('.menuItem');
      for (var i = 0,
      l = items.length; i < l; i++) {
        items[i].style.left = (50 - 35 * Math.cos( - 0.5 * Math.PI - 2 * (1 / l) * i * Math.PI)).toFixed(4) + "%";
        items[i].style.top = (50 + 35 * Math.sin( - 0.5 * Math.PI - 2 * (1 / l) * i * Math.PI)).toFixed(4) + "%"
      }</script>
<div id="page" class="hfeed site">
	<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'twentyfifteen' ); ?></a>
	<div id="sidebar" class="sidebar">
		<header id="masthead" class="site-header" role="banner">
			<div class="site-branding">
				<?php
					twentyfifteen_the_custom_logo();

				if ( is_front_page() && is_home() ) :
					?>
						<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/index' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
					<?php else : ?>
						<p class="site-title"><a href="<?php echo esc_url( home_url( '/index' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
					<?php
					endif;

					$description = get_bloginfo( 'description', 'display' );
if ( $description || is_customize_preview() ) :
					?>
						<p class="site-description"><?php echo $description; ?></p>
					<?php
					endif;
				?>
				<button class="secondary-toggle"><?php _e( 'Menu and widgets', 'twentyfifteen' ); ?></button>
			</div><!-- .site-branding -->
		</header><!-- .site-header -->
		<?php get_sidebar(); ?>
	</div><!-- .sidebar -->

	<div id="content" class="site-content">
