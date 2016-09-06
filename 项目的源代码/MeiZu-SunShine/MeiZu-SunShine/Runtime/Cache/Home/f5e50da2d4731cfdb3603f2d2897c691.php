<?php if (!defined('THINK_PATH')) exit();?>		<!-- 引入头部 -->
		<?php echo W('Public/header');?>

		<!-- 内容开始 -->
		
	<!--购物车top-->
	<div class="container success">
		<div class="dui"></div>
		<div class="deta">
			<div class="deta_1">
				<input type="hidden" class='balance' value="<?php echo ($balance['idealMoney']); ?>">
				<h2>订单提交成功，应付金额 <span class="scopy"><?php echo ($cop); ?></span> 元</h2>
				<p>订单号：<span class="order"><?php echo ($order_id); ?></span>    请您在 1日 内完成支付，否则订单会被自动取消</p>
			</div>
			
			<div class="deta_2">
				<?php if(is_array($shang)): foreach($shang as $key=>$vo): ?><div class="deta_2_1 gs" data="<?php echo ($vo['id']); ?>">
					<span class='deta_2_2'>商品</span>
					<div class='deta_2_3'>
						<div><?php echo ($vo['gname']); ?></div>
						<div>
						<?php echo ($vo['desc']); ?> - <?php echo ($vo['color']); ?> X <?php echo ($vo['snum']); ?> 
						</div>
					</div>
				</div><?php endforeach; endif; ?>
				<!-- 立即购买 -->
				<div class="deta_2_1 nm" data="<?php echo ($buy['id']); ?>">
					<span class='deta_2_2'>商品</span>
					<div class='deta_2_3'>
						<div><?php echo ($buy['gname']); ?></div>
						<div>
							<?php echo ($buy['desc']); ?> - <?php echo ($bmore['color']); ?> - <?php echo ($bmore['net']); ?> - <?php echo ($bmore['mem']); ?> X <?php echo ($bmore['snum']); ?>
						</div>
					</div>
				</div>
				<div class="deta_3">
					<span class='deta_3_1'>收货地址</span>
					<span class='deta_3_2'>
						<span><?php echo ($dizhi['province']); echo ($dizhi['city']); ?></span>
						<span>100043（邮编)</span> 
						<span><?php echo ($dizhi['person']); ?></span><span>（收）</span> 
						<span><?php echo ($dizhi['aphone']); ?></span> 
						<a href="<?php echo U('Shop/shop2#modify');?>" class="edit">[ 修改 ]</a>
					</span>
				</div>
			</div>
		</div>
	</div>
	<div class="container success2">
		<div class="copys">
			<div class="online">在线支付</div>
			<div class="sao">扫一扫</div>
		</div>
		<table class="style">
			<tr>
				<td>
					<span><input type="radio" checked=""></span>
					<img src="/xiangmu/xiangmu/MeiZu-SunShine/Public/Home/images/zhi.png" alt="">
				</td>
			</tr>
			<tr>
				<td>
					<span><input type="radio"></span>
					<img src="/xiangmu/xiangmu/MeiZu-SunShine/Public/Home/images/zhi.png" alt="">
				</td>
				<td>
					<span><input type="radio"></span>
					<img src="/xiangmu/xiangmu/MeiZu-SunShine/Public/Home/images/zhi.png" alt="">
				</td>
				<td>
					<span><input type="radio"></span>
					<img src="/xiangmu/xiangmu/MeiZu-SunShine/Public/Home/images/zhi.png" alt="">
				</td>
				<td>
					<span><input type="radio"></span>
					<img src="/xiangmu/xiangmu/MeiZu-SunShine/Public/Home/images/zhi.png" alt="">
				</td>
			</tr>
		</table>
		<!-- 密码隐藏框 -->
		<input type="hidden" class="pwd" value="<?php echo ($pwd['0']['password']); ?>">
		<div class="now">立即支付</div>
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