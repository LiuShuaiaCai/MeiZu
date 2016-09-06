<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<form action="<?php echo U('Meizuadmin/addgroup');?>" method = "post">
		<input type="hidden" name="uid" value="<?php echo ($data['id']); ?>">  
		<?php if(is_array($res)): foreach($res as $key=>$vo): ?><input type="checkbox" name="group_id[]" value="<?php echo ($vo['id']); ?>"<?php echo in_array($vo['id'],$arr)?'checked':'';?>><?php echo ($vo['title']); endforeach; endif; ?>
		<input type="submit" value="提交">
	</form>
</body>
</html>