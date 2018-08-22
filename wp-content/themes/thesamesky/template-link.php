<?php
/**
 * Template Name: Link
 *
 * @package the-same-sky
 */
get_header(); ?>  	
<div id="wrapper">
      	<div class="<?php if( !is_active_sidebar('sidebar-3')) { echo "col-lg-12"; } else { echo "col-md-8 col-lg-8"; } ?>">
		<div class="content">
		 <h1>友情链接</h1>
		 <div class="links-block">
		 <div class=link-list>
		 <a class="friend" target="_blank" href=""><img class="avatar" src="<?php bloginfo('template_url'); ?>/images/head.jpg"></img><span class="text-container"><span class="name">佟一片天</span><span class="desc">虚位以待</span></span></a>
		 <a class="friend" target="_blank" href=""><img class="avatar" src="<?php bloginfo('template_url'); ?>/images/head.jpg"></img><span class="text-container"><span class="name">佟一片天</span><span class="desc">虚位以待</span></span></a>
		 <a class="friend" target="_blank" href=""><img class="avatar" src="<?php bloginfo('template_url'); ?>/images/head.jpg"></img><span class="text-container"><span class="name">佟一片天</span><span class="desc">虚位以待</span></span></a>
		 <a class="friend" target="_blank" href=""><img class="avatar" src="<?php bloginfo('template_url'); ?>/images/head.jpg"></img><span class="text-container"><span class="name">佟一片天</span><span class="desc">虚位以待</span></span></a>
		 </div>
		  <div class=link-list>
		 <a class="friend" target="_blank" href=""><img class="avatar" src="<?php bloginfo('template_url'); ?>/images/head.jpg"></img><span class="text-container"><span class="name">佟一片天</span><span class="desc">虚位以待</span></span></a>
		 <a class="friend" target="_blank" href=""><img class="avatar" src="<?php bloginfo('template_url'); ?>/images/head.jpg"></img><span class="text-container"><span class="name">佟一片天</span><span class="desc">虚位以待</span></span></a>
		 <a class="friend" target="_blank" href=""><img class="avatar" src="<?php bloginfo('template_url'); ?>/images/head.jpg"></img><span class="text-container"><span class="name">佟一片天</span><span class="desc">虚位以待</span></span></a>
		 <a class="friend" target="_blank" href=""><img class="avatar" src="<?php bloginfo('template_url'); ?>/images/head.jpg"></img><span class="text-container"><span class="name">佟一片天</span><span class="desc">虚位以待</span></span></a>
		 </div>
		 </div>
		 <h1>推荐资源</h1>
		 <div class="linksite-block">
		 <div class=link-list>
		 <a target="_blank" href=""><li class="linkitem" ><span class="text-container"><span class="link-title">佟一片天</span></br><span>精彩短片</span></span></li></a>
		 <a target="_blank" href=""><li class="linkitem" ><span class="text-container"><span class="link-title">佟一片天</span></br><span>精彩短片</span></span></li></a>
		 <a target="_blank" href=""><li class="linkitem" ><span class="text-container"><span class="link-title">佟一片天</span></br><span>精彩短片</span></span></li></a>
		 </div>
		 </div>
		 <h1>链接说明</h1>
		 <div class="linksite-block">
		 <p>
           申请友链请按如下格式留言给我或者加我任意联系方式发消息给我。</br>
		   请按如下格式提供链接信息:</br>
           名字：佟一片天</br>
           地址：http://thesamesky.cn</br>
           头像：http://thesamesky.cn/xx.jpg</br>
		   申请信息审核通过后会以时间先后顺序添加至此页面。请也将本站链接加至你处。</br>
		   欢迎前来交换链接并经常光临小站 ^_^</br>
        </p>
		 </div>
		</div>
      	</div>
        <?php get_sidebar('sidebar3'); ?>
		<?php get_footer(); ?>
