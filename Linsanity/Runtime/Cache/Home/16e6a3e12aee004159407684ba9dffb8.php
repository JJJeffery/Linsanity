<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
<link rel="shortcut icon" href="/Linsanity.cc-TP/Public/images/logo-title.png">
<meta http-equiv="Content-Type" content="text/html;charset=UTF-8"/>
<meta name="keywords" content="疯狂网,疯狂网首页,林书豪,Jeremy,Jeremy Lin,林疯狂,林疯狂高清比赛,林疯狂视频,林疯狂高清视频,林疯狂高清比赛视频" />
<meta name="discription" content="疯狂网,疯狂网首页,林疯狂所有比赛,林疯狂期间26场高清比赛视频,林书豪火箭时期湖人时期高清精彩比赛视频" />
<meta name="author" content="Jeffery Li" />
<title>疯狂网首页 疯狂网 林疯狂</title>
<link rel="stylesheet" href="/Linsanity.cc-TP/Public/css/reset.css" type="text/css" />
<link rel="stylesheet" href="/Linsanity.cc-TP/Public/css/index_layout.css" type="text/css" />
<link rel="stylesheet" href="/Linsanity.cc-TP/Public/css/autoImage.css" type="text/css" />
<link rel="stylesheet" href="/Linsanity.cc-TP/Public/css/detail.css" type="text/css" />
<script type="text/javascript" src="/Linsanity.cc-TP/Public/js/jquery-1.10.1.js"></script>
<script type="text/javascript" src="/Linsanity.cc-TP/Public/js/index_layout.js"></script>
<script type="text/javascript" src="/Linsanity.cc-TP/Public/js/autoImage.js"></script>

</head>
<!--禁止右键查看源代码 -->
<body oncontextmenu="return false" onselectstart="return false"> 
<!-- 顶部小导航开始 -->
<div id="topnavi-box">
    <div id="topnavi">
        <div id="topnavi-left"><!-- 四条广告，固定为8字-->
        <?php if(is_array($tads1)): foreach($tads1 as $key=>$v): ?><a href="<?php echo ($v["href"]); ?>" target="_blank"><?php echo ($v["title"]); ?></a><?php endforeach; endif; ?>       
        </div>
        <div id="topnavi-right">
            <div class="rrr"><a class="aaa" href="javascript:void(0);" onclick="SetHome(this,'http://www.linsanity.cc/')">设为首页</a></div>
            <div class="rrr"><a class="aaa" href="javascript:void(0);" onclick="AddFavorite('疯狂网首页','http://www.linsanity.cc/')">加入收藏</a></div>
            <div id="navigator" class="rrr">
                <a class="aaa" href="#">网站导航</a>
                <!-- 网站导航隐藏框 -->
                <div id="navigator-detail" style="display:none;">
                    <div id="oneRow" class="clear">
                        <div class="row-title">疯狂系列</div>
                        <div class="row-detail">
                            <?php if(is_array($cateInfo)): foreach($cateInfo as $key=>$v): if(($v["title"] == '林疯狂') OR ($v["title"] == '赛季经典')): else: ?>
                                <a class="bbb" href="/Linsanity.cc-TP/Home/Detail/detail/id/<?php echo ($v["id"]); ?>"><?php echo ($v["title"]); ?></a><?php endif; endforeach; endif; ?> 
                        </div>
                    </div>
                    <div id="twoRow" class="clear">
                        <div class="row-title">比赛系列</div>
                        <div class="row-detail">
                            <?php if(is_array($cateInfo)): foreach($cateInfo as $key=>$v): if(($v["title"] == '林疯狂') OR ($v["title"] == '赛季经典')): ?><a class="bbb" href="/Linsanity.cc-TP/Home/Detail/games/id/<?php echo ($v["id"]); ?>"><?php echo ($v["title"]); ?></a>
                            <?php else: endif; endforeach; endif; ?> 
                        </div>
                    </div>

                </div>
                <!-- 网站导航隐藏框 --> 
            </div>
            <div id="navi-time"><?php echo ($time); ?></div>
        </div>      
    </div>

    
</div>

<!-- 顶部小导航结束 -->

<!-- LOGO-搜索部分开始 -->
<div id="logo-box">
    <div id="logo" class="clear">
        <div id="logo-img"><a href="/Linsanity.cc-TP/index.php"><img src="/Linsanity.cc-TP/Public/images/logo.jpg" title="疯狂网" style="border:none" /></a></div>
        <div id="search">
            <input type="text" id='inp' placeholder='请输入搜索内容'/><input type="submit" id='but' value="" onclick="window.open('http://www.baidu.com/')" />
        </div>
        <div id="weather">
            <iframe allowtransparency="true" frameborder="0" width="180" height="36" scrolling="no" src="http://tianqi.2345.com/plugin/widget/index.htm?s=3&z=2&t=0&v=0&d=1&bd=0&k=000000&f=ff8000&q=1&e=1&a=1&c=54511&w=180&h=36&align=center"></iframe>
        </div>
        <div id="logo-ad">
            <div id="img1"><a href="http://jubao.china.cn:13225/reportform.do" target="_blank"><img src="/Linsanity.cc-TP/Public/images/bkjb.png" alt="" /></a></div>
            <div id="img2"><a href="/Linsanity.cc-TP/Home/Temp/hxjz" target="_blank"><img src="/Linsanity.cc-TP/Public/images/hxjzg.jpg" alt="" /></a></div>
        </div>
    </div>
</div>
<!-- LOGO-搜索部分结束 -->

<!-- 导航条开始 -->
<div id="navibar-box">
    <div id="navibar">
        <ul id="navibar-left" class="clear">
            <li><a href="/Linsanity.cc-TP/index.php">首页</a></li>
            <?php if(is_array($cateInfo)): foreach($cateInfo as $key=>$v): if(($v["title"] == '林疯狂') OR ($v["title"] == '赛季经典')): ?><li><a href="/Linsanity.cc-TP/Home/Detail/games/id/<?php echo ($v["id"]); ?>"><?php echo ($v["title"]); ?></a></li>
            <?php else: ?>
            <li><a href="/Linsanity.cc-TP/Home/Detail/detail/id/<?php echo ($v["id"]); ?>"><?php echo ($v["title"]); ?></a></li><?php endif; endforeach; endif; ?>
        </ul>       
    </div>
</div>
<!-- 导航条结束 -->