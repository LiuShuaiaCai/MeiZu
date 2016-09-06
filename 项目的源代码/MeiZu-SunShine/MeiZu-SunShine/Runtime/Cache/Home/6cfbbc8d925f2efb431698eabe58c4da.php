<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8"/>
		<link href="/xiangmu/xiangmu/MeiZu-SunShine/Public/Home/css/post.css" type="text/css" rel="Stylesheet"/>
		<script src="/xiangmu/xiangmu/MeiZu-SunShine/Public/Home/js/jquery-1.11.3.min.js"></script>
		<!-- 引入百度编辑器的js文件 -->
		<script src="/xiangmu/xiangmu/MeiZu-SunShine/Public/UEditor/ueditor.config.js"></script>
		<script src="/xiangmu/xiangmu/MeiZu-SunShine/Public/UEditor/ueditor.all.min.js"></script>
		<script src="/xiangmu/xiangmu/MeiZu-SunShine/Public/Home/js/xcConfirm.js"></script>
		<link href="/xiangmu/xiangmu/MeiZu-SunShine/Public/Home/css/xcConfirm.css" type="text/css" rel="Stylesheet"/>
		<style>
			.menu{
				text-decoration:none;
			}
		</style>
	</head>
	<body>
		<a href="<?php echo U('Index/index');?>" class="menu"><span>返回主页</span></a>
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<a href="<?php echo U('Login/login');?>" class="menu"><span>登陆</span></a>
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<a href="<?php echo U('Register/register');?>" class="menu"><span>注册</span></a>
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<a href="<?php echo ($_SERVER['HTTP_REFERER']); ?>" class="menu"><span>返回上一页</span></a>
		<div class="block">
				<div class="hotPost">
					社区热帖
				</div>
				
				<div class="say">
					<a href="javascript:void(0)" style="text-decoration:none; color:black"  id="say">发帖</a>
				</div>
				<div class="form">
					<form action="<?php echo U('Post/post');?>" method="get">
						搜索<input name="title" type="text">
						<input value="提交" type="submit">
					</form>
				</div>
				<div class="number">
					<span class="a1">今日发帖:</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					<span class="a1" style="color:#FFBA00"><?php echo empty($res1)?'0':$res1;?></span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					<span class="a1">|</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					<span class="a1">历史最高:</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					<span class="a1" style="color:#FFBA00"><?php echo ($res); ?></span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					
				</div>
		</div>
		<script>
			$(function(){
				$('#say').click(function(){
					$.get("<?php echo U('Post/demo');?>",function(msg){
						if(msg=='no'){
							var txt= "请先登录再发帖";
							window.wxc.xcConfirm(txt, window.wxc.xcConfirm.typeEnum.confirm);
							
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
				})
			})
		</script>
		<?php if(is_array($data)): foreach($data as $k=>$vo): ?><div class="block">
			<div class="hotPost">
				<img src="/xiangmu/xiangmu/MeiZu-SunShine/Public/<?php echo empty($vo['photo'])?'default.jpg':$vo['photo'];?>" width="50px" height="50px">
			</div>
			<div class="content">
				
				<a href="<?php echo U('Reply/reply');?>?pid=<?php echo ($vo["pid"]); ?>&uid=<?php echo ($vo["uid"]); ?>&id=<?php echo ($_GET['id']); ?>" style="color:black;text-decoration:none;"><?php echo htmlspecialchars_decode($vo['title']);?></a>
			</div>
			
			<div class="top">
				<?php if($vo['top'] == 2): ?><img src="/xiangmu/xiangmu/MeiZu-SunShine/Public/Home/images/top.gif" width="25px" height="25px">
				<?php else: ?>
				<div style="width:25px;height:25px;">
				</div><?php endif; ?>
			</div>
			
			<div class="add">
				<?php if($vo['add'] == 2): ?><img src="/xiangmu/xiangmu/MeiZu-SunShine/Public/Home/images/add.gif" width="25px" height="25px">
				<?php else: ?>
				<div style="width:25px;height:25px;">
				</div><?php endif; ?>
			</div>
			<div class="time">
				<?php echo (date('Y-m-d H:i:s',$vo['time'])); ?>
			</div>
			<div class="reply">
				回复&nbsp;&nbsp;:&nbsp;&nbsp;<?php echo ($count[$k]); ?>
			</div>
			<div class="name">
				<?php echo ($vo['userName']); ?>
			</div>
			<div class="score">
				积分:<span style="color:red"><?php echo ($vo['score']); ?></span>
			</div>
		</div><?php endforeach; endif; ?>
		<div class="block">
			<?php echo ($show); ?>
		</div>
		<div class="editor">		
			<form action="<?php echo U('Post/add');?>" method="post">
				
				<input type="text" name="title"  class="title" placeholder="标题" />
				
				
				<input type="checkbox" name="cstatus">禁止回帖
				
				<input type="hidden" name="id" value="<?php echo ($_GET['id']); ?>">
					
				<!-- 加载编辑器的容器 -->
				<script id="container" name="content" type="text/plain"></script>
				<input type='image' value='提交' src="/xiangmu/xiangmu/MeiZu-SunShine/Public/Home/images/timg.jpg" class="submit"/>	
			</form>	
		</div>	
		<!--<script>
		
			//实例化编辑器
			var ue = UE.getEditor('container',{
							toolbars: [
							['fullscreen', 'source', 'undo', 'redo', 'bold'],
							['snapscreen','date','simpleupload','insertimage'],
							['emotion']
							]
						});
			$(function(){
				$('#say').click(function(){
					$('.editor').css('display','block');
				})
			})
		</script>-->
	</body>
</html>