<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	<title>Document</title>
<link rel="stylesheet" type="text/css" href="/Linsanity.cc-TP/Public/css/admin-manage2.css" />
<script type="text/javascript" src="/Linsanity.cc-TP/Public/js/jquery-1.10.1.js"></script>
<script type="text/javascript" src="/Linsanity.cc-TP/Public/js/style-table.js"></script>
</head>
<body>
<div id="header">
    <div id="head1">当前操作>>管理图片广告</div>
    <div id="head2">
        <div id="h2-title">图片类型分类：</div>
        <?php if(is_array($type)): foreach($type as $key=>$c): ?><a href="/Linsanity.cc-TP/Jeffery/Imageads/manage/tid/<?php echo ($c["id"]); ?>" ><?php echo ($c["typename"]); ?></a>&nbsp;&nbsp;<?php endforeach; endif; ?>
    </div>
</div>

<div id="content">
<div id="cur-cate">当前分类：<span style="color:red;"><?php echo ($curtype); ?></span></div>
<table>
<thead>
	<tr>
		<th>ID</th>
		<th>标题</th>
		<th>链接</th>
		<th>图片</th>
		<th>操作</th>
	</tr>
	</thead>
	<?php if(is_array($iadsInfo)): foreach($iadsInfo as $key=>$v): ?><tbody>
	<tr>
		<td><?php echo ($v["id"]); ?></td>
		<td><?php echo ($v["title"]); ?></td>
		<td><?php echo ($v["href"]); ?></td>
		<td><img src="/Linsanity.cc-TP/Uploads/Imageads/<?php echo ($v["imagepath"]); echo ($v["imagename"]); ?>" width="300" height="90" /></td>
		<td><a href="/Linsanity.cc-TP/Jeffery/Imageads/edit/id/<?php echo ($v["id"]); ?>">编辑</a>|<a href="/Linsanity.cc-TP/Jeffery/Imageads/delete/id/<?php echo ($v["id"]); ?>">删除</a></td>
	</tr>
	</tbody><?php endforeach; endif; ?>
	<tfoot>
	<tr>
		<td colspan="5" align="center"><?php echo ($pageShow); ?></td>
	</tr>
	</tfoot>
</table>
</div>	
</body>
</html>