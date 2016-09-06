<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>注册Flyme账户</title>
		<meta name="descripttion" content="欢迎登录和注册魅族Flyme账户，您可以体验手机云服务功能，包括：在线下载应用，同步手机数据和查找手机等，让您的手机管理更加智能."/>
		<meta name="keywords" content="魅族  meizu 登录flyme 云服务  查找手机  充值账户  MX M9 MX2 MX3/">
		<link href="/xiangmu/xiangmu/MeiZu-SunShine/Public/Home/css/findpwd.css" type="text/css"  rel="Stylesheet"/>
		<script src="/xiangmu/xiangmu/MeiZu-SunShine/Public/Home/js/jquery-1.11.3.min.js"></script>
	</head>
	<body>
		<!--头部开始-->
		<div class="top">
			<div class="title">
				<img src="/xiangmu/xiangmu/MeiZu-SunShine/Public/Home/images/logo.png">
				<span class="a">
					<span><a href="<?php echo U('Login/login');?>" style="color:#7F7F7F; font-weight:bold; text-decoration:none;" id="login">登陆</a></span>
					<span>|</span>
					<span><a href="<?php echo U('Register/register');?>" style="color:#2B2B2B; font-weight:bold; text-decoration:none;">注册</a></span>
				</span>
			</div>
			<script>
				
					$('#login').mouseover(function(){
						$(this).css('color','#2B2B2B');
					}).mouseout(function(){
						$(this).css('color','#7F7F7F');
					})
			</script>
			<div class="welcome">
				请输入验证信息
			</div>
			<div class="login">
				<form action="<?php echo U('Login/checkingOne');?>" method="post" id="login">
					
					<input type="text" name="userName" class="username" placeholder="账户名" id="username"><div id="user"></div><br>
					<input type="text" name="phone" placeholder="手机号" class="phone"><span id="phone"></span>
					
					<input type="submit" value="下一步" class="fullblue">
					
				</form>
			</div>
			
			<script>
				
				var uboor=false;
				var fboor=false;
				
				$('#username').focus(function(){
					$('#user').text('请输入您的注册账户名').css('line-height','50px').css('color','black');
				}).blur(function(){
					var length =$(this).val().length;
					var value=$.trim($(this).val());
					
					var str=/^(?!_)(?!.*?_$)[a-zA-Z0-9_\u4E00-\u9FA5]+$/;
					if(!str.test(value)&&length!=0){
						$('#user').text('用户名格式错误').css('color','red').css('line-height','50px').css('display','red');
						uboor=false;
					}
					if(length==0){
						$('#user').text('用户名不能为空').css('color','red').css('line-height','50px').css('display','red');
						uboor=false;
					}
					$.get("<?php echo U('Login/check');?>?userName="+value,function(msg){
						if(msg=='no' && str.test(value) && length!=0){
							$('#user').text('该用户名未注册').css('color','red').css('display','red');
							uboor=false;
						}else if(msg=='yes'&& str.test(value) && length!=0){
							$('#user').css('display','none');
							uboor=true;
							
						}
						
					})
					
				})
				
				
				
				
				
				$('.phone').focus(function(){
					$('#phone').text('输入您的注册手机号').css('color','black').css('display','block');
				}).blur(function(){
					var length=$('.phone').val().length;
					var value=$('.phone').val();
					var str=/^[0-9]*$/;
					
					if(length!=11 ||!str.test(value)){
						$('#phone').text('请输入正确手机号格式').css('color','red');
						fboor=false;
						
					}
					$.get("<?php echo U('Login/phone');?>?phone="+value,function(msg){
						if(msg=='no' && str.test(value) && length==11){
							$('#phone').text('您输入的手机号不存在').css('color','red');
							fboor=false;
						}else if(msg=='yes'&& str.test(value) && length==11){
							$('#phone').css('display','none');
							fboor=true;
							
						}
						
					})
				})
				
				$('form').submit(function(e){
					$('#username').blur();
					$('.phone').blur();
					if(uboor && fboor ){
						return true;
					}else{
						return false;
					}
				})
					
					
				
			</script>
			
		</div>
		<!--头部结束-->
		<div class="bottom">
			<div class="href">
				<span><a href="" style="color:#7F7F7F;text-decoration:none;" id="aa">关于魅族</a></span>
				<span>|</span>
				<span><a href="" class="aa">工作机会</a></span>
				<span>|</span>
				<span><a href="" class="aa">利息我们</a></span>
				<span>|</span>
				<span><a href="" class="aa">法律声明</a></span>
				<span>|</span>
				<span><a href="" class="aa">简体中文</a></span>
				&nbsp;&nbsp;&nbsp;&nbsp;
				<span class="aa">
					客服热线 400-788-3333
				</span>
				&nbsp;&nbsp;&nbsp;&nbsp;
				<span>
					<a href="" class="aa">在线客服</a>
				</span>
			</div>
			<script>
				$('#aa').mouseover(function(){
					$(this).css('color','black');
				}).mouseout(function(){
					$(this).css('color','#7F7F7F');
				})
			</script>
			<div style="margin-left:100px; margin-top:50px; color:#7F7F7F;">
				
				©2016 Meizu Telecom Equipment Co., Ltd. All rights reserved.备案号: 粤ICP备13003602号-4经营许可证编号: 粤B2-20130198营业执照

			</div>
		</div>
	</body>
</html>