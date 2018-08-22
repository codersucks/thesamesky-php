      <div class="footer">
                <div class="waifu">
                  <div class="waifu-tips"></div>
                  <canvas id="live2d" width="260" height="240" class="live2d"></canvas>
                 </div>
                <p><strong>Copyright</strong> ©2018 TheSameSky.<a href="http://www.miitbeian.gov.cn" target="_blank"> 京ICP备18031120号.</a><span style="padding-left:10px;">WordPress引擎 新浪SAE容器，已坚强运行<span id="idate" style="color: orange;"></span></span></p>
        </div>
		<div class="bottom_tools">
	<div class="qr_tool">二维码</div>
	<a id="feedback" href="http://thesamesky.cn/message" title="意见反馈">意见反馈</a>
	<a id="scrollUp" href="javascript:;" title="飞回顶部"></a>
	<img class="qr_img" src="<?php bloginfo('template_url'); ?>/images/wx_img.png">
</div>
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
    <script>
		$('#menu-thesamesky li a').click(function () {
				var f = this;
				$('#menu-thesamesky li a').each(function () {
						this.className = this == f ? 'active' :'none';
				});
			});
    </script>
	<script>
	var	playlist = [
{title:"MySoul",artist:"July",mp3:"<?php bloginfo('template_url'); ?>/media/My Soul.mp3",cover:"<?php bloginfo('template_url'); ?>/images/logo-login.png?param=106x106"},{title:"给你们",artist:"张宇",mp3:"http://music.163.com/song/media/outer/url?id=190499.mp3",cover:"<?php bloginfo('template_url'); ?>/images/logo-login.png?param=106x106"},{title:"Hoaprox",artist:"Nguyễn Thái Hoà",mp3:"http://music.163.com/song/media/outer/url?id=440353010.mp3",cover:"<?php bloginfo('template_url'); ?>/images/logo-login.png?param=106x106"},{title:"空空如也",artist:"任然",mp3:"http://music.163.com/song/media/outer/url?id=526464293.mp3",cover:"<?php bloginfo('template_url'); ?>/images/logo-login.png?param=106x106"},{title:"嘀嗒",artist:"侃侃",mp3:"http://music.163.com/song/media/outer/url?id=32685948.mp3",cover:"<?php bloginfo('template_url'); ?>/images/logo-login.png?param=106x106"},{title:"something just like this",artist:"Coldplay",mp3:"http://music.163.com/song/media/outer/url?id=461347998.mp3",cover:"<?php bloginfo('template_url'); ?>/images/logo-login.png?param=106x106"},{title:"I do",artist:"911",mp3:"http://music.163.com/song/media/outer/url?id=28256115.mp3",cover:"<?php bloginfo('template_url'); ?>/images/logo-login.png?param=106x106"},{title:"goodbye",artist:"Who Is Fancy",mp3:"http://music.163.com/song/media/outer/url?id=30706076.mp3",cover:"<?php bloginfo('template_url'); ?>/images/logo-login.png?param=106x106"},{title:"you are beautiful",artist:"James Blunt",mp3:"http://music.163.com/song/media/outer/url?id=431853388.mp3",cover:"<?php bloginfo('template_url'); ?>/images/logo-login.png?param=106x106"},{title:"she",artist:"Groove Coverage",mp3:"http://music.163.com/song/media/outer/url?id=4083642.mp3",cover:"<?php bloginfo('template_url'); ?>/images/logo-login.png?param=106x106"}
];
  var isRotate = true;
  var autoplay = false;
</script>
<script>
function siteTime(){
        window.setTimeout("siteTime()", 1000);
        var seconds = 1000;
        var minutes = seconds * 60;
        var hours = minutes * 60;
        var days = hours * 24;
        var years = days * 365;
        var today = new Date();
        var todayYear = today.getFullYear();
        var todayMonth = today.getMonth()+1;
        var todayDate = today.getDate();
        var todayHour = today.getHours();
        var todayMinute = today.getMinutes();
        var todaySecond = today.getSeconds();
        var t1 = Date.UTC(2018,06,29,00,00,00); //北京时间2016-12-1 00:00:00
        var t2 = Date.UTC(todayYear,todayMonth,todayDate,todayHour,todayMinute,todaySecond);
        var diff = t2-t1;
        var diffYears = Math.floor(diff/years);
        var diffDays = Math.floor((diff/days)-diffYears*365);
        var diffHours = Math.floor((diff-(diffYears*365+diffDays)*days)/hours);
        var diffMinutes = Math.floor((diff-(diffYears*365+diffDays)*days-diffHours*hours)/minutes);
        var diffSeconds = Math.floor((diff-(diffYears*365+diffDays)*days-diffHours*hours-diffMinutes*minutes)/seconds);
        $('#idate').text(diffYears+" 年 "+diffDays+" 天 "+diffHours+" 小时 "+diffMinutes+" 分钟 "+diffSeconds+" 秒");
    }
    siteTime();
</script>
<script src="<?php bloginfo('template_url'); ?>/js/demo.js"></script>
<script src="<?php bloginfo('template_url'); ?>/js/plugins/player/jquery.marquee.min.js"></script>
<script src="<?php bloginfo('template_url'); ?>/js/plugins/player/player.js"></script>
 <script>initModel("<?php bloginfo('template_url'); ?>");$(".navbar-fixed-top").autoHidingNavbar();</script>
 <?php wp_footer(); ?>
 <script src="<?php bloginfo('template_url'); ?>/js/zanshang.js"></script>
 <script> $(function(){$.busyLoadFull("hide", { animate: "fade" });});</script>
 </div>
 </body>
</html>