<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<link href="/xiangmu/xiangmu/MeiZu-SunShine/Public/Home/css/video.css" type="text/css" rel="Stylesheet"/>
		<script src="/xiangmu/xiangmu/MeiZu-SunShine/Public/Home/js/jquery-1.8.3.min.js"></script>
	</head>
	<body>
		<div class="main">
			<div class="top">
				<div class="img">
					<img src="/xiangmu/xiangmu/MeiZu-SunShine/Public/Home/images/index.jpg" width="120px" height="120px">
				</div>
				<div class="font">
					魅族科技
				</div>
			</div>
			<div class="center">
				<div class="menu">
					<a href="<?php echo U('Index/index');?>" id="menu">主页</a>
				</div>
				<div class="menu">
					<a href="" id="menu">魅族商品</a>
				</div>
				<div class="menu">
					<a href="" id="menu">视频</a>
				</div>
				<div class="menu">
					<a href="" id="menu">播单</a>
				</div>
				<div class="menu">
					<a href="" id="menu">店铺</a>
				</div>
				<div class="form">
					<form action="<?php echo ('Video/video');?>" method="get">
						<input type="text" name="content" placeholder="搜索视频">
						<input type="submit" value="搜索">
					</form>
				</div>
			</div>
			<div class="bottom">
				<div class="video">
					<span class="a">视频</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					<span style="font-size:14px;">共<?php echo ($count); ?>个视频</span>
				</div>
				<?php if(is_array($data)): foreach($data as $key=>$vo): ?><div class="film" style="float:left;">
					<div class="detail">
							<?php echo ($vo["content"]); ?>
					</div>
					<div class="movie">	
						<video controls width="300px" height="300px">
							<source src="/xiangmu/xiangmu/MeiZu-SunShine/Public/<?php echo ($vo['src']); ?>" type="video/webm"/>
						</video>
					</div>	
				</div><?php endforeach; endif; ?>
				<div class="page">
				<?php echo ($show); ?>
				</div>
			</div>
			
			<!--<script>
				
					$(window).scroll(function(){
						//文档高度
						var dHeight=$(document).height();
						//滚动高度
						var sHeight=$(document).scrollTop();
						
						//窗口高度
						var wHeight=$(window).height();
						
						if(dHeight-sHeight-wHeight<50){
							$.get('<?php echo U('Video/ajax');?>',function(msg){
								var str='';
								console.log(msg);
								for (var i in msg){
									str+='<div class="detail">'+msg[i]['content']+'</div>';
									str+='<div class="movie">';
									str+='<video controls width="300px" height="300px">';
									str+='<source src="/xiangmu/xiangmu/MeiZu-SunShine/Public/'+msg[i]['src']+'" type="video/mp4">';
									str+='</video>';
									str+='</div>';
								}
								console.log(str);
								$('.film').append(str);
							})
							
						}
						
						
					})
				
			</script>-->
		</div>
	</body>
</html>