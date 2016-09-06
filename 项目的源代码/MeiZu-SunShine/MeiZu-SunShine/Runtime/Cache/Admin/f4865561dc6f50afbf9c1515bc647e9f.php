<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
   
	<h3><?php echo ($data[title]); ?>的权限</h3>

	<form action="<?php echo U('Authgroup/showrule');?>" method="post">
        <input type="hidden" name="id" value="<?php echo ($data[id]); ?>">
        <?php if(is_array($res)): foreach($res as $key=>$vo): ?><input type="checkbox" name="rules[]" value="<?php echo ($vo['id']); ?>" <?php echo in_array($vo['id'],$arr)?'checked':'' ;?>> <?php echo ($vo['title']); ?><br><?php endforeach; endif; ?>
        <input type="submit" value="提交">
	</form>
</body>
</html>