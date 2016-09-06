<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<link href="/xiangmu/xiangmu/MeiZu-SunShine/Public/Home/css/client.css" type="text/css" rel="Stylesheet"/>
		<link href="/xiangmu/xiangmu/MeiZu-SunShine/Public/Home/css/xcConfirm.css" type="text/css" rel="Stylesheet"/>
		<script src="/xiangmu/xiangmu/MeiZu-SunShine/Public/Home/js/jquery-1.11.3.min.js"></script>
		<script src="/xiangmu/xiangmu/MeiZu-SunShine/Public/Home/js/xcConfirm.js"></script>
		<link href="/xiangmu/xiangmu/MeiZu-SunShine/Public/Home/css/theme.css" rel="stylesheet" media="all">
	</head>
	<body>
		<div class="main">
			<div class="head">
				<div class="top1">
					<div class="attr">
						<img src="/xiangmu/xiangmu/MeiZu-SunShine/Public/Home/images/logo.png">
					</div>
					<div class="attr">
						<a href="<?php echo U('Index/index');?>?id=<?php echo ($data['id']); ?>" class="top2">魅族商城</a>
					</div>
					
					<div class="attr">
						<a href="<?php echo U('Draw/draw');?>?id=<?php echo ($data['id']); ?>" class="top2">幸运抽奖</a>
					</div>
					<div class="attr">
						<a href="<?php echo U('Post/post');?>?id=<?php echo ($data['id']); ?>" class="top2">魅族热帖</a>
					</div>
					<div class="attr">
						<a href="<?php echo U('Video/video');?>?id=<?php echo ($data['id']); ?>" class="top2">视频专区</a>
					</div>
					<div class="attr">
						<a href="<?php echo U('Dgoods/index');?>?id=<?php echo ($data['id']); ?>" class="top2">兑换商城</a>
					</div>
					<div class="attr">
						<a href="<?php echo U('Question/index');?>?id=<?php echo ($data['id']); ?>" class="top2">热门问题</a>
					</div>
					<div class="attr">
						<span>
							<a href="" class="attr1">用户:  <?php echo ($data["userName"]); ?></a>
						</span>
						<span>
							|
						</span>
						<span>
							<a href="<?php echo U('Login/login');?>" class="attr1">退出</a>
						</span>
					</div>
				</div>
				<div class="attr2">
					<div class="attr3" style="color:#32A5E7;">
						账户管理
					</div>
					<div class="attr3">
						魅币
					</div>
				</div>
			</div>
			<div class="content">
				<div class="content_one">
					<div class="img">
						<img src="/xiangmu/xiangmu/MeiZu-SunShine/Public/<?php echo empty($data['photo']) ? 'default.jpg' : $data['photo'];?>" width="100px" height="100px"><br>
						<a href="javascript:void(0)" style="clear:both;text-decoration:none;" id="img">更换头像</a>
					</div>
					<div class="three" style="display:block">
						<div class="one">用户名:&nbsp;&nbsp;<?php echo ($data["userName"]); ?></div>
						
						<a href="javascript:void(0)" class="name">修改</a>
						
						<div id="name" style="display:none">
							<form action="<?php echo U('Client/name');?>" method="post">
								<input type="text" value="<?php echo ($data['userName']); ?>" name="userName"style="position:relative;left:15px;">
								<input type="hidden" value="<?php echo ($data['id']); ?>" name="id">
								<input type="submit" value="提交" style="position:relative;left:15px;">
							</form>
						</div>
						<div class="second" style="display:block;">
							<span>积分:<?php echo ($data["score"]); ?> </span>
						</div>
					</div>
					<div class="form">
						<form method="post" action="<?php echo U('Client/image');?>" enctype="multipart/form-data" class="form">
							
								<input type="file" name="photo" value="编辑头像"><br>
								<input type="hidden" name="id" value="<?php echo ($data['id']); ?>"><br>
								<input type="submit" value="提交"class="submit">
							
						</form>
					</div>
					<script>
						$(function(){
							$('#img').click(function(){
								$('.three').css('display','none');
								$('.form').css('display','block');
							})
							$('.name').click(function(){
								$('.second').css('display','none');
								$('.egg').css('display','none');
								$('#name').css('display','block');
							})
						})
					</script>
					<div class="safe" style="color:#515151;font-size:20px";>
					账户安全
					</div>
					<div class="four" style="color:#515151;font-size:20px;">
						安全等级:<span style="color:#FFC800;">
							<?php if($data['email'] && $data['question']): ?>100分
							<?php elseif($data['question'] || $data['email']): ?>
								80分
							<?php else: ?>
								50分<?php endif; ?>
							
						</span>
					</div>
				</div>
				<div class="content_second">
					<div>
						<span class="b3">
							密码
						</span>
						<span class="right">
							<a href="javascript:void(0)" id="b2" class="btn btn-primary btn-large theme-login">修改</a>
						</span>
					</div>
					<!--<div class="password" style="display:none">
						<form action="<?php echo U('Client/password');?>" method="post" id="mima">
							原密码<input type="password" name="password" id="password"><span id="pwd"></span><br>
								
							新密码<input type="password" name="repassword" id="repassword" style="margin-top:20px;"><span id="rpwd"></span><br>
								  <input type="hidden" name="id" value="<?php echo ($data['id']); ?>">
							<input type="submit" value="提交" style="position:relative;top:20px;left:50px;">
						</form>
					</div>-->
					<div class="theme-popover" id="pwd_popover">
						 <div class="theme-poptit">
							  <a href="javascript:;" title="关闭" class="close" id="X2">×</a>
							  <h3>修改密码</h3>
						 </div>
						 <div class="theme-popbod dform">
							   <form class="theme-signin"  name="loginform" action="<?php echo U('Client/password');?>" method="post">
									<ol>
										 <li><h4>经常更换密码可提升账户安全！</h4></li>
										 <li><strong>原密码：</strong><input class="ipt" type="password" name="password" id="password"  size="20" /><span id="pwd"></span></li>
										 <li><strong>新密码：</strong><input class="ipt" type="password" name="repassword"  size="20" id="repassword"/><span id="rpwd"></span></li>
										 <li><input class="btn btn-primary" type="submit" name="submit" value=" 修改 " /></li>
										 <input type="hidden" name="id" value="<?php echo ($data['id']); ?>">
									</ol>
							   </form>
						 </div>
					</div>
					<div class="theme-popover-mask" id="div2_popover"></div>

					<script>
						$(function(){
							var rpboor=false;
							var pboor=false;
							var id=<?php echo ($_GET['id']); ?>;
							$('#b2').click(function(){
								$('#div2_popover').fadeIn(100);
								$('#pwd_popover').slideDown(200);

							})
							$('#X2').click(function(){
									$('#div2_popover').fadeOut(100);
								$('#pwd_popover').slideUp(200);
							})

							$('#password').focus(function(){
								$('#pwd').text('请输入原密码').css('color','black');
							}).blur(function(){
								var value=$(this).val();
								var length=$(this).val().length;
								
								if(length==0){
									$('#pwd').text('原密码不能为空').css('color','red');
									$('#password').css('border','1px solid red');
									rpboor=false;
								}
								$.get("<?php echo U('Client/check');?>",{id:id,password:value},function(msg){
									if(msg=='no' && length!=0){
										$('#pwd').text('原密码输入错误').css('color','red');
										$('#password').css('border','1px solid red');
										rpboor=false;
									}else if(msg=='yes' && length!=0){
										$('#password').css('border','1px solid black');
										rpboor=true;
									}
								})
							})
							$('#repassword').focus(function(){
								$('#rpwd').text('请输入新密码').css('color','black');
							}).blur(function(){
								var length=$(this).val().length;
								
								if(length<6 || length>12){
									$('#rpwd').text('新密码必须为6-12位').css('color','red');
									$('#repassword').css('border','1px solid red');
									pboor=false;
								}else{
									$('#repassword').css('border','1px solid black');
									pboor=true;
								}
							})
							$('form[0]').submit(function(){
								$('#password').blur();
								$('#repassword').blur();
								if(pboor && rpboor){
									return true;
								}else{
									return false;
								}
							})
							
						})
					</script>
					<div class="a3">
						<span class="b3">
							邮箱
						</span>
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						<span>
							<?php echo empty($data['email'])?'未绑定':'已绑定';?><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
							<span class="b1">绑定后可通过邮箱找回密码</span>
						</span>
						<span class="right">
							<a href="javascript:void(0)" id="b5" class="btn btn-primary btn-large theme-login">绑定</a>
						</span>
					</div>
					<!--<div class="email" style="display:none;">
						<form method="post" action="<?php echo U('Client/email');?>" enctype="multipart/form-data" class="mail">
							
								原密码<input type="password" name="password"  id="mail_pwd" value=""><span id="one_span"></span><br>
								邮箱号<input type="text" name="email" id="email" style="margin-top:20px;"><span id="two_span"></span><br>
								<input type="hidden" name="id" value="<?php echo ($data['id']); ?>"><br>
								<input type="submit" value="提交"class="submit">
							
						</form>
					</div>-->
					<div class="theme-popover" id="mail_popover">
						 <div class="theme-poptit">
							  <a href="javascript:;" title="关闭" class="close" id="X1">×</a>
							  <h3>绑定邮箱</h3>
						 </div>
						 <div class="theme-popbod dform">
							   <form class="theme-signin" id="theme4" name="loginform" action="<?php echo U('Client/email');?>" method="post">
									<ol>
										 <li><h4>绑定邮箱可提高安全等级！</h4></li>
										 <li><strong>原密码：</strong><input class="ipt" type="password" name="password" id="mail_pwd"  size="20" /><span id="one_span"></span></li>
										 <li><strong>邮箱号：</strong><input class="ipt" type="text" name="email"  size="20" id="email"/><span id="two_span"></span></li>
										 <li><input class="btn btn-primary" type="submit" name="submit" value=" 绑定 " /></li>
										 <input type="hidden" name="id" value="<?php echo ($data['id']); ?>">
									</ol>
							   </form>
						 </div>
					</div>
					<div class="theme-popover-mask" id="div1_popover"></div>
					<script>
						$(function(){
							var pboor=false;
							var mboor=false;
							var id=<?php echo ($_GET['id']); ?>;
							$('#b5').click(function(){
								$.get("<?php echo U('Client/demo5');?>",{id:id},function(msg){
									if(msg.length!=0){
										var txt= "亲，您已绑定了邮箱";
										window.wxc.xcConfirm(txt, window.wxc.xcConfirm.typeEnum.confirm);
									}else{
										$('#b5').click(function(){
										$('#div1_popover').fadeIn(100);
										$('#mail_popover').slideDown(200);

										})
										$('#X1').click(function(){
										$('#div1_popover').fadeOut(100);
										$('#mail_popover').slideUp(200);
							})
									}
								})
								
							})
							
							$('#mail_pwd').focus(function(){
								$('#one_span').text('请输入原密码').css('color','black');
							}).blur(function(){
								var value=$(this).val();
								var length=$(this).val().length;
								
								if(length==0){
									$('#one_span').text('原密码不能为空').css('color','red');
									$('#mail_pwd').css('border','1px solid red');
									pboor=false;
								}
								$.get("<?php echo U('Client/check');?>",{password:value,id:id},function(msg){
									if(msg=='no' && length!=0){
										$('#one_span').text('原密码输入错误').css('color','red');
										$('#mail_pwd').css('border','1px solid red');
										pboor=false;
									}else if(msg=='yes' && length!=0){
										$('#mail_pwd').css('border','1px solid black');
										pboor=true;
									}
								})
								
							})
							
							
							$('#email').focus(function(){
								$('#two_span').text('请输入邮箱号').css('color','black');
							
							}).blur(function(){
								var str=/^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
								var length=$(this).val().length;
								var value=$(this).val();
								
								if(!str.test(value)){
									$('#two_span').text('邮箱格式错误').css('color','red');
									$('#email').css('border','1px solid red');
									mboor=false;
									
								}else{
									$('#email').css('border','1px solid black');
									mboor=true;
								}
								
								
							})
							$('form[1]').submit(function(){
								$('#mail_pwd').blur();
								$('#email').blur();
							if(pboor && mboor){
								return true;
								
							}else{
								return false;
							}
						})
					})
					</script>
					<div class="a3">
						<span class="b3">
							手机号
						</span>
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						<span>
							&nbsp;&nbsp;&nbsp;<?php echo ($data["phone"]); ?><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
							<span class="b1">已验证,可通过手机找回密码</span>
						</span>
						<span class="right">
							<a href="javascript:void(0)" id="b4" class="btn btn-primary btn-large theme-login">修改</a>
						</span>
					</div>
					
					<!--<div class="phone" style="display:none">
						<form action="<?php echo U('Client/phone');?>" method="post" id="shouji">
							原密码<input type="password" name="password" id="two_pwd"><span id="two"></span><br>
								
							手机号<input type="text" name="phone" id="phone" style="margin-top:20px;"><span id="one"></span><br>
								  <input type="hidden" name="id" value="<?php echo ($data['id']); ?>">
							验证码<input type="text"  name="yzm" style="margin-top:20px;" id="yzm"><span id="code"></span><br>
									<a href="javascript:void(0)" id="sendMsg" style="position:relative; left:50px;">点击获取验证码</a>
							<input type="submit" value="提交" style="position:relative;top:5px;left:100px;">
						</form>
					</div>-->
					<div class="theme-popover" id="phone_popover">
						 <div class="theme-poptit">
							  <a href="javascript:;" title="关闭" class="close" id="X3">×</a>
							  <h3>修改手机号</h3>
						 </div>
						 <div class="theme-popbod dform">
							   <form class="theme-signin" id="theme2" name="loginform" action="<?php echo U('Client/phone');?>" method="post">
									<ol>
										<!-- <li><h4>绑定邮箱可提高安全等级！</h4></li>-->
										 <li><strong>原密码：</strong><input class="ipt" type="password" name="password" id="two_pwd"  size="20" /><span id="two"></span></li>
										 <li><strong>新手机号：</strong><input class="ipt" type="text" name="phone"  size="20" id="phone"/><span id="one"></span></li>
										 <li><input class="btn btn-primary" type="submit" name="submit" value=" 绑定 " /></li>
										 <input type="hidden" name="id" value="<?php echo ($data['id']); ?>">
									</ol>
							   </form>
						 </div>
					</div>
					<div class="theme-popover-mask" id="div3_popover"></div>
					<script>
						$(function(){
							var rpboor=false;
							var pboor=false;
							
							var id=<?php echo ($_GET['id']); ?>;
							$('#b4').click(function(){
							
										$('#div3_popover').fadeIn(100);
										$('#phone_popover').slideDown(200);

										})
										$('#X3').click(function(){
										$('#div3_popover').fadeOut(100);
										$('#phone_popover').slideUp(200);
							})
							$('#two_pwd').focus(function(){
								$('#two').text('请输入原密码').css('color','black');
							}).blur(function(){
								var value=$(this).val();
								var length=$(this).val().length;
								
								if(length==0){
									$('#two').text('原密码不能为空').css('color','red');
									$('#two_pwd').css('border','1px solid red');
									rpboor=false;
								}
								$.get("<?php echo U('Client/check');?>",{id:id,password:value},function(msg){
									if(msg=='no' && length!=0){
										$('#two').text('原密码输入错误').css('color','red');
										$('#two_pwd').css('border','1px solid red');
										rpboor=false;
									}else if(msg=='yes' && length!=0){
										$('#two_pwd').css('border','1px solid black');
										rpboor=true;
									}
								})
							})
							$('#phone').focus(function(){
								$('#one').text('请输入新手机号').css('color','black');
							}).blur(function(){
								var length=$(this).val().length;
								var value=$(this).val();
								var str=/^[0-9]*$/;
								if(length!=11 || !str.test(value)){
									$('#one').text('手机号格式错误').css('color','red');
									$('#phone').css('border','1px solid red');
									pboor=false;
								}else{
									pboor=true;
								}
							})
							
							$('form[2]').submit(function(){
								$('#two_pwd').blur();
								$('#phone').blur();
								
								if(pboor && rpboor){
									return true;
								}else{
									return false;
								}
							})
							
							
						})
					</script>
					<div class="a3">
						<span class="b3">
							密保问题
						</span>
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						<span>
							<?php echo ($data['question'] ? '已设置':'未设置'); ?><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
							<span class="b1">密保问题可大幅度提升账户安全</span>
						</span>
						<span class="right">
							<a href="javascript:void(0)" id="b6" class="btn btn-primary btn-large theme-login">设置</a>
						</span>
					</div>
					<!--<div style="display:none" class="mibao">
						<form action="<?php echo U('Client/demo3');?>" method="post">
						<span>问题</span>
						<select name="question">
							<option id="select">---请选择问题---</option>
							<option value="你母亲的姓名是？">您母亲的姓名是？</option>
							<option value="你父亲的姓名是?">你父亲的姓名是？</option>
							<option value="你配偶的名字是?">你配偶的名字是？</option>
							<option value="你小学的校名是?">你小学的校名是?</option>
							<option value="你初中班主任名字是?">你初中班主任名字是?</option>
							<option value="你小时候最好的朋友是？">你小时候最好的朋友是?</option>
						</select>
						<br>
							答案<input type="text" name="answer" style="margin-top:50px; width:160px;"><br>
							<input type="submit" value="提交" style="margin-top:30px;margin-left:30px;">
							<input type="hidden" name="id" id="qid" value="<?php echo ($data['id']); ?>">
						</form>
					</div>
				</div>-->
				<div class="theme-popover" id="mibao_popover">
						 <div class="theme-poptit">
							  <a href="javascript:;" title="关闭" class="close" id="X4">×</a>
							  <h3>绑定密保</h3>
						 </div>
						 <div class="theme-popbod dform">
							   <form class="theme-signin" id="theme2"name="loginform" action="<?php echo U('Client/demo3');?>" method="post">
									<ol>
										<!-- <li><h4>绑定邮箱可提高安全等级！</h4></li>-->
										 <li><strong>问题：</strong><select name="question">
												<option id="select">---请选择问题---</option>
												<option value="你母亲的姓名是？">您母亲的姓名是？</option>
												<option value="你父亲的姓名是?">你父亲的姓名是？</option>
												<option value="你配偶的名字是?">你配偶的名字是？</option>
												<option value="你小学的校名是?">你小学的校名是?</option>
												<option value="你初中班主任名字是?">你初中班主任名字是?</option>
												<option value="你小时候最好的朋友是？">你小时候最好的朋友是?</option>
											</select>
										 </li>
										 <li><strong>答案：</strong><input class="ipt" type="text" name="answer"  size="20" id="phone"/><span id="one"></span></li>
										<li><input class="btn btn-primary" type="submit"  value=" 绑定 " /></li>
										
										
									</ol>
									 <input type="hidden" name="id" value="<?php echo ($data['id']); ?>">
							   </form>
						 </div>
					</div>
					<div class="theme-popover-mask" id="div4_popover"></div>
				<script>
				$(function(){
					var value=<?php echo ($data['id']); ?>;
					$('#b6').click(function(){
						
						$.get("<?php echo U('Client/demo4');?>",{id:value},function(msg){
							if(msg['question'].length!=0){
								var txt= "亲，您也绑定密保问题了哦";
								window.wxc.xcConfirm(txt, window.wxc.xcConfirm.typeEnum.confirm);
							}else{
										$('#div4_popover').fadeIn(100);
										$('#mibao_popover').slideDown(200);
										$('#select').attr('selected',true);
										$('#X4').click(function(){
										$('#div4_popover').fadeOut(100);
										$('#mibao_popover').slideUp(200);
										})
											
									}
									})
								})	
										
										
										
									
									
							})		
								
						
						
						
					
				
				</script>
				
			</div>
			<div class="bottom">
				<div class="bottom_one">
					<span>关于魅族</span>&nbsp;&nbsp;&nbsp;
					<span>|</span>&nbsp;&nbsp;&nbsp;
					<span>工作机会</span>&nbsp;&nbsp;&nbsp;
					<span>|</span>&nbsp;&nbsp;&nbsp;
					<span>联系我们</span>&nbsp;&nbsp;&nbsp;
					<span>|</span>&nbsp;&nbsp;&nbsp;
					<span>法律声明</span>&nbsp;&nbsp;&nbsp;
					<span>|</span>&nbsp;&nbsp;&nbsp;
					<span>简体中文</span>&nbsp;&nbsp;&nbsp;
					<span>|</span>&nbsp;&nbsp;&nbsp;
					<span>客服热线</span>&nbsp;&nbsp;&nbsp;
					<span>|</span>&nbsp;&nbsp;&nbsp;
					<span>400-788-3333</span>&nbsp;&nbsp;&nbsp;
					<span>在线客服</span>&nbsp;&nbsp;&nbsp;
				</div>
				<div class="bottom_second">
					©2016 Meizu Telecom Equipment Co., Ltd. All rights reserved.备案号: 粤ICP备13003602号-4经营许可证编号: 粤B2-20130198营业执照
				</div>
			
			</div>
		</div>
	</body>
</html>