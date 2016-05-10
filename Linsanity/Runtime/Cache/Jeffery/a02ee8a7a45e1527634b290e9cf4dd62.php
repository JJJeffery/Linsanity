<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	<title>Document</title>
<link rel="stylesheet" type="text/css" href="/Linsanity.cc-TP/Public/css/admin-manage1.css" />
<script type="text/javascript" src="/Linsanity.cc-TP/Public/js/jquery-1.10.1.js"></script>
<script type="text/javascript" src="/Linsanity.cc-TP/Public/js/style-table.js"></script>
</head>
<body>
<div id="header">当前操作>>管理栏目</div>
<div id="content">
<form action="/Linsanity.cc-TP/Jeffery/Category/corder" method='post'>
	<table>
	<thead> 
		<tr>
			<th>ID</th>
			<th>标题</th>
			<th>ID名称</th>
			<th>显示</th>
			<th>排序</th>
			<th>操作</th>
		</tr>
	</thead>
		<?php if(is_array($cateInfo)): foreach($cateInfo as $key=>$v): ?><tbody>
		<tr>
			<td><?php echo ($v["id"]); ?></td>
			<td><?php echo ($v["title"]); ?></td>
			<td><?php echo ($v["idname"]); ?></td>
			<td><?php echo ($v["isshow"]); ?></td>
			<td><input style="text-align:center;" type="text" name="corder<?php echo ($v["id"]); ?>" value="<?php echo ($v["corder"]); ?>" size='2'/></td>
			<td><a href="/Linsanity.cc-TP/Jeffery/Category/edit/id/<?php echo ($v["id"]); ?>">编辑</a>|<a href="/Linsanity.cc-TP/Jeffery/Category/delete/id/<?php echo ($v["id"]); ?>">删除</a></td>
		</tr>
		</tbody><?php endforeach; endif; ?>
	</table>
	<p><input id="button" type="submit" value="排序" /></p>
</form>
</div>	
</body>
</html>