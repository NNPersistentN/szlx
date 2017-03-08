<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><?php include template("content","header"); ?>
<div class="section" style="padding-bottom: 0">
    <div class="section-top"><span><a href="<?php echo siteurl($siteid);?>">首页</a></span>〉<span><?php echo catpos($catid);?></span></div>
    <div class="section-about">
        <h6></h6>
        <p style="border:none" class="gaishu"><?php echo $content;?></p>
    </div>

</div>
<?php include template("content","footer"); ?>