<?php if (!defined('THINK_PATH')) exit();?>
<!-- 广告区域1 -->
<div id="ad1">
    <ul class='clear'><!-- 文字广告 -->
        <?php if(is_array($tads2)): foreach($tads2 as $key=>$v): ?><li><a href="<?php echo ($v["href"]); ?>" target="_blank"><?php echo ($v["title"]); ?></a></li> <!-- 字数8个字 --><?php endforeach; endif; ?>
    </ul>
    <?php if(is_array($iadsA1)): foreach($iadsA1 as $key=>$v): ?><div id="imgad1"><a href="<?php echo ($v["href"]); ?>" target="_blank"><img src="/Linsanity.cc-TP/Uploads/Imageads/<?php echo ($v["imagepath"]); echo ($v["imagename"]); ?>" width="1000" height="90" style="border:none"/></a></div> <!-- 图片广告 --><?php endforeach; endif; ?>
    <ul class='clear'><!-- 文字广告 -->
        <?php if(is_array($tads3)): foreach($tads3 as $key=>$v): ?><li><a href="<?php echo ($v["href"]); ?>" target="_blank"><?php echo ($v["title"]); ?></a></li> <!-- 字数8个字 --><?php endforeach; endif; ?>
    </ul>   
</div>


<!-- 正文内容1 -->
<div id="content1">
    <div id="fkVideo">
        <div class="fkTitle"><span>疯狂视频</span><a href="/Linsanity.cc-TP/home/Detail/detail/id/1" target="_blank">更多&gt;&gt;</a></div>
        <?php if(is_array($newsA)): foreach($newsA as $key=>$v): if($v["isvideo"] == 1): ?><li class="videos"><a href="<?php echo ($v["href"]); ?>" target="_blank"><?php echo ($v["title"]); ?></a></li> <!-- 最多18个中文字////最多14条视频-->
        <?php else: ?>
        <li class="texts"><a href="<?php echo ($v["href"]); ?>" target="_blank"><?php echo ($v["title"]); ?></a></li> <!-- 最多18个中文字////最多14条视频--><?php endif; endforeach; endif; ?>
    </div>
    <div id="fkNews">
        <div class="fkTitle"><span>疯狂新闻</span><a href="/Linsanity.cc-TP/home/Detail/detail/id/2" target="_blank">更多&gt;&gt;</a></div>
        <?php if(is_array($newsB)): foreach($newsB as $key=>$v): if($v["isvideo"] == 1): ?><li class="videos"><a href="<?php echo ($v["href"]); ?>" target="_blank"><?php echo ($v["title"]); ?></a></li> <!-- 最多18个中文字////最多14条视频-->
        <?php else: ?>
        <li class="texts"><a href="<?php echo ($v["href"]); ?>" target="_blank"><?php echo ($v["title"]); ?></a></li> <!-- 最多18个中文字////最多14条视频--><?php endif; endforeach; endif; ?>
    
    </div>
    <div id="fkSports">
        <div class="fkTitle"><span>疯狂体育</span><a href="/Linsanity.cc-TP/home/Detail/detail/id/4" target="_blank">更多&gt;&gt;</a></div>
        <?php if(is_array($newsC)): foreach($newsC as $key=>$v): if($v["isvideo"] == 1): ?><li class="videos"><a href="<?php echo ($v["href"]); ?>" target="_blank"><?php echo ($v["title"]); ?></a></li> <!-- 最多18个中文字////最多14条视频-->
        <?php else: ?>
        <li class="texts"><a href="<?php echo ($v["href"]); ?>" target="_blank"><?php echo ($v["title"]); ?></a></li> <!-- 最多18个中文字////最多14条视频--><?php endif; endforeach; endif; ?>
    </div>
</div>


