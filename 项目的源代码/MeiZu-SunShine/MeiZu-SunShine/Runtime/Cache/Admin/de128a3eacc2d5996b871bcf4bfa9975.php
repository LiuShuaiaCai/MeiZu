<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<form action="<?php echo U('Images/update');?>" method="post">

	<!-- 加载编辑器的容器 -->
    <script id="container" name="images" type="text/plain"></script>
    <input type="hidden" name="id" value="<?php echo ($data['id']); ?>"> 
	<input type="submit" value="提交">
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
</body>
</html>