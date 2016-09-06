<?php if (!defined('THINK_PATH')) exit();?>		<!-- 引入头部 -->
		<?php echo W('Public/header');?>

		<!-- 内容开始 -->
		
	<!--内容开始左侧部分-->
	<div class="container">
		<div class="row">
			<div class="main-01">
				<h3>产品常见问题</h3>
			</div>
			
			<div class="main-02">

				<ul class="main-02-ul">
				<?php if(is_array($res)): foreach($res as $key=>$value): ?><li class="main-02-li">
						<a href="<?php echo U('Question/qpost',array('tid'=>$value['id']));?>">
							<img src="/xiangmu/xiangmu/MeiZu-SunShine/Public/<?php echo ($value['pic']); ?>" alt="" width="118px" height="196px">
							<span class="main-02-span"><?php echo ($value['tname']); ?></span>
						</a>
					</li><?php endforeach; endif; ?>	
				</ul>
		
			</div>
			
			
			<div class="main-04">
				<div class="col-md-2 main-04-L">
					<h3 class="main-04-h">热门问题</h3>
				</div>
				<div class="col-md-9 main-04-R">
					<?php if(is_array($data)): foreach($data as $key=>$vo): ?><span>
						<a class="main-04-a" href="javascript:;"><?php echo ($vo['title']); ?></a>
 						<span class="content" style="display:none"><?php echo ($vo['content']); ?></span>
					</span><br /><?php endforeach; endif; ?>
				</div>
			</div>
			<div class="main-04">
				<div class="col-md-2 main-04-L">
					<h3 class="main-04-h">购买帮助</h3>
				</div>
				<div class="col-md-9 main-04-R">
					<a class="main-04-a" href="">支付方式</a>
					<a class="main-04-a" href="">配送说明</a>
					<a class="main-04-a" href="">付款帮助</a>
					<!-- <a class="main-04-a" href=""></a> -->
				</div>
			</div>
			<div class="main-04">
				<div class="col-md-2 main-04-L">
					<h3 class="main-04-h">售后服务</h3>
				</div>
				<div class="col-md-9 main-04-R">
					<a class="main-04-a" href="">售后服务</a>
					<a class="main-04-a" href="">手机固件下载</a>
					<a class="main-04-a" href="">MP3固件下载</a>
					<a class="main-04-a" href="">手机配件价格</a>
				</div>
			</div>
			
		</div>
		<script src='/xiangmu/xiangmu/MeiZu-SunShine/Public/Home/js/jquery-1.11.3.min.js'></script>
		<script>
		$('.main-04-a').click(function(){
			var a = $(this).siblings('.content').text();
			alert(a);
		})
		</script>
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