<!-- 广告区域2 -->
<div id="ad2">
    <div id="imgad2" class="clear"><!-- 图片广告 130X90型-->
        <?php if(is_array($iadsB1)): foreach($iadsB1 as $key=>$v): ?><div class="ad2-box"><!-- 最多7条 -->
            <p><a href="<?php echo ($v["href"]); ?>" target="_blank"><img src="./Uploads/Imageads/<?php echo ($v["imagepath"]); echo ($v["imagename"]); ?>" width="130" height="90"/></a></p>
            <span class='ad2-title'><?php echo ($v["title"]); ?></span>
        </div><div class="ad2-space"></div><?php endforeach; endif; ?>

    </div> 
    <ul class='clear'><!-- 文字广告 -->
        <?php if(is_array($tads4)): foreach($tads4 as $key=>$v): ?><li><a href="<?php echo ($v["href"]); ?>" target="_blank"><?php echo ($v["title"]); ?></a></li> <!-- 字数8个字 --><?php endforeach; endif; ?>
    </ul>      
    <ul class='clear'><!-- 文字广告 -->
        <?php if(is_array($tads5)): foreach($tads5 as $key=>$v): ?><li><a href="<?php echo ($v["href"]); ?>" target="_blank"><?php echo ($v["title"]); ?></a></li> <!-- 字数8个字 --><?php endforeach; endif; ?>
    </ul>   
</div>

<!-- 正文内容2 -->
<div id="content2">
    <div id="fkFuns">
        <div class="fkTitle"><span>疯狂趣事</span><a href="/Linsanity.cc-TP/home/Detail/detail/id/3" target="_blank">更多&gt;&gt;</a></div>
        <?php if(is_array($newsD)): foreach($newsD as $key=>$v): if($v["isvideo"] == 1): ?><li class="videos"><a href="<?php echo ($v["href"]); ?>" target="_blank"><?php echo ($v["title"]); ?></a></li> <!-- 最多18个中文字////最多14条视频-->
        <?php else: ?>
        <li class="texts"><a href="<?php echo ($v["href"]); ?>" target="_blank"><?php echo ($v["title"]); ?></a></li> <!-- 最多18个中文字////最多14条视频--><?php endif; endforeach; endif; ?>
    </div>
    <div id="fkTech">
        <div class="fkTitle"><span>疯狂科技</span><a href="/Linsanity.cc-TP/home/Detail/detail/id/5" target="_blank">更多&gt;&gt;</a></div>
        <?php if(is_array($newsE)): foreach($newsE as $key=>$v): if($v["isvideo"] == 1): ?><li class="videos"><a href="<?php echo ($v["href"]); ?>" target="_blank"><?php echo ($v["title"]); ?></a></li> <!-- 最多18个中文字////最多14条视频-->
        <?php else: ?>
        <li class="texts"><a href="<?php echo ($v["href"]); ?>" target="_blank"><?php echo ($v["title"]); ?></a></li> <!-- 最多18个中文字////最多14条视频--><?php endif; endforeach; endif; ?>
    </div>
    <div id="fkHappy">
        <div class="fkTitle"><span>疯狂娱乐</span><a href="/Linsanity.cc-TP/home/Detail/detail/id/6" target="_blank">更多&gt;&gt;</a></div>
        <?php if(is_array($newsF)): foreach($newsF as $key=>$v): if($v["isvideo"] == 1): ?><li class="videos"><a href="<?php echo ($v["href"]); ?>" target="_blank"><?php echo ($v["title"]); ?></a></li> <!-- 最多18个中文字////最多14条视频-->
        <?php else: ?>
        <li class="texts"><a href="<?php echo ($v["href"]); ?>" target="_blank"><?php echo ($v["title"]); ?></a></li> <!-- 最多18个中文字////最多14条视频--><?php endif; endforeach; endif; ?>
    </div>
</div>

<!-- 广告区域3 -->
<div id="ad1">
    <ul class='clear'><!-- 文字广告 -->
        <?php if(is_array($tads6)): foreach($tads6 as $key=>$v): ?><li><a href="<?php echo ($v["href"]); ?>" target="_blank"><?php echo ($v["title"]); ?></a></li> <!-- 字数8个字 --><?php endforeach; endif; ?>
    </ul>
    <?php if(is_array($iadsA2)): foreach($iadsA2 as $key=>$v): ?><!-- 图片广告 -->  
    <div id="imgad1"><a href="<?php echo ($v["href"]); ?>" target="_blank"><img src="./Uploads/Imageads/<?php echo ($v["imagepath"]); echo ($v["imagename"]); ?>" width="1000" height="90" style="border:none"/></a></div><?php endforeach; endif; ?>  
    <ul class='clear'><!-- 文字广告 -->
        <?php if(is_array($tads7)): foreach($tads7 as $key=>$v): ?><li><a href="<?php echo ($v["href"]); ?>" target="_blank"><?php echo ($v["title"]); ?></a></li> <!-- 字数8个字 --><?php endforeach; endif; ?>
    </ul>   
