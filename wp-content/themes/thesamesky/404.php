<?php
/**
 * The template for displaying archive pages.
 *
 * @package thesamesky
 */

get_header(); ?>

<div id="wrapper">
      	<div class="content">
		<div class="info">
         <h2> <stong>404错误！抱歉您要找的页面不存在</stong> </h2>
		 <a href="<?php echo esc_url(home_url());?>" onClick="history.back();" class="btn btn-default">返回</a>
		  </div> 
            <div class="float-left">
                <img src="<?php bloginfo('template_url'); ?>/images/ds-1.gif">
                <div class="alert"> 卧槽！页面不见了！ </div>
            </div>
            <div class="float-right">
               <img src="<?php bloginfo('template_url'); ?>/images/ds-2.png" width="260"> 
            </div>
			</div>
		<?php get_footer(); ?>