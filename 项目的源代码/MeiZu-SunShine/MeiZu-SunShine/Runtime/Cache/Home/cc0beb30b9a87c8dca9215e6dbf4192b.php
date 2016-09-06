<?php if (!defined('THINK_PATH')) exit();?>		<!-- 引入头部 -->
		<?php echo W('Public/header');?>

		<!-- 内容开始 -->
		
	<!--购物车top-->
	<div class="store_top">
		<img src="/xiangmu/xiangmu/MeiZu-SunShine/Public/Home/images/liu.gif" alt="">
	</div>

	<!---购物车center1-->
	
	<div class="store_center1">
		<table class="table">
				<tr>
					<th>
						<input type="checkbox" name="all" id="all" value="">
					</th>
					<th width="500px">商品</th>
					<th>单价</th>
					<th>购买数量</th>
					<th>小计</th>
					<th>操作</th>
				</tr>
					
			<?php if(is_array($data)): foreach($data as $key=>$vo): ?><tr class='shangpin'>
						<th><input data="<?php echo ($vo['sid']); ?>" type="checkbox" name="" class="every" value=""></th>
						<td>
							<div class="goods">
								<div class="pic"><img src="/xiangmu/xiangmu/MeiZu-SunShine/Public/<?php echo ($vo['pic']); ?>" alt=""></div>
								<div class="texts">
									<div class="text"><?php echo ($vo['gname']); ?></div>
									<div class="text">
										<span><?php echo ($vo['net']); ?></span>
										<span><?php echo ($vo['color']); ?></span>
										<span><?php echo ($vo[mem]); ?></span>
									</div>
								</div>
							</div>
						</td>
						<td class="jiage">
							<div class="td1"><span>￥</span><span class='pri'><?php echo ($vo['price']); ?></span></div>
						</td>
						<td class="shu">
							<div class="nu">
								<a href="javascript:;"><span class='n jian'>-</span></a>

								<span class="td1 n b" data="<?php echo ($vo['sid']); ?>" ><?php echo ($vo['nums']); ?></span>

								<a href="javascript:;"><span class='n jia'>+</span></a>
							</div> 
						</td>
						<td class="p">
							<div class="td1">
								<span>￥</span>
								<span class='price'><?php echo ($vo['nums']*$vo['price']); ?></span>
							</div>
						</td>
						<td class="delete"><div class="td1"><a href="javascript:;" class="del">删除</a></div></td>
				</tr><?php endforeach; endif; ?>
		</table>
		<div height='140px' id='empty'>
			<div>
				<img src="/xiangmu/xiangmu/MeiZu-SunShine/Public/Home/images/002.gif" alt="">
				<span>您的购物车中还没有商品，快选购吧</span>
			</div>
		</div>
	</div>

	<!---购物车center2-->
	<div class="store_center2">
		<div class="shang">
			<div style="height:50px;margin-top:20px">
				<div style="float:left;width:100px;">商品总额</div>
				<div style="float:right;width:100px;"><span>￥</span><span id='total'>0.00</span></div>
			</div>
			
			<div style="height:50px">
				<div style="float:left;width:100px;">套餐优惠</div>
				<div style="float:right;width:100px;"><span class='a'>￥</span><span id='tao' class='tao'>0.00</span></div>
			</div>
			<div style="height:50px">
				<div style="float:left;width:100px;">折扣</div>
				<div style="float:right;width:100px;"><span class='a'>￥</span><span id='sale' class='sale'>0.00</span></div>
			</div>
		</div>
		<div class="xia">
			<div style="height:50px;margin-top:20px">
				<div style="float:left;width:100px;margin-left:870px">应付</div>
				<div style="float:right;width:100px;"><span class='c'>￥</span><span id='copy2' class='copy'>0.00</span></div>
			</div>
			<div style="height:50px;">
				<div style="float:left;width:120px;margin-left:800px"><a href="<?php echo U('Index/index');?>" style="color:#31A5E7;font-size:20px;text-decoration:none">继续购物 &nbsp; > </a> </div>
				<a href="javascript:;">
					<div style="float:right;width:150px;background:#31A5E7;height:50px;line-height:50px;text-align:center;color:#fff;font-size:20px" id='jisuan'>去结算</div>
				</a>
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