</div>

<!-- 正文内容3 -->
<div id="content3">
    <div id="fkLinsanity">
        <div class="fkTitle"><span>林疯狂</span><a href="/Linsanity.cc-TP/home/Detail/games/id/7" target="_blank">更多&gt;&gt;</a></div>
        <?php if(is_array($gamesG)): foreach($gamesG as $key=>$v): ?><li class="videos"><a href="<?php echo ($v["href"]); ?>" target="_blank"><?php echo ($v["title"]); ?></a></li> <!-- 最多18个中文字////最多14条视频--><?php endforeach; endif; ?>
    </div>
    <div id="fkClassic">
        <div class="fkTitle"><span>赛季经典</span><a href="/Linsanity.cc-TP/home/Detail/games/id/8" target="_blank">更多&gt;&gt;</a></div>
        <?php if(is_array($gamesH)): foreach($gamesH as $key=>$v): ?><li class="videos"><a href="<?php echo ($v["href"]); ?>" target="_blank"><?php echo ($v["title"]); ?></a></li> <!-- 最多18个中文字////最多14条视频--><?php endforeach; endif; ?>
    </div>
    <div id="fkAbout">
        <div class="fkTitle"><span>关于疯狂</span><a href="/Linsanity.cc-TP/home/Detail/detail/id/9" target="_blank">更多&gt;&gt;</a></div>
        <?php if(is_array($newsI)): foreach($newsI as $key=>$v): if($v["isvideo"] == 1): ?><li class="videos"><a href="<?php echo ($v["href"]); ?>" target="_blank"><?php echo ($v["title"]); ?></a></li> <!-- 最多18个中文字////最多14条视频-->
        <?php else: ?>
        <li class="texts"><a href="<?php echo ($v["href"]); ?>" target="_blank"><?php echo ($v["title"]); ?></a></li> <!-- 最多18个中文字////最多14条视频--><?php endif; endforeach; endif; ?>
    </div>
</div>

<!-- 广告区域4 -->
<div id="ad1">
    <?php if(is_array($iadsA3)): foreach($iadsA3 as $key=>$v): ?><!-- 图片广告 -->  
    <div id="imgad1"><a href="<?php echo ($v["href"]); ?>" target="_blank"><img src="./Uploads/Imageads/<?php echo ($v["imagepath"]); echo ($v["imagename"]); ?>" width="1000" height="90" style="border:none"/></a></div><?php endforeach; endif; ?>  
</div>

<!-- 网页尾部开始 -->
<div id="footer">
    <div class="footer-iv">
        <p class="footer-ivtext">  <!-- 友情链接第一行 -->
        <?php if(is_array($friendlinkInfo1)): foreach($friendlinkInfo1 as $key=>$v): ?>&nbsp;<a href="<?php echo ($v["href"]); ?>" target="_blank"><?php echo ($v["title"]); ?></a>&nbsp;<?php endforeach; endif; ?>    
        </p>
        <p class="footer-ivtext">  <!-- 友情链接第二行 -->
        <?php if(is_array($friendlinkInfo2)): foreach($friendlinkInfo2 as $key=>$v): ?>&nbsp;<a href="<?php echo ($v["href"]); ?>" target="_blank"><?php echo ($v["title"]); ?></a>&nbsp;<?php endforeach; endif; ?>           
        </p>
    </div>
    <?php if(is_array($footInfo)): foreach($footInfo as $key=>$v): ?><p class="footer-text"><?php echo ($v["content"]); ?></p><?php endforeach; endif; ?>
    <p class="footer-text"><script type="text/javascript">var cnzz_protocol = (("https:" == document.location.protocol) ? " https://" : " http://");document.write(unescape("%3Cspanid='cnzz_stat_icon_1253899947'%3E%3C/span%3E%3Cscript src='" + cnzz_protocol + "s4.cnzz.com/stat.php%3Fid%3D1253899947%26online%3D2'type='text/javascript'%3E%3C/script%3E"));</script></p>
</div>
<!-- 网页尾部结束 -->

<!-- 返回顶部 -->
<a href="#" title="返回顶部" id="index-gotop"></a>

</body>
</html>