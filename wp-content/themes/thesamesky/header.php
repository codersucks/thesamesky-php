<!DOCTYPE html>
<html>
<title><?php if ( is_home() ) {
		bloginfo('name'); echo " - "; bloginfo('description');
	} elseif ( is_category() ) {
		single_cat_title(); echo " - "; bloginfo('name');
	} elseif (is_single() || is_page() ) {
		single_post_title();
	} elseif (is_search() ) {
		echo "搜索结果"; echo " - "; bloginfo('name');
	} elseif (is_404() ) {
		echo '页面未找到!';
	} else {
		wp_title('',true);
	} ?>
</title>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
    <link rel="shortcut icon" href="<?php bloginfo('template_url'); ?>/favicon.ico"> 
	<link href="<?php bloginfo('template_url'); ?>/css/bootstrap.min.css?v=3.3.6" rel="stylesheet">
	<link href="<?php bloginfo('template_url'); ?>/css/animate.css" rel="stylesheet">
    <link href="<?php bloginfo('template_url'); ?>/css/demo.css" rel="stylesheet">
    <link href="<?php bloginfo('template_url'); ?>/assets/waifu.css" rel="stylesheet"/>
	<link href="<?php bloginfo('template_url'); ?>/css/player.css" rel="stylesheet">
    <link href="<?php bloginfo('template_url'); ?>/style.css" rel="stylesheet"/>
	<link href="<?php bloginfo('template_url'); ?>/css/custom.css" rel="stylesheet">
	<link href="<?php bloginfo('template_url'); ?>/css/app.css" rel="stylesheet">
	<link href="<?php bloginfo('template_url'); ?>/css/GalMenu.css" rel="stylesheet">
	<link href="<?php bloginfo('template_url'); ?>/css/photopile.css" rel="stylesheet">
	<link href="<?php bloginfo('template_url'); ?>/css/botui.min.css" rel="stylesheet">
	<link href="<?php bloginfo('template_url'); ?>/css/share.min.css" rel="stylesheet">
	<link href="<?php bloginfo('template_url'); ?>/css/zanshang.css" rel="stylesheet">
	<link href="<?php bloginfo('template_url'); ?>/css/time-axis.css" rel="stylesheet">
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/jquery.vidbacking.css">
	<link rel="alternate" type="application/rss+xml" title="RSS 2.0 - 所有文章" href="<?php bloginfo('rss2_url'); ?>" />
    <link rel="alternate" type="application/rss+xml" title="RSS 2.0 - 所有评论" href="<?php bloginfo('comments_rss2_url'); ?>" />
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
	<link href="<?php bloginfo('template_url'); ?>/css/font-awesome.css?v=4.4.0" rel="stylesheet">

	  <!-- 全局js -->
    <script src="<?php bloginfo('template_url'); ?>/js/jquery.min.js?v=2.1.4"></script>
    <script src="<?php bloginfo('template_url'); ?>/js/bootstrap.min.js?v=3.3.6"></script>
    <script src="<?php bloginfo('template_url'); ?>/js/script.js"></script>
    <script src="<?php bloginfo('template_url'); ?>/js/plugins/pace/pace.min.js"></script>
	<script src="<?php bloginfo('template_url'); ?>/assets/live2d.js"></script>
	<script src="<?php bloginfo('template_url'); ?>/assets/waifu-tips.js"></script>
    <script src="<?php bloginfo('template_url'); ?>/js/jquery.bootstrap-autohidingnavbar.js"></script>
	<script src="<?php bloginfo('template_url'); ?>/js/jquery.vidbacking.js"></script>
	<script src="<?php bloginfo('template_url'); ?>/js/app.min.js"></script>
	<script src="<?php bloginfo('template_url'); ?>/js/GalMenu.js"></script>
	<script src="<?php bloginfo('template_url'); ?>/js/jquery-ui.min.js"></script>
	<script src="<?php bloginfo('template_url'); ?>/js/photopile.js"></script>
	<script src="<?php bloginfo('template_url'); ?>/js/tagscloud.js"></script>
	<script src="<?php bloginfo('template_url'); ?>/js/botui.min.js"></script>
	<script src="<?php bloginfo('template_url'); ?>/js/vue.min.js"></script>
	<script src="<?php bloginfo('template_url'); ?>/js/jquery.nicescroll.min.js"></script>
	<script src="<?php bloginfo('template_url'); ?>/js/jquery.share.min.js"></script>
	<script>
            $(function() {
				$.busyLoadFull("show", { background: "rgba(15, 15, 15, 0.35)", spinner: "cube-grid", animate: "slide" });
                var d=300;
                $('.primary-menu a').each(function(){
                    $(this).stop().animate({
                        'marginTop':'-80px'
                    },d+=150);
                });

                $('.primary-menu > li').hover(
                function () {
                    $('a',$(this)).stop().animate({
                        'marginTop':'-2px'
                    },200);
                },
                function () {
                    $('a',$(this)).stop().animate({
                        'marginTop':'-80px'
                    },200);
                }
            );
            });
        </script>
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
<?php flush(); ?>
<body class="white-bg">
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
    <div class="header">
       <div class="navbar navbar-default navbar-fixed-top">
                <div class="satic-area">
                    <div class="logo">
                    <span><a href="http://thesamesky.cn/about"><img alt="image" class="img-circle" src="<?php bloginfo('template_url'); ?>/images/head.jpg"/></a></span>
                    </div>
                    <div class="dynamic-area1"></div>
                    <div class="dynamic-area2"></div>
					 <?php
					wp_nav_menu(
						array(
						    'menu' => 'thesamesky',
							'theme_location' => 'primary',
							'menu_class'     => 'primary-menu small-text',
							'depth'          => 1,
							)
					);
				?>
               </div>  
		</div>
	</div>