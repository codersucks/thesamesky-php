$(function(){
	var $bottomTools = $('.bottom_tools');
	var $qrTools = $('.qr_tool');
	var qrImg = $('.qr_img');
	var $qr = $('.qr');
	var qrimg = $('.qrimg');
	
	$(window).scroll(function () {
		var scrollHeight = $(document).height();
		var scrollTop = $(window).scrollTop();
		var $windowHeight = $(window).innerHeight();
		scrollTop > 50 ? $("#scrollUp").fadeIn(200).css("display","block") : $("#scrollUp").fadeOut(200);			
		$bottomTools.css("bottom", scrollHeight - scrollTop > $windowHeight ? 40 : $windowHeight + scrollTop + 40 - scrollHeight);
	});
	
	$('#scrollUp').click(function (e) {
		e.preventDefault();
		$('html,body').animate({ scrollTop:0});
	});
	
	$qrTools.hover(function () {
		qrImg.fadeIn();
	}, function(){
		 qrImg.fadeOut();
	});
	$qr.hover(function () {
		qrimg.fadeIn();
	}, function(){
		qrimg.fadeOut();
	});
});
 function BrowserType() 
 { 
   var userAgent = navigator.userAgent; //取得浏览器的userAgent字符串 
   var isOpera = userAgent.indexOf("Opera") > -1; //判断是否Opera浏览器 
   var isIE = userAgent.indexOf("compatible") > -1 && userAgent.indexOf("MSIE") > -1 && !isOpera; //判断是否IE浏览器 
   var isEdge = userAgent.indexOf("Windows NT 6.1; Trident/7.0;") > -1 && !isIE; //判断是否IE的Edge浏览器 
   var isFF = userAgent.indexOf("Firefox") > -1; //判断是否Firefox浏览器 
   var isSafari = userAgent.indexOf("Safari") > -1 && userAgent.indexOf("Chrome") == -1; //判断是否Safari浏览器 
   var isChrome = userAgent.indexOf("Chrome") > -1 && userAgent.indexOf("Safari") > -1; //判断Chrome浏览器 
  
   if (isIE)  
   { 
      var reIE = new RegExp("MSIE (\\d+\\.\\d+);"); 
      reIE.test(userAgent); 
      var fIEVersion = parseFloat(RegExp["$1"]); 
      if(fIEVersion == 7) 
      { return "IE7";} 
      else if(fIEVersion == 8) 
      { return "IE8";} 
      else if(fIEVersion == 9) 
      { return "IE9";} 
      else if(fIEVersion == 10) 
      { return "IE10";} 
      else if(fIEVersion == 11) 
      { return "IE11";} 
      else
      { return "0"}//IE版本过低 
    }//isIE end 
      
    if (isFF) { return "FF";} 
    if (isOpera) { return "Opera";} 
    if (isSafari) { return "Safari";} 
    if (isChrome) { return "Chrome";} 
    if (isEdge) { return "Edge";} 
  }//myBrowser() end 
    
  //判断是否是IE浏览器 
  function isIE() 
  { 
   var userAgent = navigator.userAgent; //取得浏览器的userAgent字符串 
   var isIE = userAgent.indexOf("compatible") > -1 && userAgent.indexOf("MSIE") > -1 && !isOpera; //判断是否IE浏览器 
   if(isIE) 
   { 
     return "1"; 
   } 
   else
   { 
     return "-1"; 
   } 
  } 
    
    
  //判断是否是IE浏览器，包括Edge浏览器 
 function IEVersion() 
  { 
   var userAgent = navigator.userAgent; //取得浏览器的userAgent字符串 
   var isIE = userAgent.indexOf("compatible") > -1 && userAgent.indexOf("MSIE") > -1 && !isOpera; //判断是否IE浏览器 
   var isEdge = userAgent.indexOf("Windows NT 6.1; Trident/7.0;") > -1 && !isIE; //判断是否IE的Edge浏览器 
   if(isIE) 
   { 
      var reIE = new RegExp("MSIE (\\d+\\.\\d+);"); 
      reIE.test(userAgent); 
      var fIEVersion = parseFloat(RegExp["$1"]); 
      if(fIEVersion == 7) 
      { return "IE7";} 
      else if(fIEVersion == 8) 
      { return "IE8";} 
      else if(fIEVersion == 9) 
      { return "IE9";} 
      else if(fIEVersion == 10) 
      { return "IE10";} 
      else if(fIEVersion == 11) 
      { return "IE11";} 
      else
      { return "0"}//IE版本过低 
   } 
else if(isEdge) 
{ 
  return "Edge"; 
} 
   else
   { 
     return "-1";//非IE 
   } 
 }
function setTab(name, cursel) {  
    for (var i = 1; i <= links_len; i++) {  
        var menu = document.getElementById(name + i);  
        var menudiv = document.getElementById("con_" + name + "_" + i);  
        if (i == cursel) {  
            menu.className = "off";  
            menudiv.style.display = "block";  
        }  
        else {  
            menu.className = "";  
            menudiv.style.display = "none";  
        }  
        document.getElementById("hidfTagHistory").value = cursel;  
    }  
}  
$(document).ready(function() {
	/*$(window).resize(function() {
      var height = document.documentElement.clientHeight ; 
      $(".mainarea").height(height-160);   	  
	  $(".photopile-wrapper").height(height-160) ;  
      });*/
	  
        $('body').GalMenu({
          'menu': 'GalDropDown'
        });
      });