<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>



		

	<form action="<?php echo U('Question/demo');?>" method="post">
	<input type="hidden" name="tid" value="<?php echo I('post.tid');?>">
	<!-- <input type="hidden" name="uid" value="<?php echo I('session.id');?>"> -->
	标题：<input type="text" name="title" value="">
	<!-- 加载编辑器的容器 -->

    <script id="container" name="content" type="text/plain"></script>
    
	<input type="submit" value="提交">
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
</body>
</html>