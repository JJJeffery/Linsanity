<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	<title></title>
<script type="text/javascript" src="/Linsanity.cc-TP/Public/js/jquery-1.10.1.js"></script>
<style type="text/css">
    ul,li,ol{
    	list-style: none;
    }
    body,p,ul,ol{
	    margin:0;
	    padding:0;
    }
    #title{
    	font-size: 30px;
    	font-weight: bold;
    	text-align: center;
    	margin: 20px auto;
    	color: orange;
    }
    #box{
    	margin-top: 50px;
    }

</style>
<script language="javascript">
var i = 0;
var imgs = [
'/Linsanity.cc-TP/Public/images/2.jpg',
'/Linsanity.cc-TP/Public/images/3.jpg',
'/Linsanity.cc-TP/Public/images/4.jpg',
'/Linsanity.cc-TP/Public/images/5.jpg',
'/Linsanity.cc-TP/Public/images/6.jpg',
'/Linsanity.cc-TP/Public/images/7.jpg',
'/Linsanity.cc-TP/Public/images/8.jpg',
'/Linsanity.cc-TP/Public/images/9.jpg',
'/Linsanity.cc-TP/Public/images/10.jpg',
'/Linsanity.cc-TP/Public/images/11.jpg',
'/Linsanity.cc-TP/Public/images/12.jpg',
'/Linsanity.cc-TP/Public/images/13.jpg',
'/Linsanity.cc-TP/Public/images/14.jpg',
'/Linsanity.cc-TP/Public/images/15.jpg',
'/Linsanity.cc-TP/Public/images/16.jpg'
];
var len = imgs.length;
function cImg() {
 var img = document.getElementById('img');
 img.src = imgs[i % len];
 i = ++i % len;
}
</script>
</head>
<body>
<div id="title">欢迎来到疯狂网管理后台！</div>
<p id="box" align="center"><img src="/Linsanity.cc-TP/Public/images/1.jpg" id="img" /></p>
<script language="javascript">
 setInterval('cImg()', 2000);
</script>	
</body>
</html>