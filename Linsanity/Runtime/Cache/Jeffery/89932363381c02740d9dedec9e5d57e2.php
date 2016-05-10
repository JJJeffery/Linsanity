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
    <div id="head1">当前操作>>新闻管理</div>
    <div id="head2">
        <div id="h2-title">新闻分类：</div>
        <?php if(is_array($cate)): foreach($cate as $key=>$c): ?><a href="/Linsanity.cc-TP/Jeffery/News/manage/id/<?php echo ($c["id"]); ?>" ><?php echo ($c["title"]); ?></a>&nbsp;&nbsp;<?php endforeach; endif; ?>
    </div>
</div>

<div id="content">
<div id="cur-cate">当前分类：<span style="color:red;"><?php echo ($title); ?></span></div>
<table>
<thead>
	<tr>
		<th>ID</th>
		<th>标题</th>
		<th>内容</th>
		<th>链接</th>
		<th>作者</th>
		<th>图片</th>
		<th>视频</th>
		<th>添加时间</th>
		<th>操作</th>
	</tr>
	</thead>
	<?php if(is_array($newsInfo)): foreach($newsInfo as $key=>$v): ?><tbody>
	<tr>
		<td><?php echo ($v["id"]); ?></td>
		<td><?php echo ($v["title"]); ?></td>
		<td><?php echo ($v["content"]); ?></td>
		<td><?php echo ($v["href"]); ?></td>
		<td><?php echo ($v["author"]); ?></td>
		<td><img src="/Linsanity.cc-TP/Uploads/News/<?php echo ($v["imagepath"]); echo ($v["imagename"]); ?>" width="100" height="100"/></td>
		<?php if($v["isvideo"] == 1): ?><td>是</td><?php else: ?><td>否</td><?php endif; ?>
		<td><?php echo (date("Y-m-d H:i:s",$v["pubtime"])); ?></td>
		<td><a href="/Linsanity.cc-TP/Jeffery/News/edit/id/<?php echo ($v["id"]); ?>">编辑</a>|<a href="/Linsanity.cc-TP/Jeffery/News/delete/id/<?php echo ($v["id"]); ?>">删除</a></td>
	</tr>
	</tbody><?php endforeach; endif; ?>
	<tfoot>
	<tr>
		<td colspan="9" align="center"><?php echo ($pageShow); ?></td>
	</tr>
	</tfoot>
</table>
</div>	
</body>
</html>