<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="description" content="<?php echo ($logo['description']); ?>">
      <meta name="Keywords" content="<?php echo ($logo['keywords']); ?>">
	
	<title><?php echo ($logo['title']); ?></title>
	
	<link rel="stylesheet" href="/xiangmu/MeiZu-SunShine/Public/Home/css/bootstrap.min.css">
	<link rel="stylesheet" href="/xiangmu/MeiZu-SunShine/Public/Home/css/header.css">
	<link rel="stylesheet" href="/xiangmu/MeiZu-SunShine/Public/Home/css/footer.css">
	<link rel="stylesheet" href="/xiangmu/MeiZu-SunShine/Public/Home/css/type.css">
	<link rel="stylesheet" href="/xiangmu/MeiZu-SunShine/Public/Home/css/main.css">
	<link rel="stylesheet" href="/xiangmu/MeiZu-SunShine/Public/Home/css/detail.css">
	<link rel="stylesheet" href="/xiangmu/MeiZu-SunShine/Public/Home/css/store.css">
	<link rel="stylesheet" href="/xiangmu/MeiZu-SunShine/Public/Home/css/order.css">
	<link rel="stylesheet" href="/xiangmu/MeiZu-SunShine/Public/Home/css/shop3.css">
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
		<div class="top container" style="color:#666">
			<div class="row">
				<div class="col-md-9 top_left"><a href=''>魅族商城</a></div>
				<div class="col-md-1 top_right"><a href=''>我的订单</a></div>
				<div class="col-md-1 top_right"><a href=''>登录</a></div>
				<div class="col-md-1 top_right"><a href=''>注册</a></div>
			</div>
		</div>
		<!-- 导航栏 -->
		<div class='nav'>
			<div class="container header">
				<div class="row nav_2">
					<div class="col-md-2">
						<a href="">
							<img src="/xiangmu/MeiZu-SunShine/Public/<?php echo ($logo['logo']); ?>" alt="LOGO">
						</a>
					</div>
					<div class="col-md-1 nav_1"><a href="">PRO手机</a></div>
					<div class="col-md-1 nav_1"><a href="">魅蓝手机</a></div>
					<div class="col-md-1 nav_1"><a href="">MX手机</a></div>
					<div class="col-md-1 nav_1"><a href="">精选配件</a></div>
					<div class="col-md-1 nav_1"><a href="">智能硬件</a></div>
					<div class="col-md-5">
						<a href="<?php echo U('Shop/shop');?>" class="shop">
							<span class='shopping'>购物车 0</span>
						</a>
						<div class="shop_2">您的购物车还没有商品~~</div>
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
								<img src="/xiangmu/MeiZu-SunShine/Public/<?php echo ($vo1['pic']); ?>" alt="">
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
								<img src="/xiangmu/MeiZu-SunShine/Public/<?php echo ($vo2['pic']); ?>" alt="">
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
								<img src="/xiangmu/MeiZu-SunShine/Public/<?php echo ($vo3['pic']); ?>" alt="">
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
								<img src="/xiangmu/MeiZu-SunShine/Public/<?php echo ($vo4['pic']); ?>" alt="">
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
						<a href="">
							<div class="slide_2">
								<img src="/xiangmu/MeiZu-SunShine/Public/<?php echo ($vo5['pic']); ?>" alt="">
								<div style="font-size:12px;color:#333"><?php echo ($vo5['gname']); ?></div>
								<div style="font-size:16px;color:red">￥<?php echo ($vo5['price']); ?></div>
							</div>
						</a>
					</div><?php endforeach; endif; ?>
					<div class="col-md-2 slide_1">
						<a href="">
							<div class="slide_2">
								<img src="/xiangmu/MeiZu-SunShine/Public/Home/images/pro5.png" alt="">
								<div style="font-size:12px;color:#333">PRO5</div>
								<div style="font-size:16px;color:red">￥2799</div>
							</div>
						</a>
					</div>
					<div class="col-md-2 slide_1">
						<a href="">
							<div class="slide_2">
								<img src="/xiangmu/MeiZu-SunShine/Public/Home/images/pro5.png" alt="">
								<div style="font-size:12px;color:#333">PRO5</div>
								<div style="font-size:16px;color:red">￥2799</div>
							</div>
						</a>
					</div>
				</div>
			</div>
		</div>
		<!-- 头部结束 -->