<?php if (!defined('THINK_PATH')) exit();?>		<!-- 引入头部 -->
		<?php echo W('Public/header');?>

		<!-- 内容开始 -->
		

	<!--内容开始左侧部分-->

	<div class="body04">
			<div class="body0401">
				<span class="span1"><?php echo ($data['userName']); ?></span>
				<img src="/xiangmu/xiangmu/MeiZu-SunShine/Public/<?php echo ($data['photo']); ?>" style="width:80px;height:80px" />
			</div>
			<div class="body0402">
				<span class="span3"><span>楼主</span> 发表于：<?php echo date('Y-m-d H:i:s',$data['ctime']);?></span>
				<div>
					<span>
					<?php echo htmlspecialchars_decode($data['content']);?>
					</span>
				</div>
			</div>
		</div>	
		

		<?php if(is_array($data1)): $k = 0; $__LIST__ = $data1;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo1): $mod = ($k % 2 );++$k;?><div class="body04">
			<div class="body0401">
				<span class="span1"><?php echo ($vo1['userName']); ?></span>
				<img src="/xiangmu/xiangmu/MeiZu-SunShine/Public/<?php echo !empty($vo1['photo'])?$vo1['photo']:'default.jpg';?>" style="width:80px;height:80px" />
			</div>
			<div class="body0402">
				<span class="span3"><span>
					<?php switch($k): case "1": ?>沙发<?php break;?>
						<?php case "2": ?>板凳<?php break;?>
						<?php case "3": ?>凉席<?php break;?>
						<?php default: ?>
						<?php echo ($k); ?>楼<?php endswitch;?>
				</span> 发表于：<?php echo date('Y-m-d H:i:s',$vo1['rtime']);?></span>
				<div>
					<span>
						<?php echo htmlspecialchars_decode($vo1['contents']);?>
					</span>
				</div>
			</div>
		</div><?php endforeach; endif; else: echo "" ;endif; ?>
		
		
		<div style="width:960px;height:100px; margin:0 auto;margin-bottom:150px;">
			<form action="<?php echo U('Question/doqreply');?>" method="post">
			<input type="hidden" name="pid" value="<?php echo I('get.id');?>">
			<input type="hidden" name="uid" value="<?php echo I('get.uid');?>">
			<input type="hidden" name="tid" value="<?php echo I('get.tid');?>">
			<!-- 加载编辑器的容器 -->

    			<script id="container" name="contents" type="text/plain"></script>
    
				<input type="submit" value="回复">
				
				<a class="fanhui" href="<?php echo U('Question/qpost',array('tid'=>$tid));?>">返回上页</a>
			</form>

			
			<!-- 引入百度编辑器的js文件 -->
			<script src="/xiangmu/xiangmu/MeiZu-SunShine/Public/UEditor/ueditor.config.js"></script>
			<script src="/xiangmu/xiangmu/MeiZu-SunShine/Public/UEditor/ueditor.all.min.js"></script>

	 		<!-- 实例化编辑器 -->
    		<script type="text/javascript">
    			// container是script标签的id值
        		var ue = UE.getEditor('container',{
        	
       		 });
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