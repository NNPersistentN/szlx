<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><?php include template("content","header"); ?>

<!--内容-->

<div class="section" style="padding-bottom: 0">
    <div class="section-top"><span><a href="<?php echo siteurl($siteid);?>">首页</a></span>〉<span><?php echo catpos($catid);?></span></div>    
    <div class="section-about" style="margin-bottom:0;">
        <h6>概述</h6>
        
        <div class="wenhua xq">
            <div style="width:140px;overflow:hidden;" class="wenhua-left"><img style="height:100%;" src="<?php echo $r['thumb'];?>" alt=""></div>
            <div class="wenhua-right">
                <h5><?php echo $r['title'];?> <span>/精英学员</span></h5>
              
                <p><span>工作地点: </span><?php echo $r['copyfrom'];?></p>
                <p><span>应聘职位: </span><?php echo $r['zhiwei'];?></p>
            </div>
        </div>
    </div>
    <div class="section-about">
        <h6>学员简介</h6>
        <?php echo $content;?>
    </div>

</div>


<?php include template("content","footer"); ?>