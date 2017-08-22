$(document).ready(function(){
	$('#username').on('blur',function(){
		var len=$(this).val().length;
		if(len<6){
			$('.help-text').text('账号必须大于6位');
			$('.help-text').fadeIn();
			$('.loginbody .form-group').eq(0).addClass('has-error');
			setTimeout(function(){
				$('.help-text').fadeOut('fast');
			},2000);
		}
	});
	$('#username').on('focus',function(){
		console.log('111111');
		if($('.loginbody .form-group').eq(0).hasClass('has-error')){
			$('.loginbody .form-group').eq(0).removeClass('has-error');
		}
	});
	$('#psw').on('blur',function(){
		var len=$(this).val().length;
		if(len<1){
			$('.help-text').text('密码不能为空');
			$('.help-text').fadeIn();
			$('.loginbody .form-group').eq(1).addClass('has-error');
			setTimeout(function(){
				$('.help-text').fadeOut('fast');
			},2000);
		}
	});
	$('#username').on('focus',function(){
		// console.log('111111');
		if($('.loginbody .form-group').eq(1).hasClass('has-error')){
			$('.loginbody .form-group').eq(1).removeClass('has-error');
		}
	});
});