<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	
	<title>煤球商城</title>
	
	<link rel="stylesheet" href="/xiangmu/MeiZu-SunShine/Public/Home/css/bootstrap.min.css">
	<link rel="stylesheet" href="/xiangmu/MeiZu-SunShine/Public/Home/css/header.css">
	<link rel="stylesheet" href="/xiangmu/MeiZu-SunShine/Public/Home/css/footer.css">
	
	<link rel="stylesheet" href="/xiangmu/MeiZu-SunShine/Public/Home/css/meiball.css">
	<style>

	</style>
	<script src="/xiangmu/MeiZu-SunShine/Public/Home/js/jquery-1.11.3.min.js"></script>
</head>
<body>
	<!-- 引入头部 -->
		<!doctype html>
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
	<link rel="stylesheet" href="/xiangmu/MeiZu-SunShine/Public/Home/css/pj.css">
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
				<div style="float:left;margin-right:20px"  class="col-md-1 top_right"><a href=''>魅族商城</a></div>
				<div  style="float:left;margin-right:20px"><a href="<?php echo U('Post/post');?>?id=<?php echo ($_SESSION['id']); ?>">社区热帖</a></div>
				<div  style="float:left;margin-right:20px"><a href="<?php echo U('Video/video');?>?id=<?php echo ($_SESSION['id']); ?>">视频专区</a></div>
				<div style="float:left;margin-right:20px"><a href="<?php echo U('Draw/draw');?>?id=<?php echo ($_SESSION['id']); ?>">幸运抽奖</a></div>
				<div style="float:left;margin-right:20px"><a href="<?php echo U('Question/index');?>?id=<?php echo ($_SESSION['id']); ?>">服务</a></div>
				<div style="float:left;margin-right:20px"><a href="<?php echo U('Meiball/index');?>?id=<?php echo ($_SESSION['id']); ?>">兑换商城</a></div>
				<div class="col-md-1 top_right" style="float:right;margin-right:20px"><a href="<?php echo U('Order/order');?>?status=1">我的订单</a></div>
				<div class="col-md-1 top_right" style="float:right;margin-right:20px"><a href="<?php echo U('Client/client');?>?id=<?php echo ($_SESSION['id']); ?>"><?php echo ($_SESSION['userName']); ?></a></div>
			</div>
		</div>
		<?php else: ?>
		<div  style="color:#666"  class='header_top'>
			<div class="row">
				<div style="float:left"><a href=''>魅族商城</a></div>
				<div style="float:left;margin-left:20px"><a href="<?php echo U('Post/post');?>">社区热帖</a></div>
				<div style="float:left;margin-left:20px"><a href="<?php echo U('Video/video');?>">视频专区</a></div>
				<div style="float:left;margin-left:20px"><a href="<?php echo U('Draw/draw');?>">幸运抽奖</a></div>
				<div style="float:left;margin-left:20px"><a href="<?php echo U('Question/index');?>">服务</a></div>
				<div style="float:left;margin-left:20px"><a href="<?php echo U('Meiball/index');?>">兑换商城</a></div>
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
							<img src="/xiangmu/MeiZu-SunShine/Public/<?php echo ($logo['logo']); ?>" alt="LOGO">
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
						<a href="<?php echo U('Detail/detail');?>?id=<?php echo ($vo5['id']); ?>">
							<div class="slide_2">
								<img src="/xiangmu/MeiZu-SunShine/Public/<?php echo ($vo5['pic']); ?>" alt="">
								<div style="font-size:12px;color:#333"><?php echo ($vo5['gname']); ?></div>
								<div style="font-size:16px;color:red">￥<?php echo ($vo5['price']); ?></div>
							</div>
						</a>
					</div><?php endforeach; endif; ?>
				</div>
			</div>
		</div>
		<!-- 头部结束 -->
	<!-- 内容开始 -->
	<div style="background-color:#F2F2F2">
		<div class="container">
			<div class="row" style="margin:0px;">
				<div class="col-md-6 " style="padding:0px; margin:20px 0;">
					<ul class="main-01">
						<li class="main-01-li">
							<a class="main-01-a" href="">首页</a>
							<span>|</span>
						</li>
						<li class="main-01-li">
							<a class="main-01-a" href="">板块</a>
							<span>|</span>
						</li>
						<li class="main-01-li">
							<a class="main-01-a" href="">魅友家</a>
							<span>|</span>
						</li>
						<li class="main-01-li">
							<a class="main-01-a" href="">魅玩帮</a>
							<span>|</span>
						</li>
						
					</ul>
				</div>
			</div>
				<!--  -->
			<div class="main-02">
				<img class="col-md-12" src="/xiangmu/MeiZu-SunShine/Public/Home/images/164728x8z9qyqxzp84e4j4.png" alt="">
			</div>

				<!-- 主要内容 -->
			<div class="main-03">
				<p class="main-03-p">
					<span class="main-03-span">
						<img src="/xiangmu/MeiZu-SunShine/Public/Home/images/logo.png" alt="">
					</span>
					<span class="main-03-span">
						兑换商城
					</span>
				</p>
				<p class="main-03-p1">
					<span class="main-03-span">我的积分：</span>
					<span>|</span>
					<span class="main-03-span">购物车（0）</span>
					<span>|</span>
					<span class="main-03-span">我的兑换记录</span>
				</p>
			</div>
				<!-- 兑换商品区 -->
			<div class="main-04" style="background-color:#ffffff;">
				
					<p class="main-04-p"><span class="main-04-span">全部</span></p>
					<p class="main-04-p">礼品兑换</p>
			
					<p class="main-04-pp">按价格筛选</p>
			</div>

			
				
				<ul class="container main-05-ul" style="background-color:#ffffff;">
				<?php if(is_array($data)): foreach($data as $key=>$vo): ?><li class="main-05-li">
						<img src="/xiangmu/MeiZu-SunShine/Public/<?php echo ($vo['pic']); ?>" alt="">
						<p><?php echo ($vo['name']); ?></p>
						<p><?php echo ($vo['price']); ?>积分</p>
						<div class="main-05-div" style="display:none">
							<p><?php echo ($vo['name']); ?></p>
							<p><?php echo ($vo['price']); ?></p>
							<p><a class="main-05-a" href="">兑换</a></p>
						</div>
					</li><?php endforeach; endif; ?>
					
				</ul>
	
			

		</div>
	</div>
	<!-- 引入底部文件 -->
	<!-- 尾部开始 -->
		<div class="container_fluid footer">
			<div class="container footer_1">
				<div class="row">
					<div class="row footer_2">
						<div class="footer_3">
							<img src="/xiangmu/MeiZu-SunShine/Public/Home/images/7.png" alt="">
							<p><span>7天 </span><span>无理由退款</span></p>
						</div>
						<div class="footer_4"></div>
						<div class="footer_3">
							<img src="/xiangmu/MeiZu-SunShine/Public/Home/images/15.png" alt="">
							<p><span>15天 </span><span>换货保障</span></p>
						</div>
						<div class="footer_4"></div>
						<div class="footer_3">
							<img src="/xiangmu/MeiZu-SunShine/Public/Home/images/1.png" alt="">
							<p><span>1天 </span><span>免费保修</span></p>
						</div>
						<div class="footer_4"></div>
						<div class="footer_3">
							<img src="/xiangmu/MeiZu-SunShine/Public/Home/images/baoyou.png" alt="">
							<p><span>全场 </span><span>包邮</span></p>
						</div>
						<div class="footer_4"></div>
						<div class="footer_3">
							<img src="/xiangmu/MeiZu-SunShine/Public/Home/images/map.png" alt="">
							<p><span>2000多家 </span><span>专卖店</span></p>
						</div>
					</div>
				</div>
			</div>
			
			
			<div class="container firend">
				<div class="row firend_1">友情链接</div>
				<div class="row firend_2">
					<?php if(is_array($link)): foreach($link as $key=>$vo): ?><a href=""><?php echo ($vo['linkname']); ?></a><?php endforeach; endif; ?>
				</div>
			</div>

			<div class="container footer_5">
				<div class="footer_6">
					<h4>帮助说明</h4>
					<ul>
						<li><a href="">支付方式</a></li>
						<li><a href="">配送说明</a></li>
						<li><a href="">售后服务</a></li>
						<li><a href="">付款帮助</a></li>
					</ul>
				</div>
				<div class="footer_6">
					<h4>Flyme OS</h4>
					<ul>
						<li><a href="">云服务</a></li>
						<li><a href="">固件下载</a></li>
						<li><a href="">软件商店</a></li>
						<li><a href="">查找手机</a></li>
					</ul>
				</div>
				<div class="footer_6">
					<h4>关于我们</h4>
					<ul>
						<li><a href="">关于魅族</a></li>
						<li><a href="">加入我们</a></li>
						<li><a href="">联系我们</a></li>
						<li><a href="">法律声明</a></li>
					</ul>
				</div>
				<div class="footer_6">
					<h4>关注我们</h4>
					<ul>
						<li><a href="">新浪微博</a></li>
						<li><a href="">腾讯微博</a></li>
						<li><a href="">QQ空间</a></li>
						<li><a href="javascript:void(0)" id='weixin'>官方微信</a></li>
					</ul>
					<div class="weixin"><img src="/xiangmu/MeiZu-SunShine/Public/Home/images/weixin.png" alt=""></div>
				</div>
				
				<div class="footer_6">
					<h4>24小时全国服务热线</h4>
					<ul>
						<li id='tel'><a href="">400-788-3333</a></li>
						<li id='last'><a href="javascript:void(0)"  ><img src="/xiangmu/MeiZu-SunShine/Public/Home/images/xiaoshi.png" alt="">24小时在线客服</a></li>
					</ul>
				</div>
			</div>

			<div class="container footer_7">
				<p>	
					<span id='copy'><?php echo ($copys['copys']); ?>. Ltd. All rights reserved.</span>
					<a href="">备案号：粤ICP备13003602号-2</a>
					<a href="">经营许可证编号：粤B2-20130198</a>
					<a href="">营业执照 </a>
					<a href=""><img src="/xiangmu/MeiZu-SunShine/Public/Home/images/footer-copy-1.png" alt=""></a>
					<a href=""><img src="/xiangmu/MeiZu-SunShine/Public/Home/images/footer-copy-2.png" alt=""></a>
					<a href=""><img src="/xiangmu/MeiZu-SunShine/Public/Home/images/trust-icon.png" alt=""></a>
				</p>
			</div>
			<a href="#top" title="回到顶部" class="backtop"></a>
		</div>
		<!-- 尾部结束 -->

	<script>
	// $('.main-05-li').each(function(){
	// 	$(this).mouseover(function(){
	// 		$(this).css('background-color','#7F7F7F');
	// 		$('.main-05-div').css('display','block');
	// 	}).mouseout(function(){
	// 		$(this).css('background-color','');
	// 		$('.main-05-div').css('display','none');
	// 	})
	// })
	$('.main-05-li').mouseover(function(){
		$(this).css('background-color','#7F7F7F');
		$(this).find('.main-05-div').css('display','block');
		// $('.main-05-li').find('.main-05-a').css('display','block');
	}).mouseout(function(){
		$(this).css('background-color','');
		$(this).find('.main-05-div').css('display','none');
		// $('.main-05-li').find('.main-05-a').css('display','none');
	})
			
	</script>
</body>
</html>