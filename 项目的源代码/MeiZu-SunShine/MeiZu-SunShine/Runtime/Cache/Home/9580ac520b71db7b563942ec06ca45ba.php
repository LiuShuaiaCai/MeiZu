<?php if (!defined('THINK_PATH')) exit();?>		<!-- 引入头部 -->
		<?php echo W('Public/header');?>

		<!-- 内容开始 -->
		
	
	<div class="container detail">
		<div class="row det_1">
			<a href="<?php echo U('Index/index');?>">首页</a>
			<span>></span>
			<span><?php echo ($data3['gname']); ?></span>
		</div>
	</div>
	<div class="container detail_2">
		<div class="row det_2">
			<div class="col-md-6 det_2_1">
				<a href="">
					 <img src="/xiangmu/xiangmu/MeiZu-SunShine/Public/<?php echo ($img['pic1']); ?>" alt="" id="detimg" style="display: block;">
				</a>
				<div class="minpic" style="block">
					<a href="javascript:;"><img src="/xiangmu/xiangmu/MeiZu-SunShine/Public/<?php echo ($img['pic1']); ?>" alt=""></a>
					<a href="javascript:;"><img src="/xiangmu/xiangmu/MeiZu-SunShine/Public/<?php echo ($img['pic2']); ?>" alt=""></a>
					<a href="javascript:;"><img src="/xiangmu/xiangmu/MeiZu-SunShine/Public/<?php echo ($img['pic3']); ?>" alt=""></a>
				</div>
				<div class="minpic" style="display:none">
					<a href="javascript:;"><img src="/xiangmu/xiangmu/MeiZu-SunShine/Public/Home/images/pro5_1.jpg" alt=""></a>
					<a href="javascript:;"><img src="/xiangmu/xiangmu/MeiZu-SunShine/Public/Home/images/pro5_2.jpg" alt=""></a>
					<a href="javascript:;"><img src="/xiangmu/xiangmu/MeiZu-SunShine/Public/Home/images/pro5_3.jpg" alt=""></a>
				</div>
				<div class="minpic" style="display:none">
					<a href="javascript:;"><img src="/xiangmu/xiangmu/MeiZu-SunShine/Public/Home/images/bai1.jpg" alt=""></a>
					<a href="javascript:;"><img src="/xiangmu/xiangmu/MeiZu-SunShine/Public/Home/images/bai2.jpg" alt=""></a>
					<a href="javascript:;"><img src="/xiangmu/xiangmu/MeiZu-SunShine/Public/Home/images/bai3.jpg" alt=""></a>
				</div>
				<div class="minpic" style="display:none">
					<a href="javascript:;"><img  src="/xiangmu/xiangmu/MeiZu-SunShine/Public/Home/images/pro5_1.jpg" alt=""></a>
					<a href="javascript:;"><img src="/xiangmu/xiangmu/MeiZu-SunShine/Public/Home/images/pro5_2.jpg" alt=""></a>
					<a href="javascript:;"><img src="/xiangmu/xiangmu/MeiZu-SunShine/Public/Home/images/pro5_3.jpg" alt=""></a>
				</div>
			</div>
			<div class="col-md-6 det_2_2">
				<div class="det_3">
					<h1 data="<?php echo ($data3['id']); ?>" id='goods'><?php echo ($data3['gname']); ?></h1>
					<p class="mod-info">买32G送EP-31耳机，64G送移动电源快充版</p>
					<p class="price">
                        <em class="yen">¥</em>
                        <span class="price2" id="price"><?php echo ($data3['price']); ?></span>
                    </p>
                    
				</div>
				<div class="det_4">
					<div class="int">
                    	<p>网络类型:</p>
                    </div>
                    <?php if(is_array($data)): foreach($data as $key=>$vo): ?><a class="liantong t" href="javascript:;" data='<?php echo ($vo["id"]); ?>'>
						<span class='net'><?php echo ($vo['net']); ?></span>
					</a><?php endforeach; endif; ?>
					<div class="i"></div>
				</div>
				<div class="det_4 det_4_1">
					<div class="int">
                    	<p>颜色分类:</p>
                    </div>
                    <div class="c"></div>
                    <span class="col">
                    <?php if(is_array($data2)): foreach($data2 as $key=>$vo2): ?><a href='javascript:;' class="liantong yin" bgcolor='#FFF'>
							<img src="/xiangmu/xiangmu/MeiZu-SunShine/Public/Home/images/yin.png" alt="" class="color">
							<span class='name'><?php echo ($vo2['color']); ?></span>
					</a><?php endforeach; endif; ?>
					</span>
				</div>
				<div class="det_4 det_4_1">
					<div class="j"></div>
					<div class="int">
                    	<p>机身内存:</p>
                    </div>
                    <?php if(is_array($data4)): foreach($data4 as $key=>$vo3): ?><button class="liantong nn" href="javascript:;">
						<span class='memory'><?php echo ($vo3['mem']); ?></span>
					</button><?php endforeach; endif; ?>
				</div>
				<div class="det_4 det_4_1">
					<div class="int">
                    	<p>数量:</p>
                    </div>
                    <div class="liantong num" href="javascript:;">
						<a href="javascript:;"><span class='num_1 low'>-</span></a>
						<a href="javascript:;"><span class='num_2'>1</span></a>
						<a href="javascript:;"><span class='num_1 more'>+</span></a>
					</div>
					<span class='num_3'>(限购5件)</span>
				</div>
				<p class="det_5">您已选择以下商品:</p>
				<p id="det_5">
					<span id="det_5_1"><?php echo ($data3['gname']); ?></span>
					<span id="det_5_2"><?php echo ($vo['net']); ?></span>
					<span id="det_5_3"><?php echo ($vo2['color']); ?></span>
					<span id="det_5_4"><?php echo ($vo3['mem']); ?></span>
					￥<span id="det_5_5"><?php echo ($data3['price']); ?></span>
				</p>
				<p>本商品由 魅族 负责发货，并由 魅族 提供售后服务</p>
				<div class="res">
				<span>总计<em class="res_1">￥</em><em class="res_1" id="res_1"><?php echo ($data3['price']); ?></em></span>
				</div>
				<a href='<?php echo U("Shop/cleardata");?>'><span id='buy' class="buy">立即购买</span></a>
				<a href="javascript:;"><span class='goshop'>加入购物车</span></a>
			</div>
			
		</div>
	</div>
	<div class="container">
		<div class="row detail_6">
			<a href="#image"><span class='det_6_1 d'>商品详情</span></a>
			<a href="#can"><span class='det_6_2 d'>规格参数</span></a>
			<a href="#speak"><span class='det_6_2 d'>评价详情</span></a>
			<span class='detail_6_1' style='display:none'>
				<h4 class="fixed"><?php echo ($data3['gname']); ?></h4>
				<span class="fixed p">￥<em class='p2'><?php echo ($data3['price']); ?></em></span>
				<a href="<?php echo U('Shop/cleardata');?>"><span class="fixed g">现在购买</span></a>
			</span>
		</div>
		<a name="image"></a>
		<div class="row image x">
			<p><?php echo htmlspecialchars_decode($img['images']);?></p>
		</div>	
		<a name="can"></a>
		<div class="row can x">
			<table class="detail_table">
				<tr>
					<th width="24%" class="th">品牌</th>
					<td>魅族</td>
				</tr>
				<tr>
					<th width="24%" class="th">型号</th>
					<td><?php echo ($data5['gname']); ?></td>
				</tr>
				<tr>
					<th width="24%" class="th">网络类型</th>
					<td><?php echo ($data5['style']); ?></td>
				</tr>
				<tr>
					<th width="24%" class="th">颜色</th>
					<td><?php echo ($data5['color']); ?></td>
				</tr>
				<tr>
					<th width="24%" class="th">尺寸</th>
					<td><?php echo ($data5['size']); ?></td>
				</tr>
				<tr>
					<th width="24%" class="th">重量</th>
					<td><?php echo ($data5['weight']); ?></td>
				</tr>
				<tr>
					<th width="24%" class="th">分辨率</th>
					<td><?php echo ($data5['resolution']); ?></td>
				</tr>
				<tr>
					<th width="24%" class="th">运行内存（RAM）</th>
					<td><?php echo ($data5['memory']); ?>(仅限32G版本)</td>
				</tr>
				<tr>
					<th width="24%" class="th">电池容量</th>
					<td><?php echo ($data5['battery']); ?></td>
				</tr>
				<tr>
					<th width="24%" class="th">CPU </th>
					<td>Exynos 7420 处理器</td>
				</tr>
				<tr>
					<th width="24%" class="th">GPU</th>
					<td>Mali T760 图形处理器</td>
				</tr>
				<tr>
					<th width="24%" class="th">网络模式</th>
					<td>双卡多模</td>
				</tr>
				<tr>
					<th width="24%" class="th">前置摄像头 </th>
					<td>500万像素 </td>
				</tr>
				<tr>
					<th width="24%" class="th">后置摄像头 </th>
					<td>500万像素 </td>
				</tr>
				<tr>
					<th width="24%" class="th">前置摄像头 </th>
					<td>2116万像素</td>
				</tr>
				<tr>
					<th width="24%" class="th">系统版本</th>
					<td>Flyme 4.5</td>
				</tr>
			</table>
		</div>

		<a name="speak"></a>
		<div class="x" style="height:700px;font-size:26px;display: none">
			<div style="height:60px;line-height:60px"><span style="margin:0px 20px;color:red">整体评价(4.5分)</span>|&nbsp;&nbsp;&nbsp;<span style="margin-right:20px;color:red">描述相符(4.5分)</span>|&nbsp;&nbsp;&nbsp;<span style="margin-right:20px;color:red">质量满意(5分)</span>|&nbsp;&nbsp;&nbsp;<span style="margin-right:20px;color:red">价格合理(4.5分)</span>|&nbsp;&nbsp;&nbsp;<span style="margin-right:20px;color:red">服务周到(4.5分)</span></div>
			<?php if(is_array($vo1)): foreach($vo1 as $key=>$vo1): ?><div style="border:1px solid #999999;height:300px">	
				<div style="width:100px;float:left;height:200px"><img src="/xiangmu/xiangmu/MeiZu-SunShine/Public/<?php echo empty($vo1['plphoto'])? 'default.jpg' : $vo1['plphoto'];?>" alt="" width="80" height="80"></div>
				<div style="width:1050px;float:left;height:200px;font-size:16px">
					<div style="height:40px"><?php echo ($vo1['username']); ?><div style="float:right;color:#999999"><?php echo (date("Y-m-d H:i:s",$vo1['ptime'])); ?></div></div>
					<div style="height:60px;font-weight:bold"><?php echo htmlspecialchars_decode($vo1['content']);?></div>
					
					<div style="height:40px;">
						描述相符：<span style="color:red;font-weight:bold;margin-right:20px"><?php echo ($vo1['desc']); ?>星</span>
						质量满意：<span style="color:red;font-weight:bold;margin-right:20px"><?php echo ($vo1['quality']); ?>星</span>
						价格合理：<span style="color:red;font-weight:bold;margin-right:20px"><?php echo ($vo1['price']); ?>星</span>
						服务周到：<span style="color:red;font-weight:bold;margin-right:20px"><?php echo ($vo1['service']); ?>星</span>
					</div>
					<hr>
					
					<?php if(!empty($vo1['recontent'])): ?><div style="font-weight:bold">商家回复 :<?php echo htmlspecialchars_decode($vo1['recontent']);?><div style="float:right"><?php echo (date("Y-m-d H:i:s",$vo1['retime'])); ?></div></div><?php endif; ?>
				</div>	
			</div><?php endforeach; endif; ?>
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