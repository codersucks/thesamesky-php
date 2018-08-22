function ZanShang(){
  this.popbg = $('.zs-modal-bg');
  this.popcon = $('.zs-modal-box');
  this.closeBtn = $('.zs-modal-box .close');
  this.zsPay = $('.zs-modal-pay');
  this.zsFooter = $('.zs-modal-footer');
  var that = this;
  $('.show-zs').on('click',function(){
    //点击赞赏按钮出现弹窗
    that._show();
    that._init();
  })
}
ZanShang.prototype._hide = function(){
  this.popbg.hide();
  this.popcon.hide();
}
ZanShang.prototype._show = function(){
  this.popbg.show();
  this.popcon.show();
  this.zsFooter.show();
  this.zsPay.show();
}
ZanShang.prototype._init = function(){
  var that = this;
  this.closeBtn.on('click',function(){
    that._hide();
  })
  this.popbg.on('click',function(){
    that._hide();
  })
   $(function(){
		$('input[type=radio][name=zs-type]').change(function(){
		var v = $(this).val();
		if (v =="alipay"){
			var text = $(this).html();
			var payType=$('#pay-type'),payText = $('#pay-text');
			$('#alipay-image').show();
			$('#wechat-image').hide();
            payType.html('支付宝');
			payText.html(text);
		}else{
			var text = $(this).html();
			var payType=$('#pay-type'),payText = $('#pay-text');
			$('#alipay-image').hide();
			$('#wechat-image').show();
            payType.html('微信');
			payText.html(text);
		}
		});
	});
     
}
var zs = new ZanShang();