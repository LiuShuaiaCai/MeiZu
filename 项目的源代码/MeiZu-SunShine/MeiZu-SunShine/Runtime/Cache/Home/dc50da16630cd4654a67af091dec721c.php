<?php if (!defined('THINK_PATH')) exit();?>		<!-- 引入头部 -->
		<?php echo W('Public/header');?>

		<!-- 内容开始 -->
		
	<div style="height:1000px;width:1000px">
		<div class="pj_one"></div>
		<div class="pj_two">商品评价</div>
		<div class="pj_three"></div>
		<div class="pj_four">
			<form action="<?php echo U('Pj/insert');?>" method="post">
			<input type="hidden" name="username" value="<?php echo ($username); ?>">
			<input type="hidden" name="photo" value="<?php echo ($photo); ?>">
			<input type="hidden" name="gid" value="<?php echo ($gid); ?>">
			
			<div class="left">
				
				<div class="shang">
					
					<div style="width:70px;height:70px;border:1px solid #E1E1E1;margin:10px 0px 10px 20px;float:left;"><img src="/xiangmu/xiangmu/MeiZu-SunShine/Public/<?php echo ($pic); ?>" alt="" width="70px" heihgt="70px"></div>
					
					<div style="float:left;">
						<ul style="list-style:none;">
							<li style="height:40px;margin:10px 0px;"><?php echo ($gname); ?></li>
							<li><span>版本：<?php echo ($style); ?></span>&nbsp;&nbsp<span>颜色：<?php echo ($color); ?></span>&nbsp;&nbsp<span>存储：<?php echo ($memory); ?></span></li>
						</ul>
					</div>
					
				</div>
				
				<div class="xia" style="margin-left:20px;">商品评价:<br/> <script id="container" name="content" type="text/plain"></script>
    </div>
			</div>
			<div class="right">
				<ul>
					<li style="color:red"><span style="color:#000">描述相符：</span>
						<input type="radio" name="desc" value="1">一星
						<input type="radio" name="desc" value="2">二星
						<input type="radio" name="desc" value="3">三星
						<input type="radio" name="desc" value="4">四星
						<input type="radio" name="desc" value="5">五星
					</li>
					<li style="color:red"><span style="color:#000">质量满意：</span>
						<input type="radio" name="quality" value="1">一星
						<input type="radio" name="quality" value="2">二星
						<input type="radio" name="quality" value="3">三星
						<input type="radio" name="quality" value="4">四星
						<input type="radio" name="quality" value="5">五星
					</li>
					<li style="color:red"><span style="color:#000">价格合理：</span>
						<input type="radio" name="price" value="1">一星
						<input type="radio" name="price" value="2">二星
						<input type="radio" name="price" value="3">三星
						<input type="radio" name="price" value="4">四星
						<input type="radio" name="price" value="5">五星
					</li>
					
					<li style="color:red"><span style="color:#000">服务周到：</span>
						<input type="radio" name="service" value="1">一星
						<input type="radio" name="service" value="2">二星
						<input type="radio" name="service" value="3">三星
						<input type="radio" name="service" value="4">四星
						<input type="radio" name="service" value="5">五星
					</li>
				</ul>
			</div>
		</div>
		<input type="hidden" name="ptime" value="<?php echo time();?>">
		<input type="submit" value="发表评价" style="margin-left:160px;margin-top:170px">
		</form>
		<!-- 引入百度编辑器的js文件 -->
		<script src="/xiangmu/xiangmu/MeiZu-SunShine/Public/UEditor/ueditor.config.js"></script>
		<script src="/xiangmu/xiangmu/MeiZu-SunShine/Public/UEditor/ueditor.all.min.js"></script>

		 <!-- 实例化编辑器 -->
	    <script type="text/javascript">
    	// container是script标签的id值
        var ue = UE.getEditor('container',{
        	/*toolbars: [
			    ['fullscreen', 'source', 'undo', 'redo', 'bold'],
			    ['snapscreen','date','simpleupload','insertimage'],
			    ['emotion']
			]*/
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