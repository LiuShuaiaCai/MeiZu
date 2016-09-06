<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<link href="/xiangmu/xiangmu/MeiZu-SunShine/Public/home/css/reply.css" type="text/css" rel="Stylesheet">
		<script src="/xiangmu/xiangmu/MeiZu-SunShine/Public/Home/js/jquery-1.11.3.min.js"></script>
		<!-- 引入百度编辑器的js文件 -->
		<script src="/xiangmu/xiangmu/MeiZu-SunShine/Public/UEditor/ueditor.config.js"></script>
		<script src="/xiangmu/xiangmu/MeiZu-SunShine/Public/UEditor/ueditor.all.min.js"></script>
		<script src="/xiangmu/xiangmu/MeiZu-SunShine/Public/Home/js/xcConfirm.js"></script>
		<link href="/xiangmu/xiangmu/MeiZu-SunShine/Public/Home/css/xcConfirm.css" type="text/css" rel="Stylesheet"/>
		
	</head>
	<body>
		<div class="total">
			<div class="top">
				<div class="left">
					<a href='<?php echo U("Index/index");?>'><img src="/xiangmu/xiangmu/MeiZu-SunShine/Public/Home/images/logo.png">
				</div>
				<div class="right">
					<span>
						<a href="<?php echo U('Index/index');?>" class="font">魅族商城</a>
					</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					<span>
						<a href="" class="font">魅族手机</a>
					</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					<span>
						<a href="<?php echo U('Index/index');?>" class="font">首页</a>
					</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					<span>
						<a href="<?php echo U('Login/login');?>" class="font">登陆</a>
					</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					<span>
						<a href="<?php echo U('Register/register');?>" class="font">注册</a>
					</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				</div>
			</div>
			<a href="<?php echo U('Post/post');?>?id=<?php echo ($_GET['id']); ?>" style="text-decoration:none;"><div style='margin-left: 100px'>返回上一页</div></a>
			<div class="main">
				<div style="background-color:white; color:#999999;"> 互动社区</div>

				<div class="message">
					<div class="img">
						<img src="/xiangmu/xiangmu/MeiZu-SunShine/Public/<?php echo empty($data['photo'])?'default.jpg':$data['photo'];?>" width="100px" height="100px">
					</div>
					<div class="title">
						<div style="font-size:20px"><?php echo ($data["title"]); ?></div>
					</div>
					<div style="float:right;margin-right:100px;color:orange;">
						楼主
					</div>
					<br>
					<div class="fabiao" style="font-size:16px">
						本贴由&nbsp;<?php echo ($data["userName"]); ?>&nbsp;发表于&nbsp;<?php echo date('Y-m-d H:i:s',$data['time']);?>
					</div>
					<div class="time">
						<span style="font-size:16px"> 
						<?php if($days != 0): echo ($days); ?>天前</span>
						<?php else: ?>
						今天</span><?php endif; ?>
						
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						<span style="font-size:16px">回复 <?php echo ($count); ?></span>
					</div>
					<div style="position:relative;left:600px;top:40px">
						<a href="javascript:void(0)"><img src="/xiangmu/xiangmu/MeiZu-SunShine/Public/Home/images/like.jpg"  width="30px" height="30px" id="like"></a><span>+<?php echo ($data['like']); ?></span>
					</div>
				</div>
				<form>
					<input type="hidden" value="<?php echo ($data['pid']); ?>" id="point">
				</form>
				<script>
					$(function(){
						var pid=$('#point').val();
						$('#like').click(function(){
							$.get("<?php echo U('Reply/demo');?>",function(msg){
								if(msg=='no'){
									var txt= "请您先登录";
								window.wxc.xcConfirm(txt, window.wxc.xcConfirm.typeEnum.warning);
								}else{
									$.get("<?php echo U('Post/like');?>?pid="+pid,function(msg){
									if(msg=='yes'){
										location.reload();
									}
								
									})
								}
							})
							
						})
					})
				</script>
				<div  class="content">
					<pre><?php echo htmlspecialchars_decode($data['content']);?></pre>
					<div class="button">
						<button id="button">回复</button>
					</div>
				</div>
				<div class="replay">
					<?php if($count == 0): ?><div class="repCon">
							<span style="font-size:20px; font-weight:bold;font-family:华文彩云;color:orange ">现在还没有坐沙发的，来第一个坐沙发吧！ * —— *</span>
					</div>
					<!--<?php if(is_array($data1)): $i = 0; $__LIST__ = $data1;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div class="repCon">
						asdasdas
					</div><?php endforeach; endif; else: echo "" ;endif; ?>-->
					<?php else: ?>
					
					<?php if(is_array($data1)): $k = 0; $__LIST__ = $data1;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($k % 2 );++$k;?><div class="repCon">
						<div class="img">
							<img src="/xiangmu/xiangmu/MeiZu-SunShine/Public/<?php echo empty($vo['photo'])?'default.jpg':$vo['photo'];?>" width="100px" height="100px">
						</div>
						<div class="username">
								<span style="color:#32A5EF; font-size:20px;"><?php echo ($vo["userName"]); ?></span>
								<span class="score">积分:<span style="color:orange"><?php echo ($vo["score"]); ?></span></span>
						</div>
						<div class="floor" style="color:orange;">
					
							
							<?php switch($k): case "1": ?>沙发<?php break;?>
								<?php case "2": ?>地板<?php break;?>
								<?php case "3": ?>凉席<?php break;?>
								<?php case "4": ?>下水道<?php break;?>
								<?php default: echo ($k); ?>楼<?php endswitch;?>
						</div>
						<div class="rep">
							<?php echo htmlspecialchars_decode($vo['content']);?>
						</div>
						
						
						<div style="float:right;margin-left:20px;">
							<a href="<?php echo U('Revert/revert');?>?zid=<?php echo ($vo['id']); ?>" style="text-decoration:none;">查看回复</a>
						</div>
						<div style="float:right;">
							<?php echo date('Y-m-d H:i:s',$vo['rtime']);?>
						</div>
						<div style="position:relative;left:500px;top:70px">
							<a href="javascript:void(0)"><img src="/xiangmu/xiangmu/MeiZu-SunShine/Public/Home/images/like.jpg"  width="30px" height="30px" id="Img<?php echo ($vo['id']); ?>"></a><span>+<?php echo ($vo['like']); ?></span>
						</div>
						<div style="margin-top:80px">
							<button id="button<?php echo ($vo['id']); ?>">回复</button>
						</div>
					</div>
					<!--回复功能-->
					<div class="editor<?php echo ($vo['id']); ?>" id="RepEditor" style="display:none">		
						<!--<form action="<?php echo U('Revert/add');?>" method="post">
						<input type="hidden" name="pid" value="<?php echo ($_GET['pid']); ?>">
						<input type="hidden" name="uid" value="<?php echo ($_GET['id']); ?>">
						<input type="hidden" name="id" value="<?php echo ($vo['id']); ?>">
						</form>-->	
						<!-- 加载编辑器的容器 -->
						<div id="id<?php echo ($vo['id']); ?>" style="display:none"><?php echo ($vo['id']); ?></div>
						<textarea class="text" placeholder="请输入评论内容" name="content" id="content<?php echo ($vo['id']); ?>"></textarea>
						<button id="but<?php echo ($vo['id']); ?>">提交</button>
						</form>	
					</div>
					<script>
						$(function(){
							var pid=<?php echo ($_GET['pid']); ?>;
							var uid=<?php echo ($_GET['id']); ?>;
							var id=$("#id<?php echo ($vo['id']); ?>").text();
							//var content=$("content<?php echo ($vo['id']); ?>").text();
							$("#button<?php echo ($vo['id']); ?>").click(function(){
								
								$.get("<?php echo U('Reply/demo');?>",function(msg){
									if(msg=='no'){
								var txt= "请您先登录";
								window.wxc.xcConfirm(txt, window.wxc.xcConfirm.typeEnum.warning);
									
								}else{
									var ue = UE.getEditor('container',{
								toolbars: [
								['fullscreen', 'source', 'undo', 'redo', 'bold'],
								['snapscreen','date','simpleupload','insertimage'],
								['emotion']
								]
								
							});
							$(".editor<?php echo ($vo['id']); ?>").css('display','block');
							$("#content<?php echo ($vo['id']); ?>").blur(function(){
							var content=$("#content<?php echo ($vo['id']); ?>").val();
							$("#but<?php echo ($vo['id']); ?>").click(function(){
								$.get("<?php echo U('Revert/add');?>",{pid:pid,uid:uid,id:id,content:content},function(msg){
										if(msg=='yes'){
											
											var txt= "回复成功";
											window.wxc.xcConfirm(txt, window.wxc.xcConfirm.typeEnum.success);
											
										}else{
											var txt= "回复失败";
											window.wxc.xcConfirm(txt, window.wxc.xcConfirm.typeEnum.warning);
										}
									})
								
								})
							})
										
									
								}
						
						})
					})
				})	
				
					</script>
					<!--回复结束-->
					<!--点赞功能-->
					<script>
					$(function(){
						
						$("#Img<?php echo ($vo['id']); ?>").click(function(){
							$.get("<?php echo U('Reply/demo');?>",function(msg){
								if(msg=='no'){
									var txt= "请您先登录";
								window.wxc.xcConfirm(txt, window.wxc.xcConfirm.typeEnum.warning);
								}else{
									$.get("<?php echo U('Reply/like');?>?id="+<?php echo ($vo['id']); ?>,function(msg){
									if(msg=='yes'){
										location.reload();
									}
								
							})
								}
							})
							
						})
					})
					</script>
					<!-- 点赞结束--><?php endforeach; endif; else: echo "" ;endif; endif; ?>
					<div class="page">
						<?php echo ($show); ?>
					</div>
					<div class="editor" style="display:none">		
						<form action="<?php echo U('Reply/add');?>" method="post" id="RepForm">
						
						<input type="hidden" name="id" value="<?php echo ($_GET['id']); ?>" id="id">
						<input type="hidden" name="pid" value="<?php echo ($_GET['pid']); ?>" id="pid">
						
						<script id="container" name="content" type="text/plain"></script>
						<input type="submit" value="提交">
						</form>
						
						
					</div>	
					
					<script>
						$(function(){
							var pid=$('#pid').val();
							var id=$('#id').val();
							var content=$('#container').text();
							$('#button').click(function(){
								
								$.get('<?php echo U('Reply/demo');?>',function(msg){
									if(msg=='no'){
								var txt= "请您先登录";
								window.wxc.xcConfirm(txt, window.wxc.xcConfirm.typeEnum.warning);
							
								}else{
								$.get('<?php echo U('Reply/demo2');?>?pid='+pid,function(msg){
									if(msg['cstatus']=='2' && msg['uid']!=id){
										var txt= "亲，楼主已禁止了回复哦";
										window.wxc.xcConfirm(txt, window.wxc.xcConfirm.typeEnum.warning);
									}else{
									
									var ue = UE.getEditor('container',{
								toolbars: [
								['fullscreen', 'source', 'undo', 'redo', 'bold'],
								['snapscreen','date','simpleupload','insertimage'],
								['emotion']
								]
								
							});
									$('.editor').css('display','block');
								
									}
								
							})
							
								
						}
						
					})
				})	
			})				
					</script>
				</div>
				
			</div>
		</div>
	</body>
</html>