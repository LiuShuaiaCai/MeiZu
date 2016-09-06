<?php if (!defined('THINK_PATH')) exit();?>		<!-- 引入头部 -->
		<?php echo W('Public/header');?>

		<!-- 内容开始 -->
		
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
				<img class="col-md-12" src="/xiangmu/xiangmu/MeiZu-SunShine/Public/Home/images/164728x8z9qyqxzp84e4j4.png" alt="">
			</div>

				<!-- 主要内容 -->
			<div class="main-03">
				<p class="main-03-p">
					<span class="main-03-span">
						<img src="/xiangmu/xiangmu/MeiZu-SunShine/Public/Home/images/logo.png" alt="">
					</span>
					<span class="main-03-span">
						兑换商城
					</span>
				</p>
				<p class="main-03-p1">
					<span class="main-03-span">我的积分：<span class="myscore"><?php echo !empty($id)?$res['score']:'';?></span></span>
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
						<img class="main-05-img" src="/xiangmu/xiangmu/MeiZu-SunShine/Public/<?php echo ($vo['pic']); ?>" alt="">
						<p><?php echo ($vo['name']); ?></p>
						<p><?php echo ($vo['price']); ?>积分</p>
						<div class="main-05-div" style="display:none">
							<p class="main-05-p"><?php echo ($vo['name']); ?></p>
							<p class="main-05-p"><span class="jifen"><?php echo ($vo['price']); ?></span>积分</p>
							<p class="main-05-p"><a class="main-05-a" href="javascript:;">兑换</a></p>
						</div>
					</li><?php endforeach; endif; ?>
					
				</ul>
	
			

		</div>
	</div>
	<script src="/xiangmu/xiangmu/MeiZu-SunShine/Public/Home/js/jquery-1.11.3.min.js"></script>
	<script>
	
	$('.main-05-li').mouseover(function(){
		$(this).css('background-color','#7F7F7F');
		$(this).find('.main-05-div').css('display','block');
		
	}).mouseout(function(){
		$(this).css('background-color','');
		$(this).find('.main-05-div').css('display','none');
	});

	$('.main-05-a').click(function(){
		var a=Number($(this).parent().prev().children('.jifen').text());
		var b=Number($('.myscore').text());
		var c=b-a;

		// alert(a);
		// alert(b);
		if(c>0){
			$.post('score',{score:c},function(msg){
			console.log(msg);
			// if(msg=='ok'){
			// 	var url="/xiangmu/xiangmu/MeiZu-SunShine/index.php/Home";
			// 	// window.location.href=url+'/Shop/shop2';
			// }
		})
			alert('兑换成功');
		}

	});
			
	</script>

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