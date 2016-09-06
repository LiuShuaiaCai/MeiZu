<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<?php if(is_array($data)): foreach($data as $key=>$vo): ?><h3><?php echo ($vo['title']); ?>的组员：</h3><?php endforeach; endif; ?>
	
	<?php if(is_array($data1)): foreach($data1 as $key=>$value): ?><h4><?php echo ($value['adminname']); ?></h4><?php endforeach; endif; ?>
</body>
</html>