<?php if (!defined('THINK_PATH')) exit();?>		<!-- 引入头部 -->
		<?php echo W('Public/header');?>

		<!-- 内容开始 -->
		
	<div class="container type" >
		<div class="row title">
			<a href="<?php echo U('Index/index');?>">首页</a>
			<span>></span>
			商品分类
		</div>
		<div class="row type_1 tp" >
			<ul>
				<?php if(is_array($typeData)): foreach($typeData as $key=>$vo): ?><a href="<?php echo U('Type/type',array('id'=>$vo['id']));?>" value="<?php echo ($vo['id']); ?>"><li class="li"><?php echo ($vo['tname']); ?></li></a><?php endforeach; endif; ?>	
			</ul>
		</div>
		<?php if(is_array($data)): foreach($data as $key=>$vo2): ?><div class="col-md-3 type_3">
			<div class="type_4">
				<div class="type_5">
					<a href="<?php echo U('Detail/detail');?>?id=<?php echo ($vo2['id']); ?>" >
						<img src="/xiangmu/xiangmu/MeiZu-SunShine/Public/<?php echo ($vo2['pic']); ?>" alt="">
					</a>
				</div>
				<div class="type_6"><a href=""><?php echo ($vo2['gname']); ?> </a></div>
				<div class="type_6"><a href=""><del>¥ 1099</del>&nbsp;&nbsp;&nbsp;<span>¥<?php echo ($vo2['price']); ?></span></a></div>
			</div>
		</div><?php endforeach; endif; ?>
		

	</div>
	<!-- 热品推荐 -->
			<div class="container" >
				<div class="row hot" >
					<div class="row hot_1">
						<div class="hot_2">为您推荐</div>
						<div class="hot_3">
							<a href="javascript:void(0)"  id='left'><div><img src="/xiangmu/xiangmu/MeiZu-SunShine/Public/Home/images/arrow-r.png" alt=""></div></a>
							<a href="javascript:void(0)"  id='right'><div style="margin-right:10px"><img src="/xiangmu/xiangmu/MeiZu-SunShine/Public/Home/images/arrow-l.png" alt=""></div></a>
						</div>
					</div>
					<div class="row2">
						<div class="row hot_4">
							
							<?php if(is_array($datar)): foreach($datar as $key=>$vo): ?><a href="" class="hot_5">
								<img src="/xiangmu/xiangmu/MeiZu-SunShine/Public/<?php echo ($vo['pic']); ?>" alt="">
								<div class="hot_7">
									<h4><?php echo ($vo['gname']); ?></h4>
									<h6><?php echo ($vo['desc']); ?></h6>
									<p>¥<?php echo ($vo['price']); ?></p>
								</div>
							</a><?php endforeach; endif; ?>
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
	
<script src="/xiangmu/xiangmu/MeiZu-SunShine/Public/Home/js/type.js"></script>

	<script src='/xiangmu/xiangmu/MeiZu-SunShine/Public/Home/js/footer.js'></script>
</body>
</html>