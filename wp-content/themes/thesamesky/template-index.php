<?php
/**
 * Template Name: Index
 *
 * @package the-same-sky
 */
get_header(); ?>

<div id="wrapper">
      	<div class="<?php if( !is_active_sidebar('sidebar-2')) { echo "col-lg-12"; } else { echo "col-md-8 col-lg-8"; } ?>">
		<div class="container">
		<h1 class="timehead">里程碑</h1>
		 <ul class="time-axis"></ul>
      	</div>
		</div>
		<script>
var dimeAxis=[{
		date:'2018.05.11',
		title:'购买域名thesamesky.cn',
		achievement:''
	},
	{
		date:'2018.05.12',
		title:'新浪SAE申请备案',
		achievement:''
	},
	{
		date:'2018.06.14',
		title:'备案申请通过',
		achievement:'获得备案编号京ICP备18031120号'
	},
	{
		date:'2018.06.16',
		title:'开始设计和编写页面',
		achievement:''
	},
	{
		date:'2018.06.20',
		title:'增加移动设备访问支持，绑定微信公共号',
		achievement:''
	},
	{
		date:'2018.06.26',
		title:'完成全部页面，开始调试优化',
		achievement:''
	},
	{
		date:'2018.06.29',
		title:'上传新浪SAE,上线运行',
		achievement:''
	}];
	
	
	$(function(){
		$.each(dimeAxis,function(i,e){
			var html='<li class="time-axis-item">'+
						 '<div class="time-axis-date">'+e.date+'<span></span></div>'+
						 '<div class="time-axis-title">'+e.title+'</div>'+
						 '<p class="time-axis-achievement">'+e.achievement+'</p>'+
					 '</li>';
			$('.time-axis').append(html);		
		});
	});
</script>
        <?php get_sidebar(); ?>
		<?php get_footer(); ?>