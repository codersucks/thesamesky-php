<?php
/**
 * Template Name: About
 *
 * @package the-same-sky
 */
get_header(); ?>
<div class="mainarea">
        <video poster="<?php bloginfo('template_url'); ?>/images/video.jpg" loop autoplay preload class="vidbacking">
		<source src="<?php bloginfo('template_url'); ?>/media/video.mp4" type="video/mp4">
	    </video>
       <div class="col-md-8 col-lg-8">
	    <div class="right">
				  <div id="tab1" class="tab tab_right act">
                        <img src="<?php bloginfo('template_url'); ?>/images/face.png" alt="face" width="360" height="360">
                    </div>
                   <div id="tab2" class="tab tab_right">
				   <div class="infos">
                      <p>男，身高174cm，体重61kg，努力长肉中。</p> 
					  <p>性格较被动，情商较低，努力提升中。</p> 
					  <p>处女座，易遭嫌弃。</p>
					  <p>工程师，技能努力学习中。</p> 
					  <p>积极准备人生大事中。</p> 
					  <p>悟性强，完美心强，易懒惰拖延。</p> 
					 </div>
				 </div>
                    <div id="tab3" class="tab tab_right">
					<div class="infos">
                      <p>喜欢看美剧。</p> 
					  <p>喜欢爬山，游泳</p> 
					  <p>喜欢电影，读书，三国杀，吃鸡</p>
					  <p>喜欢财经，乐于投资，但尚无什么成绩。</p> 
					  <p>比较宅，不爱凑热闹。</p> 
					  <p>喜欢到陌生的地方玩，努力赚钱以满足愿望。</p> 
					  </div> 
                    </div>
                    <div id="tab4" class="tab tab_right">
					<img class="qrimg" src="<?php bloginfo('template_url'); ?>/images/public.png" width="150" height="150">
						<div class="fline">
					    <h3>通过以下方式找到我</h3>
						<a href="#" class="qr" alt="扫码关注佟一片天" title="扫码关注佟一片天"><img src="<?php bloginfo('template_url'); ?>/images/wechat.png"></img></a>
						<a href="http://weibo.com/skyoftong" target="_blank"><img src="<?php bloginfo('template_url'); ?>/images/weibo.png"></img></a>
						<a href="mailto:tlw_02@163" target="_blank"><img src="<?php bloginfo('template_url'); ?>/images/email.png"></img></a>
						<a href="http://wpa.qq.com/msgrd?v=3&uin=&site=qq&menu=yes" alt="点击这里给我发消息" title="点击这里给我发消息" target="_blank"><img src="<?php bloginfo('template_url'); ?>/images/qq.png"></img></a>
						<a href="https://user.qzone.qq.com/82463767" target="_blank"><img src="<?php bloginfo('template_url'); ?>/images/qzone.png"></img></a>
					</div>
					<div class="sline">
					    <a href="https://github.com/codersucks" target="_blank"><img src="<?php bloginfo('template_url'); ?>/images/github.png"></img></a>
						<a href="https://plus.google.com/u/0/" target="_blank"><img src="<?php bloginfo('template_url'); ?>/images/google.png"></img></a>
						<a href="https://twitter.com/tongliwei2" target="_blank"><img src="<?php bloginfo('template_url'); ?>/images/twitter.png"></img></a>
						<a href="https://www.linkedin.com/in/tong-liwei-198186161" target="_blank"><img src="<?php bloginfo('template_url'); ?>/images/linkin.png"></img></a>
						<a href="https://www.facebook.com/liwei.tong.359" target="_blank"><img src="<?php bloginfo('template_url'); ?>/images/facebook.png"></img></a>
					</div>
                    </div>
                    <div id="tab5" class="tab tab_right">
                     <div class="botui-app-container" id="robot">
			           <bot-ui></bot-ui>
			         </div>
                    </div>
					<div id="tab6" class="tab tab_right scroller">
					    <span>请使用以下方式提供帮助</span>
						<h3>微信</h3>
						 <img src="<?php bloginfo('template_url'); ?>/images/wetrans.png" alt="wechat" width="160" height="160">
						 <h3>支付宝</h3>
						 <img src="<?php bloginfo('template_url'); ?>/images/alitrans.png" alt="alipay" width="160" height="160">
						 <h3>BitCoin</h3>
						  <img src="<?php bloginfo('template_url'); ?>/images/btc.png" alt="bitcoin" width="160" height="160">
						 <p>钱包地址:bitcoin:17zAQHAMPYESJeVFTokH9BhfjSsaV3vRq2</p>
						  <h3>PayPal</h3>
						 <form action="https://www.paypal.com/cgi-bin/webscr" method="post">
						 <input type="hidden" name="cmd" value="_xclick">
						 <input type="hidden" name="business" value="tlw_02@163.com">
						 <input type="hidden" name="amount" value="1.00">
						 <input type="hidden" name="currency_code" value="USD">
						 <input type="hidden" name="bn" value="IC_Sample">
						 <input type="button" name="submit" class="button" value="支持$1.00">
						</form>
                    </div>
         </div>
         </div>
		<div class="col-md-4 col-lg-4">
		 <div class="pbox">
                   <div class="mydetails">
					<a id="head"><img class="img-circle" src="<?php bloginfo('template_url'); ?>/images/head.jpg" alt="佟一片天" width="200" height="200"></a>
					<h3>佟一片天</h3>
					<p>不合格的程序猿</p>	
				</div>
					<div class="pmenu">
							<ul>
							<li id="1"><a href="#1" title="基本属性">基本属性</a></li>
							<li id="2"><a href="#1" title="活动范围">活动范围</a></li>
							<li id="3"><a href="#1" title="追踪轨迹">追踪轨迹</a></li>
							<li id="4"><a href="#1" title="与我对话">与我对话</a></li>
							<li id="5"><a href="#1" title="捐赠支持">捐赠支持</a></li>
							</ul>
							</div>
                </div>
      	</div>
		<script>
		var isInit=false;
	    homeBot = BotUI('robot');
		var tutorial = function () {
		  homeBot.message.add({
		    delay: 2500,
		    content: "太好了，很高兴和你聊天，你想知道主人的秘密吗？"
		  }).then(function () {
		    return homeBot.message.add({
		      delay: 2500,
		      content: '我可以偷偷告诉你'
		    });
		  }).then(function () {
		    return homeBot.message.add({
		      delay: 2500,
		      content: '想知道他喜欢什么样的女孩子嘛？'
		    });
		  }).then(function () {
		  return homeBot.action.button({
		    delay: 1500,
		    action: [{
		      text: '想',
		      value: 'sure'
		    }, {
		      text: '不想',
		      value: 'skip'
		    }]
		  });
		}).then(function (res) {
		  if(res.value == 'sure') {
		     homeBot.message.add({
		    delay: 2500,
		    content: "走开啦，主人喜欢男生"
		  }).then(function () {
		    return homeBot.message.add({
		      delay: 2500,
		      content: '哈哈，我开玩笑的'
		    });
		  }).then(function () {
		    return homeBot.message.add({
		      delay: 2500,
		      content: '想知道就去联系他吧'
		    });
		  })
		  .then(function () {
		    return homeBot.message.add({
		      delay: 2500,
		      content: '还想知道什么呢？'
		    });
		  })
		  .then(function () {
		  return homeBot.action.button({
		    delay: 1500,
		    action: [{
		      text: '他单身多久了？',
		      value: 'sure'
		    }, {
		      text: '他为什么单身',
		      value: 'skip'
		    }]
		  });
		}).then(function (res) {
		  if(res.value == 'sure') {
		    return homeBot.message.add({
		      delay: 2500,
		      content: '你貌似在问他的年龄'
		    }).then(function () {
		    return homeBot.message.add({
		      delay: 2500,
		      content: '主人来了，我得走了'
		    });
		  }).then(end);}
		  if(res.value == 'skip') {
		     return homeBot.message.add({
		      delay: 2500,
		      content: '因为他是个呆瓜'
		    }).then(function () {
		    return homeBot.message.add({
		      delay: 2500,
		      content: '我什么都不知道，我得走了'
		    });
		  }).then(end);
		  }
		});
		  }
		  if(res.value == 'skip') {
		    end();
		  }
		})
		};

		var end = function () {
		  homeBot.message.add({
		    delay: 1500,
		    content: '回去睡觉了，不要打扰我了'
		  });
		};
		</script>
		<script>
		$('.pmenu li a').click(function () {
				var f = this;
				$('.pmenu li a').each(function () {
						this.className = this == f ? 'active' :'none';
				});
				
			});
		$('.pmenu li').each(function(){
                $('.pmenu li').click(function(){
                var index = $(this).index()+1;
                $(".right .tab").eq(index).addClass("act").siblings().removeClass("act");
            });
		});
		$('#head').click(function(){
			$(".right .tab").eq(0).addClass("act").siblings().removeClass("act");
				$('.pmenu li a').each(function () {
						this.className = 'none';
				});
        });
        $(function(){
            $('.mainarea').vidbacking({
                'masked': true
            });
        });
		
		  $('#4').click(function(){
			 if(!isInit){
			 homeBot.message.add({
		     content:'hi,我是主人的机器助手'
			}).then(function () {
			return homeBot.message.add({
		    delay: 2500,
		    content: '我的名字叫tom，我的呆瓜主人起的'
			});
			}).then(function () {
			return homeBot.message.add({
		    delay: 2500,
		    content: '千万不要让他知道我叫他呆瓜'
			});
			}).then(function () {
			return homeBot.message.add({
		    delay: 2500,
		    content: '有兴趣聊聊天吗？'
			});
			}).then(function () {
			return homeBot.action.button({
		    delay: 1500,
		    action: [{
				text: '好的',
				value: 'sure'
				}, {
				text: '没有兴趣',
				value: 'skip'
				}]
			});
			}).then(function (res) {
			if(res.value == 'sure') {
				tutorial();
			}
			if(res.value == 'skip') {
				end();
			}
			});
			isInit=true;
		   }
		  });
		$(function(){
      //FF下用JS实现自定义滚动条
	  if(BrowserType()=="FF"){
		  $(".scroller").niceScroll({cursorborder:"",cursorcolor:"rgba(0,0,0,0)",boxzoom:true});
	      $(".botui-container").niceScroll({cursorborder:"",cursorcolor:"rgba(0,0,0,0)",boxzoom:true});
	  }
});</script>
		<?php get_footer(); ?>