$(document).ready(function(){
	var status1=false;
	$('#input1').focus(function(){
		$('#span').text("用户为8-16位字符");
	}).blur(function(){
		var len1=$.trim($(this).val()).length;
		if(len1==0){
			$('#span').text("用户不能为空").css('color','red');
			status1=false;
		}else if(len1<8 || len1>16){
			$('#span').text("用户为8-16位字符").css('color','red');
			status1=false;
		}else{
			$('#span').text("");
			status1=true;
		}
		var userName=$(this).val();
		$.post(url+"/User/finds",'userName='+userName,function(msg){
			// console.log(msg);
			if(msg=='yes'){
				$('#span').text("用户已存在").css('color','red');
				status1=false;
			}else{
				status1=true;
			}
		})
	})

	status2=false;
	
	$('#input2').focus(function(){
		$('#span2').text("手机号为11位字符");
	}).blur(function(){
		var len2=$.trim($(this).val()).length;
		if(len2==0){
			$('#span2').text("手机号不能为空").css('color','red');

		}else if(len2!=11){
			$('#span2').text("格式不正确").css('color','red');
		}else if(len2==11){
			$('#span2').text("");
			status2=true;
		}
	})

	status3=false;
	$('#input3').focus(function(){
		$('#span3').text("密码为6-12位字符");
	}).blur(function(){
		$len=$.trim($(this).val()).length;
		if($len==0){
			$('#span3').text("密码不能为空").css('color','red');
			status3=false;
		}else if($len<6 || $len>12){
			$('#span3').text("格式不正确").css('color','red');
			status3=false;
		}else{
			$('#span3').text("");
			status3=true;
		}
	});

	$('#formsub').submit(function(){
		console.log(status1);
		console.log(status2);
		console.log(status3);
		if((status1==true) && (status2==true) && (status3==true)){
			return true;
		}
		return false;
	})
	
})