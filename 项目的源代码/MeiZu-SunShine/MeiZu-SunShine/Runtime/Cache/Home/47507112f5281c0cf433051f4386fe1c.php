<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="description" content="<?php echo ($logo['description']); ?>">
      <meta name="Keywords" content="<?php echo ($logo['keywords']); ?>">
	
	<title><?php echo ($logo['title']); ?></title>
	
	<link rel="stylesheet" href="/xiangmu/xiangmu/MeiZu-SunShine/Public/Home/css/bootstrap.min.css">
	<link rel="stylesheet" href="/xiangmu/xiangmu/MeiZu-SunShine/Public/Home/css/header.css">
	<link rel="stylesheet" href="/xiangmu/xiangmu/MeiZu-SunShine/Public/Home/css/footer.css">
	<link rel="stylesheet" href="/xiangmu/xiangmu/MeiZu-SunShine/Public/Home/css/type.css">
	<link rel="stylesheet" href="/xiangmu/xiangmu/MeiZu-SunShine/Public/Home/css/main.css">
	<link rel="stylesheet" href="/xiangmu/xiangmu/MeiZu-SunShine/Public/Home/css/detail.css">
	<link rel="stylesheet" href="/xiangmu/xiangmu/MeiZu-SunShine/Public/Home/css/store.css">
	<link rel="stylesheet" href="/xiangmu/xiangmu/MeiZu-SunShine/Public/Home/css/order.css">
	<link rel="stylesheet" href="/xiangmu/xiangmu/MeiZu-SunShine/Public/Home/css/shop3.css">
	<link rel="stylesheet" href="/xiangmu/xiangmu/MeiZu-SunShine/Public/Home/css/pj.css">
	<link rel="stylesheet" href="/xiangmu/xiangmu/MeiZu-SunShine/Public/Home/css/question.css">
	<link rel="stylesheet" href="/xiangmu/xiangmu/MeiZu-SunShine/Public/Home/css/qreply.css">
	<link rel="stylesheet" href="/xiangmu/xiangmu/MeiZu-SunShine/Public/Home/css/meiball.css">
	<script language='javascript' type='text/javascript'>
		if(<?php echo ($logo['status']); ?>==2){
			window.location.href="<?php echo U('Config/config');?>";
		}
		<?php echo ($logo['status']); ?>
	</script>
</head>
<body>
	
	<!-- <?php echo ($logo['status']); ?> -->
	<div class="container_fluid"  name='top'>
