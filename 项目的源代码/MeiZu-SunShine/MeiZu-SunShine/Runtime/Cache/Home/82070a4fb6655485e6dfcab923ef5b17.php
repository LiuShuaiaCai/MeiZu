<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>登陆Flyme账户</title>
		<meta name="descripttion" content="欢迎登录和注册魅族Flyme账户，您可以体验手机云服务功能，包括：在线下载应用，同步手机数据和查找手机等，让您的手机管理更加智能."/>
		<meta name="keywords" content="魅族  meizu 登录flyme 云服务  查找手机  充值账户  MX M9 MX2 MX3/">
		<link href="/xiangmu/xiangmu/MeiZu-SunShine/Public/Home/css/login.css" type="text/css"  rel="Stylesheet"/>
		<script src="/xiangmu/xiangmu/MeiZu-SunShine/Public/Home/js/jquery-1.11.3.min.js"></script>
		<script type="text/javascript" src="/xiangmu/xiangmu/MeiZu-SunShine/Public/Home/js/login.js"></script>
	</head>
	<body>
		<div class="top">
			<div class="title">
				<img src="/xiangmu/xiangmu/MeiZu-SunShine/Public/Home/images/logo.png">
				<span class="a">
					<span><a href="<?php echo U('Login/login');?>" style="color:#2B2B2B; font-weight:bold; text-decoration:none;">登陆</a></span>
					<span>|</span>
					<span><a href="<?php echo U('Register/register');?>" style="color:#7F7F7F; font-weight:bold; text-decoration:none;"id="login">注册</a></span>
					<span>|</span>
					<span><a href="<?php echo U('Index/index');?>" style="color:#7F7F7F; font-weight:bold; text-decoration:none;"id="login">主页</a></span>
				</span>
			</div>
			<script>
				
					$('#login').mouseover(function(){
						$(this).css('color','#2B2B2B');
					}).mouseout(function(){
						$(this).css('color','#7F7F7F');
					})
			</script>
			<div class="login">
				<form action="<?php echo U('Login/checking');?>" method="post">
					<?php if(isset($_COOKIE['remember'])): ?><input type="text" name="userName" class="username" placeholder="手机号/账户名" id="username" value="<?php echo ($_COOKIE['userName']); ?>"><div class="user" id="user"></div><br>
					<input type="password" name="password" class="password" placeholder="密码" value="<?php echo ($_COOKIE['password']); ?>"><div class="pwd" id="pwd" ></div><br>
					<?php else: ?>
					<input type="text" name="userName" class="username" placeholder="手机号/账户名" id="username"><div class="user" id="user"></div><br>
					<input type="password" name="password" class="password" placeholder="密码"><div class="pwd" id="pwd"></div><br><?php endif; ?>
					<input type="text" name="yzm" class="yzm" placeholder="请输入验证码"><div class="code"></div><br>
					<img src="<?php echo U('Login/code');?>"  id="code"><br><a href="javascript:changeimg()" id="button" style="margin-left:50px;text-decoration:none;">看不清?换一张</a><br>
					<input type="checkbox" name="remember" class="remember"><span style="color:#515151; font-weight:bold;">记住登陆状态</span>&nbsp;&nbsp;    <a href="<?php echo U('Login/findpwd');?>" style="color:#00A7EA; text-decoration:none;">忘记密码?</a><br>
					<input type="submit" value="登陆" class="fullblue">
				</form>
			</div>
			<script>
				function changeimg(){
					
					
					now=new Date();
					
					$('#code').attr('src',"<?php echo U('Login/code');?>?code="+now.getTime());
						
					
				}
				
			</script>
			
		</div>
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
			<div style="margin-left:100px; margin-top:10px; color:#7F7F7F;">
				
				©2016 Meizu Telecom Equipment Co., Ltd. All rights reserved.备案号: 粤ICP备13003602号-4经营许可证编号: 粤B2-20130198营业执照

			</div>
		</div>
	</body>
</html>