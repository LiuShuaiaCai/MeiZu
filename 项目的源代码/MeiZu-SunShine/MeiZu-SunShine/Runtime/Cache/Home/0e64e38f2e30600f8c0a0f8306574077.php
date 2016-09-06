<?php if (!defined('THINK_PATH')) exit();?>		<!-- 引入头部 -->
		<?php echo W('Public/header');?>

		<!-- 内容开始 -->
		
	<div class="main">
		<div class="main01">
			<a href="">首页</a>
			<span>></span>
			<a href="">我的商城</a>
			<span>></span>
			<a id="" href="">我的订单</a>
		</div>
		<div class="container main02">
			<div class="row">
				<div class="col-md-3 main02-A">
					<span class="main02-span">
						<a href="">我的商城</a>
					</span>
					<p class="p1">订单中心</p>
					<a class="main02-a" href="">我的订单</a>
					<a class="main02-a" href="">我的回购单</a>
					<p class="p1" href="">个人中心</p>
					<a class="main02-a" href="<?php echo U('Shop/shop2');?>">地址管理</a>
					<a class="main02-a" href="">消息提醒</a>
					<a class="main02-a" href="">建议反馈</a>
					<p class="p1" href="">资产中心</p>
					<a class="main02-a" href="">我的回购券</a>
					<p class="p1" href="">服务中心</p>
					<a class="main02-a" href="">补办意外保</a>
					<a class="main02-a1" href="">以旧换新</a>
				</div>
				<!--右侧部分-->
				<div class="col-md-9 main02-B">
					<div>我的订单</div>
					<form action="<?php echo U('Order/order');?>" method="get">
						<input type="hidden" name='status' value="1">
						<input type="text" name='gname'>
						<input type="submit" value="搜索">
					</form>
					<div class="page"><?php echo ($show); ?></div>
					<div class="main02-01">
						<a id="order1" class="main02-01-a" href='<?php echo U("Order/order");?>?status=1'>全部订单</a>

						<span>|</span>

						<a id="order5" class="main02-01-a" href="<?php echo U('Order/order');?>?status=2">已付款</a>

						<span>|</span>

						<a id="order2" class="main02-01-a" href="<?php echo U('Order/order');?>?status=3">待付款</a>
						<span>|</span>

						<a id="order3" class="main02-01-a" href="<?php echo U('Order/order');?>?status=4">代发货</a>
						<span>|</span>

						<a id="order4" class="main02-01-a" href="<?php echo U('Order/order');?>?status=5">已发货</a>
						<span>|</span>

						<a id="order4" class="main02-01-a" href="<?php echo U('Order/order');?>?status=6">其它</a>
						
						<!-- <a class="main02-01-b" href="">手机查询订单</a> -->
					</div>

					<div class="main02-02">
						<ul class="main02-02ul">
							<li class="main02-02-lii">订单明细</li>
							<li class="main02-02-li">实付金额</li>
							<li class="main02-02-li">状态</li>
							<li class="main02-02-li">操作</li>
						</ul>
					</div>
					
					<!-- 遍历订单 -->
					<div display="block" id="status1" class="main02-03">
						<?php if(is_array($all)): foreach($all as $key=>$vo): ?><table class="o_table">
								<tr class="main02-02tr1">
									<td class="title" colspan="5">
										下单时间：<span><?php echo (date('Y_m-d h:i:s',$vo['orderTime'])); ?></span>
										&nbsp;&nbsp;&nbsp;&nbsp;
										订单号：<?php echo ($vo['number']); ?>
									</td>
								</tr>
								<tr class="main02-02tr2">
									<td class="main02-02td2">
									<img class="main02-02img" src="/xiangmu/xiangmu/MeiZu-SunShine/Public/<?php echo ($vo['pic']); ?>"></td>
									<td class="main02-02td3">
									<a href="<?php echo U('Detail/detail');?>?id=<?php echo ($vo['gid']); ?>">
									<div><?php echo ($vo['gname']); ?></div>
									<div><?php echo ($vo['net']); ?> <?php echo ($vo['color']); ?> <?php echo ($vo['mem']); ?>
									<span class="oprice"><?php echo ($vo['price']); ?></span> X <span class="osnum"><?php echo ($vo['snum']); ?></span></div></a>&nbsp;&nbsp;
									</td>
									<td class="main02-02td2 ototal"><?php echo ($vo['snum']); ?>*<?php echo ($vo['price']); ?></td>
									<td class="main02-02td2 status">
										<?php switch($vo["status"]): case "2": ?>已付款<?php break;?>
										<?php case "3": ?>未付款<?php break;?>
										<?php case "4": ?>待发货<?php break;?>
										<?php case "5": ?>已发货<?php break;?>
										<?php case "6": ?>订单已取消<?php break;?>
										<?php case "7": ?>已评价<?php break; endswitch;?>
									</td>
									<td class="main02-02td2">
										<ul class="main02-03-ul">
											<!-- <li><a class="main02-03-a now" href="<?php echo U('Shop/shop3');?>" id='buy'><?php echo ($vo['status']==3?'立即购买':''); ?></a></li> -->
											<li>
												<a href='javascript:;' class="concal"
												data='<?php echo ($vo["id"]); ?>'><?php echo ($vo['status']==3?'取消订单':''); ?>
												</a>
											</li>
											<li><a href="javascript:;" class='look' data='<?php echo ($vo["id"]); ?>'>查看详情</a></li>
											<li><a href="<?php echo U('Order/delete');?>?id=<?php echo ($vo['id']); ?>">删除订单</a></li>
											<li><a href="<?php echo U('Pj/index');?>?gid=<?php echo ($vo['gid']); ?>"><?php echo ($vo['status']==2?'去评价':''); ?></a></li>
										</ul>
									</td>
								</tr>
							</table><?php endforeach; endif; ?>
						<div class="page"><?php echo ($show); ?></div>
					</div>
				</div>	
				<!-- 订单详情 -->
				<div class='l_detail'>
					<div class="l_close">X</div>
					<div class="con_detail">
						<div class="l_user">
							<span>收货人：</span>
							<span class="l_name"></span>
							<span>电话：</span>
							<span class="l_phone"></span>
						</div>
						<div class="l_adress">
							<span>地址：</span>
							<span class="l_a"></span>
						</div>
						<div class="l_goods">
							<span class="l_pic">
								<span class="l_img"><img src="" alt=""></span>
								<span class="l_con">
									<span class="l_c1"></span>
									<span class="l_c2"></span>
								</span>
							</span>
							<div class="l_order">
								<span>订单号：</span>
								<span class="l_o"></span>
							</div>
							<div class="l_num">
								<span>商品数量：</span>
								<span class="l_n"></span>
							</div>
							<div class="l_price">
								<span>商品价格：</span>
								<span class="l_g"></span>
							</div>
							<div class="l_status">
								<span>订单状态：</span>
								<span class="l_s"></span>
							</div>
							<div class="l_time">
								<span>下单时间：</span>
								<span class='l_t'></span>
							</div>
						</div>
					</div>			
				</div>
			</div>
		</div>
	</div>	
	
		<!-- 内容结束 -->
		
		<!-- 引入尾部 -->
		<?php echo W('Public/footer');?>

	</div>
	<script>var url = '/xiangmu/xiangmu/MeiZu-SunShine/index.php/Home'</script>
	<script>var src = '/xiangmu/xiangmu/MeiZu-SunShine/Public'</script>
	<script src='/xiangmu/xiangmu/MeiZu-SunShine/Public/Home/js/jquery-1.11.3.min.js'></script>
	<script src='/xiangmu/xiangmu/MeiZu-SunShine/Public/Home/js/bootstrap.min.js'></script>
	<script src='/xiangmu/xiangmu/MeiZu-SunShine/Public/Home/js/jQuery.md5.js'></script>
	<script src='/xiangmu/xiangmu/MeiZu-SunShine/Public/Home/js/header.js'></script>
	<script src='/xiangmu/xiangmu/MeiZu-SunShine/Public/Home/js/index.js'></script>
	<script src='/xiangmu/xiangmu/MeiZu-SunShine/Public/Home/js/detail.js'></script>
	<script src='/xiangmu/xiangmu/MeiZu-SunShine/Public/Home/js/shop.js'></script>
	<script src='/xiangmu/xiangmu/MeiZu-SunShine/Public/Home/js/shop2.js'></script>
	<script src='/xiangmu/xiangmu/MeiZu-SunShine/Public/Home/js/shop3.js'></script>
	<script src='/xiangmu/xiangmu/MeiZu-SunShine/Public/Home/js/order.js'></script>
	
	
	
	<script src='/xiangmu/xiangmu/MeiZu-SunShine/Public/Home/js/footer.js'></script>
</body>
</html>