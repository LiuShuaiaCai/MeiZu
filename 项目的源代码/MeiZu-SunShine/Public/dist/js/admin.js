$(function(){
	var bool1=false;
	var bool2=false;
	$('#adminname').blur(function(){
		
		var len1 = $.trim($(this).val()).length;
		if(len1 == 0){
			$('#div1').text('用户名不能为空').css('color','red');
			bool1=false;
		}else if(len1<4 || len1>12){
			$('#div1').text('用户名为4-12位字符').css('color','red');
			bool1=false;
		}else{
			$('#div1').text('');
			bool1=true;
		}
		
		var adminname=$(this).val();
		$.get("{:U('Index/demo2')}?adminname="+adminname,function(msg){
			if(msg=='yes'){
				bool1=true;
			}else{
				bool1=false;
			}
		})
	})

	
	$('#password').blur(function(){
		bool2=false;
		var len2 =$.trim($(this).val()).length;
		if(len2==0){
			$('#div2').text('密码不能为空').css('color','red');
			bool2=false;
		}else if(len2<4 || len2>12){
			$('#div2').text('密码为4-12为字符').css('color','red');
			bool2=false;
		}else{
			$('#div2').text('');
			bool2=true;
		}
	})

	$('#forms').submit(function(){
		$('#password').blur();
		$('#adminname').blur();
		if(bool1 && bool2){
			return true;
		}else{
			return false;
		}
		
	})
})