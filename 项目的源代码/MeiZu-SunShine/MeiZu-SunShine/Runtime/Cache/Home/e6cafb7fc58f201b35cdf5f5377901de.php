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
					<img src="/xiangmu/xiangmu/MeiZu-SunShine/Public/Home/images/logo.png">
				</div>
				<div class="right">
					<span>
						<a href="<?php echo U('Index/index');?>" class="font">魅族商城</a>
					</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					<span>
						<a href="" class="font">魅族手机</a>
					</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					<span>
						<a href="" class="font">魅蓝手机</a>
					</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					<span>
						<a href="" class="font">智能硬件</a>
					</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					<span>
						<a href="" class="font">社区</a>
					</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				</div>
			</div>
			<div class="main">
				<div style="background-color:white; color:#999999;"> 互动社区</div>
				<div class="message">
					<div class="img">
						<img src="/xiangmu/xiangmu/MeiZu-SunShine/Public/<?php echo empty($data['photo'])?'default.jpg':$data['photo'];?>" width="100px" height="100px">
					</div>
					<div class="title">
						<div style="font-size:20px"><?php echo ($data["userName"]); ?></div>
					</div>
					<div style="float:right;margin-right:100px;color:orange;">
						楼主
					</div>
					<br>
					<div class="fabiao" style="font-size:16px;margin-left:50px">
						<?php echo htmlspecialchars_decode($data['content']);?>
					</div>
					<div class="time">
						<span style="font-size:16px"> <?php echo date('Y-m-d H:i:s',$data['rtime']);?></span>
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						<span>回复<?php echo ($count); ?></span>
					</div>
				</div>
				<form>
					<input type="hidden" value="<?php echo ($data['pid']); ?>" id="point">
				</form>
				<script>
					$(function(){
						var pid=$('#point').val();
						$('#like').click(function(){
						
							$.get("<?php echo U('Post/like');?>?pid="+pid,function(msg){
									if(msg=='yes'){
										location.reload();
									}
								
							})
						})
					})
				</script>
				
				<div class="replay">
					<?php if($count == 0): ?><div class="repCon">
							<span style="font-size:20px; font-weight:bold;font-family:华文彩云;color:orange ">现在还没有坐沙发的，来第一个坐沙发吧！ * —— *</span>
					</div>
					<!--<?php if(is_array($data1)): $i = 0; $__LIST__ = $data1;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div class="repCon">
						asdasdas
					</div><?php endforeach; endif; else: echo "" ;endif; ?>-->
					<?php else: ?>
					
					<?php if(is_array($data1)): $i = 0; $__LIST__ = $data1;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div class="repCon">
						<div class="img">
							<img src="/xiangmu/xiangmu/MeiZu-SunShine/Public/<?php echo empty($vo['photo'])?'default.jpg':$vo['photo'];?>" width="100px" height="100px">
						</div>
						<div class="username">
								<span style="color:#32A5EF; font-size:20px;"><?php echo ($vo["userName"]); ?></span>
								<span class="score">积分:<span style="color:orange"><?php echo ($vo["score"]); ?></span></span>
						</div>
						<div class="floor" style="color:orange;">
					
							
							<?php switch($i): case "1": ?>沙发<?php break;?>
								<?php case "2": ?>地板<?php break;?>
								<?php case "3": ?>凉席<?php break;?>
								<?php case "4": ?>下水道<?php break;?>
								<?php default: echo ($i); ?>楼<?php endswitch;?>
						</div>
						<div class="rep">
							<?php echo htmlspecialchars_decode($vo['content1']);?>
						</div>
						
						
						
						<div style="float:right;">
								回复时间:&nbsp;&nbsp;&nbsp;<?php echo date('Y-m-d H:i:s',$vo['time']);?>
						</div>
						
						
					</div><?php endforeach; endif; else: echo "" ;endif; endif; ?>
					<div class="page">
						<?php echo ($show); ?>
					</div>
					
				</div>
				
			</div>
		</div>
	</body>
</html>