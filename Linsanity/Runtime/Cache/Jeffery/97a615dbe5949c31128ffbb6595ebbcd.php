<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	<title>Document</title>
<link rel="stylesheet" href="/Linsanity.cc-TP/Public/css/admin-add.css" type="text/css" />
</head>
<body>
<div id="header">当前操作>>添加栏目</div>
<div id="content">
<form action="/Linsanity.cc-TP/Jeffery/Category/addsave" method="post">
	<table>
		<tr>
			<td class="title">标题</td>
			<td><input type="text" name="title" class="input-box" /></td>
			<td><span>2-6个字符</span></td>
		</tr>
		<tr>
			<td class="title">ID名称</td>
			<td><input type="text" name="idname" class="input-box"/></td>
			<td><span>英文字母、下划线组成</span></td>
		</tr>
		<tr>
			<td class="title">显示</td>
			<td><input type="text" name="isshow" class="input-box" /></td>
			<td><span>0：不显示；1：显示</span></td>
		</tr>
		<tr>
			<td class="title">序号</td>
			<td><input type="text" name="corder" class="input-box" /></td>
			<td><span>参考值：1-15</span></td>
		</tr>
	</table>
	<p><input id="button" type="submit" value="添加栏目" /></p>
</form>	
</div>
</body>
</html>