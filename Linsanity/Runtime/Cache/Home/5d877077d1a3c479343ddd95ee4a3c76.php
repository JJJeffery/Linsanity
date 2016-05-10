<?php if (!defined('THINK_PATH')) exit();?>
<div id="content">
    <div id="ad-box">
        <!-- 左侧动态图片开始 -->
        <div id="focus-content">
            <ul id="focus-image">
                <?php if(is_array($iadsC1)): foreach($iadsC1 as $key=>$v): ?><li><a href="<?php echo ($v["href"]); ?>" target="_blank"><img src="/Linsanity.cc-TP/Uploads/Imageads/<?php echo ($v["imagepath"]); echo ($v["imagename"]); ?>" width="400" height="300"/></a></li><?php endforeach; endif; ?>

            </ul>
            <ol id="focus-number">            
            </ol>
        </div>
        <!-- 左侧动态图片结束 -->

        <!-- 图片广告 130X90型，最多6条-->
        <div id="image-ad" class="clear">

        <?php if(is_array($iadsB2)): foreach($iadsB2 as $key=>$v): ?><div class="iadbox">
                <p><a href="<?php echo ($v["href"]); ?>" target="_blank"><img src="/Linsanity.cc-TP/Uploads/Imageads/<?php echo ($v["imagepath"]); echo ($v["imagename"]); ?>" width="130" height="90"/></a></p>
                <span class='pro-title'><?php echo ($v["title"]); ?></span>
            </div><?php endforeach; endif; ?>
            
        </div>
    </div>

    <!-- 右侧页面内容开始 -->
    <div id="fk-cate-title">
        <div id="fk-Title"><?php echo ($cateInfo["title"]); ?></div>

        <?php if(is_array($gamesInfo)): foreach($gamesInfo as $key=>$v): ?><li id="videos"><a href="<?php echo ($v["href"]); ?>" target="_blank"><?php echo ($v["title"]); ?></a><span id="pubtime"><?php echo ($v["dates"]); ?></span></li><?php endforeach; endif; ?>

        <div id="page"><?php echo ($pageShow); ?></div>
    </div>
    <!-- 右侧页面内容结束 -->
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
<a href="#" title="返回顶部" id="gotop"></a>
</body>
</html>