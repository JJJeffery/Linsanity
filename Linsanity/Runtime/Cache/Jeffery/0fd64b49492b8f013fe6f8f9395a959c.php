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
<div id="header">当前操作>>管理文字广告</div>
<div id="content">
<table>
<thead>
	<tr>
		<th>ID</th>
		<th>标题</th>
		<th>链接</th>
		<th>操作</th>
	</tr>
	</thead>
	<?php if(is_array($tadsInfo)): foreach($tadsInfo as $key=>$v): ?><tbody>
	<tr>
		<td><?php echo ($v["id"]); ?></td>
		<td><?php echo ($v["title"]); ?></td>
		<td><?php echo ($v["href"]); ?></td>
		<td><a href="/Linsanity.cc-TP/Jeffery/Textads/edit/id/<?php echo ($v["id"]); ?>">编辑</a>|<a href="/Linsanity.cc-TP/Jeffery/Textads/delete/id/<?php echo ($v["id"]); ?>">删除</a></td>
	</tr>
	</tbody><?php endforeach; endif; ?>
	<tfoot>
	<tr>
		<td colspan="4" align="center"><?php echo ($pageShow); ?></td>
	</tr>
	</tfoot>
</table>	
</body>
</html>