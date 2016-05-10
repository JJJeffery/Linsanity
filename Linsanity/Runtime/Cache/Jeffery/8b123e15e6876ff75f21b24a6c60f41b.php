<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	<title></title>
<style type="text/css">
    #bg{
    	/*background: #222 url('/Linsanity.cc-TP/Public/images/bg-login.gif');*/
    }
	#aa{
		/*float: left;*/
		/*display: block;*/
		margin-top: 1px;
		margin-left: 10px;
		height: 30px;
		line-height: 30px;
		font-family: 微软雅黑;
		font-weight: bold;
		font-size: 30px;
		font-style: italic;
		color: #00adef; 
	}
	#bb{
		color: #00adef;
		height: 20px;
		line-height: 20px;
		font-family: 微软雅黑;
		font-weight: bold;
		font-size: 20px;
		font-style: italic; 
		margin-left: 50px;
	}
	a{
		text-decoration: none;
		color: red;
	}
	a:hover,a:active{
		color: #ff8500;
		font-weight: bold;
	}
</style>
</head>
<body id="bg">
<p id="aa"><a href="http://www.linsanity.cc" target="_blank"><img src="/Linsanity.cc-TP/Public/images/logo.jpg" alt="疯狂网后台" /></a>疯狂网管理后台</p>
<span id="bb">Hello,<span style="color:#ff8500;"><?php echo (cookie('nickname')); ?></span>&nbsp;&nbsp;<?php echo (date('Y-m-d H:i:s',$time)); ?>&nbsp;&nbsp;<span><a href="/Linsanity.cc-TP/Jeffery/Index/quit">Logout</a></span></span>
</body>
</html>