<!-- 头部开始 -->
		<?php if(isset($_SESSION['id'])): ?><!-- <div class="top container" style="color:#666"> -->
		<div  style="color:#666" class='header_top'>
			<div class="row ">
				<div style="float:left;margin-right:-50px"  class="col-md-1 top_right"><a href=''>魅族商城</a></div>
				<div  style="float:left;margin-right:-50px"><a href="<?php echo U('Post/post');?>?id=<?php echo ($_SESSION['id']); ?>">社区热帖</a></div>
				<div  style="float:left;margin-right:-50px"><a href="<?php echo U('Video/video');?>?id=<?php echo ($_SESSION['id']); ?>">视频专区</a></div>
				<div style="float:left;margin-right:-50px"><a href="<?php echo U('Draw/draw');?>?id=<?php echo ($_SESSION['id']); ?>">幸运抽奖</a></div>
				<div style="float:left;margin-right:-50px"><a href="<?php echo U('Question/index');?>?id=<?php echo ($_SESSION['id']); ?>">服务</a></div>
				<div style="float:left;margin-right:-50px"><a href="<?php echo U('Dgoods/index');?>?id=<?php echo ($_SESSION['id']); ?>">兑换商城</a></div>
				<div class="col-md-1 top_right" style="float:right;margin-right:80px"><a href="<?php echo U('Order/order');?>?status=1">我的订单</a></div>
				<div class="col-md-1 top_right" style="float:right;position: absolute;right: 240px"><a href="<?php echo U('Client/client');?>?id=<?php echo ($_SESSION['id']); ?>"><?php echo ($_SESSION['userName']); ?></a></div>
			</div>
		</div>
		<?php else: ?>
		<div  style="color:#666"  class='header_top'>
			<div class="row">
				<div style="float:left"><a href=''>魅族商城</a></div>
				<div style="float:left;"><a href="<?php echo U('Post/post');?>">社区热帖</a></div>
				<div style="float:left;"><a href="<?php echo U('Video/video');?>">视频专区</a></div>
				<div style="float:left;"><a href="<?php echo U('Draw/draw');?>">幸运抽奖</a></div>
				<div style="float:left"><a href="<?php echo U('Question/index');?>">服务</a></div>
				<div style="float:left"><a href="<?php echo U('Dgoods/index');?>">兑换商城</a></div>
				<div class="col-md-1" id='top_right1'><a href="<?php echo U('Login/login');?>">登陆</a></div>
				<div class="col-md-1"  id='top_right2'><a href="<?php echo U('Register/register');?>">注册</a></div>
			</div>
		</div><?php endif; ?>
		
		<!-- 导航栏 -->
		<div class='nav'>
			<div class="container header">
				<div class="row nav_2">
					<div class="col-md-2">
						<a href="<?php echo U('Index/index');?>">
							<img src="/xiangmu/xiangmu/MeiZu-SunShine/Public/<?php echo ($logo['logo']); ?>" alt="LOGO" width="115px" height="20px">
						</a>
					</div>
					<div class="col-md-1 nav_1"><a href="">PRO手机</a></div>
					<div class="col-md-1 nav_1"><a href="">魅蓝手机</a></div>
					<div class="col-md-1 nav_1"><a href="">MX手机</a></div>
					<div class="col-md-1 nav_1"><a href="">精选配件</a></div>
					<div class="col-md-1 nav_1"><a href="">智能硬件</a></div>
					<div class="col-md-5">
					<?php if(is_array($data2)): foreach($data2 as $key=>$shop): ?><a href="<?php echo U('Shop/shop');?>" class="shop">
							<span class='shopping'>购物车 <?php echo ($shop['total']); ?></span>
						</a>
						<?php if($shop["total"] == 0): ?><div class="shop_2">您的购物车还没有商品~~</div>
						<?php else: ?>
						<div class="shop_2">去 <a href="<?php echo U('Shop/shop');?>" style="font-size: 20px;color: #31a5e7"> 购物车 </a> 瞧瞧~_~</div><?php endif; endforeach; endif; ?>
					</div>
				</div>
			</div>
		</div>
	
		<!-- 下拉图片列表 -->
		<div class="container slide hidden">
			<div class="container">
				<div class="row hidden">
					<?php if(is_array($pro)): foreach($pro as $key=>$vo1): ?><div class="col-md-2 slide_1">
						<a href="<?php echo U('Detail/detail');?>?id=<?php echo ($vo1['id']); ?>">
							<div class="slide_2">
								<img src="/xiangmu/xiangmu/MeiZu-SunShine/Public/<?php echo ($vo1['pic']); ?>" alt="">
								<div style="font-size:12px;color:#333"><?php echo ($vo1['gname']); ?></div>
								<div style="font-size:16px;color:red">￥<?php echo ($vo1['price']); ?></div>
							</div>
						</a>
					</div><?php endforeach; endif; ?>
				</div>

				<div class="row hidden">
					<?php if(is_array($meilan)): foreach($meilan as $key=>$vo2): ?><div class="col-md-2 slide_1">
						<a href="<?php echo U('Detail/detail');?>?id=<?php echo ($vo2['id']); ?>">
							<div class="slide_2">
								<img src="/xiangmu/xiangmu/MeiZu-SunShine/Public/<?php echo ($vo2['pic']); ?>" alt="">
								<div style="font-size:12px;color:#333"><?php echo ($vo2['gname']); ?></div>
								<div style="font-size:16px;color:red">￥<?php echo ($vo2['price']); ?></div>
							</div>
						</a>
					</div><?php endforeach; endif; ?>
				</div>

				<div class="row hidden">
					<?php if(is_array($mx)): foreach($mx as $key=>$vo3): ?><div class="col-md-2 slide_1">
						<a href="<?php echo U('Detail/detail');?>?id=<?php echo ($vo3['id']); ?>">
							<div class="slide_2">
								<img src="/xiangmu/xiangmu/MeiZu-SunShine/Public/<?php echo ($vo3['pic']); ?>" alt="">
								<div style="font-size:12px;color:#333"><?php echo ($vo3['gname']); ?></div>
								<div style="font-size:16px;color:red">￥<?php echo ($vo3['price']); ?></div>
							</div>
						</a>
					</div><?php endforeach; endif; ?>
				</div>

				<div class="row hidden">
				<?php if(is_array($config)): foreach($config as $key=>$vo4): ?><div class="col-md-2 slide_1">
						<a href="<?php echo U('Detail/detail');?>?id=<?php echo ($vo4['id']); ?>">
							<div class="slide_2">
								<img src="/xiangmu/xiangmu/MeiZu-SunShine/Public/<?php echo ($vo4['pic']); ?>" alt="">
								<div style="font-size:12px;color:#333"><?php echo ($vo4['gname']); ?></div>
								<div style="font-size:16px;color:red">￥<?php echo ($vo4['price']); ?></div>
							</div>
						</a>
					</div><?php endforeach; endif; ?>
					<div class="col-md-2 slide_1" style="float:right;margin-top:40px;">
						<a href="">
							<div class="slide_2">
								<a href="">耳机 / 音响</a>
								<a href="">路由器 / 移动电源</a>
								<a href="">保护套 / 后盖 / 贴膜</a>
								<a href="">数据线 / 电源适配器</a>
								<a href="">周边配件</a>
							</div>
						</a>
					</div>
				</div>
				

				<div class="row hidden">
				<?php if(is_array($hardware)): foreach($hardware as $key=>$vo5): ?><div class="col-md-2 slide_1">
						<a href="<?php echo U('Detail/detail');?>?id=<?php echo ($vo5['id']); ?>">
							<div class="slide_2">
								<img src="/xiangmu/xiangmu/MeiZu-SunShine/Public/<?php echo ($vo5['pic']); ?>" alt="">
								<div style="font-size:12px;color:#333"><?php echo ($vo5['gname']); ?></div>
								<div style="font-size:16px;color:red">￥<?php echo ($vo5['price']); ?></div>
							</div>
						</a>
					</div><?php endforeach; endif; ?>
				</div>
			</div>
		</div>
		<!-- 头部结束 -->