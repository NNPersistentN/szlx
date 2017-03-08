<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><?php include template("content","header"); ?>
<!-- <?php echo $content;?> -->
<div class="section" style="padding-bottom: 0">
    <div class="section-top"><span><a href="<?php echo siteurl($siteid);?>">首页</a></span>〉<span>热门问题详情</span></div>
    <div class="section-about rm">
        <h6>用户体验设计、交互设计它们之间有什么区别...</h6>
        
        <?php echo $content;?>
        <div class="fengxiang rm">
            <div class="fengxiang-left">
                <span>分享到 : </span>
                <a href="javascript:"></a>
                <a href="javascript:"></a>
                <a href="javascript:"></a>
                <a href="javascript:"></a>
                <a href="javascript:"></a>
            </div>
            <div class="fengxiang-right">
                <a href="javascript:"></a>
                <a href="javascript:"></a>
            </div>
        </div>
    </div>
    <div class="paging">
        <a href="<?php echo $previous_page['url'];?>" class="paging-top">
            <span>上一篇:</span>
            <span>平面设计的发展前景如何？</span>
        </a><br>
        <a href="<?php echo $next_page['url'];?>" class="paging-bottom">
            <span>下一篇:</span>
            <span>交互设计、UI设计及平面设计的区别在何处？</span>
        </a>
    </div>
    <div class="section-about">
        <h6>相关问题</h6>
        <p class="gaishu rm"></p>
        <ul class="jy-uls rm">
            <li class="list">
                <div></div>
                <p><a href="">设计师的六大"瓶颈期"及其应对方法...</a></p>
            </li>
        </ul>
        <ul class="jy-uls rm">
            <li class="list">
                <div></div>
                <p><a href="">平面设计的发展前景如何？</a></p>
            </li>
        </ul>
        <ul class="jy-uls rm">
            <li class="list">
                <div></div>
                <p><a href="">交互设计、UI设计以及平面设计的区别在何处？</a></p>
            </li>
        </ul>
        <ul class="jy-uls rm">
            <li class="list">
                <div></div>
                <p><a href="">每个苦逼的设计师背后都有一群指点江山的大胜......</a></p>
            </li>
        </ul>
    </div>

</div>


<?php include template("content","footer"); ?>