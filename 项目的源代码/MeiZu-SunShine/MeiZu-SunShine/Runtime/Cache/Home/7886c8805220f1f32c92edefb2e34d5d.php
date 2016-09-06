<?php if (!defined('THINK_PATH')) exit();?>		<!-- 引入头部 -->
		<?php echo W('Public/header');?>

		<!-- 内容开始 -->
		
		<div class="container main">
			<!-- banner轮播图开始 -->
			<div class="container banner">
			<?php if(is_array($banner)): foreach($banner as $key=>$vo0): ?><a href="">
					<img id='img' src="/xiangmu/xiangmu/MeiZu-SunShine/Public/<?php echo ($vo0['src']); ?>" alt="" style="display:none">
				</a><?php endforeach; endif; ?>
				<ul class="num">
					<li style="background:#00c3f5"></li><li></li><li></li><li></li><li></li><li></li>
				</ul>
			</div>
			<!-- banner轮播图结束 -->

			<!-- banner左侧开始 -->
			<div class="container banner_left">
				<div class="row">
					<div class="col-md-2 banner_2">
						<a href="<?php echo U('Type/type');?>">全部商品分类</a>
						<?php if(is_array($tree)): foreach($tree as $key=>$vo): ?><a href="" class="a" name='a' value="<?php echo ($vo['id']); ?>"><?php echo ($vo['tname']); ?></a><?php endforeach; endif; ?>
					</div>
					
					<?php if(is_array($tree)): foreach($tree as $key=>$vo): ?><div class="col-md-3 col-md-offset-2 banner_4">
						<div class="col-md-4 banner_3"></div>
	
						<div class="col-md-8 banner_8"></div>
					</div><?php endforeach; endif; ?>
					
				</div>
			</div>
			<!-- banner左侧结束 -->

			<!-- 预售 -->
			<div class="container ready">
				<div class="row ready_1">
					<div class="ready_2">
					<!-- <marquee direction='up' scrollamount='1' behavior='alternate' onmouseover='stop()' onmouseout='start()'> -->
					<?php if(is_array($notice)): foreach($notice as $key=>$vo3): ?><a href=""><div class="notice"><?php echo ($vo3['content']); ?></div></a><?php endforeach; endif; ?>
					<!-- </marquee> -->
					</div>
					<a href=""><div class="ready_2"><img src="/xiangmu/xiangmu/MeiZu-SunShine/Public/Home/images/y1.jpg" alt=""></div></a>
					<a href=""><div class="ready_2"><img src="/xiangmu/xiangmu/MeiZu-SunShine/Public/Home/images/y2.jpg" alt=""></div></a>
					<a href=""><div class="ready_2"><img src="/xiangmu/xiangmu/MeiZu-SunShine/Public/Home/images/y3.jpg" alt=""></div></a>
					<a href=""><div class="ready_2"><img src="/xiangmu/xiangmu/MeiZu-SunShine/Public/Home/images/y4.png" alt=""></div></a>
				</div>
			</div>

			<!-- 热品推荐 -->
			<div class="container">
				<div class="row hot">
					<div class="row hot_1">
						<div class="hot_2">热品推荐</div>
						<div class="hot_3">
							<a href="javascript:void(0)"  id='left'><div><img src="/xiangmu/xiangmu/MeiZu-SunShine/Public/Home/images/arrow-r.png" alt=""></div></a>
							<a href="javascript:void(0)"  id='right'><div style="margin-right:10px"><img src="/xiangmu/xiangmu/MeiZu-SunShine/Public/Home/images/arrow-l.png" alt=""></div></a>
						</div>
					</div>
					<div class="row2">
						<div class="row hot_4">
							<a href="" class="hot_5 hot_6"><img src="/xiangmu/xiangmu/MeiZu-SunShine/Public/Home/images/hot1.jpg" alt=""></a>

							<?php if(is_array($hots)): foreach($hots as $key=>$vo4): ?><a href="" class="hot_5" value="">
								<div class="hot_5_1">
								<div class="stat"><?php echo ($vo4['hot']); ?></div>
								<img src="/xiangmu/xiangmu/MeiZu-SunShine/Public/<?php echo ($vo4['pic']); ?>" alt="">
								</div>
								<div class="hot_7">
									<h4><?php echo ($vo4['gname']); ?></h4>
									<h6><?php echo ($vo4['desc']); ?></h6>
									<p>￥<?php echo ($vo4['price']); ?></p>
								</div>
							</a><?php endforeach; endif; ?>
						</div>
					</div>
				</div>
			</div>

			<!-- 手机 精选配件 智能硬件 手机周边 -->
			<?php if(is_array($arr)): foreach($arr as $k=>$vo5): ?><div class="container">
				<div class="row phone">
					<div class="row hot_1">
						<div class="hot_2"><?php echo ($k); ?></div>
						<div class="hot_3">
							<a href="javascript:void(0)"  id='left'>
								<div id="more"><span>更多</span><img src="/xiangmu/xiangmu/MeiZu-SunShine/Public/Home/images/pkg-home_z.png" alt=""></div>
							</a>
							
						</div>
					</div>
					<div class="row2 row2_1">
						<div class="row hot_4_1 phone_1">
							<!-- <a href="" class="hot_5 hot_6 hot_6_2"><img src="/xiangmu/xiangmu/MeiZu-SunShine/Public/Home/images/<?php echo ($img[image]); ?>" alt=""></a> -->
							<!-- 开始遍历 -->
							<?php if(is_array($vo5)): foreach($vo5 as $key=>$vo6): ?><a href="" class="hot_5">
							
								<div class="hot_5_1">
								<div class="stat"><?php echo ($vo6['hot']); ?></div>
									<img src="/xiangmu/xiangmu/MeiZu-SunShine/Public/<?php echo ($vo6['pic']); ?>" alt="">
								</div>
								<div class="hot_7">
									<h4><?php echo ($vo6['gname']); ?></h4>
									<h6><?php echo ($vo6['desc']); ?></h6>
									<p>￥<?php echo ($vo6['price']); ?></p>
								</div>
							</a><?php endforeach; endif; ?>
							<!-- 遍历结束 -->
						</div>
					</div>
				</div>
			</div><?php endforeach; endif; ?>
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