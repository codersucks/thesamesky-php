<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the "site-content" div and all content after.
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */
?>

	</div><!-- .site-content -->
	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="site-info">
			<?php
				/**
				 * Fires before the Twenty Fifteen footer text for footer customization.
				 *
				 * @since Twenty Fifteen 1.0
				 */
				do_action( 'twentyfifteen_credits' );
			?>
			<?php
			if ( function_exists( 'the_privacy_policy_link' ) ) {
				the_privacy_policy_link( '', '<span role="separator" aria-hidden="true"></span>' );
			}
			?>
			 <p strong>Copyright</strong> ©2018 TheSameSky.</p>
	<div class="bottom_tools">
	<div class="qr_tool">二维码</div>
	<a id="feedback" href="http://thesamesky.cn/message" title="意见反馈">意见反馈</a>
	<a id="scrollUp" href="javascript:;" title="飞回顶部"></a>
	<img class="qr_img" src="<?php bloginfo('template_url'); ?>/images/wx_img.png">
        </div>
		</div><!-- .site-info -->

	</footer><!-- .site-footer -->
		<div id="QPlayer">
      <div id="pContent">
	   <div id="player">
		<span class="cover"></span>
		<div class="ctrl">
			<div class="musicTag marquee">
				<strong>Title</strong>
				 <span> - </span>
				<span class="artist">Artist</span>
			</div>
			<div class="prog">
				<div class="timer left">0:00</div>
				<div class="contr">
					<div class="rewind icon"></div>
					<div class="playback icon"></div>
					<div class="fastforward icon"></div>
				</div>
				<div class="right">
					<div class="liebiao icon"></div>
				</div>
			</div>
		</div>
	</div>
	<div class="ssBtn">
	        <div class="adf"></div>
    </div>
</div>
<ol id="playlist"></ol>
</div>
</div><!-- .site -->
<script>
	var	playlist = [
{title:"MySoul",artist:"July",mp3:"<?php bloginfo('template_url'); ?>/media/My Soul.mp3",cover:"<?php bloginfo('template_url'); ?>/images/logo-login.png?param=106x106"},{title:"给你们",artist:"张宇",mp3:"http://music.163.com/song/media/outer/url?id=190499.mp3",cover:"<?php bloginfo('template_url'); ?>/images/logo-login.png?param=106x106"},{title:"Hoaprox",artist:"Nguyễn Thái Hoà",mp3:"http://music.163.com/song/media/outer/url?id=440353010.mp3",cover:"<?php bloginfo('template_url'); ?>/images/logo-login.png?param=106x106"},{title:"空空如也",artist:"任然",mp3:"http://music.163.com/song/media/outer/url?id=526464293.mp3",cover:"<?php bloginfo('template_url'); ?>/images/logo-login.png?param=106x106"},{title:"嘀嗒",artist:"侃侃",mp3:"http://music.163.com/song/media/outer/url?id=32685948.mp3",cover:"<?php bloginfo('template_url'); ?>/images/logo-login.png?param=106x106"},{title:"something just like this",artist:"Coldplay",mp3:"http://music.163.com/song/media/outer/url?id=461347998.mp3",cover:"<?php bloginfo('template_url'); ?>/images/logo-login.png?param=106x106"},{title:"I do",artist:"911",mp3:"http://music.163.com/song/media/outer/url?id=28256115.mp3",cover:"<?php bloginfo('template_url'); ?>/images/logo-login.png?param=106x106"},{title:"goodbye",artist:"Who Is Fancy",mp3:"http://music.163.com/song/media/outer/url?id=30706076.mp3",cover:"<?php bloginfo('template_url'); ?>/images/logo-login.png?param=106x106"},{title:"you are beautiful",artist:"James Blunt",mp3:"http://music.163.com/song/media/outer/url?id=431853388.mp3",cover:"<?php bloginfo('template_url'); ?>/images/logo-login.png?param=106x106"},{title:"she",artist:"Groove Coverage",mp3:"http://music.163.com/song/media/outer/url?id=4083642.mp3",cover:"<?php bloginfo('template_url'); ?>/images/logo-login.png?param=106x106"}
];
  var isRotate = true;
  var autoplay = false;
</script>
 <script>$('.share-1').share({sites: ['weibo','qq', 'wechat','douban','qzone','linkedin']}); </script>
	<script src="<?php bloginfo('template_url'); ?>/js/plugins/player/jquery.marquee.min.js"></script>
    <script src="<?php bloginfo('template_url'); ?>/js/plugins/player/player.js"></script>
	<script src="<?php bloginfo('template_url'); ?>/js/zanshang.js"></script>
<?php wp_footer(); ?>

</body>
</html>
