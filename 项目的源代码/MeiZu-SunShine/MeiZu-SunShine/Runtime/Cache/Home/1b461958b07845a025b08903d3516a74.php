<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>注册Flyme账户</title>
		<meta name="descripttion" content="欢迎登录和注册魅族Flyme账户，您可以体验手机云服务功能，包括：在线下载应用，同步手机数据和查找手机等，让您的手机管理更加智能."/>
		<meta name="keywords" content="魅族  meizu 登录flyme 云服务  查找手机  充值账户  MX M9 MX2 MX3/">
		<link href="/xiangmu/xiangmu/MeiZu-SunShine/Public/Home/css/resetpwd.css" type="text/css"  rel="Stylesheet"/>
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
			<div>
				
			</div>
			<script>
					
					$('#login').mouseover(function(){
						$(this).css('color','#2B2B2B');
					}).mouseout(function(){
						$(this).css('color','#7F7F7F');
					})
			</script>
			<div class="welcome">
				重置密码
			</div>
			<div class="login">
				<form action="<?php echo U('Login/update');?>" method="post" id="login">
					
					<input type="password" name="password" class="password" placeholder="新密码" id="password"><div id="pwd"></div><br>
					<input type="password" name="repassword" placeholder="确认密码"class="repassword" id="repassword"><span id="repwd"></span>
					<input type="hidden" value="<?php echo ($data); ?>" name="userName">
					<input type="submit" value="确认修改" class="fullblue">
					
				</form>
			</div>
			
			<script>
				
				var pboor=false;
				var rpboor=false;
				var value1=null;
				$('#password').focus(function(){
					$('#pwd').text('请输入6-12位新密码').css('line-height','50px').css('color','black');
				}).blur(function(){
					var length =$(this).val().length;
					 value1=$.trim($(this).val());
					
					var str=/^[a-zA-Z0-9]{6,12}$/;
					if(!str.test(value1)&&length!=0){
						$('#pwd').text('新密码格式错误').css('color','red').css('line-height','50px').css('display','block');
						pboor=false;
					}else if(str.test(value1) && length!=0){
						$('#pwd').css('display','none');
						pboor=true;
					}
					if(length==0){
						$('#pwd').text('密码不能为空').css('color','red').css('line-height','50px').css('display','block');
						pboor=false;
					}
					
				})
				
				
				
				
				$('#repassword').focus(function(){
					$('#repwd').text('请重新输入密码').css('color','black').css('display','block');
				}).blur(function(){
					var length=$('#repassword').val().length;
					var value=$('#repassword').val();
					var str=/^[a-zA-Z0-9]{6,12}$/;
					
					if(!str.test(value)){
						$('#repwd').text('密码格式错误').css('color','red').css('display','block');
						rpboor=false;
						
					}else if(value!=value1){
						$('#repwd').text('两次密码输入不一致').css('color','red').css('display','block');
						rpboor=false;
					}else if(str.test(value) && value==value1){
						$('#repwd').css('display','none');
						rpboor=true;
						
					}
				})
				
				$('form').submit(function(e){
					$('#password').blur();
					$('#repassword').blur();
					if(pboor && rpboor ){
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