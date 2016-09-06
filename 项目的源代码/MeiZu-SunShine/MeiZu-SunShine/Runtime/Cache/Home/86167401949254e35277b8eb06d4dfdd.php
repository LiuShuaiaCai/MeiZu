<?php if (!defined('THINK_PATH')) exit();?>		<!-- 引入头部 -->
		<?php echo W('Public/header');?>

		<!-- 内容开始 -->
		
	<!-- 主要内容 -->
	<div style="background-color:#DFEDFA;" >
		<div class="container main-1">
			<div class="row main01">

				<a href="<?php echo U('Question/index',array('id'=>$id));?>">服务支持</a>
				>
				<a href="">PRO 5</a>
				<form action="<?php echo U('Question/fpost');?>" method="post">
					<input type="hidden" name="tid" value="<?php echo I('get.tid');?>">
					<!-- <input type="hidden" name="uid" value="<?php echo I('get.uid');?>"> -->
					<input class="inp" type="submit" value="发帖">
				</form>
			</div>	
		</div>

		<div class="container main-2">
			<div class="row main02">
				<form>
			搜索：<input type="text" name="title" value="" style="background-color:#DFEDFA;">
				  <input type="submit" value="提交">	
				</form>
				<p><?php echo ($show); ?></p>
			</div>
			
		</div>
		<div class="container" style="padding-bottom:20px">
			<table width="1220">
				<tr height="40">
					<td class="col-md-2">标题</td>
					<td class="col-md-2">发表时间</td>
					<td class="col-md-2">作者</td>
					<td class="col-md-2">回复</td>
					<td class="col-md-2">最后发表</td>
				</tr>
				<?php if(is_array($res)): foreach($res as $k=>$vo2): ?><tr height="40">
					<td class="col-md-2">
						<a href="<?php echo U('Question/qreply',array('id'=>$vo2['id'],'tid'=>$vo2['tid']));?>"><?php echo ($vo2['title']); ?></a>
					</td>
					<td class="col-md-2">
						<?php echo date('Y-m-d H:i:s',$vo2['ctime']);?>
					</td>
					<td class="col-md-2"><?php echo ($vo2['userName']); ?></td>
				
					<td class="col-md-2"><?php echo ($vo2['count']); ?></td>
					<td class="col-md-2"><?php echo ($vo2['replayName']); ?></td>
				</tr><?php endforeach; endif; ?>
			</table>
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