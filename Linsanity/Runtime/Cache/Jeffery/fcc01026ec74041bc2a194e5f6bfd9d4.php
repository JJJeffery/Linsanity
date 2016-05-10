<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	<title></title>
<style type="text/css">
    *{
    	margin: 0;
    	padding: 0;
    }
	ul,li,ol{
		list-style: none;
	}

	.aa{
		background: #abcdef;
		height: 35px;
		line-height: 35px;
		text-align: left;
		font-weight: bold;
		font-family: 微软雅黑;
		font-size: 20px;
		padding-left: 20px;
	}
	.bb{
		height: 25px;
		line-height: 25px;
		font-family: 微软雅黑;
		text-align: left;
		margin-left: 20px;
	}
	.bb a{
		text-decoration: none;
		color:black;
	}
	.bb a:hover,.bb a:active{
		color: red;
	}
    .cc{
    	height: 25px;
		line-height: 25px;
		font-family: 微软雅黑;
		font-size: 14px;
		text-align: left;
		margin-left: 40px;
    }
    .cc a{
		text-decoration: none;
		color:black;
	}
	.cc a:hover,.cc a:active{
		color: red;
	}
</style>
</head>
<body>
<p class="aa">栏目管理</p>
<p class="bb"><a href="/Linsanity.cc-TP/Jeffery/Category/add" target="main">添加栏目</a></p>	
<p class="bb"><a href="/Linsanity.cc-TP/Jeffery/Category/manage" target="main">管理栏目</a></p>
<p class="aa">新闻管理</p>
<p class="bb"><a href="/Linsanity.cc-TP/Jeffery/News/add" target="main">添加新闻</a></p>	
<p class="bb"><a href="/Linsanity.cc-TP/Jeffery/News/manage/id/1" target="main">管理新闻</a></p>	
<p class="aa">比赛管理</p>
<p class="bb"><a href="/Linsanity.cc-TP/Jeffery/Games/add" target="main">添加比赛</a></p>	
<p class="bb"><a href="/Linsanity.cc-TP/Jeffery/Games/manage/id/7" target="main">管理比赛</a></p>	
<p class="aa">广告管理</p>
<p class="bb">图片类型</p>
<p class="cc"><a href="/Linsanity.cc-TP/Jeffery/Imagetype/add" target="main">添加类型</a></p>	
<p class="cc"><a href="/Linsanity.cc-TP/Jeffery/Imagetype/manage" target="main">管理类型</a></p>	
<p class="bb">文字广告</p>	
<p class="cc"><a href="/Linsanity.cc-TP/Jeffery/Textads/add" target="main">添加广告</a></p>
<p class="cc"><a href="/Linsanity.cc-TP/Jeffery/Textads/manage" target="main">管理广告</a></p>		
<p class="bb">图片广告</p>
<p class="cc"><a href="/Linsanity.cc-TP/Jeffery/Imageads/add" target="main">添加广告</a></p>	
<p class="cc"><a href="/Linsanity.cc-TP/Jeffery/Imageads/manage/tid/1" target="main">管理广告</a></p>		
</body>
</html>